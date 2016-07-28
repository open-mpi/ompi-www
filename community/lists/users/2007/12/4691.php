<?
$subject_val = "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 17 18:46:44 2007" -->
<!-- isoreceived="20071217234644" -->
<!-- sent="Mon, 17 Dec 2007 18:46:35 -0500" -->
<!-- isosent="20071217234635" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4" -->
<!-- id="9FB7E86B-CF74-4CE3-A7C4-CBD8161D6EE1_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071217121442.GD28587_at_minantech.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-17 18:46:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4692.php">Brian Dobbins: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<li><strong>Previous message:</strong> <a href="4690.php">Jeff Squyres: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<li><strong>In reply to:</strong> <a href="4682.php">Gleb Natapov: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4694.php">Allan Menezes: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You should run a shared memory test, to see what's the max memory  
<br>
bandwidth you can get.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Dec 17, 2007, at 7:14 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; On Sun, Dec 16, 2007 at 06:49:30PM -0500, Allan Menezes wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; How many PCI-Express Gigabit ethernet cards does OpenMPI version  
</span><br>
<span class="quotelev2">&gt;&gt; 1.2.4
</span><br>
<span class="quotelev2">&gt;&gt; support with a corresponding linear increase in bandwith measured  
</span><br>
<span class="quotelev2">&gt;&gt; with
</span><br>
<span class="quotelev2">&gt;&gt; netpipe NPmpi and openmpi mpirun?
</span><br>
<span class="quotelev2">&gt;&gt; With two PCI express cards I get a B/W of 1.75Gbps for 892Mbps each  
</span><br>
<span class="quotelev2">&gt;&gt; ans
</span><br>
<span class="quotelev2">&gt;&gt; for three pci express cards ( one built into the motherboard) i get
</span><br>
<span class="quotelev2">&gt;&gt; 1.95Gbps. They all are around 890Mbs indiviually measured with  
</span><br>
<span class="quotelev2">&gt;&gt; netpipe
</span><br>
<span class="quotelev2">&gt;&gt; and NPtcp and NPmpi and openmpi. For two it seems there is a linear
</span><br>
<span class="quotelev2">&gt;&gt; increase in b/w but not for three pci express gigabit eth cards.
</span><br>
<span class="quotelev2">&gt;&gt; I have tune the cards using netpipe and $HOME/.openmpi/mca- 
</span><br>
<span class="quotelev2">&gt;&gt; params.conf
</span><br>
<span class="quotelev2">&gt;&gt; file for latency and percentage b/w .
</span><br>
<span class="quotelev2">&gt;&gt; Please advise.
</span><br>
<span class="quotelev1">&gt; What is in your $HOME/.openmpi/mca-params.conf? May be are hitting  
</span><br>
<span class="quotelev1">&gt; your
</span><br>
<span class="quotelev1">&gt; chipset limit here. What is your HW configuration? Can you try to run
</span><br>
<span class="quotelev1">&gt; NPtcp on each interface simultaneously and see what BW do you get.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4691/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4692.php">Brian Dobbins: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<li><strong>Previous message:</strong> <a href="4690.php">Jeff Squyres: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<li><strong>In reply to:</strong> <a href="4682.php">Gleb Natapov: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4694.php">Allan Menezes: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
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
