<?
$subject_val = "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 09:51:46 2015" -->
<!-- isoreceived="20150305145146" -->
<!-- sent="Thu, 5 Mar 2015 14:51:45 +0000" -->
<!-- isosent="20150305145145" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node" -->
<!-- id="F36BF13D-4F66-4A9E-91B5-2CC7253F3BB1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CADGp0BT0_v3JA_wkQQkCQbBOkgpWwSxmgxAz8NbBjcLJzLBPXg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-03-05 09:51:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17105.php">Howard Pritchard: "Re: [OMPI devel] libfabric code does not build with pgi-{10,11}"</a>
<li><strong>Previous message:</strong> <a href="17103.php">Alina Sklarevich: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>In reply to:</strong> <a href="17103.php">Alina Sklarevich: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17106.php">Alina Sklarevich: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Reply:</strong> <a href="17106.php">Alina Sklarevich: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Reply:</strong> <a href="17110.php">Paul Hargrove: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 5, 2015, at 6:32 AM, Alina Sklarevich &lt;alinas_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If oob:ud was disabled then there was no call to ibv_fork_init() anywhere else, right? If so, then this is why the messages went away.
</span><br>
<p>Right.  That's why I'm saying it doesn't seem like a PSM problem.
<br>
<p>(I don't know much about PSM, but I don't think it uses verbs...?)
<br>
<p><span class="quotelev1">&gt; The calls to ibv_fork_init() from the opal common verbs were pushed to the master. One of the places a call was set is oob:ud, but if there is a call to memory registering verbs before this place, then the call to it in oob:ud would result in a failure.
</span><br>
<p>Yes, I think that is the exact question: why are these messages showing up because of oob:ud?  It seems like the call sequences to ibv_fork_init() are not as understood as we thought they were.  :-(  I.e., it was presupposed that oob_ud was the first entity to call any verbs code (and by your commits, is supposed to be calling the common verbs code to call ibv_fork_init() early enough such that it won't be a problem).  But either that is not the case, or ibv_fork_init() is failing for some other reason.
<br>
<p>These are the things that need to be figured out.
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
<li><strong>Next message:</strong> <a href="17105.php">Howard Pritchard: "Re: [OMPI devel] libfabric code does not build with pgi-{10,11}"</a>
<li><strong>Previous message:</strong> <a href="17103.php">Alina Sklarevich: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>In reply to:</strong> <a href="17103.php">Alina Sklarevich: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17106.php">Alina Sklarevich: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Reply:</strong> <a href="17106.php">Alina Sklarevich: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Reply:</strong> <a href="17110.php">Paul Hargrove: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
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
