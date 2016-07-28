<?
$subject_val = "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal	symbols";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 26 15:31:26 2009" -->
<!-- isoreceived="20090126203126" -->
<!-- sent="Mon, 26 Jan 2009 21:31:21 +0100" -->
<!-- isosent="20090126203121" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal	symbols" -->
<!-- id="497E1D99.70203_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="692B042C-CB13-4526-924A-2D98D32087FE_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal	symbols<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-26 15:31:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5310.php">George Bosilca: "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal	symbols"</a>
<li><strong>Previous message:</strong> <a href="5308.php">Paul H. Hargrove: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<li><strong>In reply to:</strong> <a href="5300.php">George Bosilca: "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal symbols"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5310.php">George Bosilca: "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal	symbols"</a>
<li><strong>Reply:</strong> <a href="5310.php">George Bosilca: "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal	symbols"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Yes, the only thing we need is an unique identifier per cluster. We
</span><br>
<span class="quotelev1">&gt; use the last 6 digits from the mapper MAC address.
</span><br>
<p>Ok, thanks for the details. We are going to implement all this in
<br>
Open-MX now.
<br>
<p><span class="quotelev2">&gt;&gt; Then, I guess mx__regcache_clean is called when the OMPI free hook
</span><br>
<span class="quotelev2">&gt;&gt; wants to
</span><br>
<span class="quotelev2">&gt;&gt; clear the MX regcache, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As we don't really have access to the MX memory registration (which is
</span><br>
<span class="quotelev1">&gt; good), we need sometimes to force the cleanup. This is why we're using
</span><br>
<span class="quotelev1">&gt; this function.
</span><br>
<p>By the way, shouldn't configure check for mx__regcache_clean as well?
<br>
<p><span class="quotelev1">&gt; mca_component_show_load_errors is what you need there. Set it to
</span><br>
<span class="quotelev1">&gt; something high depending on the level of verbosity you want to have.
</span><br>
<p>I am still getting &quot;file not found&quot;. It may be related to Jeff's libtool
<br>
bug. LD_DEBUG=verbose will be enough for now.
<br>
<p>Thanks.
<br>
Brice Goglin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5310.php">George Bosilca: "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal	symbols"</a>
<li><strong>Previous message:</strong> <a href="5308.php">Paul H. Hargrove: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<li><strong>In reply to:</strong> <a href="5300.php">George Bosilca: "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal symbols"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5310.php">George Bosilca: "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal	symbols"</a>
<li><strong>Reply:</strong> <a href="5310.php">George Bosilca: "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal	symbols"</a>
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
