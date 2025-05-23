<?
$subject_val = "Re: [OMPI devel] Openmpi with slurm : salloc -c";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 27 03:03:33 2010" -->
<!-- isoreceived="20100227080333" -->
<!-- sent="Sat, 27 Feb 2010 01:03:21 -0700" -->
<!-- isosent="20100227080321" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Openmpi with slurm : salloc -c" -->
<!-- id="808BBC3D-9ACB-4F7F-A8FD-9916E9B76849_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B87FA9D.3030609_at_ext.bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Openmpi with slurm : salloc -c<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-27 03:03:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7513.php">Ralph Castain: "Re: [OMPI devel] question about pids"</a>
<li><strong>Previous message:</strong> <a href="7511.php">Ralph Castain: "Re: [OMPI devel] typo in opal/event/evutil.h ?"</a>
<li><strong>In reply to:</strong> <a href="7510.php">Damien Guinier: "[OMPI devel] Openmpi with slurm : salloc -c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/03/7520.php">Damien Guinier: "Re: [OMPI devel] Openmpi with slurm : salloc -c"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/03/7520.php">Damien Guinier: "Re: [OMPI devel] Openmpi with slurm : salloc -c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We've gone around on this one a few times too. We finally settled on the current formula and confirmed it did what the slurm folks expected, so I'm somewhat loath to change it given that situation.
<br>
<p>I suggest you take it up with the slurm folks to find out what behavior is expected when tasks_per_node and cpus_per_task are set. How many application processes are expected to be run on the node?
<br>
<p>Part of the problem (as I recall) was that the meaning of tasks_per_node changed across a slurm release. At one time, it actually meant &quot;cpus_per_node&quot;, and so you had to do the division to get the ppn correct. I'm not sure what it means today, but since Livermore writes slurm and the folks there seem to be happy with the way this behaves...&lt;shrug&gt;
<br>
<p>Let me know what you find out.
<br>
<p><p>On Feb 26, 2010, at 9:45 AM, Damien Guinier wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I find a minor bug on the MCA composent: ras slurm.
</span><br>
<span class="quotelev1">&gt; This one have an incorrect comportement with the &quot;X number of processors per task&quot; feature.
</span><br>
<span class="quotelev1">&gt; On the file orte/mca/ras/slurm/ras_slurm_module.c, line 356:
</span><br>
<span class="quotelev1">&gt; -   The node slot number is divide with &quot;cpus_per_task&quot; information,
</span><br>
<span class="quotelev1">&gt;   but &quot;cpus_per_task&quot; information is already include by the line 285.
</span><br>
<span class="quotelev1">&gt; My proposition is to not divide the node slot number the seconde time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My patch is :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff -r ef9d639ab011 -r 8f62269014c2 orte/mca/ras/slurm/ras_slurm_module.c
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/ras/slurm/ras_slurm_module.c     Wed Jan 20 18:29:12 2010 +0100
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/ras/slurm/ras_slurm_module.c     Thu Feb 25 15:59:41 2010 +0100
</span><br>
<span class="quotelev1">&gt; @@ -353,7 +353,8 @@
</span><br>
<span class="quotelev1">&gt;        node-&gt;state = ORTE_NODE_STATE_UP;
</span><br>
<span class="quotelev1">&gt;        node-&gt;slots_inuse = 0;
</span><br>
<span class="quotelev1">&gt;        node-&gt;slots_max = 0;
</span><br>
<span class="quotelev1">&gt; -        node-&gt;slots = slots[i] / cpus_per_task;
</span><br>
<span class="quotelev1">&gt; +        node-&gt;slots = slots[i];
</span><br>
<span class="quotelev1">&gt;        opal_list_append(nodelist, &amp;node-&gt;super);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    free(slots);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tanks
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7513.php">Ralph Castain: "Re: [OMPI devel] question about pids"</a>
<li><strong>Previous message:</strong> <a href="7511.php">Ralph Castain: "Re: [OMPI devel] typo in opal/event/evutil.h ?"</a>
<li><strong>In reply to:</strong> <a href="7510.php">Damien Guinier: "[OMPI devel] Openmpi with slurm : salloc -c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/03/7520.php">Damien Guinier: "Re: [OMPI devel] Openmpi with slurm : salloc -c"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/03/7520.php">Damien Guinier: "Re: [OMPI devel] Openmpi with slurm : salloc -c"</a>
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
