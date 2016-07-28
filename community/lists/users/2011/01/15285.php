<?
$subject_val = "Re: [OMPI users] can't use &quot;--mca btl_openib_cpc_include xoob&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  6 15:28:32 2011" -->
<!-- isoreceived="20110106202832" -->
<!-- sent="Thu, 6 Jan 2011 15:28:27 -0500" -->
<!-- isosent="20110106202827" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] can't use &amp;quot;--mca btl_openib_cpc_include xoob&amp;quot;" -->
<!-- id="AEC0CFAF-FE17-429E-8475-4E73E6CC8632_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="167ce1e.a9fc.12d40458d10.Coremail.ksz_at_sccas.cn" -->
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
<strong>Subject:</strong> Re: [OMPI users] can't use &quot;--mca btl_openib_cpc_include xoob&quot;<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-06 15:28:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15286.php">Rob Latham: "Re: [OMPI users] questions about MPI-IO"</a>
<li><strong>Previous message:</strong> <a href="15284.php">Jeff Squyres: "Re: [OMPI users] IRC channel"</a>
<li><strong>In reply to:</strong> <a href="15247.php">&#227;&#219;&#202;&#165;&#213;&#220;: "[OMPI users] can't use &quot;--mca btl_openib_cpc_include xoob&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15358.php">Shamis, Pavel: "Re: [OMPI users] can't use &quot;--mca btl_openib_cpc_include xoob&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 1, 2011, at 1:30 AM, &#233;&#152;&#154;&#229;&#156;&#163;&#229;&#147;&#178; wrote:
<br>
<p><span class="quotelev1">&gt; I want to know: 
</span><br>
<span class="quotelev1">&gt; 1) When I want to use XRC, I must have a special IB switch?
</span><br>
<span class="quotelev1">&gt; 2) How can I use XRC in ompi,and on which situation the XRC feature will bring benifit?
</span><br>
<span class="quotelev1">&gt; 3) If this is only way to using XRC that using &quot;-mca btl_openib_cpc_include xoob&quot;?
</span><br>
<span class="quotelev1">&gt; 4) When using xoob, which transport and network protocol ompi will use?
</span><br>
<p>Mellanox will have to answer the above questions -- Vasily?
<br>
<p><span class="quotelev1">&gt; 5) When using Qlogic adapter, how to optimize opmi?
</span><br>
<p>You probably want to use the PSM MTL; it uses the QLogic-specific API.  See OMPI's README file for details.
<br>
<p><span class="quotelev1">&gt; 6) What's mean of &quot;CPC&quot; in ompi?
</span><br>
<p>Connect Psuedo Component.  :-)
<br>
<p>It's one of those things that's probably best left as an acronym.  ;-)  (meaning: I can explain what it means if you care, but it's mainly boring internal Open MPI code stuff)
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
<li><strong>Next message:</strong> <a href="15286.php">Rob Latham: "Re: [OMPI users] questions about MPI-IO"</a>
<li><strong>Previous message:</strong> <a href="15284.php">Jeff Squyres: "Re: [OMPI users] IRC channel"</a>
<li><strong>In reply to:</strong> <a href="15247.php">&#227;&#219;&#202;&#165;&#213;&#220;: "[OMPI users] can't use &quot;--mca btl_openib_cpc_include xoob&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15358.php">Shamis, Pavel: "Re: [OMPI users] can't use &quot;--mca btl_openib_cpc_include xoob&quot;"</a>
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
