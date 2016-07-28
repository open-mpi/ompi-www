<?
$subject_val = "Re: [OMPI devel] [PATCH] Change the openib params file for QLogic	vendor_id";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 13:38:36 2008" -->
<!-- isoreceived="20080813173836" -->
<!-- sent="Wed, 13 Aug 2008 10:38:31 -0700" -->
<!-- isosent="20080813173831" -->
<!-- name="Ralph Campbell" -->
<!-- email="ralph.campbell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] Change the openib params file for QLogic	vendor_id" -->
<!-- id="1218649111.620.457.camel_at_chromite.mv.qlogic.com" -->
<!-- inreplyto="2837ED8D-D1CA-4977-8201-563893F3032D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] Change the openib params file for QLogic	vendor_id<br>
<strong>From:</strong> Ralph Campbell (<em>ralph.campbell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-13 13:38:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4576.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Change the openib params file for QLogic	vendor_id"</a>
<li><strong>Previous message:</strong> <a href="4574.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Change the openib params file for QLogic vendor_id"</a>
<li><strong>In reply to:</strong> <a href="4574.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Change the openib params file for QLogic vendor_id"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4576.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Change the openib params file for QLogic	vendor_id"</a>
<li><strong>Reply:</strong> <a href="4576.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Change the openib params file for QLogic	vendor_id"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I guess it applies to everything since there is no telling
<br>
what kernel will be used with a given version of OpenMPI.
<br>
<p>On Wed, 2008-08-13 at 08:40 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Thanks for the patch.  This is against the v1.2 series INI file; does  
</span><br>
<span class="quotelev1">&gt; it also apply to &quot;infinipath 1&quot; in the v1.3 series INI file?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mca/btl/openib/mca-btl-openib-device-params.ini">https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mca/btl/openib/mca-btl-openib-device-params.ini</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 12, 2008, at 5:29 PM, Ralph Campbell wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Roland noticed that the QLogic HCA driver was using the PCIe
</span><br>
<span class="quotelev2">&gt; &gt; vendor ID for the ibv_query_device so the IEEE OUI value is
</span><br>
<span class="quotelev2">&gt; &gt; now used. This means the config file should recognize the
</span><br>
<span class="quotelev2">&gt; &gt; vendor ID value 0x1175 too.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Signed-off-by: Ralph Campbell &lt;ralph.campbell_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --- ompi/mca/btl/openib/mca-btl-openib-hca-params.ini.old	2008-06-17  
</span><br>
<span class="quotelev2">&gt; &gt; 11:54:08.000000000 -0700
</span><br>
<span class="quotelev2">&gt; &gt; +++ ompi/mca/btl/openib/mca-btl-openib-hca-params.ini	2008-08-12  
</span><br>
<span class="quotelev2">&gt; &gt; 14:20:07.542762000 -0700
</span><br>
<span class="quotelev2">&gt; &gt; @@ -126,7 +126,7 @@ use_eager_rdma = 1
</span><br>
<span class="quotelev2">&gt; &gt; mtu = 2048
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [QLogic InfiniPath]
</span><br>
<span class="quotelev2">&gt; &gt; -vendor_id = 0x1fc1,0x1077
</span><br>
<span class="quotelev2">&gt; &gt; +vendor_id = 0x1fc1,0x1077,0x1175
</span><br>
<span class="quotelev2">&gt; &gt; vendor_part_id = 16,29216
</span><br>
<span class="quotelev2">&gt; &gt; use_eager_rdma = 1
</span><br>
<span class="quotelev2">&gt; &gt; mtu = 4096
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4576.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Change the openib params file for QLogic	vendor_id"</a>
<li><strong>Previous message:</strong> <a href="4574.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Change the openib params file for QLogic vendor_id"</a>
<li><strong>In reply to:</strong> <a href="4574.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Change the openib params file for QLogic vendor_id"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4576.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Change the openib params file for QLogic	vendor_id"</a>
<li><strong>Reply:</strong> <a href="4576.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Change the openib params file for QLogic	vendor_id"</a>
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
