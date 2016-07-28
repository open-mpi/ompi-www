<?
$subject_val = "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 23 10:51:30 2010" -->
<!-- isoreceived="20100623145130" -->
<!-- sent="Wed, 23 Jun 2010 10:51:23 -0400" -->
<!-- isosent="20100623145123" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs" -->
<!-- id="677CE4B1-DC3F-4F4A-BE78-C87694A14E50_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.DEB.2.00.1006231637460.19337_at_jeaugeys.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-23 10:51:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8120.php">Sylvain Jeaugey: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs"</a>
<li><strong>Previous message:</strong> <a href="8118.php">Sylvain Jeaugey: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs"</a>
<li><strong>In reply to:</strong> <a href="8118.php">Sylvain Jeaugey: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8120.php">Sylvain Jeaugey: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs"</a>
<li><strong>Reply:</strong> <a href="8120.php">Sylvain Jeaugey: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 23, 2010, at 10:46 AM, Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; Why do we want to set this value so low ? Well, just to see if it crashes :-)
</span><br>
<p>That's a good reason!  :-)
<br>
<p><span class="quotelev1">&gt; More seriously, we're working on lowering the memory usage of the openib BTL, which is achieved at most by having only 1 send queue element (at very large scale, send queues prevail).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This &quot;extreme&quot; configuration used to work with the 1.3/1.4 branches but failed on 1.5.
</span><br>
<p>Cool; thanks for checking!
<br>
<p><span class="quotelev1">&gt; Note that recent IB cards having very high issue rates, I don't know if we are often waiting for the send queue to be empty. More importantly, it often prevents remote receive queue to be filled to quickly (which prevents RNR nacks, threads refilling the SRQ, ...). We didn't notice major performance drops with this configuration.
</span><br>
<p>Interesting.
<br>
<p>BTW, are you guys waiting for us to commit that, or do we ever give you guys SVN commit access?
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
<li><strong>Next message:</strong> <a href="8120.php">Sylvain Jeaugey: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs"</a>
<li><strong>Previous message:</strong> <a href="8118.php">Sylvain Jeaugey: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs"</a>
<li><strong>In reply to:</strong> <a href="8118.php">Sylvain Jeaugey: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8120.php">Sylvain Jeaugey: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs"</a>
<li><strong>Reply:</strong> <a href="8120.php">Sylvain Jeaugey: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs"</a>
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
