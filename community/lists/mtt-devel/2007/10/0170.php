<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 17 10:43:11 2007" -->
<!-- isoreceived="20071017144311" -->
<!-- sent="Wed, 17 Oct 2007 10:42:51 -0400" -->
<!-- isosent="20071017144251" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Handling &amp;quot;Interrupted system call&amp;quot; with MTT" -->
<!-- id="D2EEEC7B-5BE1-45A1-9331-1BF526170693_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071017133108.GF9693_at_sun.com" -->
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
<strong>Date:</strong> 2007-10-17 10:42:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0171.php">Ethan Mallove: "[MTT devel] RFC: Timing info for DoCommand::Cmd"</a>
<li><strong>Previous message:</strong> <a href="0169.php">Ethan Mallove: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>In reply to:</strong> <a href="0169.php">Ethan Mallove: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 17, 2007, at 9:31 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Either or both of those would be fine (don't we have a timeout in
</span><br>
<span class="quotelev2">&gt;&gt; DoCommand.pm already?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a timeout in DoCommand, but currently I keep
</span><br>
<span class="quotelev1">&gt; reinvoking DoCommand on each &quot;interrupted system call&quot; so
</span><br>
<span class="quotelev1">&gt; the timeout gets reset each time. This would not be the case
</span><br>
<span class="quotelev1">&gt; if the do-while were to go in DoCommand.
</span><br>
<p>Ah -- I see what you're saying.  Good point -- I agree.
<br>
<p><span class="quotelev1">&gt; Then again, an
</span><br>
<span class="quotelev1">&gt; infinite loop is certain in the case of a command that is
</span><br>
<span class="quotelev1">&gt; *expected* to output &quot;interrupted system call&quot;.
</span><br>
<p>But only if that command *always* output &quot;interrupted system call&quot;.   
<br>
So yes, I'm a bit paranoid about an unlikely corner case.  But we  
<br>
might as well handle it in the off-chance that it happens (and output  
<br>
a noisy error message so that you can tell if it happened, because  
<br>
that likely means that something is wrong with your cluster  
<br>
infrastructure).
<br>
<p>And bang on your OS guys to fix the real problem while you're at  
<br>
it.  ;-)
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0171.php">Ethan Mallove: "[MTT devel] RFC: Timing info for DoCommand::Cmd"</a>
<li><strong>Previous message:</strong> <a href="0169.php">Ethan Mallove: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>In reply to:</strong> <a href="0169.php">Ethan Mallove: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<!-- nextthread="start" -->
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
