<?
$subject_val = "Re: [OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  7 11:42:56 2008" -->
<!-- isoreceived="20080207164256" -->
<!-- sent="Thu, 07 Feb 2008 11:42:55 -0500" -->
<!-- isosent="20080207164255" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bug in MPI_ACCUMULATE for window offsets &amp;gt; 2**31 - 1 bytes? openmpi v1.2.5" -->
<!-- id="47AB350F.5060809_at_open-mpi.org" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="4799C690.8020104_at_theochem.uni-duesseldorf.de" -->
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
<strong>Date:</strong> 2008-02-07 11:42:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5006.php">Tim Prins: "Re: [OMPI users] process placement with toruqe and OpenMP"</a>
<li><strong>Previous message:</strong> <a href="5004.php">Jeff Squyres: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4880.php">Stefan Knecht: "[OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5008.php">Tim Prins: "Re: [OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5"</a>
<li><strong>Reply:</strong> <a href="5008.php">Tim Prins: "Re: [OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Stefan,
<br>
<p>I was able to verify the problem. Turns out this is a problem with other 
<br>
onesided operations as well. Attached is a simple test case I made in c 
<br>
using MPI_Put that also fails.
<br>
<p>The problem is that the target count and displacements are both sent as 
<br>
signed 32 bit integers. Then, the receiver multiplies them together and 
<br>
adds them to the window base. However, this multiplication is done using 
<br>
the signed 32 bit integers, which overflows. This is then added to the 
<br>
64 bit pointer. This, of course, results in a bad address.
<br>
<p>I have attached a patch against a recent development version that fixes 
<br>
this for me. I am also copying Brian Barrett, who did all the work on 
<br>
the onesided code.
<br>
<p>Brian: if possible, please take a look at the attached patch and test case.
<br>
<p>Thanks for the report!
<br>
<p>Tim Prins
<br>
<p>Stefan Knecht wrote:
<br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I encounter a problem with the routine MPI_ACCUMULATE trying to sum up
</span><br>
<span class="quotelev1">&gt; MPI_REAL8's on a large memory window with a large offset.
</span><br>
<span class="quotelev1">&gt; My program running (on a single processor, x86_64 architecture) crashes 
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; an error message like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [node14:16236] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [node14:16236] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [node14:16236] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [node14:16236] Failing at address: 0x2aaa32b16000
</span><br>
<span class="quotelev1">&gt; [node14:16236] [ 0] /lib64/libpthread.so.0 [0x32e080de00]
</span><br>
<span class="quotelev1">&gt; [node14:16236] [ 1] 
</span><br>
<span class="quotelev1">&gt; /home/stefan/bin/openmpi-1.2.5/lib/libmpi.so.0(ompi_mpi_op_sum_double+0x10) 
</span><br>
<span class="quotelev1">&gt; [0x2aaaaaf15530]
</span><br>
<span class="quotelev1">&gt; [node14:16236] [ 2] 
</span><br>
<span class="quotelev1">&gt; /home/stefan/bin/openmpi-1.2.5/lib/openmpi/mca_osc_pt2pt.so(ompi_osc_pt2pt_process_op+0x2d7) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0x2aaab1a47257]
</span><br>
<span class="quotelev1">&gt; [node14:16236] [ 3] 
</span><br>
<span class="quotelev1">&gt; /home/stefan/bin/openmpi-1.2.5/lib/openmpi/mca_osc_pt2pt.so 
</span><br>
<span class="quotelev1">&gt; [0x2aaab1a45432]
</span><br>
<span class="quotelev1">&gt; [node14:16236] [ 4] 
</span><br>
<span class="quotelev1">&gt; /home/stefan/bin/openmpi-1.2.5/lib/openmpi/mca_osc_pt2pt.so(ompi_osc_pt2pt_passive_unlock+0x93) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0x2aaab1a48243]
</span><br>
<span class="quotelev1">&gt; [node14:16236] [ 5] 
</span><br>
<span class="quotelev1">&gt; /home/stefan/bin/openmpi-1.2.5/lib/openmpi/mca_osc_pt2pt.so 
</span><br>
<span class="quotelev1">&gt; [0x2aaab1a43436]
</span><br>
<span class="quotelev1">&gt; [node14:16236] [ 6] 
</span><br>
<span class="quotelev1">&gt; /home/stefan/bin/openmpi-1.2.5/lib/openmpi/mca_osc_pt2pt.so(ompi_osc_pt2pt_progress+0xff) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0x2aaab1a42e0f]
</span><br>
<span class="quotelev1">&gt; [node14:16236] [ 7] 
</span><br>
<span class="quotelev1">&gt; /home/stefan/bin/openmpi-1.2.5/lib/libopen-pal.so.0(opal_progress+0x4a) 
</span><br>
<span class="quotelev1">&gt; [0x2aaaab3dfa0a]
</span><br>
<span class="quotelev1">&gt; [node14:16236] [ 8] 
</span><br>
<span class="quotelev1">&gt; /home/stefan/bin/openmpi-1.2.5/lib/openmpi/mca_osc_pt2pt.so(ompi_osc_pt2pt_module_unlock+0x2a9) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [0x2aaab1a48629]
</span><br>
<span class="quotelev1">&gt; [node14:16236] [ 9] 
</span><br>
<span class="quotelev1">&gt; /home/stefan/bin/openmpi-1.2.5/lib/libmpi.so.0(PMPI_Win_unlock+0xe1) 
</span><br>
<span class="quotelev1">&gt; [0x2aaaaaf4a291]
</span><br>
<span class="quotelev1">&gt; [node14:16236] [10] 
</span><br>
<span class="quotelev1">&gt; /home/stefan/bin/openmpi-1.2.5/lib/libmpi_f77.so.0(mpi_win_unlock_+0x25) 
</span><br>
<span class="quotelev1">&gt; [0x2aaaaacdd8c5]
</span><br>
<span class="quotelev1">&gt; [node14:16236] [11] /home/stefan/calc/mpi2_test/a.out(MAIN__+0x809) 
</span><br>
<span class="quotelev1">&gt; [0x401851]
</span><br>
<span class="quotelev1">&gt; [node14:16236] [12] /home/stefan/calc/mpi2_test/a.out(main+0xe) [0x401bbe]
</span><br>
<span class="quotelev1">&gt; [node14:16236] [13] /lib64/libc.so.6(__libc_start_main+0xf4) [0x32dfc1dab4]
</span><br>
<span class="quotelev1">&gt; [node14:16236] [14] /home/stefan/calc/mpi2_test/a.out [0x400f99]
</span><br>
<span class="quotelev1">&gt; [node14:16236] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 16236 on node node14 exited on 
</span><br>
<span class="quotelev1">&gt; signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The relevant part of my FORTRAN source code reads as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ~      program accumulate_test
</span><br>
<span class="quotelev1">&gt; ~      IMPLICIT REAL*8 (A-H,O-Z)
</span><br>
<span class="quotelev1">&gt; ~      include 'mpif.h'
</span><br>
<span class="quotelev1">&gt; ~      INTEGER(KIND=MPI_OFFSET_KIND) MX_SIZE_M
</span><br>
<span class="quotelev1">&gt; C     dummy size parameter
</span><br>
<span class="quotelev1">&gt; ~      PARAMETER (MX_SIZE_M = 1 000 000)
</span><br>
<span class="quotelev1">&gt; ~      INTEGER MPIerr, MYID, NPROC
</span><br>
<span class="quotelev1">&gt; ~      INTEGER ITARGET, MY_X_WIN, JCOUNT, JCOUNT_T
</span><br>
<span class="quotelev1">&gt; ~      INTEGER(KIND=MPI_ADDRESS_KIND) MEM_X, MEM_Y
</span><br>
<span class="quotelev1">&gt; ~      INTEGER(KIND=MPI_ADDRESS_KIND) IDISPL_WIN
</span><br>
<span class="quotelev1">&gt; ~      INTEGER(KIND=MPI_ADDRESS_KIND) PTR1, PTR2
</span><br>
<span class="quotelev1">&gt; ~      INTEGER(KIND=MPI_INTEGER_KIND) ISIZE_REAL8
</span><br>
<span class="quotelev1">&gt; ~      INTEGER*8 NELEMENT_X, NELEMENT_Y
</span><br>
<span class="quotelev1">&gt; ~      POINTER (PTR1, XMAT(MX_SIZE_M))
</span><br>
<span class="quotelev1">&gt; ~      POINTER (PTR2, YMAT(MX_SIZE_M))
</span><br>
<span class="quotelev1">&gt; C
</span><br>
<span class="quotelev1">&gt; ~      CALL MPI_INIT( MPIerr )
</span><br>
<span class="quotelev1">&gt; ~      CALL MPI_COMM_RANK( MPI_COMM_WORLD, MYID,  MPIerr)
</span><br>
<span class="quotelev1">&gt; ~      CALL MPI_COMM_SIZE( MPI_COMM_WORLD, NPROC, MPIerr)
</span><br>
<span class="quotelev1">&gt; C
</span><br>
<span class="quotelev1">&gt; ~      NELEMENT_X = 400 000 000
</span><br>
<span class="quotelev1">&gt; ~      NELEMENT_Y =      10 000
</span><br>
<span class="quotelev1">&gt; C
</span><br>
<span class="quotelev1">&gt; ~      CALL MPI_TYPE_EXTENT(MPI_REAL8, ISIZE_REAL8, MPIerr)
</span><br>
<span class="quotelev1">&gt; ~      MEM_X = NELEMENT_X * ISIZE_REAL8
</span><br>
<span class="quotelev1">&gt; ~      MEM_Y = NELEMENT_Y * ISIZE_REAL8
</span><br>
<span class="quotelev1">&gt; C
</span><br>
<span class="quotelev1">&gt; C     allocate memory
</span><br>
<span class="quotelev1">&gt; C
</span><br>
<span class="quotelev1">&gt; ~      CALL MPI_ALLOC_MEM( MEM_X, MPI_INFO_NULL, PTR1, MPIerr)
</span><br>
<span class="quotelev1">&gt; ~      CALL MPI_ALLOC_MEM( MEM_Y, MPI_INFO_NULL, PTR2, MPIerr)
</span><br>
<span class="quotelev1">&gt; C
</span><br>
<span class="quotelev1">&gt; C     fill vectors with 0.0D0 and 1.0D0
</span><br>
<span class="quotelev1">&gt; C
</span><br>
<span class="quotelev1">&gt; ~      CALL DZERO(XMAT,NELEMENT_X)
</span><br>
<span class="quotelev1">&gt; ~      CALL DONE(YMAT,NELEMENT_Y)
</span><br>
<span class="quotelev1">&gt; C
</span><br>
<span class="quotelev1">&gt; C     open memory window
</span><br>
<span class="quotelev1">&gt; C
</span><br>
<span class="quotelev1">&gt; ~      CALL MPI_WIN_CREATE( XMAT, MEM_X, ISIZE_REAL8,
</span><br>
<span class="quotelev1">&gt; ~     &amp;                     MPI_INFO_NULL, MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt; ~     &amp;                     MY_X_WIN, MPIerr )
</span><br>
<span class="quotelev1">&gt; C     lock window (MPI_LOCK_SHARED mode)
</span><br>
<span class="quotelev1">&gt; C     select target ==&gt; if itarget == myid: no 1-sided communication
</span><br>
<span class="quotelev1">&gt; C
</span><br>
<span class="quotelev1">&gt; ~      ITARGET = MYID
</span><br>
<span class="quotelev1">&gt; ~      CALL MPI_WIN_LOCK( MPI_LOCK_SHARED, ITARGET, MPI_MODE_NOCHECK,
</span><br>
<span class="quotelev1">&gt; ~     &amp;                   MY_X_WIN, MPIerr)
</span><br>
<span class="quotelev1">&gt; C
</span><br>
<span class="quotelev1">&gt; C     transfer data to target ITARGET
</span><br>
<span class="quotelev1">&gt; C
</span><br>
<span class="quotelev1">&gt; ~      JCOUNT_T = 10 000
</span><br>
<span class="quotelev1">&gt; ~      JCOUNT   = JCOUNT_T
</span><br>
<span class="quotelev1">&gt; C     set displacement in memory window
</span><br>
<span class="quotelev1">&gt; ~      IDISPL_WIN = 300 000 000
</span><br>
<span class="quotelev1">&gt; C
</span><br>
<span class="quotelev1">&gt; ~      CALL MPI_ACCUMULATE( YMAT, JCOUNT, MPI_REAL8, ITARGET, IDISPL_WIN,
</span><br>
<span class="quotelev1">&gt; ~     &amp;                   JCOUNT_T, MPI_REAL8, MPI_SUM, MY_X_WIN, MPIerr)
</span><br>
<span class="quotelev1">&gt; C
</span><br>
<span class="quotelev1">&gt; C     unlock
</span><br>
<span class="quotelev1">&gt; C
</span><br>
<span class="quotelev1">&gt; ~      CALL MPI_WIN_UNLOCK( ITARGET, MY_X_WIN, MPIerr)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The complete source code (accumulate_test.F) is attached to this e-mail 
</span><br>
<span class="quotelev1">&gt; as well as the
</span><br>
<span class="quotelev1">&gt; config.log of my OpenMPI installation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The program only(!) fails for values of IDISPL_WIN &gt; 268 435 455!!! For 
</span><br>
<span class="quotelev1">&gt; all lower
</span><br>
<span class="quotelev1">&gt; offset values it finishes normally.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Therefore, I assume that after the internal multiplication (in 
</span><br>
<span class="quotelev1">&gt; MPI_ACCUMULATE)
</span><br>
<span class="quotelev1">&gt; of IDISPL_WIN with the window scaling factor ISIZE_REAL8 (== 8 byte) an
</span><br>
<span class="quotelev1">&gt; INTEGER(*4) overflow occurs, although IDISPL_WIN is declared as
</span><br>
<span class="quotelev1">&gt; KIND=MPI_ADDRESS_KIND (INTEGER*8). Might that be the reason?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Running this program doing rather MPI_GET than MPI_ACCUMULATE with
</span><br>
<span class="quotelev1">&gt; the same offsets is no problem at all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance for any help,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; stefan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - --
</span><br>
<span class="quotelev1">&gt; - -------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dipl. Chem. Stefan Knecht
</span><br>
<span class="quotelev1">&gt; Institute for Theoretical and
</span><br>
<span class="quotelev1">&gt; Computational Chemistry
</span><br>
<span class="quotelev1">&gt; Heinrich-Heine University D&#252;sseldorf
</span><br>
<span class="quotelev1">&gt; Universit&#228;tsstra&#223;e 1
</span><br>
<span class="quotelev1">&gt; Building 26.32 Room 03.33
</span><br>
<span class="quotelev1">&gt; 40225 D&#252;sseldorf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; phone: +49-(0)211-81-11439
</span><br>
<span class="quotelev1">&gt; e-mail: stefan_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.theochem.uni-duesseldorf.de/users/stefan">http://www.theochem.uni-duesseldorf.de/users/stefan</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; Version: GnuPG v1.4.2 (GNU/Linux)
</span><br>
<span class="quotelev1">&gt; Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org">http://enigmail.mozdev.org</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; iD8DBQFHmcaQFgKivGtHXsARAqG2AJ9xjTXKs5+Y3hoNd0g93Ue3ceFnUACdEmQN
</span><br>
<span class="quotelev1">&gt; MyOMP2fGCOEzrTwaNZAWPsA=
</span><br>
<span class="quotelev1">&gt; =P17R
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
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
<p><p>
<br><p>
#include &lt;mpi.h&gt;
<br>
<p>#define X_NELMTS 400000000
<br>
#define Y_NELMTS 10000
<br>
#define OFFSET   300000000
<br>
#define TYPE     MPI_DOUBLE
<br>
<p>int main(int argc, char **argv) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int rank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;void * x, *y;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Win win;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Aint extent;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(NULL, NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_extent(TYPE, &amp;extent);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;x = malloc(X_NELMTS * extent);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;y = malloc(Y_NELMTS * extent);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Win_create(x, X_NELMTS, extent, MPI_INFO_NULL, MPI_COMM_WORLD, &amp;win);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Win_lock(MPI_LOCK_SHARED, rank, MPI_MODE_NOCHECK, win);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Put(y, Y_NELMTS, TYPE, rank, OFFSET, Y_NELMTS, TYPE, win);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Win_unlock(rank, win);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Win_free(&amp;win);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;free(x);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;free(y);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>
<p>
Index: ompi/mca/osc/rdma/osc_rdma_data_move.c
<br>
===================================================================
<br>
--- ompi/mca/osc/rdma/osc_rdma_data_move.c	(revision 17358)
<br>
+++ ompi/mca/osc/rdma/osc_rdma_data_move.c	(working copy)
<br>
@@ -183,7 +183,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;descriptor-&gt;des_dst_cnt = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;descriptor-&gt;des_dst[0].seg_addr.lval = 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;module-&gt;m_peer_info[target].peer_base + 
<br>
-                (sendreq-&gt;req_target_disp * module-&gt;m_win-&gt;w_disp_unit);
<br>
+                ((unsigned long)sendreq-&gt;req_target_disp * module-&gt;m_win-&gt;w_disp_unit);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;descriptor-&gt;des_dst[0].seg_len = 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sendreq-&gt;req_origin_bytes_packed;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;descriptor-&gt;des_dst[0].seg_key.key64 = 
<br>
@@ -213,7 +213,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;descriptor-&gt;des_src_cnt = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;descriptor-&gt;des_src[0].seg_addr.lval = 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;module-&gt;m_peer_info[target].peer_base + 
<br>
-                (sendreq-&gt;req_target_disp * module-&gt;m_win-&gt;w_disp_unit);
<br>
+                ((unsigned long)sendreq-&gt;req_target_disp * module-&gt;m_win-&gt;w_disp_unit);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;descriptor-&gt;des_src[0].seg_len = 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sendreq-&gt;req_origin_bytes_packed;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;descriptor-&gt;des_src[0].seg_key.key64 = 
<br>
@@ -790,7 +790,7 @@
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int ret = OMPI_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void *target = (unsigned char*) module-&gt;m_win-&gt;w_baseptr + 
<br>
-        (header-&gt;hdr_target_disp * module-&gt;m_win-&gt;w_disp_unit);    
<br>
+        ((unsigned long)header-&gt;hdr_target_disp * module-&gt;m_win-&gt;w_disp_unit);    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_proc_t *proc = ompi_comm_peer_lookup( module-&gt;m_comm, header-&gt;hdr_origin );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct ompi_datatype_t *datatype = 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_osc_base_datatype_create(proc, inbuf);
<br>
@@ -889,7 +889,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_osc_rdma_module_t *module = longreq-&gt;req_module;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unsigned char *target_buffer =
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(unsigned char*) module-&gt;m_win-&gt;w_baseptr + 
<br>
-        (header-&gt;hdr_target_disp * module-&gt;m_win-&gt;w_disp_unit);
<br>
+        ((unsigned long)header-&gt;hdr_target_disp * module-&gt;m_win-&gt;w_disp_unit);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* lock the window for accumulates */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_LOCK(&amp;longreq-&gt;req_module-&gt;m_acc_lock);
<br>
@@ -971,7 +971,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unsigned char *target_buffer;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;target_buffer = (unsigned char*) module-&gt;m_win-&gt;w_baseptr + 
<br>
-            (header-&gt;hdr_target_disp * module-&gt;m_win-&gt;w_disp_unit);
<br>
+            ((unsigned long)header-&gt;hdr_target_disp * module-&gt;m_win-&gt;w_disp_unit);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* lock the window for accumulates */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_LOCK(&amp;module-&gt;m_acc_lock);
<br>
Index: ompi/mca/osc/pt2pt/osc_pt2pt_data_move.c
<br>
===================================================================
<br>
--- ompi/mca/osc/pt2pt/osc_pt2pt_data_move.c	(revision 17358)
<br>
+++ ompi/mca/osc/pt2pt/osc_pt2pt_data_move.c	(working copy)
<br>
@@ -522,7 +522,7 @@
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int ret = OMPI_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void *target = (unsigned char*) module-&gt;p2p_win-&gt;w_baseptr + 
<br>
-        (header-&gt;hdr_target_disp * module-&gt;p2p_win-&gt;w_disp_unit);    
<br>
+        ((unsigned long)header-&gt;hdr_target_disp * module-&gt;p2p_win-&gt;w_disp_unit);    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_proc_t *proc = ompi_comm_peer_lookup( module-&gt;p2p_comm, header-&gt;hdr_origin );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct ompi_datatype_t *datatype = 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_osc_base_datatype_create(proc, &amp;inbuf);
<br>
@@ -605,7 +605,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void *payload = (void*) (header + 1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int ret;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void *target = (unsigned char*) module-&gt;p2p_win-&gt;w_baseptr + 
<br>
-        (header-&gt;hdr_target_disp * module-&gt;p2p_win-&gt;w_disp_unit);    
<br>
+        ((unsigned long)header-&gt;hdr_target_disp * module-&gt;p2p_win-&gt;w_disp_unit);    
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* lock the window for accumulates */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_LOCK(&amp;longreq-&gt;req_module-&gt;p2p_acc_lock);
<br>
@@ -677,7 +677,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct ompi_datatype_t *datatype = 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_osc_base_datatype_create(proc, &amp;payload);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void *target = (unsigned char*) module-&gt;p2p_win-&gt;w_baseptr + 
<br>
-        (header-&gt;hdr_target_disp * module-&gt;p2p_win-&gt;w_disp_unit);    
<br>
+        ((unsigned long)header-&gt;hdr_target_disp * module-&gt;p2p_win-&gt;w_disp_unit);    
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == datatype) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(ompi_osc_base_output,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5006.php">Tim Prins: "Re: [OMPI users] process placement with toruqe and OpenMP"</a>
<li><strong>Previous message:</strong> <a href="5004.php">Jeff Squyres: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4880.php">Stefan Knecht: "[OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5008.php">Tim Prins: "Re: [OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5"</a>
<li><strong>Reply:</strong> <a href="5008.php">Tim Prins: "Re: [OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5"</a>
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
