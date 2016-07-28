<?
$subject_val = "Re: [OMPI devel] [EXTERNAL]  reduce_scatter_block failing on v1.7";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  6 14:35:56 2012" -->
<!-- isoreceived="20120706183556" -->
<!-- sent="Fri, 6 Jul 2012 18:35:15 +0000" -->
<!-- isosent="20120706183515" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL]  reduce_scatter_block failing on v1.7" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD2392037F_at_EXMB01.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FF72F14.5050905_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL]  reduce_scatter_block failing on v1.7<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-06 14:35:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11253.php">Fluder, Eugene: "Re: [OMPI devel] VampirTrace: time not increasing"</a>
<li><strong>Previous message:</strong> <a href="11251.php">Eugene Loh: "[OMPI devel] reduce_scatter_block failing on v1.7"</a>
<li><strong>In reply to:</strong> <a href="11251.php">Eugene Loh: "[OMPI devel] reduce_scatter_block failing on v1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11255.php">Eugene Loh: "[OMPI devel] ibcast segfault on v1.7 [was: reduce_scatter_block failing on v1.7]"</a>
<li><strong>Reply:</strong> <a href="11255.php">Eugene Loh: "[OMPI devel] ibcast segfault on v1.7 [was: reduce_scatter_block failing on v1.7]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/6/12 2:31 PM, &quot;Eugene Loh&quot; &lt;eugene.loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;The new reduce_scatter_block test is segfaulting with v1.7 but not with
</span><br>
<span class="quotelev1">&gt;the trunk.  When we drop down into MPI_Reduce_scatter_block and attempt
</span><br>
<span class="quotelev1">&gt;to call
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;comm-&gt;c_coll.coll_reduce_scatter_block()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;it's NULL.  (So is comm-&gt;c_coll.coll_reduce_scatter_block_module.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Is there some work on the trunk that should be CMRed to v1.7?
</span><br>
<p>Yes.  All in good time :).
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11253.php">Fluder, Eugene: "Re: [OMPI devel] VampirTrace: time not increasing"</a>
<li><strong>Previous message:</strong> <a href="11251.php">Eugene Loh: "[OMPI devel] reduce_scatter_block failing on v1.7"</a>
<li><strong>In reply to:</strong> <a href="11251.php">Eugene Loh: "[OMPI devel] reduce_scatter_block failing on v1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11255.php">Eugene Loh: "[OMPI devel] ibcast segfault on v1.7 [was: reduce_scatter_block failing on v1.7]"</a>
<li><strong>Reply:</strong> <a href="11255.php">Eugene Loh: "[OMPI devel] ibcast segfault on v1.7 [was: reduce_scatter_block failing on v1.7]"</a>
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
