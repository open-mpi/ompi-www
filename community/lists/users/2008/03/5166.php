<?
$subject_val = "[OMPI users] openmpi-1.2.5 and globus-4.0.5";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 10 11:01:46 2008" -->
<!-- isoreceived="20080310150146" -->
<!-- sent="Mon, 10 Mar 2008 16:01:32 +0100" -->
<!-- isosent="20080310150132" -->
<!-- name="Christoph Spielmann" -->
<!-- email="cspielma_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.2.5 and globus-4.0.5" -->
<!-- id="47D54D4C.9030504_at_gup.jku.at" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-1.2.5 and globus-4.0.5<br>
<strong>From:</strong> Christoph Spielmann (<em>cspielma_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-10 11:01:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5167.php">Jim Hill: "[OMPI users] What architecture?  X86_64, that's what architecture!"</a>
<li><strong>Previous message:</strong> <a href="5165.php">Michael: "Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5200.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.2.5 and globus-4.0.5"</a>
<li><strong>Reply:</strong> <a href="5200.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.2.5 and globus-4.0.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everybody!
<br>
<p>I try to get OpenMPI and Globus to cooperate. These are the steps i 
<br>
executed in order to get OpenMPI working:
<br>
<p>&nbsp;&nbsp;&nbsp;1. export PATH=/opt/openmpi/bin/:$PATH
<br>
&nbsp;&nbsp;&nbsp;2. /opt/globus/setup/globus/setup-globus-job-manager-fork
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checking for mpiexec... /opt/openmpi/bin//mpiexec
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checking for mpirun... /opt/openmpi/bin//mpirun
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;find-fork-tools: creating ./config.status
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;config.status: creating fork.pm
<br>
&nbsp;&nbsp;&nbsp;3. restart VDT (includes GRAM, WSGRAM, mysql, rls...)
<br>
<p>As you can see the necessary OpenMPI-executables are recognized 
<br>
correctly by setup-globus-job-manager-fork. But when i actually try to 
<br>
execute a simple mpi-program using globus-job-run i get this:
<br>
<p>globus-job-run localhost -x '(jobType=mpi)' -np 2 -s ./hypercube 0
<br>
[hydra:10168] [0,0,0] ORTE_ERROR_LOG: Error in file 
<br>
runtime/orte_init_stage1.c at line 312
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_pls_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value -1 instead of ORTE_SUCCESS
<br>
<p>--------------------------------------------------------------------------
<br>
[hydra:10168] [0,0,0] ORTE_ERROR_LOG: Error in file 
<br>
runtime/orte_system_init.c at line 42
<br>
[hydra:10168] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/orte_init.c 
<br>
at line 52
<br>
--------------------------------------------------------------------------
<br>
Open RTE was unable to initialize properly.  The error occured while
<br>
attempting to orte_init().  Returned value -1 instead of ORTE_SUCCESS.
<br>
--------------------------------------------------------------------------
<br>
<p>The MPI-program itself is okey:
<br>
<p>which mpirun &amp;&amp; mpirun -np 2 hypercube 0
<br>
/opt/openmpi/bin/mpirun
<br>
Process 0 received broadcast message 'MPI_Broadcast with hypercube 
<br>
topology' from Process 0
<br>
Process 1 received broadcast message 'MPI_Broadcast with hypercube 
<br>
topology' from Process 0
<br>
<p><p>&nbsp;From what i read in the mailing list i think that something is wrong 
<br>
with the pls and globus. But i have no idea what could be wrong not to 
<br>
speak of how it could be fixed ;). so if someone would have an idea how 
<br>
this could be fixed, i'd be glad to hear it.
<br>
<p>Regards,
<br>
<p>Christoph
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5166/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5167.php">Jim Hill: "[OMPI users] What architecture?  X86_64, that's what architecture!"</a>
<li><strong>Previous message:</strong> <a href="5165.php">Michael: "Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5200.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.2.5 and globus-4.0.5"</a>
<li><strong>Reply:</strong> <a href="5200.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.2.5 and globus-4.0.5"</a>
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
