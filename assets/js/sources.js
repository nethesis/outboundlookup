function edit_onsubmit() {
	defaultEmptyOK = false;
        if (!$.trim($('#mysql_host').val()).length)
			return warnInvalid($('#mysql_host'), "Please enter a valid MySQL Host name");

        if (!$.trim($('#mysql_dbname').val()).length)
			return warnInvalid($('#mysql_dbname'), "Please enter a valid MySQL Database name");

        if (!$.trim($('#mysql_query').val()).length)
			return warnInvalid($('#mysql_query'), "Please enter a valid MySQL Query string");

        if (!$.trim($('#mysql_username').val()).length)
			return warnInvalid($('#mysql_username'), "Please enter a valid MySQL Username");
	return true;
}
