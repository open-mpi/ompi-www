<?
$subject_val = "Re: [OMPI devel] openmpi-1.8 - hangup using more than 4 nodes under managed state by Torque";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  1 10:54:43 2014" -->
<!-- isoreceived="20140401145443" -->
<!-- sent="Tue, 1 Apr 2014 07:54:16 -0700" -->
<!-- isosent="20140401145416" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.8 - hangup using more than 4 nodes under managed state by Torque" -->
<!-- id="B676541E-8DCA-4C1E-878E-3650D0BC8F46_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OFF7FEE4D1.6BCE2ABF-ON49257CAD.00280844-49257CAD.0033A2DF_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi-1.8 - hangup using more than 4 nodes under managed state by Torque<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-01 10:54:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14439.php">Joshua Ladd: "[OMPI devel] Seeking input for an RFC"</a>
<li><strong>Previous message:</strong> <a href="14437.php">Ralph Castain: "[OMPI devel] One more v1.8 warning"</a>
<li><strong>In reply to:</strong> <a href="14435.php">tmishima_at_[hidden]: "[OMPI devel] openmpi-1.8 - hangup using more than 4 nodes under managed state by Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14443.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8 - hangup using more than 4 nodes under	managed state by Torque"</a>
<li><strong>Reply:</strong> <a href="14443.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8 - hangup using more than 4 nodes under	managed state by Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tracked it down - not Torque specific, but impacts all managed environments. Will fix
<br>
<p><p>On Apr 1, 2014, at 2:23 AM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I saw another hangup with openmpi-1.8 when I used more than 4 nodes
</span><br>
<span class="quotelev1">&gt; (having 8 cores each) under managed state by Torque. Although I'm not
</span><br>
<span class="quotelev1">&gt; sure you can reproduce it with SLURM, at leaset with Torque it can be
</span><br>
<span class="quotelev1">&gt; reproduced in this way:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mishima_at_manage ~]$ qsub -I -l nodes=4:ppn=8
</span><br>
<span class="quotelev1">&gt; qsub: waiting for job 8726.manage.cluster to start
</span><br>
<span class="quotelev1">&gt; qsub: job 8726.manage.cluster ready
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mishima_at_node09 ~]$ mpirun -np 65 ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; There are not enough slots available in the system to satisfy the 65 slots
</span><br>
<span class="quotelev1">&gt; that were requested by the application:
</span><br>
<span class="quotelev1">&gt;  /home/mishima/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Either request fewer slots for your application, or make more slots
</span><br>
<span class="quotelev1">&gt; available
</span><br>
<span class="quotelev1">&gt; for use.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &lt;&lt;&lt; HANG HERE!! &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Abort is in progress...hit ctrl-c again within 5 seconds to forcibly
</span><br>
<span class="quotelev1">&gt; terminate
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I found this behavior when I happened to input wrong procs. With less than
</span><br>
<span class="quotelev1">&gt; 4
</span><br>
<span class="quotelev1">&gt; nodes or rsh - namely unmanaged state, it works. I'm afraid to say I have
</span><br>
<span class="quotelev1">&gt; no
</span><br>
<span class="quotelev1">&gt; idea how to resolve it. I hope you could fix the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tetsuya
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Searchable archives: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/index.php">http://www.open-mpi.org/community/lists/devel/2014/04/index.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14439.php">Joshua Ladd: "[OMPI devel] Seeking input for an RFC"</a>
<li><strong>Previous message:</strong> <a href="14437.php">Ralph Castain: "[OMPI devel] One more v1.8 warning"</a>
<li><strong>In reply to:</strong> <a href="14435.php">tmishima_at_[hidden]: "[OMPI devel] openmpi-1.8 - hangup using more than 4 nodes under managed state by Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14443.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8 - hangup using more than 4 nodes under	managed state by Torque"</a>
<li><strong>Reply:</strong> <a href="14443.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8 - hangup using more than 4 nodes under	managed state by Torque"</a>
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
