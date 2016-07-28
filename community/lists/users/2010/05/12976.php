<?
$subject_val = "[OMPI users] MPI_FILE_SET_ERRHANDLER returns an error with MPI_FILE_NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  7 16:52:31 2010" -->
<!-- isoreceived="20100507205231" -->
<!-- sent="Fri, 7 May 2010 16:52:25 -0400" -->
<!-- isosent="20100507205225" -->
<!-- name="Secretan Yves" -->
<!-- email="Yves.Secretan_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_FILE_SET_ERRHANDLER returns an error with MPI_FILE_NULL" -->
<!-- id="0DA854E5D5F4C8428ABC1701AE2621CD011F5B07C53A_at_INRSEXCH02.AD.INRS.CA" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] MPI_FILE_SET_ERRHANDLER returns an error with MPI_FILE_NULL<br>
<strong>From:</strong> Secretan Yves (<em>Yves.Secretan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-07 16:52:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12977.php">Jeff Squyres: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="12975.php">Fernando Lemos: "Re: [OMPI users] communicate C++ STL strucutures ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13052.php">Jeff Squyres: "Re: [OMPI users] MPI_FILE_SET_ERRHANDLER returns an error withMPI_FILE_NULL"</a>
<li><strong>Reply:</strong> <a href="13052.php">Jeff Squyres: "Re: [OMPI users] MPI_FILE_SET_ERRHANDLER returns an error withMPI_FILE_NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>According to my understanding of the documentation, it should be possible to set the default error handler for files with MPI_FILE_SET_ERRHANDLER. However, the following small Fortran77 program fails, MPI_FILE_SET_ERRHANDLER returns an error.
<br>
<p>=================================
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PROGRAM H2D2_MAIN
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INCLUDE 'mpif.h'
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EXTERNAL HNDLR
<br>
C------------------------------------------------------------------------
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_INIT(I_ERR)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I_HDLR = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_FILE_CREATE_ERRHANDLER(HNDLR1, I_HDLR, I_ERR)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WRITE(*,*) 'MPI_FILE_CREATE_ERRHANDLER: ', I_ERR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_FILE_SET_ERRHANDLER   (MPI_FILE_NULL, I_HDLR, I_ERR)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WRITE(*,*) 'MPI_FILE_SET_ERRHANDLER: ', I_ERR
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;END
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SUBROUTINE HNDLR(I_CNTX, I_ERR)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WRITE(*,*) 'In HNDLR: MPI Error detected'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RETURN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;END
<br>
============================
<br>
<p><p>Did I miss something obvious?
<br>
Regards
<br>
<p>Yves Secretan
<br>
Professeur
<br>
Yves.Secretan_at_[hidden]&lt;mailto:Yves_Secretan_at_[hidden]&gt;
<br>
<p>[cid:image001.gif_at_01CAEDF4.2405BF40] Avant d'imprimer, pensez &#224; l'environnement
<br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12976/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-12976/image001.gif" alt="image001.gif
">
<!-- attachment="image001.gif" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12977.php">Jeff Squyres: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="12975.php">Fernando Lemos: "Re: [OMPI users] communicate C++ STL strucutures ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13052.php">Jeff Squyres: "Re: [OMPI users] MPI_FILE_SET_ERRHANDLER returns an error withMPI_FILE_NULL"</a>
<li><strong>Reply:</strong> <a href="13052.php">Jeff Squyres: "Re: [OMPI users] MPI_FILE_SET_ERRHANDLER returns an error withMPI_FILE_NULL"</a>
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
