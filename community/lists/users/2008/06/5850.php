<?
$subject_val = "[OMPI users] mpirun (orte ?) not shutting down cleanly on job aborts";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  9 10:50:13 2008" -->
<!-- isoreceived="20080609145013" -->
<!-- sent="Mon, 9 Jun 2008 07:50:01 -0700 (PDT)" -->
<!-- isosent="20080609145001" -->
<!-- name="Bill Johnstone" -->
<!-- email="beejstone3_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun (orte ?) not shutting down cleanly on job aborts" -->
<!-- id="865886.81138.qm_at_web57608.mail.re1.yahoo.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] mpirun (orte ?) not shutting down cleanly on job aborts<br>
<strong>From:</strong> Bill Johnstone (<em>beejstone3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-09 10:50:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5851.php">Doug Reeder: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<li><strong>Previous message:</strong> <a href="5849.php">Ashley Pittman: "[OMPI users] Different CC for orte and opmi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5958.php">Jeff Squyres: "Re: [OMPI users] mpirun (orte ?) not shutting down cleanly on job aborts"</a>
<li><strong>Reply:</strong> <a href="5958.php">Jeff Squyres: "Re: [OMPI users] mpirun (orte ?) not shutting down cleanly on job aborts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello OMPI devs,
<br>
<p>I'm currently running OMPI v 1.2.4 .  It didn't seem that any bugs which affect me or my users were fixed in 1.2.5 and 1.2.6, so I haven't upgraded yet.
<br>
<p>When I was initially getting started with OpenMPI, I had some problems which I was able to solve, but one still remains.  As I mentioned in 
<br>
<a href="http://www.open-mpi.org/community/lists/users/2007/07/3716.php">http://www.open-mpi.org/community/lists/users/2007/07/3716.php</a>
<br>
<p>when there is a non-graceful exit on any of the MPI jobs, mpirun hangs.  As an example, I have a code that I run which, when it has a trivial runtime error (e.g., some small mistake in the input file) dies yielding messages to the screen like:
<br>
<p>[node1.x86-64:28556] MPI_ABORT invoked on rank 0 in communicator MPI_COMM_WORLD with errorcode 16
<br>
<p>but mpirun never exits, and Ctrl+C won't kill it.  I have to resort to kill -9.
<br>
<p>Now that I'm running under SLURM, this is worse because there is no nice way to manually clear individual jobs off the controller.  So even if I manually kill mpirun on the failed job, slurmctld still thinks its running.
<br>
<p>Ralph Castain replied to the previously-linked message:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2007/07/3718.php">http://www.open-mpi.org/community/lists/users/2007/07/3718.php</a> indicating that he thought he knew why this was happening and that it was or would likely be fixed in the trunk.
<br>
<p>At this point, I just want to know: can I look forward to this being fixed in the upcoming v 1.3 series?
<br>
<p>I don't mean that to sound ungrateful: *many thanks* to the OMPI devs for what you've already given the community at large.  I'm just a bit frustrated because we seem to run a lot of codes on our cluster that abort at one time or another.
<br>
<p>Thank you.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5851.php">Doug Reeder: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<li><strong>Previous message:</strong> <a href="5849.php">Ashley Pittman: "[OMPI users] Different CC for orte and opmi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5958.php">Jeff Squyres: "Re: [OMPI users] mpirun (orte ?) not shutting down cleanly on job aborts"</a>
<li><strong>Reply:</strong> <a href="5958.php">Jeff Squyres: "Re: [OMPI users] mpirun (orte ?) not shutting down cleanly on job aborts"</a>
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
