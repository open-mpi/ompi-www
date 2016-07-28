<?
$subject_val = "Re: [OMPI devel] How is a MPI process launched ?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 27 10:12:12 2010" -->
<!-- isoreceived="20100427141212" -->
<!-- sent="Tue, 27 Apr 2010 10:12:07 -0400" -->
<!-- isosent="20100427141207" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How is a MPI process launched ?" -->
<!-- id="79C2DA9B-34B0-4BFD-A301-ED7693585390_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="681670.18772.qm_at_web8708.mail.in.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] How is a MPI process launched ?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-27 10:12:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7819.php">Sylvain Jeaugey: "[OMPI devel] RDMA with ob1 and openib"</a>
<li><strong>Previous message:</strong> <a href="7817.php">Leo P.: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>In reply to:</strong> <a href="7817.php">Leo P.: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7829.php">Leo P.: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>Reply:</strong> <a href="7829.php">Leo P.: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 27, 2010, at 10:06 AM, Leo P. wrote:
<br>
<p><span class="quotelev1">&gt; Ralph has talked about the other parts already; so I'll ask about the BTL: what type of network are you looking to route via the BTL?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am talking about two different network using a private IP and all the communication being routed through a NAT router 
</span><br>
<p>There's a bunch of issues with this; I know that the U. Tennessee and INRIA folks have dug into at least some of them.
<br>
<p>When you're talking to someone behind NAT (or any type of firewall), how do you know to whom you're actually talking?  There are ways, of course, but it's quite complicated if connection initiation can effectively only flow in one direction.
<br>
<p>Can you just use IPv6?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7819.php">Sylvain Jeaugey: "[OMPI devel] RDMA with ob1 and openib"</a>
<li><strong>Previous message:</strong> <a href="7817.php">Leo P.: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>In reply to:</strong> <a href="7817.php">Leo P.: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7829.php">Leo P.: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>Reply:</strong> <a href="7829.php">Leo P.: "Re: [OMPI devel] How is a MPI process launched ?"</a>
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
