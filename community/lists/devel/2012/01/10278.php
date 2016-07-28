<?
$subject_val = "[OMPI devel] 1.4.5rc3 released";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 30 17:25:35 2012" -->
<!-- isoreceived="20120130222535" -->
<!-- sent="Mon, 30 Jan 2012 17:25:30 -0500" -->
<!-- isosent="20120130222530" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.4.5rc3 released" -->
<!-- id="3E852CFE-49BA-4A53-AE71-D0266347CC1A_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.4.5rc3 released<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-30 17:25:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10279.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r25813"</a>
<li><strong>Previous message:</strong> <a href="10277.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25813"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10282.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<li><strong>Reply:</strong> <a href="10282.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<li><strong>Reply:</strong> <a href="10283.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A few little fixes incorporated; posted in the usual location:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
<br>
<p>The shared library versions still need to be updated before final release.
<br>
<p><pre>
----
Combined patch from Fujitsu. Fixes a collections of typos over the
code and man pages.
Modify Solaris Studio Complier notes about using xarch
Fixes #2967: pretty much copy the text from MPI-2.2 in the description
of the group argument to MPI_COMM_CREATE.
Fixes #2844: ensure to take the value of --with(out)-memory-manager
into account when configuring the components of the faramework.  If
--without-memory-manager was given, then we really don't want any
memory managers to be used.
NEWS and README updated
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
<li><strong>Next message:</strong> <a href="10279.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r25813"</a>
<li><strong>Previous message:</strong> <a href="10277.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25813"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10282.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<li><strong>Reply:</strong> <a href="10282.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<li><strong>Reply:</strong> <a href="10283.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc3 released"</a>
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
