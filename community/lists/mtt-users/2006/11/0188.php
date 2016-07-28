<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov  3 12:08:59 2006" -->
<!-- isoreceived="20061103170859" -->
<!-- sent="Fri, 3 Nov 2006 12:08:33 -0500" -->
<!-- isosent="20061103170833" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] &amp;amp;join funclet and EvaluateString" -->
<!-- id="20061103170833.GD59192_at_sr1-ubur-03.East.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3253F7FB-1015-45C8-8E5F-EC13DB5C8C22_at_cisco.com" -->
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
<strong>Date:</strong> 2006-11-03 12:08:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0189.php">Tim Mattox: "Re: [MTT users] &quot;testing&quot; flag"</a>
<li><strong>Previous message:</strong> <a href="0187.php">Jeff Squyres: "[MTT users] &quot;testing&quot; flag"</a>
<li><strong>In reply to:</strong> <a href="0182.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0191.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Reply:</strong> <a href="0191.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Nov/03/2006 09:54:06AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Nov 3, 2006, at 9:46 AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So just to confirm -- this works:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; command = ./configure --with-mpi-dir=&amp;test_prefix(); gmake
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Right?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Right. I still like doing trim_quotes before returning, so
</span><br>
<span class="quotelev2">&gt; &gt; that we're more forgiving in allowing ''both'' of these:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; shell_build_command = configure --with-mpi-dir=&amp;test_prefix(); gmake
</span><br>
<span class="quotelev2">&gt; &gt; shell_build_command = &quot;configure --with-mpi-dir=&amp;test_prefix(); gmake&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But what if there are cases where I *do* want quotes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm more in favor of being as literal as possible.  What
</span><br>
<span class="quotelev1">&gt; you type for  the shell_build_command will be directly
</span><br>
<span class="quotelev1">&gt; launched.  This provides  greater flexiblity for if you
</span><br>
<span class="quotelev1">&gt; *do* need quotes.  For example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; shell_build_command = ./configure &quot;CFLAGS=-g -O&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In this case you definitely do not want to remove the quotes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More specifically, proper quoting handling is a really,
</span><br>
<span class="quotelev1">&gt; really tricky  task and I don't really want to tackle it.
</span><br>
<span class="quotelev1">&gt; :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Ah, sorry I was unclear. trim_quotes (not strip_quotes) will
<br>
remove only leading and trailing quotes. But right, it would
<br>
wreck something like this:
<br>
<p>&nbsp;&nbsp;shell_build_command = ./configure &amp;my_cflags()
<br>
<p>If you wanted the above to expand to:
<br>
<p>&nbsp;&nbsp;shell_build_command = ./configure &quot;CFLAGS=-g -O&quot;
<br>
<p>My last proposal would be this:
<br>
<p><pre>
---
Index: lib/MTT/DoCommand.pm
===================================================================
--- lib/MTT/DoCommand.pm	(revision 411)
+++ lib/MTT/DoCommand.pm	(working copy)
@@ -194,6 +194,11 @@
             select STDOUT;
             $| = 1;
 
+            # Remove leading/trailing quotes, which
+            # protects against a common funclet syntax error
+            @$tokens[0] =~ s/^\&quot;+//;
+            @$tokens[(@$tokens - 1)] =~ s/\&quot;+$//;
+
             # Run it!
 
             exec(@$tokens) ||
@@ -323,6 +328,11 @@
         $max_stdout_lines, $max_stderr_lines) = @_;
 
     my ($fh, $filename) = tempfile();
+
+    # Remove leading/trailing quotes, which
+    # protects against a common funclet syntax error
+    $cmds =~ s/^\&quot;+|\&quot;+$//g;
+
     print $fh &quot;:\n$cmds\n&quot;;
     close($fh);
     chmod(0700, $filename);
 ----
Point taken about being literal. My thinking is that most
will be only guessing about the quoting mechanism of
funclets (as I was for a bit), and there would never be a
real case for sending '&quot;cmd&quot;' to exec().
-Ethan
&gt; -- 
&gt; Jeff Squyres
&gt; Server Virtualization Business Unit
&gt; Cisco Systems
&gt; 
&gt; _______________________________________________
&gt; mtt-users mailing list
&gt; mtt-users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0189.php">Tim Mattox: "Re: [MTT users] &quot;testing&quot; flag"</a>
<li><strong>Previous message:</strong> <a href="0187.php">Jeff Squyres: "[MTT users] &quot;testing&quot; flag"</a>
<li><strong>In reply to:</strong> <a href="0182.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0191.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Reply:</strong> <a href="0191.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
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
