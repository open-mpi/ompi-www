<?
$subject_val = "Re: [OMPI devel] coll/ml without hwloc (?)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 27 16:26:02 2014" -->
<!-- isoreceived="20140827202602" -->
<!-- sent="Wed, 27 Aug 2014 13:25:21 -0700" -->
<!-- isosent="20140827202521" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] coll/ml without hwloc (?)" -->
<!-- id="7A5A0277-04A0-42CB-B219-ACA71B698E34_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="92ee00e21bba4c978d11533a3e60478a_at_EXCHCS34.ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] coll/ml without hwloc (?)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-27 16:25:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15745.php">Gilles Gouaillardet: "Re: [OMPI devel] intercomm_create from the ibm test suite hangs"</a>
<li><strong>Previous message:</strong> <a href="15743.php">Ralph Castain: "Re: [OMPI devel] intercomm_create from the ibm test suite hangs"</a>
<li><strong>In reply to:</strong> <a href="15711.php">Shamis, Pavel: "Re: [OMPI devel] coll/ml without hwloc (?)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Done, set for 1.8.3
<br>
<p>On Aug 26, 2014, at 7:56 AM, Shamis, Pavel &lt;shamisp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Theoretically, we may make it functional (with good performance) even without hwloc.
</span><br>
<span class="quotelev1">&gt; As it is today, I would suggest to disable ML if hwloc is disabled.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Pasha
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Gilles
</span><br>
<span class="quotelev2">&gt;&gt; Gouaillardet
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, August 26, 2014 4:38 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI devel] coll/ml without hwloc (?)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Folks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; i just commited r32604 in order to fix compilation (pmix) when ompi is
</span><br>
<span class="quotelev2">&gt;&gt; configured with --without-hwloc
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; now, even a trivial hello world program issues the following output
</span><br>
<span class="quotelev2">&gt;&gt; (which is a non fatal, and could even be reported as a warning) :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [soleil][[32389,1],0][../../../../../../src/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/ompi/mca/coll/ml/coll_ml_module.c:1496:ml_discover_hierarchy]
</span><br>
<span class="quotelev2">&gt;&gt; COLL-ML Error: (size of mca_bcol_base_components_in_use = 3) != (size of
</span><br>
<span class="quotelev2">&gt;&gt; mca_sbgp_base_components_in_use = 2) or zero.
</span><br>
<span class="quotelev2">&gt;&gt; [soleil][[32389,1],1][../../../../../../src/ompi-
</span><br>
<span class="quotelev2">&gt;&gt; trunk/ompi/mca/coll/ml/coll_ml_module.c:1496:ml_discover_hierarchy]
</span><br>
<span class="quotelev2">&gt;&gt; COLL-ML Error: (size of mca_bcol_base_components_in_use = 3) != (size of
</span><br>
<span class="quotelev2">&gt;&gt; mca_sbgp_base_components_in_use = 2) or zero.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; in my understanding, coll/ml somehow relies on the topology information
</span><br>
<span class="quotelev2">&gt;&gt; (reported by hwloc) so i am wondering whether we should simply
</span><br>
<span class="quotelev2">&gt;&gt; *not* compile coll/ml or set its priority to zero if ompi is configured
</span><br>
<span class="quotelev2">&gt;&gt; with --without-hwloc
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; any thoughts ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev2">&gt;&gt; mpi.org/community/lists/devel/2014/08/15708.php
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15711.php">http://www.open-mpi.org/community/lists/devel/2014/08/15711.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15745.php">Gilles Gouaillardet: "Re: [OMPI devel] intercomm_create from the ibm test suite hangs"</a>
<li><strong>Previous message:</strong> <a href="15743.php">Ralph Castain: "Re: [OMPI devel] intercomm_create from the ibm test suite hangs"</a>
<li><strong>In reply to:</strong> <a href="15711.php">Shamis, Pavel: "Re: [OMPI devel] coll/ml without hwloc (?)"</a>
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
