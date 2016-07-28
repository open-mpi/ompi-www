<?
$subject_val = "Re: [OMPI users] Did you break MPI_Abort recently?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 16:47:26 2009" -->
<!-- isoreceived="20090625204726" -->
<!-- sent="Thu, 25 Jun 2009 14:47:19 -0600" -->
<!-- isosent="20090625204719" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Did you break MPI_Abort recently?" -->
<!-- id="D024758C-5354-42B8-B898-E139239E9CFC_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.64.0906251324210.49_at_aragorn.brc.West.Sun.COM" -->
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
<strong>Subject:</strong> Re: [OMPI users] Did you break MPI_Abort recently?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-25 16:47:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9721.php">Mostyn Lewis: "Re: [OMPI users] Did you break MPI_Abort recently?"</a>
<li><strong>Previous message:</strong> <a href="9719.php">Mostyn Lewis: "[OMPI users] Did you break MPI_Abort recently?"</a>
<li><strong>In reply to:</strong> <a href="9719.php">Mostyn Lewis: "[OMPI users] Did you break MPI_Abort recently?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9721.php">Mostyn Lewis: "Re: [OMPI users] Did you break MPI_Abort recently?"</a>
<li><strong>Reply:</strong> <a href="9721.php">Mostyn Lewis: "Re: [OMPI users] Did you break MPI_Abort recently?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Using what launch environment?
<br>
<p>On Jun 25, 2009, at 2:29 PM, Mostyn Lewis wrote:
<br>
<p><span class="quotelev1">&gt; While using the BLACS test programs, I've seen that with recent SVN  
</span><br>
<span class="quotelev1">&gt; checkouts
</span><br>
<span class="quotelev1">&gt; (including todays) the MPI_Abort test left procs running. The last  
</span><br>
<span class="quotelev1">&gt; SVN I
</span><br>
<span class="quotelev1">&gt; have where it worked was 1.4a1r20936. By 1.4a1r21246 it fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Works O.K. in the standard 1.3.2 release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A test program is below. GCC was used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;math.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define NUM_ITERS 100000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Prototype the function that we'll use below. */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static double f(double);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int iter, rank, size, i;
</span><br>
<span class="quotelev1">&gt;  int foo;
</span><br>
<span class="quotelev1">&gt;  double PI25DT = 3.141592653589793238462643;
</span><br>
<span class="quotelev1">&gt;  double mypi, pi, h, sum, x;
</span><br>
<span class="quotelev1">&gt;  double startwtime = 0.0, endwtime;
</span><br>
<span class="quotelev1">&gt;  int namelen;
</span><br>
<span class="quotelev1">&gt;  char processor_name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /* Normal MPI startup */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;  MPI_Get_processor_name(processor_name, &amp;namelen);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  printf(&quot;Process %d of %d on %s\n&quot;, rank, size, processor_name);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /* Do approximations for 1 to 100 points */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /* sleep(5); */
</span><br>
<span class="quotelev1">&gt;  for (iter = 2; iter &lt; NUM_ITERS; ++iter) {
</span><br>
<span class="quotelev1">&gt;    h = 1.0 / (double) iter;
</span><br>
<span class="quotelev1">&gt;    sum = 0.0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    /* A slightly better approach starts from large i and works back */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if (rank == 0)
</span><br>
<span class="quotelev1">&gt;      startwtime = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    for (i = rank + 1; i &lt;= iter; i += size) {
</span><br>
<span class="quotelev1">&gt;      x = h * ((double) i - 0.5);
</span><br>
<span class="quotelev1">&gt;      sum += f(x);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    mypi = h * sum;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if(iter == (NUM_ITERS - 1000)){
</span><br>
<span class="quotelev1">&gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;     if(rank == 2){
</span><br>
<span class="quotelev1">&gt;      MPI_Abort(MPI_COMM_WORLD, -1);
</span><br>
<span class="quotelev1">&gt;     } else {
</span><br>
<span class="quotelev1">&gt;      /* Just loop */
</span><br>
<span class="quotelev1">&gt;      foo = 1;
</span><br>
<span class="quotelev1">&gt;      while(foo == 1){
</span><br>
<span class="quotelev1">&gt;       foo = foo + 3;
</span><br>
<span class="quotelev1">&gt;       foo = foo - 2;
</span><br>
<span class="quotelev1">&gt;       foo = foo - 1;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    MPI_Reduce(&amp;mypi, &amp;pi, 1, MPI_DOUBLE, MPI_SUM, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /* All done */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  if (rank == 0) {
</span><br>
<span class="quotelev1">&gt;   printf(&quot;%d points: pi is approximately %.16f, error = %.16f\n&quot;,
</span><br>
<span class="quotelev1">&gt;           iter, pi, fabs(pi - PI25DT));
</span><br>
<span class="quotelev1">&gt;   endwtime = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt;   printf(&quot;wall clock time = %f\n&quot;, endwtime - startwtime);
</span><br>
<span class="quotelev1">&gt;   fflush(stdout);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static double
</span><br>
<span class="quotelev1">&gt; f(double a)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  return (4.0 / (1.0 + a * a));
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="9721.php">Mostyn Lewis: "Re: [OMPI users] Did you break MPI_Abort recently?"</a>
<li><strong>Previous message:</strong> <a href="9719.php">Mostyn Lewis: "[OMPI users] Did you break MPI_Abort recently?"</a>
<li><strong>In reply to:</strong> <a href="9719.php">Mostyn Lewis: "[OMPI users] Did you break MPI_Abort recently?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9721.php">Mostyn Lewis: "Re: [OMPI users] Did you break MPI_Abort recently?"</a>
<li><strong>Reply:</strong> <a href="9721.php">Mostyn Lewis: "Re: [OMPI users] Did you break MPI_Abort recently?"</a>
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
