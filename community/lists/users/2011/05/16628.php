<?
$subject_val = "Re: [OMPI users] MPI_Allgather with derived type crash";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 25 15:14:58 2011" -->
<!-- isoreceived="20110525191458" -->
<!-- sent="Wed, 25 May 2011 15:14:52 -0400" -->
<!-- isosent="20110525191452" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allgather with derived type crash" -->
<!-- id="81845DFD-16A8-4ED5-B0D3-80C0BBB1FEA3_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4ddd4bfd.087d0e0a.46c1.4df4_at_mx.google.com" -->
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
<strong>Date:</strong> 2011-05-25 15:14:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16629.php">Andrew Senin: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>Previous message:</strong> <a href="16627.php">Andrew Senin: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>In reply to:</strong> <a href="16626.php">Andrew Senin: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16625.php">Peter Kjellstr&#246;m: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Andrew,
<br>
<p>I have a 8 octo-core nodes running under Caos NSA release 1.0.29 (Cato) 2009.11.13, connected with IB. I run your test one process per core, with different distributions and all gave the same result.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On May 25, 2011, at 14:35 , Andrew Senin wrote:
<br>
<p><span class="quotelev1">&gt; Hi George, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot for your attempt! Possibly this is something OS specific? I'm
</span><br>
<span class="quotelev1">&gt; using CentOS release 5.4 x86_64 on the cluster. I also tried it on my
</span><br>
<span class="quotelev1">&gt; virtual box with CentOS 5.3 x86_64 (ompi 1.4.3). The same effect. On what OS
</span><br>
<span class="quotelev1">&gt; did you try? If it helps I can upload the virtual box image on my web site.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Andrew
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of George Bosilca
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, May 25, 2011 8:47 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] MPI_Allgather with derived type crash
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Andrew,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I tried with a freshly installed 1.4.3 but I can't reproduce your
</span><br>
<span class="quotelev2">&gt;&gt; issue. I tried with the 1.5 and the trunk and all complete your code
</span><br>
<span class="quotelev2">&gt;&gt; without errors. Not even valgrind found anything to complain about ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 25, 2011, at 08:22 , Andrew Senin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry. I'm using OpenMPI 1.4.3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Andrew
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; On
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Behalf Of Peter Kjellstrom
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: Wednesday, May 25, 2011 4:19 PM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] MPI_Allgather with derived type crash
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wednesday, May 25, 2011 01:16:04 PM Andrew Senin wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello list,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have an application which uses MPI_Allgather with derived types.
</span><br>
<span class="quotelev2">&gt;&gt; It
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; works correctly with mpich2 and mvapich2. However it crashes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; periodically with openmpi2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Which version of OpenMPI are you using? There is no such thing as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openmpi2...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /Peter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; George Bosilca
</span><br>
<span class="quotelev2">&gt;&gt; Research Assistant Professor
</span><br>
<span class="quotelev2">&gt;&gt; Innovative Computing Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; Department of Electrical Engineering and Computer Science
</span><br>
<span class="quotelev2">&gt;&gt; University of Tennessee, Knoxville
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://web.eecs.utk.edu/~bosilca/">http://web.eecs.utk.edu/~bosilca/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="16629.php">Andrew Senin: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>Previous message:</strong> <a href="16627.php">Andrew Senin: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>In reply to:</strong> <a href="16626.php">Andrew Senin: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16625.php">Peter Kjellstr&#246;m: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
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
