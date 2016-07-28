<?
$subject_val = "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 22 10:28:40 2013" -->
<!-- isoreceived="20131022142840" -->
<!-- sent="Tue, 22 Oct 2013 14:28:38 +0000" -->
<!-- isosent="20131022142838" -->
<!-- name="Gerlach, Charles A." -->
<!-- email="charles.gerlach_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV" -->
<!-- id="0A970F4038D541469E279AD555D8781630C1B249_at_mbx256-1.adm.swri.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20131009173710.GB30920_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV<br>
<strong>From:</strong> Gerlach, Charles A. (<em>charles.gerlach_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-22 10:28:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22816.php">Nathan Hjelm: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<li><strong>Previous message:</strong> <a href="22814.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<li><strong>In reply to:</strong> <a href="22780.php">Nathan Hjelm: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22816.php">Nathan Hjelm: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<li><strong>Reply:</strong> <a href="22816.php">Nathan Hjelm: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My reproducer is below (SCATTERV only). It needs to be compiled with 64-bit default reals, and I'm running on four cores of a single linux86-64 box running SLED 12.3 (except where noted). 

Using Open-MPI with different compilers:

With g95: The non-root procs print the correct values, but the root process seg faults somewhere inside the SCATTERV call.
With portland: I get: -1614907703: __hpf_esend: not implemented
                     (All procs print out the correct values.)
With Intel (on a Mac Pro): Complains about a null communicator in MPI_FINALIZE and crashes. All procs print out the correct values.

With all three of these compilers, if I comment out the entire IF (MYPN.EQ.0) code so that all procs pass RARR1 into both the send and recv buffers, I get no errors.

With gfortran: This works either way (with IN_PLACE or without).

Other MPI implementations:

With MPICH2 (any compiler) and Intel Visual Fortran on Windows, the IN_PLACE code works. 
They specifically prohibit passing RARR1 into both the send and recv buffers on the root proc. 

Reproducer:

PROGRAM MAIN

  IMPLICIT NONE

  REAL, DIMENSION(1200)  :: RARR1
  INTEGER, DIMENSION(4) :: SEND_NUM, SEND_OFF
  INTEGER :: RECV_NUM, MYPN, NPES, IERR

  INTEGER :: I, J

  INCLUDE 'mpif.h'

  SEND_NUM = (/ 300, 300, 300, 300 /)
  SEND_OFF = (/ 0, 300, 600, 900 /)
  RECV_NUM = 300

  CALL MPI_INIT(IERR)

  CALL MPI_COMM_SIZE(MPI_COMM_WORLD, NPES, IERR)
  CALL MPI_COMM_RANK(MPI_COMM_WORLD, MYPN, IERR)

  IF (MYPN.EQ.0) THEN
     DO I = 1,1200
        RARR1(I) = 0.001*I
     ENDDO
  ELSE
     RARR1 = 0.0
  ENDIF

  IF (MYPN.EQ.0) THEN
     CALL MPI_SCATTERV(RARR1,SEND_NUM,SEND_OFF,MPI_DOUBLE_PRECISION, &amp;
          MPI_IN_PLACE,RECV_NUM,MPI_DOUBLE_PRECISION,0,MPI_COMM_WORLD,IERR)
  ELSE
     CALL MPI_SCATTERV(RARR1,SEND_NUM,SEND_OFF,MPI_DOUBLE_PRECISION, &amp;
          RARR1,RECV_NUM,MPI_DOUBLE_PRECISION,0,MPI_COMM_WORLD,IERR)
  ENDIF

  OPEN(71+MYPN,FORM='FORMATTED',POSITION='APPEND')
  WRITE(71+MYPN,'(3E15.7)') RARR1(1:300)
  CLOSE(71+MYPN)

  CALL MPI_FINALIZE(IERR)

END PROGRAM MAIN


________________________________________
From: users [users-bounces_at_[hidden]] on behalf of Nathan Hjelm [hjelmn_at_[hidden]]
Sent: Wednesday, October 09, 2013 12:37 PM
To: Open MPI Users
Subject: Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV

These functions are tested nightly and there has been no indication any of these
functions fail with MPI_IN_PLACE. Can you provide a reproducer?

-Nathan
HPC-3, LANL

On Tue, Oct 08, 2013 at 07:40:50PM +0000, Gerlach, Charles A. wrote:
&gt;    I have an MPI code that was developed using MPICH1 and OpenMPI before the
&gt;    MPI2 standards became commonplace (before MPI_IN_PLACE was an option).
&gt;
&gt;
&gt;
&gt;    So, my code has many examples of GATHERV, AGATHERV and SCATTERV, where I
&gt;    pass the same array in as the SEND_BUF and the RECV_BUF, and this has
&gt;    worked fine for many years.
&gt;
&gt;
&gt;
&gt;    Intel MPI and MPICH2 explicitly disallow this behavior according to the
&gt;    MPI2 standard. So, I have gone through and used MPI_IN_PLACE for all the
&gt;    GATHERV/SCATTERVs that used to pass the same array twice. This code now
&gt;    works with MPICH2 and Intel_MPI, but fails with OpenMPI-1.6.5 on multiple
&gt;    platforms and compilers.
&gt;
&gt;
&gt;
&gt;    PLATFORM                  COMPILER            SUCCESS? (For at least one
&gt;    simple example)
&gt;
&gt;    ------------------------------------------------------------
&gt;
&gt;    SLED 12.3 (x86-64) - Portland group  - fails
&gt;
&gt;    SLED 12.3 (x86-64) - g95                         - fails
&gt;
&gt;    SLED 12.3 (x86-64) - gfortran               - works
&gt;
&gt;
&gt;
&gt;    OS X 10.8                 -- intel                        -fails
&gt;
&gt;
&gt;
&gt;
&gt;
&gt;    In every case where OpenMPI fails with the MPI_IN_PLACE code, I can go
&gt;    back to the original code that passes the same array twice instead of
&gt;    using MPI_IN_PLACE, and it is fine.
&gt;
&gt;
&gt;
&gt;    I have made a test case doing an individual GATHERV with MPI_IN_PLACE, and
&gt;    it works with OpenMPI.  So it looks like there is some interaction with my
&gt;    code that is causing the problem. I have no idea how to go about trying to
&gt;    debug it.
&gt;
&gt;
&gt;
&gt;
&gt;
&gt;    In summary:
&gt;
&gt;
&gt;
&gt;    OpenMPI-1.6.5 crashes my code when I use GATHERV, AGATHERV, and SCATTERV
&gt;    with MPI_IN_PLACE.
&gt;
&gt;    Intel MPI and MPICH2 work with my code when I use GATHERV, AGATHERV, and
&gt;    SCATTERV with MPI_IN_PLACE.
&gt;
&gt;
&gt;
&gt;    OpenMPI-1.6.5 works with my code when I pass the same array to SEND_BUF
&gt;    and RECV_BUF instead of using MPI_IN_PLACE for those same GATHERV,
&gt;    AGATHERV, and SCATTERVs.
&gt;
&gt;
&gt;
&gt;
&gt;
&gt;    -Charles

&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22816.php">Nathan Hjelm: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<li><strong>Previous message:</strong> <a href="22814.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<li><strong>In reply to:</strong> <a href="22780.php">Nathan Hjelm: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22816.php">Nathan Hjelm: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<li><strong>Reply:</strong> <a href="22816.php">Nathan Hjelm: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
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
