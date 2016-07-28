<?
$subject_val = "[OMPI users] memory limits on remote nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  6 19:55:07 2010" -->
<!-- isoreceived="20101006235507" -->
<!-- sent="Wed, 06 Oct 2010 16:55:01 -0700" -->
<!-- isosent="20101006235501" -->
<!-- name="David Turner" -->
<!-- email="dpturner_at_[hidden]" -->
<!-- subject="[OMPI users] memory limits on remote nodes" -->
<!-- id="4CAD0C55.7010408_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI users] memory limits on remote nodes<br>
<strong>From:</strong> David Turner (<em>dpturner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-06 19:55:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14407.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="14405.php">Richard Treumann: "Re: [OMPI users] Shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14407.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<li><strong>Reply:</strong> <a href="14407.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<li><strong>Reply:</strong> <a href="14409.php">Reuti: "Re: [OMPI users] memory limits on remote nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>We would like to set process memory limits (vmemoryuse, in csh
<br>
terms) on remote processes.  Our batch system is torque/moab.
<br>
<p>The nodes of our cluster each have 24GB of physical memory, of
<br>
which 4GB is taken up by the kernel and the root file system.
<br>
Note that these are diskless nodes, so no swap either.
<br>
<p>We can globally set the per-process limit to 2.5GB.  This works
<br>
fine if applications run &quot;packed&quot;:  8 MPI tasks running on each
<br>
8-core node, for an aggregate limit of 20GB.  However, if a job
<br>
only wants to run 4 tasks, the soft limit can safely be raised
<br>
to 5GB.  2 tasks, 10GB.  1 task, the full 20GB.
<br>
<p>Upping the soft limit in the batch script itself only affects
<br>
the &quot;head node&quot; of the job.  Since limits are not part of the
<br>
&quot;environment&quot;, I can find no way propagate them to remote nodes.
<br>
<p>If I understand how this all works, the remote processes are
<br>
started by orted, and therefore inherit its limits.  Is there
<br>
any sort of orted configuration that can help here?  Any other
<br>
thoughts about how to approach this?
<br>
<p>Thanks!
<br>
<p><pre>
-- 
Best regards,
David Turner
User Services Group        email: dpturner_at_[hidden]
NERSC Division             phone: (510) 486-4027
Lawrence Berkeley Lab        fax: (510) 486-4316
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14407.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="14405.php">Richard Treumann: "Re: [OMPI users] Shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14407.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<li><strong>Reply:</strong> <a href="14407.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<li><strong>Reply:</strong> <a href="14409.php">Reuti: "Re: [OMPI users] memory limits on remote nodes"</a>
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
