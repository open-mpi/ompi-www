<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct  5 12:27:33 2006" -->
<!-- isoreceived="20061005162733" -->
<!-- sent="Thu, 05 Oct 2006 12:26:56 -0400" -->
<!-- isosent="20061005162656" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] [mtt-results] Nightly Test Build Failures" -->
<!-- id="C14AAA90.29B6E%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20061005152805.GL37980_at_sr1-ubur-07.East.Sun.COM" -->
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
<strong>Date:</strong> 2006-10-05 12:26:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0132.php">Ethan Mallove: "Re: [MTT users] [mtt-results] Nightly Test Build Failures"</a>
<li><strong>Previous message:</strong> <a href="0130.php">Ethan Mallove: "Re: [MTT users] FW: [mtt-results] Nightly Test Build Failures"</a>
<li><strong>In reply to:</strong> <a href="0130.php">Ethan Mallove: "Re: [MTT users] FW: [mtt-results] Nightly Test Build Failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0132.php">Ethan Mallove: "Re: [MTT users] [mtt-results] Nightly Test Build Failures"</a>
<li><strong>Reply:</strong> <a href="0132.php">Ethan Mallove: "Re: [MTT users] [mtt-results] Nightly Test Build Failures"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/11/0185.php">Jeff Squyres: "Re: [MTT users] [mtt-results] Nightly Test Build Failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/5/06 11:28 AM, &quot;Ethan Mallove&quot; &lt;ethan.mallove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Some of these are the usual &quot;IBM isn't being recorded
</span><br>
<span class="quotelev2">&gt;&gt; properly&quot;.  But a whole bunch of them are wrong ELF
</span><br>
<span class="quotelev2">&gt;&gt; classes reported by Sun builds -- is this a symptom of
</span><br>
<span class="quotelev2">&gt;&gt; sharing scratch directories?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, 'wrong ELF classes' is a SPARC binary run on i386 or
</span><br>
<span class="quotelev1">&gt; vice versa.
</span><br>
<p>K.
<br>
&nbsp;&nbsp;
<br>
<span class="quotelev2">&gt;&gt; I suspect that you need to whack your current scratch dir
</span><br>
<span class="quotelev2">&gt;&gt; and then start tonight with at least 2 new scratch
</span><br>
<span class="quotelev2">&gt;&gt; directories.  More specifically, you need a scratch
</span><br>
<span class="quotelev2">&gt;&gt; directory for each MTT invocation that you run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So this also underlines the importance of the Trim phase
</span><br>
<span class="quotelev1">&gt; that I was not seeing, because it means that if, e.g.,
</span><br>
<span class="quotelev1">&gt; 1.2a1r11852 is still in the scratch tree - it will get run
</span><br>
<span class="quotelev1">&gt; every night if it's not removed. So we can rm -rf the
</span><br>
<span class="quotelev1">&gt; whole tree, but then we can't go back and rerun what we're
</span><br>
<span class="quotelev1">&gt; interested in. Right?
</span><br>
<p>No, it *shouldn't* be runing every night (in my tests, things are not run
<br>
multiple times, but there is some current bug about this because Terry is
<br>
seeing things run multiple times).  But yes, this underscores the need for
<br>
the trim phase.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; I think I also may have something for the wishlist. It would
</span><br>
<span class="quotelev1">&gt; be awesome if there was an option to tell mtt to only run
</span><br>
<span class="quotelev1">&gt; what is in the ini file. That would eliminate the need for
</span><br>
<span class="quotelev1">&gt; multiple scratch trees (which must be set manually). So a
</span><br>
<span class="quotelev1">&gt; --non-recursive (?) option or something, that tells mtt to
</span><br>
<span class="quotelev1">&gt; not walk the scratch directory and run everything it finds.
</span><br>
<span class="quotelev1">&gt; Or does this defeat the purpose of something I'm not seeing?
</span><br>
<p>It does only run what's in the INI file.  But if you have a) two MTT's
<br>
sharing a common scratch, unpredictable things can happen with the XML meta
<br>
data files in there (i.e., I don't do anything to guarantee atomic access
<br>
and updates, etc.).  Or b) if you have older versions of stuff in your INI
<br>
file that somehow are not accounted for properly in the XML data files, it
<br>
could try to run them again.
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
<li><strong>Next message:</strong> <a href="0132.php">Ethan Mallove: "Re: [MTT users] [mtt-results] Nightly Test Build Failures"</a>
<li><strong>Previous message:</strong> <a href="0130.php">Ethan Mallove: "Re: [MTT users] FW: [mtt-results] Nightly Test Build Failures"</a>
<li><strong>In reply to:</strong> <a href="0130.php">Ethan Mallove: "Re: [MTT users] FW: [mtt-results] Nightly Test Build Failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0132.php">Ethan Mallove: "Re: [MTT users] [mtt-results] Nightly Test Build Failures"</a>
<li><strong>Reply:</strong> <a href="0132.php">Ethan Mallove: "Re: [MTT users] [mtt-results] Nightly Test Build Failures"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/11/0185.php">Jeff Squyres: "Re: [MTT users] [mtt-results] Nightly Test Build Failures"</a>
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
