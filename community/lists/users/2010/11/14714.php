<?
$subject_val = "[OMPI users] Calling MPI_Test() too many times results in a time spike";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 10 00:29:22 2010" -->
<!-- isoreceived="20101110052922" -->
<!-- sent="Tue, 9 Nov 2010 23:29:16 -0600" -->
<!-- isosent="20101110052916" -->
<!-- name="Yiannis Papadopoulos" -->
<!-- email="giannis.papadopoulos_at_[hidden]" -->
<!-- subject="[OMPI users] Calling MPI_Test() too many times results in a time spike" -->
<!-- id="AANLkTi=qWQosC43NF4HOX=ymbs2Bd7BvbjEsx51ORFQE_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Calling MPI_Test() too many times results in a time spike<br>
<strong>From:</strong> Yiannis Papadopoulos (<em>giannis.papadopoulos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-10 00:29:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14715.php">tmishima_at_[hidden]: "[OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="14713.php">Jeff Squyres: "Re: [OMPI users] Creating 64-bit PPC objects with xlc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14744.php">Jeff Squyres: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>Reply:</strong> <a href="14744.php">Jeff Squyres: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am using OpenMPI 1.4.1. I have a small test case that calls
<br>
MPI_Test() too many times. I see one or two random time spikes when
<br>
this happens. On the other hand, if I avoid calling MPI_Test() based
<br>
on a timeout, this problem disappears.
<br>
<p>For example, with no timeout, the results I'm getting are:
<br>
Total time: 1.00008 secs
<br>
MPI_Test calls: 5541425
<br>
Average: 0.0000001234 secs
<br>
Max:     0.0002560616 secs [4374247]
<br>
Min:     0.0000000000 secs [1]
<br>
Successful MPI_Test(): 0.0000090599 secs
<br>
<p>With timeout of 0.0001secs (which means I just delay a bit calling MPI_Test()):
<br>
Total time: 1.00009 secs
<br>
MPI_Test calls: 9946
<br>
Average: 0.0000000018 secs
<br>
Max:     0.0000011921 secs [98]
<br>
Min:     0.0000000000 secs [1]
<br>
Successful MPI_Test(): 0.0000011921 secs
<br>
<p>With a timeout of 0.01secs:
<br>
Total time: 1.0001 secs
<br>
MPI_Test calls: 101
<br>
Average: 0.0000001936 secs
<br>
Max:     0.0000028610 secs [100]
<br>
Min:     0.0000000000 secs [2]
<br>
Success: 0.0000028610 secs
<br>
<p><p>Things to notice:
<br>
1) the total time is similar
<br>
2) the number of MPI_Test() calls varies drastically
<br>
3) the average MPI_Test() call time is significantly less when a
<br>
timeout is introduced
<br>
4) the call that takes the most time is not the last one (the
<br>
successful) as one would expect except the case that the timeout is a
<br>
bit big (0.01secs).
<br>
5) the time of the slowest MPI_Test() call is 2 orders of magnitude
<br>
higher than the the successful MPI_Test() in the non-timeout version.
<br>
<p>Does this qualify as a bug?
<br>
<p>Thanks
<br>
<p><p>PS The code I have used follows. I compiled it with
<br>
<p>&nbsp;&nbsp;mpic++ -O3 mpi_test_delay.cc -o mpi_test_delay_no_timeout
<br>
<p>for no timeout and
<br>
<p>&nbsp;&nbsp;mpic++ -O3 -DTIMEOUT=0.01 mpi_test_delay.cc -o mpi_test_delay
<br>
<p>for a timeout of 0.01secs.
<br>
<p>// mpi_test_delay.cc
<br>
#include &lt;iostream&gt;
<br>
#include &lt;iomanip&gt;
<br>
#include &lt;mpi.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
#include &lt;vector&gt;
<br>
#include &lt;algorithm&gt;
<br>
#include &lt;numeric&gt;
<br>
<p>int main(int argc, char* argv[])
<br>
{
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;MPI_Comm comm = MPI_COMM_WORLD;
<br>
&nbsp;&nbsp;int rank = MPI_PROC_NULL;
<br>
&nbsp;&nbsp;int size = MPI_PROC_NULL;
<br>
&nbsp;&nbsp;MPI_Comm_rank(comm, &amp;rank);
<br>
&nbsp;&nbsp;MPI_Comm_size(comm, &amp;size);
<br>
<p>&nbsp;&nbsp;if (size&lt;2) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Abort(comm, -1);
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;const std::size_t bufsize = 1024;
<br>
&nbsp;&nbsp;char buffer[bufsize];
<br>
<p>&nbsp;&nbsp;// warm-up
<br>
&nbsp;&nbsp;unsigned int N = 0;
<br>
&nbsp;&nbsp;if (rank==0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(buffer, bufsize, MPI_BYTE, 1, 0, comm);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request req;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(buffer, bufsize, MPI_BYTE, MPI_ANY_TAG, 0, comm, &amp;req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (int flag = 0; flag==0; ++N) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Test(&amp;req, &amp;flag, MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;// measurement container
<br>
&nbsp;&nbsp;std::vector&lt;double&gt; time_res;
<br>
&nbsp;&nbsp;time_res.reserve(N * 1.1);
<br>
<p>&nbsp;&nbsp;MPI_Barrier(comm);
<br>
<p>&nbsp;&nbsp;// benchmark MPI_Test
<br>
&nbsp;&nbsp;double total_time = MPI_Wtime();
<br>
<p>&nbsp;&nbsp;if (rank==0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(buffer, bufsize, MPI_BYTE, 1, 0, comm);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;else if (rank==1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request req;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(buffer, bufsize, MPI_BYTE, MPI_ANY_TAG, 0, comm, &amp;req);
<br>
<p>#ifdef TIMEOUT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;double timeout = 0.0;
<br>
#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (int flag = 0; flag==0; ) {
<br>
#ifdef TIMEOUT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double ntimeout = MPI_Wtime();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( (ntimeout-timeout)&lt;TIMEOUT) continue;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;timeout = ntimeout;
<br>
#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double time = MPI_Wtime();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Test(&amp;req, &amp;flag, MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;time = MPI_Wtime() - time;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;time_res.push_back(time);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;total_time = MPI_Wtime() - total_time;
<br>
<p>&nbsp;&nbsp;MPI_Barrier(comm);
<br>
<p>&nbsp;&nbsp;// print total time for execution, number of MPI_Test calls,
<br>
&nbsp;&nbsp;// average, max and min time for MPI_Test and how much was the final
<br>
&nbsp;&nbsp;// MPI_Test
<br>
&nbsp;&nbsp;if (rank==1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;double average = std::accumulate(time_res.begin(), time_res.end(),
<br>
0.0)/time_res.size();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;std::vector&lt;double&gt;::iterator max =
<br>
std::max_element(time_res.begin(), time_res.end());
<br>
&nbsp;&nbsp;&nbsp;&nbsp;std::vector&lt;double&gt;::iterator min =
<br>
std::min_element(time_res.begin(), time_res.end());
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; &quot;Total time: &quot; &lt;&lt; total_time &lt;&lt; &quot; secs\n&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt; &quot;MPI_Test calls: &quot; &lt;&lt; time_res.size() &lt;&lt; '\n'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt; std::fixed &lt;&lt; std::setprecision(10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt; &quot;Average: &quot; &lt;&lt; average &lt;&lt; &quot; secs\n&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt; &quot;Max:     &quot; &lt;&lt; *max &lt;&lt; &quot; secs [&quot; &lt;&lt;
<br>
std::distance(time_res.begin(), max) &lt;&lt; &quot;]\n&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt; &quot;Min:     &quot; &lt;&lt; *min &lt;&lt; &quot; secs [&quot; &lt;&lt;
<br>
std::distance(time_res.begin(), min) &lt;&lt; &quot;]\n&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt; &quot;Success: &quot; &lt;&lt; time_res[time_res.size()-1] &lt;&lt; &quot; secs&quot;
<br>
&lt;&lt; std::endl;
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;return 0;
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14715.php">tmishima_at_[hidden]: "[OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="14713.php">Jeff Squyres: "Re: [OMPI users] Creating 64-bit PPC objects with xlc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14744.php">Jeff Squyres: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>Reply:</strong> <a href="14744.php">Jeff Squyres: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
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
