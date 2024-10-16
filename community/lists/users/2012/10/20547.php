<?
$subject_val = "Re: [OMPI users] System CPU of openmpi-1.7rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 26 08:11:53 2012" -->
<!-- isoreceived="20121026121153" -->
<!-- sent="Fri, 26 Oct 2012 21:12:46 +0900" -->
<!-- isosent="20121026121246" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] System CPU of openmpi-1.7rc1" -->
<!-- id="OF03B1CEAE.276428A5-ON49257AA3.00415732-49257AA3.004304D0_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7F337A69-E475-46D9-BD78-E9C97BAEFDD6_at_open-mpi.org" -->
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
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20System%20CPU%20of%20openmpi-1.7rc1"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-10-26 08:12:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20548.php">Ralph Castain: "Re: [OMPI users] ompi-clean on single executable"</a>
<li><strong>Previous message:</strong> <a href="20546.php">Nicolas Deladerriere: "Re: [OMPI users] ompi-clean on single executable"</a>
<li><strong>In reply to:</strong> <a href="20545.php">Ralph Castain: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20566.php">tmishima_at_[hidden]: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph, thank you for your comment.
<br>
<p>I understand what you mean. As you pointed out, I have one process sleep
<br>
before finalize. Then, mumps finalize might affect the behavior.
<br>
<p>I will remove mumps finalize (and/or initialize) function from my testing
<br>
program ant try again on next Monday to make my point clear.
<br>
<p>Regards, tmishima
<br>
<p><span class="quotelev1">&gt; I'm not sure - just fishing for possible answers. When we see high cpu
</span><br>
usage, it usually occurs during MPI communications - when a process is
<br>
waiting for a message to arrive, it polls at a high rate
<br>
<span class="quotelev1">&gt; to keep the latency as low as possible. Since you have one process
</span><br>
&quot;sleep&quot; before calling the finalize sequence, it could be that the other
<br>
process is getting held up on a receive and thus eating the
<br>
<span class="quotelev1">&gt; cpu.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There really isn't anything special going on during Init/Finalize, and
</span><br>
OMPI itself doesn't have any MPI communications in there. I'm not familiar
<br>
with MUMPS, but if MUMPS finalize is doing something
<br>
<span class="quotelev1">&gt; like an MPI_Barrier to ensure the procs finalize together, then that
</span><br>
would explain what you see. The docs I could find imply there is some MPI
<br>
embedded in MUMPS, but I couldn't find anything specific
<br>
<span class="quotelev1">&gt; about finalize.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 25, 2012, at 6:43 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; do you really mean &quot;MUMPS finalize&quot;? I don't think it has much relation
</span><br>
<span class="quotelev2">&gt; &gt; with
</span><br>
<span class="quotelev2">&gt; &gt; this behavior?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Anyway, I'm just a mumps user. I have to ask mumps developers about
</span><br>
what
<br>
<span class="quotelev2">&gt; &gt; MUMPS
</span><br>
<span class="quotelev2">&gt; &gt; initailize and finalize does.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regartds,
</span><br>
<span class="quotelev2">&gt; &gt; tmishima
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Out of curiosity, what does MUMPS finalize do? Does it send a message
</span><br>
or
<br>
<span class="quotelev2">&gt; &gt; do a barrier operation?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Oct 25, 2012, at 5:53 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I find that system CPU time of openmpi-1.7rc1 is quite different with
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; that of openmpi-1.6.2 as shown in the attached ganglia display.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; About 2 years ago, I reported a similar behavior of openmpi-1.4.3.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The testing method is what I used at that time.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (please see my post entitled &quot;SYSTEM CPU with OpenMPI 1.4.3&quot;)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Is this due to a pre-released version's check routine or does
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; something go wrong?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Testing program:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     INCLUDE 'mpif.h'
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     INCLUDE 'dmumps_struc.h'
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     TYPE (DMUMPS_STRUC) MUMPS_PAR
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; c
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     MUMPS_PAR%COMM = MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     MUMPS_PAR%SYM = 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     MUMPS_PAR%PAR = 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     MUMPS_PAR%JOB = -1 ! INITIALIZE MUMPS
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     CALL MPI_INIT(IERR)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     CALL DMUMPS(MUMPS_PAR)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; c
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     CALL MPI_COMM_RANK( MPI_COMM_WORLD, MYID, IERR )
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     IF ( MYID .EQ. 0 ) CALL SLEEP(180) ! WAIT 180 SEC.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; c
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     MUMPS_PAR%JOB = -2 ! FINALIZE MUMPS
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     CALL DMUMPS(MUMPS_PAR)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     CALL MPI_FINALIZE(IERR)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; c
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     END
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ( This does nothing but just calls intialize &amp; finalize
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; routine of MUMPS &amp; MPI)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; command line : mpirun -host node03 -np 16 ./testrun
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (See attached file:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
openmpi17rc1-cmp.bmp)&lt;openmpi17rc1-cmp.bmp&gt;_______________________________________________
<br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20548.php">Ralph Castain: "Re: [OMPI users] ompi-clean on single executable"</a>
<li><strong>Previous message:</strong> <a href="20546.php">Nicolas Deladerriere: "Re: [OMPI users] ompi-clean on single executable"</a>
<li><strong>In reply to:</strong> <a href="20545.php">Ralph Castain: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20566.php">tmishima_at_[hidden]: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
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
