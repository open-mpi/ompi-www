<?
$subject_val = "[OMPI users] Invalid Info object in MPI_Comm_spawn_multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 11:28:40 2009" -->
<!-- isoreceived="20090817152840" -->
<!-- sent="Mon, 17 Aug 2009 17:28:33 +0200" -->
<!-- isosent="20090817152833" -->
<!-- name="Federico Golfr&#232; Andreasi" -->
<!-- email="federico.golfre_at_[hidden]" -->
<!-- subject="[OMPI users] Invalid Info object in MPI_Comm_spawn_multiple" -->
<!-- id="b88e40560908170828kd7c934fhb34670b792dd4e02_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Invalid Info object in MPI_Comm_spawn_multiple<br>
<strong>From:</strong> Federico Golfr&#232; Andreasi (<em>federico.golfre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-17 11:28:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10387.php">Ralph Castain: "Re: [OMPI users] Invalid Info object in MPI_Comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="10385.php">Eugene Loh: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10387.php">Ralph Castain: "Re: [OMPI users] Invalid Info object in MPI_Comm_spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="10387.php">Ralph Castain: "Re: [OMPI users] Invalid Info object in MPI_Comm_spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="10390.php">Jeff Squyres: "Re: [OMPI users] Invalid Info object in MPI_Comm_spawn_multiple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>I have a little code that uses the MPI_Comm_spawn_multiple,
<br>
I've used it without any problems with the MPICH2 and MVAPICH2
<br>
implementation of MPI-2,
<br>
but with the Open MPI v1.3.3 it throws this error:
<br>
<p>*** An error occurred in MPI_Comm_spawn_multiple
<br>
*** on communicator MPI_COMM_WORLD
<br>
*** MPI_ERR_INFO: invalid info object
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
<p>and I've seen on
<br>
<a href="http://www.mpi-forum.org/docs/mpi21-report-bw/node204.htm#Node204">http://www.mpi-forum.org/docs/mpi21-report-bw/node204.htm#Node204</a>
<br>
that the MPI_Info object keys depend on the implementation.
<br>
<p>Does the OpenMPI have a different implementation in respect of the
<br>
MPICH/MVAPICH?
<br>
What I have to change in order to make it run?
<br>
Or the problem is elsewhere located?
<br>
<p>Thank you very much,
<br>
&nbsp;&nbsp;&nbsp;Federico Golfr&#232; Andreasi
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10386/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10387.php">Ralph Castain: "Re: [OMPI users] Invalid Info object in MPI_Comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="10385.php">Eugene Loh: "Re: [OMPI users] rank file error: Rankfile claimed..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10387.php">Ralph Castain: "Re: [OMPI users] Invalid Info object in MPI_Comm_spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="10387.php">Ralph Castain: "Re: [OMPI users] Invalid Info object in MPI_Comm_spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="10390.php">Jeff Squyres: "Re: [OMPI users] Invalid Info object in MPI_Comm_spawn_multiple"</a>
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
