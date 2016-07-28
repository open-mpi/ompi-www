<?
$subject_val = "[OMPI users] build failure with NAG Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 26 10:26:45 2016" -->
<!-- isoreceived="20160126152645" -->
<!-- sent="Tue, 26 Jan 2016 15:26:43 +0000" -->
<!-- isosent="20160126152643" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="[OMPI users] build failure with NAG Fortran" -->
<!-- id="87zivscqfg.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> [OMPI users] build failure with NAG Fortran<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-26 10:26:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28386.php">Dave Love: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
<li><strong>Previous message:</strong> <a href="28384.php">Dave Love: "[OMPI users] many return codes not checked in the source"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28387.php">Nick Papior: "Re: [OMPI users] build failure with NAG Fortran"</a>
<li><strong>Reply:</strong> <a href="28387.php">Nick Papior: "Re: [OMPI users] build failure with NAG Fortran"</a>
<li><strong>Reply:</strong> <a href="28389.php">Gilles Gouaillardet: "Re: [OMPI users] build failure with NAG Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Building 1.10.2 with the NAG Fortran compiler version 6.0 fails with
<br>
<p>&nbsp;&nbsp;libtool: compile:  nagfor -I../../../../ompi/include -I../../../../ompi/include -I. -I. -I. -I../../../../ompi/mpi/fortran/use-mpi-tkr -c mpi_comm_spawn_multiple_f90.f90  -PIC -o .libs/mpi_comm_spawn_multiple_f90.o
<br>
&nbsp;&nbsp;NAG Fortran Compiler Release 6.0(Hibiya) Build 1028
<br>
&nbsp;&nbsp;Error: mpi_comm_spawn_multiple_f90.f90: Argument 3 to MPI_COMM_SPAWN_MULTIPLE has data type DOUBLE PRECISION in reference from MPI_COMM_SPAWN_MULTIPLEN and CHARACTER in reference from MPI_COMM_SPAWN_MULTIPLEA
<br>
&nbsp;&nbsp;[NAG Fortran Compiler error termination, 1 error]
<br>
&nbsp;&nbsp;make[2]: *** [mpi_comm_spawn_multiple_f90.lo] Error 1
<br>
&nbsp;&nbsp;make[2]: Leaving directory `/tmp/openmpi-1.10.2/ompi/mpi/fortran/use-mpi-tkr'
<br>
<p>after configuring with the defaults (on RHEL6, although I doubt that
<br>
matters).  I don't have time to debug it at the moment.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28386.php">Dave Love: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
<li><strong>Previous message:</strong> <a href="28384.php">Dave Love: "[OMPI users] many return codes not checked in the source"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28387.php">Nick Papior: "Re: [OMPI users] build failure with NAG Fortran"</a>
<li><strong>Reply:</strong> <a href="28387.php">Nick Papior: "Re: [OMPI users] build failure with NAG Fortran"</a>
<li><strong>Reply:</strong> <a href="28389.php">Gilles Gouaillardet: "Re: [OMPI users] build failure with NAG Fortran"</a>
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
