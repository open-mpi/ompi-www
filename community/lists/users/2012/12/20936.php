<?
$subject_val = "Re: [OMPI users] Stream interactions in CUDA";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 20:12:01 2012" -->
<!-- isoreceived="20121213011201" -->
<!-- sent="Wed, 12 Dec 2012 19:11:54 -0600" -->
<!-- isosent="20121213011154" -->
<!-- name="Jens Glaser" -->
<!-- email="jglaser_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Stream interactions in CUDA" -->
<!-- id="284706CA-C8A9-4EE9-B29A-7714CFFA9579_at_umn.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F6308D2295D83F48A9955B844DDEC881373B220AA2_at_HQMAIL04.nvidia.com" -->
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
<strong>From:</strong> Jens Glaser (<em>jglaser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-12 20:11:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20937.php">Ng Shi Wei: "[OMPI users] Cannot run MPI job across nodes using OpenMPI in F17"</a>
<li><strong>Previous message:</strong> <a href="20935.php">Dmitry N. Mikushin: "Re: [OMPI users] Stream interactions in CUDA"</a>
<li><strong>In reply to:</strong> <a href="20934.php">Justin Luitjens: "[OMPI users] Stream interactions in CUDA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20941.php">Rolf vandeVaart: "Re: [OMPI users] Stream interactions in CUDA"</a>
<li><strong>Reply:</strong> <a href="20941.php">Rolf vandeVaart: "Re: [OMPI users] Stream interactions in CUDA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Justin
<br>
<p>from looking at your code it seems you are receiving more bytes from the processors then you send (I assume MAX_RECV_SIZE_PER_PE &gt; send_sizes[p]).
<br>
I don't think this is valid. Your transfers should have matched sizes on the sending and receiving side. To achieve this, either communicate the message size before exchanging the actual data
<br>
(a simple MPI_Isend/MPI_Irecv pair with one MPI_INT will do), or use a mechanism provided by the MPI library for this. I believe MPI_Probe is made for this purpose.
<br>
<p>As to why the transfers occur, my wild guess would be: you have set MAX_RECV_SIZE_PER_PE to something large, which would explain the size and number of the H2D transfers. 
<br>
I am just guessing, but maybe OMPI divides the data into chunks. Unless you are using intra-node Peer2Peer (smcuda), all MPI traffic has to go through the host, therefore the copies.
<br>
I don't know what causes the D2H transfers to be of the same size, the library might be doing something strange here, given that you have potentially
<br>
asked it to receive more data then you send - don't do that. Your third loop actually does not exchange the data, as you wrote, it just does an extra copying of data which in principle you could
<br>
avoid by sending the message sizes first.
<br>
<p>Concerning your question about asynchronous copying. If you are using device buffers (and it seems you do) for MPI, then you will have to rely on the library to do asynchronous
<br>
copying of the buffers (cudaMemcpyAsync) for you. I don't know if OpenMPI does this, you could check the source. I think MVAPICH2 does. If you really want control over the streams,
<br>
you have to the D2H/H2D copying yourself, which is fine unless you are relying on peer-to-peer capability - but it seems you don't. If you are manually copying the data
<br>
you can give any stream parameter to the cudaMemcpyAsync calls you prefer.
<br>
<p>My general experiences can be summarized as: achieving true async MPI computation is hard if using the CUDA support of the library, but very easy if you are using only the host
<br>
routines of MPI. Since your kernel calls are async with respect to host already, all you have to do is asynchronously copy the data between host and device.
<br>
<p>Jens
<br>
<p>On Dec 12, 2012, at 6:30 PM, Justin Luitjens wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm working on an application using OpenMPI with CUDA and GPUDirect.  I would like to get the MPI transfers to overlap with computation on the CUDA device.  To do this I need to ensure that all memory transfers do not go to stream 0.  In this application I have one step that performs an MPI_Alltoall operation.  Ideally I would like this Alltoall operation to be asynchronous.  Thus I have implemented my own Alltoall using Isend and Irecv.  Which can be found at the bottom of this email.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The profiler shows that this operation has some very odd PCI-E traffic that I was hoping someone could explain and help me eliminate.  In this example NPES=2 and each process has its own M2090 GPU.  I am using cuda 5.0 and OpenMPI-1.7rc5.  The behavior I am seeing is the following.  Once the Isend loop occurs there is a sequence of DtoH followed by HtoD transfers.  These transfers are 256K in size and there are 28 of them that occur.  Each of these transfers are placed in stream0.  After this there are a few more small transfers also placed in stream0.  Finally when the 3rd loop occurs there are 2 DtoD transfers (this is the actual data being exchanged).  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anyone explain what all of the traffic ping-ponging back and forth between the host and device is?  Is this traffic necessary? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Justin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; uint64_t scatter_gather( uint128 * input_buffer, uint128 *output_buffer, uint128 *recv_buckets, int* send_sizes, int MAX_RECV_SIZE_PER_PE) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  std::vector&lt;MPI_Request&gt; srequest(NPES), rrequest(NPES);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  //Start receives
</span><br>
<span class="quotelev1">&gt;  for(int p=0;p&lt;NPES;p++) {
</span><br>
<span class="quotelev1">&gt;    MPI_Irecv(recv_buckets+MAX_RECV_SIZE_PER_PE*p,MAX_RECV_SIZE_PER_PE,MPI_INT_128,p,0,MPI_COMM_WORLD,&amp;rrequest[p]);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  //Start sends
</span><br>
<span class="quotelev1">&gt;  int send_count=0;
</span><br>
<span class="quotelev1">&gt;  for(int p=0;p&lt;NPES;p++) {
</span><br>
<span class="quotelev1">&gt;    MPI_Isend(input_buffer+send_count,send_sizes[p],MPI_INT_128,p,0,MPI_COMM_WORLD,&amp;srequest[p]);
</span><br>
<span class="quotelev1">&gt;    send_count+=send_sizes[p];
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  //Process outstanding receives
</span><br>
<span class="quotelev1">&gt;  int recv_count=0;
</span><br>
<span class="quotelev1">&gt;  for(int p=0;p&lt;NPES;p++) {
</span><br>
<span class="quotelev1">&gt;    MPI_Status status;
</span><br>
<span class="quotelev1">&gt;    MPI_Wait(&amp;rrequest[p],&amp;status);
</span><br>
<span class="quotelev1">&gt;    int count;
</span><br>
<span class="quotelev1">&gt;    MPI_Get_count(&amp;status,MPI_INT_128,&amp;count);
</span><br>
<span class="quotelev1">&gt;    assert(count&lt;MAX_RECV_SIZE_PER_PE);
</span><br>
<span class="quotelev1">&gt;    cudaMemcpy(output_buffer+recv_count,recv_buckets+MAX_RECV_SIZE_PER_PE*p,count*sizeof(uint128),cudaMemcpyDeviceToDevice);
</span><br>
<span class="quotelev1">&gt;    recv_count+=count;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  //Wait for outstanding sends
</span><br>
<span class="quotelev1">&gt;  for(int p=0;p&lt;NPES;p++) {
</span><br>
<span class="quotelev1">&gt;    MPI_Status status;
</span><br>
<span class="quotelev1">&gt;    MPI_Wait(&amp;srequest[p],&amp;status);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  return recv_count;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="20937.php">Ng Shi Wei: "[OMPI users] Cannot run MPI job across nodes using OpenMPI in F17"</a>
<li><strong>Previous message:</strong> <a href="20935.php">Dmitry N. Mikushin: "Re: [OMPI users] Stream interactions in CUDA"</a>
<li><strong>In reply to:</strong> <a href="20934.php">Justin Luitjens: "[OMPI users] Stream interactions in CUDA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20941.php">Rolf vandeVaart: "Re: [OMPI users] Stream interactions in CUDA"</a>
<li><strong>Reply:</strong> <a href="20941.php">Rolf vandeVaart: "Re: [OMPI users] Stream interactions in CUDA"</a>
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
