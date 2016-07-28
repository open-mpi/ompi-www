<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 19 13:08:24 2006" -->
<!-- isoreceived="20060119180824" -->
<!-- sent="Thu, 19 Jan 2006 13:08:21 -0500 (EST)" -->
<!-- isosent="20060119180821" -->
<!-- name="Graham E Fagg" -->
<!-- email="fagg_at_[hidden]" -->
<!-- subject="Re:  while-loop around opal_condition_wait" -->
<!-- id="Pine.GSO.4.62.0601191305440.7948_at_enterprise" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200601191823.53285.Keller_at_hlrs.de" -->
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
<strong>From:</strong> Graham E Fagg (<em>fagg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-19 13:08:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0700.php">Andrew Friedley: "Re:  debugging methods"</a>
<li><strong>Previous message:</strong> <a href="0698.php">Brian Barrett: "Re:  posix threads"</a>
<li><strong>In reply to:</strong> <a href="0697.php">Rainer Keller: "Re:  while-loop around opal_condition_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0701.php">George Bosilca: "Re:  while-loop around opal_condition_wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 19 Jan 2006, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; And yes, when I run with the basic-coll, we also hang ,-]
</span><br>
<p>in the first case your running :
<br>
#8  0x407307a4 in ompi_coll_tuned_bcast_intra_basic_linear (buff=0x80c9c58,
<br>
<p>which is actually the basic collective anyway.. it just got there via a 
<br>
different path (in this case the collective decision as for 2 procs a 
<br>
lnear bcast for small messages is faster than segmented).
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --mca coll basic ./mpi_test_suite -r FULL -c MPI_COMM_WORLD -d
</span><br>
<span class="quotelev1">&gt; MPI_INT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #8  0x4070e402 in mca_coll_basic_bcast_lin_intra (buff=0x80c4ca0, count=1000,
</span><br>
<p><span class="quotelev1">&gt; So, this was my initial search for whether we may have races in
</span><br>
<span class="quotelev1">&gt; opal/mpi_free_list....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>G
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0700.php">Andrew Friedley: "Re:  debugging methods"</a>
<li><strong>Previous message:</strong> <a href="0698.php">Brian Barrett: "Re:  posix threads"</a>
<li><strong>In reply to:</strong> <a href="0697.php">Rainer Keller: "Re:  while-loop around opal_condition_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0701.php">George Bosilca: "Re:  while-loop around opal_condition_wait"</a>
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
