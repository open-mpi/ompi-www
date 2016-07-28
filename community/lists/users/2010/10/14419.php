<?
$subject_val = "Re: [OMPI users] memory limits on remote nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  8 04:45:47 2010" -->
<!-- isoreceived="20101008084547" -->
<!-- sent="Fri, 8 Oct 2010 10:45:32 +0200" -->
<!-- isosent="20101008084532" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memory limits on remote nodes" -->
<!-- id="DD315D06-DABE-4FDF-B542-E804A7EB45CD_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7171CC71-4D41-49A8-BBF2-B82BFAB13ACF_at_open-mpi.org" -->
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
<strong>Date:</strong> 2010-10-08 04:45:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14420.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="14418.php">Eugene Loh: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<li><strong>In reply to:</strong> <a href="14416.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14420.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<li><strong>Reply:</strong> <a href="14420.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 08.10.2010 um 00:40 schrieb Ralph Castain:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 7, 2010, at 2:55 AM, Reuti wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am 07.10.2010 um 01:55 schrieb David Turner:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We would like to set process memory limits (vmemoryuse, in csh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; terms) on remote processes.  Our batch system is torque/moab.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Isn't it possible to set this up in torque/moab directly? In SGE I would simply define h_vmem and it's per slot then; and with a tight integration all Open MPI processes will be children of sge_execd and the limit will be enforced.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I could be wrong, but I -think- the issue here is that the soft limits need to be set on a per-job basis.
</span><br>
<p>This I also thought, and `qsub -l h_vmem=4G ...` should do it. It can be requested on a per job basis (with further limits on a queue level if necessary).
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The nodes of our cluster each have 24GB of physical memory, of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which 4GB is taken up by the kernel and the root file system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note that these are diskless nodes, so no swap either.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We can globally set the per-process limit to 2.5GB.  This works
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fine if applications run &quot;packed&quot;:  8 MPI tasks running on each
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8-core node, for an aggregate limit of 20GB.  However, if a job
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only wants to run 4 tasks, the soft limit can safely be raised
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to 5GB.  2 tasks, 10GB.  1 task, the full 20GB.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Upping the soft limit in the batch script itself only affects
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the &quot;head node&quot; of the job.  Since limits are not part of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;environment&quot;, I can find no way propagate them to remote nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I understand how this all works, the remote processes are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; started by orted, and therefore inherit its limits.  Is there
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any sort of orted configuration that can help here?  Any other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thoughts about how to approach this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; David Turner
</span><br>
<span class="quotelev3">&gt;&gt;&gt; User Services Group        email: dpturner_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NERSC Division             phone: (510) 486-4027
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley Lab        fax: (510) 486-4316
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="14420.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="14418.php">Eugene Loh: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<li><strong>In reply to:</strong> <a href="14416.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14420.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<li><strong>Reply:</strong> <a href="14420.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
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
