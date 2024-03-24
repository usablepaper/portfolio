<?php get_header(); ?>
<div class="canvas-container"></div>
<div class="weather">
    <div class="weather__icon">
        <img src="" alt="">
    </div>
    <ul class="weather__temperature">
        <li class='temp-current'>
            <div class="cont"></div>
        </li>

    </ul>
</div>

<script type="importmap">
    {
    "imports": {
        "three": "https://unpkg.com/three@0.162.0/build/three.module.js",
        "three/addons/": "https://unpkg.com/three@0.162.0/examples/jsm/"
    }
}
</script>
<script src="https://cdn.jsdelivr.net/npm/dat.gui@0.7.9/build/dat.gui.min.js"></script>
<script type="module">
import * as THREE from 'three';
import {
    GLTFLoader
} from 'three/addons/loaders/GLTFLoader.js';
import {
    OrbitControls
} from 'three/addons/controls/OrbitControls.js';


const mainType = Math.floor(Math.random() * 2);

0 ? a_type() : b_type();

function a_type() {
    const scene = new THREE.Scene();
    scene.background = new THREE.Color(0xF0F0F0); // Set scene background to white
    
    const camera = new THREE.PerspectiveCamera(1, window.innerWidth / window.innerHeight, 0.1, 1000);
    camera.position.y = 3.4;
    camera.position.z = 5;
    camera.position.x = -0.01;
    camera.zoom = .5;
    camera.updateProjectionMatrix();

    const renderer = new THREE.WebGLRenderer({
        antialias: true,
    });
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(window.devicePixelRatio);
    document.querySelector('.canvas-container').appendChild(renderer.domElement);

    // Initialize OrbitControls after the camera and renderer have been created
    const controls = new OrbitControls(camera, renderer.domElement);
    // controls.enableZoom = false;

    const ambientLight = new THREE.AmbientLight(0xffffff, 20);
    scene.add(ambientLight);

    // 직사광을 추가하여 모델에 하이라이트를 줍니다.
    const directionalLight = new THREE.DirectionalLight(0xffffff, 20);
    directionalLight.position.set(1, 1, 1);
    scene.add(directionalLight);
    scene.rotation.x = scene.rotation.x - 0.6;
    scene.rotation.y = scene.rotation.y - 0.6;
    const loader = new GLTFLoader();
    loader.load('<?=get_template_directory_uri().'/assets/src/modeling/logos2.glb'?>', function(gltf) {
        let scale_set = 2;
        gltf.scene.scale.set(scale_set, scale_set, scale_set); // Adjust scale as needed
        gltf.scene.traverse(function(child) {
            if (child.isMesh) {
                let random = Math.random() * .02;

                function child_animate() {
                    child.rotation.y += random;
                    // child.rotation.z += random;
                    // child.rotation.x += random;

                    requestAnimationFrame(child_animate);
                    controls.update();
                    renderer.render(scene, camera);
                }
                child_animate();

                // 새로운 MeshStandardMaterial을 생성하고 메시에 적용합니다.
                const material = new THREE.MeshStandardMaterial({
                    color: 0x000000, // 머티리얼의 색
                    metalness: .2, // 금속성
                    roughness: 0.3, // 거칠기
                });
                child.material = material;
            }
        });
        scene.add(gltf.scene);
    }, undefined, function(error) {
        console.error(error);
    });
    // const gridHelper = new THREE.GridHelper(100, 100);
    // scene.add(gridHelper);
    // const gui = new dat.GUI();
    // const cameraFolder = gui.addFolder('Camera Position');
    // cameraFolder.add(camera.position, 'x', -10, 10);
    // cameraFolder.add(camera.position, 'y', -10, 10);
    // cameraFolder.add(camera.position, 'z', -10, 10);
    // cameraFolder.open();

    function animate() {
        // rotate the model
        // scene.rotation.y += 0.003;

        scene.rotation.x -= 0.003;
        // scene.rotation.z += 0.003;

        requestAnimationFrame(animate);
        controls.update();
        renderer.render(scene, camera);
    }
    setTimeout(animate, 2000);

    window.addEventListener('resize', () => {
        // Update camera aspect ratio
        camera.aspect = window.innerWidth / window.innerHeight;
        innerWidth < 800 ? camera.zoom = .3 : camera.zoom = .5;

        camera.updateProjectionMatrix();

        // Update renderer size
        renderer.setSize(window.innerWidth, window.innerHeight);
        renderer.setPixelRatio(window.devicePixelRatio); // 이 줄을 추가합니다.
    });

}

function b_type() {
    const scene = new THREE.Scene();
    scene.background = new THREE.Color(0xf6f6f6); // Set scene background to white
    // add fog to scene
    scene.fog = new THREE.Fog(0xf6f6f6, 1.15, 1.22);

    const camera = new THREE.PerspectiveCamera(1, window.innerWidth / window.innerHeight, 0.1, 1000);
    camera.position.y = .6;
    camera.position.z = 1;
    innerWidth < 800 ? camera.zoom = .1 : camera.zoom = .2;
    camera.updateProjectionMatrix();

    const renderer = new THREE.WebGLRenderer({
        antialias: true,
        powerPreference: "high-performance"
    });
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(window.devicePixelRatio);
    document.querySelector('.canvas-container').appendChild(renderer.domElement);

    // Initialize OrbitControls after the camera and renderer have been created
    const controls = new OrbitControls(camera, renderer.domElement);
    controls.enableZoom = false;

    const ambientLight = new THREE.AmbientLight(0xffffff, 1);
    scene.add(ambientLight);

    // 직사광을 추가하여 모델에 하이라이트를 줍니다.
    const directionalLight = new THREE.DirectionalLight(0xffffff, 7);
    directionalLight.position.set(1, 1, 1);
    scene.add(directionalLight);
    scene.rotation.x = scene.rotation.x - 0.6;
    const loader = new GLTFLoader();
    loader.load('<?=get_template_directory_uri().'/assets/src/modeling/logo.glb'?>', function(gltf) {
        let scale_set = 0.003;
        gltf.scene.scale.set(scale_set, scale_set, scale_set); // Adjust scale as needed
        gltf.scene.traverse(function(child) {
            if (child.isMesh) {
                // 새로운 MeshStandardMaterial을 생성하고 메시에 적용합니다.
                const material = new THREE.MeshStandardMaterial({
                    color: 0x000000, // 머티리얼의 색
                    metalness: .2, // 금속성
                    roughness: .3, // 거칠기
                });
                child.material = material;
            }
        });
        scene.add(gltf.scene);
    }, undefined, function(error) {
        console.error(error);
    });

    // const gui = new dat.GUI();
    // const cameraFolder = gui.addFolder('Camera Position');
    // cameraFolder.add(camera.position, 'x', -10, 10);
    // cameraFolder.add(camera.position, 'y', -10, 10);
    // cameraFolder.add(camera.position, 'z', -10, 10);
    // cameraFolder.open();

    function animate() {
        // rotate the model
        scene.rotation.y += 0.002;
        scene.rotation.x -= 0.002;
        scene.rotation.z += 0.002;

        requestAnimationFrame(animate);
        controls.update();
        renderer.render(scene, camera);
    }
    animate();

    window.addEventListener('resize', () => {
        // Update camera aspect ratio
        camera.aspect = window.innerWidth / window.innerHeight;
        innerWidth < 800 ? camera.zoom = .1 : camera.zoom = .2;

        camera.updateProjectionMatrix();

        // Update renderer size
        renderer.setSize(window.innerWidth, window.innerHeight);
        renderer.setPixelRatio(window.devicePixelRatio); // 이 줄을 추가합니다.
    });

}

</script>
<?php get_footer(); ?>