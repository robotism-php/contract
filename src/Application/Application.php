<?php


namespace Robotism\Contract\Application;


use Robotism\Contract\Registry\Kernel;

interface Application
{
    public static function create():Application;
    public function at(string $directory):self;
    public function getAppRoot():string;
    public function withWrapper(Wrapper $wrapper):self;
    public function withKernel(Kernel $kernel):self;
    public function run();
    public function runConsole();
}