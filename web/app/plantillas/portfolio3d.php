<?php ob_start() ?>
<div class="py-10 contenedor">
    
<h2>Portfolio 3D</h2>
<div class="row">
    <div class="col-xl-4 col-lg-4 col-sm-6 col-md-6 cols-12 py-3 grow">
        <model-viewer loading="eager" camera-controls
            src="web/imagenes/3dModels/awp/scene.gltf" alt="Asuna 3D model" class="p-0 m-0 border-good bg-secondary"></model-viewer>
    </div>
    <div class="col-xl-4 col-lg-4 col-sm-6 col-md-6 cols-12 py-3 grow">
        <model-viewer loading="eager" camera-controls
            src="web/imagenes/3dModels/ak-47/scene.gltf" alt="Asuna 3D model" class="p-0 m-0 border-good bg-secondary"></model-viewer>
    </div>
    <div class="col-xl-4 col-lg-4 col-sm-6 col-md-6 cols-12 py-3 grow">
        <model-viewer loading="eager" camera-controls
            src="web/imagenes/3dModels/house/scene.gltf" alt="Asuna 3D model" class="p-0 m-0 border-good bg-secondary"></model-viewer>
    </div>
    <div class="col-xl-4 col-lg-4 col-sm-6 col-md-6 cols-12 py-3 grow">
        <model-viewer loading="eager" camera-controls
            src="web/imagenes/3dModels/glock/scene.gltf" alt="Asuna 3D model" class="p-0 m-0 border-good bg-secondary"></model-viewer>
    </div>
    <div class="col-xl-4 col-lg-4 col-sm-6 col-md-6 cols-12 py-3 grow">
        <model-viewer loading="eager" camera-controls
            src="web/imagenes/3dModels/sao/scene.gltf" alt="Asuna 3D model" class="p-0 m-0 border-good bg-secondary"></model-viewer>
    </div>
</div>
</div>

<?php $contenido = ob_get_clean() ?>
<?php include 'base.php' ?>
