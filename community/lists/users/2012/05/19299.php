<?
$subject_val = "Re: [OMPI users] MPI_SCAN";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 17 19:05:18 2012" -->
<!-- isoreceived="20120517230518" -->
<!-- sent="Thu, 17 May 2012 19:05:14 -0400" -->
<!-- isosent="20120517230514" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_SCAN" -->
<!-- id="78C2CA98-4760-4A5C-A927-6D93192FD292_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAFAE9jhzY06F+U2dUJRaJmjfQDyTigLB8v6VtX+RraGnryhDVQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_SCAN<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-17 19:05:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19300.php">Jeff Squyres: "Re: [OMPI users] MPI - memory sharing?"</a>
<li><strong>Previous message:</strong> <a href="19298.php">devendra rai: "[OMPI users] MPI_THREAD_MULTIPLE support not available (OpenMPI-1.4.4)"</a>
<li><strong>In reply to:</strong> <a href="19289.php">Rohan Deshpande: "[OMPI users] MPI_SCAN"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19313.php">Rohan Deshpande: "Re: [OMPI users] MPI_SCAN"</a>
<li><strong>Reply:</strong> <a href="19313.php">Rohan Deshpande: "Re: [OMPI users] MPI_SCAN"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You probably want MPI_Reduce, instead.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/doc/v1.6/man3/MPI_Reduce.3.php">http://www.open-mpi.org/doc/v1.6/man3/MPI_Reduce.3.php</a>
<br>
<p><p>On May 15, 2012, at 11:27 PM, Rohan Deshpande wrote:
<br>
<p><span class="quotelev1">&gt; I am performing Prefix scan operation on cluster
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have 3 MPI tasks and master task is responsible for distributing the data
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, each task calculates sum of its own part of array using GPUs and returns the results to master task. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Master task also calculates its own part of array using GPU. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When each task returns its result (which would be array) master task needs to combine all the results to get the final result.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can I use MPI_SCAN to combine the results?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19300.php">Jeff Squyres: "Re: [OMPI users] MPI - memory sharing?"</a>
<li><strong>Previous message:</strong> <a href="19298.php">devendra rai: "[OMPI users] MPI_THREAD_MULTIPLE support not available (OpenMPI-1.4.4)"</a>
<li><strong>In reply to:</strong> <a href="19289.php">Rohan Deshpande: "[OMPI users] MPI_SCAN"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19313.php">Rohan Deshpande: "Re: [OMPI users] MPI_SCAN"</a>
<li><strong>Reply:</strong> <a href="19313.php">Rohan Deshpande: "Re: [OMPI users] MPI_SCAN"</a>
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
