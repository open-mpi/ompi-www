<?
$subject_val = "[OMPI devel] suggested patch for mca-btl-openib-hca-params.ini";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 14:13:02 2008" -->
<!-- isoreceived="20080304191302" -->
<!-- sent="Tue, 04 Mar 2008 11:12:57 -0800" -->
<!-- isosent="20080304191257" -->
<!-- name="Ralph Campbell" -->
<!-- email="ralph.campbell_at_[hidden]" -->
<!-- subject="[OMPI devel] suggested patch for mca-btl-openib-hca-params.ini" -->
<!-- id="1204657977.5109.567.camel_at_brick.pathscale.com" -->
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
<strong>Subject:</strong> [OMPI devel] suggested patch for mca-btl-openib-hca-params.ini<br>
<strong>From:</strong> Ralph Campbell (<em>ralph.campbell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-04 14:12:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3352.php">Jeff Squyres: "Re: [OMPI devel] suggested patch for mca-btl-openib-hca-params.ini"</a>
<li><strong>Previous message:</strong> <a href="3350.php">Tim Prins: "[OMPI devel] [RFC] Reduce the number of tests run by make check"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3352.php">Jeff Squyres: "Re: [OMPI devel] suggested patch for mca-btl-openib-hca-params.ini"</a>
<li><strong>Reply:</strong> <a href="3352.php">Jeff Squyres: "Re: [OMPI devel] suggested patch for mca-btl-openib-hca-params.ini"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is a suggested patch for adding the QLogic QLE7240 and QLE7280
<br>
DDR HCA cards to the openib params file.
<br>
<p>I would like the MTU to default to 4K for these HCAs but I don't see
<br>
any code using the ibv_port_attr.active_mtu field to limit the MTU
<br>
to the active MTU.  If you like, I can try to make a patch to do this.
<br>
<p>--- ompi/mca/btl/openib/mca-btl-openib-hca-params.ini	2008-02-20 08:28:32.000000000 -0800
<br>
+++ ompi/mca/btl/openib/mca-btl-openib-hca-params.ini.new	2008-02-25 18:09:24.364877000 -0800
<br>
@@ -121,6 +121,12 @@
<br>
&nbsp;
<br>
&nbsp;[QLogic InfiniPath]
<br>
&nbsp;vendor_id = 0x1fc1
<br>
-vendor_part_id = 13,16
<br>
+vendor_part_id = 13
<br>
&nbsp;use_eager_rdma = 1
<br>
&nbsp;mtu = 2048
<br>
+
<br>
+[QLogic InfiniPath]
<br>
+vendor_id = 0x1fc1,0x1077
<br>
+vendor_part_id = 16,29216
<br>
+use_eager_rdma = 1
<br>
+mtu = 4096
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3352.php">Jeff Squyres: "Re: [OMPI devel] suggested patch for mca-btl-openib-hca-params.ini"</a>
<li><strong>Previous message:</strong> <a href="3350.php">Tim Prins: "[OMPI devel] [RFC] Reduce the number of tests run by make check"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3352.php">Jeff Squyres: "Re: [OMPI devel] suggested patch for mca-btl-openib-hca-params.ini"</a>
<li><strong>Reply:</strong> <a href="3352.php">Jeff Squyres: "Re: [OMPI devel] suggested patch for mca-btl-openib-hca-params.ini"</a>
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
