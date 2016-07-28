<?
$subject_val = "Re: [OMPI users] Help on getting CMA works";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 15:32:56 2015" -->
<!-- isoreceived="20150219203256" -->
<!-- sent="Thu, 19 Feb 2015 15:32:43 -0500" -->
<!-- isosent="20150219203243" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help on getting CMA works" -->
<!-- id="54E6486B.5040409_at_giref.ulaval.ca" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20150219195814.GB1830_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-19 15:32:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26356.php">Nathan Hjelm: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Previous message:</strong> <a href="26354.php">Nathan Hjelm: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>In reply to:</strong> <a href="26354.php">Nathan Hjelm: "Re: [OMPI users] Help on getting CMA works"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26356.php">Nathan Hjelm: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Reply:</strong> <a href="26356.php">Nathan Hjelm: "Re: [OMPI users] Help on getting CMA works"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/19/2015 02:58 PM, Nathan Hjelm wrote:
<br>
<span class="quotelev1">&gt; On Thu, Feb 19, 2015 at 12:16:49PM -0500, Eric Chamberland wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 02/19/2015 11:56 AM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you have yama installed you can try:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nope, I do not have it installed... is it absolutely necessary? (and would
</span><br>
<span class="quotelev2">&gt;&gt; it change something when it fails when I am root?)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Other question: In addition to &quot;--with-cma&quot; configure flag, do we have to
</span><br>
<span class="quotelev2">&gt;&gt; pass any options to &quot;mpicc&quot; when compiling/linking an mpi application to use
</span><br>
<span class="quotelev2">&gt;&gt; cma?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No. CMA should work out of the box. You appear to have a setup I haven't
</span><br>
<span class="quotelev1">&gt; yet tested. It doesn't have yama nor does it have the PR_SET_PTRACER
</span><br>
<span class="quotelev1">&gt; prctl. Its quite possible there are no restriction on ptrace in this
</span><br>
<span class="quotelev1">&gt; setup. Can you try changing the following line at
</span><br>
<span class="quotelev1">&gt; opal/mca/btl/vader/btl_vader_component.c:370 from:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bool cma_happy = false;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bool cma_happy = true;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>ok! (as of the officiel release, this is line 386.)
<br>
<p><span class="quotelev1">&gt; and let me know if that works. If it does I will update vader to allow
</span><br>
<span class="quotelev1">&gt; CMA in this configuration.
</span><br>
<p>Yep!  It now works perfectly.  Testing with 
<br>
<a href="https://computing.llnl.gov/tutorials/mpi/samples/C/mpi_bandwidth.c">https://computing.llnl.gov/tutorials/mpi/samples/C/mpi_bandwidth.c</a>, on 
<br>
my own computer (dual Xeon), I have this:
<br>
<p>Without CMA:
<br>
<p>***Message size:  1000000 *** best  /  avg  / worst (MB/sec)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;task pair:    0 -    1:    8363.52 / 7946.77 / 5391.14
<br>
<p>with CMA:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;task pair:    0 -    1:    9137.92 / 8955.98 / 7489.83
<br>
<p>Great!
<br>
<p>Now I have to bench my real application... ;-)
<br>
<p>Thanks!
<br>
<p>Eric
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26356.php">Nathan Hjelm: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Previous message:</strong> <a href="26354.php">Nathan Hjelm: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>In reply to:</strong> <a href="26354.php">Nathan Hjelm: "Re: [OMPI users] Help on getting CMA works"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26356.php">Nathan Hjelm: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Reply:</strong> <a href="26356.php">Nathan Hjelm: "Re: [OMPI users] Help on getting CMA works"</a>
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
