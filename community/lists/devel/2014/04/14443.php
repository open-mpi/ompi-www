<?
$subject_val = "Re: [OMPI devel] openmpi-1.8 - hangup using more than 4 nodes under	managed state by Torque";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  1 19:22:29 2014" -->
<!-- isoreceived="20140401232229" -->
<!-- sent="Wed, 2 Apr 2014 08:21:53 +0900" -->
<!-- isosent="20140401232153" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.8 - hangup using more than 4 nodes under	managed state by Torque" -->
<!-- id="OFB7E55D36.F2B51EAD-ON49257CAD.00804636-49257CAD.008066EB_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B676541E-8DCA-4C1E-878E-3650D0BC8F46_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi-1.8 - hangup using more than 4 nodes under	managed state by Torque<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20openmpi-1.8%20-%20hangup%20using%20more%20than%204%20nodes%20under	managed%20state%20by%20Torque"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-04-01 19:21:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14444.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Previous message:</strong> <a href="14442.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>In reply to:</strong> <a href="14438.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.8 - hangup using more than 4 nodes under managed state by Torque"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph.
<br>
<p>Tetsuya
<br>
<p><span class="quotelev1">&gt; I tracked it down - not Torque specific, but impacts all managed
</span><br>
environments. Will fix
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 1, 2014, at 2:23 AM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I saw another hangup with openmpi-1.8 when I used more than 4 nodes
</span><br>
<span class="quotelev2">&gt; &gt; (having 8 cores each) under managed state by Torque. Although I'm not
</span><br>
<span class="quotelev2">&gt; &gt; sure you can reproduce it with SLURM, at leaset with Torque it can be
</span><br>
<span class="quotelev2">&gt; &gt; reproduced in this way:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_manage ~]$ qsub -I -l nodes=4:ppn=8
</span><br>
<span class="quotelev2">&gt; &gt; qsub: waiting for job 8726.manage.cluster to start
</span><br>
<span class="quotelev2">&gt; &gt; qsub: job 8726.manage.cluster ready
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_node09 ~]$ mpirun -np 65 ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt; &gt; There are not enough slots available in the system to satisfy the 65
</span><br>
slots
<br>
<span class="quotelev2">&gt; &gt; that were requested by the application:
</span><br>
<span class="quotelev2">&gt; &gt;  /home/mishima/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Either request fewer slots for your application, or make more slots
</span><br>
<span class="quotelev2">&gt; &gt; available
</span><br>
<span class="quotelev2">&gt; &gt; for use.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt; &gt; &lt;&lt;&lt; HANG HERE!! &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Abort is in progress...hit ctrl-c again within 5 seconds to forcibly
</span><br>
<span class="quotelev2">&gt; &gt; terminate
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I found this behavior when I happened to input wrong procs. With less
</span><br>
than
<br>
<span class="quotelev2">&gt; &gt; 4
</span><br>
<span class="quotelev2">&gt; &gt; nodes or rsh - namely unmanaged state, it works. I'm afraid to say I
</span><br>
have
<br>
<span class="quotelev2">&gt; &gt; no
</span><br>
<span class="quotelev2">&gt; &gt; idea how to resolve it. I hope you could fix the problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Searchable archives:
</span><br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/04/index.php">http://www.open-mpi.org/community/lists/devel/2014/04/index.php</a>
<br>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/04/14438.php">http://www.open-mpi.org/community/lists/devel/2014/04/14438.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14444.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Previous message:</strong> <a href="14442.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31302 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>In reply to:</strong> <a href="14438.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.8 - hangup using more than 4 nodes under managed state by Torque"</a>
<!-- nextthread="start" -->
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
