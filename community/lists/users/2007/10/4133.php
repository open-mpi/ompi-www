<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct  2 14:14:59 2007" -->
<!-- isoreceived="20071002181459" -->
<!-- sent="Tue, 02 Oct 2007 20:14:21 +0200" -->
<!-- isosent="20071002181421" -->
<!-- name="Marcin Skoczylas" -->
<!-- email="Marcin.Skoczylas_at_[hidden]" -->
<!-- subject="[OMPI users] how this is possible?" -->
<!-- id="47028A7D.3030100_at_lnl.infn.it" -->
<!-- charset="ISO-8859-2" -->
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
<strong>Date:</strong> 2007-10-02 14:14:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4134.php">Marcin Skoczylas: "Re: [OMPI users] how this is possible?"</a>
<li><strong>Previous message:</strong> <a href="4132.php">Dino Rossegger: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4134.php">Marcin Skoczylas: "Re: [OMPI users] how this is possible?"</a>
<li><strong>Reply:</strong> <a href="4134.php">Marcin Skoczylas: "Re: [OMPI users] how this is possible?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>After whole day of coding I'm fighting little bit with one small 
<br>
fragment which seems strange for me.
<br>
For testing I have one head node and two worker nodes on localhost. 
<br>
Having this code (with debug stuff added like sleeps, barriers, etc):
<br>
<p>void CImageData::SpreadToNodes()
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(5);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;logger-&gt;debug(&quot;CImageData::SpreadToNodes, w=%d h=%d type=%d&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this-&gt;width, this-&gt;height, this-&gt;type);
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;logger-&gt;debug(&quot;head barrier&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(2);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;// debug 'sync' test
<br>
&nbsp;&nbsp;&nbsp;&nbsp;logger-&gt;debug(&quot;head send SYNC str&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char buf[5];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf[0] = 'S'; buf[1] = 'Y'; buf[2] = 'N'; buf[3] = 'C';
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (int nodeId = 1; nodeId &lt; g_NumProcesses; nodeId++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(buf, 4, MPI_CHAR, nodeId, DEF_MSG_TAG, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;logger-&gt;debug(&quot;head bcast width: %d&quot;, this-&gt;width);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Bcast(&amp;(this-&gt;width), 1, MPI_INT, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;logger-&gt;debug(&quot;head bcast height: %d&quot;, this-&gt;height);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Bcast(&amp;(this-&gt;height), 1, MPI_INT, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;logger-&gt;debug(&quot;head bcast type: %d&quot;, this-&gt;type);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Bcast(&amp;(this-&gt;type), 1, MPI_UNSIGNED_CHAR, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;logger-&gt;debug(&quot;head sleep 10s&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(10);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;logger-&gt;debug(&quot;finished CImageData::SpreadToNodes&quot;);   
<br>
}
<br>
<p>// this function is decleared static:
<br>
CImageData *CImageData::ReceiveFromHead()
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(5);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;logger-&gt;debug(&quot;CImageData::ReceiveFromHead&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int _width;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int _height;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;byte _type;
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;logger-&gt;debug(&quot;worker barrier&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(2);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;char buf[5];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(buf, 4, MPI_CHAR, HEAD_NODE, DEF_MSG_TAG, MPI_COMM_WORLD, 
<br>
&amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;logger-&gt;debug(&quot;worker received sync str: '%c' '%c' '%c' '%c'&quot;, 
<br>
buf[0], buf[1], buf[2], buf[3]);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;logger-&gt;debug(&quot;worker bcast width&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Bcast(&amp;(_width), 1, MPI_INT, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;logger-&gt;debug(&quot;worker bcast height&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Bcast(&amp;(_height), 1, MPI_INT, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;logger-&gt;debug(&quot;worker bcast type&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Bcast(&amp;(_type), 1, MPI_UNSIGNED_CHAR, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;logger-&gt;debug(&quot;width=%d height=%d type=%d&quot;, _width, _height, _type);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// TODO: create CImageData object, return...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return NULL;
<br>
}
<br>
<p><p>That part of code gives me an error:
<br>
RANK 0 -&gt; PID 17115
<br>
RANK 1 -&gt; PID 17116
<br>
RANK 2 -&gt; PID 17117
<br>
<p>2007-10-02 19:50:37,829 [17115] DEBUG: CImageData::SpreadToNodes, w=768 
<br>
h=576 type=1
<br>
2007-10-02 19:50:37,829 [17117] DEBUG: CImageData::ReceiveFromHead
<br>
2007-10-02 19:50:37,829 [17115] DEBUG: head barrier
<br>
2007-10-02 19:50:37,829 [17116] DEBUG: CImageData::ReceiveFromHead
<br>
2007-10-02 19:50:37,829 [17116] DEBUG: worker barrier
<br>
2007-10-02 19:50:37,829 [17117] DEBUG: worker barrier
<br>
2007-10-02 19:50:39,836 [17115] DEBUG: head send SYNC str
<br>
2007-10-02 19:50:39,836 [17115] DEBUG: head bcast width: 768
<br>
2007-10-02 19:50:39,836 [17115] DEBUG: head bcast height: 576
<br>
2007-10-02 19:50:39,836 [17115] DEBUG: head bcast type: 1
<br>
2007-10-02 19:50:39,836 [17115] DEBUG: head sleep 10s
<br>
2007-10-02 19:50:39,836 [17116] DEBUG: worker received sync str: 'S' 'Y' 
<br>
'N' 'C'
<br>
2007-10-02 19:50:39,836 [17116] DEBUG: worker bcast width
<br>
[pc801:17116] *** An error occurred in MPI_Bcast
<br>
[pc801:17116] *** on communicator MPI_COMM_WORLD
<br>
[pc801:17116] *** MPI_ERR_TRUNCATE: message truncated
<br>
[pc801:17116] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
2007-10-02 19:50:39,836 [17117] DEBUG: worker received sync str: 'S' 'Y' 
<br>
'N' 'C'
<br>
2007-10-02 19:50:39,836 [17117] DEBUG: worker bcast width
<br>
[pc801:17117] *** An error occurred in MPI_Bcast
<br>
[pc801:17117] *** on communicator MPI_COMM_WORLD
<br>
[pc801:17117] *** MPI_ERR_TRUNCATE: message truncated
<br>
[pc801:17117] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
mpirun noticed that job rank 0 with PID 17115 on node pc801 exited on 
<br>
signal 15 (Terminated).
<br>
<p><p>Could it be that somewhere before this part the data stream was out of 
<br>
sync? The project is quite large and I have a lot of communication 
<br>
between processes before CImageData::SpreadToNodes() so whole debugging 
<br>
could take hours/days, however it seems that data flow before this 
<br>
particular fragment is ok. How could it be that MPI_Send/Recv gave me 
<br>
good buffer (4 chars - SYNC) and MPI_Bcast of MPI_INT is truncated? I 
<br>
tested the code on Valgrind - it didn't complain and gave me exactly the 
<br>
same result. Can I assume that possibly I have somewhere memory-acces 
<br>
error before this part and I destroyed the MPI structures? How exactly 
<br>
MPI_Bcast is working?
<br>
<p>Sorry for disturb, but I'm little bit confused.
<br>
Thank you &amp; greetings, Marcin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4134.php">Marcin Skoczylas: "Re: [OMPI users] how this is possible?"</a>
<li><strong>Previous message:</strong> <a href="4132.php">Dino Rossegger: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4134.php">Marcin Skoczylas: "Re: [OMPI users] how this is possible?"</a>
<li><strong>Reply:</strong> <a href="4134.php">Marcin Skoczylas: "Re: [OMPI users] how this is possible?"</a>
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
