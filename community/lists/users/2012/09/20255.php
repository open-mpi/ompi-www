<?
$subject_val = "Re: [OMPI users] Algorithms used in MPI_BCast";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 21 04:22:08 2012" -->
<!-- isoreceived="20120921082208" -->
<!-- sent="Fri, 21 Sep 2012 10:22:21 +0200" -->
<!-- isosent="20120921082221" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Algorithms used in MPI_BCast" -->
<!-- id="DF49EB26-6134-4E5D-A702-8BAE323C3B7E_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="74FBF747-3291-4F17-BB61-74D108354A87_at_ens-lyon.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Algorithms used in MPI_BCast<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-21 04:22:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20256.php">Iliev, Hristo: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
<li><strong>Previous message:</strong> <a href="20254.php">Mohammed El Mehdi DIOURI: "[OMPI users] Algorithms used in MPI_BCast"</a>
<li><strong>In reply to:</strong> <a href="20254.php">Mohammed El Mehdi DIOURI: "[OMPI users] Algorithms used in MPI_BCast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20256.php">Iliev, Hristo: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
More or less. Open MPI supports 6 algorithms: basic linear, chain, pipeline, split binary tree, binary tree, binomial tree.
<br>
<p>The decision to switch between them is somehow similar to what you describe for MPICH but more complex it depends on the number of nodes in the communicator and the size of the data (look in ompi/ompi/mca/coll/tuned/coll_tuned_decision_fixed.c for more info). However, the current switch decision points have been built based on the IB 20G latency and bandwidth properties.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Sep 21, 2012, at 02:13 , Mohammed El Mehdi DIOURI &lt;mehdi.diouri_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would like to know what are the algorithms used in MPI_BCast() in the OpenMPI implementation. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example, in MPICH2, depending on the number of processes and the size of data to broadcast, the broadcasting algorithm used can be different : a binomial tree if the message is short or MPI_Scatter followed by MPI_AllGather if the message to broadcast is long.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it the same for OpenMPI ? 
</span><br>
<span class="quotelev1">&gt; It doesn't seem to be the case since the broadcasting time is different when I use OpenMPI or MPICH2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your help,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mehdi.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20256.php">Iliev, Hristo: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
<li><strong>Previous message:</strong> <a href="20254.php">Mohammed El Mehdi DIOURI: "[OMPI users] Algorithms used in MPI_BCast"</a>
<li><strong>In reply to:</strong> <a href="20254.php">Mohammed El Mehdi DIOURI: "[OMPI users] Algorithms used in MPI_BCast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20256.php">Iliev, Hristo: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
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
