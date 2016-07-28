<?
$subject_val = "Re: [OMPI devel] 3rd party code contributions";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  8 12:50:38 2008" -->
<!-- isoreceived="20080208175038" -->
<!-- sent="Fri, 08 Feb 2008 10:50:30 -0700" -->
<!-- isosent="20080208175030" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 3rd party code contributions" -->
<!-- id="C3D1E476.C2AB%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6AFAE688-2C86-42C0-A996-489629113AC8_at_cisco.com" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-08 12:50:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3171.php">Aurélien Bouteiller: "[OMPI devel] PML V will be enabled again"</a>
<li><strong>Previous message:</strong> <a href="3169.php">Rainer Keller: "Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!"</a>
<li><strong>In reply to:</strong> <a href="3164.php">Jeff Squyres: "Re: [OMPI devel] 3rd party code contributions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3165.php">Brian W. Barrett: "Re: [OMPI devel] 3rd party code contributions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm going to &quot;re-integrate&quot; Jeff and Brian's comments into one reponse.
<br>
<p>I have no problem with either of their observations. I only included the
<br>
event library, backtrace, and PLPA in my list for completeness. I expected
<br>
we would continue to treat those as we are, recognizing that this means
<br>
-someone- is going to have to step up to support those when we need to
<br>
update them. In the event library case, I know people have talked about a
<br>
major change coming soon - a release that has significant improvement we may
<br>
care about. Not sure when that might happen, or who is going to do that
<br>
integration.
<br>
<p>As to ROMIO: as with many of the community's &quot;planned&quot; contributions, they
<br>
have tended to fade with time and personnel turnover. At this time, there is
<br>
no way LANL could support a ROMIO integration without a significant delay to
<br>
the proposed 1.3 release schedule. Not that such a delay particularly
<br>
bothers me - I don't see a pressing need to just throw something out there,
<br>
and I have been beaten severely around the neck-and-shoulders the last two
<br>
days about how out of date our ROMIO version is, and that it lacks a
<br>
critical Panasas patch that is severely impacting performance.
<br>
<p>I'll continue to talk to people here about possibly getting help with ROMIO.
<br>
I don't know the prospects, but it will take some time for someone to become
<br>
familiar enough with our code base/build system to make a real contribution.
<br>
Alternatively, -I- may have to take this on, which will definitely delay the
<br>
1.3 RTE work, effectively just transferring the &quot;blocker&quot; from one part of
<br>
the code to another. ;-)
<br>
<p>But we can deal with that on a separate thread. For now, I think Jeff's last
<br>
response to the other thread is where we are converging: delay work on a 3rd
<br>
party contribution system until we have more cycles, but don't bring more
<br>
3rd party code (post-libNBC) in until we have a better mechanism.
<br>
<p>Ralph
<br>
<p><p>On 2/8/08 9:06 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 8, 2008, at 10:38 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I thought maybe we should move this to another thread as it really
</span><br>
<span class="quotelev2">&gt;&gt; isn't
</span><br>
<span class="quotelev2">&gt;&gt; about Torsten's specific RFC.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I just took a quick gander at the code base to see how extensive this
</span><br>
<span class="quotelev2">&gt;&gt; problem might really be per Terry's concern. What I found was that
</span><br>
<span class="quotelev2">&gt;&gt; we have
</span><br>
<span class="quotelev2">&gt;&gt; added 3rd party code in several places. How we want to define them
</span><br>
<span class="quotelev2">&gt;&gt; in terms
</span><br>
<span class="quotelev2">&gt;&gt; of this issue is probably something for discussion.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Packages I could readily identify include:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. event library
</span><br>
<span class="quotelev2">&gt;&gt; 4. backtrace
</span><br>
<span class="quotelev2">&gt;&gt; 5. PLPA - this one is a little less obvious, but still being
</span><br>
<span class="quotelev2">&gt;&gt; released as a
</span><br>
<span class="quotelev2">&gt;&gt; separate package
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, these packages are part of &quot;core&quot; OMPI and are not especially
</span><br>
<span class="quotelev1">&gt; problematic.  We upgrade them when we have a need or desire to (which
</span><br>
<span class="quotelev1">&gt; has been low frequency); we don't try to stay in sync with their
</span><br>
<span class="quotelev1">&gt; release schedules at all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. ROMIO
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ROMIO has traditionally been a problem (keeping up with its releases
</span><br>
<span class="quotelev1">&gt; and patches).  We have long-since agreed that we definitely want to
</span><br>
<span class="quotelev1">&gt; include ROMIO in our tarball, even though that presents challenges.
</span><br>
<span class="quotelev1">&gt; One thing that makes it *slightly* easier is that Brian added the
</span><br>
<span class="quotelev1">&gt; mechanics for OMPI to use a ROMIO that is outside of Open MPI rather
</span><br>
<span class="quotelev1">&gt; than the one that is bundled with it.  It's not a perfect solution,
</span><br>
<span class="quotelev1">&gt; but it does help some.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. VT
</span><br>
<span class="quotelev2">&gt;&gt; 6. libNBC
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These two are definitely in the &quot;contrib&quot; category.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There may well be others - these are only the ones I know about. By
</span><br>
<span class="quotelev2">&gt;&gt; 3rd
</span><br>
<span class="quotelev2">&gt;&gt; party package, I mean these are blocks of code obtained as a complete,
</span><br>
<span class="quotelev2">&gt;&gt; distinct version and &quot;dropped in&quot; to the OMPI code repository, and
</span><br>
<span class="quotelev2">&gt;&gt; then to
</span><br>
<span class="quotelev2">&gt;&gt; some degree tied into our build system. They are not code specifically
</span><br>
<span class="quotelev2">&gt;&gt; developed for OMPI by OMPI developers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Those are all that I'm aware of.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have already discussed the issues with this approach. I am
</span><br>
<span class="quotelev2">&gt;&gt; particularly
</span><br>
<span class="quotelev2">&gt;&gt; concerned with the maintenance and release cycle issues right now.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If these packages could be linked to our code instead of embedded
</span><br>
<span class="quotelev2">&gt;&gt; within it,
</span><br>
<span class="quotelev2">&gt;&gt; then it seems to me that updating them could become much easier. For
</span><br>
<span class="quotelev2">&gt;&gt; example, we could download and install the latest ROMIO + Panasas
</span><br>
<span class="quotelev2">&gt;&gt; patch,
</span><br>
<span class="quotelev2">&gt;&gt; compile it, and simply link it into libompi - without occupying
</span><br>
<span class="quotelev2">&gt;&gt; someone with
</span><br>
<span class="quotelev2">&gt;&gt; constantly fixing the build system issues, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - event,backtrace,PLPA,ROMIO are included in OMPI because we wanted to
</span><br>
<span class="quotelev1">&gt; certify them as part of &quot;core&quot; OMPI.  That is, we wanted to certify
</span><br>
<span class="quotelev1">&gt; the whole system (vs. relying on [untested] combinations of versions
</span><br>
<span class="quotelev1">&gt; that already exist on users' systems).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - ROMIO is likely the only one of that group that presents ongoing
</span><br>
<span class="quotelev1">&gt; logistics problems.  The mechanism Brian added was seen as a
</span><br>
<span class="quotelev1">&gt; workaround.  Argonne will definitely need to be involved at some level
</span><br>
<span class="quotelev1">&gt; to improve the ROMIO integration.  Some talks started between Brian,
</span><br>
<span class="quotelev1">&gt; me, and Rob(ANL) about a) making our integration better/easier, and b)
</span><br>
<span class="quotelev1">&gt; having access to the ROMIO SVN to be able to suck down releases when
</span><br>
<span class="quotelev1">&gt; we want to, but they kinda tapered off (Brian left and I got other
</span><br>
<span class="quotelev1">&gt; priorities).  There was also talk of LANL maintaining its own ROMIO
</span><br>
<span class="quotelev1">&gt; tree and pushing it into OMPI, but I don't know what happened there.
</span><br>
<span class="quotelev1">&gt; I can help with part of the ROMIO make-the-integration-easier (not in
</span><br>
<span class="quotelev1">&gt; the immediate future, though -- probably not for a few weeks), but I
</span><br>
<span class="quotelev1">&gt; do not think that I can do it on an ongoing basis.  Note, too, that
</span><br>
<span class="quotelev1">&gt; ROMIO is no longer distributed as a separate package -- it's only
</span><br>
<span class="quotelev1">&gt; included in MPICH2.  So it's a little harder to just link against a
</span><br>
<span class="quotelev1">&gt; ROMIO that is already installed on a system -- there won't be one that
</span><br>
<span class="quotelev1">&gt; isn't already bundled with an MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - vt and libnbc are a different category; they are add-on
</span><br>
<span class="quotelev1">&gt; functionality, not &quot;core&quot; OMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Obviously, I don't claim to know enough about what was done to
</span><br>
<span class="quotelev2">&gt;&gt; integrate
</span><br>
<span class="quotelev2">&gt;&gt; ROMIO to know if this would easily work. I only use it to illustrate
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; point - the same could be said about the event library, for example.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Given our maintenance support problems, it would seem to me that
</span><br>
<span class="quotelev2">&gt;&gt; changing
</span><br>
<span class="quotelev2">&gt;&gt; the way we do 3rd party packaging may be worth consideration and some
</span><br>
<span class="quotelev2">&gt;&gt; effort. I can't prioritize that relative to 1.3, though I do note
</span><br>
<span class="quotelev2">&gt;&gt; that, from
</span><br>
<span class="quotelev2">&gt;&gt; LANL's perspective, the ROMIO issue is a definite blocker for 1.3
</span><br>
<span class="quotelev2">&gt;&gt; release.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmm.  This is odd because of the prior statements about ROMIO from
</span><br>
<span class="quotelev1">&gt; LANL (that LANL was going to maintain ROMIO and push it into OMPI).
</span><br>
<span class="quotelev1">&gt; I'm assuming that's changed?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If ROMIO is a v1.3 blocker for LANL, can LANL commit resources to
</span><br>
<span class="quotelev1">&gt; fixing the problem?
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3171.php">Aurélien Bouteiller: "[OMPI devel] PML V will be enabled again"</a>
<li><strong>Previous message:</strong> <a href="3169.php">Rainer Keller: "Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!"</a>
<li><strong>In reply to:</strong> <a href="3164.php">Jeff Squyres: "Re: [OMPI devel] 3rd party code contributions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3165.php">Brian W. Barrett: "Re: [OMPI devel] 3rd party code contributions"</a>
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
