<?
$subject_val = "Re: [OMPI devel] memory binding";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 13 17:06:46 2010" -->
<!-- isoreceived="20101213220646" -->
<!-- sent="Mon, 13 Dec 2010 17:06:41 -0500" -->
<!-- isosent="20101213220641" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] memory binding" -->
<!-- id="C4BEE6E6-3947-4DC7-9875-F2C74A8EEACB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D068E99.7070902_at_anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] memory binding<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-13 17:06:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8775.php">David Fiala: "[OMPI devel] OpenIB not functioning on 1.5.x (works on 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="8773.php">David Singleton: "Re: [OMPI devel] memory binding"</a>
<li><strong>In reply to:</strong> <a href="8773.php">David Singleton: "Re: [OMPI devel] memory binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8777.php">David Singleton: "Re: [OMPI devel] memory binding"</a>
<li><strong>Reply:</strong> <a href="8777.php">David Singleton: "Re: [OMPI devel] memory binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 13, 2010, at 4:22 PM, David Singleton wrote:
<br>
<p><span class="quotelev1">&gt; I didnt see memory binding in their explicitly.
</span><br>
<p>You're correct; sorry, I was just referring to some general slides that showed some of the ideas that we're working on for next-generation affinity stuff.  But memory binding will be included as well.
<br>
<p><span class="quotelev2">&gt;&gt; What OS and libnuma version are you running?  It has been my experience that libnuma can lie on RHEL 5 and earlier.  My (possibly flawed) understanding is that this is because of lack of proper kernel support; such &quot;proper&quot; kernel support was only added fairly recently (2.6.30something).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's interesting.  By &quot;lie&quot;, do you mean processes are not really memory bound?
</span><br>
<p>I mean that even when usinga strict memory binding policy, if you numa_alloc* on node X, you can get memory on node Y.
<br>
<p><span class="quotelev1">&gt; We're running 2.6.27.55 (and numactl 0.9.8-11.el5) and I've done quite a bit of
</span><br>
<span class="quotelev1">&gt; testing that always looks correct.
</span><br>
<p>That could well be.
<br>
<p>On RHEL 5 (2.6.18 and numactl-0.9.8), the above &quot;bad&quot; behavior happens.  With RHEL 6 (2.6.32 and numactl-2.0.3), it seems to be correct.  Where exactly the issue was fixed, I'm not entirely sure.
<br>
<p><span class="quotelev2">&gt;&gt; That aside, it's somewhat disappointing that MPOL_PREFERRED is not working well and that you had to switch to MPOL_BIND.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure its disappointing - I think it's just to be expected.  For sites that
</span><br>
<span class="quotelev1">&gt; drop caches or run a whole node memhog or reboot nodes between jobs, MPOL_PREFERRED
</span><br>
<span class="quotelev1">&gt; will do the right thing.  For sites that are not so careful or use suspend/resume
</span><br>
<span class="quotelev1">&gt; scheduling, memory overcommits and some amount of page reclaim or paging on job
</span><br>
<span class="quotelev1">&gt; startup will happen occasionally.  Paying the extra cost of making sure that page
</span><br>
<span class="quotelev1">&gt; reclaim or paging results in ideal locality is definitely a big win for a job
</span><br>
<span class="quotelev1">&gt; overall.  (Paging suspended jobs back in after they are resumed can undo some of
</span><br>
<span class="quotelev1">&gt; their ideal placement but that can be handled.)
</span><br>
<p>Fair enough.
<br>
<p><span class="quotelev2">&gt;&gt; Should we add an MCA parameter to switch between BIND and PREFERRED, and perhaps default to BIND?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure BIND should be the default for everyone - memory imbalanced jobs might
</span><br>
<span class="quotelev1">&gt; page badly in this case.  But, yes, we would like an MCA to choose and allow sites
</span><br>
<span class="quotelev1">&gt; to select BIND as their default if they wish.  An mpirun option like --bind-to-mem
</span><br>
<span class="quotelev1">&gt; would need a preferred/affinity alternative and I'm not sure how of a nice notation/
</span><br>
<span class="quotelev1">&gt; syntax for that.
</span><br>
<p>How about:
<br>
<p>&nbsp;&nbsp;--mca maffinity_libnuma_policy bind|preferred
<br>
<p>I can do that for the v1.5 series, if you'd like.  I can't really do it for v1.4 because that series is in &quot;bug fix only&quot; mode.  However, given that we're revamping all of our affinity support, I don't know what the future interface will look like -- so the name may change, or ...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8775.php">David Fiala: "[OMPI devel] OpenIB not functioning on 1.5.x (works on 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="8773.php">David Singleton: "Re: [OMPI devel] memory binding"</a>
<li><strong>In reply to:</strong> <a href="8773.php">David Singleton: "Re: [OMPI devel] memory binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8777.php">David Singleton: "Re: [OMPI devel] memory binding"</a>
<li><strong>Reply:</strong> <a href="8777.php">David Singleton: "Re: [OMPI devel] memory binding"</a>
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
