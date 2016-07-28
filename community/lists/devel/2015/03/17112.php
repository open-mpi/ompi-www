<?
$subject_val = "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 21:29:14 2015" -->
<!-- isoreceived="20150306022914" -->
<!-- sent="Fri, 6 Mar 2015 02:29:12 +0000" -->
<!-- isosent="20150306022912" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node" -->
<!-- id="112E28C4-E1F2-4DC8-A47C-988BCD89DE49_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CADGp0BQnYAbAmiqvb42xE4MCvczTh0Bs0EBM1+gUw=iNWyCKKA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-05 21:29:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17113.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Previous message:</strong> <a href="17111.php">Paul Hargrove: "Re: [OMPI devel] libfabric code does not build with pgi-{10,11}"</a>
<li><strong>In reply to:</strong> <a href="17106.php">Alina Sklarevich: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17114.php">Paul Hargrove: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Reply:</strong> <a href="17114.php">Paul Hargrove: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 5, 2015, at 7:33 AM, Alina Sklarevich &lt;alinas_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know much about PSM either but shouldn't it be called only after the oob:ud code?
</span><br>
<span class="quotelev1">&gt; If so, then ibv_fork_init() is being called from oob:ud early enough so either there is another reason for ibv_fork_init() failure (like you said), or the reason why this verb failed was the same reason why these warnings appeared?
</span><br>
<span class="quotelev1">&gt; libibverbs: Warning: couldn't open config directory '/etc/libibverbs.d'.
</span><br>
<span class="quotelev1">&gt; libibverbs: Warning: no userspace device-specific driver found for /sys/class/infiniband_verbs/uverbs0  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, opal_common_verbs_want_fork_support is now set to -1 like you suggested so these warnings shouldn't appear anymore.
</span><br>
<p>Sorry we went around and around and ended up right back where we started.  :-(
<br>
<p>It might well be worth putting a comment at the location in the code where the value is set to -1 explaining *why* it is set to -1 so that we don't revisit this circular discussion again someday.  :-)
<br>
<p>Can you confirm that fork support *does* work for you when you set the MCA param to 1?  If so, then at least those code paths have been fixed.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17113.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Previous message:</strong> <a href="17111.php">Paul Hargrove: "Re: [OMPI devel] libfabric code does not build with pgi-{10,11}"</a>
<li><strong>In reply to:</strong> <a href="17106.php">Alina Sklarevich: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17114.php">Paul Hargrove: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Reply:</strong> <a href="17114.php">Paul Hargrove: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
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
