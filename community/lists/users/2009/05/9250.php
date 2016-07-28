<?
$subject_val = "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  7 05:09:10 2009" -->
<!-- isoreceived="20090507090910" -->
<!-- sent="Thu, 7 May 2009 11:09:04 +0200" -->
<!-- isosent="20090507090904" -->
<!-- name="Ricardo Fern&#225;ndez-Perea" -->
<!-- email="rfernandezperea_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX" -->
<!-- id="ebd2bd0b0905070209p6e286ff6o746f485de398bce7_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="94EBB3FF-0A81-45B0-883A-4F82352FEE9D_at_myri.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX<br>
<strong>From:</strong> Ricardo Fern&#225;ndez-Perea (<em>rfernandezperea_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-07 05:09:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9251.php">Josh Hursey: "Re: [OMPI users] Problem with Filem"</a>
<li><strong>Previous message:</strong> <a href="9249.php">Peter Kjellstrom: "Re: [OMPI users] Slightly off topic: Ethernet and InfiniBand speed evolution"</a>
<li><strong>In reply to:</strong> <a href="9239.php">Scott Atchley: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just did, at least the ping pong, the results are slightly worst and
<br>
&nbsp;presents the same drop at 64KSee attachment.
<br>
<p>a comment: to run with the btl mx i need to use  --mca btl mx,sm,self -mca
<br>
mtl ^mx  or i get a mx_open_endpoint failure due to myrinet busy (I have
<br>
already increase the number of endpoints to 16 )
<br>
<p>On Wed, May 6, 2009 at 7:31 PM, Scott Atchley &lt;atchley_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On May 4, 2009, at 10:54 AM, Ricardo Fern&#225;ndez-Perea wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I finally have opportunity to run the imb-3.2 benchmark over myrinet I am
</span><br>
<span class="quotelev2">&gt;&gt; running in a cluster of 16 node Xservers connected with myrinet 15 of them
</span><br>
<span class="quotelev2">&gt;&gt; are 8core ones and the last one is a 4 cores one. Having a limit of 124
</span><br>
<span class="quotelev2">&gt;&gt; process
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have run the test with the bynode option so from the 2 to the 16 process
</span><br>
<span class="quotelev2">&gt;&gt; test is always running 1 process by node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the following test  pingpong, pingping, sendrecv, exchange presents a
</span><br>
<span class="quotelev2">&gt;&gt; strong drop in performance with the 64k packet size.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; any idea where I should look for the cause.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ricardo
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ricardo,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe that the pingpong results show the drop that you are
</span><br>
<span class="quotelev1">&gt; experiencing. There is a drop at 64 KB and 128 KB and it returns to the same
</span><br>
<span class="quotelev1">&gt; level at 128 KB.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What you are seeing in the pingpong results is the change over from eager
</span><br>
<span class="quotelev1">&gt; to rendezvous within MX. Up to 32 KB, we use an eager protocol (send the
</span><br>
<span class="quotelev1">&gt; data even if there is not a posted receive). After 32 KB, we switch to a
</span><br>
<span class="quotelev1">&gt; rendezvous protocol.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not believe that this limit can be changed. Have you tried the same
</span><br>
<span class="quotelev1">&gt; application when using the MX BTL?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scott
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
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9250/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9250/IMB1-PingPong-BTL.results">IMB1-PingPong-BTL.results</a>
</ul>
<!-- attachment="IMB1-PingPong-BTL.results" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9251.php">Josh Hursey: "Re: [OMPI users] Problem with Filem"</a>
<li><strong>Previous message:</strong> <a href="9249.php">Peter Kjellstrom: "Re: [OMPI users] Slightly off topic: Ethernet and InfiniBand speed evolution"</a>
<li><strong>In reply to:</strong> <a href="9239.php">Scott Atchley: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
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
