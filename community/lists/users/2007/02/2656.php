<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  8 21:27:40 2007" -->
<!-- isoreceived="20070209022740" -->
<!-- sent="Thu, 8 Feb 2007 19:27:29 -0700" -->
<!-- isosent="20070209022729" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI/OpenIB Error/Problem" -->
<!-- id="656C1CEE-707D-430A-A3B9-0887B169D316_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="op.tngjxjrwzidtg1_at_rygel.lnxi.com" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-08 21:27:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2657.php">Alex Tumanov: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Previous message:</strong> <a href="2655.php">Brian W. Barrett: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>In reply to:</strong> <a href="2653.php">Troy Telford: "[OMPI users] Open MPI/OpenIB Error/Problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 8, 2007, at 6:33 PM, Troy Telford wrote:
<br>
<p><span class="quotelev1">&gt; The error is (upon job start), something to the extent of (transcribed
</span><br>
<span class="quotelev1">&gt;  from phone):
</span><br>
<span class="quotelev1">&gt;   mca_mpool_openib_register:  cannot allocate memory
</span><br>
<span class="quotelev1">&gt;    .
</span><br>
<span class="quotelev1">&gt;    .
</span><br>
<span class="quotelev1">&gt;    .
</span><br>
<span class="quotelev1">&gt;   Error creating low priority CQ for MTHCA0:  Cannot allocate memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What has to happen for this message to get thrown?  (I've seen IB  
</span><br>
<span class="quotelev1">&gt; fabric
</span><br>
<span class="quotelev1">&gt; instability with OpenIB before, and I don't recall this being one  
</span><br>
<span class="quotelev1">&gt; of the
</span><br>
<span class="quotelev1">&gt; errors I've seen).
</span><br>
<p>This is a common problem with OpenIB clusters.  You need to increase  
<br>
the amount of memory that a process can lock.  We have an FAQ entry  
<br>
on this issue:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
<br>
<p>Good luck!
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2657.php">Alex Tumanov: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Previous message:</strong> <a href="2655.php">Brian W. Barrett: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>In reply to:</strong> <a href="2653.php">Troy Telford: "[OMPI users] Open MPI/OpenIB Error/Problem"</a>
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
