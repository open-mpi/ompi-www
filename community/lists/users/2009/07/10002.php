<?
$subject_val = "[OMPI users] Possibile OpenMPI bug";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 17 05:32:58 2009" -->
<!-- isoreceived="20090717093258" -->
<!-- sent="Fri, 17 Jul 2009 11:32:53 +0200" -->
<!-- isosent="20090717093253" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="[OMPI users] Possibile OpenMPI bug" -->
<!-- id="3a37617f0907170232p5d9c908cj337c1a170e8155ea_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Possibile OpenMPI bug<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-17 05:32:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10003.php">Steven Dale: "Re: [OMPI users] Possible openmpi bug?"</a>
<li><strong>Previous message:</strong> <a href="10001.php">Prasadcse Perera: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPi developers,
<br>
i'm writing you about a possibile bug in OpenMPi 1.3.2 I'm running
<br>
under LSF and Infiniband net. When i launch a job, sometimes i have
<br>
the follow error:
<br>
<p>Jul 17 10:10:54 2009 10653 4 7.02 handleTSRegisterStart: unwanted task
<br>
registration. PAM expected 3 tasks on host&lt;node0724&gt;. This is task 4
<br>
on this host. Total number of expected tasks for this job is 255. This
<br>
is task 161 in total. Shutting down ...
<br>
Jul 17 10:10:55 2009 10653 3 7.02 handleTSRegisterTerm: cannot find
<br>
pid 16029 on host node0724 in node table
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 1 with PID 25266 on
<br>
node node0724 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
<p>It sounds like a different procs number read by LSF and OpenMPI.  I
<br>
have launched 255 procs and there are 161 task.. very very strange.
<br>
Any idea?
<br>
Thanks in advance.
<br>
<p><pre>
-- 
Ing. Gabriele Fatigati
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10003.php">Steven Dale: "Re: [OMPI users] Possible openmpi bug?"</a>
<li><strong>Previous message:</strong> <a href="10001.php">Prasadcse Perera: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<!-- nextthread="start" -->
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
