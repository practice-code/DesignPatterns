<?php

/**
 * Class HiringManager
 */
abstract class HiringManager{

    /**
     * factory method
     * @return Interviewer
     */
    abstract protected function makeInterview():Interviewer;

    /**
     *
     */
    public  function takeInterview(){
        $interviewer = $this->makeInterview();
        $interviewer->askQuestion();
    }

}