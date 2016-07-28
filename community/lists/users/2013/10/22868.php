<?
$subject_val = "[OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 30 16:35:18 2013" -->
<!-- isoreceived="20131030203518" -->
<!-- sent="Wed, 30 Oct 2013 15:35:16 -0500" -->
<!-- isosent="20131030203516" -->
<!-- name="Jim Parker" -->
<!-- email="jimparker96313_at_[hidden]" -->
<!-- subject="[OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing" -->
<!-- id="CAEGKUyzW7RatHK4YhZA+ry7Fu0H1D7txbxuD-96wEKGTEiYzSQ_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing<br>
<strong>From:</strong> Jim Parker (<em>jimparker96313_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-30 16:35:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22869.php">Ralph Castain: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Previous message:</strong> <a href="22867.php">Robo Beans: "Re: [OMPI users] ofed installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22869.php">Ralph Castain: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Reply:</strong> <a href="22869.php">Ralph Castain: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Reply:</strong> <a href="22876.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
&nbsp;&nbsp;I have recently built a cluster that uses the 64-bit indexing feature of
<br>
OpenMPI following the directions at
<br>
<a href="http://wiki.chem.vu.nl/dirac/index.php/How_to_build_MPI_libraries_for_64-bit_integers">http://wiki.chem.vu.nl/dirac/index.php/How_to_build_MPI_libraries_for_64-bit_integers</a>
<br>
<p>My question is what are the new prototypes for the MPI calls ?
<br>
specifically
<br>
MPI_RECV
<br>
MPI_Allgathterv
<br>
<p>I'm curious because some off my local variables get killed (set to null)
<br>
upon my first call to MPI_RECV.  Typically, this is due (in Fortran) to
<br>
someone not setting the 'status' variable to an appropriate array size.
<br>
<p>However, my declaration for status is
<br>
integer (kind=mpi_int_kind) :: status(MPI_STATUS_SIZE)
<br>
<p>A typical call to MPI_Recv is
<br>
call MPI_RECV(num_array, length, MPI_INTEGER, 0,0,MPI_COMM_WORLD, status,
<br>
mpierr)
<br>
<p>where the following definitions are used,
<br>
mpi_int_kind=8 (for gcc/gfortran compiler)
<br>
<p>integer,parameter :: length = &lt;some-value&gt;
<br>
integer :: num_array(length)
<br>
integer :: mpierr
<br>
<p>My review of mpif.h and mpi.h seem to indicate that the functions are
<br>
defined as C int types and therefore , I assume, the coercion during the
<br>
compile makes the library support 64-bit indexing.  ie. int -&gt; long int
<br>
<p>The documentation on MPI_Recv just mentions the prototype for ints (32-bit)
<br>
, I can't find anything for 64-bit
<br>
<a href="http://www.open-mpi.org/doc/v1.6/">http://www.open-mpi.org/doc/v1.6/</a>
<br>
<p>Any help would be appreciated.
<br>
The output from ompi_info --all is attached.
<br>
<p>Cheers,
<br>
--Jim Parker
<br>
<p>BTW, the code works fine when linked against a 32-bit MPI library.
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22868/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22868/openmpi1.6.5-info.txt">openmpi1.6.5-info.txt</a>
</ul>
<!-- attachment="openmpi1.6.5-info.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22869.php">Ralph Castain: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Previous message:</strong> <a href="22867.php">Robo Beans: "Re: [OMPI users] ofed installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22869.php">Ralph Castain: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Reply:</strong> <a href="22869.php">Ralph Castain: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Reply:</strong> <a href="22876.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
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
