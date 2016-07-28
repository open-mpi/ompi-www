<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 29 09:15:33 2006" -->
<!-- isoreceived="20060829131533" -->
<!-- sent="Tue, 29 Aug 2006 07:15:38 -0600" -->
<!-- isosent="20060829131538" -->
<!-- name="Richard L. Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dual Gigabit ethernet support" -->
<!-- id="81AE8040-6F7D-4218-BFB1-0456EE91FD90_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.61.0608222021240.29186_at_dhruva1.ncra.tifr.res.in" -->
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
<strong>From:</strong> Richard L. Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-29 09:15:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1788.php">Marcelo Stival: "[OMPI users] Short Long messages when synchronous"</a>
<li><strong>Previous message:</strong> <a href="1786.php">Jeff Squyres: "[OMPI users] FW: EuroPVM/MPI 2006: Open Forum - invitation to participate"</a>
<li><strong>In reply to:</strong> <a href="1766.php">Jayanta Roy: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Remember that the kernel uses a fair amount of cpu time in the case  
<br>
of TCP,
<br>
and the network portion of the transfer (where you would gain in  
<br>
parallelism)
<br>
is relatively small.  One sees most of the advantages of network  
<br>
parallelism,
<br>
with respect to performance, when the on-host network protocol is low  
<br>
relative
<br>
to the network processing, which at this stage is mostly with OS  
<br>
bypass type
<br>
protocols...
<br>
<p>Rich
<br>
<p>On Aug 22, 2006, at 9:00 AM, Jayanta Roy wrote:
<br>
<p><span class="quotelev1">&gt; Hi Galen,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The GigE is on the ESB2.  This lives on a 4GB/sec link to the MCH.
</span><br>
<span class="quotelev1">&gt; I believe we aren't really running close to the I/O bandwidth limit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This MPI transfer uses both the ports as there are increment in RX  
</span><br>
<span class="quotelev1">&gt; and TX bytes
</span><br>
<span class="quotelev1">&gt; of both eth0 and eth1. But I am getting the same bandwidth with or  
</span><br>
<span class="quotelev1">&gt; without
</span><br>
<span class="quotelev1">&gt; using &quot;--mca btl_tcp_if_include eth0&quot; in the mpirun command line.  
</span><br>
<span class="quotelev1">&gt; Are we
</span><br>
<span class="quotelev1">&gt; missing something? Or I have to go for linux ethernet channel bonding?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Jayanta
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, 22 Aug 2006, Galen M. Shipman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jayanta,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What is your bus on this machine? If it is PCI-X 133 you are going  
</span><br>
<span class="quotelev2">&gt;&gt; to be
</span><br>
<span class="quotelev2">&gt;&gt; limited, also memory bandwidth could also be the bottleneck.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Galen
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jayanta Roy wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In between two nodes I have dual Gigabit ethernet full duplex  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; links. I was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doing benchmarking using non-blocking MPI send and receive. But I am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; getting only speed corresponds to one Gigabit ethernet full  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; duplex link
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (&lt; 2Gbps). I have checked using ifconfig, this transfer is using  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; both the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ports, then why I am not getting full throughput from dual Gigabit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ethernet ports? Can anyone please help me in this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jayanta
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ~~~~
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jayanta Roy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; National Centre for Radio Astrophysics  |  Phone  : +91-20-25697107
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tata Institute of Fundamental Research  |  Fax    :  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +91-20-25692149 Pune
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University Campus, Pune 411 007    |  e-mail : jroy_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; India
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ~~~~
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ 
</span><br>
<span class="quotelev1">&gt; ~~
</span><br>
<span class="quotelev1">&gt; Jayanta Roy
</span><br>
<span class="quotelev1">&gt; National Centre for Radio Astrophysics  |  Phone  : +91-20-25697107
</span><br>
<span class="quotelev1">&gt; Tata Institute of Fundamental Research  |  Fax    : +91-20-25692149  
</span><br>
<span class="quotelev1">&gt; Pune
</span><br>
<span class="quotelev1">&gt; University Campus, Pune 411 007    |  e-mail : jroy_at_[hidden]
</span><br>
<span class="quotelev1">&gt; India
</span><br>
<span class="quotelev1">&gt; ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ 
</span><br>
<span class="quotelev1">&gt; ~~
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
<li><strong>Next message:</strong> <a href="1788.php">Marcelo Stival: "[OMPI users] Short Long messages when synchronous"</a>
<li><strong>Previous message:</strong> <a href="1786.php">Jeff Squyres: "[OMPI users] FW: EuroPVM/MPI 2006: Open Forum - invitation to participate"</a>
<li><strong>In reply to:</strong> <a href="1766.php">Jayanta Roy: "Re: [OMPI users] dual Gigabit ethernet support"</a>
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
