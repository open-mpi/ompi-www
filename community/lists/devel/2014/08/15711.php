<?
$subject_val = "Re: [OMPI devel] coll/ml without hwloc (?)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 26 10:56:07 2014" -->
<!-- isoreceived="20140826145607" -->
<!-- sent="Tue, 26 Aug 2014 14:56:05 +0000" -->
<!-- isosent="20140826145605" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] coll/ml without hwloc (?)" -->
<!-- id="92ee00e21bba4c978d11533a3e60478a_at_EXCHCS34.ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53FC4771.4060606_at_iferc.org" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-26 10:56:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15712.php">Lisandro Dalcin: "[OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<li><strong>Previous message:</strong> <a href="15710.php">Lisandro Dalcin: "[OMPI devel] Comm_split_type(COMM_SELF, MPI_UNDEFINED, ...)"</a>
<li><strong>In reply to:</strong> <a href="15708.php">Gilles Gouaillardet: "[OMPI devel] coll/ml without hwloc (?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15744.php">Ralph Castain: "Re: [OMPI devel] coll/ml without hwloc (?)"</a>
<li><strong>Reply:</strong> <a href="15744.php">Ralph Castain: "Re: [OMPI devel] coll/ml without hwloc (?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Theoretically, we may make it functional (with good performance) even without hwloc.
<br>
As it is today, I would suggest to disable ML if hwloc is disabled.
<br>
<p>Best,
<br>
Pasha
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Gilles
</span><br>
<span class="quotelev1">&gt; Gouaillardet
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, August 26, 2014 4:38 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] coll/ml without hwloc (?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i just commited r32604 in order to fix compilation (pmix) when ompi is
</span><br>
<span class="quotelev1">&gt; configured with --without-hwloc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; now, even a trivial hello world program issues the following output
</span><br>
<span class="quotelev1">&gt; (which is a non fatal, and could even be reported as a warning) :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [soleil][[32389,1],0][../../../../../../src/ompi-
</span><br>
<span class="quotelev1">&gt; trunk/ompi/mca/coll/ml/coll_ml_module.c:1496:ml_discover_hierarchy]
</span><br>
<span class="quotelev1">&gt; COLL-ML Error: (size of mca_bcol_base_components_in_use = 3) != (size of
</span><br>
<span class="quotelev1">&gt; mca_sbgp_base_components_in_use = 2) or zero.
</span><br>
<span class="quotelev1">&gt; [soleil][[32389,1],1][../../../../../../src/ompi-
</span><br>
<span class="quotelev1">&gt; trunk/ompi/mca/coll/ml/coll_ml_module.c:1496:ml_discover_hierarchy]
</span><br>
<span class="quotelev1">&gt; COLL-ML Error: (size of mca_bcol_base_components_in_use = 3) != (size of
</span><br>
<span class="quotelev1">&gt; mca_sbgp_base_components_in_use = 2) or zero.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in my understanding, coll/ml somehow relies on the topology information
</span><br>
<span class="quotelev1">&gt; (reported by hwloc) so i am wondering whether we should simply
</span><br>
<span class="quotelev1">&gt; *not* compile coll/ml or set its priority to zero if ompi is configured
</span><br>
<span class="quotelev1">&gt; with --without-hwloc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; any thoughts ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev1">&gt; mpi.org/community/lists/devel/2014/08/15708.php
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15712.php">Lisandro Dalcin: "[OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<li><strong>Previous message:</strong> <a href="15710.php">Lisandro Dalcin: "[OMPI devel] Comm_split_type(COMM_SELF, MPI_UNDEFINED, ...)"</a>
<li><strong>In reply to:</strong> <a href="15708.php">Gilles Gouaillardet: "[OMPI devel] coll/ml without hwloc (?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15744.php">Ralph Castain: "Re: [OMPI devel] coll/ml without hwloc (?)"</a>
<li><strong>Reply:</strong> <a href="15744.php">Ralph Castain: "Re: [OMPI devel] coll/ml without hwloc (?)"</a>
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
