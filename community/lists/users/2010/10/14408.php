<?
$subject_val = "Re: [OMPI users] memory limits on remote nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  7 01:25:23 2010" -->
<!-- isoreceived="20101007052523" -->
<!-- sent="Wed, 06 Oct 2010 22:25:16 -0700" -->
<!-- isosent="20101007052516" -->
<!-- name="David Turner" -->
<!-- email="dpturner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memory limits on remote nodes" -->
<!-- id="4CAD59BC.9010000_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B5A1B814-2B54-41ED-AF3D-ABEF3B42BDD4_at_open-mpi.org" -->
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
<strong>From:</strong> David Turner (<em>dpturner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-07 01:25:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14409.php">Reuti: "Re: [OMPI users] memory limits on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="14407.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<li><strong>In reply to:</strong> <a href="14407.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14417.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<li><strong>Reply:</strong> <a href="14417.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p><span class="quotelev1">&gt; There is an MCA param that tells the orted to set its usage limits to the hard limit:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA opal: parameter &quot;opal_set_max_sys_limits&quot; (current value:&lt;0&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                            Set to non-zero to automatically set any system-imposed limits to the maximum allowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The orted could be used to set the soft limit down from that value on a per-job basis, but we didn't provide a mechanism for specifying it. Would be relatively easy to do, though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What version are you using? If I create a patch, would you be willing to test it?
</span><br>
<p>1.4.2, with 1.4.1 available, and 1.4.3 waiting in the wings.
<br>
I would love to test any patch you could come up with.
<br>
The ability to set any valid limit to any valid value,
<br>
applied equally to all processes, would go a long way in
<br>
making our environment more stable.  Thanks!
<br>
<p><span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We would like to set process memory limits (vmemoryuse, in csh
</span><br>
<span class="quotelev2">&gt;&gt; terms) on remote processes.  Our batch system is torque/moab.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The nodes of our cluster each have 24GB of physical memory, of
</span><br>
<span class="quotelev2">&gt;&gt; which 4GB is taken up by the kernel and the root file system.
</span><br>
<span class="quotelev2">&gt;&gt; Note that these are diskless nodes, so no swap either.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We can globally set the per-process limit to 2.5GB.  This works
</span><br>
<span class="quotelev2">&gt;&gt; fine if applications run &quot;packed&quot;:  8 MPI tasks running on each
</span><br>
<span class="quotelev2">&gt;&gt; 8-core node, for an aggregate limit of 20GB.  However, if a job
</span><br>
<span class="quotelev2">&gt;&gt; only wants to run 4 tasks, the soft limit can safely be raised
</span><br>
<span class="quotelev2">&gt;&gt; to 5GB.  2 tasks, 10GB.  1 task, the full 20GB.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Upping the soft limit in the batch script itself only affects
</span><br>
<span class="quotelev2">&gt;&gt; the &quot;head node&quot; of the job.  Since limits are not part of the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;environment&quot;, I can find no way propagate them to remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I understand how this all works, the remote processes are
</span><br>
<span class="quotelev2">&gt;&gt; started by orted, and therefore inherit its limits.  Is there
</span><br>
<span class="quotelev2">&gt;&gt; any sort of orted configuration that can help here?  Any other
</span><br>
<span class="quotelev2">&gt;&gt; thoughts about how to approach this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; David Turner
</span><br>
<span class="quotelev2">&gt;&gt; User Services Group        email: dpturner_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; NERSC Division             phone: (510) 486-4027
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley Lab        fax: (510) 486-4316
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
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="14409.php">Reuti: "Re: [OMPI users] memory limits on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="14407.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<li><strong>In reply to:</strong> <a href="14407.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14417.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<li><strong>Reply:</strong> <a href="14417.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
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
