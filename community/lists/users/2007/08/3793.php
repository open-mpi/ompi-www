<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug  1 12:42:29 2007" -->
<!-- isoreceived="20070801164229" -->
<!-- sent="Wed, 1 Aug 2007 12:42:25 -0400 (EDT)" -->
<!-- isosent="20070801164225" -->
<!-- name="Jelena Pjesivac-Grbovic" -->
<!-- email="pjesa_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions" -->
<!-- id="Pine.LNX.4.62.0708011239580.7245_at_reliant.cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DEE5A8A3-0084-400A-B7D0-1184FAD64FC7_at_cs.utk.edu" -->
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
<strong>From:</strong> Jelena Pjesivac-Grbovic (<em>pjesa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-01 12:42:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3794.php">Adams, Samuel D Contr AFRL/HEDR: "Re: [OMPI users] torque and openmpi"</a>
<li><strong>Previous message:</strong> <a href="3792.php">George Bosilca: "Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<li><strong>In reply to:</strong> <a href="3792.php">George Bosilca: "Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3800.php">Juan Carlos Guzman: "Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Juan,
<br>
<p>it is possible that the problem is not in MPI - I've seen similar problem 
<br>
on some of our workstations some time ago.
<br>
Juan, are you sure you can allocate more than 2x 4GB memory of data in 
<br>
non-mpi program on your system?
<br>
<p>Thanks,
<br>
Jelena
<br>
<p>On Wed, 1 Aug 2007, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Juan,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have to check to see what's wrong there. We build Open MPI with
</span><br>
<span class="quotelev1">&gt; full support for data transfer up to sizeof(size_t) bytes. so you
</span><br>
<span class="quotelev1">&gt; case should be covered. However, there are some known problems with
</span><br>
<span class="quotelev1">&gt; the MPI interface for data larger than sizeof(int). As an example the
</span><br>
<span class="quotelev1">&gt; _count field in the MPI_Status structure will be truncated ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 30, 2007, at 1:47 AM, Juan Carlos Guzman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone know the maximum buffer size I can use in MPI_Send()
</span><br>
<span class="quotelev2">&gt;&gt; (MPI_Recv) function?. I was doing some testing using two nodes on my
</span><br>
<span class="quotelev2">&gt;&gt; cluster to measure the point-to-point MPI message rate depending on
</span><br>
<span class="quotelev2">&gt;&gt; size. The test program exchanges MPI_FLOAT datatypes between two
</span><br>
<span class="quotelev2">&gt;&gt; nodes. I was able to send up to 4 GB of data (500 Mega MPI_FLOATs)
</span><br>
<span class="quotelev2">&gt;&gt; before the process crashed with a segmentation fault message.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is the maximum size of the message limited by the sizeof(int) * sizeof
</span><br>
<span class="quotelev2">&gt;&gt; (MPI data type) used in the MPI_Send()/MPI_Recv() functions?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My cluster has openmpi 1.2.3 installed. Each node has 2 x dual core
</span><br>
<span class="quotelev2">&gt;&gt; AMD Opteron and 12 GB RAM.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt;&gt;    Juan-Carlos.
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
<span class="quotelev1">&gt;
</span><br>
<p><pre>
--
Jelena Pjesivac-Grbovic, Pjesa
Graduate Research Assistant
Innovative Computing Laboratory
Computer Science Department, UTK
Claxton Complex 350
(865) 974 - 6722 
(865) 974 - 6321
jpjesiva_at_[hidden]
&quot;The only difference between a problem and a solution is that
  people understand the solution.&quot;
                                       -- Charles Kettering
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3794.php">Adams, Samuel D Contr AFRL/HEDR: "Re: [OMPI users] torque and openmpi"</a>
<li><strong>Previous message:</strong> <a href="3792.php">George Bosilca: "Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<li><strong>In reply to:</strong> <a href="3792.php">George Bosilca: "Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3800.php">Juan Carlos Guzman: "Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
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
