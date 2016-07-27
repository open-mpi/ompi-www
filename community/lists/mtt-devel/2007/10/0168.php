<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 17 07:46:30 2007" -->
<!-- isoreceived="20071017114630" -->
<!-- sent="Wed, 17 Oct 2007 07:45:53 -0400" -->
<!-- isosent="20071017114553" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Handling &amp;quot;Interrupted system call&amp;quot; with MTT" -->
<!-- id="FF4E2C4D-710F-4B05-ACBE-27614FF40796_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071016223625.GE9693_at_sun.com" -->
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
<strong>Date:</strong> 2007-10-17 07:45:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0169.php">Ethan Mallove: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>Previous message:</strong> <a href="0167.php">Ethan Mallove: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>In reply to:</strong> <a href="0167.php">Ethan Mallove: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0169.php">Ethan Mallove: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>Reply:</strong> <a href="0169.php">Ethan Mallove: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 16, 2007, at 6:36 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; The bail is that &quot;make&quot; will eventually succeed or fail
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with something other than &quot;interrupted system call&quot;. Do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we need another condition?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm just worried that Sun's NFS will somehow get in a
</span><br>
<span class="quotelev2">&gt;&gt; perpetual &quot;interrupted system call&quot; loop such that you'll
</span><br>
<span class="quotelev2">&gt;&gt; never actually break out of it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How about a counter? E.g., after &quot;x&quot; number of &quot;interrupted
</span><br>
<span class="quotelev1">&gt; system call&quot; messages, MTT moves on. Or should the &quot;command
</span><br>
<span class="quotelev1">&gt; restart&quot; go in DoCommand.pm so we can have a timeout?
</span><br>
<p>Either or both of those would be fine (don't we have a timeout in  
<br>
DoCommand.pm already?).
<br>
<p><span class="quotelev1">&gt; I also noticed that our build script (which prints hundreds
</span><br>
<span class="quotelev1">&gt; of &quot;interrupted system call&quot; messages per build, but does
</span><br>
<span class="quotelev1">&gt; not seem to die because of them) uses &quot;make -j 24&quot; while MTT
</span><br>
<span class="quotelev1">&gt; has been using &quot;make -j 4&quot;. I'll experiment with -j.
</span><br>
<p>I know that Terry/Sun and co. spent a good amount of time trying to  
<br>
solve the &quot;interrupted system call&quot; error -- they may have some more  
<br>
information for you, such as how/why it happens...?
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
<li><strong>Next message:</strong> <a href="0169.php">Ethan Mallove: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>Previous message:</strong> <a href="0167.php">Ethan Mallove: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>In reply to:</strong> <a href="0167.php">Ethan Mallove: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0169.php">Ethan Mallove: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>Reply:</strong> <a href="0169.php">Ethan Mallove: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
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
