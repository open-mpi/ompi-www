<?
$subject_val = "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 10:25:18 2015" -->
<!-- isoreceived="20151021142518" -->
<!-- sent="Wed, 21 Oct 2015 14:24:54 +0000" -->
<!-- isosent="20151021142454" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)" -->
<!-- id="EF718C3E-DA61-4022-8C8C-127540500BF4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA16NknU3Ej4xVF+di9qfGrp=F=UkVotH+7sucEh_A7-+mA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-21 10:24:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18232.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>Previous message:</strong> <a href="18230.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was:	topic	for	agenda)"</a>
<li><strong>In reply to:</strong> <a href="18219.php">Paul Hargrove: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18210.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 20, 2015, at 6:37 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am suggesting that a user wishes to NOT USE a specific port at all.
</span><br>
<span class="quotelev1">&gt; In other words, I want to &quot;obstruct&quot; all of the API paths that might reach that port.
</span><br>
<span class="quotelev1">&gt; However, they do want to use some other port of the same type - which means they cannot disable entire BTLs or MTLs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unless I am missing something, they need to consider each possible API path through OMPI and pass a corresponding MCA param, such as btl_openib_if_exclude, to prevent that path from selecting the port in question.
</span><br>
<p>Yeah, this is currently correct.
<br>
<p><span class="quotelev1">&gt; The problem is that the user may not know all the API paths that need to have a corresponding exclude.
</span><br>
<p>Agreed -- now I see your connection to the &quot;how do I disable MXM?&quot; question.
<br>
<p><span class="quotelev1">&gt; This is, in some ways, similar to the initial problem of how to disable all uses of mxm - it currently requires knowledge of all API paths that &quot;might get you there&quot;.
</span><br>
<p>Gotcha.
<br>
<p><span class="quotelev1">&gt; I am now seeing my concern turn in another direction, because a quick grep for &quot;_exclude&quot; in the OMPI 1.10.1 source turned up matches in only the openbl and usnic BLTs, and in oob_tcp.
</span><br>
<span class="quotelev1">&gt; Is it really the case that an end user cannot instruct mxm, psm, psm2, portals4 or ofi not to use a specific IB port via mpirun?
</span><br>
<p>Strike &quot;IB&quot; from your question -- yes, I guess we don't have uniform include/exclude support across all the BTLs and MTLs.  I agree: that does seem a bit problematic.
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
<li><strong>Next message:</strong> <a href="18232.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>Previous message:</strong> <a href="18230.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was:	topic	for	agenda)"</a>
<li><strong>In reply to:</strong> <a href="18219.php">Paul Hargrove: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18210.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
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
