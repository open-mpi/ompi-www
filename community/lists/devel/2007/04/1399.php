<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr  4 10:24:17 2007" -->
<!-- isoreceived="20070404142417" -->
<!-- sent="Wed, 4 Apr 2007 10:23:44 -0400" -->
<!-- isosent="20070404142344" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level" -->
<!-- id="28CCC18B-4063-4D8F-9122-7EB208C3A92D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="35551.130.207.5.93.1175633873.squirrel_at_webmail.cc.gatech.edu" -->
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
<strong>Date:</strong> 2007-04-04 10:23:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1400.php">Brian Barrett: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Previous message:</strong> <a href="1398.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly	with MPI level"</a>
<li><strong>In reply to:</strong> <a href="1397.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1400.php">Brian Barrett: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 3, 2007, at 4:57 PM, pooja_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; I need to find when the underlying network is free. Means I dont  
</span><br>
<span class="quotelev1">&gt; need to
</span><br>
<span class="quotelev1">&gt; go into the details of how MPi_send is implemented.
</span><br>
<p>Ah, ok.  That explains a lot.
<br>
<p><span class="quotelev1">&gt; What I want to know is when the MPI_Send is started .Or rather when  
</span><br>
<span class="quotelev1">&gt; MPi
</span><br>
<span class="quotelev1">&gt; does not use the underlying network.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need to find timing for
</span><br>
<span class="quotelev1">&gt; 1) When the application issue send command
</span><br>
<p>This (and #5) can be implemented with a PMPI-based intercept library  
<br>
(I assume that by &quot;command&quot;, you mean &quot;API function call&quot;).
<br>
<p><span class="quotelev1">&gt; 2) When Mpi actually issues send command
</span><br>
<span class="quotelev1">&gt; 3) When does BTl perform atual transfer(send)
</span><br>
<p>What are you looking to distinguish here?  I.e., what is the  
<br>
difference between 1 and 2 vs. 3?
<br>
<p>Open MPI has an MPI_Send() function in C that does some error  
<br>
checking and then invokes an underlying &quot;send&quot; function (via function  
<br>
pointer) to a plugin that starts doing the setup for the MPI  
<br>
semantics for the send.  Eventually, another function pointer is used  
<br>
to invoke the &quot;send&quot; function in the BTL to actually send the  
<br>
message.  More setup is performed down in the BTL (usually dealing  
<br>
with setting up data structures to invoke the underlying network/OS/ 
<br>
driver &quot;send&quot; function that starts the network send), and then we  
<br>
invoke some underlying OS/kernel-bypass function to start the network  
<br>
transfer.  Note that all we can guarantee is that the transfer start  
<br>
sometime after that -- there's no way to know *exactly* when it  
<br>
starts because the underlying kernel driver may choose to defer it  
<br>
for a while based on flow control, available resources, etc.
<br>
<p>Specifically, similar to one of my prior e-mails, the calling  
<br>
structure is something like this:
<br>
<p>MPI_Send()
<br>
&nbsp;&nbsp;&nbsp;--&gt; PML plugin (usually the &quot;ob1&quot; plugin)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--&gt; BTL plugin (one of the components in the ompi/mca/btl/  
<br>
directory)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--&gt; underlying OS/kernel-bypass function
<br>
<p><span class="quotelev1">&gt; 4) When doe send complete
</span><br>
<p>By &quot;complete&quot;, what exactly are you looking for?  There's several  
<br>
definitions possible here:
<br>
<p>- when any of the &quot;send&quot; functions listed above returns
<br>
- when the underlying network driver tells us that it is complete  
<br>
(a.k.a. &quot;local completion&quot; -- it *DOES NOT* imply that the receiver  
<br>
has even started to receive the message, nor that the message has  
<br>
even left the host yet)
<br>
- when he receiver ACK's receiving the message
<br>
- when MPI_Send() returns
<br>
<p>FWIW, we usually measure local completion time because that's all  
<br>
that we can know (because the underlying network driver makes its own  
<br>
decisions about when messages are put out on the network, etc., and  
<br>
we [i.e., any user-level networking software] don't have visibility  
<br>
of that information).
<br>
<p><span class="quotelev1">&gt; 5) Who was thr receiver.
</span><br>
<span class="quotelev1">&gt; etc. this was an example of MPi_send.
</span><br>
<span class="quotelev1">&gt; like this I need to know MPI_Isend,broadcast etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess this can be done using PMPI.
</span><br>
<p>Some of this can, yes.
<br>
<p><span class="quotelev1">&gt; But PMPI can do it during profile stages while I want all this data  
</span><br>
<span class="quotelev1">&gt; during
</span><br>
<span class="quotelev1">&gt; runtime.
</span><br>
<p>I don't quite understand this statement -- PMPI is a run-time  
<br>
profiling system.  All it does is insert your shim PMPI layer between  
<br>
the user's application and the &quot;real&quot; MPI layer.
<br>
<p><span class="quotelev1">&gt; So that I can improve the performance of the system while using  
</span><br>
<span class="quotelev1">&gt; that ideal
</span><br>
<span class="quotelev1">&gt; time.
</span><br>
<p>What I'm piecing together from your e-mails is that you want to use  
<br>
MPI in conjunction with using the network directly, either through  
<br>
the BTLs or some other communication library (i.e., both MPI and your  
<br>
other communication library will share the same network resources)  
<br>
and you're trying to find out when MPI is not using a particular  
<br>
network resource so that you can use it with your other communication  
<br>
library in order to maximize utilization and minimize contention /  
<br>
congestion.  Is that correct?
<br>
<p>Is that right?
<br>
<p><span class="quotelev1">&gt; Well I/o used is Lustre (its ROMIO).
</span><br>
<p>Note that ROMIO uses a fair bit of MPI sending and receiving before  
<br>
using the underlying file system.  So you'll have at least 2 layers  
<br>
of software to explore to find out when the network is free/busy.
<br>
<p><span class="quotelev1">&gt; What I mean by I/O node is nodes that does input and ouput  
</span><br>
<span class="quotelev1">&gt; processing i.e
</span><br>
<span class="quotelev1">&gt; they write to lustre and compute node just transfer data to i/o  
</span><br>
<span class="quotelev1">&gt; node to
</span><br>
<span class="quotelev1">&gt; write it in Lustre.Compute node does not have memory at all.So when  
</span><br>
<span class="quotelev1">&gt; ever
</span><br>
<span class="quotelev1">&gt; they have something to write it gets transfered to I/o node.
</span><br>
<span class="quotelev1">&gt; and then I/o node does read and write.
</span><br>
<p>Ok.  I'm guessing/assuming that this is multiplexing that is either  
<br>
done in ROMIO or in Lustre itself.
<br>
<p><span class="quotelev1">&gt; So when MPi_send is not issued the  the network(Infiniband  
</span><br>
<span class="quotelev1">&gt; interconnect)
</span><br>
<span class="quotelev1">&gt; can be used for some other transfer.
</span><br>
<p>Makes sense.
<br>
<p><span class="quotelev1">&gt; Can anyone help me wih how to go abt tracing this at run time?
</span><br>
<p>The BTL plugin that you will be concerned with is the &quot;openib&quot; BTL  
<br>
(in the Open MPI source tree: ompi/mca/btl/openib/*) -- assuming that  
<br>
you are using an OpenFabrics/OFED-based network driver on your nodes  
<br>
(if you're using an older mvapi-based network driver, you'll use the  
<br>
mvapi BTL: ompi/mca/btl/mvapi/* -- but I would not recommend this  
<br>
because all current and future effort for InfiniBand in OMPI is being  
<br>
doing with OFED/the openib BTL).
<br>
<p>Be warned: IB networks are highly flexible and therefore the API for  
<br>
it is fairly complex.  The native API for OFED-based IB verbs is in a  
<br>
library called &quot;libibverbs&quot; -- man pages for the particular verbs  
<br>
function calls will be included in the next OFED release (OFED v1.2),  
<br>
so you probably don't have them loaded on your cluster.  I've  
<br>
attached a tarball of the man pages for you.  You'll need these man  
<br>
pages to understand what the openib BTL is doing.
<br>
<p>If what you want to do is figure out when OMPI's openib BTL is not  
<br>
using the network, you need to a) understand the BTL interface (and  
<br>
to some extent, how the &quot;ob1&quot; PML uses it), b) understand at least  
<br>
generally how the InfiniBand verbs API (functions that begin with  
<br>
ibv_*()) work, and c) understand how the openib BTL works.
<br>
<p>To that end, I'd suggest the following:
<br>
<p>a) Understand the BTL interface: see ompi/mca/btl/btl.h for the BTL  
<br>
plugin interface and at least some comments about how it is used.   
<br>
Also see the slides from the OMPI Developer's Workshop (especially  
<br>
Wednesday, the day where point-to-point communications were covered):
<br>
<p><a href="http://www.open-mpi.org/papers/workshop-2006/">http://www.open-mpi.org/papers/workshop-2006/</a>
<br>
<p>b) Read up on the IBV function call man pages.  Understand a few  
<br>
major concepts before starting:
<br>
<p>- Using the IB network requires the use of &quot;registered&quot; memory.   
<br>
Meaning that any messages sent or received across the IB network must  
<br>
use the special &quot;registered&quot; memory.  OMPI dedicates a *lot* of code  
<br>
to managing registered memory (you'll see references to the rdma  
<br>
mpool [memory pool] component in the OMPI trunk -- it's slightly  
<br>
different on the v1.2 series branch)
<br>
<p>- Most IB actions are asynchronous.  So when we send a message, you  
<br>
simply create a work queue entry (WQE) and put it on a work queue  
<br>
(WQ).  The IB NIC takes over from there and progresses the send.   
<br>
When the send has completed (local completion only; does not imply  
<br>
that the receiver has even started to receive), an entry will appear  
<br>
on the completion queue (CQ) telling OMPI that it is done and the  
<br>
message buffer can now be re-used/deallocated/whatever.
<br>
<p>- Note that registering and de-registering memory is synchronous and  
<br>
can be fairly expensive (i.e., slow).
<br>
<p>- All IB communication is done through queue pairs (QPs): a send  
<br>
queue and a receive queue.  QP's are analogous to sockets -- you open  
<br>
a QP between two processes.  You then send to that peer by creating a  
<br>
WQE for the send queue and putting it on the WQ.  The NIC will then  
<br>
progress the send buffer and when local completion occurs, will put  
<br>
an entry on the CQ.
<br>
<p>- There is no such thing as an unexpected message in IB -- you *must*  
<br>
pre-post buffers to receive messages.  Hence, OMPI posts a bunch of  
<br>
buffers during init to receive messages via received queues in QPs.   
<br>
These buffers are used when you use &quot;send / receive&quot; semantics for IB  
<br>
message passing.
<br>
<p>- Additionally, IB networks can utilize RDMA for message passing --  
<br>
meaning that you don't send messages into pre-posted received  
<br>
buffers, but rather give an address to send the message directly to  
<br>
in the peer process.  This is called &quot;RDMA semantics&quot; for IB message  
<br>
passing (as opposed to &quot;send / receive semantics&quot;).  There is some  
<br>
additional cost to this form of message passing because you have to  
<br>
exchange the target address from the receiver to the sender.
<br>
<p>- OMPI makes QPs lazily.  That is, there is a bunch of code dedicated  
<br>
to coordinating and creating QPs when the first MPI_SEND is exchanged  
<br>
between a pair of MPI peer processes.  Specifically, if you have an  
<br>
MPI process that calls MPI_INIT and MPI_FINALIZE (and no MPI_SEND/ 
<br>
MPI_RECV functions), we won't make any QP's between MPI processes.
<br>
<p>- The openib BTL generally does the following:
<br>
&nbsp;&nbsp;&nbsp;- For short messages, RDMA is used for a limited set of peer  
<br>
processes (because RMDA consumes registered memory).  Specifically,  
<br>
the first N processes that connect to a given process will be allowed  
<br>
to use RDMA for short messages.
<br>
&nbsp;&nbsp;&nbsp;- For the N+1st (and beyond) peer that connects, send/receive  
<br>
semantics are used.
<br>
&nbsp;&nbsp;&nbsp;- A complex protocol is used for long messages.  It is described  
<br>
in this paper:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/papers/euro-pvmmpi-2006-hpc-protocols/">http://www.open-mpi.org/papers/euro-pvmmpi-2006-hpc-protocols/</a>
<br>
<p>- Open MPI also employs the PERUSE statistics-gathering profiler,  
<br>
which may be helpful to you.  See this paper for details:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/papers/euro-pvmmpi-2006-peruse/">http://www.open-mpi.org/papers/euro-pvmmpi-2006-peruse/</a>
<br>
<p>- This paper also describes some scalability issues with IB  
<br>
(particularly with consuming registered memory and something called  
<br>
shared receive queues [SRQ]):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/papers/ipdps-2006/">http://www.open-mpi.org/papers/ipdps-2006/</a>
<br>
<p>Hope this is helpful to you.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems


</pre>
<p>
<p><p><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1399/ibverbs-ofed-1.2.tar.gz">ibverbs-ofed-1.2.tar.gz</a>
</ul>
<!-- attachment="ibverbs-ofed-1.2.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1400.php">Brian Barrett: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Previous message:</strong> <a href="1398.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly	with MPI level"</a>
<li><strong>In reply to:</strong> <a href="1397.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1400.php">Brian Barrett: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
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
