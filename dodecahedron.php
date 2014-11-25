<!DOCTYPE html>
<html>
    <head>
        <title>Dodecaedro</title>
       <?php include_once 'php/header.php'; ?>
    </head>
    <body>
        <?php include_once 'php/mainTitle.php'; ?>
        <?php include_once 'php/tabbedMenu.php'; ?>
    <x3d width="600px" height="400px">
        <scene>
            <Transform DEF="PolyRotate" 
                       scale="1.5 1.5 1.5">
                <Shape>
                    <Appearance>
                        <material id="color" diffuseColor="1 1 1"></material>
                    </Appearance>
                    <IndexedFaceSet solid="true"
                                    coordIndex="4 7 8 -1 5 6 7 -1 4 5 7 -1 6 0 1 -1 5 10 0 -1 6 5 0 -1 6 3 7 -1 1 2 3 -1 6 1 3 -1 9 4 11 -1 10 5 4 -1 9 10 4 -1 12 9 13 -1 0 10 9 -1 12 0 9 -1 14 0 12 -1 2 1 0 -1 14 2 0 -1 17 3 15 -1 8 7 3 -1 17 8 3 -1 16 8 17 -1 11 4 8 -1 16 11 8 -1 18 11 16 -1 13 9 11 -1 18 13 11 -1 19 13 18 -1 14 12 13 -1 19 14 13 -1 15 14 19 -1 3 2 14 -1 15 3 14 -1 16 19 18 -1 17 15 19 -1 16 17 19 -1 "
                                    >
                        <Coordinate DEF="coords_ME_Icosphere"
                                    point="0.372675 1.146896 -1.578738 1.205928 0.000032 -1.578733 1.951369 -0.000091 -0.372722 1.578729 -1.146950 0.372568 -1.578557 -1.147032 -0.372721 -0.975615 -0.708974 -1.578612 0.372613 -1.147025 -1.578613 0.602901 -1.855828 -0.372721 -0.602974 -1.855828 0.372577 -1.578712 1.146881 -0.372721 -0.975763 0.708833 -1.578612 -1.951349 0.000032 0.372585 0.602901 1.855891 -0.372721 -0.602974 1.855891 0.372577 1.578729 1.147013 0.372568 0.975675 -0.708974 1.578684 -1.206027 -0.000084 1.578684 -0.372779 -1.146951 1.578685 -0.372779 1.147014 1.578686 0.975609 0.708833 1.578817 "
                                    />
                    </IndexedFaceSet>
                </Shape>
            </Transform>
            <!-- change enabled attribute to perform initial Polyhedra state (idle or rotating) --> 
            <TimeSensor id="ts" DEF="Clock" cycleInterval="2" loop="true" enabled="false"></TimeSensor>
            <OrientationInterpolator DEF="PolyPath" key="0 0.25 0.5 0.75 1" keyValue="0 1 0 0  0 1 0 1.57079  0 1 0 3.14159  0 1 0 4.71239  0 1 0 6.28317"></OrientationInterpolator>
            <ROUTE fromNode="Clock" fromField="fraction_changed" toNode="PolyPath" toField="set_fraction"></ROUTE>
            <ROUTE fromNode="PolyPath" fromField="value_changed" toNode="PolyRotate" toField="set_rotation"></ROUTE> 
        </scene>
    </x3d>

    <!-- Change Poliherda color Button using color picker -->
    <button id="picker" type="button" class="btn btn-warning">Cambia colore</button>

    <!-- Show Polihedra information Button triggering modal window -->
    <button  data-toggle="modal" class="btn btn-warning" data-target="#myModal">
        Informazioni
    </button>

    <!-- toggle texture on the Polyhedra TODO spinner with various textures to choose -->
    <button  id="texture" class="btn btn-warning">
        texture
    </button>

    <!-- Toggle Rotation -->
    <button  type="button" id="yRotation" class="btn btn-warning" data-toggle="button" aria-pressed="false">
        rotazione
    </button>

    <!-- Modal -->
    <div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                            class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel"></h4>
                </div>
                <div id="modal-div-content" class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            //set color picker 
            $("#picker").colpick({
                layout: "hex",
                submit: false,
                colorScheme: "dark",
                onChange: function (hsb, hex, rgb, el, bySetColor) {
                    var r = rgb.r / 255;
                    var g = rgb.g / 255;
                    var b = rgb.b / 255;
                    var color = r + " " + g + " " + b;
                    if (!$("#color").length) {
                        $("ImageTexture").replaceWith('<material id="color" diffuseColor="' + color + '"></material>')
                    } else
                        document.getElementById("color").setAttribute("diffuseColor", color);

                }
            });
            //set modal window title
            var title = $(document).find("title").text();
            $("#myModalLabel").text(title);

            //change texture on button click
            $("#texture").on("click", function () {
                $("material").replaceWith('<ImageTexture  url="media/carpet.jpg"><ImageTexture/>');

            });

            //toggle rotation
            $("#yRotation").on("click", function () {
                var state = $("#yRotation").attr("aria-pressed");
                state = state === "true" ? "false" : "true";
                $("#ts").prop("enabled" , state);
            });
        });
    </script>
</body>
</html>