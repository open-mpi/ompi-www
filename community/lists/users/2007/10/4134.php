<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct  2 14:20:40 2007" -->
<!-- isoreceived="20071002182040" -->
<!-- sent="Tue, 02 Oct 2007 20:20:02 +0200" -->
<!-- isosent="20071002182002" -->
<!-- name="Marcin Skoczylas" -->
<!-- email="Marcin.Skoczylas_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how this is possible?" -->
<!-- id="47028BD2.2070603_at_lnl.infn.it" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47028A7D.3030100_at_lnl.infn.it" -->
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
<strong>From:</strong> Marcin Skoczylas (<em>Marcin.Skoczylas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-02 14:20:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4135.php">Chris Johnson: "[OMPI users] MPI_Gatherv on One Process"</a>
<li><strong>Previous message:</strong> <a href="4133.php">Marcin Skoczylas: "[OMPI users] how this is possible?"</a>
<li><strong>In reply to:</strong> <a href="4133.php">Marcin Skoczylas: "[OMPI users] how this is possible?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4136.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI users] how this is possible?"</a>
<li><strong>Reply:</strong> <a href="4136.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI users] how this is possible?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry I forgot to mention: Open MPI version 1.2.4
<br>
<p><p>Marcin Skoczylas wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After whole day of coding I'm fighting little bit with one small 
</span><br>
<span class="quotelev1">&gt; fragment which seems strange for me.
</span><br>
<span class="quotelev1">&gt; For testing I have one head node and two worker nodes on localhost. 
</span><br>
<span class="quotelev1">&gt; Having this code (with debug stuff added like sleeps, barriers, etc):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; void CImageData::SpreadToNodes()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     sleep(5);
</span><br>
<span class="quotelev1">&gt;     logger-&gt;debug(&quot;CImageData::SpreadToNodes, w=%d h=%d type=%d&quot;,
</span><br>
<span class="quotelev1">&gt;                     this-&gt;width, this-&gt;height, this-&gt;type);
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;     logger-&gt;debug(&quot;head barrier&quot;);
</span><br>
<span class="quotelev1">&gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;     sleep(2);
</span><br>
<span class="quotelev1">&gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;     // debug 'sync' test
</span><br>
<span class="quotelev1">&gt;     logger-&gt;debug(&quot;head send SYNC str&quot;);
</span><br>
<span class="quotelev1">&gt;     char buf[5];
</span><br>
<span class="quotelev1">&gt;     buf[0] = 'S'; buf[1] = 'Y'; buf[2] = 'N'; buf[3] = 'C';
</span><br>
<span class="quotelev1">&gt;     for (int nodeId = 1; nodeId &lt; g_NumProcesses; nodeId++)
</span><br>
<span class="quotelev1">&gt;     {   
</span><br>
<span class="quotelev1">&gt;         MPI_Send(buf, 4, MPI_CHAR, nodeId, DEF_MSG_TAG, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;     logger-&gt;debug(&quot;head bcast width: %d&quot;, this-&gt;width);
</span><br>
<span class="quotelev1">&gt;     MPI_Bcast(&amp;(this-&gt;width), 1, MPI_INT, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;     logger-&gt;debug(&quot;head bcast height: %d&quot;, this-&gt;height);
</span><br>
<span class="quotelev1">&gt;     MPI_Bcast(&amp;(this-&gt;height), 1, MPI_INT, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;     logger-&gt;debug(&quot;head bcast type: %d&quot;, this-&gt;type);
</span><br>
<span class="quotelev1">&gt;     MPI_Bcast(&amp;(this-&gt;type), 1, MPI_UNSIGNED_CHAR, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;     logger-&gt;debug(&quot;head sleep 10s&quot;);
</span><br>
<span class="quotelev1">&gt;     sleep(10);
</span><br>
<span class="quotelev1">&gt;        
</span><br>
<span class="quotelev1">&gt;     logger-&gt;debug(&quot;finished CImageData::SpreadToNodes&quot;);   
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; // this function is decleared static:
</span><br>
<span class="quotelev1">&gt; CImageData *CImageData::ReceiveFromHead()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     sleep(5);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     logger-&gt;debug(&quot;CImageData::ReceiveFromHead&quot;);
</span><br>
<span class="quotelev1">&gt;     MPI_Status status;
</span><br>
<span class="quotelev1">&gt;     int _width;
</span><br>
<span class="quotelev1">&gt;     int _height;
</span><br>
<span class="quotelev1">&gt;     byte _type;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;     logger-&gt;debug(&quot;worker barrier&quot;);
</span><br>
<span class="quotelev1">&gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;     sleep(2);
</span><br>
<span class="quotelev1">&gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     char buf[5];
</span><br>
<span class="quotelev1">&gt;     MPI_Recv(buf, 4, MPI_CHAR, HEAD_NODE, DEF_MSG_TAG, MPI_COMM_WORLD, 
</span><br>
<span class="quotelev1">&gt; &amp;status);
</span><br>
<span class="quotelev1">&gt;     logger-&gt;debug(&quot;worker received sync str: '%c' '%c' '%c' '%c'&quot;, 
</span><br>
<span class="quotelev1">&gt; buf[0], buf[1], buf[2], buf[3]);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     logger-&gt;debug(&quot;worker bcast width&quot;);
</span><br>
<span class="quotelev1">&gt;     MPI_Bcast(&amp;(_width), 1, MPI_INT, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;     logger-&gt;debug(&quot;worker bcast height&quot;);
</span><br>
<span class="quotelev1">&gt;     MPI_Bcast(&amp;(_height), 1, MPI_INT, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;     logger-&gt;debug(&quot;worker bcast type&quot;);
</span><br>
<span class="quotelev1">&gt;     MPI_Bcast(&amp;(_type), 1, MPI_UNSIGNED_CHAR, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;     logger-&gt;debug(&quot;width=%d height=%d type=%d&quot;, _width, _height, _type);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     // TODO: create CImageData object, return...
</span><br>
<span class="quotelev1">&gt;     return NULL;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That part of code gives me an error:
</span><br>
<span class="quotelev1">&gt; RANK 0 -&gt; PID 17115
</span><br>
<span class="quotelev1">&gt; RANK 1 -&gt; PID 17116
</span><br>
<span class="quotelev1">&gt; RANK 2 -&gt; PID 17117
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2007-10-02 19:50:37,829 [17115] DEBUG: CImageData::SpreadToNodes, w=768 
</span><br>
<span class="quotelev1">&gt; h=576 type=1
</span><br>
<span class="quotelev1">&gt; 2007-10-02 19:50:37,829 [17117] DEBUG: CImageData::ReceiveFromHead
</span><br>
<span class="quotelev1">&gt; 2007-10-02 19:50:37,829 [17115] DEBUG: head barrier
</span><br>
<span class="quotelev1">&gt; 2007-10-02 19:50:37,829 [17116] DEBUG: CImageData::ReceiveFromHead
</span><br>
<span class="quotelev1">&gt; 2007-10-02 19:50:37,829 [17116] DEBUG: worker barrier
</span><br>
<span class="quotelev1">&gt; 2007-10-02 19:50:37,829 [17117] DEBUG: worker barrier
</span><br>
<span class="quotelev1">&gt; 2007-10-02 19:50:39,836 [17115] DEBUG: head send SYNC str
</span><br>
<span class="quotelev1">&gt; 2007-10-02 19:50:39,836 [17115] DEBUG: head bcast width: 768
</span><br>
<span class="quotelev1">&gt; 2007-10-02 19:50:39,836 [17115] DEBUG: head bcast height: 576
</span><br>
<span class="quotelev1">&gt; 2007-10-02 19:50:39,836 [17115] DEBUG: head bcast type: 1
</span><br>
<span class="quotelev1">&gt; 2007-10-02 19:50:39,836 [17115] DEBUG: head sleep 10s
</span><br>
<span class="quotelev1">&gt; 2007-10-02 19:50:39,836 [17116] DEBUG: worker received sync str: 'S' 'Y' 
</span><br>
<span class="quotelev1">&gt; 'N' 'C'
</span><br>
<span class="quotelev1">&gt; 2007-10-02 19:50:39,836 [17116] DEBUG: worker bcast width
</span><br>
<span class="quotelev1">&gt; [pc801:17116] *** An error occurred in MPI_Bcast
</span><br>
<span class="quotelev1">&gt; [pc801:17116] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [pc801:17116] *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev1">&gt; [pc801:17116] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; 2007-10-02 19:50:39,836 [17117] DEBUG: worker received sync str: 'S' 'Y' 
</span><br>
<span class="quotelev1">&gt; 'N' 'C'
</span><br>
<span class="quotelev1">&gt; 2007-10-02 19:50:39,836 [17117] DEBUG: worker bcast width
</span><br>
<span class="quotelev1">&gt; [pc801:17117] *** An error occurred in MPI_Bcast
</span><br>
<span class="quotelev1">&gt; [pc801:17117] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [pc801:17117] *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev1">&gt; [pc801:17117] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 17115 on node pc801 exited on 
</span><br>
<span class="quotelev1">&gt; signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could it be that somewhere before this part the data stream was out of 
</span><br>
<span class="quotelev1">&gt; sync? The project is quite large and I have a lot of communication 
</span><br>
<span class="quotelev1">&gt; between processes before CImageData::SpreadToNodes() so whole debugging 
</span><br>
<span class="quotelev1">&gt; could take hours/days, however it seems that data flow before this 
</span><br>
<span class="quotelev1">&gt; particular fragment is ok. How could it be that MPI_Send/Recv gave me 
</span><br>
<span class="quotelev1">&gt; good buffer (4 chars - SYNC) and MPI_Bcast of MPI_INT is truncated? I 
</span><br>
<span class="quotelev1">&gt; tested the code on Valgrind - it didn't complain and gave me exactly the 
</span><br>
<span class="quotelev1">&gt; same result. Can I assume that possibly I have somewhere memory-acces 
</span><br>
<span class="quotelev1">&gt; error before this part and I destroyed the MPI structures? How exactly 
</span><br>
<span class="quotelev1">&gt; MPI_Bcast is working?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for disturb, but I'm little bit confused.
</span><br>
<span class="quotelev1">&gt; Thank you &amp; greetings, Marcin
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
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4135.php">Chris Johnson: "[OMPI users] MPI_Gatherv on One Process"</a>
<li><strong>Previous message:</strong> <a href="4133.php">Marcin Skoczylas: "[OMPI users] how this is possible?"</a>
<li><strong>In reply to:</strong> <a href="4133.php">Marcin Skoczylas: "[OMPI users] how this is possible?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4136.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI users] how this is possible?"</a>
<li><strong>Reply:</strong> <a href="4136.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI users] how this is possible?"</a>
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
