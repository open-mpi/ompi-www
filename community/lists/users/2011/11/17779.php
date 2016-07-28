<?
$subject_val = "[OMPI users] MPI_File_Write";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 16 10:52:13 2011" -->
<!-- isoreceived="20111116155213" -->
<!-- sent="Wed, 16 Nov 2011 15:52:05 +0000" -->
<!-- isosent="20111116155205" -->
<!-- name="Kharche, Sanjay" -->
<!-- email="Sanjay.Kharche_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_File_Write" -->
<!-- id="04649ABFF695C94F8E6CF3BBBA9B1665B37E98_at_BHEXMBX1.livad.liv.ac.uk" -->
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
<strong>Subject:</strong> [OMPI users] MPI_File_Write<br>
<strong>From:</strong> Kharche, Sanjay (<em>Sanjay.Kharche_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-16 10:52:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17780.php">Jeff Squyres: "[OMPI users] Open MPI SC'11 BOF slides"</a>
<li><strong>Previous message:</strong> <a href="17778.php">Tom Rosmond: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17863.php">Rob Latham: "Re: [OMPI users] MPI_File_Write"</a>
<li><strong>Reply:</strong> <a href="17863.php">Rob Latham: "Re: [OMPI users] MPI_File_Write"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All
<br>
<p>I am sure this issue has been discussed before on the forum, but I will appreciate your comments.
<br>
<p>I have  a package that tries to do parallel file output using MPI_File_Write:
<br>
<p>/*  Write to file. */
<br>
mpi_errno = MPI_File_write(file, New, 1, sourceType, MPI_STATUS_IGNORE);
<br>
<p>With an increasing number of processors, I see that this causes the file output to take longer. Can someone suggest a solution?
<br>
<p>many thanks
<br>
Sanjay
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17780.php">Jeff Squyres: "[OMPI users] Open MPI SC'11 BOF slides"</a>
<li><strong>Previous message:</strong> <a href="17778.php">Tom Rosmond: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17863.php">Rob Latham: "Re: [OMPI users] MPI_File_Write"</a>
<li><strong>Reply:</strong> <a href="17863.php">Rob Latham: "Re: [OMPI users] MPI_File_Write"</a>
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
