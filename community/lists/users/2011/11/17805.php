<?
$subject_val = "Re: [OMPI users] UDP like messaging with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 21 14:50:22 2011" -->
<!-- isoreceived="20111121195022" -->
<!-- sent="Mon, 21 Nov 2011 14:50:22 -0500 (EST)" -->
<!-- isosent="20111121195022" -->
<!-- name="Jeremiah Willcock" -->
<!-- email="jewillco_at_[hidden]" -->
<!-- subject="Re: [OMPI users] UDP like messaging with MPI" -->
<!-- id="alpine.LRH.2.00.1111211434390.26877_at_flowerpot.osl.iu.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1321904002.79490.YahooMailNeo_at_web121717.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] UDP like messaging with MPI<br>
<strong>From:</strong> Jeremiah Willcock (<em>jewillco_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-21 14:50:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17806.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<li><strong>Previous message:</strong> <a href="17804.php">Mudassar Majeed: "Re: [OMPI users] UDP like messaging with MPI"</a>
<li><strong>In reply to:</strong> <a href="17804.php">Mudassar Majeed: "Re: [OMPI users] UDP like messaging with MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 21 Nov 2011, Mudassar Majeed wrote:
<br>
<p><span class="quotelev1">&gt; Thank you for your answer. Actually, I used the term UDP to show the non-connection oriented messaging. TCP creates connection between two parties (who
</span><br>
<span class="quotelev1">&gt; communicate) but in UDP a message can be sent to any IP/port where a process/thread is listening to, and if the process is busy in doing something, all the
</span><br>
<span class="quotelev1">&gt; received messages are queued for it and when ever it calls the recv function one message is taken from the queue.
</span><br>
<p>That is how MPI message matching works; messages sit in a queue until you 
<br>
call MPI_Irecv (or MPI_Recv or MPI_Probe, etc.) to get them.  Unlike UDP, 
<br>
MPI messages do not need to complete on the sender until they are 
<br>
received, so you will probably need to use MPI_Isend to avoid deadlocks.
<br>
<p><span class="quotelev1">&gt; I am implementing a distributed algorithm that will provide communication sensitive load balancing for computational loads. For example, if we have 10 nodes each
</span><br>
<span class="quotelev1">&gt; containing 10 cores (100 cores in total). So when MPI application will start (let say with 1000) processes (more than 1 process per core) then I will run my
</span><br>
<span class="quotelev1">&gt; distributed algorithm MPI_Balance (sorry for giving MPI_ prefix as it is not a part of MPI, but I am trying to make it the part of MPI ;) ). So that algorithm
</span><br>
<span class="quotelev1">&gt; will take those processes that communicate more in the same node (keeping the computational load on 10 cores on that node balanced).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So that was the little bit explanation. So for that my distributed algorithm requires that some processes communicate with each other to collaborate on something.
</span><br>
<span class="quotelev1">&gt; So I need a kind of messaging that I explained above. It is kind of UDP messaging (no connection before sending a message, and message is always queued on the
</span><br>
<span class="quotelev1">&gt; receiver's side and sender is not blocked, it just sends the message and the receiver takes it when it gets free from other task).
</span><br>
<p>The one difficulty in doing this is to manage the MPI requests from the 
<br>
sends and poll them with MPI_Test periodically.  You can just keep the 
<br>
requests in an array (std::vector in C++) which can be expanded when 
<br>
needed; to send a message, call MPI_Isend and put the request into the 
<br>
array, and periodically call MPI_Testany or MPI_Testsome on the array to 
<br>
find completed requests.  Note that you will need to keep the data being 
<br>
sent intact in its buffer until the request completes.  Here's a naive 
<br>
version that does extra copies and doesn't clean out its arrays of 
<br>
requests or buffers:
<br>
<p>class message_send_engine {
<br>
&nbsp;&nbsp;&nbsp;vector&lt;MPI_Request&gt; requests;
<br>
&nbsp;&nbsp;&nbsp;vector&lt;vector&lt;char&gt; &gt; buffers;
<br>
<p>&nbsp;&nbsp;&nbsp;public:
<br>
&nbsp;&nbsp;&nbsp;void send(void* buf, int byte_len, int dest, int tag) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request req;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t buf_num = buffers.size();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buffers.resize(buf_num + 1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buffers[buf_num].assign((char*)buf, (char*)buf + byte_len);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;requests.resize(buf_num + 1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(&amp;buffers[buf_num][0], byte_len, MPI_BYTE, dest, tag, MPI_COMM_WORLD, &amp;requests[buf_num]);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;void poll() { // Call this periodically
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (true) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int index, flag;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Testany((int)requests.size(), &amp;requests[0], &amp;index, &amp;flag, MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (flag &amp;&amp; index != MPI_UNDEFINED) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buffers[index].clear(); // Free memory
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;}
<br>
};
<br>
<p>bool test_for_message(void* buf, int max_len, MPI_Status&amp; st) {
<br>
&nbsp;&nbsp;&nbsp;int flag;
<br>
&nbsp;&nbsp;&nbsp;MPI_Iprobe(MPI_ANY_SOURCE, MPI_ANY_TAG, MPI_COMM_WORLD, &amp;flag, &amp;st);
<br>
&nbsp;&nbsp;&nbsp;return (flag != 0);
<br>
}
<br>
<p>If test_for_message returns true, you can then use MPI_Recv to get the 
<br>
message.
<br>
<p><span class="quotelev1">&gt; I have tried to use the combination of MPI_Send, MPI_Recv, MPI_Iprobe, 
</span><br>
<span class="quotelev1">&gt; MPI_Isend, MPI_Irecv, MPI_Test etc, but I am not getting that thing that 
</span><br>
<span class="quotelev1">&gt; I am looking for. I think MPI should also provide that way. May be it is 
</span><br>
<span class="quotelev1">&gt; not in my knowledge. That's why I am asking the experts. I am still 
</span><br>
<span class="quotelev1">&gt; looking for it :(
</span><br>
<p>-- Jeremiah Willcock
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17806.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<li><strong>Previous message:</strong> <a href="17804.php">Mudassar Majeed: "Re: [OMPI users] UDP like messaging with MPI"</a>
<li><strong>In reply to:</strong> <a href="17804.php">Mudassar Majeed: "Re: [OMPI users] UDP like messaging with MPI"</a>
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
