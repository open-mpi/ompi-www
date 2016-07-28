<?
$subject_val = "Re: [OMPI devel] RFC: fix various leaks in trunk (touches coll/ml, vprotocol, pml/v, btl/openib, and mca/base)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 19:01:49 2012" -->
<!-- isoreceived="20121106000149" -->
<!-- sent="Mon, 5 Nov 2012 19:01:43 -0500" -->
<!-- isosent="20121106000143" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: fix various leaks in trunk (touches coll/ml, vprotocol, pml/v, btl/openib, and mca/base)" -->
<!-- id="B055E2CC-DB3E-4B23-A2CC-2C1DBDA632C4_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5AE448BE-A927-4F3C-AA46-6491DAA84D93_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-05 19:01:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11759.php">Rayson Ho: "[OMPI devel] ROMIO code in OMPI"</a>
<li><strong>Previous message:</strong> <a href="11757.php">Jeff Squyres: "Re: [OMPI devel] RFC: fix various leaks in trunk (touches coll/ml, vprotocol, pml/v, btl/openib, and mca/base)"</a>
<li><strong>In reply to:</strong> <a href="11757.php">Jeff Squyres: "Re: [OMPI devel] RFC: fix various leaks in trunk (touches coll/ml, vprotocol, pml/v, btl/openib, and mca/base)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1!
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Nov 5, 2012, at 18:59 , Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; +1 on the ompi/mca/btl/openib/btl_openib_mca.c and opal/mca/base/mca_base_param.c.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I didn't check the others.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 5, 2012, at 6:31 PM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What: I used valgrind on ompi_info and found several leaks in the trunk. This patch fixes some of the leaks.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; pml/v:
</span><br>
<span class="quotelev2">&gt;&gt; - If vprotocol is not being used vprotocol_include_list is leaked. Assume vprotocol never takes ownership (see below) and always free the string.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; coll/ml:
</span><br>
<span class="quotelev2">&gt;&gt; - (patch verified) calling mca_base_param_lookup_string after mca_base_param_reg_string is unnecessary. The call to mca_base_param_lookup_string causes the value returned by mca_base_param_reg_string to be leaked.
</span><br>
<span class="quotelev2">&gt;&gt; - Need to free mca_coll_ml_component.config_file_name on component close.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; btl/openib:
</span><br>
<span class="quotelev2">&gt;&gt; - calling mca_base_param_lookup_string after mca_base_param_reg_string is unnecessary. The call to mca_base_param_lookup_string causes the value returned by mca_base_param_reg_string to be leaked.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol/base:
</span><br>
<span class="quotelev2">&gt;&gt; - There was no way for pml/v to determine if vprotocol took ownership of vprotocol_include_list. Fix by always never ownership (use strdup).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mca/base:
</span><br>
<span class="quotelev2">&gt;&gt; - param_lookup will result in storage-&gt;stringval to be a newly allocated string if the mca parameter has a string value. ensure this string is always freed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When: This is a simple patch. Timeout set for tomorrow @ 12:00 PM MST
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Why: Always a good idea to clean up all allocated memory. With this patch and some others I have in the pipeline valgrind no longer reports and &quot;possibly leaked&quot; or &quot;definitely leaked&quot; blocks in ompi_info.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan Hjelm
</span><br>
<span class="quotelev2">&gt;&gt; HPC-3, LANL
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi_leaks.patch&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11759.php">Rayson Ho: "[OMPI devel] ROMIO code in OMPI"</a>
<li><strong>Previous message:</strong> <a href="11757.php">Jeff Squyres: "Re: [OMPI devel] RFC: fix various leaks in trunk (touches coll/ml, vprotocol, pml/v, btl/openib, and mca/base)"</a>
<li><strong>In reply to:</strong> <a href="11757.php">Jeff Squyres: "Re: [OMPI devel] RFC: fix various leaks in trunk (touches coll/ml, vprotocol, pml/v, btl/openib, and mca/base)"</a>
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
