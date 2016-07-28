<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul  5 10:57:47 2006" -->
<!-- isoreceived="20060705145747" -->
<!-- sent="Wed, 05 Jul 2006 16:54:48 +0200" -->
<!-- isosent="20060705145448" -->
<!-- name="Marcin Skoczylas" -->
<!-- email="Marcin.Skoczylas_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Recv, is it possible to switch on/off aggresive mode during runtime?" -->
<!-- id="44ABD2B8.30106_at_lnl.infn.it" -->
<!-- charset="ISO-8859-2" -->
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
<strong>From:</strong> Marcin Skoczylas (<em>Marcin.Skoczylas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-05 10:54:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1551.php">Brian Barrett: "Re: [OMPI users] Datatype bug regression from Open MPI 1.0.2 to	Open MPI 1.1"</a>
<li><strong>Previous message:</strong> <a href="1549.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] open-mpi on MacOS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1580.php">Brian Barrett: "Re: [OMPI users] MPI_Recv, is it possible to switch on/off aggresive mode during runtime?"</a>
<li><strong>Reply:</strong> <a href="1580.php">Brian Barrett: "Re: [OMPI users] MPI_Recv, is it possible to switch on/off aggresive mode during runtime?"</a>
<li><strong>Reply:</strong> <a href="1586.php">Eric Thibodeau: "Re: [OMPI users] MPI_Recv, is it possible to switch on/off aggresive mode during runtime?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear open-mpi users,
<br>
<p>I saw some posts ago almost the same question as I have, but it didn't 
<br>
give me satisfactional answer.
<br>
I have setup like this:
<br>
<p>GUI program on some machine (f.e. laptop)
<br>
Head listening on tcpip socket for commands from GUI.
<br>
Workers waiting for commands from Head / processing the data.
<br>
<p>And now it's problematic. For passing the commands from Head I'm using:
<br>
while(true)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv...
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;do whatever head said (process small portion of the data, return 
<br>
result to head, wait for another commands)
<br>
}
<br>
<p>So in the idle time workers are stuck in MPI_Recv and have 100% CPU 
<br>
usage, even if they are just waiting for the commands from Head. 
<br>
Normally, I would not prefer to have this situation as I sometimes have 
<br>
to share the cluster with others. I would prefer not to stop whole mpi 
<br>
program, but just go into 'idle' mode, and thus make it run again soon. 
<br>
Also I would like to have this aggresive MPI_Recv approach switched on 
<br>
when I'm alone on the cluster. So is it possible somehow to switch this 
<br>
mode on/off during runtime? Thank you in advance!
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;greetings, Marcin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1551.php">Brian Barrett: "Re: [OMPI users] Datatype bug regression from Open MPI 1.0.2 to	Open MPI 1.1"</a>
<li><strong>Previous message:</strong> <a href="1549.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] open-mpi on MacOS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1580.php">Brian Barrett: "Re: [OMPI users] MPI_Recv, is it possible to switch on/off aggresive mode during runtime?"</a>
<li><strong>Reply:</strong> <a href="1580.php">Brian Barrett: "Re: [OMPI users] MPI_Recv, is it possible to switch on/off aggresive mode during runtime?"</a>
<li><strong>Reply:</strong> <a href="1586.php">Eric Thibodeau: "Re: [OMPI users] MPI_Recv, is it possible to switch on/off aggresive mode during runtime?"</a>
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
