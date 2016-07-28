<?
$subject_val = "Re: [OMPI devel] 3rd party code contributions";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  8 11:06:53 2008" -->
<!-- isoreceived="20080208160653" -->
<!-- sent="Fri, 8 Feb 2008 11:06:04 -0500" -->
<!-- isosent="20080208160604" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 3rd party code contributions" -->
<!-- id="6AFAE688-2C86-42C0-A996-489629113AC8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C3D1C592.452C%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 3rd party code contributions<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-08 11:06:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3165.php">Brian W. Barrett: "Re: [OMPI devel] 3rd party code contributions"</a>
<li><strong>Previous message:</strong> <a href="3163.php">Jeff Squyres: "Re: [OMPI devel] ROMIO"</a>
<li><strong>In reply to:</strong> <a href="3162.php">Ralph Castain: "[OMPI devel] 3rd party code contributions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3170.php">Ralph H Castain: "Re: [OMPI devel] 3rd party code contributions"</a>
<li><strong>Reply:</strong> <a href="3170.php">Ralph H Castain: "Re: [OMPI devel] 3rd party code contributions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 8, 2008, at 10:38 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I thought maybe we should move this to another thread as it really  
</span><br>
<span class="quotelev1">&gt; isn't
</span><br>
<span class="quotelev1">&gt; about Torsten's specific RFC.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just took a quick gander at the code base to see how extensive this
</span><br>
<span class="quotelev1">&gt; problem might really be per Terry's concern. What I found was that  
</span><br>
<span class="quotelev1">&gt; we have
</span><br>
<span class="quotelev1">&gt; added 3rd party code in several places. How we want to define them  
</span><br>
<span class="quotelev1">&gt; in terms
</span><br>
<span class="quotelev1">&gt; of this issue is probably something for discussion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Packages I could readily identify include:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. event library
</span><br>
<span class="quotelev1">&gt; 4. backtrace
</span><br>
<span class="quotelev1">&gt; 5. PLPA - this one is a little less obvious, but still being  
</span><br>
<span class="quotelev1">&gt; released as a
</span><br>
<span class="quotelev1">&gt; separate package
</span><br>
<p>FWIW, these packages are part of &quot;core&quot; OMPI and are not especially  
<br>
problematic.  We upgrade them when we have a need or desire to (which  
<br>
has been low frequency); we don't try to stay in sync with their  
<br>
release schedules at all.
<br>
<p><span class="quotelev1">&gt; 2. ROMIO
</span><br>
<p>ROMIO has traditionally been a problem (keeping up with its releases  
<br>
and patches).  We have long-since agreed that we definitely want to  
<br>
include ROMIO in our tarball, even though that presents challenges.   
<br>
One thing that makes it *slightly* easier is that Brian added the  
<br>
mechanics for OMPI to use a ROMIO that is outside of Open MPI rather  
<br>
than the one that is bundled with it.  It's not a perfect solution,  
<br>
but it does help some.
<br>
<p><span class="quotelev1">&gt; 3. VT
</span><br>
<span class="quotelev1">&gt; 6. libNBC
</span><br>
<p>These two are definitely in the &quot;contrib&quot; category.
<br>
<p><span class="quotelev1">&gt; There may well be others - these are only the ones I know about. By  
</span><br>
<span class="quotelev1">&gt; 3rd
</span><br>
<span class="quotelev1">&gt; party package, I mean these are blocks of code obtained as a complete,
</span><br>
<span class="quotelev1">&gt; distinct version and &quot;dropped in&quot; to the OMPI code repository, and  
</span><br>
<span class="quotelev1">&gt; then to
</span><br>
<span class="quotelev1">&gt; some degree tied into our build system. They are not code specifically
</span><br>
<span class="quotelev1">&gt; developed for OMPI by OMPI developers.
</span><br>
<p>Those are all that I'm aware of.
<br>
<p><span class="quotelev1">&gt; We have already discussed the issues with this approach. I am  
</span><br>
<span class="quotelev1">&gt; particularly
</span><br>
<span class="quotelev1">&gt; concerned with the maintenance and release cycle issues right now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If these packages could be linked to our code instead of embedded  
</span><br>
<span class="quotelev1">&gt; within it,
</span><br>
<span class="quotelev1">&gt; then it seems to me that updating them could become much easier. For
</span><br>
<span class="quotelev1">&gt; example, we could download and install the latest ROMIO + Panasas  
</span><br>
<span class="quotelev1">&gt; patch,
</span><br>
<span class="quotelev1">&gt; compile it, and simply link it into libompi - without occupying  
</span><br>
<span class="quotelev1">&gt; someone with
</span><br>
<span class="quotelev1">&gt; constantly fixing the build system issues, etc.
</span><br>
<p>FWIW:
<br>
<p>- event,backtrace,PLPA,ROMIO are included in OMPI because we wanted to  
<br>
certify them as part of &quot;core&quot; OMPI.  That is, we wanted to certify  
<br>
the whole system (vs. relying on [untested] combinations of versions  
<br>
that already exist on users' systems).
<br>
<p>- ROMIO is likely the only one of that group that presents ongoing  
<br>
logistics problems.  The mechanism Brian added was seen as a  
<br>
workaround.  Argonne will definitely need to be involved at some level  
<br>
to improve the ROMIO integration.  Some talks started between Brian,  
<br>
me, and Rob(ANL) about a) making our integration better/easier, and b)  
<br>
having access to the ROMIO SVN to be able to suck down releases when  
<br>
we want to, but they kinda tapered off (Brian left and I got other  
<br>
priorities).  There was also talk of LANL maintaining its own ROMIO  
<br>
tree and pushing it into OMPI, but I don't know what happened there.   
<br>
I can help with part of the ROMIO make-the-integration-easier (not in  
<br>
the immediate future, though -- probably not for a few weeks), but I  
<br>
do not think that I can do it on an ongoing basis.  Note, too, that  
<br>
ROMIO is no longer distributed as a separate package -- it's only  
<br>
included in MPICH2.  So it's a little harder to just link against a  
<br>
ROMIO that is already installed on a system -- there won't be one that  
<br>
isn't already bundled with an MPI.
<br>
<p>- vt and libnbc are a different category; they are add-on  
<br>
functionality, not &quot;core&quot; OMPI.
<br>
<p><span class="quotelev1">&gt; Obviously, I don't claim to know enough about what was done to  
</span><br>
<span class="quotelev1">&gt; integrate
</span><br>
<span class="quotelev1">&gt; ROMIO to know if this would easily work. I only use it to illustrate  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; point - the same could be said about the event library, for example.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Given our maintenance support problems, it would seem to me that  
</span><br>
<span class="quotelev1">&gt; changing
</span><br>
<span class="quotelev1">&gt; the way we do 3rd party packaging may be worth consideration and some
</span><br>
<span class="quotelev1">&gt; effort. I can't prioritize that relative to 1.3, though I do note  
</span><br>
<span class="quotelev1">&gt; that, from
</span><br>
<span class="quotelev1">&gt; LANL's perspective, the ROMIO issue is a definite blocker for 1.3  
</span><br>
<span class="quotelev1">&gt; release.
</span><br>
<p>Hmm.  This is odd because of the prior statements about ROMIO from  
<br>
LANL (that LANL was going to maintain ROMIO and push it into OMPI).   
<br>
I'm assuming that's changed?
<br>
<p>If ROMIO is a v1.3 blocker for LANL, can LANL commit resources to  
<br>
fixing the problem?
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
<li><strong>Next message:</strong> <a href="3165.php">Brian W. Barrett: "Re: [OMPI devel] 3rd party code contributions"</a>
<li><strong>Previous message:</strong> <a href="3163.php">Jeff Squyres: "Re: [OMPI devel] ROMIO"</a>
<li><strong>In reply to:</strong> <a href="3162.php">Ralph Castain: "[OMPI devel] 3rd party code contributions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3170.php">Ralph H Castain: "Re: [OMPI devel] 3rd party code contributions"</a>
<li><strong>Reply:</strong> <a href="3170.php">Ralph H Castain: "Re: [OMPI devel] 3rd party code contributions"</a>
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
