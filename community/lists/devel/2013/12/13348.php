<?
$subject_val = "Re: [OMPI devel] two questions about 1.7.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  3 17:27:46 2013" -->
<!-- isoreceived="20131203222746" -->
<!-- sent="Tue, 3 Dec 2013 22:27:44 +0000" -->
<!-- isosent="20131203222744" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] two questions about 1.7.1" -->
<!-- id="D51094B6-272D-4913-8160-723E059CDE3E_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="528FA038.9000107_at_rz.rwth-aachen.de" -->
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
<strong>Date:</strong> 2013-12-03 17:27:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13349.php">Nathan Hjelm: "Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h"</a>
<li><strong>Previous message:</strong> <a href="13347.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/11/13304.php">Paul Kapinos: "Re: [OMPI devel] two questions about 1.7.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13354.php">Paul Kapinos: "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>Reply:</strong> <a href="13354.php">Paul Kapinos: "Re: [OMPI devel] two questions about 1.7.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 22, 2013, at 1:19 PM, Paul Kapinos &lt;kapinos_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Well, I've tried this path on actual 1.7.3 (where the code is moved some 12 lines - beginning with 2700).
</span><br>
<span class="quotelev1">&gt; !! - no output &quot;skipping device&quot;! Also when starting main processes and -bind-to-socket used. What I see is
</span><br>
<span class="quotelev2">&gt; &gt;[cluster.rz.RWTH-Aachen.DE:43670] btl:usnic: found: device mlx4_1, port 1
</span><br>
<span class="quotelev2">&gt; &gt;[cluster.rz.RWTH-Aachen.DE:43670] btl:usnic: this is not a usnic-capable device
</span><br>
<span class="quotelev2">&gt; &gt;[cluster.rz.RWTH-Aachen.DE:43670] btl:usnic: found: device mlx4_0, port 1
</span><br>
<span class="quotelev2">&gt; &gt;[cluster.rz.RWTH-Aachen.DE:43670] btl:usnic: this is not a usnic-capable device
</span><br>
<p>That's actually ok -- that's from the usnic BTL, not the openib BTL.
<br>
<p>The usnic BTL is the Cisco UD verbs component, and it only works with Cisco UCS servers and VICs; it will not work with generic IB cards.  Hence, these messages are telling you that the usnic BTL is disqualifying itself because the ibv devices it found are not Cisco UCS VICs.
<br>
<p>Look for the openib messages, not the usnic messages.
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
<li><strong>Next message:</strong> <a href="13349.php">Nathan Hjelm: "Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h"</a>
<li><strong>Previous message:</strong> <a href="13347.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/11/13304.php">Paul Kapinos: "Re: [OMPI devel] two questions about 1.7.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13354.php">Paul Kapinos: "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>Reply:</strong> <a href="13354.php">Paul Kapinos: "Re: [OMPI devel] two questions about 1.7.1"</a>
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
