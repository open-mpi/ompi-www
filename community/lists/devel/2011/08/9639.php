<?
$subject_val = "[OMPI devel] 1.5.4 NEWS bullets";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  9 09:29:43 2011" -->
<!-- isoreceived="20110809132943" -->
<!-- sent="Tue, 9 Aug 2011 09:29:38 -0400" -->
<!-- isosent="20110809132938" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.5.4 NEWS bullets" -->
<!-- id="014E221E-7FBF-4275-A32D-B197C37B7E4F_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] 1.5.4 NEWS bullets<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-09 09:29:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9640.php">Jeff Squyres: "[OMPI devel] v1.5.4 .so version numbers"</a>
<li><strong>Previous message:</strong> <a href="9638.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please read and double check.  Send any edits to me, or edit NEWS on the trunk directly.  Thanks.
<br>
<p><pre>
----
- Add support for the (as yet unreleased) Mellanox MXM transport.
- Add support for dynamic service levels (SLs) in the openib BTL.
- Fixed C++ bindings cosmetic/warnings issue with
  MPI::Comm::NULL_COPY_FN and MPI::Comm::NULL_DELETE_FN.  Thanks to
  J&#250;lio Hoffimann for identifying the issues.
- Also allow the word &quot;slots&quot; in rankfiles (i.e., not just &quot;slot&quot;).
- Add Mellanox ConnectX 3 device IDs to the openib BTL defaults.
- Various FCA updates.
- Fix 32 bit SIGBUS errors on Solaris SPARC platforms.
- Add missing ARM assembly code files.
- Update to allow more than 128 entries in an appfile.
- Various VT updates and bug fixes.
- Update description of btl_openib_cq_size to be more accurate.
- Various assembly &quot;clobber&quot; fixes.
- Fix a hang in carto selection in obscure situations.
- Fix for NetBSD, which doesn't have &lt;execinfo.h&gt;
- Support Solaris legacy munmap prototype changes.
- Updated to Automake 1.11.1 per 
  <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9492.php">http://www.open-mpi.org/community/lists/devel/2011/07/9492.php</a>.
- Fix compilation of LSF support.
- Update MPI_Comm_spawn_multiple.3 man page to reflect what it
  actually does.
- Fix for possible corruption of the environment.  Thanks to Peter
  Thompson for the suggestion.
- Enable use of PSM on direct-launch SLURM jobs.
- Update paffinity hwloc to v1.2, and to fix minor bugs affinity
  assignment bugs on PPC64/Linux platforms.
- Let the openib BTL auto-detect its bandwidth.
- Support new MPI-2.2 datatypes.
- Updates to support more datatypes in MPI one-sided communication.
- Fix recursive locking bug when MPI-IO was used with
  MPI_THREAD_MULTIPLE. 
- Fix mpirun handling of prefix conflicts.
- Ensure mpirun's --xterm options leaves sessions attached.
- Fix types of the sendcounts and displs parameters to the F90 module
  for MPI_Scatterv (while still preserving the F90 ABI).  Thanks to
  Stanislav Sazykin for identifying the issue.
- Fix indexed datatype leaks.  Thanks to Pascal Deveze for supplying
  the initial patch.
- Fix debugger mapping when mpirun's -npernode option is used.
- Fixed support for configure's --disable-dlopen option when used with
  &quot;make distclean&quot;.
- Fix segv associated with MPI_Comm_create with MPI_GROUP_EMPTY.
- Improved LoadLeveler ORTE support.
- Add new WindVerbs BTL plugin, supporting native OpenFabrics verbs on
  Windows (the &quot;wv&quot; BTL).
- Add new btl_openib_gid_index MCA parameter to allow selecting which
  GID to use on an OpenFabrics device's GID table.
- Add support for PCI relaxed ordering in the OpenFabrics BTL (when
  available).
- Update rsh logic to allow correct SGE operation.
- Ensure that the mca_paffinity_alone MCA parameter only appears once
  in the ompi_info output.  Thanks to Gus Correa for identifying the
  issue.
- Fix return status from MPI_Probe.
- Remove --enable-progress-thread configure option; it doesn't work on
  the v1.5 branch.  Rename --enable-mpi-threads to
  --enable-mpi-thread-multiple.  Add new --enable-opal-multi-threads
  option. 
- Updates for Intel Fortran compiler version 12.
- Remove bproc support.  Farewell bproc!
- If something goes wrong during during MPI_INIT, fix the error
  message to say that it's illegal to invoke MPI_INIT before
  MPI_INIT.  
- Fixed type of sendcounts and displs in the &quot;use mpi&quot; F90 module.
  ABI is preserved, but applications may well be broken.  See the README
  for more details.
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9640.php">Jeff Squyres: "[OMPI devel] v1.5.4 .so version numbers"</a>
<li><strong>Previous message:</strong> <a href="9638.php">Shiqing Fan: "Re: [OMPI devel] bug report-"</a>
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
