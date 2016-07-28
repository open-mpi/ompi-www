<?
$subject_val = "Re: [hwloc-devel] Attribute unsed not regognized";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 26 16:18:34 2010" -->
<!-- isoreceived="20100326201834" -->
<!-- sent="Fri, 26 Mar 2010 21:18:29 +0100" -->
<!-- isosent="20100326201829" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Attribute unsed not regognized" -->
<!-- id="20100326201829.GE16736_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="36ca99e91003261139i67baaf9enc778eec9b751636b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Attribute unsed not regognized<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-26 16:18:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0825.php">Jeff Squyres: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Previous message:</strong> <a href="0823.php">Samuel Thibault: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>In reply to:</strong> <a href="0821.php">Bert Wesarg: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0806.php">Samuel Thibault: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bert Wesarg, le Fri 26 Mar 2010 19:39:51 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; On Fri, Mar 26, 2010 at 17:01, Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for the idea.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Bert Wesarg, le Fri 26 Mar 2010 12:33:00 +0100, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +#define HWLOC_HAVE(what) (defined(HWLOC_HAVE_##what) &amp;&amp; HWLOC_HAVE_##what)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Unfortunately some compilers (such as gcc 2.95) do not accept this
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What topology information do you get on machines that have this old
</span><br>
<span class="quotelev1">&gt; compiler installed?
</span><br>
<p>It's not only a question of *that* compiler, but that this kind of
<br>
tinkering with macros is quite borderline. I actually do wonder whether
<br>
it is C99 compliant. gcc happens to be able to parse it since at least
<br>
3.0, but since 2.95 doesn't, I guess there are some other compilers that
<br>
won't be able to either.
<br>
<p><span class="quotelev1">&gt; For example sysfs attributes are very unlikely.
</span><br>
<span class="quotelev1">&gt; the linux kernel should require at least gcc 3. But I haven't checked
</span><br>
<span class="quotelev1">&gt; since when.
</span><br>
<p>hwloc is not only about Linux ;)
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0825.php">Jeff Squyres: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Previous message:</strong> <a href="0823.php">Samuel Thibault: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>In reply to:</strong> <a href="0821.php">Bert Wesarg: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0806.php">Samuel Thibault: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
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
