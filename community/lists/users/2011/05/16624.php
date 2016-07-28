<?
$subject_val = "Re: [OMPI users] MPI_Allgather with derived type crash";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 25 12:46:46 2011" -->
<!-- isoreceived="20110525164646" -->
<!-- sent="Wed, 25 May 2011 12:46:40 -0400" -->
<!-- isosent="20110525164640" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allgather with derived type crash" -->
<!-- id="AA5FB7CA-B488-4ADB-9C34-ACF1E7BD81DC_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4ddcf499.037d0e0a.621a.ffffd4ba_at_mx.google.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Allgather with derived type crash<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-25 12:46:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16625.php">Peter Kjellström: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>Previous message:</strong> <a href="16623.php">Andrew Senin: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>In reply to:</strong> <a href="16623.php">Andrew Senin: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16626.php">Andrew Senin: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>Reply:</strong> <a href="16626.php">Andrew Senin: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Andrew,
<br>
<p>I tried with a freshly installed 1.4.3 but I can't reproduce your issue. I tried with the 1.5 and the trunk and all complete your code without errors. Not even valgrind found anything to complain about ...
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p>On May 25, 2011, at 08:22 , Andrew Senin wrote:
<br>
<p><span class="quotelev1">&gt; Sorry. I'm using OpenMPI 1.4.3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; -Andrew
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Peter Kjellstrom
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, May 25, 2011 4:19 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] MPI_Allgather with derived type crash
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wednesday, May 25, 2011 01:16:04 PM Andrew Senin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello list,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have an application which uses MPI_Allgather with derived types. It
</span><br>
<span class="quotelev3">&gt;&gt;&gt; works correctly with mpich2 and mvapich2. However it crashes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; periodically with openmpi2.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Which version of OpenMPI are you using? There is no such thing as
</span><br>
<span class="quotelev2">&gt;&gt; openmpi2...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /Peter
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
<p>George Bosilca
<br>
Research Assistant Professor
<br>
Innovative Computing Laboratory
<br>
Department of Electrical Engineering and Computer Science
<br>
University of Tennessee, Knoxville
<br>
<a href="http://web.eecs.utk.edu/~bosilca/">http://web.eecs.utk.edu/~bosilca/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16625.php">Peter Kjellström: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>Previous message:</strong> <a href="16623.php">Andrew Senin: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>In reply to:</strong> <a href="16623.php">Andrew Senin: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16626.php">Andrew Senin: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>Reply:</strong> <a href="16626.php">Andrew Senin: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
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
