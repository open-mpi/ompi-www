<?
$subject_val = "Re: [OMPI devel] 1.10.0rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 21:59:23 2015" -->
<!-- isoreceived="20150722015923" -->
<!-- sent="Wed, 22 Jul 2015 01:59:10 +0000" -->
<!-- isosent="20150722015910" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0rc2" -->
<!-- id="BDEDED62-14EE-4D78-ADCF-B690C6DCE693_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="55AEADE0.8040909_at_cora.nwra.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-21 21:59:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17677.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>Previous message:</strong> <a href="17675.php">Paul Hargrove: "[OMPI devel] Open MPI 1.10.0rc2 and &quot;pgcc -m32&quot;"</a>
<li><strong>In reply to:</strong> <a href="17671.php">Orion Poplawski: "Re: [OMPI devel] 1.10.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17677.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>Reply:</strong> <a href="17677.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>Reply:</strong> <a href="17686.php">Orion Poplawski: "Re: [OMPI devel] 1.10.0rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 21, 2015, at 4:38 PM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I see that 1.10.0 can make use of libfabric, but I don't see much
</span><br>
<span class="quotelev1">&gt; documentation on it and certainly nothing in the README file.  
</span><br>
<p>Oops; shame on us.  We'll update README.
<br>
<p><span class="quotelev1">&gt; Since libfabric
</span><br>
<span class="quotelev1">&gt; makes use of libibverbs and librdmacm, does it replace that functionality in
</span><br>
<span class="quotelev1">&gt; openmpi, or should we continue to build openmpi with direct verbs/rdmacm support?
</span><br>
<p>The current status of Mellanox IB support in libfabric is rudimentary, at best (it's layered over verbs, as you noted).  As such, OMPI doesn't use libfabric with verbs -- there wouldn't be much point.  libfabric is better with other networks, such as Cisco usNIC and Intel PSM.  There's a Cray uGNI libfabric provider coming along, too -- but it's not in the released libfabric distribution yet.
<br>
<p>Hence:
<br>
<p>1. you should continue building the openib BTL with native verbs support
<br>
2. you should use --with-libfabric to compile in support for Cisco usNIC- and Intel PSM-based fabrics
<br>
<p>Make sense?
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
<li><strong>Next message:</strong> <a href="17677.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>Previous message:</strong> <a href="17675.php">Paul Hargrove: "[OMPI devel] Open MPI 1.10.0rc2 and &quot;pgcc -m32&quot;"</a>
<li><strong>In reply to:</strong> <a href="17671.php">Orion Poplawski: "Re: [OMPI devel] 1.10.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17677.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>Reply:</strong> <a href="17677.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>Reply:</strong> <a href="17686.php">Orion Poplawski: "Re: [OMPI devel] 1.10.0rc2"</a>
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
