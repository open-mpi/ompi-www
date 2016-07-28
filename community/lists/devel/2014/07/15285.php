<?
$subject_val = "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet	defined&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 13:22:27 2014" -->
<!-- isoreceived="20140728172227" -->
<!-- sent="Mon, 28 Jul 2014 10:20:54 -0700" -->
<!-- isosent="20140728172054" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_process_info.job_session_dir: &amp;quot;not yet	defined&amp;quot;" -->
<!-- id="5E6FC6A2-D4FA-433B-AD5A-1910457B54A5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0F912EB7-7A1B-4ABF-B2DF-2B6AF6D665F3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet	defined&quot;<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-28 13:20:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15286.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not	yet	defined&quot;"</a>
<li><strong>Previous message:</strong> <a href="15284.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet	defined&quot;"</a>
<li><strong>In reply to:</strong> <a href="15284.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet	defined&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15286.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not	yet	defined&quot;"</a>
<li><strong>Reply:</strong> <a href="15286.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not	yet	defined&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think we should not have opal_init setup the BTLs at all. Let's leave that for the RTE setup to do as it can control the sequencing to ensure all the data is available and ready
<br>
<p>On Jul 28, 2014, at 10:21 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Well, this is a pickle.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm setting up component-wide resources in the BTL component init.  I am doing this because the creation of the modules that I return from BTL component init (currently) *assume* that all of these component resources are already setup.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I have to defer setting up component-wide resources until later, this means I have to put a conditional in some critical paths, right?  I.e.,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    if (component_stuff_not_setup_yet)
</span><br>
<span class="quotelev1">&gt;      do_component_setup()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yuck.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a better way?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Crazy idea: should we add more hooks during the init / setup sequence?  E.g., a BTL component_init_after_rte_has_been_initialized() that is guaranteed to be called before any module functions are invoked?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 28, 2014, at 1:10 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This means you are trying to initialize things too early. Most of the information made available in opal/util/proc.h is only available once the RTE was setup, i.e. only after the call to rte_init. Thus, the BTL can only use it after the init call...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Jul 28, 2014 at 1:01 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 28, 2014, at 9:57 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm getting a value of &quot;not yet defined&quot; for opal_process_info.job_session_dir in the usnic BTL (is this also what is happening for <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15276.php">http://www.open-mpi.org/community/lists/devel/2014/07/15276.php</a>?).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can the job_session_dir be define/setup before the BTLs are setup?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, but the BTL setup can't be done in opal_init - it'll have to be the responsibility of the RTE layer to first set things up, and then init the BTLs. George asked me to look into this, and I will - just slammed today and so can't get to it until later this afternoon
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15277.php">http://www.open-mpi.org/community/lists/devel/2014/07/15277.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15279.php">http://www.open-mpi.org/community/lists/devel/2014/07/15279.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15280.php">http://www.open-mpi.org/community/lists/devel/2014/07/15280.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15284.php">http://www.open-mpi.org/community/lists/devel/2014/07/15284.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15286.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not	yet	defined&quot;"</a>
<li><strong>Previous message:</strong> <a href="15284.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet	defined&quot;"</a>
<li><strong>In reply to:</strong> <a href="15284.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet	defined&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15286.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not	yet	defined&quot;"</a>
<li><strong>Reply:</strong> <a href="15286.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not	yet	defined&quot;"</a>
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
