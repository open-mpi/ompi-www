<?
$subject_val = "[OMPI devel] RFC: DL / DSO functionality";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 12:36:32 2015" -->
<!-- isoreceived="20150224173632" -->
<!-- sent="Tue, 24 Feb 2015 17:36:30 +0000" -->
<!-- isosent="20150224173630" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: DL / DSO functionality" -->
<!-- id="5A8C7981-E041-4302-8D5A-9E54333585C8_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: DL / DSO functionality<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-24 12:36:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17025.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Previous message:</strong> <a href="17023.php">George Bosilca: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17025.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Reply:</strong> <a href="17025.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Short version
<br>
=============
<br>
<p>I think I have a PR that now solves the libltdl issue.  See <a href="https://github.com/open-mpi/ompi/pull/410">https://github.com/open-mpi/ompi/pull/410</a> if you care.
<br>
<p>If not one has any objections, I'll merge this tomorrow (Wed 25 Feb 2015).
<br>
<p>More detail
<br>
===========
<br>
<p>Original problem (can't upgrade Libtool beyond 2.4.2): see <a href="https://github.com/open-mpi/ompi/issues/311">https://github.com/open-mpi/ompi/issues/311</a>
<br>
<p>Solution that we didn't like: remove libltdl from OMPI code base (<a href="https://github.com/open-mpi/ompi/pull/366">https://github.com/open-mpi/ompi/pull/366</a>)
<br>
<p>Solution that ended up not working: manually embedding libltdl in OMPI code base (<a href="https://github.com/open-mpi/ompi/pull/390">https://github.com/open-mpi/ompi/pull/390</a>)
<br>
<p>This new solution: OPAL DL framework with 2 components (<a href="https://github.com/open-mpi/ompi/pull/410">https://github.com/open-mpi/ompi/pull/410</a>)
<br>
<p>Feel free to ask for more info.
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
<li><strong>Next message:</strong> <a href="17025.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Previous message:</strong> <a href="17023.php">George Bosilca: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17025.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Reply:</strong> <a href="17025.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
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
