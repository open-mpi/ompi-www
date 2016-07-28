<?
$subject_val = "Re: [OMPI users] Does sendrecv guarantee order?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 14 07:07:04 2014" -->
<!-- isoreceived="20140214120704" -->
<!-- sent="Fri, 14 Feb 2014 12:06:44 +0000" -->
<!-- isosent="20140214120644" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Does sendrecv guarantee order?" -->
<!-- id="E58E78E5-1D01-45F9-A03F-C1BE2F49B27D_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CA+ssbKWDm5VcbQR2hBuZZf+JiE6+pjc7_1jmeYuFaD0xFgLSCg_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-14 07:06:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23613.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions on MPI I/O and ompi_info"</a>
<li><strong>Previous message:</strong> <a href="23611.php">Reuti: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>In reply to:</strong> <a href="23602.php">Saliya Ekanayake: "Re: [OMPI users] Does sendrecv guarantee order?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23619.php">Saliya Ekanayake: "Re: [OMPI users] Does sendrecv guarantee order?"</a>
<li><strong>Reply:</strong> <a href="23619.php">Saliya Ekanayake: "Re: [OMPI users] Does sendrecv guarantee order?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 13, 2014, at 10:59 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Anyway, to answer your question I was trying to do sendrecv in a chain where &quot;toSend&quot; and &quot;receiveFrom&quot; ranks are not the same. I was using a single buffer, which resulted in cases where the buffer content got replaced with received values before being able to send its original content. I think it was an error on my side to use a single buffer in a pipeline sendrecev. I fixed it by having two buffers.
</span><br>
<p>That is correct: MPI_SENDRECV does not guarantee any ordering.
<br>
<p><span class="quotelev1">&gt; I guess still with MPI_IN_PLACE this could happen. Please correct me here if I am wrong.
</span><br>
<p>That is also correct.  You could, however, use MPI_SENDRECV_REPLACE.  It's not much more efficient than providing your own two buffers (i.e., OMPI will alloc a temporary receive buffer, and when the send is done, it'll copy from the temp to the send buffer).
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
<li><strong>Next message:</strong> <a href="23613.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions on MPI I/O and ompi_info"</a>
<li><strong>Previous message:</strong> <a href="23611.php">Reuti: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>In reply to:</strong> <a href="23602.php">Saliya Ekanayake: "Re: [OMPI users] Does sendrecv guarantee order?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23619.php">Saliya Ekanayake: "Re: [OMPI users] Does sendrecv guarantee order?"</a>
<li><strong>Reply:</strong> <a href="23619.php">Saliya Ekanayake: "Re: [OMPI users] Does sendrecv guarantee order?"</a>
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
