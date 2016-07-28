<?
$subject_val = "Re: [OMPI users] Cluster : received unexpected process identifier";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  5 03:58:48 2012" -->
<!-- isoreceived="20120405075848" -->
<!-- sent="Thu, 5 Apr 2012 15:58:44 +0800" -->
<!-- isosent="20120405075844" -->
<!-- name="Rohan Deshpande" -->
<!-- email="rohand87_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cluster : received unexpected process identifier" -->
<!-- id="CAFAE9jihhD221t0vXLr3c+wxk5ALZ=csJg=0Rzw1i7n1pDqLNw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C5DE45C1-1D0E-4DB9-8451-6D587D8F0D9A_at_cisco.com" -->
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
<strong>From:</strong> Rohan Deshpande (<em>rohand87_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-05 03:58:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18949.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Previous message:</strong> <a href="18947.php">Jeffrey Squyres: "Re: [OMPI users] Cluster : received unexpected process identifier"</a>
<li><strong>In reply to:</strong> <a href="18947.php">Jeffrey Squyres: "Re: [OMPI users] Cluster : received unexpected process identifier"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I actually had too many Ethernet ports open.
<br>
<p>When specify which Ethernet to use by  btl_tcp_if_include the program works
<br>
like a charm :)
<br>
<p>Thanks for inputs.
<br>
<p>Cheers
<br>
<p>On Thu, Apr 5, 2012 at 8:11 AM, Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 4, 2012, at 8:04 PM, Rohan Deshpande wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes they are on same subnet. ips for example - 192.168.1.1,
</span><br>
<span class="quotelev1">&gt;  192.168.1.2,  192.168.1.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is generally considered a bad idea, not just for MPI, but for Linux
</span><br>
<span class="quotelev1">&gt; in general.  Google around about this.  One reason, for example, is that
</span><br>
<span class="quotelev1">&gt; there is no way to guarantee which IP interface traffic will actually be
</span><br>
<span class="quotelev1">&gt; sent out.  For example, if you open a socket to a peer IP address (e.g.,
</span><br>
<span class="quotelev1">&gt; 192.168.1.10), which IP address will be used to create that socket -- .1,
</span><br>
<span class="quotelev1">&gt; .2, or .3?  There's no way to know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (this is actually exactly the scenario that OMPI was complaining about; it
</span><br>
<span class="quotelev1">&gt; got a socket from an unexpected IP address, and therefore got confused and
</span><br>
<span class="quotelev1">&gt; basically said, &quot;hey human, go figure this out&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You need to put your IP interfaces on different IP subnets.  E.g., have
</span><br>
<span class="quotelev1">&gt; eth0 on 192.168.1.x/24, eth1 on 192.168.2.x/24, and eth2 on 192.168.3.x/24.
</span><br>
<span class="quotelev1">&gt;  It depends on how your networks are configured and what hardware you have
</span><br>
<span class="quotelev1">&gt; -- you can implement this with switch-based VLANs (e.g., the ports that the
</span><br>
<span class="quotelev1">&gt; 1.x wires go into are hard-wired to VLAN 10, the ports that the 2.x wires
</span><br>
<span class="quotelev1">&gt; go into are hard-wired to VLAN 20, etc.), or using multiple switches (e.g.,
</span><br>
<span class="quotelev1">&gt; each 1.x wire goes to switch A, each 2.x wire goes to switch B, etc.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Best Regards,
ROHAN DESHPANDE
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18948/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18949.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Previous message:</strong> <a href="18947.php">Jeffrey Squyres: "Re: [OMPI users] Cluster : received unexpected process identifier"</a>
<li><strong>In reply to:</strong> <a href="18947.php">Jeffrey Squyres: "Re: [OMPI users] Cluster : received unexpected process identifier"</a>
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
