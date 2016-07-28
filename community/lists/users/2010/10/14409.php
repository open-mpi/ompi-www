<?
$subject_val = "Re: [OMPI users] memory limits on remote nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  7 04:55:35 2010" -->
<!-- isoreceived="20101007085535" -->
<!-- sent="Thu, 7 Oct 2010 10:55:20 +0200" -->
<!-- isosent="20101007085520" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memory limits on remote nodes" -->
<!-- id="5EB69E79-614D-4746-959C-ED6ECBA723A3_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CAD0C55.7010408_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] memory limits on remote nodes<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-07 04:55:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14410.php">David Ronis: "[OMPI users] Pros and cons of --enable-heterogeneous"</a>
<li><strong>Previous message:</strong> <a href="14408.php">David Turner: "Re: [OMPI users] memory limits on remote nodes"</a>
<li><strong>In reply to:</strong> <a href="14406.php">David Turner: "[OMPI users] memory limits on remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14416.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<li><strong>Reply:</strong> <a href="14416.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 07.10.2010 um 01:55 schrieb David Turner:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We would like to set process memory limits (vmemoryuse, in csh
</span><br>
<span class="quotelev1">&gt; terms) on remote processes.  Our batch system is torque/moab.
</span><br>
<p>Isn't it possible to set this up in torque/moab directly? In SGE I would simply define h_vmem and it's per slot then; and with a tight integration all Open MPI processes will be children of sge_execd and the limit will be enforced.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; The nodes of our cluster each have 24GB of physical memory, of
</span><br>
<span class="quotelev1">&gt; which 4GB is taken up by the kernel and the root file system.
</span><br>
<span class="quotelev1">&gt; Note that these are diskless nodes, so no swap either.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We can globally set the per-process limit to 2.5GB.  This works
</span><br>
<span class="quotelev1">&gt; fine if applications run &quot;packed&quot;:  8 MPI tasks running on each
</span><br>
<span class="quotelev1">&gt; 8-core node, for an aggregate limit of 20GB.  However, if a job
</span><br>
<span class="quotelev1">&gt; only wants to run 4 tasks, the soft limit can safely be raised
</span><br>
<span class="quotelev1">&gt; to 5GB.  2 tasks, 10GB.  1 task, the full 20GB.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Upping the soft limit in the batch script itself only affects
</span><br>
<span class="quotelev1">&gt; the &quot;head node&quot; of the job.  Since limits are not part of the
</span><br>
<span class="quotelev1">&gt; &quot;environment&quot;, I can find no way propagate them to remote nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I understand how this all works, the remote processes are
</span><br>
<span class="quotelev1">&gt; started by orted, and therefore inherit its limits.  Is there
</span><br>
<span class="quotelev1">&gt; any sort of orted configuration that can help here?  Any other
</span><br>
<span class="quotelev1">&gt; thoughts about how to approach this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David Turner
</span><br>
<span class="quotelev1">&gt; User Services Group        email: dpturner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; NERSC Division             phone: (510) 486-4027
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley Lab        fax: (510) 486-4316
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
<li><strong>Next message:</strong> <a href="14410.php">David Ronis: "[OMPI users] Pros and cons of --enable-heterogeneous"</a>
<li><strong>Previous message:</strong> <a href="14408.php">David Turner: "Re: [OMPI users] memory limits on remote nodes"</a>
<li><strong>In reply to:</strong> <a href="14406.php">David Turner: "[OMPI users] memory limits on remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14416.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<li><strong>Reply:</strong> <a href="14416.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
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
