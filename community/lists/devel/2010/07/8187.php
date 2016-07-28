<?
$subject_val = "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 15 10:48:06 2010" -->
<!-- isoreceived="20100715144806" -->
<!-- sent="Thu, 15 Jul 2010 16:53:10 +0200" -->
<!-- isosent="20100715145310" -->
<!-- name="nadia.derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events" -->
<!-- id="1279205590.15370.1109.camel_at_B014522" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="40BB4E35-713F-405B-A3F2-D5FFE7D939EA_at_cisco.com" -->
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
<strong>From:</strong> nadia.derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-15 10:53:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8188.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>Previous message:</strong> <a href="8186.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>In reply to:</strong> <a href="8185.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8188.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>Reply:</strong> <a href="8188.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2010-07-15 at 08:21 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jul 15, 2010, at 8:22 AM, nadia.derbey wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; So the solution is:
</span><br>
<span class="quotelev2">&gt; &gt; 1. leave the intermediate event_type declared as an int.
</span><br>
<span class="quotelev2">&gt; &gt; 2. then:
</span><br>
<span class="quotelev2">&gt; &gt;      . either cast it to ibv_event_type when calling
</span><br>
<span class="quotelev2">&gt; &gt; openib_event_to_str()
</span><br>
<span class="quotelev2">&gt; &gt;      . or declare openib_event_to_str as accepting an int instead of an
</span><br>
<span class="quotelev2">&gt; &gt; ibv_event_type.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Shouldn't we be keeping everything the same / native type as much as possible?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Agreed, but the native type is already broken: we are getting from
<br>
ibv_get_async_event() an event-&gt;event_type which is a mix of
<br>
ibv_event_type and ibv_event_flags enums though it is declared as an
<br>
ibv_event_type... That's where these warnings come from.
<br>
<p>Regards,
<br>
Nadia
<br>
<p><p><pre>
-- 
nadia.derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8188.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>Previous message:</strong> <a href="8186.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>In reply to:</strong> <a href="8185.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8188.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>Reply:</strong> <a href="8188.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
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
