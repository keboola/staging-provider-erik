<?php

namespace Keboola\WorkspaceProvider\Staging\Workspace;

class RedshiftWorkspaceStaging extends WorkspaceStaging
{
    public static function getType()
    {
        return 'redshift';
    }
}
