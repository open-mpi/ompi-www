<?
$subject_val = "Re: [OMPI devel] jenkins runtime failures";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  3 13:10:42 2014" -->
<!-- isoreceived="20141203181042" -->
<!-- sent="Wed, 3 Dec 2014 18:10:41 +0000" -->
<!-- isosent="20141203181041" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] jenkins runtime failures" -->
<!-- id="CE745F9E-C1FC-4C8E-ADA7-945236E0539A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF1Cqj7Wt7Y8eG15Vh7xN2KqU0KE9GzR=YPdwc6D5vEf_YfcHA_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-03 13:10:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16428.php">Howard Pritchard: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Previous message:</strong> <a href="16426.php">Howard Pritchard: "[OMPI devel] jenkins runtime failures"</a>
<li><strong>In reply to:</strong> <a href="16426.php">Howard Pritchard: "[OMPI devel] jenkins runtime failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16429.php">Ralph Castain: "Re: [OMPI devel] jenkins runtime failures"</a>
<li><strong>Reply:</strong> <a href="16429.php">Ralph Castain: "Re: [OMPI devel] jenkins runtime failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I am able to replicate.  There's some kind of dangling function pointer in the ORTE event loop during shutdown.  It seems to be some kind of race -- it only happens in some runs, not all (but still pretty frequent).
<br>
<p>Ralph is looking into it.
<br>
<p><p>On Dec 3, 2014, at 1:03 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can't reproduce the runtime error (looks like in MPI_Finalize) that
</span><br>
<span class="quotelev1">&gt; the mlnx jenkins is hitting with our pull requests.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has anyone figured out the problem yet?  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would prefer to have green checks on our pull requests before
</span><br>
<span class="quotelev1">&gt; they get merged in.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16426.php">http://www.open-mpi.org/community/lists/devel/2014/12/16426.php</a>
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
<li><strong>Next message:</strong> <a href="16428.php">Howard Pritchard: "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Previous message:</strong> <a href="16426.php">Howard Pritchard: "[OMPI devel] jenkins runtime failures"</a>
<li><strong>In reply to:</strong> <a href="16426.php">Howard Pritchard: "[OMPI devel] jenkins runtime failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16429.php">Ralph Castain: "Re: [OMPI devel] jenkins runtime failures"</a>
<li><strong>Reply:</strong> <a href="16429.php">Ralph Castain: "Re: [OMPI devel] jenkins runtime failures"</a>
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
