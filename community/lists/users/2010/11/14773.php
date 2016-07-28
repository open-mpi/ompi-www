<?
$subject_val = "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 15 19:35:45 2010" -->
<!-- isoreceived="20101116003545" -->
<!-- sent="Tue, 16 Nov 2010 09:35:35 +0900" -->
<!-- isosent="20101116003535" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3" -->
<!-- id="OF3A33D3B6.FC717240-ON492577DD.000075A9-492577DD.0003440D_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B84A763A-7C70-4BF1-9C39-9AAF9DCAD4C7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20SYSTEM%20CPU%20with%20OpenMPI%201.4.3"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-11-15 19:35:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14774.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14772.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14745.php">Jeff Squyres: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14823.php">tmishima_at_[hidden]: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
<li><strong>Reply:</strong> <a href="14823.php">tmishima_at_[hidden]: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;I did the test with the simple program as shown below.
<br>
&nbsp;&nbsp;(I use mumps, which is a parallel linear solver.)
<br>
<p>&nbsp;This test program does nothing but just calls intialize &amp;
<br>
&nbsp;finalize routine of MUMPS &amp; MPI.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INCLUDE 'mpif.h'
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MUMPS_PAR%JOB = -1     ! INITIALIZE MUMPS
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MUMPS_PAR%JOB = -2     ! FINALIZE MUMPS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL DMUMPS(MUMPS_PAR)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_FINALIZE(IERR)
<br>
c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;END
<br>
<p>command line : mpirun -host node06,node05 -np 16 ./testrun
<br>
<p>Results:
<br>
<p>&nbsp;User &amp; System CPUs are quite different between two versions.
<br>
&nbsp;Waiting processes are counted as USER CPU in openmpi 1.4.2,
<br>
&nbsp;while they are counted as USER &amp; SYSTEM CPU in openmpi 1.4.3.
<br>
&nbsp;Something in the MUMPS intialize routine might affect SYSTEM CPU.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node06 CPU  | node05 CPU
<br>
openmpi   usr sys idl | usr sys idl
<br>
1.4.2      88   0  12 | 100   0   0
<br>
1.4.3      41  47  12 |  44  56   0
<br>
<p>* process id of node06:  0-07
<br>
&nbsp;&nbsp;process id of node05: 08-15
<br>
&nbsp;&nbsp;( total 16 process )
<br>
<p>* see attacehd file which is a snap shot of GANGLIA.
<br>
<p>(See attached file: openmpi143.JPG)
<br>

<br><p>
<p><hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14773/openmpi143.JPG" alt="openmpi143.JPG">
<!-- attachment="openmpi143.JPG" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14774.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14772.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14745.php">Jeff Squyres: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14823.php">tmishima_at_[hidden]: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
<li><strong>Reply:</strong> <a href="14823.php">tmishima_at_[hidden]: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
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
