<?
$subject_val = "[OMPI users] Problem with repeatedly spawning a few processes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 26 17:40:47 2009" -->
<!-- isoreceived="20090826214047" -->
<!-- sent="Wed, 26 Aug 2009 17:40:43 -0400" -->
<!-- isosent="20090826214043" -->
<!-- name="Tim Miller" -->
<!-- email="btamiller_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with repeatedly spawning a few processes" -->
<!-- id="3cc760c90908261440w772f5f97ie1164247f57dba3b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem with repeatedly spawning a few processes<br>
<strong>From:</strong> Tim Miller (<em>btamiller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-26 17:40:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10494.php">Ralph Castain: "Re: [OMPI users] Problem with repeatedly spawning a few processes"</a>
<li><strong>Previous message:</strong> <a href="10492.php">Scott Atchley: "Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10494.php">Ralph Castain: "Re: [OMPI users] Problem with repeatedly spawning a few processes"</a>
<li><strong>Reply:</strong> <a href="10494.php">Ralph Castain: "Re: [OMPI users] Problem with repeatedly spawning a few processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Everyone,
<br>
<p>I have a problem that I can't seem to figure out from searching the mailing
<br>
list archive. I have a code that repeatedly spawns (via MPI_COMM_SPAWN) a
<br>
group of 8 processes and then waits for them to finish. The problem is that
<br>
OpenMPI (I've tried 1.3.1 and 1.3.3) opens a pipe each time MPI_COMM_SPAWN
<br>
is called, but this pipe never gets closed (even if I call MPI_COMM_FREE on
<br>
both the parent and child). Therefore, eventually my master process hits the
<br>
limit of open file descriptors and cannot spawn any more. I cannot figure
<br>
out why this is happening since I am only spawning 8 jobs at a time.
<br>
<p>I should note that I don't exchange any data over the child
<br>
intercommunicators -- they exist solely so I can call MPI_BARRIER on them
<br>
(the spawned processes are programed to call MPI_BARRIER directly before
<br>
they call MPI_FINALIZE, thus indicating that they are done doing their
<br>
work).
<br>
<p>I'd appreciate any suggestions as to what I might be doing wrong with this
<br>
that is causing OpenMPI to hold the pipes open.
<br>
<p>Thanks,
<br>
Tim M.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10493/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10494.php">Ralph Castain: "Re: [OMPI users] Problem with repeatedly spawning a few processes"</a>
<li><strong>Previous message:</strong> <a href="10492.php">Scott Atchley: "Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10494.php">Ralph Castain: "Re: [OMPI users] Problem with repeatedly spawning a few processes"</a>
<li><strong>Reply:</strong> <a href="10494.php">Ralph Castain: "Re: [OMPI users] Problem with repeatedly spawning a few processes"</a>
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
