<?
$subject_val = "Re: [OMPI devel] Switching away from SVN?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 21 09:26:54 2008" -->
<!-- isoreceived="20080321132654" -->
<!-- sent="Fri, 21 Mar 2008 07:26:40 -0600" -->
<!-- isosent="20080321132640" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Switching away from SVN?" -->
<!-- id="C40913B0.CBA6%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F651FDF5-1204-4A53-AA31-6E26E3BDBFC0_at_cisco.com" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-21 09:26:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3488.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Previous message:</strong> <a href="3486.php">Regan Russell: "[OMPI devel] IRIX autoconf failure."</a>
<li><strong>In reply to:</strong> <a href="3485.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3488.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Reply:</strong> <a href="3488.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Great!
<br>
<p>I don't have a religious preference between the options (hg vs git vs ??),
<br>
but think we should definitely move away from svn.
<br>
<p>Someone mentioned discussing this at some upcoming meeting? Could you send
<br>
around some info on this, since (ahem) some of us at least are -not-
<br>
involved in the wonderful MPI Forum, and have no idea when this might be
<br>
taking place???
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><p>On 3/21/08 6:52 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Cool -- thanks Roland!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For anyone who wants to play with the entire history of OMPI in git
</span><br>
<span class="quotelev1">&gt; (as of last night or so -- this git repository is *not* being kept in
</span><br>
<span class="quotelev1">&gt; sync with SVN), I cloned the tree that Roland created and put it here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/~jsquyres/unofficial/ompi.git">http://www.open-mpi.org/~jsquyres/unofficial/ompi.git</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So you can:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      git clone <a href="http://www.open-mpi.org/~jsquyres/unofficial/ompi.git">http://www.open-mpi.org/~jsquyres/unofficial/ompi.git</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And then work with local git operations from there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 20, 2008, at 8:53 PM, Roland Dreier wrote:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://utsl.gen.nz/talks/git-svn/intro.html">http://utsl.gen.nz/talks/git-svn/intro.html</a>&gt; has some interesting
</span><br>
<span class="quotelev2">&gt;&gt; info about svn-&gt;git conversions (and svn vs. next-gen distibuted
</span><br>
<span class="quotelev2">&gt;&gt; systems in general).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also, out of curiousity I tried doing
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    git-svn clone --stdlayout <a href="http://svn.open-mpi.org/svn/ompi/">http://svn.open-mpi.org/svn/ompi/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and it seemed to work fine (git-svn is part of the main git
</span><br>
<span class="quotelev2">&gt;&gt; distribution).  The only obvious thing missing is that you would
</span><br>
<span class="quotelev2">&gt;&gt; probably want to set up an author file for a real conversion, so that
</span><br>
<span class="quotelev2">&gt;&gt; you get real names instead of just &quot;jsquyres&quot;.  It took a while to
</span><br>
<span class="quotelev2">&gt;&gt; run, mostly because it has to grab each svn changeset one by one.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The interesting thing is that a checkout of the current ompi tree
</span><br>
<span class="quotelev2">&gt;&gt; seems to be about 37 MB, while .git directory of my repository, which
</span><br>
<span class="quotelev2">&gt;&gt; has the entire history of all branches of the svn repository plus
</span><br>
<span class="quotelev2">&gt;&gt; 1.6MB of svn metadata is 36 MB.  And git can do fun stuff like
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    git diff v1.1..v1.2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; in half a second (it generates a 274858 line diff).  It can generate
</span><br>
<span class="quotelev2">&gt;&gt; the full 116320 line (11164 commit) log of the trunk in .3 seconds.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff, if you want to see the repository, it is in
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    /data/home/roland/ompi.git
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Feel free to make it available however you want (it's your data of
</span><br>
<span class="quotelev2">&gt;&gt; course).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - R.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3488.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Previous message:</strong> <a href="3486.php">Regan Russell: "[OMPI devel] IRIX autoconf failure."</a>
<li><strong>In reply to:</strong> <a href="3485.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3488.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Reply:</strong> <a href="3488.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
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
