<?
$subject_val = "Re: [OMPI users] torque pbs behaviour...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 07:36:30 2009" -->
<!-- isoreceived="20090811113630" -->
<!-- sent="Tue, 11 Aug 2009 05:36:17 -0600" -->
<!-- isosent="20090811113617" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] torque pbs behaviour..." -->
<!-- id="06F28FAF-AB6E-41DC-8AC9-E520FF9A5E86_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1249989470.10487.16.camel_at_alpha" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 07:36:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10292.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10290.php">Ashley Pittman: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10290.php">Ashley Pittman: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10292.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 11, 2009, at 5:17 AM, Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, 2009-08-11 at 03:03 -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; If it isn't already there, try putting a print statement tight at
</span><br>
<span class="quotelev2">&gt;&gt; program start, another just prior to MPI_Init, and another just after
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init. It could be that something is hanging somewhere during
</span><br>
<span class="quotelev2">&gt;&gt; program startup since it sounds like everything is launching just
</span><br>
<span class="quotelev2">&gt;&gt; fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you suspect a hang then you can use the command orte-ps (on the  
</span><br>
<span class="quotelev1">&gt; node
</span><br>
<span class="quotelev1">&gt; where the mpirun is running) and it should show you your job.  This  
</span><br>
<span class="quotelev1">&gt; will
</span><br>
<span class="quotelev1">&gt; tell you if the job is started and still running or if there was a
</span><br>
<span class="quotelev1">&gt; problem launching.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the program did start and has really hung then you can get more
</span><br>
<span class="quotelev1">&gt; in-depth information about it using padb which is linked to in my
</span><br>
<span class="quotelev1">&gt; signature.
</span><br>
<p>FWIW: we use padb for this purpose, and it is very helpful!
<br>
<p>Ralph
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev1">&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10292.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10290.php">Ashley Pittman: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10290.php">Ashley Pittman: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10292.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
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
