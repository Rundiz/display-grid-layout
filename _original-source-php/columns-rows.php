<?php require 'includes/functions.php'; ?>
<!DOCTYPE html>
<html>
    <head>
<?php 
$title = 'columns & rows';
require 'includes/html-head.php'; 
?> 
        <link rel="stylesheet" href="<?php echo assetUrl('assets/css/dgl/display-grid-rows.css'); ?>">
    </head>
    <body ontouchstart="">
        <h1>Display:grid; layout (<?php echo htmlspecialchars($title); ?>)</h1>
<?php require 'includes/partials/page-navbar.php'; ?> 
        <hr>
        <p>To use <abbr title="Display:grid; layout">DGL</abbr> rows, you have to add a <code>&lt;link&gt;</code> to <code>assets/css/dgl/display-grid-columns.css</code> and <code>assets/css/dgl/display-grid-rows.css</code>.</p>
        <hr>

        <h2>Basic</h2>
        <p>
            <abbr title="Display:grid; layout">DGL</abbr> rows can be set from 2 to 12 rows by add <code>total-<i>n</i>-rows</code> where <var>n</var> is number to <code>dgl-container</code> class. 
            The row height is <code>1fr</code> or a fraction. 
            So, all grid cells will be use one of heighest cell as a standard size.
        </p>
        <p>The example below is 3 columns and 3 rows.</p>
        <div class="dgl-container total-3-columns total-3-rows">
            <div class="column col-start-1 col-end-2">column col-start-1 col-end-2</div>
            <div class="column col-start-2 col-end-3">column col-start-2 col-end-3</div>
            <div class="column col-start-3 col-end-4 row-start-1 row-end-4">column col-start-3 col-end-4 row-start-1 row-end-4</div>
            <div class="column col-start-1 col-end-2 row-start-2 row-end-3">column col-start-1 col-end-2 row-start-2 row-end-3</div>
            <div class="column col-start-1 col-end-2 row-start-3 row-end-4">column col-start-1 col-end-2 row-start-3 row-end-4</div>
        </div>
        <p>The same example as above but one grid cell has different height.</p>
        <div class="dgl-container total-3-columns total-3-rows">
            <div class="column col-start-1 col-end-2">column col-start-1 col-end-2<br>I'm heighest so the others will be height as me.</div>
            <div class="column col-start-2 col-end-3">column col-start-2 col-end-3</div>
            <div class="column col-start-3 col-end-4 row-start-1 row-end-4">column col-start-3 col-end-4 row-start-1 row-end-4</div>
            <div class="column col-start-1 col-end-2 row-start-2 row-end-3">column col-start-1 col-end-2 row-start-2 row-end-3</div>
            <div class="column col-start-1 col-end-2 row-start-3 row-end-4">column col-start-1 col-end-2 row-start-3 row-end-4</div>
        </div>

        <h4>Without <code>total-<i>n</i>-columns</code></h4>
        <p>You can also use grid row without specified the <code>total-<i>n</i>-columns</code> class which will be based on 12 columns.</p>
        <div class="dgl-container total-2-rows">
            <div class="column col-start-1 col-end-2 row-start-1 row-end-3">column</div>
            <div class="column col-start-2 col-end-13">column</div>
            <div class="column col-start-2 col-end-3 row-start-2 row-end-3">column</div>
            <div class="column col-start-3 col-end-4 row-start-2 row-end-3">column</div>
            <div class="column col-start-4 col-end-5 row-start-2 row-end-3">column</div>
            <div class="column col-start-5 col-end-6 row-start-2 row-end-3">column</div>
            <div class="column col-start-6 col-end-7 row-start-2 row-end-3">column</div>
            <div class="column col-start-7 col-end-8 row-start-2 row-end-3">column</div>
            <div class="column col-start-8 col-end-9 row-start-2 row-end-3">column</div>
            <div class="column col-start-9 col-end-10 row-start-2 row-end-3">column</div>
            <div class="column col-start-10 col-end-11 row-start-2 row-end-3">column</div>
            <div class="column col-start-11 col-end-12 row-start-2 row-end-3">column</div>
            <div class="column col-start-12 col-end-13 row-start-2 row-end-3">column</div>
        </div>

        <h3>Row sizes</h3>
        <p>
            To make grid row works properly you have to set <code>col-start-<i>n</i></code>, <code>col-end-<i>n</i></code> and <code>row-start-<i>n</i></code>, <code>row-end-<i>n</i></code> (where <var>n</var> is number) to the <code>column</code> class.
            If total rows is 12 means total 13 grid lines.
        </p>
        <?php
        echo "\n";
        for ($i = 2; $i <= 12; $i++) {
            echo indent(2) . '<div class="dgl-container total-2-columns total-' . $i . '-rows">'."\n";
            echo indent(3) . '<div class="column col-start-1 col-end-2">col-start-1 col-end-2</div>'."\n";
            echo indent(3) . '<div class="column col-start-2 col-end-3 row-start-1 row-end-' . ($i+1) . '">col-start-2 col-end-3 row-start-1 row-end-' . ($i+1) . '</div>'."\n";
            for ($isub = 2; $isub <= $i; $isub++) {
                echo indent(3) . '<div class="column col-start-1 col-end-2 row-start-' . $isub . ' row-end-' . ($isub+1) . '">col-start-1 col-end-2 row-start-' . $isub . ' row-end-' . ($isub+1) . '</div>'."\n";
            }
            unset($isub);
            echo indent(2) . '</div>'."\n";
        }// endfor;
        unset($i);
        ?> 

        <h3>Row offset</h3>
        <p>Row offset use the same way as column offset, you just count on grid line you want and set the <code>row-start-<i>n</i></code> and <code>row-end-<i>n</i></code> class (where <var>n</var> is number).</p>
        <div class="dgl-container total-3-columns total-3-rows">
            <div class="column col-start-1 col-end-2">column col-start-1 col-end-2</div>
            <div class="column col-start-2 col-end-3">column col-start-2 col-end-3</div>
            <div class="column col-start-3 col-end-4 row-start-2 row-end-4">column col-start-3 col-end-4 row-start-2 row-end-4</div>
            <div class="column col-start-1 col-end-2 row-start-3 row-end-4">column col-start-1 col-end-2 row-start-3 row-end-4</div>
        </div>

        <h3>Responsive</h3>
        <p>
            From the example above, the class name <code>row-start-<i>n</i></code> and <code>row-end-<i>n</i></code> are start working on extra small screen or larger. 
            To set different row size and offset on differenct screen size use <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code> prefix.
        </p>
        <p>Example: <code>row-start-1 row-end-6 md-row-start-1 md-row-end-3</code>. Resize your web browser to see the example below in action.</p>
        <?php
        echo "\n";
        $screenSizes = ['sm', 'md', 'lg', 'xl'];
        foreach ($screenSizes as $screenSize) {
            echo indent(2) . '<h4>' . strtoupper($screenSize) . '</h4>'."\n";
            for ($i = 2; $i <= 12; $i++) {
                echo indent(2) . '<div class="dgl-container total-2-columns total-' . $i . '-rows">'."\n";
                echo indent(3) . '<div class="column col-start-1 col-end-2">col-start-1 col-end-2</div>'."\n";
                echo indent(3) . '<div class="column col-start-2 col-end-3 ' . $screenSize . '-row-start-1 ' . $screenSize . '-row-end-' . ($i+1) . '">col-start-2 col-end-3 ' . $screenSize . '-row-start-1 ' . $screenSize . '-row-end-' . ($i+1) . '</div>'."\n";
                for ($isub = 2; $isub <= $i; $isub++) {
                    echo indent(3) . '<div class="column col-start-1 col-end-2 ' . $screenSize . '-row-start-' . $isub . ' ' . $screenSize . '-row-end-' . ($isub+1) . '">col-start-1 col-end-2 ' . $screenSize . '-row-start-' . $isub . ' ' . $screenSize . '-row-end-' . ($isub+1) . '</div>'."\n";
                }
                unset($isub);
                echo indent(2) . '</div>'."\n";
            }// endfor;
            unset($i);
        }// endforeach;
        unset($screenSize);
        ?> 
        <h4>Mixed</h4>
        <div class="dgl-container total-3-columns total-3-rows">
            <div class="column col-start-1 col-end-2 row-start-1 row-end-3 md-col-start-2 md-col-end-3 md-row-start-1 md-row-end-4 xl-col-start-3 xl-col-end-4 xl-row-start-2 xl-row-end-3">A</div>
            <div class="column col-start-2 col-end-3 row-start-1 row-end-3 md-col-start-1 md-col-end-2 md-row-start-2 md-row-end-3 xl-col-start-1 xl-col-end-4 xl-row-start-1 xl-row-end-2">B</div>
            <div class="column col-start-1 col-end-4 row-start-3 row-end-4 md-col-start-3 md-col-end-4 md-row-start-1 md-row-end-2 xl-col-start-1 xl-col-end-3 xl-row-start-2 xl-row-end-4">C</div>
        </div>
    </body>
</html>