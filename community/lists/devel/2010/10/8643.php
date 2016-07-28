<?
$subject_val = "Re: [OMPI devel] 1.5.x plans";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 30 15:16:12 2010" -->
<!-- isoreceived="20101030191612" -->
<!-- sent="Sat, 30 Oct 2010 15:16:05 -0400" -->
<!-- isosent="20101030191605" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5.x plans" -->
<!-- id="4ECAB5B3-3F7A-4067-96C5-D32F48D9AB3E_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="31CC4142-A8EC-4253-B31E-8C6CEEB9D894_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5.x plans<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-30 15:16:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8644.php">George Bosilca: "[OMPI devel] Restore sanity"</a>
<li><strong>Previous message:</strong> <a href="8642.php">George Bosilca: "Re: [OMPI devel] Cost  for AllGatherV() Operation"</a>
<li><strong>In reply to:</strong> <a href="8633.php">Jeff Squyres: "[OMPI devel] 1.5.x plans"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/11/8649.php">Joshua Hursey: "Re: [OMPI devel] 1.5.x plans"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/11/8649.php">Joshua Hursey: "Re: [OMPI devel] 1.5.x plans"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
IMHO &quot;B&quot; will require a lot of attention from all developers/vendors, as well it maybe quite time consuming task (btw, I think it is q couple of openib btl changes that aren't on the list). So probably it will be good to ask all btl (or other modules/features) maintainers directly.
<br>
<p>Personally I prefer option C , A.
<br>
<p>My 0.02c 
<br>
<p>- Pasha
<br>
<p>On Oct 26, 2010, at 5:07 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On the teleconf today, two important topics were discussed about the 1.5.x series:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. I outlined my plan for a &quot;small&quot; 1.5.1 release.  It is intended to fix a small number of compilation and portability issues.  Everyone seemed to think that this was an ok idea.  I have done some tomfoolery in Trac to re-target a bunch of tickets -- those listed in 1.5.1 are the only ones that I intend to apply to 1.5.1:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/report/15">https://svn.open-mpi.org/trac/ompi/report/15</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (there's one critical bug that I don't know how to fix -- I'm waiting for feedback from Red Hat before I can continue)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Does anyone have any other tickets/bugs that they want/need in a short-term 1.5.1 release?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. We discussed what to do for 1.5.2.  Because 1.5[.0] took soooo long to release, there's now a sizable divergence between the trunk and the 1.5 branch.  The problem is that there are a number of wide-reaching new features on the trunk, some of which may (will) be difficult to bring to the v1.5 branch in a piecemeal fashion, including (but not limited to):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Paffinity changes (including new hwloc component)
</span><br>
<span class="quotelev1">&gt; - --with-libltdl changes
</span><br>
<span class="quotelev1">&gt; - Ummunotify support
</span><br>
<span class="quotelev1">&gt; - Solaris sysinfo component
</span><br>
<span class="quotelev1">&gt; - Notifier improvements
</span><br>
<span class="quotelev1">&gt; - OPAL_SOS
</span><br>
<span class="quotelev1">&gt; - Common shared memory improvements
</span><br>
<span class="quotelev1">&gt; - Build system improvements
</span><br>
<span class="quotelev1">&gt; - New libevent
</span><br>
<span class="quotelev1">&gt; - BFO PML
</span><br>
<span class="quotelev1">&gt; - Almost all ORTE changes
</span><br>
<span class="quotelev1">&gt; - Bunches of checkpoint restart mo'betterness (including MPI extensions)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There seem to be 3 obvious options about moving forward (all assume that we do 1.5.1 as described above):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   A. End the 1.5 line (i.e., work towards transitioning it to 1.6), and then re-branch the trunk to be v1.7.
</span><br>
<span class="quotelev1">&gt;   B. Sync the trunk to the 1.5 branch en masse.  Stabilize that and call it 1.5.2.
</span><br>
<span class="quotelev1">&gt;   C. Do the same thing as A, but wait at least 6 months (i.e., give the 1.5 series time to mature).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Most people (including me) favored B.  Rich was a little concerned that B spent too much time on maintenance/logistics when we could just be moving forward, and therefore favored either A or C.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any opinions from people who weren't there on the call today?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8644.php">George Bosilca: "[OMPI devel] Restore sanity"</a>
<li><strong>Previous message:</strong> <a href="8642.php">George Bosilca: "Re: [OMPI devel] Cost  for AllGatherV() Operation"</a>
<li><strong>In reply to:</strong> <a href="8633.php">Jeff Squyres: "[OMPI devel] 1.5.x plans"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/11/8649.php">Joshua Hursey: "Re: [OMPI devel] 1.5.x plans"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/11/8649.php">Joshua Hursey: "Re: [OMPI devel] 1.5.x plans"</a>
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
