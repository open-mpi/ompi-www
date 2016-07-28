<?
$subject_val = "Re: [OMPI users] MPI_File_Write";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 29 14:29:29 2011" -->
<!-- isoreceived="20111129192929" -->
<!-- sent="Tue, 29 Nov 2011 13:29:23 -0600" -->
<!-- isosent="20111129192923" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_File_Write" -->
<!-- id="20111129192923.GD15042_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="04649ABFF695C94F8E6CF3BBBA9B1665B37E98_at_BHEXMBX1.livad.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_File_Write<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-29 14:29:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17864.php">Jaison Paul: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Previous message:</strong> <a href="17862.php">Jeff Squyres: "Re: [OMPI users] problem with fortran, MPI_REDUCE and MPI_IN_PLACE"</a>
<li><strong>In reply to:</strong> <a href="17779.php">Kharche, Sanjay: "[OMPI users] MPI_File_Write"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Nov 16, 2011 at 03:52:05PM +0000, Kharche, Sanjay wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear All
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am sure this issue has been discussed before on the forum, but I will appreciate your comments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have  a package that tries to do parallel file output using MPI_File_Write:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /*  Write to file. */
</span><br>
<span class="quotelev1">&gt; mpi_errno = MPI_File_write(file, New, 1, sourceType, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With an increasing number of processors, I see that this causes the file output to take longer. Can someone suggest a solution?
</span><br>
<p>Think a bit about what adding more processors will do.  Each MPI
<br>
process will write 1 sourceType to the file.   More processors will
<br>
write more data.
<br>
<p>I don't know how your program creates sourceType, nor do i know the
<br>
file view (if any) it has placed on the output, so maybe you will need
<br>
to show more code.
<br>
<p>I hope you are setting a file view here, or each processor will end up
<br>
writing the same data to the same location in the file.  If you
<br>
duplicate the work identically to N processors then yeah, you will
<br>
take N times longer.
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17864.php">Jaison Paul: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<li><strong>Previous message:</strong> <a href="17862.php">Jeff Squyres: "Re: [OMPI users] problem with fortran, MPI_REDUCE and MPI_IN_PLACE"</a>
<li><strong>In reply to:</strong> <a href="17779.php">Kharche, Sanjay: "[OMPI users] MPI_File_Write"</a>
<!-- nextthread="start" -->
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
