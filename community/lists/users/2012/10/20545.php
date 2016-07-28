<?
$subject_val = "Re: [OMPI users] System CPU of openmpi-1.7rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 26 00:08:24 2012" -->
<!-- isoreceived="20121026040824" -->
<!-- sent="Thu, 25 Oct 2012 21:08:15 -0700" -->
<!-- isosent="20121026040815" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] System CPU of openmpi-1.7rc1" -->
<!-- id="7F337A69-E475-46D9-BD78-E9C97BAEFDD6_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OFB6EDB9CA.4BE68D60-ON49257AA3.0008B9EB-49257AA3.000972DE_at_jcity.maeda.co.jp" -->
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
<strong>Date:</strong> 2012-10-26 00:08:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20546.php">Nicolas Deladerriere: "Re: [OMPI users] ompi-clean on single executable"</a>
<li><strong>Previous message:</strong> <a href="20544.php">tmishima_at_[hidden]: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>In reply to:</strong> <a href="20544.php">tmishima_at_[hidden]: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20547.php">tmishima_at_[hidden]: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>Reply:</strong> <a href="20547.php">tmishima_at_[hidden]: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>Reply:</strong> <a href="20566.php">tmishima_at_[hidden]: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure - just fishing for possible answers. When we see high cpu usage, it usually occurs during MPI communications - when a process is waiting for a message to arrive, it polls at a high rate to keep the latency as low as possible. Since you have one process &quot;sleep&quot; before calling the finalize sequence, it could be that the other process is getting held up on a receive and thus eating the cpu.
<br>
<p>There really isn't anything special going on during Init/Finalize, and OMPI itself doesn't have any MPI communications in there. I'm not familiar with MUMPS, but if MUMPS finalize is doing something like an MPI_Barrier to ensure the procs finalize together, then that would explain what you see. The docs I could find imply there is some MPI embedded in MUMPS, but I couldn't find anything specific about finalize.
<br>
<p><p>On Oct 25, 2012, at 6:43 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; do you really mean &quot;MUMPS finalize&quot;? I don't think it has much relation
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; this behavior?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, I'm just a mumps user. I have to ask mumps developers about what
</span><br>
<span class="quotelev1">&gt; MUMPS
</span><br>
<span class="quotelev1">&gt; initailize and finalize does.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regartds,
</span><br>
<span class="quotelev1">&gt; tmishima
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Out of curiosity, what does MUMPS finalize do? Does it send a message or
</span><br>
<span class="quotelev1">&gt; do a barrier operation?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 25, 2012, at 5:53 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I find that system CPU time of openmpi-1.7rc1 is quite different with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that of openmpi-1.6.2 as shown in the attached ganglia display.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; About 2 years ago, I reported a similar behavior of openmpi-1.4.3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The testing method is what I used at that time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (please see my post entitled &quot;SYSTEM CPU with OpenMPI 1.4.3&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this due to a pre-released version's check routine or does
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something go wrong?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Testing program:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     INCLUDE 'mpif.h'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     INCLUDE 'dmumps_struc.h'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     TYPE (DMUMPS_STRUC) MUMPS_PAR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MUMPS_PAR%COMM = MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MUMPS_PAR%SYM = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MUMPS_PAR%PAR = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MUMPS_PAR%JOB = -1 ! INITIALIZE MUMPS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     CALL MPI_INIT(IERR)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     CALL DMUMPS(MUMPS_PAR)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     CALL MPI_COMM_RANK( MPI_COMM_WORLD, MYID, IERR )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     IF ( MYID .EQ. 0 ) CALL SLEEP(180) ! WAIT 180 SEC.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MUMPS_PAR%JOB = -2 ! FINALIZE MUMPS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     CALL DMUMPS(MUMPS_PAR)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     CALL MPI_FINALIZE(IERR)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     END
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ( This does nothing but just calls intialize &amp; finalize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; routine of MUMPS &amp; MPI)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command line : mpirun -host node03 -np 16 ./testrun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (See attached file:
</span><br>
<span class="quotelev1">&gt; openmpi17rc1-cmp.bmp)&lt;openmpi17rc1-cmp.bmp&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="20546.php">Nicolas Deladerriere: "Re: [OMPI users] ompi-clean on single executable"</a>
<li><strong>Previous message:</strong> <a href="20544.php">tmishima_at_[hidden]: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>In reply to:</strong> <a href="20544.php">tmishima_at_[hidden]: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20547.php">tmishima_at_[hidden]: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>Reply:</strong> <a href="20547.php">tmishima_at_[hidden]: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>Reply:</strong> <a href="20566.php">tmishima_at_[hidden]: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
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
