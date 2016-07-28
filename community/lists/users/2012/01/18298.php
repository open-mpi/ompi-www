<?
$subject_val = "[OMPI users] MPI_Barrier, again";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 27 10:45:24 2012" -->
<!-- isoreceived="20120127154524" -->
<!-- sent="Fri, 27 Jan 2012 15:45:19 +0000" -->
<!-- isosent="20120127154519" -->
<!-- name="Evgeniy Shapiro" -->
<!-- email="shellinux_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Barrier, again" -->
<!-- id="CAKaC6EweorUj2qObA8-mUiSuSJyioLaxE0mY-hG1rrYurAPQag_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Barrier, again<br>
<strong>From:</strong> Evgeniy Shapiro (<em>shellinux_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-27 10:45:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18299.php">Prentice Bisbal: "Re: [OMPI users] OpenMPI: How many connections?"</a>
<li><strong>Previous message:</strong> <a href="18297.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18312.php">Jeff Squyres: "Re: [OMPI users] MPI_Barrier, again"</a>
<li><strong>Reply:</strong> <a href="18312.php">Jeff Squyres: "Re: [OMPI users] MPI_Barrier, again"</a>
<li><strong>Maybe reply:</strong> <a href="18314.php">Evgeniy Shapiro: "Re: [OMPI users] MPI_Barrier, again"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18470.php">Evgeniy Shapiro: "Re: [OMPI users] MPI_Barrier, again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I have a strange problem with MPI_Barrier occurring when writing to a
<br>
file. The output subroutine (the code is in FORTRAN) is called from
<br>
the main program and there is an MPI_Barrier just before the call.
<br>
<p>In the subroutine
<br>
<p>1. Process 0 checks whether the first file exists and, if not, -
<br>
creates the file 1, writes the file header and closes the file
<br>
<p>2. there is a loop over the data sets with an embedded barrier
<br>
&nbsp;&nbsp;do i=0, iDatasets
<br>
&nbsp;&nbsp;&nbsp;call MPI_Barrier
<br>
&nbsp;&nbsp;&nbsp;if I do not own data - cycle and go to the next dataset (and barrier)
<br>
&nbsp;&nbsp;&nbsp;check if the file exists, if not - sleep and check again until it
<br>
does (needed to make sure the buffer has been flushed)
<br>
&nbsp;&nbsp;&nbsp;write my portion of the file
<br>
&nbsp;&nbsp;end do
<br>
&nbsp;in theory the above should result in a sequential write of datasets
<br>
to the file.
<br>
<p>3. Process 0 checks whether the second file exists and, if not, -
<br>
creates the file 2, writes the file header and closes the file
<br>
<p>2. there is a loop over the data sets with an embedded barrier
<br>
&nbsp;&nbsp;do i=0, iDatasets
<br>
&nbsp;&nbsp;&nbsp;call MPI_Barrier
<br>
&nbsp;&nbsp;&nbsp;if I do not own data - cycle and go to the next dataset (and barrier)
<br>
&nbsp;&nbsp;&nbsp;check if the file exists, if not - sleep and check again until it
<br>
does (needed to make sure the buffer has been flushed)
<br>
&nbsp;&nbsp;&nbsp;write my portion of the file including a link to the 1st file
<br>
&nbsp;&nbsp;end do
<br>
<p>The sub is called several times (different files/datasets) with a
<br>
barrier between calls, erratically the program hangs in one of the
<br>
calls. The likelihood of the program hanging increases with the
<br>
increase of the number of processes.  DDT shows that when this happens
<br>
some of the processes including 0 are waiting at barrier inside the
<br>
first loop, some - at the second barrier and one whereas one  process
<br>
is in the sleep/check file status cycle in the second loop. So somehow
<br>
&nbsp;a part of  processes go through the 1st barrier before process 0.
<br>
This is a debug version, so no loop unrolling etc.
<br>
<p>Is there anything I can do to make sure that the first barrier is
<br>
observed by all processes? Any advice greatly appreciated.
<br>
<p>Evgeniy
<br>
<p><p>OpenMPI: 1.4.3
<br>
(I cannot use parallel mpi io in this situation for various reasons)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18299.php">Prentice Bisbal: "Re: [OMPI users] OpenMPI: How many connections?"</a>
<li><strong>Previous message:</strong> <a href="18297.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18312.php">Jeff Squyres: "Re: [OMPI users] MPI_Barrier, again"</a>
<li><strong>Reply:</strong> <a href="18312.php">Jeff Squyres: "Re: [OMPI users] MPI_Barrier, again"</a>
<li><strong>Maybe reply:</strong> <a href="18314.php">Evgeniy Shapiro: "Re: [OMPI users] MPI_Barrier, again"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18470.php">Evgeniy Shapiro: "Re: [OMPI users] MPI_Barrier, again"</a>
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
