<?php
//	License for all code of this FreePBX module can be found in the license file inside the module directory
//	Copyright 2015 Sangoma Technologies.
//?>
<div id='toolbar-cidrnav'>
  <a href="config.php?display=outboundlookup" class="btn btn-default"><i class="fa fa-list"></i>&nbsp; <?php echo _("List Sources") ?></a>
</div>
<table data-url="ajax.php?module=outboundlookup&amp;command=getJSON&amp;jdata=grid"
  data-toolbar="#toolbar-cidrnav"
  data-cache="false"
  data-toggle="table"
  data-search="true"
  class="table" id="table-all-side">
    <thead>
        <tr>
            <th data-sortable="true" data-field="outboundlookup_id" data-formatter="outboundlookupformatter"><?php echo _('Source')?></th>
        </tr>
    </thead>
</table>
<script type="text/javascript">
  function outboundlookupformatter(v,r){
    return r['description']+'&nbsp;('+r['sourcetype']+')';
  }
  $("#table-all-side").on('click-row.bs.table',function(e,row,elem){
     console.log(row);
    window.location = '?display=outboundlookup&view=form&itemid='+row['outboundlookup_id']+'&extdisplay='+row['outboundlookup_id'];
  })
</script>
