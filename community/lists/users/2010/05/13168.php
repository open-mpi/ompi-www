<?
$subject_val = "Re: [OMPI users] Deadlock question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 26 18:03:17 2010" -->
<!-- isoreceived="20100526220317" -->
<!-- sent="Wed, 26 May 2010 23:48:01 +0200" -->
<!-- isosent="20100526214801" -->
<!-- name="Gijsbert Wiesenekker" -->
<!-- email="gijsbert.wiesenekker_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlock question" -->
<!-- id="356480A5-1F42-410E-BE8E-2AE4080576C8_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5A68689B-5BC1-4D0A-9C61-8C9872F10AAC_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Deadlock question<br>
<strong>From:</strong> Gijsbert Wiesenekker (<em>gijsbert.wiesenekker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-26 17:48:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13169.php">Gijsbert Wiesenekker: "Re: [OMPI users] Deadlock question"</a>
<li><strong>Previous message:</strong> <a href="13167.php">Michael E. Thomadakis: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>In reply to:</strong> <a href="13147.php">Gijsbert Wiesenekker: "[OMPI users] Deadlock question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 24, 2010, at 19:42 , Gijsbert Wiesenekker wrote:
<br>
<p><span class="quotelev1">&gt; My MPI program consists of a number of processes that send 0 or more messages (using MPI_Isend) to 0 or more other processes. The processes check periodically if messages are available to be processed. It was running fine until I increased the message size, and I got deadlock problems. Googling learned I was running into a classic deadlock problem if (see for example <a href="http://www.cs.ucsb.edu/~hnielsen/cs140/mpi-deadlocks.html">http://www.cs.ucsb.edu/~hnielsen/cs140/mpi-deadlocks.html</a>). The workarounds suggested like changing the order of MPI_Send and MPI_Recv do not work in my case, as it could be that one processor does not send any message at all to the other processes, so MPI_Recv would wait indefinitely.
</span><br>
<span class="quotelev1">&gt; Any suggestions on how to avoid deadlock in this case?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Gijsbert
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>An approach that seems to work in my case is the following:
<br>
I was using separate message-tags for 'update_message' and 'no_more_messages'. All these were sent asynchronously. The receive code in pseudo-code looked like:
<br>
<pre>
--
if (probe_for_update_message() == FALSE)
{
	if (probe_for_no_more_messages() == TRUE)
	{
		//we are done
	}
	else
	{
		//do some work
	}
}
else
{
	//process update message
}
--
The problem with this receive code was that in between the probe_for_update_message() and the probe_for_no_more_messages() a processor could send several update messages, followed by 'no_more_messages', so I still needed to check for any pending update messages after a probe_for_no_more_messages(), which complicated handling deadlock. So I first created a special update message that signals 'no_more_messages', which simplified the receive code to:
--
//probe_for_update_message() returns INVALID if no more messages, TRUE if message, FALSE if not
if ((result = probe_for_update_message()) == INVALID)
{
	//we are done
}
else if (result == TRUE)
{
	//process update message
}
else //result == FALSE
{
	//do some work
}
--
Now to deal with the deadlock I first created a function recv_update_message() that probes for update messages and pushes them onto a FIFO queue (for several reasons I cannot process the update message right away). In pseudo-code:
--
int recv_update_message()
{
	int result;
	if ((result = probe_for_update_message()) == TRUE)
		queue(update_message);
	return(result);
}
--
The asynchronous send code in pseudo-code looks like:
--
MPI_Isend(update_message, &amp;request);
while(TRUE)
{
	//deal with deadlock
	//I assume my deadlocks are caused by running out of system buffer space
	//hopefully polling pending update messages frees up buffer space
	recv_update_message();
	MPI_Test(&amp;request, &amp;flag);
	if (flag) break;
}
--
The asynchronous receive code in pseudo-code looks like:
--
//first check the FIFO queue
if (dequeue(update_message))
	return(TRUE);
else
{
	int result;
	if ((result = recv_update_message()) == INVALID)
		return(INVALID);
	if (result == TRUE)
		dequeue(update_message);
	return(result);
}
--
As a further refinement I use a queue per processor, and recv_update_message first tries to receive messages for the least used queues, but if deadlock is detected it tries to receive messages for all queues:
--
MPI_Isend(update_message, &amp;request);
while(TRUE)
nwaitx = 16; //threshold for deadlock
nwait = 0;
{
	if (nwait &gt; 2 * nwaitx) 
	{
		printf(&quot;possible deadlock detected\n&quot;);
		nwaitx = nwait;
		recv_update_message(all_queues);
	}
	else
	{
		recv_update_message(least_used_queues_only);
	}
	MPI_Test(&amp;request, &amp;flag);
	if (flag) break;
	nwait++;
}
--
Gijsbert
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13169.php">Gijsbert Wiesenekker: "Re: [OMPI users] Deadlock question"</a>
<li><strong>Previous message:</strong> <a href="13167.php">Michael E. Thomadakis: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>In reply to:</strong> <a href="13147.php">Gijsbert Wiesenekker: "[OMPI users] Deadlock question"</a>
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
