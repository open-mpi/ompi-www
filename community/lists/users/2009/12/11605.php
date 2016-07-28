<?
$subject_val = "Re: [OMPI users] Debugging spawned processes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 18 16:46:08 2009" -->
<!-- isoreceived="20091218214608" -->
<!-- sent="Fri, 18 Dec 2009 21:46:00 +0000" -->
<!-- isosent="20091218214600" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debugging spawned processes" -->
<!-- id="1261172760.25929.37.camel_at_alpha" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9b0da5ce0912160306m392fdc6p8f8bfd2bf30427d3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Debugging spawned processes<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-18 16:46:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11606.php">Johann Knechtel: "[OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<li><strong>Previous message:</strong> <a href="11604.php">Ralph Castain: "Re: [OMPI users] NetBSD OpenMPI - SGE - PETSc - PISM"</a>
<li><strong>In reply to:</strong> <a href="11553.php">jody: "[OMPI users] Debugging spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11619.php">jody: "Re: [OMPI users] Debugging spawned processes"</a>
<li><strong>Reply:</strong> <a href="11619.php">jody: "Re: [OMPI users] Debugging spawned processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2009-12-16 at 12:06 +0100, jody wrote:
<br>
<p><span class="quotelev1">&gt; Has anybody got some hints on how to debug spawned processes?
</span><br>
<p>If you can live with the processes starting normally and attaching gdb
<br>
to them after they have started then you could use padb.
<br>
<p>Assuming you only have one job active (replace -a with the job-id if you
<br>
don't) and watch to target the first spawned job then the following
<br>
command will launch an xterm for each rank in the job and automatically
<br>
attach to the process for you.
<br>
<p>padb -Oorte-job-step=2 --command -Ocommand=&quot;xterm -T %r -e 'gdb -p %p'&quot;
<br>
-a
<br>
<p>You'll need to use the SVN version of padb for this, the &quot;orte-job-step&quot;
<br>
option tells it to attach to the first spawned job, use orte-ps to see
<br>
the list of job steps.
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
<li><strong>Next message:</strong> <a href="11606.php">Johann Knechtel: "[OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<li><strong>Previous message:</strong> <a href="11604.php">Ralph Castain: "Re: [OMPI users] NetBSD OpenMPI - SGE - PETSc - PISM"</a>
<li><strong>In reply to:</strong> <a href="11553.php">jody: "[OMPI users] Debugging spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11619.php">jody: "Re: [OMPI users] Debugging spawned processes"</a>
<li><strong>Reply:</strong> <a href="11619.php">jody: "Re: [OMPI users] Debugging spawned processes"</a>
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
