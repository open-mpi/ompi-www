<?
$subject_val = "Re: [OMPI devel] [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 05:11:08 2014" -->
<!-- isoreceived="20141212101108" -->
<!-- sent="Fri, 12 Dec 2014 02:11:04 -0800" -->
<!-- isosent="20141212101104" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler." -->
<!-- id="226F232C-1177-4EF6-9F23-ACE963A10D2A_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="548AA805.1000603_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler.<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-12 05:11:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16541.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<li><strong>Previous message:</strong> <a href="16539.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
<li><strong>In reply to:</strong> <a href="16538.php">Brice Goglin: "Re: [OMPI devel] [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Brice!
<br>
<p>Our 1.8 branch probably has another 2 or so years in it, but I think we can lock it down fairly soon. Since we&#146;ve shaken a lot of the bugs out of 1.8, we are now seeing the &#147;adoption wave&#148; that is causing bug reports. Once we get thru this, I expect things will settle down again.
<br>
<p>I know Jeff is hosed, and I&#146;m likewise next week. Can someone create a PR to update 1.8 with these patches?
<br>
<p><p><span class="quotelev1">&gt; On Dec 12, 2014, at 12:32 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 12/12/2014 07:36, Gilles Gouaillardet a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Brice,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ompi master is based on hwloc 1.9.1, isn't it ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes sorry, I am often confused by all these OMPI vs hwloc branch numbers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; if some backport is required for hwloc 1.7.2 (used by ompi v1.8), then
</span><br>
<span class="quotelev2">&gt;&gt; could you please update the hwloc v1.7 branch ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Done. I pushed 14 commits there. This branch lags significantly behind master and v1.10 so I don't think I'll be able to maintain it much longer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16538.php">http://www.open-mpi.org/community/lists/devel/2014/12/16538.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16541.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc2] orterun SEGVs on Solaris-10/SPARC"</a>
<li><strong>Previous message:</strong> <a href="16539.php">Ralph Castain: "Re: [OMPI devel] [1.8.4rc3] false report of no loopback interface + segv at exit"</a>
<li><strong>In reply to:</strong> <a href="16538.php">Brice Goglin: "Re: [OMPI devel] [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
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
