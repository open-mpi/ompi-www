<?
$subject_val = "Re: [OMPI devel] Switching away from SVN?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 19:02:56 2008" -->
<!-- isoreceived="20080318230256" -->
<!-- sent="Tue, 18 Mar 2008 16:02:47 -0700" -->
<!-- isosent="20080318230247" -->
<!-- name="Roland Dreier" -->
<!-- email="rdreier_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Switching away from SVN?" -->
<!-- id="adahcf3my94.fsf_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F623749-2CF4-406C-B9F6-E13AA880FF4B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Switching away from SVN?<br>
<strong>From:</strong> Roland Dreier (<em>rdreier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-18 19:02:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3466.php">Josh Hursey: "Re: [OMPI devel] RFC: libevent update"</a>
<li><strong>Previous message:</strong> <a href="3464.php">Josh Hursey: "Re: [OMPI devel] RFC: libevent update"</a>
<li><strong>In reply to:</strong> <a href="3458.php">Jeff Squyres: "[OMPI devel] Switching away from SVN?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3468.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Reply:</strong> <a href="3468.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/04/3668.php">Manuel Prinz: "Re: [OMPI devel] Switching away from SVN?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1"> &gt; It's been loosely proposed that we switch away from SVN into a  
</span><br>
<span class="quotelev1"> &gt; different system.  This probably warrants some discussion to a) figure  
</span><br>
<span class="quotelev1"> &gt; out if we want to move, and b) *if* we want to move, which system  
</span><br>
<span class="quotelev1"> &gt; should we move to?  One has system been proposed: Mercurial -- several  
</span><br>
<span class="quotelev1"> &gt; OMPI developers are using it with good success.  I know that some OMPI  
</span><br>
<span class="quotelev1"> &gt; developers use Git, too.  Are there other systems that we should  
</span><br>
<span class="quotelev1"> &gt; consider?
</span><br>
<p>As an ompi bystander, I would strongly endorse a switch away from svn.
<br>
I think that git, hg and bzr are all roughly equivalent -- they each
<br>
have their enthusiastic partisans, but in reality they're all probably
<br>
fine.  And the difference between svn and any of the newer distributed
<br>
systems, especially for a big codebase like ompi, is pretty huge.
<br>
<p><span class="quotelev1"> &gt; Primary reasons for doing the switch are:
</span><br>
<span class="quotelev1"> &gt; 
</span><br>
<span class="quotelev1"> &gt; - distributed repositories are attractive/useful
</span><br>
<span class="quotelev1"> &gt; - git/Mercurial branching and merging are *way* better than SVN
</span><br>
<span class="quotelev1"> &gt;    --&gt; note that SVN v1.5 is supposed to be *much* better than v1.4
</span><br>
<p>Also, svn is much slower for lots of things, to the point where it
<br>
becomes a usability issue.  And supporting disconnected operation (aka
<br>
&quot;working on a plane&quot;) is another really nice bonus.
<br>
<p><span class="quotelev1"> &gt; - how to import all the SVN history to the new system
</span><br>
<p>Should not be a big problem -- since svn at least has atomic
<br>
changesets, you avoid all the pain of parsing cvs repositories, and
<br>
there fairly mature svn importers for distributed systems.
<br>
<p>&nbsp;- R.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3466.php">Josh Hursey: "Re: [OMPI devel] RFC: libevent update"</a>
<li><strong>Previous message:</strong> <a href="3464.php">Josh Hursey: "Re: [OMPI devel] RFC: libevent update"</a>
<li><strong>In reply to:</strong> <a href="3458.php">Jeff Squyres: "[OMPI devel] Switching away from SVN?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3468.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Reply:</strong> <a href="3468.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/04/3668.php">Manuel Prinz: "Re: [OMPI devel] Switching away from SVN?"</a>
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
