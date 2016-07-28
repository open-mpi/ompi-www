<?
$subject_val = "Re: [OMPI devel] SLURM affinity accounting in Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  7 11:39:59 2014" -->
<!-- isoreceived="20140307163959" -->
<!-- sent="Fri, 7 Mar 2014 23:39:57 +0700" -->
<!-- isosent="20140307163957" -->
<!-- name="Artem Polyakov" -->
<!-- email="artpol84_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SLURM affinity accounting in Open MPI" -->
<!-- id="CAJ2Qj5qCooV_4VnhEHGqDmH7rEVJrh-xn+q4QH7aMn2K3rxbhA_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Artem Polyakov (<em>artpol84_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-07 11:39:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14314.php">Jeff Squyres (jsquyres): "[OMPI devel] OMPI Tuesday teleconf: US just changed time"</a>
<li><strong>Previous message:</strong> <a href="14312.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/02/14112.php">Artem Polyakov: "[OMPI devel] SLURM affinity accounting in Open MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I think I am ready to return to mpirun affinity handling discussion. I have
<br>
more general solution now. It is beta-tested (just one cluster with SLURM
<br>
using cgroups plugin). But it shows my main idea and if it is worth to be
<br>
included into mainstream I am ready to polish or improove it.
<br>
<p>The code respects SLURM cpu allocation through SLURM_JOB_CPUS_PER_NODE and
<br>
handles such cases correctly:
<br>
SLURM_JOB_CPUS_PER_NODE='12(x3),7'
<br>
SLURM_JOB_NODELIST=node[0-3]
<br>
<p>It splits the node lists into groups having equal number of cpus. In the
<br>
example above we will have 2 groups:
<br>
1) node0, node1, node2 with 12 cpus
<br>
2) node3 with 7 cpus.
<br>
<p>then it uses separate srun's for each group.
<br>
<p>The weakness of this patch is that we need to deal with several srun's and
<br>
I am not sure that cleanup will perform correctly. I plan to test this case
<br>
additionaly.
<br>
<p><p>2014-02-12 17:42 GMT+07:00 Artem Polyakov &lt;artpol84_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I found that SLURM installations that use cgroup plugin and
</span><br>
<span class="quotelev1">&gt; have TaskAffinity=yes in cgroup.conf have problems with OpenMPI: all
</span><br>
<span class="quotelev1">&gt; processes on non-launch node are assigned on one core. This leads to quite
</span><br>
<span class="quotelev1">&gt; poor performance.
</span><br>
<span class="quotelev1">&gt; The problem can be seen only if using mpirun to start parallel application
</span><br>
<span class="quotelev1">&gt; in batch script. For example: *mpirun ./mympi*
</span><br>
<span class="quotelev1">&gt; If using srun with PMI affinity is setted properly: *srun ./mympi.*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Close look shows that the reason lies in the way Open MPI use srun to
</span><br>
<span class="quotelev1">&gt; launch ORTE daemons. Here is example of the command line:
</span><br>
<span class="quotelev1">&gt; *srun* *--nodes=1* *--ntasks=1* --kill-on-bad-exit --nodelist=node02
</span><br>
<span class="quotelev1">&gt; *orted* -mca ess slurm -mca orte_ess_jobid 3799121920 -mca orte_ess_vpid
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Saying *--nodes=1* *--ntasks=1* to SLURM means that you want to start one
</span><br>
<span class="quotelev1">&gt; task and (with TaskAffinity=yes) it will be binded to one core. Next orted
</span><br>
<span class="quotelev1">&gt; use this affinity as base for all spawned branch processes. If I understand
</span><br>
<span class="quotelev1">&gt; correctly the problem behind using srun is that if you say *srun*
</span><br>
<span class="quotelev1">&gt; *--nodes=1* *--ntasks=4* - then SLURM will spawn 4 independent orted
</span><br>
<span class="quotelev1">&gt; processes binded to different cores which is not what we really need.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I found that disabling of cpu binding as a fast hack works good for cgroup
</span><br>
<span class="quotelev1">&gt; plugin. Since job runs inside a group which has core access restrictions,
</span><br>
<span class="quotelev1">&gt; spawned branch processes are executed under nodes scheduler control on all
</span><br>
<span class="quotelev1">&gt; allocated cores. The command line looks like this:
</span><br>
<span class="quotelev1">&gt; srun *--cpu_bind=none* --nodes=1 --ntasks=1 --kill-on-bad-exit
</span><br>
<span class="quotelev1">&gt; --nodelist=node02 orted -mca ess slurm -mca orte_ess_jobid 3799121920 -mca
</span><br>
<span class="quotelev1">&gt; orte_ess_vpid
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This solution will probably won't work with SLURM task/affinity plugin.
</span><br>
<span class="quotelev1">&gt; Also it may be a bad idea when strong affinity desirable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My patch to stable Open MPI version (1.6.5) is attached to this e-mail. I
</span><br>
<span class="quotelev1">&gt; will try to make more reliable solution but I need more time and beforehand
</span><br>
<span class="quotelev1">&gt; would like to know opinion of Open MPI developers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; &#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
</span><br>
<span class="quotelev1">&gt; Best regards, Artem Y. Polyakov
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
&#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
Best regards, Artem Y. Polyakov

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14313/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14313/affinity.patch">affinity.patch</a>
</ul>
<!-- attachment="affinity.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14314.php">Jeff Squyres (jsquyres): "[OMPI devel] OMPI Tuesday teleconf: US just changed time"</a>
<li><strong>Previous message:</strong> <a href="14312.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/02/14112.php">Artem Polyakov: "[OMPI devel] SLURM affinity accounting in Open MPI"</a>
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
