<?
$subject_val = "Re: [OMPI users] TCP BTL and virtual network interfaces, bug #3339";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 26 16:18:20 2015" -->
<!-- isoreceived="20150126211820" -->
<!-- sent="Mon, 26 Jan 2015 21:18:16 +0000" -->
<!-- isosent="20150126211816" -->
<!-- name="Kris Kersten" -->
<!-- email="kkersten_at_[hidden]" -->
<!-- subject="Re: [OMPI users] TCP BTL and virtual network interfaces, bug #3339" -->
<!-- id="57EC03262F730743B98EC55F5CD407D96A6207_at_CFWEX01.americas.cray.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] TCP BTL and virtual network interfaces, bug #3339" -->
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
<strong>Subject:</strong> Re: [OMPI users] TCP BTL and virtual network interfaces, bug #3339<br>
<strong>From:</strong> Kris Kersten (<em>kkersten_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-26 16:18:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26239.php">DOHERTY, Greg: "[OMPI users] 1.8.1 [SEC=UNCLASSIFIED]"</a>
<li><strong>Previous message:</strong> <a href="26237.php">George Bosilca: "Re: [OMPI users] TCP BTL and virtual network interfaces, bug #3339"</a>
<li><strong>Maybe in reply to:</strong> <a href="26236.php">Kris Kersten: "[OMPI users] TCP BTL and virtual network interfaces, bug #3339"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is no high-speed network, only eth0.  So MPI communication must be TCP over eth0.  I have tried forcing eth0 with --mca btl_tcp_if_include eth0, and also by specifying the eth0 subnet.  (Looking at the btl_tcp_component.c source, I see that the subnet is just translated back into the interface name, so these are equivalent.)
<br>
<p>The problem is that including eth0 does not exclude the virtual interfaces (eth0:1 and eth0:5 in my case).  According to the bug, the linux kernel assigns the same interface index to both the physical and virtual interfaces.  Because the TCP BTL uses this kernel index to choose the interface, it can't distinguish between physical and virtual interfaces.  I can see this play out in the verbose TCP BTL output, with oob and TCP communication happening over all three subnets, rather than just the eth0 subnet.  This results in a hang.
<br>
<p>I'm looking into the possibility of using tun/tap interfaces for IMPI and system management, but I'm not sure if that's a possibility.  There is a mention of using tun/tap for MPI in the bug report, but I don't know what overhead that would have.  I was hoping that someone might have come up with some other solution.
<br>
<p>Thanks,
<br>
Kris
<br>
<p><p><span class="quotelev1">&gt; From: George Bosilca (bosilca_at_[hidden])
</span><br>
<span class="quotelev1">&gt; Date: 2015-01-26 15:19:40
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Use mpirun --mca btl_tcp_if_exclude eth0 should fix your problem. Otherwise
</span><br>
<span class="quotelev1">&gt; you can add it to your configuration file. Everything is extensively
</span><br>
<span class="quotelev1">&gt; described in the FAQ.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; George.
</span><br>
<span class="quotelev1">&gt; On Jan 26, 2015 12:11 PM, &quot;Kris Kersten&quot; &lt;kkersten_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm working on an ethernet cluster that uses virtual eth0:* interfaces
</span><br>
<span class="quotelev2">&gt; &gt; on the compute nodes for IPMI and system management.  As described in Trac
</span><br>
<span class="quotelev2">&gt; &gt; ticket #3339 (<a href="https://svn.open-mpi.org/trac/ompi/ticket/3339">https://svn.open-mpi.org/trac/ompi/ticket/3339</a> ), this
</span><br>
<span class="quotelev2">&gt; &gt; setup confuses the TCP BTL which can't differentiate between the physical
</span><br>
<span class="quotelev2">&gt; &gt; and virtual interfaces.  Verbose BTL output confirms this, showing
</span><br>
<span class="quotelev2">&gt; &gt; attempted communication on both the physical and virtual IP addresses
</span><br>
<span class="quotelev2">&gt; &gt; followed by a hang.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Has there been any progress on this bug?  Or has anyone managed to figure
</span><br>
<span class="quotelev2">&gt; &gt; out a workaround?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Kris
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26239.php">DOHERTY, Greg: "[OMPI users] 1.8.1 [SEC=UNCLASSIFIED]"</a>
<li><strong>Previous message:</strong> <a href="26237.php">George Bosilca: "Re: [OMPI users] TCP BTL and virtual network interfaces, bug #3339"</a>
<li><strong>Maybe in reply to:</strong> <a href="26236.php">Kris Kersten: "[OMPI users] TCP BTL and virtual network interfaces, bug #3339"</a>
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
