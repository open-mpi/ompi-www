<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 23 13:58:14 2006" -->
<!-- isoreceived="20061023175814" -->
<!-- sent="Mon, 23 Oct 2006 13:57:14 -0400" -->
<!-- isosent="20061023175714" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dual Gigabit ethernet support" -->
<!-- id="862E7AB2-1E94-4160-A0EE-4DEE5CE49B45_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.61.0610231415530.1895_at_dhruva1.ncra.tifr.res.in" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-23 13:57:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2034.php">Lisandro Dalcin: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Previous message:</strong> <a href="2032.php">Jayanta Roy: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>In reply to:</strong> <a href="2029.php">Jayanta Roy: "[OMPI users] dual Gigabit ethernet support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2035.php">Jayanta Roy: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Reply:</strong> <a href="2035.php">Jayanta Roy: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Reply:</strong> <a href="2037.php">Brock Palen: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know what your bandwidth tester look like, but 140MB/s it's  
<br>
way too much for a single Gige card, except if it's a bidirectional  
<br>
bandwidth. Usually, on a new generation Gige card (Broadcom  
<br>
Corporation NetXtreme BCM5751 Gigabit Ethernet PCI Express) with a  
<br>
AMD processor (AMD Athlon(tm) 64 Processor 3500+) I only manage to  
<br>
get around 800Mb/s out of a point-to-point transfer. With an external  
<br>
card not on the OCI-express bus I barely get 600Mb/s...
<br>
<p>Why you don't use a real network performance tool such as Netpipe. At  
<br>
least it will insure you that the bandwidth is the one you expect.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 23, 2006, at 4:56 AM, Jayanta Roy wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sometime before I have posted doubts about using dual gigabit support
</span><br>
<span class="quotelev1">&gt; fully. See I get ~140MB/s full duplex transfer rate in each of  
</span><br>
<span class="quotelev1">&gt; following
</span><br>
<span class="quotelev1">&gt; runs.....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_tcp_if_include eth0 -n 4 -bynode -hostfile host a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_tcp_if_include eth1 -n 4 -bynode -hostfile host a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How to combine these two port or use a proper routing table in  
</span><br>
<span class="quotelev1">&gt; place host
</span><br>
<span class="quotelev1">&gt; file? I am using openmpi-1.1 version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Jayanta
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
<li><strong>Next message:</strong> <a href="2034.php">Lisandro Dalcin: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Previous message:</strong> <a href="2032.php">Jayanta Roy: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>In reply to:</strong> <a href="2029.php">Jayanta Roy: "[OMPI users] dual Gigabit ethernet support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2035.php">Jayanta Roy: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Reply:</strong> <a href="2035.php">Jayanta Roy: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Reply:</strong> <a href="2037.php">Brock Palen: "Re: [OMPI users] dual Gigabit ethernet support"</a>
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
