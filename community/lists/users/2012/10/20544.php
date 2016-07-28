<?
$subject_val = "Re: [OMPI users] System CPU of openmpi-1.7rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 25 21:43:04 2012" -->
<!-- isoreceived="20121026014304" -->
<!-- sent="Fri, 26 Oct 2012 10:43:58 +0900" -->
<!-- isosent="20121026014358" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] System CPU of openmpi-1.7rc1" -->
<!-- id="OFB6EDB9CA.4BE68D60-ON49257AA3.0008B9EB-49257AA3.000972DE_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F99192AE-8634-4F0D-88B7-0B6044AB6CB1_at_open-mpi.org" -->
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
<strong>Date:</strong> 2012-10-25 21:43:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20545.php">Ralph Castain: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>Previous message:</strong> <a href="20543.php">Ralph Castain: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>In reply to:</strong> <a href="20543.php">Ralph Castain: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20545.php">Ralph Castain: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>Reply:</strong> <a href="20545.php">Ralph Castain: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>do you really mean &quot;MUMPS finalize&quot;? I don't think it has much relation
<br>
with
<br>
this behavior?
<br>
<p>Anyway, I'm just a mumps user. I have to ask mumps developers about what
<br>
MUMPS
<br>
initailize and finalize does.
<br>
<p>Regartds,
<br>
tmishima
<br>
<p><span class="quotelev1">&gt; Out of curiosity, what does MUMPS finalize do? Does it send a message or
</span><br>
do a barrier operation?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 25, 2012, at 5:53 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I find that system CPU time of openmpi-1.7rc1 is quite different with
</span><br>
<span class="quotelev2">&gt; &gt; that of openmpi-1.6.2 as shown in the attached ganglia display.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; About 2 years ago, I reported a similar behavior of openmpi-1.4.3.
</span><br>
<span class="quotelev2">&gt; &gt; The testing method is what I used at that time.
</span><br>
<span class="quotelev2">&gt; &gt; (please see my post entitled &quot;SYSTEM CPU with OpenMPI 1.4.3&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is this due to a pre-released version's check routine or does
</span><br>
<span class="quotelev2">&gt; &gt; something go wrong?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best regards,
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------
</span><br>
<span class="quotelev2">&gt; &gt; Testing program:
</span><br>
<span class="quotelev2">&gt; &gt;      INCLUDE 'mpif.h'
</span><br>
<span class="quotelev2">&gt; &gt;      INCLUDE 'dmumps_struc.h'
</span><br>
<span class="quotelev2">&gt; &gt;      TYPE (DMUMPS_STRUC) MUMPS_PAR
</span><br>
<span class="quotelev2">&gt; &gt; c
</span><br>
<span class="quotelev2">&gt; &gt;      MUMPS_PAR%COMM = MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt;      MUMPS_PAR%SYM = 1
</span><br>
<span class="quotelev2">&gt; &gt;      MUMPS_PAR%PAR = 1
</span><br>
<span class="quotelev2">&gt; &gt;      MUMPS_PAR%JOB = -1 ! INITIALIZE MUMPS
</span><br>
<span class="quotelev2">&gt; &gt;      CALL MPI_INIT(IERR)
</span><br>
<span class="quotelev2">&gt; &gt;      CALL DMUMPS(MUMPS_PAR)
</span><br>
<span class="quotelev2">&gt; &gt; c
</span><br>
<span class="quotelev2">&gt; &gt;      CALL MPI_COMM_RANK( MPI_COMM_WORLD, MYID, IERR )
</span><br>
<span class="quotelev2">&gt; &gt;      IF ( MYID .EQ. 0 ) CALL SLEEP(180) ! WAIT 180 SEC.
</span><br>
<span class="quotelev2">&gt; &gt; c
</span><br>
<span class="quotelev2">&gt; &gt;      MUMPS_PAR%JOB = -2 ! FINALIZE MUMPS
</span><br>
<span class="quotelev2">&gt; &gt;      CALL DMUMPS(MUMPS_PAR)
</span><br>
<span class="quotelev2">&gt; &gt;      CALL MPI_FINALIZE(IERR)
</span><br>
<span class="quotelev2">&gt; &gt; c
</span><br>
<span class="quotelev2">&gt; &gt;      END
</span><br>
<span class="quotelev2">&gt; &gt; ( This does nothing but just calls intialize &amp; finalize
</span><br>
<span class="quotelev2">&gt; &gt; routine of MUMPS &amp; MPI)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; command line : mpirun -host node03 -np 16 ./testrun
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (See attached file:
</span><br>
openmpi17rc1-cmp.bmp)&lt;openmpi17rc1-cmp.bmp&gt;_______________________________________________
<br>
<p><span class="quotelev2">&gt; &gt; users mailing list
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
<li><strong>Next message:</strong> <a href="20545.php">Ralph Castain: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>Previous message:</strong> <a href="20543.php">Ralph Castain: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>In reply to:</strong> <a href="20543.php">Ralph Castain: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20545.php">Ralph Castain: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>Reply:</strong> <a href="20545.php">Ralph Castain: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
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
