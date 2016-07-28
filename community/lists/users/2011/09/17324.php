<?
$subject_val = "Re: [OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv 	question";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 18 12:12:57 2011" -->
<!-- isoreceived="20110918161257" -->
<!-- sent="Sun, 18 Sep 2011 16:12:29 +0000" -->
<!-- isosent="20110918161229" -->
<!-- name="Evghenii Gaburov" -->
<!-- email="e-gaburov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv 	question" -->
<!-- id="A197981E-F2F7-4FBD-98A4-1A1587352E43_at_northwestern.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.11.1316361603.2155.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv 	question<br>
<strong>From:</strong> Evghenii Gaburov (<em>e-gaburov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-18 12:12:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17325.php">Scott Wilcox: "[OMPI users] Open MPI and Objective C"</a>
<li><strong>Previous message:</strong> <a href="17323.php">Ralph Castain: "Re: [OMPI users] mpiexec option for node failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17340.php">Eugene Loh: "Re: [OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv 	question"</a>
<li><strong>Reply:</strong> <a href="17340.php">Eugene Loh: "Re: [OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv 	question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>Update to the original posting: METHOD4 also resulted in a deadlock on system HPC2 after 5h of run with 32 MPI tasks; also, &quot;const int scale=1;&quot; was missing in the code snippet posted above.
<br>
<p>--Evghenii
<br>
<p><span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Sun, 18 Sep 2011 02:06:33 +0000
</span><br>
<span class="quotelev1">&gt; From: Evghenii Gaburov &lt;e-gaburov_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] custom sparse collective non-reproducible
</span><br>
<span class="quotelev1">&gt; 	deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv
</span><br>
<span class="quotelev1">&gt; 	question
</span><br>
<span class="quotelev1">&gt; To: &quot;users_at_[hidden]&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;8509050A-7357-408E-8D58-C5AEFA7B36CC_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My MPI program's basic task consists of regularly establishing point-to-point communication with other procs via MPI_Alltoall, and then to communicate data. I tested it on two HPC clusters with 32-256 MPI tasks. One of the systems (HPC1) this custom collective runs flawlessly, while on another one (HPC2) the collective causes non-reproducible deadlocks (after a day of running, or after of few hours or so). So, I want to figure out whether it is a system (HPC2) bug that I can communicate to HPC admins, or a subtle bug in my code that needs to be fixed. One possibly important point, I communicate huge amount of data between tasks (up to ~2GB of data) in several all2all calls.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would like to have expert eyes to look at the code to confirm or disprove that the code is deadlock-safe. I have implemented several methods (METHOD1 - METHOD4), that, if I am not mistaken, should in principle be deadlock safe. However, as a beginner MPI user, I can easily miss something subtle, as such I seek you help with this! I mostly used METHOD4 which have caused periodic deadlock, after having deadlocks with METHOD1 and METHOD2. On HPC1 none these methods deadlock in my runs. METHOD3 I am currently testing, so cannot comment on it as yet but will later; however, I will be happy to hear your comments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Both system use openmpi-1.4.3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your answers will be of great help! Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Evghenii
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the code snippet:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  template&lt;class T&gt;
</span><br>
<span class="quotelev1">&gt;    void  all2all(std::vector&lt;T&gt; sbuf[], std::vector&lt;T&gt; rbuf[], 
</span><br>
<span class="quotelev1">&gt;        const int myid, 
</span><br>
<span class="quotelev1">&gt;        const int nproc)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt; 	static int nsend[NMAXPROC], nrecv[NMAXPROC];
</span><br>
<span class="quotelev1">&gt;        for (int p = 0; p &lt; nproc; p++) 
</span><br>
<span class="quotelev1">&gt;          nsend[p] = sbuf[p].size();
</span><br>
<span class="quotelev1">&gt;        MPI_Alltoall(nsend, 1, MPI_INT, nrecv, 1, MPI_INT, MPI_COMM_WORLD);  // let the other tasks know how much data they will receive from this one
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #ifdef _METHOD1_
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	static MPI_Status  stat[NMAXPROC  ];
</span><br>
<span class="quotelev1">&gt; 	static MPI_Request  req[NMAXPROC*2];
</span><br>
<span class="quotelev1">&gt; 	int nreq = 0;
</span><br>
<span class="quotelev1">&gt; 	for (int p = 0; p &lt; nproc; p++) 
</span><br>
<span class="quotelev1">&gt; 	  if (p != myid)
</span><br>
<span class="quotelev1">&gt; 	  {
</span><br>
<span class="quotelev1">&gt; 	    const int scount = nsend[p];
</span><br>
<span class="quotelev1">&gt;  	    const int rcount = nrecv[p];
</span><br>
<span class="quotelev1">&gt; 	    rbuf[p].resize(rcount);
</span><br>
<span class="quotelev1">&gt; 	    if (scount &gt; 0) MPI_Isend(&amp;sbuf[p][0], nscount, datatype&lt;T&gt;(), p, 1, MPI_COMM_WORLD, &amp;req[nreq++]);
</span><br>
<span class="quotelev1">&gt; 	    if (rcount &gt; 0) MPI_Irecv(&amp;rbuf[p][0], rcount,  datatype&lt;T&gt;(), p, 1, MPI_COMM_WORLD, &amp;req[nreq++]);
</span><br>
<span class="quotelev1">&gt; 	  }
</span><br>
<span class="quotelev1">&gt; 	rbuf[myid] = sbuf[myid];
</span><br>
<span class="quotelev1">&gt; 	MPI_Waitall(nreq, req, stat);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #elif defined _METHOD2_
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	static MPI_Status stat;
</span><br>
<span class="quotelev1">&gt; 	for (int p = 0; p &lt; nproc; p++) 
</span><br>
<span class="quotelev1">&gt; 	   if (p != myid)
</span><br>
<span class="quotelev1">&gt; 	   {
</span><br>
<span class="quotelev1">&gt; 	     const int scount = nsend[p]*scale;
</span><br>
<span class="quotelev1">&gt; 	     const int rcount = nrecv[p]*scale;
</span><br>
<span class="quotelev1">&gt; 	     rbuf[p].resize(rcount);
</span><br>
<span class="quotelev1">&gt; 	     if (scount + rcount &gt; 0)
</span><br>
<span class="quotelev1">&gt; 		MPI_Sendrecv(&amp;sbuf[p][0], scount, datatype&lt;T&gt;(), p, 1,
</span><br>
<span class="quotelev1">&gt; 			     &amp;rbuf[p][0], rcount, datatype&lt;T&gt;(), p, 1, MPI_COMM_WORLD, &amp;stat);
</span><br>
<span class="quotelev1">&gt; 	    }
</span><br>
<span class="quotelev1">&gt;            rbuf[myid] = sbuf[myid];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #elif defined _METHOD3_
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	static MPI_Status  stat[NMAXPROC  ];
</span><br>
<span class="quotelev1">&gt; 	static MPI_Request  req[NMAXPROC*2];
</span><br>
<span class="quotelev1">&gt; 	for (int dist = 1; dist &lt; nproc; dist++) 
</span><br>
<span class="quotelev1">&gt; 	{
</span><br>
<span class="quotelev1">&gt; 		const int src = (nproc + myid - dist) % nproc;
</span><br>
<span class="quotelev1">&gt; 		const int dst = (nproc + myid + dist) % nproc;
</span><br>
<span class="quotelev1">&gt; 		const int scount = nsend[dst]*scale;
</span><br>
<span class="quotelev1">&gt; 		const int rcount = nrecv[src]*scale;
</span><br>
<span class="quotelev1">&gt; 		rbuf[src].resize(rcount);
</span><br>
<span class="quotelev1">&gt; 		int nreq = 0;
</span><br>
<span class="quotelev1">&gt; 		if (scount &gt; 0) MPI_Isend(&amp;sbuf[dst][0], scount, datatype&lt;T&gt;(), dst, 1, MPI_COMM_WORLD, &amp;req[nreq++]);
</span><br>
<span class="quotelev1">&gt; 		if (rcount &gt; 0) MPI_Irecv(&amp;rbuf[src][0], rcount, datatype&lt;T&gt;(), src, 1, MPI_COMM_WORLD, &amp;req[nreq++]);
</span><br>
<span class="quotelev1">&gt; 		MPI_Waitall(nreq, req, stat);
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 	rbuf[myid] = sbuf[myid];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #elif defined _METHOD4_
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	static MPI_Status stat;
</span><br>
<span class="quotelev1">&gt; 	for (int dist = 1; dist &lt; nproc; dist++) 
</span><br>
<span class="quotelev1">&gt; 	{
</span><br>
<span class="quotelev1">&gt; 		const int src = (nproc + myid - dist) % nproc;
</span><br>
<span class="quotelev1">&gt; 		const int dst = (nproc + myid + dist) % nproc;
</span><br>
<span class="quotelev1">&gt; 		const int scount = nsend[dst]*scale;
</span><br>
<span class="quotelev1">&gt; 		const int rcount = nrecv[src]*scale;
</span><br>
<span class="quotelev1">&gt; 		rbuf[src].resize(rcount);
</span><br>
<span class="quotelev1">&gt; 		if ((myid/dist) &amp; 1)
</span><br>
<span class="quotelev1">&gt; 		{
</span><br>
<span class="quotelev1">&gt; 			if (scount &gt; 0) MPI_Send(&amp;sbuf[dst][0], scount, datatype&lt;T&gt;(), dst, 1, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 			if (rcount &gt; 0) MPI_Recv(&amp;rbuf[src][0], rcount, datatype&lt;T&gt;(), src, 1, MPI_COMM_WORLD, &amp;stat);
</span><br>
<span class="quotelev1">&gt; 		}
</span><br>
<span class="quotelev1">&gt; 		else
</span><br>
<span class="quotelev1">&gt; 		{
</span><br>
<span class="quotelev1">&gt; 			if (rcount &gt; 0) MPI_Recv(&amp;rbuf[src][0], rcount, datatype&lt;T&gt;(), src, 1, MPI_COMM_WORLD, &amp;stat);
</span><br>
<span class="quotelev1">&gt; 			if (scount &gt; 0) MPI_Send(&amp;sbuf[dst][0], scount, datatype&lt;T&gt;(), dst, 1, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 		}
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 	rbuf[myid] = sbuf[myid];
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17325.php">Scott Wilcox: "[OMPI users] Open MPI and Objective C"</a>
<li><strong>Previous message:</strong> <a href="17323.php">Ralph Castain: "Re: [OMPI users] mpiexec option for node failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17340.php">Eugene Loh: "Re: [OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv 	question"</a>
<li><strong>Reply:</strong> <a href="17340.php">Eugene Loh: "Re: [OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv 	question"</a>
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
