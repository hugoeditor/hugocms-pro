<?php
namespace editor;

define("GIT_COMMAND", "cd ".ROOT_DIR." && git add --all && git commit -m ");
define("GIT_PUSH_COMMAND", " && git push".STDERR_REDIRECT);
define("GIT_RESET_COMMAND", "cd ".ROOT_DIR." && git reset --hard".STDERR_REDIRECT);

function versioning($data)
{
	$msg = "generated commit by HugoCMS Editor";
	if(isset($data['commsg'])) $msg = $data['commsg'];
	execute(GIT_COMMAND.'"'.$msg.'"'.GIT_PUSH_COMMAND);
}

function restore()
{
	execute(GIT_RESET_COMMAND);
}

