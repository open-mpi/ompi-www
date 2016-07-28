<?
$subject_val = "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 30 16:09:14 2010" -->
<!-- isoreceived="20101130210914" -->
<!-- sent="Tue, 30 Nov 2010 15:09:02 -0600" -->
<!-- isosent="20101130210902" -->
<!-- name="Ioannis Papadopoulos" -->
<!-- email="giannis.papadopoulos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Calling MPI_Test() too many times results in a time spike" -->
<!-- id="4CF567EE.1030901_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CF53312.10408_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Calling MPI_Test() too many times results in a time spike<br>
<strong>From:</strong> Ioannis Papadopoulos (<em>giannis.papadopoulos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-30 16:09:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14956.php">Jesse Ziser: "Re: [OMPI users] SIGPIPE handling?"</a>
<li><strong>Previous message:</strong> <a href="14954.php">Eugene Loh: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>In reply to:</strong> <a href="14954.php">Eugene Loh: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/15156.php">Jeff Squyres: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/15156.php">Jeff Squyres: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Ioannis Papadopoulos wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Has anyone observed similar behaviour? Is it something that I'll have 
</span><br>
<span class="quotelev2">&gt;&gt; to deal with it in my code or does it indeed qualify as an issue to 
</span><br>
<span class="quotelev2">&gt;&gt; be looked into?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would say this is NOT an issue that merits much attention.  There 
</span><br>
<span class="quotelev1">&gt; are too many potential performance anomalies that you might be 
</span><br>
<span class="quotelev1">&gt; encountering and they aren't worth &quot;fixing&quot; (or even understanding) 
</span><br>
<span class="quotelev1">&gt; unless they impact your application's performance in a meaningful way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; E.g., try timing &quot;nothing&quot;.  Here is a sample test program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define N 1000000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev1">&gt;  int i;
</span><br>
<span class="quotelev1">&gt;  double t[N], tavg = 0, tmin = 1.e20, tmax = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;  for ( i = 0; i &lt; N; i++ ) {
</span><br>
<span class="quotelev1">&gt;    t[i] = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt;    t[i] = MPI_Wtime() - t[i];
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  for ( i = 0; i &lt; N; i++ ) {
</span><br>
<span class="quotelev1">&gt;    tavg += t[i];
</span><br>
<span class="quotelev1">&gt;    if ( tmin &gt; t[i] ) tmin = t[i];
</span><br>
<span class="quotelev1">&gt;    if ( tmax &lt; t[i] ) tmax = t[i];
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  tavg /= N;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  printf(&quot;avg %12.3lf\n&quot;, tavg * 1.e6);
</span><br>
<span class="quotelev1">&gt;  printf(&quot;min %12.3lf\n&quot;, tmin * 1.e6);
</span><br>
<span class="quotelev1">&gt;  printf(&quot;max %12.3lf\n&quot;, tmax * 1.e6);
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
<span class="quotelev1">&gt; I find that the minimum is 0 (indicating non-infinitesimal granularity 
</span><br>
<span class="quotelev1">&gt; of the timer), the average is small (some overhead of the timer call), 
</span><br>
<span class="quotelev1">&gt; and the maximum is very large.  Why?  Because something will happen 
</span><br>
<span class="quotelev1">&gt; now and then.  What it is doesn't matter unless your application's 
</span><br>
<span class="quotelev1">&gt; performance is suffering.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You report that the overall time is about the same.  That is, it takes 
</span><br>
<span class="quotelev1">&gt; just over a second to receive the message, which is expected if the 
</span><br>
<span class="quotelev1">&gt; sender delays a second before sending.
</span><br>
<p>The overall time may be the same, however it is alarming (at least to 
<br>
me) that if you call MPI_Test() too many times, the average time per 
<br>
MPI_Test() call increases. After all, that is what I am trying to 
<br>
measure, how much it costs to call MPI_Test() on average.
<br>
<p>In your MPI_Wtime() example, the average overhead of MPI_Wtime() is 
<br>
exactly the same, independently of max/min time - which is what I would 
<br>
expect. This is not true for MPI_Test(). A small delay before calling 
<br>
the later, lowers the MPI_Test() average time.
<br>
<p><span class="quotelev1">&gt; One of the things you could do is look at total time to receive the 
</span><br>
<span class="quotelev1">&gt; message and total time spent in MPI_Test.  Then, vary TIMEOUT more 
</span><br>
<span class="quotelev1">&gt; smoothly (0.000001, 0.000002, 0.000005, 0.00001, 0.00002, 0.00005, 
</span><br>
<span class="quotelev1">&gt; 0.0001, 0.0002, 0.0005, 0.001, 0.002, 0.005, 0.01, 0.02).  You may 
</span><br>
<span class="quotelev1">&gt; also have to run many times to see how reproducible the results are.  
</span><br>
<span class="quotelev1">&gt; As TIMEOUT increases, the total time to get the message will roughly 
</span><br>
<span class="quotelev1">&gt; increase, but not by much until TIMEOUT gets pretty large.  The total 
</span><br>
<span class="quotelev1">&gt; time spent in MPI_Test should fall as TIMEOUT increases.  So, the idea 
</span><br>
<span class="quotelev1">&gt; is that by increasing TIMEOUT, you decrease the responsiveness of the 
</span><br>
<span class="quotelev1">&gt; receiver while you make more CPU time available for other tasks.  With 
</span><br>
<span class="quotelev1">&gt; any luck, there will be a broad range of TIMEOUT values that degrade 
</span><br>
<span class="quotelev1">&gt; responsiveness negligibly while freeing a meaningful amount of time up 
</span><br>
<span class="quotelev1">&gt; for other computational tasks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The performance of MPI_Test() -- and of a particular MPI_Test() call 
</span><br>
<span class="quotelev1">&gt; -- is probably not very meaningful.
</span><br>
I have run my toy example a lot of times on various systems with both 
<br>
OpenMPI and IBM MPI - I am always seeing the same behavior I have reported.
<br>
<p>The performance of MPI_Test() is critical when you are not using MPI to 
<br>
implement applications directly, but rather as transport layer for 
<br>
higher level runtime systems. In that case, you need the non-blocking 
<br>
MPI_Test() to avoid being stuck in MPI and do other things that your 
<br>
runtime has to do.
<br>
<p>Having an inconsistent overhead on MPI_Test() forces me to have a timer 
<br>
before it, to avoid seeing this performance degradation in cases where 
<br>
my runtime is out of things to do (but still cannot afford to block into 
<br>
MPI) so it hits MPI_Test() until something arrives from the MPI layer or 
<br>
the user gives something to the runtime something to do. A timer that 
<br>
should not exist in my opinion.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that your MPI_Irecv calls should strictly speaking have 
</span><br>
<span class="quotelev1">&gt; MPI_ANY_SOURCE rather than MPI_ANY_TAG.
</span><br>
<p>You're right. However, even with having exactly matching 
<br>
MPI_Isend/MPI_Irecv, the problem still exists.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14956.php">Jesse Ziser: "Re: [OMPI users] SIGPIPE handling?"</a>
<li><strong>Previous message:</strong> <a href="14954.php">Eugene Loh: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>In reply to:</strong> <a href="14954.php">Eugene Loh: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/15156.php">Jeff Squyres: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/15156.php">Jeff Squyres: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
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
