<?
$subject_val = "Re: [OMPI devel] origin/v1.8 - compilation failed";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 23 09:09:36 2014" -->
<!-- isoreceived="20141023130936" -->
<!-- sent="Thu, 23 Oct 2014 06:09:31 -0700" -->
<!-- isosent="20141023130931" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] origin/v1.8 - compilation failed" -->
<!-- id="6AE8786E-0AE4-48FE-BDD2-686D17F19EAD_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAO1KyaSvErC_gOsQdPsO69Oa3QB_qfYusHdpYZaMBbKcgfYnA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] origin/v1.8 - compilation failed<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-23 09:09:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16088.php">Ralph Castain: "[OMPI devel] Deprecated call in sharedfp framework"</a>
<li><strong>Previous message:</strong> <a href="16086.php">Mike Dubman: "Re: [OMPI devel] origin/v1.8 - compilation failed"</a>
<li><strong>In reply to:</strong> <a href="16086.php">Mike Dubman: "Re: [OMPI devel] origin/v1.8 - compilation failed"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes - I fixed it in v1.8 immediately after the nightly tarball failed to build. So telling us it -was- broken is a stale report - a subsequent Jenkins run would show it as fixed.
<br>
<p><p><span class="quotelev1">&gt; On Oct 23, 2014, at 6:07 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but fix was in the master
</span><br>
<span class="quotelev1">&gt; jenkins complained about v1.8 where fix is not present.
</span><br>
<span class="quotelev1">&gt; do I miss something?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Oct 23, 2014 at 4:01 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; My bad - I see what Gilles is talking about. Still need to figure out a way to avoid these commit-by-commit complaints when later commits already fixed the problem. Isn't there some way to educate Jenkins to avoid it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 23, 2014, at 5:57 AM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I already fixed this immediately after it was detected. We don't want to backport the opal changes that occurred when we moved the BTLs down to OPAL. All that was required was to rename opal_process_info back to ompi_process_info
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Mike: these stale Jenkins reports are causing people to waste time. Could you please first check to see if the problem was already fixed before sending bogus reports out?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 23, 2014, at 2:29 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden] &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mike,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the root cause is vader was not fully backported to v1.8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (two OPAL_* macros were not backported to OMPI_*)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i fixed it in <a href="https://github.com/open-mpi/ompi-release/pull/49">https://github.com/open-mpi/ompi-release/pull/49</a> &lt;<a href="https://github.com/open-mpi/ompi-release/pull/49">https://github.com/open-mpi/ompi-release/pull/49</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; please note a similar warning is fixed in <a href="https://github.com/open-mpi/ompi-release/pull/48">https://github.com/open-mpi/ompi-release/pull/48</a> &lt;<a href="https://github.com/open-mpi/ompi-release/pull/48">https://github.com/open-mpi/ompi-release/pull/48</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2014/10/23 17:14, Mike Dubman wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *05:12:10* more information, such as the ld(1) and ld.so(8) manual pages.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *05:12:10*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *05:12:10* make[3]: Leaving directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `/scrap/jenkins/workspace/hpc-ompi-shmem/label/r-vmb-centos5-u7-x86-64/ompi/mca/btl/vader'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *05:12:10* make[2]: Leaving directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `/scrap/jenkins/workspace/hpc-ompi-shmem/label/r-vmb-centos5-u7-x86-64/ompi/mca/btl/vader'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *05:12:10* Making install in mca/btl/sm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *05:12:10* make[2]: Entering directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `/scrap/jenkins/workspace/hpc-ompi-shmem/label/r-vmb-centos5-u7-x86-64/ompi/mca/btl/sm'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *05:12:10*   CC       mca_btl_sm_la-btl_sm.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *05:12:11*   CC       mca_btl_sm_la-btl_sm_component.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *05:12:12* btl_sm_component.c: In function 'mca_btl_sm_component_verify':
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *05:12:12* btl_sm_component.c:161: error: 'mca_btl_sm_dummy_get' undeclared
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (first use in this function)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *05:12:12* btl_sm_component.c:161: error: (Each undeclared identifier is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reported only once
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *05:12:12* btl_sm_component.c:161: error: for each function it appears in.)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *05:12:12* btl_sm_component.c: In function 'mca_btl_sm_component_init':
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *05:12:12* btl_sm_component.c:915: error: 'opal_process_info' undeclared
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (first use in this function)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *05:12:12* make[2]: *** [mca_btl_sm_la-btl_sm_component.lo] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *05:12:12* make[2]: Leaving directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `/scrap/jenkins/workspace/hpc-ompi-shmem/label/r-vmb-centos5-u7-x86-64/ompi/mca/btl/sm'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *05:12:12* make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *05:12:12* make[1]: Leaving directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `/scrap/jenkins/workspace/hpc-ompi-shmem/label/r-vmb-centos5-u7-x86-64/ompi'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *05:12:12* make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *05:12:12* Build step 'Execute shell' marked build as failure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *05:12:12* [BFA] Scanning build for known causes...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16079.php">http://www.open-mpi.org/community/lists/devel/2014/10/16079.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/10/16079.php">http://www.open-mpi.org/community/lists/devel/2014/10/16079.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16081.php">http://www.open-mpi.org/community/lists/devel/2014/10/16081.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/10/16081.php">http://www.open-mpi.org/community/lists/devel/2014/10/16081.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16085.php">http://www.open-mpi.org/community/lists/devel/2014/10/16085.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/10/16085.php">http://www.open-mpi.org/community/lists/devel/2014/10/16085.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16086.php">http://www.open-mpi.org/community/lists/devel/2014/10/16086.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16087/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16088.php">Ralph Castain: "[OMPI devel] Deprecated call in sharedfp framework"</a>
<li><strong>Previous message:</strong> <a href="16086.php">Mike Dubman: "Re: [OMPI devel] origin/v1.8 - compilation failed"</a>
<li><strong>In reply to:</strong> <a href="16086.php">Mike Dubman: "Re: [OMPI devel] origin/v1.8 - compilation failed"</a>
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
