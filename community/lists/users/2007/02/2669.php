<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb 12 12:27:28 2007" -->
<!-- isoreceived="20070212172728" -->
<!-- sent="Mon, 12 Feb 2007 12:27:06 -0500" -->
<!-- isosent="20070212172706" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111" -->
<!-- id="B658031C-177D-4BA0-9BF8-0A96EC933A54_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45D0A9CD.7090700_at_epfl.ch" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-12 12:27:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2670.php">Matteo Guglielmi: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>Previous message:</strong> <a href="2668.php">Matteo Guglielmi: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>In reply to:</strong> <a href="2668.php">Matteo Guglielmi: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2670.php">Matteo Guglielmi: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>Reply:</strong> <a href="2670.php">Matteo Guglielmi: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 12, 2007, at 12:54 PM, Matteo Guglielmi wrote:
<br>
<p><span class="quotelev1">&gt; This is the ifconfig output from the machine I'm used to submit the
</span><br>
<span class="quotelev1">&gt; parallel job:
</span><br>
<p>It looks like both of your nodes share an IP address:
<br>
<p><span class="quotelev1">&gt; [root_at_lcbcpc02 ~]# ifconfig
</span><br>
<span class="quotelev1">&gt; eth1      Link encap:Ethernet  HWaddr 00:15:17:10:53:C9
</span><br>
<span class="quotelev1">&gt;           inet addr:192.168.0.1  Bcast:192.168.0.255  Mask: 
</span><br>
<span class="quotelev1">&gt; 255.255.255.0
</span><br>
<span class="quotelev1">&gt; [root_at_lcbcpc04 ~]# ifconfig
</span><br>
<span class="quotelev1">&gt; eth1      Link encap:Ethernet  HWaddr 00:15:17:10:53:75
</span><br>
<span class="quotelev1">&gt;           inet addr:192.168.0.1  Bcast:192.168.0.255  Mask: 
</span><br>
<span class="quotelev1">&gt; 255.255.255.0
</span><br>
<p>This will be problematic to more than just OMPI if these two  
<br>
interfaces are on the same network.  The solution is to ensure that  
<br>
all your nodes have unique IP addresses.
<br>
<p>If these NICs are on different networks, than it's a valid network  
<br>
configuration, but Open MPI (by default) will assume that these are  
<br>
routable to each other.  You can tell Open MPI to not use eth1 in  
<br>
this case -- see this FAQ entries for details:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-multi-network">http://www.open-mpi.org/faq/?category=tcp#tcp-multi-network</a>
<br>
&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
<br>
&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-routability">http://www.open-mpi.org/faq/?category=tcp#tcp-routability</a>
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2670.php">Matteo Guglielmi: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>Previous message:</strong> <a href="2668.php">Matteo Guglielmi: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>In reply to:</strong> <a href="2668.php">Matteo Guglielmi: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2670.php">Matteo Guglielmi: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
<li><strong>Reply:</strong> <a href="2670.php">Matteo Guglielmi: "Re: [OMPI users] openMPI 1.1.4 - connect() failed with errno=111"</a>
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
