<?
$subject_val = "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 17 21:52:04 2007" -->
<!-- isoreceived="20071218025204" -->
<!-- sent="Mon, 17 Dec 2007 21:51:48 -0500" -->
<!-- isosent="20071218025148" -->
<!-- name="Allan Menezes" -->
<!-- email="amenezes007_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4" -->
<!-- id="476735C4.10604_at_sympatico.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4" -->
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
<strong>From:</strong> Allan Menezes (<em>amenezes007_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-17 21:51:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4695.php">Aurelien Bouteiller: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<li><strong>Previous message:</strong> <a href="4693.php">Allan Menezes: "Re: [OMPI users] users Digest, Vol 770, Issue 1"</a>
<li><strong>Maybe in reply to:</strong> <a href="4681.php">Allan Menezes: "[OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4695.php">Aurelien Bouteiller: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<li><strong>Reply:</strong> <a href="4695.php">Aurelien Bouteiller: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George, The following test peaks at 8392Mpbs: mpirun --prefix 
<br>
/opt/opnmpi124b --host a1,a1 -mca btl tcp,sm,self -np 2 ./NPmpi on a1 
<br>
and on a2
<br>
<p>mpirun --prefix /opt/opnmpi124b --host a2,a2 -mca btl tcp,sm,self -np 2 ./NPmpi
<br>
gives 8565Mbps 
<br>
--(a)
<br>
on a1:
<br>
mpirun --prefix /opt/opnmpi124b --host a1,a1  -np 2 ./NPmpi
<br>
<p>gives 8424Mbps on a2:
<br>
<p>mpirun --prefix /opt/opnmpi124b --host a2,a2 -np 2 ./NPmpi
<br>
<p>gives 8372Mbps So theres enough memory and processor b/w to give 2.7Gbps 
<br>
for 3 pci express eth cards especially from --(a) between a1 and a2? 
<br>
Thank you for your help. Any assistance would be greatly apprectiated! 
<br>
Regards, Allan Menezes You should run a shared memory test, to see 
<br>
what's the max memory bandwidth you can get. Thanks, george. On Dec 17, 
<br>
2007, at 7:14 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev2">&gt;&gt; On Sun, Dec 16, 2007 at 06:49:30PM -0500, Allan Menezes wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; How many PCI-Express Gigabit ethernet cards does OpenMPI version  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1.2.4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; support with a corresponding linear increase in bandwith measured  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; netpipe NPmpi and openmpi mpirun?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; With two PCI express cards I get a B/W of 1.75Gbps for 892Mbps each  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ans
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for three pci express cards ( one built into the motherboard) i get
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1.95Gbps. They all are around 890Mbs indiviually measured with  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; netpipe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and NPtcp and NPmpi and openmpi. For two it seems there is a linear
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; increase in b/w but not for three pci express gigabit eth cards.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have tune the cards using netpipe and $HOME/.openmpi/mca- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; params.conf
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; file for latency and percentage b/w .
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please advise.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What is in your $HOME/.openmpi/mca-params.conf? May be are hitting  
</span><br>
<span class="quotelev2">&gt;&gt; your
</span><br>
<span class="quotelev2">&gt;&gt; chipset limit here. What is your HW configuration? Can you try to run
</span><br>
<span class="quotelev2">&gt;&gt; NPtcp on each interface simultaneously and see what BW do you get.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; 			Gleb.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4695.php">Aurelien Bouteiller: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<li><strong>Previous message:</strong> <a href="4693.php">Allan Menezes: "Re: [OMPI users] users Digest, Vol 770, Issue 1"</a>
<li><strong>Maybe in reply to:</strong> <a href="4681.php">Allan Menezes: "[OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4695.php">Aurelien Bouteiller: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<li><strong>Reply:</strong> <a href="4695.php">Aurelien Bouteiller: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
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
