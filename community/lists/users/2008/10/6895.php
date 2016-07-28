<?
$subject_val = "Re: [OMPI users] Performance: MPICH2 vs OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  8 09:46:27 2008" -->
<!-- isoreceived="20081008134627" -->
<!-- sent="Wed, 8 Oct 2008 09:46:21 -0400" -->
<!-- isosent="20081008134621" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance: MPICH2 vs OpenMPI" -->
<!-- id="AC31D180-4B83-440B-B321-84902AC2CCFC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="cb60cbc40810080610u329c2466r7fae4b0572a30df1_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-10-08 09:46:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6896.php">Samuel Sarholz: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6894.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6891.php">Sangamesh B: "[OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6899.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6899.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6902.php">Ashley Pittman: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 8, 2008, at 9:10 AM, Sangamesh B wrote:
<br>
<p><span class="quotelev1">&gt;        I wanted to switch from mpich2/mvapich2 to OpenMPI, as  
</span><br>
<span class="quotelev1">&gt; OpenMPI supports both ethernet and infiniband. Before doing that I  
</span><br>
<span class="quotelev1">&gt; tested an application 'GROMACS' to compare the performance of MPICH2  
</span><br>
<span class="quotelev1">&gt; &amp; OpenMPI. Both have been compiled with GNU compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After this benchmark, I came to know that OpenMPI is slower than  
</span><br>
<span class="quotelev1">&gt; MPICH2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This benchmark is run on a AMD dual core, dual opteron processor.  
</span><br>
<span class="quotelev1">&gt; Both have compiled with default configurations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The job is run on 2 nodes - 8 cores.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI - 25 m 39 s.
</span><br>
<span class="quotelev1">&gt; MPICH2  -  15 m 53 s.
</span><br>
<p><p>A few things:
<br>
<p>- What version of Open MPI are you using?  Please send the information  
<br>
listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>- Did you specify to use mpi_leave_pinned?  Use &quot;--mca  
<br>
mpi_leave_pinned 1&quot; on your mpirun command line (I don't know if leave  
<br>
pinned behavior benefits Gromacs or not, but it likely won't hurt)
<br>
<p>- Did you enable processor affinity?  Use &quot;--mca mpi_paffinity_alone  
<br>
1&quot; on your mpirun command line.
<br>
<p>- Are you sure that Open MPI didn't fall back to ethernet (and not use  
<br>
IB)?  Use &quot;--mca btl openib,self&quot; on your mpirun command line.
<br>
<p>- Have you tried compiling Open MPI with something other than GCC?   
<br>
Just this week, we've gotten some reports from an OMPI member that  
<br>
they are sometimes seeing *huge* performance differences with OMPI  
<br>
compiled with GCC vs. any other compiler (Intel, PGI, Pathscale).  We  
<br>
are working to figure out why; no root cause has been identified yet.
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
<li><strong>Next message:</strong> <a href="6896.php">Samuel Sarholz: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6894.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6891.php">Sangamesh B: "[OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6899.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6899.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6902.php">Ashley Pittman: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
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
