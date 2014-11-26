<div id="controlsContainer">
    
    <!-- Slider for opacity regolation -->
   <label for="slider" id="sliderLabel" classe="orange">Cambia Opacità</label>
    <div id="slider" class="ui-slider-horizontal"></div>
    
    <!-- Change Poliherda color Button using color picker -->
    <button id="picker" class="btn btn-warning">Cambia Colore</button>
    
    <!-- Show Polihedra information Button triggering modal window -->
    <button  data-toggle="modal" class="btn btn-warning" data-target="#myModal">
        Informazioni
    </button>

    <!-- toggle texture on the Polyhedra TODO spinner with various textures to choose -->
    <button  id="texture" class="btn btn-warning">
        Texture
    </button>

    <!-- Toggle Rotation -->
    <button  type="button" id="yRotation" class="btn btn-warning" data-toggle="button" aria-pressed="false">
        Rotazione
    </button>
    
    <!-- Center Polyhedron View Button -->
    <button type="button" id="toggleAxis" class="btn btn-warning" data-toggle="button" aria-pressed="false">
        Visualizza/Nascondi Assi
    </button>

</div>