<?php

function create_header(){

    $header_content =   '<header>
                            <div class="clearfix back">
                                <div class="logo">
                                    <img src="./wp-content/themes/movie/lib/imgs/logo.png" alt="logo">
                                </div>
                                <div class="menu">
                                        <ul>
                                            <li>Welcome</li>
                                            <li>Movie</li>
                                            <li>About</li>
                                        </ul>
                                </div>
                            </div>
                        </header>';

    echo $header_content;
}