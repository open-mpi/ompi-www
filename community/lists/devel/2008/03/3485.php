<?
$subject_val = "Re: [OMPI devel] Switching away from SVN?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 21 08:52:14 2008" -->
<!-- isoreceived="20080321125214" -->
<!-- sent="Fri, 21 Mar 2008 08:52:03 -0400" -->
<!-- isosent="20080321125203" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Switching away from SVN?" -->
<!-- id="F651FDF5-1204-4A53-AA31-6E26E3BDBFC0_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="adave3gx5he.fsf_at_cisco.com" -->
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
<strong>Date:</strong> 2008-03-21 08:52:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3486.php">Regan Russell: "[OMPI devel] IRIX autoconf failure."</a>
<li><strong>Previous message:</strong> <a href="3484.php">Roland Dreier: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>In reply to:</strong> <a href="3484.php">Roland Dreier: "Re: [OMPI devel] Switching away from SVN?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3487.php">Ralph H Castain: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Reply:</strong> <a href="3487.php">Ralph H Castain: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Reply:</strong> <a href="3500.php">Gleb Natapov: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Reply:</strong> <a href="3503.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Cool -- thanks Roland!
<br>
<p>For anyone who wants to play with the entire history of OMPI in git  
<br>
(as of last night or so -- this git repository is *not* being kept in  
<br>
sync with SVN), I cloned the tree that Roland created and put it here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/~jsquyres/unofficial/ompi.git">http://www.open-mpi.org/~jsquyres/unofficial/ompi.git</a>
<br>
<p>So you can:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;git clone <a href="http://www.open-mpi.org/~jsquyres/unofficial/ompi.git">http://www.open-mpi.org/~jsquyres/unofficial/ompi.git</a>
<br>
<p>And then work with local git operations from there.
<br>
<p><p><p>On Mar 20, 2008, at 8:53 PM, Roland Dreier wrote:
<br>
<span class="quotelev1">&gt; &lt;<a href="http://utsl.gen.nz/talks/git-svn/intro.html">http://utsl.gen.nz/talks/git-svn/intro.html</a>&gt; has some interesting
</span><br>
<span class="quotelev1">&gt; info about svn-&gt;git conversions (and svn vs. next-gen distibuted
</span><br>
<span class="quotelev1">&gt; systems in general).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, out of curiousity I tried doing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    git-svn clone --stdlayout <a href="http://svn.open-mpi.org/svn/ompi/">http://svn.open-mpi.org/svn/ompi/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and it seemed to work fine (git-svn is part of the main git
</span><br>
<span class="quotelev1">&gt; distribution).  The only obvious thing missing is that you would
</span><br>
<span class="quotelev1">&gt; probably want to set up an author file for a real conversion, so that
</span><br>
<span class="quotelev1">&gt; you get real names instead of just &quot;jsquyres&quot;.  It took a while to
</span><br>
<span class="quotelev1">&gt; run, mostly because it has to grab each svn changeset one by one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The interesting thing is that a checkout of the current ompi tree
</span><br>
<span class="quotelev1">&gt; seems to be about 37 MB, while .git directory of my repository, which
</span><br>
<span class="quotelev1">&gt; has the entire history of all branches of the svn repository plus
</span><br>
<span class="quotelev1">&gt; 1.6MB of svn metadata is 36 MB.  And git can do fun stuff like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    git diff v1.1..v1.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in half a second (it generates a 274858 line diff).  It can generate
</span><br>
<span class="quotelev1">&gt; the full 116320 line (11164 commit) log of the trunk in .3 seconds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff, if you want to see the repository, it is in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    /data/home/roland/ompi.git
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Feel free to make it available however you want (it's your data of  
</span><br>
<span class="quotelev1">&gt; course).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - R.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3486.php">Regan Russell: "[OMPI devel] IRIX autoconf failure."</a>
<li><strong>Previous message:</strong> <a href="3484.php">Roland Dreier: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>In reply to:</strong> <a href="3484.php">Roland Dreier: "Re: [OMPI devel] Switching away from SVN?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3487.php">Ralph H Castain: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Reply:</strong> <a href="3487.php">Ralph H Castain: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Reply:</strong> <a href="3500.php">Gleb Natapov: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Reply:</strong> <a href="3503.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
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
