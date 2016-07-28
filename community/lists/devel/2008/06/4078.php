<?
$subject_val = "[OMPI devel] memory manager RFC";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  3 12:04:35 2008" -->
<!-- isoreceived="20080603160435" -->
<!-- sent="Tue, 3 Jun 2008 12:04:28 -0400 (EDT)" -->
<!-- isosent="20080603160428" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="[OMPI devel] memory manager RFC" -->
<!-- id="Pine.LNX.4.64.0806031152240.23226_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] memory manager RFC<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-03 12:04:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4079.php">George Bosilca: "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
<li><strong>Previous message:</strong> <a href="4077.php">Jeff Squyres: "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4092.php">Jeff Squyres: "Re: [OMPI devel] memory manager RFC"</a>
<li><strong>Reply:</strong> <a href="4092.php">Jeff Squyres: "Re: [OMPI devel] memory manager RFC"</a>
<li><strong>Reply:</strong> <a href="4093.php">Paul H. Hargrove: "Re: [OMPI devel] memory manager RFC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>Sorry this is so late, but it took a couple of iterations with a couple of
<br>
people to get right from a technology standpoint.  All mistakes in this
<br>
proposal are my fault.
<br>
<p>What: Fix the ptmalloc2 problem
<br>
How: Remove it from the default path
<br>
When: This weekend?  For the 1.3 branch
<br>
<p>The problem: On Linux today, we by default build a copy of ptmalloc2 into 
<br>
libopen-pal.so so that RDMA networks can get better bandwidth using 
<br>
leave_pinned.  Normally users don't use or need leave_pinned, but we need 
<br>
to have it available for benchmarks and the few apps that gain by having 
<br>
the more independent-ish progress.  However, by having it there, we're 
<br>
screwing with the memory manager, which has a number of bad side effects. 
<br>
First, it can cause numerous crashes if the user is providing his/her own 
<br>
allocator.  Second, there is growing evidence that the ptmalloc2 in Open 
<br>
MPI has an evil corner case we can't pinn down that causes explosive 
<br>
growth in memory utilization.
<br>
<p>The proposal: Remove ptmalloc2 from libopen-pal.so and make it a 
<br>
standalone library (for forward compatibility, currently called 
<br>
libompi-malloc.so), which the user can explicitly link in.  This will 
<br>
allow users to turn ptmalloc2 support on/off at application link time 
<br>
instead of MPI compile time.  Given the limited number of leave_pinned 
<br>
users, this seems to be a good compromise for the near-term between 
<br>
greater stability for most users and fast performance for power users. 
<br>
The mallopt() solution, which means free() never gives memory back to the 
<br>
OS (but does reuse it), which works well for benchmarks, will still be 
<br>
available at all times.
<br>
<p>The work: Some autoconf magic to move most (but not all -- in particular 
<br>
the munmap() support) of the ptmalloc2 component into its own library. 
<br>
This is extremely low risk, and actually lowers the risk of Open MPI 
<br>
breaking by removing code from the critical path.  There will also be a 
<br>
small number of enhancements to the mpool base code to better detect 
<br>
situations where leave_pinned is used by we can't sense giving memory back 
<br>
to the OS.
<br>
<p>I'd like this for 1.3, as we're running into more and more situations 
<br>
where this code isn't working.  Also, the lone supporter of the ptmallco2 
<br>
code (me) doesn't want to do it anymore and removing the code from the 
<br>
critical path will lower the workload of me (ie, the retired guy who's 
<br>
doing this for fun).
<br>
<p>If you have objections, please let me know before Friday.  I'd like to 
<br>
commit these changes to the trunk this weekend.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4079.php">George Bosilca: "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
<li><strong>Previous message:</strong> <a href="4077.php">Jeff Squyres: "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4092.php">Jeff Squyres: "Re: [OMPI devel] memory manager RFC"</a>
<li><strong>Reply:</strong> <a href="4092.php">Jeff Squyres: "Re: [OMPI devel] memory manager RFC"</a>
<li><strong>Reply:</strong> <a href="4093.php">Paul H. Hargrove: "Re: [OMPI devel] memory manager RFC"</a>
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
