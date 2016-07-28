<?
$subject_val = "[OMPI users] profile the performance of a MPI code: how much traffic is being generated?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 02:16:15 2009" -->
<!-- isoreceived="20090929061615" -->
<!-- sent="Tue, 29 Sep 2009 01:16:10 -0500" -->
<!-- isosent="20090929061610" -->
<!-- name="Rahul Nabar" -->
<!-- email="rpnabar_at_[hidden]" -->
<!-- subject="[OMPI users] profile the performance of a MPI code: how much traffic is being generated?" -->
<!-- id="c4d69730909282316y53eee9day697e5b0910a98be8_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] profile the performance of a MPI code: how much traffic is being generated?<br>
<strong>From:</strong> Rahul Nabar (<em>rpnabar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-29 02:16:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10809.php">Matthieu Brucher: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>Previous message:</strong> <a href="10807.php">Aniruddha Marathe: "Re: [OMPI users] Debugging OpenMPI calls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10809.php">Matthieu Brucher: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>Reply:</strong> <a href="10809.php">Matthieu Brucher: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>Maybe reply:</strong> <a href="10818.php">Samuel K. Gutierrez: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a code that seems to run about 40% faster when I bond together
<br>
twin eth interfaces. The question, of course, arises: is it really
<br>
producing so much traffic to keep twin 1 Gig eth interfaces busy? I
<br>
don't really believe this but need a way to check.
<br>
<p>What are good tools to monitior the MPI performance of a running job.
<br>
Basically what throughput loads is it imposing on the eth interfaces.
<br>
Any suggestions?
<br>
<p>The code does not seem to produce much of disk I/O as profiled via
<br>
strace (if at all NFS I/O is a bottleneck).
<br>
<p><pre>
-- 
Rahul
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10809.php">Matthieu Brucher: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>Previous message:</strong> <a href="10807.php">Aniruddha Marathe: "Re: [OMPI users] Debugging OpenMPI calls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10809.php">Matthieu Brucher: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>Reply:</strong> <a href="10809.php">Matthieu Brucher: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>Maybe reply:</strong> <a href="10818.php">Samuel K. Gutierrez: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
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
