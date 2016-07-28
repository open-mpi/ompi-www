<?
$subject_val = "Re: [OMPI devel] bug in mca framework?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  4 08:56:18 2013" -->
<!-- isoreceived="20131204135618" -->
<!-- sent="Wed, 4 Dec 2013 13:56:17 +0000" -->
<!-- isosent="20131204135617" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug in mca framework?" -->
<!-- id="B6BBA140-ED75-4173-8D1E-E2413B620C82_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="529EDF3F.1050006_at_itseez.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] bug in mca framework?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-04 08:56:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13363.php">Ralph Castain: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>Previous message:</strong> <a href="13361.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>In reply to:</strong> <a href="13353.php">Igor Ivanov: "Re: [OMPI devel] bug in mca framework?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13366.php">Igor Ivanov: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>Reply:</strong> <a href="13366.php">Igor Ivanov: "Re: [OMPI devel] bug in mca framework?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 4, 2013, at 2:52 AM, Igor Ivanov &lt;Igor.Ivanov_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It is the first mca variable with type as string from btl/openib as 'device_param_files'. Actually you can disable it and get failure on the second.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Description of case we see:
</span><br>
<span class="quotelev1">&gt; 1. openib mca variables are registered during startup as stage at select component phase;
</span><br>
<span class="quotelev1">&gt; 2. but a winner is cm component and openib mca variables are deregistered as part of mca group;
</span><br>
<span class="quotelev1">&gt; 3. mca variables are not removed from global mca array but they marked as invalid and memory for string is freed;
</span><br>
<span class="quotelev1">&gt; 4. shmem needs openib for yoda and does bml initialization;
</span><br>
<span class="quotelev1">&gt; 5. openib mca variables are registered againusing light mode as searching itself in global array and refreshing their fields again;
</span><br>
<p>Can you explain what you mean by step 5?  I.e., what does &quot;using light mode&quot; mean?  Is the openib component register function invoked again?
<br>
<p><span class="quotelev1">&gt; 6. for unknown reason bml finalization does not clean these vars as it is done in step 2;
</span><br>
<span class="quotelev1">&gt; 7. mca_btl_openib.so is unloaded;
</span><br>
<span class="quotelev1">&gt; 8. opal_finalize() destroys mca variables form global array, observes openib`s variable, try destroy using non accessed address;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So a code that is under discussion fixes step 6.
</span><br>
<p>Nathan: it sounds like an MCA var (and entire group) is registered, unregistered, and then registered again. Does the MCA var system get confused here when it tries to unregister the group a 2nd time?
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
<li><strong>Next message:</strong> <a href="13363.php">Ralph Castain: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>Previous message:</strong> <a href="13361.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>In reply to:</strong> <a href="13353.php">Igor Ivanov: "Re: [OMPI devel] bug in mca framework?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13366.php">Igor Ivanov: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>Reply:</strong> <a href="13366.php">Igor Ivanov: "Re: [OMPI devel] bug in mca framework?"</a>
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
