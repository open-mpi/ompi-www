<?
$subject_val = "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 14 14:09:55 2010" -->
<!-- isoreceived="20100714180955" -->
<!-- sent="Wed, 14 Jul 2010 14:10:19 -0400" -->
<!-- isosent="20100714181019" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events" -->
<!-- id="647EEABF-0234-4BDA-86DC-49277BD002F6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1279000736.15370.918.camel_at_B014522" -->
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
<strong>Date:</strong> 2010-07-14 14:10:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8180.php">Jeff Squyres: "[OMPI devel] configure patch (was: v1.5: thumbs up or down? - Thumbs Down)"</a>
<li><strong>Previous message:</strong> <a href="8178.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23385"</a>
<li><strong>In reply to:</strong> <a href="8175.php">nadia.derbey: "[OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8181.php">nadia.derbey: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>Reply:</strong> <a href="8181.php">nadia.derbey: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you get additional warnings when compiling with the intel compiler (about printf'ing an enum type)?  I seem to recall that there's already a truckload of those kinds of warnings...
<br>
<p><p>On Jul 13, 2010, at 1:58 AM, nadia.derbey wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When the asynchronous events device handler(btl_openib_async_deviceh())
</span><br>
<span class="quotelev1">&gt; gets an async event and XRC is enabled, the XRC bit is cleared to
</span><br>
<span class="quotelev1">&gt; process the event_type value, but orte_show_help is called with the
</span><br>
<span class="quotelev1">&gt; event_type original value (i.e. XRC bit still present). This leads to
</span><br>
<span class="quotelev1">&gt; the following kind of message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   ----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;   The OpenFabrics stack has reported a network error event. Open MPI
</span><br>
<span class="quotelev1">&gt;   will try to continue. but your job may end up failing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Local host:       XXXX
</span><br>
<span class="quotelev1">&gt;    MPI process PID:  31818
</span><br>
<span class="quotelev1">&gt;    Error number:     -2147483645 (UNKNOWN)
</span><br>
<span class="quotelev1">&gt;   This error may indicate connectivity problems within the fabric;
</span><br>
<span class="quotelev1">&gt;   please contact your system administrator
</span><br>
<span class="quotelev1">&gt;   -----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While the expected error number is
</span><br>
<span class="quotelev1">&gt;   Error number:      3 (IBV_EVENT_QP_ACCESS_ERR)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I propose the attached small patch to fix this issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nadia
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; nadia.derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;001_async_event_type.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="8180.php">Jeff Squyres: "[OMPI devel] configure patch (was: v1.5: thumbs up or down? - Thumbs Down)"</a>
<li><strong>Previous message:</strong> <a href="8178.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23385"</a>
<li><strong>In reply to:</strong> <a href="8175.php">nadia.derbey: "[OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8181.php">nadia.derbey: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>Reply:</strong> <a href="8181.php">nadia.derbey: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
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
