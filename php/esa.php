<x3d>
      <scene>
        <transform DEF="PolyRotate" scale="2 2 2">
            <shape>
                  <appearance>
                      <material diffuseColor="1 1 1"></material>
                  </appearance>
                <indexedFaceSet solid="false" coordIndex="1 0 4 5 -1 5 6 2 1 -1 6 7 3 2 -1 0 3 7 4 -1 0 1 2 3 -1 7 6 5 4 -1">
                  <coordinate DEF="coords_ME_Cube_001" point="-1 -1 -1 -1 1 -1 1 1 -1 1 -1 -1 -1 -1 1 -1 1 1 1 1 1 1 -1 1"></coordinate>
                </indexedFaceSet>
              </shape> 
          </transform>
        <transform DEF="Camera_TRANSFORM" rotation="-0.093039 -0.968741 -0.229967 2.34704" translation="-7.48113 5.34367 -6.50764">
          <viewpoint DEF="CA_Camera" position="0 0 -0" fieldOfView="0.858"></viewpoint>
        </transform>
          <!-- change enabled attribute to perform initial Polyhedra state (idle or rotating) --> 
            <TimeSensor id="ts" DEF="Clock" cycleInterval="2" loop="true" enabled="false"></TimeSensor>
            <OrientationInterpolator DEF="PolyPath" key="0 0.25 0.5 0.75 1" keyValue="0 1 0 0  0 1 0 1.57079  0 1 0 3.14159  0 1 0 4.71239  0 1 0 6.28317"></OrientationInterpolator>
            <ROUTE fromNode="Clock" fromField="fraction_changed" toNode="PolyPath" toField="set_fraction"></ROUTE>
            <ROUTE fromNode="PolyPath" fromField="value_changed" toNode="PolyRotate" toField="set_rotation"></ROUTE>
      </scene>
</x3d>

