<?
$subject_val = "Re: [OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  7 13:47:16 2008" -->
<!-- isoreceived="20080207184716" -->
<!-- sent="Thu, 07 Feb 2008 13:47:15 -0500" -->
<!-- isosent="20080207184715" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bug in MPI_ACCUMULATE for window offsets &amp;gt; 2**31 - 1 bytes? openmpi v1.2.5" -->
<!-- id="47AB5233.8090902_at_open-mpi.org" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="47AB350F.5060809_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-07 13:47:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5009.php">Jeff Squyres: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="5007.php">Tim Mattox: "Re: [OMPI users] Bad behavior in Allgatherv when a count is 0"</a>
<li><strong>In reply to:</strong> <a href="5005.php">Tim Prins: "Re: [OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5017.php">Stefan Knecht: "Re: [OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The fix I previously sent to the list has been committed in r17400.
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<p>Tim Prins wrote:
<br>
<span class="quotelev1">&gt; Hi Stefan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was able to verify the problem. Turns out this is a problem with other 
</span><br>
<span class="quotelev1">&gt; onesided operations as well. Attached is a simple test case I made in c 
</span><br>
<span class="quotelev1">&gt; using MPI_Put that also fails.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is that the target count and displacements are both sent as 
</span><br>
<span class="quotelev1">&gt; signed 32 bit integers. Then, the receiver multiplies them together and 
</span><br>
<span class="quotelev1">&gt; adds them to the window base. However, this multiplication is done using 
</span><br>
<span class="quotelev1">&gt; the signed 32 bit integers, which overflows. This is then added to the 
</span><br>
<span class="quotelev1">&gt; 64 bit pointer. This, of course, results in a bad address.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have attached a patch against a recent development version that fixes 
</span><br>
<span class="quotelev1">&gt; this for me. I am also copying Brian Barrett, who did all the work on 
</span><br>
<span class="quotelev1">&gt; the onesided code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian: if possible, please take a look at the attached patch and test case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the report!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim Prins
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Stefan Knecht wrote:
</span><br>
<span class="quotelev2">&gt;&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev2">&gt;&gt; Hash: SHA1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I encounter a problem with the routine MPI_ACCUMULATE trying to sum up
</span><br>
<span class="quotelev2">&gt;&gt; MPI_REAL8's on a large memory window with a large offset.
</span><br>
<span class="quotelev2">&gt;&gt; My program running (on a single processor, x86_64 architecture) 
</span><br>
<span class="quotelev2">&gt;&gt; crashes with
</span><br>
<span class="quotelev2">&gt;&gt; an error message like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [node14:16236] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [node14:16236] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [node14:16236] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [node14:16236] Failing at address: 0x2aaa32b16000
</span><br>
<span class="quotelev2">&gt;&gt; [node14:16236] [ 0] /lib64/libpthread.so.0 [0x32e080de00]
</span><br>
<span class="quotelev2">&gt;&gt; [node14:16236] [ 1] 
</span><br>
<span class="quotelev2">&gt;&gt; /home/stefan/bin/openmpi-1.2.5/lib/libmpi.so.0(ompi_mpi_op_sum_double+0x10) 
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aaaaaf15530]
</span><br>
<span class="quotelev2">&gt;&gt; [node14:16236] [ 2] 
</span><br>
<span class="quotelev2">&gt;&gt; /home/stefan/bin/openmpi-1.2.5/lib/openmpi/mca_osc_pt2pt.so(ompi_osc_pt2pt_process_op+0x2d7) 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aaab1a47257]
</span><br>
<span class="quotelev2">&gt;&gt; [node14:16236] [ 3] 
</span><br>
<span class="quotelev2">&gt;&gt; /home/stefan/bin/openmpi-1.2.5/lib/openmpi/mca_osc_pt2pt.so 
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aaab1a45432]
</span><br>
<span class="quotelev2">&gt;&gt; [node14:16236] [ 4] 
</span><br>
<span class="quotelev2">&gt;&gt; /home/stefan/bin/openmpi-1.2.5/lib/openmpi/mca_osc_pt2pt.so(ompi_osc_pt2pt_passive_unlock+0x93) 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aaab1a48243]
</span><br>
<span class="quotelev2">&gt;&gt; [node14:16236] [ 5] 
</span><br>
<span class="quotelev2">&gt;&gt; /home/stefan/bin/openmpi-1.2.5/lib/openmpi/mca_osc_pt2pt.so 
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aaab1a43436]
</span><br>
<span class="quotelev2">&gt;&gt; [node14:16236] [ 6] 
</span><br>
<span class="quotelev2">&gt;&gt; /home/stefan/bin/openmpi-1.2.5/lib/openmpi/mca_osc_pt2pt.so(ompi_osc_pt2pt_progress+0xff) 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aaab1a42e0f]
</span><br>
<span class="quotelev2">&gt;&gt; [node14:16236] [ 7] 
</span><br>
<span class="quotelev2">&gt;&gt; /home/stefan/bin/openmpi-1.2.5/lib/libopen-pal.so.0(opal_progress+0x4a) 
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aaaab3dfa0a]
</span><br>
<span class="quotelev2">&gt;&gt; [node14:16236] [ 8] 
</span><br>
<span class="quotelev2">&gt;&gt; /home/stefan/bin/openmpi-1.2.5/lib/openmpi/mca_osc_pt2pt.so(ompi_osc_pt2pt_module_unlock+0x2a9) 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aaab1a48629]
</span><br>
<span class="quotelev2">&gt;&gt; [node14:16236] [ 9] 
</span><br>
<span class="quotelev2">&gt;&gt; /home/stefan/bin/openmpi-1.2.5/lib/libmpi.so.0(PMPI_Win_unlock+0xe1) 
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aaaaaf4a291]
</span><br>
<span class="quotelev2">&gt;&gt; [node14:16236] [10] 
</span><br>
<span class="quotelev2">&gt;&gt; /home/stefan/bin/openmpi-1.2.5/lib/libmpi_f77.so.0(mpi_win_unlock_+0x25) 
</span><br>
<span class="quotelev2">&gt;&gt; [0x2aaaaacdd8c5]
</span><br>
<span class="quotelev2">&gt;&gt; [node14:16236] [11] /home/stefan/calc/mpi2_test/a.out(MAIN__+0x809) 
</span><br>
<span class="quotelev2">&gt;&gt; [0x401851]
</span><br>
<span class="quotelev2">&gt;&gt; [node14:16236] [12] /home/stefan/calc/mpi2_test/a.out(main+0xe) 
</span><br>
<span class="quotelev2">&gt;&gt; [0x401bbe]
</span><br>
<span class="quotelev2">&gt;&gt; [node14:16236] [13] /lib64/libc.so.6(__libc_start_main+0xf4) 
</span><br>
<span class="quotelev2">&gt;&gt; [0x32dfc1dab4]
</span><br>
<span class="quotelev2">&gt;&gt; [node14:16236] [14] /home/stefan/calc/mpi2_test/a.out [0x400f99]
</span><br>
<span class="quotelev2">&gt;&gt; [node14:16236] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that job rank 0 with PID 16236 on node node14 exited on 
</span><br>
<span class="quotelev2">&gt;&gt; signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The relevant part of my FORTRAN source code reads as:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ~      program accumulate_test
</span><br>
<span class="quotelev2">&gt;&gt; ~      IMPLICIT REAL*8 (A-H,O-Z)
</span><br>
<span class="quotelev2">&gt;&gt; ~      include 'mpif.h'
</span><br>
<span class="quotelev2">&gt;&gt; ~      INTEGER(KIND=MPI_OFFSET_KIND) MX_SIZE_M
</span><br>
<span class="quotelev2">&gt;&gt; C     dummy size parameter
</span><br>
<span class="quotelev2">&gt;&gt; ~      PARAMETER (MX_SIZE_M = 1 000 000)
</span><br>
<span class="quotelev2">&gt;&gt; ~      INTEGER MPIerr, MYID, NPROC
</span><br>
<span class="quotelev2">&gt;&gt; ~      INTEGER ITARGET, MY_X_WIN, JCOUNT, JCOUNT_T
</span><br>
<span class="quotelev2">&gt;&gt; ~      INTEGER(KIND=MPI_ADDRESS_KIND) MEM_X, MEM_Y
</span><br>
<span class="quotelev2">&gt;&gt; ~      INTEGER(KIND=MPI_ADDRESS_KIND) IDISPL_WIN
</span><br>
<span class="quotelev2">&gt;&gt; ~      INTEGER(KIND=MPI_ADDRESS_KIND) PTR1, PTR2
</span><br>
<span class="quotelev2">&gt;&gt; ~      INTEGER(KIND=MPI_INTEGER_KIND) ISIZE_REAL8
</span><br>
<span class="quotelev2">&gt;&gt; ~      INTEGER*8 NELEMENT_X, NELEMENT_Y
</span><br>
<span class="quotelev2">&gt;&gt; ~      POINTER (PTR1, XMAT(MX_SIZE_M))
</span><br>
<span class="quotelev2">&gt;&gt; ~      POINTER (PTR2, YMAT(MX_SIZE_M))
</span><br>
<span class="quotelev2">&gt;&gt; C
</span><br>
<span class="quotelev2">&gt;&gt; ~      CALL MPI_INIT( MPIerr )
</span><br>
<span class="quotelev2">&gt;&gt; ~      CALL MPI_COMM_RANK( MPI_COMM_WORLD, MYID,  MPIerr)
</span><br>
<span class="quotelev2">&gt;&gt; ~      CALL MPI_COMM_SIZE( MPI_COMM_WORLD, NPROC, MPIerr)
</span><br>
<span class="quotelev2">&gt;&gt; C
</span><br>
<span class="quotelev2">&gt;&gt; ~      NELEMENT_X = 400 000 000
</span><br>
<span class="quotelev2">&gt;&gt; ~      NELEMENT_Y =      10 000
</span><br>
<span class="quotelev2">&gt;&gt; C
</span><br>
<span class="quotelev2">&gt;&gt; ~      CALL MPI_TYPE_EXTENT(MPI_REAL8, ISIZE_REAL8, MPIerr)
</span><br>
<span class="quotelev2">&gt;&gt; ~      MEM_X = NELEMENT_X * ISIZE_REAL8
</span><br>
<span class="quotelev2">&gt;&gt; ~      MEM_Y = NELEMENT_Y * ISIZE_REAL8
</span><br>
<span class="quotelev2">&gt;&gt; C
</span><br>
<span class="quotelev2">&gt;&gt; C     allocate memory
</span><br>
<span class="quotelev2">&gt;&gt; C
</span><br>
<span class="quotelev2">&gt;&gt; ~      CALL MPI_ALLOC_MEM( MEM_X, MPI_INFO_NULL, PTR1, MPIerr)
</span><br>
<span class="quotelev2">&gt;&gt; ~      CALL MPI_ALLOC_MEM( MEM_Y, MPI_INFO_NULL, PTR2, MPIerr)
</span><br>
<span class="quotelev2">&gt;&gt; C
</span><br>
<span class="quotelev2">&gt;&gt; C     fill vectors with 0.0D0 and 1.0D0
</span><br>
<span class="quotelev2">&gt;&gt; C
</span><br>
<span class="quotelev2">&gt;&gt; ~      CALL DZERO(XMAT,NELEMENT_X)
</span><br>
<span class="quotelev2">&gt;&gt; ~      CALL DONE(YMAT,NELEMENT_Y)
</span><br>
<span class="quotelev2">&gt;&gt; C
</span><br>
<span class="quotelev2">&gt;&gt; C     open memory window
</span><br>
<span class="quotelev2">&gt;&gt; C
</span><br>
<span class="quotelev2">&gt;&gt; ~      CALL MPI_WIN_CREATE( XMAT, MEM_X, ISIZE_REAL8,
</span><br>
<span class="quotelev2">&gt;&gt; ~     &amp;                     MPI_INFO_NULL, MPI_COMM_WORLD,
</span><br>
<span class="quotelev2">&gt;&gt; ~     &amp;                     MY_X_WIN, MPIerr )
</span><br>
<span class="quotelev2">&gt;&gt; C     lock window (MPI_LOCK_SHARED mode)
</span><br>
<span class="quotelev2">&gt;&gt; C     select target ==&gt; if itarget == myid: no 1-sided communication
</span><br>
<span class="quotelev2">&gt;&gt; C
</span><br>
<span class="quotelev2">&gt;&gt; ~      ITARGET = MYID
</span><br>
<span class="quotelev2">&gt;&gt; ~      CALL MPI_WIN_LOCK( MPI_LOCK_SHARED, ITARGET, MPI_MODE_NOCHECK,
</span><br>
<span class="quotelev2">&gt;&gt; ~     &amp;                   MY_X_WIN, MPIerr)
</span><br>
<span class="quotelev2">&gt;&gt; C
</span><br>
<span class="quotelev2">&gt;&gt; C     transfer data to target ITARGET
</span><br>
<span class="quotelev2">&gt;&gt; C
</span><br>
<span class="quotelev2">&gt;&gt; ~      JCOUNT_T = 10 000
</span><br>
<span class="quotelev2">&gt;&gt; ~      JCOUNT   = JCOUNT_T
</span><br>
<span class="quotelev2">&gt;&gt; C     set displacement in memory window
</span><br>
<span class="quotelev2">&gt;&gt; ~      IDISPL_WIN = 300 000 000
</span><br>
<span class="quotelev2">&gt;&gt; C
</span><br>
<span class="quotelev2">&gt;&gt; ~      CALL MPI_ACCUMULATE( YMAT, JCOUNT, MPI_REAL8, ITARGET, IDISPL_WIN,
</span><br>
<span class="quotelev2">&gt;&gt; ~     &amp;                   JCOUNT_T, MPI_REAL8, MPI_SUM, MY_X_WIN, MPIerr)
</span><br>
<span class="quotelev2">&gt;&gt; C
</span><br>
<span class="quotelev2">&gt;&gt; C     unlock
</span><br>
<span class="quotelev2">&gt;&gt; C
</span><br>
<span class="quotelev2">&gt;&gt; ~      CALL MPI_WIN_UNLOCK( ITARGET, MY_X_WIN, MPIerr)
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The complete source code (accumulate_test.F) is attached to this 
</span><br>
<span class="quotelev2">&gt;&gt; e-mail as well as the
</span><br>
<span class="quotelev2">&gt;&gt; config.log of my OpenMPI installation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The program only(!) fails for values of IDISPL_WIN &gt; 268 435 455!!! 
</span><br>
<span class="quotelev2">&gt;&gt; For all lower
</span><br>
<span class="quotelev2">&gt;&gt; offset values it finishes normally.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Therefore, I assume that after the internal multiplication (in 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_ACCUMULATE)
</span><br>
<span class="quotelev2">&gt;&gt; of IDISPL_WIN with the window scaling factor ISIZE_REAL8 (== 8 byte) an
</span><br>
<span class="quotelev2">&gt;&gt; INTEGER(*4) overflow occurs, although IDISPL_WIN is declared as
</span><br>
<span class="quotelev2">&gt;&gt; KIND=MPI_ADDRESS_KIND (INTEGER*8). Might that be the reason?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Running this program doing rather MPI_GET than MPI_ACCUMULATE with
</span><br>
<span class="quotelev2">&gt;&gt; the same offsets is no problem at all.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance for any help,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; stefan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - --
</span><br>
<span class="quotelev2">&gt;&gt; - -------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Dipl. Chem. Stefan Knecht
</span><br>
<span class="quotelev2">&gt;&gt; Institute for Theoretical and
</span><br>
<span class="quotelev2">&gt;&gt; Computational Chemistry
</span><br>
<span class="quotelev2">&gt;&gt; Heinrich-Heine University D&#252;sseldorf
</span><br>
<span class="quotelev2">&gt;&gt; Universit&#228;tsstra&#223;e 1
</span><br>
<span class="quotelev2">&gt;&gt; Building 26.32 Room 03.33
</span><br>
<span class="quotelev2">&gt;&gt; 40225 D&#252;sseldorf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; phone: +49-(0)211-81-11439
</span><br>
<span class="quotelev2">&gt;&gt; e-mail: stefan_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.theochem.uni-duesseldorf.de/users/stefan">http://www.theochem.uni-duesseldorf.de/users/stefan</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev2">&gt;&gt; Version: GnuPG v1.4.2 (GNU/Linux)
</span><br>
<span class="quotelev2">&gt;&gt; Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org">http://enigmail.mozdev.org</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; iD8DBQFHmcaQFgKivGtHXsARAqG2AJ9xjTXKs5+Y3hoNd0g93Ue3ceFnUACdEmQN
</span><br>
<span class="quotelev2">&gt;&gt; MyOMP2fGCOEzrTwaNZAWPsA=
</span><br>
<span class="quotelev2">&gt;&gt; =P17R
</span><br>
<span class="quotelev2">&gt;&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5009.php">Jeff Squyres: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="5007.php">Tim Mattox: "Re: [OMPI users] Bad behavior in Allgatherv when a count is 0"</a>
<li><strong>In reply to:</strong> <a href="5005.php">Tim Prins: "Re: [OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5017.php">Stefan Knecht: "Re: [OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5"</a>
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
