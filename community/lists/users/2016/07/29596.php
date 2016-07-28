<?
$subject_val = "[OMPI users] mpirun has exited due to process rank N";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  7 17:49:06 2016" -->
<!-- isoreceived="20160707214906" -->
<!-- sent="Thu, 7 Jul 2016 21:49:05 +0000" -->
<!-- isosent="20160707214905" -->
<!-- name="Alberti, Andrea" -->
<!-- email="alberti3_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun has exited due to process rank N" -->
<!-- id="650DD2DA2F86254EB3CAEFB7CFE6D7CF5DAEB81D_at_chimbx4.ad.uillinois.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] mpirun has exited due to process rank N<br>
<strong>From:</strong> Alberti, Andrea (<em>alberti3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-07 17:49:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29597.php">Ralph Castain: "Re: [OMPI users] mpirun has exited due to process rank N"</a>
<li><strong>Previous message:</strong> <a href="29595.php">Nathaniel Graham: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29597.php">Ralph Castain: "Re: [OMPI users] mpirun has exited due to process rank N"</a>
<li><strong>Reply:</strong> <a href="29597.php">Ralph Castain: "Re: [OMPI users] mpirun has exited due to process rank N"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>my name is Andrea and I am a new openMPI user.
<br>
<p>I have a code compiled with:
<br>
intel/16.0.3
<br>
openmpi/1.6.5
<br>
<p>--&gt; When I try to run my code with:  mpirun -n N ./code.exe
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a) the code correctly runs and gives results if N&lt;=25
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) the code gives the following error if N&gt;25:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun has exited due to process rank X with PID ...
<br>
<p>--&gt; This seems to be a pretty common problem when not all the processes are initialized or finalized.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;However, I do init and finalize the processors.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;And, moreover, I do not understand why the problem is not there when  N&lt;=25
<br>
<p>Could someone, please, help me out with that or point me to some pages where the same problem is discussed/solved?
<br>
Thank you very much in advance for the help.
<br>
<p>Andrea
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29596/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29597.php">Ralph Castain: "Re: [OMPI users] mpirun has exited due to process rank N"</a>
<li><strong>Previous message:</strong> <a href="29595.php">Nathaniel Graham: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29597.php">Ralph Castain: "Re: [OMPI users] mpirun has exited due to process rank N"</a>
<li><strong>Reply:</strong> <a href="29597.php">Ralph Castain: "Re: [OMPI users] mpirun has exited due to process rank N"</a>
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
