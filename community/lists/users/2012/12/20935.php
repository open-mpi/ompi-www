<?
$subject_val = "Re: [OMPI users] Stream interactions in CUDA";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 19:59:09 2012" -->
<!-- isoreceived="20121213005909" -->
<!-- sent="Thu, 13 Dec 2012 01:59:05 +0100" -->
<!-- isosent="20121213005905" -->
<!-- name="Dmitry N. Mikushin" -->
<!-- email="maemarcus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Stream interactions in CUDA" -->
<!-- id="CAGR4S9HH4FthKvPaPxR2C1kCMZS3NVGAsGXehyHBGesHE2xC1w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Dmitry N. Mikushin (<em>maemarcus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-12 19:59:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20936.php">Jens Glaser: "Re: [OMPI users] Stream interactions in CUDA"</a>
<li><strong>Previous message:</strong> <a href="20934.php">Justin Luitjens: "[OMPI users] Stream interactions in CUDA"</a>
<li><strong>In reply to:</strong> <a href="20934.php">Justin Luitjens: "[OMPI users] Stream interactions in CUDA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20936.php">Jens Glaser: "Re: [OMPI users] Stream interactions in CUDA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Justin,
<br>
<p>Quick grepping reveals several cuMemcpy calls in OpenMPI. Some of them are
<br>
even synchronous, meaning stream0.
<br>
<p>I think the best way of exploring this sort of behavior is to execute
<br>
OpenMPI runtime (thanks to its open-source nature!) under debugger. Rebuild
<br>
OpenMPI with -g -O0, add some initial sleep() into your app, such that this
<br>
time would be sufficient to gdb-attach to one of MPI processes. Once
<br>
attached, first put break on the beginning of your region of interest and
<br>
then break on cuMemcpy and cuMemcpyAsync.
<br>
<p>Best,
<br>
- D.
<br>
<p>2012/12/13 Justin Luitjens &lt;jluitjens_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm working on an application using OpenMPI with CUDA and GPUDirect.  I
</span><br>
<span class="quotelev1">&gt; would like to get the MPI transfers to overlap with computation on the CUDA
</span><br>
<span class="quotelev1">&gt; device.  To do this I need to ensure that all memory transfers do not go to
</span><br>
<span class="quotelev1">&gt; stream 0.  In this application I have one step that performs an
</span><br>
<span class="quotelev1">&gt; MPI_Alltoall operation.  Ideally I would like this Alltoall operation to be
</span><br>
<span class="quotelev1">&gt; asynchronous.  Thus I have implemented my own Alltoall using Isend and
</span><br>
<span class="quotelev1">&gt; Irecv.  Which can be found at the bottom of this email.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The profiler shows that this operation has some very odd PCI-E traffic
</span><br>
<span class="quotelev1">&gt; that I was hoping someone could explain and help me eliminate.  In this
</span><br>
<span class="quotelev1">&gt; example NPES=2 and each process has its own M2090 GPU.  I am using cuda 5.0
</span><br>
<span class="quotelev1">&gt; and OpenMPI-1.7rc5.  The behavior I am seeing is the following.  Once the
</span><br>
<span class="quotelev1">&gt; Isend loop occurs there is a sequence of DtoH followed by HtoD transfers.
</span><br>
<span class="quotelev1">&gt;  These transfers are 256K in size and there are 28 of them that occur.
</span><br>
<span class="quotelev1">&gt;  Each of these transfers are placed in stream0.  After this there are a few
</span><br>
<span class="quotelev1">&gt; more small transfers also placed in stream0.  Finally when the 3rd loop
</span><br>
<span class="quotelev1">&gt; occurs there are 2 DtoD transfers (this is the actual data being exchanged).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone explain what all of the traffic ping-ponging back and forth
</span><br>
<span class="quotelev1">&gt; between the host and device is?  Is this traffic necessary?
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
<span class="quotelev1">&gt; uint64_t scatter_gather( uint128 * input_buffer, uint128 *output_buffer,
</span><br>
<span class="quotelev1">&gt; uint128 *recv_buckets, int* send_sizes, int MAX_RECV_SIZE_PER_PE) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   std::vector&lt;MPI_Request&gt; srequest(NPES), rrequest(NPES);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   //Start receives
</span><br>
<span class="quotelev1">&gt;   for(int p=0;p&lt;NPES;p++) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Irecv(recv_buckets+MAX_RECV_SIZE_PER_PE*p,MAX_RECV_SIZE_PER_PE,MPI_INT_128,p,0,MPI_COMM_WORLD,&amp;rrequest[p]);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   //Start sends
</span><br>
<span class="quotelev1">&gt;   int send_count=0;
</span><br>
<span class="quotelev1">&gt;   for(int p=0;p&lt;NPES;p++) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Isend(input_buffer+send_count,send_sizes[p],MPI_INT_128,p,0,MPI_COMM_WORLD,&amp;srequest[p]);
</span><br>
<span class="quotelev1">&gt;     send_count+=send_sizes[p];
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   //Process outstanding receives
</span><br>
<span class="quotelev1">&gt;   int recv_count=0;
</span><br>
<span class="quotelev1">&gt;   for(int p=0;p&lt;NPES;p++) {
</span><br>
<span class="quotelev1">&gt;     MPI_Status status;
</span><br>
<span class="quotelev1">&gt;     MPI_Wait(&amp;rrequest[p],&amp;status);
</span><br>
<span class="quotelev1">&gt;     int count;
</span><br>
<span class="quotelev1">&gt;     MPI_Get_count(&amp;status,MPI_INT_128,&amp;count);
</span><br>
<span class="quotelev1">&gt;     assert(count&lt;MAX_RECV_SIZE_PER_PE);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cudaMemcpy(output_buffer+recv_count,recv_buckets+MAX_RECV_SIZE_PER_PE*p,count*sizeof(uint128),cudaMemcpyDeviceToDevice);
</span><br>
<span class="quotelev1">&gt;     recv_count+=count;
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   //Wait for outstanding sends
</span><br>
<span class="quotelev1">&gt;   for(int p=0;p&lt;NPES;p++) {
</span><br>
<span class="quotelev1">&gt;     MPI_Status status;
</span><br>
<span class="quotelev1">&gt;     MPI_Wait(&amp;srequest[p],&amp;status);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   return recv_count;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and
</span><br>
<span class="quotelev1">&gt; may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or
</span><br>
<span class="quotelev1">&gt; distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the
</span><br>
<span class="quotelev1">&gt; sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20935/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20936.php">Jens Glaser: "Re: [OMPI users] Stream interactions in CUDA"</a>
<li><strong>Previous message:</strong> <a href="20934.php">Justin Luitjens: "[OMPI users] Stream interactions in CUDA"</a>
<li><strong>In reply to:</strong> <a href="20934.php">Justin Luitjens: "[OMPI users] Stream interactions in CUDA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20936.php">Jens Glaser: "Re: [OMPI users] Stream interactions in CUDA"</a>
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
