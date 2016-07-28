<?
$subject_val = "Re: [OMPI devel] noticing odd message";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 20 18:38:25 2015" -->
<!-- isoreceived="20150420223825" -->
<!-- sent="Mon, 20 Apr 2015 22:38:24 +0000" -->
<!-- isosent="20150420223824" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] noticing odd message" -->
<!-- id="CDB9AF5D-A460-4AF2-9A53-A46C54C696F8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF1Cqj666DJkrQ8CRE+in7sGaKRPtHy3aySiMmV7z6_CGvL4yg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] noticing odd message<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-20 18:38:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17281.php">Nathan Hjelm: "Re: [OMPI devel] noticing odd message"</a>
<li><strong>Previous message:</strong> <a href="17279.php">Howard Pritchard: "[OMPI devel] noticing odd message"</a>
<li><strong>In reply to:</strong> <a href="17279.php">Howard Pritchard: "[OMPI devel] noticing odd message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17281.php">Nathan Hjelm: "Re: [OMPI devel] noticing odd message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1 -- I saw this today/over the weekend.  I didn't bisect to see where it started; I assume it was one of the MCA var base updates.
<br>
<p><p><p><span class="quotelev1">&gt; On Apr 20, 2015, at 6:34 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Working on master, I&quot;m getting an odd message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 1 zeroed elements of size 0 (mca_base_var.c, 170)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; whenever I launch a job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like this can be traced back to this line in orte_ess_singleton_component_register:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca_base_var_register_synonym(ret &quot;orte&quot;, NULL, NULL, &quot;server&quot;, 0);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this just recently started appearing, perhaps today, but I've not been running
</span><br>
<span class="quotelev1">&gt; anything over the weekend.
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17279.php">http://www.open-mpi.org/community/lists/devel/2015/04/17279.php</a>
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
<li><strong>Next message:</strong> <a href="17281.php">Nathan Hjelm: "Re: [OMPI devel] noticing odd message"</a>
<li><strong>Previous message:</strong> <a href="17279.php">Howard Pritchard: "[OMPI devel] noticing odd message"</a>
<li><strong>In reply to:</strong> <a href="17279.php">Howard Pritchard: "[OMPI devel] noticing odd message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17281.php">Nathan Hjelm: "Re: [OMPI devel] noticing odd message"</a>
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
