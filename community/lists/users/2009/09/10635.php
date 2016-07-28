<?
$subject_val = "Re: [OMPI users] Multi-threading  with OpenMPI ?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 13 21:50:52 2009" -->
<!-- isoreceived="20090914015052" -->
<!-- sent="Mon, 14 Sep 2009 10:50:42 +0900" -->
<!-- isosent="20090914015042" -->
<!-- name="Ashika Umanga Umagiliya" -->
<!-- email="aumanga_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multi-threading  with OpenMPI ?" -->
<!-- id="4AADA172.6070504_at_biggjapan.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4AA9C808.3030201_at_biggjapan.com" -->
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
<strong>Date:</strong> 2009-09-13 21:50:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10636.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Previous message:</strong> <a href="10634.php">Ashika Umanga Umagiliya: "Re: [OMPI users] undefined symbol error when built as a sharedlibrary"</a>
<li><strong>In reply to:</strong> <a href="10611.php">Ashika Umanga Umagiliya: "[OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10636.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Reply:</strong> <a href="10636.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings all,
<br>
<p>After some reading , I found out that I have to build openMPI using 
<br>
&quot;--enable-mpi-threads&quot;
<br>
After thatm I changed MPI_INIT() code in my &quot;libParallel.so&quot; and in 
<br>
&quot;parallel-svr&quot; (please refer to <a href="http://i27.tinypic.com/mtqurp.jpg">http://i27.tinypic.com/mtqurp.jpg</a> ) to :
<br>
<p>&nbsp;&nbsp;int sup;
<br>
&nbsp;MPI_Init_thread(NULL,NULL,MPI_THREAD_MULTIPLE,&amp;sup);
<br>
<p>Now when multiple requests comes (multiple threads) MPI gives following 
<br>
two errors:
<br>
<p>&quot;&lt;stddiag rank=&quot;0&quot;&gt;[umanga:06127] [[8004,1],0] ORTE_ERROR_LOG: Data 
<br>
unpack would read past end of buffer in file dpm_orte.c at line 
<br>
299&lt;/stddiag&gt;
<br>
[umanga:6127] *** An error occurred in MPI_Comm_spawn
<br>
[umanga:6127] *** on communicator MPI_COMM_SELF
<br>
[umanga:6127] *** MPI_ERR_UNKNOWN: unknown error
<br>
[umanga:6127] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[umanga:06126] [[8004,0],0]-[[8004,1],0] mca_oob_tcp_msg_recv: readv 
<br>
failed: Connection reset by peer (104)
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 6127 on
<br>
node umanga exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
&quot;
<br>
<p>or  sometimes :
<br>
<p>&quot;[umanga:5477] *** An error occurred in MPI_Comm_spawn
<br>
[umanga:5477] *** on communicator MPI_COMM_SELF
<br>
[umanga:5477] *** MPI_ERR_UNKNOWN: unknown error
<br>
[umanga:5477] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
&lt;stddiag rank=&quot;0&quot;&gt;[umanga:05477] [[7630,1],0] ORTE_ERROR_LOG: Data 
<br>
unpack would read past end of buffer in file dpm_orte.c at line 
<br>
299&lt;/stddiag&gt;
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 5477 on
<br>
node umanga exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------&quot;
<br>
<p><p>Any tips ?
<br>
<p>Thank you
<br>
<p>Ashika Umanga Umagiliya wrote:
<br>
<span class="quotelev1">&gt; Greetings all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please refer to image at:
</span><br>
<span class="quotelev1">&gt; <a href="http://i27.tinypic.com/mtqurp.jpg">http://i27.tinypic.com/mtqurp.jpg</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here the process illustrated in the image:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) C++ Webservice loads the &quot;libParallel.so&quot; when it starts up. (dlopen)
</span><br>
<span class="quotelev1">&gt; 2) When a new request comes from a client,*new thread* is created,  
</span><br>
<span class="quotelev1">&gt; SOAP data is bound to C++ objects and calcRisk() method of webservice 
</span><br>
<span class="quotelev1">&gt; invoked.Inside this method, &quot;calcRisk()&quot; of &quot;libParallel&quot; is invoked 
</span><br>
<span class="quotelev1">&gt; (using dlsym ..etc)
</span><br>
<span class="quotelev1">&gt; 3) Inside &quot;calcRisk()&quot; of &quot;libParallel&quot; ,it spawns &quot;parallel-svr&quot; MPI 
</span><br>
<span class="quotelev1">&gt; application.
</span><br>
<span class="quotelev1">&gt; (I am using boost MPI and boost serializarion to send 
</span><br>
<span class="quotelev1">&gt; custom-data-types across spawned processes.)
</span><br>
<span class="quotelev1">&gt; 4) &quot;parallel-svr&quot; (MPI Application in image) execute the parallel 
</span><br>
<span class="quotelev1">&gt; logic and send the result back to &quot;libParallel.so&quot; using boost MPI 
</span><br>
<span class="quotelev1">&gt; send..etc.
</span><br>
<span class="quotelev1">&gt; 5) &quot;libParallel.so&quot; send the result to webservice,bind into SOAP and 
</span><br>
<span class="quotelev1">&gt; sent result to client and the thread ends.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My problem is :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Everthing works fine for the first request from the client,
</span><br>
<span class="quotelev1">&gt; For the second request it throws an error (i assume from 
</span><br>
<span class="quotelev1">&gt; libParallel.so&quot;) saying:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;-------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Calling any MPI-function after calling MPI_Finalize is erroneous.
</span><br>
<span class="quotelev1">&gt; The only exceptions are MPI_Initialized, MPI_Finalized and 
</span><br>
<span class="quotelev1">&gt; MPI_Get_version.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** after MPI was finalized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [umanga:19390] Abort after MPI_FINALIZE completed successfully; not 
</span><br>
<span class="quotelev1">&gt; able to guarantee that all other processes were killed!&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this because of multithreading ? Any idea how to fix this ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; umanga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10636.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Previous message:</strong> <a href="10634.php">Ashika Umanga Umagiliya: "Re: [OMPI users] undefined symbol error when built as a sharedlibrary"</a>
<li><strong>In reply to:</strong> <a href="10611.php">Ashika Umanga Umagiliya: "[OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10636.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Reply:</strong> <a href="10636.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
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
