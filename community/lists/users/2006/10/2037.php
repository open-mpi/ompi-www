<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 23 14:24:08 2006" -->
<!-- isoreceived="20061023182408" -->
<!-- sent="Mon, 23 Oct 2006 14:22:55 -0400" -->
<!-- isosent="20061023182255" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dual Gigabit ethernet support" -->
<!-- id="2DBDED3F-7C4A-43BE-B28C-20AF77F85584_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="862E7AB2-1E94-4160-A0EE-4DEE5CE49B45_at_cs.utk.edu" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-23 14:22:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2038.php">Tony Ladd: "[OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Previous message:</strong> <a href="2036.php">Durga Choudhury: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>In reply to:</strong> <a href="2033.php">George Bosilca: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2034.php">Lisandro Dalcin: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We manage to get 900+ Mbps on a broadcom,  570x chip.  We run jumbo  
<br>
frames and use a force10 switch.  This is with also openmpi-1.0.2   
<br>
(have not tried rebuilding netpipe with 1.1.2)  Also see great  
<br>
results with netpipe (mpi) on infiniband.  Great work so far guys.
<br>
<p>120: 6291459 bytes      3 times --&gt;    930.47 Mbps in   51586.67 usec
<br>
121: 8388605 bytes      3 times --&gt;    932.60 Mbps in   68625.17 usec
<br>
122: 8388608 bytes      3 times --&gt;    932.65 Mbps in   68621.83 usec
<br>
123: 8388611 bytes      3 times --&gt;    932.59 Mbps in   68625.85 usec
<br>
<p><p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Oct 23, 2006, at 1:57 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I don't know what your bandwidth tester look like, but 140MB/s it's
</span><br>
<span class="quotelev1">&gt; way too much for a single Gige card, except if it's a bidirectional
</span><br>
<span class="quotelev1">&gt; bandwidth. Usually, on a new generation Gige card (Broadcom
</span><br>
<span class="quotelev1">&gt; Corporation NetXtreme BCM5751 Gigabit Ethernet PCI Express) with a
</span><br>
<span class="quotelev1">&gt; AMD processor (AMD Athlon(tm) 64 Processor 3500+) I only manage to
</span><br>
<span class="quotelev1">&gt; get around 800Mb/s out of a point-to-point transfer. With an external
</span><br>
<span class="quotelev1">&gt; card not on the OCI-express bus I barely get 600Mb/s...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why you don't use a real network performance tool such as Netpipe. At
</span><br>
<span class="quotelev1">&gt; least it will insure you that the bandwidth is the one you expect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 23, 2006, at 4:56 AM, Jayanta Roy wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sometime before I have posted doubts about using dual gigabit support
</span><br>
<span class="quotelev2">&gt;&gt; fully. See I get ~140MB/s full duplex transfer rate in each of
</span><br>
<span class="quotelev2">&gt;&gt; following
</span><br>
<span class="quotelev2">&gt;&gt; runs.....
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca btl_tcp_if_include eth0 -n 4 -bynode -hostfile host  
</span><br>
<span class="quotelev2">&gt;&gt; a.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca btl_tcp_if_include eth1 -n 4 -bynode -hostfile host  
</span><br>
<span class="quotelev2">&gt;&gt; a.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How to combine these two port or use a proper routing table in
</span><br>
<span class="quotelev2">&gt;&gt; place host
</span><br>
<span class="quotelev2">&gt;&gt; file? I am using openmpi-1.1 version.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Jayanta
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2038.php">Tony Ladd: "[OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Previous message:</strong> <a href="2036.php">Durga Choudhury: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>In reply to:</strong> <a href="2033.php">George Bosilca: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2034.php">Lisandro Dalcin: "Re: [OMPI users] dual Gigabit ethernet support"</a>
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
