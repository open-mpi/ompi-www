<?
$subject_val = "Re: [OMPI users] running osu mpi benchmark tests on Infiniband setup";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 19 16:08:44 2011" -->
<!-- isoreceived="20111019200844" -->
<!-- sent="Wed, 19 Oct 2011 14:08:35 -0600" -->
<!-- isosent="20111019200835" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running osu mpi benchmark tests on Infiniband setup" -->
<!-- id="02BA7B90-D920-4BE6-866A-349DC2ABD005_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="loom.20111019T204543-810_at_post.gmane.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] running osu mpi benchmark tests on Infiniband setup<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-19 16:08:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17579.php">Gus Correa: "Re: [OMPI users] Application in a cluster"</a>
<li><strong>Previous message:</strong> <a href="17577.php">ramu: "[OMPI users] running osu mpi benchmark tests on Infiniband setup"</a>
<li><strong>In reply to:</strong> <a href="17577.php">ramu: "[OMPI users] running osu mpi benchmark tests on Infiniband setup"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think we handle this:
<br>
<p><span class="quotelev1">&gt; -H 192.168.4.91 -H 192.168.4.92
</span><br>
<p>You need to have only one -H option - use comma to separate the values
<br>
<p>On Oct 19, 2011, at 12:48 PM, ramu wrote:
<br>
<p><span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; I am trying to run osu mpi benchmark tests on Infiniband setup (connected
</span><br>
<span class="quotelev1">&gt; back-to-back via Mellanox hw).  I am using the below command
</span><br>
<span class="quotelev1">&gt; &quot;mpirun --prefix /usr/local/ -np 2 --mca btl openib,self -H 192.168.4.91 -H
</span><br>
<span class="quotelev1">&gt; 192.168.4.92 --mca orte_base_help_aggregate 0 --mca btl_openib_cpc_include oob
</span><br>
<span class="quotelev1">&gt; /root/osu_benchmarks-3.1.1/osu_latency
</span><br>
<span class="quotelev1">&gt; &quot;
</span><br>
<span class="quotelev1">&gt; But I am getting the error as
</span><br>
<span class="quotelev1">&gt; &quot;[Isengard:05030] *** An error occurred in MPI_Barrier
</span><br>
<span class="quotelev1">&gt; [Isengard:05030] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [Isengard:05030] *** MPI_ERR_IN_STATUS: error code in status
</span><br>
<span class="quotelev1">&gt; [Isengard:05030] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [Rohan:05010] *** An error occurred in MPI_Barrier
</span><br>
<span class="quotelev1">&gt; [Rohan:05010] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [Rohan:05010] *** MPI_ERR_IN_STATUS: error code in status
</span><br>
<span class="quotelev1">&gt; [Rohan:05010] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; &quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am I missing anything in the above command ? Please suggest me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Ramu
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="17579.php">Gus Correa: "Re: [OMPI users] Application in a cluster"</a>
<li><strong>Previous message:</strong> <a href="17577.php">ramu: "[OMPI users] running osu mpi benchmark tests on Infiniband setup"</a>
<li><strong>In reply to:</strong> <a href="17577.php">ramu: "[OMPI users] running osu mpi benchmark tests on Infiniband setup"</a>
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
