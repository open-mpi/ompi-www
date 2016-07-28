<?
$subject_val = "Re: [OMPI users] MPI_Allgather with derived type crash";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 25 14:35:51 2011" -->
<!-- isoreceived="20110525183551" -->
<!-- sent="Wed, 25 May 2011 22:35:36 +0400" -->
<!-- isosent="20110525183536" -->
<!-- name="Andrew Senin" -->
<!-- email="andrew.senin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allgather with derived type crash" -->
<!-- id="4ddd4bfd.087d0e0a.46c1.4df4_at_mx.google.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AA5FB7CA-B488-4ADB-9C34-ACF1E7BD81DC_at_eecs.utk.edu" -->
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
<strong>From:</strong> Andrew Senin (<em>andrew.senin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-25 14:35:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16627.php">Andrew Senin: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>Previous message:</strong> <a href="16625.php">Peter Kjellstr&#246;m: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>In reply to:</strong> <a href="16624.php">George Bosilca: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16628.php">George Bosilca: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>Reply:</strong> <a href="16628.php">George Bosilca: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George, 
<br>
<p>Thanks a lot for your attempt! Possibly this is something OS specific? I'm
<br>
using CentOS release 5.4 x86_64 on the cluster. I also tried it on my
<br>
virtual box with CentOS 5.3 x86_64 (ompi 1.4.3). The same effect. On what OS
<br>
did you try? If it helps I can upload the virtual box image on my web site.
<br>
<p>-Andrew
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of George Bosilca
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, May 25, 2011 8:47 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_Allgather with derived type crash
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andrew,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried with a freshly installed 1.4.3 but I can't reproduce your
</span><br>
<span class="quotelev1">&gt; issue. I tried with the 1.5 and the trunk and all complete your code
</span><br>
<span class="quotelev1">&gt; without errors. Not even valgrind found anything to complain about ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 25, 2011, at 08:22 , Andrew Senin wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Sorry. I'm using OpenMPI 1.4.3.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; -Andrew
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; On
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Behalf Of Peter Kjellstrom
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sent: Wednesday, May 25, 2011 4:19 PM
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: Re: [OMPI users] MPI_Allgather with derived type crash
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Wednesday, May 25, 2011 01:16:04 PM Andrew Senin wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello list,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I have an application which uses MPI_Allgather with derived types.
</span><br>
<span class="quotelev1">&gt; It
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; works correctly with mpich2 and mvapich2. However it crashes
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; periodically with openmpi2.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Which version of OpenMPI are you using? There is no such thing as
</span><br>
<span class="quotelev3">&gt; &gt;&gt; openmpi2...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /Peter
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; George Bosilca
</span><br>
<span class="quotelev1">&gt; Research Assistant Professor
</span><br>
<span class="quotelev1">&gt; Innovative Computing Laboratory
</span><br>
<span class="quotelev1">&gt; Department of Electrical Engineering and Computer Science
</span><br>
<span class="quotelev1">&gt; University of Tennessee, Knoxville
</span><br>
<span class="quotelev1">&gt; <a href="http://web.eecs.utk.edu/~bosilca/">http://web.eecs.utk.edu/~bosilca/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16627.php">Andrew Senin: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>Previous message:</strong> <a href="16625.php">Peter Kjellstr&#246;m: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>In reply to:</strong> <a href="16624.php">George Bosilca: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16628.php">George Bosilca: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>Reply:</strong> <a href="16628.php">George Bosilca: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
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
