<?
$subject_val = "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 15 08:17:53 2010" -->
<!-- isoreceived="20100715121753" -->
<!-- sent="Thu, 15 Jul 2010 14:22:56 +0200" -->
<!-- isosent="20100715122256" -->
<!-- name="nadia.derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events" -->
<!-- id="1279196576.15370.996.camel_at_B014522" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events<br>
<strong>From:</strong> nadia.derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-15 08:22:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8185.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>Previous message:</strong> <a href="8183.php">N.M. Maclaren: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to	show_help when getting xrc async events"</a>
<li><strong>In reply to:</strong> <a href="8182.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8185.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>Reply:</strong> <a href="8185.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2010-07-15 at 07:21 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jul 15, 2010, at 2:14 AM, nadia.derbey wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The only warning I'm getting in the part of the code impacted by the
</span><br>
<span class="quotelev2">&gt; &gt; patch is:
</span><br>
<span class="quotelev2">&gt; &gt; ---------------------
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../ompi/mca/btl/openib/btl_openib_async.c(322): warning
</span><br>
<span class="quotelev2">&gt; &gt; #188: enumerated type mixed with another type
</span><br>
<span class="quotelev2">&gt; &gt;               event_type ^= IBV_XRC_QP_EVENT_FLAG;
</span><br>
<span class="quotelev2">&gt; &gt; ---------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ya, that's the one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any way to get rid of that @!#@#$ warning?  I'm not sure what it's complaining about -- event_type and IBV_XRC_QP_EVENT_FLAG are the same type, no?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>well, the problem is that event-&gt;event_type is declared as an enumerated
<br>
type (ibv_event_type).
<br>
In case of XRC it is OR'd with another enumerated type
<br>
(ibv_event_flags).
<br>
<p>So the solution is:
<br>
&nbsp;1. leave the intermediate event_type declared as an int.
<br>
&nbsp;2. then:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;. either cast it to ibv_event_type when calling
<br>
openib_event_to_str()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;. or declare openib_event_to_str as accepting an int instead of an
<br>
ibv_event_type.
<br>
<p>Both solutions attached
<br>
<p>Regards,
<br>
Nadia
<br>
<p><p><span class="quotelev1">&gt; Specifically: I think your patch is good.  But it would be good to not introduce yet another / fix all these intel compiler warnings about mixing ints and enums.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
nadia.derbey &lt;Nadia.Derbey_at_[hidden]&gt;


</pre>
<p>
<p><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8184/async_event_type_cast.patch">async_event_type_cast.patch</a>
</ul>
<!-- attachment="async_event_type_cast.patch" -->
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8184/async_event_type_wo_cast.patch">async_event_type_wo_cast.patch</a>
</ul>
<!-- attachment="async_event_type_wo_cast.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8185.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>Previous message:</strong> <a href="8183.php">N.M. Maclaren: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to	show_help when getting xrc async events"</a>
<li><strong>In reply to:</strong> <a href="8182.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8185.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>Reply:</strong> <a href="8185.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
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
