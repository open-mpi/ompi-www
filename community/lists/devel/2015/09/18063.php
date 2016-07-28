<?
$subject_val = "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 17 14:11:26 2015" -->
<!-- isoreceived="20150917181126" -->
<!-- sent="Thu, 17 Sep 2015 18:11:24 +0000" -->
<!-- isosent="20150917181124" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()" -->
<!-- id="246EE95A-BCCB-476E-AB11-42B18621CC93_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkXSo+zp2vM946NGUMA42s7dYZtptAs1=NUg6Q_uL4bPBA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-17 14:11:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18064.php">Mark Santcroos: "[OMPI devel] regression running mpi applications with dvm"</a>
<li><strong>Previous message:</strong> <a href="18062.php">Nathan Hjelm: "Re: [OMPI devel] --enable-spare-groups build broken"</a>
<li><strong>In reply to:</strong> <a href="18046.php">George Bosilca: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18053.php">&#208;&#146;&#208;&#187;&#208;&#176;&#208;&#180;&#208;&#184;&#208;&#188;&#208;&#184;&#209;&#128; &#208;&#162;&#209;&#128;&#209;&#131;&#209;&#137;&#208;&#184;&#208;&#189;: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 16, 2015, at 12:02 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./opal/mca/btl/usnic/btl_usnic_compat.h:161:    OMPI_FREE_LIST_GET_MT(list, (item))
</span><br>
<p>FWIW: This one exists because we use the same usnic BTL code between master and v1.8/v1.10.  We have some configury that figures out in which tree the usNIC BTL is being compiles, and reacts accordingly.
<br>
<p>Hence, this OMPI_FREE_LIST_GET_MT is only used when compiling in v1.8/v1.10, and is ignored in master/v2.x.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18064.php">Mark Santcroos: "[OMPI devel] regression running mpi applications with dvm"</a>
<li><strong>Previous message:</strong> <a href="18062.php">Nathan Hjelm: "Re: [OMPI devel] --enable-spare-groups build broken"</a>
<li><strong>In reply to:</strong> <a href="18046.php">George Bosilca: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18053.php">&#208;&#146;&#208;&#187;&#208;&#176;&#208;&#180;&#208;&#184;&#208;&#188;&#208;&#184;&#209;&#128; &#208;&#162;&#209;&#128;&#209;&#131;&#209;&#137;&#208;&#184;&#208;&#189;: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
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
