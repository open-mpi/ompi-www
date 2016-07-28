<?
$subject_val = "[OMPI devel] OMPI Git mirror history: incorrect history &amp; rewinding";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 20 12:27:02 2013" -->
<!-- isoreceived="20130920162702" -->
<!-- sent="Fri, 20 Sep 2013 16:27:01 +0000" -->
<!-- isosent="20130920162701" -->
<!-- name="David Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="[OMPI devel] OMPI Git mirror history: incorrect history &amp;amp; rewinding" -->
<!-- id="8E25A938F00ED34D90F8C49322FDF192A112C9_at_xmb-rcd-x09.cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] OMPI Git mirror history: incorrect history &amp; rewinding<br>
<strong>From:</strong> David Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-20 12:27:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12947.php">David Goodell (dgoodell): "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
<li><strong>Previous message:</strong> <a href="12945.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intercomm Merge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12976.php">David Goodell (dgoodell): "Re: [OMPI devel] OMPI Git mirror history: incorrect history &amp; rewinding"</a>
<li><strong>Maybe reply:</strong> <a href="12976.php">David Goodell (dgoodell): "Re: [OMPI devel] OMPI Git mirror history: incorrect history &amp; rewinding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Short Version:
<br>
<p>The OMPI GitHub mirror of the OMPI SVN history currently contains some bad history, specifically related to the version tags.  Prior to roughly September 16th, this repository also contained several other bits of bad information/history.  The git history was *rewound* some time around the 16th, which could cause problems for developers who are using it to construct patches for our SVN repository.  We expect the history to be rewound again once at some point in the (hopefully) near future, which will have a similar effect.
<br>
<p>Users of the git mirror may need to perform some unconventional steps to recover from the upstream rewind in some cases.  If you are not currently experiencing any trouble with the mirror you may wish to wait until the second rewind occurs in the near future.
<br>
<p><p>More Detail:
<br>
<p>Though OMPI uses SVN as the canonical version control system (VCS), many developers use Mercurial (hg) or Git repositories for feature development and collaboration before bringing those changes back to SVN.  To this end, there are two helpful mirrors hosted on bitbucket and GitHub respectively:
<br>
<p><a href="https://bitbucket.org/ompiteam/ompi-svn-mirror">https://bitbucket.org/ompiteam/ompi-svn-mirror</a>
<br>
<a href="https://github.com/open-mpi/ompi-svn-mirror">https://github.com/open-mpi/ompi-svn-mirror</a>
<br>
<p>The Git mirror is maintained by Mellanox and has been extremely helpful so far.  However, in July it became clear that some of the history in the mirror was incorrect.  Specifically:
<br>
<p>1) Several commits had been squashed into a single commit, losing some history (eb0b490+7fc1da3+36d7b2c+482041f --&gt; 616629d).  However, the tree (Git-speak for file contents) at each commit always matched the corresponding commit message.
<br>
<p>2) Some author names and user IDs were incorrect in the history.  The severity of this is low, since they were all typo-level inaccuracies, not arbitrarily swapped names.
<br>
<p>3) Most of the release tags are incorrect.  The mirror has tags of the form &quot;v1.X-series&quot; (where &quot;X&quot; is a valid number) instead of &quot;v1.6.2&quot;.  These &quot;-series&quot; tags then contain directories for each release within that series instead of the expected source tree.
<br>
<p>Eugene V. at Mellanox recently (~2013-09-16) updated the mirror to address issues (1) and (2).   Issue (3) remains outstanding, necessitating a future update at some as-yet unspecified time.  Unfortunately, the act of updating the repository to resolve these issues causes entirely new commit ID hashes to be created, resulting in a &quot;rewind&quot; of all of the Git branches and tags in the mirror.  Most git users have not encountered this case and may experience difficulty coping with it.
<br>
<p>If you encounter trouble with these recent repository updates, you might be able to fix your situation by following some of the advice from the &quot;RECOVERING FROM UPSTREAM REBASE&quot; section of the &quot;git rebase&quot; manual (<a href="https://www.kernel.org/pub/software/scm/git/docs/git-rebase.html">https://www.kernel.org/pub/software/scm/git/docs/git-rebase.html</a>).  If that doesn't make any sense to you or you encounter too much trouble with it then you have a couple of options:
<br>
<p>A) Assuming you only use your cloned version of the repository to generate small patch sets, you can always clone another copy of the repository and move your patches over by hand.
<br>
<p>B) You may contact me with a clear explanation of your situation and I will attempt to point you in the right direction and clear up any confusion about the recent repository changes.  I won't do any work for you, but I'm happy to help with explanation in any reasonable capacity.
<br>
<p>If you aren't experiencing any problems right now, you might want to wait to address the rewound history until the second (and hopefully final) rewind occurs.  I don't have an ETA on this, as Eugene at Mellanox is handling the actual import/update and I believe there are a number of Israeli holidays on the calendar this week.
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12947.php">David Goodell (dgoodell): "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
<li><strong>Previous message:</strong> <a href="12945.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intercomm Merge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12976.php">David Goodell (dgoodell): "Re: [OMPI devel] OMPI Git mirror history: incorrect history &amp; rewinding"</a>
<li><strong>Maybe reply:</strong> <a href="12976.php">David Goodell (dgoodell): "Re: [OMPI devel] OMPI Git mirror history: incorrect history &amp; rewinding"</a>
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
