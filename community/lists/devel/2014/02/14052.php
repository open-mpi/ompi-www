<?
$subject_val = "Re: [OMPI devel] Update on 1.7.5";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  8 13:10:33 2014" -->
<!-- isoreceived="20140208181033" -->
<!-- sent="Sat, 8 Feb 2014 10:09:08 -0800" -->
<!-- isosent="20140208180908" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Update on 1.7.5" -->
<!-- id="A346B535-BCB5-432B-B9DE-17F86CB2759C_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA14Qt0-Ya4mmevxg+EgSrMw+qd8W5ynBif5Z=KmZCovc+g_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-08 13:09:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14053.php">Ralph Castain: "[OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="14051.php">Ralph Castain: "Re: [OMPI devel] Still having issues w/ opal_path_nfs and EPERM"</a>
<li><strong>In reply to:</strong> <a href="14041.php">Paul Hargrove: "Re: [OMPI devel] Update on 1.7.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14062.php">Paul Hargrove: "Re: [OMPI devel] Update on 1.7.5"</a>
<li><strong>Reply:</strong> <a href="14062.php">Paul Hargrove: "Re: [OMPI devel] Update on 1.7.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The OSHMEM update is now in the 1.7.5 tarball - I would appreciate it if people could exercise the tarball to ensure nothing broke. Note that shmem examples are executing, but shmemrun is hanging instead of exiting. Mellanox is looking into the problem.
<br>
<p>For now, I just want to verify that MPI operations remain stable.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Feb 7, 2014, at 2:09 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll try to test tonight's v1.7 taball for:
</span><br>
<span class="quotelev1">&gt; + ia64 atomics (#4174)
</span><br>
<span class="quotelev1">&gt; + bad getpwuid (#4164)
</span><br>
<span class="quotelev1">&gt; + opalpath_nfs/EPERM (#4125)
</span><br>
<span class="quotelev1">&gt; + torque smp (#4227)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All but torque are fully-automated tests and I need only check my email for the results.
</span><br>
<span class="quotelev1">&gt; The torque one will require manual job submission.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Feb 7, 2014 at 1:55 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you may have noticed, I've been working my way thru the CMR backlog on 1.7.5. A large percentage of them were minor fixes (valgrind warning suppressions, error message typos, etc.), so those went in the first round. Today's round contains more &quot;meaty&quot; things, but I still consider them fairly low risk as the code coverage impacted is contained.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm going to let this run thru tonight's MTT - if things look okay tomorrow, I will roll the OSHMEM cmr into 1.7.5 over the weekend. This is quite likely to destabilize the branch, so I expect to see breakage in the resulting MTT reports. We'll deal with it as we go.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Beyond that, there are still about a dozen CMRs in the system awaiting review. Jeff has the majority, followed by Nathan. If folks could please review them early next week, I would appreciate it.
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14052/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14053.php">Ralph Castain: "[OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="14051.php">Ralph Castain: "Re: [OMPI devel] Still having issues w/ opal_path_nfs and EPERM"</a>
<li><strong>In reply to:</strong> <a href="14041.php">Paul Hargrove: "Re: [OMPI devel] Update on 1.7.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14062.php">Paul Hargrove: "Re: [OMPI devel] Update on 1.7.5"</a>
<li><strong>Reply:</strong> <a href="14062.php">Paul Hargrove: "Re: [OMPI devel] Update on 1.7.5"</a>
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
