<?
$subject_val = "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 17 22:38:15 2007" -->
<!-- isoreceived="20071218033815" -->
<!-- sent="Mon, 17 Dec 2007 22:38:07 -0500" -->
<!-- isosent="20071218033807" -->
<!-- name="Aurelien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4" -->
<!-- id="8CAEBD10-0588-40C8-A5E5-6BB293E1FE4C_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="476735C4.10604_at_sympatico.ca" -->
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
<strong>From:</strong> Aurelien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-17 22:38:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4696.php">Damien Hocking: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<li><strong>Previous message:</strong> <a href="4694.php">Allan Menezes: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<li><strong>In reply to:</strong> <a href="4694.php">Allan Menezes: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4696.php">Damien Hocking: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<li><strong>Reply:</strong> <a href="4696.php">Damien Hocking: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Allan,
<br>
<p>This suggest that your chipset is not able to handle the full PCI-E  
<br>
speed on more than 3 ports. This usually depends on the way the PCI-E  
<br>
links are wired trough the ports and the capacity of the chipset  
<br>
itself. As an exemple we were never able to reach fullspeed  
<br>
performance with Myrinet 10g on IBM e325 nodes, because of chipset  
<br>
limitations. We had to make the node changed to solve the issue.  
<br>
Running several instances of NPtcp should somewhat show the bandwith  
<br>
limit of the PCI-E bus on your machine.
<br>
<p>Aurelien
<br>
<p><p>Le 17 d&#233;c. 07 &#224; 21:51, Allan Menezes a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Hi George, The following test peaks at 8392Mpbs: mpirun --prefix
</span><br>
<span class="quotelev1">&gt; /opt/opnmpi124b --host a1,a1 -mca btl tcp,sm,self -np 2 ./NPmpi on a1
</span><br>
<span class="quotelev1">&gt; and on a2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --prefix /opt/opnmpi124b --host a2,a2 -mca btl tcp,sm,self - 
</span><br>
<span class="quotelev1">&gt; np 2 ./NPmpi
</span><br>
<span class="quotelev1">&gt; gives 8565Mbps
</span><br>
<span class="quotelev1">&gt; --(a)
</span><br>
<span class="quotelev1">&gt; on a1:
</span><br>
<span class="quotelev1">&gt; mpirun --prefix /opt/opnmpi124b --host a1,a1  -np 2 ./NPmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gives 8424Mbps on a2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --prefix /opt/opnmpi124b --host a2,a2 -np 2 ./NPmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gives 8372Mbps So theres enough memory and processor b/w to give  
</span><br>
<span class="quotelev1">&gt; 2.7Gbps
</span><br>
<span class="quotelev1">&gt; for 3 pci express eth cards especially from --(a) between a1 and a2?
</span><br>
<span class="quotelev1">&gt; Thank you for your help. Any assistance would be greatly apprectiated!
</span><br>
<span class="quotelev1">&gt; Regards, Allan Menezes You should run a shared memory test, to see
</span><br>
<span class="quotelev1">&gt; what's the max memory bandwidth you can get. Thanks, george. On Dec  
</span><br>
<span class="quotelev1">&gt; 17,
</span><br>
<span class="quotelev1">&gt; 2007, at 7:14 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sun, Dec 16, 2007 at 06:49:30PM -0500, Allan Menezes wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; How many PCI-Express Gigabit ethernet cards does OpenMPI version
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1.2.4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; support with a corresponding linear increase in bandwith measured
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; netpipe NPmpi and openmpi mpirun?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; With two PCI express cards I get a B/W of 1.75Gbps for 892Mbps  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; each
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ans
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for three pci express cards ( one built into the motherboard) i  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; get
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1.95Gbps. They all are around 890Mbs indiviually measured with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; netpipe
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and NPtcp and NPmpi and openmpi. For two it seems there is a  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; linear
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; increase in b/w but not for three pci express gigabit eth cards.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have tune the cards using netpipe and $HOME/.openmpi/mca-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; params.conf
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; file for latency and percentage b/w .
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Please advise.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What is in your $HOME/.openmpi/mca-params.conf? May be are hitting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; chipset limit here. What is your HW configuration? Can you try to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NPtcp on each interface simultaneously and see what BW do you get.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 			Gleb.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p><pre>
--
Dr. Aurelien Bouteiller, Sr. Research Associate
Innovative Computing Laboratory - MPI group
+1 865 974 6321
1122 Volunteer Boulevard
Claxton Education Building Suite 350
Knoxville, TN 37996
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4696.php">Damien Hocking: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<li><strong>Previous message:</strong> <a href="4694.php">Allan Menezes: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<li><strong>In reply to:</strong> <a href="4694.php">Allan Menezes: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4696.php">Damien Hocking: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<li><strong>Reply:</strong> <a href="4696.php">Damien Hocking: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
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
