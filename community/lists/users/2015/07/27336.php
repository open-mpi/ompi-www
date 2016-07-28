<?
$subject_val = "[OMPI users] MPI_WAITANY compile error with mpi.mod vs. mpif.h on OS X";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 27 15:15:16 2015" -->
<!-- isoreceived="20150727191516" -->
<!-- sent="Mon, 27 Jul 2015 14:15:11 -0500" -->
<!-- isosent="20150727191511" -->
<!-- name="Ted Mansell" -->
<!-- email="ted.mansell_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_WAITANY compile error with mpi.mod vs. mpif.h on OS X" -->
<!-- id="02EAB805-56EB-4319-A6EB-401490BFA856_at_noaa.gov" -->
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
<strong>Subject:</strong> [OMPI users] MPI_WAITANY compile error with mpi.mod vs. mpif.h on OS X<br>
<strong>From:</strong> Ted Mansell (<em>ted.mansell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-27 15:15:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27337.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_WAITANY compile error with mpi.mod vs. mpif.h on	OS X"</a>
<li><strong>Previous message:</strong> <a href="27335.php">Dhirendra Kumar: "[OMPI users] Help: configure flags and dependencies installation for REGCM-4.4.5.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27337.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_WAITANY compile error with mpi.mod vs. mpif.h on	OS X"</a>
<li><strong>Reply:</strong> <a href="27337.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_WAITANY compile error with mpi.mod vs. mpif.h on	OS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm getting a compile-time error on MPI_WAITALL and MPI_WAITANY when using &quot;use mpi&quot;:
<br>
<p>parcel.f90(555): error #6285: There is no matching specific subroutine for this generic subroutine call.   [MPI_WAITANY]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_waitany(numprocs-1,reqt(1),index,MPI_STATUS_IGNORE,ierr)
<br>
---------------^
<br>
<p>comm.f90(1516): error #6285: There is no matching specific subroutine for this generic subroutine call.   [MPI_WAITALL]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_WAITALL(nr,reqs(3),MPI_STATUSES_IGNORE,ierr)
<br>
-----------^
<br>
comm.f90(1737): error #6285: There is no matching specific subroutine for this generic subroutine call.   [MPI_WAITANY]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_WAITANY(nr,reqs(1),index,MPI_STATUS_IGNORE,ierr)
<br>
-----------^
<br>
<p>but it compiles fine with the alternate
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include 'mpif.h'
<br>
<p>This is OS X 10.9.5 with Intel ifort 13, Openmpi 1.8.4. I did try substituting a generic integer variable as the fourth argument, but it made no difference.
<br>
<p>The compiler appears to be finding the module, and seems to find everything else needed for this particular code (e.g., MPI_IRECV, MPI_ISEND, contants, etc.) The mpi.mod is built in the &quot;use-mpi-ignore-tkr&quot; directory, if that matters.
<br>
<p>Is there any known issue here? I have not tried with gfortran yet. This is on a stand-alone Mac Pro tower, so nothing too fancy. As far as I can tell, it is not using some other version of mpi.mod.
<br>
<p>Thanks....
<br>
-- Ted
<br>
<p>__________________________________________________________
<br>
| Ted Mansell &lt;ted.mansell_at_[hidden]&gt;
<br>
| National Severe Storms Laboratory
<br>
|--------------------------------------------------------------
<br>
| &quot;The contents of this message are mine personally and
<br>
| do not reflect any position of the U.S. Government or NOAA.&quot;
<br>
|--------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27337.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_WAITANY compile error with mpi.mod vs. mpif.h on	OS X"</a>
<li><strong>Previous message:</strong> <a href="27335.php">Dhirendra Kumar: "[OMPI users] Help: configure flags and dependencies installation for REGCM-4.4.5.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27337.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_WAITANY compile error with mpi.mod vs. mpif.h on	OS X"</a>
<li><strong>Reply:</strong> <a href="27337.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_WAITANY compile error with mpi.mod vs. mpif.h on	OS X"</a>
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
