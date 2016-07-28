<?
$subject_val = "[OMPI users] OpenMPI-1.2.7 + SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  4 10:54:50 2008" -->
<!-- isoreceived="20081104155450" -->
<!-- sent="Tue, 4 Nov 2008 21:24:46 +0530" -->
<!-- isosent="20081104155446" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI-1.2.7 + SGE" -->
<!-- id="cb60cbc40811040754t27287962j3b391b5a7990e1fc_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI-1.2.7 + SGE<br>
<strong>From:</strong> Sangamesh B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-04 10:54:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7205.php">Gus Correa: "Re: [OMPI users] question regarding the configuration of multiple nics	for openmpi"</a>
<li><strong>Previous message:</strong> <a href="7203.php">Gilbert Grosdidier: "[OMPI users] mca btl_openib_flags default value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7206.php">Reuti: "Re: [OMPI users] OpenMPI-1.2.7 + SGE"</a>
<li><strong>Reply:</strong> <a href="7206.php">Reuti: "Re: [OMPI users] OpenMPI-1.2.7 + SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In Rocks-5.0 cluster, OpenMPI-1.2.6 comes by default. I guess it
<br>
gets installed through rpm.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;# /opt/openmpi/bin/ompi_info | grep gridengine
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.6)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Now I've to install OpenMPI-1.2.7. The &quot;./configure --help | grep
<br>
gridengine&quot; - doesn't show anything.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In such scenario how OpenMPI-1.2.7 can be integrated to SGE?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;After achieving this integration:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Is it possible to use -machinefile option in the SGE script?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Eg:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#$ -pe orte 4
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/opt/openmpi/bin/mpirun -machinefile $TMPDIR/machines -np
<br>
4 &lt;executable&gt;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. If &quot;qstat -f&quot; is showing 2 slots on node1 and 2 slots on node2
<br>
for a 4 process openmpi job, then will these processes run exactly  on
<br>
those nodes?
<br>
<p># qconf -sp orte
<br>
pe_name           orte
<br>
slots             999
<br>
user_lists        NONE
<br>
xuser_lists       NONE
<br>
start_proc_args   /bin/true
<br>
stop_proc_args    /bin/true
<br>
allocation_rule   $fill_up
<br>
control_slaves    TRUE
<br>
job_is_first_task FALSE
<br>
urgency_slots     min
<br>
<p><p>Thank you,
<br>
Sangamesh
<br>
Consultant - HPC
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7205.php">Gus Correa: "Re: [OMPI users] question regarding the configuration of multiple nics	for openmpi"</a>
<li><strong>Previous message:</strong> <a href="7203.php">Gilbert Grosdidier: "[OMPI users] mca btl_openib_flags default value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7206.php">Reuti: "Re: [OMPI users] OpenMPI-1.2.7 + SGE"</a>
<li><strong>Reply:</strong> <a href="7206.php">Reuti: "Re: [OMPI users] OpenMPI-1.2.7 + SGE"</a>
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
