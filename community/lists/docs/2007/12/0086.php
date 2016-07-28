<?
$subject_val = "Re: [OMPI docs] Defining an Authoring Environment";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 18 16:35:56 2007" -->
<!-- isoreceived="20071218213556" -->
<!-- sent="Tue, 18 Dec 2007 13:35:41 -0800" -->
<!-- isosent="20071218213541" -->
<!-- name="Richard.Friedman_at_[hidden]" -->
<!-- email="Richard.Friedman_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] Defining an Authoring Environment" -->
<!-- id="47683D2D.7050902_at_sun.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="185C902E-3EBF-4ECE-B402-011DBC5085E4_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI docs] Defining an Authoring Environment<br>
<strong>From:</strong> <a href="mailto:Richard.Friedman_at_[hidden]?Subject=Re:%20[OMPI%20docs]%20Defining%20an%20Authoring%20Environment"><em>Richard.Friedman_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-12-18 16:35:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0087.php">Jeff Squyres: "Re: [OMPI docs] Defining an Authoring Environment"</a>
<li><strong>Previous message:</strong> <a href="0085.php">Jeff Squyres: "Re: [OMPI docs] Defining an Authoring Environment"</a>
<li><strong>In reply to:</strong> <a href="0085.php">Jeff Squyres: "Re: [OMPI docs] Defining an Authoring Environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0087.php">Jeff Squyres: "Re: [OMPI docs] Defining an Authoring Environment"</a>
<li><strong>Reply:</strong> <a href="0087.php">Jeff Squyres: "Re: [OMPI docs] Defining an Authoring Environment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Sorry; I missed this post.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SVN can handle any type of file.  It works best with text-based files 
</span><br>
<span class="quotelev1">&gt; (to capture diffs between revisions), but it'll work just fine with 
</span><br>
<span class="quotelev1">&gt; binary files, too.  You'll need to be careful between revisions -- SVN 
</span><br>
<span class="quotelev1">&gt; won't be able to integrate changes from two different sources.  E.g.:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - foo.odt is in the repository at r1
</span><br>
<span class="quotelev1">&gt; - Bob makes a change to foo.odt and commits the change at r2
</span><br>
<span class="quotelev1">&gt; - Alice makes a change to foo.odt *r1* and tries to commit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alice's change will not be able to be merged back in because foo.odt 
</span><br>
<span class="quotelev1">&gt; is a binary format and SVN doesn't know how to merge it in.  SVN in 
</span><br>
<span class="quotelev1">&gt; this case will detect the discrepancy and tell Alice that she can't 
</span><br>
<span class="quotelev1">&gt; check in -- there's been a conflict that a human needs to resolve.  So 
</span><br>
<span class="quotelev1">&gt; Alice will need to get the new foo.odt at r2 and manually integrate 
</span><br>
<span class="quotelev1">&gt; her changes in.  Then she'll be able to commit it back to the repository.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
So I assume the workflow for Alice must be something like:
<br>
<p>1. grab the latest revision (the one that includes Bob's changes)
<br>
2. edit that revision
<br>
3. commit it.
<br>
<p>Is there no way to lock a revision while you're working on it (like 
<br>
SCCS) so no one can commit while you are actively editing that content?
<br>
<p>What I think we'll have to implement is a verbal agreement that only one 
<br>
person work on a chapter at a time to avoid such clashes.
<br>
<p>Since the team is pretty small, I don't see that as a problem.
<br>
&lt;R&gt;
<br>
<p><!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0087.php">Jeff Squyres: "Re: [OMPI docs] Defining an Authoring Environment"</a>
<li><strong>Previous message:</strong> <a href="0085.php">Jeff Squyres: "Re: [OMPI docs] Defining an Authoring Environment"</a>
<li><strong>In reply to:</strong> <a href="0085.php">Jeff Squyres: "Re: [OMPI docs] Defining an Authoring Environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0087.php">Jeff Squyres: "Re: [OMPI docs] Defining an Authoring Environment"</a>
<li><strong>Reply:</strong> <a href="0087.php">Jeff Squyres: "Re: [OMPI docs] Defining an Authoring Environment"</a>
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
