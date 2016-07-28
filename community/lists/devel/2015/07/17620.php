<?
$subject_val = "Re: [OMPI devel] 1.8.7rc1 testing results";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 10 10:33:46 2015" -->
<!-- isoreceived="20150710143346" -->
<!-- sent="Fri, 10 Jul 2015 23:33:45 +0900" -->
<!-- isosent="20150710143345" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.7rc1 testing results" -->
<!-- id="CAAkFZ5v0+viT=LMMSNG401Sd95WJ8QYuZBmW=T12U9tmVk1=ew_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="28686F9A-8EE0-4B48-89D1-E23478EDD9B4_at_cisco.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-10 10:33:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17621.php">Ralph Castain: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>Previous message:</strong> <a href="17619.php">Jeff Squyres (jsquyres): "[OMPI devel] Github acting very slow"</a>
<li><strong>In reply to:</strong> <a href="17618.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17621.php">Ralph Castain: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>Reply:</strong> <a href="17621.php">Ralph Castain: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>Reply:</strong> <a href="17623.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry about that, and thanks for reverting the commit.
<br>
<p>Paul mentioned a patch I sent to the ml, and that worked for him.
<br>
The commit was supposed to be a more robust version.
<br>
For example, in rhel7, the deprecated function have been removed, but the
<br>
xrc domains is fine.
<br>
Currently, xrc is not supported as it should.
<br>
<p>It seems rhel 6.5 has the deprecated function, but it is not in the header
<br>
files are missing it among other things.
<br>
<p>I will fix that and post a issue a pr so you can test it on rhel6.5 before
<br>
I commit it.
<br>
<p>I noticed there is no infiniband/verbs.h on a lanl test cluster (the non
<br>
cray one)
<br>
Is it possible to have it installed ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Friday, July 10, 2015, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 10, 2015, at 2:12 AM, Paul Hargrove &lt;phhargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The only &quot;new&quot; (non-cosmetic) problem I observed was the failure to
</span><br>
<span class="quotelev1">&gt; detect &quot;ConnectX XRC support&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; It looks like Gilles and I iterated on that issue until we have
</span><br>
<span class="quotelev1">&gt; something that works now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 'fraid not.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Per
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi-release/pull/384#issuecomment-120412836">https://github.com/open-mpi/ompi-release/pull/384#issuecomment-120412836</a>,
</span><br>
<span class="quotelev1">&gt; the latest commit breaks on RHEL 6.5 systems that do not have MOFED
</span><br>
<span class="quotelev1">&gt; installed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17618.php">http://www.open-mpi.org/community/lists/devel/2015/07/17618.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17620/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17621.php">Ralph Castain: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>Previous message:</strong> <a href="17619.php">Jeff Squyres (jsquyres): "[OMPI devel] Github acting very slow"</a>
<li><strong>In reply to:</strong> <a href="17618.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17621.php">Ralph Castain: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>Reply:</strong> <a href="17621.php">Ralph Castain: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>Reply:</strong> <a href="17623.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
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
