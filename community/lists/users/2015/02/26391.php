<?
$subject_val = "Re: [OMPI users] Help on getting CMA works";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 17:22:07 2015" -->
<!-- isoreceived="20150224222207" -->
<!-- sent="Tue, 24 Feb 2015 15:22:06 -0700" -->
<!-- isosent="20150224222206" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help on getting CMA works" -->
<!-- id="20150224222206.GH14606_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="54E69C8F.7090401_at_giref.ulaval.ca" -->
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
<strong>Date:</strong> 2015-02-24 17:22:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26392.php">Ralph Castain: "Re: [OMPI users] machinefile binding error"</a>
<li><strong>Previous message:</strong> <a href="26390.php">Galloway, Jack D: "Re: [OMPI users] machinefile binding error"</a>
<li><strong>In reply to:</strong> <a href="26362.php">Eric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know the reasoning for requiring --with-cma to enable CMA but I
<br>
am looking at auto-detecting CMA instead of requiring Open MPI to be
<br>
configured with --with-cma. This will likely go into the 1.9 release
<br>
series and not 1.8.
<br>
<p>-Nathan
<br>
<p>On Thu, Feb 19, 2015 at 09:31:43PM -0500, Eric Chamberland wrote:
<br>
<span class="quotelev1">&gt; Maybe it is a stupid question, but... why it is not tested and enabled by
</span><br>
<span class="quotelev1">&gt; default at configure time since it is part of the kernel?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 02/19/2015 03:53 PM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt; &gt;Great! I will add an MCA variable to force CMA and also enable it if 1)
</span><br>
<span class="quotelev2">&gt; &gt;no yama and 2) no PR_SET_PTRACER.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;You might also look at using xpmem. You can find a version that supports
</span><br>
<span class="quotelev2">&gt; &gt;3.x @ <a href="https://github.com/hjelmn/xpmem">https://github.com/hjelmn/xpmem</a> . It is a kernel module +
</span><br>
<span class="quotelev2">&gt; &gt;userspace library that can be used by vader as a single-copy mechanism.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;In benchmarks it performs better than CMA but it may or may not perform
</span><br>
<span class="quotelev2">&gt; &gt;better with a real application.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;See:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://blogs.cisco.com/performance/the-vader-shared-memory-transport-in-open-mpi-now-featuring-3-flavors-of-zero-copy">http://blogs.cisco.com/performance/the-vader-shared-memory-transport-in-open-mpi-now-featuring-3-flavors-of-zero-copy</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;-Nathan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;On Thu, Feb 19, 2015 at 03:32:43PM -0500, Eric Chamberland wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;On 02/19/2015 02:58 PM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;On Thu, Feb 19, 2015 at 12:16:49PM -0500, Eric Chamberland wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;On 02/19/2015 11:56 AM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;If you have yama installed you can try:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;Nope, I do not have it installed... is it absolutely necessary? (and would
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;it change something when it fails when I am root?)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;Other question: In addition to &quot;--with-cma&quot; configure flag, do we have to
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;pass any options to &quot;mpicc&quot; when compiling/linking an mpi application to use
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;cma?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;No. CMA should work out of the box. You appear to have a setup I haven't
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;yet tested. It doesn't have yama nor does it have the PR_SET_PTRACER
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;prctl. Its quite possible there are no restriction on ptrace in this
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;setup. Can you try changing the following line at
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;opal/mca/btl/vader/btl_vader_component.c:370 from:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;bool cma_happy = false;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;bool cma_happy = true;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;ok! (as of the officiel release, this is line 386.)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;and let me know if that works. If it does I will update vader to allow
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;CMA in this configuration.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Yep!  It now works perfectly.  Testing with
</span><br>
<span class="quotelev3">&gt; &gt;&gt;<a href="https://computing.llnl.gov/tutorials/mpi/samples/C/mpi_bandwidth.c">https://computing.llnl.gov/tutorials/mpi/samples/C/mpi_bandwidth.c</a>, on my
</span><br>
<span class="quotelev3">&gt; &gt;&gt;own computer (dual Xeon), I have this:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Without CMA:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;***Message size:  1000000 *** best  /  avg  / worst (MB/sec)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    task pair:    0 -    1:    8363.52 / 7946.77 / 5391.14
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;with CMA:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    task pair:    0 -    1:    9137.92 / 8955.98 / 7489.83
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Great!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Now I have to bench my real application... ;-)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Thanks!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Eric
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26355.php">http://www.open-mpi.org/community/lists/users/2015/02/26355.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26362.php">http://www.open-mpi.org/community/lists/users/2015/02/26362.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26391/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26392.php">Ralph Castain: "Re: [OMPI users] machinefile binding error"</a>
<li><strong>Previous message:</strong> <a href="26390.php">Galloway, Jack D: "Re: [OMPI users] machinefile binding error"</a>
<li><strong>In reply to:</strong> <a href="26362.php">Eric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
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
