<?
$subject_val = "[OMPI users] Are there ways to reduce the memory used by OpenMPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 14:56:33 2009" -->
<!-- isoreceived="20091001185633" -->
<!-- sent="Thu, 01 Oct 2009 12:56:18 -0600" -->
<!-- isosent="20091001185618" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="[OMPI users] Are there ways to reduce the memory used by OpenMPI?" -->
<!-- id="E9F276A0010AF44ABD2C03ED2EDAE7DB06558975_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> [OMPI users] Are there ways to reduce the memory used by OpenMPI?<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-01 14:56:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10862.php">Åke Sandgren: "Re: [OMPI users] memalign usage in OpenMPI and	it's	consequencesfor TotalVIew"</a>
<li><strong>Previous message:</strong> <a href="10860.php">Ashley Pittman: "Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesfor TotalVIew"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10878.php">Jeff Squyres: "Re: [OMPI users] Are there ways to reduce the memory used by OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="10878.php">Jeff Squyres: "Re: [OMPI users] Are there ways to reduce the memory used by OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are there are tuning parameters than I can use to reduce the amount of memory used by OpenMPI?  I would very much like to use OpenMPI instead of MVAPICH, but I'm on a cluster where memory usage is the most important consideration. Here are three results which capture the problem:
<br>
<p>With the &quot;leave_pinned&quot; behavior turned on, I get good performance (19.528, lower is better)
<br>
<p>mpirun --prefix /usr/mpi/intel/openmpi-1.2.8 --machinefile /var/spool/torque/aux/7972.fwnaeglingio -np 28 --mca btl ^tcp  --mca mpi_leave_pinned 1 --mca mpool_base_use_mem_hooks 1 -x LD_LIBRARY_PATH -x MPI_ENVIRONMENT=1 /tmp/7972.fwnaeglingio/falconv4_ibm_openmpi -cycles 100 -ri restart.0 -ro /tmp/7972.fwnaeglingio/restart.0
<br>
Compute rate (processor-microseconds/cell/cycle):   19.528
<br>
Total memory usage:    38155.3477 MB (38.1553 GB)
<br>
<p><p>Turning off the leave_pinned behavior, I get considerably slower performance (28.788), but the memory usage is unchanged (still 38 GB)
<br>
<p>mpirun --prefix /usr/mpi/intel/openmpi-1.2.8 --machinefile /var/spool/torque/aux/7972.fwnaeglingio -np 28 -x LD_LIBRARY_PATH -x MPI_ENVIRONMENT=1 /tmp/7972.fwnaeglingio/falconv4_ibm_openmpi -cycles 100 -ri restart.0 -ro /tmp/7972.fwnaeglingio/restart.0
<br>
Compute rate (processor-microseconds/cell/cycle):   28.788
<br>
Total memory usage:    38335.7656 MB (38.3358 GB)
<br>
<p><p>Using MVAPICH, the performance is in the middle (23.6), but the memory usage is reduced by 5 to 6 GB out of 38 GB, a significant decrease to me.
<br>
<p>/usr/mpi/intel/mvapich-1.1.0/bin/mpirun_rsh -ssh -np 28 -hostfile /var/spool/torque/aux/7972.fwnaeglingio LD_LIBRARY_PATH=&quot;/usr/mpi/intel/mvapich-1.1.0/lib/shared:/usr/mpi/intel/openmpi-1.2.8/lib64:/appserv/intel/fce/10.1.008/lib:/appserv/intel/cce/10.1.008/lib&quot; MPI_ENVIRONMENT=1 /tmp/7972.fwnaeglingio/falconv4_ibm_mvapich -cycles 100 -ri restart.0 -ro /tmp/7972.fwnaeglingio/restart.0
<br>
Compute rate (processor-microseconds/cell/cycle):   23.608
<br>
Total memory usage:    32753.0586 MB (32.7531 GB)
<br>
<p><p>I didn't see anything in the FAQ that discusses memory usage other than the impact of the &quot;leave_pinned&quot; option, which apparently does not affect the memory usage in my case.  But I figure there must be a justification why OpenMPI would use 6 GB more than MVAPICH on the same case.
<br>
<p>Thanks for any insights.  Also attached is the output of ompi_info -a.
<br>
<p><p><p><p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10861/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10861/ompi_info.output">ompi_info.output</a>
</ul>
<!-- attachment="ompi_info.output" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10862.php">Åke Sandgren: "Re: [OMPI users] memalign usage in OpenMPI and	it's	consequencesfor TotalVIew"</a>
<li><strong>Previous message:</strong> <a href="10860.php">Ashley Pittman: "Re: [OMPI users] memalign usage in OpenMPI and it's	consequencesfor TotalVIew"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10878.php">Jeff Squyres: "Re: [OMPI users] Are there ways to reduce the memory used by OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="10878.php">Jeff Squyres: "Re: [OMPI users] Are there ways to reduce the memory used by OpenMPI?"</a>
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
