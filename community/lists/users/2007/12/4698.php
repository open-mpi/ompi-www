<?
$subject_val = "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 18 01:55:39 2007" -->
<!-- isoreceived="20071218065539" -->
<!-- sent="Tue, 18 Dec 2007 01:55:25 -0500" -->
<!-- isosent="20071218065525" -->
<!-- name="Allan Menezes" -->
<!-- email="amenezes007_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4" -->
<!-- id="47676EDD.2030101_at_sympatico.ca" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Date:</strong> 2007-12-18 01:55:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4699.php">Ralph H Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Previous message:</strong> <a href="4697.php">Allan Menezes: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<li><strong>Maybe in reply to:</strong> <a href="4681.php">Allan Menezes: "[OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4722.php">Allan Menezes: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to add. My whole cluster is intel em64t or x86_64 and with 
<br>
openmpiv1.2.4 i was getting for two pc express intel gigabit and a 
<br>
pciexpress gigabit ethernet Syskonnect @ 888, 892 and 892 Mbps  measured 
<br>
using NPtcp a sum total bandwidth of 1950Mbps on two identical different 
<br>
systems connected by three gigabit switches. But by changing to the beta 
<br>
version of openmpi, version 1.3a1r16973 nightly and recompiling NPtcp( 
<br>
which does not matter since it uses gcc) and NPmpi which uses the newer 
<br>
mpicc I get for the same setting between two seperate identical nodes 
<br>
2583Mbps which is a 3 fold increase in bandwidth! The MTU in all was 
<br>
default of 1500 for all eth cards and both trials. I am using Fedora 
<br>
Core 8, x86_64 for the operating system.
<br>
Allan Menezes
<br>
<p>Hi,
<br>
&nbsp;I found the problem. It's a bug with openmpi v 1.2.4 i think. As below 
<br>
tests confirm(AND an big THANKS to George!) I compiled openmpi v 
<br>
1.3a1r16973 and tried the same tests with the same mca-params.conf file 
<br>
and got for three pci express gigabit ethernet cards a total bandwidth 
<br>
of 2583Mbps  which is close to 892+892+888=2672Mbps for a linear 
<br>
increase in b/w everything else the same except for a recompilation of 
<br>
NPmpi and Nptcp of netpipe. NPmpi uses mpicc to compile NPmpi whereas 
<br>
NPtcp is compiled with gcc!
<br>
I am now going to do some benchmarking with hpl of my basement cluster 
<br>
with openmpi v 1.3a1r16973 for increase in performnce and stability. V 
<br>
1.2.4 is stable and completes all 18 hpl tests without errors!
<br>
With openmpi v1.24 and NPmpi compiled wit's mpicc and using the shared 
<br>
memory commands below in --(a) I get for ./NPmpi -u 100000000 negative 
<br>
numbers for performance above approx 200Mbytes.
<br>
Some sort of  overflow in v1.2.4.
<br>
Thank you,
<br>
Regards,
<br>
Allan Menezes
<br>
<p>Hi George, The following test peaks at 8392Mpbs: mpirun --prefix 
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
<li><strong>Next message:</strong> <a href="4699.php">Ralph H Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Previous message:</strong> <a href="4697.php">Allan Menezes: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<li><strong>Maybe in reply to:</strong> <a href="4681.php">Allan Menezes: "[OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4722.php">Allan Menezes: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
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
