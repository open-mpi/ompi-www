<?
$subject_val = "Re: [OMPI users] 4 PCI-Express Gigabit ethernet NIcs";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  9 07:51:10 2009" -->
<!-- isoreceived="20090509115110" -->
<!-- sent="Sat, 9 May 2009 07:51:04 -0400" -->
<!-- isosent="20090509115104" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 4 PCI-Express Gigabit ethernet NIcs" -->
<!-- id="19EFE2C0-4849-4D48-A385-6215556F2C6C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BLU0-SMTP717A16567C53112969746B88650_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] 4 PCI-Express Gigabit ethernet NIcs<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-09 07:51:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9277.php">Jeff Squyres: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<li><strong>Previous message:</strong> <a href="9275.php">Brett Pemberton: "Re: [OMPI users] local config files / recursive includes"</a>
<li><strong>In reply to:</strong> <a href="9274.php">Allan Menezes: "[OMPI users] 4 PCI-Express Gigabit ethernet NIcs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 8, 2009, at 9:01 PM, Allan Menezes wrote:
<br>
<p><span class="quotelev1">&gt;   Does openmpi version 1.3.2 for Fedora Core 10  x86_64 work with  4
</span><br>
<span class="quotelev1">&gt; gigabit pci-express ethernet cards per node stably.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>It should.  I routinely test over 3 or 4 IP interfaces (to include  
<br>
IPoIB and 1GB/10GB NICs).
<br>
<p><span class="quotelev1">&gt; I tried  it on six Asus P5Q-VM motherboards with 4 cards and 8GB ram  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; Intel Quad core Cpus each as follows:
</span><br>
<span class="quotelev1">&gt; eth0 - intel pro 1000 pt pci express gigabit cards.
</span><br>
<span class="quotelev1">&gt; eth1 - TP LINK's TG-3468  realtek r8111B chipset pci express gigabit
</span><br>
<span class="quotelev1">&gt; ethernet
</span><br>
<span class="quotelev1">&gt; eth2 - realtek  8111C  chipset  gigabit pci express ethernet builtv in
</span><br>
<span class="quotelev1">&gt; on mobo
</span><br>
<span class="quotelev1">&gt; eth3 - TP LINK's TG-3468  realtek r8111B chipset pci express gigabit
</span><br>
<span class="quotelev1">&gt; ethernet
</span><br>
<span class="quotelev1">&gt; with all using mtu's of 3000 and the latest intel and realtek drivers
</span><br>
<span class="quotelev1">&gt; from their respective websites
</span><br>
<span class="quotelev1">&gt; and hand configured and compiled kernel 2.6.28.4
</span><br>
<span class="quotelev1">&gt; I tried hpl-2.0 and gotoblas for checking my cluster and get approx  
</span><br>
<span class="quotelev1">&gt; 220
</span><br>
<span class="quotelev1">&gt; GFlops if i use
</span><br>
<span class="quotelev1">&gt; only eth0, eth1,eth3 or eth0, eth2, eth3 stably
</span><br>
<span class="quotelev1">&gt; but i get 203 GFlops with eth0, eth1,eth2,eth3 and the hpl test fail
</span><br>
<span class="quotelev1">&gt; after about the third test.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Are you saying that after three consecutive tests, the IP devices  
<br>
start failing?  If so, it sounds like a kernel / driver problem.  If  
<br>
you reboot, do the problems go away?
<br>
<p>What happens if you restrict OMPI to just 1 device and run HPL 5-10  
<br>
times on each device?  Do you see the same degradation?  E.g., can you  
<br>
localize which device is causing problems?
<br>
<p><span class="quotelev1">&gt; Any help would be very much appreciated as i would like to use 4 eth
</span><br>
<span class="quotelev1">&gt; cards per node.
</span><br>
<span class="quotelev1">&gt; Note: the measured performance of all cards is approximately 922  
</span><br>
<span class="quotelev1">&gt; MBits/s
</span><br>
<span class="quotelev1">&gt; with jumbo frames of 3000
</span><br>
<span class="quotelev1">&gt; using Netpipe and NPtcp and with four cards between two nodes i  
</span><br>
<span class="quotelev1">&gt; measure
</span><br>
<span class="quotelev1">&gt; with NPmpi
</span><br>
<span class="quotelev1">&gt; compiled with openmpi approximately 3400 Mbits/s which is good! Scales
</span><br>
<span class="quotelev1">&gt; linearly with 4 times 900 Mbits/sec
</span><br>
<span class="quotelev1">&gt; THank you,
</span><br>
<span class="quotelev1">&gt; Allan Menezes
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9277.php">Jeff Squyres: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<li><strong>Previous message:</strong> <a href="9275.php">Brett Pemberton: "Re: [OMPI users] local config files / recursive includes"</a>
<li><strong>In reply to:</strong> <a href="9274.php">Allan Menezes: "[OMPI users] 4 PCI-Express Gigabit ethernet NIcs"</a>
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
