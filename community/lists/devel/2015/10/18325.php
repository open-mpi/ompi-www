<?
$subject_val = "Re: [OMPI devel] Open MPI autogen.pl in tarball";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 16:27:40 2015" -->
<!-- isoreceived="20151030202740" -->
<!-- sent="Fri, 30 Oct 2015 20:27:03 +0000" -->
<!-- isosent="20151030202703" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI autogen.pl in tarball" -->
<!-- id="8D1CC876-3A79-4932-BD49-87CAFC7884DE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2B17DFB6-787E-4C84-8EC8-B3ED2406E65C_at_amazon.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-30 16:27:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18326.php">Paul Hargrove: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>Previous message:</strong> <a href="18324.php">Barrett, Brian: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>In reply to:</strong> <a href="18324.php">Barrett, Brian: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18327.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>Reply:</strong> <a href="18327.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 30, 2015, at 12:09 PM, Barrett, Brian &lt;bbarrett_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I do like Gilles' suggestion to make autogen.pl be a little smarter.  If I recall correctly (and it's been a couple years now), I think that's what GASNet does with their bootstrap script.  Seems like everyone gets what they want :).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - an alternative to removing autogen.pl (from the tarball) is to have autogen.pl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test repo_rev and/or tarball_version from VERSION so we can detect if autogen.pl is ran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from a tarball. in that case, we could fail with a message such as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;you might not want to do that, but if you really do, re-run autogen.pl with the --force parameter&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That's a good idea.
</span><br>
<p>Gilles -- want to submit a PR?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18326.php">Paul Hargrove: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>Previous message:</strong> <a href="18324.php">Barrett, Brian: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>In reply to:</strong> <a href="18324.php">Barrett, Brian: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18327.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>Reply:</strong> <a href="18327.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
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
