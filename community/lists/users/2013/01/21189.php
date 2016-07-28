<?
$subject_val = "Re: [OMPI users] XRC vs SRQ vs PRQ";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 22 14:54:05 2013" -->
<!-- isoreceived="20130122195405" -->
<!-- sent="Tue, 22 Jan 2013 14:53:58 -0500" -->
<!-- isosent="20130122195358" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] XRC vs SRQ vs PRQ" -->
<!-- id="8CE80A66-ED42-4D91-BDC4-7E54BA0A0474_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="98E3F179-F174-498D-83FD-E32C09D96779_at_umich.edu" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-22 14:53:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21190.php">Shamis, Pavel: "Re: [OMPI users] MXM vs OpenIB"</a>
<li><strong>Previous message:</strong> <a href="21188.php">Ada Mancuso: "[OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
<li><strong>In reply to:</strong> <a href="21183.php">Brock Palen: "[OMPI users] XRC vs SRQ vs PRQ"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21198.php">Brock Palen: "Re: [OMPI users] XRC vs SRQ vs PRQ"</a>
<li><strong>Reply:</strong> <a href="21198.php">Brock Palen: "Re: [OMPI users] XRC vs SRQ vs PRQ"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Switching to SRQ and some guess of queue values selected appears to let the code run.
</span><br>
<span class="quotelev1">&gt; S,4096,128:S,12288,128:S,65536,12 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Two questions,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a ConnectX fabric, should I switch them to XRC queues? And should I use the same queue size/count?  That a safe assumption?
</span><br>
<span class="quotelev1">&gt; X,4096,128:X,12288,128:X,65536,12 
</span><br>
<p>Yeah, I would use the same values as a starting point. 
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  When should I use one queue type over the other?
</span><br>
<p>Generally speaking XRC transport has much better scalability that RC. 
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a way to get stat feedback on the use of your shared queues (SRQ or XRC) ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Example, using code 'not from here' and would like to know,   &quot;hey you are always  running out of your queue of size X&quot;  Or &quot; your queue of size Y is never used&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are kinda blind for a lot of our applications :-)
</span><br>
<p>Right now we don't have such hooks in openib BTL. 
<br>
It is not very difficult to add some code that will report stat for QP utilization. 
<br>
<p>In you other email you mentioned MXM. I would recommend to try both XRC and MXM and see which one performance better. On relatively small system I would guess
<br>
XRC will perform better, on large system MXM should demonstrate better performance. But again, it all depends on your application.
<br>
<p>- Pasha
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21190.php">Shamis, Pavel: "Re: [OMPI users] MXM vs OpenIB"</a>
<li><strong>Previous message:</strong> <a href="21188.php">Ada Mancuso: "[OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
<li><strong>In reply to:</strong> <a href="21183.php">Brock Palen: "[OMPI users] XRC vs SRQ vs PRQ"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21198.php">Brock Palen: "Re: [OMPI users] XRC vs SRQ vs PRQ"</a>
<li><strong>Reply:</strong> <a href="21198.php">Brock Palen: "Re: [OMPI users] XRC vs SRQ vs PRQ"</a>
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
