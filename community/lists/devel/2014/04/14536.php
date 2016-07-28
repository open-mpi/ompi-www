<?
$subject_val = "Re: [OMPI devel] Update SLURM FAQ entry?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 15 21:52:49 2014" -->
<!-- isoreceived="20140416015249" -->
<!-- sent="Wed, 16 Apr 2014 09:52:48 +0800" -->
<!-- isosent="20140416015248" -->
<!-- name="Anthony Alba" -->
<!-- email="ascanio.alba7_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Update SLURM FAQ entry?" -->
<!-- id="CADkWibfUJuEgXV2hJLVYD_cpAx9x2g3eGP_3LEmav_ZYWFJ_jQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2D7D19C9-F60E-4856-BF34-CF9D1276474A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Update SLURM FAQ entry?<br>
<strong>From:</strong> Anthony Alba (<em>ascanio.alba7_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-15 21:52:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14537.php">Jeff Squyres (jsquyres): "[OMPI devel] 1-question developer poll"</a>
<li><strong>Previous message:</strong> <a href="14535.php">Ralph Castain: "Re: [OMPI devel] .gitignore_global and .hgignore_global"</a>
<li><strong>In reply to:</strong> <a href="14528.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update SLURM FAQ entry?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14541.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update SLURM FAQ entry?"</a>
<li><strong>Reply:</strong> <a href="14541.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update SLURM FAQ entry?"</a>
<li><strong>Reply:</strong> <a href="14545.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update SLURM FAQ entry?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sure - how about this:
<br>
<p><p>2.
<br>
<p>Yes, if you have configured OMPI --with-pmi=foo, where foo is the path to
<br>
the directory where pmi.h/pmi2.h is located. Slurm (&gt; 2.6, &gt; 14.03)
<br>
installs PMI-2 support by default.
<br>
<p><p>Older versions of Slurm install PMI-1 by default. If you desire PMI-2,
<br>
Slurm requires that you manually install that support. When the --with-pmi
<br>
option is given, OMPI will automatically determine if PMI-2 support was
<br>
built and use it in place of PMI-1.
<br>
<p><p>4. Any issues with Slurm 2.6.3, 14.03?
<br>
<p>Yes. The Slurm 2.6.3, 14.03 releases have a bug in their PMI-2 support.
<br>
<p>For the slurm-2.6 branch,  it is recommended to use the latest version
<br>
(2.6.9 as of 2014/4) which works with pmi2.
<br>
<p>For the slurm-14.03 branch, the fix will be in  14.03.1.
<br>
<p><p><p><p><p>On Tue, Apr 15, 2014 at 9:46 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Would you mind sending us updated text?  I don't know if any of us follows
</span><br>
<span class="quotelev1">&gt; the SLURM releases closely...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (I assume you're referring specifically to question 4, right?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 11, 2014, at 11:42 PM, Anthony Alba &lt;ascanio.alba7_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is it time to update the SLURM FAQ entry?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. SLURM 2.6.9 and 14.03 install pmi2 by default. (At least with the
</span><br>
<span class="quotelev1">&gt; default RPM spec file).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. 14.03.0 is also buggy wrt to pmi2.
</span><br>
<span class="quotelev2">&gt; &gt; It is fixed in 14.03 tip and soon 14.03.1 release.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - Anthony
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14499.php">http://www.open-mpi.org/community/lists/devel/2014/04/14499.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14528.php">http://www.open-mpi.org/community/lists/devel/2014/04/14528.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14536/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14537.php">Jeff Squyres (jsquyres): "[OMPI devel] 1-question developer poll"</a>
<li><strong>Previous message:</strong> <a href="14535.php">Ralph Castain: "Re: [OMPI devel] .gitignore_global and .hgignore_global"</a>
<li><strong>In reply to:</strong> <a href="14528.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update SLURM FAQ entry?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14541.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update SLURM FAQ entry?"</a>
<li><strong>Reply:</strong> <a href="14541.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update SLURM FAQ entry?"</a>
<li><strong>Reply:</strong> <a href="14545.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update SLURM FAQ entry?"</a>
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
