<?
$subject_val = "[OMPI users] &quot;Failed to find the following executable&quot; problem under Torque";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 25 07:55:18 2009" -->
<!-- isoreceived="20090925115518" -->
<!-- sent="Fri, 25 Sep 2009 05:55:05 -0600" -->
<!-- isosent="20090925115505" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="[OMPI users] &amp;quot;Failed to find the following executable&amp;quot; problem under Torque" -->
<!-- id="E9F276A0010AF44ABD2C03ED2EDAE7DB06373435_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> [OMPI users] &quot;Failed to find the following executable&quot; problem under Torque<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-25 07:55:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10766.php">Thomas Ropars: "[OMPI users] segfault on finalize"</a>
<li><strong>Previous message:</strong> <a href="10764.php">Richard Treumann: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10772.php">Jeff Squyres: "Re: [OMPI users] &quot;Failed to find the following executable&quot; problemunder Torque"</a>
<li><strong>Reply:</strong> <a href="10772.php">Jeff Squyres: "Re: [OMPI users] &quot;Failed to find the following executable&quot; problemunder Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm having a problem running OpenMPI under Torque.  It complains like there is a command syntax problem, but the three variations below are all correct, best I can tell using mpirun -help.  The environment in which the command executes, i.e. PATH and LD_LIBRARY_PATH, is correct.  Torque is 2.3.x.  OpenMPI is 1.2.8.  OFED is 1.4.
<br>
<p>Somewhere in the FAQ I had read that you must not give -machinefile under Torque with OpenMPI 1.2.8 and you did not need to give -np.  That's why I tried variation 3 below without either of these options, but it still fails.
<br>
<p>Thanks for any help
<br>
<p><p><p>/usr/mpi/intel/openmpi-1.2.8/bin/mpirun -np 28 /tmp/43.fwnaeglingio/falconv4_ibm_openmpi -cycles 100 -ri restart.0 -ro /tmp/43.fwnaeglingio/restart.0
<br>
--------------------------------------------------------------------------
<br>
Failed to find the following executable:
<br>
<p>Host:       n8n26
<br>
Executable: -p
<br>
<p>Cannot continue.
<br>
<p><p>mpirun --prefix /usr/mpi/intel/openmpi-1.2.8 --machinefile /var/spool/torque/aux/45.fwnaeglingio -np 28 --mca btl ^tcp  --mca mpi_leave_pinned 1 --mca mpool_base_use_mem_hooks 1 -x LD_LIBRARY_PATH -x MPI_ENVIRONMENT /tmp/45.fwnaeglingio/falconv4_ibm_openmpi -cycles 100 -ri restart.0 -ro /tmp/45.fwnaeglingio/restart.0
<br>
--------------------------------------------------------------------------
<br>
Failed to find or execute the following executable:
<br>
<p>Host:       n8n27
<br>
Executable: --prefix /usr/mpi/intel/openmpi-1.2.8
<br>
<p>Cannot continue.
<br>
<p><p>/usr/mpi/intel/openmpi-1.2.8/bin/mpirun -x LD_LIBRARY_PATH -x MPI_ENVIRONMENT=1 /tmp/47.fwnaeglingio/falconv4_ibm_openmpi -cycles 100 -ri restart.0 -ro /tmp/47.fwnaeglingio/restart.0
<br>
--------------------------------------------------------------------------
<br>
Failed to find the following executable:
<br>
<p>Host:       n8n27
<br>
Executable: -
<br>
<p>Cannot continue.
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10765/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10766.php">Thomas Ropars: "[OMPI users] segfault on finalize"</a>
<li><strong>Previous message:</strong> <a href="10764.php">Richard Treumann: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10772.php">Jeff Squyres: "Re: [OMPI users] &quot;Failed to find the following executable&quot; problemunder Torque"</a>
<li><strong>Reply:</strong> <a href="10772.php">Jeff Squyres: "Re: [OMPI users] &quot;Failed to find the following executable&quot; problemunder Torque"</a>
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
