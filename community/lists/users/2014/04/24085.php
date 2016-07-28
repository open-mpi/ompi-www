<?
$subject_val = "[OMPI users] Problem with shell when launching jobs with OpenMPI 1.6.5 rsh";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 16:05:06 2014" -->
<!-- isoreceived="20140407200506" -->
<!-- sent="Mon, 7 Apr 2014 20:04:29 +0000" -->
<!-- isosent="20140407200429" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with shell when launching jobs with OpenMPI 1.6.5 rsh" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F0CB628D3_at_HDXDSP53.us.lmco.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem with shell when launching jobs with OpenMPI 1.6.5 rsh<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-07 16:04:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24086.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem for multiple clusters using mpirun"</a>
<li><strong>Previous message:</strong> <a href="24084.php">Hamid Saeed: "Re: [OMPI users] problem for multiple clusters using mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24087.php">Ralph Castain: "Re: [OMPI users] Problem with shell when launching jobs with OpenMPI 1.6.5 rsh"</a>
<li><strong>Reply:</strong> <a href="24087.php">Ralph Castain: "Re: [OMPI users] Problem with shell when launching jobs with OpenMPI 1.6.5 rsh"</a>
<li><strong>Reply:</strong> <a href="24089.php">Reuti: "Re: [OMPI users] Problem with shell when launching jobs with OpenMPI 1.6.5 rsh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am submitting a job for execution under SGE.  My default shell is /bin/csh.  The script that is submitted has #!/bin/bash at the top.  The script runs on the 1st node allocated to the job.  The script runs a Python wrapper that ultimately issues the following mpirun command:
<br>
<p>/apps/local/test/openmpi/bin/mpirun --machinefile mpihosts.914 -np 48 -x LD_LIBRARY_PATH -x MPI_ENVIRONMENT=1 --mca btl ^tcp --mca shmem_mmap_relocate_backing_file -1 --bind-to-core --bycore --mca orte_rsh_agent /usr/bin/rsh --mca plm_rsh_disable_qrsh 1 /apps/local/test/solver/bin/solver_openmpi -cycles 50 -ri restart.0 -i flow.inp &gt;&amp; output
<br>
<p>Just so there's no confusion, OpenMPI is built without support for SGE.  It should be using rsh to launch.
<br>
<p>There are 4 nodes involved (each 12 cores, 48 processes total).  In the output file, I see 3 sets of messages as shown below.  I assume I am seeing 1 set of messages for each of the 3 remote nodes where processes need to be launched:
<br>
<p>/bin/.: Permission denied.
<br>
OPAL_PREFIX=/apps/local/falcon2014/openmpi: Command not found.
<br>
export: Command not found.
<br>
PATH=/apps/local/test/openmpi/bin:/bin:/usr/bin:/usr/ccs/bin:/usr/local/bin:/usr/openwin/bin:/usr/local/etc:/home/bloscel/bin:/usr/ucb:/usr/bsd: Command not found.
<br>
export: Command not found.
<br>
LD_LIBRARY_PATH: Undefined variable.
<br>
<p>These look like errors you get when csh is trying to parse commands intended for bash.
<br>
<p>Does anyone know what may be going on here?
<br>
<p>Thanks,
<br>
<p>Ed
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24085/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24086.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem for multiple clusters using mpirun"</a>
<li><strong>Previous message:</strong> <a href="24084.php">Hamid Saeed: "Re: [OMPI users] problem for multiple clusters using mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24087.php">Ralph Castain: "Re: [OMPI users] Problem with shell when launching jobs with OpenMPI 1.6.5 rsh"</a>
<li><strong>Reply:</strong> <a href="24087.php">Ralph Castain: "Re: [OMPI users] Problem with shell when launching jobs with OpenMPI 1.6.5 rsh"</a>
<li><strong>Reply:</strong> <a href="24089.php">Reuti: "Re: [OMPI users] Problem with shell when launching jobs with OpenMPI 1.6.5 rsh"</a>
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
