<?
$subject_val = "Re: [OMPI devel] bug in mca framework?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  4 09:44:38 2013" -->
<!-- isoreceived="20131204144438" -->
<!-- sent="Wed, 04 Dec 2013 18:44:34 +0400" -->
<!-- isosent="20131204144434" -->
<!-- name="Igor Ivanov" -->
<!-- email="igor.ivanov_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug in mca framework?" -->
<!-- id="529F3FD2.10300_at_itseez.com" -->
<!-- charset="windows-1251" -->
<!-- inreplyto="B6BBA140-ED75-4173-8D1E-E2413B620C82_at_cisco.com" -->
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
<strong>From:</strong> Igor Ivanov (<em>igor.ivanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-04 09:44:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13367.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>Previous message:</strong> <a href="13365.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h"</a>
<li><strong>In reply to:</strong> <a href="13362.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] bug in mca framework?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13400.php">Mike Dubman: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>Reply:</strong> <a href="13400.php">Mike Dubman: "Re: [OMPI devel] bug in mca framework?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 04.12.2013 17:56, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Dec 4, 2013, at 2:52 AM, Igor Ivanov &lt;Igor.Ivanov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It is the first mca variable with type as string from btl/openib as 'device_param_files'. Actually you can disable it and get failure on the second.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Description of case we see:
</span><br>
<span class="quotelev2">&gt;&gt; 1. openib mca variables are registered during startup as stage at select component phase;
</span><br>
<span class="quotelev2">&gt;&gt; 2. but a winner is cm component and openib mca variables are deregistered as part of mca group;
</span><br>
<span class="quotelev2">&gt;&gt; 3. mca variables are not removed from global mca array but they marked as invalid and memory for string is freed;
</span><br>
<span class="quotelev2">&gt;&gt; 4. shmem needs openib for yoda and does bml initialization;
</span><br>
<span class="quotelev2">&gt;&gt; 5. openib mca variables are registered againusing light mode as searching itself in global array and refreshing their fields again;
</span><br>
<span class="quotelev1">&gt; Can you explain what you mean by step 5?  I.e., what does &quot;using light mode&quot; mean?  Is the openib component register function invoked again?
</span><br>
It is correct, it is called twice. &quot;light mode&quot; means that 
<br>
mca_base_var_register() does not allocate mca variable object again, it 
<br>
seeks this variable in global array and finding it updates fields in 
<br>
mca_base_var_t structure (at least mbv_storage).
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 6. for unknown reason bml finalization does not clean these vars as it is done in step 2;
</span><br>
<span class="quotelev2">&gt;&gt; 7. mca_btl_openib.so is unloaded;
</span><br>
<span class="quotelev2">&gt;&gt; 8. opal_finalize() destroys mca variables form global array, observes openib`s variable, try destroy using non accessed address;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So a code that is under discussion fixes step 6.
</span><br>
<span class="quotelev1">&gt; Nathan: it sounds like an MCA var (and entire group) is registered, unregistered, and then registered again. Does the MCA var system get confused here when it tries to unregister the group a 2nd time?
</span><br>
Probably issue relates incorrect recognition if variable valid/invalid 
<br>
during second call of mca_base_var_deregister().
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13367.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>Previous message:</strong> <a href="13365.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h"</a>
<li><strong>In reply to:</strong> <a href="13362.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] bug in mca framework?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13400.php">Mike Dubman: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>Reply:</strong> <a href="13400.php">Mike Dubman: "Re: [OMPI devel] bug in mca framework?"</a>
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
