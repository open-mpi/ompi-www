<?
$subject_val = "Re: [OMPI devel] Switching away from SVN?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 24 16:50:00 2008" -->
<!-- isoreceived="20080324205000" -->
<!-- sent="Mon, 24 Mar 2008 16:49:50 -0400" -->
<!-- isosent="20080324204950" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Switching away from SVN?" -->
<!-- id="EB8B91A0-270F-4E34-9645-96CAF258F0F2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E45B3D14-9980-4BF3-900D-E4703F6BF9F2_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-24 16:49:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3511.php">Tim Prins: "[OMPI devel] Return code and error message problems"</a>
<li><strong>Previous message:</strong> <a href="3509.php">Josh Hursey: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>In reply to:</strong> <a href="3509.php">Josh Hursey: "Re: [OMPI devel] Switching away from SVN?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3559.php">Tony Breeds: "Re: [OMPI devel] Switching away from SVN?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 24, 2008, at 4:23 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; I agree with George and Edgar. I would further add the notion that
</span><br>
<span class="quotelev1">&gt; whatever we decide upon should also work well with MTT. A lot of the
</span><br>
<span class="quotelev1">&gt; support tools for Open MPI are tied to the notion of a continuously
</span><br>
<span class="quotelev1">&gt; increasing 'r' number (MTT, nightly tarballs, Trac?, ...), so we
</span><br>
<span class="quotelev1">&gt; should be careful moving to something that does not have something
</span><br>
<span class="quotelev1">&gt; like that.
</span><br>
<p>Agreed; we need both trac and MTT to work nicely with whatever VCS we  
<br>
use.
<br>
<p><span class="quotelev1">&gt; I'm also not fully convinced that a switch away from Subversion is
</span><br>
<span class="quotelev1">&gt; necessary. I think I still need to be convinced that the notion of
</span><br>
<span class="quotelev1">&gt; switching isn't a solution looking for a problem. Is Subversion really
</span><br>
<span class="quotelev1">&gt; that bad? How much effort will it take to convert to something new
</span><br>
<span class="quotelev1">&gt; [e.g., change all the support tools, educate all developers, ...]? I
</span><br>
<span class="quotelev1">&gt; think that answers are that Subversion is not really that bad (and may
</span><br>
<span class="quotelev1">&gt; get better in upcoming releases), and it will take quite a lot of work
</span><br>
<span class="quotelev1">&gt; to switch to something else.
</span><br>
<p>I thought that since you have traditionally been a guy working on long- 
<br>
lived branches, you might be eager to get something better than  
<br>
SVN.  ;-)
<br>
<p>You're certainly right that SVN is &quot;good&quot; as it is.  Indeed, Brian and  
<br>
I were the main proponents of switching OMPI from CVS to SVN when SVN  
<br>
hit v1.0 a few years ago (we had the same questions back then: &quot;why is  
<br>
SVN better than CVS?&quot;).  SVN v1.5 is supposed to make merging branches  
<br>
much better.  I don't know what its timeline is; betas are already  
<br>
available, but it could be anywhere from days to months away (does  
<br>
anyone know for sure?).
<br>
<p>As for the distributed-ness aspects of git/hg/bzr, it's kind of a  
<br>
&quot;TiVo thing&quot; -- you can't really understand its goodness until you try  
<br>
it for a while.  This is particularly true for those of us -- myself  
<br>
included -- who &quot;grew up&quot; on centralized VCS's; a distributed VCS can  
<br>
seem like insanity!
<br>
<p>1. Several of us have been using distributed workarounds to SVN for a  
<br>
while (each of which have their shortcomings): Cisco, Sun, LANL, UTK,  
<br>
Voltaire.  We use the distributed aspects for multiple reasons:  
<br>
&quot;gate&quot;ing commits back to the main SVN repo, distributed testing  
<br>
before pushing back to the main repo, development of things not yet  
<br>
ready for the main repo, etc.  Having a VCS that is distributed by  
<br>
design (vs. using workarounds) would be quite nice.
<br>
<p>2. I've heard statements from other open source projects moving from  
<br>
CVS/SVN/some other centralized VCS to a dVCS along the lines of: &quot;we  
<br>
never knew how much we wanted to branch until it was trivial to  
<br>
do&quot; (SVN made branches easier than CVS; dVCSs make branches easier  
<br>
than SVN).
<br>
<p>3. FWIW, Mercurial's basic commands are fairly similar to SVN's (hg  
<br>
update, hg commit, hg log, hg status, ...etc.).  As a long-time SVN  
<br>
user, it wasn't hard for me to convert.  (I think git's basic commands  
<br>
are pretty similar, too...?)
<br>
<p>This switch is not something that I propose lightly.  And I'm not  
<br>
pushing for it in the immediate future (indeed, not even before  
<br>
v1.3).  We do need to look at how good/bad trac plugins are and how  
<br>
MTT will integrate, etc.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3511.php">Tim Prins: "[OMPI devel] Return code and error message problems"</a>
<li><strong>Previous message:</strong> <a href="3509.php">Josh Hursey: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>In reply to:</strong> <a href="3509.php">Josh Hursey: "Re: [OMPI devel] Switching away from SVN?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3559.php">Tony Breeds: "Re: [OMPI devel] Switching away from SVN?"</a>
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
