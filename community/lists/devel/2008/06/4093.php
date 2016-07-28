<?
$subject_val = "Re: [OMPI devel] memory manager RFC";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 15:26:26 2008" -->
<!-- isoreceived="20080604192626" -->
<!-- sent="Wed, 04 Jun 2008 12:26:14 -0700" -->
<!-- isosent="20080604192614" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] memory manager RFC" -->
<!-- id="4846EC56.4040803_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.64.0806031152240.23226_at_marvin.we-be-smart.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] memory manager RFC<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-04 15:26:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4094.php">Andreas Schäfer: "Re: [OMPI devel] devel Digest, Vol 1080, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="4092.php">Jeff Squyres: "Re: [OMPI devel] memory manager RFC"</a>
<li><strong>In reply to:</strong> <a href="4078.php">Brian W. Barrett: "[OMPI devel] memory manager RFC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4096.php">Brian W. Barrett: "Re: [OMPI devel] memory manager RFC"</a>
<li><strong>Reply:</strong> <a href="4096.php">Brian W. Barrett: "Re: [OMPI devel] memory manager RFC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian states
<br>
<span class="quotelev1">&gt; This will 
</span><br>
<span class="quotelev1">&gt; allow users to turn ptmalloc2 support on/off at application link time 
</span><br>
<span class="quotelev1">&gt; instead of MPI compile time.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Where I assume &quot;MPI compile time&quot; means when the MPI *implementation* is 
<br>
compiled.
<br>
<p>So what about LD_PRELOAD?  Can the user defer the decision to use 
<br>
ptmalloc until application launch?
<br>
If so, this begs the question of an mpirun option to &quot;enable 
<br>
leave_pinned, placing libompi-malloc.so in LD_PRELOAD if required&quot;.  
<br>
Can/will/should such an option exist?
<br>
<p>-Paul
<br>
<p><p>Brian W. Barrett wrote:
<br>
<span class="quotelev1">&gt; Hi all -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry this is so late, but it took a couple of iterations with a couple of
</span><br>
<span class="quotelev1">&gt; people to get right from a technology standpoint.  All mistakes in this
</span><br>
<span class="quotelev1">&gt; proposal are my fault.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What: Fix the ptmalloc2 problem
</span><br>
<span class="quotelev1">&gt; How: Remove it from the default path
</span><br>
<span class="quotelev1">&gt; When: This weekend?  For the 1.3 branch
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem: On Linux today, we by default build a copy of ptmalloc2 into 
</span><br>
<span class="quotelev1">&gt; libopen-pal.so so that RDMA networks can get better bandwidth using 
</span><br>
<span class="quotelev1">&gt; leave_pinned.  Normally users don't use or need leave_pinned, but we need 
</span><br>
<span class="quotelev1">&gt; to have it available for benchmarks and the few apps that gain by having 
</span><br>
<span class="quotelev1">&gt; the more independent-ish progress.  However, by having it there, we're 
</span><br>
<span class="quotelev1">&gt; screwing with the memory manager, which has a number of bad side effects. 
</span><br>
<span class="quotelev1">&gt; First, it can cause numerous crashes if the user is providing his/her own 
</span><br>
<span class="quotelev1">&gt; allocator.  Second, there is growing evidence that the ptmalloc2 in Open 
</span><br>
<span class="quotelev1">&gt; MPI has an evil corner case we can't pinn down that causes explosive 
</span><br>
<span class="quotelev1">&gt; growth in memory utilization.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The proposal: Remove ptmalloc2 from libopen-pal.so and make it a 
</span><br>
<span class="quotelev1">&gt; standalone library (for forward compatibility, currently called 
</span><br>
<span class="quotelev1">&gt; libompi-malloc.so), which the user can explicitly link in.  This will 
</span><br>
<span class="quotelev1">&gt; allow users to turn ptmalloc2 support on/off at application link time 
</span><br>
<span class="quotelev1">&gt; instead of MPI compile time.  Given the limited number of leave_pinned 
</span><br>
<span class="quotelev1">&gt; users, this seems to be a good compromise for the near-term between 
</span><br>
<span class="quotelev1">&gt; greater stability for most users and fast performance for power users. 
</span><br>
<span class="quotelev1">&gt; The mallopt() solution, which means free() never gives memory back to the 
</span><br>
<span class="quotelev1">&gt; OS (but does reuse it), which works well for benchmarks, will still be 
</span><br>
<span class="quotelev1">&gt; available at all times.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The work: Some autoconf magic to move most (but not all -- in particular 
</span><br>
<span class="quotelev1">&gt; the munmap() support) of the ptmalloc2 component into its own library. 
</span><br>
<span class="quotelev1">&gt; This is extremely low risk, and actually lowers the risk of Open MPI 
</span><br>
<span class="quotelev1">&gt; breaking by removing code from the critical path.  There will also be a 
</span><br>
<span class="quotelev1">&gt; small number of enhancements to the mpool base code to better detect 
</span><br>
<span class="quotelev1">&gt; situations where leave_pinned is used by we can't sense giving memory back 
</span><br>
<span class="quotelev1">&gt; to the OS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd like this for 1.3, as we're running into more and more situations 
</span><br>
<span class="quotelev1">&gt; where this code isn't working.  Also, the lone supporter of the ptmallco2 
</span><br>
<span class="quotelev1">&gt; code (me) doesn't want to do it anymore and removing the code from the 
</span><br>
<span class="quotelev1">&gt; critical path will lower the workload of me (ie, the retired guy who's 
</span><br>
<span class="quotelev1">&gt; doing this for fun).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you have objections, please let me know before Friday.  I'd like to 
</span><br>
<span class="quotelev1">&gt; commit these changes to the trunk this weekend.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group                 
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4094.php">Andreas Schäfer: "Re: [OMPI devel] devel Digest, Vol 1080, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="4092.php">Jeff Squyres: "Re: [OMPI devel] memory manager RFC"</a>
<li><strong>In reply to:</strong> <a href="4078.php">Brian W. Barrett: "[OMPI devel] memory manager RFC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4096.php">Brian W. Barrett: "Re: [OMPI devel] memory manager RFC"</a>
<li><strong>Reply:</strong> <a href="4096.php">Brian W. Barrett: "Re: [OMPI devel] memory manager RFC"</a>
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
