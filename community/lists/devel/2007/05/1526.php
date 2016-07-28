<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 10 08:07:25 2007" -->
<!-- isoreceived="20070510120725" -->
<!-- sent="Thu, 10 May 2007 14:08:43 +0200" -->
<!-- isosent="20070510120843" -->
<!-- name="Peter Kjellstrom" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="[OMPI devel] [Patch] make ompi recognize new ib (connectx/mlx4)" -->
<!-- id="200705101408.46416.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-15" -->
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
<strong>From:</strong> Peter Kjellstrom (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-10 08:08:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1527.php">Jeff Squyres: "Re: [OMPI devel] [Patch] make ompi recognize new ib (connectx/mlx4)"</a>
<li><strong>Previous message:</strong> <a href="1525.php">Andrew Friedley: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1527.php">Jeff Squyres: "Re: [OMPI devel] [Patch] make ompi recognize new ib (connectx/mlx4)"</a>
<li><strong>Reply:</strong> <a href="1527.php">Jeff Squyres: "Re: [OMPI devel] [Patch] make ompi recognize new ib (connectx/mlx4)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I recently tried ompi on early ConnectX hardware/software.
<br>
The good news, it works =)
<br>
<p>However, ompi needs a chunk of options set to recognize the
<br>
card so I made a small patch (setting it up like old Arbel
<br>
style hardware).
<br>
<p>Patch against openmpi-1.3a1r14635
<br>
<p>/Peter
<br>
<p><pre>
---
--- ompi/mca/btl/openib/mca-btl-openib-hca-params.ini.old       2007-05-10 13:47:58.000000000 +0200
+++ ompi/mca/btl/openib/mca-btl-openib-hca-params.ini   2007-05-10 13:55:21.000000000 +0200
@@ -100,6 +100,14 @@
 ############################################################################
+[Mellanox ConnectX]
+vendor_id = 0x2c9
+vendor_part_id = 25408
+use_eager_rdma = 1
+mtu = 2048
+
+############################################################################
+
 [IBM eHCA 4x and 12x ]
 vendor_id = 0x5076
 vendor_part_id = 0
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1527.php">Jeff Squyres: "Re: [OMPI devel] [Patch] make ompi recognize new ib (connectx/mlx4)"</a>
<li><strong>Previous message:</strong> <a href="1525.php">Andrew Friedley: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1527.php">Jeff Squyres: "Re: [OMPI devel] [Patch] make ompi recognize new ib (connectx/mlx4)"</a>
<li><strong>Reply:</strong> <a href="1527.php">Jeff Squyres: "Re: [OMPI devel] [Patch] make ompi recognize new ib (connectx/mlx4)"</a>
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
