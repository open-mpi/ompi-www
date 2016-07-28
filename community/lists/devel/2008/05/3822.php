<?
$subject_val = "Re: [OMPI devel] OMPI Mercurial read-only mirror";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May  4 14:50:56 2008" -->
<!-- isoreceived="20080504185056" -->
<!-- sent="Sun, 04 May 2008 11:50:47 -0700" -->
<!-- isosent="20080504185047" -->
<!-- name="Roland Dreier" -->
<!-- email="rdreier_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI Mercurial read-only mirror" -->
<!-- id="ada63tt3nug.fsf_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="481C4B2B.5010807_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI Mercurial read-only mirror<br>
<strong>From:</strong> Roland Dreier (<em>rdreier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-04 14:50:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3823.php">Paul H. Hargrove: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Previous message:</strong> <a href="3821.php">Brian Barrett: "Re: [OMPI devel] undefined references forrdma_get_peer_addr	&amp;	rdma_get_local_addr"</a>
<li><strong>In reply to:</strong> <a href="3807.php">Terry Dontje: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3825.php">Terry Dontje: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<li><strong>Reply:</strong> <a href="3825.php">Terry Dontje: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev3"> &gt; &gt;  &gt; Can I make a /tmp branch from the hg read-only branch that is not tied 
</span><br>
<span class="quotelev3"> &gt; &gt;  &gt; to the svn /tmp branches.
</span><br>
<p><span class="quotelev2"> &gt; &gt; Why do you want to do that?
</span><br>
<span class="quotelev2"> &gt; &gt;
</span><br>
<span class="quotelev2"> &gt; &gt; Mercurial is a fully distributed system, so you could just start
</span><br>
<span class="quotelev2"> &gt; &gt; committing to one of your local copies of the repository, and I can't
</span><br>
<span class="quotelev2"> &gt; &gt; see anything missing that a /tmp branch would give you.
</span><br>
<p><span class="quotelev1"> &gt; Same reason you do an SVN tmp branch.  So others (outside of my 
</span><br>
<span class="quotelev1"> &gt; employer's WAN) can actually clone the branch and try it out before you 
</span><br>
<span class="quotelev1"> &gt; push it back to the repository.
</span><br>
<p>Mercurial is a fully distributed system.  So instead of thinking of /tmp
<br>
branch, you should think of publishing your repository, which has your
<br>
commits in it.  As I understand it, open-mpi.org is not set up for
<br>
publishing other repositories yet, but it is quite easy to set up a
<br>
mercurial server; there are also several places that will host one for
<br>
you: <a href="http://www.selenic.com/mercurial/wiki/index.cgi/MercurialHosting">http://www.selenic.com/mercurial/wiki/index.cgi/MercurialHosting</a>
<br>
<p>&nbsp;- R.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3823.php">Paul H. Hargrove: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Previous message:</strong> <a href="3821.php">Brian Barrett: "Re: [OMPI devel] undefined references forrdma_get_peer_addr	&amp;	rdma_get_local_addr"</a>
<li><strong>In reply to:</strong> <a href="3807.php">Terry Dontje: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3825.php">Terry Dontje: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<li><strong>Reply:</strong> <a href="3825.php">Terry Dontje: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
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
