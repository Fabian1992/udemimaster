<?php

    function setActive($routName)
    {
        return request()->routeIs($routName)?'active':'';
    }

