<?
$subject_val = "Re: [OMPI users] Question on handling of memory for communications";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  8 14:06:23 2013" -->
<!-- isoreceived="20130708180623" -->
<!-- sent="Mon, 8 Jul 2013 18:05:49 +0000" -->
<!-- isosent="20130708180549" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on handling of memory for communications" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F6F380D_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CA+OO3AXWYEK_EhH6g6vD4XpPBU24VEyyQR9=dE_K7W5Qn6J=Yg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question on handling of memory for communications<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-08 14:05:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22287.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Previous message:</strong> <a href="22285.php">Brice Goglin: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>In reply to:</strong> <a href="22279.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Cisco hasn't been involved in IB for several years, so I can't comment on that directly.
<br>
<p>That being said, our Cisco VIC devices are PCI gen *2*, but they are x16 (not x8).  We can get full bandwidth out of out 2*10Gb device from remote NUMA nodes on E5-2690-based machines (Sandy Bridge) for large messages.  In the lab, we have... tweaked... versions of those devices that give significantly higher bandwidth (it's no secret that the ASIC on these devices is capable of 80Gb).
<br>
<p>We haven't looked for this specific issue, but I can confirm that we have seen the bandwidth that we expected out of our devices.
<br>
<p><p>On Jul 8, 2013, at 12:27 PM, Michael Thomadakis &lt;drmichaelt7777_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; People have mentioned that they experience unexpected slow downs in PCIe_gen3 I/O when the pages map to a socket different from the one the HCA connects to. It is speculated that the inter-socket QPI is not provisioned to transfer more than 1GiB/sec for PCIe_gen 3 traffic. This situation may not be in effect on all SandyBrige or IvyBridge systems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have you measured anything like this on you systems as well? That would require using physical memory mapped to the socket w/o HCA exclusively for MPI messaging.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mike
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 8, 2013 at 10:52 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Jul 8, 2013, at 11:35 AM, Michael Thomadakis &lt;drmichaelt7777_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The issue is that when you read or write PCIe_gen 3 dat to a non-local NUMA memory, SandyBridge will use the inter-socket QPIs to get this data across to the other socket. I think there is considerable limitation in PCIe I/O traffic data going over the inter-socket QPI. One way to get around this is for reads to buffer all data into memory space local to the same socket and then transfer them by code across to the other socket's physical memory. For writes the same approach can be used with intermediary process copying data.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sure, you'll cause congestion across the QPI network when you do non-local PCI reads/writes.  That's a given.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I'm not aware of a hardware limitation on PCI-requested traffic across QPI (I could be wrong, of course -- I'm a software guy, not a hardware guy).  A simple test would be to bind an MPI process to a far NUMA node and run a simple MPI bandwidth test and see if to get better/same/worse bandwidth compared to binding an MPI process on a near NUMA socket.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But in terms of doing intermediate (pipelined) reads/writes to local NUMA memory before reading/writing to PCI, no, Open MPI does not do this.  Unless there is a PCI-QPI bandwidth constraint that we're unaware of, I'm not sure why you would do this -- it would likely add considerable complexity to the code and it would definitely lead to higher overall MPI latency.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Don't forget that the MPI paradigm is for the application to provide the send/receive buffer.  Meaning: MPI doesn't (always) control where the buffer is located (particularly for large messages).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I was wondering if OpenMPI does anything special memory mapping to work around this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just what I mentioned in the prior email.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; And if with Ivy Bridge (or Haswell) he situation has improved.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI doesn't treat these chips any different.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22287.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Previous message:</strong> <a href="22285.php">Brice Goglin: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>In reply to:</strong> <a href="22279.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
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
