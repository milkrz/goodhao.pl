<?php
    require_once('lib/Page.php');
    $page = new Page(__FILE__, "default", "Title for default");    
    require_once("layouts/loader.php");
?>

<?php



echo '<h1>bramus/router</h1>
              <p>Try these routes:<p>
              <ul>
              <li><a href="/hello">/hello</a></li>
                <li><a href="/hello/joe">/hello/<em>name</em></a></li>
                <li><a href="/hello/joe?surname=kowalski">/hello/<em>name2</em></a></li>
                <li><a href="/blog">/blog</a></li>
                <li><a href="/blog/'.date('Y').'">/blog/<em>year</em></a></li>
                <li><a href="/blog/'.date('Y').'/'.date('m').'">/blog/<em>year</em>/<em>month</em></a></li>
                <li><a href="/blog/'.date('Y').'/'.date('m').'/'.date('d').'">/blog/<em>year</em>/<em>month</em>/<em>day</em></a></li>
                <li><a href="/movies">/movies</a></li>
                <li><a href="/movies/23">/movies/<em>id</em></a></li>
              </ul>
              <br><br>
              <p>Custom error routes</p>
              <ul>
                <li><a href="/something">/*</a> <em>Normal 404</em></li>
                <li><a href="/test">/test/*</a> <em>Custom 404</em></li>
                <li><a href="/api/getUser">/api/getUser</a> <em>API 404</em></li>
              </ul>
        ';
?>