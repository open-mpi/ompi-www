<?
$subject_val = "[OMPI devel] openmpi-1.8 - hangup using more than 4 nodes under managed state by Torque";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  1 05:24:02 2014" -->
<!-- isoreceived="20140401092402" -->
<!-- sent="Tue, 1 Apr 2014 18:23:26 +0900" -->
<!-- isosent="20140401092326" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="[OMPI devel] openmpi-1.8 - hangup using more than 4 nodes under managed state by Torque" -->
<!-- id="OFF7FEE4D1.6BCE2ABF-ON49257CAD.00280844-49257CAD.0033A2DF_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] openmpi-1.8 - hangup using more than 4 nodes under managed state by Torque<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20openmpi-1.8%20-%20hangup%20using%20more%20than%204%20nodes%20under%20managed%20state%20by%20Torque"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-04-01 05:23:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14436.php">Ralph Castain: "[OMPI devel] v1.8 warnings"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14434.php">Mike Dubman: "Re: [OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14438.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.8 - hangup using more than 4 nodes under managed state by Torque"</a>
<li><strong>Reply:</strong> <a href="14438.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.8 - hangup using more than 4 nodes under managed state by Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>I saw another hangup with openmpi-1.8 when I used more than 4 nodes
<br>
(having 8 cores each) under managed state by Torque. Although I'm not
<br>
sure you can reproduce it with SLURM, at leaset with Torque it can be
<br>
reproduced in this way:
<br>
<p>[mishima_at_manage ~]$ qsub -I -l nodes=4:ppn=8
<br>
qsub: waiting for job 8726.manage.cluster to start
<br>
qsub: job 8726.manage.cluster ready
<br>
<p>[mishima_at_node09 ~]$ mpirun -np 65 ~/mis/openmpi/demos/myprog
<br>
--------------------------------------------------------------------------
<br>
There are not enough slots available in the system to satisfy the 65 slots
<br>
that were requested by the application:
<br>
&nbsp;&nbsp;/home/mishima/mis/openmpi/demos/myprog
<br>
<p>Either request fewer slots for your application, or make more slots
<br>
available
<br>
for use.
<br>
--------------------------------------------------------------------------
<br>
&lt;&lt;&lt; HANG HERE!! &gt;&gt;&gt;
<br>
Abort is in progress...hit ctrl-c again within 5 seconds to forcibly
<br>
terminate
<br>
<p>I found this behavior when I happened to input wrong procs. With less than
<br>
4
<br>
nodes or rsh - namely unmanaged state, it works. I'm afraid to say I have
<br>
no
<br>
idea how to resolve it. I hope you could fix the problem.
<br>
<p>Tetsuya
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14436.php">Ralph Castain: "[OMPI devel] v1.8 warnings"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14434.php">Mike Dubman: "Re: [OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14438.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.8 - hangup using more than 4 nodes under managed state by Torque"</a>
<li><strong>Reply:</strong> <a href="14438.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.8 - hangup using more than 4 nodes under managed state by Torque"</a>
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
