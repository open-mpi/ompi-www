<?
$subject_val = "[OMPI devel] SLURM affinity accounting in Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 12 05:42:27 2014" -->
<!-- isoreceived="20140212104227" -->
<!-- sent="Wed, 12 Feb 2014 17:42:25 +0700" -->
<!-- isosent="20140212104225" -->
<!-- name="Artem Polyakov" -->
<!-- email="artpol84_at_[hidden]" -->
<!-- subject="[OMPI devel] SLURM affinity accounting in Open MPI" -->
<!-- id="CAJ2Qj5rhxBfr4truUbdyGsdaULPvN+XREiRfDFLrDjUynPcd=Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] SLURM affinity accounting in Open MPI<br>
<strong>From:</strong> Artem Polyakov (<em>artpol84_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-12 05:42:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14113.php">Adrian Reber: "[OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>Previous message:</strong> <a href="14111.php">Paul Kapinos: "Re: [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14119.php">Ralph Castain: "Re: [OMPI devel] SLURM affinity accounting in Open MPI"</a>
<li><strong>Reply:</strong> <a href="14119.php">Ralph Castain: "Re: [OMPI devel] SLURM affinity accounting in Open MPI"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14313.php">Artem Polyakov: "Re: [OMPI devel] SLURM affinity accounting in Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>I found that SLURM installations that use cgroup plugin and
<br>
have TaskAffinity=yes in cgroup.conf have problems with OpenMPI: all
<br>
processes on non-launch node are assigned on one core. This leads to quite
<br>
poor performance.
<br>
The problem can be seen only if using mpirun to start parallel application
<br>
in batch script. For example: *mpirun ./mympi*
<br>
If using srun with PMI affinity is setted properly: *srun ./mympi.*
<br>
<p>Close look shows that the reason lies in the way Open MPI use srun to
<br>
launch ORTE daemons. Here is example of the command line:
<br>
*srun* *--nodes=1* *--ntasks=1* --kill-on-bad-exit --nodelist=node02
<br>
*orted*-mca ess slurm -mca orte_ess_jobid 3799121920 -mca
<br>
orte_ess_vpid
<br>
<p>Saying *--nodes=1* *--ntasks=1* to SLURM means that you want to start one
<br>
task and (with TaskAffinity=yes) it will be binded to one core. Next orted
<br>
use this affinity as base for all spawned branch processes. If I understand
<br>
correctly the problem behind using srun is that if you say *srun*
<br>
*--nodes=1* *--ntasks=4* - then SLURM will spawn 4 independent orted
<br>
processes binded to different cores which is not what we really need.
<br>
<p>I found that disabling of cpu binding as a fast hack works good for cgroup
<br>
plugin. Since job runs inside a group which has core access restrictions,
<br>
spawned branch processes are executed under nodes scheduler control on all
<br>
allocated cores. The command line looks like this:
<br>
srun *--cpu_bind=none* --nodes=1 --ntasks=1 --kill-on-bad-exit
<br>
--nodelist=node02 orted -mca ess slurm -mca orte_ess_jobid 3799121920 -mca
<br>
orte_ess_vpid
<br>
<p>This solution will probably won't work with SLURM task/affinity plugin.
<br>
Also it may be a bad idea when strong affinity desirable.
<br>
<p>My patch to stable Open MPI version (1.6.5) is attached to this e-mail. I
<br>
will try to make more reliable solution but I need more time and beforehand
<br>
would like to know opinion of Open MPI developers.
<br>
<p><pre>
-- 
&#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
Best regards, Artem Y. Polyakov

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14112/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14112/affinity.patch">affinity.patch</a>
</ul>
<!-- attachment="affinity.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14113.php">Adrian Reber: "[OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>Previous message:</strong> <a href="14111.php">Paul Kapinos: "Re: [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14119.php">Ralph Castain: "Re: [OMPI devel] SLURM affinity accounting in Open MPI"</a>
<li><strong>Reply:</strong> <a href="14119.php">Ralph Castain: "Re: [OMPI devel] SLURM affinity accounting in Open MPI"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14313.php">Artem Polyakov: "Re: [OMPI devel] SLURM affinity accounting in Open MPI"</a>
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
