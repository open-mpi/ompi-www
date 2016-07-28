<?
$subject_val = "[OMPI devel] Openmpi with slurm : salloc -c";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 26 11:45:28 2010" -->
<!-- isoreceived="20100226164528" -->
<!-- sent="Fri, 26 Feb 2010 17:45:17 +0100" -->
<!-- isosent="20100226164517" -->
<!-- name="Damien Guinier" -->
<!-- email="damien.guinier_at_[hidden]" -->
<!-- subject="[OMPI devel] Openmpi with slurm : salloc -c" -->
<!-- id="4B87FA9D.3030609_at_ext.bull.net" -->
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
<strong>Subject:</strong> [OMPI devel] Openmpi with slurm : salloc -c<br>
<strong>From:</strong> Damien Guinier (<em>damien.guinier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-26 11:45:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7511.php">Ralph Castain: "Re: [OMPI devel] typo in opal/event/evutil.h ?"</a>
<li><strong>Previous message:</strong> <a href="7509.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7512.php">Ralph Castain: "Re: [OMPI devel] Openmpi with slurm : salloc -c"</a>
<li><strong>Reply:</strong> <a href="7512.php">Ralph Castain: "Re: [OMPI devel] Openmpi with slurm : salloc -c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>I find a minor bug on the MCA composent: ras slurm.
<br>
This one have an incorrect comportement with the &quot;X number of processors 
<br>
per task&quot; feature.
<br>
On the file orte/mca/ras/slurm/ras_slurm_module.c, line 356:
<br>
-   The node slot number is divide with &quot;cpus_per_task&quot; information,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;but &quot;cpus_per_task&quot; information is already include by the line 285.
<br>
My proposition is to not divide the node slot number the seconde time.
<br>
<p>My patch is :
<br>
<p>diff -r ef9d639ab011 -r 8f62269014c2 orte/mca/ras/slurm/ras_slurm_module.c
<br>
--- a/orte/mca/ras/slurm/ras_slurm_module.c     Wed Jan 20 18:29:12 2010 
<br>
+0100
<br>
+++ b/orte/mca/ras/slurm/ras_slurm_module.c     Thu Feb 25 15:59:41 2010 
<br>
+0100
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
+        node-&gt;slots = slots[i];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_list_append(nodelist, &amp;node-&gt;super);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(slots);
<br>
<p>Tanks
<br>
Damien
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7511.php">Ralph Castain: "Re: [OMPI devel] typo in opal/event/evutil.h ?"</a>
<li><strong>Previous message:</strong> <a href="7509.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7512.php">Ralph Castain: "Re: [OMPI devel] Openmpi with slurm : salloc -c"</a>
<li><strong>Reply:</strong> <a href="7512.php">Ralph Castain: "Re: [OMPI devel] Openmpi with slurm : salloc -c"</a>
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
