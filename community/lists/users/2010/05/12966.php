<?
$subject_val = "Re: [OMPI users] MPIError:MPI_Recv: MPI_ERR_TRUNCATE:";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  7 09:50:05 2010" -->
<!-- isoreceived="20100507135005" -->
<!-- sent="Fri, 7 May 2010 09:49:58 -0400" -->
<!-- isosent="20100507134958" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPIError:MPI_Recv: MPI_ERR_TRUNCATE:" -->
<!-- id="AA9A5E5F-0A39-4AC2-BD2B-719EB298560C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D409E2A3-F60E-4D9F-8F98-6434B0941766_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPIError:MPI_Recv: MPI_ERR_TRUNCATE:<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-07 09:49:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12967.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalemstandalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12965.php">Richard Treumann: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>In reply to:</strong> <a href="12871.php">Pooja Varshneya: "[OMPI users] MPIError:MPI_Recv: MPI_ERR_TRUNCATE:"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid I don't know enough about Boost to know.
<br>
<p>What the specific error message means is that you have posted an MPI_Recv that was too small to handle an incoming message.  It is permissible in MPI to post a receive that is *larger* than the corresponding incoming message, but it is defined as an error to post a receive with a buffer that is too small.
<br>
<p><p>On May 3, 2010, at 6:18 PM, Pooja Varshneya wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have written a program where MPI master sends and receives large 
</span><br>
<span class="quotelev1">&gt; amount of data i.e sending from 1KB to 1MB of data.
</span><br>
<span class="quotelev1">&gt; The amount of data to be sent with each call is different
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The program runs well when running with 5 slaves, but when i try to 
</span><br>
<span class="quotelev1">&gt; run the same program with 9 slaves, it gives me 
</span><br>
<span class="quotelev1">&gt; MPI_Recv:MPI_ERR_TRUNCATE: message truncated error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using boost MPI and boost serialization libraries for sending data.
</span><br>
<span class="quotelev1">&gt; I understand that the internal buffer on the master are overrun in 
</span><br>
<span class="quotelev1">&gt; this case. Is there a way i can increase the buffer sizes ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the output:
</span><br>
<span class="quotelev1">&gt; -bash-3.2$ mpirun -np 9 --hostfile hostfile2 --rankfile rankfile2 
</span><br>
<span class="quotelev1">&gt; $BENCHMARKS_ROOT/bin/boost_binomial_LB 10 5000_steps.txt 
</span><br>
<span class="quotelev1">&gt; 5000_homo_bytes.txt
</span><br>
<span class="quotelev1">&gt; Master: Starting Binomial Option Price calculations for American call 
</span><br>
<span class="quotelev1">&gt; option
</span><br>
<span class="quotelev1">&gt; Master: Current stock price: 110
</span><br>
<span class="quotelev1">&gt; Master: Strike price: 100
</span><br>
<span class="quotelev1">&gt; Master: Risk-free rate: 1.05
</span><br>
<span class="quotelev1">&gt; Master: Volatility (annualized): 0.15
</span><br>
<span class="quotelev1">&gt; Master: Time (years): 1
</span><br>
<span class="quotelev1">&gt; Master: Number of calculations: 10
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Slave 1:Going to Received Skeleton: 1
</span><br>
<span class="quotelev1">&gt; Slave 1:Received Skeleton: 1
</span><br>
<span class="quotelev1">&gt; Slave 1:Gpoing to Received Payload: 1
</span><br>
<span class="quotelev1">&gt; Slave 1:Received Payload: 1
</span><br>
<span class="quotelev1">&gt; Master: Sent initial message
</span><br>
<span class="quotelev1">&gt; Master: Sent initial message
</span><br>
<span class="quotelev1">&gt; Master: Sent initial message
</span><br>
<span class="quotelev1">&gt; Slave 2:Going to Received Skeleton: 2
</span><br>
<span class="quotelev1">&gt; Slave 2:Received Skeleton: 2
</span><br>
<span class="quotelev1">&gt; Slave 2:Gpoing to Received Payload: 2
</span><br>
<span class="quotelev1">&gt; Slave 2:Received Payload: 2
</span><br>
<span class="quotelev1">&gt; Slave 3:Going to Received Skeleton: 3
</span><br>
<span class="quotelev1">&gt; Slave 3:Received Skeleton: 3
</span><br>
<span class="quotelev1">&gt; Slave 3:Gpoing to Received Payload: 3
</span><br>
<span class="quotelev1">&gt; Slave 3:Received Payload: 3
</span><br>
<span class="quotelev1">&gt; Slave 4:Going to Received Skeleton: 4
</span><br>
<span class="quotelev1">&gt; Slave 4:Received Skeleton: 4
</span><br>
<span class="quotelev1">&gt; Slave 4:Gpoing to Received Payload: 4
</span><br>
<span class="quotelev1">&gt; Slave 1: Sent Response Skeleton: 1
</span><br>
<span class="quotelev1">&gt; Master: Sent initial message
</span><br>
<span class="quotelev1">&gt; Slave 4:Received Payload: 4
</span><br>
<span class="quotelev1">&gt; Slave 5:Going to Received Skeleton: 5
</span><br>
<span class="quotelev1">&gt; terminate called after throwing an instance of 
</span><br>
<span class="quotelev1">&gt; 'boost
</span><br>
<span class="quotelev1">&gt; ::exception_detail
</span><br>
<span class="quotelev1">&gt; ::clone_impl
</span><br>
<span class="quotelev1">&gt; &lt;boost::exception_detail::error_info_injector&lt;boost::mpi::exception&gt; &gt;'
</span><br>
<span class="quotelev1">&gt;    what():  MPI_Recv: MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev1">&gt; [rh5x64-u12:26987] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [rh5x64-u12:26987] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [rh5x64-u12:26987] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [rh5x64-u12:26987] [ 0] /lib64/libpthread.so.0 [0x3ba680e7c0]
</span><br>
<span class="quotelev1">&gt; [rh5x64-u12:26987] [ 1] /lib64/libc.so.6(gsignal+0x35) [0x3ba5c30265]
</span><br>
<span class="quotelev1">&gt; [rh5x64-u12:26987] [ 2] /lib64/libc.so.6(abort+0x110) [0x3ba5c31d10]
</span><br>
<span class="quotelev1">&gt; [rh5x64-u12:26987] [ 3] /usr/lib64/libstdc++.so.
</span><br>
<span class="quotelev1">&gt; 6(_ZN9__gnu_cxx27__verbose_terminate_handlerEv+0x114) [0x3bb7abec44]
</span><br>
<span class="quotelev1">&gt; [rh5x64-u12:26987] [ 4] /usr/lib64/libstdc++.so.6 [0x3bb7abcdb6]
</span><br>
<span class="quotelev1">&gt; [rh5x64-u12:26987] [ 5] /usr/lib64/libstdc++.so.6 [0x3bb7abcde3]
</span><br>
<span class="quotelev1">&gt; [rh5x64-u12:26987] [ 6] /usr/lib64/libstdc++.so.6 [0x3bb7abceca]
</span><br>
<span class="quotelev1">&gt; [rh5x64-u12:26987] [ 7] /userdata/testing/benchmark_binaries/bin/
</span><br>
<span class="quotelev1">&gt; boost_binomial_LB(_ZN5boost15throw_exceptionINS_3mpi9exceptionEEEvRKT_
</span><br>
<span class="quotelev1">&gt; +0x172) [0x4216a2]
</span><br>
<span class="quotelev1">&gt; [rh5x64-u12:26987] [ 8] /usr/local/lib/libboost_mpi.so.
</span><br>
<span class="quotelev1">&gt; 1.42.0
</span><br>
<span class="quotelev1">&gt; (_ZN5boost3mpi6detail19packed_archive_recvEP19ompi_communicator_tiiRNS0_15packed_iarchiveER20ompi_status_public_t
</span><br>
<span class="quotelev1">&gt; +0x16b) [0x2b0317faa6b3]
</span><br>
<span class="quotelev1">&gt; [rh5x64-u12:26987] [ 9] /usr/local/lib/libboost_mpi.so.
</span><br>
<span class="quotelev1">&gt; 1.42.0
</span><br>
<span class="quotelev1">&gt; (_ZNK5boost3mpi12communicator4recvINS0_15packed_iarchiveEEENS0_6statusEiiRT_
</span><br>
<span class="quotelev1">&gt; +0x40) [0x2b0317f9c72a]
</span><br>
<span class="quotelev1">&gt; [rh5x64-u12:26987] [10] /usr/local/lib/libboost_mpi.so.
</span><br>
<span class="quotelev1">&gt; 1.42.0
</span><br>
<span class="quotelev1">&gt; (_ZNK5boost3mpi12communicator4recvINS0_24packed_skeleton_iarchiveEEENS0_6statusEiiRT_
</span><br>
<span class="quotelev1">&gt; +0x38) [0x2b0317f9c76c]
</span><br>
<span class="quotelev1">&gt; [rh5x64-u12:26987] [11] /userdata/testing/benchmark_binaries/bin/
</span><br>
<span class="quotelev1">&gt; boost_binomial_LB
</span><br>
<span class="quotelev1">&gt; (_ZNK5boost3mpi12communicator4recvI31Binomial_Option_Pricing_RequestEENS0_6statusEiiRKNS0_14skeleton_proxyIT_EE
</span><br>
<span class="quotelev1">&gt; +0x121) [0x4258c1]
</span><br>
<span class="quotelev1">&gt; [rh5x64-u12:26987] [12] /userdata/testing/benchmark_binaries/bin/
</span><br>
<span class="quotelev1">&gt; boost_binomial_LB(main+0x409) [0x41d369]
</span><br>
<span class="quotelev1">&gt; [rh5x64-u12:26987] [13] /lib64/libc.so.6(__libc_start_main+0xf4) 
</span><br>
<span class="quotelev1">&gt; [0x3ba5c1d994]
</span><br>
<span class="quotelev1">&gt; [rh5x64-u12:26987] [14] /userdata/testing/benchmark_binaries/bin/
</span><br>
<span class="quotelev1">&gt; boost_binomial_LB(__gxx_personality_v0+0x399) [0x419e69]
</span><br>
<span class="quotelev1">&gt; [rh5x64-u12:26987] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [rh5x64-u11.zlab.local][[47840,1],0][btl_tcp_frag.c:
</span><br>
<span class="quotelev1">&gt; 216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: 
</span><br>
<span class="quotelev1">&gt; Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 5 with PID 26987 on node 172.10.0.112 
</span><br>
<span class="quotelev1">&gt; exited on signal 6 (Aborted).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the program code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;cstdlib&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;ctime&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;algorithm&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;numeric&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;functional&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;iomanip&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;cstdlib&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;cmath&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;limits&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;vector&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sstream&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;fstream&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;streambuf&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/mpi/environment.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/mpi/communicator.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/mpi/collectives.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/thread/barrier.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/thread/mutex.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/config.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/serialization/access.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/serialization/string.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/mpi/skeleton_and_content.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/mpi/datatype.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/archive/tmpdir.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/serialization/utility.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/serialization/base_object.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/mpi.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/tokenizer.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/archive/tmpdir.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/archive/binary_oarchive.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/serialization/export.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/serialization/base_object.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/serialization/utility.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/serialization/vector.hpp&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &quot;ace/OS_NS_sys_time.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;ace/OS_NS_time.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;ace/Profile_Timer.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; using namespace MPI;
</span><br>
<span class="quotelev1">&gt; using std::scientific;
</span><br>
<span class="quotelev1">&gt; using namespace std;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; namespace mpi = boost::mpi;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define STOPTAG 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; std::ofstream output_file;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static void master (int &amp; n_calls,
</span><br>
<span class="quotelev1">&gt;                                         std::string &amp;step_file_name,
</span><br>
<span class="quotelev1">&gt;                                         std::string &amp;byte_file_name,
</span><br>
<span class="quotelev1">&gt;                                         mpi::communicator &amp;world);
</span><br>
<span class="quotelev1">&gt; static void slave (mpi::communicator &amp;world);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; struct Binomial_Option_Pricing_Request
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;         double cur_stock_price;
</span><br>
<span class="quotelev1">&gt;         double strike_price;
</span><br>
<span class="quotelev1">&gt;         double risk_free_rate;
</span><br>
<span class="quotelev1">&gt;         double volatility;
</span><br>
<span class="quotelev1">&gt;         double t;
</span><br>
<span class="quotelev1">&gt;         int n_steps;
</span><br>
<span class="quotelev1">&gt;         double option_price;
</span><br>
<span class="quotelev1">&gt;         std::vector&lt;char&gt; payload;
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; namespace boost
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;         namespace serialization
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;                 template&lt;class Archive&gt;
</span><br>
<span class="quotelev1">&gt;                         void serialize (Archive &amp;ar,
</span><br>
<span class="quotelev1">&gt;                                                   struct Binomial_Option_Pricing_Request &amp;bopr,
</span><br>
<span class="quotelev1">&gt;                                                   unsigned int version)
</span><br>
<span class="quotelev1">&gt;                         {
</span><br>
<span class="quotelev1">&gt;                                 ar &amp; bopr.cur_stock_price;
</span><br>
<span class="quotelev1">&gt;                                 ar &amp; bopr.strike_price;
</span><br>
<span class="quotelev1">&gt;                                 ar &amp; bopr.risk_free_rate;
</span><br>
<span class="quotelev1">&gt;                                 ar &amp; bopr.volatility;
</span><br>
<span class="quotelev1">&gt;                                 ar &amp; bopr.t;
</span><br>
<span class="quotelev1">&gt;                                 ar &amp; bopr.n_steps;
</span><br>
<span class="quotelev1">&gt;                                 ar &amp; bopr.option_price;
</span><br>
<span class="quotelev1">&gt;                                 ar &amp; bopr.payload;
</span><br>
<span class="quotelev1">&gt;                         }
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BOOST_IS_MPI_DATATYPE (Binomial_Option_Pricing_Request);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; main (int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;         mpi::environment env (argc, argv);
</span><br>
<span class="quotelev1">&gt;         mpi::communicator world;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         std::string step_file_name;
</span><br>
<span class="quotelev1">&gt;         int n_calls;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         read_input (argv[1], &amp;n_calls);
</span><br>
<span class="quotelev1">&gt;         read_input (argv[2], &amp;step_file_name);
</span><br>
<span class="quotelev1">&gt;         std::string byte_file_name;
</span><br>
<span class="quotelev1">&gt;         read_input (argv[3], &amp;byte_file_name);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         if (world.rank () == 0)
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;                 master (n_calls, step_file_name, byte_file_name, world);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         else
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;                 slave (world);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         MPI_Finalize ();
</span><br>
<span class="quotelev1">&gt;         return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static void
</span><br>
<span class="quotelev1">&gt; master (int &amp; n_calls,
</span><br>
<span class="quotelev1">&gt;                                 std::string &amp;step_file_name,
</span><br>
<span class="quotelev1">&gt;                                 std::string &amp;byte_file_name,
</span><br>
<span class="quotelev1">&gt;                                 mpi::communicator &amp;world)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;         int n_tasks = world.size ();
</span><br>
<span class="quotelev1">&gt;         int rank;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         const double cur_stock_price = 110.0;
</span><br>
<span class="quotelev1">&gt;         const double strike_price = 100.0;
</span><br>
<span class="quotelev1">&gt;         const double risk_free_rate = 1.05; // Risk-free interest rate
</span><br>
<span class="quotelev1">&gt;         const double volatility = 0.15; // Annualized volatility
</span><br>
<span class="quotelev1">&gt;         const double t = 1.0; // In years
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         int request_count = 0;
</span><br>
<span class="quotelev1">&gt;    int reply_count = 0;
</span><br>
<span class="quotelev1">&gt;         int vector_count = 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         std::vector&lt;Binomial_Option_Pricing_Request&gt; requests (n_calls);
</span><br>
<span class="quotelev1">&gt;         std::vector&lt;Binomial_Option_Pricing_Request&gt; replies(n_calls);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         for (std::vector&lt;Binomial_Option_Pricing_Request&gt;::iterator
</span><br>
<span class="quotelev1">&gt;                          it = requests.begin();
</span><br>
<span class="quotelev1">&gt;                          it != requests.end(); ++it)
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;                 Binomial_Option_Pricing_Request&amp; r(*it);
</span><br>
<span class="quotelev1">&gt;                 r.cur_stock_price = cur_stock_price;
</span><br>
<span class="quotelev1">&gt;                 r.strike_price = strike_price;
</span><br>
<span class="quotelev1">&gt;                 r.risk_free_rate = risk_free_rate;
</span><br>
<span class="quotelev1">&gt;                 r.volatility = volatility;
</span><br>
<span class="quotelev1">&gt;                 r.t = t;
</span><br>
<span class="quotelev1">&gt;                 r.n_steps = step_vector[vector_count];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 // resize vector for sending heterogenous payload
</span><br>
<span class="quotelev1">&gt;                 r.payload.resize (byte_vector[vector_count]);
</span><br>
<span class="quotelev1">&gt;                 // Initialize payload
</span><br>
<span class="quotelev1">&gt;                 std::for_each (r.payload.begin (),
</span><br>
<span class="quotelev1">&gt;                                                                          r.payload.end (),
</span><br>
<span class="quotelev1">&gt;                                                                          Initialize_Byte_Vector ());
</span><br>
<span class="quotelev1">&gt;                 ++vector_count;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         for (rank = 1; rank &lt; n_tasks; ++rank)
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;                 // send Binomial_Option_Pricing_Request skeleton
</span><br>
<span class="quotelev1">&gt;                 // resize vector for sending heterogenous payload
</span><br>
<span class="quotelev1">&gt;                 world.send (rank,
</span><br>
<span class="quotelev1">&gt;                                         request_count + 1,
</span><br>
<span class="quotelev1">&gt;                                         mpi::skeleton(requests[request_count]));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 // send Binomial_Option_Pricing_Request data
</span><br>
<span class="quotelev1">&gt;                 world.send (rank,
</span><br>
<span class="quotelev1">&gt;                                         request_count + 1,
</span><br>
<span class="quotelev1">&gt;                                         mpi::get_content(requests[request_count]));
</span><br>
<span class="quotelev1">&gt;                                        
</span><br>
<span class="quotelev1">&gt;                 std::cout &lt;&lt; &quot;Master: Sent initial message&quot; &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;                 requests[request_count].payload.resize(0);
</span><br>
<span class="quotelev1">&gt;                 ++request_count;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         while (request_count &lt; n_calls)
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 Binomial_Option_Pricing_Request bopr_reply_data;
</span><br>
<span class="quotelev1">&gt;                
</span><br>
<span class="quotelev1">&gt;                 mpi::status msg = world.probe ();
</span><br>
<span class="quotelev1">&gt;                
</span><br>
<span class="quotelev1">&gt;                 // Receive reply skeleton
</span><br>
<span class="quotelev1">&gt;                 world.recv (msg.source (), msg.tag (), mpi::skeleton 
</span><br>
<span class="quotelev1">&gt; (bopr_reply_data));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 std::cout &lt;&lt; &quot;Master: Received reply skeleton 
</span><br>
<span class="quotelev1">&gt; from:&quot;&lt;&lt;msg.source()&lt;&lt;&quot;for&quot;&lt;&lt;msg.tag ()&lt;&lt;std::endl;
</span><br>
<span class="quotelev1">&gt;                 // Receive reply
</span><br>
<span class="quotelev1">&gt;                 world.recv (msg.source (), msg.tag (), mpi::get_content 
</span><br>
<span class="quotelev1">&gt; (bopr_reply_data));
</span><br>
<span class="quotelev1">&gt;                
</span><br>
<span class="quotelev1">&gt;                 std::cout &lt;&lt; &quot;Master: Received reply from:&quot;&lt;&lt;msg.source()&lt;&lt;&quot;for &quot;&lt;&lt;
</span><br>
<span class="quotelev1">&gt;                         msg.tag() &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;                 bopr_reply_data.payload.resize (0);
</span><br>
<span class="quotelev1">&gt;                 replies.push_back (bopr_reply_data);
</span><br>
<span class="quotelev1">&gt;                 ++reply_count;
</span><br>
<span class="quotelev1">&gt;                
</span><br>
<span class="quotelev1">&gt;                 world.send (msg.source (),
</span><br>
<span class="quotelev1">&gt;                                                                 request_count + 1,
</span><br>
<span class="quotelev1">&gt;                                                                 mpi::skeleton(requests[request_count]));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 std::cout &lt;&lt; &quot;Master:Sent message skeleton 
</span><br>
<span class="quotelev1">&gt; to :&quot;&lt;&lt;msg.source()&lt;&lt;std::endl;
</span><br>
<span class="quotelev1">&gt;                 // send Binomial_Option_Pricing_Request data
</span><br>
<span class="quotelev1">&gt;                 world.send (msg.source (),
</span><br>
<span class="quotelev1">&gt;                                                                 request_count + 1,
</span><br>
<span class="quotelev1">&gt;                                                                 mpi::get_content(requests[request_count]));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 std::cout &lt;&lt; &quot;Master:Sent message to :&quot;&lt;&lt;msg.source()&lt;&lt;std::endl;
</span><br>
<span class="quotelev1">&gt;                 //requests[request_count].payload.resize(0);
</span><br>
<span class="quotelev1">&gt;                 ++request_count;
</span><br>
<span class="quotelev1">&gt;                 // store reply
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         while (reply_count &lt; n_calls)
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;                 std::cout &lt;&lt;&quot; Master Inside final loop&quot; &lt;&lt;std::endl;
</span><br>
<span class="quotelev1">&gt;                 Binomial_Option_Pricing_Request bopr_reply_data;
</span><br>
<span class="quotelev1">&gt;                
</span><br>
<span class="quotelev1">&gt;                 mpi::status msg = world.probe ();
</span><br>
<span class="quotelev1">&gt;                
</span><br>
<span class="quotelev1">&gt;                 // Receive reply skeleton
</span><br>
<span class="quotelev1">&gt;                 world.recv (msg.source (), msg.tag (), mpi::skeleton 
</span><br>
<span class="quotelev1">&gt; (bopr_reply_data));
</span><br>
<span class="quotelev1">&gt;                 // Receive reply
</span><br>
<span class="quotelev1">&gt;                 world.recv (msg.source (), msg.tag (), mpi::get_content 
</span><br>
<span class="quotelev1">&gt; (bopr_reply_data));
</span><br>
<span class="quotelev1">&gt;                 bopr_reply_data.payload.resize (0);
</span><br>
<span class="quotelev1">&gt;                 // store reply
</span><br>
<span class="quotelev1">&gt;                 replies.push_back (bopr_reply_data);
</span><br>
<span class="quotelev1">&gt;                 ++reply_count;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;        
</span><br>
<span class="quotelev1">&gt;         for (int rank = 1; rank &lt; n_tasks; ++rank)
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;                 Binomial_Option_Pricing_Request bopr_stop_data;
</span><br>
<span class="quotelev1">&gt;                 world.send (rank, STOPTAG, bopr_stop_data);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static void
</span><br>
<span class="quotelev1">&gt; slave (mpi::communicator &amp;world)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;         int my_rank = world.rank ();
</span><br>
<span class="quotelev1">&gt;         int count = 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         while (1)
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;                 Binomial_Option_Pricing_Request bopr_call_data;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 mpi::status msg = world.probe ();
</span><br>
<span class="quotelev1">&gt;                 if (msg.tag () == STOPTAG)
</span><br>
<span class="quotelev1">&gt;                 {
</span><br>
<span class="quotelev1">&gt;                         break;
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt;                 else
</span><br>
<span class="quotelev1">&gt;                 {
</span><br>
<span class="quotelev1">&gt;                         world.recv (0, msg.tag (), mpi::skeleton (bopr_call_data));
</span><br>
<span class="quotelev1">&gt;           std::cout &lt;&lt; &quot;Slave &quot; &lt;&lt; world.rank () &lt;&lt; &quot;:Received Skeleton: 
</span><br>
<span class="quotelev1">&gt; &quot;&lt;&lt;msg.tag() &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 world.recv (0, msg.tag (), mpi::get_content (bopr_call_data));
</span><br>
<span class="quotelev1">&gt;           std::cout &lt;&lt; &quot;Slave &quot; &lt;&lt; world.rank () &lt;&lt; &quot;:Received Payload: 
</span><br>
<span class="quotelev1">&gt; &quot;&lt;&lt;msg.tag() &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;                        
</span><br>
<span class="quotelev1">&gt; bopr_call_data.option_price =
</span><br>
<span class="quotelev1">&gt;                                 option_price_call_american_binomial (bopr_call_data.cur_stock_price,
</span><br>
<span class="quotelev1">&gt;                                                                                                          bopr_call_data.strike_price,
</span><br>
<span class="quotelev1">&gt;                                                                                                          bopr_call_data.risk_free_rate,
</span><br>
<span class="quotelev1">&gt;                                                                                                          bopr_call_data.volatility,
</span><br>
<span class="quotelev1">&gt;                                                                                                          bopr_call_data.t,
</span><br>
<span class="quotelev1">&gt;                                                                                                          bopr_call_data.n_steps);
</span><br>
<span class="quotelev1">&gt;                
</span><br>
<span class="quotelev1">&gt;                         world.isend (0, msg.tag (), mpi::skeleton (bopr_call_data));
</span><br>
<span class="quotelev1">&gt;           std::cout &lt;&lt; &quot;Slave &quot; &lt;&lt; world.rank () &lt;&lt; &quot;: Sent Response 
</span><br>
<span class="quotelev1">&gt; Skeleton: &quot;&lt;&lt;msg.tag() &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;                         world.isend (0, msg.tag (), mpi::get_content (bopr_call_data));
</span><br>
<span class="quotelev1">&gt;           std::cout &lt;&lt; &quot;Slave &quot; &lt;&lt; world.rank () &lt;&lt; &quot;: Sent Response Payload: 
</span><br>
<span class="quotelev1">&gt; &quot;&lt;&lt;msg.tag() &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;                         ++count;
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         std::cout &lt;&lt; &quot;Slave: &quot; &lt;&lt; my_rank &lt;&lt; &quot; : &quot;
</span><br>
<span class="quotelev1">&gt;                                                 &lt;&lt; &quot;Number of requests processed: &quot; &lt;&lt; count &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Pooja
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
<li><strong>Next message:</strong> <a href="12967.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalemstandalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12965.php">Richard Treumann: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>In reply to:</strong> <a href="12871.php">Pooja Varshneya: "[OMPI users] MPIError:MPI_Recv: MPI_ERR_TRUNCATE:"</a>
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
