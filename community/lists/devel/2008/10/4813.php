<?
$subject_val = "Re: [OMPI devel] Comm_spawn limits";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 17:02:40 2008" -->
<!-- isoreceived="20081027210240" -->
<!-- sent="Mon, 27 Oct 2008 17:02:34 -0400" -->
<!-- isosent="20081027210234" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Comm_spawn limits" -->
<!-- id="B4ADB859-56ED-47C0-8DD5-0109E1CCCBA7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E1607333-E3BC-4DB4-B556-C6319D0C78B4_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-27 17:02:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4814.php">Andreas Schäfer: "Re: [OMPI devel] Comm_spawn limits"</a>
<li><strong>Previous message:</strong> <a href="4812.php">Tim Mattox: "[OMPI devel] Open MPI v1.3b1 has been posted"</a>
<li><strong>In reply to:</strong> <a href="4794.php">Ralph Castain: "Re: [OMPI devel] Comm_spawn limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4814.php">Andreas Schäfer: "Re: [OMPI devel] Comm_spawn limits"</a>
<li><strong>Reply:</strong> <a href="4814.php">Andreas Schäfer: "Re: [OMPI devel] Comm_spawn limits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How about a variation on that idea: keep a global bitmap or some other  
<br>
kind of &quot;this ID is in use&quot; table.  Hence, if the launch counter rolls  
<br>
over, you can simply check the table to find a free value.  That way,  
<br>
you can be sure to never re-use a value that is still being used.
<br>
<p>So we'd have 16 bits to express this counter, but we could introduce a  
<br>
limit of how many concurrent spawns we support.  Hence, the IDs can be  
<br>
large, but we only allow having N distinct values at any one time  
<br>
(quite similar to PIDs and an OS process table).  We can specify the  
<br>
value of N via configure, an MCA parameter, ...whatever.  If the MPI  
<br>
job tries to have more than N concurrent spawned jobs, it's an error.   
<br>
But for a job that continuously spawns jobs that each die off in short  
<br>
finite time, it'll be no problem.  The counter will likely cycle  
<br>
around, but won't run into any problems as long as there are &lt;N total  
<br>
spawns still running.
<br>
<p>&lt;waving hands a bit&gt;  There's probably some off-by-one errors in the  
<br>
above paragraph, but you get the idea.  :-)
<br>
<p><p>On Oct 22, 2008, at 2:59 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I can't swear to this because I haven't fully grokked it yet, but I
</span><br>
<span class="quotelev1">&gt; believe the answer is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. if child jobs have completed, it won't hurt. I think the various
</span><br>
<span class="quotelev1">&gt; subsystem cleanup their bookkeeping when a job completes, so we could
</span><br>
<span class="quotelev1">&gt; possibly reuse the number. Might be some race conditions we would have
</span><br>
<span class="quotelev1">&gt; to resolve.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. if child jobs haven't completed (which is the  situation this
</span><br>
<span class="quotelev1">&gt; particular user was attempting), then we would have a problem with
</span><br>
<span class="quotelev1">&gt; jobid confusion. Once we get the procs launched, though, I'm not sure
</span><br>
<span class="quotelev1">&gt; how much of a problem there is - would have to investigate. Could
</span><br>
<span class="quotelev1">&gt; cause some bookkeeping problems for job completion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interesting possibility, though...consider it another option for now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 22, 2008, at 12:53 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; What's happened if we roll around with the counter ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  george.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 22, 2008, at 2:49 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; There recently was activity on the mailing lists where someone was
</span><br>
<span class="quotelev3">&gt; &gt;&gt; attempting to call comm_spawn 100,000 times. Setting aside the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; threading issues that were the focus of that exchange, the fact is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that OMPI currently cannot handle that many comm_spawns.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The ORTE jobid is composed of two elements:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1. the top 16-bits is an &quot;identifier&quot; for that mpirun
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2. the lower 16-bits is a running counter identifying the specific
</span><br>
<span class="quotelev3">&gt; &gt;&gt; job/launch for those procs.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thus, we are limited to 64k comm_spawns.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Expanding this would require either revamping the entire way we
</span><br>
<span class="quotelev3">&gt; &gt;&gt; handle jobs (e.g., removing the mpirun identifier - major effort),
</span><br>
<span class="quotelev3">&gt; &gt;&gt; or expanding the orte_jobid_t from its current 32-bits to 64-bits.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is this a problem we want to address?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4814.php">Andreas Schäfer: "Re: [OMPI devel] Comm_spawn limits"</a>
<li><strong>Previous message:</strong> <a href="4812.php">Tim Mattox: "[OMPI devel] Open MPI v1.3b1 has been posted"</a>
<li><strong>In reply to:</strong> <a href="4794.php">Ralph Castain: "Re: [OMPI devel] Comm_spawn limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4814.php">Andreas Schäfer: "Re: [OMPI devel] Comm_spawn limits"</a>
<li><strong>Reply:</strong> <a href="4814.php">Andreas Schäfer: "Re: [OMPI devel] Comm_spawn limits"</a>
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
