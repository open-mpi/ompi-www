<?
$subject_val = "Re: [OMPI devel] 1.8.7rc1 testing results";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 10 10:35:41 2015" -->
<!-- isoreceived="20150710143541" -->
<!-- sent="Fri, 10 Jul 2015 07:35:36 -0700" -->
<!-- isosent="20150710143536" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.7rc1 testing results" -->
<!-- id="A3B717D2-29C4-44EA-8D7E-A6BA2E4B27FD_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5v0+viT=LMMSNG401Sd95WJ8QYuZBmW=T12U9tmVk1=ew_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-10 10:35:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17622.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>Previous message:</strong> <a href="17620.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>In reply to:</strong> <a href="17620.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17622.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>Reply:</strong> <a href="17622.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Given that 1.8. was working correctly, why don&#226;&#128;&#153;t we just revert the config in question back to the 1.8.4 version? Why was it changed in the first place? Does anyone know what problem someone was trying to solve?
<br>
<p><p><span class="quotelev1">&gt; On Jul 10, 2015, at 7:33 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry about that, and thanks for reverting the commit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Paul mentioned a patch I sent to the ml, and that worked for him.
</span><br>
<span class="quotelev1">&gt; The commit was supposed to be a more robust version.
</span><br>
<span class="quotelev1">&gt; For example, in rhel7, the deprecated function have been removed, but the xrc domains is fine.
</span><br>
<span class="quotelev1">&gt; Currently, xrc is not supported as it should.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems rhel 6.5 has the deprecated function, but it is not in the header files are missing it among other things.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will fix that and post a issue a pr so you can test it on rhel6.5 before I commit it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I noticed there is no infiniband/verbs.h on a lanl test cluster (the non cray one)
</span><br>
<span class="quotelev1">&gt; Is it possible to have it installed ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Friday, July 10, 2015, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Jul 10, 2015, at 2:12 AM, Paul Hargrove &lt;phhargrove_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The only &quot;new&quot; (non-cosmetic) problem I observed was the failure to detect &quot;ConnectX XRC support&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; It looks like Gilles and I iterated on that issue until we have something that works now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 'fraid not.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Per <a href="https://github.com/open-mpi/ompi-release/pull/384#issuecomment-120412836">https://github.com/open-mpi/ompi-release/pull/384#issuecomment-120412836</a> &lt;<a href="https://github.com/open-mpi/ompi-release/pull/384#issuecomment-120412836">https://github.com/open-mpi/ompi-release/pull/384#issuecomment-120412836</a>&gt;, the latest commit breaks on RHEL 6.5 systems that do not have MOFED installed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a> &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17618.php">http://www.open-mpi.org/community/lists/devel/2015/07/17618.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/07/17618.php">http://www.open-mpi.org/community/lists/devel/2015/07/17618.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17620.php">http://www.open-mpi.org/community/lists/devel/2015/07/17620.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17621/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17622.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>Previous message:</strong> <a href="17620.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>In reply to:</strong> <a href="17620.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17622.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>Reply:</strong> <a href="17622.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
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
