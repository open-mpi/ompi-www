<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct  5 11:28:11 2006" -->
<!-- isoreceived="20061005152811" -->
<!-- sent="Thu, 5 Oct 2006 11:28:05 -0400" -->
<!-- isosent="20061005152805" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] FW: [mtt-results] Nightly Test Build Failures" -->
<!-- id="20061005152805.GL37980_at_sr1-ubur-07.East.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C14A7C52.29AEB%jsquyres_at_cisco.com" -->
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
<strong>Date:</strong> 2006-10-05 11:28:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0131.php">Jeff Squyres: "Re: [MTT users] [mtt-results] Nightly Test Build Failures"</a>
<li><strong>Previous message:</strong> <a href="0129.php">Jeff Squyres: "Re: [MTT users] Multiple scratch dirs needed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0131.php">Jeff Squyres: "Re: [MTT users] [mtt-results] Nightly Test Build Failures"</a>
<li><strong>Reply:</strong> <a href="0131.php">Jeff Squyres: "Re: [MTT users] [mtt-results] Nightly Test Build Failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Oct/05/2006 09:09:38AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Some of these are the usual &quot;IBM isn't being recorded
</span><br>
<span class="quotelev1">&gt; properly&quot;.  But a whole bunch of them are wrong ELF
</span><br>
<span class="quotelev1">&gt; classes reported by Sun builds -- is this a symptom of
</span><br>
<span class="quotelev1">&gt; sharing scratch directories?
</span><br>
<p>Yes, 'wrong ELF classes' is a SPARC binary run on i386 or
<br>
vice versa.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suspect that you need to whack your current scratch dir
</span><br>
<span class="quotelev1">&gt; and then start tonight with at least 2 new scratch
</span><br>
<span class="quotelev1">&gt; directories.  More specifically, you need a scratch
</span><br>
<span class="quotelev1">&gt; directory for each MTT invocation that you run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>So this also underlines the importance of the Trim phase
<br>
that I was not seeing, because it means that if, e.g.,
<br>
1.2a1r11852 is still in the scratch tree - it will get run
<br>
every night if it's not removed. So we can rm -rf the
<br>
whole tree, but then we can't go back and rerun what we're
<br>
interested in. Right?
<br>
<p>I think I also may have something for the wishlist. It would
<br>
be awesome if there was an option to tell mtt to only run
<br>
what is in the ini file. That would eliminate the need for
<br>
multiple scratch trees (which must be set manually). So a
<br>
--non-recursive (?) option or something, that tells mtt to
<br>
not walk the scratch directory and run everything it finds.
<br>
Or does this defeat the purpose of something I'm not seeing?
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------ Forwarded Message
</span><br>
<span class="quotelev2">&gt; &gt; From: &lt;mtt-results_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Reply-To: &lt;mtt-results_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date: Thu, 5 Oct 2006 09:00:30 -0400
</span><br>
<span class="quotelev2">&gt; &gt; To: &lt;mtt-results_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: [mtt-results] Nightly Test Build Failures
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; A plain text version of the Nightly MTT Test Results is not yet available.
</span><br>
<span class="quotelev2">&gt; &gt; Sorry.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------ End of Forwarded Message
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0131.php">Jeff Squyres: "Re: [MTT users] [mtt-results] Nightly Test Build Failures"</a>
<li><strong>Previous message:</strong> <a href="0129.php">Jeff Squyres: "Re: [MTT users] Multiple scratch dirs needed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0131.php">Jeff Squyres: "Re: [MTT users] [mtt-results] Nightly Test Build Failures"</a>
<li><strong>Reply:</strong> <a href="0131.php">Jeff Squyres: "Re: [MTT users] [mtt-results] Nightly Test Build Failures"</a>
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
