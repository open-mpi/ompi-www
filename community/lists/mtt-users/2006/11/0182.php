<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov  3 09:54:41 2006" -->
<!-- isoreceived="20061103145441" -->
<!-- sent="Fri, 3 Nov 2006 09:54:06 -0500" -->
<!-- isosent="20061103145406" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] &amp;amp;join funclet and EvaluateString" -->
<!-- id="3253F7FB-1015-45C8-8E5F-EC13DB5C8C22_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20061103144643.GC59192_at_sr1-ubur-03.East.Sun.COM" -->
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
<strong>Date:</strong> 2006-11-03 09:54:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0183.php">Jeff Squyres: "[MTT users] Fwd: [mtt-results] Nightly MPI Install Failures"</a>
<li><strong>Previous message:</strong> <a href="0181.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>In reply to:</strong> <a href="0181.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0188.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Reply:</strong> <a href="0188.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 3, 2006, at 9:46 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev2">&gt;&gt; So just to confirm -- this works:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; command = ./configure --with-mpi-dir=&amp;test_prefix(); gmake
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right. I still like doing trim_quotes before returning, so
</span><br>
<span class="quotelev1">&gt; that we're more forgiving in allowing ''both'' of these:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; shell_build_command = configure --with-mpi-dir=&amp;test_prefix(); gmake
</span><br>
<span class="quotelev1">&gt; shell_build_command = &quot;configure --with-mpi-dir=&amp;test_prefix(); gmake&quot;
</span><br>
<p>But what if there are cases where I *do* want quotes?
<br>
<p>I'm more in favor of being as literal as possible.  What you type for  
<br>
the shell_build_command will be directly launched.  This provides  
<br>
greater flexiblity for if you *do* need quotes.  For example:
<br>
<p>shell_build_command = ./configure &quot;CFLAGS=-g -O&quot;
<br>
<p>In this case you definitely do not want to remove the quotes.
<br>
<p>More specifically, proper quoting handling is a really, really tricky  
<br>
task and I don't really want to tackle it.  :-)
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0183.php">Jeff Squyres: "[MTT users] Fwd: [mtt-results] Nightly MPI Install Failures"</a>
<li><strong>Previous message:</strong> <a href="0181.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>In reply to:</strong> <a href="0181.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0188.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Reply:</strong> <a href="0188.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
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
