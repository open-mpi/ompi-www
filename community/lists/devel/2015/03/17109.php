<?
$subject_val = "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 13:20:34 2015" -->
<!-- isoreceived="20150305182034" -->
<!-- sent="Thu, 5 Mar 2015 10:20:29 -0800" -->
<!-- isosent="20150305182029" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node" -->
<!-- id="CAAvDA16X-YRz61MsCpLZ_o2tLX=AoWXXexchJ==Y02gSUPzsDA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAO1Kybhxxm=SYThjO0Sx3qTxjfR0=SAkG=wzLLE3nhXzTr8jg_at_mail.gmail.com" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-05 13:20:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17110.php">Paul Hargrove: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Previous message:</strong> <a href="17108.php">Howard Pritchard: "Re: [OMPI devel] libfabric code does not build with pgi-{10,11}"</a>
<li><strong>In reply to:</strong> <a href="17107.php">Mike Dubman: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17112.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike,
<br>
<p>Mike, I think in this case &quot;version does not match&quot; really means &quot;not
<br>
installed&quot;.  I am pretty sure, as Dave G. and I discussed earlier on this
<br>
thread, those two lines are because the head node has an HCA and kernel
<br>
modules, but only the &quot;devel&quot; libraries have been installed (because the
<br>
HCA is not cabled to a switch).  I can assure you that both verbs and psm
<br>
support work fine on/among the compute nodes (with no messages at all once
<br>
oob:ud is disabled).
<br>
<p>To confirm that the first two lines are from the head node, I just now
<br>
tried executing mpirun from a compute node instead (one not on the -host
<br>
list) and the libibverbs warning lines are no longer present.  The
<br>
ibv_fork_init() failures *are* still present.
<br>
<p>So, I am inclined to agree with Dave that these lines:
<br>
<p>libibverbs: Warning: couldn't open config directory '/etc/libibverbs.d'.
<br>
libibverbs: Warning: no userspace device-specific driver found for
<br>
/sys/class/infiniband_verbs/uverbs0
<br>
<p>are an unavoidable product of orterun trying to init the verbs libs on the
<br>
head node that lacks the necessary libs.  So, I am *not* really concerned
<br>
with making these go away.
<br>
<p>-Paul
<br>
<p>On Thu, Mar 5, 2015 at 8:56 AM, Mike Dubman &lt;miked_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Paul,
</span><br>
<span class="quotelev1">&gt; judging by:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libibverbs: Warning: couldn't open config directory '/etc/libibverbs.d'.
</span><br>
<span class="quotelev1">&gt; libibverbs: Warning: no userspace device-specific driver found for
</span><br>
<span class="quotelev1">&gt; /sys/class/infiniband_verbs/uverbs0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it seems that ofed userspace libraries version does not match loaded ofer
</span><br>
<span class="quotelev1">&gt; kernel driver version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 5, 2015 at 5:33 PM, Alina Sklarevich &lt;
</span><br>
<span class="quotelev1">&gt; alinas_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know much about PSM either but shouldn't it be called only after
</span><br>
<span class="quotelev2">&gt;&gt; the oob:ud code?
</span><br>
<span class="quotelev2">&gt;&gt; If so, then ibv_fork_init() is being called from oob:ud early enough so
</span><br>
<span class="quotelev2">&gt;&gt; either there is another reason for ibv_fork_init() failure (like you said),
</span><br>
<span class="quotelev2">&gt;&gt; or the reason why this verb failed was the same reason why these warnings
</span><br>
<span class="quotelev2">&gt;&gt; appeared?
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Warning: couldn't open config directory '/etc/libibverbs.d'.
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Warning: no userspace device-specific driver found for
</span><br>
<span class="quotelev2">&gt;&gt; /sys/class/infiniband_verbs/uverbs0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, opal_common_verbs_want_fork_support is now set to -1 like you
</span><br>
<span class="quotelev2">&gt;&gt; suggested so these warnings shouldn't appear anymore.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Mar 5, 2015 at 4:51 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 5, 2015, at 6:32 AM, Alina Sklarevich &lt;alinas_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; If oob:ud was disabled then there was no call to ibv_fork_init()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anywhere else, right? If so, then this is why the messages went away.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Right.  That's why I'm saying it doesn't seem like a PSM problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (I don't know much about PSM, but I don't think it uses verbs...?)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; The calls to ibv_fork_init() from the opal common verbs were pushed to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the master. One of the places a call was set is oob:ud, but if there is a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call to memory registering verbs before this place, then the call to it in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; oob:ud would result in a failure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, I think that is the exact question: why are these messages showing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; up because of oob:ud?  It seems like the call sequences to ibv_fork_init()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are not as understood as we thought they were.  :-(  I.e., it was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; presupposed that oob_ud was the first entity to call any verbs code (and by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your commits, is supposed to be calling the common verbs code to call
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ibv_fork_init() early enough such that it won't be a problem).  But either
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that is not the case, or ibv_fork_init() is failing for some other reason.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; These are the things that need to be figured out.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17104.php">http://www.open-mpi.org/community/lists/devel/2015/03/17104.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17106.php">http://www.open-mpi.org/community/lists/devel/2015/03/17106.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M.
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17107.php">http://www.open-mpi.org/community/lists/devel/2015/03/17107.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17109/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17110.php">Paul Hargrove: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Previous message:</strong> <a href="17108.php">Howard Pritchard: "Re: [OMPI devel] libfabric code does not build with pgi-{10,11}"</a>
<li><strong>In reply to:</strong> <a href="17107.php">Mike Dubman: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17112.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
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
