<?php

namespace RodrigoPedra\RecordProcessor\Traits\BuilderConcerns;

use RodrigoPedra\RecordProcessor\Stages\DownloadFileOutput;
use RodrigoPedra\RecordProcessor\Stages\ValidRecords;

trait BuildsStages
{
    public function filterValidRecords()
    {
        $this->addStage( new ValidRecords );

        return $this;
    }

    public function downloadFileOutput( $outputFilename = '', $deleteFileAfterDownload = false )
    {
        $this->addStage( new DownloadFileOutput( $outputFilename, $deleteFileAfterDownload ) );

        return $this;
    }
}
