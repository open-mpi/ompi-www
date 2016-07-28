<?
$subject_val = "Re: [OMPI devel] Update on 1.7.5";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  9 14:39:08 2014" -->
<!-- isoreceived="20140209193908" -->
<!-- sent="Sun, 9 Feb 2014 11:39:05 -0800" -->
<!-- isosent="20140209193905" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Update on 1.7.5" -->
<!-- id="CAAvDA17wLRLBBVnEEpFTQroKyDCXU0budu16fLjU2iNsL2MXPg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A346B535-BCB5-432B-B9DE-17F86CB2759C_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-02-09 14:39:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14063.php">Paul Hargrove: "Re: [OMPI devel] v1.7.5a1: mpirun failure on ppc/linux (regression vs 1.7.4)"</a>
<li><strong>Previous message:</strong> <a href="14061.php">Paul Hargrove: "Re: [OMPI devel] v1.7.5a1: mpirun failure on ppc/linux (regression vs 1.7.4)"</a>
<li><strong>In reply to:</strong> <a href="14052.php">Ralph Castain: "Re: [OMPI devel] Update on 1.7.5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Testing v1.7 w/ oshmem I did have a few problems:
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2014/02/14056.php">http://www.open-mpi.org/community/lists/devel/2014/02/14056.php</a>
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2014/02/14057.php">http://www.open-mpi.org/community/lists/devel/2014/02/14057.php</a>
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2014/02/14059.php">http://www.open-mpi.org/community/lists/devel/2014/02/14059.php</a>
<br>
&nbsp;&nbsp;Solaris MPI_Init failures that I have yet to triage
<br>
However, only the second of these four is oshmem related.
<br>
<p>It is worth mentioning that I did have success building on 44 distinct
<br>
(os,compiler,abi) combinations.
<br>
<p>-Paul
<br>
<p><p>On Sat, Feb 8, 2014 at 10:09 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The OSHMEM update is now in the 1.7.5 tarball - I would appreciate it if
</span><br>
<span class="quotelev1">&gt; people could exercise the tarball to ensure nothing broke. Note that shmem
</span><br>
<span class="quotelev1">&gt; examples are executing, but shmemrun is hanging instead of exiting.
</span><br>
<span class="quotelev1">&gt; Mellanox is looking into the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For now, I just want to verify that MPI operations remain stable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 7, 2014, at 2:09 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph,
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
<span class="quotelev1">&gt; All but torque are fully-automated tests and I need only check my email
</span><br>
<span class="quotelev1">&gt; for the results.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As you may have noticed, I've been working my way thru the CMR backlog on
</span><br>
<span class="quotelev2">&gt;&gt; 1.7.5. A large percentage of them were minor fixes (valgrind warning
</span><br>
<span class="quotelev2">&gt;&gt; suppressions, error message typos, etc.), so those went in the first round.
</span><br>
<span class="quotelev2">&gt;&gt; Today's round contains more &quot;meaty&quot; things, but I still consider them
</span><br>
<span class="quotelev2">&gt;&gt; fairly low risk as the code coverage impacted is contained.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm going to let this run thru tonight's MTT - if things look okay
</span><br>
<span class="quotelev2">&gt;&gt; tomorrow, I will roll the OSHMEM cmr into 1.7.5 over the weekend. This is
</span><br>
<span class="quotelev2">&gt;&gt; quite likely to destabilize the branch, so I expect to see breakage in the
</span><br>
<span class="quotelev2">&gt;&gt; resulting MTT reports. We'll deal with it as we go.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Beyond that, there are still about a dozen CMRs in the system awaiting
</span><br>
<span class="quotelev2">&gt;&gt; review. Jeff has the majority, followed by Nathan. If folks could please
</span><br>
<span class="quotelev2">&gt;&gt; review them early next week, I would appreciate it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;  _______________________________________________
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14062/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14063.php">Paul Hargrove: "Re: [OMPI devel] v1.7.5a1: mpirun failure on ppc/linux (regression vs 1.7.4)"</a>
<li><strong>Previous message:</strong> <a href="14061.php">Paul Hargrove: "Re: [OMPI devel] v1.7.5a1: mpirun failure on ppc/linux (regression vs 1.7.4)"</a>
<li><strong>In reply to:</strong> <a href="14052.php">Ralph Castain: "Re: [OMPI devel] Update on 1.7.5"</a>
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
