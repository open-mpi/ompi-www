<?
$subject_val = "[OMPI devel] 1.5.x plans";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 26 17:07:59 2010" -->
<!-- isoreceived="20101026210759" -->
<!-- sent="Tue, 26 Oct 2010 17:07:52 -0400" -->
<!-- isosent="20101026210752" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.5.x plans" -->
<!-- id="31CC4142-A8EC-4253-B31E-8C6CEEB9D894_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.5.x plans<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-26 17:07:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8634.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<li><strong>Previous message:</strong> <a href="8632.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8635.php">Barrett, Brian W: "Re: [OMPI devel] 1.5.x plans"</a>
<li><strong>Reply:</strong> <a href="8635.php">Barrett, Brian W: "Re: [OMPI devel] 1.5.x plans"</a>
<li><strong>Reply:</strong> <a href="8643.php">Shamis, Pavel: "Re: [OMPI devel] 1.5.x plans"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On the teleconf today, two important topics were discussed about the 1.5.x series:
<br>
<p>-----
<br>
<p>1. I outlined my plan for a &quot;small&quot; 1.5.1 release.  It is intended to fix a small number of compilation and portability issues.  Everyone seemed to think that this was an ok idea.  I have done some tomfoolery in Trac to re-target a bunch of tickets -- those listed in 1.5.1 are the only ones that I intend to apply to 1.5.1:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/report/15">https://svn.open-mpi.org/trac/ompi/report/15</a>
<br>
<p>(there's one critical bug that I don't know how to fix -- I'm waiting for feedback from Red Hat before I can continue)
<br>
<p>*** Does anyone have any other tickets/bugs that they want/need in a short-term 1.5.1 release?
<br>
<p>-----
<br>
<p>2. We discussed what to do for 1.5.2.  Because 1.5[.0] took soooo long to release, there's now a sizable divergence between the trunk and the 1.5 branch.  The problem is that there are a number of wide-reaching new features on the trunk, some of which may (will) be difficult to bring to the v1.5 branch in a piecemeal fashion, including (but not limited to):
<br>
<p>- Paffinity changes (including new hwloc component)
<br>
- --with-libltdl changes
<br>
- Ummunotify support
<br>
- Solaris sysinfo component
<br>
- Notifier improvements
<br>
- OPAL_SOS
<br>
- Common shared memory improvements
<br>
- Build system improvements
<br>
- New libevent
<br>
- BFO PML
<br>
- Almost all ORTE changes
<br>
- Bunches of checkpoint restart mo'betterness (including MPI extensions)
<br>
<p>There seem to be 3 obvious options about moving forward (all assume that we do 1.5.1 as described above):
<br>
<p>&nbsp;&nbsp;&nbsp;A. End the 1.5 line (i.e., work towards transitioning it to 1.6), and then re-branch the trunk to be v1.7.
<br>
&nbsp;&nbsp;&nbsp;B. Sync the trunk to the 1.5 branch en masse.  Stabilize that and call it 1.5.2.
<br>
&nbsp;&nbsp;&nbsp;C. Do the same thing as A, but wait at least 6 months (i.e., give the 1.5 series time to mature).
<br>
<p>Most people (including me) favored B.  Rich was a little concerned that B spent too much time on maintenance/logistics when we could just be moving forward, and therefore favored either A or C.
<br>
<p>Any opinions from people who weren't there on the call today?
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
<li><strong>Next message:</strong> <a href="8634.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<li><strong>Previous message:</strong> <a href="8632.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8635.php">Barrett, Brian W: "Re: [OMPI devel] 1.5.x plans"</a>
<li><strong>Reply:</strong> <a href="8635.php">Barrett, Brian W: "Re: [OMPI devel] 1.5.x plans"</a>
<li><strong>Reply:</strong> <a href="8643.php">Shamis, Pavel: "Re: [OMPI devel] 1.5.x plans"</a>
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
