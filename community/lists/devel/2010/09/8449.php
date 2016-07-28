<?
$subject_val = "Re: [OMPI devel] openib btl - fatal errors don't abort the job";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  3 08:14:43 2010" -->
<!-- isoreceived="20100903121443" -->
<!-- sent="Fri, 3 Sep 2010 08:14:38 -0400" -->
<!-- isosent="20100903121438" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl - fatal errors don't abort the job" -->
<!-- id="210353C8-9072-46E2-BBE9-2518906214AE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C7EBBE0.50400_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openib btl - fatal errors don't abort the job<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-03 08:14:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8450.php">Jeff Squyres: "Re: [OMPI devel] 1/4/3rc1 over MX"</a>
<li><strong>Previous message:</strong> <a href="8448.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.5 twitter notification plugin probably broken by switch to OAUTH"</a>
<li><strong>In reply to:</strong> <a href="8442.php">Steve Wise: "[OMPI devel] openib btl - fatal errors don't abort the job"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8463.php">Shamis, Pavel: "Re: [OMPI devel] openib btl - fatal errors don't abort the job"</a>
<li><strong>Reply:</strong> <a href="8463.php">Shamis, Pavel: "Re: [OMPI devel] openib btl - fatal errors don't abort the job"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 1, 2010, at 4:47 PM, Steve Wise wrote:
<br>
<p><span class="quotelev1">&gt; I was wondering what the logic is behind allowing an MPI job to continue in the presence of a fatal qp error?
</span><br>
<p>It's a feature...?
<br>
<p><span class="quotelev1">&gt; Note the &quot;will try to continue&quot; sentence:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The OpenFabrics stack has reported a network error event.  Open MPI
</span><br>
<span class="quotelev1">&gt; will try to continue, but your job may end up failing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Local host:        escher
</span><br>
<span class="quotelev1">&gt;  MPI process PID:   19136
</span><br>
<span class="quotelev1">&gt;  Error number:      1 (IBV_EVENT_QP_FATAL)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This error may indicate connectivity problems within the fabric;
</span><br>
<span class="quotelev1">&gt; please contact your system administrator.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Due to other bugs I'm chasing, I get these sorts of errors, and I notice the job just hangs even though the connections have been disconnected, the qps flushed, and all pending WRs completed with status == FLUSH.
</span><br>
<p>Would it be better to make it a fatal error?  (I'm thinking probably &quot;yes&quot;)
<br>
<p>Feel free to submit a patch...
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
<li><strong>Next message:</strong> <a href="8450.php">Jeff Squyres: "Re: [OMPI devel] 1/4/3rc1 over MX"</a>
<li><strong>Previous message:</strong> <a href="8448.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.5 twitter notification plugin probably broken by switch to OAUTH"</a>
<li><strong>In reply to:</strong> <a href="8442.php">Steve Wise: "[OMPI devel] openib btl - fatal errors don't abort the job"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8463.php">Shamis, Pavel: "Re: [OMPI devel] openib btl - fatal errors don't abort the job"</a>
<li><strong>Reply:</strong> <a href="8463.php">Shamis, Pavel: "Re: [OMPI devel] openib btl - fatal errors don't abort the job"</a>
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
