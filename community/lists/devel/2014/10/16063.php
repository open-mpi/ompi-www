<?
$subject_val = "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 10:38:15 2014" -->
<!-- isoreceived="20141017143815" -->
<!-- sent="Fri, 17 Oct 2014 07:38:11 -0700" -->
<!-- isosent="20141017143811" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?" -->
<!-- id="C7ED3E7D-7C6E-4521-9D47-E65D509F0E3D_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="871tq6kbm2.fsf_at_jedbrown.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-17 10:38:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16064.php">Ralph Castain: "[OMPI devel] Fwd: Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<li><strong>Previous message:</strong> <a href="16062.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>In reply to:</strong> <a href="16062.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16060.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I hear what you are saying - we just beg to disagree :-)
<br>
<p>As Jeff said, a lot of it is history, but we&#226;&#128;&#153;ve found this method works well for us and we&#226;&#128;&#153;ve chosen to continue it.
<br>
<p><p><span class="quotelev1">&gt; On Oct 17, 2014, at 7:35 AM, Jed Brown &lt;jed_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph Castain &lt;rhc_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev2">&gt;&gt; We go the other direction - all code must be committed to master so it
</span><br>
<span class="quotelev2">&gt;&gt; can &#226;&#128;&#156;soak&#226;&#128;&#157; prior to moving to a release branch. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe we're miscommunicating.  Normal lifecycle for a bug fix is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  # start from oldest maintenance branch to which the fix is relevant
</span><br>
<span class="quotelev1">&gt;  git checkout -b jed/bug-fix maint
</span><br>
<span class="quotelev1">&gt;  ... fix bug, commit, submit pull request, review, revise if needed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  # [optional] If using 'next' for eager users/testing prior to 'master'
</span><br>
<span class="quotelev1">&gt;  git checkout next
</span><br>
<span class="quotelev1">&gt;  git merge jed/bug-fix
</span><br>
<span class="quotelev1">&gt;  ... &quot;eager&quot; users test this bug fix in combination with everything else
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  # feature graduates to 'master'
</span><br>
<span class="quotelev1">&gt;  git checkout master
</span><br>
<span class="quotelev1">&gt;  git merge jed/bug-fix
</span><br>
<span class="quotelev1">&gt;  ... users of 'master' interact with bug fix, bringing more confidence
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  # feature merged to release/maintenance branch
</span><br>
<span class="quotelev1">&gt;  git checkout maint
</span><br>
<span class="quotelev1">&gt;  git merge jed/bug-fix
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At the end of the day, there is only one commit effecting the change and
</span><br>
<span class="quotelev1">&gt; we can easily check who has it.  If someone else needs the fix in their
</span><br>
<span class="quotelev1">&gt; development branch, they can get it without side-effects by merging
</span><br>
<span class="quotelev1">&gt; jed/bug-fix.  The 'next' branch, which is entirely optional, helps
</span><br>
<span class="quotelev1">&gt; further stabilize 'master' - bugs in 'master' *disrupt other developers*
</span><br>
<span class="quotelev1">&gt; while bugs in 'next' only disrupt testing.  Here's a diagram:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  <a href="https://docs.google.com/drawings/d/1hvwyCIw4Wq3NoRrPpWfPTriJn5MM2_QkaacAaql8FQE/edit">https://docs.google.com/drawings/d/1hvwyCIw4Wq3NoRrPpWfPTriJn5MM2_QkaacAaql8FQE/edit</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The &quot;merging upward&quot; is about
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  git checkout master
</span><br>
<span class="quotelev1">&gt;  git merge maint
</span><br>
<span class="quotelev1">&gt;  git checkout next
</span><br>
<span class="quotelev1">&gt;  git merge master
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These merges rarely contain non-merge commits (the topic branches were
</span><br>
<span class="quotelev1">&gt; already merged to 'next' and then 'master'); they just tie up the graph
</span><br>
<span class="quotelev1">&gt; so that subsequent merges only contain the &quot;interesting&quot; content.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If instead, your workflow has you committing a bug-fix on 'master', you
</span><br>
<span class="quotelev1">&gt; have to rebase/cherry-pick it to get it into a release branch without
</span><br>
<span class="quotelev1">&gt; side-effects.  Now your repository has two commits that do the same
</span><br>
<span class="quotelev1">&gt; thing.  A workflow should make it easy to get bug-fixes and features to
</span><br>
<span class="quotelev1">&gt; different audiences (e.g., release users versus developers) without
</span><br>
<span class="quotelev1">&gt; side-effects and without duplication.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The &#226;&#128;&#156;upward&#226;&#128;&#157; methodology works fine for stable situations where the
</span><br>
<span class="quotelev2">&gt;&gt; master isn&#226;&#128;&#153;t changing much relative to the releases, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I disagree.  There are many agile projects that merge upward using topic
</span><br>
<span class="quotelev1">&gt; branches, as described above.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16064.php">Ralph Castain: "[OMPI devel] Fwd: Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<li><strong>Previous message:</strong> <a href="16062.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>In reply to:</strong> <a href="16062.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16060.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
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
