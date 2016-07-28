<?
$subject_val = "Re: [OMPI devel] v1.10.1rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct  3 17:33:27 2015" -->
<!-- isoreceived="20151003213327" -->
<!-- sent="Sat, 3 Oct 2015 17:33:26 -0400" -->
<!-- isosent="20151003213326" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.10.1rc1 released" -->
<!-- id="CAG4F6z_MvvE2EN6pYxTu6omYNvzT6cpewaG5gkc=BAtVkDaztA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="FB4E26AD-10FA-49B2-A860-2D6EA424BB20_at_cisco.com" -->
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
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-03 17:33:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18133.php">Ralph Castain: "Re: [OMPI devel] v1.10.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="18131.php">Paul Hargrove: "Re: [OMPI devel] v1.10.1rc1 released"</a>
<li><strong>In reply to:</strong> <a href="18130.php">Jeff Squyres (jsquyres): "[OMPI devel] v1.10.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18133.php">Ralph Castain: "Re: [OMPI devel] v1.10.1rc1 released"</a>
<li><strong>Reply:</strong> <a href="18133.php">Ralph Castain: "Re: [OMPI devel] v1.10.1rc1 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This doesn't contain the three patches that we discussed on PR:
<br>
<a href="https://github.com/open-mpi/ompi-release/pull/621">https://github.com/open-mpi/ompi-release/pull/621</a>
<br>
<p>Josh
<br>
<p>On Sat, Oct 3, 2015 at 6:13 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; v1.10.1 is primarily a bug-fix release.  rc1 has been released; it's in
</span><br>
<span class="quotelev1">&gt; the usual place:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/software/ompi/v1.10/">http://www.open-mpi.org/software/ompi/v1.10/</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18130.php">http://www.open-mpi.org/community/lists/devel/2015/10/18130.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18132/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18133.php">Ralph Castain: "Re: [OMPI devel] v1.10.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="18131.php">Paul Hargrove: "Re: [OMPI devel] v1.10.1rc1 released"</a>
<li><strong>In reply to:</strong> <a href="18130.php">Jeff Squyres (jsquyres): "[OMPI devel] v1.10.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18133.php">Ralph Castain: "Re: [OMPI devel] v1.10.1rc1 released"</a>
<li><strong>Reply:</strong> <a href="18133.php">Ralph Castain: "Re: [OMPI devel] v1.10.1rc1 released"</a>
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
