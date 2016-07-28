<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug  7 18:28:58 2007" -->
<!-- isoreceived="20070807222858" -->
<!-- sent="Tue, 7 Aug 2007 16:28:47 -0600" -->
<!-- isosent="20070807222847" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Changing btp_openib_receive_queues default value" -->
<!-- id="B82AAE10-8E98-434E-9AF8-736217EFD1E8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-07 18:28:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2101.php">Brian Barrett: "[OMPI devel] Collectives interface change"</a>
<li><strong>Previous message:</strong> <a href="2099.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Galen and I were looking at the default value for  
<br>
btl_openib_receive_queues value today and noticed that the first P  
<br>
value seems to be quite low (i.e., they're what Galen used to *force*  
<br>
flow control while he was debugging the new protocol).  We propose  
<br>
changing it to:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P,128,256,128,16:S,1024,256,128,32:S,4096,256,128,32:S, 
<br>
65536,256,128,32
<br>
<p>With these numbers, if you have a fully-OFA-connected 512 process  
<br>
MPI_COMM_WORLD, each process will take up a little over 65MB of  
<br>
buffering space per MPI process.
<br>
<p>The 128 byte buffers are so small that we can have a lot more of  
<br>
them, but we want to have a repost value high enough (128) to allow  
<br>
at least &quot;1 wire full&quot; of messages (plus some extra to account for  
<br>
credit processing, etc.), and have aggressing credit acking (16) to  
<br>
possibly allow not stalling the sender for a lazy receiver (see full  
<br>
explanation of these parameters below).
<br>
<p>For hardware that does not support SRQ (eHCA v1, iWARP, ...?), we  
<br>
propose the following values:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P,128,256,128,16:P,1024,32,16:P,4096,32,16:P,65536,32,16
<br>
<p>For a fully-connected 512 process MPI_COMM_WORLD, this will consume  
<br>
~385MB of buffering per MPI process.  Of course, if you take off the  
<br>
64k QP and simply make &quot;long&quot; messages shorter, you're down to 128MB  
<br>
per process which is potentially a bit more manageable (note that we  
<br>
currently do not have a way to automatically change PML values based  
<br>
on the hardware found in the host).  These values should probably be  
<br>
discussed in detail by the vendors who do not support SRQ to decide  
<br>
what they want.
<br>
<p>It's still an open question as to what the mechanism should be to  
<br>
determine which of these two strings should be used; it's likely to  
<br>
be something like this:
<br>
<p>1. if the user specifies a string (MCA param), use it
<br>
2. probe the HW at run time; if the hardware supports SRQ, use the  
<br>
SRQ string (eHCA v1 and v2 supports the attribute -- I don't know if  
<br>
iWARP cards do...?)
<br>
3. use the non-SRQ string
<br>
<p>I've attached a spreadsheet for those who are interested to help  
<br>
explore different parameter value sets.  The top block is the 1 per- 
<br>
peer QP + 3 SRQ case; the bottom block is the 4 per-peer QP case.   
<br>
Feel free to modify as you want; enjoy.
<br>
<p>To explain all these numbers, here's a first cut at a writeup what  
<br>
they mean (think of this as preliminary FAQ fodder -- it's likely to  
<br>
be modified a bit before it hits the FAQ).  Remember that this is  
<br>
OMPI trunk only (i.e., 1.3 series -- not 1.2 series).
<br>
<p>=================================
<br>
<p>btl_openib_receive_queues allows the specification of multiple receive
<br>
queues for OpenFabrics networks.  Each queue is designated by its type
<br>
followed by a series of numeric parameters.
<br>
<p>Queues can be one of two types:
<br>
<p>- Per-peer (P), meaning that each queue is dedicated to receiving
<br>
&nbsp;&nbsp;&nbsp;messages from a single, specific peer MPI process.  Buffers to
<br>
&nbsp;&nbsp;&nbsp;receive incoming messages from the peer are guaranteed through
<br>
&nbsp;&nbsp;&nbsp;explicit flow control by Open MPI (i.e., OpenFabrics network-level
<br>
&nbsp;&nbsp;&nbsp;retransmissions due to &quot;receiver not ready&quot; (RNR) errors will never
<br>
&nbsp;&nbsp;&nbsp;occur).
<br>
- Shared receive queue (S), meaning that a receive queue is shared
<br>
&nbsp;&nbsp;&nbsp;between all MPI sending processes.  Buffers to receive incoming
<br>
&nbsp;&nbsp;&nbsp;messages from all peers are not necessarily guaranteed because no
<br>
&nbsp;&nbsp;&nbsp;flow control is possible if less than (num_peers*num_buffers_each)
<br>
&nbsp;&nbsp;&nbsp;buffers are available in the shared receive queue (which is
<br>
&nbsp;&nbsp;&nbsp;typically a goal of using SRQ: providing less than N*M buffers).
<br>
<p>Shared receive queues can be faster than per-peer queues because of
<br>
the lack of explicit flow control traffic, but OpenFabrics
<br>
network-level retransmission errors can occur if multiple senders
<br>
combine to overflow the shared receive queue's available receive
<br>
buffers.
<br>
<p>Per-peer queues are specified in the following form:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P,&lt;size&gt;,&lt;num_buffers&gt;,[&lt;low_watermark&gt;[,&lt;window_size&gt; 
<br>
[,&lt;reserve&gt;]]]
<br>
<p>- &lt;size&gt;: The size of receive buffers to be posted in this queue (in
<br>
&nbsp;&nbsp;&nbsp;bytes).
<br>
- &lt;num_buffers&gt;: The maximum number of buffers to post to this queue
<br>
&nbsp;&nbsp;&nbsp;for incoming MPI message fragments.
<br>
- &lt;low_watermark&gt;: An optional parameter specifying the number of
<br>
&nbsp;&nbsp;&nbsp;available buffers left on the queue before Open MPI will re-post
<br>
&nbsp;&nbsp;&nbsp;buffers up to &lt;num_buffers&gt;.  Note that as a latency reduction
<br>
&nbsp;&nbsp;&nbsp;mechanism, Open MPI does not re-post a receive buffer as soon as it
<br>
&nbsp;&nbsp;&nbsp;becomes available (because it is expensive to do so).  Instead, Open
<br>
&nbsp;&nbsp;&nbsp;MPI waits until several receive buffers become available again and
<br>
&nbsp;&nbsp;&nbsp;then posts them all at once.  If not specified, &lt;low_watermark&gt;
<br>
&nbsp;&nbsp;&nbsp;defaults to &lt;num_buffers&gt;/2.
<br>
- &lt;window_size&gt;: An optional parameter specifying the number of ACKs
<br>
&nbsp;&nbsp;&nbsp;to accumulate before sending an explicit ACK control message back to
<br>
&nbsp;&nbsp;&nbsp;a peer.  ACKs are typically piggybacked on outgoing messages to a
<br>
&nbsp;&nbsp;&nbsp;peer; they are grouped into explicit control messages only where
<br>
&nbsp;&nbsp;&nbsp;they are no other outgoing messages to a peer.  If not specified,
<br>
&nbsp;&nbsp;&nbsp;&lt;window_size&gt; defaults to &lt;low_watermark&gt;/2.
<br>
- &lt;reserved&gt;: An optional parameter specifying the number of receive
<br>
&nbsp;&nbsp;&nbsp;buffers to post to the queue that are specifically used for incoming
<br>
&nbsp;&nbsp;&nbsp;ACK control messages (vs. incoming MPI messages).  If unspecified,
<br>
&nbsp;&nbsp;&nbsp;&lt;reserved&gt; defaults to ((&lt;num_buffers&gt;*2)-1)/&lt;window_size&gt;.  Note
<br>
&nbsp;&nbsp;&nbsp;that control messages use their own flow control (separate from the
<br>
&nbsp;&nbsp;&nbsp;flow control for MPI message fragments); explicit control messages
<br>
&nbsp;&nbsp;&nbsp;are always ACK'ed via piggyback data on other messages to ensure
<br>
&nbsp;&nbsp;&nbsp;that control messages will not trigger RNR errors.
<br>
<p>For example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P,128,16,4
<br>
<p>Specifies a per-peer receive queue that initially posts 16 buffers,
<br>
each of size 128 bytes.  When there are 4 buffers left on the receive
<br>
queue, Open MPI will re-post 124 buffers to the queue, restoring it to
<br>
having a total of 128 buffers available for incoming messages.
<br>
Explicit ACK control messages will be sent back for every 2 incoming
<br>
messages (if not already piggybacked on other outgoing messages).  127
<br>
buffers are reserved for ACK control messages.
<br>
<p>Shared queues are specified in the following form:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S,&lt;size&gt;,&lt;num_buffers&gt;,[&lt;low_watermark&gt;[,&lt;max_pending_sends&gt;]]
<br>
<p>- &lt;size&gt;: Same as for per-peer queues.
<br>
- &lt;num_buffers&gt;: Same as for per-peer queues.
<br>
- &lt;low_watermark&gt;: Same as for per-peer queues.
<br>
- &lt;max_pending_sends&gt;: An optional parameter that specifies the number
<br>
&nbsp;&nbsp;&nbsp;of outstanding sends that are allowed at a given time on the queue.
<br>
&nbsp;&nbsp;&nbsp;This provides a &quot;good enough&quot; mechanism of flow control for some
<br>
&nbsp;&nbsp;&nbsp;regular communication patterns.  If not specified,
<br>
&nbsp;&nbsp;&nbsp;&lt;max_pending_sends&gt; defaults to &lt;low_watermark&gt;/4.
<br>
<p>For example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S,1024,256,128,32
<br>
<p>Specifies a shared receive queue that posts 256 buffers, each of size
<br>
1024 bytes.  When there are 128 buffers left on the receive queue,
<br>
Open MPI will re-post 128 buffers to the queue, restoring it to having
<br>
a total of 256 buffers available for incoming messages.  A maximum of
<br>
32 non-local-completed messages are allowed to be pending to a peer at
<br>
any given time.
<br>
<p>Note that queues MUST be specified in ascending receive buffer size
<br>
order.  This requirement may be removed prior to 1.3 release.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems


</pre>
<p>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2100/openib-buffering.xls">openib-buffering.xls</a>
</ul>
<!-- attachment="openib-buffering.xls" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2101.php">Brian Barrett: "[OMPI devel] Collectives interface change"</a>
<li><strong>Previous message:</strong> <a href="2099.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
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
