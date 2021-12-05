<?php


namespace Robotism\Contract\Application;


interface Wrapper
{
    public function mount(Application $application);
    public function run();
}