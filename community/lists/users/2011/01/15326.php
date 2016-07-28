<?
$subject_val = "[OMPI users] MPI_Comm_Spawn intercommunication";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  7 18:22:20 2011" -->
<!-- isoreceived="20110107232220" -->
<!-- sent="Sat, 8 Jan 2011 00:22:16 +0100" -->
<!-- isosent="20110107232216" -->
<!-- name="Pierre Chanial" -->
<!-- email="pierre.chanial_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Comm_Spawn intercommunication" -->
<!-- id="AANLkTi=QnCHiLxs8rcYp7C+KEV+0oWVetqYFq8ZXi6gy_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Comm_Spawn intercommunication<br>
<strong>From:</strong> Pierre Chanial (<em>pierre.chanial_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-07 18:22:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15327.php">Hicham Mouline: "[OMPI users] mixing send and bcast"</a>
<li><strong>Previous message:</strong> <a href="15325.php">Eugene Loh: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15398.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_Spawn intercommunication"</a>
<li><strong>Reply:</strong> <a href="15398.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_Spawn intercommunication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>When I run this code:
<br>
<p>program testcase
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;use mpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;integer :: rank, lsize, rsize, code
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer :: intercomm
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;call MPI_INIT(code)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_GET_PARENT(intercomm, code)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (intercomm == MPI_COMM_NULL) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_SPAWN (&quot;./testcase&quot;, MPI_ARGV_NULL, 1, MPI_INFO_NULL,
<br>
&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0, MPI_COMM_WORLD, intercomm, MPI_ERRCODES_IGNORE, code)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_RANK(MPI_COMM_WORLD, rank, code)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_SIZE(MPI_COMM_WORLD, lsize, code)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_SIZE(intercomm, rsize, code)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank == 0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print *, 'from parent: local size is ', lsize
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print *, 'from parent: remote size is ', rsize
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end if
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_SIZE(MPI_COMM_WORLD, lsize, code)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_SIZE(intercomm, rsize, code)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print *, 'from child: local size is ', lsize
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print *, 'from child: remote size is ', rsize
<br>
&nbsp;&nbsp;&nbsp;&nbsp;end if
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FINALIZE (code)
<br>
<p>end program testcase
<br>
<p>I get the following results with openmpi 1.4.1 and two processes:
<br>
&nbsp;from parent: local size is
<br>
2
<br>
<p>&nbsp;from parent: remote size is
<br>
2
<br>
<p>&nbsp;from child: local size is
<br>
1
<br>
<p>&nbsp;from child: remote size is
<br>
1
<br>
<p><p>I would have expected:
<br>
&nbsp;from parent: local size is
<br>
2
<br>
<p>&nbsp;from parent: remote size is            1
<br>
<p><p>&nbsp;from child: local size is
<br>
1
<br>
<p>&nbsp;from child: remote size is            2
<br>
<p><p><p>Could anyone tell me what's going on ? It's not a fortran issue, I can also
<br>
replicate it using mpi4py.
<br>
Probably related to the universe size: I haven't found a way to hand it to
<br>
mpirun.
<br>
<p>Cheers,
<br>
Pierre
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15326/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15327.php">Hicham Mouline: "[OMPI users] mixing send and bcast"</a>
<li><strong>Previous message:</strong> <a href="15325.php">Eugene Loh: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15398.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_Spawn intercommunication"</a>
<li><strong>Reply:</strong> <a href="15398.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_Spawn intercommunication"</a>
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
