<?
$subject_val = "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 12 19:34:21 2010" -->
<!-- isoreceived="20101113003421" -->
<!-- sent="Fri, 12 Nov 2010 18:34:15 -0600" -->
<!-- isosent="20101113003415" -->
<!-- name="Yiannis Papadopoulos" -->
<!-- email="giannis.papadopoulos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Calling MPI_Test() too many times results in a time spike" -->
<!-- id="AANLkTi=F=61D_ehuBv-qMawyeec4r57AOkb0gtWRqf08_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="BADB2F11-C59B-43EE-860A-585DB0E7C54C_at_cisco.com" -->
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
<strong>From:</strong> Yiannis Papadopoulos (<em>giannis.papadopoulos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-12 19:34:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14750.php">tmishima_at_[hidden]: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="14748.php">George Bosilca: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>In reply to:</strong> <a href="14744.php">Jeff Squyres: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14901.php">Ioannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>Reply:</strong> <a href="14901.php">Ioannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It is a quad core machine (Intel Core2 Quad CPU Q9550 - 64bit).
<br>
OpenMPI is the one that comes with Fedora 13.
<br>
<p>I tested it on a cluster of Intel Xeon (32bit) with Gigabit Ethernet
<br>
with OpenMPI 1.3.3, the results are:
<br>
<p>// with no timeout
<br>
Total time: 1.00309 secs
<br>
Estimated calls: 1116537
<br>
MPI_Test calls:  395488
<br>
Average: 0.0000018129 secs
<br>
Max:     0.0002990606 secs [91608]
<br>
Min:     0.0000008807 secs [694]
<br>
Successful MPI_Test(): 0.0000421085 secs
<br>
<p>// with timeout
<br>
Total time: 1.00342 secs
<br>
Estimated calls: 1140521
<br>
MPI_Test calls:  1004
<br>
Average: 0.0000018511 secs
<br>
Max:     0.0000100477 secs [1003]
<br>
Min:     0.0000008813 secs [729]
<br>
Successful MPI_Test(): 0.0000100477 secs
<br>
<p>I have seen similar behavior using IBM MPI on Power5+/AIX.
<br>
On Fri, Nov 12, 2010 at 11:00 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; What kind of network did you do these tests on?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Were both processes on the same machine or different machines?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 10, 2010, at 12:29 AM, Yiannis Papadopoulos wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using OpenMPI 1.4.1. I have a small test case that calls
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Test() too many times. I see one or two random time spikes when
</span><br>
<span class="quotelev2">&gt;&gt; this happens. On the other hand, if I avoid calling MPI_Test() based
</span><br>
<span class="quotelev2">&gt;&gt; on a timeout, this problem disappears.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For example, with no timeout, the results I'm getting are:
</span><br>
<span class="quotelev2">&gt;&gt; Total time: 1.00008 secs
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Test calls: 5541425
</span><br>
<span class="quotelev2">&gt;&gt; Average: 0.0000001234 secs
</span><br>
<span class="quotelev2">&gt;&gt; Max: &#194;&#160; &#194;&#160; 0.0002560616 secs [4374247]
</span><br>
<span class="quotelev2">&gt;&gt; Min: &#194;&#160; &#194;&#160; 0.0000000000 secs [1]
</span><br>
<span class="quotelev2">&gt;&gt; Successful MPI_Test(): 0.0000090599 secs
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With timeout of 0.0001secs (which means I just delay a bit calling MPI_Test()):
</span><br>
<span class="quotelev2">&gt;&gt; Total time: 1.00009 secs
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Test calls: 9946
</span><br>
<span class="quotelev2">&gt;&gt; Average: 0.0000000018 secs
</span><br>
<span class="quotelev2">&gt;&gt; Max: &#194;&#160; &#194;&#160; 0.0000011921 secs [98]
</span><br>
<span class="quotelev2">&gt;&gt; Min: &#194;&#160; &#194;&#160; 0.0000000000 secs [1]
</span><br>
<span class="quotelev2">&gt;&gt; Successful MPI_Test(): 0.0000011921 secs
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With a timeout of 0.01secs:
</span><br>
<span class="quotelev2">&gt;&gt; Total time: 1.0001 secs
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Test calls: 101
</span><br>
<span class="quotelev2">&gt;&gt; Average: 0.0000001936 secs
</span><br>
<span class="quotelev2">&gt;&gt; Max: &#194;&#160; &#194;&#160; 0.0000028610 secs [100]
</span><br>
<span class="quotelev2">&gt;&gt; Min: &#194;&#160; &#194;&#160; 0.0000000000 secs [2]
</span><br>
<span class="quotelev2">&gt;&gt; Success: 0.0000028610 secs
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Things to notice:
</span><br>
<span class="quotelev2">&gt;&gt; 1) the total time is similar
</span><br>
<span class="quotelev2">&gt;&gt; 2) the number of MPI_Test() calls varies drastically
</span><br>
<span class="quotelev2">&gt;&gt; 3) the average MPI_Test() call time is significantly less when a
</span><br>
<span class="quotelev2">&gt;&gt; timeout is introduced
</span><br>
<span class="quotelev2">&gt;&gt; 4) the call that takes the most time is not the last one (the
</span><br>
<span class="quotelev2">&gt;&gt; successful) as one would expect except the case that the timeout is a
</span><br>
<span class="quotelev2">&gt;&gt; bit big (0.01secs).
</span><br>
<span class="quotelev2">&gt;&gt; 5) the time of the slowest MPI_Test() call is 2 orders of magnitude
</span><br>
<span class="quotelev2">&gt;&gt; higher than the the successful MPI_Test() in the non-timeout version.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does this qualify as a bug?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PS The code I have used follows. I compiled it with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;mpic++ -O3 mpi_test_delay.cc -o mpi_test_delay_no_timeout
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; for no timeout and
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;mpic++ -O3 -DTIMEOUT=0.01 mpi_test_delay.cc -o mpi_test_delay
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; for a timeout of 0.01secs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; // mpi_test_delay.cc
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;iomanip&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;vector&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;algorithm&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;numeric&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;MPI_Comm comm = MPI_COMM_WORLD;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;int rank = MPI_PROC_NULL;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;int size = MPI_PROC_NULL;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;MPI_Comm_rank(comm, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;MPI_Comm_size(comm, &amp;size);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;if (size&lt;2) {
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;MPI_Abort(comm, -1);
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;const std::size_t bufsize = 1024;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;char buffer[bufsize];
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;// warm-up
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;unsigned int N = 0;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;if (rank==0) {
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;sleep(1);
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;MPI_Send(buffer, bufsize, MPI_BYTE, 1, 0, comm);
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;}
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;else {
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;MPI_Request req;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;MPI_Irecv(buffer, bufsize, MPI_BYTE, MPI_ANY_TAG, 0, comm, &amp;req);
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;for (int flag = 0; flag==0; ++N) {
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160;MPI_Test(&amp;req, &amp;flag, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;}
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;// measurement container
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;std::vector&lt;double&gt; time_res;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;time_res.reserve(N * 1.1);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;MPI_Barrier(comm);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;// benchmark MPI_Test
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;double total_time = MPI_Wtime();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;if (rank==0) {
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;sleep(1);
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;MPI_Send(buffer, bufsize, MPI_BYTE, 1, 0, comm);
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;}
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;else if (rank==1) {
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;MPI_Request req;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;MPI_Irecv(buffer, bufsize, MPI_BYTE, MPI_ANY_TAG, 0, comm, &amp;req);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #ifdef TIMEOUT
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;double timeout = 0.0;
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;for (int flag = 0; flag==0; ) {
</span><br>
<span class="quotelev2">&gt;&gt; #ifdef TIMEOUT
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160;double ntimeout = MPI_Wtime();
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160;if ( (ntimeout-timeout)&lt;TIMEOUT) continue;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160;timeout = ntimeout;
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160;double time = MPI_Wtime();
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160;MPI_Test(&amp;req, &amp;flag, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160;time = MPI_Wtime() - time;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160;time_res.push_back(time);
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;}
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;}
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;total_time = MPI_Wtime() - total_time;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;MPI_Barrier(comm);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;// print total time for execution, number of MPI_Test calls,
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;// average, max and min time for MPI_Test and how much was the final
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;// MPI_Test
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;if (rank==1) {
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;double average = std::accumulate(time_res.begin(), time_res.end(),
</span><br>
<span class="quotelev2">&gt;&gt; 0.0)/time_res.size();
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;std::vector&lt;double&gt;::iterator max =
</span><br>
<span class="quotelev2">&gt;&gt; std::max_element(time_res.begin(), time_res.end());
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;std::vector&lt;double&gt;::iterator min =
</span><br>
<span class="quotelev2">&gt;&gt; std::min_element(time_res.begin(), time_res.end());
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;std::cout &lt;&lt; &quot;Total time: &quot; &lt;&lt; total_time &lt;&lt; &quot; secs\n&quot;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&lt;&lt; &quot;MPI_Test calls: &quot; &lt;&lt; time_res.size() &lt;&lt; '\n'
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&lt;&lt; std::fixed &lt;&lt; std::setprecision(10)
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&lt;&lt; &quot;Average: &quot; &lt;&lt; average &lt;&lt; &quot; secs\n&quot;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&lt;&lt; &quot;Max: &#194;&#160; &#194;&#160; &quot; &lt;&lt; *max &lt;&lt; &quot; secs [&quot; &lt;&lt;
</span><br>
<span class="quotelev2">&gt;&gt; std::distance(time_res.begin(), max) &lt;&lt; &quot;]\n&quot;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&lt;&lt; &quot;Min: &#194;&#160; &#194;&#160; &quot; &lt;&lt; *min &lt;&lt; &quot; secs [&quot; &lt;&lt;
</span><br>
<span class="quotelev2">&gt;&gt; std::distance(time_res.begin(), min) &lt;&lt; &quot;]\n&quot;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&lt;&lt; &quot;Success: &quot; &lt;&lt; time_res[time_res.size()-1] &lt;&lt; &quot; secs&quot;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;&lt; std::endl;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14750.php">tmishima_at_[hidden]: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="14748.php">George Bosilca: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>In reply to:</strong> <a href="14744.php">Jeff Squyres: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14901.php">Ioannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>Reply:</strong> <a href="14901.php">Ioannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
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
