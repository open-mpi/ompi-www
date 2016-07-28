<?
$subject_val = "Re: [OMPI users] OpenMPI (1.8.3) and environment variable export";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 12 11:14:00 2015" -->
<!-- isoreceived="20150612151400" -->
<!-- sent="Fri, 12 Jun 2015 11:13:50 -0400" -->
<!-- isosent="20150612151350" -->
<!-- name="Noam Bernstein" -->
<!-- email="noam.bernstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI (1.8.3) and environment variable export" -->
<!-- id="0293CAC2-44A5-4461-90A2-C5955DDEC07E_at_nrl.navy.mil" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="trinity-2e1f4c59-77ea-43d3-a989-fac453cc355f-1434121717370_at_3capp-gmx-bs50" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI (1.8.3) and environment variable export<br>
<strong>From:</strong> Noam Bernstein (<em>noam.bernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-12 11:13:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27127.php">Ray Sheppard: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<li><strong>Previous message:</strong> <a href="27125.php">Ralph Castain: "Re: [OMPI users] Help : Slowness with OpenMPI (1.8.1) and Numpy"</a>
<li><strong>In reply to:</strong> <a href="27124.php">borno_borno_at_[hidden]: "[OMPI users] OpenMPI (1.8.3) and environment variable export"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27128.php">borno_borno_at_[hidden]: "Re: [OMPI users] OpenMPI (1.8.3) and environment variable export"</a>
<li><strong>Reply:</strong> <a href="27128.php">borno_borno_at_[hidden]: "Re: [OMPI users] OpenMPI (1.8.3) and environment variable export"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Jun 12, 2015, at 11:08 AM, borno_borno_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hey there, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know that variable export in general can be done with the -x option of mpirun, but I guess that won't help me.
</span><br>
<span class="quotelev1">&gt; More precisely I have a heterogeneous cluster (number of cores per cpu) and one process for each node. The application I need to launch uses hybrid MPI+OpenMP parallelization an I have to set the OMP_NUM_THREADS variable such that it fits the number of cores on each node. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have no access to the application to get the number of cores from within the process. I just can launch it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any chance to do this?
</span><br>
<p>You could wrap the executable in a shell script that gets the number of cores (from /proc/cpuinfo?), setenv OMP_NUM_THREADS, and execs the executable passing $* command line arguments.  Then you mpirun the script you created.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Noam
<br>

<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27126/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27127.php">Ray Sheppard: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<li><strong>Previous message:</strong> <a href="27125.php">Ralph Castain: "Re: [OMPI users] Help : Slowness with OpenMPI (1.8.1) and Numpy"</a>
<li><strong>In reply to:</strong> <a href="27124.php">borno_borno_at_[hidden]: "[OMPI users] OpenMPI (1.8.3) and environment variable export"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27128.php">borno_borno_at_[hidden]: "Re: [OMPI users] OpenMPI (1.8.3) and environment variable export"</a>
<li><strong>Reply:</strong> <a href="27128.php">borno_borno_at_[hidden]: "Re: [OMPI users] OpenMPI (1.8.3) and environment variable export"</a>
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
