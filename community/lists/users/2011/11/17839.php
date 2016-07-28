<?
$subject_val = "[OMPI users] Open MPI and SLURM_CPUS_PER_TASK";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 28 05:50:26 2011" -->
<!-- isoreceived="20111128105026" -->
<!-- sent="Mon, 28 Nov 2011 11:50:21 +0100" -->
<!-- isosent="20111128105021" -->
<!-- name="Igor Geier" -->
<!-- email="geier_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI and SLURM_CPUS_PER_TASK" -->
<!-- id="20111128115021.fbaec476.geier_at_csc.uni-frankfurt.de" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI and SLURM_CPUS_PER_TASK<br>
<strong>From:</strong> Igor Geier (<em>geier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-28 05:50:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17840.php">Mudassar Majeed: "[OMPI users] Deadlock at MPI_FInalize"</a>
<li><strong>Previous message:</strong> <a href="17838.php">Arnaud Heritier: "[OMPI users] Qlogic &amp; openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17879.php">Ralph Castain: "Re: [OMPI users] Open MPI and SLURM_CPUS_PER_TASK"</a>
<li><strong>Reply:</strong> <a href="17879.php">Ralph Castain: "Re: [OMPI users] Open MPI and SLURM_CPUS_PER_TASK"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>there's been some discussions about this already, but the issue is still there (in 1.4.4). When running SLURM jobs with the --cpus-per-task parameter set (e.g. when running Open MPI-OpenMP jobs, so that --cpus-per-tasks corresponds to the number of OpenMP threads per rank), you get the
<br>
<p>&quot;All nodes which are allocated for this job are already filled.&quot;
<br>
<p>error, if SLURM_CPUS_PER_TASK &gt; SLURM_TASKS_PER_NODE. In ras_slurm_module.c, the number of slots is divided by the SLURM_CPUS_PER_TASK value (so that it becomes 0). The following patch seems to work for our cluster:
<br>
<p>--- a/orte/mca/ras/slurm/ras_slurm_module.c     2009-12-08 21:36:38.000000000 +0100
<br>
+++ b/orte/mca/ras/slurm/ras_slurm_module.c     2011-11-25 12:28:55.000000000 +0100
<br>
@@ -353,7 +353,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node-&gt;state = ORTE_NODE_STATE_UP;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node-&gt;slots_inuse = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node-&gt;slots_max = 0;
<br>
-        node-&gt;slots = slots[i] / cpus_per_task;
<br>
+        /* Don't divide by cpus_per_task */
<br>
+        node-&gt;slots = slots[i]; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_list_append(nodelist, &amp;node-&gt;super);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(slots);
<br>
<p>Are there situations where this might not work?
<br>
<p>Best regards
<br>
<p>Igor
<br>
<p><pre>
-- 
Igor Geier
--------------------------------------
Center for Scientific Computing (CSC)
University of Frankfurt
Max-von-Laue-Stra&#223;e 1
60438 Frankfurt am Main
+49(0)69/798-47353
geier_at_[hidden]
<a href="http://csc.uni-frankfurt.de/">http://csc.uni-frankfurt.de/</a>
--------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17840.php">Mudassar Majeed: "[OMPI users] Deadlock at MPI_FInalize"</a>
<li><strong>Previous message:</strong> <a href="17838.php">Arnaud Heritier: "[OMPI users] Qlogic &amp; openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17879.php">Ralph Castain: "Re: [OMPI users] Open MPI and SLURM_CPUS_PER_TASK"</a>
<li><strong>Reply:</strong> <a href="17879.php">Ralph Castain: "Re: [OMPI users] Open MPI and SLURM_CPUS_PER_TASK"</a>
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
