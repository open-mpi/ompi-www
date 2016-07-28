<?
$subject_val = "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 22 17:17:37 2013" -->
<!-- isoreceived="20131022211737" -->
<!-- sent="Tue, 22 Oct 2013 21:17:35 +0000" -->
<!-- isosent="20131022211735" -->
<!-- name="Gerlach, Charles A." -->
<!-- email="charles.gerlach_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV" -->
<!-- id="0A970F4038D541469E279AD555D8781630C1C2F9_at_mbx256-1.adm.swri.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20131022194931.GA3350_at_pn1246003.lanl.gov" -->
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
<strong>Date:</strong> 2013-10-22 17:17:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22818.php">Dave Love: "Re: [OMPI users] debugging performance regressions between versions"</a>
<li><strong>Previous message:</strong> <a href="22816.php">Nathan Hjelm: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<li><strong>In reply to:</strong> <a href="22816.php">Nathan Hjelm: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The IN_PLACE alterations to my code encompassed GATHERV as well, but as I continued to debug, it appeared more and more as though SCATTERV was the only problem case. 
<br>
So, I do not forsee any GATHER reproducers, but I'll certainly send 'em if I find 'em. 
<br>
<p>I followed the link to the bug-diff, and I can confirm that my scatter_f.c and scatterv_f.c are wrong in my 1.6.5. Haven't re-compiled yet to make sure everything else goes.
<br>
<p>-Charles
<br>
<p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Nathan Hjelm
<br>
Sent: Tuesday, October 22, 2013 2:50 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV
<br>
<p>Ok, I think we have this resolved in trunk and the fix will go into 1.7.4. The check for MPI_IN_PLACE was wrong in the mpif-h bindings. The fix was tested with your reproducer. Both MPI_SCATTER and MPI_SCATTERV had this bug. The bug does not exist in 1.6.x though so I don't know why it was failing there.
<br>
<p>I don't see a problem with MPI_GATHER or MPI_GATHERV though. Can you send a reproducer for those?
<br>
<p>-Nathan Hjelm
<br>
HPC-3, LANL
<br>
<p>On Tue, Oct 22, 2013 at 02:28:38PM +0000, Gerlach, Charles A. wrote:
<br>
<span class="quotelev1">&gt; My reproducer is below (SCATTERV only). It needs to be compiled with 64-bit default reals, and I'm running on four cores of a single linux86-64 box running SLED 12.3 (except where noted). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using Open-MPI with different compilers:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With g95: The non-root procs print the correct values, but the root process seg faults somewhere inside the SCATTERV call.
</span><br>
<span class="quotelev1">&gt; With portland: I get: -1614907703: __hpf_esend: not implemented
</span><br>
<span class="quotelev1">&gt;                      (All procs print out the correct values.) With 
</span><br>
<span class="quotelev1">&gt; Intel (on a Mac Pro): Complains about a null communicator in MPI_FINALIZE and crashes. All procs print out the correct values.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With all three of these compilers, if I comment out the entire IF (MYPN.EQ.0) code so that all procs pass RARR1 into both the send and recv buffers, I get no errors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With gfortran: This works either way (with IN_PLACE or without).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Other MPI implementations:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With MPICH2 (any compiler) and Intel Visual Fortran on Windows, the IN_PLACE code works. 
</span><br>
<span class="quotelev1">&gt; They specifically prohibit passing RARR1 into both the send and recv buffers on the root proc. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Reproducer:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PROGRAM MAIN
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   IMPLICIT NONE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   REAL, DIMENSION(1200)  :: RARR1
</span><br>
<span class="quotelev1">&gt;   INTEGER, DIMENSION(4) :: SEND_NUM, SEND_OFF
</span><br>
<span class="quotelev1">&gt;   INTEGER :: RECV_NUM, MYPN, NPES, IERR
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   INTEGER :: I, J
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   INCLUDE 'mpif.h'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   SEND_NUM = (/ 300, 300, 300, 300 /)
</span><br>
<span class="quotelev1">&gt;   SEND_OFF = (/ 0, 300, 600, 900 /)
</span><br>
<span class="quotelev1">&gt;   RECV_NUM = 300
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   CALL MPI_INIT(IERR)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   CALL MPI_COMM_SIZE(MPI_COMM_WORLD, NPES, IERR)
</span><br>
<span class="quotelev1">&gt;   CALL MPI_COMM_RANK(MPI_COMM_WORLD, MYPN, IERR)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   IF (MYPN.EQ.0) THEN
</span><br>
<span class="quotelev1">&gt;      DO I = 1,1200
</span><br>
<span class="quotelev1">&gt;         RARR1(I) = 0.001*I
</span><br>
<span class="quotelev1">&gt;      ENDDO
</span><br>
<span class="quotelev1">&gt;   ELSE
</span><br>
<span class="quotelev1">&gt;      RARR1 = 0.0
</span><br>
<span class="quotelev1">&gt;   ENDIF
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   IF (MYPN.EQ.0) THEN
</span><br>
<span class="quotelev1">&gt;      CALL MPI_SCATTERV(RARR1,SEND_NUM,SEND_OFF,MPI_DOUBLE_PRECISION, &amp;
</span><br>
<span class="quotelev1">&gt;           MPI_IN_PLACE,RECV_NUM,MPI_DOUBLE_PRECISION,0,MPI_COMM_WORLD,IERR)
</span><br>
<span class="quotelev1">&gt;   ELSE
</span><br>
<span class="quotelev1">&gt;      CALL MPI_SCATTERV(RARR1,SEND_NUM,SEND_OFF,MPI_DOUBLE_PRECISION, &amp;
</span><br>
<span class="quotelev1">&gt;           RARR1,RECV_NUM,MPI_DOUBLE_PRECISION,0,MPI_COMM_WORLD,IERR)
</span><br>
<span class="quotelev1">&gt;   ENDIF
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   OPEN(71+MYPN,FORM='FORMATTED',POSITION='APPEND')
</span><br>
<span class="quotelev1">&gt;   WRITE(71+MYPN,'(3E15.7)') RARR1(1:300)
</span><br>
<span class="quotelev1">&gt;   CLOSE(71+MYPN)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   CALL MPI_FINALIZE(IERR)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; END PROGRAM MAIN
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users [users-bounces_at_[hidden]] on behalf of Nathan Hjelm 
</span><br>
<span class="quotelev1">&gt; [hjelmn_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, October 09, 2013 12:37 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and 
</span><br>
<span class="quotelev1">&gt; SCATERV
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These functions are tested nightly and there has been no indication 
</span><br>
<span class="quotelev1">&gt; any of these functions fail with MPI_IN_PLACE. Can you provide a reproducer?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; HPC-3, LANL
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Oct 08, 2013 at 07:40:50PM +0000, Gerlach, Charles A. wrote:
</span><br>
<span class="quotelev2">&gt; &gt;    I have an MPI code that was developed using MPICH1 and OpenMPI before the
</span><br>
<span class="quotelev2">&gt; &gt;    MPI2 standards became commonplace (before MPI_IN_PLACE was an option).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    So, my code has many examples of GATHERV, AGATHERV and SCATTERV, where I
</span><br>
<span class="quotelev2">&gt; &gt;    pass the same array in as the SEND_BUF and the RECV_BUF, and this has
</span><br>
<span class="quotelev2">&gt; &gt;    worked fine for many years.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Intel MPI and MPICH2 explicitly disallow this behavior according to the
</span><br>
<span class="quotelev2">&gt; &gt;    MPI2 standard. So, I have gone through and used MPI_IN_PLACE for all the
</span><br>
<span class="quotelev2">&gt; &gt;    GATHERV/SCATTERVs that used to pass the same array twice. This code now
</span><br>
<span class="quotelev2">&gt; &gt;    works with MPICH2 and Intel_MPI, but fails with OpenMPI-1.6.5 on multiple
</span><br>
<span class="quotelev2">&gt; &gt;    platforms and compilers.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    PLATFORM                  COMPILER            SUCCESS? (For at least one
</span><br>
<span class="quotelev2">&gt; &gt;    simple example)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    ------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    SLED 12.3 (x86-64) - Portland group  - fails
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    SLED 12.3 (x86-64) - g95                         - fails
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    SLED 12.3 (x86-64) - gfortran               - works
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    OS X 10.8                 -- intel                        -fails
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    In every case where OpenMPI fails with the MPI_IN_PLACE code, I can go
</span><br>
<span class="quotelev2">&gt; &gt;    back to the original code that passes the same array twice instead of
</span><br>
<span class="quotelev2">&gt; &gt;    using MPI_IN_PLACE, and it is fine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    I have made a test case doing an individual GATHERV with MPI_IN_PLACE, and
</span><br>
<span class="quotelev2">&gt; &gt;    it works with OpenMPI.  So it looks like there is some interaction with my
</span><br>
<span class="quotelev2">&gt; &gt;    code that is causing the problem. I have no idea how to go about trying to
</span><br>
<span class="quotelev2">&gt; &gt;    debug it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    In summary:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    OpenMPI-1.6.5 crashes my code when I use GATHERV, AGATHERV, and SCATTERV
</span><br>
<span class="quotelev2">&gt; &gt;    with MPI_IN_PLACE.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Intel MPI and MPICH2 work with my code when I use GATHERV, AGATHERV, and
</span><br>
<span class="quotelev2">&gt; &gt;    SCATTERV with MPI_IN_PLACE.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    OpenMPI-1.6.5 works with my code when I pass the same array to SEND_BUF
</span><br>
<span class="quotelev2">&gt; &gt;    and RECV_BUF instead of using MPI_IN_PLACE for those same GATHERV,
</span><br>
<span class="quotelev2">&gt; &gt;    AGATHERV, and SCATTERVs.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    -Charles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22818.php">Dave Love: "Re: [OMPI users] debugging performance regressions between versions"</a>
<li><strong>Previous message:</strong> <a href="22816.php">Nathan Hjelm: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<li><strong>In reply to:</strong> <a href="22816.php">Nathan Hjelm: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<!-- nextthread="start" -->
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
