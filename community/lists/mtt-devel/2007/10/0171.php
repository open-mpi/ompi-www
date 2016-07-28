<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 17 15:18:11 2007" -->
<!-- isoreceived="20071017191811" -->
<!-- sent="Wed, 17 Oct 2007 15:18:06 -0400" -->
<!-- isosent="20071017191806" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[MTT devel] RFC: Timing info for DoCommand::Cmd" -->
<!-- id="20071017191805.GH9693_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-17 15:18:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0172.php">Jeff Squyres: "Re: [MTT devel] RFC: Timing info for DoCommand::Cmd"</a>
<li><strong>Previous message:</strong> <a href="0170.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0172.php">Jeff Squyres: "Re: [MTT devel] RFC: Timing info for DoCommand::Cmd"</a>
<li><strong>Reply:</strong> <a href="0172.php">Jeff Squyres: "Re: [MTT devel] RFC: Timing info for DoCommand::Cmd"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Add timing info to DoCommand::Cmd
<br>
<p>WHY: Need visibility into how long individual commands are
<br>
taking (right now we only time entire phases). 
<br>
<p>WHERE: DoCommand.pm, client/mtt, Messages.pm
<br>
<p>WHEN: ASAP
<br>
<p>-------
<br>
<p>I need to see how long individual commands are taking within
<br>
an MTT run. There is a Benchmark core module (available
<br>
everywhere) to help with this. I would like to have this
<br>
feature enabled with a --benchmark-command (-b) option.
<br>
(Note: this can not be part of the --debug option --debug or
<br>
--verbose options since these options affect the execution
<br>
time of commands.) See attached patch. (Or should this
<br>
somehow work together with --print-time?)
<br>
<p>-Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0172.php">Jeff Squyres: "Re: [MTT devel] RFC: Timing info for DoCommand::Cmd"</a>
<li><strong>Previous message:</strong> <a href="0170.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0172.php">Jeff Squyres: "Re: [MTT devel] RFC: Timing info for DoCommand::Cmd"</a>
<li><strong>Reply:</strong> <a href="0172.php">Jeff Squyres: "Re: [MTT devel] RFC: Timing info for DoCommand::Cmd"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
