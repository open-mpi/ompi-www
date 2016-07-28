<?
$subject_val = "Re: [OMPI devel] two questions about 1.7.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  4 10:58:35 2013" -->
<!-- isoreceived="20131204155835" -->
<!-- sent="Wed, 4 Dec 2013 16:58:33 +0100" -->
<!-- isosent="20131204155833" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] two questions about 1.7.1" -->
<!-- id="529F5129.5070400_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3EBE48FA-02FB-4753-A5D8-4C63BEC982CA_at_cisco.com" -->
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
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-04 10:58:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13373.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 1/4] Trying to get the C/R code to compile	again. (void value not ignored)"</a>
<li><strong>Previous message:</strong> <a href="13371.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to	compile	again. (send_*_nb)"</a>
<li><strong>In reply to:</strong> <a href="13361.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/04/13 14:53, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Dec 4, 2013, at 4:31 AM, Paul Kapinos &lt;kapinos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Argh - what a shame not to see &quot;btl:usnic&quot;  :-|
</span><br>
<span class="quotelev1">&gt; What a shame you don't have Cisco hardware to use the usnic BTL!  :-p
</span><br>
Well, this is far above my decision level :o)
<br>
<p><p><p><span class="quotelev3">&gt;&gt;&gt; Look for the openib messages, not the usnic messages.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well, as said there were *no messages* form the patch you provided in
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2013/06/12472.php">http://www.open-mpi.org/community/lists/devel/2013/06/12472.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah, I see.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've attached of a run with single process per node on nodes with 2 NICs, maybe you can see what goes wrong..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I'm guessing is happening here is that hwloc was built without PCI device detection, and therefore you're not getting the benefit of the near/far detection.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think we currently export whether hwloc was built with PCI device detection support or not, so look for the section in your configure output labeled:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- MCA component hwloc:hwloc152 (m4 configuration macro, priority 75)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Send the output of that section here.  There should be tests for PCI libraries in there; that should tell us whether you have PCI detection support enabled.
</span><br>
<p>The whole configure output attached, to prevent bad copying, as far as output of 
<br>
'ompi_info --all'.
<br>
<p>As far as I see &quot;it should be there&quot;:
<br>
<span class="quotelev1"> &gt; checking whether to enable hwloc PCI device support... yes (default)
</span><br>
<p><p><p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915


</pre>
<p>
<p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13372/log_01_conf.txt.gz">log_01_conf.txt.gz</a>
</ul>
<!-- attachment="log_01_conf.txt.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13372/openmpi-1.7.3js_ompi_info--all.txt.gz">openmpi-1.7.3js_ompi_info--all.txt.gz</a>
</ul>
<!-- attachment="openmpi-1.7.3js_ompi_info--all.txt.gz" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13372/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13373.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 1/4] Trying to get the C/R code to compile	again. (void value not ignored)"</a>
<li><strong>Previous message:</strong> <a href="13371.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH 2/4] Trying to get the C/R code to	compile	again. (send_*_nb)"</a>
<li><strong>In reply to:</strong> <a href="13361.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
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
