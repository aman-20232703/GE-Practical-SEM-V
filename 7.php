<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>jQuery Practical</title>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        .title {
            font-size: 22px;
            margin-bottom: 15px;
        }
        .color-box {
            padding: 10px;
            background: #f0f0f0;
            margin-top: 20px;
            width: 250px;
        }
        button {
            margin: 5px;
            padding: 8px 15px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <h2 class="title" id="heading">Welcome to jQuery Practical</h2>

    <div class="color-box">
        <p name="info" data-type="text">This is sample text to modify.</p>
    </div>

    <button id="changeColor">Change Text Color</button>
    <button class="changeText">Change Text Content</button>
    <button data-action="reset">Reset Text</button>

    <script>
        $(document).ready(function () {

            // 1 Select using ID → change color on click
            $("#changeColor").click(function () {
                $("p[name='info']").css("color", "blue");
            });

            // 2 Select using class → change text on click
            $(".changeText").click(function () {
                $("p[name='info']").text("Text updated using jQuery!");
            });

            // 3️ Select using attribute selector & reset
            $("button[data-action='reset']").click(function () {
                // Select using element name
                $("p[name='info']").css("color", "black").text("This is sample text to modify.");
            });

            // 4 Also demonstrating element selector
            $("h2").click(function () {
                alert("You clicked the heading!");
            });

        });
    </script>

</body>
</html>
