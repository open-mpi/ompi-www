<?
$subject_val = "Re: [OMPI devel] origin/v1.8 - compilation failed";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 23 09:00:34 2014" -->
<!-- isoreceived="20141023130034" -->
<!-- sent="Thu, 23 Oct 2014 16:00:32 +0300" -->
<!-- isosent="20141023130032" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] origin/v1.8 - compilation failed" -->
<!-- id="CAAO1KybPv8zJW1znS7-R_8ys9moeyBgOeXe2=s6CCLSSq6c=tA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4DDE2A8A-154A-4337-9C78-A9F4A1636A1E_at_open-mpi.org" -->
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
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-23 09:00:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16085.php">Ralph Castain: "Re: [OMPI devel] origin/v1.8 - compilation failed"</a>
<li><strong>Previous message:</strong> <a href="16083.php">Ralph Castain: "Re: [OMPI devel] origin/v1.8 - compilation failed"</a>
<li><strong>In reply to:</strong> <a href="16083.php">Ralph Castain: "Re: [OMPI devel] origin/v1.8 - compilation failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16085.php">Ralph Castain: "Re: [OMPI devel] origin/v1.8 - compilation failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
sure,
<br>
was it fixed in the master only or in the origin/v1,8 as well?
<br>
<p>On Thu, Oct 23, 2014 at 3:57 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I already fixed this immediately after it was detected. We don't want to
</span><br>
<span class="quotelev1">&gt; backport the opal changes that occurred when we moved the BTLs down to
</span><br>
<span class="quotelev1">&gt; OPAL. All that was required was to rename opal_process_info back to
</span><br>
<span class="quotelev1">&gt; ompi_process_info
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mike: these stale Jenkins reports are causing people to waste time. Could
</span><br>
<span class="quotelev1">&gt; you please first check to see if the problem was already fixed before
</span><br>
<span class="quotelev1">&gt; sending bogus reports out?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 23, 2014, at 2:29 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Mike,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the root cause is vader was not fully backported to v1.8
</span><br>
<span class="quotelev1">&gt; (two OPAL_* macros were not backported to OMPI_*)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i fixed it in <a href="https://github.com/open-mpi/ompi-release/pull/49">https://github.com/open-mpi/ompi-release/pull/49</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; please note a similar warning is fixed in
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi-release/pull/48">https://github.com/open-mpi/ompi-release/pull/48</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/10/23 17:14, Mike Dubman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *05:12:10* more information, such as the ld(1) and ld.so(8) manual pages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *05:12:10*
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *05:12:10* make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/scrap/jenkins/workspace/hpc-ompi-shmem/label/r-vmb-centos5-u7-x86-64/ompi/mca/btl/vader'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *05:12:10* make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/scrap/jenkins/workspace/hpc-ompi-shmem/label/r-vmb-centos5-u7-x86-64/ompi/mca/btl/vader'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *05:12:10* Making install in mca/btl/sm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *05:12:10* make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/scrap/jenkins/workspace/hpc-ompi-shmem/label/r-vmb-centos5-u7-x86-64/ompi/mca/btl/sm'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *05:12:10*   CC       mca_btl_sm_la-btl_sm.lo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *05:12:11*   CC       mca_btl_sm_la-btl_sm_component.lo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *05:12:12* btl_sm_component.c: In function 'mca_btl_sm_component_verify':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *05:12:12* btl_sm_component.c:161: error: 'mca_btl_sm_dummy_get' undeclared
</span><br>
<span class="quotelev1">&gt; (first use in this function)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *05:12:12* btl_sm_component.c:161: error: (Each undeclared identifier is
</span><br>
<span class="quotelev1">&gt; reported only once
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *05:12:12* btl_sm_component.c:161: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *05:12:12* btl_sm_component.c: In function 'mca_btl_sm_component_init':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *05:12:12* btl_sm_component.c:915: error: 'opal_process_info' undeclared
</span><br>
<span class="quotelev1">&gt; (first use in this function)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *05:12:12* make[2]: *** [mca_btl_sm_la-btl_sm_component.lo] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *05:12:12* make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/scrap/jenkins/workspace/hpc-ompi-shmem/label/r-vmb-centos5-u7-x86-64/ompi/mca/btl/sm'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *05:12:12* make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *05:12:12* make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/scrap/jenkins/workspace/hpc-ompi-shmem/label/r-vmb-centos5-u7-x86-64/ompi'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *05:12:12* make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *05:12:12* Build step 'Execute shell' marked build as failure
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *05:12:12* [BFA] Scanning build for known causes...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16079.php">http://www.open-mpi.org/community/lists/devel/2014/10/16079.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16081.php">http://www.open-mpi.org/community/lists/devel/2014/10/16081.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16083.php">http://www.open-mpi.org/community/lists/devel/2014/10/16083.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind Regards,
M.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16084/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16085.php">Ralph Castain: "Re: [OMPI devel] origin/v1.8 - compilation failed"</a>
<li><strong>Previous message:</strong> <a href="16083.php">Ralph Castain: "Re: [OMPI devel] origin/v1.8 - compilation failed"</a>
<li><strong>In reply to:</strong> <a href="16083.php">Ralph Castain: "Re: [OMPI devel] origin/v1.8 - compilation failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16085.php">Ralph Castain: "Re: [OMPI devel] origin/v1.8 - compilation failed"</a>
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
