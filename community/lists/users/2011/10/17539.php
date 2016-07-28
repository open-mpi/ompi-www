<?
$subject_val = "Re: [OMPI users] gpudirect p2p?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 14 09:06:30 2011" -->
<!-- isoreceived="20111014130630" -->
<!-- sent="Fri, 14 Oct 2011 06:06:23 -0700" -->
<!-- isosent="20111014130623" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] gpudirect p2p?" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F34B7B434474_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAFeqsAybVFt0vF8-gwy3kaDFB9b-in5jYWUjjn3EDUz5RBXK5w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] gpudirect p2p?<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-14 09:06:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17540.php">Francesco Salvadore: "Re: [OMPI users] MPI_Waitany segfaults or (maybe) hangs"</a>
<li><strong>Previous message:</strong> <a href="17538.php">Chris Cooper: "[OMPI users] gpudirect p2p?"</a>
<li><strong>In reply to:</strong> <a href="17538.php">Chris Cooper: "[OMPI users] gpudirect p2p?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17557.php">Chris Cooper: "Re: [OMPI users] gpudirect p2p?"</a>
<li><strong>Reply:</strong> <a href="17557.php">Chris Cooper: "Re: [OMPI users] gpudirect p2p?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;On Behalf Of Chris Cooper
</span><br>
<span class="quotelev1">&gt;Sent: Friday, October 14, 2011 1:28 AM
</span><br>
<span class="quotelev1">&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI users] gpudirect p2p?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Are the recent peer to peer capabilities of cuda leveraged by Open MPI when
</span><br>
<span class="quotelev1">&gt;eg you're running a rank per gpu on the one workstation?
</span><br>
<p>Currently, no.  I am actively working on adding that capability. 
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;It seems in my testing that I only get in the order of about 1GB/s as per
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/community/lists/users/2011/03/15823.php">http://www.open-mpi.org/community/lists/users/2011/03/15823.php</a>,
</span><br>
<span class="quotelev1">&gt;whereas nvidia's simpleP2P test indicates ~6 GB/s.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Also, I ran into a problem just trying to test.  It seems you have to do
</span><br>
<span class="quotelev1">&gt;cudaSetDevice/cuCtxCreate with the appropriate gpu id which I was wanting
</span><br>
<span class="quotelev1">&gt;to derive from the rank.  You don't however know the rank until after
</span><br>
<span class="quotelev1">&gt;MPI_Init() and you need to initialize cuda before.  Not sure if there's a
</span><br>
<span class="quotelev1">&gt;standard way to do it?  I have a workaround atm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The recommended way is to put the GPU in exclusive mode first.
<br>
<p>#nvidia-smi -c 1
<br>
<p>Then, have this kind of snippet at the beginning of the program. (this is driver
<br>
API, probably should use runtime API)
<br>
<p>res = cuInit(0);
<br>
if (CUDA_SUCCESS != res) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;exit(1);
<br>
} 
<br>
<p>if(CUDA_SUCCESS != cuDeviceGetCount(&amp;cuDevCount)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;exit(2);
<br>
}
<br>
for (device = 0; device &lt; cuDevCount; device++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (CUDA_SUCCESS != (res = cuDeviceGet(&amp;cuDev, device))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(3);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (CUDA_SUCCESS != cuCtxCreate(&amp;ctx, 0, cuDev)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Another process must have grabbed it.  Go to the next one. */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;i++;
<br>
}
<br>
<p><p><p><span class="quotelev1">&gt;Thanks,
</span><br>
<span class="quotelev1">&gt;Chris
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
-----------------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="17540.php">Francesco Salvadore: "Re: [OMPI users] MPI_Waitany segfaults or (maybe) hangs"</a>
<li><strong>Previous message:</strong> <a href="17538.php">Chris Cooper: "[OMPI users] gpudirect p2p?"</a>
<li><strong>In reply to:</strong> <a href="17538.php">Chris Cooper: "[OMPI users] gpudirect p2p?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17557.php">Chris Cooper: "Re: [OMPI users] gpudirect p2p?"</a>
<li><strong>Reply:</strong> <a href="17557.php">Chris Cooper: "Re: [OMPI users] gpudirect p2p?"</a>
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
