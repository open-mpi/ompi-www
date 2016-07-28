<?
$subject_val = "Re: [OMPI devel] bug in mca framework?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  9 08:17:37 2013" -->
<!-- isoreceived="20131209131737" -->
<!-- sent="Mon, 9 Dec 2013 15:17:36 +0200" -->
<!-- isosent="20131209131736" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug in mca framework?" -->
<!-- id="CAAO1KyZmgUkCfKRxm+53QGVDq6HfDXW=dkisY73VisGdqVswLw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="529F3FD2.10300_at_itseez.com" -->
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
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-09 08:17:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13401.php">Adrian Reber: "[OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Previous message:</strong> <a href="13399.php">Adrian Reber: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>In reply to:</strong> <a href="13366.php">Igor Ivanov: "Re: [OMPI devel] bug in mca framework?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13448.php">Nathan Hjelm: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>Reply:</strong> <a href="13448.php">Nathan Hjelm: "Re: [OMPI devel] bug in mca framework?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
Could you please comment on the Igor`s observations?
<br>
<p>Thanks
<br>
<p><p>On Wed, Dec 4, 2013 at 4:44 PM, Igor Ivanov &lt;igor.ivanov_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 04.12.2013 17:56, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 4, 2013, at 2:52 AM, Igor Ivanov &lt;Igor.Ivanov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  It is the first mca variable with type as string from btl/openib as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'device_param_files'. Actually you can disable it and get failure on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; second.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Description of case we see:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. openib mca variables are registered during startup as stage at select
</span><br>
<span class="quotelev3">&gt;&gt;&gt; component phase;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. but a winner is cm component and openib mca variables are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; deregistered as part of mca group;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. mca variables are not removed from global mca array but they marked
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as invalid and memory for string is freed;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4. shmem needs openib for yoda and does bml initialization;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5. openib mca variables are registered againusing light mode as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; searching itself in global array and refreshing their fields again;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you explain what you mean by step 5?  I.e., what does &quot;using light
</span><br>
<span class="quotelev2">&gt;&gt; mode&quot; mean?  Is the openib component register function invoked again?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; It is correct, it is called twice. &quot;light mode&quot; means that
</span><br>
<span class="quotelev1">&gt; mca_base_var_register() does not allocate mca variable object again, it
</span><br>
<span class="quotelev1">&gt; seeks this variable in global array and finding it updates fields in
</span><br>
<span class="quotelev1">&gt; mca_base_var_t structure (at least mbv_storage).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  6. for unknown reason bml finalization does not clean these vars as it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is done in step 2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 7. mca_btl_openib.so is unloaded;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8. opal_finalize() destroys mca variables form global array, observes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openib`s variable, try destroy using non accessed address;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So a code that is under discussion fixes step 6.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nathan: it sounds like an MCA var (and entire group) is registered,
</span><br>
<span class="quotelev2">&gt;&gt; unregistered, and then registered again. Does the MCA var system get
</span><br>
<span class="quotelev2">&gt;&gt; confused here when it tries to unregister the group a 2nd time?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Probably issue relates incorrect recognition if variable valid/invalid
</span><br>
<span class="quotelev1">&gt; during second call of mca_base_var_deregister().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13400/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13401.php">Adrian Reber: "[OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Previous message:</strong> <a href="13399.php">Adrian Reber: "Re: [OMPI devel] [PATCH 4/4] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>In reply to:</strong> <a href="13366.php">Igor Ivanov: "Re: [OMPI devel] bug in mca framework?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13448.php">Nathan Hjelm: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>Reply:</strong> <a href="13448.php">Nathan Hjelm: "Re: [OMPI devel] bug in mca framework?"</a>
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
