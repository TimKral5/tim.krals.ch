<html>
    <body>
        
        <iframe src="https://discord.com/widget?id=762412509469999104&theme=dark" 
    style="position: absolute; right:0px; bottom:10px;"
    width="350" 
    height="500" 
    allowtransparency="true" 
    frameborder="0" 
    sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>

        <?php
        
        $fileName = "https://discord.com/api/guilds/762412509469999104/widget.json";

        $file = fopen($fileName, "r");
        echo fread($file,filesize($fileName));
        fclose($file);
        
        ?>

    </body>
</html>