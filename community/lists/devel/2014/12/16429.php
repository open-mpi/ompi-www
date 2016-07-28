<?
$subject_val = "Re: [OMPI devel] jenkins runtime failures";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  3 14:44:32 2014" -->
<!-- isoreceived="20141203194432" -->
<!-- sent="Wed, 3 Dec 2014 11:44:27 -0800" -->
<!-- isosent="20141203194427" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] jenkins runtime failures" -->
<!-- id="84A55D26-D666-49DA-AE59-DACA3D496D5F_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CE745F9E-C1FC-4C8E-ADA7-945236E0539A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] jenkins runtime failures<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-03 14:44:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16430.php">Ralph Castain: "Re: [OMPI devel] jenkins runtime failures"</a>
<li><strong>Previous message:</strong> <a href="16428.php">Howard Pritchard: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>In reply to:</strong> <a href="16427.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] jenkins runtime failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16430.php">Ralph Castain: "Re: [OMPI devel] jenkins runtime failures"</a>
<li><strong>Reply:</strong> <a href="16430.php">Ralph Castain: "Re: [OMPI devel] jenkins runtime failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Dec 3, 2014, at 10:10 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, I am able to replicate.  There's some kind of dangling function pointer in the ORTE event loop during shutdown.  It seems to be some kind of race -- it only happens in some runs, not all (but still pretty frequent).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph is looking into it.
</span><br>
<p>Well, I would be looking into it if I could reproduce it, but I can&#226;&#128;&#153;t seem to do so. Talking to Nathan about it now
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 3, 2014, at 1:03 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Folks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I can't reproduce the runtime error (looks like in MPI_Finalize) that
</span><br>
<span class="quotelev2">&gt;&gt; the mlnx jenkins is hitting with our pull requests.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Has anyone figured out the problem yet?  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I would prefer to have green checks on our pull requests before
</span><br>
<span class="quotelev2">&gt;&gt; they get merged in.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Howard
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16426.php">http://www.open-mpi.org/community/lists/devel/2014/12/16426.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16427.php">http://www.open-mpi.org/community/lists/devel/2014/12/16427.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16430.php">Ralph Castain: "Re: [OMPI devel] jenkins runtime failures"</a>
<li><strong>Previous message:</strong> <a href="16428.php">Howard Pritchard: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>In reply to:</strong> <a href="16427.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] jenkins runtime failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16430.php">Ralph Castain: "Re: [OMPI devel] jenkins runtime failures"</a>
<li><strong>Reply:</strong> <a href="16430.php">Ralph Castain: "Re: [OMPI devel] jenkins runtime failures"</a>
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
