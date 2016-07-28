<?
$subject_val = "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 10:35:35 2014" -->
<!-- isoreceived="20141017143535" -->
<!-- sent="Fri, 17 Oct 2014 09:35:33 -0500" -->
<!-- isosent="20141017143533" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?" -->
<!-- id="871tq6kbm2.fsf_at_jedbrown.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="2BBB0341-2212-4B39-9E59-2E8205992DC4_at_open-mpi.org" -->
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
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-17 10:35:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16063.php">Ralph Castain: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>Previous message:</strong> <a href="16061.php">Adrian Reber: "Re: [OMPI devel] ORTE headers in OPAL source"</a>
<li><strong>In reply to:</strong> <a href="16059.php">Ralph Castain: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16063.php">Ralph Castain: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>Reply:</strong> <a href="16063.php">Ralph Castain: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain &lt;rhc_at_[hidden]&gt; writes:
<br>
<span class="quotelev1">&gt; We go the other direction - all code must be committed to master so it
</span><br>
<span class="quotelev1">&gt; can &#226;&#128;&#156;soak&#226;&#128;&#157; prior to moving to a release branch. 
</span><br>
<p>Maybe we're miscommunicating.  Normal lifecycle for a bug fix is
<br>
<p>&nbsp;&nbsp;# start from oldest maintenance branch to which the fix is relevant
<br>
&nbsp;&nbsp;git checkout -b jed/bug-fix maint
<br>
&nbsp;&nbsp;... fix bug, commit, submit pull request, review, revise if needed
<br>
<p>&nbsp;&nbsp;# [optional] If using 'next' for eager users/testing prior to 'master'
<br>
&nbsp;&nbsp;git checkout next
<br>
&nbsp;&nbsp;git merge jed/bug-fix
<br>
&nbsp;&nbsp;... &quot;eager&quot; users test this bug fix in combination with everything else
<br>
<p>&nbsp;&nbsp;# feature graduates to 'master'
<br>
&nbsp;&nbsp;git checkout master
<br>
&nbsp;&nbsp;git merge jed/bug-fix
<br>
&nbsp;&nbsp;... users of 'master' interact with bug fix, bringing more confidence
<br>
<p>&nbsp;&nbsp;# feature merged to release/maintenance branch
<br>
&nbsp;&nbsp;git checkout maint
<br>
&nbsp;&nbsp;git merge jed/bug-fix
<br>
<p><p>At the end of the day, there is only one commit effecting the change and
<br>
we can easily check who has it.  If someone else needs the fix in their
<br>
development branch, they can get it without side-effects by merging
<br>
jed/bug-fix.  The 'next' branch, which is entirely optional, helps
<br>
further stabilize 'master' - bugs in 'master' *disrupt other developers*
<br>
while bugs in 'next' only disrupt testing.  Here's a diagram:
<br>
<p>&nbsp;&nbsp;<a href="https://docs.google.com/drawings/d/1hvwyCIw4Wq3NoRrPpWfPTriJn5MM2_QkaacAaql8FQE/edit">https://docs.google.com/drawings/d/1hvwyCIw4Wq3NoRrPpWfPTriJn5MM2_QkaacAaql8FQE/edit</a>
<br>
<p>The &quot;merging upward&quot; is about
<br>
<p>&nbsp;&nbsp;git checkout master
<br>
&nbsp;&nbsp;git merge maint
<br>
&nbsp;&nbsp;git checkout next
<br>
&nbsp;&nbsp;git merge master
<br>
<p>These merges rarely contain non-merge commits (the topic branches were
<br>
already merged to 'next' and then 'master'); they just tie up the graph
<br>
so that subsequent merges only contain the &quot;interesting&quot; content.
<br>
<p><p>If instead, your workflow has you committing a bug-fix on 'master', you
<br>
have to rebase/cherry-pick it to get it into a release branch without
<br>
side-effects.  Now your repository has two commits that do the same
<br>
thing.  A workflow should make it easy to get bug-fixes and features to
<br>
different audiences (e.g., release users versus developers) without
<br>
side-effects and without duplication.
<br>
<p><span class="quotelev1">&gt; The &#226;&#128;&#156;upward&#226;&#128;&#157; methodology works fine for stable situations where the
</span><br>
<span class="quotelev1">&gt; master isn&#226;&#128;&#153;t changing much relative to the releases, 
</span><br>
<p>I disagree.  There are many agile projects that merge upward using topic
<br>
branches, as described above.
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16062/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16063.php">Ralph Castain: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>Previous message:</strong> <a href="16061.php">Adrian Reber: "Re: [OMPI devel] ORTE headers in OPAL source"</a>
<li><strong>In reply to:</strong> <a href="16059.php">Ralph Castain: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16063.php">Ralph Castain: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>Reply:</strong> <a href="16063.php">Ralph Castain: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
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
