<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 27 10:49:36 2006" -->
<!-- isoreceived="20060327154936" -->
<!-- sent="Mon, 27 Mar 2006 10:49:22 -0500" -->
<!-- isosent="20060327154922" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ROOT - required where/when?" -->
<!-- id="74D36696-06B0-4FA0-B99E-2D7B482D1450_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="442802F2.4060906_at_cs.uh.edu" -->
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
<strong>From:</strong> Michael Kluskens (<em>mkluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-27 10:49:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0919.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Best MPI implementation"</a>
<li><strong>Previous message:</strong> <a href="0917.php">Ralph Castain: "Re: [OMPI users] How to establish communication between two separate COM WORLD (fwd)"</a>
<li><strong>In reply to:</strong> <a href="0916.php">Edgar Gabriel: "Re: [OMPI users] MPI_ROOT - required where/when?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0920.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_ROOT - required where/when?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Edgar,
<br>
<p>Thank you.   I was using MPI_ROOT in a MPI_Bcast call from the parent  
<br>
process where I spawn subprocesses and it worked fine in OpenMPI but  
<br>
when it didn't work on another platform and the support engineers  
<br>
solution was to define it as zero I started looking and couldn't find  
<br>
anything close to what you said below in the four books I have.  Page  
<br>
236 of Using MPI-2 shows the correct use of MPI_ROOT but no  
<br>
explanation of why.
<br>
<p>Michael
<br>
<p>On Mar 27, 2006, at 10:21 AM, Edgar Gabriel wrote:
<br>
<p><span class="quotelev1">&gt; MPI_ROOT is required for the rooted operations of the inter- 
</span><br>
<span class="quotelev1">&gt; communicator
</span><br>
<span class="quotelev1">&gt; collectives in MPI-2, I am not aware of that you need MPI_ROOT in
</span><br>
<span class="quotelev1">&gt; intra-communicator collectives as defined in MPI-1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael Kluskens wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The constant MPI_ROOT is not universally defined in all current
</span><br>
<span class="quotelev2">&gt;&gt; shipping MPI implementations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there any MPI function/call that requires MPI_ROOT?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  From the complete reference it appears that MPI_ALLGATHER might be
</span><br>
<span class="quotelev2">&gt;&gt; the one routine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This all relates to portability, code I write using OpenMPI has to
</span><br>
<span class="quotelev2">&gt;&gt; work on other systems not using OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Michael
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0919.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Best MPI implementation"</a>
<li><strong>Previous message:</strong> <a href="0917.php">Ralph Castain: "Re: [OMPI users] How to establish communication between two separate COM WORLD (fwd)"</a>
<li><strong>In reply to:</strong> <a href="0916.php">Edgar Gabriel: "Re: [OMPI users] MPI_ROOT - required where/when?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0920.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_ROOT - required where/when?"</a>
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
