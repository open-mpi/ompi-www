<?
$subject_val = "Re: [OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 24 05:24:45 2009" -->
<!-- isoreceived="20090324092445" -->
<!-- sent="Tue, 24 Mar 2009 10:24:40 +0100" -->
<!-- isosent="20090324092440" -->
<!-- name="Manuel Prinz" -->
<!-- email="debian_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)" -->
<!-- id="1237886338.4246.5.camel_at_ce170155.zmb.uni-essen.de" -->
<!-- inreplyto="49C8997D.5050102_at_mailsnare.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)<br>
<strong>From:</strong> Manuel Prinz (<em>debian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-24 05:24:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8563.php">Ashley Pittman: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Previous message:</strong> <a href="8561.php">Jerome BENOIT: "[OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)"</a>
<li><strong>In reply to:</strong> <a href="8561.php">Jerome BENOIT: "[OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8565.php">Jerome BENOIT: "Re: [OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)"</a>
<li><strong>Reply:</strong> <a href="8565.php">Jerome BENOIT: "Re: [OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)"</a>
<li><strong>Reply:</strong> <a href="8566.php">Jerome BENOIT: "Re: [OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jerome!
<br>
<p>Am Dienstag, den 24.03.2009, 16:27 +0800 schrieb Jerome BENOIT:
<br>
<span class="quotelev1">&gt; With LAM some configuration files must be set up, I guess it is the same here.
</span><br>
<span class="quotelev1">&gt; But as SLURM is also involved, it is not clear to me right now how I must
</span><br>
<span class="quotelev1">&gt; configure both SLURM and OpenMPI to make them work together. Any hint is welcome !
</span><br>
<p>Open MPI integrates nicely with SLURM in Lenny. All you need to do is to
<br>
call your job with mpiexec OR mpirun. You do not need to setup anything
<br>
besides SLURM. If you use sbatch, you could create a file like this:
<br>
<p>cat &gt;test.sbatch &lt;&lt;EOF
<br>
#!/bin/sh
<br>
#SLURM -n 8
<br>
mpiexec my_mpi_tool
<br>
EOF
<br>
<p>and call it with:
<br>
<p>$ sbatch test.sbatch
<br>
<p>SLURM will setup everything for you so mpiexec &quot;knows&quot; how much
<br>
resources to use.
<br>
<p>Best regards
<br>
Manuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8563.php">Ashley Pittman: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Previous message:</strong> <a href="8561.php">Jerome BENOIT: "[OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)"</a>
<li><strong>In reply to:</strong> <a href="8561.php">Jerome BENOIT: "[OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8565.php">Jerome BENOIT: "Re: [OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)"</a>
<li><strong>Reply:</strong> <a href="8565.php">Jerome BENOIT: "Re: [OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)"</a>
<li><strong>Reply:</strong> <a href="8566.php">Jerome BENOIT: "Re: [OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)"</a>
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
