var keyboard = THREEx.KeyboardState();

function main(){
    var scene = new THREE.Scene();
    var gui = new dat.GUI();

    var box = generateBox(1,1,1); //0,0,0
    

    var floor = generateFloor(10, 20);
    floor.rotation.x = Math.PI/2;

    var pointLight = generatePointLight(0xffffff, 1);
    pointLight.position.y = 5;

    gui.add(pointLight, 'intensity', 0,20);

    floor.add(box);
    scene.add(floor);
    scene.add(pointLight);
    scene.add(generateMoon());
    //scene = loadScene(scene);
    
    
    

    var camera = new THREE.PerspectiveCamera(
        45, 
        window.innerWidth/window.innerHeight, 
        1, 
        1000
    );

    box.position.y = 2;

    camera.position.x = 0;
    camera.position.y = 5;
    camera.position.z = -5;
    camera.lookAt(new THREE.Vector3(0,0,0));

    var renderer = new THREE.WebGLRenderer();
    renderer.shadowMap.enabled = true;
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setClearColor('rgb(60, 60, 60)');
    document.getElementById('webgl').appendChild(renderer.domElement);

    var controls = new THREE.OrbitControls(camera, renderer.domElement);

    update(renderer, scene, camera, controls);
    return scene;
}

function loadScene(scene){
    var loader = new THREE.ObjectLoader();
    loader.load("scene.json", function(obj){
        scene.add(obj);
        
    }, 
    function (x){
        console.log(x.loaded / x.total*100 + '% loaded.');
    },
    function (err){
        console.log('Error: died.');
    });
    return scene;
}

function generateMoon(){
    var sphere = new THREE.SphereGeometry(3, 42, 42);
    var moonTexture = THREE.ImageUtils.loadTexture('/WebGL/img/moon.png');
    var moonMat = new  THREE.MeshLambertMaterial( {map: moonTexture} );
    var moon = new THREE.Mesh(sphere, moonMat);
    moon.position.x = -25;
    moon.position.y = 25;
    moon.position.z = 25;
    return moon;
}

function generateFloor(w, d){
var geo = new THREE.PlaneGeometry(w, d);
var mat = new THREE.MeshPhongMaterial({
    color: 'rgb(100, 100, 100)', 
    side: THREE.DoubleSide
    });
    var mesh = new THREE.Mesh(geo, mat);
    mesh.receiveShadow = true;
    return mesh;
}

function generateBox(w, h, d) {
    var geo = new THREE.BoxGeometry(w, h, d);
    var boxTexture = THREE.ImageUtils.loadTexture('/WebGL/img/grass.png');
    var boxMat = new  THREE.MeshLambertMaterial( {map: boxTexture} );
    var mesh = new THREE.Mesh(geo, boxMat);
    mesh.receiveShadow = true;
    mesh.castShadow =true;
    return mesh;
}

function generatePointLight(color, intensity) {
    var light = new THREE.PointLight(color, intensity);
    light.castShadow = true;
    return light;
}

function update(renderer, scene, camera, controls){
    renderer.render(scene, camera);

    

    scene.traverse(function(child) {
     
    });

    controls.update();

    requestAnimationFrame(function() {
        update(renderer, scene, camera, controls);
    });
}

var scene = main();
console.log(scene);