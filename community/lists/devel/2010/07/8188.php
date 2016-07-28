<?
$subject_val = "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 15 12:41:53 2010" -->
<!-- isoreceived="20100715164153" -->
<!-- sent="Thu, 15 Jul 2010 12:42:20 -0400" -->
<!-- isosent="20100715164220" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events" -->
<!-- id="DFFA90E5-04E1-4597-BFA3-F033EF4EE017_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1279205590.15370.1109.camel_at_B014522" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-15 12:42:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8189.php">Ralph Castain: "[OMPI devel] IB warnings"</a>
<li><strong>Previous message:</strong> <a href="8187.php">nadia.derbey: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>In reply to:</strong> <a href="8187.php">nadia.derbey: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 15, 2010, at 10:53 AM, nadia.derbey wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Shouldn't we be keeping everything the same / native type as much as possible?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Agreed, but the native type is already broken: we are getting from
</span><br>
<span class="quotelev1">&gt; ibv_get_async_event() an event-&gt;event_type which is a mix of
</span><br>
<span class="quotelev1">&gt; ibv_event_type and ibv_event_flags enums though it is declared as an
</span><br>
<span class="quotelev1">&gt; ibv_event_type... That's where these warnings come from.
</span><br>
<p>Ick!
<br>
<p>Ok -- how about a compromise?
<br>
<p>Your patch is kosher, and is clearly fixing a problem.  Commit it.  On the condition that you also fix up these warnings somehow.  :-)  It might be easiest to keep everything in one type of enum most of the time, and only cast when that other kind is necessary to mix in somehow...?
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
<li><strong>Next message:</strong> <a href="8189.php">Ralph Castain: "[OMPI devel] IB warnings"</a>
<li><strong>Previous message:</strong> <a href="8187.php">nadia.derbey: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>In reply to:</strong> <a href="8187.php">nadia.derbey: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<!-- nextthread="start" -->
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
