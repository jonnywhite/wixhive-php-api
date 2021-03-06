<?php
/**
 * User: EpicFormBuilder
 * Email: support@epicformbuilder.com
 * Date: 3/29/15
 * Time: 4:04 PM
 */
namespace epicformbuilder\WixHiveApi\Commands\Sites;

use epicformbuilder\WixHiveApi\Commands\Command;
use epicformbuilder\WixHiveApi\ResponseProcessors\Processor;
use epicformbuilder\WixHiveApi\ResponseProcessors\Site;

class GetSiteUrls extends Command
{
    /** @var  string */
    protected $command = "/sites/site";

    /** @var string */
    protected $httpMethod = "GET";

    public function __construct()
    {
    }

    /**
     * @return Processor|Site
     */
    public function getResponseProcessor()
    {
        return new Site();
    }

}