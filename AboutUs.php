<?php
$title = "Rain Massage: About Us";
//head includes
ob_start();
?>
<style type="text/css">
    #aboutUsLink{
        color:grey !important;
        text-decoration: underline !important;
        border-bottom:1px solid grey;
    }
</style>

<?php
$headContents = ob_get_contents();
ob_end_clean();
//body 
ob_start();
?>

<div id="bio" >
    <img src="images/madison.jpg" style="float:left;margin-right:20px;"/>
    <h1 >About Rain Massage</h1>
    <p style="float:left;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod justo id nulla semper vitae pulvinar nisi volutpat. Etiam cursus purus tellus, at posuere risus. Aliquam non erat a nibh faucibus faucibus. In auctor varius nisi nec gravida. Sed leo velit, auctor et mollis sit amet, euismod a urna. Duis vulputate tincidunt augue quis fermentum. Nullam hendrerit vestibulum nibh ut rutrum. Quisque ac gravida justo. Etiam tincidunt, nulla eget semper elementum, erat massa suscipit odio, id posuere sapien diam in nibh. Nam a ipsum urna, a gravida libero. Nulla facilisi. Ut auctor erat vitae dui venenatis suscipit.</p>

    <p>Fusce nibh mi, sodales sed suscipit laoreet, varius a erat. Praesent vel nibh ut nisl volutpat tristique. Etiam libero libero, posuere sit amet viverra non, fermentum sed lacus. Vivamus consectetur quam sit amet augue eleifend eu dapibus mi placerat. Cras euismod ultricies ante, et consequat purus tincidunt at. Morbi vitae felis justo. In non sapien nisl, in faucibus nisi. Quisque felis diam, volutpat ac euismod ut, volutpat quis felis. Ut ipsum mi, sagittis eget fringilla eget, sollicitudin eu nisl. Suspendisse potenti. Morbi pellentesque, purus et sodales mattis, lacus erat porta augue, vitae hendrerit lacus lorem et metus. Vivamus quis velit et ipsum venenatis rhoncus. Ut vitae massa elementum augue ornare porta at dictum ligula. Proin egestas neque eu sapien egestas et iaculis turpis dapibus. Nam aliquet, tellus nec condimentum consectetur, urna neque dapibus quam, ut vehicula urna metus id urna. Curabitur dapibus iaculis fermentum.</p>

    <p>Mauris ultrices vehicula sapien, eget consectetur nibh feugiat non. In nec adipiscing dolor. Sed quis leo odio. Quisque pellentesque lorem vitae odio auctor suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis consequat nisl ut ante egestas non consectetur lacus posuere. Duis dignissim magna sed metus commodo rhoncus. Mauris ultricies sapien ut lectus scelerisque dapibus. Donec dictum vestibulum magna, at egestas quam commodo sit amet. Sed non auctor ipsum. Proin quis nulla eu nisl tristique consequat sit amet eu mauris. In hac habitasse platea dictumst.</p>

    <p>Cras sed purus mauris, at suscipit nibh. Maecenas egestas justo id tellus mattis vel ullamcorper dui porttitor. Morbi scelerisque sagittis vehicula. Praesent vel lobortis magna. Cras sed odio vitae quam dapibus pharetra congue ut velit. Aenean lobortis consequat orci, vitae placerat ipsum pretium cursus. Nunc cursus sapien in tellus volutpat quis luctus odio ullamcorper. Curabitur tempus ipsum velit. In mi lacus, rutrum sit amet bibendum id, blandit eget nunc. Donec a libero sem. Integer nisi lacus, tempor ac faucibus nec, egestas sit amet eros. Donec eget neque volutpat purus commodo blandit sit amet quis neque. Vestibulum dignissim commodo lorem nec viverra. Cras urna massa, porttitor at vehicula ac, semper vitae urna. Mauris lacus risus, eleifend ut adipiscing vitae, posuere eu libero.</p>

    <p>Aliquam malesuada felis non urna viverra fermentum. Etiam dictum, nulla nec tristique congue, lorem turpis luctus augue, in tempor purus justo et dolor. Nulla non condimentum tortor. Cras sed leo eget augue bibendum imperdiet eget non lectus. Praesent at lobortis tortor. Ut congue cursus tempus. Donec eu elit vitae metus varius pharetra. Fusce diam leo, viverra eget blandit non, bibendum a risus. Mauris orci eros, ultrices eu bibendum vitae, lacinia sed lacus. Aenean diam lorem, pretium ut luctus a, accumsan vitae est. Quisque suscipit tellus ipsum, eget sollicitudin turpis. Suspendisse a mauris in orci porta aliquam. Ut vitae felis quis neque ultrices porta. Aenean nisl eros, rhoncus non vehicula sed, gravida eu nulla. Vestibulum a augue et purus rhoncus laoreet et vitae nunc. Maecenas interdum, nibh vel ultrices pharetra, metus arcu luctus mi, sit amet facilisis nunc arcu sit amet leo.</p>
</div>

<?php
$bodyContents = ob_get_contents();
ob_end_clean();
//apply the layout
include("master.php");
?>