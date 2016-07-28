<?
$subject_val = "[OMPI users] valgrind slaves in singleton mode";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 16 16:59:06 2012" -->
<!-- isoreceived="20121116215906" -->
<!-- sent="Fri, 16 Nov 2012 13:59:01 -0800" -->
<!-- isosent="20121116215901" -->
<!-- name="Brian Budge" -->
<!-- email="brian.budge_at_[hidden]" -->
<!-- subject="[OMPI users] valgrind slaves in singleton mode" -->
<!-- id="CANjXV69yoXBSbuaXTpyyGY8jHhc4WvUFpFriPa_MzJ8rcgZO7A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] valgrind slaves in singleton mode<br>
<strong>From:</strong> Brian Budge (<em>brian.budge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-16 16:59:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20729.php">Tom Bryan (tombry): "Re: [OMPI users] valgrind slaves in singleton mode"</a>
<li><strong>Previous message:</strong> <a href="20727.php">Iliev, Hristo: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20729.php">Tom Bryan (tombry): "Re: [OMPI users] valgrind slaves in singleton mode"</a>
<li><strong>Reply:</strong> <a href="20729.php">Tom Bryan (tombry): "Re: [OMPI users] valgrind slaves in singleton mode"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>I'm using openmpi to spawn child processes in singleton mode. If I use
<br>
mpirun, I can just run
<br>
<span class="quotelev1">&gt; mpirun valgrind myprog
</span><br>
<p>With spawn, it is expected that the spawned process will call
<br>
mpi_init(_thread).   If I want to run valgrind on my processes, what steps
<br>
should be taken?  I'm currently more interested in running valgrind on the
<br>
slave processes.
<br>
<p>Thanks for suggestions.
<br>
<p>&nbsp;&nbsp;Brian
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20728/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20729.php">Tom Bryan (tombry): "Re: [OMPI users] valgrind slaves in singleton mode"</a>
<li><strong>Previous message:</strong> <a href="20727.php">Iliev, Hristo: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20729.php">Tom Bryan (tombry): "Re: [OMPI users] valgrind slaves in singleton mode"</a>
<li><strong>Reply:</strong> <a href="20729.php">Tom Bryan (tombry): "Re: [OMPI users] valgrind slaves in singleton mode"</a>
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
