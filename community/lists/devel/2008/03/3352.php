<?
$subject_val = "Re: [OMPI devel] suggested patch for mca-btl-openib-hca-params.ini";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 14:39:27 2008" -->
<!-- isoreceived="20080304193927" -->
<!-- sent="Tue, 4 Mar 2008 14:39:17 -0500" -->
<!-- isosent="20080304193917" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] suggested patch for mca-btl-openib-hca-params.ini" -->
<!-- id="B9D43AEE-2C63-4024-9991-7571D68C233F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1204657977.5109.567.camel_at_brick.pathscale.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] suggested patch for mca-btl-openib-hca-params.ini<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-04 14:39:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3353.php">Greg Watson: "[OMPI devel] Fwd: OpenMPI changes"</a>
<li><strong>Previous message:</strong> <a href="3351.php">Ralph Campbell: "[OMPI devel] suggested patch for mca-btl-openib-hca-params.ini"</a>
<li><strong>In reply to:</strong> <a href="3351.php">Ralph Campbell: "[OMPI devel] suggested patch for mca-btl-openib-hca-params.ini"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds good -- I don't remember who's on the schedule A for Qlogic,  
<br>
but I know that Christian Bell can commit.
<br>
<p>Do you need this for v1.2.6?  We are literally rolling 1.2.6rc1 right  
<br>
*now*...
<br>
<p><p>On Mar 4, 2008, at 2:12 PM, Ralph Campbell wrote:
<br>
<p><span class="quotelev1">&gt; Here is a suggested patch for adding the QLogic QLE7240 and QLE7280
</span><br>
<span class="quotelev1">&gt; DDR HCA cards to the openib params file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would like the MTU to default to 4K for these HCAs but I don't see
</span><br>
<span class="quotelev1">&gt; any code using the ibv_port_attr.active_mtu field to limit the MTU
</span><br>
<span class="quotelev1">&gt; to the active MTU.  If you like, I can try to make a patch to do this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/openib/mca-btl-openib-hca-params.ini	2008-02-20  
</span><br>
<span class="quotelev1">&gt; 08:28:32.000000000 -0800
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/openib/mca-btl-openib-hca-params.ini.new	2008-02-25  
</span><br>
<span class="quotelev1">&gt; 18:09:24.364877000 -0800
</span><br>
<span class="quotelev1">&gt; @@ -121,6 +121,12 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [QLogic InfiniPath]
</span><br>
<span class="quotelev1">&gt; vendor_id = 0x1fc1
</span><br>
<span class="quotelev1">&gt; -vendor_part_id = 13,16
</span><br>
<span class="quotelev1">&gt; +vendor_part_id = 13
</span><br>
<span class="quotelev1">&gt; use_eager_rdma = 1
</span><br>
<span class="quotelev1">&gt; mtu = 2048
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +[QLogic InfiniPath]
</span><br>
<span class="quotelev1">&gt; +vendor_id = 0x1fc1,0x1077
</span><br>
<span class="quotelev1">&gt; +vendor_part_id = 16,29216
</span><br>
<span class="quotelev1">&gt; +use_eager_rdma = 1
</span><br>
<span class="quotelev1">&gt; +mtu = 4096
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3353.php">Greg Watson: "[OMPI devel] Fwd: OpenMPI changes"</a>
<li><strong>Previous message:</strong> <a href="3351.php">Ralph Campbell: "[OMPI devel] suggested patch for mca-btl-openib-hca-params.ini"</a>
<li><strong>In reply to:</strong> <a href="3351.php">Ralph Campbell: "[OMPI devel] suggested patch for mca-btl-openib-hca-params.ini"</a>
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
