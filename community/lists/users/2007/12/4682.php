<?
$subject_val = "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 17 07:14:48 2007" -->
<!-- isoreceived="20071217121448" -->
<!-- sent="Mon, 17 Dec 2007 14:14:42 +0200" -->
<!-- isosent="20071217121442" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4" -->
<!-- id="20071217121442.GD28587_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4765B98A.30803_at_sympatico.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-17 07:14:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4683.php">Marco Sbrighi: "[OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<li><strong>Previous message:</strong> <a href="4681.php">Allan Menezes: "[OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<li><strong>In reply to:</strong> <a href="4681.php">Allan Menezes: "[OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4691.php">George Bosilca: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<li><strong>Reply:</strong> <a href="4691.php">George Bosilca: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, Dec 16, 2007 at 06:49:30PM -0500, Allan Menezes wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;  How many PCI-Express Gigabit ethernet cards does OpenMPI version 1.2.4 
</span><br>
<span class="quotelev1">&gt; support with a corresponding linear increase in bandwith measured with 
</span><br>
<span class="quotelev1">&gt; netpipe NPmpi and openmpi mpirun?
</span><br>
<span class="quotelev1">&gt; With two PCI express cards I get a B/W of 1.75Gbps for 892Mbps each ans 
</span><br>
<span class="quotelev1">&gt; for three pci express cards ( one built into the motherboard) i get 
</span><br>
<span class="quotelev1">&gt; 1.95Gbps. They all are around 890Mbs indiviually measured with netpipe 
</span><br>
<span class="quotelev1">&gt; and NPtcp and NPmpi and openmpi. For two it seems there is a linear 
</span><br>
<span class="quotelev1">&gt; increase in b/w but not for three pci express gigabit eth cards.
</span><br>
<span class="quotelev1">&gt; I have tune the cards using netpipe and $HOME/.openmpi/mca-params.conf 
</span><br>
<span class="quotelev1">&gt; file for latency and percentage b/w .
</span><br>
<span class="quotelev1">&gt; Please advise.
</span><br>
What is in your $HOME/.openmpi/mca-params.conf? May be are hitting your
<br>
chipset limit here. What is your HW configuration? Can you try to run
<br>
NPtcp on each interface simultaneously and see what BW do you get.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4683.php">Marco Sbrighi: "[OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<li><strong>Previous message:</strong> <a href="4681.php">Allan Menezes: "[OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<li><strong>In reply to:</strong> <a href="4681.php">Allan Menezes: "[OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4691.php">George Bosilca: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<li><strong>Reply:</strong> <a href="4691.php">George Bosilca: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
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
