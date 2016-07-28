<?
$subject_val = "Re: [OMPI users] Multi-threading  with OpenMPI ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 16 21:37:50 2009" -->
<!-- isoreceived="20090917013750" -->
<!-- sent="Thu, 17 Sep 2009 10:37:39 +0900" -->
<!-- isosent="20090917013739" -->
<!-- name="Ashika Umanga Umagiliya" -->
<!-- email="aumanga_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multi-threading  with OpenMPI ?" -->
<!-- id="4AB192E3.5070103_at_biggjapan.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4AADB064.609_at_biggjapan.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Multi-threading  with OpenMPI ?<br>
<strong>From:</strong> Ashika Umanga Umagiliya (<em>aumanga_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-16 21:37:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10666.php">Ralph Castain: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Previous message:</strong> <a href="10664.php">Andreas Haselbacher: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<li><strong>In reply to:</strong> <a href="10636.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10666.php">Ralph Castain: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Reply:</strong> <a href="10666.php">Ralph Castain: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Any tips ? Anyone ? :(
<br>
<p><p>Ashika Umanga Umagiliya wrote:
<br>
<span class="quotelev1">&gt; One more modification , I do not call MPI_Finalize() from the 
</span><br>
<span class="quotelev1">&gt; &quot;libParallel.so&quot; library.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashika Umanga Umagiliya wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Greetings all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After some reading , I found out that I have to build openMPI using 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;--enable-mpi-threads&quot;
</span><br>
<span class="quotelev2">&gt;&gt; After thatm I changed MPI_INIT() code in my &quot;libParallel.so&quot; and in 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;parallel-svr&quot; (please refer to <a href="http://i27.tinypic.com/mtqurp.jpg">http://i27.tinypic.com/mtqurp.jpg</a> ) to :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  int sup;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init_thread(NULL,NULL,MPI_THREAD_MULTIPLE,&amp;sup);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now when multiple requests comes (multiple threads) MPI gives 
</span><br>
<span class="quotelev2">&gt;&gt; following two errors:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;&lt;stddiag rank=&quot;0&quot;&gt;[umanga:06127] [[8004,1],0] ORTE_ERROR_LOG: Data 
</span><br>
<span class="quotelev2">&gt;&gt; unpack would read past end of buffer in file dpm_orte.c at line 
</span><br>
<span class="quotelev2">&gt;&gt; 299&lt;/stddiag&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [umanga:6127] *** An error occurred in MPI_Comm_spawn
</span><br>
<span class="quotelev2">&gt;&gt; [umanga:6127] *** on communicator MPI_COMM_SELF
</span><br>
<span class="quotelev2">&gt;&gt; [umanga:6127] *** MPI_ERR_UNKNOWN: unknown error
</span><br>
<span class="quotelev2">&gt;&gt; [umanga:6127] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; [umanga:06126] [[8004,0],0]-[[8004,1],0] mca_oob_tcp_msg_recv: readv 
</span><br>
<span class="quotelev2">&gt;&gt; failed: Connection reset by peer (104)
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun has exited due to process rank 0 with PID 6127 on
</span><br>
<span class="quotelev2">&gt;&gt; node umanga exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev2">&gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev2">&gt;&gt; &quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; or  sometimes :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;[umanga:5477] *** An error occurred in MPI_Comm_spawn
</span><br>
<span class="quotelev2">&gt;&gt; [umanga:5477] *** on communicator MPI_COMM_SELF
</span><br>
<span class="quotelev2">&gt;&gt; [umanga:5477] *** MPI_ERR_UNKNOWN: unknown error
</span><br>
<span class="quotelev2">&gt;&gt; [umanga:5477] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; &lt;stddiag rank=&quot;0&quot;&gt;[umanga:05477] [[7630,1],0] ORTE_ERROR_LOG: Data 
</span><br>
<span class="quotelev2">&gt;&gt; unpack would read past end of buffer in file dpm_orte.c at line 
</span><br>
<span class="quotelev2">&gt;&gt; 299&lt;/stddiag&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun has exited due to process rank 0 with PID 5477 on
</span><br>
<span class="quotelev2">&gt;&gt; node umanga exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev2">&gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------&quot; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any tips ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ashika Umanga Umagiliya wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greetings all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please refer to image at:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://i27.tinypic.com/mtqurp.jpg">http://i27.tinypic.com/mtqurp.jpg</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here the process illustrated in the image:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) C++ Webservice loads the &quot;libParallel.so&quot; when it starts up. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (dlopen)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) When a new request comes from a client,*new thread* is created,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SOAP data is bound to C++ objects and calcRisk() method of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; webservice invoked.Inside this method, &quot;calcRisk()&quot; of &quot;libParallel&quot; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is invoked (using dlsym ..etc)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3) Inside &quot;calcRisk()&quot; of &quot;libParallel&quot; ,it spawns &quot;parallel-svr&quot; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI application.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (I am using boost MPI and boost serializarion to send 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; custom-data-types across spawned processes.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4) &quot;parallel-svr&quot; (MPI Application in image) execute the parallel 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; logic and send the result back to &quot;libParallel.so&quot; using boost MPI 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; send..etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5) &quot;libParallel.so&quot; send the result to webservice,bind into SOAP and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sent result to client and the thread ends.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My problem is :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Everthing works fine for the first request from the client,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For the second request it throws an error (i assume from 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libParallel.so&quot;) saying:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;-------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Calling any MPI-function after calling MPI_Finalize is erroneous.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The only exceptions are MPI_Initialized, MPI_Finalized and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Get_version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** after MPI was finalized
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [umanga:19390] Abort after MPI_FINALIZE completed successfully; not 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; able to guarantee that all other processes were killed!&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this because of multithreading ? Any idea how to fix this ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; umanga
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10666.php">Ralph Castain: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Previous message:</strong> <a href="10664.php">Andreas Haselbacher: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<li><strong>In reply to:</strong> <a href="10636.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10666.php">Ralph Castain: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Reply:</strong> <a href="10666.php">Ralph Castain: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
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
