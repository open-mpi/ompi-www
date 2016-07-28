<?
$subject_val = "Re: [OMPI users] System CPU of openmpi-1.7rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 29 00:30:17 2012" -->
<!-- isoreceived="20121029043017" -->
<!-- sent="Sun, 28 Oct 2012 21:30:09 -0700" -->
<!-- isosent="20121029043009" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] System CPU of openmpi-1.7rc1" -->
<!-- id="4DA872A9-4973-4C85-9B6C-3037CE7072F4_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF07CF3F51.7163568C-ON49257AA6.0012CEEC-49257AA6.001408AE_at_jcity.maeda.co.jp" -->
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
<strong>Date:</strong> 2012-10-29 00:30:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20568.php">tmishima_at_[hidden]: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>Previous message:</strong> <a href="20566.php">tmishima_at_[hidden]: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>In reply to:</strong> <a href="20566.php">tmishima_at_[hidden]: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20568.php">tmishima_at_[hidden]: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>Reply:</strong> <a href="20568.php">tmishima_at_[hidden]: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not sure why they would be different, though there are changes to the code, of course. Would have to dig deep to find out why - perhaps one of the BTL developers will chime in here. Which transport are you using (Infiniband, TCP, ?)?
<br>
<p>As for why the cpu gets consumed, it's that allreduce that is causing it. You put one rank to sleep, and then have all the others jump into allreduce - so they all start spinning like mad trying to complete the collective.
<br>
<p><p>On Oct 28, 2012, at 8:38 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I made my testing program simpler as shown below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I compared openmpi-1.6.2 and openmpi1.7rc1/4 again
</span><br>
<span class="quotelev1">&gt; in system cpu usage while some processes wait for
</span><br>
<span class="quotelev1">&gt; others.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then, the result is same as reported bofore.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;               system cpu usage
</span><br>
<span class="quotelev1">&gt; openmpi-1.6.2     0%
</span><br>
<span class="quotelev1">&gt; openmpi-1.7rc1   70%
</span><br>
<span class="quotelev1">&gt; openmpi-1.7rc4   70%
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My question is why openmpi1.7rc is so different from
</span><br>
<span class="quotelev1">&gt; openmpi-1.6.2 in system cpu usage. Is this the intended
</span><br>
<span class="quotelev1">&gt; behavior?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      INCLUDE 'mpif.h'
</span><br>
<span class="quotelev1">&gt;      CALL MPI_INIT(IERR)
</span><br>
<span class="quotelev1">&gt; c
</span><br>
<span class="quotelev1">&gt;      CALL MPI_COMM_RANK( MPI_COMM_WORLD, MYID, IERR )
</span><br>
<span class="quotelev1">&gt;      IF ( MYID .EQ. 0 ) CALL SLEEP(180) ! WAIT 180 SEC.
</span><br>
<span class="quotelev1">&gt; c
</span><br>
<span class="quotelev1">&gt;      ISND = 1
</span><br>
<span class="quotelev1">&gt;      CALL MPI_ALLREDUCE(ISND,IRCV,1,MPI_INTEGER,MPI_SUM,
</span><br>
<span class="quotelev1">&gt;     +MPI_COMM_WORLD,IERR)
</span><br>
<span class="quotelev1">&gt;      CALL MPI_FINALIZE(IERR)
</span><br>
<span class="quotelev1">&gt; c
</span><br>
<span class="quotelev1">&gt;      END
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; tmishima
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure - just fishing for possible answers. When we see high cpu
</span><br>
<span class="quotelev1">&gt; usage, it usually occurs during MPI communications - when a process is
</span><br>
<span class="quotelev1">&gt; waiting for a message to arrive, it polls at a high rate
</span><br>
<span class="quotelev2">&gt;&gt; to keep the latency as low as possible. Since you have one process
</span><br>
<span class="quotelev1">&gt; &quot;sleep&quot; before calling the finalize sequence, it could be that the other
</span><br>
<span class="quotelev1">&gt; process is getting held up on a receive and thus eating the
</span><br>
<span class="quotelev2">&gt;&gt; cpu.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There really isn't anything special going on during Init/Finalize, and
</span><br>
<span class="quotelev1">&gt; OMPI itself doesn't have any MPI communications in there. I'm not familiar
</span><br>
<span class="quotelev1">&gt; with MUMPS, but if MUMPS finalize is doing something
</span><br>
<span class="quotelev2">&gt;&gt; like an MPI_Barrier to ensure the procs finalize together, then that
</span><br>
<span class="quotelev1">&gt; would explain what you see. The docs I could find imply there is some MPI
</span><br>
<span class="quotelev1">&gt; embedded in MUMPS, but I couldn't find anything specific
</span><br>
<span class="quotelev2">&gt;&gt; about finalize.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 25, 2012, at 6:43 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do you really mean &quot;MUMPS finalize&quot;? I don't think it has much relation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this behavior?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyway, I'm just a mumps user. I have to ask mumps developers about
</span><br>
<span class="quotelev1">&gt; what
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MUMPS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; initailize and finalize does.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regartds,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tmishima
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Out of curiosity, what does MUMPS finalize do? Does it send a message
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do a barrier operation?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Oct 25, 2012, at 5:53 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I find that system CPU time of openmpi-1.7rc1 is quite different with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that of openmpi-1.6.2 as shown in the attached ganglia display.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; About 2 years ago, I reported a similar behavior of openmpi-1.4.3.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The testing method is what I used at that time.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (please see my post entitled &quot;SYSTEM CPU with OpenMPI 1.4.3&quot;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is this due to a pre-released version's check routine or does
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; something go wrong?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Testing program:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    INCLUDE 'mpif.h'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    INCLUDE 'dmumps_struc.h'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    TYPE (DMUMPS_STRUC) MUMPS_PAR
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    MUMPS_PAR%COMM = MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    MUMPS_PAR%SYM = 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    MUMPS_PAR%PAR = 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    MUMPS_PAR%JOB = -1 ! INITIALIZE MUMPS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    CALL MPI_INIT(IERR)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    CALL DMUMPS(MUMPS_PAR)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    CALL MPI_COMM_RANK( MPI_COMM_WORLD, MYID, IERR )
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    IF ( MYID .EQ. 0 ) CALL SLEEP(180) ! WAIT 180 SEC.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    MUMPS_PAR%JOB = -2 ! FINALIZE MUMPS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    CALL DMUMPS(MUMPS_PAR)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    CALL MPI_FINALIZE(IERR)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    END
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ( This does nothing but just calls intialize &amp; finalize
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; routine of MUMPS &amp; MPI)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; command line : mpirun -host node03 -np 16 ./testrun
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (See attached file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; openmpi17rc1-cmp.bmp)&lt;openmpi17rc1-cmp.bmp&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="20568.php">tmishima_at_[hidden]: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>Previous message:</strong> <a href="20566.php">tmishima_at_[hidden]: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>In reply to:</strong> <a href="20566.php">tmishima_at_[hidden]: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20568.php">tmishima_at_[hidden]: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>Reply:</strong> <a href="20568.php">tmishima_at_[hidden]: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
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
