<?
$subject_val = "Re: [OMPI devel] trying to view ciso-community master results and	mtt	has issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 18 14:46:13 2016" -->
<!-- isoreceived="20160218194613" -->
<!-- sent="Thu, 18 Feb 2016 19:46:10 +0000" -->
<!-- isosent="20160218194610" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trying to view ciso-community master results and	mtt	has issue" -->
<!-- id="AD69AC39-83D9-49F0-9A2A-9E4F08C8E6BA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E6C2F1BA-5327-42DA-8EE7-44365AD39979_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trying to view ciso-community master results and	mtt	has issue<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-18 14:46:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18612.php">Ralph Castain: "[OMPI devel] ORTED process group"</a>
<li><strong>Previous message:</strong> <a href="18610.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trying to view ciso-community master results and mtt	has issue"</a>
<li><strong>In reply to:</strong> <a href="18610.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trying to view ciso-community master results and mtt	has issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Issue filed: <a href="https://github.com/open-mpi/ompi/issues/1379">https://github.com/open-mpi/ompi/issues/1379</a>
<br>
<p><p><span class="quotelev1">&gt; On Feb 18, 2016, at 2:08 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like the root cause of this is negative tests (i.e., teststhat are supposed to fail) are not actually quitting.  They still keep running, even after their HNP is gone -- spinning endlessly, consuming CPU cycles.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hence, the CPU load on a bunch of nodes in my cluster is in the hundreds (which then even ends up causing positive tests to fail).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me dig into this a bit and see if I can get some stack traces, etc., and open up a github issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 18, 2016, at 12:15 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Folks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I noticed cisco-community MTT results are really red/pink today.
</span><br>
<span class="quotelev2">&gt;&gt; If I try to view some of the ibm test results though, something goes
</span><br>
<span class="quotelev2">&gt;&gt; south with mtt and this is what get's posted back to my browser:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Fatal error: Allowed memory size of 67108864 bytes exhausted (tried to allocate 71 bytes) in /nfs/data/osl/www/mtt.open-mpi.org/reporter/dashboard.inc on line 271
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So, I guess the first priority is do we know what's happened
</span><br>
<span class="quotelev2">&gt;&gt; with cisco MTT?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Second, is this a known problem with the mtt reporter? 
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to work around it?
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18609.php">http://www.open-mpi.org/community/lists/devel/2016/02/18609.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18610.php">http://www.open-mpi.org/community/lists/devel/2016/02/18610.php</a>
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
<li><strong>Next message:</strong> <a href="18612.php">Ralph Castain: "[OMPI devel] ORTED process group"</a>
<li><strong>Previous message:</strong> <a href="18610.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trying to view ciso-community master results and mtt	has issue"</a>
<li><strong>In reply to:</strong> <a href="18610.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trying to view ciso-community master results and mtt	has issue"</a>
<!-- nextthread="start" -->
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
