<?
$subject_val = "Re: [OMPI users] Does sendrecv guarantee order?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 14 16:30:35 2014" -->
<!-- isoreceived="20140214213035" -->
<!-- sent="Fri, 14 Feb 2014 16:30:34 -0500" -->
<!-- isosent="20140214213034" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Does sendrecv guarantee order?" -->
<!-- id="CA+ssbKVskwD_qrW19E34XsHCW_E40m-wjgN5rr2shFAtSfyEYg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E58E78E5-1D01-45F9-A03F-C1BE2F49B27D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Does sendrecv guarantee order?<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-14 16:30:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23620.php">Brock Palen: "Re: [OMPI users] Can't build openmpi-1.6.5 with latest FCA 2.5 release."</a>
<li><strong>Previous message:</strong> <a href="23618.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configure issue with/without HWLOC when PGI used and	CUDA support enabled"</a>
<li><strong>In reply to:</strong> <a href="23612.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Does sendrecv guarantee order?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Jeff for the clarification.
<br>
<p>Saliya
<br>
<p><p>On Fri, Feb 14, 2014 at 7:06 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On Feb 13, 2014, at 10:59 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Anyway, to answer your question I was trying to do sendrecv in a chain
</span><br>
<span class="quotelev1">&gt; where &quot;toSend&quot; and &quot;receiveFrom&quot; ranks are not the same. I was using a
</span><br>
<span class="quotelev1">&gt; single buffer, which resulted in cases where the buffer content got
</span><br>
<span class="quotelev1">&gt; replaced with received values before being able to send its original
</span><br>
<span class="quotelev1">&gt; content. I think it was an error on my side to use a single buffer in a
</span><br>
<span class="quotelev1">&gt; pipeline sendrecev. I fixed it by having two buffers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is correct: MPI_SENDRECV does not guarantee any ordering.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I guess still with MPI_IN_PLACE this could happen. Please correct me
</span><br>
<span class="quotelev1">&gt; here if I am wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is also correct.  You could, however, use MPI_SENDRECV_REPLACE.  It's
</span><br>
<span class="quotelev1">&gt; not much more efficient than providing your own two buffers (i.e., OMPI
</span><br>
<span class="quotelev1">&gt; will alloc a temporary receive buffer, and when the send is done, it'll
</span><br>
<span class="quotelev1">&gt; copy from the temp to the send buffer).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Saliya Ekanayake esaliya_at_[hidden]
Cell 812-391-4914 Home 812-961-6383
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23619/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23620.php">Brock Palen: "Re: [OMPI users] Can't build openmpi-1.6.5 with latest FCA 2.5 release."</a>
<li><strong>Previous message:</strong> <a href="23618.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configure issue with/without HWLOC when PGI used and	CUDA support enabled"</a>
<li><strong>In reply to:</strong> <a href="23612.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Does sendrecv guarantee order?"</a>
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
