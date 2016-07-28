<?
$subject_val = "[OMPI devel] 1.6.6rc1 tarball posted";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 13 14:18:57 2014" -->
<!-- isoreceived="20140513181857" -->
<!-- sent="Tue, 13 May 2014 18:18:56 +0000" -->
<!-- isosent="20140513181856" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.6.6rc1 tarball posted" -->
<!-- id="08099DA0-3C24-4E58-AE99-0E555F61045C_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.6.6rc1 tarball posted<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-13 14:18:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14785.php">Nathan Hjelm: "[OMPI devel] opal_free_list_t annoyance"</a>
<li><strong>Previous message:</strong> <a href="14783.php">Jeff Squyres (jsquyres): "[OMPI devel] Non-uniform BTL problems in: openib, tcp, sctp, portals4, vader, scif"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Now that the 1.8 series is out, we're going to do one final release in the 1.6.x series, just so that the few bug fixes that came in after 1.6.5 can get out into the world (for those who are unable to upgrade to the v1.8 series).
<br>
<p>1.6.6rc1 has been posted:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
<br>
<p>There will be no MS Windows binary version posted for 1.6.6.
<br>
<p>Please test!
<br>
<p>Here's the list of changes since 1.6.5:
<br>
<p>- Prevent integer overflow in datatype creation.  Thanks to Gilles
<br>
&nbsp;&nbsp;Gouaillardet for identifying the problem and providing a preliminary
<br>
&nbsp;&nbsp;version of the patch.
<br>
- Ensure help-opal-hwloc-base.txt is included in distribution
<br>
&nbsp;&nbsp;tarballs.  Thanks to Gilles Gouaillardet for supplying the patch.
<br>
- Correctly handle the invalid status for NULL and inactive requests.
<br>
&nbsp;&nbsp;Thanks to KAWASHIMA Takahiro for submitting the initial patch.
<br>
- Fixed MPI_STATUS_SIZE Fortran issue when used with 8-byte Fortran
<br>
&nbsp;&nbsp;INTEGERs and 4-byte C ints.  Since this issue affects ABI, it is
<br>
&nbsp;&nbsp;only enabled if Open MPI is configured with
<br>
&nbsp;&nbsp;--enable-abi-breaking-fortran-status-i8-fix.  Thanks to Jim Parker
<br>
&nbsp;&nbsp;for supplying the initial patch.
<br>
- Fix datatype issue for sending from the middle of non-contiguous
<br>
&nbsp;&nbsp;data.
<br>
- Fixed failure error with pty support.  Thanks to Michal Pecio for
<br>
&nbsp;&nbsp;the patch.
<br>
- Fixed debugger support for direct-launched jobs.
<br>
- Fix MPI_IS_THREAD_MAIN to return the correct value.  Thanks to
<br>
&nbsp;&nbsp;Lisandro Dalcin for pointing out the issue.
<br>
- Update VT to 5.14.4.4:
<br>
&nbsp;&nbsp;- Fix C++-11 issue.
<br>
&nbsp;&nbsp;- Fix support for building RPMs on Fedora with CUDA libraries.
<br>
- Add openib part number for ConnectX3-Pro HCA.
<br>
- Ensure to check that all resolved IP addresses are local.
<br>
- Fix MPI_COMM_SPAWN via rsh when mpirun is on a different server.
<br>
- Add Gentoo &quot;sandbox&quot; memory hooks override.
<br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14785.php">Nathan Hjelm: "[OMPI devel] opal_free_list_t annoyance"</a>
<li><strong>Previous message:</strong> <a href="14783.php">Jeff Squyres (jsquyres): "[OMPI devel] Non-uniform BTL problems in: openib, tcp, sctp, portals4, vader, scif"</a>
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
