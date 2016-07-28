<?
$subject_val = "Re: [OMPI users] users Digest, Vol 770, Issue 1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 17 21:28:32 2007" -->
<!-- isoreceived="20071218022832" -->
<!-- sent="Mon, 17 Dec 2007 21:28:18 -0500" -->
<!-- isosent="20071218022818" -->
<!-- name="Allan Menezes" -->
<!-- email="amenezes007_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 770, Issue 1" -->
<!-- id="47673042.1040001_at_sympatico.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.1144.1197906430.5110.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 770, Issue 1<br>
<strong>From:</strong> Allan Menezes (<em>amenezes007_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-17 21:28:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4694.php">Allan Menezes: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<li><strong>Previous message:</strong> <a href="4692.php">Brian Dobbins: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Message: 2
</span><br>
<span class="quotelev1">&gt;Date: Sun, 16 Dec 2007 18:49:30 -0500
</span><br>
<span class="quotelev1">&gt;From: Allan Menezes &lt;amenezes007_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI users] Gigabit ethernet (PCI Express) and openmpi
</span><br>
<span class="quotelev1">&gt;	v1.2.4
</span><br>
<span class="quotelev1">&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Message-ID: &lt;4765B98A.30803_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hi,
</span><br>
<span class="quotelev1">&gt; How many PCI-Express Gigabit ethernet cards does OpenMPI version 1.2.4 
</span><br>
<span class="quotelev1">&gt;support with a corresponding linear increase in bandwith measured with 
</span><br>
<span class="quotelev1">&gt;netpipe NPmpi and openmpi mpirun?
</span><br>
<span class="quotelev1">&gt;With two PCI express cards I get a B/W of 1.75Gbps for 892Mbps each ans 
</span><br>
<span class="quotelev1">&gt;for three pci express cards ( one built into the motherboard) i get 
</span><br>
<span class="quotelev1">&gt;1.95Gbps. They all are around 890Mbs indiviually measured with netpipe 
</span><br>
<span class="quotelev1">&gt;and NPtcp and NPmpi and openmpi. For two it seems there is a linear 
</span><br>
<span class="quotelev1">&gt;increase in b/w but not for three pci express gigabit eth cards.
</span><br>
<span class="quotelev1">&gt;I have tune the cards using netpipe and $HOME/.openmpi/mca-params.conf 
</span><br>
<span class="quotelev1">&gt;file for latency and percentage b/w .
</span><br>
<span class="quotelev1">&gt;Please advise.
</span><br>
<span class="quotelev1">&gt;Regards,
</span><br>
<span class="quotelev1">&gt;Allan Menezes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Message: 3
</span><br>
<span class="quotelev1">&gt;Date: Mon, 17 Dec 2007 14:14:42 +0200
</span><br>
<span class="quotelev1">&gt;From: glebn_at_[hidden] (Gleb Natapov)
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi
</span><br>
<span class="quotelev1">&gt;	v1.2.4
</span><br>
<span class="quotelev1">&gt;To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Message-ID: &lt;20071217121442.GD28587_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Sun, Dec 16, 2007 at 06:49:30PM -0500, Allan Menezes wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Hi,
</span><br>
<span class="quotelev2">&gt;&gt; How many PCI-Express Gigabit ethernet cards does OpenMPI version 1.2.4 
</span><br>
<span class="quotelev2">&gt;&gt;support with a corresponding linear increase in bandwith measured with 
</span><br>
<span class="quotelev2">&gt;&gt;netpipe NPmpi and openmpi mpirun?
</span><br>
<span class="quotelev2">&gt;&gt;With two PCI express cards I get a B/W of 1.75Gbps for 892Mbps each ans 
</span><br>
<span class="quotelev2">&gt;&gt;for three pci express cards ( one built into the motherboard) i get 
</span><br>
<span class="quotelev2">&gt;&gt;1.95Gbps. They all are around 890Mbs indiviually measured with netpipe 
</span><br>
<span class="quotelev2">&gt;&gt;and NPtcp and NPmpi and openmpi. For two it seems there is a linear 
</span><br>
<span class="quotelev2">&gt;&gt;increase in b/w but not for three pci express gigabit eth cards.
</span><br>
<span class="quotelev2">&gt;&gt;I have tune the cards using netpipe and $HOME/.openmpi/mca-params.conf 
</span><br>
<span class="quotelev2">&gt;&gt;file for latency and percentage b/w .
</span><br>
<span class="quotelev2">&gt;&gt;Please advise.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;What is in your $HOME/.openmpi/mca-params.conf? May be are hitting your
</span><br>
<span class="quotelev1">&gt;chipset limit here. What is your HW configuration? Can you try to run
</span><br>
<span class="quotelev1">&gt;NPtcp on each interface simultaneously and see what BW do you get.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;			Gleb.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Hi ,
<br>
My mca-params.conf file is:
<br>
btl_tcp_latency_eth0=171
<br>
btl_tcp_latency_eth2=50
<br>
btl_tcp_latency_eth3=71
<br>
btl_tcp_bandwidth_eth0=34
<br>
btl_tcp_bandwidth_eth2=33
<br>
btl_tcp_bandwidth_eth3=33
<br>
<p>HW config:
<br>
host a1:
<br>
On x4 PCI express a Syskonnect PCI express x1 gigabit ethernet card.
<br>
On x16 PCI express a Intel pro 1000 pt gigabit pci express x1 gigabit 
<br>
ethernet card.
<br>
Built in mobo pci express gigabit ethernet card e1000 intel 82566DM chipset
<br>
all MTUs = 1500
<br>
host a2: same hardware config as host a1
<br>
I measure the latency and b/w this way:
<br>
a1#&gt; ./NPtcp
<br>
a2#&gt;./NPtcp -h 192.168.1.1 -n 50 for eth0
<br>
a2#&gt;. /NPtcp -h 192.168.5.1 -n 50 for eth2
<br>
a2#&gt;./NPtcp -h 192.168.8.1 -n 50 for eth3
<br>
and I use the measurement straight at 64bytes as 171 micro secs for eth0
<br>
etc .. and the highest band width.
<br>
The bandwith measured for eth0 syskonnect 892Mbs latency 171microseconds
<br>
The bandwith measured for eth2 intel pro 1000 pt 892Mbs latency 
<br>
50microseconds
<br>
The bandwith measured for eth3 intel built in pci ex 888Mbs latency 
<br>
71microsecond#!/bin/sh
<br>
Linux: FC8 kernel 2.6.23.11 with marvell drivers patch 10.22.4.3
<br>
and intel e1000 version 7.6.12 from the intel website
<br>
This is how i use /opt/openmpi124b to check the b/w:
<br>
and the b/w i measure is max of 1950Mbps for three 890 Mbps gigabit pci 
<br>
express eth cards with gigabit switches for each subnet!
<br>
a1$&gt;mpirun --prefix /opt/openmpi124b --host a1,a2 -mca btl tcp,sm,self
<br>
&nbsp;-mca btl_tcp_if_include eth0,eth3,eth2
<br>
&nbsp;-mca btl_tcp_if_exclude lo,eth1,eth4 -mca oob_tcp_include eth0,eth3,eth2
<br>
&nbsp;-mca oob_tcp_exclude lo,eth1,eth4 -np 2 ./NPmpi
<br>
The motherboards are Asus P5B-VM DO and processors pentium-d intel 945
<br>
each with 2gigabytes of ddr2 667mhz ram.
<br>
Any help would bet appreciated.
<br>
Thank you,
<br>
Allan Menezes
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4693/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4694.php">Allan Menezes: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<li><strong>Previous message:</strong> <a href="4692.php">Brian Dobbins: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
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
