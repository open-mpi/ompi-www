<?
$subject_val = "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 15 07:21:18 2010" -->
<!-- isoreceived="20100715112118" -->
<!-- sent="Thu, 15 Jul 2010 07:21:44 -0400" -->
<!-- isosent="20100715112144" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events" -->
<!-- id="1F31AA82-B47A-4FA9-AAE6-EDA361806F25_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1279174447.15370.973.camel_at_B014522" -->
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
<strong>Date:</strong> 2010-07-15 07:21:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8183.php">N.M. Maclaren: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to	show_help when getting xrc async events"</a>
<li><strong>Previous message:</strong> <a href="8181.php">nadia.derbey: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>In reply to:</strong> <a href="8181.php">nadia.derbey: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8183.php">N.M. Maclaren: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to	show_help when getting xrc async events"</a>
<li><strong>Reply:</strong> <a href="8183.php">N.M. Maclaren: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to	show_help when getting xrc async events"</a>
<li><strong>Reply:</strong> <a href="8184.php">nadia.derbey: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 15, 2010, at 2:14 AM, nadia.derbey wrote:
<br>
<p><span class="quotelev1">&gt; The only warning I'm getting in the part of the code impacted by the
</span><br>
<span class="quotelev1">&gt; patch is:
</span><br>
<span class="quotelev1">&gt; ---------------------
</span><br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/btl/openib/btl_openib_async.c(322): warning
</span><br>
<span class="quotelev1">&gt; #188: enumerated type mixed with another type
</span><br>
<span class="quotelev1">&gt;               event_type ^= IBV_XRC_QP_EVENT_FLAG;
</span><br>
<span class="quotelev1">&gt; ---------------------
</span><br>
<p>Ya, that's the one.
<br>
<p>Is there any way to get rid of that @!#@#$ warning?  I'm not sure what it's complaining about -- event_type and IBV_XRC_QP_EVENT_FLAG are the same type, no?
<br>
<p>Specifically: I think your patch is good.  But it would be good to not introduce yet another / fix all these intel compiler warnings about mixing ints and enums.
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
<li><strong>Next message:</strong> <a href="8183.php">N.M. Maclaren: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to	show_help when getting xrc async events"</a>
<li><strong>Previous message:</strong> <a href="8181.php">nadia.derbey: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>In reply to:</strong> <a href="8181.php">nadia.derbey: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8183.php">N.M. Maclaren: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to	show_help when getting xrc async events"</a>
<li><strong>Reply:</strong> <a href="8183.php">N.M. Maclaren: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to	show_help when getting xrc async events"</a>
<li><strong>Reply:</strong> <a href="8184.php">nadia.derbey: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
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
