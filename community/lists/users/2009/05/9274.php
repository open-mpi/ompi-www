<?
$subject_val = "[OMPI users] 4 PCI-Express Gigabit ethernet NIcs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  8 21:01:18 2009" -->
<!-- isoreceived="20090509010118" -->
<!-- sent="Fri, 08 May 2009 21:01:03 -0400" -->
<!-- isosent="20090509010103" -->
<!-- name="Allan Menezes" -->
<!-- email="amenezes007_at_[hidden]" -->
<!-- subject="[OMPI users] 4 PCI-Express Gigabit ethernet NIcs" -->
<!-- id="BLU0-SMTP717A16567C53112969746B88650_at_phx.gbl" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] 4 PCI-Express Gigabit ethernet NIcs<br>
<strong>From:</strong> Allan Menezes (<em>amenezes007_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-08 21:01:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9275.php">Brett Pemberton: "Re: [OMPI users] local config files / recursive includes"</a>
<li><strong>Previous message:</strong> <a href="9273.php">Kritiraj Sajadah: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9276.php">Jeff Squyres: "Re: [OMPI users] 4 PCI-Express Gigabit ethernet NIcs"</a>
<li><strong>Reply:</strong> <a href="9276.php">Jeff Squyres: "Re: [OMPI users] 4 PCI-Express Gigabit ethernet NIcs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Anybody,
<br>
&nbsp;&nbsp;Does openmpi version 1.3.2 for Fedora Core 10  x86_64 work with  4  
<br>
gigabit pci-express ethernet cards per node stably.
<br>
I tried  it on six Asus P5Q-VM motherboards with 4 cards and 8GB ram and 
<br>
Intel Quad core Cpus each as follows:
<br>
eth0 - intel pro 1000 pt pci express gigabit cards.
<br>
eth1 - TP LINK's TG-3468  realtek r8111B chipset pci express gigabit 
<br>
ethernet
<br>
eth2 - realtek  8111C  chipset  gigabit pci express ethernet builtv in 
<br>
on mobo
<br>
eth3 - TP LINK's TG-3468  realtek r8111B chipset pci express gigabit 
<br>
ethernet
<br>
with all using mtu's of 3000 and the latest intel and realtek drivers 
<br>
from their respective websites
<br>
and hand configured and compiled kernel 2.6.28.4
<br>
I tried hpl-2.0 and gotoblas for checking my cluster and get approx 220 
<br>
GFlops if i use
<br>
only eth0, eth1,eth3 or eth0, eth2, eth3 stably
<br>
but i get 203 GFlops with eth0, eth1,eth2,eth3 and the hpl test fail 
<br>
after about the third test.
<br>
Any help would be very much appreciated as i would like to use 4 eth 
<br>
cards per node.
<br>
Note: the measured performance of all cards is approximately 922 MBits/s 
<br>
with jumbo frames of 3000
<br>
using Netpipe and NPtcp and with four cards between two nodes i measure 
<br>
with NPmpi
<br>
compiled with openmpi approximately 3400 Mbits/s which is good! Scales 
<br>
linearly with 4 times 900 Mbits/sec
<br>
THank you,
<br>
Allan Menezes
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9275.php">Brett Pemberton: "Re: [OMPI users] local config files / recursive includes"</a>
<li><strong>Previous message:</strong> <a href="9273.php">Kritiraj Sajadah: "Re: [OMPI users] *** An error occurred in MPI_Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9276.php">Jeff Squyres: "Re: [OMPI users] 4 PCI-Express Gigabit ethernet NIcs"</a>
<li><strong>Reply:</strong> <a href="9276.php">Jeff Squyres: "Re: [OMPI users] 4 PCI-Express Gigabit ethernet NIcs"</a>
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
