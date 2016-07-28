<?
$subject_val = "[OMPI users] dual cores";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 10 00:05:54 2008" -->
<!-- isoreceived="20081110050554" -->
<!-- sent="Sun, 9 Nov 2008 23:05:50 -0600" -->
<!-- isosent="20081110050550" -->
<!-- name="Hodgess, Erin" -->
<!-- email="HodgessE_at_[hidden]" -->
<!-- subject="[OMPI users] dual cores" -->
<!-- id="70A5AC06FDB5E54482D19E1C04CDFCF303F74EC2_at_BALI.uhd.campus" -->
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
<strong>Subject:</strong> [OMPI users] dual cores<br>
<strong>From:</strong> Hodgess, Erin (<em>HodgessE_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-10 00:05:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7248.php">Raymond Wan: "Re: [OMPI users] dual cores"</a>
<li><strong>Previous message:</strong> <a href="7246.php">Raymond Wan: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7248.php">Raymond Wan: "Re: [OMPI users] dual cores"</a>
<li><strong>Reply:</strong> <a href="7248.php">Raymond Wan: "Re: [OMPI users] dual cores"</a>
<li><strong>Reply:</strong> <a href="7250.php">Brock Palen: "Re: [OMPI users] dual cores"</a>
<li><strong>Reply:</strong> <a href="7268.php">Fabian Hänsel: "Re: [OMPI users] dual cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI gurus:
<br>
<p>I have just installed Open MPI this evening.
<br>
<p>I have a dual core laptop and I would like to have both cores running.
<br>
<p>Here is the following my-hosts file:
<br>
localhost slots=2
<br>
<p>and here is the command and output:
<br>
&nbsp;mpirun --hostfile my-hosts -np 4 --byslot hello_c |sort
<br>
Hello, world, I am 0 of 4
<br>
Hello, world, I am 1 of 4
<br>
Hello, world, I am 2 of 4
<br>
Hello, world, I am 3 of 4
<br>
hodgesse_at_erinstoy:~/Desktop/openmpi-1.2.8/examples&gt; 
<br>
<p><p>How do I know if both cores are running, please?
<br>
<p>thanks,
<br>
Erin
<br>
<p><p>Erin M. Hodgess, PhD
<br>
Associate Professor
<br>
Department of Computer and Mathematical Sciences
<br>
University of Houston - Downtown
<br>
mailto: hodgesse_at_[hidden]
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7247/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7248.php">Raymond Wan: "Re: [OMPI users] dual cores"</a>
<li><strong>Previous message:</strong> <a href="7246.php">Raymond Wan: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7248.php">Raymond Wan: "Re: [OMPI users] dual cores"</a>
<li><strong>Reply:</strong> <a href="7248.php">Raymond Wan: "Re: [OMPI users] dual cores"</a>
<li><strong>Reply:</strong> <a href="7250.php">Brock Palen: "Re: [OMPI users] dual cores"</a>
<li><strong>Reply:</strong> <a href="7268.php">Fabian Hänsel: "Re: [OMPI users] dual cores"</a>
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
