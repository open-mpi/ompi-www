<?
$subject_val = "Re: [OMPI devel] Comm_spawn limits";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 22 15:00:06 2008" -->
<!-- isoreceived="20081022190006" -->
<!-- sent="Wed, 22 Oct 2008 12:59:58 -0600" -->
<!-- isosent="20081022185958" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Comm_spawn limits" -->
<!-- id="E1607333-E3BC-4DB4-B556-C6319D0C78B4_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="98492BC4-D14F-420C-ADA3-FF1AB969C269_at_eecs.utk.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-22 14:59:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4795.php">George Bosilca: "Re: [OMPI devel] Component open"</a>
<li><strong>Previous message:</strong> <a href="4793.php">George Bosilca: "Re: [OMPI devel] Comm_spawn limits"</a>
<li><strong>In reply to:</strong> <a href="4793.php">George Bosilca: "Re: [OMPI devel] Comm_spawn limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4813.php">Jeff Squyres: "Re: [OMPI devel] Comm_spawn limits"</a>
<li><strong>Reply:</strong> <a href="4813.php">Jeff Squyres: "Re: [OMPI devel] Comm_spawn limits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't swear to this because I haven't fully grokked it yet, but I  
<br>
believe the answer is:
<br>
<p>1. if child jobs have completed, it won't hurt. I think the various  
<br>
subsystem cleanup their bookkeeping when a job completes, so we could  
<br>
possibly reuse the number. Might be some race conditions we would have  
<br>
to resolve.
<br>
<p>2. if child jobs haven't completed (which is the  situation this  
<br>
particular user was attempting), then we would have a problem with  
<br>
jobid confusion. Once we get the procs launched, though, I'm not sure  
<br>
how much of a problem there is - would have to investigate. Could  
<br>
cause some bookkeeping problems for job completion.
<br>
<p>Interesting possibility, though...consider it another option for now.
<br>
<p><p><p>On Oct 22, 2008, at 12:53 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; What's happened if we roll around with the counter ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 22, 2008, at 2:49 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There recently was activity on the mailing lists where someone was  
</span><br>
<span class="quotelev2">&gt;&gt; attempting to call comm_spawn 100,000 times. Setting aside the  
</span><br>
<span class="quotelev2">&gt;&gt; threading issues that were the focus of that exchange, the fact is  
</span><br>
<span class="quotelev2">&gt;&gt; that OMPI currently cannot handle that many comm_spawns.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The ORTE jobid is composed of two elements:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. the top 16-bits is an &quot;identifier&quot; for that mpirun
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. the lower 16-bits is a running counter identifying the specific  
</span><br>
<span class="quotelev2">&gt;&gt; job/launch for those procs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thus, we are limited to 64k comm_spawns.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Expanding this would require either revamping the entire way we  
</span><br>
<span class="quotelev2">&gt;&gt; handle jobs (e.g., removing the mpirun identifier - major effort),  
</span><br>
<span class="quotelev2">&gt;&gt; or expanding the orte_jobid_t from its current 32-bits to 64-bits.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this a problem we want to address?
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="4795.php">George Bosilca: "Re: [OMPI devel] Component open"</a>
<li><strong>Previous message:</strong> <a href="4793.php">George Bosilca: "Re: [OMPI devel] Comm_spawn limits"</a>
<li><strong>In reply to:</strong> <a href="4793.php">George Bosilca: "Re: [OMPI devel] Comm_spawn limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4813.php">Jeff Squyres: "Re: [OMPI devel] Comm_spawn limits"</a>
<li><strong>Reply:</strong> <a href="4813.php">Jeff Squyres: "Re: [OMPI devel] Comm_spawn limits"</a>
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
