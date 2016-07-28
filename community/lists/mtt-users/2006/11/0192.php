<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov  3 13:52:31 2006" -->
<!-- isoreceived="20061103185231" -->
<!-- sent="Fri, 3 Nov 2006 13:52:23 -0500" -->
<!-- isosent="20061103185223" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] &amp;amp;join funclet and EvaluateString" -->
<!-- id="20061103185223.GB39413_at_sr1-ubur-03.East.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="188F8CC4-01AC-44A5-91E1-B31D57B36833_at_cisco.com" -->
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
<strong>Date:</strong> 2006-11-03 13:52:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0193.php">Josh Hursey: "[MTT users] Valid INI file and MPI Details section"</a>
<li><strong>Previous message:</strong> <a href="0191.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>In reply to:</strong> <a href="0191.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0194.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The patch was for DoCommand.pm which wouldn't affect @foo@,
<br>
right? (Isn't @foo@ dealt with in Run.pm?) I would revise
<br>
the patch to only chop the trailing '&quot;' only if there is a
<br>
leading '&quot;'. So we only remove quotes that wrap the whole
<br>
command.
<br>
<p>+++ lib/MTT/DoCommand.pm	(working copy)
<br>
+            # Remove wrapping quotes, which
<br>
+            # protects against a common funclet syntax error
<br>
+            @$tokens[(@$tokens - 1)] =~ s/\&quot;$//
<br>
+                if ((@$tokens[0] =~ s/^\&quot;//) &gt; 0);
<br>
+
<br>
<p>+
<br>
+    # Remove wrapping quotes, which
<br>
+    # protects against a common funclet syntax error
<br>
+    $cmds =~ s/\&quot;$//
<br>
+        if (($cmds =~ s/^\&quot;//) &gt; 0);
<br>
+
<br>
<p>I fold after this :)
<br>
<p>-Ethan
<br>
<p><p>On Fri, Nov/03/2006 01:21:03PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Nov 3, 2006, at 12:08 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Point taken about being literal. My thinking is that most
</span><br>
<span class="quotelev2">&gt; &gt; will be only guessing about the quoting mechanism of
</span><br>
<span class="quotelev2">&gt; &gt; funclets (as I was for a bit), and there would never be a
</span><br>
<span class="quotelev2">&gt; &gt; real case for sending '&quot;cmd&quot;' to exec().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How about a doc fix then?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not so worried about a '&quot;cmd&quot;' to exec(), but more about other  
</span><br>
<span class="quotelev1">&gt; fields.  Remember  that shell commands are a very small portion of  
</span><br>
<span class="quotelev1">&gt; the fields used in MTT - there's others that are explicitly used as  
</span><br>
<span class="quotelev1">&gt; portions of commands.  For example you could do something like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; shell_command = ./configure @foo@
</span><br>
<span class="quotelev1">&gt; foo = &quot;CFLAGS=-g -O&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which then wouldn't work.
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
<li><strong>Next message:</strong> <a href="0193.php">Josh Hursey: "[MTT users] Valid INI file and MPI Details section"</a>
<li><strong>Previous message:</strong> <a href="0191.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>In reply to:</strong> <a href="0191.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0194.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
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
