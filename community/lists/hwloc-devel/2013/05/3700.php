<?
$subject_val = "Re: [hwloc-devel] hwloc-1.7 issue roundup";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  6 08:24:57 2013" -->
<!-- isoreceived="20130506122457" -->
<!-- sent="Mon, 06 May 2013 14:24:51 +0200" -->
<!-- isosent="20130506122451" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.7 issue roundup" -->
<!-- id="5187A113.906_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5186865B.3040603_at_mcs.anl.gov" -->
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
<strong>Date:</strong> 2013-05-06 08:24:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3701.php">Brice Goglin: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<li><strong>Previous message:</strong> <a href="3699.php">Pavan Balaji: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<li><strong>In reply to:</strong> <a href="3680.php">Pavan Balaji: "[hwloc-devel] hwloc-1.7 issue roundup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3702.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>Reply:</strong> <a href="3702.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am testing your patches on FreeBSD 9.1 under POSIX_SOURCE, things
<br>
compile fine but hwloc complains that it cannot find the number of
<br>
processors (because it needs sysctl or sysconf to do so, not available
<br>
without BSD types). So hwloc is almost useless in this case. Does that
<br>
look OK to you ? You're only using strict build flags for compile
<br>
testing, right?
<br>
<p>Brice
<br>
<p><p><p>Le 05/05/2013 18:18, Pavan Balaji a &#233;crit :
<br>
<span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for starting a new thread.  I'm trying to round-up all the issues
</span><br>
<span class="quotelev1">&gt; I've reported for hwloc-1.7 so far into a more manageable format.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. We had noticed errors with -D_POSIX_SOURCE that I had reported here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/04/3649.php">http://www.open-mpi.org/community/lists/hwloc-devel/2013/04/3649.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error with POSIX_SOURCE itself was pretty straightforward.  I was
</span><br>
<span class="quotelev1">&gt; able to fix it in the mpich version:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://git.mpich.org/mpich.git/commitdiff/255da3f6">http://git.mpich.org/mpich.git/commitdiff/255da3f6</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, with our complete strict build flags, there were more errors.
</span><br>
<span class="quotelev1">&gt; Here's a summary and the relevant fixes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - hwloc's check for whether an explicitly function declaration is
</span><br>
<span class="quotelev1">&gt; needed (using _HWLOC_CHECK_DECL) was relying on whether a dummy call to
</span><br>
<span class="quotelev1">&gt; the function throws an error.  This only works if the function
</span><br>
<span class="quotelev1">&gt; declaration is already present in one of the headers.  If such a
</span><br>
<span class="quotelev1">&gt; declaration is not present, the test might fail with &quot;implicit function
</span><br>
<span class="quotelev1">&gt; declaration&quot; with the right CFLAGS.  This leads the m4 macro to think
</span><br>
<span class="quotelev1">&gt; that the declaration is already there in one of the headers and an
</span><br>
<span class="quotelev1">&gt; additional declaration is not needed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The below commit fixes this by adding a dummy function declaration,
</span><br>
<span class="quotelev1">&gt; together with the dummy function definition:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://git.mpich.org/mpich.git/commitdiff/90da6e90">http://git.mpich.org/mpich.git/commitdiff/90da6e90</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, mpich's version of this macro also uses a similar dummy function
</span><br>
<span class="quotelev1">&gt; declaration together with the dummy call to the function:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://git.mpich.org/mpich.git/blob/HEAD:/confdb/aclocal_cc.m4#l1215">http://git.mpich.org/mpich.git/blob/HEAD:/confdb/aclocal_cc.m4#l1215</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - For sysctl and sysctlbyname, I've updated hwloc/config.m4 to use a
</span><br>
<span class="quotelev1">&gt; full link test instead of just using AC_CHECK_FUNCS, which only checks
</span><br>
<span class="quotelev1">&gt; to see if the symbol exists or not.  For example, the prototype of
</span><br>
<span class="quotelev1">&gt; sysctl uses u_int, which on some platforms (such as FreeBSD) is only
</span><br>
<span class="quotelev1">&gt; defined under __BSD_VISIBLE, __USE_BSD or other similar definitions.  So
</span><br>
<span class="quotelev1">&gt; while the symbols &quot;sysctl&quot; and &quot;sysctlbyname&quot; might still be available
</span><br>
<span class="quotelev1">&gt; in libc (which autoconf checks for), they might not be actually usable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The below commit fixes this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://git.mpich.org/mpich.git/commitdiff/db276e4e">http://git.mpich.org/mpich.git/commitdiff/db276e4e</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - A minor error where strings.h was not included for strcasecmp.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://git.mpich.org/mpich.git/commitdiff/d2338c2d">http://git.mpich.org/mpich.git/commitdiff/d2338c2d</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. I had reported an issue with libltdl in embedded mode (also in the
</span><br>
<span class="quotelev1">&gt; above thread).  I believe Brice is looking into this, so I didn't
</span><br>
<span class="quotelev1">&gt; investigate it further.  I'm using a disgusting, but workable, patch to
</span><br>
<span class="quotelev1">&gt; workaround this error in mpich (see the
</span><br>
<span class="quotelev1">&gt; src/pm/hydra/tools/topo/hwloc/hwloc/src/Makefile.am part of the below
</span><br>
<span class="quotelev1">&gt; patch):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://git.mpich.org/mpich.git/commitdiff/a3bce754">http://git.mpich.org/mpich.git/commitdiff/a3bce754</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd appreciate a cleaner fix to this issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. I had reported an issue with the usage of getpagesize() instead of
</span><br>
<span class="quotelev1">&gt; hwloc_getpagesize() on the Mac.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/05/3662.php">http://www.open-mpi.org/community/lists/hwloc-devel/2013/05/3662.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe Samuel has already incorporated this in hwloc trunk.  Here is
</span><br>
<span class="quotelev1">&gt; the fix I used for your reference:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://git.mpich.org/mpich.git/commitdiff/d9a67f40">http://git.mpich.org/mpich.git/commitdiff/d9a67f40</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. I had reported some warnings on the FreeBSD strict build here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/05/3669.php">http://www.open-mpi.org/community/lists/hwloc-devel/2013/05/3669.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe Brice and Samuel are looking into it, but I don't have a
</span><br>
<span class="quotelev1">&gt; confirmation on whether this is fixed.  I didn't fix them in mpich yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you can tell, we are looking into upgrading to hwloc-1.7 for the next
</span><br>
<span class="quotelev1">&gt; major release of mpich (3.1).  With the above fixes, it looks like
</span><br>
<span class="quotelev1">&gt; things are working well.  Of course, we'll be going through a lot more
</span><br>
<span class="quotelev1">&gt; testing before the final release which would be later this year.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -- Pavan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3701.php">Brice Goglin: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<li><strong>Previous message:</strong> <a href="3699.php">Pavan Balaji: "Re: [hwloc-devel] hwloc and c89/c99"</a>
<li><strong>In reply to:</strong> <a href="3680.php">Pavan Balaji: "[hwloc-devel] hwloc-1.7 issue roundup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3702.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>Reply:</strong> <a href="3702.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
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
