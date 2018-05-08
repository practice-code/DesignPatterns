<?php
class DeveloperManager extends HiringManager{
    protected function makeInterview():Interviewer
    {
        return new Developer();
    }

}