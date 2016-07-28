<?
$subject_val = "Re: [OMPI users] How to find MPI ranks located in remote nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 25 17:48:16 2014" -->
<!-- isoreceived="20141125224816" -->
<!-- sent="Tue, 25 Nov 2014 17:48:10 -0500" -->
<!-- isosent="20141125224810" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to find MPI ranks located in remote nodes?" -->
<!-- id="55672B95-9C0F-428E-8F8C-66C912B22FE4_at_umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1450BA2E-10B5-418C-B1A7-E8B44A0E3C06_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to find MPI ranks located in remote nodes?<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-25 17:48:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25871.php">Moody, Adam T.: "Re: [OMPI users] How to find MPI ranks located in remote nodes?"</a>
<li><strong>Previous message:</strong> <a href="25869.php">Ralph Castain: "Re: [OMPI users] How to find MPI ranks located in remote nodes?"</a>
<li><strong>In reply to:</strong> <a href="25869.php">Ralph Castain: "Re: [OMPI users] How to find MPI ranks located in remote nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25871.php">Moody, Adam T.: "Re: [OMPI users] How to find MPI ranks located in remote nodes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you doing this just for debugging?  Or you really want to do it within the MPI program?
<br>
<p>orte-ps
<br>
<p>Gives you the pid/host for each rank, but I don't think there is any standard way to do this via API.
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
XSEDE Campus Champion
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p><span class="quotelev1">&gt; On Nov 25, 2014, at 5:38 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Every process has a complete map of where every process in the job is located - not sure if there is an MPI API for accessing it, though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 25, 2014, at 2:32 PM, Teranishi, Keita &lt;knteran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am trying  to figure out a way for each local MPI rank to identify the ranks located in physically remote nodes (just different nodes) of cluster or MPPs such as Cray.  I am using MPI_Get_processor_name to get the node ID, but it requires some processing to map MPI rank to the node ID.  Is there any better ways doing this using MPI-2.2 (or earlier) capabilities?   It will be great if I can easily get a list of MPI ranks in the same physical node.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Keita Teranishi
</span><br>
<span class="quotelev2">&gt;&gt; Principal Member of Technical Staff
</span><br>
<span class="quotelev2">&gt;&gt; Scalable Modeling and Analysis Systems
</span><br>
<span class="quotelev2">&gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt;&gt; Livermore, CA 94551
</span><br>
<span class="quotelev2">&gt;&gt; +1 (925) 294-3738
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25868.php">http://www.open-mpi.org/community/lists/users/2014/11/25868.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25869.php">http://www.open-mpi.org/community/lists/users/2014/11/25869.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25871.php">Moody, Adam T.: "Re: [OMPI users] How to find MPI ranks located in remote nodes?"</a>
<li><strong>Previous message:</strong> <a href="25869.php">Ralph Castain: "Re: [OMPI users] How to find MPI ranks located in remote nodes?"</a>
<li><strong>In reply to:</strong> <a href="25869.php">Ralph Castain: "Re: [OMPI users] How to find MPI ranks located in remote nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25871.php">Moody, Adam T.: "Re: [OMPI users] How to find MPI ranks located in remote nodes?"</a>
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
