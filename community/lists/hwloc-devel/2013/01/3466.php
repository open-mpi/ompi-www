<?
$subject_val = "Re: [hwloc-devel] v1.7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  7 13:24:19 2013" -->
<!-- isoreceived="20130107182419" -->
<!-- sent="Mon, 7 Jan 2013 18:24:14 +0000" -->
<!-- isosent="20130107182414" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] v1.7" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC3808B334_at_xmb-aln-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="50EB0F70.8060209_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-07 13:24:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3467.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<li><strong>Previous message:</strong> <a href="3465.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<li><strong>In reply to:</strong> <a href="3464.php">Brice Goglin: "Re: [hwloc-devel] v1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3471.php">Brice Goglin: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="3471.php">Brice Goglin: "Re: [hwloc-devel] v1.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 7, 2013, at 1:09 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; Your argument works for selecting among I/O components like
</span><br>
<span class="quotelev1">&gt; cuda/nvml/opencl that are all independent (like several components in
</span><br>
<span class="quotelev1">&gt; the same framework in OMPI). But it doesn't work when the order matters
</span><br>
<span class="quotelev1">&gt; between components that discover the same things. Like &quot;I want x86 first
</span><br>
<span class="quotelev1">&gt; because it works better than the solaris component on my machine, and
</span><br>
<span class="quotelev1">&gt; then the other usual components for to discover everything else&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Remember that HWLOC_COMPONENTS=&quot;foo&quot; means &quot;foo first and then all the
</span><br>
<span class="quotelev1">&gt; usual ones that do not conflict&quot;. It's not &quot;only foo&quot;, which should be
</span><br>
<span class="quotelev1">&gt; written as &quot;foo,stop&quot; (should be rare since the core excludes all
</span><br>
<span class="quotelev1">&gt; conflicting components automatically).
</span><br>
<p>Gotcha.  I missed those two subtleties:
<br>
<p>1. order matters
<br>
2. there's an implicit &quot;...and all the rest&quot; at the end of the specification
<br>
<p>BTW, don't get me wrong -- I'm not against a different meaning than OMPI's.  I was just trying to explain what OMPI uses an why.
<br>
<p>But that being said, having a &quot;...and all the rest&quot; implicitly implied at the end of the COMPONENTS specification is a little surprising (to me, IMHO).  Perhaps you could have a special token that means &quot;...and all the rest&quot;?  Perhaps:
<br>
<p>COMPONENTS=foo,bar,*
<br>
<p>Which means &quot;try foo first, then try bar, and then try all the rest in whatever order you want&quot;.  Because then a user could specify:
<br>
<p>COMPONENTS=foo,bar
<br>
<p>if they *didn't* want all the others to be used.
<br>
<p>Just a thought.
<br>
<p><span class="quotelev1">&gt; BTW, if we change the hwloc syntax, we may want to not use ^ to avoid
</span><br>
<span class="quotelev1">&gt; confusion with OMPI. ~ and ! could work but some shells may not like them?
</span><br>
<p><p>Hah.  Our mails crossed in the ether.  :-)
<br>
<p>Short version: I agree.  ~ and ! have the drawback of requiring escaping, which is kind of a pain (and everyone will get it wrong).
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
<li><strong>Next message:</strong> <a href="3467.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<li><strong>Previous message:</strong> <a href="3465.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] v1.7"</a>
<li><strong>In reply to:</strong> <a href="3464.php">Brice Goglin: "Re: [hwloc-devel] v1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3471.php">Brice Goglin: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="3471.php">Brice Goglin: "Re: [hwloc-devel] v1.7"</a>
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
