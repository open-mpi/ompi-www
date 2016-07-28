<?
$subject_val = "Re: [OMPI devel] 1.10.0rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 18:16:44 2015" -->
<!-- isoreceived="20150722221644" -->
<!-- sent="Wed, 22 Jul 2015 16:16:41 -0600" -->
<!-- isosent="20150722221641" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0rc2" -->
<!-- id="55B01649.9000901_at_cora.nwra.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="BDEDED62-14EE-4D78-ADCF-B690C6DCE693_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.0rc2<br>
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-22 18:16:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17687.php">Burette, Yohann: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>Previous message:</strong> <a href="17685.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>In reply to:</strong> <a href="17676.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17679.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 07/21/2015 07:59 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Jul 21, 2015, at 4:38 PM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I see that 1.10.0 can make use of libfabric, but I don't see much
</span><br>
<span class="quotelev2">&gt;&gt; documentation on it and certainly nothing in the README file.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oops; shame on us.  We'll update README.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Since libfabric
</span><br>
<span class="quotelev2">&gt;&gt; makes use of libibverbs and librdmacm, does it replace that functionality in
</span><br>
<span class="quotelev2">&gt;&gt; openmpi, or should we continue to build openmpi with direct verbs/rdmacm support?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The current status of Mellanox IB support in libfabric is rudimentary, at best (it's layered over verbs, as you noted).  As such, OMPI doesn't use libfabric with verbs -- there wouldn't be much point.  libfabric is better with other networks, such as Cisco usNIC and Intel PSM.  There's a Cray uGNI libfabric provider coming along, too -- but it's not in the released libfabric distribution yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hence:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. you should continue building the openib BTL with native verbs support
</span><br>
<span class="quotelev1">&gt; 2. you should use --with-libfabric to compile in support for Cisco usNIC- and Intel PSM-based fabrics
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Thanks for the explanation.
<br>
<p><pre>
-- 
Orion Poplawski
Technical Manager                     303-415-9701 x222
NWRA, Boulder/CoRA Office             FAX: 303-415-9702
3380 Mitchell Lane                       orion_at_[hidden]
Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17687.php">Burette, Yohann: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>Previous message:</strong> <a href="17685.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>In reply to:</strong> <a href="17676.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17679.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc2"</a>
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
