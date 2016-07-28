<?
$subject_val = "[OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 25 05:13:54 2008" -->
<!-- isoreceived="20080125101354" -->
<!-- sent="Fri, 25 Jan 2008 12:22:56 +0100" -->
<!-- isosent="20080125112256" -->
<!-- name="Stefan Knecht" -->
<!-- email="stefan_at_[hidden]" -->
<!-- subject="[OMPI users] bug in MPI_ACCUMULATE for window offsets &amp;gt; 2**31 - 1 bytes? openmpi v1.2.5" -->
<!-- id="4799C690.8020104_at_theochem.uni-duesseldorf.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5<br>
<strong>From:</strong> Stefan Knecht (<em>stefan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-25 06:22:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4881.php">Swamy Kandadai: "[OMPI users] Swamy Kandadai is out of the office."</a>
<li><strong>Previous message:</strong> <a href="4879.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/5005.php">Tim Prins: "Re: [OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/5005.php">Tim Prins: "Re: [OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/5017.php">Stefan Knecht: "Re: [OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>Hi all,
<br>
<p>I encounter a problem with the routine MPI_ACCUMULATE trying to sum up
<br>
MPI_REAL8's on a large memory window with a large offset.
<br>
My program running (on a single processor, x86_64 architecture) crashes with
<br>
an error message like:
<br>
<p>[node14:16236] *** Process received signal ***
<br>
[node14:16236] Signal: Segmentation fault (11)
<br>
[node14:16236] Signal code: Address not mapped (1)
<br>
[node14:16236] Failing at address: 0x2aaa32b16000
<br>
[node14:16236] [ 0] /lib64/libpthread.so.0 [0x32e080de00]
<br>
[node14:16236] [ 1] /home/stefan/bin/openmpi-1.2.5/lib/libmpi.so.0(ompi_mpi_op_sum_double+0x10) [0x2aaaaaf15530]
<br>
[node14:16236] [ 2] /home/stefan/bin/openmpi-1.2.5/lib/openmpi/mca_osc_pt2pt.so(ompi_osc_pt2pt_process_op+0x2d7)
<br>
[0x2aaab1a47257]
<br>
[node14:16236] [ 3] /home/stefan/bin/openmpi-1.2.5/lib/openmpi/mca_osc_pt2pt.so [0x2aaab1a45432]
<br>
[node14:16236] [ 4] /home/stefan/bin/openmpi-1.2.5/lib/openmpi/mca_osc_pt2pt.so(ompi_osc_pt2pt_passive_unlock+0x93)
<br>
[0x2aaab1a48243]
<br>
[node14:16236] [ 5] /home/stefan/bin/openmpi-1.2.5/lib/openmpi/mca_osc_pt2pt.so [0x2aaab1a43436]
<br>
[node14:16236] [ 6] /home/stefan/bin/openmpi-1.2.5/lib/openmpi/mca_osc_pt2pt.so(ompi_osc_pt2pt_progress+0xff)
<br>
[0x2aaab1a42e0f]
<br>
[node14:16236] [ 7] /home/stefan/bin/openmpi-1.2.5/lib/libopen-pal.so.0(opal_progress+0x4a) [0x2aaaab3dfa0a]
<br>
[node14:16236] [ 8] /home/stefan/bin/openmpi-1.2.5/lib/openmpi/mca_osc_pt2pt.so(ompi_osc_pt2pt_module_unlock+0x2a9)
<br>
[0x2aaab1a48629]
<br>
[node14:16236] [ 9] /home/stefan/bin/openmpi-1.2.5/lib/libmpi.so.0(PMPI_Win_unlock+0xe1) [0x2aaaaaf4a291]
<br>
[node14:16236] [10] /home/stefan/bin/openmpi-1.2.5/lib/libmpi_f77.so.0(mpi_win_unlock_+0x25) [0x2aaaaacdd8c5]
<br>
[node14:16236] [11] /home/stefan/calc/mpi2_test/a.out(MAIN__+0x809) [0x401851]
<br>
[node14:16236] [12] /home/stefan/calc/mpi2_test/a.out(main+0xe) [0x401bbe]
<br>
[node14:16236] [13] /lib64/libc.so.6(__libc_start_main+0xf4) [0x32dfc1dab4]
<br>
[node14:16236] [14] /home/stefan/calc/mpi2_test/a.out [0x400f99]
<br>
[node14:16236] *** End of error message ***
<br>
mpirun noticed that job rank 0 with PID 16236 on node node14 exited on signal 11 (Segmentation fault).
<br>
<p><p>The relevant part of my FORTRAN source code reads as:
<br>
<p>~      program accumulate_test
<br>
~      IMPLICIT REAL*8 (A-H,O-Z)
<br>
~      include 'mpif.h'
<br>
~      INTEGER(KIND=MPI_OFFSET_KIND) MX_SIZE_M
<br>
C     dummy size parameter
<br>
~      PARAMETER (MX_SIZE_M = 1 000 000)
<br>
~      INTEGER MPIerr, MYID, NPROC
<br>
~      INTEGER ITARGET, MY_X_WIN, JCOUNT, JCOUNT_T
<br>
~      INTEGER(KIND=MPI_ADDRESS_KIND) MEM_X, MEM_Y
<br>
~      INTEGER(KIND=MPI_ADDRESS_KIND) IDISPL_WIN
<br>
~      INTEGER(KIND=MPI_ADDRESS_KIND) PTR1, PTR2
<br>
~      INTEGER(KIND=MPI_INTEGER_KIND) ISIZE_REAL8
<br>
~      INTEGER*8 NELEMENT_X, NELEMENT_Y
<br>
~      POINTER (PTR1, XMAT(MX_SIZE_M))
<br>
~      POINTER (PTR2, YMAT(MX_SIZE_M))
<br>
C
<br>
~      CALL MPI_INIT( MPIerr )
<br>
~      CALL MPI_COMM_RANK( MPI_COMM_WORLD, MYID,  MPIerr)
<br>
~      CALL MPI_COMM_SIZE( MPI_COMM_WORLD, NPROC, MPIerr)
<br>
C
<br>
~      NELEMENT_X = 400 000 000
<br>
~      NELEMENT_Y =      10 000
<br>
C
<br>
~      CALL MPI_TYPE_EXTENT(MPI_REAL8, ISIZE_REAL8, MPIerr)
<br>
~      MEM_X = NELEMENT_X * ISIZE_REAL8
<br>
~      MEM_Y = NELEMENT_Y * ISIZE_REAL8
<br>
C
<br>
C     allocate memory
<br>
C
<br>
~      CALL MPI_ALLOC_MEM( MEM_X, MPI_INFO_NULL, PTR1, MPIerr)
<br>
~      CALL MPI_ALLOC_MEM( MEM_Y, MPI_INFO_NULL, PTR2, MPIerr)
<br>
C
<br>
C     fill vectors with 0.0D0 and 1.0D0
<br>
C
<br>
~      CALL DZERO(XMAT,NELEMENT_X)
<br>
~      CALL DONE(YMAT,NELEMENT_Y)
<br>
C
<br>
C     open memory window
<br>
C
<br>
~      CALL MPI_WIN_CREATE( XMAT, MEM_X, ISIZE_REAL8,
<br>
~     &amp;                     MPI_INFO_NULL, MPI_COMM_WORLD,
<br>
~     &amp;                     MY_X_WIN, MPIerr )
<br>
C     lock window (MPI_LOCK_SHARED mode)
<br>
C     select target ==&gt; if itarget == myid: no 1-sided communication
<br>
C
<br>
~      ITARGET = MYID
<br>
~      CALL MPI_WIN_LOCK( MPI_LOCK_SHARED, ITARGET, MPI_MODE_NOCHECK,
<br>
~     &amp;                   MY_X_WIN, MPIerr)
<br>
C
<br>
C     transfer data to target ITARGET
<br>
C
<br>
~      JCOUNT_T = 10 000
<br>
~      JCOUNT   = JCOUNT_T
<br>
C     set displacement in memory window
<br>
~      IDISPL_WIN = 300 000 000
<br>
C
<br>
~      CALL MPI_ACCUMULATE( YMAT, JCOUNT, MPI_REAL8, ITARGET, IDISPL_WIN,
<br>
~     &amp;                   JCOUNT_T, MPI_REAL8, MPI_SUM, MY_X_WIN, MPIerr)
<br>
C
<br>
C     unlock
<br>
C
<br>
~      CALL MPI_WIN_UNLOCK( ITARGET, MY_X_WIN, MPIerr)
<br>
...
<br>
<p>The complete source code (accumulate_test.F) is attached to this e-mail as well as the
<br>
config.log of my OpenMPI installation.
<br>
<p>The program only(!) fails for values of IDISPL_WIN &gt; 268 435 455!!! For all lower
<br>
offset values it finishes normally.
<br>
<p>Therefore, I assume that after the internal multiplication (in MPI_ACCUMULATE)
<br>
of IDISPL_WIN with the window scaling factor ISIZE_REAL8 (== 8 byte) an
<br>
INTEGER(*4) overflow occurs, although IDISPL_WIN is declared as
<br>
KIND=MPI_ADDRESS_KIND (INTEGER*8). Might that be the reason?
<br>
<p>Running this program doing rather MPI_GET than MPI_ACCUMULATE with
<br>
the same offsets is no problem at all.
<br>
<p>Thanks in advance for any help,
<br>
<p>stefan
<br>
<p>- --
<br>
- -------------------------------------------
<br>
Dipl. Chem. Stefan Knecht
<br>
Institute for Theoretical and
<br>
Computational Chemistry
<br>
Heinrich-Heine University D&#252;sseldorf
<br>
Universit&#228;tsstra&#223;e 1
<br>
Building 26.32 Room 03.33
<br>
40225 D&#252;sseldorf
<br>
<p>phone: +49-(0)211-81-11439
<br>
e-mail: stefan_at_[hidden]
<br>
<a href="http://www.theochem.uni-duesseldorf.de/users/stefan">http://www.theochem.uni-duesseldorf.de/users/stefan</a>
<br>
<p><p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.2 (GNU/Linux)
<br>
Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org">http://enigmail.mozdev.org</a>
<br>
<p>iD8DBQFHmcaQFgKivGtHXsARAqG2AJ9xjTXKs5+Y3hoNd0g93Ue3ceFnUACdEmQN
<br>
MyOMP2fGCOEzrTwaNZAWPsA=
<br>
=P17R
<br>
-----END PGP SIGNATURE-----
<br>
<p>

<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4880/ompi-output.tar.gz">ompi-output.tar.gz</a>
</ul>
<!-- attachment="ompi-output.tar.gz" -->
<hr>
<ul>
<li>text/x-fortran attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4880/accumulate_test.F">accumulate_test.F</a>
</ul>
<!-- attachment="accumulate_test.F" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4881.php">Swamy Kandadai: "[OMPI users] Swamy Kandadai is out of the office."</a>
<li><strong>Previous message:</strong> <a href="4879.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/5005.php">Tim Prins: "Re: [OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/5005.php">Tim Prins: "Re: [OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/5017.php">Stefan Knecht: "Re: [OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5"</a>
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
