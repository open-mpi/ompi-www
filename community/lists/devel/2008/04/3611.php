<?
$subject_val = "[OMPI devel] [PATCH] Fix compilation error without XRC";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  2 08:20:54 2008" -->
<!-- isoreceived="20080402122054" -->
<!-- sent="Wed, 2 Apr 2008 14:21:12 +0200" -->
<!-- isosent="20080402122112" -->
<!-- name="Bernhard Fischer" -->
<!-- email="rep.dot.nop_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH] Fix compilation error without XRC" -->
<!-- id="20080402122112.GB9436_at_mx.loc" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH] Fix compilation error without XRC<br>
<strong>From:</strong> Bernhard Fischer (<em>rep.dot.nop_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-02 08:21:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3612.php">Sharon Melamed: "[OMPI devel] FW: [devel-core] [RFC] Add an alias name to MCA parameter"</a>
<li><strong>Previous message:</strong> <a href="3610.php">Bernhard Fischer: "[OMPI devel] [PATCH] Fix typo in configure helptext"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3633.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Fix compilation error without XRC"</a>
<li><strong>Reply:</strong> <a href="3633.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Fix compilation error without XRC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* ompi/mca/btl/openib/btl_openib_component.c (init_one_hca):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_open_xrc_domain and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_close_xrc_domain depend on XRC
<br>
<p>Fixes the compilation failure as in the head of attached patch.
<br>
TIA,
<br>
Bernhard
<br>
<p>
<br><hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3611/ompi-trunk.openib-xrc_domain.01.diff">ompi-trunk.openib-xrc_domain.01.diff</a>
</ul>
<!-- attachment="ompi-trunk.openib-xrc_domain.01.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3612.php">Sharon Melamed: "[OMPI devel] FW: [devel-core] [RFC] Add an alias name to MCA parameter"</a>
<li><strong>Previous message:</strong> <a href="3610.php">Bernhard Fischer: "[OMPI devel] [PATCH] Fix typo in configure helptext"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3633.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Fix compilation error without XRC"</a>
<li><strong>Reply:</strong> <a href="3633.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Fix compilation error without XRC"</a>
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
