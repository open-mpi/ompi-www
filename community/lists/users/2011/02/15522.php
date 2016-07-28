<?
$subject_val = "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  6 23:12:35 2011" -->
<!-- isoreceived="20110207041235" -->
<!-- sent="Mon, 7 Feb 2011 15:12:24 +1100" -->
<!-- isosent="20110207041224" -->
<!-- name="Michael Curtis" -->
<!-- email="michael.curtis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault with SLURM and non-local nodes" -->
<!-- id="9AB80F59-D627-44B6-B877-813631AE94B8_at_monash.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EBC6D046-0D0E-40F3-9C82-53B600A4BA0A_at_monash.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault with SLURM and non-local nodes<br>
<strong>From:</strong> Michael Curtis (<em>michael.curtis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-06 23:12:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15523.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Previous message:</strong> <a href="15521.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>In reply to:</strong> <a href="15521.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15523.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Reply:</strong> <a href="15523.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 07/02/2011, at 12:36 PM, Michael Curtis wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 04/02/2011, at 9:35 AM, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I just tried to reproduce the problem that you are experiencing and was unable to.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; SLURM 2.1.15
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI 1.4.3 configured with: --with-platform=./contrib/platform/lanl/tlcc/debug-nopanasas
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I compiled OpenMPI 1.4.3 (vanilla from source tarball) with the same platform file (the only change was to re-enable btl-tcp).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, the result is the same:
</span><br>
<p>To reply to my own post again (sorry!), I tried OpenMPI 1.5.1.  This works fine:
<br>
salloc -n16 ~/../openmpi/bin/mpirun --display-map mpi
<br>
salloc: Granted job allocation 151
<br>
<p>&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: ipc3	Num procs: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [3365,1] Process rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [3365,1] Process rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [3365,1] Process rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [3365,1] Process rank: 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [3365,1] Process rank: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [3365,1] Process rank: 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [3365,1] Process rank: 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [3365,1] Process rank: 7
<br>
<p>&nbsp;Data for node: ipc4	Num procs: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [3365,1] Process rank: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [3365,1] Process rank: 9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [3365,1] Process rank: 10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [3365,1] Process rank: 11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [3365,1] Process rank: 12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [3365,1] Process rank: 13
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [3365,1] Process rank: 14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [3365,1] Process rank: 15
<br>
<p>&nbsp;=============================================================
<br>
Process 2 on eng-ipc3.{FQDN} out of 16
<br>
Process 4 on eng-ipc3.{FQDN} out of 16
<br>
Process 5 on eng-ipc3.{FQDN} out of 16
<br>
Process 0 on eng-ipc3.{FQDN} out of 16
<br>
Process 1 on eng-ipc3.{FQDN} out of 16
<br>
Process 6 on eng-ipc3.{FQDN} out of 16
<br>
Process 3 on eng-ipc3.{FQDN} out of 16
<br>
Process 7 on eng-ipc3.{FQDN} out of 16
<br>
Process 8 on eng-ipc4.{FQDN} out of 16
<br>
Process 11 on eng-ipc4.{FQDN} out of 16
<br>
Process 12 on eng-ipc4.{FQDN} out of 16
<br>
Process 14 on eng-ipc4.{FQDN} out of 16
<br>
Process 15 on eng-ipc4.{FQDN} out of 16
<br>
Process 10 on eng-ipc4.{FQDN} out of 16
<br>
Process 9 on eng-ipc4.{FQDN} out of 16
<br>
Process 13 on eng-ipc4.{FQDN} out of 16
<br>
salloc: Relinquishing job allocation 151
<br>
<p>It does seem very much like there is a bug of some sort in 1.4.3?
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15523.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Previous message:</strong> <a href="15521.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>In reply to:</strong> <a href="15521.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15523.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Reply:</strong> <a href="15523.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
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
