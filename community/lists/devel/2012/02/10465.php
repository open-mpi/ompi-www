<?
$subject_val = "[OMPI devel] btl/gm build broken on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 16 21:47:57 2012" -->
<!-- isoreceived="20120217024757" -->
<!-- sent="Thu, 16 Feb 2012 18:47:46 -0800" -->
<!-- isosent="20120217024746" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] btl/gm build broken on trunk" -->
<!-- id="4F3DBFD2.70303_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] btl/gm build broken on trunk<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-16 21:47:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10466.php">George Bosilca: "Re: [OMPI devel] btl/gm build broken on trunk"</a>
<li><strong>Previous message:</strong> <a href="10464.php">Jeff Squyres: "Re: [OMPI devel] -fvisibility probe broken [w/ 3-line PATCH]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10466.php">George Bosilca: "Re: [OMPI devel] btl/gm build broken on trunk"</a>
<li><strong>Reply:</strong> <a href="10466.php">George Bosilca: "Re: [OMPI devel] btl/gm build broken on trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just tried to build yesterday's ompi trunk tarball (1.7a1r25937) with 
<br>
the Intel compilers.
<br>
Sorry if this was fixed in the past 23 hours or so.
<br>
<p><p>My system has GM-2.1.30 installed, and icc wasn't happy with 
<br>
btl_gm_component.c:
<br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-trunk-linux-x86-gm2-icc-8.1//openmpi-trunk/ompi/mca/btl/gm/btl_gm_component.c(606): 
</span><br>
<span class="quotelev1">&gt; error #165: too few arguments in function call
</span><br>
<span class="quotelev1">&gt;                       btl-&gt;error_cb(&amp;btl-&gt;super, 
</span><br>
<span class="quotelev1">&gt; MCA_BTL_ERROR_FLAGS_FATAL);
</span><br>
<span class="quotelev1">&gt;                                                                           
</span><br>
<span class="quotelev1">&gt; ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-trunk-linux-x86-gm2-icc-8.1//openmpi-trunk/ompi/mca/btl/gm/btl_gm_component.c(632): 
</span><br>
<span class="quotelev1">&gt; error #165: too few arguments in function call
</span><br>
<span class="quotelev1">&gt;                       btl-&gt;error_cb(&amp;btl-&gt;super, 
</span><br>
<span class="quotelev1">&gt; MCA_BTL_ERROR_FLAGS_FATAL);
</span><br>
<span class="quotelev1">&gt;                                                                           
</span><br>
<span class="quotelev1">&gt; ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Usage of btl-&gt;error_cb() appears correct on the 1.5 branch (just a 
<br>
visual inspection).
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10466.php">George Bosilca: "Re: [OMPI devel] btl/gm build broken on trunk"</a>
<li><strong>Previous message:</strong> <a href="10464.php">Jeff Squyres: "Re: [OMPI devel] -fvisibility probe broken [w/ 3-line PATCH]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10466.php">George Bosilca: "Re: [OMPI devel] btl/gm build broken on trunk"</a>
<li><strong>Reply:</strong> <a href="10466.php">George Bosilca: "Re: [OMPI devel] btl/gm build broken on trunk"</a>
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
