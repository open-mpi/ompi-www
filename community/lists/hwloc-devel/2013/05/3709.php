<?
$subject_val = "Re: [hwloc-devel] hwloc-1.7 issue roundup";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  7 11:07:10 2013" -->
<!-- isoreceived="20130507150710" -->
<!-- sent="Tue, 07 May 2013 17:07:01 +0200" -->
<!-- isosent="20130507150701" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.7 issue roundup" -->
<!-- id="51891895.6010903_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="518916C8.5070006_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.7 issue roundup<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-07 11:07:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3710.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>Previous message:</strong> <a href="3708.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>In reply to:</strong> <a href="3708.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3710.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>Reply:</strong> <a href="3710.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We got several important bug reports (and fixes) in the last days. I
<br>
think we don't need anything new aside from the pending LTDL fix. So
<br>
let's say within 2 weeks.
<br>
<p>Brice
<br>
<p><p>Le 07/05/2013 16:59, Pavan Balaji a &#233;crit :
<br>
<span class="quotelev1">&gt; Thanks Brice.  What's the timeframe for 1.7.1?  I want to see if we can
</span><br>
<span class="quotelev1">&gt; move to that for our mpich-3.1 release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -- Pavan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 05/07/2013 09:53 AM US Central Time, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Pavan,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just pushed another round of commits to trunk, which hopefully address
</span><br>
<span class="quotelev2">&gt;&gt; everything said earlier (except the LDTL problem waiting for Jeff's review).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) autogen args
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/hwloc/changeset/5586">https://svn.open-mpi.org/trac/hwloc/changeset/5586</a>
</span><br>
<span class="quotelev2">&gt;&gt; 2) sys/sysctl.h #ifdef fix
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/hwloc/changeset/5587">https://svn.open-mpi.org/trac/hwloc/changeset/5587</a>
</span><br>
<span class="quotelev2">&gt;&gt; 3) sysctl/sysctlbyname check fix (include additional fix for icc)
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/hwloc/changeset/5598">https://svn.open-mpi.org/trac/hwloc/changeset/5598</a>
</span><br>
<span class="quotelev2">&gt;&gt; 4) HWLOC_CHECK_DECL improvement
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/hwloc/changeset/5599">https://svn.open-mpi.org/trac/hwloc/changeset/5599</a>
</span><br>
<span class="quotelev2">&gt;&gt; 5) strtoull check
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/hwloc/changeset/5600">https://svn.open-mpi.org/trac/hwloc/changeset/5600</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (1) and (2) will be backported to v1.7 once regression testing is done.
</span><br>
<span class="quotelev2">&gt;&gt; (5) should likely be OK too.
</span><br>
<span class="quotelev2">&gt;&gt; (3) and more importantly (4) touch ugly configury, I am not sure I want
</span><br>
<span class="quotelev2">&gt;&gt; to backport these. Or maybe later, in case we get more testing before
</span><br>
<span class="quotelev2">&gt;&gt; v1.7.1 occurs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 05/05/2013 18:18, Pavan Balaji a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry for starting a new thread.  I'm trying to round-up all the issues
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've reported for hwloc-1.7 so far into a more manageable format.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. We had noticed errors with -D_POSIX_SOURCE that I had reported here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/04/3649.php">http://www.open-mpi.org/community/lists/hwloc-devel/2013/04/3649.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The error with POSIX_SOURCE itself was pretty straightforward.  I was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; able to fix it in the mpich version:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://git.mpich.org/mpich.git/commitdiff/255da3f6">http://git.mpich.org/mpich.git/commitdiff/255da3f6</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, with our complete strict build flags, there were more errors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's a summary and the relevant fixes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  - hwloc's check for whether an explicitly function declaration is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; needed (using _HWLOC_CHECK_DECL) was relying on whether a dummy call to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the function throws an error.  This only works if the function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declaration is already present in one of the headers.  If such a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declaration is not present, the test might fail with &quot;implicit function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declaration&quot; with the right CFLAGS.  This leads the m4 macro to think
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that the declaration is already there in one of the headers and an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; additional declaration is not needed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The below commit fixes this by adding a dummy function declaration,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; together with the dummy function definition:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://git.mpich.org/mpich.git/commitdiff/90da6e90">http://git.mpich.org/mpich.git/commitdiff/90da6e90</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FWIW, mpich's version of this macro also uses a similar dummy function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declaration together with the dummy call to the function:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://git.mpich.org/mpich.git/blob/HEAD:/confdb/aclocal_cc.m4#l1215">http://git.mpich.org/mpich.git/blob/HEAD:/confdb/aclocal_cc.m4#l1215</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  - For sysctl and sysctlbyname, I've updated hwloc/config.m4 to use a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; full link test instead of just using AC_CHECK_FUNCS, which only checks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to see if the symbol exists or not.  For example, the prototype of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sysctl uses u_int, which on some platforms (such as FreeBSD) is only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; defined under __BSD_VISIBLE, __USE_BSD or other similar definitions.  So
</span><br>
<span class="quotelev3">&gt;&gt;&gt; while the symbols &quot;sysctl&quot; and &quot;sysctlbyname&quot; might still be available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in libc (which autoconf checks for), they might not be actually usable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The below commit fixes this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://git.mpich.org/mpich.git/commitdiff/db276e4e">http://git.mpich.org/mpich.git/commitdiff/db276e4e</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  - A minor error where strings.h was not included for strcasecmp.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://git.mpich.org/mpich.git/commitdiff/d2338c2d">http://git.mpich.org/mpich.git/commitdiff/d2338c2d</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. I had reported an issue with libltdl in embedded mode (also in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; above thread).  I believe Brice is looking into this, so I didn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; investigate it further.  I'm using a disgusting, but workable, patch to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; workaround this error in mpich (see the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; src/pm/hydra/tools/topo/hwloc/hwloc/src/Makefile.am part of the below
</span><br>
<span class="quotelev3">&gt;&gt;&gt; patch):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://git.mpich.org/mpich.git/commitdiff/a3bce754">http://git.mpich.org/mpich.git/commitdiff/a3bce754</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'd appreciate a cleaner fix to this issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. I had reported an issue with the usage of getpagesize() instead of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc_getpagesize() on the Mac.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/05/3662.php">http://www.open-mpi.org/community/lists/hwloc-devel/2013/05/3662.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I believe Samuel has already incorporated this in hwloc trunk.  Here is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the fix I used for your reference:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://git.mpich.org/mpich.git/commitdiff/d9a67f40">http://git.mpich.org/mpich.git/commitdiff/d9a67f40</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4. I had reported some warnings on the FreeBSD strict build here.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/05/3669.php">http://www.open-mpi.org/community/lists/hwloc-devel/2013/05/3669.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I believe Brice and Samuel are looking into it, but I don't have a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; confirmation on whether this is fixed.  I didn't fix them in mpich yet.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As you can tell, we are looking into upgrading to hwloc-1.7 for the next
</span><br>
<span class="quotelev3">&gt;&gt;&gt; major release of mpich (3.1).  With the above fixes, it looks like
</span><br>
<span class="quotelev3">&gt;&gt;&gt; things are working well.  Of course, we'll be going through a lot more
</span><br>
<span class="quotelev3">&gt;&gt;&gt; testing before the final release which would be later this year.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  -- Pavan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3710.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>Previous message:</strong> <a href="3708.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>In reply to:</strong> <a href="3708.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3710.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>Reply:</strong> <a href="3710.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
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
