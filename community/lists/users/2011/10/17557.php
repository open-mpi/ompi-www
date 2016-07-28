<?
$subject_val = "Re: [OMPI users] gpudirect p2p?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 16 17:21:04 2011" -->
<!-- isoreceived="20111016212104" -->
<!-- sent="Mon, 17 Oct 2011 08:20:58 +1100" -->
<!-- isosent="20111016212058" -->
<!-- name="Chris Cooper" -->
<!-- email="rallycoops_at_[hidden]" -->
<!-- subject="Re: [OMPI users] gpudirect p2p?" -->
<!-- id="CAFeqsAzqmK5zMqCYdJ8TUyU=WB6-nr0eyh1PPUj3JvXsATGtpQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F34B7B434474_at_HQMAIL02.nvidia.com" -->
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
<strong>From:</strong> Chris Cooper (<em>rallycoops_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-16 17:20:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17558.php">Ralph Castain: "Re: [OMPI users] [OMPI docs] Open MPI compilation Error"</a>
<li><strong>Previous message:</strong> <a href="17556.php">MM: "[OMPI users] revisiting topic: prebuilt on windows7 not xp"</a>
<li><strong>In reply to:</strong> <a href="17539.php">Rolf vandeVaart: "Re: [OMPI users] gpudirect p2p?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah I see.  Thanks for the info!
<br>
<p>On Sat, Oct 15, 2011 at 12:06 AM, Rolf vandeVaart
<br>
&lt;rvandevaart_at_[hidden]&gt; wrote:
<br>
<span class="quotelev2">&gt;&gt;-----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt;From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt;On Behalf Of Chris Cooper
</span><br>
<span class="quotelev2">&gt;&gt;Sent: Friday, October 14, 2011 1:28 AM
</span><br>
<span class="quotelev2">&gt;&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;Subject: [OMPI users] gpudirect p2p?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Are the recent peer to peer capabilities of cuda leveraged by Open MPI when
</span><br>
<span class="quotelev2">&gt;&gt;eg you're running a rank per gpu on the one workstation?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Currently, no. &#160;I am actively working on adding that capability.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;It seems in my testing that I only get in the order of about 1GB/s as per
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/community/lists/users/2011/03/15823.php">http://www.open-mpi.org/community/lists/users/2011/03/15823.php</a>,
</span><br>
<span class="quotelev2">&gt;&gt;whereas nvidia's simpleP2P test indicates ~6 GB/s.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Also, I ran into a problem just trying to test. &#160;It seems you have to do
</span><br>
<span class="quotelev2">&gt;&gt;cudaSetDevice/cuCtxCreate with the appropriate gpu id which I was wanting
</span><br>
<span class="quotelev2">&gt;&gt;to derive from the rank. &#160;You don't however know the rank until after
</span><br>
<span class="quotelev2">&gt;&gt;MPI_Init() and you need to initialize cuda before. &#160;Not sure if there's a
</span><br>
<span class="quotelev2">&gt;&gt;standard way to do it? &#160;I have a workaround atm.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The recommended way is to put the GPU in exclusive mode first.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #nvidia-smi -c 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then, have this kind of snippet at the beginning of the program. (this is driver
</span><br>
<span class="quotelev1">&gt; API, probably should use runtime API)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; res = cuInit(0);
</span><br>
<span class="quotelev1">&gt; if (CUDA_SUCCESS != res) {
</span><br>
<span class="quotelev1">&gt; &#160; &#160;exit(1);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if(CUDA_SUCCESS != cuDeviceGetCount(&amp;cuDevCount)) {
</span><br>
<span class="quotelev1">&gt; &#160; &#160;exit(2);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; for (device = 0; device &lt; cuDevCount; device++) {
</span><br>
<span class="quotelev1">&gt; &#160; &#160;if (CUDA_SUCCESS != (res = cuDeviceGet(&amp;cuDev, device))) {
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;exit(3);
</span><br>
<span class="quotelev1">&gt; &#160; &#160;}
</span><br>
<span class="quotelev1">&gt; &#160; &#160;if (CUDA_SUCCESS != cuCtxCreate(&amp;ctx, 0, cuDev)) {
</span><br>
<span class="quotelev1">&gt; &#160; &#160; /* Another process must have grabbed it. &#160;Go to the next one. */
</span><br>
<span class="quotelev1">&gt; &#160; &#160;} else {
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;break;
</span><br>
<span class="quotelev1">&gt; &#160; &#160;}
</span><br>
<span class="quotelev1">&gt; &#160; &#160;i++;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;Chris
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev1">&gt; confidential information. &#160;Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev1">&gt; is prohibited. &#160;If you are not the intended recipient, please contact the sender by
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17558.php">Ralph Castain: "Re: [OMPI users] [OMPI docs] Open MPI compilation Error"</a>
<li><strong>Previous message:</strong> <a href="17556.php">MM: "[OMPI users] revisiting topic: prebuilt on windows7 not xp"</a>
<li><strong>In reply to:</strong> <a href="17539.php">Rolf vandeVaart: "Re: [OMPI users] gpudirect p2p?"</a>
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
