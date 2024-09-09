<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/5.3.1/fabric.min.js"></script>

    <script>
        var canvas;
        function draw() {
            canvas = new fabric.Canvas('c');

            var circle = new fabric.Circle({
            radius: 20, fill: 'green', left: 100, top: 100
            });
            var triangle = new fabric.Triangle({
            width: 20, height: 30, fill: 'blue', left: 50, top: 50
            });
            var triangle1 = new fabric.Triangle({
            width: 20, height: 30, fill: 'red', left: 50, top: 50
            });
            var triangle2 = new fabric.Triangle({
            width: 20, height: 30, fill: 'yellow', left: 50, top: 50
            });
            var triangle3 = new fabric.Triangle({
            width: 20, height: 30, fill: 'grey', left: 50, top: 50
            });

            canvas.add(circle, triangle3, triangle2, triangle1, triangle);
        }

    </script>


</head>
<body onload="draw();">
    <canvas id="c" width=500 height=500 style="border:1px solid #aaa"></canvas>

</body>
</html>