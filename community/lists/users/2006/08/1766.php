<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 22 11:00:14 2006" -->
<!-- isoreceived="20060822150014" -->
<!-- sent="Tue, 22 Aug 2006 20:30:10 +0530 (IST)" -->
<!-- isosent="20060822150010" -->
<!-- name="Jayanta Roy" -->
<!-- email="jroy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dual Gigabit ethernet support" -->
<!-- id="Pine.LNX.4.61.0608222021240.29186_at_dhruva1.ncra.tifr.res.in" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44EB0F2E.6020104_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-08-22 11:00:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1767.php">Brian Granger: "[OMPI users] Dynamically loading mpi on Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="1765.php">Durga Choudhury: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>In reply to:</strong> <a href="1764.php">Galen M. Shipman: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1787.php">Richard L. Graham: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Reply:</strong> <a href="1787.php">Richard L. Graham: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Galen,
<br>
<p>The GigE is on the ESB2.  This lives on a 4GB/sec link to the MCH.
<br>
I believe we aren't really running close to the I/O bandwidth limit.
<br>
<p>This MPI transfer uses both the ports as there are increment in RX and TX bytes
<br>
of both eth0 and eth1. But I am getting the same bandwidth with or without 
<br>
using &quot;--mca btl_tcp_if_include eth0&quot; in the mpirun command line. Are we 
<br>
missing something? Or I have to go for linux ethernet channel bonding?
<br>
<p>Regards,
<br>
Jayanta
<br>
<p>On Tue, 22 Aug 2006, Galen M. Shipman wrote:
<br>
<p><span class="quotelev1">&gt; Jayanta,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is your bus on this machine? If it is PCI-X 133 you are going to be
</span><br>
<span class="quotelev1">&gt; limited, also memory bandwidth could also be the bottleneck.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Galen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jayanta Roy wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In between two nodes I have dual Gigabit ethernet full duplex links. I was
</span><br>
<span class="quotelev2">&gt;&gt; doing benchmarking using non-blocking MPI send and receive. But I am
</span><br>
<span class="quotelev2">&gt;&gt; getting only speed corresponds to one Gigabit ethernet full duplex link
</span><br>
<span class="quotelev2">&gt;&gt; (&lt; 2Gbps). I have checked using ifconfig, this transfer is using both the
</span><br>
<span class="quotelev2">&gt;&gt; ports, then why I am not getting full throughput from dual Gigabit
</span><br>
<span class="quotelev2">&gt;&gt; ethernet ports? Can anyone please help me in this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Jayanta
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
</span><br>
<span class="quotelev2">&gt;&gt; Jayanta Roy
</span><br>
<span class="quotelev2">&gt;&gt; National Centre for Radio Astrophysics  |  Phone  : +91-20-25697107
</span><br>
<span class="quotelev2">&gt;&gt; Tata Institute of Fundamental Research  |  Fax    : +91-20-25692149 Pune
</span><br>
<span class="quotelev2">&gt;&gt; University Campus, Pune 411 007    |  e-mail : jroy_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; India
</span><br>
<span class="quotelev2">&gt;&gt; ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="1767.php">Brian Granger: "[OMPI users] Dynamically loading mpi on Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="1765.php">Durga Choudhury: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>In reply to:</strong> <a href="1764.php">Galen M. Shipman: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1787.php">Richard L. Graham: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Reply:</strong> <a href="1787.php">Richard L. Graham: "Re: [OMPI users] dual Gigabit ethernet support"</a>
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
