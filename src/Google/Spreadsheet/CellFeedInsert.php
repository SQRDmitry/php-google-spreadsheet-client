<?php

namespace Google\Spreadsheet;

use Google\Spreadsheet\CellFeed;
use Google\Spreadsheet\Worksheet;

/**
 * Insert data to sheet without loading sheet's content to memory
 * Work only with data you want to add to sheet.
 */
class CellFeedInsert extends CellFeed
{
    /**
     * @param Worksheet $worksheet
     */
    public function __construct(Worksheet $worksheet)
    {
    	$this->worksheet = $worksheet;
    }

    /**
     * Get the feed post url
     *
     * @return string
     */
    public function getPostUrl()
    {
        return $this->worksheet->getCellFeedUrl();
    }

    /**
     * Get the feed post url for batch inserting
     *
     * @return string
     */
    public function getBatchUrl()
    {
        return $this->getPostUrl() . '/batch';
    }
}
