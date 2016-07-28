<?
$subject_val = "[OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv question";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 17 22:07:00 2011" -->
<!-- isoreceived="20110918020700" -->
<!-- sent="Sun, 18 Sep 2011 02:06:33 +0000" -->
<!-- isosent="20110918020633" -->
<!-- name="Evghenii Gaburov" -->
<!-- email="e-gaburov_at_[hidden]" -->
<!-- subject="[OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv question" -->
<!-- id="8509050A-7357-408E-8D58-C5AEFA7B36CC_at_northwestern.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv question<br>
<strong>From:</strong> Evghenii Gaburov (<em>e-gaburov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-17 22:06:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17323.php">Ralph Castain: "Re: [OMPI users] mpiexec option for node failure"</a>
<li><strong>Previous message:</strong> <a href="17321.php">S&#233;bastien Boisvert: "[OMPI users] Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17431.php">Jeff Squyres: "Re: [OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv question"</a>
<li><strong>Reply:</strong> <a href="17431.php">Jeff Squyres: "Re: [OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>My MPI program's basic task consists of regularly establishing point-to-point communication with other procs via MPI_Alltoall, and then to communicate data. I tested it on two HPC clusters with 32-256 MPI tasks. One of the systems (HPC1) this custom collective runs flawlessly, while on another one (HPC2) the collective causes non-reproducible deadlocks (after a day of running, or after of few hours or so). So, I want to figure out whether it is a system (HPC2) bug that I can communicate to HPC admins, or a subtle bug in my code that needs to be fixed. One possibly important point, I communicate huge amount of data between tasks (up to ~2GB of data) in several all2all calls.
<br>
<p>I would like to have expert eyes to look at the code to confirm or disprove that the code is deadlock-safe. I have implemented several methods (METHOD1 - METHOD4), that, if I am not mistaken, should in principle be deadlock safe. However, as a beginner MPI user, I can easily miss something subtle, as such I seek you help with this! I mostly used METHOD4 which have caused periodic deadlock, after having deadlocks with METHOD1 and METHOD2. On HPC1 none these methods deadlock in my runs. METHOD3 I am currently testing, so cannot comment on it as yet but will later; however, I will be happy to hear your comments.
<br>
<p>Both system use openmpi-1.4.3.
<br>
<p>Your answers will be of great help! Thanks!
<br>
<p>Cheers,
<br>
&nbsp;Evghenii
<br>
<p>Here is the code snippet:
<br>
<p>&nbsp;&nbsp;template&lt;class T&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;void  all2all(std::vector&lt;T&gt; sbuf[], std::vector&lt;T&gt; rbuf[], 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const int myid, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const int nproc)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;static int nsend[NMAXPROC], nrecv[NMAXPROC];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int p = 0; p &lt; nproc; p++) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nsend[p] = sbuf[p].size();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Alltoall(nsend, 1, MPI_INT, nrecv, 1, MPI_INT, MPI_COMM_WORLD);  // let the other tasks know how much data they will receive from this one
<br>
<p>#ifdef _METHOD1_
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;static MPI_Status  stat[NMAXPROC  ];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;static MPI_Request  req[NMAXPROC*2];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int nreq = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int p = 0; p &lt; nproc; p++) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (p != myid)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const int scount = nsend[p];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const int rcount = nrecv[p];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rbuf[p].resize(rcount);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (scount &gt; 0) MPI_Isend(&amp;sbuf[p][0], nscount, datatype&lt;T&gt;(), p, 1, MPI_COMM_WORLD, &amp;req[nreq++]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rcount &gt; 0) MPI_Irecv(&amp;rbuf[p][0], rcount,  datatype&lt;T&gt;(), p, 1, MPI_COMM_WORLD, &amp;req[nreq++]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rbuf[myid] = sbuf[myid];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Waitall(nreq, req, stat);
<br>
<p>#elif defined _METHOD2_
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;static MPI_Status stat;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int p = 0; p &lt; nproc; p++) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (p != myid)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const int scount = nsend[p]*scale;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const int rcount = nrecv[p]*scale;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rbuf[p].resize(rcount);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (scount + rcount &gt; 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Sendrecv(&amp;sbuf[p][0], scount, datatype&lt;T&gt;(), p, 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;rbuf[p][0], rcount, datatype&lt;T&gt;(), p, 1, MPI_COMM_WORLD, &amp;stat);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rbuf[myid] = sbuf[myid];
<br>
<p>#elif defined _METHOD3_
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;static MPI_Status  stat[NMAXPROC  ];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;static MPI_Request  req[NMAXPROC*2];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int dist = 1; dist &lt; nproc; dist++) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const int src = (nproc + myid - dist) % nproc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const int dst = (nproc + myid + dist) % nproc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const int scount = nsend[dst]*scale;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const int rcount = nrecv[src]*scale;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rbuf[src].resize(rcount);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int nreq = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (scount &gt; 0) MPI_Isend(&amp;sbuf[dst][0], scount, datatype&lt;T&gt;(), dst, 1, MPI_COMM_WORLD, &amp;req[nreq++]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rcount &gt; 0) MPI_Irecv(&amp;rbuf[src][0], rcount, datatype&lt;T&gt;(), src, 1, MPI_COMM_WORLD, &amp;req[nreq++]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Waitall(nreq, req, stat);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rbuf[myid] = sbuf[myid];
<br>
<p>#elif defined _METHOD4_
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;static MPI_Status stat;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int dist = 1; dist &lt; nproc; dist++) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const int src = (nproc + myid - dist) % nproc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const int dst = (nproc + myid + dist) % nproc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const int scount = nsend[dst]*scale;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const int rcount = nrecv[src]*scale;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rbuf[src].resize(rcount);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ((myid/dist) &amp; 1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (scount &gt; 0) MPI_Send(&amp;sbuf[dst][0], scount, datatype&lt;T&gt;(), dst, 1, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rcount &gt; 0) MPI_Recv(&amp;rbuf[src][0], rcount, datatype&lt;T&gt;(), src, 1, MPI_COMM_WORLD, &amp;stat);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rcount &gt; 0) MPI_Recv(&amp;rbuf[src][0], rcount, datatype&lt;T&gt;(), src, 1, MPI_COMM_WORLD, &amp;stat);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (scount &gt; 0) MPI_Send(&amp;sbuf[dst][0], scount, datatype&lt;T&gt;(), dst, 1, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rbuf[myid] = sbuf[myid];
<br>
#endif
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17323.php">Ralph Castain: "Re: [OMPI users] mpiexec option for node failure"</a>
<li><strong>Previous message:</strong> <a href="17321.php">S&#233;bastien Boisvert: "[OMPI users] Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17431.php">Jeff Squyres: "Re: [OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv question"</a>
<li><strong>Reply:</strong> <a href="17431.php">Jeff Squyres: "Re: [OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv question"</a>
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
