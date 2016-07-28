<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct  3 05:43:13 2007" -->
<!-- isoreceived="20071003094313" -->
<!-- sent="Wed, 03 Oct 2007 11:42:37 +0200" -->
<!-- isosent="20071003094237" -->
<!-- name="Marcin Skoczylas" -->
<!-- email="Marcin.Skoczylas_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how this is possible?" -->
<!-- id="4703640D.3040205_at_lnl.infn.it" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4702A006.2060709_at_Sun.COM" -->
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
<strong>Date:</strong> 2007-10-03 05:42:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4139.php">Amit Kumar Saha: "Re: [OMPI users] Tool communication"</a>
<li><strong>Previous message:</strong> <a href="4137.php">Amit Kumar Saha: "Re: [OMPI users] problem with 'orted'"</a>
<li><strong>In reply to:</strong> <a href="4136.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI users] how this is possible?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you very much for detailed explanation! I was affraid that 
<br>
previous mismatch in MPI_Bcast could be the problem, I hoped that whole 
<br>
data stream goes in the main tag so I can catch problems easily just by 
<br>
sending synced data. I assume that Bcast is performed that way to speed 
<br>
up the communication. So I postponed one module where I always thought I 
<br>
have some mismatched things (however it works) and now broadcasting of 
<br>
the image data is correct. I have wrappers everywhere anyway, so to 
<br>
catch the bug there I'll just have to look at all MPI_Bcasts or exchange 
<br>
them temporary to MPI_Send/Recv to keep the flow synced. Thanks again!
<br>
<p>Rolf.Vandevaart_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My guess is you must have a mismatched MPI_Bcast somewhere
</span><br>
<span class="quotelev1">&gt; in the code.  Presumably, there is a call to MPI_Bcast on the head
</span><br>
<span class="quotelev1">&gt; node that broadcasts something larger than 1 MPI_INT and does not
</span><br>
<span class="quotelev1">&gt; have the matching call on the worker nodes.  Then, when the MPI_Bcast
</span><br>
<span class="quotelev1">&gt; on the worker nodes is called, they are matching up with the previous
</span><br>
<span class="quotelev1">&gt; call on the head node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since the head node is the root of the MPI_Bcast, then it can
</span><br>
<span class="quotelev1">&gt; blast its data to the other nodes and then continue on.  I have
</span><br>
<span class="quotelev1">&gt; attached a simple program that shows the same behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And yes, the Send and Recv can work independently from the
</span><br>
<span class="quotelev1">&gt; Broadcast as they are using different tags to match up their data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: Simple program at end of message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Marcin Skoczylas wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry I forgot to mention: Open MPI version 1.2.4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Marcin Skoczylas wrote:
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After whole day of coding I'm fighting little bit with one small 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fragment which seems strange for me.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For testing I have one head node and two worker nodes on localhost. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Having this code (with debug stuff added like sleeps, barriers, etc):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; void CImageData::SpreadToNodes()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    sleep(5);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    logger-&gt;debug(&quot;CImageData::SpreadToNodes, w=%d h=%d type=%d&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    this-&gt;width, this-&gt;height, this-&gt;type);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      logger-&gt;debug(&quot;head barrier&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    sleep(2);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      // debug 'sync' test
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    logger-&gt;debug(&quot;head send SYNC str&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    char buf[5];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    buf[0] = 'S'; buf[1] = 'Y'; buf[2] = 'N'; buf[3] = 'C';
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    for (int nodeId = 1; nodeId &lt; g_NumProcesses; nodeId++)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    {          MPI_Send(buf, 4, MPI_CHAR, nodeId, DEF_MSG_TAG, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      logger-&gt;debug(&quot;head bcast width: %d&quot;, this-&gt;width);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Bcast(&amp;(this-&gt;width), 1, MPI_INT, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    logger-&gt;debug(&quot;head bcast height: %d&quot;, this-&gt;height);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Bcast(&amp;(this-&gt;height), 1, MPI_INT, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    logger-&gt;debug(&quot;head bcast type: %d&quot;, this-&gt;type);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Bcast(&amp;(this-&gt;type), 1, MPI_UNSIGNED_CHAR, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      logger-&gt;debug(&quot;head sleep 10s&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    sleep(10);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          logger-&gt;debug(&quot;finished CImageData::SpreadToNodes&quot;);   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; // this function is decleared static:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CImageData *CImageData::ReceiveFromHead()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    sleep(5);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    logger-&gt;debug(&quot;CImageData::ReceiveFromHead&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Status status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    int _width;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    int _height;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    byte _type;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      logger-&gt;debug(&quot;worker barrier&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    sleep(2);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    char buf[5];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Recv(buf, 4, MPI_CHAR, HEAD_NODE, DEF_MSG_TAG, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    logger-&gt;debug(&quot;worker received sync str: '%c' '%c' '%c' '%c'&quot;, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; buf[0], buf[1], buf[2], buf[3]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    logger-&gt;debug(&quot;worker bcast width&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Bcast(&amp;(_width), 1, MPI_INT, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    logger-&gt;debug(&quot;worker bcast height&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Bcast(&amp;(_height), 1, MPI_INT, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    logger-&gt;debug(&quot;worker bcast type&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Bcast(&amp;(_type), 1, MPI_UNSIGNED_CHAR, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      logger-&gt;debug(&quot;width=%d height=%d type=%d&quot;, _width, _height, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _type);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    // TODO: create CImageData object, return...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    return NULL;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That part of code gives me an error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RANK 0 -&gt; PID 17115
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RANK 1 -&gt; PID 17116
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RANK 2 -&gt; PID 17117
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2007-10-02 19:50:37,829 [17115] DEBUG: CImageData::SpreadToNodes, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; w=768 h=576 type=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2007-10-02 19:50:37,829 [17117] DEBUG: CImageData::ReceiveFromHead
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2007-10-02 19:50:37,829 [17115] DEBUG: head barrier
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2007-10-02 19:50:37,829 [17116] DEBUG: CImageData::ReceiveFromHead
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2007-10-02 19:50:37,829 [17116] DEBUG: worker barrier
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2007-10-02 19:50:37,829 [17117] DEBUG: worker barrier
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2007-10-02 19:50:39,836 [17115] DEBUG: head send SYNC str
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2007-10-02 19:50:39,836 [17115] DEBUG: head bcast width: 768
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2007-10-02 19:50:39,836 [17115] DEBUG: head bcast height: 576
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2007-10-02 19:50:39,836 [17115] DEBUG: head bcast type: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2007-10-02 19:50:39,836 [17115] DEBUG: head sleep 10s
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2007-10-02 19:50:39,836 [17116] DEBUG: worker received sync str: 'S' 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'Y' 'N' 'C'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2007-10-02 19:50:39,836 [17116] DEBUG: worker bcast width
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pc801:17116] *** An error occurred in MPI_Bcast
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pc801:17116] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pc801:17116] *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pc801:17116] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2007-10-02 19:50:39,836 [17117] DEBUG: worker received sync str: 'S' 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'Y' 'N' 'C'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2007-10-02 19:50:39,836 [17117] DEBUG: worker bcast width
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pc801:17117] *** An error occurred in MPI_Bcast
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pc801:17117] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pc801:17117] *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pc801:17117] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that job rank 0 with PID 17115 on node pc801 exited 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on signal 15 (Terminated).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could it be that somewhere before this part the data stream was out 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of sync? The project is quite large and I have a lot of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communication between processes before CImageData::SpreadToNodes() 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so whole debugging could take hours/days, however it seems that data 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; flow before this particular fragment is ok. How could it be that 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Send/Recv gave me good buffer (4 chars - SYNC) and MPI_Bcast of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_INT is truncated? I tested the code on Valgrind - it didn't 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; complain and gave me exactly the same result. Can I assume that 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; possibly I have somewhere memory-acces error before this part and I 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; destroyed the MPI structures? How exactly MPI_Bcast is working?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry for disturb, but I'm little bit confused.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you &amp; greetings, Marcin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
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
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int        rank;
</span><br>
<span class="quotelev1">&gt;    int        np;       /* number of processes in job */
</span><br>
<span class="quotelev1">&gt;    int        foo[2];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size(MPI_COMM_WORLD, &amp;np);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    /*
</span><br>
<span class="quotelev1">&gt;     * Here is an errant MPI_Bcast.  Since this is the root, it
</span><br>
<span class="quotelev1">&gt;     * can just send the data, and continue on.  A MPI_Bcast is
</span><br>
<span class="quotelev1">&gt;     * not necessarily a synchronizing collective.
</span><br>
<span class="quotelev1">&gt;     */
</span><br>
<span class="quotelev1">&gt;    if (rank == 0) {
</span><br>
<span class="quotelev1">&gt;    printf(&quot;Rank 0 broadcasting 2 MPI_INTs...\n&quot;);
</span><br>
<span class="quotelev1">&gt;    MPI_Bcast(foo, 2, MPI_INT, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;    if (rank == 0) {
</span><br>
<span class="quotelev1">&gt;    printf(&quot;\nEveryone has now synchronized.\n&quot;);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    /*
</span><br>
<span class="quotelev1">&gt;     * Now, everyone calls a broadcast again.  However, the non-zero
</span><br>
<span class="quotelev1">&gt;     * ranks are matching up with the previous broadcast.
</span><br>
<span class="quotelev1">&gt;     */
</span><br>
<span class="quotelev1">&gt;    printf(&quot;rank %d is calling MPI_Bcast...\n&quot;, rank);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Bcast(foo, 1, MPI_INT, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4139.php">Amit Kumar Saha: "Re: [OMPI users] Tool communication"</a>
<li><strong>Previous message:</strong> <a href="4137.php">Amit Kumar Saha: "Re: [OMPI users] problem with 'orted'"</a>
<li><strong>In reply to:</strong> <a href="4136.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI users] how this is possible?"</a>
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
