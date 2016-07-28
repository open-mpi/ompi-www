<?
$subject_val = "Re: [OMPI devel] cosmetic misleading mpirun error message";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 25 21:10:42 2015" -->
<!-- isoreceived="20150826011042" -->
<!-- sent="Wed, 26 Aug 2015 10:10:41 +0900" -->
<!-- isosent="20150826011041" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] cosmetic misleading mpirun error message" -->
<!-- id="CAAkFZ5vkh2T5ZBSMd_pP1O0FQhXvpj+xtxNB=t_mSbDnKgRYww_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="9D8D7D3A-87D0-439F-BE30-B0043023743F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] cosmetic misleading mpirun error message<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-25 21:10:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17859.php">Paul Hargrove: "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>Previous message:</strong> <a href="17857.php">Gilles Gouaillardet: "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>In reply to:</strong> <a href="17855.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] cosmetic misleading mpirun error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17865.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] cosmetic misleading mpirun error message"</a>
<li><strong>Reply:</strong> <a href="17865.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] cosmetic misleading mpirun error message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
would it be easier if the option was --host instead of -host ?
<br>
I guess changing the cli is not an option for the v1.x series, so what
<br>
about adding the -hosts option (alias to -host option) ?
<br>
I made the same mistake a few times before, adding a s to hosts looks more
<br>
intuitive for me.
<br>
my 0.02 US$
<br>
<p>Gilles
<br>
<p>On Wednesday, August 26, 2015, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Fair point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know if there's an easy way to fix that, though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 25, 2015, at 6:01 PM, Cabral, Matias A &lt;matias.a.cabral_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Playing with the 1.10.0 (just released) build I found a cosmetic
</span><br>
<span class="quotelev1">&gt; misleading error message in mpirun. If by mistake you type -hosts (with an
</span><br>
<span class="quotelev1">&gt; extra  &#226;&#128;&#156;s&#226;&#128;&#157;), the error message complains about an actually not being used.
</span><br>
<span class="quotelev1">&gt; Typing the parameters correctly fixes the issue J
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; m&gt; mpirun --allow-run-as-root -hosts m7,m8 -np 2  osu_latency
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun: Error: unknown option &quot;-o&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Type 'mpirun --help' for usage.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _MAC
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17854.php">http://www.open-mpi.org/community/lists/devel/2015/08/17854.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17855.php">http://www.open-mpi.org/community/lists/devel/2015/08/17855.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17858/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17859.php">Paul Hargrove: "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>Previous message:</strong> <a href="17857.php">Gilles Gouaillardet: "Re: [OMPI devel] mca_mtl_psm and java"</a>
<li><strong>In reply to:</strong> <a href="17855.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] cosmetic misleading mpirun error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17865.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] cosmetic misleading mpirun error message"</a>
<li><strong>Reply:</strong> <a href="17865.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] cosmetic misleading mpirun error message"</a>
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
