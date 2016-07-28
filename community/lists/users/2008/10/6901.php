<?
$subject_val = "Re: [OMPI users] Performance: MPICH2 vs OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  8 10:51:34 2008" -->
<!-- isoreceived="20081008145134" -->
<!-- sent="Wed, 8 Oct 2008 10:51:23 -0400" -->
<!-- isosent="20081008145123" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance: MPICH2 vs OpenMPI" -->
<!-- id="AA512E4C-E8AE-43F0-98C7-7BBFDC5EF088_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="cb60cbc40810080726l450df7fcm1318ae27bd79d37a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance: MPICH2 vs OpenMPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-08 10:51:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6902.php">Ashley Pittman: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6900.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6899.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6902.php">Ashley Pittman: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 8, 2008, at 10:26 AM, Sangamesh B wrote:
<br>
<p><span class="quotelev1">&gt; - What version of Open MPI are you using?  Please send the  
</span><br>
<span class="quotelev1">&gt; information listed here:
</span><br>
<span class="quotelev1">&gt; 1.2.7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Did you specify to use mpi_leave_pinned?
</span><br>
<span class="quotelev1">&gt; No
</span><br>
<span class="quotelev1">&gt; Use &quot;--mca mpi_leave_pinned 1&quot; on your mpirun command line (I don't  
</span><br>
<span class="quotelev1">&gt; know if leave pinned behavior benefits Gromacs or not, but it likely  
</span><br>
<span class="quotelev1">&gt; won't hurt)
</span><br>
<p>I see from your other mail that you are not using IB.  If you're only  
<br>
using TCP, then mpi_leave_pinned will have little/no effect.
<br>
<p><span class="quotelev1">&gt; - Did you enable processor affinity?
</span><br>
<span class="quotelev1">&gt; No
</span><br>
<span class="quotelev1">&gt;  Use &quot;--mca mpi_paffinity_alone 1&quot; on your mpirun command line.
</span><br>
<span class="quotelev1">&gt; Will use these options in the next benchmark
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Are you sure that Open MPI didn't fall back to ethernet (and not  
</span><br>
<span class="quotelev1">&gt; use IB)?  Use &quot;--mca btl openib,self&quot; on your mpirun command line.
</span><br>
<span class="quotelev1">&gt; I'm using TCP. There is no infiniband support. But eventhough the  
</span><br>
<span class="quotelev1">&gt; results can be compared?
</span><br>
<p>Yes, they should be comparable.  We've always known that our TCP  
<br>
support is &quot;ok&quot; but not &quot;great&quot; (truthfully: we've not tuned it nearly  
<br>
as extensively as we've tuned our other transports).  But such a huge  
<br>
performance difference is surprising.
<br>
<p>It this one 1 or more nodes?  It might be useful to delineate between  
<br>
TCP and shared memory performance difference.  I believe that MPICH2's  
<br>
shmem performance is likely to be better than OMPI v1.2's, but like  
<br>
TCP, it shouldn't be *that* huge.
<br>
<p><span class="quotelev1">&gt; - Have you tried compiling Open MPI with something other than GCC?
</span><br>
<span class="quotelev1">&gt; No.
</span><br>
<span class="quotelev1">&gt;  Just this week, we've gotten some reports from an OMPI member that  
</span><br>
<span class="quotelev1">&gt; they are sometimes seeing *huge* performance differences with OMPI  
</span><br>
<span class="quotelev1">&gt; compiled with GCC vs. any other compiler (Intel, PGI, Pathscale).   
</span><br>
<span class="quotelev1">&gt; We are working to figure out why; no root cause has been identified  
</span><br>
<span class="quotelev1">&gt; yet.
</span><br>
<span class="quotelev1">&gt; I'll try for other than gcc and comeback to you
</span><br>
<p>That would be most useful; thanks.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6902.php">Ashley Pittman: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6900.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6899.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6902.php">Ashley Pittman: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
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
