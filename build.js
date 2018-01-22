var glob = require('glob');
var fs = require('fs');
var path = require('path');
var nodeWatch = require('node-watch');
var commandLineArgs = require('command-line-args');
var colors = require('colors');
var livereload = require('livereload');


var options = commandLineArgs([
    { name: 'watch', alias: 'w', type: Boolean },
]);

function processPage(pageFullPath) {
    var pageDirPath = path.dirname(pageFullPath);

    var pageContents = fs.readFileSync(pageFullPath, "utf8");
    while (true) {
        var regex = /([ \t]*)<!--\s*include\("(.+)"\)\s*-->/g;
        var match = regex.exec(pageContents);
        if (match === null) {
            break;
        }
        var whitespace = match[1];
        //get the filename from the match
        var importFilename = match[2];
        //the import filename is relative to the pagePath

        var importFilePath = path.join(pageDirPath, importFilename);

        console.log(('   Importing ' + importFilename).cyan);
        //get the import page contents 
        var importPageContents = processPage(importFilePath);
        //insert the whitespace at the beginning of each line
        var pageLines = importPageContents.split('\r\n');
        importPageContents = whitespace + pageLines.join('\r\n' + whitespace);
        pageContents =
            pageContents.substring(0, match.index) +
            importPageContents +
            pageContents.substring(match.index + match[0].length);
    }
    //write the file contents
    return pageContents;
}


function build() {
    console.log("Building.".yellow.bold);
    //get every root-level html page from src
    var pagePaths = glob.sync('src/*.html');
    for (var pagePath of pagePaths) {
        console.log(("Processing " + pagePath).blue);
        var pageFullPath = path.resolve(pagePath);

        var pageContents = processPage(pageFullPath);
        //write the page to the root directory
        var filename = path.basename(pageFullPath);
        fs.writeFileSync(path.join(__dirname, 'docs', filename), pageContents, { flag: 'w' });
    }
    console.log(("Build complete: " + new Date().toISOString() + '.').green.bold);
}
var server;
function watch() {
    build();
    console.log("Watching files")
    nodeWatch('src', { recursive: true }, function (evt, name) {
        console.log((name + " changed.").yellow);
        build();
    });

    server = livereload.createServer();
    server.watch(__dirname + "/docs");
}

if (options.watch) {
    watch();
} else {
    build();
}