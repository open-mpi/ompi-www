<?
$subject_val = "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 15 02:09:08 2010" -->
<!-- isoreceived="20100715060908" -->
<!-- sent="Thu, 15 Jul 2010 08:14:07 +0200" -->
<!-- isosent="20100715061407" -->
<!-- name="nadia.derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events" -->
<!-- id="1279174447.15370.973.camel_at_B014522" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="647EEABF-0234-4BDA-86DC-49277BD002F6_at_cisco.com" -->
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
<strong>Date:</strong> 2010-07-15 02:14:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8182.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>Previous message:</strong> <a href="8180.php">Jeff Squyres: "[OMPI devel] configure patch (was: v1.5: thumbs up or down? - Thumbs Down)"</a>
<li><strong>In reply to:</strong> <a href="8179.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8182.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>Reply:</strong> <a href="8182.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The only warning I'm getting in the part of the code impacted by the
<br>
patch is:
<br>
---------------------
<br>
../../../../../ompi/mca/btl/openib/btl_openib_async.c(322): warning
<br>
#188: enumerated type mixed with another type
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;event_type ^= IBV_XRC_QP_EVENT_FLAG;
<br>
---------------------
<br>
<p>Regards,
<br>
<p>On Wed, 2010-07-14 at 14:10 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Do you get additional warnings when compiling with the intel compiler (about printf'ing an enum type)?  I seem to recall that there's already a truckload of those kinds of warnings...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 13, 2010, at 1:58 AM, nadia.derbey wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; When the asynchronous events device handler(btl_openib_async_deviceh())
</span><br>
<span class="quotelev2">&gt; &gt; gets an async event and XRC is enabled, the XRC bit is cleared to
</span><br>
<span class="quotelev2">&gt; &gt; process the event_type value, but orte_show_help is called with the
</span><br>
<span class="quotelev2">&gt; &gt; event_type original value (i.e. XRC bit still present). This leads to
</span><br>
<span class="quotelev2">&gt; &gt; the following kind of message:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   ----------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;   The OpenFabrics stack has reported a network error event. Open MPI
</span><br>
<span class="quotelev2">&gt; &gt;   will try to continue. but your job may end up failing.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    Local host:       XXXX
</span><br>
<span class="quotelev2">&gt; &gt;    MPI process PID:  31818
</span><br>
<span class="quotelev2">&gt; &gt;    Error number:     -2147483645 (UNKNOWN)
</span><br>
<span class="quotelev2">&gt; &gt;   This error may indicate connectivity problems within the fabric;
</span><br>
<span class="quotelev2">&gt; &gt;   please contact your system administrator
</span><br>
<span class="quotelev2">&gt; &gt;   -----------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; While the expected error number is
</span><br>
<span class="quotelev2">&gt; &gt;   Error number:      3 (IBV_EVENT_QP_ACCESS_ERR)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I propose the attached small patch to fix this issue.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Nadia
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; nadia.derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &lt;001_async_event_type.patch&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
nadia.derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8182.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>Previous message:</strong> <a href="8180.php">Jeff Squyres: "[OMPI devel] configure patch (was: v1.5: thumbs up or down? - Thumbs Down)"</a>
<li><strong>In reply to:</strong> <a href="8179.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8182.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>Reply:</strong> <a href="8182.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
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
