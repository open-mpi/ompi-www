<?
$subject_val = "Re: [OMPI users] Cluster : received unexpected process identifier";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  4 20:11:39 2012" -->
<!-- isoreceived="20120405001139" -->
<!-- sent="Wed, 4 Apr 2012 20:11:34 -0400" -->
<!-- isosent="20120405001134" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cluster : received unexpected process identifier" -->
<!-- id="C5DE45C1-1D0E-4DB9-8451-6D587D8F0D9A_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAFAE9jjquW+ieKHqzaVj=nxwdjd9dCz9YgNjP+CkegxQRwtx=Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cluster : received unexpected process identifier<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-04 20:11:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18948.php">Rohan Deshpande: "Re: [OMPI users] Cluster : received unexpected process identifier"</a>
<li><strong>Previous message:</strong> <a href="18946.php">Rohan Deshpande: "Re: [OMPI users] Cluster : received unexpected process identifier"</a>
<li><strong>In reply to:</strong> <a href="18946.php">Rohan Deshpande: "Re: [OMPI users] Cluster : received unexpected process identifier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18948.php">Rohan Deshpande: "Re: [OMPI users] Cluster : received unexpected process identifier"</a>
<li><strong>Reply:</strong> <a href="18948.php">Rohan Deshpande: "Re: [OMPI users] Cluster : received unexpected process identifier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 4, 2012, at 8:04 PM, Rohan Deshpande wrote:
<br>
<p><span class="quotelev1">&gt; Yes they are on same subnet. ips for example - 192.168.1.1,  192.168.1.2,  192.168.1.3
</span><br>
<p>This is generally considered a bad idea, not just for MPI, but for Linux in general.  Google around about this.  One reason, for example, is that there is no way to guarantee which IP interface traffic will actually be sent out.  For example, if you open a socket to a peer IP address (e.g., 192.168.1.10), which IP address will be used to create that socket -- .1, .2, or .3?  There's no way to know.
<br>
<p>(this is actually exactly the scenario that OMPI was complaining about; it got a socket from an unexpected IP address, and therefore got confused and basically said, &quot;hey human, go figure this out&quot;)
<br>
<p>You need to put your IP interfaces on different IP subnets.  E.g., have eth0 on 192.168.1.x/24, eth1 on 192.168.2.x/24, and eth2 on 192.168.3.x/24.  It depends on how your networks are configured and what hardware you have -- you can implement this with switch-based VLANs (e.g., the ports that the 1.x wires go into are hard-wired to VLAN 10, the ports that the 2.x wires go into are hard-wired to VLAN 20, etc.), or using multiple switches (e.g., each 1.x wire goes to switch A, each 2.x wire goes to switch B, etc.).
<br>
<p>Make sense?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18948.php">Rohan Deshpande: "Re: [OMPI users] Cluster : received unexpected process identifier"</a>
<li><strong>Previous message:</strong> <a href="18946.php">Rohan Deshpande: "Re: [OMPI users] Cluster : received unexpected process identifier"</a>
<li><strong>In reply to:</strong> <a href="18946.php">Rohan Deshpande: "Re: [OMPI users] Cluster : received unexpected process identifier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18948.php">Rohan Deshpande: "Re: [OMPI users] Cluster : received unexpected process identifier"</a>
<li><strong>Reply:</strong> <a href="18948.php">Rohan Deshpande: "Re: [OMPI users] Cluster : received unexpected process identifier"</a>
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
