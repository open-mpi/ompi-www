<?
$subject_val = "Re: [OMPI devel] 1.8.7rc1 testing results";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 12 22:48:28 2015" -->
<!-- isoreceived="20150713024828" -->
<!-- sent="Mon, 13 Jul 2015 11:48:09 +0900" -->
<!-- isosent="20150713024809" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.7rc1 testing results" -->
<!-- id="55A326E9.6060904_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAvDA17cEwjUvZ33CRgr+9r3XPuCd3OK6urN-aqDyLZeCcv0Mw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.7rc1 testing results<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-12 22:48:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17629.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>Previous message:</strong> <a href="17627.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpiexec without -hosts option"</a>
<li><strong>In reply to:</strong> <a href="17625.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17629.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>Reply:</strong> <a href="17629.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>Here is a revised patch to be applied vs the 1.8.7-rc1 tarball
<br>
<p>Could you please give it a try ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 7/11/2015 4:22 AM, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt; The timing on this is less than ideal for me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To accommodate work on some high-voltage switching equipment, our 
</span><br>
<span class="quotelev1">&gt; building will be without power over the weekend.
</span><br>
<span class="quotelev1">&gt; The system I use to autogen will be OFF from around 3pm today until 
</span><br>
<span class="quotelev1">&gt; perhaps 3pm on Monday.
</span><br>
<span class="quotelev1">&gt; I will also be busy with shutting down our group's systems gracefully 
</span><br>
<span class="quotelev1">&gt; today and bringing them back on Monday.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The test platforms where I have reproduced the failures is NOT going 
</span><br>
<span class="quotelev1">&gt; to be off-line.
</span><br>
<span class="quotelev1">&gt; So, I will be able to test only *tarballs* (but not patches to .m4 
</span><br>
<span class="quotelev1">&gt; files) until probably Monday evening.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think it reasonable to suspect the lib could hold a stub that 
</span><br>
<span class="quotelev1">&gt; returns ENOSYS for the deprecated function.
</span><br>
<span class="quotelev1">&gt; I suspect that checking for ibv_create_xrc_rcv_qp+IBV_QPT_XRC should 
</span><br>
<span class="quotelev1">&gt; work for the rhel6.5 failure case described previously.
</span><br>
<span class="quotelev1">&gt; That way the checks for the two flavors both look for a function in 
</span><br>
<span class="quotelev1">&gt; the lib and a constant in the header.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jul 10, 2015 at 8:21 AM, Jeff Squyres (jsquyres) 
</span><br>
<span class="quotelev1">&gt; &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Yes, I seem to recall that this issue came up before... ah, here
</span><br>
<span class="quotelev1">&gt;     it is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     commit 04bec4475e5a962432b73dd6254f62bb263703ab
</span><br>
<span class="quotelev1">&gt;     Author: Jeff Squyres &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     Date:   Fri Jan 16 18:13:31 2015 -0800
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         openib: check more thoroughly for XRC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Some systems have XRC symbols in their libibverbs libraries,
</span><br>
<span class="quotelev1">&gt;     but do
</span><br>
<span class="quotelev1">&gt;         not have the appropriate XRC bits in their devel headers
</span><br>
<span class="quotelev1">&gt;     (cough cough
</span><br>
<span class="quotelev1">&gt;         RHEL 6.5 libibverbs-rocee-*.x86-64.rpm cough cough).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         So expand the XRC config checks to ensure that we can actually
</span><br>
<span class="quotelev1">&gt;     find
</span><br>
<span class="quotelev1">&gt;         one of the XRC constants that we need to compile XRC code before
</span><br>
<span class="quotelev1">&gt;         ruling that we can actually build XRC support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; On Jul 10, 2015, at 10:33 AM, Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt;     &lt;gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Sorry about that, and thanks for reverting the commit.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Paul mentioned a patch I sent to the ml, and that worked for him.
</span><br>
<span class="quotelev2">&gt;     &gt; The commit was supposed to be a more robust version.
</span><br>
<span class="quotelev2">&gt;     &gt; For example, in rhel7, the deprecated function have been
</span><br>
<span class="quotelev1">&gt;     removed, but the xrc domains is fine.
</span><br>
<span class="quotelev2">&gt;     &gt; Currently, xrc is not supported as it should.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; It seems rhel 6.5 has the deprecated function, but it is not in
</span><br>
<span class="quotelev1">&gt;     the header files are missing it among other things.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I will fix that and post a issue a pr so you can test it on
</span><br>
<span class="quotelev1">&gt;     rhel6.5 before I commit it.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I noticed there is no infiniband/verbs.h on a lanl test cluster
</span><br>
<span class="quotelev1">&gt;     (the non cray one)
</span><br>
<span class="quotelev2">&gt;     &gt; Is it possible to have it installed ?
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Cheers,
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Gilles
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; On Friday, July 10, 2015, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt;     &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;     &gt; On Jul 10, 2015, at 2:12 AM, Paul Hargrove &lt;phhargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; The only &quot;new&quot; (non-cosmetic) problem I observed was the
</span><br>
<span class="quotelev1">&gt;     failure to detect &quot;ConnectX XRC support&quot;.
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; It looks like Gilles and I iterated on that issue until we
</span><br>
<span class="quotelev1">&gt;     have something that works now.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; 'fraid not.  :-(
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Per
</span><br>
<span class="quotelev1">&gt;     <a href="https://github.com/open-mpi/ompi-release/pull/384#issuecomment-120412836">https://github.com/open-mpi/ompi-release/pull/384#issuecomment-120412836</a>,
</span><br>
<span class="quotelev1">&gt;     the latest commit breaks on RHEL 6.5 systems that do not have
</span><br>
<span class="quotelev1">&gt;     MOFED installed.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; --
</span><br>
<span class="quotelev2">&gt;     &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;     &gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;     &gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;     &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17618.php">http://www.open-mpi.org/community/lists/devel/2015/07/17618.php</a>
</span><br>
<span class="quotelev2">&gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;     &gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;     &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17620.php">http://www.open-mpi.org/community/lists/devel/2015/07/17620.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     Jeff Squyres
</span><br>
<span class="quotelev1">&gt;     jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17623.php">http://www.open-mpi.org/community/lists/devel/2015/07/17623.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17625.php">http://www.open-mpi.org/community/lists/devel/2015/07/17625.php</a>
</span><br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17628/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17628/xrc.4.v1.8.patch.gz">xrc.4.v1.8.patch.gz</a>
</ul>
<!-- attachment="xrc.4.v1.8.patch.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17629.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>Previous message:</strong> <a href="17627.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpiexec without -hosts option"</a>
<li><strong>In reply to:</strong> <a href="17625.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17629.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>Reply:</strong> <a href="17629.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
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
