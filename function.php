<?php
    $currentpage = basename($_SERVER['PHP_SELF'],".php");
    $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $home = 'http://'.$_SERVER['HTTP_HOST'].'/portfolio/';
    
    // require('inc/about.php');
    if ($title = '') {  
        $title = "M'c kenneth Licon - Interactive Media Designer";   
    } else {
        $is_home = false;
    }

    // require('inc/about.php');
    if ($currentpage == 'index') {  
        $is_home = true;    
    } else {
        $is_home = false;
    }

    function bodyclass() {
        global $currentpage;

        if ($currentpage == 'index') { 
            echo 'body--home';
        } else { 
            echo $currentpage;
        }
    }

    /* Project Navigation */
    $projects = array('kokko', 'kenton', 'artesia', 'oakandfort','stringamdenecky', 'arrivehome', 'pekarskystein', 'cityofvancouver');
    $x = array_search($project, $projects);
    
    if ($page == 'styleguide') {

    } else {
        $backtohome = $home;
        $nextproject = $projects[($x +1)];
        $prevproject = $projects[($x -1)];
    }

    if (($nextproject == '') || ($prevproject == '')) {
        $projNavclass = 'project-nav--two';
    };

    $logo = 'PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxNTAwIDgzMSI+CjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+CnBhdGggewoJZmlsbDogIzY2NjsKfQo8L3N0eWxlPgo8cGF0aCBkPSJNMTQ3OC44MjcgNjEzLjgxNGMtMzguNDE1IDc1Ljk5OS03OS45MDIgMTE4LjIyMS0xNTguMjY5IDExOC4yIGMtMTE2Ljc4MSAwLTIwMS4yOTQtOTguMjYyLTIwMS4yOTQtMjQxLjgxNmMwLTExNi42ODYgNjguMzc5LTIyNC45MjcgMTk2LjY4NC0yMjQuOTI3YzgyLjk3NyAwIDEyOS4xIDMzIDE0OS44IDExNC40IGwyMi4yODEtNi4xNDJjLTQuNjEtNDAuNjg2LTkuMjItNzIuMTYxLTE1LjM2Ni0xMTUuMTVjLTIxLjUxMy0zLjgzOC03My43NTYtMjAuNzI3LTEzNS45ODgtMjAuNzI3IGMtMTcxLjMzIDAtMjk1Ljc5NCAxMDUuOTM4LTI5NS43OTQgMjY3LjkxN2MwIDEyMi4xIDgzLjcgMjU0LjEgMjc1LjEgMjU0LjA5OWM1NS4zMTcgMCAxMTkuODU0LTE1LjM1MyAxNDEuMzY2LTE5Ljk1OSBjMTMuODMtMjYuMTAxIDMzLjAzNy04Mi45MDggNDMuNzkzLTExOC4yMjFMMTQ3OC44MjcgNjEzLjgxNHoiLz4KPHBhdGggZD0iTTExMjcuMjAxIDE2Ni4wMDZsNy42ODMgMTkuOTU5YzQ3LjYzNS0xMi4yODMgOTguMzQyLTQ1LjI5MiA5OC4zNDItOTkuNzk3IGMwLTQ4LjM2My0zOS4xODMtNzcuNTM1LTcxLjQ1MS03Ny41MzVjLTEzLjgyOSAwLTMzLjAzNyA5LjIxMi0zMy4wMzcgMjkuOTM5YzAgOS4yIDQuNiAxNC4
2IDEwIDE1LjQgYzI1LjM1NCA0LjYgNDcuNiAyMC43IDQ3LjYgNDcuNTk2QzExODYuMzU5IDEzMyAxMTY0LjEgMTUwLjcgMTEyNy4yIDE2Ni4wMDZ6Ii8+CjxwYXRoIGQ9Ik05NDguMiA2NDEuOTZsLTExLjUyNC00NjMuMTYxYy0zLjg0Mi0xMzEuNzgzIDMuODQyLTEzNC4zNDIgMTE3LjgwNS0xNDQuNTc4Vi0xLjYwM0g4MzYuNzk4IEw1MzkuNzI1IDYzOS40MDFMMjQ3Ljc3NC0xLjYwM2gtMjEwdjM1LjgyNWMxMTYuNTI0IDExLjUgMTIyLjkgMTYuNiAxMTEuNCAxODIuOTYxTDEzMS4yNSA0ODMuMyBjLTguOTYzIDEzNC4zNDItMTYuNjQ2IDE4OS4zNTgtMjQuMzI5IDIzNC4xMzljLTguOTYzIDUzLjczNy0zMy4yOTMgNjkuMDkxLTEwOC44NDIgNzYuNzY4djM1LjgyNGgyOTguMzU0di0zNS44MjQgYy04NS43OTItOC45NTYtMTE1LjI0NC0xNy45MTMtMTE3LjgwNS03OS4zMjZjLTEuMjgtNTEuMTc4LTEuMjgtMTA2LjE5NCAzLjg0MS0yMTIuMzg5bDE5LjIwOC0zNjQuNjQzaDIuNTYxbDI4Ni44MjkgNjgzLjIgaDI1LjYwOWwzMTIuNDM5LTcwMS4xMzloNS4xMjFsNS4xMjIgNTIyLjAxNmMwIDEzNS42MjItMy44NDEgMTQzLjI5OS0xMDguODQxIDE1Mi4yNTV2MzUuODI0aDMzNi43Njh2LTM1LjgyNCBDOTU1Ljg4MyA3ODUuMyA5NTIgNzc3LjYgOTQ4LjIgNjQxLjk2eiIvPgo8L3N2Zz4=';

    $logo_outline = 'PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgLTIgMTUwMCA4MzMiPgo8cGF0aCBzdHJva2U9IiNjY2MiIGZpbGw9Im5vbmUiIGQ9Ik0xNDc4LjgyNyA2MTMuODE0Yy0zOC40MTUgNzUuOTk5LTc5LjkwMiAxMTguMjIxLTE1OC4yNjkgMTE4LjIgYy0xMTYuNzgxIDAtMjAxLjI5NC05OC4yNjItMjAxLjI5NC0yNDEuODE2YzAtMTE2LjY4NiA2OC4zNzktMjI0LjkyNyAxOTYuNjg0LTIyNC45MjdjODIuOTc3IDAgMTI5LjEgMzMgMTQ5LjggMTE0LjQgbDIyLjI4MS02LjE0MmMtNC42MS00MC42ODYtOS4yMi03Mi4xNjEtMTUuMzY2LTExNS4xNWMtMjEuNTEzLTMuODM4LTczLjc1Ni0yMC43MjctMTM1Ljk4OC0yMC43MjcgYy0xNzEuMzMgMC0yOTUuNzk0IDEwNS45MzgtMjk1Ljc5NCAyNjcuOTE3YzAgMTIyLjEgODMuNyAyNTQuMSAyNzUuMSAyNTQuMDk5YzU1LjMxNyAwIDExOS44NTQtMTUuMzUzIDE0MS4zNjYtMTkuOTU5IGMxMy44My0yNi4xMDEgMzMuMDM3LTgyLjkwOCA0My43OTMtMTE4LjIyMUwxNDc4LjgyNyA2MTMuODE0eiIvPgo8cGF0aCBzdHJva2U9IiNjY2MiIGZpbGw9Im5vbmUiIGQ9Ik0xMTI3LjIwMSAxNjYuMDA2bDcuNjgzIDE5Ljk1OWM0Ny42MzUtMTIuMjgzIDk4LjM0Mi00NS4yOTIgOTguMzQyLTk5Ljc5NyBjMC00OC4zNjMtMzkuMTgzLTc3LjUzNS03MS40NTEtNzcuNTM1Yy0xMy44MjkgMC0zMy4wMzcgOS4yMTItMzMuMDM3IDI5LjkzOWMwIDkuMiA0LjYgMTQuNiA
xMCAxNS40IGMyNS4zNTQgNC42IDQ3LjYgMjAuNyA0Ny42IDQ3LjU5NkMxMTg2LjM1OSAxMzMgMTE2NC4xIDE1MC43IDExMjcuMiAxNjYuMDA2eiIvPgo8cGF0aCBzdHJva2U9IiNjY2MiIGZpbGw9Im5vbmUiIGQ9Ik05NDguMiA2NDEuOTZsLTExLjUyNC00NjMuMTYxYy0zLjg0Mi0xMzEuNzgzIDMuODQyLTEzNC4zNDIgMTE3LjgwNS0xNDQuNTc4Vi0xLjYwM0g4MzYuNzk4IEw1MzkuNzI1IDYzOS40MDFMMjQ3Ljc3NC0xLjYwM2gtMjEwdjM1LjgyNWMxMTYuNTI0IDExLjUgMTIyLjkgMTYuNiAxMTEuNCAxODIuOTYxTDEzMS4yNSA0ODMuMyBjLTguOTYzIDEzNC4zNDItMTYuNjQ2IDE4OS4zNTgtMjQuMzI5IDIzNC4xMzljLTguOTYzIDUzLjczNy0zMy4yOTMgNjkuMDkxLTEwOC44NDIgNzYuNzY4djM1LjgyNGgyOTguMzU0di0zNS44MjQgYy04NS43OTItOC45NTYtMTE1LjI0NC0xNy45MTMtMTE3LjgwNS03OS4zMjZjLTEuMjgtNTEuMTc4LTEuMjgtMTA2LjE5NCAzLjg0MS0yMTIuMzg5bDE5LjIwOC0zNjQuNjQzaDIuNTYxbDI4Ni44MjkgNjgzLjIgaDI1LjYwOWwzMTIuNDM5LTcwMS4xMzloNS4xMjFsNS4xMjIgNTIyLjAxNmMwIDEzNS42MjItMy44NDEgMTQzLjI5OS0xMDguODQxIDE1Mi4yNTV2MzUuODI0aDMzNi43Njh2LTM1LjgyNCBDOTU1Ljg4MyA3ODUuMyA5NTIgNzc3LjYgOTQ4LjIgNjQxLjk2eiIvPgo8L3N2Zz4=';

    $brand = '<img class="logo" src="data:image/svg+xml;base64,'.$logo.'" width="56" height="31" alt="Mlicon">';

?>