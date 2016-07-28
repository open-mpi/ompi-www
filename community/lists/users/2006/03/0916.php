<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 27 10:21:24 2006" -->
<!-- isoreceived="20060327152124" -->
<!-- sent="Mon, 27 Mar 2006 09:21:22 -0600" -->
<!-- isosent="20060327152122" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ROOT - required where/when?" -->
<!-- id="442802F2.4060906_at_cs.uh.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ABDCBEC0-EBC6-42F1-9737-DA724EDC24AE_at_ieee.org" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-27 10:21:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0917.php">Ralph Castain: "Re: [OMPI users] How to establish communication between two separate COM WORLD (fwd)"</a>
<li><strong>Previous message:</strong> <a href="0915.php">Chris Gottbrath: "Re: [OMPI users] How to establish communication between two separate COM WORLD (fwd)"</a>
<li><strong>In reply to:</strong> <a href="0914.php">Michael Kluskens: "[OMPI users] MPI_ROOT - required where/when?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0918.php">Michael Kluskens: "Re: [OMPI users] MPI_ROOT - required where/when?"</a>
<li><strong>Reply:</strong> <a href="0918.php">Michael Kluskens: "Re: [OMPI users] MPI_ROOT - required where/when?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI_ROOT is required for the rooted operations of the inter-communicator 
<br>
collectives in MPI-2, I am not aware of that you need MPI_ROOT in 
<br>
intra-communicator collectives as defined in MPI-1.
<br>
<p>Thanks
<br>
Edgar
<br>
<p>Michael Kluskens wrote:
<br>
<span class="quotelev1">&gt; The constant MPI_ROOT is not universally defined in all current  
</span><br>
<span class="quotelev1">&gt; shipping MPI implementations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any MPI function/call that requires MPI_ROOT?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  From the complete reference it appears that MPI_ALLGATHER might be  
</span><br>
<span class="quotelev1">&gt; the one routine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This all relates to portability, code I write using OpenMPI has to  
</span><br>
<span class="quotelev1">&gt; work on other systems not using OpenMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Michael
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
<li><strong>Next message:</strong> <a href="0917.php">Ralph Castain: "Re: [OMPI users] How to establish communication between two separate COM WORLD (fwd)"</a>
<li><strong>Previous message:</strong> <a href="0915.php">Chris Gottbrath: "Re: [OMPI users] How to establish communication between two separate COM WORLD (fwd)"</a>
<li><strong>In reply to:</strong> <a href="0914.php">Michael Kluskens: "[OMPI users] MPI_ROOT - required where/when?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0918.php">Michael Kluskens: "Re: [OMPI users] MPI_ROOT - required where/when?"</a>
<li><strong>Reply:</strong> <a href="0918.php">Michael Kluskens: "Re: [OMPI users] MPI_ROOT - required where/when?"</a>
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
