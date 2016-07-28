<?
$subject_val = "[OMPI users] Checkpoint problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 20 03:16:56 2008" -->
<!-- isoreceived="20080820071656" -->
<!-- sent="Wed, 20 Aug 2008 09:16:51 +0200" -->
<!-- isosent="20080820071651" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="[OMPI users] Checkpoint problem" -->
<!-- id="3a37617f0808200016w1d422a28ne4477e34fdef8030_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Checkpoint problem<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-20 03:16:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6393.php">Matthias Hovestadt: "Re: [OMPI users] Checkpoint problem"</a>
<li><strong>Previous message:</strong> <a href="6391.php">Robert Kubrick: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6393.php">Matthias Hovestadt: "Re: [OMPI users] Checkpoint problem"</a>
<li><strong>Reply:</strong> <a href="6393.php">Matthias Hovestadt: "Re: [OMPI users] Checkpoint problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI developers,
<br>
i'm testing checkpoint and restart with OpenMPI 1.4 nightly. Test machine is
<br>
IBM Blade System over Infiniband with 4 processors every communication node.
<br>
At the moment,  I have some problems. My application is  a simply
<br>
communication ring between processors, with parametric loop.
<br>
<p>*First case:* 8 procs over 2 nodes.
<br>
<p>Start command:
<br>
<p>$ mpirun -machinefile machinefile -am ft-enable-cr ./ring -t 5000000
<br>
<p>The output is:
<br>
<p>[node0316:20037] mca: base: components_open: Looking for filem components
<br>
[node0316:20037] mca: base: components_open: including only filem
<br>
components that are checkpoint enabled
<br>
[node0316:20037] mca: base: components_open: (filem) Component rsh is
<br>
Checkpointable
<br>
[node0316:20037] mca: base: components_open: opening filem components
<br>
[node0316:20037] mca: base: components_open: found loaded component rsh
<br>
[node0316:20037] mca: base: components_open: component rsh has no
<br>
register function
<br>
[node0316:20037] filem:rsh: open()
<br>
[node0316:20037] filem:rsh: open: priority   = 20
<br>
[node0316:20037] filem:rsh: open: verbosity  = 0
<br>
[node0316:20037] filem:rsh: open: cp command  = scp
<br>
[node0316:20037] filem:rsh: open: rsh command  = ssh
<br>
[node0316:20037] mca: base: components_open: component rsh open function
<br>
successful
<br>
[node0316:20037] mca:base:select: Auto-selecting filem components
<br>
[node0316:20037] mca:base:select:(filem) Querying component [rsh]
<br>
[node0316:20037] mca:base:select:(filem) Query of component [rsh] set
<br>
priority to 20
<br>
[node0316:20037] mca:base:select:(filem) Selected component [rsh]
<br>
[node0316:20037] mca: base: components_open: Looking for snapc components
<br>
[node0316:20037] mca: base: components_open: including only snapc
<br>
components that are checkpoint enabled
<br>
[node0316:20037] mca: base: components_open: (snapc) Component full is
<br>
Checkpointable
<br>
[node0316:20037] mca: base: components_open: opening snapc components
<br>
[node0316:20037] mca: base: components_open: found loaded component full
<br>
[node0316:20037] mca: base: components_open: component full has no
<br>
register function
<br>
[node0316:20037] snapc:full: open()
<br>
[node0316:20037] snapc:full: open: priority    = 20
<br>
[node0316:20037] snapc:full: open: verbosity   = 100
<br>
[node0316:20037] snapc:full: open: skip_filem  = False
<br>
[node0316:20037] mca: base: components_open: component full open
<br>
function successful
<br>
[node0316:20037] mca:base:select: Auto-selecting snapc components
<br>
[node0316:20037] mca:base:select:(snapc) Querying component [full]
<br>
[node0316:20037] snapc:full: component_query()
<br>
[node0316:20037] mca:base:select:(snapc) Query of component [full] set
<br>
priority to 20
<br>
[node0316:20037] mca:base:select:(snapc) Selected component [full]
<br>
[node0316:20037] snapc:full: module_init(1, 1)
<br>
[node0316:20037] snapc:full: module_init: Global Snapshot Coordinator
<br>
** HANG**
<br>
<p>The application doesn't start, and appears locked.
<br>
<p>Strace command before mpirun shows  the informations below:
<br>
<p>poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
<br>
events=POLLIN}], 3, 1000) = 0
<br>
poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
<br>
events=POLLIN}], 3, 1000) = 0
<br>
poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
<br>
events=POLLIN}], 3, 1000) = 0
<br>
poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
<br>
events=POLLIN}], 3, 1000) = 0
<br>
poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
<br>
events=POLLIN}], 3, 1000) = 0
<br>
poll(...
<br>
<p>doing nothing..
<br>
<p>*Second case:* 1 node, 4 processor ( without intercommunication over
<br>
Infiniband)
<br>
<p>In this case, mpirun works well, but the checkpoint procedure fails:
<br>
<p>ompi-checkpoint 20109
<br>
[node0316:20134] Error: Unable to get the current working directory
<br>
[node0316:20134] [[42404,0],0] ORTE_ERROR_LOG: Not found in file
<br>
orte-checkpoint.c at line 395
<br>
[node0316:20134] HNP with PID 20109 Not found!
<br>
<p>I don't understand why OpenMPI doesn't find that log file.
<br>
<p>Any idea?
<br>
<p>Thanks in advance.
<br>
<p><p><p><p><p><pre>
-- 
Gabriele Fatigati
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it Tel: +39 051 6171722
g.fatigati_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6392/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6393.php">Matthias Hovestadt: "Re: [OMPI users] Checkpoint problem"</a>
<li><strong>Previous message:</strong> <a href="6391.php">Robert Kubrick: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6393.php">Matthias Hovestadt: "Re: [OMPI users] Checkpoint problem"</a>
<li><strong>Reply:</strong> <a href="6393.php">Matthias Hovestadt: "Re: [OMPI users] Checkpoint problem"</a>
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
