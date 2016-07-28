<?
$subject_val = "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 06:29:14 2014" -->
<!-- isoreceived="20141003102914" -->
<!-- sent="Fri, 3 Oct 2014 10:29:13 +0000" -->
<!-- isosent="20141003102913" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business" -->
<!-- id="0AB25EB9-F696-4C46-8388-1A9C9E34364D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="542E190C.8010602_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-03 06:29:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15990.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>Previous message:</strong> <a href="15988.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>In reply to:</strong> <a href="15987.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15993.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>Reply:</strong> <a href="15993.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 2, 2014, at 11:33 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; the most painful part is probably to manually retrieve the git commit id
</span><br>
<span class="quotelev1">&gt; of a given svn commit id
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; git log master, and then search rxxxx
</span><br>
<span class="quotelev1">&gt; /* each commit log has a line like :
</span><br>
<span class="quotelev1">&gt; This commit was SVN rxxxxx
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<p>I think you're suggesting &quot;git log | grep SVN rxxx&quot;, right?
<br>
<p><span class="quotelev1">&gt; and once you got (all) the git commits id of a given CMR, you can
</span><br>
<span class="quotelev1">&gt; cherry-pick them, and push and issue the PR
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* i did not check whether cherry-pick automatically create/remove files */
</span><br>
<p>It does.  See <a href="https://github.com/open-mpi/ompi/wiki/InitialGitSetup#workflow-for-cherry-pick-model">https://github.com/open-mpi/ompi/wiki/InitialGitSetup#workflow-for-cherry-pick-model</a> for 2 examples using cherry pick.
<br>
<p>That being said, this just be an additional complication for dealing with these final CMRs.
<br>
<p>One suggestion: if you use &quot;git cherry-pick ...&quot;, PLEASE use the &quot;-x&quot; option so that it records in the commit message that this commit is a cherry pick from the source commit on &quot;master&quot;.
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
<li><strong>Next message:</strong> <a href="15990.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>Previous message:</strong> <a href="15988.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>In reply to:</strong> <a href="15987.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15993.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>Reply:</strong> <a href="15993.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
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
