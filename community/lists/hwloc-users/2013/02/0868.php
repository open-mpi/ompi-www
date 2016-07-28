<?
$subject_val = "Re: [hwloc-users] OpenGL GPU detection code";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 14 12:36:28 2013" -->
<!-- isoreceived="20130214173628" -->
<!-- sent="Thu, 14 Feb 2013 18:36:21 +0100" -->
<!-- isosent="20130214173621" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] OpenGL GPU detection code" -->
<!-- id="511D2095.7060602_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BCC33AEA-6A4B-4B01-8A10-DF3956479BA5_at_gmail.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-14 12:36:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0869.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Previous message:</strong> <a href="0867.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>In reply to:</strong> <a href="0867.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0869.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Reply:</strong> <a href="0869.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 14/02/2013 14:00, Stefan Eilemann a &#233;crit :
<br>
<span class="quotelev1">&gt; On 12. Feb 2013, at 23:37, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stefan (or anybody else interested in hwloc GPU support),
</span><br>
<span class="quotelev2">&gt;&gt; Did you have any chance to look at this?
</span><br>
<span class="quotelev1">&gt; I can confirm that it works for us now. I did implement an important performance optimization, please look at the usual bug for the patch: <a href="https://github.com/BlueBrain/hwloc/issues/1">https://github.com/BlueBrain/hwloc/issues/1</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Can you explain a bit more what you did? I understand that you use
<br>
ScreenCount() to avoid useless tests.
<br>
<p>But you're only testing the NV-CONTROL extension on :X, not on each
<br>
:X.Y. Is it guaranteed that :0.0, :0.1 ... support the same list of
<br>
extensions? Isn't it possible to have a single X server with a NVIDIA
<br>
board driving :0.0 and a non-NVIDIA board driving :0.1 ?
<br>
<p>By the way, please try to not reindent the code next time, it makes the
<br>
patch much harder to read :/ (your editor may be doing it in your back)
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0869.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Previous message:</strong> <a href="0867.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>In reply to:</strong> <a href="0867.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0869.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Reply:</strong> <a href="0869.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
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
