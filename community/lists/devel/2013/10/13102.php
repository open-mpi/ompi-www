<?
$subject_val = "Re: [OMPI devel] OMPI Git mirror history: incorrect history &amp; rewinding";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 17 10:25:53 2013" -->
<!-- isoreceived="20131017142553" -->
<!-- sent="Thu, 17 Oct 2013 14:25:51 +0000" -->
<!-- isosent="20131017142551" -->
<!-- name="David Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI Git mirror history: incorrect history &amp;amp; rewinding" -->
<!-- id="8E25A938F00ED34D90F8C49322FDF192B03253_at_xmb-rcd-x09.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8E25A938F00ED34D90F8C49322FDF192A15A27_at_xmb-rcd-x09.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI Git mirror history: incorrect history &amp; rewinding<br>
<strong>From:</strong> David Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-17 10:25:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13103.php">Igor Ivanov: "Re: [OMPI devel] oshmem Fortran"</a>
<li><strong>Previous message:</strong> <a href="13101.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem Fortran"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/09/12976.php">David Goodell (dgoodell): "Re: [OMPI devel] OMPI Git mirror history: incorrect history &amp; rewinding"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI, all subsequent expected rewinds have occurred.  The mirroring process has been modified to reduce the risk of an accidental rewind in the future.  Several (correct) tags have been added and several (incorrect) tags have been deleted.
<br>
<p>Going forward, we will also add a .mailmap file to the repository to perform a few minor name corrections and add proper emails to the commit history.  This should allow us to avoid name-related rewinds.  I'll send a separate email/RFC about the email addresses.
<br>
<p>-Dave
<br>
<p>On Sep 23, 2013, at 8:31 AM, David Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; A clarification for those on the devel@ list who were not on our private email thread about these issues: &quot;issue (F)&quot; is the &quot;v1.X-series&quot; tag issue.  That is, the second rewind has not yet happened.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Dave
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 22, 2013, at 3:33 AM, Eugene Voronov &lt;eugene_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi All,
</span><br>
<span class="quotelev2">&gt;&gt; I've finished with dynamic generation of authors list direct from SVN, thus feature provide solution resolve issues of mirroring from svn2git.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Last issue (F) I'll try solve in next few days.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: David Goodell (dgoodell) [mailto:dgoodell_at_[hidden]] 
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, September 20, 2013 7:27 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Cc: Eugene Voronov; Mike Dubman
</span><br>
<span class="quotelev2">&gt;&gt; Subject: OMPI Git mirror history: incorrect history &amp; rewinding
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Short Version:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The OMPI GitHub mirror of the OMPI SVN history currently contains some bad history, specifically related to the version tags.  Prior to roughly September 16th, this repository also contained several other bits of bad information/history.  The git history was *rewound* some time around the 16th, which could cause problems for developers who are using it to construct patches for our SVN repository.  We expect the history to be rewound again once at some point in the (hopefully) near future, which will have a similar effect.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Users of the git mirror may need to perform some unconventional steps to recover from the upstream rewind in some cases.  If you are not currently experiencing any trouble with the mirror you may wish to wait until the second rewind occurs in the near future.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; More Detail:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Though OMPI uses SVN as the canonical version control system (VCS), many developers use Mercurial (hg) or Git repositories for feature development and collaboration before bringing those changes back to SVN.  To this end, there are two helpful mirrors hosted on bitbucket and GitHub respectively:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://bitbucket.org/ompiteam/ompi-svn-mirror">https://bitbucket.org/ompiteam/ompi-svn-mirror</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/open-mpi/ompi-svn-mirror">https://github.com/open-mpi/ompi-svn-mirror</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The Git mirror is maintained by Mellanox and has been extremely helpful so far.  However, in July it became clear that some of the history in the mirror was incorrect.  Specifically:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1) Several commits had been squashed into a single commit, losing some history (eb0b490+7fc1da3+36d7b2c+482041f --&gt; 616629d).  However, the tree (Git-speak for file contents) at each commit always matched the corresponding commit message.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2) Some author names and user IDs were incorrect in the history.  The severity of this is low, since they were all typo-level inaccuracies, not arbitrarily swapped names.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3) Most of the release tags are incorrect.  The mirror has tags of the form &quot;v1.X-series&quot; (where &quot;X&quot; is a valid number) instead of &quot;v1.6.2&quot;.  These &quot;-series&quot; tags then contain directories for each release within that series instead of the expected source tree.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Eugene V. at Mellanox recently (~2013-09-16) updated the mirror to address issues (1) and (2).   Issue (3) remains outstanding, necessitating a future update at some as-yet unspecified time.  Unfortunately, the act of updating the repository to resolve these issues causes entirely new commit ID hashes to be created, resulting in a &quot;rewind&quot; of all of the Git branches and tags in the mirror.  Most git users have not encountered this case and may experience difficulty coping with it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you encounter trouble with these recent repository updates, you might be able to fix your situation by following some of the advice from the &quot;RECOVERING FROM UPSTREAM REBASE&quot; section of the &quot;git rebase&quot; manual (<a href="https://www.kernel.org/pub/software/scm/git/docs/git-rebase.html">https://www.kernel.org/pub/software/scm/git/docs/git-rebase.html</a>).  If that doesn't make any sense to you or you encounter too much trouble with it then you have a couple of options:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A) Assuming you only use your cloned version of the repository to generate small patch sets, you can always clone another copy of the repository and move your patches over by hand.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; B) You may contact me with a clear explanation of your situation and I will attempt to point you in the right direction and clear up any confusion about the recent repository changes.  I won't do any work for you, but I'm happy to help with explanation in any reasonable capacity.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you aren't experiencing any problems right now, you might want to wait to address the rewound history until the second (and hopefully final) rewind occurs.  I don't have an ETA on this, as Eugene at Mellanox is handling the actual import/update and I believe there are a number of Israeli holidays on the calendar this week.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Dave
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13103.php">Igor Ivanov: "Re: [OMPI devel] oshmem Fortran"</a>
<li><strong>Previous message:</strong> <a href="13101.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem Fortran"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/09/12976.php">David Goodell (dgoodell): "Re: [OMPI devel] OMPI Git mirror history: incorrect history &amp; rewinding"</a>
<!-- nextthread="start" -->
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
