<?
$subject_val = "Re: [OMPI devel] [Fwd:  multi-threaded test]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 10 18:59:30 2011" -->
<!-- isoreceived="20110310235930" -->
<!-- sent="Thu, 10 Mar 2011 16:59:22 -0700" -->
<!-- isosent="20110310235922" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Fwd:  multi-threaded test]" -->
<!-- id="BF6D2250-C944-4CB4-A06F-AC20A6E44A15_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B88EC8BE-3C78-497B-9929-C6146BB4536A_at_eecs.utk.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-10 18:59:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9052.php">Eugene Loh: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>Previous message:</strong> <a href="9050.php">Ralph Castain: "Re: [OMPI devel] turning on progress threads"</a>
<li><strong>In reply to:</strong> <a href="9047.php">George Bosilca: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9052.php">Eugene Loh: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>Reply:</strong> <a href="9052.php">Eugene Loh: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can't speak to the MPI layer, but you definitely cannot hardwire thread support to &quot;off&quot; for ORTE.
<br>
<p><p>On Mar 10, 2011, at 10:57 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 10, 2011, at 11:23 , Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any comments on this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good luck?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We wanted to clean up MPI_THREAD_MULTIPLE support in the trunk and port these changes back to 1.5.x, but it's unclear to me what our expectations should be about any MPI_THREAD_MULTIPLE test succeeding.  How do we assess (test) our changes?  Or, should we just hardwire thread support to be off, as we have done with progress threads?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -------- Original Message --------
</span><br>
<span class="quotelev2">&gt;&gt; Subject:	[OMPI devel] multi-threaded test
</span><br>
<span class="quotelev2">&gt;&gt; Date:	Tue, 08 Mar 2011 11:24:20 -0800
</span><br>
<span class="quotelev2">&gt;&gt; From:	Eugene Loh &lt;eugene.loh_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To:	Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've been assigned CMR 2728, which is to apply some thread-support 
</span><br>
<span class="quotelev2">&gt;&gt; changes to 1.5.x.  The trac ticket has amusing language about &quot;needs 
</span><br>
<span class="quotelev2">&gt;&gt; testing&quot;.  I'm not sure what that means.  We rather consistently say 
</span><br>
<span class="quotelev2">&gt;&gt; that we don't promise anything with regards to true thread support.  We 
</span><br>
<span class="quotelev2">&gt;&gt; specifically say certain BTLs are off limits and we say things are 
</span><br>
<span class="quotelev2">&gt;&gt; poorly tested and can be expected to break.  Given all that, what does 
</span><br>
<span class="quotelev2">&gt;&gt; it mean to test thread support in OMPI?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; One option, specifically in the context of this CMR, is to test only 
</span><br>
<span class="quotelev2">&gt;&gt; configuration options and so on.  I've done this.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Another possibility is to confirm that simple run-time tests of 
</span><br>
<span class="quotelev2">&gt;&gt; multi-threaded message passing succeed.  I'm having trouble with this.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Attached is a simple test.  It passes over sm but fails over TCP.  (One 
</span><br>
<span class="quotelev2">&gt;&gt; or both of the initial messages is not received.)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How high should I set my sights on this?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;omp.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;string.h&gt;  /* memset */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #define N 10000
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev2">&gt;&gt; int np, me, buf[2][N], provided;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /* init some stuff */
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init_thread(&amp;argc, &amp;argv, MPI_THREAD_MULTIPLE, &amp;provided);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_size(MPI_COMM_WORLD,&amp;np);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_rank(MPI_COMM_WORLD,&amp;me);
</span><br>
<span class="quotelev2">&gt;&gt; if ( provided &lt; MPI_THREAD_MULTIPLE ) MPI_Abort(MPI_COMM_WORLD,-1);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /* initialize the buffers */
</span><br>
<span class="quotelev2">&gt;&gt; memset(buf[0], 0, N * sizeof(int));
</span><br>
<span class="quotelev2">&gt;&gt; memset(buf[1], 0, N * sizeof(int));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /* test */
</span><br>
<span class="quotelev2">&gt;&gt; #pragma omp parallel num_threads(2)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;   int id = omp_get_thread_num();
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Status st;
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;%d %d in parallel region\n&quot;, me, id); fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   /* pingpong */
</span><br>
<span class="quotelev2">&gt;&gt;   if ( me == 0 ) {
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Send(buf[id],N,MPI_INT,1,7+id,MPI_COMM_WORLD    ); printf(&quot;%d %d sent\n&quot;,me,id); fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Recv(buf[id],N,MPI_INT,1,7+id,MPI_COMM_WORLD,&amp;st); printf(&quot;%d %d recd\n&quot;,me,id); fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt;   } else {
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Recv(buf[id],N,MPI_INT,0,7+id,MPI_COMM_WORLD,&amp;st); printf(&quot;%d %d recd\n&quot;,me,id); fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Send(buf[id],N,MPI_INT,0,7+id,MPI_COMM_WORLD    ); printf(&quot;%d %d sent\n&quot;,me,id); fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt;   }
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/csh
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpicc -xopenmp -m64 -O5 main.c
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 --mca btl self,sm  ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 --mca btl self,tcp ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9052.php">Eugene Loh: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>Previous message:</strong> <a href="9050.php">Ralph Castain: "Re: [OMPI devel] turning on progress threads"</a>
<li><strong>In reply to:</strong> <a href="9047.php">George Bosilca: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9052.php">Eugene Loh: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<li><strong>Reply:</strong> <a href="9052.php">Eugene Loh: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
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
