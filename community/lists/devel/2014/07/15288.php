<?
$subject_val = "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet defined&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 14:23:09 2014" -->
<!-- isoreceived="20140728182309" -->
<!-- sent="Mon, 28 Jul 2014 14:23:06 -0400" -->
<!-- isosent="20140728182306" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_process_info.job_session_dir: &amp;quot;not yet defined&amp;quot;" -->
<!-- id="CAMJJpkVSrMOFsmt1nTAN+mUr15xmyEjvbq0RqadCj8ATtApagg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkUdedH5qDtDY4Ejc2wX_c+xVEHzVxziEZMXgx1PgSJVwg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet defined&quot;<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-28 14:23:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15289.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet	defined&quot;"</a>
<li><strong>Previous message:</strong> <a href="15287.php">George Bosilca: "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet defined&quot;"</a>
<li><strong>In reply to:</strong> <a href="15287.php">George Bosilca: "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet defined&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15289.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet	defined&quot;"</a>
<li><strong>Reply:</strong> <a href="15289.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet	defined&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ignore my previous email, I see what is going on. Basically, there are 6
<br>
data  made available to the BTL: nodename, job_session_dir,
<br>
proc_session_dir, num_local_peers, my_local_rank and if available cpuset.
<br>
Some of this information is available early in the startup while others are
<br>
only available after the modex exchange.
<br>
<p>Right now the initialization of all these info is made after the modex
<br>
exchange. We can certainly move some of them earlier, maybe right after the
<br>
RTE initialization. As Ralph said, I requested his help on this as he is in
<br>
the best position to know when the RTE can provide such information.
<br>
<p>Patience ...
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Mon, Jul 28, 2014 at 1:38 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Well, I'm slightly confused as the BTL are initialized outside opal_init.
</span><br>
<span class="quotelev1">&gt; There must be a specific call to mca_base_framework_open for the BTL, and
</span><br>
<span class="quotelev1">&gt; currently this call is made in the BML. As the BML is only initialized once
</span><br>
<span class="quotelev1">&gt; the RTE is up, I don't understand how do you get the &quot;not initialized&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 28, 2014 at 1:29 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'd be ok with that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 28, 2014, at 1:20 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I think we should not have opal_init setup the BTLs at all. Let's leave
</span><br>
<span class="quotelev2">&gt;&gt; that for the RTE setup to do as it can control the sequencing to ensure all
</span><br>
<span class="quotelev2">&gt;&gt; the data is available and ready
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Jul 28, 2014, at 10:21 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Well, this is a pickle.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I'm setting up component-wide resources in the BTL component init.  I
</span><br>
<span class="quotelev2">&gt;&gt; am doing this because the creation of the modules that I return from BTL
</span><br>
<span class="quotelev2">&gt;&gt; component init (currently) *assume* that all of these component resources
</span><br>
<span class="quotelev2">&gt;&gt; are already setup.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; If I have to defer setting up component-wide resources until later,
</span><br>
<span class="quotelev2">&gt;&gt; this means I have to put a conditional in some critical paths, right?  I.e.,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;   if (component_stuff_not_setup_yet)
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;     do_component_setup()
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Yuck.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Is there a better way?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Crazy idea: should we add more hooks during the init / setup sequence?
</span><br>
<span class="quotelev2">&gt;&gt;  E.g., a BTL component_init_after_rte_has_been_initialized() that is
</span><br>
<span class="quotelev2">&gt;&gt; guaranteed to be called before any module functions are invoked?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On Jul 28, 2014, at 1:10 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; This means you are trying to initialize things too early. Most of the
</span><br>
<span class="quotelev2">&gt;&gt; information made available in opal/util/proc.h is only available once the
</span><br>
<span class="quotelev2">&gt;&gt; RTE was setup, i.e. only after the call to rte_init. Thus, the BTL can only
</span><br>
<span class="quotelev2">&gt;&gt; use it after the init call...
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; George.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; On Mon, Jul 28, 2014 at 1:01 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; On Jul 28, 2014, at 9:57 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; I'm getting a value of &quot;not yet defined&quot; for
</span><br>
<span class="quotelev2">&gt;&gt; opal_process_info.job_session_dir in the usnic BTL (is this also what is
</span><br>
<span class="quotelev2">&gt;&gt; happening for
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15276.php">http://www.open-mpi.org/community/lists/devel/2014/07/15276.php</a>?).
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; Can the job_session_dir be define/setup before the BTLs are setup?
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Yes, but the BTL setup can't be done in opal_init - it'll have to be
</span><br>
<span class="quotelev2">&gt;&gt; the responsibility of the RTE layer to first set things up, and then init
</span><br>
<span class="quotelev2">&gt;&gt; the BTLs. George asked me to look into this, and I will - just slammed
</span><br>
<span class="quotelev2">&gt;&gt; today and so can't get to it until later this afternoon
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15277.php">http://www.open-mpi.org/community/lists/devel/2014/07/15277.php</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15279.php">http://www.open-mpi.org/community/lists/devel/2014/07/15279.php</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15280.php">http://www.open-mpi.org/community/lists/devel/2014/07/15280.php</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15284.php">http://www.open-mpi.org/community/lists/devel/2014/07/15284.php</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15285.php">http://www.open-mpi.org/community/lists/devel/2014/07/15285.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15286.php">http://www.open-mpi.org/community/lists/devel/2014/07/15286.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15288/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15289.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet	defined&quot;"</a>
<li><strong>Previous message:</strong> <a href="15287.php">George Bosilca: "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet defined&quot;"</a>
<li><strong>In reply to:</strong> <a href="15287.php">George Bosilca: "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet defined&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15289.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet	defined&quot;"</a>
<li><strong>Reply:</strong> <a href="15289.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal_process_info.job_session_dir: &quot;not yet	defined&quot;"</a>
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
