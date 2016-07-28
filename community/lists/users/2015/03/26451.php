<?
$subject_val = "[OMPI users] mpirun crashes randomly on prolonged run of calculation on Amber 10";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 11 01:36:28 2015" -->
<!-- isoreceived="20150311053628" -->
<!-- sent="Wed, 11 Mar 2015 05:36:27 +0000 (UTC)" -->
<!-- isosent="20150311053627" -->
<!-- name="Saad Raza" -->
<!-- email="saadr_128_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun crashes randomly on prolonged run of calculation on Amber 10" -->
<!-- id="375123970.3393918.1426052187511.JavaMail.yahoo_at_mail.yahoo.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] mpirun crashes randomly on prolonged run of calculation on Amber 10<br>
<strong>From:</strong> Saad Raza (<em>saadr_128_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-11 01:36:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26452.php">Joshua Ladd: "Re: [OMPI users] disappearance of the memory registration error in 1.8.x?"</a>
<li><strong>Previous message:</strong> <a href="26450.php">Khalid Hasanov: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26453.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun crashes randomly on prolonged run of	calculation on Amber 10"</a>
<li><strong>Reply:</strong> <a href="26453.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun crashes randomly on prolonged run of	calculation on Amber 10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
I do not know whether I should ask this on openmpi forum or Amber forum but mpirun seems to crash randomly when they are subjected to long calculation. I have build openmpi from openmpi-1.6.2. I have used the following commands for configuring and installation:
<br>
./configure --prefix=/usr/lib64/mpi/gcc/openmpi --exec-prefix=/usr/lib64/mpi/gcc/openmpi
<br>
make all install
<br>
<p>Some calculations run completely fine but some of them crash randomly with the following type of error. 
<br>
<p>&nbsp;--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 3 with PID 5028 on node drsikandarserver exited on signal 1 (Hangup).
<br>
--------------------------------------------------------------------------
<br>
I am using nohup before the mpirun command. The general structure of the command is 
<br>
<p>nohup mpirun -np 8 sander.MPI ....
<br>
RegardsSaad Raza
<br>
<p><p>&#194;&#160;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26451/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26452.php">Joshua Ladd: "Re: [OMPI users] disappearance of the memory registration error in 1.8.x?"</a>
<li><strong>Previous message:</strong> <a href="26450.php">Khalid Hasanov: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26453.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun crashes randomly on prolonged run of	calculation on Amber 10"</a>
<li><strong>Reply:</strong> <a href="26453.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun crashes randomly on prolonged run of	calculation on Amber 10"</a>
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
