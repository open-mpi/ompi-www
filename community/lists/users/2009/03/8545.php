<?
$subject_val = "[OMPI users] mpirun/exec requires ssh?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 23 13:24:04 2009" -->
<!-- isoreceived="20090323172404" -->
<!-- sent="Mon, 23 Mar 2009 18:23:56 +0100" -->
<!-- isosent="20090323172356" -->
<!-- name="Olaf Lenz" -->
<!-- email="lenzo_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun/exec requires ssh?" -->
<!-- id="49C7C5AC.8020309_at_mpip-mainz.mpg.de" -->
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
<strong>Subject:</strong> [OMPI users] mpirun/exec requires ssh?<br>
<strong>From:</strong> Olaf Lenz (<em>lenzo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-23 13:23:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8546.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>Previous message:</strong> <a href="8544.php">Shanyuan Gao: "[OMPI users] Does OpenMPI's MPI_Barrier automatically call the tuned version?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8546.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>Reply:</strong> <a href="8546.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello!
<br>
<p>I've tried to find anything on this on the mailings list or anywhere 
<br>
else, but I wasn't able to.
<br>
<p>In OpenMPI 1.2.x, I was able to simply run
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpiexec -n 2 hostname
<br>
<p>on my Dual core machine without any problems. All MPI tasks inherited 
<br>
the environment of the calling shell, and no SSH was used whatsoever.
<br>
<p>Now, using OpenMPI 1.3.1, it seems to try to use ssh to start the 
<br>
processes, which on the one hand requires me to enter the 
<br>
password/passphrase, and furthermore destroys the environment. This make 
<br>
it much less convenient to use OpenMPI on Multicore machines, compared 
<br>
to 1.2.x.
<br>
<p>What's the reason for this change in behavior? And is there a way to get 
<br>
back to the old behavior?
<br>
<p>Best regards
<br>
Olaf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8546.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>Previous message:</strong> <a href="8544.php">Shanyuan Gao: "[OMPI users] Does OpenMPI's MPI_Barrier automatically call the tuned version?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8546.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>Reply:</strong> <a href="8546.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
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
