<?php


namespace Robotism\Contract\Application;


use Robotism\Contract\Registry\Kernel;

interface Application
{
    public static function create():Application;
    public function run();
    public function withWrapper(Wrapper $wrapper);
    public function withKernel(Kernel $kernel);
}