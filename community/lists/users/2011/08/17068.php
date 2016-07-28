<?
$subject_val = "[OMPI users] Bindings not detected with slurm (srun)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 18 04:25:53 2011" -->
<!-- isoreceived="20110818082553" -->
<!-- sent="Thu, 18 Aug 2011 10:25:47 +0200" -->
<!-- isosent="20110818082547" -->
<!-- name="pascal.deveze_at_[hidden]" -->
<!-- email="pascal.deveze_at_[hidden]" -->
<!-- subject="[OMPI users] Bindings not detected with slurm (srun)" -->
<!-- id="OF1B09D643.B4602DAC-ONC12578F0.002E03DC-C12578F0.002E523D_at_fraz.bull.fr" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Bindings not detected with slurm (srun)<br>
<strong>From:</strong> <a href="mailto:pascal.deveze_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Bindings%20not%20detected%20with%20slurm%20(srun)"><em>pascal.deveze_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-08-18 04:25:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17069.php">Ralph Castain: "Re: [OMPI users] Bindings not detected with slurm (srun)"</a>
<li><strong>Previous message:</strong> <a href="17067.php">Jeff Squyres: "Re: [OMPI users] [MPI][Boost] Some Questions About Delta Stepping Dijkstra in Boost"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17069.php">Ralph Castain: "Re: [OMPI users] Bindings not detected with slurm (srun)"</a>
<li><strong>Reply:</strong> <a href="17069.php">Ralph Castain: "Re: [OMPI users] Bindings not detected with slurm (srun)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>When slurm is configured with the following parameters
<br>
&nbsp;&nbsp;&nbsp;TaskPlugin=task/affinity
<br>
&nbsp;&nbsp;&nbsp;TaskPluginParam=Cpusets
<br>
srun binds the processes by placing them into different
<br>
cpusets, each containing a single core.
<br>
<p>e.g. &quot;srun -N 2 -n 4&quot; will create 2 cpusets in each of the two allocated
<br>
nodes and place the four ranks there, each single rank with a singleton as
<br>
a cpu constraint.
<br>
<p>The issue in that case is in the macro OPAL_PAFFINITY_PROCESS_IS_BOUND (in
<br>
opal/mca/paffinity/paffinity.h):
<br>
&nbsp;&nbsp;. opal_paffinity_base_get_processor_info() fills in num_processors with 1
<br>
(this is the size of each cpu_set)
<br>
&nbsp;&nbsp;. num_bound is set to 1 too
<br>
and this implies *bound=false
<br>
<p>So, the binding is correctly done by slurm and not detected by MPI.
<br>
<p>To support the cpuset binding done by slurm, I propose the following patch:
<br>
<p>hg diff  opal/mca/paffinity/paffinity.h
<br>
diff -r 4d8c8a39b06f opal/mca/paffinity/paffinity.h
<br>
--- a/opal/mca/paffinity/paffinity.h    Thu Apr 21 17:38:00 2011 +0200
<br>
+++ b/opal/mca/paffinity/paffinity.h    Tue Jul 12 15:44:59 2011 +0200
<br>
@@ -218,7 +218,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;num_bound++;                                    \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}                                                   \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}                                                       \
<br>
-            if (0 &lt; num_bound &amp;&amp; num_bound &lt; num_processors) {      \
<br>
+            if (0 &lt; num_bound &amp;&amp; ((num_processors == 1) ||          \
<br>
+                                  (num_bound &lt; num_processors))) {  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*(bound) = true;                                    \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}                                                       \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}                                                           \
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17069.php">Ralph Castain: "Re: [OMPI users] Bindings not detected with slurm (srun)"</a>
<li><strong>Previous message:</strong> <a href="17067.php">Jeff Squyres: "Re: [OMPI users] [MPI][Boost] Some Questions About Delta Stepping Dijkstra in Boost"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17069.php">Ralph Castain: "Re: [OMPI users] Bindings not detected with slurm (srun)"</a>
<li><strong>Reply:</strong> <a href="17069.php">Ralph Castain: "Re: [OMPI users] Bindings not detected with slurm (srun)"</a>
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
