<?
$subject_val = "Re: [OMPI users] Performance: MPICH2 vs OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  8 10:26:15 2008" -->
<!-- isoreceived="20081008142615" -->
<!-- sent="Wed, 8 Oct 2008 19:56:10 +0530" -->
<!-- isosent="20081008142610" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance: MPICH2 vs OpenMPI" -->
<!-- id="cb60cbc40810080726l450df7fcm1318ae27bd79d37a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AC31D180-4B83-440B-B321-84902AC2CCFC_at_cisco.com" -->
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
<strong>From:</strong> Sangamesh B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-08 10:26:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6900.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6898.php">Yann JOBIC: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
<li><strong>In reply to:</strong> <a href="6895.php">Jeff Squyres: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6900.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6900.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6901.php">Jeff Squyres: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Oct 8, 2008 at 7:16 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 8, 2008, at 9:10 AM, Sangamesh B wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        I wanted to switch from mpich2/mvapich2 to OpenMPI, as OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; supports both ethernet and infiniband. Before doing that I tested an
</span><br>
<span class="quotelev2">&gt;&gt; application 'GROMACS' to compare the performance of MPICH2 &amp; OpenMPI. Both
</span><br>
<span class="quotelev2">&gt;&gt; have been compiled with GNU compilers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After this benchmark, I came to know that OpenMPI is slower than MPICH2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This benchmark is run on a AMD dual core, dual opteron processor. Both
</span><br>
<span class="quotelev2">&gt;&gt; have compiled with default configurations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The job is run on 2 nodes - 8 cores.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI - 25 m 39 s.
</span><br>
<span class="quotelev2">&gt;&gt; MPICH2  -  15 m 53 s.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A few things:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - What version of Open MPI are you using?  Please send the information
</span><br>
<span class="quotelev1">&gt; listed here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
1.2.7
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Did you specify to use mpi_leave_pinned?
</span><br>
<p>No
<br>
<p><span class="quotelev1">&gt; Use &quot;--mca mpi_leave_pinned 1&quot; on your mpirun command line (I don't know if
</span><br>
<span class="quotelev1">&gt; leave pinned behavior benefits Gromacs or not, but it likely won't hurt)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; - Did you enable processor affinity?
</span><br>
<p>No
<br>
<p><span class="quotelev1">&gt;  Use &quot;--mca mpi_paffinity_alone 1&quot; on your mpirun command line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Will use these options in the next benchmark
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Are you sure that Open MPI didn't fall back to ethernet (and not use IB)?
</span><br>
<span class="quotelev1">&gt;  Use &quot;--mca btl openib,self&quot; on your mpirun command line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
I'm using TCP. There is no infiniband support. But eventhough the results
<br>
can be compared?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Have you tried compiling Open MPI with something other than GCC?
</span><br>
<p>No.
<br>
<p><span class="quotelev1">&gt;  Just this week, we've gotten some reports from an OMPI member that they
</span><br>
<span class="quotelev1">&gt; are sometimes seeing *huge* performance differences with OMPI compiled with
</span><br>
<span class="quotelev1">&gt; GCC vs. any other compiler (Intel, PGI, Pathscale).  We are working to
</span><br>
<span class="quotelev1">&gt; figure out why; no root cause has been identified yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
I'll try for other than gcc and comeback to you
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6899/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6900.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6898.php">Yann JOBIC: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
<li><strong>In reply to:</strong> <a href="6895.php">Jeff Squyres: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6900.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6900.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6901.php">Jeff Squyres: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
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
