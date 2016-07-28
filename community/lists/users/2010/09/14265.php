<?
$subject_val = "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 21 17:40:19 2010" -->
<!-- isoreceived="20100921214019" -->
<!-- sent="Tue, 21 Sep 2010 17:31:21 -0400" -->
<!-- isosent="20100921213121" -->
<!-- name="Ethan Deneault" -->
<!-- email="edeneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes." -->
<!-- id="4C992429.4000008_at_ut.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C991AB3.5070505_at_ias.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes.<br>
<strong>From:</strong> Ethan Deneault (<em>edeneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-21 17:31:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14266.php">Gabriele Fatigati: "[OMPI users] BTL layer"</a>
<li><strong>Previous message:</strong> <a href="14264.php">Prentice Bisbal: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>In reply to:</strong> <a href="14264.php">Prentice Bisbal: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Prentice Bisbal wrote:
<br>
<span class="quotelev1">&gt; Ashley Pittman wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This smacks of a firewall issue, I thought you'd said you weren't using one but now I read back your emails I can't see anywhere where you say that.  Are you running a flrewall or any iptables rules on any of the nodes?  It looks to me like you may have some setup from on the worker nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ashley.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree with Ashley. To make sure it's not an IP tables or SELinux
</span><br>
<span class="quotelev1">&gt; problem on one of the nodes, run these two commands on all teh nodes and
</span><br>
<span class="quotelev1">&gt; then try again:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; service iptables stop
</span><br>
<span class="quotelev1">&gt; setenforce 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>This fix worked. Delving in deeper, it turns out that there was a typo in the iptables file for the 
<br>
nodes: they were accepting all traffic on eth1 instead of eth0. Only the master has an eth1 port. 
<br>
When I checked the tables earlier, I didn't notice the discrepancy.
<br>
<p>Thank you all so much!
<br>
<p>Cheers,
<br>
Ethan
<br>
<p><p><p><pre>
-- 
Dr. Ethan Deneault
Assistant Professor of Physics
SC-234
University of Tampa
Tampa, FL 33615
Office: (813) 257-3555
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14266.php">Gabriele Fatigati: "[OMPI users] BTL layer"</a>
<li><strong>Previous message:</strong> <a href="14264.php">Prentice Bisbal: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>In reply to:</strong> <a href="14264.php">Prentice Bisbal: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
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
