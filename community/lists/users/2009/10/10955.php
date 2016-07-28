<?
$subject_val = "[OMPI users] mpi_paffinity_alone and Nehalem SMT";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 23 11:30:38 2009" -->
<!-- isoreceived="20091023153038" -->
<!-- sent="Fri, 23 Oct 2009 11:30:34 -0400" -->
<!-- isosent="20091023153034" -->
<!-- name="Noam Bernstein" -->
<!-- email="noam.bernstein_at_[hidden]" -->
<!-- subject="[OMPI users] mpi_paffinity_alone and Nehalem SMT" -->
<!-- id="74EC9794-DEB4-45AB-8303-E4859B60DA7A_at_nrl.navy.mil" -->
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
<strong>Subject:</strong> [OMPI users] mpi_paffinity_alone and Nehalem SMT<br>
<strong>From:</strong> Noam Bernstein (<em>noam.bernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-23 11:30:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10956.php">Eugene Loh: "Re: [OMPI users] mpi_paffinity_alone and Nehalem SMT"</a>
<li><strong>Previous message:</strong> <a href="10954.php">Jeff Squyres: "[OMPI users] MPI-3 Fortran feedback"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10956.php">Eugene Loh: "Re: [OMPI users] mpi_paffinity_alone and Nehalem SMT"</a>
<li><strong>Reply:</strong> <a href="10956.php">Eugene Loh: "Re: [OMPI users] mpi_paffinity_alone and Nehalem SMT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all - we have a new Nehalem cluster (dual quad core), and SMT is
<br>
enabled in the  BIOS (for now).  I do want to do benchmarking on our
<br>
applications, obviously, but I was also wondering what happens if I just
<br>
set the number of slots to 8 in SGE, and just let things run.  It  
<br>
particular,
<br>
how will things be laid out if I do &quot;mpirun --mca mpi_paffinity_alone  
<br>
1&quot;?
<br>
<p>1. Will it be clever enough to schedule each process on its own core,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;and only resort to the second SMT virtual core if I go over 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;processes per node (dual quad core)?
<br>
2.  If it's not that clever, can I pass a rank file?
<br>
3. If I do have to do that, what is the mapping between core numbers
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and processor/core/SMT virtual cores?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Noam
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10956.php">Eugene Loh: "Re: [OMPI users] mpi_paffinity_alone and Nehalem SMT"</a>
<li><strong>Previous message:</strong> <a href="10954.php">Jeff Squyres: "[OMPI users] MPI-3 Fortran feedback"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10956.php">Eugene Loh: "Re: [OMPI users] mpi_paffinity_alone and Nehalem SMT"</a>
<li><strong>Reply:</strong> <a href="10956.php">Eugene Loh: "Re: [OMPI users] mpi_paffinity_alone and Nehalem SMT"</a>
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
