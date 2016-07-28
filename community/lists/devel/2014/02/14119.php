<?
$subject_val = "Re: [OMPI devel] SLURM affinity accounting in Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 12 09:16:34 2014" -->
<!-- isoreceived="20140212141634" -->
<!-- sent="Wed, 12 Feb 2014 06:16:27 -0800" -->
<!-- isosent="20140212141627" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SLURM affinity accounting in Open MPI" -->
<!-- id="E55308D2-3E31-4DFE-844F-B591888DB466_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAJ2Qj5rhxBfr4truUbdyGsdaULPvN+XREiRfDFLrDjUynPcd=Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SLURM affinity accounting in Open MPI<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-12 09:16:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14120.php">Ralph Castain: "Re: [OMPI devel] fail when linking against libmpi.so"</a>
<li><strong>Previous message:</strong> <a href="14118.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>In reply to:</strong> <a href="14112.php">Artem Polyakov: "[OMPI devel] SLURM affinity accounting in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14313.php">Artem Polyakov: "Re: [OMPI devel] SLURM affinity accounting in Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not entirely comfortable with the solution, as the problem truly is that we are doing what you asked - i.e., if you tell Slurm to bind tasks to a single core, then we live within it. The problem with your proposed fix is that we override whatever the user may have actually wanted - e.g., if the user told Slurm to bind us to 4 cores, then we override that constraint.
<br>
<p>If you can come up with a way that we can launch the orteds in a manner that respects whatever directive was given, while still providing added flexibility, then great. Otherwise, I would say the right solution is for users not to set TaskAffinity when using mpirun.
<br>
<p><p>On Feb 12, 2014, at 2:42 AM, Artem Polyakov &lt;artpol84_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I found that SLURM installations that use cgroup plugin and have TaskAffinity=yes in cgroup.conf have problems with OpenMPI: all processes on non-launch node are assigned on one core. This leads to quite poor performance.
</span><br>
<span class="quotelev1">&gt; The problem can be seen only if using mpirun to start parallel application in batch script. For example: mpirun ./mympi
</span><br>
<span class="quotelev1">&gt; If using srun with PMI affinity is setted properly: srun ./mympi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Close look shows that the reason lies in the way Open MPI use srun to launch ORTE daemons. Here is example of the command line:
</span><br>
<span class="quotelev1">&gt; srun --nodes=1 --ntasks=1 --kill-on-bad-exit --nodelist=node02 orted -mca ess slurm -mca orte_ess_jobid 3799121920 -mca orte_ess_vpid 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Saying --nodes=1 --ntasks=1 to SLURM means that you want to start one task and (with TaskAffinity=yes) it will be binded to one core. Next orted use this affinity as base for all spawned branch processes. If I understand correctly the problem behind using srun is that if you say srun --nodes=1 --ntasks=4 - then SLURM will spawn 4 independent orted processes binded to different cores which is not what we really need.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I found that disabling of cpu binding as a fast hack works good for cgroup plugin. Since job runs inside a group which has core access restrictions, spawned branch processes are executed under nodes scheduler control on all allocated cores. The command line looks like this:
</span><br>
<span class="quotelev1">&gt; srun --cpu_bind=none --nodes=1 --ntasks=1 --kill-on-bad-exit --nodelist=node02 orted -mca ess slurm -mca orte_ess_jobid 3799121920 -mca orte_ess_vpid 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This solution will probably won't work with SLURM task/affinity plugin. Also it may be a bad idea when strong affinity desirable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My patch to stable Open MPI version (1.6.5) is attached to this e-mail. I will try to make more reliable solution but I need more time and beforehand would like to know opinion of Open MPI developers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
</span><br>
<span class="quotelev1">&gt; Best regards, Artem Y. Polyakov
</span><br>
<span class="quotelev1">&gt; &lt;affinity.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14119/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14120.php">Ralph Castain: "Re: [OMPI devel] fail when linking against libmpi.so"</a>
<li><strong>Previous message:</strong> <a href="14118.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>In reply to:</strong> <a href="14112.php">Artem Polyakov: "[OMPI devel] SLURM affinity accounting in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14313.php">Artem Polyakov: "Re: [OMPI devel] SLURM affinity accounting in Open MPI"</a>
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
