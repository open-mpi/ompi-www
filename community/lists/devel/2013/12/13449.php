<?
$subject_val = "Re: [OMPI devel] bug in mca framework?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 16 12:14:23 2013" -->
<!-- isoreceived="20131216171423" -->
<!-- sent="Mon, 16 Dec 2013 17:14:22 +0000" -->
<!-- isosent="20131216171422" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug in mca framework?" -->
<!-- id="6CE59A7B-A46F-4D4F-AD10-0F6640FBBDCD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20131216171149.GE37237_at_pn1246003.lanl.gov" -->
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
<strong>Date:</strong> 2013-12-16 12:14:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13450.php">Joshua Ladd: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>Previous message:</strong> <a href="13448.php">Nathan Hjelm: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>In reply to:</strong> <a href="13448.php">Nathan Hjelm: "Re: [OMPI devel] bug in mca framework?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13450.php">Joshua Ladd: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>Reply:</strong> <a href="13450.php">Joshua Ladd: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>Reply:</strong> <a href="13451.php">Nathan Hjelm: "Re: [OMPI devel] bug in mca framework?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It might be worthwhile to run this through valgrind and see if something is being freed incorrectly...?
<br>
<p><p>On Dec 16, 2013, at 12:11 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I took a look at the stacktraces last week and could not identify where the bug
</span><br>
<span class="quotelev1">&gt; is. I will dig deeper this week and see if I can come up with the correct fix.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Dec 09, 2013 at 03:17:36PM +0200, Mike Dubman wrote:
</span><br>
<span class="quotelev2">&gt;&gt;   Nathan,
</span><br>
<span class="quotelev2">&gt;&gt;   Could you please comment on the Igor`s observations?
</span><br>
<span class="quotelev2">&gt;&gt;   Thanks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   On Wed, Dec 4, 2013 at 4:44 PM, Igor Ivanov &lt;igor.ivanov_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     On 04.12.2013 17:56, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;       On Dec 4, 2013, at 2:52 AM, Igor Ivanov &lt;Igor.Ivanov_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         It is the first mca variable with type as string from btl/openib as
</span><br>
<span class="quotelev2">&gt;&gt;         'device_param_files'. Actually you can disable it and get failure on
</span><br>
<span class="quotelev2">&gt;&gt;         the second.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         Description of case we see:
</span><br>
<span class="quotelev2">&gt;&gt;         1. openib mca variables are registered during startup as stage at
</span><br>
<span class="quotelev2">&gt;&gt;         select component phase;
</span><br>
<span class="quotelev2">&gt;&gt;         2. but a winner is cm component and openib mca variables are
</span><br>
<span class="quotelev2">&gt;&gt;         deregistered as part of mca group;
</span><br>
<span class="quotelev2">&gt;&gt;         3. mca variables are not removed from global mca array but they
</span><br>
<span class="quotelev2">&gt;&gt;         marked as invalid and memory for string is freed;
</span><br>
<span class="quotelev2">&gt;&gt;         4. shmem needs openib for yoda and does bml initialization;
</span><br>
<span class="quotelev2">&gt;&gt;         5. openib mca variables are registered againusing light mode as
</span><br>
<span class="quotelev2">&gt;&gt;         searching itself in global array and refreshing their fields again;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;       Can you explain what you mean by step 5?  I.e., what does &quot;using light
</span><br>
<span class="quotelev2">&gt;&gt;       mode&quot; mean?  Is the openib component register function invoked again?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     It is correct, it is called twice. &quot;light mode&quot; means that
</span><br>
<span class="quotelev2">&gt;&gt;     mca_base_var_register() does not allocate mca variable object again, it
</span><br>
<span class="quotelev2">&gt;&gt;     seeks this variable in global array and finding it updates fields in
</span><br>
<span class="quotelev2">&gt;&gt;     mca_base_var_t structure (at least mbv_storage).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         6. for unknown reason bml finalization does not clean these vars as
</span><br>
<span class="quotelev2">&gt;&gt;         it is done in step 2;
</span><br>
<span class="quotelev2">&gt;&gt;         7. mca_btl_openib.so is unloaded;
</span><br>
<span class="quotelev2">&gt;&gt;         8. opal_finalize() destroys mca variables form global array,
</span><br>
<span class="quotelev2">&gt;&gt;         observes openib`s variable, try destroy using non accessed address;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         So a code that is under discussion fixes step 6.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;       Nathan: it sounds like an MCA var (and entire group) is registered,
</span><br>
<span class="quotelev2">&gt;&gt;       unregistered, and then registered again. Does the MCA var system get
</span><br>
<span class="quotelev2">&gt;&gt;       confused here when it tries to unregister the group a 2nd time?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     Probably issue relates incorrect recognition if variable valid/invalid
</span><br>
<span class="quotelev2">&gt;&gt;     during second call of mca_base_var_deregister().
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13450.php">Joshua Ladd: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>Previous message:</strong> <a href="13448.php">Nathan Hjelm: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>In reply to:</strong> <a href="13448.php">Nathan Hjelm: "Re: [OMPI devel] bug in mca framework?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13450.php">Joshua Ladd: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>Reply:</strong> <a href="13450.php">Joshua Ladd: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>Reply:</strong> <a href="13451.php">Nathan Hjelm: "Re: [OMPI devel] bug in mca framework?"</a>
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
