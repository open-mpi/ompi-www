<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct  5 12:42:21 2006" -->
<!-- isoreceived="20061005164221" -->
<!-- sent="Thu, 5 Oct 2006 12:42:16 -0400" -->
<!-- isosent="20061005164216" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] [mtt-results] Nightly Test Build Failures" -->
<!-- id="20061005164216.GG28766_at_sr1-ubur-07.East.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C14AAA90.29B6E%jsquyres_at_cisco.com" -->
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
<strong>Date:</strong> 2006-10-05 12:42:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0133.php">Jeff Squyres: "Re: [MTT users] [mtt-results] Nightly Test Build Failures"</a>
<li><strong>Previous message:</strong> <a href="0131.php">Jeff Squyres: "Re: [MTT users] [mtt-results] Nightly Test Build Failures"</a>
<li><strong>In reply to:</strong> <a href="0131.php">Jeff Squyres: "Re: [MTT users] [mtt-results] Nightly Test Build Failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0133.php">Jeff Squyres: "Re: [MTT users] [mtt-results] Nightly Test Build Failures"</a>
<li><strong>Reply:</strong> <a href="0133.php">Jeff Squyres: "Re: [MTT users] [mtt-results] Nightly Test Build Failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Oct/05/2006 12:26:56PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On 10/5/06 11:28 AM, &quot;Ethan Mallove&quot;
</span><br>
<span class="quotelev1">&gt; &lt;ethan.mallove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Some of these are the usual &quot;IBM isn't being recorded
</span><br>
<span class="quotelev3">&gt; &gt;&gt; properly&quot;.  But a whole bunch of them are wrong ELF
</span><br>
<span class="quotelev3">&gt; &gt;&gt; classes reported by Sun builds -- is this a symptom of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; sharing scratch directories?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Yes, 'wrong ELF classes' is a SPARC binary run on i386
</span><br>
<span class="quotelev2">&gt; &gt; or vice versa.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; K.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I suspect that you need to whack your current scratch
</span><br>
<span class="quotelev3">&gt; &gt;&gt; dir and then start tonight with at least 2 new scratch
</span><br>
<span class="quotelev3">&gt; &gt;&gt; directories.  More specifically, you need a scratch
</span><br>
<span class="quotelev3">&gt; &gt;&gt; directory for each MTT invocation that you run.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; So this also underlines the importance of the Trim phase
</span><br>
<span class="quotelev2">&gt; &gt; that I was not seeing, because it means that if, e.g.,
</span><br>
<span class="quotelev2">&gt; &gt; 1.2a1r11852 is still in the scratch tree - it will get
</span><br>
<span class="quotelev2">&gt; &gt; run every night if it's not removed. So we can rm -rf
</span><br>
<span class="quotelev2">&gt; &gt; the whole tree, but then we can't go back and rerun what
</span><br>
<span class="quotelev2">&gt; &gt; we're interested in. Right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, it *shouldn't* be runing every night (in my tests,
</span><br>
<span class="quotelev1">&gt; things are not run multiple times, but there is some
</span><br>
<span class="quotelev1">&gt; current bug about this because Terry is seeing things run
</span><br>
<span class="quotelev1">&gt; multiple times).  But yes, this underscores the need for
</span><br>
<span class="quotelev1">&gt; the trim phase.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt; &gt; I think I also may have something for the wishlist. It
</span><br>
<span class="quotelev2">&gt; &gt; would be awesome if there was an option to tell mtt to
</span><br>
<span class="quotelev2">&gt; &gt; only run what is in the ini file. That would eliminate
</span><br>
<span class="quotelev2">&gt; &gt; the need for multiple scratch trees (which must be set
</span><br>
<span class="quotelev2">&gt; &gt; manually). So a --non-recursive (?) option or something,
</span><br>
<span class="quotelev2">&gt; &gt; that tells mtt to not walk the scratch directory and run
</span><br>
<span class="quotelev2">&gt; &gt; everything it finds.  Or does this defeat the purpose of
</span><br>
<span class="quotelev2">&gt; &gt; something I'm not seeing?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It does only run what's in the INI file.  But if you have
</span><br>
<span class="quotelev1">&gt; a) two MTT's sharing a common scratch, unpredictable
</span><br>
<span class="quotelev1">&gt; things can happen with the XML meta data files in there
</span><br>
<span class="quotelev1">&gt; (i.e., I don't do anything to guarantee atomic access and
</span><br>
<span class="quotelev1">&gt; updates, etc.).  Or b) if you have older versions of stuff
</span><br>
<span class="quotelev1">&gt; in your INI file that somehow are not accounted for
</span><br>
<span class="quotelev1">&gt; properly in the XML data files, it could try to run them
</span><br>
<span class="quotelev1">&gt; again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I should delete my scratch area after any change to the ini?
<br>
With the Trim phase in place, this wouldn't be necessary?
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0133.php">Jeff Squyres: "Re: [MTT users] [mtt-results] Nightly Test Build Failures"</a>
<li><strong>Previous message:</strong> <a href="0131.php">Jeff Squyres: "Re: [MTT users] [mtt-results] Nightly Test Build Failures"</a>
<li><strong>In reply to:</strong> <a href="0131.php">Jeff Squyres: "Re: [MTT users] [mtt-results] Nightly Test Build Failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0133.php">Jeff Squyres: "Re: [MTT users] [mtt-results] Nightly Test Build Failures"</a>
<li><strong>Reply:</strong> <a href="0133.php">Jeff Squyres: "Re: [MTT users] [mtt-results] Nightly Test Build Failures"</a>
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
