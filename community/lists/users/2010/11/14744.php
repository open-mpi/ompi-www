<?
$subject_val = "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 12 12:00:10 2010" -->
<!-- isoreceived="20101112170010" -->
<!-- sent="Fri, 12 Nov 2010 12:00:04 -0500" -->
<!-- isosent="20101112170004" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Calling MPI_Test() too many times results in a time spike" -->
<!-- id="BADB2F11-C59B-43EE-860A-585DB0E7C54C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=qWQosC43NF4HOX=ymbs2Bd7BvbjEsx51ORFQE_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-12 12:00:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14745.php">Jeff Squyres: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="14743.php">Jeff Squyres: "Re: [OMPI users] Deprecated parameter: plm_rsh_agent"</a>
<li><strong>In reply to:</strong> <a href="14714.php">Yiannis Papadopoulos: "[OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14749.php">Yiannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>Reply:</strong> <a href="14749.php">Yiannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What kind of network did you do these tests on?
<br>
<p>Were both processes on the same machine or different machines?
<br>
<p><p>On Nov 10, 2010, at 12:29 AM, Yiannis Papadopoulos wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI 1.4.1. I have a small test case that calls
</span><br>
<span class="quotelev1">&gt; MPI_Test() too many times. I see one or two random time spikes when
</span><br>
<span class="quotelev1">&gt; this happens. On the other hand, if I avoid calling MPI_Test() based
</span><br>
<span class="quotelev1">&gt; on a timeout, this problem disappears.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example, with no timeout, the results I'm getting are:
</span><br>
<span class="quotelev1">&gt; Total time: 1.00008 secs
</span><br>
<span class="quotelev1">&gt; MPI_Test calls: 5541425
</span><br>
<span class="quotelev1">&gt; Average: 0.0000001234 secs
</span><br>
<span class="quotelev1">&gt; Max:     0.0002560616 secs [4374247]
</span><br>
<span class="quotelev1">&gt; Min:     0.0000000000 secs [1]
</span><br>
<span class="quotelev1">&gt; Successful MPI_Test(): 0.0000090599 secs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With timeout of 0.0001secs (which means I just delay a bit calling MPI_Test()):
</span><br>
<span class="quotelev1">&gt; Total time: 1.00009 secs
</span><br>
<span class="quotelev1">&gt; MPI_Test calls: 9946
</span><br>
<span class="quotelev1">&gt; Average: 0.0000000018 secs
</span><br>
<span class="quotelev1">&gt; Max:     0.0000011921 secs [98]
</span><br>
<span class="quotelev1">&gt; Min:     0.0000000000 secs [1]
</span><br>
<span class="quotelev1">&gt; Successful MPI_Test(): 0.0000011921 secs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With a timeout of 0.01secs:
</span><br>
<span class="quotelev1">&gt; Total time: 1.0001 secs
</span><br>
<span class="quotelev1">&gt; MPI_Test calls: 101
</span><br>
<span class="quotelev1">&gt; Average: 0.0000001936 secs
</span><br>
<span class="quotelev1">&gt; Max:     0.0000028610 secs [100]
</span><br>
<span class="quotelev1">&gt; Min:     0.0000000000 secs [2]
</span><br>
<span class="quotelev1">&gt; Success: 0.0000028610 secs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Things to notice:
</span><br>
<span class="quotelev1">&gt; 1) the total time is similar
</span><br>
<span class="quotelev1">&gt; 2) the number of MPI_Test() calls varies drastically
</span><br>
<span class="quotelev1">&gt; 3) the average MPI_Test() call time is significantly less when a
</span><br>
<span class="quotelev1">&gt; timeout is introduced
</span><br>
<span class="quotelev1">&gt; 4) the call that takes the most time is not the last one (the
</span><br>
<span class="quotelev1">&gt; successful) as one would expect except the case that the timeout is a
</span><br>
<span class="quotelev1">&gt; bit big (0.01secs).
</span><br>
<span class="quotelev1">&gt; 5) the time of the slowest MPI_Test() call is 2 orders of magnitude
</span><br>
<span class="quotelev1">&gt; higher than the the successful MPI_Test() in the non-timeout version.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does this qualify as a bug?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS The code I have used follows. I compiled it with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  mpic++ -O3 mpi_test_delay.cc -o mpi_test_delay_no_timeout
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for no timeout and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  mpic++ -O3 -DTIMEOUT=0.01 mpi_test_delay.cc -o mpi_test_delay
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for a timeout of 0.01secs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; // mpi_test_delay.cc
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;iomanip&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;vector&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;algorithm&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;numeric&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Comm comm = MPI_COMM_WORLD;
</span><br>
<span class="quotelev1">&gt;  int rank = MPI_PROC_NULL;
</span><br>
<span class="quotelev1">&gt;  int size = MPI_PROC_NULL;
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(comm, &amp;rank);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size(comm, &amp;size);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  if (size&lt;2) {
</span><br>
<span class="quotelev1">&gt;    MPI_Abort(comm, -1);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  const std::size_t bufsize = 1024;
</span><br>
<span class="quotelev1">&gt;  char buffer[bufsize];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  // warm-up
</span><br>
<span class="quotelev1">&gt;  unsigned int N = 0;
</span><br>
<span class="quotelev1">&gt;  if (rank==0) {
</span><br>
<span class="quotelev1">&gt;    sleep(1);
</span><br>
<span class="quotelev1">&gt;    MPI_Send(buffer, bufsize, MPI_BYTE, 1, 0, comm);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  else {
</span><br>
<span class="quotelev1">&gt;    MPI_Request req;
</span><br>
<span class="quotelev1">&gt;    MPI_Irecv(buffer, bufsize, MPI_BYTE, MPI_ANY_TAG, 0, comm, &amp;req);
</span><br>
<span class="quotelev1">&gt;    for (int flag = 0; flag==0; ++N) {
</span><br>
<span class="quotelev1">&gt;      MPI_Test(&amp;req, &amp;flag, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  // measurement container
</span><br>
<span class="quotelev1">&gt;  std::vector&lt;double&gt; time_res;
</span><br>
<span class="quotelev1">&gt;  time_res.reserve(N * 1.1);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Barrier(comm);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  // benchmark MPI_Test
</span><br>
<span class="quotelev1">&gt;  double total_time = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  if (rank==0) {
</span><br>
<span class="quotelev1">&gt;    sleep(1);
</span><br>
<span class="quotelev1">&gt;    MPI_Send(buffer, bufsize, MPI_BYTE, 1, 0, comm);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  else if (rank==1) {
</span><br>
<span class="quotelev1">&gt;    MPI_Request req;
</span><br>
<span class="quotelev1">&gt;    MPI_Irecv(buffer, bufsize, MPI_BYTE, MPI_ANY_TAG, 0, comm, &amp;req);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #ifdef TIMEOUT
</span><br>
<span class="quotelev1">&gt;    double timeout = 0.0;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;    for (int flag = 0; flag==0; ) {
</span><br>
<span class="quotelev1">&gt; #ifdef TIMEOUT
</span><br>
<span class="quotelev1">&gt;      double ntimeout = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt;      if ( (ntimeout-timeout)&lt;TIMEOUT) continue;
</span><br>
<span class="quotelev1">&gt;      timeout = ntimeout;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;      double time = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt;      MPI_Test(&amp;req, &amp;flag, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;      time = MPI_Wtime() - time;
</span><br>
<span class="quotelev1">&gt;      time_res.push_back(time);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  total_time = MPI_Wtime() - total_time;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Barrier(comm);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  // print total time for execution, number of MPI_Test calls,
</span><br>
<span class="quotelev1">&gt;  // average, max and min time for MPI_Test and how much was the final
</span><br>
<span class="quotelev1">&gt;  // MPI_Test
</span><br>
<span class="quotelev1">&gt;  if (rank==1) {
</span><br>
<span class="quotelev1">&gt;    double average = std::accumulate(time_res.begin(), time_res.end(),
</span><br>
<span class="quotelev1">&gt; 0.0)/time_res.size();
</span><br>
<span class="quotelev1">&gt;    std::vector&lt;double&gt;::iterator max =
</span><br>
<span class="quotelev1">&gt; std::max_element(time_res.begin(), time_res.end());
</span><br>
<span class="quotelev1">&gt;    std::vector&lt;double&gt;::iterator min =
</span><br>
<span class="quotelev1">&gt; std::min_element(time_res.begin(), time_res.end());
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    std::cout &lt;&lt; &quot;Total time: &quot; &lt;&lt; total_time &lt;&lt; &quot; secs\n&quot;
</span><br>
<span class="quotelev1">&gt;              &lt;&lt; &quot;MPI_Test calls: &quot; &lt;&lt; time_res.size() &lt;&lt; '\n'
</span><br>
<span class="quotelev1">&gt;              &lt;&lt; std::fixed &lt;&lt; std::setprecision(10)
</span><br>
<span class="quotelev1">&gt;              &lt;&lt; &quot;Average: &quot; &lt;&lt; average &lt;&lt; &quot; secs\n&quot;
</span><br>
<span class="quotelev1">&gt;              &lt;&lt; &quot;Max:     &quot; &lt;&lt; *max &lt;&lt; &quot; secs [&quot; &lt;&lt;
</span><br>
<span class="quotelev1">&gt; std::distance(time_res.begin(), max) &lt;&lt; &quot;]\n&quot;
</span><br>
<span class="quotelev1">&gt;              &lt;&lt; &quot;Min:     &quot; &lt;&lt; *min &lt;&lt; &quot; secs [&quot; &lt;&lt;
</span><br>
<span class="quotelev1">&gt; std::distance(time_res.begin(), min) &lt;&lt; &quot;]\n&quot;
</span><br>
<span class="quotelev1">&gt;              &lt;&lt; &quot;Success: &quot; &lt;&lt; time_res[time_res.size()-1] &lt;&lt; &quot; secs&quot;
</span><br>
<span class="quotelev1">&gt; &lt;&lt; std::endl;
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
<li><strong>Next message:</strong> <a href="14745.php">Jeff Squyres: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="14743.php">Jeff Squyres: "Re: [OMPI users] Deprecated parameter: plm_rsh_agent"</a>
<li><strong>In reply to:</strong> <a href="14714.php">Yiannis Papadopoulos: "[OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14749.php">Yiannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>Reply:</strong> <a href="14749.php">Yiannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
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
