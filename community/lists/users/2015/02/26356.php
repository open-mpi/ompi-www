<?
$subject_val = "Re: [OMPI users] Help on getting CMA works";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 15:53:50 2015" -->
<!-- isoreceived="20150219205350" -->
<!-- sent="Thu, 19 Feb 2015 13:53:49 -0700" -->
<!-- isosent="20150219205349" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help on getting CMA works" -->
<!-- id="20150219205349.GC1830_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="54E6486B.5040409_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help on getting CMA works<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-19 15:53:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26357.php">Eric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Previous message:</strong> <a href="26355.php">Eric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>In reply to:</strong> <a href="26355.php">Eric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26357.php">Eric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Reply:</strong> <a href="26357.php">Eric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Reply:</strong> <a href="26358.php">Aurélien Bouteiller: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Reply:</strong> <a href="26362.php">Eric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Great! I will add an MCA variable to force CMA and also enable it if 1)
<br>
no yama and 2) no PR_SET_PTRACER.
<br>
<p>You might also look at using xpmem. You can find a version that supports
<br>
3.x @ <a href="https://github.com/hjelmn/xpmem">https://github.com/hjelmn/xpmem</a> . It is a kernel module +
<br>
userspace library that can be used by vader as a single-copy mechanism.
<br>
<p>In benchmarks it performs better than CMA but it may or may not perform
<br>
better with a real application.
<br>
<p>See:
<br>
<p><a href="http://blogs.cisco.com/performance/the-vader-shared-memory-transport-in-open-mpi-now-featuring-3-flavors-of-zero-copy">http://blogs.cisco.com/performance/the-vader-shared-memory-transport-in-open-mpi-now-featuring-3-flavors-of-zero-copy</a>
<br>
<p>-Nathan
<br>
<p>On Thu, Feb 19, 2015 at 03:32:43PM -0500, Eric Chamberland wrote:
<br>
<span class="quotelev1">&gt; On 02/19/2015 02:58 PM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt; &gt;On Thu, Feb 19, 2015 at 12:16:49PM -0500, Eric Chamberland wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;On 02/19/2015 11:56 AM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;If you have yama installed you can try:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Nope, I do not have it installed... is it absolutely necessary? (and would
</span><br>
<span class="quotelev3">&gt; &gt;&gt;it change something when it fails when I am root?)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Other question: In addition to &quot;--with-cma&quot; configure flag, do we have to
</span><br>
<span class="quotelev3">&gt; &gt;&gt;pass any options to &quot;mpicc&quot; when compiling/linking an mpi application to use
</span><br>
<span class="quotelev3">&gt; &gt;&gt;cma?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;No. CMA should work out of the box. You appear to have a setup I haven't
</span><br>
<span class="quotelev2">&gt; &gt;yet tested. It doesn't have yama nor does it have the PR_SET_PTRACER
</span><br>
<span class="quotelev2">&gt; &gt;prctl. Its quite possible there are no restriction on ptrace in this
</span><br>
<span class="quotelev2">&gt; &gt;setup. Can you try changing the following line at
</span><br>
<span class="quotelev2">&gt; &gt;opal/mca/btl/vader/btl_vader_component.c:370 from:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;bool cma_happy = false;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;to
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;bool cma_happy = true;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ok! (as of the officiel release, this is line 386.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;and let me know if that works. If it does I will update vader to allow
</span><br>
<span class="quotelev2">&gt; &gt;CMA in this configuration.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yep!  It now works perfectly.  Testing with
</span><br>
<span class="quotelev1">&gt; <a href="https://computing.llnl.gov/tutorials/mpi/samples/C/mpi_bandwidth.c">https://computing.llnl.gov/tutorials/mpi/samples/C/mpi_bandwidth.c</a>, on my
</span><br>
<span class="quotelev1">&gt; own computer (dual Xeon), I have this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Without CMA:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ***Message size:  1000000 *** best  /  avg  / worst (MB/sec)
</span><br>
<span class="quotelev1">&gt;    task pair:    0 -    1:    8363.52 / 7946.77 / 5391.14
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with CMA:
</span><br>
<span class="quotelev1">&gt;    task pair:    0 -    1:    9137.92 / 8955.98 / 7489.83
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Great!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I have to bench my real application... ;-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26355.php">http://www.open-mpi.org/community/lists/users/2015/02/26355.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26356/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26357.php">Eric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Previous message:</strong> <a href="26355.php">Eric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>In reply to:</strong> <a href="26355.php">Eric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26357.php">Eric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Reply:</strong> <a href="26357.php">Eric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Reply:</strong> <a href="26358.php">Aurélien Bouteiller: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Reply:</strong> <a href="26362.php">Eric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
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
