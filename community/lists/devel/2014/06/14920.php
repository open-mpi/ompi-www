<?
$subject_val = "Re: [OMPI devel] RFC: refactor PMI support";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  1 02:43:40 2014" -->
<!-- isoreceived="20140601064340" -->
<!-- sent="Sun, 1 Jun 2014 09:43:38 +0300" -->
<!-- isosent="20140601064338" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: refactor PMI support" -->
<!-- id="CAAO1Kya0+1WwJPp7VTWFPBuFJ=HNLsmLp5woKk3McQwS_w2rdg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAJ2Qj5oX0LvrnJW=WBMbRY_HEkvp-TZ4USqQC5Avc=MGqPsVoQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: refactor PMI support<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-01 02:43:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14921.php">Artem Polyakov: "Re: [OMPI devel] RFC: refactor PMI support"</a>
<li><strong>Previous message:</strong> <a href="14919.php">Artem Polyakov: "Re: [OMPI devel] RFC: refactor PMI support"</a>
<li><strong>In reply to:</strong> <a href="14919.php">Artem Polyakov: "Re: [OMPI devel] RFC: refactor PMI support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14921.php">Artem Polyakov: "Re: [OMPI devel] RFC: refactor PMI support"</a>
<li><strong>Reply:</strong> <a href="14921.php">Artem Polyakov: "Re: [OMPI devel] RFC: refactor PMI support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
applied here: <a href="https://svn.open-mpi.org/trac/ompi/changeset/31909">https://svn.open-mpi.org/trac/ompi/changeset/31909</a>
<br>
<p><p>On Sun, Jun 1, 2014 at 9:15 AM, Artem Polyakov &lt;artpol84_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi, all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph commited the code that was developed for this RFC (r31908). This
</span><br>
<span class="quotelev1">&gt; commit will brake PMI1 support. In case of hurry - apply attached patch.
</span><br>
<span class="quotelev1">&gt; Ralph will apply it once he'll be online. I have no rights for that yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2014-05-19 21:18 GMT+07:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHAT:    Refactor the PMI support into something more flexible
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHY:      We currently support both PMI-1 and PMI-2. However, a number of
</span><br>
<span class="quotelev2">&gt;&gt; PMI-2 implementations
</span><br>
<span class="quotelev2">&gt;&gt;                (specifically, in several Slurm releases) have bugs in
</span><br>
<span class="quotelev2">&gt;&gt; them that cause significant problems.
</span><br>
<span class="quotelev2">&gt;&gt;                In addition, we have new PMI implementations coming along
</span><br>
<span class="quotelev2">&gt;&gt; that we would also like to support.
</span><br>
<span class="quotelev2">&gt;&gt;                The current support in OMPI is spread across multiple
</span><br>
<span class="quotelev2">&gt;&gt; locations, each of which must track which
</span><br>
<span class="quotelev2">&gt;&gt;                PMI version is to be used. Centralizing the PMI
</span><br>
<span class="quotelev2">&gt;&gt; integration allows us to avoid that duplication.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHERE:  <a href="https://bitbucket.org/rhc/ompi-pmi">https://bitbucket.org/rhc/ompi-pmi</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT:  June 3rd, after the telecon
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14827.php">http://www.open-mpi.org/community/lists/devel/2014/05/14827.php</a>
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
<span class="quotelev1">&gt; &#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
</span><br>
<span class="quotelev1">&gt; Best regards, Artem Y. Polyakov
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
<span class="quotelev1">&gt; Searchable archives:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/06/index.php">http://www.open-mpi.org/community/lists/devel/2014/06/index.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14920/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14921.php">Artem Polyakov: "Re: [OMPI devel] RFC: refactor PMI support"</a>
<li><strong>Previous message:</strong> <a href="14919.php">Artem Polyakov: "Re: [OMPI devel] RFC: refactor PMI support"</a>
<li><strong>In reply to:</strong> <a href="14919.php">Artem Polyakov: "Re: [OMPI devel] RFC: refactor PMI support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14921.php">Artem Polyakov: "Re: [OMPI devel] RFC: refactor PMI support"</a>
<li><strong>Reply:</strong> <a href="14921.php">Artem Polyakov: "Re: [OMPI devel] RFC: refactor PMI support"</a>
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
