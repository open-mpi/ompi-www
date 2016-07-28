<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 23 14:08:27 2006" -->
<!-- isoreceived="20061023180827" -->
<!-- sent="Mon, 23 Oct 2006 23:38:19 +0530 (IST)" -->
<!-- isosent="20061023180819" -->
<!-- name="Jayanta Roy" -->
<!-- email="jroy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dual Gigabit ethernet support" -->
<!-- id="Pine.LNX.4.61.0610232334150.28305_at_dhruva1.ncra.tifr.res.in" -->
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
<strong>From:</strong> Jayanta Roy (<em>jroy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-23 14:08:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2036.php">Durga Choudhury: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Previous message:</strong> <a href="2034.php">Lisandro Dalcin: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>In reply to:</strong> <a href="2033.php">George Bosilca: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2037.php">Brock Palen: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p>Yes, it is duplex BW. The BW benchmark is a simple timing call around 
<br>
MPI_Alltoall call. Then you estimate the network traffic from the sending 
<br>
buffer size and get the rate.
<br>
<p>Regards,
<br>
Jayanta
<br>
<p>On Mon, 23 Oct 2006, George Bosilca wrote:
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
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
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
<span class="quotelev2">&gt;&gt; mpirun --mca btl_tcp_if_include eth0 -n 4 -bynode -hostfile host a.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca btl_tcp_if_include eth1 -n 4 -bynode -hostfile host a.out
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
<p>~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
<br>
Jayanta Roy
<br>
National Centre for Radio Astrophysics  |  Phone  : +91-20-25697107
<br>
Tata Institute of Fundamental Research  |  Fax    : +91-20-25692149 Pune
<br>
University Campus, Pune 411 007    |  e-mail : jroy_at_[hidden]
<br>
India
<br>
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2036.php">Durga Choudhury: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Previous message:</strong> <a href="2034.php">Lisandro Dalcin: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>In reply to:</strong> <a href="2033.php">George Bosilca: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2037.php">Brock Palen: "Re: [OMPI users] dual Gigabit ethernet support"</a>
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
