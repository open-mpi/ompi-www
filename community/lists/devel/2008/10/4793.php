<?
$subject_val = "Re: [OMPI devel] Comm_spawn limits";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 22 14:53:39 2008" -->
<!-- isoreceived="20081022185339" -->
<!-- sent="Wed, 22 Oct 2008 14:53:27 -0400" -->
<!-- isosent="20081022185327" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Comm_spawn limits" -->
<!-- id="98492BC4-D14F-420C-ADA3-FF1AB969C269_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B67AF839-AE96-4AEB-91B5-C794B61BC923_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Comm_spawn limits<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-22 14:53:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4794.php">Ralph Castain: "Re: [OMPI devel] Comm_spawn limits"</a>
<li><strong>Previous message:</strong> <a href="4792.php">Ralph Castain: "[OMPI devel] Comm_spawn limits"</a>
<li><strong>In reply to:</strong> <a href="4792.php">Ralph Castain: "[OMPI devel] Comm_spawn limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4794.php">Ralph Castain: "Re: [OMPI devel] Comm_spawn limits"</a>
<li><strong>Reply:</strong> <a href="4794.php">Ralph Castain: "Re: [OMPI devel] Comm_spawn limits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What's happened if we roll around with the counter ?
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 22, 2008, at 2:49 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; There recently was activity on the mailing lists where someone was  
</span><br>
<span class="quotelev1">&gt; attempting to call comm_spawn 100,000 times. Setting aside the  
</span><br>
<span class="quotelev1">&gt; threading issues that were the focus of that exchange, the fact is  
</span><br>
<span class="quotelev1">&gt; that OMPI currently cannot handle that many comm_spawns.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The ORTE jobid is composed of two elements:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. the top 16-bits is an &quot;identifier&quot; for that mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. the lower 16-bits is a running counter identifying the specific  
</span><br>
<span class="quotelev1">&gt; job/launch for those procs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thus, we are limited to 64k comm_spawns.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Expanding this would require either revamping the entire way we  
</span><br>
<span class="quotelev1">&gt; handle jobs (e.g., removing the mpirun identifier - major effort),  
</span><br>
<span class="quotelev1">&gt; or expanding the orte_jobid_t from its current 32-bits to 64-bits.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this a problem we want to address?
</span><br>
<span class="quotelev1">&gt; Ralph
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4793/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4794.php">Ralph Castain: "Re: [OMPI devel] Comm_spawn limits"</a>
<li><strong>Previous message:</strong> <a href="4792.php">Ralph Castain: "[OMPI devel] Comm_spawn limits"</a>
<li><strong>In reply to:</strong> <a href="4792.php">Ralph Castain: "[OMPI devel] Comm_spawn limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4794.php">Ralph Castain: "Re: [OMPI devel] Comm_spawn limits"</a>
<li><strong>Reply:</strong> <a href="4794.php">Ralph Castain: "Re: [OMPI devel] Comm_spawn limits"</a>
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
