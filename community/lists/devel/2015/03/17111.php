<?
$subject_val = "Re: [OMPI devel] libfabric code does not build with pgi-{10,11}";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 15:02:18 2015" -->
<!-- isoreceived="20150305200218" -->
<!-- sent="Thu, 5 Mar 2015 12:01:53 -0800" -->
<!-- isosent="20150305200153" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] libfabric code does not build with pgi-{10,11}" -->
<!-- id="CAAvDA16SGtnp_07RcYQgBgFifLKLDYo2_vLipuNbu5TVeVL_uw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAF1Cqj5LrLihcdcvP+Qn3F9y4yKWcF-NeBd8pP_9cE20XmS2rA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] libfabric code does not build with pgi-{10,11}<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-05 15:01:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17112.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Previous message:</strong> <a href="17110.php">Paul Hargrove: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>In reply to:</strong> <a href="17108.php">Howard Pritchard: "Re: [OMPI devel] libfabric code does not build with pgi-{10,11}"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Howard,
<br>
<p>I agree this is low priority, which is why I prefaced my report with &quot;I
<br>
don't know if anybody cares&quot;.
<br>
I am happy to ignore this if it doesn't worry you.
<br>
<p>In case you do want to proceed:
<br>
<p>I configure on Carver with
<br>
&nbsp;&nbsp;--prefix=[...] --enable-debug CC=pgcc CXX=pgCC FC=pgf90 \
<br>
&nbsp;&nbsp;--with-tm=/usr/syscom/opt/torque/4.1.1 --enable-mpi-fortran=mpifh
<br>
(I know that 'tm' path is out-of-date, but I've never updated my build
<br>
script.)
<br>
<p>And I see common:libfabric and mtl:ofi enabled:
<br>
<p>{hargrove_at_cvrsvc04 LOG}$ grep -e :libfab -e :ofi configure.log
<br>
--- MCA component common:libfabric (m4 configuration macro)
<br>
checking for MCA component common:libfabric compile mode... dso
<br>
checking if MCA component common:libfabric can compile... yes
<br>
--- MCA component mtl:ofi (m4 configuration macro)
<br>
checking for MCA component mtl:ofi compile mode... dso
<br>
checking if MCA component mtl:ofi can compile... yes
<br>
<p><p><p>-Paul
<br>
<p>On Thu, Mar 5, 2015 at 8:57 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; HI Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the 10.9 and 11.9 does the libfabric get configured to build for you
</span><br>
<span class="quotelev1">&gt; on carver?
</span><br>
<span class="quotelev1">&gt; I get a failure at config.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think this should be high priority since the libfabric embedding
</span><br>
<span class="quotelev1">&gt; within
</span><br>
<span class="quotelev1">&gt; open mpi should hopefully soon be a thing of the past.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015-03-04 14:28 GMT-07:00 Paul Hargrove &lt;phhargrove_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know if anybody *cares*, but I find that the common:libfabric
</span><br>
<span class="quotelev2">&gt;&gt; code compiles with pgi-{9,12,13,14} but not with pgi-{10,11}.
</span><br>
<span class="quotelev2">&gt;&gt; These are versions 10.9 and 11.9 of pgi that built Open MPI 1.8.4 just
</span><br>
<span class="quotelev2">&gt;&gt; fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If somebody does care, let me know who and I'll send logs off-list.
</span><br>
<span class="quotelev2">&gt;&gt; However, this can be reproduced on carver.nersc.gov where at least
</span><br>
<span class="quotelev2">&gt;&gt; Howard and Nathan have accounts.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17099.php">http://www.open-mpi.org/community/lists/devel/2015/03/17099.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17108.php">http://www.open-mpi.org/community/lists/devel/2015/03/17108.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17111/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17112.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Previous message:</strong> <a href="17110.php">Paul Hargrove: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>In reply to:</strong> <a href="17108.php">Howard Pritchard: "Re: [OMPI devel] libfabric code does not build with pgi-{10,11}"</a>
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
