<?
$subject_val = "[OMPI users] System CPU of openmpi-1.7rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 25 20:52:41 2012" -->
<!-- isoreceived="20121026005241" -->
<!-- sent="Fri, 26 Oct 2012 09:53:27 +0900" -->
<!-- isosent="20121026005327" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="[OMPI users] System CPU of openmpi-1.7rc1" -->
<!-- id="OF687E6521.7DCE2876-ON49257AA3.0002EB97-49257AA3.0004D303_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OFE2006067.DFEFAA85-ON49257A9E.00058859-49257A9E.003386FE_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> [OMPI users] System CPU of openmpi-1.7rc1<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20System%20CPU%20of%20openmpi-1.7rc1"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-10-25 20:53:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20543.php">Ralph Castain: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>Previous message:</strong> <a href="20541.php">Georg Ruzicka: "Re: [OMPI users] Java bindings failed to load required libraries"</a>
<li><strong>In reply to:</strong> <a href="20515.php">tmishima_at_[hidden]: "Re: [OMPI users] ptmalloc2 problem with ICC 12.1 and OpenMPI 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20543.php">Ralph Castain: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>Reply:</strong> <a href="20543.php">Ralph Castain: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I find that system CPU time of openmpi-1.7rc1 is quite different with
<br>
that of openmpi-1.6.2 as shown in the attached ganglia display.
<br>
<p>About 2 years ago, I reported a similar behavior of openmpi-1.4.3.
<br>
The testing method is what I used at that time.
<br>
(please see my post entitled &quot;SYSTEM CPU with OpenMPI 1.4.3&quot;)
<br>
<p>Is this due to a pre-released version's check routine or does
<br>
something go wrong?
<br>
<p>Best regards,
<br>
Tetsuya Mishima
<br>
<p>------------------
<br>
Testing program:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INCLUDE 'mpif.h'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INCLUDE 'dmumps_struc.h'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TYPE (DMUMPS_STRUC) MUMPS_PAR
<br>
c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MUMPS_PAR%COMM = MPI_COMM_WORLD
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MUMPS_PAR%SYM = 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MUMPS_PAR%PAR = 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MUMPS_PAR%JOB = -1 ! INITIALIZE MUMPS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_INIT(IERR)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL DMUMPS(MUMPS_PAR)
<br>
c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_COMM_RANK( MPI_COMM_WORLD, MYID, IERR )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF ( MYID .EQ. 0 ) CALL SLEEP(180) ! WAIT 180 SEC.
<br>
c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MUMPS_PAR%JOB = -2 ! FINALIZE MUMPS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL DMUMPS(MUMPS_PAR)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_FINALIZE(IERR)
<br>
c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;END
<br>
( This does nothing but just calls intialize &amp; finalize
<br>
routine of MUMPS &amp; MPI)
<br>
<p>command line : mpirun -host node03 -np 16 ./testrun
<br>
<p>(See attached file: openmpi17rc1-cmp.bmp)
<br>

<br><p>
<p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20542/openmpi17rc1-cmp.bmp">openmpi17rc1-cmp.bmp</a>
</ul>
<!-- attachment="openmpi17rc1-cmp.bmp" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20543.php">Ralph Castain: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>Previous message:</strong> <a href="20541.php">Georg Ruzicka: "Re: [OMPI users] Java bindings failed to load required libraries"</a>
<li><strong>In reply to:</strong> <a href="20515.php">tmishima_at_[hidden]: "Re: [OMPI users] ptmalloc2 problem with ICC 12.1 and OpenMPI 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20543.php">Ralph Castain: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
<li><strong>Reply:</strong> <a href="20543.php">Ralph Castain: "Re: [OMPI users] System CPU of openmpi-1.7rc1"</a>
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
