<?
$subject_val = "[OMPI users] mmap and MPI_File_Read";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  2 03:53:02 2013" -->
<!-- isoreceived="20130202085302" -->
<!-- sent="Sat, 2 Feb 2013 09:52:37 +0100" -->
<!-- isosent="20130202085237" -->
<!-- name="Andreas Bok Andersen" -->
<!-- email="bok.chan_at_[hidden]" -->
<!-- subject="[OMPI users] mmap and MPI_File_Read" -->
<!-- id="CAJe4Bie15JVLP4bTypbn+OnqWV-fcz4b283WDmzSQJUSfk1zhA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] mmap and MPI_File_Read<br>
<strong>From:</strong> Andreas Bok Andersen (<em>bok.chan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-02 03:52:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21283.php">HM Li: "[OMPI users] Fwd: How openmpi-1.6.3 using nodes which not LSF dispatch?"</a>
<li><strong>Previous message:</strong> <a href="21281.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran 77	program. Aborting."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21376.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mmap and MPI_File_Read"</a>
<li><strong>Reply:</strong> <a href="21376.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mmap and MPI_File_Read"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am using Open-MPI in a parallelization of matrix multiplication for large
<br>
matrices.
<br>
My question is:
<br>
-  Is MPI_File_read using mmapping under the hood when reading a binary
<br>
file.
<br>
- Or is the better/most efficient solution to read the input files using
<br>
the native mmap in C++
<br>
<p>Best Andreas
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21282/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21283.php">HM Li: "[OMPI users] Fwd: How openmpi-1.6.3 using nodes which not LSF dispatch?"</a>
<li><strong>Previous message:</strong> <a href="21281.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran 77	program. Aborting."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21376.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mmap and MPI_File_Read"</a>
<li><strong>Reply:</strong> <a href="21376.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mmap and MPI_File_Read"</a>
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
