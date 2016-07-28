<?
$subject_val = "Re: [OMPI devel] RFC: Well-known mca parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 28 18:12:34 2014" -->
<!-- isoreceived="20140428221234" -->
<!-- sent="Mon, 28 Apr 2014 22:12:32 +0000" -->
<!-- isosent="20140428221232" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Well-known mca parameters" -->
<!-- id="6E9615FB-81C1-4F39-B7CD-66F0F0FC5084_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="409660A2-F4B5-4D71-AF29-A2A28A6A5F73_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Well-known mca parameters<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-28 18:12:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14644.php">Mike Dubman: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>Previous message:</strong> <a href="14642.php">Ralph Castain: "Re: [OMPI devel] mosix patches"</a>
<li><strong>In reply to:</strong> <a href="14620.php">Ralph Castain: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14644.php">Mike Dubman: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>Reply:</strong> <a href="14644.php">Mike Dubman: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 27, 2014, at 9:22 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Changing/updating architecture to fulfill this specific use-case seems a overkill. The arch is powerfull to resolve it w/o adding specific class (IMHO).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nobody would be changing the architecture of the system. All I'm suggesting is adding a new variable type. Something like &quot;MCA_BASE_VAR_TYPE_VERSION	_STRING&quot; instead of &quot;MCA_BASE_VAR_TYPE_STRING&quot;. This eliminates the need to force a standard param string format, and may provide a cleaner mechanism.
</span><br>
<p>Ralph and I chatted about this on the phone today.  In principle, I'm not opposed to this.  Indeed, it seems to have the added benefit that the OPAL/ORTE/OMPI/OSHMEM version numbers themselves could also be registered with this type (thereby removing some special case code from ompi_info).
<br>
<p>That being said, I just didn't want us to exclude the simple possibility first: using an MCA parameter naming convention.  I didn't see a reply to my question about the primary use case for this being for scripts, and therefore a slightly-more-than-trivial regexp...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14644.php">Mike Dubman: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>Previous message:</strong> <a href="14642.php">Ralph Castain: "Re: [OMPI devel] mosix patches"</a>
<li><strong>In reply to:</strong> <a href="14620.php">Ralph Castain: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14644.php">Mike Dubman: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>Reply:</strong> <a href="14644.php">Mike Dubman: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
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
