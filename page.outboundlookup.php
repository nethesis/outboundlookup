<?php /* $Id */
//    License for all code of this FreePBX module can be found in the license file inside the module directory
//    Copyright 2015 Sangoma Technologies.
//
if (!defined('FREEPBX_IS_AUTH')) { die('No direct script access allowed'); }
$request = $_REQUEST;
$heading = _("OutboundLookup");
$pageinfo = _("Resolves outgoing called numbers using MySQL query and saves them in CDR outbound_cnam field");
$content = load_view(__DIR__.'/views/form.php', array('request' => $request));
?>
<div class="container-fluid">
    <h1><?php echo $heading ?></h1>
    <div class="well well-info">
        <?php echo $pageinfo ?>
    </div>
    <div class = "display full-border">
        <div class="row">
            <div class="col-sm-12">
                <div class="fpbx-container">
                    <div class="display full-border">
                        <?php echo $content?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
