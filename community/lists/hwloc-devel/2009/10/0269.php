<?
$subject_val = "Re: [hwloc-devel] Priority of env vars vs. application options";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 28 09:26:10 2009" -->
<!-- isoreceived="20091028132610" -->
<!-- sent="Wed, 28 Oct 2009 09:26:03 -0400" -->
<!-- isosent="20091028132603" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Priority of env vars vs. application options" -->
<!-- id="66A07013-2331-4CB2-8287-CBCA0212F005_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20091028132127.GM5226_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Priority of env vars vs. application options<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-28 09:26:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0270.php">Samuel Thibault: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>Previous message:</strong> <a href="0268.php">Samuel Thibault: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>In reply to:</strong> <a href="0268.php">Samuel Thibault: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0270.php">Samuel Thibault: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>Reply:</strong> <a href="0270.php">Samuel Thibault: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 28, 2009, at 9:21 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt; &gt; - command line
</span><br>
<span class="quotelev2">&gt; &gt; - env variable
</span><br>
<span class="quotelev2">&gt; &gt; - compiled-in defaults
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If you're in an environment where you can't pass command line  
</span><br>
<span class="quotelev1">&gt; options,
</span><br>
<span class="quotelev2">&gt; &gt; then use the environment (either explicitly set or unset it).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But what about the situation that Brice suggested, i.e. the  
</span><br>
<span class="quotelev1">&gt; application
</span><br>
<span class="quotelev1">&gt; itself using xml files internally?  Where in the list should that be?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Can you pass XML filenames via the API?
<br>
<p>I would think that the API *only* looks at the names passed as  
<br>
parameters -- command line, env variable, etc. are upper-layer  
<br>
abstractions added by top-level tools like lstopo, etc.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0270.php">Samuel Thibault: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>Previous message:</strong> <a href="0268.php">Samuel Thibault: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>In reply to:</strong> <a href="0268.php">Samuel Thibault: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0270.php">Samuel Thibault: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
<li><strong>Reply:</strong> <a href="0270.php">Samuel Thibault: "Re: [hwloc-devel] Priority of env vars vs. application options"</a>
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
