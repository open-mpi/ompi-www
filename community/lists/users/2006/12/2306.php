<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec  5 19:40:21 2006" -->
<!-- isoreceived="20061206004021" -->
<!-- sent="Tue, 5 Dec 2006 19:40:33 -0500" -->
<!-- isosent="20061206004033" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running with the dr pml." -->
<!-- id="B0AC932D-D87A-4ABC-AC18-76DDD8E01915_at_myri.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4575FD91.5080500_at_lanl.gov" -->
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
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-05 19:40:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2307.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>Previous message:</strong> <a href="2305.php">Aaron McDonough: "[OMPI users] OpenMPI for 32/64 bit IB drivers"</a>
<li><strong>In reply to:</strong> <a href="2304.php">Galen M. Shipman: "Re: [OMPI users] running with the dr pml."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2312.php">Galen Shipman: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Reply:</strong> <a href="2312.php">Galen Shipman: "Re: [OMPI users] running with the dr pml."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 5, 2006, at 6:15 PM, Galen M. Shipman wrote:
<br>
<p><span class="quotelev1">&gt; Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was asked by mirycom to run a test using the data reliability pml.
</span><br>
<span class="quotelev2">&gt;&gt; (dr)  I ran it like so:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun  --mca pml dr -np 4 ./xhpl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this the right format for running the dr pml?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; This should be fine, yes.
</span><br>
<span class="quotelev1">&gt; I can running HPL on our test cluster to see if something is wrong  
</span><br>
<span class="quotelev1">&gt; with DR.
</span><br>
<span class="quotelev1">&gt; I assume you are using GM and not MX?
</span><br>
<p>He is running GM.
<br>
<p><span class="quotelev1">&gt; Can you try running a simple ping-pong to make sure we have the basics
</span><br>
<span class="quotelev1">&gt; on this platform?
</span><br>
<span class="quotelev1">&gt; If you have access to them, running the intel test suite would also be
</span><br>
<span class="quotelev1">&gt; helpful in determining if/where we have an issue.
</span><br>
<p>He has run IMB compiled with -DCHECK and it did not report any errors.
<br>
<p><span class="quotelev2">&gt;&gt; Is there any gotchas on using the dr pml?
</span><br>
<span class="quotelev2">&gt;&gt; also if the dr pml is finding errors, and is resending data, can i
</span><br>
<span class="quotelev2">&gt;&gt; have it tell me when that happens?  Like a verbose mode?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately you will need to update the source and recompile, try:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Updating this file: topdir/ompi/mca/pml/dr/pml_dr.h:245:#define
</span><br>
<span class="quotelev1">&gt; MCA_PML_DR_DEBUG_LEVEL -1
</span><br>
<span class="quotelev1">&gt; And change MCA_PML_DR_DEBUG_LEVEL to 0..
</span><br>
<p>The problem is that, when running HPL, he sees failed residuals. When  
<br>
running HPL under MPICH-GM, he does not.
<br>
<p>I have tried running HPCC (HPL plus other benchmarks) using OMPI with  
<br>
GM on 32-bit Xeons and 64-bit Opterons. I do not see any failed  
<br>
residuals. I am trying to get access to a couple of OSX machines to  
<br>
replicate Brock's setup.
<br>
<p>Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2307.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>Previous message:</strong> <a href="2305.php">Aaron McDonough: "[OMPI users] OpenMPI for 32/64 bit IB drivers"</a>
<li><strong>In reply to:</strong> <a href="2304.php">Galen M. Shipman: "Re: [OMPI users] running with the dr pml."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2312.php">Galen Shipman: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Reply:</strong> <a href="2312.php">Galen Shipman: "Re: [OMPI users] running with the dr pml."</a>
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
