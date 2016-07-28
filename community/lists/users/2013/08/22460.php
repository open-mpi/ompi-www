<?
$subject_val = "[OMPI users] Error launching single-node tasks from multiple-node job.";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 10 13:50:59 2013" -->
<!-- isoreceived="20130810175059" -->
<!-- sent="Sat, 10 Aug 2013 10:51:00 -0700" -->
<!-- isosent="20130810175100" -->
<!-- name="Lee-Ping Wang" -->
<!-- email="leeping_at_[hidden]" -->
<!-- subject="[OMPI users] Error launching single-node tasks from multiple-node job." -->
<!-- id="01c201ce95f2$2cb2c260$86184720$_at_stanford.edu" -->
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
<strong>Subject:</strong> [OMPI users] Error launching single-node tasks from multiple-node job.<br>
<strong>From:</strong> Lee-Ping Wang (<em>leeping_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-10 13:51:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22461.php">Edson Tavares de Camargo: "[OMPI users] Fault Tolerant Features in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="22459.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.7.2 rpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22462.php">Gustavo Correa: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<li><strong>Reply:</strong> <a href="22462.php">Gustavo Correa: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<li><strong>Maybe reply:</strong> <a href="22468.php">Lee-Ping Wang: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<li><strong>Maybe reply:</strong> <a href="22471.php">Lee-Ping Wang: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<li><strong>Maybe reply:</strong> <a href="22475.php">Lee-Ping Wang: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there,
<br>
<p>&nbsp;
<br>
<p>Recently, I've begun some calculations on a cluster where I submit a
<br>
multiple node job to the Torque batch system, and the job executes multiple
<br>
single-node parallel tasks.  That is to say, these tasks are intended to use
<br>
OpenMPI parallelism on each node, but no parallelism across nodes.  
<br>
<p>&nbsp;
<br>
<p>Some background: The actual program being executed is Q-Chem 4.0.  I use
<br>
OpenMPI 1.4.2 for this, because Q-Chem is notoriously difficult to compile
<br>
and this is the last known version of OpenMPI that this version of Q-Chem is
<br>
known to work with.
<br>
<p>&nbsp;
<br>
<p>My jobs are failing with the error message below; I do not observe this
<br>
error when submitting single-node jobs.  From reading the mailing list
<br>
archives (<a href="http://www.open-mpi.org/community/lists/users/2010/03/12348.php">http://www.open-mpi.org/community/lists/users/2010/03/12348.php</a>),
<br>
I believe it is looking for a PBS node file somewhere.  Since my jobs are
<br>
only parallel over the node they're running on, I believe that a node file
<br>
of any kind is unnecessary.  
<br>
<p>&nbsp;
<br>
<p>My question is: Why is OpenMPI behaving differently when I submit a
<br>
multi-node job compared to a single-node job?  How does OpenMPI detect that
<br>
it is running under a multi-node allocation?  Is there a way I can change
<br>
OpenMPI's behavior so it always thinks it's running on a single node,
<br>
regardless of the type of job I submit to the batch system?
<br>
<p>&nbsp;
<br>
<p>Thank you,
<br>
<p>&nbsp;
<br>
<p>-          Lee-Ping Wang (Postdoc in Dept. of Chemistry, Stanford
<br>
University)
<br>
<p>&nbsp;
<br>
<p>[compute-1-1.local:10910] [[42010,0],0] ORTE_ERROR_LOG: File open failure in
<br>
file ras_tm_module.c at line 153
<br>
<p>[compute-1-1.local:10909] [[42009,0],0] ORTE_ERROR_LOG: File open failure in
<br>
file ras_tm_module.c at line 153
<br>
<p>[compute-1-1.local:10911] [[42011,0],0] ORTE_ERROR_LOG: File open failure in
<br>
file ras_tm_module.c at line 153
<br>
<p>[compute-1-1.local:10910] [[42010,0],0] ORTE_ERROR_LOG: File open failure in
<br>
file ras_tm_module.c at line 87
<br>
<p>[compute-1-1.local:10909] [[42009,0],0] ORTE_ERROR_LOG: File open failure in
<br>
file ras_tm_module.c at line 87
<br>
<p>[compute-1-1.local:10911] [[42011,0],0] ORTE_ERROR_LOG: File open failure in
<br>
file ras_tm_module.c at line 87
<br>
<p>[compute-1-1.local:10910] [[42010,0],0] ORTE_ERROR_LOG: File open failure in
<br>
file base/ras_base_allocate.c at line 133
<br>
<p>[compute-1-1.local:10909] [[42009,0],0] ORTE_ERROR_LOG: File open failure in
<br>
file base/ras_base_allocate.c at line 133
<br>
<p>[compute-1-1.local:10911] [[42011,0],0] ORTE_ERROR_LOG: File open failure in
<br>
file base/ras_base_allocate.c at line 133
<br>
<p>[compute-1-1.local:10910] [[42010,0],0] ORTE_ERROR_LOG: File open failure in
<br>
file base/plm_base_launch_support.c at line 72
<br>
<p>[compute-1-1.local:10909] [[42009,0],0] ORTE_ERROR_LOG: File open failure in
<br>
file base/plm_base_launch_support.c at line 72
<br>
<p>[compute-1-1.local:10911] [[42011,0],0] ORTE_ERROR_LOG: File open failure in
<br>
file base/plm_base_launch_support.c at line 72
<br>
<p>[compute-1-1.local:10910] [[42010,0],0] ORTE_ERROR_LOG: File open failure in
<br>
file plm_tm_module.c at line 167
<br>
<p>[compute-1-1.local:10909] [[42009,0],0] ORTE_ERROR_LOG: File open failure in
<br>
file plm_tm_module.c at line 167
<br>
<p>[compute-1-1.local:10911] [[42011,0],0] ORTE_ERROR_LOG: File open failure in
<br>
file plm_tm_module.c at line 167
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22460/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22461.php">Edson Tavares de Camargo: "[OMPI users] Fault Tolerant Features in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="22459.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.7.2 rpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22462.php">Gustavo Correa: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<li><strong>Reply:</strong> <a href="22462.php">Gustavo Correa: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<li><strong>Maybe reply:</strong> <a href="22468.php">Lee-Ping Wang: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<li><strong>Maybe reply:</strong> <a href="22471.php">Lee-Ping Wang: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
<li><strong>Maybe reply:</strong> <a href="22475.php">Lee-Ping Wang: "Re: [OMPI users] Error launching single-node tasks from multiple-node job."</a>
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
