<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-40-g93eba3a";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  8 09:29:14 2014" -->
<!-- isoreceived="20141008132914" -->
<!-- sent="Wed, 8 Oct 2014 13:29:13 +0000" -->
<!-- isosent="20141008132913" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-40-g93eba3a" -->
<!-- id="134DE44E-2210-4E5B-9B54-CBA017DCB696_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20141003221025.24523266852_at_lion.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-40-g93eba3a<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-08 09:29:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16031.php">Howard Pritchard: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-40-g93eba3a"</a>
<li><strong>Previous message:</strong> <a href="16029.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16031.php">Howard Pritchard: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-40-g93eba3a"</a>
<li><strong>Reply:</strong> <a href="16031.php">Howard Pritchard: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-40-g93eba3a"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 3, 2014, at 5:10 PM, gitdub_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/93eba3ac70606db12465319804f2733f13bc9ca4">https://github.com/open-mpi/ompi/commit/93eba3ac70606db12465319804f2733f13bc9ca4</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit 93eba3ac70606db12465319804f2733f13bc9ca4
</span><br>
<span class="quotelev1">&gt; Merge: fd6a044 bd2974f
</span><br>
<span class="quotelev1">&gt; Author: Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Fri Oct 3 16:08:11 2014 -0600
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Merge branch 'master' of <a href="https://github.com/open-mpi/ompi">https://github.com/open-mpi/ompi</a>
</span><br>
<p>Hey Howard,
<br>
<p>If possible, please avoid this sort of merge in the future.  It usually makes the history a bit harder to follow.  A rebase of your local work onto the latest &quot;ompi/master&quot; probably would have been better (though I'm not familiar with the details of this branch+merge).  Not a big deal, just a bit friendlier for everyone.
<br>
<p>It looks like this best practice somehow slipped through the cracks when we put together the OMPI Git documentation, so I've tweaked the wiki to reflect this:
<br>
<p><a href="https://github.com/open-mpi/ompi/wiki/GitBestPractices">https://github.com/open-mpi/ompi/wiki/GitBestPractices</a>
<br>
<p>FWIW, it causes a commit DAG that looks like this (note the tangle stemming from 93eba3a and bd2974f):
<br>
<p>----8&lt;----
<br>
&nbsp;* 8191741 (HEAD, origin/master, origin/HEAD, master) tools: add flag to
<br>
&nbsp;*   23cb00d Merge pull request #225 from hjelmn/master
<br>
&nbsp;|\ 
<br>
&nbsp;| * eed7b45 osc/rdma: fix issue identified by Berk Hess
<br>
&nbsp;|/ 
<br>
&nbsp;* 9c027e6 Update the PMI configure logic to handle the oddball case wher
<br>
&nbsp;* a422d89 memchecker: per RFC, use calloc for OBJ_NEW
<br>
&nbsp;* 86f1d5a OPAL: drop dead with core on bad flow. rarely happens with hel
<br>
&nbsp;*   cd48fbe Merge pull request #221 from opoplawski/master
<br>
&nbsp;|\ 
<br>
&nbsp;| * 2d5832c Fix typo in liboshmem name
<br>
&nbsp;* | 89535a3 OSHMEM: sshmem mmap: use MAP_PRIVATE instead of MAP_SHARED
<br>
&nbsp;* | 399fc1b configury: remove unneeded assignments
<br>
&nbsp;* | fd77ebd OSHMEM: sshmem verbs: allocate memory at fixed address
<br>
&nbsp;* | 4ac5936 OSHMEM: sshmem verbs: improve hca name parsing
<br>
&nbsp;* | d82dc7f OSHMEM: Add two new mca variables
<br>
&nbsp;* | 067fa05 OSHMEM: fixes bug in shmem_lock
<br>
&nbsp;* |   93eba3a Merge branch 'master' of <a href="https://github.com/open-mpi/ompi">https://github.com/open-mpi/ompi</a>
<br>
&nbsp;|\ \ 
<br>
&nbsp;| |/ 
<br>
&nbsp;| *   bd2974f Merge branch 'master' of ssh://github.com/open-mpi/ompi
<br>
&nbsp;| |\ 
<br>
&nbsp;| | * 0997c91 openmpi-release.sh: update for git
<br>
&nbsp;| * | fb1f487 Cleanup some cruft resulting from the move of the btl's to
<br>
&nbsp;* | | fd6a044 Cleanup some cruft resulting from the move of the btl's to
<br>
&nbsp;* | | b44a244 openmpi-release.sh: update for git
<br>
&nbsp;* | | 5428301 Remove catamount timer support
<br>
&nbsp;| |/ 
<br>
&nbsp;|/|  
<br>
&nbsp;* | d2bb8d8 remove alps ess component
<br>
&nbsp;* | d033674 openmpi-nightly-tarball.sh: don't even check v1.6 any more
<br>
&nbsp;* | 534d773 openmpi-nightly-tarball.sh: fix typo in ompi-release URLs
<br>
&nbsp;* | 0e21c66 openmpi-nightly-tarball.sh: fix typo
<br>
&nbsp;* | f72bf3b gkcommit.pl: so long gkcommit; you served us well in SVN day
<br>
&nbsp;* | a12eef6 find-copyrights.pl: updates for git
<br>
&nbsp;* | 58e6213 make_dist_tarball: remove debug statement
<br>
&nbsp;* | 72d1359 create_tarball.sh: update the email to remove SVN references
<br>
&nbsp;|/ 
<br>
&nbsp;* 8cd3ee7 create_tarball.sh: adjust for new VERSION file format
<br>
&nbsp;* 697b18d Making async copy the default
<br>
----8&lt;----
<br>
<p>Best,
<br>
-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16031.php">Howard Pritchard: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-40-g93eba3a"</a>
<li><strong>Previous message:</strong> <a href="16029.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16031.php">Howard Pritchard: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-40-g93eba3a"</a>
<li><strong>Reply:</strong> <a href="16031.php">Howard Pritchard: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-40-g93eba3a"</a>
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
