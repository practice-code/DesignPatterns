<?php
class MarketingManager extends HiringManager{
    protected function makeInterview(): Interviewer
    {
        return new Marketing();
    }
}