<!DOCTYPE html>
<html>
    <head>
        <title>PolyPlanet</title>
        <link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAADm5uYA39/fAOjo6AD///8Aurq6APz8/ADX19cAZGRkAOfn5wBGRkYA6+vrAAAAAAAAAAAAAAAAAAAAAAAAAAAAMzMzMzMzMzMzMzM5kzMzMzMzM5qpMzMzMzM5SqSTMzMzM5NKpGkzMzM5NKqgRpMzM5M0qqpGaTM3M0qqqhRmk3MzRERERGZpdERKqqqEREk3M1SqqkZmkzNzNKqiRmkzMzdzSqRnczMzMzd3d3MzMzMzMzMzMzMzMzMzMzMzMzMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA" rel="icon" type="image/x-icon" />
        <?php include_once 'php/header.php'; ?>
    </head>
    <body>
        <?php include_once 'php/mainTitle.php'; ?>
        <?php include_once 'php/tabbedMenu.php'; ?>
        <div id="x3dContainer" class="setMarginTop">
            <x3d>
                <scene>
                    <group render='true' id='axes'>
                        <transform rotation='0 1 0 0.1' scale='1.5 1.5 1.5' traslation='0 -1.2 0'>
                            <collision DEF='DoNotCollideWithVisualizationWidget' enabled='false'>
                                 <group>
                                    <!-- Vertical Y arrow and label -->
                                    <group>
                                        <transform scale='2 3 2'>
                                            <group DEF='ArrowGreen'>
                                                <shape>
                                                    <cylinder DEF='Arrowcylinder' bottom='false' radius='.025' top='false'></cylinder>
                                                    <appearance DEF='Green'>
                                                        <material diffuseColor='green'></material>
                                                    </appearance>
                                                </shape>
                                                <transform translation='0 1 0'>
                                                    <shape>
                                                        <cone DEF='Arrowcone' bottomRadius='.05' height='.1'></cone> 
                                                        <appearance USE='Green'></appearance>
                                                    </shape>
                                                </transform>
                                            </group>
                                        </transform>
                                    </group>
                                    <transform translation='0 2.7 0.2'>
                                        <billboard>
                                            <shape>
                                                <appearance DEF='LABEL_APPEARANCE'>
                                                    <material diffuseColor='black'></material>
                                                </appearance> 
                                                <text string='"y"'>
                                                <fontstyle DEF='LABEL_FONT' family='"SANS"' justify='"MIDDLE" "MIDDLE"' size='.4'></fontstyle>
                                                </text>
                                            </shape>
                                        </billboard>
                                    </transform> 
                                </group>
                                <transform rotation='0 0 1 -1.57079'>
                                    <!-- Horizontal X arrow and label -->
                                    <group>
                                        <transform scale='2 4 2'>
                                            <group DEF='ArrowRed'>
                                                <shape>
                                                    <cylinder USE='Arrowcylinder'></cylinder> 
                                                    <appearance DEF='Red'>
                                                        <material diffuseColor='red'></material>
                                                    </appearance>
                                                </shape> 
                                                <transform translation='0 1 0'>
                                                    <shape>
                                                        <cone USE='Arrowcone'></cone>
                                                        <appearance USE='Red'></appearance>
                                                    </shape>
                                                </transform>
                                            </group>
                                        </transform>
                                        <transform rotation='0 0 1 1.57079' translation='.2 3.5 0'>
                                            <!-- note label rotated back to original coordinate frame --> 
                                            <billboard>
                                                <shape>
                                                    <appearance USE='LABEL_APPEARANCE'></appearance> 
                                                    <text string='"x"'>
                                                    <fontstyle USE='LABEL_FONT'></fontstyle>
                                                    </text>
                                                </shape>
                                            </billboard>
                                        </transform>
                                    </group>
                                </transform>
                                <transform rotation='1 0 0 1.57079'>
                                    <!-- Perpendicular Z arrow and label, note right-hand rule --> 
                                    <group>
                                        <transform scale='2 4 2'>
                                            <group DEF='ArrowBlue'>
                                                <shape>
                                                    <cylinder USE='Arrowcylinder'></cylinder>
                                                    <appearance DEF='Blue'>
                                                        <material diffuseColor='blue'></material>
                                                    </appearance>
                                                </shape> 
                                                <transform translation='0 1 0'>
                                                    <shape>
                                                        <cone USE='Arrowcone'></cone> 
                                                        <appearance USE='Blue'></appearance>
                                                    </shape>
                                                </transform>
                                            </group>
                                        </transform>
                                        <transform rotation='1 0 0 -1.57079' translation='0 3.5 .2'>
                                            <!-- note label rotated back to original coordinate frame --> 
                                            <billboard>
                                                <shape>
                                                    <appearance USE='LABEL_APPEARANCE'></appearance>
                                                    <text string='"z"'>
                                                    <fontstyle USE='LABEL_FONT'></fontstyle>
                                                    </text>
                                                </shape>
                                            </billboard>
                                        </transform>
                                    </group>
                                </transform>
                            </collision>
                        </transform>
                    </group>
                    <transform id="mainTrasform" DEF="PolyRotate" scale="2 2 2">
                        <shape>
                            <appearance>
                                <material diffuseColor="white" transparency="0.2"></material>
                            </appearance>
                            <indexedfaceset solid="true"
                                            coordIndex="4 7 8 -1 5 6 7 -1 4 5 7 -1 6 0 1 -1 5 10 0 -1 6 5 0 -1 6 3 7 -1 1 2 3 -1 6 1 3 -1 9 4 11 -1 10 5 4 -1 9 10 4 -1 12 9 13 -1 0 10 9 -1 12 0 9 -1 14 0 12 -1 2 1 0 -1 14 2 0 -1 17 3 15 -1 8 7 3 -1 17 8 3 -1 16 8 17 -1 11 4 8 -1 16 11 8 -1 18 11 16 -1 13 9 11 -1 18 13 11 -1 19 13 18 -1 14 12 13 -1 19 14 13 -1 15 14 19 -1 3 2 14 -1 15 3 14 -1 16 19 18 -1 17 15 19 -1 16 17 19 -1 "
                                            >
                                <coordinate DEF="coords_ME_Icosphere"
                                            point="0.372675 1.146896 -1.578738 1.205928 0.000032 -1.578733 1.951369 -0.000091 -0.372722 1.578729 -1.146950 0.372568 -1.578557 -1.147032 -0.372721 -0.975615 -0.708974 -1.578612 0.372613 -1.147025 -1.578613 0.602901 -1.855828 -0.372721 -0.602974 -1.855828 0.372577 -1.578712 1.146881 -0.372721 -0.975763 0.708833 -1.578612 -1.951349 0.000032 0.372585 0.602901 1.855891 -0.372721 -0.602974 1.855891 0.372577 1.578729 1.147013 0.372568 0.975675 -0.708974 1.578684 -1.206027 -0.000084 1.578684 -0.372779 -1.146951 1.578685 -0.372779 1.147014 1.578686 0.975609 0.708833 1.578817 "
                                            />
                            </indexedfaceset>
                        </shape> 
                    </transform>
                    <Viewpoint bind='false' centerOfRotation='0,0,0' fieldOfView='0.8' isActive='true' orientation='0,1,0,1' position='12.8,0.7,8'></Viewpoint>
                    <!-- change enabled attribute to perform initial Polyhedra state (idle or rotating) --> 
                    <TimeSensor id="ts" DEF="Clock" cycleInterval="2" loop="true" enabled="false"></TimeSensor>
                    <OrientationInterpolator DEF="PolyPath" key="0 0.25 0.5 0.75 1" keyValue="0 1 0 0  0 1 0 1.57079  0 1 0 3.14159  0 1 0 4.71239  0 1 0 6.28317"></OrientationInterpolator>
                    <ROUTE fromNode="Clock" fromField="fraction_changed" toNode="PolyPath" toField="set_fraction"></ROUTE>
                    <ROUTE fromNode="PolyPath" fromField="value_changed" toNode="PolyRotate" toField="set_rotation"></ROUTE>
                </scene>
            </x3d>
        </div>
    </body>
</html>