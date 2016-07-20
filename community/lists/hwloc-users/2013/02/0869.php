<?
$subject_val = "Re: [hwloc-users] OpenGL GPU detection code";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 14 14:44:39 2013" -->
<!-- isoreceived="20130214194439" -->
<!-- sent="Thu, 14 Feb 2013 20:44:26 +0100" -->
<!-- isosent="20130214194426" -->
<!-- name="Stefan Eilemann" -->
<!-- email="eilemann_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] OpenGL GPU detection code" -->
<!-- id="C16B7E38-4705-4570-A332-960EA1558269_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="511D2095.7060602_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] OpenGL GPU detection code<br>
<strong>From:</strong> Stefan Eilemann (<em>eilemann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-14 14:44:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0870.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Previous message:</strong> <a href="0868.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>In reply to:</strong> <a href="0868.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0870.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Reply:</strong> <a href="0870.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 14.02.2013, at 18:36, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Le 14/02/2013 14:00, Stefan Eilemann a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On 12. Feb 2013, at 23:37, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Stefan (or anybody else interested in hwloc GPU support),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did you have any chance to look at this?
</span><br>
<span class="quotelev2">&gt;&gt; I can confirm that it works for us now. I did implement an important performance optimization, please look at the usual bug for the patch: <a href="https://github.com/BlueBrain/hwloc/issues/1">https://github.com/BlueBrain/hwloc/issues/1</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you explain a bit more what you did? I understand that you use
</span><br>
<span class="quotelev1">&gt; ScreenCount() to avoid useless tests.
</span><br>
<p>I use the same display connection for all screens, doing 10 XOpenDisplay instead of a 100. 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But you're only testing the NV-CONTROL extension on :X, not on each
</span><br>
<span class="quotelev1">&gt; :X.Y. Is it guaranteed that :0.0, :0.1 ... support the same list of
</span><br>
<span class="quotelev1">&gt; extensions?
</span><br>
<p>Yes, the extensions are per server, not per screen. 
<br>
<p><span class="quotelev1">&gt; Isn't it possible to have a single X server with a NVIDIA
</span><br>
<span class="quotelev1">&gt; board driving :0.0 and a non-NVIDIA board driving :0.1 ?
</span><br>
<p>Good question. I haven't seen this, so I've got no clue if one would get the union or intersection of extensions. Maybe it's not even possible?
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; By the way, please try to not reindent the code next time, it makes the
</span><br>
<span class="quotelev1">&gt; patch much harder to read :/ (your editor may be doing it in your back)
</span><br>
<p>I didn't. I just untabified the code to make the indentations line up. 
<br>
<p><p>Cheers,
<br>
<p>Stefan. 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0870.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Previous message:</strong> <a href="0868.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>In reply to:</strong> <a href="0868.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0870.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Reply:</strong> <a href="0870.php">Brice Goglin: "Re: [hwloc-users] OpenGL GPU detection code"</a>
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
