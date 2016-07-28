<?
$subject_val = "Re: [OMPI users] XRC vs SRQ vs PRQ";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 22 16:06:40 2013" -->
<!-- isoreceived="20130122210640" -->
<!-- sent="Tue, 22 Jan 2013 16:06:32 -0500" -->
<!-- isosent="20130122210632" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] XRC vs SRQ vs PRQ" -->
<!-- id="423CE3CA-D9EB-4CD0-99FF-FB08E39C72C0_at_umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8CE80A66-ED42-4D91-BDC4-7E54BA0A0474_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] XRC vs SRQ vs PRQ<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-22 16:06:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21199.php">Shamis, Pavel: "Re: [OMPI users] MXM vs OpenIB"</a>
<li><strong>Previous message:</strong> <a href="21197.php">Brock Palen: "Re: [OMPI users] MXM vs OpenIB"</a>
<li><strong>In reply to:</strong> <a href="21189.php">Shamis, Pavel: "Re: [OMPI users] XRC vs SRQ vs PRQ"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 22, 2013, at 2:53 PM, Shamis, Pavel wrote:
<br>
<p><span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Switching to SRQ and some guess of queue values selected appears to let the code run.
</span><br>
<span class="quotelev2">&gt;&gt; S,4096,128:S,12288,128:S,65536,12 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Two questions,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is a ConnectX fabric, should I switch them to XRC queues? And should I use the same queue size/count?  That a safe assumption?
</span><br>
<span class="quotelev2">&gt;&gt; X,4096,128:X,12288,128:X,65536,12 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yeah, I would use the same values as a starting point. 
</span><br>
<p>Thanks, the users full resolution job got further with shared queues, we are going to do a test with XRC queues of the same count. But he keeps getting OpenMPI out of memory/reg fail messages. 
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When should I use one queue type over the other?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Generally speaking XRC transport has much better scalability that RC. 
</span><br>
<p>Ok so if we are useing shared queues on ConnectX gear default to XRC, will do.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to get stat feedback on the use of your shared queues (SRQ or XRC) ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Example, using code 'not from here' and would like to know,   &quot;hey you are always  running out of your queue of size X&quot;  Or &quot; your queue of size Y is never used&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We are kinda blind for a lot of our applications :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right now we don't have such hooks in openib BTL. 
</span><br>
<span class="quotelev1">&gt; It is not very difficult to add some code that will report stat for QP utilization. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In you other email you mentioned MXM. I would recommend to try both XRC and MXM and see which one performance better. On relatively small system I would guess
</span><br>
<span class="quotelev1">&gt; XRC will perform better, on large system MXM should demonstrate better performance. But again, it all depends on your application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Pasha
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="21199.php">Shamis, Pavel: "Re: [OMPI users] MXM vs OpenIB"</a>
<li><strong>Previous message:</strong> <a href="21197.php">Brock Palen: "Re: [OMPI users] MXM vs OpenIB"</a>
<li><strong>In reply to:</strong> <a href="21189.php">Shamis, Pavel: "Re: [OMPI users] XRC vs SRQ vs PRQ"</a>
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
