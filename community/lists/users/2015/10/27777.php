<?
$subject_val = "[OMPI users] Open MPI v1.10.1rc1 release";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct  3 06:18:49 2015" -->
<!-- isoreceived="20151003101849" -->
<!-- sent="Sat, 3 Oct 2015 10:18:47 +0000" -->
<!-- isosent="20151003101847" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI v1.10.1rc1 release" -->
<!-- id="88AF2664-D8D0-4D61-996A-0C42C4AC0B35_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI v1.10.1rc1 release<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-03 06:18:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27778.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Previous message:</strong> <a href="27776.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27780.php">Dimitar Pashov: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.10.1rc1 release"</a>
<li><strong>Reply:</strong> <a href="27780.php">Dimitar Pashov: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.10.1rc1 release"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI users --
<br>
<p>We have just posted first release candidate for the upcoming v1.10.1 bug fix release.  We'd appreciate any testing and/or feedback that you may on this release candidate:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.10/">http://www.open-mpi.org/software/ompi/v1.10/</a>
<br>
<p>Thank you!
<br>
<p>Changes since v1.10.0:
<br>
<p>- Fix segv when invoking non-blocking reductions with a user-defined
<br>
&nbsp;&nbsp;operation.  Thanks to Rupert Nash and Georg Geiser for identifying
<br>
&nbsp;&nbsp;the issue.
<br>
- No longer probe for PCI topology on Solaris (unless running as root).
<br>
- Fix for Intel Parallel Studio 2016 ifort partial support of the
<br>
&nbsp;&nbsp;!GCC$ pragma.  Thanks to Fabrice Roy for reporting the problem.
<br>
- Bunches of Coverity / static analysis fixes.
<br>
- Fixed ROMIO to look for lstat in &lt;sys/stat.h&gt;.  Thanks to William
<br>
&nbsp;&nbsp;Throwe for submitting the patch both upstream and to Open MPI.
<br>
- Fixed minor memory leak when attempting to open plugins.
<br>
- Fixed type in MPI_IBARRIER C prototype.  Thanks to Harald Servat for
<br>
&nbsp;&nbsp;reporting the issue.
<br>
- Add missing man pages for MPI_WIN_CREATE_DYNAMIC, MPI_WIN_ATTACH,
<br>
&nbsp;&nbsp;MPI_WIN_DETACH, MPI_WIN_ALLOCATE, MPI_WIN_ALLOCATE_SHARED.
<br>
- When mpirun-launching new applications, only close file descriptors
<br>
&nbsp;&nbsp;that are actually open (resulting in a faster launch in some
<br>
&nbsp;&nbsp;environments).
<br>
- Fix &quot;test ==&quot; issues in Open MPI's configure script.  Thank to Kevin
<br>
&nbsp;&nbsp;Buckley for pointing out the issue.
<br>
- Fix performance issue in usnic BTL: ensure progress thread is
<br>
&nbsp;&nbsp;throttled back to not aggressively steal CPU cycles.
<br>
- Fix cache line size detection on POWER architectures.
<br>
- Add missing #include in a few places.  Thanks to Orion Poplawski for
<br>
&nbsp;&nbsp;supplying the patch.
<br>
- When OpenSHMEM building is disabled, no longer install its header
<br>
&nbsp;&nbsp;files, help files, or man pages.
<br>
- Fix mpi_f08 implementations of MPI_COMM_SET_INFO, and profiling
<br>
&nbsp;&nbsp;versions of MPI_BUFFER_DETACH, MPI_WIN_ALLOCATE,
<br>
&nbsp;&nbsp;MPI_WIN_ALLOCATE_SHARED, MPI_WTICK, and MPI_WTIME.
<br>
- Add orte_rmaps_dist_device MCA param, allowing users to map near a
<br>
&nbsp;&nbsp;specific device.
<br>
- Various updates/fixes to the openib BTL.
<br>
- Add missing defaults for the Mellanox ConnectX 3 card to the openib BTL.
<br>
- Minor bug fixes in the OFI MTL.
<br>
- Various updates to Mellanox's hcoll and FCA components.
<br>
- Add OpenSHMEM man pages.  Thanks to Tony Curtis for sharing the man
<br>
&nbsp;&nbsp;pages files from openshmem.org.
<br>
- Add missing &quot;const&quot; attributes to MPI_COMPARE_AND_SWAP,
<br>
&nbsp;&nbsp;MPI_FETCH_AND_OP, MPI_RACCUMULATE, and MPI_WIN_DETACH prototypes.
<br>
&nbsp;&nbsp;Thanks to Michael Knobloch and Takahiro Kawashima for bringing this
<br>
&nbsp;&nbsp;to our attention.
<br>
- Fix linking issues on some platforms (e.g., SLES 12).
<br>
- Fix hang on some corner cases when MPI applications abort.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27778.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Previous message:</strong> <a href="27776.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27780.php">Dimitar Pashov: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.10.1rc1 release"</a>
<li><strong>Reply:</strong> <a href="27780.php">Dimitar Pashov: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.10.1rc1 release"</a>
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
