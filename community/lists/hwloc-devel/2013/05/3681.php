<?
$subject_val = "Re: [hwloc-devel] hwloc-1.7 issue roundup";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May  5 13:05:26 2013" -->
<!-- isoreceived="20130505170526" -->
<!-- sent="Sun, 05 May 2013 19:05:20 +0200" -->
<!-- isosent="20130505170520" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.7 issue roundup" -->
<!-- id="51869150.6060303_at_inria.fr" -->
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
<strong>Date:</strong> 2013-05-05 13:05:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3682.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>Previous message:</strong> <a href="3680.php">Pavan Balaji: "[hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>In reply to:</strong> <a href="3680.php">Pavan Balaji: "[hwloc-devel] hwloc-1.7 issue roundup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3682.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>Reply:</strong> <a href="3682.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 05/05/2013 18:18, Pavan Balaji a &#233;crit :
<br>
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
<p>I'll look at this, when/where did you need this? (for documentation and
<br>
maybe testing one day)
<br>
<p><span class="quotelev1">&gt;  - For sysctl and sysctlbyname, I've updated hwloc/config.m4 to use a
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
<p>I'll look at this too.
<br>
<p><span class="quotelev1">&gt;  - A minor error where strings.h was not included for strcasecmp.
</span><br>
<p>Just applied to trunk and v1.7.
<br>
<p><span class="quotelev1">&gt; 2. I had reported an issue with libltdl in embedded mode (also in the
</span><br>
<span class="quotelev1">&gt; above thread).  I believe Brice is looking into this, so I didn't
</span><br>
<span class="quotelev1">&gt; investigate it further. 
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; I'd appreciate a cleaner fix to this issue.
</span><br>
<p>I am waiting for Jeff's feedback in thread &quot;hwloc embedding vs libltdl&quot;.
<br>
<p>Not sure yet I will backport this into v1.7.1 since it is somehow
<br>
intrusive. To be discussed
<br>
<p><span class="quotelev1">&gt; 3. I had reported an issue with the usage of getpagesize() instead of
</span><br>
<span class="quotelev1">&gt; hwloc_getpagesize() on the Mac.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/05/3662.php">http://www.open-mpi.org/community/lists/hwloc-devel/2013/05/3662.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe Samuel has already incorporated this in hwloc trunk.
</span><br>
<p>Yes, and it was backported to v1.7 too.
<br>
<p><span class="quotelev1">&gt; 4. I had reported some warnings on the FreeBSD strict build here.
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
<p>Fixed on trunk and v1.7.
<br>
<p><p>To summarize:
<br>
* 1 partially applied, and the rest will likely be taken care of
<br>
* 2 needs review by Jeff
<br>
* 3-4 are fixed
<br>
<p>Thanks
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3682.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>Previous message:</strong> <a href="3680.php">Pavan Balaji: "[hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>In reply to:</strong> <a href="3680.php">Pavan Balaji: "[hwloc-devel] hwloc-1.7 issue roundup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3682.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>Reply:</strong> <a href="3682.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
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
