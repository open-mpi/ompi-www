<?
$subject_val = "[OMPI devel] RFC: New Open MPI release procedure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 16 10:48:04 2009" -->
<!-- isoreceived="20090216154804" -->
<!-- sent="Mon, 16 Feb 2009 10:47:42 -0500" -->
<!-- isosent="20090216154742" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: New Open MPI release procedure" -->
<!-- id="7003A098-C29F-47EF-B257-63488AFE90C1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: New Open MPI release procedure<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-16 10:47:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5426.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20562"</a>
<li><strong>Previous message:</strong> <a href="5424.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: Proposal for a new release methodology for the Open MPI Project.
<br>
<p>Why: We have [at least] 2 competing forces in Open MPI:
<br>
&nbsp;&nbsp;&nbsp;- desire to release new features quickly.  Fast is good.
<br>
&nbsp;&nbsp;&nbsp;- desire to release based on production quality.  Slow is good.
<br>
<p>&nbsp;&nbsp;&nbsp;The competition between these two forces has both created some
<br>
&nbsp;&nbsp;&nbsp;tension in the Open MPI community as well as created a Very Long
<br>
&nbsp;&nbsp;&nbsp;release cycle for OMPI v1.3 (yes, it was our specific and deliberate
<br>
&nbsp;&nbsp;&nbsp;choice to be feature driven -- but it was still verrrrry loooong).
<br>
<p>How: Take some ideas from other well-established release paradigms,  
<br>
such as:
<br>
&nbsp;&nbsp;&nbsp;- Linux kernel &quot;odd/even&quot; version number release methodology
<br>
&nbsp;&nbsp;&nbsp;- Red Hat/Fedora stable vs. feature releases
<br>
&nbsp;&nbsp;&nbsp;- Agile development models
<br>
<p>When: For all releases after the v1.3 series (i.e., this proposal does
<br>
not include any releases in the v1.3 series).
<br>
<p>--&gt; Ralph and I will talk through all the details and answer any
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;questions on tomorrow's teleconference (Tue, 17 Feb 2009).
<br>
<p>= 
<br>
========================================================================
<br>
<p>Details:
<br>
<p>In v1.3, we let a lot of really good features sit in development for a
<br>
long, long time.  Yes, we chose to do this and there were good reasons
<br>
for doing so, but the fact remains that we had some really good stuff
<br>
done and stable for long periods of time, but they weren't generally
<br>
available to users who wanted to use them.  Even for users who are
<br>
willing to be out on the bleeding edge, trunk tarballs are just too
<br>
scary.
<br>
<p>Given the two competing forces mentioned above (feature/fast releases
<br>
+ stable/slow releases), it seems like we really want two different --
<br>
but overlapping -- release mechanisms.
<br>
<p>Taking inspiration from other well-established paradigms, Ralph and I
<br>
propose the following for all releases starting with v1.4.0:
<br>
<p>- Have two concurrent release series:
<br>
&nbsp;&nbsp;&nbsp;1. &quot;Super stable&quot;: for production users who care about stability
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;above all else.  They're willing to wait long periods of time
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;before updating to a new version of Open MPI.
<br>
&nbsp;&nbsp;&nbsp;2. &quot;Feature driven&quot;: for users who are willing to take a few chances
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to get new OMPI features -- but cannot endure the chaos of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nightly trunk tarballs.
<br>
<p>- The general idea is that a feature driven release is developed for a
<br>
&nbsp;&nbsp;&nbsp;while in an RM-regulated yet somewhat agile development style.  When
<br>
&nbsp;&nbsp;&nbsp;specific criteria are met (i.e., feature complete, schedule driven,
<br>
&nbsp;&nbsp;&nbsp;etc.), the feature release series is morphed into a super stable
<br>
&nbsp;&nbsp;&nbsp;state and released.  At this point, all development stops on that
<br>
&nbsp;&nbsp;&nbsp;release series; only bug fixes are allowed.
<br>
- RM's therefore become responsible for *two* release series: a
<br>
&nbsp;&nbsp;&nbsp;feature driven series and the corresponding super stable series that
<br>
&nbsp;&nbsp;&nbsp;emerges from it.
<br>
<p>***KEY POINT*** This &quot;two release&quot; methodology allows for the release
<br>
(and real-world testing) of new features in a much more timely fashion
<br>
than our current release methodology.
<br>
<p>Here's a crude ASCII art representation of how branches will work
<br>
using this proposal in SVN:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;v1.3 series/super stable
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;v1.3.0      v1.3.2                               v1.6.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/----|---|-------|-----------|---- 
<br>
<span class="quotelev1"> &gt;                 /-|---|---|-&gt;
</span><br>
trunk  /         v1.3.1              v1.3.1                /
<br>
------------------------------------------------------------------------&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\   v1.4.0  v1.4.2  v1.4.4  ...               v1.5.0   v1.5.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
\--|---|---|---|---|---|---|---|---|---------|--------|------&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;v1.4.1  v1.4.3      ...            now becomes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;v1.4/feature driven                     v1.5/super stable
<br>
<p>Here's how a typical release cycle works:
<br>
<p>- Assume that a &quot;super stable&quot; version exists; a release series that
<br>
&nbsp;&nbsp;&nbsp;has an odd minor number: v1.3, v1.5, v1.7, ...etc.
<br>
- For this example, let's assume that the super stable is v1.3.
<br>
- Only bug fixes go into the &quot;super stable&quot; series.
<br>
<p>- Plans for the next &quot;super stable&quot; are drawn up (v1.5 in this
<br>
&nbsp;&nbsp;&nbsp;example), including a list of goals, new features, a timeline, etc.
<br>
<p>- A new feature release series is created shortly after the first
<br>
&nbsp;&nbsp;&nbsp;super stable release with a minor version number that is even (e.g.,
<br>
&nbsp;&nbsp;&nbsp;v1.4, v1.6, v1.8, ...etc.).
<br>
- In this example, the feature release series will be v1.4.
<br>
- The v1.4 branch is taken to a point with at least some degree of
<br>
&nbsp;&nbsp;&nbsp;stability and released as v1.4.0.
<br>
<p>- Development on the SVN trunk continues.
<br>
<p>- According to a public schedule (probably tied to our teleconference
<br>
&nbsp;&nbsp;&nbsp;schedule), the RM's will approve the moving of features and bug
<br>
&nbsp;&nbsp;&nbsp;fixes to the feature release.
<br>
&nbsp;&nbsp;&nbsp;- Rather than submitting CMRs for the Gatekeeper to move, the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;owner&quot; of a particular feature/bug fix will be assigned a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;specific time to move the item to the feature branch.
<br>
&nbsp;&nbsp;&nbsp;- For example, George will have from Tues-Fri to move his cool new
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;feature X to the v1.4 branch.
<br>
&nbsp;&nbsp;&nbsp;- Friday night, new 1.4 tarballs are cut and everyone's MTT tries
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;them out.
<br>
&nbsp;&nbsp;&nbsp;- Iterate for the next week or so to get the v1.4 branch stable.
<br>
&nbsp;&nbsp;&nbsp;- Rinse, repeat.
<br>
<p>- Once the feature series meets certain criteria (e.g., feature
<br>
&nbsp;&nbsp;&nbsp;complete, timeline is met, etc.), it undergoes a period of intense
<br>
&nbsp;&nbsp;&nbsp;testing and debugging to achieve &quot;super stable&quot; status.  Once &quot;super
<br>
&nbsp;&nbsp;&nbsp;stable&quot; has been reached, the branch is renamed to be &quot;v1.5&quot; and we
<br>
&nbsp;&nbsp;&nbsp;start the whole cycle again (with v1.6/v1.7).
<br>
&nbsp;&nbsp;&nbsp;- CMRs and Gatekeepers are used on the super stable series.
<br>
&nbsp;&nbsp;&nbsp;- The older super stable series (v1.3) then becomes either
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unsupported or &quot;less supported.&quot;
<br>
<p>***KEY POINT*** That the schedule of moving features and bug fixes to
<br>
the release branch is somewhat fluid.  If George doesn't have time to
<br>
move feature X in his appointed week, the RMs shuffle him back further
<br>
in the schedule and take the next item off the list.  This shuffling
<br>
allows for rapid response to dynamic resource availability at each
<br>
organization.
<br>
<p>***KEY POINT*** One of the goals of this proposal is to remove the
<br>
stigma of not getting into a given release -- because the feature
<br>
branch will have somewhat frequent releases (probably somewhere
<br>
between 1-3 months; see below).  Hence, we want to try to avoid the
<br>
tendency of OMPI developers to pack in a million features right before
<br>
a release, fearing that if feature X is not included in this release,
<br>
it'll sit on the SVN trunk for a year before release.
<br>
<p>To ground all of the above discussion in a concrete proposal:
<br>
<p>&nbsp;&nbsp;&nbsp;1. Ralph and I will be responsible for the v1.4 and v1.5 series.
<br>
&nbsp;&nbsp;&nbsp;2. Immediately start treating the v1.3 series as &quot;super stable,&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(although the v1.3 series is grandfathered -- George and Brad
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;are still the RMs of v1.3 and are not bound by this proposal).
<br>
&nbsp;&nbsp;&nbsp;3. (more or less) Immediately create the v1.4 branch from the SVN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;trunk.  Start working toward v1.4.0.
<br>
&nbsp;&nbsp;&nbsp;4. Ralph and I will draw up a public list of desired features for
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the next &quot;super stable&quot; series -- v1.5.  This will include what
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;has already happened on the trunk (and will therefore be in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;v1.4.0).
<br>
&nbsp;&nbsp;&nbsp;5. Ralph and I will also make up a public schedule of when each
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;feature will move from the trunk to the v1.4 branch.  As
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mentioned above, this schedule is meant to be a living document;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;we fully expect that scheduled items will move around as
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;time/resources/features shift.
<br>
&nbsp;&nbsp;&nbsp;6. We'll periodically release 1.4.x versions with clear delineations
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;of what new features are available in each.  A SWAG for release
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frequency will be a release every 1-3 months.  It might be easier
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to say that our initial intent is to release no less than once a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;quarter; specific frequency will likely be determined on an
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case-by-case basis.
<br>
&nbsp;&nbsp;&nbsp;7. Once all the v1.5 features are in the v1.4 branch (or if we run
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;out of time, or ...), rename it to v1.5, conduct a concerted
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;community effort to stabilize v1.5 to &quot;super stable&quot; status, and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;release it.
<br>
&nbsp;&nbsp;&nbsp;8. Start the whole cycle again with v1.6/v1.7.
<br>
<p>Ralph and I feel that this proposal is well-suited to the development
<br>
style of the Open MPI community.  We'll describe this in detail and
<br>
answer any questions on tomorrow's teleconference.
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
<li><strong>Next message:</strong> <a href="5426.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20562"</a>
<li><strong>Previous message:</strong> <a href="5424.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
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
