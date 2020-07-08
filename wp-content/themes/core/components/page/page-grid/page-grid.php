{{ component( 'header/subheader/Subheader.php', subheader ) }}

<div class="s-sink t-sink">

    <div class="l-container">
        <h1>Grid Layouts and Options</h1>
        <p>Below are some examples of the default grid system within Square One. This should be used as a base and feel
            free to add to it if your design calls for a different type of layout. New layouts should be added in the
            <mark>pcss/base/grid/_layouts.pcss</mark>
        </p>

        <hr>

        <h2>1 Column:</h2>

        <h3>One Fourth</h3>
        <div class="g-row">
            <div class="g-col g-col--one-fourth">
                <div class="c-default">Column 25%</div>
            </div>
        </div>

        <h3>One Third</h3>
        <div class="g-row">
            <div class="g-col g-col--one-third">
                <div class="c-default">Column 33.33%</div>
            </div>
        </div>

        <h3>One Half</h3>
        <div class="g-row">
            <div class="g-col g-col--one-half">
                <div class="c-default">Column 50%</div>
            </div>
        </div>

        <h3>Three Fourths</h3>
        <div class="g-row">
            <div class="g-col g-col--three-fourths">
                <div class="c-default">Component</div>
            </div>
        </div>

        <h3>Full Width</h3>
        <div class="g-row">
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
        </div>

        <hr>

        <h2>2 Column:</h2>
        <div class="g-row g-row--col-2">
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
        </div>

        <h3>2 Column Wrap:</h3>
        <div class="g-row g-row--col-2">
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
        </div>

        <hr>

        <h2>3 Column:</h2>
        <div class="g-row g-row--col-3">
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
        </div>

        <h3>3 Column Wrap:</h3>
        <div class="g-row g-row--col-3">
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
        </div>

        <hr>

        <h2>4 Column:</h2>
        <div class="g-row g-row--col-4">
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
        </div>

        <h3>4 Column Wrap:</h3>
        <p>Add
            <mark>g-row--col-2--min-small</mark>
            before the 4 column layout class to make the 4 column a 2 column grid on mobile.
        </p>
        <div class="g-row g-row--col-2--min-small g-row--col-4--min-full">
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
        </div>

        <hr>

        <h2>5 Column:</h2>
        <div class="g-row g-row--col-5">
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
        </div>

        <hr>

        <h2>Viewport Options</h2>
        <p>Stack on xsmall, 2 Column on small, and 4 column on full</p>
        <div class="g-row g-row--col-2--min-small g-row--col-4--min-full">
            <div class="g-col">
                <div class="c-default">Column 25%</div>
            </div>
            <div class="g-col">
                <div class="c-default">Column 25%</div>
            </div>
            <div class="g-col">
                <div class="c-default">Column 25%</div>
            </div>
            <div class="g-col">
                <div class="c-default">Column 25%</div>
            </div>
        </div>

        <hr>

        <h2>Sidebar Right:</h2>
        <div class="l-weighted-left">
            <div class="c-default">Content</div>
            <div class="c-default">Sidebar</div>
        </div>

        <h2>Sidebar Left:</h2>
        <div class="l-weighted-right">
            <div class="c-default">Sidebar</div>
            <div class="c-default">Content</div>
        </div>

        <hr>

        <h2>Column Alignment:</h2>
        <p>To change the alignment, add these helper classes to the column parent container:</p>

        <div class="g-row g-row--center">
            <div class="g-col g-col--one-third">
                <div class="c-default">
                    <mark>g-row--center</mark>
                </div>
            </div>
        </div>

        <div class="g-row g-row--pull-right">
            <div class="g-col g-col--one-third">
                <div class="c-default">
                    <mark>g-row--pull-right</mark>
                </div>
            </div>
        </div>

        <h3>Center Remaining Columns</h3>
        <p>Add
            <mark>g-row--center</mark>
            on column parent class to center the remaining columns.
        </p>
        <div class="g-row g-row--col-4--min-full g-row--center">
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
        </div>

        <hr>

        <h2>Grid within Grid</h2>
        <div class="l-weighted-left">
            <div class="c-default">
                <h6>Another grid layout inside of a column.</h6>
                <div class="g-row g-row--col-2--min-small">
                    <div class="g-col">
                        <div class="c-default">Component</div>
                    </div>
                    <div class="g-col">
                        <div class="c-default">Component</div>
                    </div>
                    <div class="g-col">
                        <div class="c-default">Component</div>
                    </div>
                    <div class="g-col">
                        <div class="c-default">Component</div>
                    </div>
                </div>
            </div>
            <div class="c-default">Sidebar</div>
        </div>

        <hr>

        <h2>Remove Gutters</h2>
        <p>To remove gutters, add this helper class to the column parent container:
            <mark>g-row--no-gutters</mark>
        </p>
        <div class="g-row g-row--col-2 g-row--no-gutters">
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
        </div>

        <div class="g-row g-row--col-3 g-row--no-gutters">
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
        </div>

        <div class="g-row g-row--col-4 g-row--no-gutters">
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
            <div class="g-col">
                <div class="c-default">Component</div>
            </div>
        </div>

        <hr>

        <h2>Layouts MattCR likes to use in his designs</h2>
        <div class="g-row g-row--col-2--min-full">
            <div class="g-col">
                <div class="c-default">Main Content</div>
            </div>
            <div class="g-col">
                <div class="g-row g-row--col-2--min-small">
                    <div class="g-col">
                        <div class="c-default">Component</div>
                    </div>
                    <div class="g-col">
                        <div class="c-default">Component</div>
                    </div>
                    <div class="g-col">
                        <div class="c-default">Component</div>
                    </div>
                    <div class="g-col">
                        <div class="c-default">Component</div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <h2>Full Width Examples</h2>
        <p>( Just remove
            <mark>l-container</mark>
            )
        </p>
    </div>

    <div class="g-row g-row--col-2">
        <div class="g-col">
            <div class="c-default">Component</div>
        </div>
        <div class="g-col">
            <div class="c-default">Component</div>
        </div>
    </div>

</div>
