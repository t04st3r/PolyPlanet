<div id="controlsContainer">

    <!-- Show Polihedra information Button triggering modal window -->
    <button  data-toggle="modal" class="btn btn-warning" id="startModal">
        Informazioni
    </button>

    <!-- Toggle Rotation -->
    <button  type="button" id="yRotation" class="btn btn-warning">
        Rotazione
    </button>

    <!-- Toggle Axis -->
    <button type="button" id="toggleAxis" class="btn btn-warning">
        Visualizza/Nascondi Assi
    </button>

    <!-- Change Poliherda color Button using color picker -->
    <button id="picker" class="btn btn-warning">Cambia Colore</button><br/>


    <!-- Slider for opacity regolation -->
    <label for="slider" class="Label">Opacità</label>
    <div id="slider" class="ui-slider-horizontal"></div>
    
    <!-- Slider for rotation spin regolation -->
    <label for="spin_slider" class="Label">Velocità di rotazione</label>
    <div id="spin_slider" class="ui-slider-horizontal"></div>
    
    <!-- Select Texture picking jpeg files on media/textures --> 
    <label for="textureSelect" class="Label">Textures</label><br/>
    <select name="textureSelect" id="textureSelect">
        <?php
        $files = scandir('media/textures');
        $length = count($files);
        echo '<option value="null" selected>Nessuna Texture</option>';
        for ($i = 2; $i < $length; $i++)
            echo '<option value="' . $files[$i] . '">' . substr($files[$i], 0, -4) . '</option>';
        ?>   
    </select>
    
</div>