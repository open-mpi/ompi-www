<?
$subject_val = "Re: [OMPI devel] two questions about 1.7.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  4 04:31:34 2013" -->
<!-- isoreceived="20131204093134" -->
<!-- sent="Wed, 4 Dec 2013 10:31:32 +0100" -->
<!-- isosent="20131204093132" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] two questions about 1.7.1" -->
<!-- id="529EF674.6000209_at_rz.rwth-aachen.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D51094B6-272D-4913-8160-723E059CDE3E_at_cisco.com" -->
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
<strong>Date:</strong> 2013-12-04 04:31:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13355.php">Isaías A. Comprés Ureña: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>Previous message:</strong> <a href="13353.php">Igor Ivanov: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>In reply to:</strong> <a href="13348.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13361.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>Reply:</strong> <a href="13361.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/03/13 23:27, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Nov 22, 2013, at 1:19 PM, Paul Kapinos &lt;kapinos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well, I've tried this path on actual 1.7.3 (where the code is moved some 12 lines - beginning with 2700).
</span><br>
<span class="quotelev2">&gt;&gt; !! - no output &quot;skipping device&quot;! Also when starting main processes and -bind-to-socket used. What I see is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster.rz.RWTH-Aachen.DE:43670] btl:usnic: found: device mlx4_1, port 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster.rz.RWTH-Aachen.DE:43670] btl:usnic: this is not a usnic-capable device
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster.rz.RWTH-Aachen.DE:43670] btl:usnic: found: device mlx4_0, port 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cluster.rz.RWTH-Aachen.DE:43670] btl:usnic: this is not a usnic-capable device
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's actually ok -- that's from the usnic BTL, not the openib BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The usnic BTL is the Cisco UD verbs component, and it only works with Cisco UCS servers and VICs; it will not work with generic IB cards.  Hence, these messages are telling you that the usnic BTL is disqualifying itself because the ibv devices it found are not Cisco UCS VICs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Argh - what a shame not to see &quot;btl:usnic&quot;  :-|
<br>
<p><p><p><span class="quotelev1">&gt; Look for the openib messages, not the usnic messages.
</span><br>
<p>Well, as said there were *no messages* form the patch you provided in
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2013/06/12472.php">http://www.open-mpi.org/community/lists/devel/2013/06/12472.php</a>
<br>
<p>I've attached of a run with single process per node on nodes with 2 NICs, maybe 
<br>
you can see what goes wrong..
<br>
<p>Best
<br>
<p>Paul
<br>
<p><p><pre>
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
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13354/log_1.7.3js_01.txt">log_1.7.3js_01.txt</a>
</ul>
<!-- attachment="log_1.7.3js_01.txt" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13354/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13355.php">Isaías A. Comprés Ureña: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>Previous message:</strong> <a href="13353.php">Igor Ivanov: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>In reply to:</strong> <a href="13348.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13361.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>Reply:</strong> <a href="13361.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
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
