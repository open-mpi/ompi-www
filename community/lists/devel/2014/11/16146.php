<?
$subject_val = "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi	branch master updated.	dev-198-g68bec0a";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 11:29:46 2014" -->
<!-- isoreceived="20141103162946" -->
<!-- sent="Mon, 3 Nov 2014 16:29:44 +0000" -->
<!-- isosent="20141103162944" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi	branch master updated.	dev-198-g68bec0a" -->
<!-- id="0271D066-2179-4889-ACAF-E986540FC388_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="usjwls6wepd1trb52gkdi42m.1414830535661_at_email.android.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi	branch master updated.	dev-198-g68bec0a<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-03 11:29:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16147.php">Jed Brown: "Re: [OMPI devel] OMPI devel] [OMPI commits] Git:	open-mpi/ompi	branch master updated.	dev-198-g68bec0a"</a>
<li><strong>Previous message:</strong> <a href="16145.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>In reply to:</strong> <a href="16139.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-198-g68bec0a"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16147.php">Jed Brown: "Re: [OMPI devel] OMPI devel] [OMPI commits] Git:	open-mpi/ompi	branch master updated.	dev-198-g68bec0a"</a>
<li><strong>Reply:</strong> <a href="16147.php">Jed Brown: "Re: [OMPI devel] OMPI devel] [OMPI commits] Git:	open-mpi/ompi	branch master updated.	dev-198-g68bec0a"</a>
<li><strong>Reply:</strong> <a href="16156.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-198-g68bec0a"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 1, 2014, at 3:44 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Dave,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am sorry about that, the doc is not to be blamed here.
</span><br>
<span class="quotelev1">&gt; I usually do pull/commit/push in a row to avoid this kind of things but i screwed up this time ...
</span><br>
<span class="quotelev1">&gt; I cannot remember if i did commit/pull/push or if i simply forgot to pull
</span><br>
<p>Most of the time a &quot;pull&quot; won't succeed if you have uncommitted modifications your tree, so I'm not sure how pull/commit/push would actually work for you.  Do you stash/unstash in the middle there?  Or are you saying you make all of your changes between &quot;pull&quot; and &quot;commit&quot;?  If so, there's always a race there that you might occasionally need to resolve with &quot;git rebase&quot; or &quot;git pull --rebase&quot; anyway.
<br>
<p><span class="quotelev1">&gt; btw, is there a push option to abort if that would make github history non linear ?
</span><br>
<p>No, not really.  There are some options to &quot;pull&quot; to prevent you from creating a merge commit, but the fix when you encounter that situation would simply be to rebase in some fashion, so you might as well just do that every time.
<br>
<p>The best thing to do is to just try to use &quot;git pull --rebase&quot; for any topic work (i.e., don't use a bare &quot;git pull&quot; unless you know that you need to perform a merge).  A few other alternatives if you don't like that for some reason:
<br>
<p>1. Set your &quot;pull&quot; default to perform a rebase.  I don't recommend it because this can lead to confusion if you work on multiple systems and you are not 100% consistent about setting this behavior.  But here's how to do it: <a href="http://stevenharman.net/git-pull-with-automatic-rebase">http://stevenharman.net/git-pull-with-automatic-rebase</a>
<br>
<p>2. &quot;git pull --rebase&quot; can always be substituted by &quot;git fetch ; git rebase&quot;.  You could change your workflow to avoid the &quot;pull&quot; command altogether until it all makes more sense to you.  Similarly, &quot;git pull&quot; (which means &quot;git pull --no-rebase&quot; by default) can always be substituted by &quot;git fetch ; git merge&quot;.
<br>
<p>3. View the commit graph before pushing to make sure you're pushing the history you think you should be.  A helpful command for this (which you can alias if desired) is:
<br>
<p>git log --graph --oneline --decorate HEAD '@{u}'
<br>
<p>That will show the commit graph that can be traced back from your current branch and its tracked upstream branch.  If you see a merge commit where you didn't expect one, fix the history before pushing.  If you don't know how to fix it, ask the list or google around a bit.
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16147.php">Jed Brown: "Re: [OMPI devel] OMPI devel] [OMPI commits] Git:	open-mpi/ompi	branch master updated.	dev-198-g68bec0a"</a>
<li><strong>Previous message:</strong> <a href="16145.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>In reply to:</strong> <a href="16139.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-198-g68bec0a"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16147.php">Jed Brown: "Re: [OMPI devel] OMPI devel] [OMPI commits] Git:	open-mpi/ompi	branch master updated.	dev-198-g68bec0a"</a>
<li><strong>Reply:</strong> <a href="16147.php">Jed Brown: "Re: [OMPI devel] OMPI devel] [OMPI commits] Git:	open-mpi/ompi	branch master updated.	dev-198-g68bec0a"</a>
<li><strong>Reply:</strong> <a href="16156.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-198-g68bec0a"</a>
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
