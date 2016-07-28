<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 28 15:38:24 2006" -->
<!-- isoreceived="20060828193824" -->
<!-- sent="Mon, 28 Aug 2006 15:37:55 -0400" -->
<!-- isosent="20060828193755" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI v1.1.1" -->
<!-- id="C118BE53.247EE%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-28 15:37:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="../../2006/10/0008.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.1.2 release"</a>
<li><strong>Previous message:</strong> <a href="../../2006/06/0006.php">Jeff Squyres \(jsquyres\): "[Open MPI Announce] Open MPI v1.1 release"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic, and
<br>
industry partners, is pleased to announce the release of Open MPI version
<br>
1.1.1.  This release is mainly a bug fix release over the the v1.1 release,
<br>
but there are few minor new features.  Version 1.1.1 can be downloaded from
<br>
the main Open MPI web site or any of its mirrors (mirrors will be updating
<br>
shortly). 
<br>
<p>We strongly recommend that all users upgrade to version 1.1.1 if possible.
<br>
<p>Here are a list of changes in v1.1.1 as compared to v1.1:
<br>
<p>- Fix for Fortran string handling in various MPI API functions.
<br>
- Fix for Fortran status handling in MPI_WAITSOME and MPI_TESTSOME.
<br>
- Various fixes for the XL compilers.
<br>
- Automatically disable using mallot() on AIX.
<br>
- Memory fixes for 64 bit platforms with registering MCA parameters in
<br>
&nbsp;&nbsp;the self and MX BTL components.
<br>
- Fixes for BProc to support oversubscription and changes to the
<br>
&nbsp;&nbsp;mapping algorithm so that mapping processes &quot;by slot&quot; works as
<br>
&nbsp;&nbsp;expected.
<br>
- Fixes for various abort cases to not hang and clean up nicely.
<br>
- If using the Intel 9.0 v20051201 compiler on an IA64 platform, the
<br>
&nbsp;&nbsp;ptmalloc2 memory manager component will automatically disable
<br>
&nbsp;&nbsp;itself.  Other versions of the Intel compiler on this platform seem
<br>
&nbsp;&nbsp;to work fine (e.g., 9.1).
<br>
- Added &quot;host&quot; MPI_Info key to MPI_COMM_SPAWN and
<br>
&nbsp;&nbsp;MPI_COMM_SPAWN_MULTIPLE.
<br>
- Add missing C++ methods: MPI::Datatype::Create_indexed_block,
<br>
&nbsp;&nbsp;MPI::Datatype::Create_resized, MPI::Datatype::Get_true_extent.
<br>
- Fix OSX linker issue with Fortran bindings.
<br>
- Fixed MPI_COMM_SPAWN to start spawning new processes in slots that
<br>
&nbsp;&nbsp;(according to Open MPI) are not already in use.
<br>
- Added capability to &quot;mpirun a.out&quot; (without specifying -np) that
<br>
&nbsp;&nbsp;will run on all currently-allocated resources (e.g., within a batch
<br>
&nbsp;&nbsp;job such as SLURM, Torque, etc.).
<br>
- Fix a bug with one particular case of MPI_BCAST.  Thanks to Doug
<br>
&nbsp;&nbsp;Gregor for identifying the problem.
<br>
- Ensure that the shared memory mapped file is only created when there
<br>
&nbsp;&nbsp;is more than one process on a node.
<br>
- Fixed problems with BProc stdin forwarding.
<br>
- Fixed problem with MPI_TYPE_INDEXED datatypes.  Thanks to Yven
<br>
&nbsp;&nbsp;Fournier for identifying this problem.
<br>
- Fix some thread safety issues in MPI attributes and the openib BTL.
<br>
- Fix the BProc allocator to not potentially use the same resources
<br>
&nbsp;&nbsp;across multiple ORTE universes.
<br>
- Fix gm resource leak.
<br>
- More latency reduction throughout the code base.
<br>
- Make the TM PLS (PBS Pro, Torque, Open PBS) more scalable, and fix
<br>
&nbsp;&nbsp;some latent bugs that crept in v1.1.  Thanks to the Thunderbird crew
<br>
&nbsp;&nbsp;at Sandia National Laboratories and Martin Schaffoner for access to
<br>
&nbsp;&nbsp;testing facilities to make this happen.
<br>
- Added new command line options to mpirun:
<br>
&nbsp;&nbsp;--nolocal: Do not run any MPI processes on the same node as mpirun
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(compatibility with the OSC mpiexec launcher)
<br>
&nbsp;&nbsp;--nooversubscribe: Abort if the number of processes requested would
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cause oversubscription
<br>
&nbsp;&nbsp;--quiet / -q: do not show spurious status messages
<br>
&nbsp;&nbsp;--version / -V: show the version of Open MPI
<br>
- Fix bus error in XGrid process starter.  Thanks to Frank from the
<br>
&nbsp;&nbsp;Open MPI user's list for identifying the problem.
<br>
- Fix data size mismatches that caused memory errors on PPC64
<br>
&nbsp;&nbsp;platforms during the startup of the openib BTL.
<br>
- Allow propagation of SIGUSR1 and SIGUSR2 signals from mpirun to
<br>
&nbsp;&nbsp;back-end MPI processes.
<br>
- Add missing MPI::Is_finalized() function.
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="../../2006/10/0008.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.1.2 release"</a>
<li><strong>Previous message:</strong> <a href="../../2006/06/0006.php">Jeff Squyres \(jsquyres\): "[Open MPI Announce] Open MPI v1.1 release"</a>
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
