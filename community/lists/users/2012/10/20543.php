<?
$subject_val = "Re: [OMPI users] System CPU of openmpi-1.7rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 25 21:05:01 2012" -->
<!-- isoreceived="20121026010501" -->
<!-- sent="Thu, 25 Oct 2012 18:04:54 -0700" -->
<!-- isosent="20121026010454" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] System CPU of openmpi-1.7rc1" -->
<!-- id="F99192AE-8634-4F0D-88B7-0B6044AB6CB1_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF687E6521.7DCE2876-ON49257AA3.0002EB97-49257AA3.0004D303_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] System CPU of openmpi-1.7rc1<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-25 21:04:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20544.php">tmishima_at_[hidden]: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>Previous message:</strong> <a href="20542.php">tmishima_at_[hidden]: "[OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>In reply to:</strong> <a href="20542.php">tmishima_at_[hidden]: "[OMPI users] System CPU of openmpi-1.7rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20544.php">tmishima_at_[hidden]: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>Reply:</strong> <a href="20544.php">tmishima_at_[hidden]: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Out of curiosity, what does MUMPS finalize do? Does it send a message or do a barrier operation?
<br>
<p><p>On Oct 25, 2012, at 5:53 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I find that system CPU time of openmpi-1.7rc1 is quite different with
</span><br>
<span class="quotelev1">&gt; that of openmpi-1.6.2 as shown in the attached ganglia display.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; About 2 years ago, I reported a similar behavior of openmpi-1.4.3.
</span><br>
<span class="quotelev1">&gt; The testing method is what I used at that time.
</span><br>
<span class="quotelev1">&gt; (please see my post entitled &quot;SYSTEM CPU with OpenMPI 1.4.3&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this due to a pre-released version's check routine or does
</span><br>
<span class="quotelev1">&gt; something go wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------
</span><br>
<span class="quotelev1">&gt; Testing program:
</span><br>
<span class="quotelev1">&gt;      INCLUDE 'mpif.h'
</span><br>
<span class="quotelev1">&gt;      INCLUDE 'dmumps_struc.h'
</span><br>
<span class="quotelev1">&gt;      TYPE (DMUMPS_STRUC) MUMPS_PAR
</span><br>
<span class="quotelev1">&gt; c
</span><br>
<span class="quotelev1">&gt;      MUMPS_PAR%COMM = MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;      MUMPS_PAR%SYM = 1
</span><br>
<span class="quotelev1">&gt;      MUMPS_PAR%PAR = 1
</span><br>
<span class="quotelev1">&gt;      MUMPS_PAR%JOB = -1 ! INITIALIZE MUMPS
</span><br>
<span class="quotelev1">&gt;      CALL MPI_INIT(IERR)
</span><br>
<span class="quotelev1">&gt;      CALL DMUMPS(MUMPS_PAR)
</span><br>
<span class="quotelev1">&gt; c
</span><br>
<span class="quotelev1">&gt;      CALL MPI_COMM_RANK( MPI_COMM_WORLD, MYID, IERR )
</span><br>
<span class="quotelev1">&gt;      IF ( MYID .EQ. 0 ) CALL SLEEP(180) ! WAIT 180 SEC.
</span><br>
<span class="quotelev1">&gt; c
</span><br>
<span class="quotelev1">&gt;      MUMPS_PAR%JOB = -2 ! FINALIZE MUMPS
</span><br>
<span class="quotelev1">&gt;      CALL DMUMPS(MUMPS_PAR)
</span><br>
<span class="quotelev1">&gt;      CALL MPI_FINALIZE(IERR)
</span><br>
<span class="quotelev1">&gt; c
</span><br>
<span class="quotelev1">&gt;      END
</span><br>
<span class="quotelev1">&gt; ( This does nothing but just calls intialize &amp; finalize
</span><br>
<span class="quotelev1">&gt; routine of MUMPS &amp; MPI)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; command line : mpirun -host node03 -np 16 ./testrun
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (See attached file: openmpi17rc1-cmp.bmp)&lt;openmpi17rc1-cmp.bmp&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="20544.php">tmishima_at_[hidden]: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>Previous message:</strong> <a href="20542.php">tmishima_at_[hidden]: "[OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>In reply to:</strong> <a href="20542.php">tmishima_at_[hidden]: "[OMPI users] System CPU of openmpi-1.7rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20544.php">tmishima_at_[hidden]: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>Reply:</strong> <a href="20544.php">tmishima_at_[hidden]: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
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
