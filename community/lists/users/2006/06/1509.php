<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 29 18:02:05 2006" -->
<!-- isoreceived="20060629220205" -->
<!-- sent="Thu, 29 Jun 2006 18:01:50 -0400 (EDT)" -->
<!-- isosent="20060629220150" -->
<!-- name="Graham E Fagg" -->
<!-- email="fagg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1" -->
<!-- id="Pine.GSO.4.62.0606291757090.25306_at_enterprise" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D99FB77D-C6A1-4FE9-AF50-173A5A7CCD32_at_cs.indiana.edu" -->
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
<strong>Date:</strong> 2006-06-29 18:01:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1510.php">Tom Rosmond: "[OMPI users] Testing one-sided message passing with 1.1"</a>
<li><strong>Previous message:</strong> <a href="1508.php">Doug Gregor: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<li><strong>In reply to:</strong> <a href="1508.php">Doug Gregor: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1511.php">Graham E Fagg: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 29 Jun 2006, Doug Gregor wrote:
<br>
&lt;snip&gt;
<br>
<span class="quotelev1">&gt; Are there other settings I can tweak to try to find the algorithm
</span><br>
<span class="quotelev1">&gt; that it's deciding to use at run-time?
</span><br>
<p>Yes just: -mca coll_base_verbose 1
<br>
will show whats being decided at run time. i.e.
<br>
<p>[reliant:25351] ompi_coll_tuned_bcast_intra_dec_fixed
<br>
[reliant:25351] ompi_coll_tuned_bcast_intra_bintree rank 0 root 0 ss     0
<br>
<p>shows that a bcast was called (dec_fixed means runtime decision is default 
<br>
compiled in) and it decided to use a binary tree, the caller was ranb 0, 
<br>
root was rank 0 and segment size was 0 (i.e. no segmenting used)
<br>
<p>if you get different answers on any of the nodes (other than their rank) 
<br>
then we (I) have a problem!
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Graham.
<br>
----------------------------------------------------------------------
<br>
Dr Graham E. Fagg       | Distributed, Parallel and Meta-Computing
<br>
Innovative Computing Lab. PVM3.4, HARNESS, FT-MPI, SNIPE &amp; Open MPI
<br>
Computer Science Dept   | Suite 203, 1122 Volunteer Blvd,
<br>
University of Tennessee | Knoxville, Tennessee, USA. TN 37996-3450
<br>
Email: fagg_at_[hidden]  | Phone:+1(865)974-5790 | Fax:+1(865)974-8296
<br>
Broken complex systems are always derived from working simple systems
<br>
----------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1510.php">Tom Rosmond: "[OMPI users] Testing one-sided message passing with 1.1"</a>
<li><strong>Previous message:</strong> <a href="1508.php">Doug Gregor: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<li><strong>In reply to:</strong> <a href="1508.php">Doug Gregor: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1511.php">Graham E Fagg: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
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
