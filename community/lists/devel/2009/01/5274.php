<?
$subject_val = "Re: [OMPI devel] RFC: sm Latency";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 22 10:29:51 2009" -->
<!-- isoreceived="20090122152951" -->
<!-- sent="Thu, 22 Jan 2009 10:29:45 -0500" -->
<!-- isosent="20090122152945" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: sm Latency" -->
<!-- id="C59DFB19.2D73F%rlgraham_at_ornl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4977C535.50101_at_sun.com" -->
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
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-22 10:29:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5275.php">Ralph Castain: "Re: [OMPI devel] bug in odls_base_default_fns.c"</a>
<li><strong>Previous message:</strong> <a href="5273.php">Thomas Ropars: "[OMPI devel] bug in odls_base_default_fns.c"</a>
<li><strong>In reply to:</strong> <a href="5268.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5277.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5277.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
BTW,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;In the recvi function, do you first try to match off the unexpected list
<br>
before you try and match data in the fifo&#185;s ?
<br>
<p>Rich
<br>
<p><p>On 1/21/09 8:00 PM, &quot;Eugene Loh&quot; &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ron Brightwell wrote:
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you poll only the queue that correspond to a posted receive, you only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; optimize micro-benchmarks, until they start using ANY_SOURCE.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Note that the HPCC RandomAccess benchmark only uses MPI_ANY_SOURCE (and
</span><br>
<span class="quotelev2">&gt;&gt; MPI_ANY_TAG).
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; But HPCC RandomAccess also just uses non-blocking receives.  So, it's kind of
</span><br>
<span class="quotelev1">&gt; outside the scope of the original ideas here (bypassing the PML
</span><br>
<span class="quotelev1">&gt; receive-request data structure).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's possibly not even a poster child for the single-queue idea either.
</span><br>
<span class="quotelev1">&gt; Single queue probably shines best when you have to poll all connections for a
</span><br>
<span class="quotelev1">&gt; few messages.  In contrast, RandomAccess (I think) loads all connections up
</span><br>
<span class="quotelev1">&gt; randomly (pseudo-evenly).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5274/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5275.php">Ralph Castain: "Re: [OMPI devel] bug in odls_base_default_fns.c"</a>
<li><strong>Previous message:</strong> <a href="5273.php">Thomas Ropars: "[OMPI devel] bug in odls_base_default_fns.c"</a>
<li><strong>In reply to:</strong> <a href="5268.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5277.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5277.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
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
