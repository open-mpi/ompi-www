<?
$subject_val = "Re: [OMPI users] Question on suspending/resuming MPI processes with SIGSTOP";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 11 15:23:59 2014" -->
<!-- isoreceived="20140411192359" -->
<!-- sent="Fri, 11 Apr 2014 21:23:55 +0200" -->
<!-- isosent="20140411192355" -->
<!-- name="Frank Wein" -->
<!-- email="mcsmurf_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on suspending/resuming MPI processes with SIGSTOP" -->
<!-- id="5348414B.6010405_at_mcsmurf.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="53483F70.60002_at_mcsmurf.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question on suspending/resuming MPI processes with SIGSTOP<br>
<strong>From:</strong> Frank Wein (<em>mcsmurf_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-11 15:23:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24162.php">Ralph Castain: "Re: [OMPI users] Question on suspending/resuming MPI processes with SIGSTOP"</a>
<li><strong>Previous message:</strong> <a href="24160.php">Frank Wein: "[OMPI users] Question on suspending/resuming MPI processes with SIGSTOP"</a>
<li><strong>In reply to:</strong> <a href="24160.php">Frank Wein: "[OMPI users] Question on suspending/resuming MPI processes with SIGSTOP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24162.php">Ralph Castain: "Re: [OMPI users] Question on suspending/resuming MPI processes with SIGSTOP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Frank Wein wrote:
<br>
[...]
<br>
<p>Or basically my question could also be rephrased as: Is there a barrier
<br>
mechanism I could use in OMPI that causes basically very few to no CPU
<br>
usage (with higher latency then)? Intel MPI for example seems to have
<br>
the env var &quot;I_MPI_WAIT_MODE=1&quot; which uses some wait mechanism instead
<br>
of polling for a barrier. My idea for OMPI was to use SIGSTOP/SIGCONT in
<br>
combination with MPI_Barrier, but I'm open for other suggestions as well
<br>
if those work better (or at all).
<br>
<p>Frank
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24162.php">Ralph Castain: "Re: [OMPI users] Question on suspending/resuming MPI processes with SIGSTOP"</a>
<li><strong>Previous message:</strong> <a href="24160.php">Frank Wein: "[OMPI users] Question on suspending/resuming MPI processes with SIGSTOP"</a>
<li><strong>In reply to:</strong> <a href="24160.php">Frank Wein: "[OMPI users] Question on suspending/resuming MPI processes with SIGSTOP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24162.php">Ralph Castain: "Re: [OMPI users] Question on suspending/resuming MPI processes with SIGSTOP"</a>
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
