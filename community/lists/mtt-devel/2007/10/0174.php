<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 17 16:23:10 2007" -->
<!-- isoreceived="20071017202310" -->
<!-- sent="Wed, 17 Oct 2007 16:22:51 -0400" -->
<!-- isosent="20071017202251" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] RFC: Timing info for DoCommand::Cmd" -->
<!-- id="445190DB-662C-41CE-B3E5-557F722FA9BE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071017201417.GI9693_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-17 16:22:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0175.php">Ethan Mallove: "Re: [MTT devel] RFC: Timing info for DoCommand::Cmd"</a>
<li><strong>Previous message:</strong> <a href="0173.php">Ethan Mallove: "Re: [MTT devel] RFC: Timing info for DoCommand::Cmd"</a>
<li><strong>In reply to:</strong> <a href="0173.php">Ethan Mallove: "Re: [MTT devel] RFC: Timing info for DoCommand::Cmd"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0175.php">Ethan Mallove: "Re: [MTT devel] RFC: Timing info for DoCommand::Cmd"</a>
<li><strong>Reply:</strong> <a href="0175.php">Ethan Mallove: "Re: [MTT devel] RFC: Timing info for DoCommand::Cmd"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What is Timing($cmd, timestr($timediff));?
<br>
<p>That's not found on my OS X on RHEL4U4 boxen.
<br>
<p><p><p>On Oct 17, 2007, at 4:14 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Oct/17/2007 04:01:43PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; There was no patch attached...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 17, 2007, at 3:18 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHAT: Add timing info to DoCommand::Cmd
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHY: Need visibility into how long individual commands are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; taking (right now we only time entire phases).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHERE: DoCommand.pm, client/mtt, Messages.pm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHEN: ASAP
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I need to see how long individual commands are taking within
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an MTT run. There is a Benchmark core module (available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; everywhere) to help with this. I would like to have this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; feature enabled with a --benchmark-command (-b) option.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Note: this can not be part of the --debug option --debug or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --verbose options since these options affect the execution
</span><br>
<span class="quotelev3">&gt;&gt;&gt; time of commands.) See attached patch. (Or should this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; somehow work together with --print-time?)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mtt-benchmark.diff&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0175.php">Ethan Mallove: "Re: [MTT devel] RFC: Timing info for DoCommand::Cmd"</a>
<li><strong>Previous message:</strong> <a href="0173.php">Ethan Mallove: "Re: [MTT devel] RFC: Timing info for DoCommand::Cmd"</a>
<li><strong>In reply to:</strong> <a href="0173.php">Ethan Mallove: "Re: [MTT devel] RFC: Timing info for DoCommand::Cmd"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0175.php">Ethan Mallove: "Re: [MTT devel] RFC: Timing info for DoCommand::Cmd"</a>
<li><strong>Reply:</strong> <a href="0175.php">Ethan Mallove: "Re: [MTT devel] RFC: Timing info for DoCommand::Cmd"</a>
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
