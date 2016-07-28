<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-40-g93eba3a";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  8 10:47:19 2014" -->
<!-- isoreceived="20141008144719" -->
<!-- sent="Wed, 8 Oct 2014 14:47:17 +0000" -->
<!-- isosent="20141008144717" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-40-g93eba3a" -->
<!-- id="D43E7272-3BFA-4FB0-9FFD-80CD91809D57_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF1Cqj4z+zWBoP2W2_eL5rSV6hGifLPYNgSwPWbHZ1ozJqM0RA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-40-g93eba3a<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-08 10:47:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16033.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-40-g93eba3a"</a>
<li><strong>Previous message:</strong> <a href="16031.php">Howard Pritchard: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-40-g93eba3a"</a>
<li><strong>In reply to:</strong> <a href="16031.php">Howard Pritchard: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-40-g93eba3a"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16033.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-40-g93eba3a"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, I don't typically set &quot;pull with rebase&quot; to be my default.  Here's why:
<br>
<p>1. If/when I login to a new machine and start doing some OMPI work, if I &quot;git pull&quot; and expect it to automatically rebase, I might get a nasty surprise if I don't have the default &quot;pull with rebase&quot; behavior set up on that machine.
<br>
<p>--&gt; This scenario can/does happen when I am granted temporary access to a specific machine for some OMPI work.
<br>
<p>2. Instead, I have the following in my $HOME/.gitconfig file:
<br>
<p>[alias]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pr = pull --rebase
<br>
<p>And I therefore &quot;git pr&quot; all the time (instead of &quot;git pull&quot; or &quot;git pull --rebase&quot;).
<br>
<p>3. If I end up in a situation described in #1 (i.e., I'm temporarily on a machine without my normal .gitconfig), and if I type &quot;git pr&quot;, I'll just get an error -- which is easy to fix (I just type &quot;git pull --rebase&quot;).  But more importantly: it won't unexpectedly do a merge before I realize my mistake.
<br>
<p>That's my $0.02.  :-)
<br>
<p><p><p>On Oct 8, 2014, at 10:42 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi David,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes I know about this.  I realized as soon as I did the push that it was pushing
</span><br>
<span class="quotelev1">&gt; the commits that I'd pulled on top of my changes back into the repo.  ugh.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Jeff suggested the pull with rebase.  I added that as default in my global
</span><br>
<span class="quotelev1">&gt; config file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the past I'd not hit this because the projects I was working on had very
</span><br>
<span class="quotelev1">&gt; little concurrent commits going in.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks for pointing this out though,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2014-10-08 7:29 GMT-06:00 Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; On Oct 3, 2014, at 5:10 PM, gitdub_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://github.com/open-mpi/ompi/commit/93eba3ac70606db12465319804f2733f13bc9ca4">https://github.com/open-mpi/ompi/commit/93eba3ac70606db12465319804f2733f13bc9ca4</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; commit 93eba3ac70606db12465319804f2733f13bc9ca4
</span><br>
<span class="quotelev2">&gt; &gt; Merge: fd6a044 bd2974f
</span><br>
<span class="quotelev2">&gt; &gt; Author: Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date:   Fri Oct 3 16:08:11 2014 -0600
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Merge branch 'master' of <a href="https://github.com/open-mpi/ompi">https://github.com/open-mpi/ompi</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hey Howard,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If possible, please avoid this sort of merge in the future.  It usually makes the history a bit harder to follow.  A rebase of your local work onto the latest &quot;ompi/master&quot; probably would have been better (though I'm not familiar with the details of this branch+merge).  Not a big deal, just a bit friendlier for everyone.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like this best practice somehow slipped through the cracks when we put together the OMPI Git documentation, so I've tweaked the wiki to reflect this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/wiki/GitBestPractices">https://github.com/open-mpi/ompi/wiki/GitBestPractices</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, it causes a commit DAG that looks like this (note the tangle stemming from 93eba3a and bd2974f):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----8&lt;----
</span><br>
<span class="quotelev1">&gt;  * 8191741 (HEAD, origin/master, origin/HEAD, master) tools: add flag to
</span><br>
<span class="quotelev1">&gt;  *   23cb00d Merge pull request #225 from hjelmn/master
</span><br>
<span class="quotelev1">&gt;  |\
</span><br>
<span class="quotelev1">&gt;  | * eed7b45 osc/rdma: fix issue identified by Berk Hess
</span><br>
<span class="quotelev1">&gt;  |/
</span><br>
<span class="quotelev1">&gt;  * 9c027e6 Update the PMI configure logic to handle the oddball case wher
</span><br>
<span class="quotelev1">&gt;  * a422d89 memchecker: per RFC, use calloc for OBJ_NEW
</span><br>
<span class="quotelev1">&gt;  * 86f1d5a OPAL: drop dead with core on bad flow. rarely happens with hel
</span><br>
<span class="quotelev1">&gt;  *   cd48fbe Merge pull request #221 from opoplawski/master
</span><br>
<span class="quotelev1">&gt;  |\
</span><br>
<span class="quotelev1">&gt;  | * 2d5832c Fix typo in liboshmem name
</span><br>
<span class="quotelev1">&gt;  * | 89535a3 OSHMEM: sshmem mmap: use MAP_PRIVATE instead of MAP_SHARED
</span><br>
<span class="quotelev1">&gt;  * | 399fc1b configury: remove unneeded assignments
</span><br>
<span class="quotelev1">&gt;  * | fd77ebd OSHMEM: sshmem verbs: allocate memory at fixed address
</span><br>
<span class="quotelev1">&gt;  * | 4ac5936 OSHMEM: sshmem verbs: improve hca name parsing
</span><br>
<span class="quotelev1">&gt;  * | d82dc7f OSHMEM: Add two new mca variables
</span><br>
<span class="quotelev1">&gt;  * | 067fa05 OSHMEM: fixes bug in shmem_lock
</span><br>
<span class="quotelev1">&gt;  * |   93eba3a Merge branch 'master' of <a href="https://github.com/open-mpi/ompi">https://github.com/open-mpi/ompi</a>
</span><br>
<span class="quotelev1">&gt;  |\ \
</span><br>
<span class="quotelev1">&gt;  | |/
</span><br>
<span class="quotelev1">&gt;  | *   bd2974f Merge branch 'master' of ssh://github.com/open-mpi/ompi
</span><br>
<span class="quotelev1">&gt;  | |\
</span><br>
<span class="quotelev1">&gt;  | | * 0997c91 openmpi-release.sh: update for git
</span><br>
<span class="quotelev1">&gt;  | * | fb1f487 Cleanup some cruft resulting from the move of the btl's to
</span><br>
<span class="quotelev1">&gt;  * | | fd6a044 Cleanup some cruft resulting from the move of the btl's to
</span><br>
<span class="quotelev1">&gt;  * | | b44a244 openmpi-release.sh: update for git
</span><br>
<span class="quotelev1">&gt;  * | | 5428301 Remove catamount timer support
</span><br>
<span class="quotelev1">&gt;  | |/
</span><br>
<span class="quotelev1">&gt;  |/|
</span><br>
<span class="quotelev1">&gt;  * | d2bb8d8 remove alps ess component
</span><br>
<span class="quotelev1">&gt;  * | d033674 openmpi-nightly-tarball.sh: don't even check v1.6 any more
</span><br>
<span class="quotelev1">&gt;  * | 534d773 openmpi-nightly-tarball.sh: fix typo in ompi-release URLs
</span><br>
<span class="quotelev1">&gt;  * | 0e21c66 openmpi-nightly-tarball.sh: fix typo
</span><br>
<span class="quotelev1">&gt;  * | f72bf3b gkcommit.pl: so long gkcommit; you served us well in SVN day
</span><br>
<span class="quotelev1">&gt;  * | a12eef6 find-copyrights.pl: updates for git
</span><br>
<span class="quotelev1">&gt;  * | 58e6213 make_dist_tarball: remove debug statement
</span><br>
<span class="quotelev1">&gt;  * | 72d1359 create_tarball.sh: update the email to remove SVN references
</span><br>
<span class="quotelev1">&gt;  |/
</span><br>
<span class="quotelev1">&gt;  * 8cd3ee7 create_tarball.sh: adjust for new VERSION file format
</span><br>
<span class="quotelev1">&gt;  * 697b18d Making async copy the default
</span><br>
<span class="quotelev1">&gt; ----8&lt;----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; -Dave
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16030.php">http://www.open-mpi.org/community/lists/devel/2014/10/16030.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16031.php">http://www.open-mpi.org/community/lists/devel/2014/10/16031.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16033.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-40-g93eba3a"</a>
<li><strong>Previous message:</strong> <a href="16031.php">Howard Pritchard: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-40-g93eba3a"</a>
<li><strong>In reply to:</strong> <a href="16031.php">Howard Pritchard: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-40-g93eba3a"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16033.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-40-g93eba3a"</a>
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
