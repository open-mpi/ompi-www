<?
$subject_val = "[OMPI users] SYSTEM CPU with OpenMPI 1.4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 10 00:31:52 2010" -->
<!-- isoreceived="20101110053152" -->
<!-- sent="Wed, 10 Nov 2010 14:31:46 +0900" -->
<!-- isosent="20101110053146" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="[OMPI users] SYSTEM CPU with OpenMPI 1.4.3" -->
<!-- id="OFCDF31B2D.22D610DF-ON492577D7.001AEFCA-492577D7.001E61DE_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> [OMPI users] SYSTEM CPU with OpenMPI 1.4.3<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20SYSTEM%20CPU%20with%20OpenMPI%201.4.3"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-11-10 00:31:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14716.php">Nysal Jan: "Re: [OMPI users] Creating 64-bit objects?"</a>
<li><strong>Previous message:</strong> <a href="14714.php">Yiannis Papadopoulos: "[OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14745.php">Jeff Squyres: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
<li><strong>Reply:</strong> <a href="14745.php">Jeff Squyres: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Recently I installed OpenMPI 1.4.3 on my cluster. I found that
<br>
SYSTEM CPU is higher than older versions of 1.4.X, when I ran
<br>
our FEM program. Further more, OMPI_1.4.3 is a little bit slower
<br>
than 1.4.2. What is the differnece between these two versions, or
<br>
what affects the &quot;SYSTEM CPU&quot; and execution speed?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USER CPU   SYSTEM CPU
<br>
OpenMPI 1.4.2      99%          1%
<br>
OpenMPI 1.4.3      95%          5%
<br>
<p>Information of my cluster is as follows:
<br>
&nbsp;&nbsp;Nodes: 8 nodes
<br>
&nbsp;&nbsp;Cores of a node: 8 cores (AMD Opteron)
<br>
&nbsp;&nbsp;Network: DDR Infiniband
<br>
&nbsp;&nbsp;OS: CentOS 5.3
<br>
&nbsp;&nbsp;Compiler: PGI 10.5 with ACML 4.3
<br>
&nbsp;&nbsp;Typical command line:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpirun -host n1,n2,n3,n4 -np 8 -x OMP_NUM_THREADS=4 ./Solver
<br>
<p>Best regards,
<br>
tmishima
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14716.php">Nysal Jan: "Re: [OMPI users] Creating 64-bit objects?"</a>
<li><strong>Previous message:</strong> <a href="14714.php">Yiannis Papadopoulos: "[OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14745.php">Jeff Squyres: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
<li><strong>Reply:</strong> <a href="14745.php">Jeff Squyres: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
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
