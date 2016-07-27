<?
$subject_val = "Re: [hwloc-devel] hwloc-1.9.1 failure on FreeBSD64";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  4 13:56:51 2014" -->
<!-- isoreceived="20140904175651" -->
<!-- sent="Thu, 4 Sep 2014 17:56:28 +0000" -->
<!-- isosent="20140904175628" -->
<!-- name="Balaji, Pavan" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.9.1 failure on FreeBSD64" -->
<!-- id="0E41E643-0FA3-4246-8423-D239B379F4A9_at_anl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="54088F4F.1060708_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.9.1 failure on FreeBSD64<br>
<strong>From:</strong> Balaji, Pavan (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-04 13:56:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4201.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-206-g37439c4)"</a>
<li><strong>Previous message:</strong> <a href="4199.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.9.1 failure on FreeBSD64"</a>
<li><strong>In reply to:</strong> <a href="4199.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.9.1 failure on FreeBSD64"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>

<br>
We build hwloc in embedded mode, and disable utils and docs before building.
<br>

<br>
If 1.10 is out soon, we might be able to wait for that.  We are not in a real hurry for this upgrade.
<br>

<br>
Thanks,
<br>

<br>
&nbsp;&nbsp;&#226;&#128;&#148; Pavan
<br>

<br>
On Sep 4, 2014, at 11:11 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>

<br>
<span class="quotelev1">&gt; I guess MPICH only builds the src directory? My other failure occurs in
</span><br>
<span class="quotelev1">&gt; utils/
</span><br>
<span class="quotelev1">&gt; This fix will be in 1.9.2, but I am not even sure 1.9.2 will ever be
</span><br>
<span class="quotelev1">&gt; released since 1.10 is planned in the next weeks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 04/09/2014 17:14, Balaji, Pavan a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Yes, this did work earlier.  We have been using 1.9 in mpich and that works fine.  We were attempting to slurp in the bug fixes in 1.9.1, and hence were testing it.  Can 1.9.2 be released with this fix?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#128;&#148; Pavan
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 4, 2014, at 9:57 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 04/09/2014 16:39, Balaji, Pavan a &#195;&#169;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./configure CFLAGS='-Werror-implicit-function-declaration -D_POSIX_C_SOURCE=200112L&#226;&#128;&#153;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looks like we need &lt;strings.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did this config work in the past? I am getting a failure because of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; putenv() in lstopo.c later, and that code didn't change recently.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/09/4197.php">http://www.open-mpi.org/community/lists/hwloc-devel/2014/09/4197.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Pavan Balaji  &#226;&#156;&#137;&#239;&#184;&#143;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/09/4199.php">http://www.open-mpi.org/community/lists/hwloc-devel/2014/09/4199.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/09/4200.php">http://www.open-mpi.org/community/lists/hwloc-devel/2014/09/4200.php</a>
</span><br>

<br>
--
<br>
Pavan Balaji  &#226;&#156;&#137;&#239;&#184;&#143;
<br>
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4201.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-206-g37439c4)"</a>
<li><strong>Previous message:</strong> <a href="4199.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.9.1 failure on FreeBSD64"</a>
<li><strong>In reply to:</strong> <a href="4199.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.9.1 failure on FreeBSD64"</a>
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
