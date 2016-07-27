<?
$subject_val = "[hwloc-devel] hwloc-1.7 issue roundup";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May  5 12:18:42 2013" -->
<!-- isoreceived="20130505161842" -->
<!-- sent="Sun, 05 May 2013 11:18:35 -0500" -->
<!-- isosent="20130505161835" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc-1.7 issue roundup" -->
<!-- id="5186865B.3040603_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc-1.7 issue roundup<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-05 12:18:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3681.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>Previous message:</strong> <a href="3679.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5.3rc1r5576)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3681.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>Reply:</strong> <a href="3681.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>Reply:</strong> <a href="3684.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>Reply:</strong> <a href="3700.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>Reply:</strong> <a href="3707.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>Sorry for starting a new thread.  I'm trying to round-up all the issues
<br>
I've reported for hwloc-1.7 so far into a more manageable format.
<br>
<p>1. We had noticed errors with -D_POSIX_SOURCE that I had reported here:
<br>
<p><a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/04/3649.php">http://www.open-mpi.org/community/lists/hwloc-devel/2013/04/3649.php</a>
<br>
<p>The error with POSIX_SOURCE itself was pretty straightforward.  I was
<br>
able to fix it in the mpich version:
<br>
<p><a href="http://git.mpich.org/mpich.git/commitdiff/255da3f6">http://git.mpich.org/mpich.git/commitdiff/255da3f6</a>
<br>
<p>However, with our complete strict build flags, there were more errors.
<br>
Here's a summary and the relevant fixes:
<br>
<p>&nbsp;- hwloc's check for whether an explicitly function declaration is
<br>
needed (using _HWLOC_CHECK_DECL) was relying on whether a dummy call to
<br>
the function throws an error.  This only works if the function
<br>
declaration is already present in one of the headers.  If such a
<br>
declaration is not present, the test might fail with &quot;implicit function
<br>
declaration&quot; with the right CFLAGS.  This leads the m4 macro to think
<br>
that the declaration is already there in one of the headers and an
<br>
additional declaration is not needed.
<br>
<p>The below commit fixes this by adding a dummy function declaration,
<br>
together with the dummy function definition:
<br>
<p><a href="http://git.mpich.org/mpich.git/commitdiff/90da6e90">http://git.mpich.org/mpich.git/commitdiff/90da6e90</a>
<br>
<p>FWIW, mpich's version of this macro also uses a similar dummy function
<br>
declaration together with the dummy call to the function:
<br>
<p><a href="http://git.mpich.org/mpich.git/blob/HEAD:/confdb/aclocal_cc.m4#l1215">http://git.mpich.org/mpich.git/blob/HEAD:/confdb/aclocal_cc.m4#l1215</a>
<br>
<p>&nbsp;- For sysctl and sysctlbyname, I've updated hwloc/config.m4 to use a
<br>
full link test instead of just using AC_CHECK_FUNCS, which only checks
<br>
to see if the symbol exists or not.  For example, the prototype of
<br>
sysctl uses u_int, which on some platforms (such as FreeBSD) is only
<br>
defined under __BSD_VISIBLE, __USE_BSD or other similar definitions.  So
<br>
while the symbols &quot;sysctl&quot; and &quot;sysctlbyname&quot; might still be available
<br>
in libc (which autoconf checks for), they might not be actually usable.
<br>
<p>The below commit fixes this:
<br>
<p><a href="http://git.mpich.org/mpich.git/commitdiff/db276e4e">http://git.mpich.org/mpich.git/commitdiff/db276e4e</a>
<br>
<p>&nbsp;- A minor error where strings.h was not included for strcasecmp.
<br>
<p><a href="http://git.mpich.org/mpich.git/commitdiff/d2338c2d">http://git.mpich.org/mpich.git/commitdiff/d2338c2d</a>
<br>
<p>2. I had reported an issue with libltdl in embedded mode (also in the
<br>
above thread).  I believe Brice is looking into this, so I didn't
<br>
investigate it further.  I'm using a disgusting, but workable, patch to
<br>
workaround this error in mpich (see the
<br>
src/pm/hydra/tools/topo/hwloc/hwloc/src/Makefile.am part of the below
<br>
patch):
<br>
<p><a href="http://git.mpich.org/mpich.git/commitdiff/a3bce754">http://git.mpich.org/mpich.git/commitdiff/a3bce754</a>
<br>
<p>I'd appreciate a cleaner fix to this issue.
<br>
<p>3. I had reported an issue with the usage of getpagesize() instead of
<br>
hwloc_getpagesize() on the Mac.
<br>
<p><a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/05/3662.php">http://www.open-mpi.org/community/lists/hwloc-devel/2013/05/3662.php</a>
<br>
<p>I believe Samuel has already incorporated this in hwloc trunk.  Here is
<br>
the fix I used for your reference:
<br>
<p><a href="http://git.mpich.org/mpich.git/commitdiff/d9a67f40">http://git.mpich.org/mpich.git/commitdiff/d9a67f40</a>
<br>
<p>4. I had reported some warnings on the FreeBSD strict build here.
<br>
<p><a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/05/3669.php">http://www.open-mpi.org/community/lists/hwloc-devel/2013/05/3669.php</a>
<br>
<p>I believe Brice and Samuel are looking into it, but I don't have a
<br>
confirmation on whether this is fixed.  I didn't fix them in mpich yet.
<br>
<p>As you can tell, we are looking into upgrading to hwloc-1.7 for the next
<br>
major release of mpich (3.1).  With the above fixes, it looks like
<br>
things are working well.  Of course, we'll be going through a lot more
<br>
testing before the final release which would be later this year.
<br>
<p>&nbsp;-- Pavan
<br>
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3681.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>Previous message:</strong> <a href="3679.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5.3rc1r5576)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3681.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>Reply:</strong> <a href="3681.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>Reply:</strong> <a href="3684.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>Reply:</strong> <a href="3700.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>Reply:</strong> <a href="3707.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
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
