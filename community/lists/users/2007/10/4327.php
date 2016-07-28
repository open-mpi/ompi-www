<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 25 11:37:50 2007" -->
<!-- isoreceived="20071025153750" -->
<!-- sent="Thu, 25 Oct 2007 11:37:39 -0400" -->
<!-- isosent="20071025153739" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Merging Intracommunicators" -->
<!-- id="2D565546-34D6-4543-A2EC-DA4642C36357_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4720B35D.5020505_at_cs.uh.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-25 11:37:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4328.php">jody: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<li><strong>Previous message:</strong> <a href="4326.php">Edgar Gabriel: "Re: [OMPI users] Merging Intracommunicators"</a>
<li><strong>In reply to:</strong> <a href="4326.php">Edgar Gabriel: "Re: [OMPI users] Merging Intracommunicators"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 25, 2007, at 11:16 AM, Edgar Gabriel wrote:
<br>
<p><span class="quotelev2">&gt;&gt; If you have the following scenario:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - A spawns B, gets intercomm AB
</span><br>
<span class="quotelev2">&gt;&gt; - A spawns C, gets intercomm AC (that does not include B)
</span><br>
<span class="quotelev2">&gt;&gt; - ...repeat N times (e.g., to AN)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; well, how about the following for your example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - D = intercomm_merge (AB)
</span><br>
<span class="quotelev1">&gt; - E = intercomm_merge (AC)
</span><br>
<span class="quotelev1">&gt; - F = intercomm_create (DC, using E as bridge-communicator)
</span><br>
<p>I had to think about this for quite a while before I understood it --  
<br>
I initially assumed that &quot;DC&quot; was a typo and you really meant &quot;DE&quot;.   
<br>
But I eventually understood that &quot;DC&quot; is exactly what you meant and  
<br>
that seems to adhere to the spec.
<br>
<p>Yes, that's a clever solution.  Good show!
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4328.php">jody: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<li><strong>Previous message:</strong> <a href="4326.php">Edgar Gabriel: "Re: [OMPI users] Merging Intracommunicators"</a>
<li><strong>In reply to:</strong> <a href="4326.php">Edgar Gabriel: "Re: [OMPI users] Merging Intracommunicators"</a>
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
