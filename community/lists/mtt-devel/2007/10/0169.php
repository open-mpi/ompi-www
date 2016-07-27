<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 17 09:31:14 2007" -->
<!-- isoreceived="20071017133114" -->
<!-- sent="Wed, 17 Oct 2007 09:31:09 -0400" -->
<!-- isosent="20071017133109" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Handling &amp;quot;Interrupted system call&amp;quot; with MTT" -->
<!-- id="20071017133108.GF9693_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FF4E2C4D-710F-4B05-ACBE-27614FF40796_at_cisco.com" -->
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
<strong>Date:</strong> 2007-10-17 09:31:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0170.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>Previous message:</strong> <a href="0168.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>In reply to:</strong> <a href="0168.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0170.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>Reply:</strong> <a href="0170.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Oct/17/2007 07:45:53AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Oct 16, 2007, at 6:36 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The bail is that &quot;make&quot; will eventually succeed or fail
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; with something other than &quot;interrupted system call&quot;. Do
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; we need another condition?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm just worried that Sun's NFS will somehow get in a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; perpetual &quot;interrupted system call&quot; loop such that you'll
</span><br>
<span class="quotelev3">&gt; &gt;&gt; never actually break out of it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; How about a counter? E.g., after &quot;x&quot; number of &quot;interrupted
</span><br>
<span class="quotelev2">&gt; &gt; system call&quot; messages, MTT moves on. Or should the &quot;command
</span><br>
<span class="quotelev2">&gt; &gt; restart&quot; go in DoCommand.pm so we can have a timeout?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Either or both of those would be fine (don't we have a timeout in  
</span><br>
<span class="quotelev1">&gt; DoCommand.pm already?).
</span><br>
<p>There is a timeout in DoCommand, but currently I keep
<br>
reinvoking DoCommand on each &quot;interrupted system call&quot; so
<br>
the timeout gets reset each time. This would not be the case
<br>
if the do-while were to go in DoCommand. Then again, an
<br>
infinite loop is certain in the case of a command that is
<br>
*expected* to output &quot;interrupted system call&quot;.
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I also noticed that our build script (which prints hundreds
</span><br>
<span class="quotelev2">&gt; &gt; of &quot;interrupted system call&quot; messages per build, but does
</span><br>
<span class="quotelev2">&gt; &gt; not seem to die because of them) uses &quot;make -j 24&quot; while MTT
</span><br>
<span class="quotelev2">&gt; &gt; has been using &quot;make -j 4&quot;. I'll experiment with -j.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know that Terry/Sun and co. spent a good amount of time trying to  
</span><br>
<span class="quotelev1">&gt; solve the &quot;interrupted system call&quot; error -- they may have some more  
</span><br>
<span class="quotelev1">&gt; information for you, such as how/why it happens...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0170.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>Previous message:</strong> <a href="0168.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>In reply to:</strong> <a href="0168.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0170.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>Reply:</strong> <a href="0170.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
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
