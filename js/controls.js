$(document).ready(function () {
    var tab;
    
    $('#aThetra').click(function(){
       $('#x3dContainer').css({"display" : "block"});
       $('#controlsContainer').css({"display" : "block"});
       $('indexedfaceset').attr('coordindex' , '2 1 3 -1 0 1 2 -1 3 1 0 -1 0 2 3 -1 ');
       $('coordinate').attr('point' , '0.000000 1.000000 -0.707000 0.000000 0.000000 0.707000 0.866025 -0.500000 -0.707000 -0.866025 -0.500000 -0.707000 ');
       $('#mainTrasform').attr('scale' , '3.2 3.2 3.2');
       $('#mainTrasform').attr('rotation' , '1 0 0 1.5708');
       $('#adjustTransform').attr('rotation' , '0 1 0 -0.15');
       $('#adjustTransform').attr('translation' , '0 -0.5 0');
    });
    
    $('#aEsa').click(function(){
        $('#x3dContainer').css({"display" : "block"});
        $('#controlsContainer').css({"display" : "block"});
        $('indexedfaceset').attr('coordindex' , '1 0 4 5 -1 5 6 2 1 -1 6 7 3 2 -1 0 3 7 4 -1 0 1 2 3 -1 7 6 5 4 -1');
        $('coordinate').attr('point' , '-1 -1 -1 -1 1 -1 1 1 -1 1 -1 -1 -1 -1 1 -1 1 1 1 1 1 1 -1 1');
        $('#mainTrasform').attr('scale' , '2 2 2');
        $('#mainTrasform').attr('rotation', '0 1 0 0.1');
        $('#adjustTransform').attr('rotation' , '0 1 0 0');
       $('#adjustTransform').attr('translation' , '0 0 0');
    });
    
    $('#aOtta').click(function(){
        $('#x3dContainer').css({"display" : "block"});
        $('#controlsContainer').css({"display" : "block"});
        $('indexedfaceset').attr('coordindex' , '0 1 2 -1 2 3 0 -1 3 4 0 -1 4 1 0 -1 2 1 5 -1 2 5 3 -1 3 5 4 -1 4 5 1 -1');
        $('coordinate').attr('point' , '0 0 -1 0 -1 0 -1 0 0 0 1 0 1 0 0 0 0 1');
        $('#mainTrasform').attr('scale' , '3 3 3');
        $('#mainTrasform').attr('rotation' , '0 1 0 0.1');
        $('#adjustTransform').attr('rotation' , '0 1 0 0');
       $('#adjustTransform').attr('translation' , '0 0 0');
    });
    
    $('#aDodeca').click(function(){
        $('#x3dContainer').css({"display" : "block"});
        $('#controlsContainer').css({"display" : "block"});
        $('indexedfaceset').attr('coordindex' , '4 7 8 -1 5 6 7 -1 4 5 7 -1 6 0 1 -1 5 10 0 -1 6 5 0 -1 6 3 7 -1 1 2 3 -1 6 1 3 -1 9 4 11 -1 10 5 4 -1 9 10 4 -1 12 9 13 -1 0 10 9 -1 12 0 9 -1 14 0 12 -1 2 1 0 -1 14 2 0 -1 17 3 15 -1 8 7 3 -1 17 8 3 -1 16 8 17 -1 11 4 8 -1 16 11 8 -1 18 11 16 -1 13 9 11 -1 18 13 11 -1 19 13 18 -1 14 12 13 -1 19 14 13 -1 15 14 19 -1 3 2 14 -1 15 3 14 -1 16 19 18 -1 17 15 19 -1 16 17 19 -1 ');
        $('coordinate').attr('point' , '0.372675 1.146896 -1.578738 1.205928 0.000032 -1.578733 1.951369 -0.000091 -0.372722 1.578729 -1.146950 0.372568 -1.578557 -1.147032 -0.372721 -0.975615 -0.708974 -1.578612 0.372613 -1.147025 -1.578613 0.602901 -1.855828 -0.372721 -0.602974 -1.855828 0.372577 -1.578712 1.146881 -0.372721 -0.975763 0.708833 -1.578612 -1.951349 0.000032 0.372585 0.602901 1.855891 -0.372721 -0.602974 1.855891 0.372577 1.578729 1.147013 0.372568 0.975675 -0.708974 1.578684 -1.206027 -0.000084 1.578684 -0.372779 -1.146951 1.578685 -0.372779 1.147014 1.578686 0.975609 0.708833 1.578817 ');
        $('#mainTrasform').attr('scale' , '1.5 1.5 1.5');
        $('#mainTrasform').attr('rotation', '0 0 0 0');
        $('#adjustTransform').attr('rotation' , '0 1 0 -0.453');
       $('#adjustTransform').attr('translation' , '0 0 0');
    });
    
    $('#aIcosa').click(function(){
        $('#x3dContainer').css({"display" : "block"});
        $('#controlsContainer').css({"display" : "block"});
        $('indexedfaceset').attr('coordindex' ,'0 1 2 -1 1 0 5 -1 0 2 3 -1 0 3 4 -1 0 4 5 -1 1 5 10 -1 2 1 6 -1 3 2 7 -1 4 3 8 -1 5 4 9 -1 1 10 6 -1 2 6 7 -1 3 7 8 -1 4 8 9 -1 5 9 10 -1 6 10 11 -1 7 6 11 -1 8 7 11 -1 9 8 11 -1 10 9 11 -1 ');
        $('coordinate').attr('point' , '0.000000 0.000000 -1.000000 0.723600 -0.525720 -0.447215 -0.276385 -0.850640 -0.447215 -0.894425 0.000000 -0.447215 -0.276385 0.850640 -0.447215 0.723600 0.525720 -0.447215 0.276385 -0.850640 0.447215 -0.723600 -0.525720 0.447215 -0.723600 0.525720 0.447215 0.276385 0.850640 0.447215 0.894425 0.000000 0.447215 0.000000 0.000000 1.000000 ');
        $('#mainTrasform').attr('scale' , '3 3 3');
        $('#mainTrasform').attr('rotation', '0 0 0 0');
        $('#adjustTransform').attr('rotation' , '0 1 0 0.1');
       $('#adjustTransform').attr('translation' , '0 0 0');
    });
    
    $('#aHome').click(function(){
        $('#x3dContainer').css({"display" : "none"});
        $('#controlsContainer').css({"display" : "none"});
    });
    
    $('#aAboutMe').click(function(){
        $('#x3dContainer').css({"display" : "none"});
        $('#controlsContainer').css({"display" : "none"});
    });
    
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
            if ($("#imPoly").length) {
                $("#imPoly").replaceWith('<material id="polyColor" diffuseColor="' + color + '"></material>')
            } else
                document.getElementById("polyColor").setAttribute("diffuseColor", color);

        }
    });

    //set modal window title
    var title = $(document).find("title").text();
    $("#myModalLabel").text(title);

    //set opacity slider
    $('#slider').slider({
        step: 1, 
        max: 5,
        change: function(){
            //if is not applied an image texture over the polyhedron
            if(!$('#imPoly').length){
                var value = $('#slider').slider('value');
                var decimal = value / 10;
                $('#polyColor').attr('transparency' , decimal);
            }
        }
    });
    
    //change texture on button click
    $("#texture").on("click", function () {
        $("#polyColor").replaceWith('<ImageTexture id="imPoly" url="media/textures/redStones.jpg" repeatS="true" repeatT="true" scale="true"><ImageTexture/>');
        $('#slider').slider("value" , 0);
    });

    //toggle rotation
    $("#yRotation").on("click", function () {
        var state = $("#yRotation").attr("aria-pressed");
        state = state === "true" ? "false" : "true";
        $("#ts").prop("enabled", state);
    });
    
    //toggle Axis visualization
    $('#toggleAxis').on('click' , function(){
        var state = $('#toggleAxis').attr("aria-pressed");
        $("#axis").prop('render' , state);
    });
    
    
    
});


