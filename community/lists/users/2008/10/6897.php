<?
$subject_val = "Re: [OMPI users] Performance: MPICH2 vs OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  8 09:57:47 2008" -->
<!-- isoreceived="20081008135747" -->
<!-- sent="Wed, 8 Oct 2008 19:27:42 +0530" -->
<!-- isosent="20081008135742" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance: MPICH2 vs OpenMPI" -->
<!-- id="cb60cbc40810080657q508e2085we279fdea4d9bff16_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E5518C72-9C94-4DEE-8576-D841CD47195D_at_umich.edu" -->
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
<strong>Date:</strong> 2008-10-08 09:57:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6898.php">Yann JOBIC: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
<li><strong>Previous message:</strong> <a href="6896.php">Samuel Sarholz: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6894.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6895.php">Jeff Squyres: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Oct 8, 2008 at 7:09 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Your doing this on just one node?  That would be using the OpenMPI SM
</span><br>
<span class="quotelev1">&gt; transport,  Last I knew it wasn't that optimized though should still be much
</span><br>
<span class="quotelev1">&gt; faster than TCP.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>its on 2 nodes. I'm using TCP only. There is no infiniband hardware.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am surpised at your result though I do not have MPICH2 on the cluster
</span><br>
<span class="quotelev1">&gt; right now I don't have time to compare.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How did you run the job?
</span><br>
<p><p>MPICH2:
<br>
<p>time /opt/mpich2/gnu/bin/mpirun -machinefile ./mach -np 8
<br>
/opt/apps/gromacs333/bin/mdrun_mpi | tee gro_bench_8p
<br>
<p>OpenMPI:
<br>
<p>$ time /opt/ompi127/bin/mpirun -machinefile ./mach -np 8
<br>
/opt/apps/gromacs333_ompi/bin/mdrun_mpi | tee gromacs_openmpi_8process
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp &lt;<a href="http://www.umich.edu/%7Ebrockp">http://www.umich.edu/%7Ebrockp</a>&gt;
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 8, 2008, at 9:10 AM, Sangamesh B wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       I wanted to switch from mpich2/mvapich2 to OpenMPI, as OpenMPI
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
<span class="quotelev2">&gt;&gt; Any comments ..?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Sangamesh
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6897/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6898.php">Yann JOBIC: "Re: [OMPI users] OMPI link error with petsc 2.3.3"</a>
<li><strong>Previous message:</strong> <a href="6896.php">Samuel Sarholz: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6894.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6895.php">Jeff Squyres: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
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
