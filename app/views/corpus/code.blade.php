<div class = "text_box_2"><pre><p>
    <?php
    
        $code = str_replace("<","&lt;",$content);
        $code = str_replace(">", "&gt;", $code);
    echo $code;
    ?>
    </p></pre>
</div>
{{ $content }}