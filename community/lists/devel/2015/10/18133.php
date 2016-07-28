<?
$subject_val = "Re: [OMPI devel] v1.10.1rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct  3 19:06:13 2015" -->
<!-- isoreceived="20151003230613" -->
<!-- sent="Sat, 3 Oct 2015 16:06:08 -0700" -->
<!-- isosent="20151003230608" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.10.1rc1 released" -->
<!-- id="F4B6763A-6ECF-43D4-947E-476EFD1B16A2_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAG4F6z_MvvE2EN6pYxTu6omYNvzT6cpewaG5gkc=BAtVkDaztA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.10.1rc1 released<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-03 19:06:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18134.php">Ralph Castain: "Re: [OMPI devel] v1.10.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="18132.php">Joshua Ladd: "Re: [OMPI devel] v1.10.1rc1 released"</a>
<li><strong>In reply to:</strong> <a href="18132.php">Joshua Ladd: "Re: [OMPI devel] v1.10.1rc1 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No it doesn&#226;&#128;&#153;t - those haven&#226;&#128;&#153;t been accepted yet. As was discussed there, the patches need to go into master and then can be worked back into the release cycle.
<br>
<p><p><span class="quotelev1">&gt; On Oct 3, 2015, at 2:33 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This doesn't contain the three patches that we discussed on PR:
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi-release/pull/621">https://github.com/open-mpi/ompi-release/pull/621</a> &lt;<a href="https://github.com/open-mpi/ompi-release/pull/621">https://github.com/open-mpi/ompi-release/pull/621</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Oct 3, 2015 at 6:13 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; v1.10.1 is primarily a bug-fix release.  rc1 has been released; it's in the usual place:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/software/ompi/v1.10/">http://www.open-mpi.org/software/ompi/v1.10/</a> &lt;<a href="http://www.open-mpi.org/software/ompi/v1.10/">http://www.open-mpi.org/software/ompi/v1.10/</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please test!
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
<span class="quotelev1">&gt;   pages files from openshmem.org &lt;<a href="http://openshmem.org/">http://openshmem.org/</a>&gt;.
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a> &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18130.php">http://www.open-mpi.org/community/lists/devel/2015/10/18130.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/10/18130.php">http://www.open-mpi.org/community/lists/devel/2015/10/18130.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18132.php">http://www.open-mpi.org/community/lists/devel/2015/10/18132.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18133/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18134.php">Ralph Castain: "Re: [OMPI devel] v1.10.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="18132.php">Joshua Ladd: "Re: [OMPI devel] v1.10.1rc1 released"</a>
<li><strong>In reply to:</strong> <a href="18132.php">Joshua Ladd: "Re: [OMPI devel] v1.10.1rc1 released"</a>
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
