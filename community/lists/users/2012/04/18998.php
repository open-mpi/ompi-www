<?
$subject_val = "[OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 11 15:03:05 2012" -->
<!-- isoreceived="20120411190305" -->
<!-- sent="Wed, 11 Apr 2012 21:03:00 +0200" -->
<!-- isosent="20120411190300" -->
<!-- name="Peter Sels" -->
<!-- email="sels.peter_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux" -->
<!-- id="CAMY80yh7enKFyWcM_8Sztn95O6twoUEjSG+3so+vXf72LBsSSQ_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux<br>
<strong>From:</strong> Peter Sels (<em>sels.peter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-11 15:03:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18999.php">kidd: "Re: [OMPI users] ompi-restart failed &amp;&amp; ompi-migrate"</a>
<li><strong>Previous message:</strong> <a href="18997.php">Josh Hursey: "Re: [OMPI users] ompi-restart failed &amp;&amp; ompi-migrate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19033.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
<li><strong>Reply:</strong> <a href="19033.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear openMPI users,
<br>
<p>I think this should be an easy question to anyone with more experience
<br>
than an openMPI-hello-world-program...
<br>
<p>I wrote some openMPI code, where the master sends a length and then a
<br>
buffer with that length as 2 subsequent MPI messages.
<br>
The slave is receiving these messages and answers back in a similar manner.
<br>
<p>Sometimes this goes ok, sometimes not.
<br>
Messages of 28 chars or shorter do fine.
<br>
Messages of 29 or longer are usually problematic.
<br>
This length can be controlled with
<br>
#define DUMMY_MSG_LENGTH (40)
<br>
<p><p>On Mac I sometimes get a mentioning of &quot;slave 32767&quot;, where there
<br>
should only be a leave 1.
<br>
Probably a buffer overrun or so, but I cannot see where.
<br>
<p>On linux I get:  Segmentation fault (11)
<br>
<p>Increasing the length gives more problems...
<br>
<p>How can I get this code stable?
<br>
What am I doing wrong?
<br>
Is there a maximum length to MPI messages?
<br>
For sending a string, do I use MPI_CHARACTER or MPI_BYTE or ...?
<br>
<p>How come I cannot assert that my messages end in '\0' when received?
<br>
And how come that when I print them, I also get a segmentation fault?
<br>
<p>Can I send two subsequent messages using MPI_Send, or do I have to do
<br>
the first as MPI_Isend and then do a MPI_Wait before the next
<br>
MPI_Send?...
<br>
<p>Why do I not find code online for receiving the length first and then
<br>
allocating a buffer of this size and then receiving the next message?
<br>
<p>All code, build, run scripts and logs are attached.
<br>
<p>It would help me big time, if you could answer my questions or debug the code.
<br>
<p>thanks a lot!
<br>
<p>Pete
<br>
<p>




<br><hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18998/mpiTest.cpp">mpiTest.cpp</a>
</ul>
<!-- attachment="mpiTest.cpp" -->
<hr>
<ul>
<li>application/x-sh attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18998/build.sh">build.sh</a>
</ul>
<!-- attachment="build.sh" -->
<hr>
<ul>
<li>application/x-sh attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18998/run.sh">run.sh</a>
</ul>
<!-- attachment="run.sh" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18998/mac.log">mac.log</a>
</ul>
<!-- attachment="mac.log" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18998/linux.log">linux.log</a>
</ul>
<!-- attachment="linux.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18999.php">kidd: "Re: [OMPI users] ompi-restart failed &amp;&amp; ompi-migrate"</a>
<li><strong>Previous message:</strong> <a href="18997.php">Josh Hursey: "Re: [OMPI users] ompi-restart failed &amp;&amp; ompi-migrate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19033.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
<li><strong>Reply:</strong> <a href="19033.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
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
