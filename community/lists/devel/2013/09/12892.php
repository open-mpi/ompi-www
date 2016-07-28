<?
$subject_val = "Re: [OMPI devel] Intercomm Merge";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 13 11:39:50 2013" -->
<!-- isoreceived="20130913153950" -->
<!-- sent="Fri, 13 Sep 2013 08:39:46 -0700" -->
<!-- isosent="20130913153946" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intercomm Merge" -->
<!-- id="D0F40DD3-4102-4FA6-8083-2AE260F1C8CB_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6861B50E-D25A-463C-8C0E-BB410C1B93F1_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Intercomm Merge<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-13 11:39:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12893.php">Jeff Squyres (jsquyres): "[OMPI devel] shmem build failures"</a>
<li><strong>Previous message:</strong> <a href="12891.php">Rolf vandeVaart: "Re: [OMPI devel] Nearly unlimited growth of pml free list"</a>
<li><strong>In reply to:</strong> <a href="12890.php">Suraj Prabhakaran: "[OMPI devel] Intercomm Merge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12895.php">Suraj Prabhakaran: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Reply:</strong> <a href="12895.php">Suraj Prabhakaran: "Re: [OMPI devel] Intercomm Merge"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It has been a low priority issue, and hence not resolved yet. I doubt it will make 1.7.3, though if you need it, I'll give it a try.
<br>
<p>On Sep 13, 2013, at 7:21 AM, Suraj Prabhakaran &lt;suraj.prabhakaran_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a plan to fix the problem with MPI_Intercomm_merge with 1.7.3 as stated in this ticket? We are really in need of this at the moment. Any hints?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We face the following problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Parents (x and y) spawn child (z). (all of them execute on separate nodes)
</span><br>
<span class="quotelev1">&gt; x is the root.
</span><br>
<span class="quotelev1">&gt; x,y and z do an MPI_Intercomm_merge.
</span><br>
<span class="quotelev1">&gt; x and z are able to communicate properly.
</span><br>
<span class="quotelev1">&gt; But y and z are not able to communicate after the merge. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this bug in high priority for the next release?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/2904">https://svn.open-mpi.org/trac/ompi/ticket/2904</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Suraj
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12893.php">Jeff Squyres (jsquyres): "[OMPI devel] shmem build failures"</a>
<li><strong>Previous message:</strong> <a href="12891.php">Rolf vandeVaart: "Re: [OMPI devel] Nearly unlimited growth of pml free list"</a>
<li><strong>In reply to:</strong> <a href="12890.php">Suraj Prabhakaran: "[OMPI devel] Intercomm Merge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12895.php">Suraj Prabhakaran: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Reply:</strong> <a href="12895.php">Suraj Prabhakaran: "Re: [OMPI devel] Intercomm Merge"</a>
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
