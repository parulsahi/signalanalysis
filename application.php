<html>
    <head>

        <title>Open exe</title>

        <script type="text/javascript">
        function runProgram()
        {
            var shell = new ActiveXObject("WScript.Shell");
            var appITunes = "\"notepad.exe\" ";
            shell.Run(appITunes);
        }
        </script>

    </head>



    <body>

        <a href="javascript:runProgram()">Run program</a>

    </body>

</html>