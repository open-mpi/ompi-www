<?
$subject_val = "Re: [OMPI devel] two questions about 1.7.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  4 08:53:24 2013" -->
<!-- isoreceived="20131204135324" -->
<!-- sent="Wed, 4 Dec 2013 13:53:13 +0000" -->
<!-- isosent="20131204135313" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] two questions about 1.7.1" -->
<!-- id="3EBE48FA-02FB-4753-A5D8-4C63BEC982CA_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="529EF674.6000209_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] two questions about 1.7.1<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-04 08:53:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13362.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>Previous message:</strong> <a href="13360.php">Isa&#237;as A. Compr&#233;s Ure&#241;a: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>In reply to:</strong> <a href="13354.php">Paul Kapinos: "Re: [OMPI devel] two questions about 1.7.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13372.php">Paul Kapinos: "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>Reply:</strong> <a href="13372.php">Paul Kapinos: "Re: [OMPI devel] two questions about 1.7.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 4, 2013, at 4:31 AM, Paul Kapinos &lt;kapinos_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Argh - what a shame not to see &quot;btl:usnic&quot;  :-|
</span><br>
<p>What a shame you don't have Cisco hardware to use the usnic BTL!  :-p
<br>
<p><span class="quotelev2">&gt;&gt; Look for the openib messages, not the usnic messages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, as said there were *no messages* form the patch you provided in
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2013/06/12472.php">http://www.open-mpi.org/community/lists/devel/2013/06/12472.php</a>
</span><br>
<p>Ah, I see.
<br>
<p><span class="quotelev1">&gt; I've attached of a run with single process per node on nodes with 2 NICs, maybe you can see what goes wrong..
</span><br>
<p>What I'm guessing is happening here is that hwloc was built without PCI device detection, and therefore you're not getting the benefit of the near/far detection. 
<br>
<p>I don't think we currently export whether hwloc was built with PCI device detection support or not, so look for the section in your configure output labeled:
<br>
<p>--- MCA component hwloc:hwloc152 (m4 configuration macro, priority 75)
<br>
<p>Send the output of that section here.  There should be tests for PCI libraries in there; that should tell us whether you have PCI detection support enabled.
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
<li><strong>Next message:</strong> <a href="13362.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>Previous message:</strong> <a href="13360.php">Isa&#237;as A. Compr&#233;s Ure&#241;a: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>In reply to:</strong> <a href="13354.php">Paul Kapinos: "Re: [OMPI devel] two questions about 1.7.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13372.php">Paul Kapinos: "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>Reply:</strong> <a href="13372.php">Paul Kapinos: "Re: [OMPI devel] two questions about 1.7.1"</a>
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
