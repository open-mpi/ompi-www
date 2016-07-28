<?
$subject_val = "Re: [OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 24 12:38:43 2009" -->
<!-- isoreceived="20090324163843" -->
<!-- sent="Wed, 25 Mar 2009 00:38:36 +0800" -->
<!-- isosent="20090324163836" -->
<!-- name="Jerome BENOIT" -->
<!-- email="ml.jgmbenoit_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)" -->
<!-- id="49C90C8C.7080301_at_mailsnare.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1237886338.4246.5.camel_at_ce170155.zmb.uni-essen.de" -->
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
<strong>From:</strong> Jerome BENOIT (<em>ml.jgmbenoit_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-24 12:38:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8567.php">Åke Sandgren: "[OMPI users] Possible regression from 1.2 to 1.3 when BLACS is involved"</a>
<li><strong>Previous message:</strong> <a href="8565.php">Jerome BENOIT: "Re: [OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)"</a>
<li><strong>In reply to:</strong> <a href="8562.php">Manuel Prinz: "Re: [OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8577.php">Manuel Prinz: "Re: [OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)"</a>
<li><strong>Reply:</strong> <a href="8577.php">Manuel Prinz: "Re: [OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Again !
<br>
<p>Manuel Prinz wrote:
<br>
<span class="quotelev1">&gt; Hi Jerome!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am Dienstag, den 24.03.2009, 16:27 +0800 schrieb Jerome BENOIT:
</span><br>
<span class="quotelev2">&gt;&gt; With LAM some configuration files must be set up, I guess it is the same here.
</span><br>
<span class="quotelev2">&gt;&gt; But as SLURM is also involved, it is not clear to me right now how I must
</span><br>
<span class="quotelev2">&gt;&gt; configure both SLURM and OpenMPI to make them work together. Any hint is welcome !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI integrates nicely with SLURM in Lenny. All you need to do is to
</span><br>
<span class="quotelev1">&gt; call your job with mpiexec OR mpirun. You do not need to setup anything
</span><br>
<span class="quotelev1">&gt; besides SLURM. If you use sbatch, you could create a file like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cat &gt;test.sbatch &lt;&lt;EOF
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; #SLURM -n 8
</span><br>
<span class="quotelev1">&gt; mpiexec my_mpi_tool
</span><br>
<span class="quotelev1">&gt; EOF
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and call it with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ sbatch test.sbatch
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SLURM will setup everything for you so mpiexec &quot;knows&quot; how much
</span><br>
<span class="quotelev1">&gt; resources to use.
</span><br>
<p><p>is there a way to check that SLURM and OpenMPI communicate as expected ?
<br>
<p>Thanks in advance,
<br>
Jerome
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Manuel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8567.php">Åke Sandgren: "[OMPI users] Possible regression from 1.2 to 1.3 when BLACS is involved"</a>
<li><strong>Previous message:</strong> <a href="8565.php">Jerome BENOIT: "Re: [OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)"</a>
<li><strong>In reply to:</strong> <a href="8562.php">Manuel Prinz: "Re: [OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8577.php">Manuel Prinz: "Re: [OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)"</a>
<li><strong>Reply:</strong> <a href="8577.php">Manuel Prinz: "Re: [OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)"</a>
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
