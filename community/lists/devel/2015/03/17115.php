<?
$subject_val = "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  6 08:06:07 2015" -->
<!-- isoreceived="20150306130607" -->
<!-- sent="Fri, 6 Mar 2015 15:06:07 +0200" -->
<!-- isosent="20150306130607" -->
<!-- name="Alina Sklarevich" -->
<!-- email="alinas_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node" -->
<!-- id="CADGp0BReMxz3aoN81-xZ5LSNFA9oROqw_EakJy5nKX4nmJOxCg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA17ko2v8gbtu6h+5xPX6_G627MT==DyQ55L=5zoxHOWUWg_at_mail.gmail.com" -->
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
<strong>From:</strong> Alina Sklarevich (<em>alinas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-06 08:06:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17116.php">Howard Pritchard: "[OMPI devel] mpi_test_suite question"</a>
<li><strong>Previous message:</strong> <a href="17114.php">Paul Hargrove: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>In reply to:</strong> <a href="17114.php">Paul Hargrove: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17110.php">Paul Hargrove: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>If in this question you were asking me,
<br>
&quot;Can you confirm that fork support *does* work for you when you set the MCA
<br>
param to 1?&quot;
<br>
then the answer is yes.
<br>
<p>Thanks,
<br>
Alina.
<br>
<p>On Fri, Mar 6, 2015 at 4:56 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; In &quot;work for you&quot; does &quot;you&quot; == @PHHargrove?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If YES:
</span><br>
<span class="quotelev1">&gt; 1) are the changes to be tested reflected in the master tarball yet?
</span><br>
<span class="quotelev1">&gt; 2) other than presence/absence of the warning how am I testing if the
</span><br>
<span class="quotelev1">&gt; support &quot;works&quot; when the param is set to 1?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 5, 2015 at 6:29 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 5, 2015, at 7:33 AM, Alina Sklarevich &lt;alinas_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I don't know much about PSM either but shouldn't it be called only
</span><br>
<span class="quotelev2">&gt;&gt; after the oob:ud code?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; If so, then ibv_fork_init() is being called from oob:ud early enough so
</span><br>
<span class="quotelev2">&gt;&gt; either there is another reason for ibv_fork_init() failure (like you said),
</span><br>
<span class="quotelev2">&gt;&gt; or the reason why this verb failed was the same reason why these warnings
</span><br>
<span class="quotelev2">&gt;&gt; appeared?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; libibverbs: Warning: couldn't open config directory '/etc/libibverbs.d'.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; libibverbs: Warning: no userspace device-specific driver found for
</span><br>
<span class="quotelev2">&gt;&gt; /sys/class/infiniband_verbs/uverbs0
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Also, opal_common_verbs_want_fork_support is now set to -1 like you
</span><br>
<span class="quotelev2">&gt;&gt; suggested so these warnings shouldn't appear anymore.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry we went around and around and ended up right back where we
</span><br>
<span class="quotelev2">&gt;&gt; started.  :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It might well be worth putting a comment at the location in the code
</span><br>
<span class="quotelev2">&gt;&gt; where the value is set to -1 explaining *why* it is set to -1 so that we
</span><br>
<span class="quotelev2">&gt;&gt; don't revisit this circular discussion again someday.  :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you confirm that fork support *does* work for you when you set the
</span><br>
<span class="quotelev2">&gt;&gt; MCA param to 1?  If so, then at least those code paths have been fixed.
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17112.php">http://www.open-mpi.org/community/lists/devel/2015/03/17112.php</a>
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
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17114.php">http://www.open-mpi.org/community/lists/devel/2015/03/17114.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17115/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17116.php">Howard Pritchard: "[OMPI devel] mpi_test_suite question"</a>
<li><strong>Previous message:</strong> <a href="17114.php">Paul Hargrove: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>In reply to:</strong> <a href="17114.php">Paul Hargrove: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17110.php">Paul Hargrove: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
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
