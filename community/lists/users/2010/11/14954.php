<?
$subject_val = "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 30 12:23:42 2010" -->
<!-- isoreceived="20101130172342" -->
<!-- sent="Tue, 30 Nov 2010 09:23:30 -0800" -->
<!-- isosent="20101130172330" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Calling MPI_Test() too many times results in a time spike" -->
<!-- id="4CF53312.10408_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CF3D76A.1020908_at_gmail.com" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-30 12:23:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14955.php">Ioannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>Previous message:</strong> <a href="14953.php">Bill Rankin: "Re: [OMPI users] MPI_Comm_split"</a>
<li><strong>In reply to:</strong> <a href="14901.php">Ioannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14955.php">Ioannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>Reply:</strong> <a href="14955.php">Ioannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ioannis Papadopoulos wrote:
<br>
<p><span class="quotelev1">&gt; Has anyone observed similar behaviour? Is it something that I'll have 
</span><br>
<span class="quotelev1">&gt; to deal with it in my code or does it indeed qualify as an issue to be 
</span><br>
<span class="quotelev1">&gt; looked into?
</span><br>
<p>I would say this is NOT an issue that merits much attention.  There are 
<br>
too many potential performance anomalies that you might be encountering 
<br>
and they aren't worth &quot;fixing&quot; (or even understanding) unless they 
<br>
impact your application's performance in a meaningful way.
<br>
<p>E.g., try timing &quot;nothing&quot;.  Here is a sample test program:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>#define N 1000000
<br>
<p>int main(int argc, char **argv) {
<br>
&nbsp;&nbsp;int i;
<br>
&nbsp;&nbsp;double t[N], tavg = 0, tmin = 1.e20, tmax = 0;
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;for ( i = 0; i &lt; N; i++ ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;t[i] = MPI_Wtime();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;t[i] = MPI_Wtime() - t[i];
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;for ( i = 0; i &lt; N; i++ ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;tavg += t[i];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if ( tmin &gt; t[i] ) tmin = t[i];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if ( tmax &lt; t[i] ) tmax = t[i];
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;tavg /= N;
<br>
<p>&nbsp;&nbsp;printf(&quot;avg %12.3lf\n&quot;, tavg * 1.e6);
<br>
&nbsp;&nbsp;printf(&quot;min %12.3lf\n&quot;, tmin * 1.e6);
<br>
&nbsp;&nbsp;printf(&quot;max %12.3lf\n&quot;, tmax * 1.e6);
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>I find that the minimum is 0 (indicating non-infinitesimal granularity 
<br>
of the timer), the average is small (some overhead of the timer call), 
<br>
and the maximum is very large.  Why?  Because something will happen now 
<br>
and then.  What it is doesn't matter unless your application's 
<br>
performance is suffering.
<br>
<p>You report that the overall time is about the same.  That is, it takes 
<br>
just over a second to receive the message, which is expected if the 
<br>
sender delays a second before sending.
<br>
<p>One of the things you could do is look at total time to receive the 
<br>
message and total time spent in MPI_Test.  Then, vary TIMEOUT more 
<br>
smoothly (0.000001, 0.000002, 0.000005, 0.00001, 0.00002, 0.00005, 
<br>
0.0001, 0.0002, 0.0005, 0.001, 0.002, 0.005, 0.01, 0.02).  You may also 
<br>
have to run many times to see how reproducible the results are.  As 
<br>
TIMEOUT increases, the total time to get the message will roughly 
<br>
increase, but not by much until TIMEOUT gets pretty large.  The total 
<br>
time spent in MPI_Test should fall as TIMEOUT increases.  So, the idea 
<br>
is that by increasing TIMEOUT, you decrease the responsiveness of the 
<br>
receiver while you make more CPU time available for other tasks.  With 
<br>
any luck, there will be a broad range of TIMEOUT values that degrade 
<br>
responsiveness negligibly while freeing a meaningful amount of time up 
<br>
for other computational tasks.
<br>
<p>The performance of MPI_Test() -- and of a particular MPI_Test() call -- 
<br>
is probably not very meaningful.
<br>
<p>Note that your MPI_Irecv calls should strictly speaking have 
<br>
MPI_ANY_SOURCE rather than MPI_ANY_TAG.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14955.php">Ioannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>Previous message:</strong> <a href="14953.php">Bill Rankin: "Re: [OMPI users] MPI_Comm_split"</a>
<li><strong>In reply to:</strong> <a href="14901.php">Ioannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14955.php">Ioannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>Reply:</strong> <a href="14955.php">Ioannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
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
