<?
$subject_val = "[Open MPI Announce] Open MPI v1.5.1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 15 15:20:41 2010" -->
<!-- isoreceived="20101215202041" -->
<!-- sent="Wed, 15 Dec 2010 15:20:36 -0500" -->
<!-- isosent="20101215202036" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI v1.5.1 released" -->
<!-- id="7F174DB5-31ED-40F5-B2C4-BA934B02F958_at_cisco.com" -->
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
<strong>Subject:</strong> [Open MPI Announce] Open MPI v1.5.1 released<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-15 15:20:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2011/02/0041.php">Shiqing Fan: "[Open MPI Announce] Open MPI v1.5.1 Windows Installer with Fortran 77 bindings released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2010/10/0039.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.5 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic, and industry partners, is pleased to announce the release of Open MPI version 1.5.1.  This release is a minor bug fix release over the v1.5 release.  We recommend that all v1.5 users upgrade to version 1.5.1 when possible. 
<br>
<p>Version 1.5.1 can be downloaded from the main Open MPI web site or any of its mirrors (mirrors will be updating shortly). 
<br>
<p>Here is a list of changes in v1.5.1 as compared to v1.5:
<br>
<p>1.5.1
<br>
-----
<br>
<p>- Fixes for the Oracle Studio 12.2 Fortran compiler.
<br>
- Fix SPARC and SPARCv9 atomics.  Thanks to Nicola Stange for the
<br>
&nbsp;&nbsp;initial patch.
<br>
- Fix Libtool issues with the IBM XL compiler in 64-bit mode.
<br>
- Restore the reset of the libevent progress counter to avoid
<br>
&nbsp;&nbsp;over-sampling the event library.
<br>
- Update memory barrier support.
<br>
- Use memmove (instead of memcpy) when necessary (e.g., source and
<br>
&nbsp;&nbsp;destination overlap).
<br>
- Fixed ompi-top crash.
<br>
- Fix to handle Autoconf --program-transforms properly and other
<br>
&nbsp;&nbsp;m4/configury updates.  Thanks to the GASNet project for the
<br>
&nbsp;&nbsp;--program transforms fix.
<br>
- Allow hostfiles to specify usernames on a per-host basis.
<br>
- Update wrapper compiler scripts to search for perl during configure,
<br>
&nbsp;&nbsp;per request from the BSD maintainers.
<br>
- Minor man page fixes.
<br>
- Added --with-libltdl option to allow building Open MPI with an
<br>
&nbsp;&nbsp;external installation of libltdl.
<br>
- Fixed various issues with -D_FORTIFY_SOURCE=2.
<br>
- Various VT fixes and updates.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2011/02/0041.php">Shiqing Fan: "[Open MPI Announce] Open MPI v1.5.1 Windows Installer with Fortran 77 bindings released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2010/10/0039.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.5 released"</a>
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
