<?
$subject_val = "[OMPI users] Stream interactions in CUDA";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 19:31:02 2012" -->
<!-- isoreceived="20121213003102" -->
<!-- sent="Wed, 12 Dec 2012 16:30:56 -0800" -->
<!-- isosent="20121213003056" -->
<!-- name="Justin Luitjens" -->
<!-- email="jluitjens_at_[hidden]" -->
<!-- subject="[OMPI users] Stream interactions in CUDA" -->
<!-- id="F6308D2295D83F48A9955B844DDEC881373B220AA2_at_HQMAIL04.nvidia.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Stream interactions in CUDA<br>
<strong>From:</strong> Justin Luitjens (<em>jluitjens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-12 19:30:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20935.php">Dmitry N. Mikushin: "Re: [OMPI users] Stream interactions in CUDA"</a>
<li><strong>Previous message:</strong> <a href="20933.php">Ralph Castain: "[OMPI users] Open MPI videos"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20935.php">Dmitry N. Mikushin: "Re: [OMPI users] Stream interactions in CUDA"</a>
<li><strong>Reply:</strong> <a href="20935.php">Dmitry N. Mikushin: "Re: [OMPI users] Stream interactions in CUDA"</a>
<li><strong>Reply:</strong> <a href="20936.php">Jens Glaser: "Re: [OMPI users] Stream interactions in CUDA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm working on an application using OpenMPI with CUDA and GPUDirect.  I would like to get the MPI transfers to overlap with computation on the CUDA device.  To do this I need to ensure that all memory transfers do not go to stream 0.  In this application I have one step that performs an MPI_Alltoall operation.  Ideally I would like this Alltoall operation to be asynchronous.  Thus I have implemented my own Alltoall using Isend and Irecv.  Which can be found at the bottom of this email.
<br>
<p>The profiler shows that this operation has some very odd PCI-E traffic that I was hoping someone could explain and help me eliminate.  In this example NPES=2 and each process has its own M2090 GPU.  I am using cuda 5.0 and OpenMPI-1.7rc5.  The behavior I am seeing is the following.  Once the Isend loop occurs there is a sequence of DtoH followed by HtoD transfers.  These transfers are 256K in size and there are 28 of them that occur.  Each of these transfers are placed in stream0.  After this there are a few more small transfers also placed in stream0.  Finally when the 3rd loop occurs there are 2 DtoD transfers (this is the actual data being exchanged).  
<br>
<p>Can anyone explain what all of the traffic ping-ponging back and forth between the host and device is?  Is this traffic necessary? 
<br>
<p>Thanks,
<br>
Justin
<br>
<p><p>uint64_t scatter_gather( uint128 * input_buffer, uint128 *output_buffer, uint128 *recv_buckets, int* send_sizes, int MAX_RECV_SIZE_PER_PE) {
<br>
<p>&nbsp;&nbsp;std::vector&lt;MPI_Request&gt; srequest(NPES), rrequest(NPES);
<br>
<p>&nbsp;&nbsp;//Start receives
<br>
&nbsp;&nbsp;for(int p=0;p&lt;NPES;p++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(recv_buckets+MAX_RECV_SIZE_PER_PE*p,MAX_RECV_SIZE_PER_PE,MPI_INT_128,p,0,MPI_COMM_WORLD,&amp;rrequest[p]);
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;//Start sends
<br>
&nbsp;&nbsp;int send_count=0;
<br>
&nbsp;&nbsp;for(int p=0;p&lt;NPES;p++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(input_buffer+send_count,send_sizes[p],MPI_INT_128,p,0,MPI_COMM_WORLD,&amp;srequest[p]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;send_count+=send_sizes[p];
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;//Process outstanding receives
<br>
&nbsp;&nbsp;int recv_count=0;
<br>
&nbsp;&nbsp;for(int p=0;p&lt;NPES;p++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;rrequest[p],&amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int count;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_count(&amp;status,MPI_INT_128,&amp;count);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;assert(count&lt;MAX_RECV_SIZE_PER_PE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cudaMemcpy(output_buffer+recv_count,recv_buckets+MAX_RECV_SIZE_PER_PE*p,count*sizeof(uint128),cudaMemcpyDeviceToDevice);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;recv_count+=count;
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;//Wait for outstanding sends
<br>
&nbsp;&nbsp;for(int p=0;p&lt;NPES;p++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;srequest[p],&amp;status);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;return recv_count;
<br>
}
<br>
<p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20935.php">Dmitry N. Mikushin: "Re: [OMPI users] Stream interactions in CUDA"</a>
<li><strong>Previous message:</strong> <a href="20933.php">Ralph Castain: "[OMPI users] Open MPI videos"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20935.php">Dmitry N. Mikushin: "Re: [OMPI users] Stream interactions in CUDA"</a>
<li><strong>Reply:</strong> <a href="20935.php">Dmitry N. Mikushin: "Re: [OMPI users] Stream interactions in CUDA"</a>
<li><strong>Reply:</strong> <a href="20936.php">Jens Glaser: "Re: [OMPI users] Stream interactions in CUDA"</a>
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
