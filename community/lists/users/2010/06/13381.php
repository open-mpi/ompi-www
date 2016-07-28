<?
$subject_val = "[OMPI users] Fortran - MPI_WORLD_COMM";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 22 17:55:37 2010" -->
<!-- isoreceived="20100622215537" -->
<!-- sent="Tue, 22 Jun 2010 17:55:32 -0400" -->
<!-- isosent="20100622215532" -->
<!-- name="Mihaly Mezei" -->
<!-- email="Mihaly.Mezei_at_[hidden]" -->
<!-- subject="[OMPI users] Fortran - MPI_WORLD_COMM" -->
<!-- id="f64c10a3371e.4c20f914_at_mssm.edu" -->
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
<strong>Subject:</strong> [OMPI users] Fortran - MPI_WORLD_COMM<br>
<strong>From:</strong> Mihaly Mezei (<em>Mihaly.Mezei_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-22 17:55:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13382.php">Mihaly Mezei: "[OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>Previous message:</strong> <a href="13380.php">Rahul Nabar: "[OMPI users] subnet specification for MPI when multiple networks are present"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13383.php">Jeff Squyres: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
<li><strong>Reply:</strong> <a href="13383.php">Jeff Squyres: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
<li><strong>Maybe reply:</strong> <a href="13386.php">chan_at_[hidden]: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings,
<br>
<p>I used mpich earlier, where I could get the value of MPI_WORLD_COMM in the main program and pass it to subroutines via a common block (as the MPI_WORLD_COMM is assumed to be an integer and I even was able to confirm that it is declared to be an integer in mpif-common.h). However, openmpi does not allow putting MPI_WORLD_COMM into a common block:
<br>
<p>mpi0.f(2): error #6414: This PARAMETER constant name is invalid in this context.   [MPI_COMM_WORLD]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /MPI_DM/ MPI_COMM_WORLD,NUMNOD,MYRANK
<br>
----------------------^
<br>
mpi0.f(21): error #6412: A dummy argument name is invalid in this context.   [MPI_COMM_WORLD]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common /MPI_DM/ MPI_COMM_WORLD,NUMNOD,MYRANK
<br>
----------------------^
<br>
<p>If I try to pass MPI_WORLD_COMM to a subrotine as one of the subroutine argument, it aborts at run time whe it comes to using it in an MPI_Bcast call
<br>
<p>*** An error occurred in MPI_Bcast
<br>
*** on communicator MPI_COMM_WORLD
<br>
*** MPI_ERR_TYPE: invalid datatype
<br>
<p>What is the correct way to pass the communiator to a subroutine in Fortra90/openmpi?
<br>
<p>Thanks,
<br>
regards,
<br>
<p>Mihaly Mezei
<br>
<p>Department of Structural and Chemical Biology, Mount Sinai School of Medicine
<br>
Voice:  (212) 659-5475   Fax: (212) 849-2456
<br>
WWW (MSSM home): <a href="http://www.mountsinai.org/Find%20A%20Faculty/profile.do?id=0000072500001497192632">http://www.mountsinai.org/Find%20A%20Faculty/profile.do?id=0000072500001497192632</a>
<br>
WWW (Lab home - software, publications): <a href="http://inka.mssm.edu/~mezei">http://inka.mssm.edu/~mezei</a>
<br>
WWW (Department): <a href="http://atlas.physbio.mssm.edu">http://atlas.physbio.mssm.edu</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13382.php">Mihaly Mezei: "[OMPI users] Fortran - MPI_WORLD_COMM - correction"</a>
<li><strong>Previous message:</strong> <a href="13380.php">Rahul Nabar: "[OMPI users] subnet specification for MPI when multiple networks are present"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13383.php">Jeff Squyres: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
<li><strong>Reply:</strong> <a href="13383.php">Jeff Squyres: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
<li><strong>Maybe reply:</strong> <a href="13386.php">chan_at_[hidden]: "Re: [OMPI users] Fortran - MPI_WORLD_COMM"</a>
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
