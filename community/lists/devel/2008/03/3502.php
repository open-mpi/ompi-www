<?
$subject_val = "Re: [OMPI devel] Switching away from SVN?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 24 11:08:07 2008" -->
<!-- isoreceived="20080324150807" -->
<!-- sent="Mon, 24 Mar 2008 11:07:42 -0400" -->
<!-- isosent="20080324150742" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Switching away from SVN?" -->
<!-- id="7B312C32-2B27-4144-963A-729905CDC756_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080324134641.GC10289_at_minantech.com" -->
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
<strong>Date:</strong> 2008-03-24 11:07:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3503.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Previous message:</strong> <a href="3501.php">George Bosilca: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>In reply to:</strong> <a href="3500.php">Gleb Natapov: "Re: [OMPI devel] Switching away from SVN?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3503.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 24, 2008, at 9:46 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev2">&gt;&gt;     git clone <a href="http://www.open-mpi.org/~jsquyres/unofficial/ompi.git">http://www.open-mpi.org/~jsquyres/unofficial/ompi.git</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And then work with local git operations from there.
</span><br>
<span class="quotelev1">&gt; It is very useful! Is it possible to sync it with SVN nightly?
</span><br>
<p>I think that's the larger open question: should we move the OMPI repo  
<br>
to a different technology (such as git or hg)?  Right now that git  
<br>
repo is *not* being updated.
<br>
<p>My $0.02 is that I'd rather address the larger question first.  If we  
<br>
want to setup read-only gateways to other SCMs, I think it would be  
<br>
simplest to do it after the [potential] conversion to a new SCM.   
<br>
Otherwise, we'll potentially multiple the setup-the-gateway work (once  
<br>
for SVN, once for something else).
<br>
<p><span class="quotelev1">&gt; The only problem I have with it is that git doesn't track empty
</span><br>
<span class="quotelev1">&gt; directories and autogen.sh fails without ompi/mca/io/romio/romio/ 
</span><br>
<span class="quotelev1">&gt; confdb.
</span><br>
<p>Same with Mercurial.  Note that we put a .placeholder file in there  
<br>
recently (on the trunk).
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 20, 2008, at 8:53 PM, Roland Dreier wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;<a href="http://utsl.gen.nz/talks/git-svn/intro.html">http://utsl.gen.nz/talks/git-svn/intro.html</a>&gt; has some interesting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; info about svn-&gt;git conversions (and svn vs. next-gen distibuted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; systems in general).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, out of curiousity I tried doing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   git-svn clone --stdlayout <a href="http://svn.open-mpi.org/svn/ompi/">http://svn.open-mpi.org/svn/ompi/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and it seemed to work fine (git-svn is part of the main git
</span><br>
<span class="quotelev3">&gt;&gt;&gt; distribution).  The only obvious thing missing is that you would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; probably want to set up an author file for a real conversion, so  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you get real names instead of just &quot;jsquyres&quot;.  It took a while to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run, mostly because it has to grab each svn changeset one by one.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The interesting thing is that a checkout of the current ompi tree
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seems to be about 37 MB, while .git directory of my repository,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; has the entire history of all branches of the svn repository plus
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.6MB of svn metadata is 36 MB.  And git can do fun stuff like
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   git diff v1.1..v1.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in half a second (it generates a 274858 line diff).  It can generate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the full 116320 line (11164 commit) log of the trunk in .3 seconds.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff, if you want to see the repository, it is in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   /data/home/roland/ompi.git
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Feel free to make it available however you want (it's your data of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; course).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - R.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
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
<li><strong>Next message:</strong> <a href="3503.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>Previous message:</strong> <a href="3501.php">George Bosilca: "Re: [OMPI devel] Switching away from SVN?"</a>
<li><strong>In reply to:</strong> <a href="3500.php">Gleb Natapov: "Re: [OMPI devel] Switching away from SVN?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3503.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
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
