<?
$subject_val = "[OMPI devel] mpirun + aprun question";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 12 14:13:51 2014" -->
<!-- isoreceived="20140912181351" -->
<!-- sent="Fri, 12 Sep 2014 18:13:48 +0000" -->
<!-- isosent="20140912181348" -->
<!-- name="Pritchard Jr., Howard" -->
<!-- email="howardp_at_[hidden]" -->
<!-- subject="[OMPI devel] mpirun + aprun question" -->
<!-- id="5F6FB0CDAF4F98419A0D970E1F65ED05B204E5_at_ECS-EXG-P-MB05.win.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] mpirun + aprun question<br>
<strong>From:</strong> Pritchard Jr., Howard (<em>howardp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-12 14:13:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15821.php">Ralph Castain: "Re: [OMPI devel] mpirun + aprun question"</a>
<li><strong>Previous message:</strong> <a href="15819.php">Brad Benton: "Re: [OMPI devel] Need to know your Github ID"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15821.php">Ralph Castain: "Re: [OMPI devel] mpirun + aprun question"</a>
<li><strong>Reply:</strong> <a href="15821.php">Ralph Castain: "Re: [OMPI devel] mpirun + aprun question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>So, I've got a testbed cray system with no batch scheduler, just use the native
<br>
alps both as the resource manager and as the job launcher for the orte daemons.
<br>
<p>What I'm noticing is that the mpirun command and -host option, or otherwise
<br>
trying to specify via an mpirun way, the nodes to run the app on is ignored.
<br>
<p>In this sort of environment, ORTE is going to need to figure out how to load up
<br>
the aprun -L list_of_nids argument, but apparently doesn't do that.
<br>
<p>Is this intended behavior?
<br>
<p>Example:
<br>
<p>crayadm_at_buffy:~/hpp&gt; mpirun -np 2 -N 1  --debug-daemons --host nid00022,nid00021 ./my_script.sh
<br>
plm:alps aprun -n 2 -N 1 -cc none orted -mca orte_debug_daemons 1 -mca orte_ess_jobid 337444864 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 3 -mca orte_hnp_uri 337444864.0;tcp://10.128.0.3:39190
<br>
Daemon [[5149,0],1] checking in as pid 7398 on host 20
<br>
Daemon [[5149,0],1] checking in as pid 6540 on host 21
<br>
<p>What's happening is that alps is just doing its default thing of grabbing the first set of nodes it can, which on
<br>
my little machine starts at nid00020.
<br>
<p>What I'd prefer to see with ORTE and alps is that ORTE always build the explicit -L list_of_nids
<br>
so that a user can control the way the orte's are being launched, just as with using aprun directly
<br>
one can do either within a non alps managed batch environment and when a batch scheduler
<br>
is managing things and telling alps where to launch the job.
<br>
<p>I had to use this -L feature a lot when debugging large customer system problems.
<br>
<p>Can I assume LANL owns the alps pml component?
<br>
<p>Howard
<br>
<p><p>-------------------------------------------------
<br>
Howard Pritchard
<br>
HPC-5
<br>
Los Alamos National Laboratory
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15820/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15821.php">Ralph Castain: "Re: [OMPI devel] mpirun + aprun question"</a>
<li><strong>Previous message:</strong> <a href="15819.php">Brad Benton: "Re: [OMPI devel] Need to know your Github ID"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15821.php">Ralph Castain: "Re: [OMPI devel] mpirun + aprun question"</a>
<li><strong>Reply:</strong> <a href="15821.php">Ralph Castain: "Re: [OMPI devel] mpirun + aprun question"</a>
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
