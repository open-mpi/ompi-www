<?
$subject_val = "[OMPI users] getc in openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 12 13:48:48 2010" -->
<!-- isoreceived="20100512174848" -->
<!-- sent="Wed, 12 May 2010 13:48:41 -0400" -->
<!-- isosent="20100512174841" -->
<!-- name="Hanjun Kim" -->
<!-- email="hanjunk_at_[hidden]" -->
<!-- subject="[OMPI users] getc in openmpi" -->
<!-- id="AANLkTiks901QyQctDkOXfEsEQgNMNstJwX_vP8hzrRlU_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] getc in openmpi<br>
<strong>From:</strong> Hanjun Kim (<em>hanjunk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-12 13:48:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13030.php">Jeff Squyres: "Re: [OMPI users] getc in openmpi"</a>
<li><strong>Previous message:</strong> <a href="13028.php">Damien Hocking: "Re: [OMPI users] Fortran issues on Windows and 1.5 Trunk version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13030.php">Jeff Squyres: "Re: [OMPI users] getc in openmpi"</a>
<li><strong>Reply:</strong> <a href="13030.php">Jeff Squyres: "Re: [OMPI users] getc in openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am working on parallelizing my sequential program using OpenMPI.
<br>
Although I got performance speedup using many threads, there was
<br>
slowdown on a small number of threads like 4 threads.
<br>
I found that it is because getc worked much slower than sequential
<br>
version. Does OpenMPI override or wrap getc function?
<br>
<p>To find the cause, I added mpi.h to the program and compiled it with
<br>
mpicc. There are two versions on the program;
<br>
1. The sequential program without MPI_Init_thread and MPI_Finalize.
<br>
2. The sequential program with MPI_Init_thread and MPI_Finalize.
<br>
Version 2 was 4x slower than version 1. I think it is because of slow
<br>
getc. Does MPI_Init_thread have some relation with the getc function
<br>
call?
<br>
<p>Thank you in advance.
<br>
<p>Hanjun
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13030.php">Jeff Squyres: "Re: [OMPI users] getc in openmpi"</a>
<li><strong>Previous message:</strong> <a href="13028.php">Damien Hocking: "Re: [OMPI users] Fortran issues on Windows and 1.5 Trunk version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13030.php">Jeff Squyres: "Re: [OMPI users] getc in openmpi"</a>
<li><strong>Reply:</strong> <a href="13030.php">Jeff Squyres: "Re: [OMPI users] getc in openmpi"</a>
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
