<?
$subject_val = "Re: [OMPI users] [mpich-discuss] problem with MPI_Get_count() for very long (but legal length) messages.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  8 21:33:48 2010" -->
<!-- isoreceived="20100209023348" -->
<!-- sent="Mon, 8 Feb 2010 21:33:43 -0500" -->
<!-- isosent="20100209023343" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [mpich-discuss] problem with MPI_Get_count() for very long (but legal length) messages." -->
<!-- id="4ACD9008-E067-4EF8-AA80-F9D474259E9D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="873a1ee4tq.fsf_at_59A2.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] [mpich-discuss] problem with MPI_Get_count() for very long (but legal length) messages.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-08 21:33:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12053.php">Terry Dontje: "Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8, (Sparc)?"</a>
<li><strong>Previous message:</strong> <a href="12051.php">Jeff Squyres: "Re: [OMPI users] libtool compile error"</a>
<li><strong>In reply to:</strong> <a href="12030.php">Jed Brown: "Re: [OMPI users] [mpich-discuss] problem with MPI_Get_count() for very long (but legal length) messages."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, I filed <a href="https://svn.open-mpi.org/trac/ompi/ticket/2241">https://svn.open-mpi.org/trac/ompi/ticket/2241</a> about this.
<br>
<p>Thanks Jed!
<br>
<p><p>On Feb 6, 2010, at 10:56 AM, Jed Brown wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, 5 Feb 2010 14:28:40 -0600, Barry Smith &lt;bsmith_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; To cheer you up, when I run with openMPI it runs forever sucking down 
</span><br>
<span class="quotelev2">&gt; &gt; 100% CPU trying to send the messages :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On my test box (x86 with 8GB memory), Open MPI (1.4.1) does complete
</span><br>
<span class="quotelev1">&gt; after several seconds, but still prints the wrong count.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPICH2 does not actually send the message, as you can see by running the
</span><br>
<span class="quotelev1">&gt; attached code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   # Open MPI 1.4.1, correct cols[0]
</span><br>
<span class="quotelev1">&gt;   [0] sending...
</span><br>
<span class="quotelev1">&gt;   [1] receiving...
</span><br>
<span class="quotelev1">&gt;   count -103432106, cols[0] 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   # MPICH2 1.2.1, incorrect cols[1]
</span><br>
<span class="quotelev1">&gt;   [1] receiving...
</span><br>
<span class="quotelev1">&gt;   [0] sending...
</span><br>
<span class="quotelev1">&gt;   [1] count -103432106, cols[0] 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How much memory does crush have (you need about 7GB to do this without
</span><br>
<span class="quotelev1">&gt; swapping)?  In particular, most of the time it took Open MPI to send the
</span><br>
<span class="quotelev1">&gt; message (with your source) was actually just spent faulting the
</span><br>
<span class="quotelev1">&gt; send/recv buffers.  The attached faults the buffers first, and the
</span><br>
<span class="quotelev1">&gt; subsequent send/recv takes less than 2 seconds.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, it's clear that MPICH2 never touches either buffer because it
</span><br>
<span class="quotelev1">&gt; returns immediately regardless of whether they have been faulted first.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc,char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int        ierr,i,size,rank;
</span><br>
<span class="quotelev1">&gt;  int        cnt = 433438806;
</span><br>
<span class="quotelev1">&gt;  MPI_Status status;
</span><br>
<span class="quotelev1">&gt;  long long  *cols;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;  ierr = MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
</span><br>
<span class="quotelev1">&gt;  ierr = MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev1">&gt;  if (size != 2) {
</span><br>
<span class="quotelev1">&gt;    fprintf(stderr,&quot;[%d] usage: mpiexec -n 2 %s\n&quot;,rank,argv[0]);
</span><br>
<span class="quotelev1">&gt;    MPI_Abort(MPI_COMM_WORLD,1);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  cols = malloc(cnt*sizeof(long long));
</span><br>
<span class="quotelev1">&gt;  for (i=0; i&lt;cnt; i++) cols[i] = rank;
</span><br>
<span class="quotelev1">&gt;  if (rank == 0) {
</span><br>
<span class="quotelev1">&gt;    printf(&quot;[%d] sending...\n&quot;,rank);
</span><br>
<span class="quotelev1">&gt;    ierr = MPI_Send(cols,cnt,MPI_LONG_LONG_INT,1,0,MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  } else {
</span><br>
<span class="quotelev1">&gt;    printf(&quot;[%d] receiving...\n&quot;,rank);
</span><br>
<span class="quotelev1">&gt;    ierr = MPI_Recv(cols,cnt,MPI_LONG_LONG_INT,0,0,MPI_COMM_WORLD,&amp;status);
</span><br>
<span class="quotelev1">&gt;    ierr = MPI_Get_count(&amp;status,MPI_LONG_LONG_INT,&amp;cnt);
</span><br>
<span class="quotelev1">&gt;    printf(&quot;[%d] count %d, cols[0] %lld\n&quot;,rank,cnt,cols[0]);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  ierr = MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
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
<li><strong>Next message:</strong> <a href="12053.php">Terry Dontje: "Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8, (Sparc)?"</a>
<li><strong>Previous message:</strong> <a href="12051.php">Jeff Squyres: "Re: [OMPI users] libtool compile error"</a>
<li><strong>In reply to:</strong> <a href="12030.php">Jed Brown: "Re: [OMPI users] [mpich-discuss] problem with MPI_Get_count() for very long (but legal length) messages."</a>
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
