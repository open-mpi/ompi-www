<?
$subject_val = "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 11:40:03 2010" -->
<!-- isoreceived="20101129164003" -->
<!-- sent="Mon, 29 Nov 2010 10:40:10 -0600" -->
<!-- isosent="20101129164010" -->
<!-- name="Ioannis Papadopoulos" -->
<!-- email="giannis.papadopoulos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Calling MPI_Test() too many times results in a time spike" -->
<!-- id="4CF3D76A.1020908_at_gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AANLkTi=F=61D_ehuBv-qMawyeec4r57AOkb0gtWRqf08_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-11-29 11:40:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14902.php">George Wm Turner: "Re: [OMPI users] MPI-IO Lustre driver update?"</a>
<li><strong>Previous message:</strong> <a href="14900.php">Mark Dixon: "Re: [OMPI users] MPI-IO Lustre driver update?"</a>
<li><strong>In reply to:</strong> <a href="14749.php">Yiannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14954.php">Eugene Loh: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>Reply:</strong> <a href="14954.php">Eugene Loh: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Has anyone observed similar behaviour? Is it something that I'll have to 
<br>
deal with it in my code or does it indeed qualify as an issue to be 
<br>
looked into?
<br>
<p>Thanks
<br>
<p>Yiannis Papadopoulos wrote:
<br>
<span class="quotelev1">&gt; It is a quad core machine (Intel Core2 Quad CPU Q9550 - 64bit).
</span><br>
<span class="quotelev1">&gt; OpenMPI is the one that comes with Fedora 13.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tested it on a cluster of Intel Xeon (32bit) with Gigabit Ethernet
</span><br>
<span class="quotelev1">&gt; with OpenMPI 1.3.3, the results are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; // with no timeout
</span><br>
<span class="quotelev1">&gt; Total time: 1.00309 secs
</span><br>
<span class="quotelev1">&gt; Estimated calls: 1116537
</span><br>
<span class="quotelev1">&gt; MPI_Test calls:  395488
</span><br>
<span class="quotelev1">&gt; Average: 0.0000018129 secs
</span><br>
<span class="quotelev1">&gt; Max:     0.0002990606 secs [91608]
</span><br>
<span class="quotelev1">&gt; Min:     0.0000008807 secs [694]
</span><br>
<span class="quotelev1">&gt; Successful MPI_Test(): 0.0000421085 secs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; // with timeout
</span><br>
<span class="quotelev1">&gt; Total time: 1.00342 secs
</span><br>
<span class="quotelev1">&gt; Estimated calls: 1140521
</span><br>
<span class="quotelev1">&gt; MPI_Test calls:  1004
</span><br>
<span class="quotelev1">&gt; Average: 0.0000018511 secs
</span><br>
<span class="quotelev1">&gt; Max:     0.0000100477 secs [1003]
</span><br>
<span class="quotelev1">&gt; Min:     0.0000008813 secs [729]
</span><br>
<span class="quotelev1">&gt; Successful MPI_Test(): 0.0000100477 secs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have seen similar behavior using IBM MPI on Power5+/AIX.
</span><br>
<span class="quotelev1">&gt; On Fri, Nov 12, 2010 at 11:00 AM, Jeff Squyres&lt;jsquyres_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev2">&gt;&gt; What kind of network did you do these tests on?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Were both processes on the same machine or different machines?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 10, 2010, at 12:29 AM, Yiannis Papadopoulos wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using OpenMPI 1.4.1. I have a small test case that calls
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Test() too many times. I see one or two random time spikes when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this happens. On the other hand, if I avoid calling MPI_Test() based
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on a timeout, this problem disappears.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For example, with no timeout, the results I'm getting are:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Total time: 1.00008 secs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Test calls: 5541425
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Average: 0.0000001234 secs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Max:     0.0002560616 secs [4374247]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Min:     0.0000000000 secs [1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Successful MPI_Test(): 0.0000090599 secs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With timeout of 0.0001secs (which means I just delay a bit calling MPI_Test()):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Total time: 1.00009 secs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Test calls: 9946
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Average: 0.0000000018 secs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Max:     0.0000011921 secs [98]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Min:     0.0000000000 secs [1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Successful MPI_Test(): 0.0000011921 secs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With a timeout of 0.01secs:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Total time: 1.0001 secs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Test calls: 101
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Average: 0.0000001936 secs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Max:     0.0000028610 secs [100]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Min:     0.0000000000 secs [2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Success: 0.0000028610 secs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Things to notice:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) the total time is similar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) the number of MPI_Test() calls varies drastically
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3) the average MPI_Test() call time is significantly less when a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; timeout is introduced
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4) the call that takes the most time is not the last one (the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; successful) as one would expect except the case that the timeout is a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bit big (0.01secs).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5) the time of the slowest MPI_Test() call is 2 orders of magnitude
</span><br>
<span class="quotelev3">&gt;&gt;&gt; higher than the the successful MPI_Test() in the non-timeout version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does this qualify as a bug?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PS The code I have used follows. I compiled it with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   mpic++ -O3 mpi_test_delay.cc -o mpi_test_delay_no_timeout
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for no timeout and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   mpic++ -O3 -DTIMEOUT=0.01 mpi_test_delay.cc -o mpi_test_delay
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for a timeout of 0.01secs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; // mpi_test_delay.cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;iostream&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;iomanip&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;unistd.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;vector&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;algorithm&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;numeric&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Comm comm = MPI_COMM_WORLD;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   int rank = MPI_PROC_NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   int size = MPI_PROC_NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Comm_rank(comm,&amp;rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Comm_size(comm,&amp;size);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   if (size&lt;2) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Abort(comm, -1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   const std::size_t bufsize = 1024;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   char buffer[bufsize];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   // warm-up
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   unsigned int N = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   if (rank==0) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     sleep(1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Send(buffer, bufsize, MPI_BYTE, 1, 0, comm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   else {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Request req;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Irecv(buffer, bufsize, MPI_BYTE, MPI_ANY_TAG, 0, comm,&amp;req);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     for (int flag = 0; flag==0; ++N) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       MPI_Test(&amp;req,&amp;flag, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   // measurement container
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   std::vector&lt;double&gt;  time_res;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   time_res.reserve(N * 1.1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Barrier(comm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   // benchmark MPI_Test
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   double total_time = MPI_Wtime();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   if (rank==0) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     sleep(1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Send(buffer, bufsize, MPI_BYTE, 1, 0, comm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   else if (rank==1) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Request req;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Irecv(buffer, bufsize, MPI_BYTE, MPI_ANY_TAG, 0, comm,&amp;req);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #ifdef TIMEOUT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     double timeout = 0.0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     for (int flag = 0; flag==0; ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #ifdef TIMEOUT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       double ntimeout = MPI_Wtime();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       if ( (ntimeout-timeout)&lt;TIMEOUT) continue;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       timeout = ntimeout;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       double time = MPI_Wtime();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       MPI_Test(&amp;req,&amp;flag, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       time = MPI_Wtime() - time;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       time_res.push_back(time);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   total_time = MPI_Wtime() - total_time;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Barrier(comm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   // print total time for execution, number of MPI_Test calls,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   // average, max and min time for MPI_Test and how much was the final
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   // MPI_Test
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   if (rank==1) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     double average = std::accumulate(time_res.begin(), time_res.end(),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0.0)/time_res.size();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     std::vector&lt;double&gt;::iterator max =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::max_element(time_res.begin(), time_res.end());
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     std::vector&lt;double&gt;::iterator min =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::min_element(time_res.begin(), time_res.end());
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     std::cout&lt;&lt;  &quot;Total time: &quot;&lt;&lt;  total_time&lt;&lt;  &quot; secs\n&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               &lt;&lt;  &quot;MPI_Test calls: &quot;&lt;&lt;  time_res.size()&lt;&lt;  '\n'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               &lt;&lt;  std::fixed&lt;&lt;  std::setprecision(10)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               &lt;&lt;  &quot;Average: &quot;&lt;&lt;  average&lt;&lt;  &quot; secs\n&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               &lt;&lt;  &quot;Max:     &quot;&lt;&lt;  *max&lt;&lt;  &quot; secs [&quot;&lt;&lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::distance(time_res.begin(), max)&lt;&lt;  &quot;]\n&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               &lt;&lt;  &quot;Min:     &quot;&lt;&lt;  *min&lt;&lt;  &quot; secs [&quot;&lt;&lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::distance(time_res.begin(), min)&lt;&lt;  &quot;]\n&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               &lt;&lt;  &quot;Success: &quot;&lt;&lt;  time_res[time_res.size()-1]&lt;&lt;  &quot; secs&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;&lt;  std::endl;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<p><p><pre>
-- 
Ioannis Papadopoulos                       Voice: +1 979 862 9214
Dept. of Computer Science and Engineering  Email: ipapadop_at_[hidden]
Texas A&amp;M University
3112 TAMU
College Station, TX 77843-3112
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14902.php">George Wm Turner: "Re: [OMPI users] MPI-IO Lustre driver update?"</a>
<li><strong>Previous message:</strong> <a href="14900.php">Mark Dixon: "Re: [OMPI users] MPI-IO Lustre driver update?"</a>
<li><strong>In reply to:</strong> <a href="14749.php">Yiannis Papadopoulos: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14954.php">Eugene Loh: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>Reply:</strong> <a href="14954.php">Eugene Loh: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
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
