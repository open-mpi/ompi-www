<?
$subject_val = "Re: [OMPI users] Stream interactions in CUDA";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 13 09:18:11 2012" -->
<!-- isoreceived="20121213141811" -->
<!-- sent="Thu, 13 Dec 2012 06:18:02 -0800" -->
<!-- isosent="20121213141802" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Stream interactions in CUDA" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F35E9169D24F_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="284706CA-C8A9-4EE9-B29A-7714CFFA9579_at_umn.edu" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-13 09:18:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20942.php">Ralph Castain: "Re: [OMPI users] Cannot run MPI job across nodes using OpenMPI in F17"</a>
<li><strong>Previous message:</strong> <a href="20940.php">Brice Goglin: "Re: [OMPI users] Error in configuring hwloc(hardware locality) on Linux on System Z"</a>
<li><strong>In reply to:</strong> <a href="20936.php">Jens Glaser: "Re: [OMPI users] Stream interactions in CUDA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20945.php">Justin Luitjens: "Re: [OMPI users] Stream interactions in CUDA"</a>
<li><strong>Reply:</strong> <a href="20945.php">Justin Luitjens: "Re: [OMPI users] Stream interactions in CUDA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Justin:
<br>
<p>I assume you are running on a single node.  In that case, Open MPI is supposed to take advantage of the CUDA IPC support.  This will be used only when messages are larger than 4K,  which yours are.  In that case, I would have expected that the library would exchange some messages and then do a DMA copy of all the GPU data.  For messages smaller than that, the library does synchronous copies through host memory.  (cuMemcpy).
<br>
<p>Let me try out your application and see what I see.
<br>
<p>Rolf
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;On Behalf Of Jens Glaser
</span><br>
<span class="quotelev1">&gt;Sent: Wednesday, December 12, 2012 8:12 PM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] Stream interactions in CUDA
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hi Justin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;from looking at your code it seems you are receiving more bytes from the
</span><br>
<span class="quotelev1">&gt;processors then you send (I assume MAX_RECV_SIZE_PER_PE &gt;
</span><br>
<span class="quotelev1">&gt;send_sizes[p]).
</span><br>
<span class="quotelev1">&gt;I don't think this is valid. Your transfers should have matched sizes on the
</span><br>
<span class="quotelev1">&gt;sending and receiving side. To achieve this, either communicate the message
</span><br>
<span class="quotelev1">&gt;size before exchanging the actual data (a simple MPI_Isend/MPI_Irecv pair
</span><br>
<span class="quotelev1">&gt;with one MPI_INT will do), or use a mechanism provided by the MPI library for
</span><br>
<span class="quotelev1">&gt;this. I believe MPI_Probe is made for this purpose.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;As to why the transfers occur, my wild guess would be: you have set
</span><br>
<span class="quotelev1">&gt;MAX_RECV_SIZE_PER_PE to something large, which would explain the size
</span><br>
<span class="quotelev1">&gt;and number of the H2D transfers.
</span><br>
<span class="quotelev1">&gt;I am just guessing, but maybe OMPI divides the data into chunks. Unless you
</span><br>
<span class="quotelev1">&gt;are using intra-node Peer2Peer (smcuda), all MPI traffic has to go through the
</span><br>
<span class="quotelev1">&gt;host, therefore the copies.
</span><br>
<span class="quotelev1">&gt;I don't know what causes the D2H transfers to be of the same size, the library
</span><br>
<span class="quotelev1">&gt;might be doing something strange here, given that you have potentially asked
</span><br>
<span class="quotelev1">&gt;it to receive more data then you send - don't do that. Your third loop actually
</span><br>
<span class="quotelev1">&gt;does not exchange the data, as you wrote, it just does an extra copying of
</span><br>
<span class="quotelev1">&gt;data which in principle you could avoid by sending the message sizes first.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Concerning your question about asynchronous copying. If you are using
</span><br>
<span class="quotelev1">&gt;device buffers (and it seems you do) for MPI, then you will have to rely on the
</span><br>
<span class="quotelev1">&gt;library to do asynchronous copying of the buffers (cudaMemcpyAsync) for
</span><br>
<span class="quotelev1">&gt;you. I don't know if OpenMPI does this, you could check the source. I think
</span><br>
<span class="quotelev1">&gt;MVAPICH2 does. If you really want control over the streams, you have to the
</span><br>
<span class="quotelev1">&gt;D2H/H2D copying yourself, which is fine unless you are relying on peer-to-
</span><br>
<span class="quotelev1">&gt;peer capability - but it seems you don't. If you are manually copying the data
</span><br>
<span class="quotelev1">&gt;you can give any stream parameter to the cudaMemcpyAsync calls you prefer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;My general experiences can be summarized as: achieving true async MPI
</span><br>
<span class="quotelev1">&gt;computation is hard if using the CUDA support of the library, but very easy if
</span><br>
<span class="quotelev1">&gt;you are using only the host routines of MPI. Since your kernel calls are async
</span><br>
<span class="quotelev1">&gt;with respect to host already, all you have to do is asynchronously copy the
</span><br>
<span class="quotelev1">&gt;data between host and device.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Jens
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Dec 12, 2012, at 6:30 PM, Justin Luitjens wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm working on an application using OpenMPI with CUDA and GPUDirect.  I
</span><br>
<span class="quotelev1">&gt;would like to get the MPI transfers to overlap with computation on the CUDA
</span><br>
<span class="quotelev1">&gt;device.  To do this I need to ensure that all memory transfers do not go to
</span><br>
<span class="quotelev1">&gt;stream 0.  In this application I have one step that performs an MPI_Alltoall
</span><br>
<span class="quotelev1">&gt;operation.  Ideally I would like this Alltoall operation to be asynchronous.  Thus
</span><br>
<span class="quotelev1">&gt;I have implemented my own Alltoall using Isend and Irecv.  Which can be
</span><br>
<span class="quotelev1">&gt;found at the bottom of this email.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The profiler shows that this operation has some very odd PCI-E traffic that I
</span><br>
<span class="quotelev1">&gt;was hoping someone could explain and help me eliminate.  In this example
</span><br>
<span class="quotelev1">&gt;NPES=2 and each process has its own M2090 GPU.  I am using cuda 5.0 and
</span><br>
<span class="quotelev1">&gt;OpenMPI-1.7rc5.  The behavior I am seeing is the following.  Once the Isend
</span><br>
<span class="quotelev1">&gt;loop occurs there is a sequence of DtoH followed by HtoD transfers.  These
</span><br>
<span class="quotelev1">&gt;transfers are 256K in size and there are 28 of them that occur.  Each of these
</span><br>
<span class="quotelev1">&gt;transfers are placed in stream0.  After this there are a few more small
</span><br>
<span class="quotelev1">&gt;transfers also placed in stream0.  Finally when the 3rd loop occurs there are 2
</span><br>
<span class="quotelev1">&gt;DtoD transfers (this is the actual data being exchanged).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anyone explain what all of the traffic ping-ponging back and forth
</span><br>
<span class="quotelev1">&gt;between the host and device is?  Is this traffic necessary?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Justin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; uint64_t scatter_gather( uint128 * input_buffer, uint128
</span><br>
<span class="quotelev2">&gt;&gt; *output_buffer, uint128 *recv_buckets, int* send_sizes, int
</span><br>
<span class="quotelev2">&gt;&gt; MAX_RECV_SIZE_PER_PE) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  std::vector&lt;MPI_Request&gt; srequest(NPES), rrequest(NPES);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  //Start receives
</span><br>
<span class="quotelev2">&gt;&gt;  for(int p=0;p&lt;NPES;p++) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;MPI_Irecv(recv_buckets+MAX_RECV_SIZE_PER_PE*p,MAX_RECV_SIZE_PER
</span><br>
<span class="quotelev1">&gt;_PE,MPI
</span><br>
<span class="quotelev2">&gt;&gt; _INT_128,p,0,MPI_COMM_WORLD,&amp;rrequest[p]);
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  //Start sends
</span><br>
<span class="quotelev2">&gt;&gt;  int send_count=0;
</span><br>
<span class="quotelev2">&gt;&gt;  for(int p=0;p&lt;NPES;p++) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;MPI_Isend(input_buffer+send_count,send_sizes[p],MPI_INT_128,p,0,MPI_C
</span><br>
<span class="quotelev1">&gt;OMM_WORLD,&amp;srequest[p]);
</span><br>
<span class="quotelev2">&gt;&gt;    send_count+=send_sizes[p];
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  //Process outstanding receives
</span><br>
<span class="quotelev2">&gt;&gt;  int recv_count=0;
</span><br>
<span class="quotelev2">&gt;&gt;  for(int p=0;p&lt;NPES;p++) {
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Status status;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Wait(&amp;rrequest[p],&amp;status);
</span><br>
<span class="quotelev2">&gt;&gt;    int count;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Get_count(&amp;status,MPI_INT_128,&amp;count);
</span><br>
<span class="quotelev2">&gt;&gt;    assert(count&lt;MAX_RECV_SIZE_PER_PE);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;cudaMemcpy(output_buffer+recv_count,recv_buckets+MAX_RECV_SIZE_PE
</span><br>
<span class="quotelev1">&gt;R_PE*p,count*sizeof(uint128),cudaMemcpyDeviceToDevice);
</span><br>
<span class="quotelev2">&gt;&gt;    recv_count+=count;
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  //Wait for outstanding sends
</span><br>
<span class="quotelev2">&gt;&gt;  for(int p=0;p&lt;NPES;p++) {
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Status status;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Wait(&amp;srequest[p],&amp;status);
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;  return recv_count;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ------------- This email message is for the sole use of the intended
</span><br>
<span class="quotelev2">&gt;&gt; recipient(s) and may contain confidential information.  Any
</span><br>
<span class="quotelev2">&gt;&gt; unauthorized review, use, disclosure or distribution is prohibited.
</span><br>
<span class="quotelev2">&gt;&gt; If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev2">&gt;&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; -------------
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20942.php">Ralph Castain: "Re: [OMPI users] Cannot run MPI job across nodes using OpenMPI in F17"</a>
<li><strong>Previous message:</strong> <a href="20940.php">Brice Goglin: "Re: [OMPI users] Error in configuring hwloc(hardware locality) on Linux on System Z"</a>
<li><strong>In reply to:</strong> <a href="20936.php">Jens Glaser: "Re: [OMPI users] Stream interactions in CUDA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20945.php">Justin Luitjens: "Re: [OMPI users] Stream interactions in CUDA"</a>
<li><strong>Reply:</strong> <a href="20945.php">Justin Luitjens: "Re: [OMPI users] Stream interactions in CUDA"</a>
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
