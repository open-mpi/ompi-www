<?
$subject_val = "Re: [OMPI devel] RFC: sm Latency";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 21 19:04:18 2009" -->
<!-- isoreceived="20090122000418" -->
<!-- sent="Wed, 21 Jan 2009 16:49:23 -0700" -->
<!-- isosent="20090121234923" -->
<!-- name="Ron Brightwell" -->
<!-- email="rbbrigh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: sm Latency" -->
<!-- id="20090121234923.GE23005_at_ratbert.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="18371_1232581765_n0LNgGbO019734_4977B42E.3090309_at_myri.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: sm Latency<br>
<strong>From:</strong> Ron Brightwell (<em>rbbrigh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-21 18:49:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5267.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5265.php">Patrick Geoffray: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Maybe in reply to:</strong> <a href="5224.php">Eugene Loh: "[OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5268.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5268.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt; &gt; Possibly, you meant to ask how one does directed polling with a wildcard 
</span><br>
<span class="quotelev2">&gt; &gt; source MPI_ANY_SOURCE.  If that was your question, the answer is we 
</span><br>
<span class="quotelev2">&gt; &gt; punt.  We report failure to the ULP, which reverts to the standard code 
</span><br>
<span class="quotelev2">&gt; &gt; path.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry, I meant ANY_SOURCE. If you poll only the queue that correspond to 
</span><br>
<span class="quotelev1">&gt; a posted receive, you only optimize micro-benchmarks, until they start 
</span><br>
<span class="quotelev1">&gt; using ANY_SOURCE.
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<p>Note that the HPCC RandomAccess benchmark only uses MPI_ANY_SOURCE (and
<br>
MPI_ANY_TAG).
<br>
<p>-Ron
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5267.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5265.php">Patrick Geoffray: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Maybe in reply to:</strong> <a href="5224.php">Eugene Loh: "[OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5268.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5268.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
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
