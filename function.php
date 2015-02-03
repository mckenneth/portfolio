<?php
    // $main_class             ='';
    // $project_class          = 'project';
    $project_logo           = 'project__title-logo';
    $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $home = 'http://'.$_SERVER['HTTP_HOST'].'/portfolio/';

    /* show lazy image with fallback */
    function showImg($src, $class) {
        list($width, $height) = getimagesize("$src");
        echo "<img class='lazy $class'  src='img/spacer.gif' data-original='$src' width='$width' height='$height'>";
        echo "<noscript><img src='$src'  width='$width' height='$height'></noscript>";
    }

    /* Project Navigation */
    $projects = array('kokko', 'kenton', 'oakandfort', 'arrivehome', 'pekarskystein', 'stringamdenecky', 'artesia', 'cityofvancouver', 'onegoodidea' );
    $x = array_search($project, $projects);
    $nextproject = $projects[($x +1)];
    $prevproject = $projects[($x -1)];

    $logo_svg = 'PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHR
wOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJtbGljb24iIHg9Ij
BweCIgeT0iMHB4IiB3aWR0aD0iMTUwMHB4IiBoZWlnaHQ9IjgzMXB4IiB2aWV3Qm94PSIwIDAgM
TUwMCA4MzEiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDE1MDAgODMxIiB4bWw6c3BhY2U9
InByZXNlcnZlIj4KPHN0eWxlPgoJLm1saWNvbiB7CgkJZmlsbDoJIzY2NjsKCX0KPC9zdHlsZT4
KPHBhdGggaWQ9ImMiIGQ9Ik0xNTAxLjEwNyA2MjEuNDkxYy0xMC43NTYgMzUuMzEyLTI5Ljk2My
A5Mi4xMi00My43OTMgMTE4LjIgYy0yMS41MTIgNC42MDYtODYuMDQ5IDE5Ljk1OS0xNDEuMzY2I
DE5Ljk1OWMtMTkxLjMwNiAwLTI3NS4wNS0xMzIuMDM5LTI3NS4wNS0yNTQuMDk5YzAtMTYxLjk3
OCAxMjQuNDY0LTI2Ny45MTcgMjk1Ljc5NC0yNjcuOTE3IGM2Mi4yMzIgMCAxMTQuNSAxNi45IDE
zNiAyMC43MjdjNi4xNDYgNDMgMTAuOCA3NC41IDE1LjQgMTE1LjE1bC0yMi4yODEgNi4xIGMtMj
AuNzQzLTgxLjM3My02Ni44NDEtMTE0LjM4My0xNDkuODE3LTExNC4zODNjLTEyOC4zMDUgMC0xO
TYuNjg0IDEwOC4yNDEtMTk2LjY4NCAyMjQuOSBjMCAxNDMuNiA4NC41IDI0MS44IDIwMS4zIDI0
MS44MTZjNzguMzY2IDAgMTE5Ljg1NC00Mi4yMjIgMTU4LjI2OS0xMTguMjIxTDE1MDEuMTA3IDY
yMS40OTF6IiBjbGFzcz0ibWxpY29uIi8+CjxwYXRoIGlkPSJhIiBkPSJNMTIzMy4yMjYgODYuMT
Y5YzAgNTQuNTA0LTUwLjcwNyA4Ny41MTQtOTguMzQyIDk5Ljc5N2wtNy42ODMtMTkuOTU5IGMzN
i44NzgtMTUuMzUzIDU5LjE1OC0zMy4wMSA1OS4xNTgtNjQuNDg0YzAtMjYuODY5LTIyLjI4LTQy
Ljk5LTQ3LjYzNC00Ny41OTZjLTUuMzc4LTAuNzY4LTkuOTg4LTYuMTQyLTkuOTg4LTE1LjM1NCB
jMC0yMC43MjcgMTkuMjA4LTI5LjkzOSAzMy4wMzctMjkuOTM5QzExOTQuMDQzIDguNiAxMjMzLj
IgMzcuOCAxMjMzLjIgODYuMTY5eiIgY2xhc3M9Im1saWNvbiIvPgo8cGF0aCBpZD0ibSIgZD0iT
TczMC41MTggODMwLjAzOXYtMzUuODI0YzEwNS04Ljk1NiAxMDguODQxLTE2LjYzMyAxMDguODQx
LTE1Mi4yNTVsLTUuMTIyLTUyMi4wMTZoLTUuMTIxIEw1MTYuNjc2IDgyMS4wODNoLTI1LjYwOUw
yMDQuMjM3IDEzNy44NTdoLTIuNTYxTDE4Mi40NjkgNTAyLjVjLTUuMTIyIDEwNi4xOTQtNS4xMj
IgMTYxLjIxMS0zLjg0MSAyMTIuNCBjMi41NjEgNjEuNCAzMiA3MC40IDExNy44IDc5LjMyNnYzN
S44MjRILTEuOTIxdi0zNS44MjRjNzUuNTQ5LTcuNjc3IDk5Ljg3OC0yMy4wMyAxMDguODQyLTc2
Ljc2OCBjNy42ODMtNDQuNzggMTUuMzY2LTk5Ljc5NyAyNC4zMjktMjM0LjEzOWwxNy45MjctMjY
2LjEyNkMxNjAuNzAxIDUwLjkgMTU0LjMgNDUuNyAzNy44IDM0LjIyMlYtMS42MDNoMjEwbDI5MS
45NTEgNjQxIEw4MzYuNzk4LTEuNjAzaDIxNy42ODN2MzUuODI1Qzk0MC41MTggNDQuNSA5MzIuO
CA0NyA5MzYuNyAxNzguNzk5TDk0OC4yIDY0MiBjMy44NDIgMTM1LjYgNy43IDE0My4zIDExOS4x
IDE1Mi4yNTV2MzUuODI0SDczMC41MTh6IiBjbGFzcz0ibWxpY29uIi8+Cjwvc3ZnPgo=';
?>