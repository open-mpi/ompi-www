<?
$subject_val = "Re: [OMPI users] MPI_Waitall strange behaviour on remote nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 10:52:23 2012" -->
<!-- isoreceived="20120215155223" -->
<!-- sent="Wed, 15 Feb 2012 10:52:18 -0500" -->
<!-- isosent="20120215155218" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Waitall strange behaviour on remote nodes" -->
<!-- id="DD5702DF-FD14-43B3-AEC8-D6369F844677_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CC079EC2969745A08F16C06EFF23F7EE_at_starfish" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Waitall strange behaviour on remote nodes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 10:52:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18479.php">Gustavo Correa: "Re: [OMPI users] Strange OpenMPI messages"</a>
<li><strong>Previous message:</strong> <a href="18477.php">Jeff Squyres: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>In reply to:</strong> <a href="18461.php">Richard Bardwell: "[OMPI users] MPI_Waitall strange behaviour on remote nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Your code works fine for me.
<br>
<p>Have you disabled iptables / any other firewalling?
<br>
<p><p>On Feb 14, 2012, at 10:56 AM, Richard Bardwell wrote:
<br>
<p><span class="quotelev1">&gt; In trying to debug an MPI_Waitall hang on a remote
</span><br>
<span class="quotelev1">&gt; node, I created a simple code to test.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If we run the simple code below on 2 nodes on a local
</span><br>
<span class="quotelev1">&gt; machine, we send the number 1 and receive number 1 back.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If we run the same code on a local node and a remote node,
</span><br>
<span class="quotelev1">&gt; we send number 1 but get 32767 back. Any ideas ???
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define PCPU 8
</span><br>
<span class="quotelev1">&gt; int rank,nproc;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; main(argc, argv)
</span><br>
<span class="quotelev1">&gt; int argc;
</span><br>
<span class="quotelev1">&gt; char *argv[];
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int i,j,k,i1;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size(MPI_COMM_WORLD, &amp;nproc);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  if (rank==0) {
</span><br>
<span class="quotelev1">&gt;   i1 = 1;
</span><br>
<span class="quotelev1">&gt;   mpisend(i1);
</span><br>
<span class="quotelev1">&gt;  }else{
</span><br>
<span class="quotelev1">&gt;   k=mpirecv();
</span><br>
<span class="quotelev1">&gt;   printf(&quot;R%d: recvd %d\n&quot;,rank,k);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpisend(ok)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int ok;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int i,j,k,m;
</span><br>
<span class="quotelev1">&gt;  int tag=201;
</span><br>
<span class="quotelev1">&gt;  MPI_Request request[PCPU];
</span><br>
<span class="quotelev1">&gt;  MPI_Status status[PCPU];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  for (m=1;m&lt;nproc;m++) {
</span><br>
<span class="quotelev1">&gt;   printf(&quot;R%d-&gt;%d\n&quot;,rank,m);
</span><br>
<span class="quotelev1">&gt;   MPI_Isend(&amp;ok, 1, MPI_INT, m, tag+m, MPI_COMM_WORLD,&amp;request[m-1]);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirecv()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int i,j,k,m;
</span><br>
<span class="quotelev1">&gt;  int hrecv;
</span><br>
<span class="quotelev1">&gt;  int tag=201;
</span><br>
<span class="quotelev1">&gt;  MPI_Request request[PCPU];
</span><br>
<span class="quotelev1">&gt;  MPI_Status status[PCPU];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Irecv(&amp;hrecv, 1, MPI_INT, 0, tag+rank, MPI_COMM_WORLD, &amp;request[rank-1]);
</span><br>
<span class="quotelev1">&gt;  MPI_Waitall(1,&amp;request[rank-1],&amp;status[rank-1]);
</span><br>
<span class="quotelev1">&gt;  return(hrecv);
</span><br>
<span class="quotelev1">&gt; }
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18479.php">Gustavo Correa: "Re: [OMPI users] Strange OpenMPI messages"</a>
<li><strong>Previous message:</strong> <a href="18477.php">Jeff Squyres: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>In reply to:</strong> <a href="18461.php">Richard Bardwell: "[OMPI users] MPI_Waitall strange behaviour on remote nodes"</a>
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
