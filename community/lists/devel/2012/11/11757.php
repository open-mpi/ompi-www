<?
$subject_val = "Re: [OMPI devel] RFC: fix various leaks in trunk (touches coll/ml, vprotocol, pml/v, btl/openib, and mca/base)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 19:00:01 2012" -->
<!-- isoreceived="20121106000001" -->
<!-- sent="Mon, 5 Nov 2012 18:59:55 -0500" -->
<!-- isosent="20121105235955" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: fix various leaks in trunk (touches coll/ml, vprotocol, pml/v, btl/openib, and mca/base)" -->
<!-- id="5AE448BE-A927-4F3C-AA46-6491DAA84D93_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20121105233104.GB89263_at_pantheralanlgov.local" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: fix various leaks in trunk (touches coll/ml, vprotocol, pml/v, btl/openib, and mca/base)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-05 18:59:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11758.php">George Bosilca: "Re: [OMPI devel] RFC: fix various leaks in trunk (touches coll/ml, vprotocol, pml/v, btl/openib, and mca/base)"</a>
<li><strong>Previous message:</strong> <a href="11756.php">Nathan Hjelm: "[OMPI devel] RFC: fix various leaks in trunk (touches coll/ml, vprotocol, pml/v, btl/openib, and mca/base)"</a>
<li><strong>In reply to:</strong> <a href="11756.php">Nathan Hjelm: "[OMPI devel] RFC: fix various leaks in trunk (touches coll/ml, vprotocol, pml/v, btl/openib, and mca/base)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11758.php">George Bosilca: "Re: [OMPI devel] RFC: fix various leaks in trunk (touches coll/ml, vprotocol, pml/v, btl/openib, and mca/base)"</a>
<li><strong>Reply:</strong> <a href="11758.php">George Bosilca: "Re: [OMPI devel] RFC: fix various leaks in trunk (touches coll/ml, vprotocol, pml/v, btl/openib, and mca/base)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1 on the ompi/mca/btl/openib/btl_openib_mca.c and opal/mca/base/mca_base_param.c.
<br>
<p>I didn't check the others.
<br>
<p><p>On Nov 5, 2012, at 6:31 PM, Nathan Hjelm wrote:
<br>
<p><span class="quotelev1">&gt; What: I used valgrind on ompi_info and found several leaks in the trunk. This patch fixes some of the leaks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pml/v:
</span><br>
<span class="quotelev1">&gt;  - If vprotocol is not being used vprotocol_include_list is leaked. Assume vprotocol never takes ownership (see below) and always free the string.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; coll/ml:
</span><br>
<span class="quotelev1">&gt;  - (patch verified) calling mca_base_param_lookup_string after mca_base_param_reg_string is unnecessary. The call to mca_base_param_lookup_string causes the value returned by mca_base_param_reg_string to be leaked.
</span><br>
<span class="quotelev1">&gt;  - Need to free mca_coll_ml_component.config_file_name on component close.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; btl/openib:
</span><br>
<span class="quotelev1">&gt;  - calling mca_base_param_lookup_string after mca_base_param_reg_string is unnecessary. The call to mca_base_param_lookup_string causes the value returned by mca_base_param_reg_string to be leaked.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; vprotocol/base:
</span><br>
<span class="quotelev1">&gt;  - There was no way for pml/v to determine if vprotocol took ownership of vprotocol_include_list. Fix by always never ownership (use strdup).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca/base:
</span><br>
<span class="quotelev1">&gt;  - param_lookup will result in storage-&gt;stringval to be a newly allocated string if the mca parameter has a string value. ensure this string is always freed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When: This is a simple patch. Timeout set for tomorrow @ 12:00 PM MST
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why: Always a good idea to clean up all allocated memory. With this patch and some others I have in the pipeline valgrind no longer reports and &quot;possibly leaked&quot; or &quot;definitely leaked&quot; blocks in ompi_info.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan Hjelm
</span><br>
<span class="quotelev1">&gt; HPC-3, LANL
</span><br>
<span class="quotelev1">&gt; &lt;ompi_leaks.patch&gt;_______________________________________________
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11758.php">George Bosilca: "Re: [OMPI devel] RFC: fix various leaks in trunk (touches coll/ml, vprotocol, pml/v, btl/openib, and mca/base)"</a>
<li><strong>Previous message:</strong> <a href="11756.php">Nathan Hjelm: "[OMPI devel] RFC: fix various leaks in trunk (touches coll/ml, vprotocol, pml/v, btl/openib, and mca/base)"</a>
<li><strong>In reply to:</strong> <a href="11756.php">Nathan Hjelm: "[OMPI devel] RFC: fix various leaks in trunk (touches coll/ml, vprotocol, pml/v, btl/openib, and mca/base)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11758.php">George Bosilca: "Re: [OMPI devel] RFC: fix various leaks in trunk (touches coll/ml, vprotocol, pml/v, btl/openib, and mca/base)"</a>
<li><strong>Reply:</strong> <a href="11758.php">George Bosilca: "Re: [OMPI devel] RFC: fix various leaks in trunk (touches coll/ml, vprotocol, pml/v, btl/openib, and mca/base)"</a>
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
