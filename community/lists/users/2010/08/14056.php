<?
$subject_val = "[OMPI users] Problem submitting TORQUE jobs with ppn=1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 17 05:29:34 2010" -->
<!-- isoreceived="20100817092934" -->
<!-- sent="Tue, 17 Aug 2010 11:29:27 +0200" -->
<!-- isosent="20100817092927" -->
<!-- name="Gijsbert Wiesenekker" -->
<!-- email="gijsbert.wiesenekker_at_[hidden]" -->
<!-- subject="[OMPI users] Problem submitting TORQUE jobs with ppn=1" -->
<!-- id="74F7E507-5011-4D9F-99AD-53D9732E93CE_at_gmail.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Problem submitting TORQUE jobs with ppn=1<br>
<strong>From:</strong> Gijsbert Wiesenekker (<em>gijsbert.wiesenekker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-17 05:29:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14057.php">Nysal Jan: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14055.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14059.php">Gijsbert Wiesenekker: "Re: [OMPI users] Problem submitting TORQUE jobs with ppn=1"</a>
<li><strong>Reply:</strong> <a href="14059.php">Gijsbert Wiesenekker: "Re: [OMPI users] Problem submitting TORQUE jobs with ppn=1"</a>
<li><strong>Reply:</strong> <a href="14060.php">Gus Correa: "Re: [OMPI users] Problem submitting TORQUE jobs with ppn=1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a four-node quad core cluster. I am running OpenMPI (version 1.4.2) jobs with Torque (version 2.4.8). I can submit jobs using
<br>
#PBS -lnodes=4:ppn=4
<br>
And 16 processes are launched. However if I use
<br>
#PBS -lnodes=4:ppn=1 
<br>
or
<br>
#PBS -lnodes=4
<br>
The call to MPI_Init is succesful, but the call to 
<br>
MPI_Comm_size(MPI_COMM_WORLD, &amp;mpi_nprocs)
<br>
hangs and never returns.
<br>
<p>Any ideas? Any workarounds?
<br>
<p>Gijsbert
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14057.php">Nysal Jan: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14055.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14059.php">Gijsbert Wiesenekker: "Re: [OMPI users] Problem submitting TORQUE jobs with ppn=1"</a>
<li><strong>Reply:</strong> <a href="14059.php">Gijsbert Wiesenekker: "Re: [OMPI users] Problem submitting TORQUE jobs with ppn=1"</a>
<li><strong>Reply:</strong> <a href="14060.php">Gus Correa: "Re: [OMPI users] Problem submitting TORQUE jobs with ppn=1"</a>
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
