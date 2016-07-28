<?
$subject_val = "Re: [OMPI devel] matching code rewrite in OB1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 11 12:02:50 2007" -->
<!-- isoreceived="20071211170250" -->
<!-- sent="Tue, 11 Dec 2007 19:02:44 +0200" -->
<!-- isosent="20071211170244" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] matching code rewrite in OB1" -->
<!-- id="20071211170244.GK3360_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="475EB4E8.7030402_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] matching code rewrite in OB1<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-11 12:02:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2796.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2794.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2789.php">Andrew Friedley: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2790.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Dec 11, 2007 at 08:03:52AM -0800, Andrew Friedley wrote:
<br>
<span class="quotelev1">&gt; Try UD, frags are reordered at a very high rate so should be a good test.
</span><br>
mpi-ping works fine with UD BTL and the patch.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Richard Graham wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Gleb,
</span><br>
<span class="quotelev2">&gt; &gt;   I would suggest that before this is checked in this be tested on a system
</span><br>
<span class="quotelev2">&gt; &gt; that has N-way network parallelism, where N is as large as you can find.
</span><br>
<span class="quotelev2">&gt; &gt; This is a key bit of code for MPI correctness, and out-of-order operations
</span><br>
<span class="quotelev2">&gt; &gt; will break it, so you want to maximize the chance for such operations.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Rich
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On 12/11/07 10:54 AM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    I did a rewrite of matching code in OB1. I made it much simpler and 2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; times smaller (which is good, less code - less bugs). I also got rid
</span><br>
<span class="quotelev3">&gt; &gt;&gt; of huge macros - very helpful if you need to debug something. There
</span><br>
<span class="quotelev3">&gt; &gt;&gt; is no performance degradation, actually I even see very small performance
</span><br>
<span class="quotelev3">&gt; &gt;&gt; improvement. I ran MTT with this patch and the result is the same as on
</span><br>
<span class="quotelev3">&gt; &gt;&gt; trunk. I would like to commit this to the trunk. The patch is attached
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for everybody to try.
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2796.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2794.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2789.php">Andrew Friedley: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2790.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
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
