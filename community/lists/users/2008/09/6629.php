<?
$subject_val = "[OMPI users] MPI Finalize";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 18:11:00 2008" -->
<!-- isoreceived="20080919221100" -->
<!-- sent="Sat, 20 Sep 2008 00:10:55 +0200" -->
<!-- isosent="20080919221055" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="[OMPI users] MPI Finalize" -->
<!-- id="3a37617f0809191510x5ca21dcjf946180c3bc47394_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI Finalize<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-19 18:10:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6630.php">Santolo Felaco: "Re: [OMPI users] Mpirun don't execute"</a>
<li><strong>Previous message:</strong> <a href="6628.php">Shafagh Jafer: "Re: [OMPI users] error while loading shared libraries: libmpi_cxx.so.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6633.php">Tim Mattox: "Re: [OMPI users] MPI Finalize"</a>
<li><strong>Reply:</strong> <a href="6633.php">Tim Mattox: "Re: [OMPI users] MPI Finalize"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
i'm developing a C code under OpenMPI 1.2.5 with parallel I/O by MPI-2.
<br>
I have a strange problem in the MPI_Finalize() routine. The code generates
<br>
message reported below :
<br>
<p>*** An error occurred in MPI_Barrier
<br>
*** after MPI was finalized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>In my code, i don't use MPI_Barrier. So, this error is caused by internal
<br>
MPI_Barrier into MPI_Finalize. I've noted that if i disable MPI-2 I/O
<br>
routine, application works well. Is there a strange effect of MPI_Finalize
<br>
under MPI2 related MPI_File_open, MPI_File_close, MPI_File_Reat_at routines?
<br>
<p><p><pre>
-- 
Gabriele Fatigati
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it Tel: +39 051 6171722
g.fatigati_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6629/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6630.php">Santolo Felaco: "Re: [OMPI users] Mpirun don't execute"</a>
<li><strong>Previous message:</strong> <a href="6628.php">Shafagh Jafer: "Re: [OMPI users] error while loading shared libraries: libmpi_cxx.so.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6633.php">Tim Mattox: "Re: [OMPI users] MPI Finalize"</a>
<li><strong>Reply:</strong> <a href="6633.php">Tim Mattox: "Re: [OMPI users] MPI Finalize"</a>
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
