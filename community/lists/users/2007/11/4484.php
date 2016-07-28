<?
$subject_val = "[OMPI users] MPI daemons suspend running job";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 15 15:21:33 2007" -->
<!-- isoreceived="20071115202133" -->
<!-- sent="Thu, 15 Nov 2007 21:21:29 +0100" -->
<!-- isosent="20071115202129" -->
<!-- name="Murat Knecht" -->
<!-- email="murat.knecht_at_[hidden]" -->
<!-- subject="[OMPI users] MPI daemons suspend running job" -->
<!-- id="473CAA49.3040803_at_student.hpi.uni-potsdam.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI users] MPI daemons suspend running job<br>
<strong>From:</strong> Murat Knecht (<em>murat.knecht_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-15 15:21:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4485.php">Aurelien Bouteiller: "Re: [OMPI users] Tmpdir work for first process only"</a>
<li><strong>Previous message:</strong> <a href="4483.php">Pak Lui: "Re: [OMPI users] Error on running large number of processes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I am encountering the problem that a working child process is frozen in
<br>
the middle of its work, and continues only when its parent process (
<br>
which spawned it earlier on ) calls some MPI function.
<br>
The issue here is, that in order to accept client socket communication
<br>
the parent process is, at the same time, performing a select() on a
<br>
server socket. It expects the child to finish its work, which will be
<br>
collected and processed at a later date. This now cannot happen as the
<br>
child does not continue until the parent process calls Recv(), Probe()
<br>
or sends something itself.
<br>
Is there the possibility that some mpi daemon freezes the child process
<br>
if its parent process goes to &quot;sleep&quot; while listening to a socket? If
<br>
so, how can I avoid it? These are independent processes and even though
<br>
interlinked should not influence each other in this way.
<br>
Regards,
<br>
Murat
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4485.php">Aurelien Bouteiller: "Re: [OMPI users] Tmpdir work for first process only"</a>
<li><strong>Previous message:</strong> <a href="4483.php">Pak Lui: "Re: [OMPI users] Error on running large number of processes"</a>
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
