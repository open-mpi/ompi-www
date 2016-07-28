<?
$subject_val = "Re: [OMPI devel] tm-less tm module";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 10:11:27 2016" -->
<!-- isoreceived="20160125151127" -->
<!-- sent="Mon, 25 Jan 2016 08:11:26 -0700" -->
<!-- isosent="20160125151126" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] tm-less tm module" -->
<!-- id="CAF1Cqj5q1B0kPMuCpqhfyujHyyvFMDzOs372drXxS4jfz=t=_g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="56A56983.5010302_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] tm-less tm module<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-25 10:11:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18506.php">Ralph Castain: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>Previous message:</strong> <a href="18504.php">Gilles Gouaillardet: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>In reply to:</strong> <a href="18497.php">Gilles Gouaillardet: "[OMPI devel] tm-less tm module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18508.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Reply:</strong> <a href="18508.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles
<br>
<p>I would prefer improving the faq rather than adding yet more complexity in
<br>
this area.  The way things go you would add this feature then someone else
<br>
with a different use case would complain we had broken something for them.
<br>
Then we would add another mca param to disable the new tm less module etc.
<br>
<p>I think the faq should be more explicit about configury options required
<br>
for orte/resource manager integration feature to work.
<br>
<p>Howard
<br>
----------
<br>
<p>sent from my smart phonr so no good type.
<br>
<p>Howard
<br>
On Jan 24, 2016 5:17 PM, &quot;Gilles Gouaillardet&quot; &lt;gilles_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; there was a question about mtt on the mtt mailing list
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/mtt-users/2016/01/0840.php">http://www.open-mpi.org/community/lists/mtt-users/2016/01/0840.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; after a few emails (some offline) it seems that was a configuration issue.
</span><br>
<span class="quotelev1">&gt; the user is running PBSPro and it seems OpenMPI was not configured with
</span><br>
<span class="quotelev1">&gt; the tm module
</span><br>
<span class="quotelev1">&gt; (e.g. tm is not included in the default location, and he did not configure
</span><br>
<span class="quotelev1">&gt; with --with-tm=/.../pbspro)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in this case, the tm module is not built, and when a job runs under PBSPro
</span><br>
<span class="quotelev1">&gt; without any hostfile,
</span><br>
<span class="quotelev1">&gt; the job runs on one node only.
</span><br>
<span class="quotelev1">&gt; in order to make this easier to diagnose, what about always building the
</span><br>
<span class="quotelev1">&gt; tm module :
</span><br>
<span class="quotelev1">&gt; - if tm is found by configury, build the OpenMPI tm modules as usual
</span><br>
<span class="quotelev1">&gt; - if tm is not found by configury, build a dumb module that will issue a
</span><br>
<span class="quotelev1">&gt; warning or abort
</span><br>
<span class="quotelev1">&gt;   if a job is ran under PBS/torque
</span><br>
<span class="quotelev1">&gt;   (e.g. some PBS specific environment variable are defined)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; of course, the spec of this &quot;dumb&quot; module can be improved, for example
</span><br>
<span class="quotelev1">&gt; - add a MCA parameter to disable the warning
</span><br>
<span class="quotelev1">&gt; - issue the warning only if there is more that one node in the job *and*
</span><br>
<span class="quotelev1">&gt; no machinefile nor host list was passed to the mpirun command line
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any thoughts ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18497.php">http://www.open-mpi.org/community/lists/devel/2016/01/18497.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18505/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18506.php">Ralph Castain: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>Previous message:</strong> <a href="18504.php">Gilles Gouaillardet: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>In reply to:</strong> <a href="18497.php">Gilles Gouaillardet: "[OMPI devel] tm-less tm module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18508.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Reply:</strong> <a href="18508.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
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
