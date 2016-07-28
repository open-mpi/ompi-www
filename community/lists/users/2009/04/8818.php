<?
$subject_val = "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 12:25:41 2009" -->
<!-- isoreceived="20090407162541" -->
<!-- sent="Tue, 7 Apr 2009 09:25:36 -0700" -->
<!-- isosent="20090407162536" -->
<!-- name="Steve Kargl" -->
<!-- email="sgk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Factor of 10 loss in performance with 1.3.x" -->
<!-- id="20090407162536.GA89132_at_troutmask.apl.washington.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="49DB6A97.4080204_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Factor of 10 loss in performance with 1.3.x<br>
<strong>From:</strong> Steve Kargl (<em>sgk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-07 12:25:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8819.php">Gus Correa: "Re: [OMPI users] Fwd:  ssh MPi and program tests"</a>
<li><strong>Previous message:</strong> <a href="8817.php">Peter Kjellstrom: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8812.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8816.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Apr 07, 2009 at 08:00:39AM -0700, Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Iain Bason wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;There are a bunch changes in the shared memory module between 1.2.9  
</span><br>
<span class="quotelev2">&gt; &gt;and 1.3.1.  One significant change is the introduction of the &quot;sendi&quot;  
</span><br>
<span class="quotelev2">&gt; &gt;internal interface.  I believe George Bosilca did the initial  
</span><br>
<span class="quotelev2">&gt; &gt;implementation.  This is just a wild guess, but maybe there is  
</span><br>
<span class="quotelev2">&gt; &gt;something about sendi that increases latency when using the shared  
</span><br>
<span class="quotelev2">&gt; &gt;memory module.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But the sm BTL doesn't expose its sendi function, which puts it in the 
</span><br>
<span class="quotelev1">&gt; same camp as most BTLs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And the slowdown doesn't seem to be observed by anyone other than Steve 
</span><br>
<span class="quotelev1">&gt; and his colleague?
</span><br>
<p>Is there a debug option that I can try?
<br>
<p>I've re-installed 1.3.1 several times yesterday using
<br>
various combination of configure options.  There was no
<br>
change in observed performance.
<br>
<p>I've tried --disable-smp-locks.
<br>
I've tried --enable-mpi-threads --with-threads=posix.
<br>
I've tried --enable-ptmalloc2-internal.
<br>
<p>I'm willing to try whatever is required to debug this issue.
<br>
<p><pre>
-- 
Steve
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8819.php">Gus Correa: "Re: [OMPI users] Fwd:  ssh MPi and program tests"</a>
<li><strong>Previous message:</strong> <a href="8817.php">Peter Kjellstrom: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8812.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8816.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
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
