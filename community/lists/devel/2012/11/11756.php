<?
$subject_val = "[OMPI devel] RFC: fix various leaks in trunk (touches coll/ml, vprotocol, pml/v, btl/openib, and mca/base)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 18:31:09 2012" -->
<!-- isoreceived="20121105233109" -->
<!-- sent="Mon, 5 Nov 2012 16:31:05 -0700" -->
<!-- isosent="20121105233105" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: fix various leaks in trunk (touches coll/ml, vprotocol, pml/v, btl/openib, and mca/base)" -->
<!-- id="20121105233104.GB89263_at_pantheralanlgov.local" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: fix various leaks in trunk (touches coll/ml, vprotocol, pml/v, btl/openib, and mca/base)<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-05 18:31:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11757.php">Jeff Squyres: "Re: [OMPI devel] RFC: fix various leaks in trunk (touches coll/ml, vprotocol, pml/v, btl/openib, and mca/base)"</a>
<li><strong>Previous message:</strong> <a href="11755.php">Nathan Hjelm: "[OMPI devel] RFC: fix frameworks usage of opal_output (updated)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11757.php">Jeff Squyres: "Re: [OMPI devel] RFC: fix various leaks in trunk (touches coll/ml, vprotocol, pml/v, btl/openib, and mca/base)"</a>
<li><strong>Reply:</strong> <a href="11757.php">Jeff Squyres: "Re: [OMPI devel] RFC: fix various leaks in trunk (touches coll/ml, vprotocol, pml/v, btl/openib, and mca/base)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: I used valgrind on ompi_info and found several leaks in the trunk. This patch fixes some of the leaks.
<br>
<p>pml/v:
<br>
&nbsp;&nbsp;- If vprotocol is not being used vprotocol_include_list is leaked. Assume vprotocol never takes ownership (see below) and always free the string.
<br>
<p>coll/ml:
<br>
&nbsp;&nbsp;- (patch verified) calling mca_base_param_lookup_string after mca_base_param_reg_string is unnecessary. The call to mca_base_param_lookup_string causes the value returned by mca_base_param_reg_string to be leaked.
<br>
&nbsp;&nbsp;- Need to free mca_coll_ml_component.config_file_name on component close.
<br>
<p>btl/openib:
<br>
&nbsp;&nbsp;- calling mca_base_param_lookup_string after mca_base_param_reg_string is unnecessary. The call to mca_base_param_lookup_string causes the value returned by mca_base_param_reg_string to be leaked.
<br>
<p>vprotocol/base:
<br>
&nbsp;&nbsp;- There was no way for pml/v to determine if vprotocol took ownership of vprotocol_include_list. Fix by always never ownership (use strdup).
<br>
<p>mca/base:
<br>
&nbsp;&nbsp;- param_lookup will result in storage-&gt;stringval to be a newly allocated string if the mca parameter has a string value. ensure this string is always freed.
<br>
<p><p>When: This is a simple patch. Timeout set for tomorrow @ 12:00 PM MST
<br>
<p>Why: Always a good idea to clean up all allocated memory. With this patch and some others I have in the pipeline valgrind no longer reports and &quot;possibly leaked&quot; or &quot;definitely leaked&quot; blocks in ompi_info.
<br>
<p><p>-Nathan Hjelm
<br>
HPC-3, LANL
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11756/ompi_leaks.patch">ompi_leaks.patch</a>
</ul>
<!-- attachment="ompi_leaks.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11757.php">Jeff Squyres: "Re: [OMPI devel] RFC: fix various leaks in trunk (touches coll/ml, vprotocol, pml/v, btl/openib, and mca/base)"</a>
<li><strong>Previous message:</strong> <a href="11755.php">Nathan Hjelm: "[OMPI devel] RFC: fix frameworks usage of opal_output (updated)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11757.php">Jeff Squyres: "Re: [OMPI devel] RFC: fix various leaks in trunk (touches coll/ml, vprotocol, pml/v, btl/openib, and mca/base)"</a>
<li><strong>Reply:</strong> <a href="11757.php">Jeff Squyres: "Re: [OMPI devel] RFC: fix various leaks in trunk (touches coll/ml, vprotocol, pml/v, btl/openib, and mca/base)"</a>
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
