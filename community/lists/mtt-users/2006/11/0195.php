<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Nov  4 15:18:05 2006" -->
<!-- isoreceived="20061104201805" -->
<!-- sent="Fri, 3 Nov 2006 16:30:29 -0500" -->
<!-- isosent="20061103213029" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] &amp;amp;join funclet and EvaluateString" -->
<!-- id="20061103213028.GD39413_at_sr1-ubur-03.East.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E94FB200-8FDF-4F4A-BD89-FE67A0DAA17B_at_cisco.com" -->
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
<strong>Date:</strong> 2006-11-03 16:30:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0196.php">Ethan Mallove: "Re: [MTT users] Valid INI file and MPI Details section"</a>
<li><strong>Previous message:</strong> <a href="0194.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>In reply to:</strong> <a href="0194.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0198.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Reply:</strong> <a href="0198.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Nov/03/2006 03:31:40PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; No, @foo@ is evaluated when shell_command is evaluated. 
</span><br>
<p>There's this block in Test/Run.pm, but I don't see the analogous
<br>
block anywhere else (e.g., Build or Install).
<br>
<p>{{{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;while ($exec =~ m/@(.+?)@/) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my $val = $ini-&gt;val($mpi_details_section, $1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (!$val) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Warning(&quot;Used undefined key @$1@ in exec value; skipping&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$exec =~ s/@(.+?)@/$val/;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
}}}
<br>
<p><p><span class="quotelev1">&gt; So it would  have it's &quot; chopped before it was folded into
</span><br>
<span class="quotelev1">&gt; shell_command,  resulting in a the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; ./configure CFLAGS=-g -O
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which would be wrong.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I admit to not having looked closely at your patch; would
</span><br>
<span class="quotelev1">&gt; it handle  this scenario properly?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>No, the always erroneous command-wrapping quotes get chopped
<br>
just before they're passed to exec() in DoCommand. It would
<br>
not chop the trailing quote, because there's no leading
<br>
quote.
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 3, 2006, at 1:21 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 3, 2006, at 12:08 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Point taken about being literal. My thinking is that most
</span><br>
<span class="quotelev3">&gt; &gt;&gt; will be only guessing about the quoting mechanism of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; funclets (as I was for a bit), and there would never be a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; real case for sending '&quot;cmd&quot;' to exec().
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; How about a doc fix then?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm not so worried about a '&quot;cmd&quot;' to exec(), but more about other
</span><br>
<span class="quotelev2">&gt; &gt; fields.  Remember  that shell commands are a very small portion of
</span><br>
<span class="quotelev2">&gt; &gt; the fields used in MTT - there's others that are explicitly used as
</span><br>
<span class="quotelev2">&gt; &gt; portions of commands.  For example you could do something like this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; shell_command = ./configure @foo@
</span><br>
<span class="quotelev2">&gt; &gt; foo = &quot;CFLAGS=-g -O&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; which then wouldn't work.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0196.php">Ethan Mallove: "Re: [MTT users] Valid INI file and MPI Details section"</a>
<li><strong>Previous message:</strong> <a href="0194.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>In reply to:</strong> <a href="0194.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0198.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Reply:</strong> <a href="0198.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
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
