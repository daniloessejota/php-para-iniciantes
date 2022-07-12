<pre>
    <table border="1"><tr>
        <?php
        $myarray = range(5,100,2);
            foreach ($myarray as $value) {
                echo "<td>$value ";
            }
            //para cada elemento do "myarray" tratado como valor, ele vai para cada repetição,colocar um valor do "myarray" dentro da variável "value".
        ?>
    </table>
</pre>