<?
$subject_val = "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal	symbols";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 26 15:39:08 2009" -->
<!-- isoreceived="20090126203908" -->
<!-- sent="Mon, 26 Jan 2009 15:39:02 -0500" -->
<!-- isosent="20090126203902" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal	symbols" -->
<!-- id="1E5E4A68-EEFA-4F18-9172-7A31ADDFD798_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="497E1D99.70203_at_inria.fr" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-26 15:39:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5311.php">Nifty Tom Mitchell: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Previous message:</strong> <a href="5309.php">Brice Goglin: "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal	symbols"</a>
<li><strong>In reply to:</strong> <a href="5309.php">Brice Goglin: "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal	symbols"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5301.php">George Bosilca: "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal symbols"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 26, 2009, at 15:31 , Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Yes, the only thing we need is an unique identifier per cluster. We
</span><br>
<span class="quotelev2">&gt;&gt; use the last 6 digits from the mapper MAC address.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, thanks for the details. We are going to implement all this in
</span><br>
<span class="quotelev1">&gt; Open-MX now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then, I guess mx__regcache_clean is called when the OMPI free hook
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wants to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clear the MX regcache, right?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As we don't really have access to the MX memory registration (which  
</span><br>
<span class="quotelev2">&gt;&gt; is
</span><br>
<span class="quotelev2">&gt;&gt; good), we need sometimes to force the cleanup. This is why we're  
</span><br>
<span class="quotelev2">&gt;&gt; using
</span><br>
<span class="quotelev2">&gt;&gt; this function.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By the way, shouldn't configure check for mx__regcache_clean as well?
</span><br>
<p>I guess we should have done that. Thanks for pointing it out, I'll  
<br>
correct the problem asap.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mca_component_show_load_errors is what you need there. Set it to
</span><br>
<span class="quotelev2">&gt;&gt; something high depending on the level of verbosity you want to have.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am still getting &quot;file not found&quot;. It may be related to Jeff's  
</span><br>
<span class="quotelev1">&gt; libtool
</span><br>
<span class="quotelev1">&gt; bug. LD_DEBUG=verbose will be enough for now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; Brice Goglin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5311.php">Nifty Tom Mitchell: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Previous message:</strong> <a href="5309.php">Brice Goglin: "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal	symbols"</a>
<li><strong>In reply to:</strong> <a href="5309.php">Brice Goglin: "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal	symbols"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5301.php">George Bosilca: "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal symbols"</a>
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
