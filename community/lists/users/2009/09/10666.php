<?
$subject_val = "Re: [OMPI users] Multi-threading  with OpenMPI ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 16 21:53:40 2009" -->
<!-- isoreceived="20090917015340" -->
<!-- sent="Wed, 16 Sep 2009 19:53:30 -0600" -->
<!-- isosent="20090917015330" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multi-threading  with OpenMPI ?" -->
<!-- id="35EBE57B-C557-4FAF-995C-B91AFE8CA7A8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4AB192E3.5070103_at_biggjapan.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-16 21:53:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10667.php">Joshua Hursey: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
<li><strong>Previous message:</strong> <a href="10665.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>In reply to:</strong> <a href="10665.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10670.php">Jeff Squyres: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Reply:</strong> <a href="10670.php">Jeff Squyres: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Only the obvious, and not very helpful one: comm_spawn isn't thread  
<br>
safe at this time. You'll need to serialize your requests to that  
<br>
function.
<br>
<p>I believe the thread safety constraints within OMPI are discussed to  
<br>
some extent on the FAQ site. At the least, they have been discussed in  
<br>
some depth on this mailing list several times. Might be some further  
<br>
nuggets of advice on workarounds in there.
<br>
<p><p>On Sep 16, 2009, at 7:37 PM, Ashika Umanga Umagiliya wrote:
<br>
<p><span class="quotelev1">&gt; Any tips ? Anyone ? :(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashika Umanga Umagiliya wrote:
</span><br>
<span class="quotelev2">&gt;&gt; One more modification , I do not call MPI_Finalize() from the  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;libParallel.so&quot; library.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ashika Umanga Umagiliya wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greetings all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After some reading , I found out that I have to build openMPI  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using &quot;--enable-mpi-threads&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After thatm I changed MPI_INIT() code in my &quot;libParallel.so&quot; and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in &quot;parallel-svr&quot; (please refer to <a href="http://i27.tinypic.com/">http://i27.tinypic.com/</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtqurp.jpg ) to :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int sup;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Init_thread(NULL,NULL,MPI_THREAD_MULTIPLE,&amp;sup);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now when multiple requests comes (multiple threads) MPI gives  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following two errors:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;&lt;stddiag rank=&quot;0&quot;&gt;[umanga:06127] [[8004,1],0] ORTE_ERROR_LOG:  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data unpack would read past end of buffer in file dpm_orte.c at  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line 299&lt;/stddiag&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [umanga:6127] *** An error occurred in MPI_Comm_spawn
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [umanga:6127] *** on communicator MPI_COMM_SELF
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [umanga:6127] *** MPI_ERR_UNKNOWN: unknown error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [umanga:6127] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [umanga:06126] [[8004,0],0]-[[8004,1],0] mca_oob_tcp_msg_recv:  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun has exited due to process rank 0 with PID 6127 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node umanga exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or  sometimes :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;[umanga:5477] *** An error occurred in MPI_Comm_spawn
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [umanga:5477] *** on communicator MPI_COMM_SELF
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [umanga:5477] *** MPI_ERR_UNKNOWN: unknown error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [umanga:5477] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;stddiag rank=&quot;0&quot;&gt;[umanga:05477] [[7630,1],0] ORTE_ERROR_LOG: Data  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unpack would read past end of buffer in file dpm_orte.c at line  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 299&lt;/stddiag&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun has exited due to process rank 0 with PID 5477 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node umanga exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any tips ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ashika Umanga Umagiliya wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Greetings all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please refer to image at:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://i27.tinypic.com/mtqurp.jpg">http://i27.tinypic.com/mtqurp.jpg</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here the process illustrated in the image:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1) C++ Webservice loads the &quot;libParallel.so&quot; when it starts up.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (dlopen)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2) When a new request comes from a client,*new thread* is  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; created,  SOAP data is bound to C++ objects and calcRisk() method  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of webservice invoked.Inside this method, &quot;calcRisk()&quot; of  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;libParallel&quot; is invoked (using dlsym ..etc)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3) Inside &quot;calcRisk()&quot; of &quot;libParallel&quot; ,it spawns &quot;parallel-svr&quot;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI application.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (I am using boost MPI and boost serializarion to send custom-data- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; types across spawned processes.)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4) &quot;parallel-svr&quot; (MPI Application in image) execute the parallel  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; logic and send the result back to &quot;libParallel.so&quot; using boost  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI send..etc.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 5) &quot;libParallel.so&quot; send the result to webservice,bind into SOAP  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and sent result to client and the thread ends.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My problem is :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Everthing works fine for the first request from the client,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For the second request it throws an error (i assume from  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libParallel.so&quot;) saying:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;--------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Calling any MPI-function after calling MPI_Finalize is erroneous.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The only exceptions are MPI_Initialized, MPI_Finalized and  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Get_version.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** after MPI was finalized
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [umanga:19390] Abort after MPI_FINALIZE completed successfully;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not able to guarantee that all other processes were killed!&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is this because of multithreading ? Any idea how to fix this ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; umanga
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="10667.php">Joshua Hursey: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
<li><strong>Previous message:</strong> <a href="10665.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>In reply to:</strong> <a href="10665.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10670.php">Jeff Squyres: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Reply:</strong> <a href="10670.php">Jeff Squyres: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
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
