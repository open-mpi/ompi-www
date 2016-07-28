<?
$subject_val = "Re: [OMPI devel] PATCH: Wrong event_type value passed in to	show_help when getting xrc async events";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 15 07:44:29 2010" -->
<!-- isoreceived="20100715114429" -->
<!-- sent="15 Jul 2010 12:44:25 +0100" -->
<!-- isosent="20100715114425" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PATCH: Wrong event_type value passed in to	show_help when getting xrc async events" -->
<!-- id="Prayer.1.3.3.1007151244250.27502_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1F31AA82-B47A-4FA9-AAE6-EDA361806F25_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PATCH: Wrong event_type value passed in to	show_help when getting xrc async events<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-15 07:44:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8184.php">nadia.derbey: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>Previous message:</strong> <a href="8182.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>In reply to:</strong> <a href="8182.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8184.php">nadia.derbey: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 15 2010, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt;On Jul 15, 2010, at 2:14 AM, nadia.derbey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The only warning I'm getting in the part of the code impacted by the
</span><br>
<span class="quotelev2">&gt;&gt; patch is:
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/mca/btl/openib/btl_openib_async.c(322): warning
</span><br>
<span class="quotelev2">&gt;&gt; #188: enumerated type mixed with another type
</span><br>
<span class="quotelev2">&gt;&gt;               event_type ^= IBV_XRC_QP_EVENT_FLAG;
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ya, that's the one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any way to get rid of that @!#@#$ warning? I'm not sure what 
</span><br>
<span class="quotelev1">&gt; it's complaining about -- event_type and IBV_XRC_QP_EVENT_FLAG are the 
</span><br>
<span class="quotelev1">&gt; same type, no?
</span><br>
<p>Are you sure?  I don't know where that is specified, but my guess is that
<br>
it's type isn't clearly specified and the header happens to use an enum.
<br>
Anyway, if that is so, there is a simple fix (not tested):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;event_type ^= (int)IBV_XRC_QP_EVENT_FLAG;
<br>
<p>Most of the casts in my own code are to shut compilers up - not that I
<br>
think their warnings are bad, so much as the language and interfaces
<br>
specifications require their users to ignore best practice.
<br>
<p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8184.php">nadia.derbey: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>Previous message:</strong> <a href="8182.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>In reply to:</strong> <a href="8182.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8184.php">nadia.derbey: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
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
