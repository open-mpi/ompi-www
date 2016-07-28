<?
$subject_val = "Re: [OMPI devel] RFC: refactor PMI support";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  1 02:15:55 2014" -->
<!-- isoreceived="20140601061555" -->
<!-- sent="Sun, 1 Jun 2014 13:15:54 +0700" -->
<!-- isosent="20140601061554" -->
<!-- name="Artem Polyakov" -->
<!-- email="artpol84_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: refactor PMI support" -->
<!-- id="CAJ2Qj5oX0LvrnJW=WBMbRY_HEkvp-TZ4USqQC5Avc=MGqPsVoQ_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F1EB864D-6E66-4A9F-85F9-7F6B810D55E1_at_open-mpi.org" -->
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
<strong>From:</strong> Artem Polyakov (<em>artpol84_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-01 02:15:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14920.php">Mike Dubman: "Re: [OMPI devel] RFC: refactor PMI support"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14918.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [External] Re: Open	MPI	1.6.5	opal_paffinity_base_get_physical_socket_id"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14827.php">Ralph Castain: "[OMPI devel] RFC: refactor PMI support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14920.php">Mike Dubman: "Re: [OMPI devel] RFC: refactor PMI support"</a>
<li><strong>Reply:</strong> <a href="14920.php">Mike Dubman: "Re: [OMPI devel] RFC: refactor PMI support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, all.
<br>
<p>Ralph commited the code that was developed for this RFC (r31908). This
<br>
commit will brake PMI1 support. In case of hurry - apply attached patch.
<br>
Ralph will apply it once he'll be online. I have no rights for that yet.
<br>
<p><p>2014-05-19 21:18 GMT+07:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; WHAT:    Refactor the PMI support into something more flexible
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY:      We currently support both PMI-1 and PMI-2. However, a number of
</span><br>
<span class="quotelev1">&gt; PMI-2 implementations
</span><br>
<span class="quotelev1">&gt;                (specifically, in several Slurm releases) have bugs in them
</span><br>
<span class="quotelev1">&gt; that cause significant problems.
</span><br>
<span class="quotelev1">&gt;                In addition, we have new PMI implementations coming along
</span><br>
<span class="quotelev1">&gt; that we would also like to support.
</span><br>
<span class="quotelev1">&gt;                The current support in OMPI is spread across multiple
</span><br>
<span class="quotelev1">&gt; locations, each of which must track which
</span><br>
<span class="quotelev1">&gt;                PMI version is to be used. Centralizing the PMI integration
</span><br>
<span class="quotelev1">&gt; allows us to avoid that duplication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHERE:  <a href="https://bitbucket.org/rhc/ompi-pmi">https://bitbucket.org/rhc/ompi-pmi</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIMEOUT:  June 3rd, after the telecon
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14827.php">http://www.open-mpi.org/community/lists/devel/2014/05/14827.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
&#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
Best regards, Artem Y. Polyakov

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14919/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14919/pmi_refactor.patch">pmi_refactor.patch</a>
</ul>
<!-- attachment="pmi_refactor.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14920.php">Mike Dubman: "Re: [OMPI devel] RFC: refactor PMI support"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14918.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [External] Re: Open	MPI	1.6.5	opal_paffinity_base_get_physical_socket_id"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14827.php">Ralph Castain: "[OMPI devel] RFC: refactor PMI support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14920.php">Mike Dubman: "Re: [OMPI devel] RFC: refactor PMI support"</a>
<li><strong>Reply:</strong> <a href="14920.php">Mike Dubman: "Re: [OMPI devel] RFC: refactor PMI support"</a>
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
