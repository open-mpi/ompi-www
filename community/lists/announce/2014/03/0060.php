<?
$subject_val = "[Open MPI Announce] Open MPI 1.7.5 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 20 15:04:34 2014" -->
<!-- isoreceived="20140320190434" -->
<!-- sent="Thu, 20 Mar 2014 12:02:58 -0700" -->
<!-- isosent="20140320190258" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI 1.7.5 released" -->
<!-- id="B5358BBB-15BE-41FB-9DEA-500F61FDAFDC_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [Open MPI Announce] Open MPI 1.7.5 released<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-20 15:02:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0061.php">Ralph Castain: "[Open MPI Announce] v1.8 Released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2014/02/0059.php">Ralph Castain: "[Open MPI Announce]  Open MPI 1.7.4 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic, and industry partners, is pleased to announce the release of Open MPI version 1.7.5. 
<br>
<p><p>This is the final release in the 1.7 feature series, and therefore represents the complete feature set that will be seen in the 1.8 stable series. Due to a pressing milestone for several Linux distributions, we will be rolling the 1.7.5 release to its stable 1.8.0 version on March 31, 2014. Accordingly, considerable testing was done on this release to ensure it is as complete as possible. We would particularly welcome any feedback on it prior to the 1.8.0 release so the stable version can be as bug-free as possible.
<br>
<p>Changes in this release include:
<br>
<p>&nbsp;**********************************************************************
<br>
&nbsp;*  Open MPI is now fully MPI-3.0 compliant
<br>
&nbsp;**********************************************************************
<br>
- Add Linux OpenSHMEM support built on top of Open MPI's MPI
<br>
&nbsp;&nbsp;layer. Thanks to Mellanox for contributing this new feature.
<br>
- Allow restricting ORTE daemons to specific cores using the
<br>
&nbsp;&nbsp;orte_daemon_cores MCA param.
<br>
- Ensure to properly set &quot;locality&quot; flags for processes launched via
<br>
&nbsp;&nbsp;MPI dynamic functions such as MPI_COMM_SPAWN.
<br>
- Fix MPI_GRAPH_CREATE when nnodes is smaller than the size of the old
<br>
&nbsp;&nbsp;communicator.
<br>
- usnic BTL now supports underlying UDP transport.
<br>
- usnic BTL now checks for common connectivty errors at first send to
<br>
&nbsp;&nbsp;a remote server.
<br>
- Minor scalability improvements in the usnic BTL.
<br>
- ompi_info now lists whether the Java MPI bindings are available or not.
<br>
- MPI-3: mpi.h and the Fortran interfaces now report MPI_VERSION==3
<br>
&nbsp;&nbsp;and MPI_SUBVERSION==0.
<br>
- MPI-3: Added support for new RMA functions and functionality.
<br>
- Fix MPI_Info &quot;const buglet.  Thanks to Orion Poplawski for
<br>
&nbsp;&nbsp;identifying the issue.
<br>
- Multiple fixes to mapping/binding options. Thanks to Tetsuya Mishima
<br>
&nbsp;&nbsp;for his assistance.
<br>
- Multiple fixes for normal and abnormal process termination,
<br>
&nbsp;&nbsp;including singleton MPI_Abort and ensuring to kill entire process
<br>
&nbsp;&nbsp;groups when abnormally terminating a job.
<br>
- Fix DESTDIR install for javadocs.  Thanks to Orion Poplawski for
<br>
&nbsp;&nbsp;pointing out the issue.
<br>
- Various performance improvements for the MPI Java bindings.
<br>
- OMPI now uses its own internal random number generator and will not
<br>
&nbsp;&nbsp;perturb srand() and friends.
<br>
- Some cleanups for Cygwin builds.  Thanks to Marco Atzeri for the
<br>
&nbsp;&nbsp;patches.
<br>
- Add a new collective component (coll/ml) that provides substantially
<br>
&nbsp;&nbsp;improved performance.  It is still experimental, and requires
<br>
&nbsp;&nbsp;setting coll_ml_priority &gt; 0 to become active.
<br>
- Add version check during startup to ensure you are using the same
<br>
&nbsp;&nbsp;version of Open MPI on all nodes in a job.
<br>
- Significantly improved the performance of MPI_DIMS_CREATE for large
<br>
&nbsp;&nbsp;values.  Thanks to Andreas Sch&#137;fer for the contribution.
<br>
- Removed ASYNCHRONOUS keyword from the &quot;ignore TKR&quot; mpi_f08 module.
<br>
- Deprecated the following mpirun options: 
<br>
&nbsp;&nbsp;--bynode, --bycore, --byslot: replaced with --map-by node|core|slot.
<br>
&nbsp;&nbsp;--npernode, --npersocket: replaced with --map-by ppr:N:node and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--map-by ppr:N:socket, respectively
<br>
- Pick NFS &quot;infinitely stale&quot; fix from ROMIO upstream.
<br>
- Various PMI2 fixes and extension to support broader range of mappings.
<br>
- Improve launch performance at large scale.
<br>
- Add support for PBS/Torque environments that set environment
<br>
&nbsp;&nbsp;variables to indicate the number of slots available on each nodes.
<br>
&nbsp;&nbsp;Set the ras_tm_smp MCA parameter to &quot;1&quot; to enable this mode.
<br>
- Add new, more scalable endpoint exchange (commonly called &quot;modex&quot;)
<br>
&nbsp;&nbsp;method that only exchanges endpoint data on a per-peer basis
<br>
&nbsp;&nbsp;on first message. Not all transports have been updated to use
<br>
&nbsp;&nbsp;this feature. Set the rte_orte_direct_modex parameter to &quot;1&quot;
<br>
&nbsp;&nbsp;to enable this mode.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0061.php">Ralph Castain: "[Open MPI Announce] v1.8 Released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2014/02/0059.php">Ralph Castain: "[Open MPI Announce]  Open MPI 1.7.4 released"</a>
<!-- nextthread="start" -->
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
