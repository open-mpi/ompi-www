<?
$subject_val = "[OMPI devel] Snow leopard builds";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 24 19:26:30 2010" -->
<!-- isoreceived="20100125002630" -->
<!-- sent="Sun, 24 Jan 2010 19:26:24 -0500" -->
<!-- isosent="20100125002624" -->
<!-- name="Graham, Richard L." -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="[OMPI devel] Snow leopard builds" -->
<!-- id="C7824F60.7521%rlgraham_at_ornl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Snow leopard builds<br>
<strong>From:</strong> Graham, Richard L. (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-24 19:26:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7352.php">Paul H. Hargrove: "Re: [OMPI devel] Snow leopard builds"</a>
<li><strong>Previous message:</strong> <a href="7350.php">Chris Samuel: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7352.php">Paul H. Hargrove: "Re: [OMPI devel] Snow leopard builds"</a>
<li><strong>Reply:</strong> <a href="7352.php">Paul H. Hargrove: "Re: [OMPI devel] Snow leopard builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Has someone managed to build ompi on snow leopard ?  I am trying to build, and it looks like configure does not detect the support for htonl and friends, so it adds the definition.
<br>
static inline uint32_t htonl(uint32_t hostvar) { return hostvar; }
<br>
&nbsp;with the compiler proceeding to do a macro substituion for htonl, which obviously does not work.  I am hoping someone has run into this AND fixed the problem and could save me trying to figure out this part of our configure script, and how to fix it.
<br>
<p>Thanks,
<br>
Rich
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7352.php">Paul H. Hargrove: "Re: [OMPI devel] Snow leopard builds"</a>
<li><strong>Previous message:</strong> <a href="7350.php">Chris Samuel: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7352.php">Paul H. Hargrove: "Re: [OMPI devel] Snow leopard builds"</a>
<li><strong>Reply:</strong> <a href="7352.php">Paul H. Hargrove: "Re: [OMPI devel] Snow leopard builds"</a>
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
