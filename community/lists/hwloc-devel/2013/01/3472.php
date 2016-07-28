<?
$subject_val = "Re: [hwloc-devel] v1.7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  7 13:50:39 2013" -->
<!-- isoreceived="20130107185039" -->
<!-- sent="Mon, 07 Jan 2013 19:50:34 +0100" -->
<!-- isosent="20130107185034" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] v1.7" -->
<!-- id="50EB18FA.7090306_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50EB171B.3040308_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] v1.7<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-07 13:50:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3473.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<li><strong>Previous message:</strong> <a href="3471.php">Brice Goglin: "Re: [hwloc-devel] v1.7"</a>
<li><strong>In reply to:</strong> <a href="3471.php">Brice Goglin: "Re: [hwloc-devel] v1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3473.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 07/01/2013 19:42, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 07/01/2013 19:24, Jeff Squyres (jsquyres) a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 7, 2013, at 1:09 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your argument works for selecting among I/O components like
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cuda/nvml/opencl that are all independent (like several components in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the same framework in OMPI). But it doesn't work when the order matters
</span><br>
<span class="quotelev3">&gt;&gt;&gt; between components that discover the same things. Like &quot;I want x86 first
</span><br>
<span class="quotelev3">&gt;&gt;&gt; because it works better than the solaris component on my machine, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then the other usual components for to discover everything else&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Remember that HWLOC_COMPONENTS=&quot;foo&quot; means &quot;foo first and then all the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usual ones that do not conflict&quot;. It's not &quot;only foo&quot;, which should be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; written as &quot;foo,stop&quot; (should be rare since the core excludes all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conflicting components automatically).
</span><br>
<span class="quotelev2">&gt;&gt; Gotcha.  I missed those two subtleties:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. order matters
</span><br>
<span class="quotelev2">&gt;&gt; 2. there's an implicit &quot;...and all the rest&quot; at the end of the specification
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BTW, don't get me wrong -- I'm not against a different meaning than OMPI's.  I was just trying to explain what OMPI uses an why.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But that being said, having a &quot;...and all the rest&quot; implicitly implied at the end of the COMPONENTS specification is a little surprising (to me, IMHO).  Perhaps you could have a special token that means &quot;...and all the rest&quot;?  Perhaps:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; COMPONENTS=foo,bar,*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; My first code did that (with &quot;all&quot; instead of &quot;*&quot; because come shells
</span><br>
<span class="quotelev1">&gt; don't like * :)
</span><br>
<span class="quotelev1">&gt; But my testing told me that there were many more cases where we want
</span><br>
<span class="quotelev1">&gt; everything (&quot;all&quot;) than nothing else (&quot;stop&quot;), so changed to &quot;nothing else&quot;.
</span><br>
<span class="quotelev1">&gt; But users are not going to play with the list of components very often
</span><br>
<span class="quotelev1">&gt; anyway, so I think that'd be ok too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Unfortunately, this syntax is already released in v1.6. Do we want to
<br>
break this in v1.7 ? Or in 1.6.1 ?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3473.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<li><strong>Previous message:</strong> <a href="3471.php">Brice Goglin: "Re: [hwloc-devel] v1.7"</a>
<li><strong>In reply to:</strong> <a href="3471.php">Brice Goglin: "Re: [hwloc-devel] v1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3473.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
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
