<?
$subject_val = "Re: [OMPI devel] GCC atomic intrinsics";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 22 08:34:17 2010" -->
<!-- isoreceived="20100722123417" -->
<!-- sent="Thu, 22 Jul 2010 08:34:54 -0400" -->
<!-- isosent="20100722123454" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] GCC atomic intrinsics" -->
<!-- id="657021FC-1CB8-4882-AB74-2E76F6ACFD0B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1279790249.3597.32.camel_at_ce170155.zmb.uni-duisburg-essen.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] GCC atomic intrinsics<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-22 08:34:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8207.php">Ralph Castain: "Re: [OMPI devel] Committing to release branches"</a>
<li><strong>Previous message:</strong> <a href="8205.php">nadia.derbey: "Re: [OMPI devel] Committing to release branches"</a>
<li><strong>Maybe in reply to:</strong> <a href="8198.php">Jeff Squyres: "[OMPI devel] GCC atomic intrinsics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/12/8782.php">Manuel Prinz: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/12/8782.php">Manuel Prinz: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 22, 2010, at 5:17 AM, Manuel Prinz wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Manuel -- do you have anyone that could work on this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not at the moment. I could ask the porters if someone is willing to jump
</span><br>
<span class="quotelev1">&gt; in. I unfortunately can't do it myself since I lack knowledge in that
</span><br>
<span class="quotelev1">&gt; area.
</span><br>
<p>Ditto.
<br>
<p><span class="quotelev2">&gt; &gt; I'd be happy to supply the configury magic to check and see if the GCC
</span><br>
<span class="quotelev2">&gt; &gt; intrinsics are available (assumedly outputing an AM_CONDITIONAL and/or
</span><br>
<span class="quotelev2">&gt; &gt; AC_DEFINE to let the code base know the decision) if someone else can
</span><br>
<span class="quotelev2">&gt; &gt; do the work of actually implementing the *use* of the GCC atomics.
</span><br>
<span class="quotelev2">&gt; &gt; Perhaps someone might even be inspired to check out the atomics
</span><br>
<span class="quotelev2">&gt; &gt; openpa, the Gasnet tools, etc....?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure I can do that, but I can give it a try. I'll also ask the
</span><br>
<span class="quotelev1">&gt; porters, but at the last call for help noone stepped up.
</span><br>
<p>If anything moves on this front, let me know and I can create a mercurial branch out on bitbucket.org and add the relevant configury magic for the GCC intrinsics.
<br>
<p><span class="quotelev1">&gt; Last, I'd like to raise a question which is a little off-topic: Are
</span><br>
<span class="quotelev1">&gt; there any plans when 1.4.3 will be released? I do not know when we will
</span><br>
<span class="quotelev1">&gt; freeze but I expect it to happen soon(ish).
</span><br>
<p>1.4.3 is definitely slated for after 1.5.  A final rc for 1.5 is looking good for today, provided George and I can sync up for a final review of some last-minute patches that went in last night.
<br>
<p><span class="quotelev1">&gt; If you plan to make a 1.4.3
</span><br>
<span class="quotelev1">&gt; release it might be good to have it in our next stable release, as we
</span><br>
<span class="quotelev1">&gt; could drop some of the patches we currently carry. Also, this will be
</span><br>
<span class="quotelev1">&gt; the version that Debian users will use for the next 2,5 years, so I
</span><br>
<span class="quotelev1">&gt; think it is sensible to release with the latest (and greatest) of the
</span><br>
<span class="quotelev1">&gt; 1.4 series. What do you think?
</span><br>
<p>1.4 is our &quot;super stable&quot; series.  1.5 is also pretty darn stable and carries some nice new features, but, by definition, it's not as mature as the 1.4 series.  So it's up to you which you'd prefer to have.  If long-term stability is the goal, the 1.4 series might be better simply because it's more battle-worn than the 1.5 series.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/versions/">http://www.open-mpi.org/software/ompi/versions/</a>
<br>
<p>Note that there are ABI differences between the 1.4 and 1.5/1.6 series.  MPI applications compiled against 1.4.x will not be binary compatible with the 1.5/1.6 series.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8207.php">Ralph Castain: "Re: [OMPI devel] Committing to release branches"</a>
<li><strong>Previous message:</strong> <a href="8205.php">nadia.derbey: "Re: [OMPI devel] Committing to release branches"</a>
<li><strong>Maybe in reply to:</strong> <a href="8198.php">Jeff Squyres: "[OMPI devel] GCC atomic intrinsics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/12/8782.php">Manuel Prinz: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/12/8782.php">Manuel Prinz: "Re: [OMPI devel] GCC atomic intrinsics"</a>
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
