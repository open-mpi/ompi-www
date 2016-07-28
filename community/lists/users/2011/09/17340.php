<?
$subject_val = "Re: [OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv 	question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 19 10:59:45 2011" -->
<!-- isoreceived="20110919145945" -->
<!-- sent="Mon, 19 Sep 2011 07:59:36 -0700" -->
<!-- isosent="20110919145936" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv 	question" -->
<!-- id="4E7758D8.2000105_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A197981E-F2F7-4FBD-98A4-1A1587352E43_at_northwestern.edu" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-19 10:59:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17341.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Open MPI and Objective C"</a>
<li><strong>Previous message:</strong> <a href="17339.php">Gus Correa: "Re: [OMPI users] RE :  MPI hangs on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="17324.php">Evghenii Gaburov: "Re: [OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv 	question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/18/2011 9:12 AM, Evghenii Gaburov wrote:
<br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Update to the original posting: METHOD4 also resulted in a deadlock on system HPC2 after 5h of run with 32 MPI tasks; also, &quot;const int scale=1;&quot; was missing in the code snippet posted above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --Evghenii
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 2
</span><br>
<span class="quotelev2">&gt;&gt; Date: Sun, 18 Sep 2011 02:06:33 +0000
</span><br>
<span class="quotelev2">&gt;&gt; From: Evghenii Gaburov&lt;e-gaburov_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] custom sparse collective non-reproducible
</span><br>
<span class="quotelev2">&gt;&gt; 	deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv
</span><br>
<span class="quotelev2">&gt;&gt; 	question
</span><br>
<span class="quotelev2">&gt;&gt; To: &quot;users_at_[hidden]&quot;&lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID:&lt;8509050A-7357-408E-8D58-C5AEFA7B36CC_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My MPI program's basic task consists of regularly establishing point-to-point communication with other procs via MPI_Alltoall, and then to communicate data. I tested it on two HPC clusters with 32-256 MPI tasks. One of the systems (HPC1) this custom collective runs flawlessly, while on another one (HPC2) the collective causes non-reproducible deadlocks (after a day of running, or after of few hours or so). So, I want to figure out whether it is a system (HPC2) bug that I can communicate to HPC admins, or a subtle bug in my code that needs to be fixed. One possibly important point, I communicate huge amount of data between tasks (up to ~2GB of data) in several all2all calls.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would like to have expert eyes to look at the code to confirm or disprove that the code is deadlock-safe. I have implemented several methods (METHOD1 - METHOD4), that, if I am not mistaken, should in principle be deadlock safe. However, as a beginner MPI user, I can easily miss something subtle, as such I seek you help with this! I mostly used METHOD4 which have caused periodic deadlock, after having deadlocks with METHOD1 and METHOD2. On HPC1 none these methods deadlock in my runs. METHOD3 I am currently testing, so cannot comment on it as yet but will later; however, I will be happy to hear your comments.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Both system use openmpi-1.4.3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your answers will be of great help! Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Evghenii
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the code snippet:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   template&lt;class T&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     void  all2all(std::vector&lt;T&gt;  sbuf[], std::vector&lt;T&gt;  rbuf[],
</span><br>
<span class="quotelev2">&gt;&gt;         const int myid,
</span><br>
<span class="quotelev2">&gt;&gt;         const int nproc)
</span><br>
<span class="quotelev2">&gt;&gt;     {
</span><br>
<span class="quotelev2">&gt;&gt; 	static int nsend[NMAXPROC], nrecv[NMAXPROC];
</span><br>
<span class="quotelev2">&gt;&gt;         for (int p = 0; p&lt;  nproc; p++)
</span><br>
<span class="quotelev2">&gt;&gt;           nsend[p] = sbuf[p].size();
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Alltoall(nsend, 1, MPI_INT, nrecv, 1, MPI_INT, MPI_COMM_WORLD);  // let the other tasks know how much data they will receive from this one
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #ifdef _METHOD1_
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	static MPI_Status  stat[NMAXPROC  ];
</span><br>
<span class="quotelev2">&gt;&gt; 	static MPI_Request  req[NMAXPROC*2];
</span><br>
<span class="quotelev2">&gt;&gt; 	int nreq = 0;
</span><br>
<span class="quotelev2">&gt;&gt; 	for (int p = 0; p&lt;  nproc; p++)
</span><br>
<span class="quotelev2">&gt;&gt; 	  if (p != myid)
</span><br>
<span class="quotelev2">&gt;&gt; 	  {
</span><br>
<span class="quotelev2">&gt;&gt; 	    const int scount = nsend[p];
</span><br>
<span class="quotelev2">&gt;&gt;   	    const int rcount = nrecv[p];
</span><br>
<span class="quotelev2">&gt;&gt; 	    rbuf[p].resize(rcount);
</span><br>
<span class="quotelev2">&gt;&gt; 	    if (scount&gt;  0) MPI_Isend(&amp;sbuf[p][0], nscount, datatype&lt;T&gt;(), p, 1, MPI_COMM_WORLD,&amp;req[nreq++]);
</span><br>
<span class="quotelev2">&gt;&gt; 	    if (rcount&gt;  0) MPI_Irecv(&amp;rbuf[p][0], rcount,  datatype&lt;T&gt;(), p, 1, MPI_COMM_WORLD,&amp;req[nreq++]);
</span><br>
<span class="quotelev2">&gt;&gt; 	  }
</span><br>
<span class="quotelev2">&gt;&gt; 	rbuf[myid] = sbuf[myid];
</span><br>
<span class="quotelev2">&gt;&gt; 	MPI_Waitall(nreq, req, stat);
</span><br>
Incidentally, here, you have 2*nproc requests, interlacing sends and 
<br>
receives.  Your array of statuses, however, is only MAXPROC big.  I 
<br>
think you need to declare stat[NMAXPROC*2].  Also, do you want scount in 
<br>
place of nscount?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17341.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Open MPI and Objective C"</a>
<li><strong>Previous message:</strong> <a href="17339.php">Gus Correa: "Re: [OMPI users] RE :  MPI hangs on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="17324.php">Evghenii Gaburov: "Re: [OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv 	question"</a>
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
