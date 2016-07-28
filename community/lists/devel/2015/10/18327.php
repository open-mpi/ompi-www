<?
$subject_val = "Re: [OMPI devel] Open MPI autogen.pl in tarball";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 19:07:52 2015" -->
<!-- isoreceived="20151030230752" -->
<!-- sent="Sat, 31 Oct 2015 08:07:49 +0900" -->
<!-- isosent="20151030230749" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI autogen.pl in tarball" -->
<!-- id="CAAkFZ5uJpvVqabnC5TFBYC0j8_==9PziuOLfFzpnam1Xun3_8w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="8D1CC876-3A79-4932-BD49-87CAFC7884DE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI autogen.pl in tarball<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-30 19:07:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18328.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Previous message:</strong> <a href="18326.php">Paul Hargrove: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>In reply to:</strong> <a href="18325.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18326.php">Paul Hargrove: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>OK, will do
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Saturday, October 31, 2015, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 30, 2015, at 12:09 PM, Barrett, Brian &lt;bbarrett_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, I do like Gilles' suggestion to make autogen.pl be a little
</span><br>
<span class="quotelev1">&gt; smarter.  If I recall correctly (and it's been a couple years now), I think
</span><br>
<span class="quotelev1">&gt; that's what GASNet does with their bootstrap script.  Seems like everyone
</span><br>
<span class="quotelev1">&gt; gets what they want :).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; - an alternative to removing autogen.pl (from the tarball) is to have
</span><br>
<span class="quotelev1">&gt; autogen.pl
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; test repo_rev and/or tarball_version from VERSION so we can detect if
</span><br>
<span class="quotelev1">&gt; autogen.pl is ran
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; from a tarball. in that case, we could fail with a message such as
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &quot;you might not want to do that, but if you really do, re-run
</span><br>
<span class="quotelev1">&gt; autogen.pl with the --force parameter&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; That's a good idea.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles -- want to submit a PR?
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18325.php">http://www.open-mpi.org/community/lists/devel/2015/10/18325.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18327/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18328.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Previous message:</strong> <a href="18326.php">Paul Hargrove: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>In reply to:</strong> <a href="18325.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18326.php">Paul Hargrove: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
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
