<?
$subject_val = "Re: [OMPI devel] 1.8.7rc1 testing results";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 10 11:01:32 2015" -->
<!-- isoreceived="20150710150132" -->
<!-- sent="Sat, 11 Jul 2015 00:01:29 +0900" -->
<!-- isosent="20150710150129" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.7rc1 testing results" -->
<!-- id="CAAkFZ5tbqoNB9pUGW4RnFtS7CVuAz5dQtaAK5AkvHsbQNhL8aw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="A3B717D2-29C4-44EA-8D7E-A6BA2E4B27FD_at_open-mpi.org" -->
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
<strong>Date:</strong> 2015-07-10 11:01:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17623.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>Previous message:</strong> <a href="17621.php">Ralph Castain: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>In reply to:</strong> <a href="17621.php">Ralph Castain: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17623.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>(Some) things got broken when adding support for XRC domains / OFED 3.12.
<br>
In 1.8.4 there is no XRC support with OFED 3.12
<br>
As far as I am concerned, reverting opening btl to 1.8.4 is not a
<br>
good option.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Friday, July 10, 2015, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Given that 1.8. was working correctly, why don&#226;&#128;&#153;t we just revert the config
</span><br>
<span class="quotelev1">&gt; in question back to the 1.8.4 version? Why was it changed in the first
</span><br>
<span class="quotelev1">&gt; place? Does anyone know what problem someone was trying to solve?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 10, 2015, at 7:33 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles.gouaillardet_at_[hidden]');&gt;&gt; wrote:
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
<span class="quotelev1">&gt; For example, in rhel7, the deprecated function have been removed, but the
</span><br>
<span class="quotelev1">&gt; xrc domains is fine.
</span><br>
<span class="quotelev1">&gt; Currently, xrc is not supported as it should.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems rhel 6.5 has the deprecated function, but it is not in the header
</span><br>
<span class="quotelev1">&gt; files are missing it among other things.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will fix that and post a issue a pr so you can test it on rhel6.5 before
</span><br>
<span class="quotelev1">&gt; I commit it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I noticed there is no infiniband/verbs.h on a lanl test cluster (the non
</span><br>
<span class="quotelev1">&gt; cray one)
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
<span class="quotelev1">&gt; On Friday, July 10, 2015, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','jsquyres_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 10, 2015, at 2:12 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The only &quot;new&quot; (non-cosmetic) problem I observed was the failure to
</span><br>
<span class="quotelev2">&gt;&gt; detect &quot;ConnectX XRC support&quot;.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; It looks like Gilles and I iterated on that issue until we have
</span><br>
<span class="quotelev2">&gt;&gt; something that works now.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 'fraid not.  :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Per
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/open-mpi/ompi-release/pull/384#issuecomment-120412836">https://github.com/open-mpi/ompi-release/pull/384#issuecomment-120412836</a>,
</span><br>
<span class="quotelev2">&gt;&gt; the latest commit breaks on RHEL 6.5 systems that do not have MOFED
</span><br>
<span class="quotelev2">&gt;&gt; installed.
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17618.php">http://www.open-mpi.org/community/lists/devel/2015/07/17618.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17620.php">http://www.open-mpi.org/community/lists/devel/2015/07/17620.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17621.php">http://www.open-mpi.org/community/lists/devel/2015/07/17621.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17622/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17623.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>Previous message:</strong> <a href="17621.php">Ralph Castain: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>In reply to:</strong> <a href="17621.php">Ralph Castain: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17623.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
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
