<?
$subject_val = "Re: [OMPI users] Stream interactions in CUDA";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 13 12:11:26 2012" -->
<!-- isoreceived="20121213171126" -->
<!-- sent="Thu, 13 Dec 2012 12:10:46 -0500" -->
<!-- isosent="20121213171046" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Stream interactions in CUDA" -->
<!-- id="BF334E0C-30C4-4B72-8F5F-729068BF4FB3_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F6308D2295D83F48A9955B844DDEC881373B220AA3_at_HQMAIL04.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Stream interactions in CUDA<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-13 12:10:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20947.php">marco atzeri: "Re: [OMPI users] network timeout"</a>
<li><strong>Previous message:</strong> <a href="20945.php">Justin Luitjens: "Re: [OMPI users] Stream interactions in CUDA"</a>
<li><strong>In reply to:</strong> <a href="20945.php">Justin Luitjens: "Re: [OMPI users] Stream interactions in CUDA"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds like self btl does not support CUDA IPC.
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Computer Science Research Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Dec 13, 2012, at 11:46 AM, Justin Luitjens wrote:
Thank you everyone for your responses.  I believe I have narrowed down the cause of this.  But first I'll respond to some of the points raised.
The problem is not related to receiving more then sending.  The MPI spec states that the receive size can be larger then the send size and you can use MPI_get_count to determine the actual size received.  I have an fairly tight bounds on the size of data i'm going to receive but I don't know the exact size.  Doing it this way allows me to avoid having to do an extra step of exchanging sizes.  I could also use MPI_Probe but that would mean that messages were likely to go into the unexpected queue which takes up more resources and I was uncertain how well the unexpected queue would interact with cuda since at the time of receiving the driver does not know if this should go to the host or the device.  My goal is to avoid taking any data to the host since this application will likely be PCI-E bound.
Now onto the source of the problem.  In this case OpenMPI appears to be doing an inefficient copy when the source and destination are the same.  Instead of keeping the data on the device and just doing a cudaMemcpyAsync the transfer is being staged through the host in 256K chunk sizes.  This is likely just a case where the OpenMPI library has a different path for same source/destination transfers which has not been updated to use the most efficient cuda path.  I'm not familiar with the OpenMPI source and thus do not know what effort would be needed to optimize this path.  I also suspect this is the same source of the stream0 copies in the collectives.
I have attached a simple reproducer if someone who is familiar with the OpenMPI cuda implementation wants to take a look.
The easy solution for me was to avoid self sends/receives at the application level.
Thanks,
Justin
________________________________________
From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; [users-bounces_at_[hidden]] On Behalf Of Rolf vandeVaart [rvandevaart_at_[hidden]]
Sent: Thursday, December 13, 2012 6:18 AM
To: Open MPI Users
Subject: Re: [OMPI users] Stream interactions in CUDA
Hi Justin:
I assume you are running on a single node.  In that case, Open MPI is supposed to take advantage of the CUDA IPC support.  This will be used only when messages are larger than 4K,  which yours are.  In that case, I would have expected that the library would exchange some messages and then do a DMA copy of all the GPU data.  For messages smaller than that, the library does synchronous copies through host memory.  (cuMemcpy).
Let me try out your application and see what I see.
Rolf
-----Original Message-----
From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; [mailto:users-bounces_at_[hidden]]
On Behalf Of Jens Glaser
Sent: Wednesday, December 12, 2012 8:12 PM
To: Open MPI Users
Subject: Re: [OMPI users] Stream interactions in CUDA
Hi Justin
from looking at your code it seems you are receiving more bytes from the
processors then you send (I assume MAX_RECV_SIZE_PER_PE &gt;
send_sizes[p]).
I don't think this is valid. Your transfers should have matched sizes on the
sending and receiving side. To achieve this, either communicate the message
size before exchanging the actual data (a simple MPI_Isend/MPI_Irecv pair
with one MPI_INT will do), or use a mechanism provided by the MPI library for
this. I believe MPI_Probe is made for this purpose.
As to why the transfers occur, my wild guess would be: you have set
MAX_RECV_SIZE_PER_PE to something large, which would explain the size
and number of the H2D transfers.
I am just guessing, but maybe OMPI divides the data into chunks. Unless you
are using intra-node Peer2Peer (smcuda), all MPI traffic has to go through the
host, therefore the copies.
I don't know what causes the D2H transfers to be of the same size, the library
might be doing something strange here, given that you have potentially asked
it to receive more data then you send - don't do that. Your third loop actually
does not exchange the data, as you wrote, it just does an extra copying of
data which in principle you could avoid by sending the message sizes first.
Concerning your question about asynchronous copying. If you are using
device buffers (and it seems you do) for MPI, then you will have to rely on the
library to do asynchronous copying of the buffers (cudaMemcpyAsync) for
you. I don't know if OpenMPI does this, you could check the source. I think
MVAPICH2 does. If you really want control over the streams, you have to the
D2H/H2D copying yourself, which is fine unless you are relying on peer-to-
peer capability - but it seems you don't. If you are manually copying the data
you can give any stream parameter to the cudaMemcpyAsync calls you prefer.
My general experiences can be summarized as: achieving true async MPI
computation is hard if using the CUDA support of the library, but very easy if
you are using only the host routines of MPI. Since your kernel calls are async
with respect to host already, all you have to do is asynchronously copy the
data between host and device.
Jens
On Dec 12, 2012, at 6:30 PM, Justin Luitjens wrote:
Hello,
I'm working on an application using OpenMPI with CUDA and GPUDirect.  I
would like to get the MPI transfers to overlap with computation on the CUDA
device.  To do this I need to ensure that all memory transfers do not go to
stream 0.  In this application I have one step that performs an MPI_Alltoall
operation.  Ideally I would like this Alltoall operation to be asynchronous.  Thus
I have implemented my own Alltoall using Isend and Irecv.  Which can be
found at the bottom of this email.
The profiler shows that this operation has some very odd PCI-E traffic that I
was hoping someone could explain and help me eliminate.  In this example
NPES=2 and each process has its own M2090 GPU.  I am using cuda 5.0 and
OpenMPI-1.7rc5.  The behavior I am seeing is the following.  Once the Isend
loop occurs there is a sequence of DtoH followed by HtoD transfers.  These
transfers are 256K in size and there are 28 of them that occur.  Each of these
transfers are placed in stream0.  After this there are a few more small
transfers also placed in stream0.  Finally when the 3rd loop occurs there are 2
DtoD transfers (this is the actual data being exchanged).
Can anyone explain what all of the traffic ping-ponging back and forth
between the host and device is?  Is this traffic necessary?
Thanks,
Justin
uint64_t scatter_gather( uint128 * input_buffer, uint128
*output_buffer, uint128 *recv_buckets, int* send_sizes, int
MAX_RECV_SIZE_PER_PE) {
std::vector&lt;MPI_Request&gt; srequest(NPES), rrequest(NPES);
//Start receives
for(int p=0;p&lt;NPES;p++) {
MPI_Irecv(recv_buckets+MAX_RECV_SIZE_PER_PE*p,MAX_RECV_SIZE_PER
_PE,MPI
_INT_128,p,0,MPI_COMM_WORLD,&amp;rrequest[p]);
}
//Start sends
int send_count=0;
for(int p=0;p&lt;NPES;p++) {
MPI_Isend(input_buffer+send_count,send_sizes[p],MPI_INT_128,p,0,MPI_C
OMM_WORLD,&amp;srequest[p]);
  send_count+=send_sizes[p];
}
//Process outstanding receives
int recv_count=0;
for(int p=0;p&lt;NPES;p++) {
  MPI_Status status;
  MPI_Wait(&amp;rrequest[p],&amp;status);
  int count;
  MPI_Get_count(&amp;status,MPI_INT_128,&amp;count);
  assert(count&lt;MAX_RECV_SIZE_PER_PE);
cudaMemcpy(output_buffer+recv_count,recv_buckets+MAX_RECV_SIZE_PE
R_PE*p,count*sizeof(uint128),cudaMemcpyDeviceToDevice);
  recv_count+=count;
}
//Wait for outstanding sends
for(int p=0;p&lt;NPES;p++) {
  MPI_Status status;
  MPI_Wait(&amp;srequest[p],&amp;status);
}
return recv_count;
}
----------------------------------------------------------------------
------------- This email message is for the sole use of the intended
recipient(s) and may contain confidential information.  Any
unauthorized review, use, disclosure or distribution is prohibited.
If you are not the intended recipient, please contact the sender by
reply email and destroy all copies of the original message.
----------------------------------------------------------------------
-------------
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&lt;mpiself.cu&gt;_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20947.php">marco atzeri: "Re: [OMPI users] network timeout"</a>
<li><strong>Previous message:</strong> <a href="20945.php">Justin Luitjens: "Re: [OMPI users] Stream interactions in CUDA"</a>
<li><strong>In reply to:</strong> <a href="20945.php">Justin Luitjens: "Re: [OMPI users] Stream interactions in CUDA"</a>
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
