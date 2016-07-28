<?
$subject_val = "[OMPI devel] oshmem fortran interface";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 13 10:18:03 2013" -->
<!-- isoreceived="20130913141803" -->
<!-- sent="Fri, 13 Sep 2013 14:18:01 +0000" -->
<!-- isosent="20130913141801" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] oshmem fortran interface" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8A6835_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] oshmem fortran interface<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-13 10:18:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12890.php">Suraj Prabhakaran: "[OMPI devel] Intercomm Merge"</a>
<li><strong>Previous message:</strong> <a href="12888.php">Max Staufer: "Re: [OMPI devel] Nearly unlimited growth of pml free list"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The open shmem Fortran iterface is quite definitely not a Fortran 77 interface (there have not been Fortran 77 compilers in over 30 years).
<br>
<p>Can we rename the oshmem/shmem/f77 directory to be oshmem/shmem/fortran?
<br>
<p>Also, there should be no shmemf77 and shmemf90 wrappers -- there should only be shmemfort (just like the ompi layer).
<br>
<p>I'm sorry for not seeing this during the review.
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
<li><strong>Next message:</strong> <a href="12890.php">Suraj Prabhakaran: "[OMPI devel] Intercomm Merge"</a>
<li><strong>Previous message:</strong> <a href="12888.php">Max Staufer: "Re: [OMPI devel] Nearly unlimited growth of pml free list"</a>
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
