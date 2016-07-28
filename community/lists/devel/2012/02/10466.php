<?
$subject_val = "Re: [OMPI devel] btl/gm build broken on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 16 22:19:20 2012" -->
<!-- isoreceived="20120217031920" -->
<!-- sent="Thu, 16 Feb 2012 22:19:17 -0500" -->
<!-- isosent="20120217031917" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl/gm build broken on trunk" -->
<!-- id="CD38AC17-B337-4E36-9E9D-EDFE472DA8CC_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F3DBFD2.70303_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] btl/gm build broken on trunk<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-16 22:19:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10467.php">Paul H. Hargrove: "[OMPI devel] OPAL_ENABLE_FT_CR build broken in 1.5 branch"</a>
<li><strong>Previous message:</strong> <a href="10465.php">Paul H. Hargrove: "[OMPI devel] btl/gm build broken on trunk"</a>
<li><strong>In reply to:</strong> <a href="10465.php">Paul H. Hargrove: "[OMPI devel] btl/gm build broken on trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Paul. Fixed in r25946.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Feb 16, 2012, at 21:47 , Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; I just tried to build yesterday's ompi trunk tarball (1.7a1r25937) with the Intel compilers.
</span><br>
<span class="quotelev1">&gt; Sorry if this was fixed in the past 23 hours or so.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My system has GM-2.1.30 installed, and icc wasn't happy with btl_gm_component.c:
</span><br>
<span class="quotelev2">&gt;&gt; /home/pcp1/phargrov/OMPI/openmpi-trunk-linux-x86-gm2-icc-8.1//openmpi-trunk/ompi/mca/btl/gm/btl_gm_component.c(606): error #165: too few arguments in function call
</span><br>
<span class="quotelev2">&gt;&gt;                      btl-&gt;error_cb(&amp;btl-&gt;super, MCA_BTL_ERROR_FLAGS_FATAL);
</span><br>
<span class="quotelev2">&gt;&gt;                                                                          ^
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /home/pcp1/phargrov/OMPI/openmpi-trunk-linux-x86-gm2-icc-8.1//openmpi-trunk/ompi/mca/btl/gm/btl_gm_component.c(632): error #165: too few arguments in function call
</span><br>
<span class="quotelev2">&gt;&gt;                      btl-&gt;error_cb(&amp;btl-&gt;super, MCA_BTL_ERROR_FLAGS_FATAL);
</span><br>
<span class="quotelev2">&gt;&gt;                                                                          ^
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Usage of btl-&gt;error_cb() appears correct on the 1.5 branch (just a visual inspection).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<li><strong>Next message:</strong> <a href="10467.php">Paul H. Hargrove: "[OMPI devel] OPAL_ENABLE_FT_CR build broken in 1.5 branch"</a>
<li><strong>Previous message:</strong> <a href="10465.php">Paul H. Hargrove: "[OMPI devel] btl/gm build broken on trunk"</a>
<li><strong>In reply to:</strong> <a href="10465.php">Paul H. Hargrove: "[OMPI devel] btl/gm build broken on trunk"</a>
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
