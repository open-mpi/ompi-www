<?
$subject_val = "[OMPI users] Handling output of processes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 22 03:58:28 2009" -->
<!-- isoreceived="20090122085828" -->
<!-- sent="Thu, 22 Jan 2009 09:58:22 +0100" -->
<!-- isosent="20090122085822" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="[OMPI users] Handling output of processes" -->
<!-- id="9b0da5ce0901220058n6e534224i78a6daf6b0afc209_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Handling output of processes<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-22 03:58:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7758.php">Geoffroy Pignot: "[OMPI users] 1.3 hangs running 2 exes with different names"</a>
<li><strong>Previous message:</strong> <a href="7756.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7759.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7759.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7806.php">Gijsbert Wiesenekker: "Re: [OMPI users] Handling output of processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
I have a small cluster consisting of 9 computers (8x2 CPUs, 1x4 CPUs).
<br>
I would like to be able to observe the output of the processes
<br>
separately during an mpirun.
<br>
<p>What i currently do is to apply the mpirun to a shell script which
<br>
opens a xterm for each process,
<br>
which then starts the actual application.
<br>
<p>This works, but is a bit complicated, e.g. finding the window you're
<br>
interested in among 19 others.
<br>
<p>So i was wondering is there a possibility to capture the processes'
<br>
outputs separately, so
<br>
i can make an application in which i can switch between the different
<br>
processor outputs?
<br>
I could imagine that could be done by wrapper applications which
<br>
redirect the output over a TCP
<br>
socket to a server application.
<br>
<p>But perhaps there is an easier way, or something like this alread does exist?
<br>
<p>Thank You
<br>
&nbsp;&nbsp;Jody
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7758.php">Geoffroy Pignot: "[OMPI users] 1.3 hangs running 2 exes with different names"</a>
<li><strong>Previous message:</strong> <a href="7756.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7759.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7759.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Reply:</strong> <a href="7806.php">Gijsbert Wiesenekker: "Re: [OMPI users] Handling output of processes"</a>
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
