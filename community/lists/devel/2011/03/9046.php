<?
$subject_val = "Re: [OMPI devel] [Fwd:  multi-threaded test]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 10 12:17:16 2011" -->
<!-- isoreceived="20110310171716" -->
<!-- sent="Thu, 10 Mar 2011 12:17:11 -0500" -->
<!-- isosent="20110310171711" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Fwd:  multi-threaded test]" -->
<!-- id="8860C087-F6F5-46FC-BAB2-42B1FF494C02_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D78FAFE.6030701_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [Fwd:  multi-threaded test]<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-10 12:17:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9047.php">George Bosilca: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>Previous message:</strong> <a href="9045.php">Eugene Loh: "[OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>In reply to:</strong> <a href="9045.php">Eugene Loh: "[OMPI devel] [Fwd:  multi-threaded test]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9047.php">George Bosilca: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you're trying to make THREAD_MULTIPLE support better, I think that would be great.  If your simple test seems to fail over TCP with THREAD_MULTIPLE, then I think it's pretty clear that it's broken / needs debugging.
<br>
<p>Specifically: if we could have higher confidence in at least a few BTLs' support of THREAD_MULTIPLE, that would be great.
<br>
<p><p>On Mar 10, 2011, at 11:23 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Any comments on this?  We wanted to clean up MPI_THREAD_MULTIPLE support in the trunk and port these changes back to 1.5.x, but it's unclear to me what our expectations should be about any MPI_THREAD_MULTIPLE test succeeding.  How do we assess (test) our changes?  Or, should we just hardwire thread support to be off, as we have done with progress threads?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -------- Original Message --------
</span><br>
<span class="quotelev1">&gt; Subject:	[OMPI devel] multi-threaded test
</span><br>
<span class="quotelev1">&gt; Date:	Tue, 08 Mar 2011 11:24:20 -0800
</span><br>
<span class="quotelev1">&gt; From:	Eugene Loh &lt;eugene.loh_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To:	Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've been assigned CMR 2728, which is to apply some thread-support 
</span><br>
<span class="quotelev1">&gt; changes to 1.5.x.  The trac ticket has amusing language about &quot;needs 
</span><br>
<span class="quotelev1">&gt; testing&quot;.  I'm not sure what that means.  We rather consistently say 
</span><br>
<span class="quotelev1">&gt; that we don't promise anything with regards to true thread support.  We 
</span><br>
<span class="quotelev1">&gt; specifically say certain BTLs are off limits and we say things are 
</span><br>
<span class="quotelev1">&gt; poorly tested and can be expected to break.  Given all that, what does 
</span><br>
<span class="quotelev1">&gt; it mean to test thread support in OMPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One option, specifically in the context of this CMR, is to test only 
</span><br>
<span class="quotelev1">&gt; configuration options and so on.  I've done this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another possibility is to confirm that simple run-time tests of 
</span><br>
<span class="quotelev1">&gt; multi-threaded message passing succeed.  I'm having trouble with this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached is a simple test.  It passes over sm but fails over TCP.  (One 
</span><br>
<span class="quotelev1">&gt; or both of the initial messages is not received.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How high should I set my sights on this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;omp.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;  /* memset */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define N 10000
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev1">&gt;  int np, me, buf[2][N], provided;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  /* init some stuff */
</span><br>
<span class="quotelev1">&gt;  MPI_Init_thread(&amp;argc, &amp;argv, MPI_THREAD_MULTIPLE, &amp;provided);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size(MPI_COMM_WORLD,&amp;np);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(MPI_COMM_WORLD,&amp;me);
</span><br>
<span class="quotelev1">&gt;  if ( provided &lt; MPI_THREAD_MULTIPLE ) MPI_Abort(MPI_COMM_WORLD,-1);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  /* initialize the buffers */
</span><br>
<span class="quotelev1">&gt;  memset(buf[0], 0, N * sizeof(int));
</span><br>
<span class="quotelev1">&gt;  memset(buf[1], 0, N * sizeof(int));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  /* test */
</span><br>
<span class="quotelev1">&gt;  #pragma omp parallel num_threads(2)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    int id = omp_get_thread_num();
</span><br>
<span class="quotelev1">&gt;    MPI_Status st;
</span><br>
<span class="quotelev1">&gt;    printf(&quot;%d %d in parallel region\n&quot;, me, id); fflush(stdout);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    /* pingpong */
</span><br>
<span class="quotelev1">&gt;    if ( me == 0 ) {
</span><br>
<span class="quotelev1">&gt;      MPI_Send(buf[id],N,MPI_INT,1,7+id,MPI_COMM_WORLD    ); printf(&quot;%d %d sent\n&quot;,me,id); fflush(stdout);
</span><br>
<span class="quotelev1">&gt;      MPI_Recv(buf[id],N,MPI_INT,1,7+id,MPI_COMM_WORLD,&amp;st); printf(&quot;%d %d recd\n&quot;,me,id); fflush(stdout);
</span><br>
<span class="quotelev1">&gt;    } else {
</span><br>
<span class="quotelev1">&gt;      MPI_Recv(buf[id],N,MPI_INT,0,7+id,MPI_COMM_WORLD,&amp;st); printf(&quot;%d %d recd\n&quot;,me,id); fflush(stdout);
</span><br>
<span class="quotelev1">&gt;      MPI_Send(buf[id],N,MPI_INT,0,7+id,MPI_COMM_WORLD    ); printf(&quot;%d %d sent\n&quot;,me,id); fflush(stdout);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #!/bin/csh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpicc -xopenmp -m64 -O5 main.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --mca btl self,sm  ./a.out
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --mca btl self,tcp ./a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="9047.php">George Bosilca: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>Previous message:</strong> <a href="9045.php">Eugene Loh: "[OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>In reply to:</strong> <a href="9045.php">Eugene Loh: "[OMPI devel] [Fwd:  multi-threaded test]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9047.php">George Bosilca: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
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
