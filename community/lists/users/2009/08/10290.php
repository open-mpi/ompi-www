<?
$subject_val = "Re: [OMPI users] torque pbs behaviour...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 07:17:10 2009" -->
<!-- isoreceived="20090811111710" -->
<!-- sent="Tue, 11 Aug 2009 12:17:50 +0100" -->
<!-- isosent="20090811111750" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] torque pbs behaviour..." -->
<!-- id="1249989470.10487.16.camel_at_alpha" -->
<!-- inreplyto="919018BA-A08F-4E3F-A9B3-B4C2F701179B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] torque pbs behaviour...<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 07:17:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10291.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10289.php">Oskar Enoksson: "[OMPI users] How to make a job abort when one host dies?"</a>
<li><strong>In reply to:</strong> <a href="10287.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10291.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10291.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2009-08-11 at 03:03 -0600, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; If it isn't already there, try putting a print statement tight at
</span><br>
<span class="quotelev1">&gt; program start, another just prior to MPI_Init, and another just after
</span><br>
<span class="quotelev1">&gt; MPI_Init. It could be that something is hanging somewhere during
</span><br>
<span class="quotelev1">&gt; program startup since it sounds like everything is launching just
</span><br>
<span class="quotelev1">&gt; fine.
</span><br>
<p>If you suspect a hang then you can use the command orte-ps (on the node
<br>
where the mpirun is running) and it should show you your job.  This will
<br>
tell you if the job is started and still running or if there was a
<br>
problem launching.
<br>
<p>If the program did start and has really hung then you can get more
<br>
in-depth information about it using padb which is linked to in my
<br>
signature.
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10291.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10289.php">Oskar Enoksson: "[OMPI users] How to make a job abort when one host dies?"</a>
<li><strong>In reply to:</strong> <a href="10287.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10291.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10291.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
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
