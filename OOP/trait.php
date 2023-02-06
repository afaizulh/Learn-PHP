<?php

trait Test {
    public function testing()
    {
        echo "ini adalah testing";
    }
}

class PanggilTrait {
    use Test;
}

