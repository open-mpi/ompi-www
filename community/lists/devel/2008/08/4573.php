<?
$subject_val = "[OMPI devel] [PATCH] Change the openib params file for QLogic vendor_id";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 12 17:30:02 2008" -->
<!-- isoreceived="20080812213002" -->
<!-- sent="Tue, 12 Aug 2008 14:29:58 -0700" -->
<!-- isosent="20080812212958" -->
<!-- name="Ralph Campbell" -->
<!-- email="ralph.campbell_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH] Change the openib params file for QLogic vendor_id" -->
<!-- id="1218576598.620.447.camel_at_chromite.mv.qlogic.com" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH] Change the openib params file for QLogic vendor_id<br>
<strong>From:</strong> Ralph Campbell (<em>ralph.campbell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-12 17:29:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4574.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Change the openib params file for QLogic vendor_id"</a>
<li><strong>Previous message:</strong> <a href="4572.php">Caciano Machado: "Re: [OMPI devel] Checkpoint/Restart svn trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4574.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Change the openib params file for QLogic vendor_id"</a>
<li><strong>Reply:</strong> <a href="4574.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Change the openib params file for QLogic vendor_id"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Roland noticed that the QLogic HCA driver was using the PCIe
<br>
vendor ID for the ibv_query_device so the IEEE OUI value is
<br>
now used. This means the config file should recognize the
<br>
vendor ID value 0x1175 too.
<br>
<p>Signed-off-by: Ralph Campbell &lt;ralph.campbell_at_[hidden]&gt;
<br>
<p>--- ompi/mca/btl/openib/mca-btl-openib-hca-params.ini.old	2008-06-17 11:54:08.000000000 -0700
<br>
+++ ompi/mca/btl/openib/mca-btl-openib-hca-params.ini	2008-08-12 14:20:07.542762000 -0700
<br>
@@ -126,7 +126,7 @@ use_eager_rdma = 1
<br>
&nbsp;mtu = 2048
<br>
&nbsp;
<br>
&nbsp;[QLogic InfiniPath]
<br>
-vendor_id = 0x1fc1,0x1077
<br>
+vendor_id = 0x1fc1,0x1077,0x1175
<br>
&nbsp;vendor_part_id = 16,29216
<br>
&nbsp;use_eager_rdma = 1
<br>
&nbsp;mtu = 4096
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4574.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Change the openib params file for QLogic vendor_id"</a>
<li><strong>Previous message:</strong> <a href="4572.php">Caciano Machado: "Re: [OMPI devel] Checkpoint/Restart svn trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4574.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Change the openib params file for QLogic vendor_id"</a>
<li><strong>Reply:</strong> <a href="4574.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Change the openib params file for QLogic vendor_id"</a>
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
