<?php require 'includes/functions.php'; ?>
<!DOCTYPE html>
<html>
    <head>
<?php require 'includes/html-head.php'; ?> 
    </head>
    <body ontouchstart="">
        <h1>Display:grid; layout</h1>
<?php require 'includes/partials/page-navbar.php'; ?> 
        <hr>
        <h2>Basic</h2>
        <p>
            <abbr title="Display:grid; layout">DGL</abbr> basically based on 12 columns. 
            The container class is <code>dgl-container</code> and each column class is <code>column</code>.
        </p>
        <div class="dgl-container">
            <div class="column">column</div>
            <div class="column">column</div>
            <div class="column">column</div>
            <div class="column">column</div>
            <div class="column">column</div>
            <div class="column">column</div>
            <div class="column">column</div>
            <div class="column">column</div>
            <div class="column">column</div>
            <div class="column">column</div>
            <div class="column">column</div>
            <div class="column">column</div>
        </div>
        <h2>Custom total columns</h2>
        <p>
            You can set total columns from 1 to 11 and the column size will be change dynamically. 
            Add <code>total-<i>n</i>-columns</code> where <var>n</var> is number. 
            Example: <code>total-2-columns</code>
        </p>
        <div class="dgl-container total-2-columns">
            <div class="column">column</div>
            <div class="column">column</div>
        </div>
        <h2>Full width</h2>
        <p>To make container full width, add <code>full-width</code> class to the container.</p>
        <div class="dgl-container full-width">
            <div class="column">column</div>
            <div class="column">column</div>
            <div class="column">column</div>
            <div class="column">column</div>
            <div class="column">column</div>
            <div class="column">column</div>
            <div class="column">column</div>
            <div class="column">column</div>
            <div class="column">column</div>
            <div class="column">column</div>
            <div class="column">column</div>
            <div class="column">column</div>
        </div>
        <h2>Has column gap</h2>
        <p>
            By default the grid columns has no gap. 
            If you want gap between columns, add <code>has-column-gap</code> class to the container.
        </p>
        <p>This example show empty column because if contain any text then it will be overflow width on small screen.</p>
        <div class="dgl-container has-column-gap">
            <div class="column">&nbsp;</div>
            <div class="column">&nbsp;</div>
            <div class="column">&nbsp;</div>
            <div class="column">&nbsp;</div>
            <div class="column">&nbsp;</div>
            <div class="column">&nbsp;</div>
            <div class="column">&nbsp;</div>
            <div class="column">&nbsp;</div>
            <div class="column">&nbsp;</div>
            <div class="column">&nbsp;</div>
            <div class="column">&nbsp;</div>
            <div class="column">&nbsp;</div>
        </div>
        
        <hr>

        <h2>Basic column sizes</h2>
        <p>
            This example will show you about how to use column size on basic container (12 columns by default). 
            The number of <code>col-start-<i>n</i></code> and <code>col-end-<i>n</i></code> class is grid line (where <var>n</var> is number). 
            Total 12 columns means total 13 grid lines.
        </p>
        <p>Add <code>col-start-<i>n</i></code> and <code>col-end-<i>n</i></code> class to the <code>column</code> class.</p>
        <?php
        echo "\n";
        for ($i = 1; $i <= 12; $i++) {
            echo indent(2) . '<div class="dgl-container">'."\n";
            echo indent(3) . '<div class="column col-start-1 col-end-' . ($i+1) . '">col-start-1 col-end-' . ($i+1) . '</div>'."\n";
            if ($i < 12) {
                echo indent(3) . '<div class="column col-start-' . ($i+1) . ' col-end-13">col-start-' . ($i+1) . ' col-end-13</div>'."\n";
            }
            echo indent(2) . '</div>'."\n";
        }// endfor;
        unset($i);
        ?> 
        <h3>Offset</h3>
        <p>To use offset or push is easy, you just count on grid line you want and set the <code>col-start-<i>n</i></code> and <code>col-end-<i>n</i></code> class (where <var>n</var> is number).</p>
        <div class="dgl-container">
            <div class="column col-start-2 col-end-4">col-start-2 col-end-4</div>
            <div class="column col-start-5 col-end-7">col-start-5 col-end-7</div>
        </div>
        <h3>Responsive</h3>
        <p>
            From the example above, the class name <code>col-start-<i>n</i></code> and <code>col-end-<i>n</i></code> are start working on extra small screen or larger. 
            To set different column sizeand offset on differenct screen size  use <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code> prefix.
        </p>
        <p>Example: <code>col-start-1 col-end-6 md-col-start-1 md-col-end-3</code>. Resize your web browser to see the example below in action.</p>
        <?php
        echo "\n";
        $screenSizes = ['sm', 'md', 'lg', 'xl'];
        foreach ($screenSizes as $screenSize) {
            echo indent(2) . '<h4>' . strtoupper($screenSize) . '</h4>'."\n";
            for ($i = 1; $i <= 12; $i++) {
                echo indent(2) . '<div class="dgl-container">'."\n";
                echo indent(3) . '<div class="column col-start-1 col-end-13 ' . $screenSize . '-col-start-1 ' . $screenSize . '-col-end-' . ($i+1) . '">col-start-1 col-end-13 ' . $screenSize . '-col-start-1 ' . $screenSize . '-col-end-' . ($i+1) . '</div>'."\n";
                if ($i < 12) {
                    echo indent(3) . '<div class="column col-start-1 col-end-13 ' . $screenSize . '-col-start-' . ($i+1) . ' ' . $screenSize . '-col-end-13">col-start-1 col-end-13 ' . $screenSize . '-col-start-' . ($i+1) . ' ' . $screenSize . '-col-end-13</div>'."\n";
                }
                echo indent(2) . '</div>'."\n";
            }// endfor;
            unset($i);
        }// endforeach;
        unset($screenSize);
        ?> 
        <h4>Mixed</h4>
        <div class="dgl-container">
            <div class="column col-start-1 col-end-7 lg-col-start-2 lg-col-end-5 xl-col-start-1 xl-col-end-5">col-start-1 col-end-7 lg-col-start-2 lg-col-end-5 xl-col-start-1 xl-col-end-5</div>
            <div class="column col-start-7 col-end-13 lg-col-start-6 lg-col-end-8 xl-col-start-5 xl-col-end-9">col-start-7 col-end-13 lg-col-start-6 lg-col-end-8 xl-col-start-5 xl-col-end-9</div>
            <div class="column col-start-1 col-end-13 lg-col-start-9 lg-col-end-12 xl-col-start-9 xl-col-end-13">col-start-1 col-end-13 lg-col-start-9 lg-col-end-12 xl-col-start-9 xl-col-end-13</div>
        </div>

        <hr>

        <h2>Custom column sizes</h2>
        <p>
            Based on custom total columns, this can also set the column size.  
            The number of <code>col-start-<i>n</i></code> and <code>col-end-<i>n</i></code> class is grid line (where <var>n</var> is number). 
            For example: total 3 columns means total 4 grid lines.
        </p>
        <?php
        echo "\n";
        for ($itotal = 3; $itotal <= 11; $itotal+=2) {
            echo indent(2) . '<h3>Total ' . $itotal . ' columns</h3>'."\n";
            echo indent(2) . '<div class="dgl-container total-' . $itotal . '-columns">'."\n";
            for ($icol = 1; $icol < $itotal; $icol++) {
                $gridLineStart = $icol;
                $gridLineEnd = ($icol + 1);
                if (($icol + 1) == $itotal) {
                    $gridLineEnd = ($itotal + 1);
                }
                echo indent(3) . '<div class="column col-start-' . $gridLineStart . ' col-end-' . $gridLineEnd . '">col-start-' . $gridLineStart . ' col-end-' . $gridLineEnd . '</div>'."\n";
                unset($gridLineEnd, $gridLineStart);
            }// endfor;
            unset($icol);
            echo indent(2) . '</div>'."\n";
        }// endfor;
        unset($itotal);
        ?> 

        <hr>

        <h2>Nested grid</h2>
        <p>The column grid can be nested, just put <code>dgl-container</code> class inside the column.</p>
        <div class="dgl-container">
            <div class="column col-start-1 col-end-7">A</div>
            <div class="column col-start-7 col-end-13">
                B
                <div class="dgl-container">
                    <div class="column col-start-1 col-end-6">B1</div>
                    <div class="column col-start-6 col-end-13">B2</div>
                </div>
            </div>
        </div>
    </body>
</html>