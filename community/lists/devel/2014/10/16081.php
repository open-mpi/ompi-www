<?
$subject_val = "Re: [OMPI devel] origin/v1.8 - compilation failed";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 23 05:29:18 2014" -->
<!-- isoreceived="20141023092918" -->
<!-- sent="Thu, 23 Oct 2014 18:29:18 +0900" -->
<!-- isosent="20141023092918" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] origin/v1.8 - compilation failed" -->
<!-- id="5448CA6E.20000_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAO1Kya5JwaFfa6dg-AGCeGGJSC2czM0PCSQBy9McYxWX0J=Gg_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-23 05:29:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16082.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<li><strong>Previous message:</strong> <a href="16080.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI BCOL hang with PMI1"</a>
<li><strong>In reply to:</strong> <a href="16079.php">Mike Dubman: "[OMPI devel] origin/v1.8 - compilation failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16083.php">Ralph Castain: "Re: [OMPI devel] origin/v1.8 - compilation failed"</a>
<li><strong>Reply:</strong> <a href="16083.php">Ralph Castain: "Re: [OMPI devel] origin/v1.8 - compilation failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike,
<br>
<p>the root cause is vader was not fully backported to v1.8
<br>
(two OPAL_* macros were not backported to OMPI_*)
<br>
<p>i fixed it in <a href="https://github.com/open-mpi/ompi-release/pull/49">https://github.com/open-mpi/ompi-release/pull/49</a>
<br>
<p>please note a similar warning is fixed in
<br>
<a href="https://github.com/open-mpi/ompi-release/pull/48">https://github.com/open-mpi/ompi-release/pull/48</a>
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/10/23 17:14, Mike Dubman wrote:
<br>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16079.php">http://www.open-mpi.org/community/lists/devel/2014/10/16079.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16081/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16082.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-102-gc9c5d40"</a>
<li><strong>Previous message:</strong> <a href="16080.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI BCOL hang with PMI1"</a>
<li><strong>In reply to:</strong> <a href="16079.php">Mike Dubman: "[OMPI devel] origin/v1.8 - compilation failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16083.php">Ralph Castain: "Re: [OMPI devel] origin/v1.8 - compilation failed"</a>
<li><strong>Reply:</strong> <a href="16083.php">Ralph Castain: "Re: [OMPI devel] origin/v1.8 - compilation failed"</a>
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
