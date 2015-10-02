@extends('layouts.main')

@section('main')

    <h1 id="kitchen-sink">Kitchen sink</h1>

    <h3 class="subheader">This page includes every single Foundation element so that we can make sure things
        work together smoothly.</h3>

    <h4 id="joyride">Joyride</h4>

    <div>
        <a class="secondary button" id="start-jr" name="start-jr">Start Joyride</a>

        <h5 class="so-awesome" id="numero1">Build Joyride with HTML</h5>

        <p class="so-awesome" id="numero2">Stop Number 2 for You!</p><!--stops-->

        <ol class="joyride-list" data-joyride="">
            <li data-class="custom so-awesome" data-id="numero1" data-text="Next">
                <h4>Stop #1</h4>

                <p>You can control all the details for your tour stop. Any valid HTML will
                    work inside of Joyride.</p>
            </li>

            <li data-button="Next" data-id="numero2">
                <h4>Stop #2</h4>

                <p>Get the details right by styling Joyride with a custom stylesheet!</p>
            </li>

            <li data-button="Next">
                <h4>Stop #3</h4>

                <p>It works as a modal too!</p>
            </li>
        </ol>
    </div>


    <hr>
    <h4 id="alert-boxes">Alert Boxes</h4>

    <div data-alert="" class="alert-box radius">
        This is a standard alert (div.alert-box.radius).
        <a href="" class="close">×</a>
    </div>

    <div data-alert="" class="alert-box success">
        This is a success alert (div.alert-box.success).
        <a href="" class="close">×</a>
    </div>

    <div data-alert="" class="alert-box alert round">
        This is an alert (div.alert-box.alert.round).
        <a href="" class="close">×</a>
    </div>

    <div data-alert="" class="alert-box secondary">
        This is a secondary alert (div.alert-box.secondary).
        <a href="" class="close">×</a>
    </div>


    <hr>
    <h4 id="block-grid">Block Grid</h4>
    <ul class="small-block-grid-2 large-block-grid-4">
        <li><img class="th" src="../assets/img/examples/comet-th.jpg"></li>
        <li><img class="th" src="../assets/img/examples/launch-th.jpg"></li>
        <li><img class="th" src="../assets/img/examples/space-th.jpg"></li>
        <li><img class="th" src="../assets/img/examples/spacewalk-th.jpg"></li>
    </ul>

    <hr>
    <h4 id="breadcrumbs">Breadcrumbs</h4>
    <ul class="breadcrumbs">
        <li><a href="#">Home</a></li>
        <li><a href="#">Features</a></li>
        <li class="unavailable"><a href="#">Gene Splicing</a></li>
        <li class="current"><a href="#">Cloning</a></li>
    </ul>

    <hr>
    <h4 id="buttons">Buttons</h4>

    <div class="row">
        <div class="small-6 large-6 columns">
            <a href="#" class="tiny button">.tiny.button</a><br>
            <a href="#" class="small button">.small.button</a><br>
            <a href="#" class="button">.button</a><br>
            <a href="#" class="button expand">.expand</a><br>
        </div>
        <div class="small-6 large-6 columns">
            <a href="#" class="tiny button secondary">.tiny.secondary</a><br>
            <a href="#" class="small button success radius">.small.success.radius</a><br>
            <a href="#" class="button alert round disabled">.round.disabled</a><br>

        </div>
    </div>

    <hr>
    <h4 id="button-groups">Button Groups</h4>
    <ul class="button-group">
        <li><a href="#" class="small button">Button 1</a></li>
        <li><a href="#" class="small button">Button 2</a></li>
        <li><a href="#" class="small button">Button 3</a></li>
    </ul>
    <ul class="button-group radius">
        <li><a href="#" class="button secondary">Button 1</a></li>
        <li><a href="#" class="button secondary">Button 2</a></li>
        <li><a href="#" class="button secondary">Button 3</a></li>
        <li><a href="#" class="button secondary">Button 4</a></li>
    </ul>
    <ul class="button-group round even-3">
        <li><a href="#" class="button alert">Button 1</a></li>
        <li><a href="#" class="button alert">Button 2</a></li>
        <li><a href="#" class="button alert">Button 3</a></li>
    </ul>
    <ul class="button-group round even-3">
        <li><input type="submit" class="button success" value="Button 1"></li>
        <li><input type="submit" class="button success" value="Button 2"></li>
        <li><input type="submit" class="button success" value="Button 3"></li>
    </ul>

    <hr>
    <h4 id="dropdown-buttons">Dropdown Buttons</h4>
    <ul id="drop" class="f-dropdown" data-dropdown-content="">
        <li><a href="#">This is a link</a></li>
        <li><a href="#">This is another</a></li>
        <li><a href="#">Yet another link</a></li>
    </ul>

    <p><a href="#" data-dropdown="drop" class="tiny button dropdown" aria-expanded="false">Tiny Dropdown
            Button</a><br>
        <a href="#" data-dropdown="drop" class="small secondary radius button dropdown" aria-expanded="false">Small
            Secondary Radius Dropdown Button</a><br>
        <a href="#" data-dropdown="drop" class="button alert round dropdown" aria-expanded="false">Button Alert
            Round Dropdown Button</a><br>
        <a href="#" data-dropdown="drop" class="large success button dropdown" aria-expanded="false">Large
            Success Dropdown Button</a><br>
        <a href="#" data-dropdown="drop" class="large button dropdown expand" aria-expanded="false">Large
            Expanded Dropdown Button</a></p>
    <hr>
    <h4 id="split-buttons">Split Buttons</h4>

    <p><a href="#" class="tiny button split">Tiny Split Button <span data-dropdown="drop"
                                                                     aria-expanded="false"></span></a><br>
        <a href="#" class="small secondary radius button split">Small Secondary Radius Split Button <span
                data-dropdown="drop" aria-expanded="false"></span></a><br>
        <a href="#" class="button alert round split">Round Alert Split Button <span data-dropdown="drop"
                                                                                    aria-expanded="false"></span></a><br>
        <a href="#" class="large success button split">Large Success Split Button <span data-dropdown="drop"
                                                                                        aria-expanded="false"></span></a>
    </p>
    <hr>
    <h4 id="switches">Switches</h4>

    <div class="small-2 switch tiny">
        <input id="a" name="switch-a" type="radio" checked="">
        <label for="a" onclick="">Off</label>

        <input id="a1" name="switch-a" type="radio">
        <label for="a1" onclick="">On</label>

        <span></span>
    </div>

    <div class="small-3 switch small">
        <input id="b" name="switch-b" type="radio" checked="">
        <label for="b" onclick="">Off</label>

        <input id="b1" name="switch-b" type="radio">
        <label for="b1" onclick="">On</label>

        <span></span>
    </div>

    <div class="small-4 switch radius">
        <input id="c" name="switch-c" type="radio" checked="">
        <label for="c" onclick="">Off</label>

        <input id="c1" name="switch-c" type="radio">
        <label for="c1" onclick="">On</label>

        <span></span>
    </div>

    <div class="small-6 switch large round">
        <input id="d" name="switch-d" type="radio" checked="">
        <label for="d" onclick="">Off</label>

        <input id="d1" name="switch-d" type="radio">
        <label for="d1" onclick="">On</label>

        <span></span>
    </div>


    <hr>
    <h4 id="clearing">Clearing</h4>

    <div>
        <div class="clearing-assembled">
            <div><a href="#" class="clearing-close">×</a>

                <div class="visible-img" style="display: none">
                    <div class="clearing-touch-label"></div>
                    <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" alt="">

                    <p class="clearing-caption"></p><a href="#" class="clearing-main-prev"><span></span></a><a
                        href="#" class="clearing-main-next"><span></span></a></div>
                <img class="clearing-preload-next" style="display: none"
                     src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" alt=""><img
                    class="clearing-preload-prev" style="display: none"
                    src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" alt="">

                <div class="carousel">
                    <ul class="clearing-thumbs" data-clearing="">
                        <li><a class="th" href="../assets/img/examples/comet.jpg"><img
                                    data-caption="Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum."
                                    src="../assets/img/examples/comet-th-sm.jpg"></a></li>

                        <li><a class="th" href="../assets/img/examples/earth.jpg"><img
                                    src="../assets/img/examples/earth-th-sm.jpg"></a></li>

                        <li><a class="th" href="../assets/img/examples/launch.jpg"><img
                                    data-caption="Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus."
                                    src="../assets/img/examples/launch-th-sm.jpg"></a></li>

                        <li><a class="th" href="../assets/img/examples/satelite.jpg"><img
                                    src="../assets/img/examples/satelite-th-sm.jpg"></a></li>

                        <li><a class="th" href="../assets/img/examples/space.jpg"><img
                                    data-caption="Integer posuere erat a ante venenatis dapibus posuere velit aliquet."
                                    src="../assets/img/examples/space-th-sm.jpg"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <hr>
    <h4 id="forms">Forms</h4>

    <form>
        <fieldset>
            <legend>Fieldset</legend>

            <div class="row">
                <div class="large-12 columns">
                    <label>Input Label</label>
                    <input type="text" placeholder="large-12.columns">
                </div>
            </div>

            <div class="row">
                <div class="large-4 columns">
                    <label>Input Label</label>
                    <input type="text" placeholder="large-4.columns">
                </div>
                <div class="large-4 columns">
                    <label>Input Label</label>
                    <input type="text" placeholder="large-4.columns">
                </div>
                <div class="large-4 columns">
                    <div class="row collapse">
                        <label>Input Label</label>

                        <div class="small-9 columns">
                            <input type="text" placeholder="small-9.columns">
                        </div>
                        <div class="small-3 columns">
                            <span class="postfix">.com</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="large-12 columns">
                    <label>Textarea Label</label>
                    <textarea placeholder="small-12.columns"></textarea>
                </div>
            </div>

        </fieldset>
    </form>

    <hr>
    <h4 id="dropdowns">Dropdowns</h4>

    <p><a class="button" data-dropdown="tinyDrop" href="#" aria-expanded="false">Link Dropdown »</a>
        <a class="button" data-dropdown="contentDrop" href="#" aria-expanded="false">Content Dropdown »</a>
        <!-- Dropdowns --></p>
    <ul class="f-dropdown" data-dropdown-content="" id="tinyDrop">
        <li><a href="#">This is a link</a></li>

        <li><a href="#">This is another</a></li>

        <li><a href="#">Yet another</a></li>
    </ul>

    <div class="f-dropdown content medium" data-dropdown-content="" id="contentDrop">
        <h4>Title</h4>

        <p>Some text that people will think is awesome! Some text that people will
            think is awesome! Some text that people will think is awesome!</p><img
            src="../assets/img/examples/launch.jpg">

        <p>Launching a Discovery Mission</p><a class="button" href="#">Button</a>
    </div>


    <hr>
    <h4 id="flex-video">Flex Video</h4>

    <div class="flex-video">
        <iframe width="420" height="315" src="http://www.youtube.com/embed/0_EW8aNgKlA" frameborder="0"
                allowfullscreen=""></iframe>
    </div>

    <hr>
    <h4 id="inline-lists">Inline Lists</h4>
    <ul class="inline-list">
        <li><a href="#">Link 1</a></li>
        <li><a href="#">Link 2</a></li>
        <li><a href="#">Link 3</a></li>
        <li><a href="#">Link 4</a></li>
        <li><a href="#">Link 5</a></li>
    </ul>

    <hr>
    <h4 id="keystroke">Keystroke</h4>

    <p>To make something pretty, press and hold <kbd>cmd + alt + shift + w + a + !</kbd></p>
    <hr>
    <h4 id="labels">Labels</h4>

    <p>
        <span class="label">Regular Label</span><br>
        <span class="radius secondary label">Radius Secondary Label</span><br>
        <span class="round alert label">Round Alert Label</span><br>
        <span class="success label">Success Label</span><br>
    </p>

    <hr>
    <h4 id="magellan">Magellan</h4>

    <div class="magellan-container" style="" data-magellan-expedition-clone="">
        <dl class="sub-nav">
            <dd data-magellan-arrival="build" class=""><a href="#build">Build with HTML</a></dd>
            <dd data-magellan-arrival="js" class="active"><a href="#js">Using Javascript</a></dd>
        </dl>
    </div>
    <div class="magellan-container fixed" data-magellan-expedition="fixed" style="position: fixed; top: 0px;">
        <dl class="sub-nav">
            <dd data-magellan-arrival="build" class=""><a href="#build">Build with HTML</a></dd>
            <dd data-magellan-arrival="js" class="active"><a href="#js">Using Javascript</a></dd>
        </dl>
    </div>

    <p><a name="build"></a></p>

    <p></p><h5 data-magellan-destination="build">Build With Predefined HTML Structure</h5>

    <p></p>

    <p>Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor fringilla.
        Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
        Vestibulum id ligula porta felis euismod semper.</p>

    <p><a name="js"></a></p>

    <p></p><h5 data-magellan-destination="js">Awesome JS Goodness</h5>

    <p></p>

    <p>Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor fringilla.
        Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
        Vestibulum id ligula porta felis euismod semper.</p>

    <hr>
    <h4 id="orbit">Orbit</h4>

    <div class="row">
        <div class="large-12 columns">
            <div class="orbit-container">
                <ul id="featured1" data-orbit="" data-options="timer_speed:5000;" class="orbit-slides-container"
                    style="height: 280px;">
                    <li class="" style="z-index: 2; margin-left: 100%;">
                        <img src="http://foundation.zurb.com/docs/assets/img/examples/satelite-orbit.jpg">

                        <div class="orbit-caption">
                            Caption One. Pellentesque habitant morbi tristique senectus et netus et malesuada
                            fames ac turpis egestas.
                        </div>
                    </li>
                    <li class="active" style="z-index: 4; margin-left: 0%;">
                        <img src="http://foundation.zurb.com/docs/assets/img/examples/andromeda-orbit.jpg">

                        <div class="orbit-caption">
                            Caption Two. Pellentesque habitant morbi tristique senectus et netus et malesuada
                            fames ac turpis egestas.
                        </div>
                    </li>
                    <li class="" style="z-index: 2; margin-left: 100%;">
                        <img src="http://foundation.zurb.com/docs/assets/img/examples/launch-orbit.jpg">

                        <div class="orbit-caption">
                            Caption Three. Pellentesque habitant morbi tristique senectus et netus et malesuada
                            fames ac turpis egestas.
                        </div>
                    </li>
                </ul>
                <a href="#" class="orbit-prev"><span></span></a><a href="#" class="orbit-next"><span></span></a>

                <div class="orbit-timer"><span></span>

                    <div class="orbit-progress" style="overflow: hidden; width: 18.36%;"></div>
                </div>
                <div class="orbit-slide-number"><span>2</span> of <span>3</span></div>
                <div class="orbit-bullets-container">
                    <ol class="orbit-bullets">
                        <li data-orbit-slide="0" class=""></li>
                        <li data-orbit-slide="1" class="active"></li>
                        <li data-orbit-slide="2" class=""></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <hr>
    <h4 id="pagination">Pagination</h4>
    <ul class="pagination">
        <li class="arrow unavailable"><a href="">«</a></li>
        <li class="current"><a href="">1</a></li>
        <li><a href="">2</a></li>
        <li><a href="">3</a></li>
        <li><a href="">4</a></li>
        <li class="unavailable"><a href="">…</a></li>
        <li><a href="">12</a></li>
        <li><a href="">13</a></li>
        <li class="arrow"><a href="">»</a></li>
    </ul>

    <hr>
    <h4 id="panels">Panels</h4>

    <div class="row">
        <div class="large-6 columns">
            <div class="panel">
                <h5>This is a regular panel.</h5>

                <p>It has an easy to override visual style, and is appropriately subdued.</p>
            </div>
        </div>
        <div class="large-6 columns">
            <div class="panel callout radius">
                <h5>This is a radius callout panel.</h5>

                <p>It's a little ostentatious, but useful for important content.</p>
            </div>
        </div>

        <p></p></div>
    <p></p>
    <h4 id="pricing-tables">Pricing Tables</h4>

    <div class="row">
        <div class="large-4 columns">
            <ul class="pricing-table">
                <li class="title">Standard</li>
                <li class="price">$99.99</li>
                <li class="description">An awesome description</li>
                <li class="bullet-item">1 Database</li>
                <li class="bullet-item">5GB Storage</li>
                <li class="bullet-item">20 Users</li>
                <li class="cta-button"><a class="button" href="#">Buy Now</a></li>
            </ul>
        </div>
    </div>

    <hr>
    <h4 id="progress-bars">Progress Bars</h4>

    <div class="progress large-6"><span class="meter" style="width: 40%"></span></div>
    <div class="radius progress success large-8"><span class="meter" style="width: 80%"></span></div>
    <div class="nice round progress alert large-10"><span class="meter" style="width: 30%"></span></div>
    <div class="nice secondary progress"><span class="meter" style="width: 50%"></span></div>

    <hr>
    <h4 id="reveal">Reveal</h4>

    <p><a href="#" data-reveal-id="firstModal" class="radius button">Example Modal…</a>
        <a href="#" data-reveal-id="videoModal" class="radius button">Example Video Modal…</a></p>
    <!-- Reveal Modals begin -->
    <div id="firstModal" class="reveal-modal" data-reveal="">
        <h2>This is a modal.</h2>

        <p>Reveal makes these very easy to summon and dismiss. The close button is simply an anchor with a
            unicode character icon and a class of <code>close-reveal-modal</code>. Clicking anywhere outside the
            modal will also dismiss it.</p>

        <p>Finally, if your modal summons another Reveal modal, the plugin will handle that for you
            gracefully.</p>

        <p><a href="#" data-reveal-id="secondModal" class="secondary button">Second Modal…</a></p>
        <a class="close-reveal-modal">×</a>
    </div>

    <div id="secondModal" class="reveal-modal" data-reveal="">
        <h2>This is a second modal.</h2>

        <p>See? It just slides into place after the first modal. Very handy when you need subsequent dialogs, or
            when a modal option impacts or requires another decision.</p>
        <a class="close-reveal-modal">×</a>
    </div>

    <div id="videoModal" class="reveal-modal large" data-reveal="">
        <h2>This modal has video</h2>

        <div class="flex-video">
            <iframe width="420" height="315" src="//www.youtube.com/embed/aiBt44rrslw" frameborder="0"
                    allowfullscreen=""></iframe>
        </div>

        <a class="close-reveal-modal">×</a>
    </div>
    <!-- Reveal Modals end -->

    <hr>
    <h4 id="sliders">Sliders</h4>

    <div class="range-slider" data-slider="50">
                        <span class="range-slider-handle" aria-valuemin="0" aria-valuemax="100" aria-valuenow="50"
                              style="transform: translateX(452px);"></span>
        <span class="range-slider-active-segment" style="width: 50%;"></span>
        <input type="hidden" value="50">
    </div>
    <div class="range-slider radius" data-slider="50">
                        <span class="range-slider-handle" aria-valuemin="0" aria-valuemax="100" aria-valuenow="50"
                              style="transform: translateX(452px);"></span>
        <span class="range-slider-active-segment" style="width: 50%;"></span>
        <input type="hidden" value="50">
    </div>
    <div class="range-slider round" data-slider="50">
                        <span class="range-slider-handle" aria-valuemin="0" aria-valuemax="100" aria-valuenow="50"
                              style="transform: translateX(452px);"></span>
        <span class="range-slider-active-segment" style="width: 50%;"></span>
        <input type="hidden" value="50">
    </div>
    <div class="range-slider" data-slider="40" data-options="step: 20;">
                        <span class="range-slider-handle" aria-valuemin="0" aria-valuemax="100" aria-valuenow="40"
                              style="transform: translateX(361.4px);"></span>
        <span class="range-slider-active-segment" style="width: 40%;"></span>
        <input type="hidden" value="40">
    </div>


    <hr>
    <h4 id="accordion">Accordion</h4>
    <ul class="accordion" data-accordion="">
        <li class="accordion-navigation active">
            <a href="#panel1a" aria-expanded="true">Accordion 1</a>

            <div id="panel1a" class="content active">
                <ul class="small-block-grid-2 large-block-grid-3 ">
                    <li><img src="http://placehold.it/350x150"></li>
                    <li><img src="http://placehold.it/350x150"></li>
                    <li><img src="http://placehold.it/350x150"></li>
                </ul>
            </div>
        </li>
        <li class="accordion-navigation">
            <a href="#panel2a" aria-expanded="false">Accordion 2</a>

            <div id="panel2a" class="content">
                <div class="row">
                    <div class="small-6 columns">
                        <p>Panel 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="small-6 columns">
                        <img src="http://placehold.it/350x150">
                    </div>
                </div>
            </div>
        </li>
        <li class="accordion-navigation">
            <a href="#panel3a" aria-expanded="false">Accordion 3</a>

            <div id="panel3a" class="content">
                Panel 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
        </li>
    </ul>

    <hr>
    <h4 id="tabs">Tabs</h4>
    <dl class="tabs" data-tab="">
        <dd class="active"><a href="#panel2-1">Tab 1</a></dd>
        <dd><a href="#panel2-2">Tab 2</a></dd>
        <dd><a href="#panel2-3">Tab 3</a></dd>
        <dd><a href="#panel2-4">Tab 4</a></dd>
    </dl>
    <div class="tabs-content">
        <div class="content active" id="panel2-1">
            <p>First panel content goes here...</p>
        </div>
        <div class="content" id="panel2-2">
            <p>Second panel content goes here...</p>
        </div>
        <div class="content" id="panel2-3">
            <p>Third panel content goes here...</p>
        </div>
        <div class="content" id="panel2-4">
            <p>Fourth panel content goes here...</p>
        </div>
    </div>

    <dl class="tabs vertical" data-tab="">
        <dd class="active"><a href="#panel1a">Tab 1</a></dd>

        <dd><a href="#panel2a">Tab 2</a></dd>

        <dd><a href="#panel3a">Tab 3</a></dd>

        <dd><a href="#panel4a">Tab 4</a></dd>
    </dl>

    <div class="tabs-content vertical">
        <div class="content active" id="panel1a">
            <p>Panel 1 content goes here.</p>
        </div>

        <div class="content" id="panel2a">
            <p>Panel 2 content goes here.</p>
        </div>

        <div class="content" id="panel3a">
            <p>Panel 3 content goes here.</p>
        </div>

        <div class="content" id="panel4a">
            <p>Panel 4 content goes here.</p>
        </div>
    </div>


    <hr>
    <h4 id="side-nav">Side Nav</h4>

    <div class="row">
        <div class="large-4 columns end">
            <ul class="side-nav">
                <li class="active"><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li class="divider"></li>
                <li><a href="#">Link 3</a></li>
                <li><a href="#">Link 4</a></li>
            </ul>
        </div>
    </div>

    <hr>
    <h4 id="sub-nav">Sub Nav</h4>
    <dl class="sub-nav">
        <dt>Filter:</dt>
        <dd class="active"><a href="#">All</a></dd>
        <dd><a href="#">Active</a></dd>
        <dd><a href="#">Pending</a></dd>
        <dd><a href="#">Suspended</a></dd>
    </dl>

    <hr>
    <h4 id="tables">Tables</h4>
    <table>
        <thead>
        <tr>
            <th width="200">Table Header</th>
            <th>Table Header</th>
            <th width="150">Table Header</th>
            <th width="150">Table Header</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Content Goes Here</td>
            <td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
            <td>Content Goes Here</td>
            <td>Content Goes Here</td>
        </tr>
        <tr>
            <td>Content Goes Here</td>
            <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
            <td>Content Goes Here</td>
            <td>Content Goes Here</td>
        </tr>
        <tr>
            <td>Content Goes Here</td>
            <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
            <td>Content Goes Here</td>
            <td>Content Goes Here</td>
        </tr>
        </tbody>
    </table>

    <hr>
    <h4 id="thumbnails">Thumbnails</h4>

    <p><img class="th" src="http://foundation.zurb.com/docs/assets/img/examples/earth-th-sm.jpg"><img class="th"
                                                                                                      src="http://foundation.zurb.com/docs/assets/img/examples/space-th-sm.jpg">
    </p>
    <hr>
    <h4 id="tooltips">Tooltips</h4>

    <p>The tooltips can be positioned on the <span data-tooltip="" class="has-tip" data-width="210"
                                                   data-selector="tooltip-if9e2tmj0"
                                                   aria-describedby="tooltip-if9e2tmj0"
                                                   title="">"tip-bottom"</span>, which is the default position,
                        <span data-tooltip="" class="has-tip tip-top noradius" data-width="210"
                              data-selector="tooltip-if9e2tmj1" aria-describedby="tooltip-if9e2tmj1"
                              title="">"tip-top" (hehe)</span>, <span data-tooltip="left" class="has-tip tip-left"
                                                                      data-width="90" title="">"tip-left"</span>, or <span
            data-tooltip="right" class="has-tip tip-right" data-width="120" title="">"tip-right"</span> of the
        target element by adding the appropriate class to them. You can even add your own custom class to style
        each tip differently. On a small device, the tooltips are full width and bottom aligned.</p>

    <hr>
    <h4 id="top-bar">Top Bar</h4>
    <nav class="top-bar" data-topbar="">
        <ul class="title-area">
            <!-- Title Area -->
            <li class="name">
                <h1>
                    <a href="#">
                        Top Bar Title
                    </a>
                </h1>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
        </ul>


        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
                <li class="divider"></li>
                <li class="has-dropdown not-click">
                    <a href="#">Main Item 1</a>
                    <ul class="dropdown">
                        <li class="title back js-generated"><h5><a href="javascript:void(0)">Back</a></h5></li>
                        <li class="parent-link hide-for-medium-up"><a class="parent-link js-generated" href="#">Main
                                Item 1</a></li>
                        <li><label>Section Name</label></li>
                        <li class="has-dropdown not-click">
                            <a href="#" class="">Has Dropdown, Level 1</a>
                            <ul class="dropdown">
                                <li class="title back js-generated"><h5><a href="javascript:void(0)">Back</a>
                                    </h5></li>
                                <li class="parent-link hide-for-medium-up"><a class="parent-link js-generated"
                                                                              href="#">Has Dropdown, Level 1</a>
                                </li>
                                <li><a href="#">Dropdown Options</a></li>
                                <li><a href="#">Dropdown Options</a></li>
                                <li><a href="#">Level 2</a></li>
                                <li><a href="#">Subdropdown Option</a></li>
                                <li><a href="#">Subdropdown Option</a></li>
                                <li><a href="#">Subdropdown Option</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dropdown Option</a></li>
                        <li><a href="#">Dropdown Option</a></li>
                        <li class="divider"></li>
                        <li><label>Section Name</label></li>
                        <li><a href="#">Dropdown Option</a></li>
                        <li><a href="#">Dropdown Option</a></li>
                        <li><a href="#">Dropdown Option</a></li>
                        <li class="divider"></li>
                        <li><a href="#">See all →</a></li>
                    </ul>
                </li>
                <li class="divider"></li>
                <li class="has-dropdown not-click">
                    <a href="#">Main Item 2</a>
                    <ul class="dropdown">
                        <li class="title back js-generated"><h5><a href="javascript:void(0)">Back</a></h5></li>
                        <li class="parent-link hide-for-medium-up"><a class="parent-link js-generated" href="#">Main
                                Item 2</a></li>
                        <li><a href="#">Dropdown Option</a></li>
                        <li><a href="#">Dropdown Option</a></li>
                        <li><a href="#">Dropdown Option</a></li>
                        <li class="divider"></li>
                        <li><a href="#">See all →</a></li>
                    </ul>
                </li>
            </ul>
        </section>
    </nav>

    <!-- End Top Bar -->

    <hr>
    <h4 id="type">Type</h4>

    <div class="type-demo">

        <h1>h1. This is a very large header.</h1>

        <h2>h2. This is a large header.</h2>

        <h3>h3. This is a medium header.</h3>
        <h4>h4. This is a moderate header.</h4>
        <h5>h5. This is a small header.</h5>
        <h6>h6. This is a tiny header.</h6>

        <br>

        <h1 class="subheader">h1. subheader</h1>

        <h2 class="subheader">h2. subheader</h2>

        <h3 class="subheader">h3. subheader</h3>
        <h4 class="subheader">h4. subheader</h4>
        <h5 class="subheader">h5. subheader</h5>
        <h6 class="subheader">h6. subheader</h6>

        <hr>

        <h3>Definition List</h3>
        <h5>Definition lists are great for small block of copy that describe the header</h5>
        <dl>
            <dt>Lower cost</dt>
            <dd>The new version of this product costs significantly less than the previous one!</dd>
            <dt>Easier to use</dt>
            <dd>We've changed the product so that it's much easier to use!</dd>
            <dt>Safe for kids</dt>
            <dd>You can leave your kids alone in a room with this product and they won't get hurt (not a
                guarantee).
            </dd>
        </dl>
        <hr>

        <h5>Un-ordered lists are great for making quick outlines bulleted.</h5>
        <ul class="disc">
            <li>List item with a much longer description or more content.</li>
            <li>List item</li>
            <li>List item
                <ul>
                    <li>Nested List Item</li>
                    <li>Nested List Item</li>
                    <li>Nested List Item</li>
                </ul>
            </li>
            <li>List item</li>
            <li>List item</li>
            <li>List item</li>
        </ul>

        <h5>Ordered lists are great for lists that need order, duh.</h5>
        <ol>
            <li>List Item 1</li>
            <li>List Item 2</li>
            <li>List Item 3</li>
        </ol>


        <br>
        <h5>Blockquote</h5>
        <blockquote>I do not fear computers. I fear the lack of them. Maecenas faucibus mollis interdum. Aenean
            lacinia bibendum nulla sed consectetur.<cite>Isaac Asimov</cite></blockquote>

        <br>
        <h5>Vcard</h5>
        <ul class="vcard">
            <li class="fn">Gaius Baltar</li>
            <li class="street-address">123 Colonial Ave.</li>
            <li class="locality">Caprica City</li>
            <li><span class="state">Caprica</span>, <span class="zip">12345</span></li>
            <li class="email"><a href="#">g.baltar@example.com</a></li>
        </ul>

    </div>

    <hr>
    <h4 id="visibility-classes">Visibility Classes</h4>
    <h5 id="screen-size-visibility-control-show-">Screen Size Visibility Control (Show)</h5>

    <p>The following text should describe the screen size you're using:</p>

    <div class="row">
        <div class="large-6 columns">
            <h4>HTML</h4>
        <pre><code class="language-html">
                <div class="code-container"><span class="tag">&lt;<span class="title">p</span> <span
                            class="attribute">class</span>=<span class="value">"panel"</span>&gt;</span>
                    <span class="tag">&lt;<span class="title">strong</span> <span class="attribute">class</span>=<span
                            class="value">"show-for-small-only"</span>&gt;</span>This text is shown only on a small
                    screen.<span
                        class="tag">&lt;/<span class="title">strong</span>&gt;</span>
                    <span class="tag">&lt;<span class="title">strong</span> <span class="attribute">class</span>=<span
                            class="value">"show-for-medium-up"</span>&gt;</span>This text is shown on medium screens and
                    up.<span class="tag">&lt;/<span class="title">strong</span>&gt;</span>
                    <span class="tag">&lt;<span class="title">strong</span> <span class="attribute">class</span>=<span
                            class="value">"show-for-medium-only"</span>&gt;</span>This text is shown only on a medium
                    screen.<span class="tag">&lt;/<span class="title">strong</span>&gt;</span>
                    <span class="tag">&lt;<span class="title">strong</span> <span class="attribute">class</span>=<span
                            class="value">"show-for-large-up"</span>&gt;</span>This text is shown on large screens and
                    up.<span
                        class="tag">&lt;/<span class="title">strong</span>&gt;</span>
                    <span class="tag">&lt;<span class="title">strong</span> <span class="attribute">class</span>=<span
                            class="value">"show-for-large-only"</span>&gt;</span>This text is shown only on a large
                    screen.<span
                        class="tag">&lt;/<span class="title">strong</span>&gt;</span>
                    <span class="tag">&lt;<span class="title">strong</span> <span class="attribute">class</span>=<span
                            class="value">"show-for-xlarge-up"</span>&gt;</span>This text is shown on xlarge screens and
                    up.<span class="tag">&lt;/<span class="title">strong</span>&gt;</span>
                    <span class="tag">&lt;<span class="title">strong</span> <span class="attribute">class</span>=<span
                            class="value">"show-for-xlarge-only"</span>&gt;</span>This text is shown only on an xlarge
                    screen.<span class="tag">&lt;/<span class="title">strong</span>&gt;</span>
                    <span class="tag">&lt;<span class="title">strong</span> <span class="attribute">class</span>=<span
                            class="value">"show-for-xxlarge-up"</span>&gt;</span>This text is shown on xxlarge screens and
                    up.<span class="tag">&lt;/<span class="title">strong</span>&gt;</span>
                    <span class="tag">&lt;/<span class="title">p</span>&gt;</span></div>
            </code></pre>

        </div>
        <div class="large-6 columns">
            <h4>Rendered HTML</h4>

            <p class="panel">
                <strong class="show-for-small-only">This text is shown only on a small screen.</strong>
                <strong class="show-for-medium-up">This text is shown on medium screens and up.</strong>
                <strong class="show-for-medium-only">This text is shown only on a medium screen.</strong>
                <strong class="show-for-large-up">This text is shown on large screens and up.</strong>
                <strong class="show-for-large-only">This text is shown only on a large screen.</strong>
                <strong class="show-for-xlarge-up">This text is shown on xlarge screens and up.</strong>
                <strong class="show-for-xlarge-only">This text is shown only on an xlarge screen.</strong>
                <strong class="show-for-xxlarge-up">This text is shown on xxlarge screens and up.</strong>
            </p>
        </div>
    </div>


    <h5 id="screen-size-visibility-control-hide-">Screen Size Visibility Control (Hide)</h5>

    <p>The following text should describe the screen size you aren't using:</p>

    <div class="row">
        <div class="large-6 columns">
            <h4>HTML</h4>
        <pre><code class="language-html">
                <div class="code-container"><span class="tag">&lt;<span class="title">p</span> <span
                            class="attribute">class</span>=<span class="value">"panel"</span>&gt;</span>
                    <span class="tag">&lt;<span class="title">strong</span> <span class="attribute">class</span>=<span
                            class="value">"hide-for-small-only"</span>&gt;</span>You are <span class="tag">&lt;<span
                            class="title">em</span>&gt;</span>not<span class="tag">&lt;/<span
                            class="title">em</span>&gt;</span>
                    on a small screen.<span class="tag">&lt;/<span class="title">strong</span>&gt;</span>
                    <span class="tag">&lt;<span class="title">strong</span> <span class="attribute">class</span>=<span
                            class="value">"hide-for-medium-up"</span>&gt;</span>You are <span class="tag">&lt;<span
                            class="title">em</span>&gt;</span>not<span class="tag">&lt;/<span
                            class="title">em</span>&gt;</span>
                    on a medium, large, xlarge, or xxlarge screen.<span class="tag">&lt;/<span
                            class="title">strong</span>&gt;</span>
                    <span class="tag">&lt;<span class="title">strong</span> <span class="attribute">class</span>=<span
                            class="value">"hide-for-medium-only"</span>&gt;</span>You are <span class="tag">&lt;<span
                            class="title">em</span>&gt;</span>not<span class="tag">&lt;/<span
                            class="title">em</span>&gt;</span>
                    on a medium screen.<span class="tag">&lt;/<span class="title">strong</span>&gt;</span>
                    <span class="tag">&lt;<span class="title">strong</span> <span class="attribute">class</span>=<span
                            class="value">"hide-for-large-up"</span>&gt;</span>You are <span class="tag">&lt;<span
                            class="title">em</span>&gt;</span>not<span class="tag">&lt;/<span
                            class="title">em</span>&gt;</span>
                    on a large, xlarge, or xxlarge screen.<span class="tag">&lt;/<span
                            class="title">strong</span>&gt;</span>
                    <span class="tag">&lt;<span class="title">strong</span> <span class="attribute">class</span>=<span
                            class="value">"hide-for-large-only"</span>&gt;</span>You are <span class="tag">&lt;<span
                            class="title">em</span>&gt;</span>not<span class="tag">&lt;/<span
                            class="title">em</span>&gt;</span>
                    on a large screen.<span class="tag">&lt;/<span class="title">strong</span>&gt;</span>
                    <span class="tag">&lt;<span class="title">strong</span> <span class="attribute">class</span>=<span
                            class="value">"hide-for-xlarge-up"</span>&gt;</span>You are <span class="tag">&lt;<span
                            class="title">em</span>&gt;</span>not<span class="tag">&lt;/<span
                            class="title">em</span>&gt;</span>
                    on an xlarge screen and up.<span class="tag">&lt;/<span class="title">strong</span>&gt;</span>
                    <span class="tag">&lt;<span class="title">strong</span> <span class="attribute">class</span>=<span
                            class="value">"hide-for-xlarge-only"</span>&gt;</span>You are <span class="tag">&lt;<span
                            class="title">em</span>&gt;</span>not<span class="tag">&lt;/<span
                            class="title">em</span>&gt;</span>
                    on an xlarge screen.<span class="tag">&lt;/<span class="title">strong</span>&gt;</span>
                    <span class="tag">&lt;<span class="title">strong</span> <span class="attribute">class</span>=<span
                            class="value">"hide-for-xxlarge-up"</span>&gt;</span>You are <span class="tag">&lt;<span
                            class="title">em</span>&gt;</span>not<span class="tag">&lt;/<span
                            class="title">em</span>&gt;</span>
                    on an xxlarge screen.<span class="tag">&lt;/<span class="title">strong</span>&gt;</span>
                    <span class="tag">&lt;/<span class="title">p</span>&gt;</span></div>
            </code></pre>

        </div>
        <div class="large-6 columns">
            <h4>Rendered HTML</h4>

            <p class="panel">
                <strong class="hide-for-small-only">You are <em>not</em> on a small screen.</strong>
                <strong class="hide-for-medium-up">You are <em>not</em> on a medium, large, xlarge, or xxlarge
                    screen.</strong>
                <strong class="hide-for-medium-only">You are <em>not</em> on a medium screen.</strong>
                <strong class="hide-for-large-up">You are <em>not</em> on a large, xlarge, or xxlarge
                    screen.</strong>
                <strong class="hide-for-large-only">You are <em>not</em> on a large screen.</strong>
                <strong class="hide-for-xlarge-up">You are <em>not</em> on an xlarge screen and up.</strong>
                <strong class="hide-for-xlarge-only">You are <em>not</em> on an xlarge screen.</strong>
                <strong class="hide-for-xxlarge-up">You are <em>not</em> on an xxlarge screen.</strong>
            </p>
        </div>
    </div>


    <h5 id="orientation-detection">Orientation Detection</h5>

    <p>The following text should describe the device orientation you're using:</p>

    <div class="row">
        <div class="large-6 columns">
            <h4>HTML</h4>
        <pre><code class="language-html">
                <div class="code-container"><span class="tag">&lt;<span class="title">p</span> <span
                            class="attribute">class</span>=<span class="value">"panel"</span>&gt;</span>
                    <span class="tag">&lt;<span class="title">strong</span> <span class="attribute">class</span>=<span
                            class="value">"show-for-landscape"</span>&gt;</span>You are in landscape orientation.<span
                        class="tag">&lt;/<span class="title">strong</span>&gt;</span>
                    <span class="tag">&lt;<span class="title">strong</span> <span class="attribute">class</span>=<span
                            class="value">"show-for-portrait"</span>&gt;</span>You are in portrait orientation.<span
                        class="tag">&lt;/<span class="title">strong</span>&gt;</span>
                    <span class="tag">&lt;/<span class="title">p</span>&gt;</span></div>
            </code></pre>

        </div>
        <div class="large-6 columns">
            <h4>Rendered HTML</h4>

            <p class="panel">
                <strong class="show-for-landscape">You are in landscape orientation.</strong>
                <strong class="show-for-portrait">You are in portrait orientation.</strong>
            </p>
        </div>
    </div>


    <h5 id="touch-detection">Touch Detection</h5>

    <p>The following text should describe if you're using a touch device:</p>

    <div class="row">
        <div class="large-6 columns">
            <h4>HTML</h4>
        <pre><code class="language-html">
                <div class="code-container"><span class="tag">&lt;<span class="title">p</span> <span
                            class="attribute">class</span>=<span class="value">"panel"</span>&gt;</span>
                    <span class="tag">&lt;<span class="title">strong</span> <span class="attribute">class</span>=<span
                            class="value">"show-for-touch"</span>&gt;</span>You are on a touch-enabled device.<span
                        class="tag">&lt;/<span
                            class="title">strong</span>&gt;</span>
                    <span class="tag">&lt;<span class="title">strong</span> <span class="attribute">class</span>=<span
                            class="value">"hide-for-touch"</span>&gt;</span>You are not on a touch-enabled device.<span
                        class="tag">&lt;/<span class="title">strong</span>&gt;</span>
                    <span class="tag">&lt;/<span class="title">p</span>&gt;</span></div>
            </code></pre>

        </div>
        <div class="large-6 columns">
            <h4>Rendered HTML</h4>

            <p class="panel">
                <strong class="show-for-touch">You are on a touch-enabled device.</strong>
                <strong class="hide-for-touch">You are not on a touch-enabled device.</strong>
            </p>
        </div>
    </div>

@stop