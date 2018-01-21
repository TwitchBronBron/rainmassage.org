var glob = require('glob');
var fs = require('fs');
var path = require('path');

//get every root-level html page from src
var pagePaths = glob.sync('src/*.html');
for (var pagePath of pagePaths) {
    console.log("Processing " + pagePath);
    var pageFullPath = path.resolve(pagePath);
    var pageContents = processPage(pageFullPath);
    //write the page to the root directory
    var filename = path.basename(pageFullPath);
    fs.writeFileSync(filename, pageContents, { flag: 'w' });
}

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

        console.log('   Importing ' + importFilename);
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