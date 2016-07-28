<?
$subject_val = "[OMPI users] problem with fortran, MPI_REDUCE and MPI_IN_PLACE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 23 13:20:47 2011" -->
<!-- isoreceived="20111123182047" -->
<!-- sent="Wed, 23 Nov 2011 19:20:42 +0100" -->
<!-- isosent="20111123182042" -->
<!-- name="Arjen van Elteren" -->
<!-- email="vanelteren_at_[hidden]" -->
<!-- subject="[OMPI users] problem with fortran, MPI_REDUCE and MPI_IN_PLACE" -->
<!-- id="5CD18BC3-E5FB-4732-84A8-C51E89422E95_at_strw.leidenuniv.nl" -->
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
<strong>Subject:</strong> [OMPI users] problem with fortran, MPI_REDUCE and MPI_IN_PLACE<br>
<strong>From:</strong> Arjen van Elteren (<em>vanelteren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-23 13:20:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17816.php">Paul Kapinos: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Previous message:</strong> <a href="17814.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17852.php">Jeff Squyres: "Re: [OMPI users] problem with fortran, MPI_REDUCE and MPI_IN_PLACE"</a>
<li><strong>Reply:</strong> <a href="17852.php">Jeff Squyres: "Re: [OMPI users] problem with fortran, MPI_REDUCE and MPI_IN_PLACE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
<p>I'm running a complex program with a number of MPI_REDUCE calls, every call uses MPI_IN_PLACE as the first parameter (the send buffer).
<br>
<p>I'm currently testing this program on Mac 10.6 with macports installed.
<br>
<p>Unfortunately all MPI_REDUCE calls with MPI_IN_PLACE, seem to fail. 
<br>
<p>I've pinpointed the problem to the MPI_IN_PLACE parameter location, it seems to matter if it is the first or the second parameter to the MPI_REDUCE call.
<br>
<p>This is specific for fortran, in C the sequence does not matter!
<br>
<p>A simple program to test this:
<br>
<p>PROGRAM MAIN
<br>
&nbsp;&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;&nbsp;include 'mpif.h'
<br>
&nbsp;&nbsp;&nbsp;integer :: x(10)
<br>
&nbsp;&nbsp;&nbsp;integer :: provided,ioerror
<br>
&nbsp;&nbsp;&nbsp;call MPI_INIT(ioerror)
<br>
&nbsp;&nbsp;&nbsp;x = 1
<br>
<p>&nbsp;&nbsp;&nbsp;print *, x
<br>
&nbsp;&nbsp;&nbsp;call MPI_REDUCE(x, MPI_IN_PLACE,10, MPI_INTEGER, MPI_SUM, 0,MPI_COMM_WORLD,  ioerror)
<br>
&nbsp;&nbsp;&nbsp;print *, x
<br>
&nbsp;&nbsp;&nbsp;call MPI_REDUCE(MPI_IN_PLACE, x,10, MPI_INTEGER, MPI_SUM, 0,MPI_COMM_WORLD,  ioerror)
<br>
&nbsp;&nbsp;&nbsp;print *, x
<br>
<p>&nbsp;&nbsp;&nbsp;call MPI_FINALIZE(ioerror)
<br>
END PROGRAM
<br>
<p>I run this on one process (mpiexec ./a.out)
<br>
<p>I'm running with openmpi version 1.5.4 (macports)
<br>
<p>The openmpi is compiled with gfortran 4.4.6
<br>
<p>Is this a bug in openmpi or is my understanding of MPI_REDUCE wrong?
<br>
<p>Best regards,
<br>
<p>Arjen
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17816.php">Paul Kapinos: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Previous message:</strong> <a href="17814.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17852.php">Jeff Squyres: "Re: [OMPI users] problem with fortran, MPI_REDUCE and MPI_IN_PLACE"</a>
<li><strong>Reply:</strong> <a href="17852.php">Jeff Squyres: "Re: [OMPI users] problem with fortran, MPI_REDUCE and MPI_IN_PLACE"</a>
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
