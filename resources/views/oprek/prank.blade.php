@extends('master')

@section('title', 'Coming Soon')

@section('css')
<style>
    html {
        height: 100%;
    }

    body {
        min-height: 100%;
        margin: 0;
        overflow: hidden;
    }

    .display-middle {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%)
    }

    .display-below-middle {
        position: absolute;
        top: 75%;
        left: 50%;
        transform: translate(-75%, -50%);
        -ms-transform: translate(-75%, -50%)
    }

    .padding-large{
        padding: 12px 24px !important;
    }

    .padding-not-large{
        padding: 6px 12px !important;
    }

    .black-background {
        color: #fff !important;
        background-color: #000a12 !important;
    }

    .white-background {
        color: #000 !important;
        background-color: #fff !important;
    }

    .wide {
        letter-spacing: 4px
    }
</style>
@endsection

@section('body')
<div class="container-fluid" id="home" style="padding: 0;">
    <div class="display-middle">
        <div style="display: block;">
            <span class="padding-large black-background wide float-left" style="font-size: 24px; margin-right: 16px;">SUDAH DITUTUP BOIS</span>
            <div class="float-right" style="height: 24px; width: 24px; background-color: #000a12;"></div>
        </div>
        <div style="display: block;">
            <div class="float-left" style="height: 16px; width: 16px; background-color: #ffffff;"></div>
            <span class="padding-not-large white-background wide float-right" style="font-size: 12px; margin: 8px;">See you @HMTC-Garang</span>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/three.min.js') }}"></script>
<script type="text/javascript">
    function init() {
        var scene = new THREE.Scene();
        var camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 0.1, 1000);

        var renderer = new THREE.WebGLRenderer();
        renderer.setClearColor('#000000');
        renderer.setSize(window.innerWidth, window.innerHeight);

        camera.position.x = 0;
        camera.position.y = 0;
        camera.position.z = 90;

        document.getElementById('home').appendChild(renderer.domElement);
        window.addEventListener('resize', onWindowResize, false );

        var geometry = new THREE.TorusKnotGeometry(30, 20, 10, 16);
        var material = new THREE.MeshBasicMaterial({ 
            vertexColors: THREE.VertexColors
        });

        function getRandomColor(index) {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++ ) {
                color += letters[index % 16];
            }

            return color;
        }

        geometry.vertices.forEach(function (value, i) {
            geometry.colors.push(new THREE.Color(getRandomColor(i)));
        });

        var materialCloud = new THREE.PointsMaterial({
            size: 1,
            vertexColors: THREE.VertexColors
        });

        var cloud = new THREE.Points(geometry, materialCloud);
        cloud.sortParticles = true;
        scene.add(cloud);
        
        //scene.add(wireframe);

        render();

        function render() {
            cloud.rotation.x += 0.01;
            cloud.rotation.y += 0.01;


            requestAnimationFrame(render);
            renderer.render(scene, camera);
        }

        function onWindowResize() {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();

            renderer.setSize(window.innerWidth, window.innerHeight);
        }
    }

    window.onload = init;

</script>
@endsection