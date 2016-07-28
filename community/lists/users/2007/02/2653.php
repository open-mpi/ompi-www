<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  8 20:33:16 2007" -->
<!-- isoreceived="20070209013316" -->
<!-- sent="Thu, 08 Feb 2007 18:33:09 -0700" -->
<!-- isosent="20070209013309" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford.groups_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI/OpenIB Error/Problem" -->
<!-- id="op.tngjxjrwzidtg1_at_rygel.lnxi.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford.groups_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-08 20:33:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2654.php">Alex Tumanov: "Re: [OMPI users] Open MPI/OpenIB Error/Problem"</a>
<li><strong>Previous message:</strong> <a href="2652.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2654.php">Alex Tumanov: "Re: [OMPI users] Open MPI/OpenIB Error/Problem"</a>
<li><strong>Reply:</strong> <a href="2654.php">Alex Tumanov: "Re: [OMPI users] Open MPI/OpenIB Error/Problem"</a>
<li><strong>Reply:</strong> <a href="2656.php">Brian W. Barrett: "Re: [OMPI users] Open MPI/OpenIB Error/Problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've got a system that is running Open MPI 1.1.2, SLES 10, with the OFED  
<br>
1.0 drivers.
<br>
<p>The code runs over Gigabit Ethernet/TCP without issues on Open MPI...
<br>
<p>The code does some memory allocation, communication, etc - the developer  
<br>
wrote it to stress the network fabric, and can be submitted if necessary.
<br>
<p>The job is being run on four nodes (two dual-core CPUs each, 16 cores  
<br>
total), with DDR IB.
<br>
<p>Non-MPI bandwidth tests don't seem to be having issues; but that doesn't  
<br>
necessarily mean things work great over MPI.
<br>
<p>The error is (upon job start), something to the extent of (transcribed  
<br>
&nbsp;from phone):
<br>
&nbsp;&nbsp;mca_mpool_openib_register:  cannot allocate memory
<br>
&nbsp;&nbsp;&nbsp;.
<br>
&nbsp;&nbsp;&nbsp;.
<br>
&nbsp;&nbsp;&nbsp;.
<br>
&nbsp;&nbsp;Error creating low priority CQ for MTHCA0:  Cannot allocate memory.
<br>
<p>What has to happen for this message to get thrown?  (I've seen IB fabric  
<br>
instability with OpenIB before, and I don't recall this being one of the  
<br>
errors I've seen).
<br>
<p>Also, is there any chance that the error can be caused by mismatched  
<br>
libraries (from a different compile of Open MPI?)
<br>
<p>(And I apologize for firing off this without knowing more; I'm still  
<br>
gathering data as I learn more...)
<br>
<pre>
-- 
Troy Telford
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2654.php">Alex Tumanov: "Re: [OMPI users] Open MPI/OpenIB Error/Problem"</a>
<li><strong>Previous message:</strong> <a href="2652.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2654.php">Alex Tumanov: "Re: [OMPI users] Open MPI/OpenIB Error/Problem"</a>
<li><strong>Reply:</strong> <a href="2654.php">Alex Tumanov: "Re: [OMPI users] Open MPI/OpenIB Error/Problem"</a>
<li><strong>Reply:</strong> <a href="2656.php">Brian W. Barrett: "Re: [OMPI users] Open MPI/OpenIB Error/Problem"</a>
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
