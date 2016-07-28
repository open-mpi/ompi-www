<?
$subject_val = "[Open MPI Announce]  Open MPI 1.7.3 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 17 16:43:50 2013" -->
<!-- isoreceived="20131017204350" -->
<!-- sent="Thu, 17 Oct 2013 13:43:47 -0700" -->
<!-- isosent="20131017204347" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[Open MPI Announce]  Open MPI 1.7.3 released" -->
<!-- id="C38C3743-50BB-436E-8E51-765713357599_at_open-mpi.org" -->
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
<strong>Subject:</strong> [Open MPI Announce]  Open MPI 1.7.3 released<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-17 16:43:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2013/11/0058.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Open MPI @SC next week"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2013/06/0056.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Open MPI 1.7.2 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic, and industry partners, is pleased to announce the release of Open MPI version 1.7.3. As usual, the release is available from the OpenMPI web site:
<br>
<p><a href="http://www.open-mpi.org/software/ompi/v1.7/">http://www.open-mpi.org/software/ompi/v1.7/</a>
<br>
<p>This is a joint bug-fix and feature release within the 1.7 feature release series. 
<br>
<p>- Make CUDA-aware support dynamically load libcuda.so so CUDA-aware
<br>
&nbsp;&nbsp;MPI library can run on systems without CUDA software.
<br>
- Fix various issues with dynamic processes and intercommunicator
<br>
&nbsp;&nbsp;operations under Torque.  Thanks to Suraj Prabhakaran for reporting
<br>
&nbsp;&nbsp;the problem.
<br>
- Enable support for the Mellanox MXM2 library by default.
<br>
- Improve support for Portals 4.
<br>
- Various Solaris fixes.  Many thanks to Siegmar Gross for his
<br>
&nbsp;&nbsp;incredible patience in reporting all the issues.
<br>
- MPI-2.2: Add reduction support for MPI_C_*COMPLEX and MPI::*COMPLEX.
<br>
- Fixed internal accounting when openpty() fails.  Thanks to Michal
<br>
&nbsp;&nbsp;Peclo for reporting the issue and providing a patch.
<br>
- Fixed too-large memory consumption in XRC mode of the openib BTL.
<br>
&nbsp;&nbsp;Thanks to Alexey Ryzhikh for the patch.
<br>
- Add bozo check for negative np values to mpirun to prevent a
<br>
&nbsp;&nbsp;deadlock.  Thanks to Upinder Malhi for identifying the issue.
<br>
- Fixed MPI_IS_THREAD_MAIN behavior.  Thanks to Lisandro Dalcin for
<br>
&nbsp;&nbsp;pointing out the problem.
<br>
- Various rankfile fixes.
<br>
- Fix functionality over iWARP devices.
<br>
- Various memory and performance optimizations and tweaks.
<br>
- Fix MPI_Cancel issue identified by Fujitsu.
<br>
- Add missing support for MPI_Get_address in the &quot;use mpi&quot; TKR
<br>
&nbsp;&nbsp;implementation.  Thanks to Hugo Gagnon for identifying the issue.
<br>
- MPI-3: Add support for MPI_Count.
<br>
- MPI-2.2: Add missing MPI_IN_PLACE support for MPI_ALLTOALL.
<br>
- Added new usnic BTL to support the Cisco usNIC device.
<br>
- Minor VampirTrace update to 5.14.4.4.
<br>
- Removed support for ancient OS X systems (i.e., prior to 10.5).
<br>
- Fixed obscure packing/unpacking datatype bug.  Thanks to Takahiro
<br>
&nbsp;&nbsp;Kawashima for identifying the issue.
<br>
- Add run-time support for PMI2 environments.
<br>
- Update openib BTL default parameters to include support for Mellanox
<br>
&nbsp;&nbsp;ConnectX3-Pro devices.
<br>
- Update libevent to v2.0.21.
<br>
- &quot;ompi_info --param TYPE PLUGIN&quot; now only shows a small number of MCA
<br>
&nbsp;&nbsp;parameters by default.  Add &quot;--level 9&quot; or &quot;--all&quot; to see *all* MCA
<br>
&nbsp;&nbsp;parameters.  See README for more details.
<br>
- Add support for asynchronous CUDA-aware copies.
<br>
- Add support for Mellanox MPI collective operation offload via the
<br>
&nbsp;&nbsp;&quot;hcoll&quot; library.
<br>
- MPI-3: Add support for the MPI_T interface.  Open MPI's MCA
<br>
&nbsp;&nbsp;parameters are now accessible via the MPI_T control variable
<br>
&nbsp;&nbsp;interface.  Support has been added for a small number of MPI_T
<br>
&nbsp;&nbsp;performance variables.
<br>
- Add Gentoo memory hooks override.  Thanks to Justin Bronder for the
<br>
&nbsp;&nbsp;patch.
<br>
- Added new &quot;mindist&quot; process mapper, allowing placement of processes
<br>
&nbsp;&nbsp;via PCI locality information reported by the BIOS.
<br>
- MPI-2.2: Add support for MPI_Dist_graph functionality.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2013/11/0058.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Open MPI @SC next week"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2013/06/0056.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Open MPI 1.7.2 released"</a>
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
