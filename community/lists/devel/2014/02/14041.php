<?
$subject_val = "Re: [OMPI devel] Update on 1.7.5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  7 17:10:01 2014" -->
<!-- isoreceived="20140207221001" -->
<!-- sent="Fri, 7 Feb 2014 14:09:58 -0800" -->
<!-- isosent="20140207220958" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Update on 1.7.5" -->
<!-- id="CAAvDA14Qt0-Ya4mmevxg+EgSrMw+qd8W5ynBif5Z=KmZCovc+g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D7F0E099-DE47-47E7-A303-A3F16E2F0CF5_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Update on 1.7.5<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-07 17:09:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14042.php">Joshua Ladd: "[OMPI devel] RFC: Add an OPAL rand and srand"</a>
<li><strong>Previous message:</strong> <a href="14040.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>In reply to:</strong> <a href="14038.php">Ralph Castain: "[OMPI devel] Update on 1.7.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14052.php">Ralph Castain: "Re: [OMPI devel] Update on 1.7.5"</a>
<li><strong>Reply:</strong> <a href="14052.php">Ralph Castain: "Re: [OMPI devel] Update on 1.7.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>I'll try to test tonight's v1.7 taball for:
<br>
+ ia64 atomics (#4174)
<br>
+ bad getpwuid (#4164)
<br>
+ opalpath_nfs/EPERM (#4125)
<br>
+ torque smp (#4227)
<br>
<p>All but torque are fully-automated tests and I need only check my email for
<br>
the results.
<br>
The torque one will require manual job submission.
<br>
<p>-Paul
<br>
<p><p>On Fri, Feb 7, 2014 at 1:55 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you may have noticed, I've been working my way thru the CMR backlog on
</span><br>
<span class="quotelev1">&gt; 1.7.5. A large percentage of them were minor fixes (valgrind warning
</span><br>
<span class="quotelev1">&gt; suppressions, error message typos, etc.), so those went in the first round.
</span><br>
<span class="quotelev1">&gt; Today's round contains more &quot;meaty&quot; things, but I still consider them
</span><br>
<span class="quotelev1">&gt; fairly low risk as the code coverage impacted is contained.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm going to let this run thru tonight's MTT - if things look okay
</span><br>
<span class="quotelev1">&gt; tomorrow, I will roll the OSHMEM cmr into 1.7.5 over the weekend. This is
</span><br>
<span class="quotelev1">&gt; quite likely to destabilize the branch, so I expect to see breakage in the
</span><br>
<span class="quotelev1">&gt; resulting MTT reports. We'll deal with it as we go.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Beyond that, there are still about a dozen CMRs in the system awaiting
</span><br>
<span class="quotelev1">&gt; review. Jeff has the majority, followed by Nathan. If folks could please
</span><br>
<span class="quotelev1">&gt; review them early next week, I would appreciate it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14041/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14042.php">Joshua Ladd: "[OMPI devel] RFC: Add an OPAL rand and srand"</a>
<li><strong>Previous message:</strong> <a href="14040.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>In reply to:</strong> <a href="14038.php">Ralph Castain: "[OMPI devel] Update on 1.7.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14052.php">Ralph Castain: "Re: [OMPI devel] Update on 1.7.5"</a>
<li><strong>Reply:</strong> <a href="14052.php">Ralph Castain: "Re: [OMPI devel] Update on 1.7.5"</a>
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
