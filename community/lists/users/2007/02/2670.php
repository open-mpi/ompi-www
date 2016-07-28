<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb 12 13:32:28 2007" -->
<!-- isoreceived="20070212183228" -->
<!-- sent="Mon, 12 Feb 2007 19:34:48 +0000" -->
<!-- isosent="20070212193448" -->
<!-- name="Matteo Guglielmi" -->
<!-- email="matteo.guglielmi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111" -->
<!-- id="45D0C158.3030802_at_epfl.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B658031C-177D-4BA0-9BF8-0A96EC933A54_at_cisco.com" -->
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
<strong>From:</strong> Matteo Guglielmi (<em>matteo.guglielmi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-12 14:34:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2671.php">Jeff Squyres: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>Previous message:</strong> <a href="2669.php">Jeff Squyres: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>In reply to:</strong> <a href="2669.php">Jeff Squyres: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2671.php">Jeff Squyres: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>Reply:</strong> <a href="2671.php">Jeff Squyres: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Feb 12, 2007, at 12:54 PM, Matteo Guglielmi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; This is the ifconfig output from the machine I'm used to submit the
</span><br>
<span class="quotelev2">&gt;&gt; parallel job:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like both of your nodes share an IP address:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_lcbcpc02 ~]# ifconfig
</span><br>
<span class="quotelev2">&gt;&gt; eth1      Link encap:Ethernet  HWaddr 00:15:17:10:53:C9
</span><br>
<span class="quotelev2">&gt;&gt;           inet addr:192.168.0.1  Bcast:192.168.0.255  Mask: 
</span><br>
<span class="quotelev2">&gt;&gt; 255.255.255.0
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_lcbcpc04 ~]# ifconfig
</span><br>
<span class="quotelev2">&gt;&gt; eth1      Link encap:Ethernet  HWaddr 00:15:17:10:53:75
</span><br>
<span class="quotelev2">&gt;&gt;           inet addr:192.168.0.1  Bcast:192.168.0.255  Mask: 
</span><br>
<span class="quotelev2">&gt;&gt; 255.255.255.0
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will be problematic to more than just OMPI if these two  
</span><br>
<span class="quotelev1">&gt; interfaces are on the same network.  The solution is to ensure that  
</span><br>
<span class="quotelev1">&gt; all your nodes have unique IP addresses.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If these NICs are on different networks, than it's a valid network  
</span><br>
<span class="quotelev1">&gt; configuration, but Open MPI (by default) will assume that these are  
</span><br>
<span class="quotelev1">&gt; routable to each other.  You can tell Open MPI to not use eth1 in  
</span><br>
<span class="quotelev1">&gt; this case -- see this FAQ entries for details:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-multi-network">http://www.open-mpi.org/faq/?category=tcp#tcp-multi-network</a>
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/faq/?category=tcp#tcp-routability">http://www.open-mpi.org/faq/?category=tcp#tcp-routability</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Those nic &quot;eth1&quot; are not connected at all... all the machines use only
<br>
the eth0
<br>
interface which have different IP for each PC.
<br>
<p>Anyway you solved my problem suggesting me those FAQ entries!!!
<br>
<p>*--mca btl_tcp_if_exclude lo,eth1
<br>
<p>that's the magic option which works for me!!!
<br>
<p><p>*
<br>
<p><p><p>Thanks Jeff!!!
<br>
Thanks!!!!
<br>
<p>MG.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2670/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2671.php">Jeff Squyres: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>Previous message:</strong> <a href="2669.php">Jeff Squyres: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>In reply to:</strong> <a href="2669.php">Jeff Squyres: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2671.php">Jeff Squyres: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>Reply:</strong> <a href="2671.php">Jeff Squyres: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
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
