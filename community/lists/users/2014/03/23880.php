<?
$subject_val = "[OMPI users] another corner case hangup in openmpi-1.7.5rc3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 17 20:40:35 2014" -->
<!-- isoreceived="20140318004035" -->
<!-- sent="Tue, 18 Mar 2014 09:40:10 +0900" -->
<!-- isosent="20140318004010" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="[OMPI users] another corner case hangup in openmpi-1.7.5rc3" -->
<!-- id="OF39E5DFC6.6E3A4C73-ON49257C9F.000282BD-49257C9F.0003B832_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> [OMPI users] another corner case hangup in openmpi-1.7.5rc3<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20another%20corner%20case%20hangup%20in%20openmpi-1.7.5rc3"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-03-17 20:40:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23881.php">Ralph Castain: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<li><strong>Previous message:</strong> <a href="23879.php">Saliya Ekanayake: "Re: [OMPI users] efficient strategy with temporary message copy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23881.php">Ralph Castain: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<li><strong>Reply:</strong> <a href="23881.php">Ralph Castain: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph, I found another corner case hangup in openmpi-1.7.5rc3.
<br>
<p>Condition:
<br>
1. allocate some nodes using RM such as TORQUE.
<br>
2. request the head node only in executing the job with
<br>
&nbsp;&nbsp;&nbsp;-host or -hostfile option.
<br>
<p>Example:
<br>
1. allocate node05,node06 using TORQUE.
<br>
2. request node05 only with -host option
<br>
<p>[mishima_at_manage ~]$ qsub -I -l nodes=node05+node06
<br>
qsub: waiting for job 8661.manage.cluster to start
<br>
qsub: job 8661.manage.cluster ready
<br>
<p>[mishima_at_node05 ~]$ cat $PBS_NODEFILE
<br>
node05
<br>
node06
<br>
[mishima_at_node05 ~]$ mpirun -np 1 -host node05 ~/mis/openmpi/demos/myprog
<br>
&lt;&lt; hang here &gt;&gt;
<br>
<p>And, my fix for plm_base_launch_support.c is as follows:
<br>
--- plm_base_launch_support.c   2014-03-12 05:51:45.000000000 +0900
<br>
+++ plm_base_launch_support.try.c       2014-03-18 08:38:03.000000000 +0900
<br>
@@ -1662,7 +1662,11 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_OUTPUT_VERBOSE((5, orte_plm_base_framework.framework_output,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;%s plm:base:setup_vm only HNP left&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_NAME_PRINT(ORTE_PROC_MY_NAME)));
<br>
+        /* cleanup */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_DESTRUCT(&amp;nodes);
<br>
+        /* mark that the daemons have reported so we can proceed */
<br>
+        daemons-&gt;state = ORTE_JOB_STATE_DAEMONS_REPORTED;
<br>
+        daemons-&gt;updated = false;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ORTE_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>Tetsuya
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23881.php">Ralph Castain: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<li><strong>Previous message:</strong> <a href="23879.php">Saliya Ekanayake: "Re: [OMPI users] efficient strategy with temporary message copy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23881.php">Ralph Castain: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<li><strong>Reply:</strong> <a href="23881.php">Ralph Castain: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
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
