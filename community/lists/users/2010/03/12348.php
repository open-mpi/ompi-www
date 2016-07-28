<?
$subject_val = "[OMPI users] OMPI looking for PBS file?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 14 16:34:11 2010" -->
<!-- isoreceived="20100314203411" -->
<!-- sent="Sun, 14 Mar 2010 14:34:05 -0600" -->
<!-- isosent="20100314203405" -->
<!-- name="John R. Cary" -->
<!-- email="cary_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI looking for PBS file?" -->
<!-- id="4B9D483D.5070602_at_txcorp.com" -->
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
<strong>Subject:</strong> [OMPI users] OMPI looking for PBS file?<br>
<strong>From:</strong> John R. Cary (<em>cary_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-14 16:34:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12349.php">Josh Bernstein: "Re: [OMPI users] OMPI looking for PBS file?"</a>
<li><strong>Previous message:</strong> <a href="12347.php">cjohnson_at_[hidden]: "[OMPI users] Windows: problems running on a second system. 2nd try."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12349.php">Josh Bernstein: "Re: [OMPI users] OMPI looking for PBS file?"</a>
<li><strong>Reply:</strong> <a href="12349.php">Josh Bernstein: "Re: [OMPI users] OMPI looking for PBS file?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a script that launches a bunch of runs on some compute nodes of
<br>
a cluster.  Once I get through the queue, I query PBS for my machine
<br>
file, then I copy that to a local file 'nodes' which I use for mpiexec:
<br>
<p>mpiexec -machinefile /home/research/cary/projects/vpall/vptests/nodes 
<br>
-np 6 /hom
<br>
e/research/cary/projects/vpall/builds/vorpal/par/vorpal/vorpal -i 
<br>
bathtubAntenna
<br>
.in -dim 2 -o bathtubAntenna2p -n 100 -d 100
<br>
<p>but this fails with
<br>
<p>[node47:07004] [[25769,0],0] ORTE_ERROR_LOG: File open failure in file 
<br>
../../../
<br>
../../orte/mca/ras/tm/ras_tm_module.c at line 153
<br>
[node47:07004] [[25769,0],0] ORTE_ERROR_LOG: File open failure in file 
<br>
../../../
<br>
../../orte/mca/ras/tm/ras_tm_module.c at line 87
<br>
[node47:07004] [[25769,0],0] ORTE_ERROR_LOG: File open failure in file 
<br>
../../../
<br>
../orte/mca/ras/base/ras_base_allocate.c at line 133
<br>
[node47:07004] [[25769,0],0] ORTE_ERROR_LOG: File open failure in file 
<br>
../../../
<br>
../orte/mca/plm/base/plm_base_launch_support.c at line 72
<br>
[node47:07004] [[25769,0],0] ORTE_ERROR_LOG: File open failure in file 
<br>
../../../
<br>
../../orte/mca/plm/tm/plm_tm_module.c at line 167
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
<br>
launch so we are aborting.
<br>
<p>The appropriate code snippet is
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* setup the full path to the PBS file */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;filename = opal_os_path(false, mca_ras_tm_component.nodefile_dir,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pbs_jobid, NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fp = fopen(filename, &quot;r&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == fp) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(ORTE_ERR_FILE_OPEN_FAILURE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(filename);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ORTE_ERR_FILE_OPEN_FAILURE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>which kind of looks like it might be trying to open my pbs file instead
<br>
of the file I gave on the command line?  I really don't know, but does
<br>
anyone have any ideas here?
<br>
<p>Thx....John Cary
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12348/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12349.php">Josh Bernstein: "Re: [OMPI users] OMPI looking for PBS file?"</a>
<li><strong>Previous message:</strong> <a href="12347.php">cjohnson_at_[hidden]: "[OMPI users] Windows: problems running on a second system. 2nd try."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12349.php">Josh Bernstein: "Re: [OMPI users] OMPI looking for PBS file?"</a>
<li><strong>Reply:</strong> <a href="12349.php">Josh Bernstein: "Re: [OMPI users] OMPI looking for PBS file?"</a>
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
