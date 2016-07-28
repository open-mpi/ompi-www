<?
$subject_val = "Re: [OMPI users] [Open MPI Announce] Open MPI v1.10.1rc1 release";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct  3 09:15:01 2015" -->
<!-- isoreceived="20151003131501" -->
<!-- sent="Sat, 3 Oct 2015 14:14:46 +0100" -->
<!-- isosent="20151003131446" -->
<!-- name="Dimitar Pashov" -->
<!-- email="dimitar.pashov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Open MPI Announce] Open MPI v1.10.1rc1 release" -->
<!-- id="7852414.MlkTAmF8z2_at_benzin" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="88AF2664-D8D0-4D61-996A-0C42C4AC0B35_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Open MPI Announce] Open MPI v1.10.1rc1 release<br>
<strong>From:</strong> Dimitar Pashov (<em>dimitar.pashov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-03 09:14:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27781.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Previous message:</strong> <a href="27779.php">Gilles Gouaillardet: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>In reply to:</strong> <a href="27777.php">Jeff Squyres (jsquyres): "[OMPI users] Open MPI v1.10.1rc1 release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27808.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [Open MPI Announce] Open MPI v1.10.1rc1 release"</a>
<li><strong>Reply:</strong> <a href="27808.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [Open MPI Announce] Open MPI v1.10.1rc1 release"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, I have a pet bug causing silent data corruption here:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi/issues/965">https://github.com/open-mpi/ompi/issues/965</a> 
<br>
which seems to have a fix committed some time later. I've tested v1.10.1rc1 
<br>
now and it still has the issue. I hope the fix makes it in the release.
<br>
<p>Cheers!
<br>
<p>On Saturday 03 Oct 2015 10:18:47 Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Open MPI users --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have just posted first release candidate for the upcoming v1.10.1 bug fix
</span><br>
<span class="quotelev1">&gt; release.  We'd appreciate any testing and/or feedback that you may on this
</span><br>
<span class="quotelev1">&gt; release candidate:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/software/ompi/v1.10/">http://www.open-mpi.org/software/ompi/v1.10/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Changes since v1.10.0:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Fix segv when invoking non-blocking reductions with a user-defined
</span><br>
<span class="quotelev1">&gt;   operation.  Thanks to Rupert Nash and Georg Geiser for identifying
</span><br>
<span class="quotelev1">&gt;   the issue.
</span><br>
<span class="quotelev1">&gt; - No longer probe for PCI topology on Solaris (unless running as root).
</span><br>
<span class="quotelev1">&gt; - Fix for Intel Parallel Studio 2016 ifort partial support of the
</span><br>
<span class="quotelev1">&gt;   !GCC$ pragma.  Thanks to Fabrice Roy for reporting the problem.
</span><br>
<span class="quotelev1">&gt; - Bunches of Coverity / static analysis fixes.
</span><br>
<span class="quotelev1">&gt; - Fixed ROMIO to look for lstat in &lt;sys/stat.h&gt;.  Thanks to William
</span><br>
<span class="quotelev1">&gt;   Throwe for submitting the patch both upstream and to Open MPI.
</span><br>
<span class="quotelev1">&gt; - Fixed minor memory leak when attempting to open plugins.
</span><br>
<span class="quotelev1">&gt; - Fixed type in MPI_IBARRIER C prototype.  Thanks to Harald Servat for
</span><br>
<span class="quotelev1">&gt;   reporting the issue.
</span><br>
<span class="quotelev1">&gt; - Add missing man pages for MPI_WIN_CREATE_DYNAMIC, MPI_WIN_ATTACH,
</span><br>
<span class="quotelev1">&gt;   MPI_WIN_DETACH, MPI_WIN_ALLOCATE, MPI_WIN_ALLOCATE_SHARED.
</span><br>
<span class="quotelev1">&gt; - When mpirun-launching new applications, only close file descriptors
</span><br>
<span class="quotelev1">&gt;   that are actually open (resulting in a faster launch in some
</span><br>
<span class="quotelev1">&gt;   environments).
</span><br>
<span class="quotelev1">&gt; - Fix &quot;test ==&quot; issues in Open MPI's configure script.  Thank to Kevin
</span><br>
<span class="quotelev1">&gt;   Buckley for pointing out the issue.
</span><br>
<span class="quotelev1">&gt; - Fix performance issue in usnic BTL: ensure progress thread is
</span><br>
<span class="quotelev1">&gt;   throttled back to not aggressively steal CPU cycles.
</span><br>
<span class="quotelev1">&gt; - Fix cache line size detection on POWER architectures.
</span><br>
<span class="quotelev1">&gt; - Add missing #include in a few places.  Thanks to Orion Poplawski for
</span><br>
<span class="quotelev1">&gt;   supplying the patch.
</span><br>
<span class="quotelev1">&gt; - When OpenSHMEM building is disabled, no longer install its header
</span><br>
<span class="quotelev1">&gt;   files, help files, or man pages.
</span><br>
<span class="quotelev1">&gt; - Fix mpi_f08 implementations of MPI_COMM_SET_INFO, and profiling
</span><br>
<span class="quotelev1">&gt;   versions of MPI_BUFFER_DETACH, MPI_WIN_ALLOCATE,
</span><br>
<span class="quotelev1">&gt;   MPI_WIN_ALLOCATE_SHARED, MPI_WTICK, and MPI_WTIME.
</span><br>
<span class="quotelev1">&gt; - Add orte_rmaps_dist_device MCA param, allowing users to map near a
</span><br>
<span class="quotelev1">&gt;   specific device.
</span><br>
<span class="quotelev1">&gt; - Various updates/fixes to the openib BTL.
</span><br>
<span class="quotelev1">&gt; - Add missing defaults for the Mellanox ConnectX 3 card to the openib BTL.
</span><br>
<span class="quotelev1">&gt; - Minor bug fixes in the OFI MTL.
</span><br>
<span class="quotelev1">&gt; - Various updates to Mellanox's hcoll and FCA components.
</span><br>
<span class="quotelev1">&gt; - Add OpenSHMEM man pages.  Thanks to Tony Curtis for sharing the man
</span><br>
<span class="quotelev1">&gt;   pages files from openshmem.org.
</span><br>
<span class="quotelev1">&gt; - Add missing &quot;const&quot; attributes to MPI_COMPARE_AND_SWAP,
</span><br>
<span class="quotelev1">&gt;   MPI_FETCH_AND_OP, MPI_RACCUMULATE, and MPI_WIN_DETACH prototypes.
</span><br>
<span class="quotelev1">&gt;   Thanks to Michael Knobloch and Takahiro Kawashima for bringing this
</span><br>
<span class="quotelev1">&gt;   to our attention.
</span><br>
<span class="quotelev1">&gt; - Fix linking issues on some platforms (e.g., SLES 12).
</span><br>
<span class="quotelev1">&gt; - Fix hang on some corner cases when MPI applications abort.
</span><br>
<p><pre>
-- 
Dr Dimitar Pashov
Department of Physics, S4.02
King's College London
Strand, London, WC2R 2LS, UK
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27781.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Previous message:</strong> <a href="27779.php">Gilles Gouaillardet: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>In reply to:</strong> <a href="27777.php">Jeff Squyres (jsquyres): "[OMPI users] Open MPI v1.10.1rc1 release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27808.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [Open MPI Announce] Open MPI v1.10.1rc1 release"</a>
<li><strong>Reply:</strong> <a href="27808.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [Open MPI Announce] Open MPI v1.10.1rc1 release"</a>
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
