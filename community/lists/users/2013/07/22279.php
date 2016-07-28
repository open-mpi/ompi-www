<?
$subject_val = "Re: [OMPI users] Question on handling of memory for communications";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  8 12:27:20 2013" -->
<!-- isoreceived="20130708162720" -->
<!-- sent="Mon, 8 Jul 2013 11:27:16 -0500" -->
<!-- isosent="20130708162716" -->
<!-- name="Michael Thomadakis" -->
<!-- email="drmichaelt7777_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on handling of memory for communications" -->
<!-- id="CA+OO3AXWYEK_EhH6g6vD4XpPBU24VEyyQR9=dE_K7W5Qn6J=Yg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F6F2E91_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> Michael Thomadakis (<em>drmichaelt7777_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-08 12:27:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22280.php">Brice Goglin: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Previous message:</strong> <a href="22278.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>In reply to:</strong> <a href="22278.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on handling of memory for communications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22280.php">Brice Goglin: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Reply:</strong> <a href="22280.php">Brice Goglin: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Reply:</strong> <a href="22286.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on handling of memory for communications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
People have mentioned that they experience unexpected slow downs in
<br>
PCIe_gen3 I/O when the pages map to a socket different from the one the HCA
<br>
connects to. It is speculated that the inter-socket QPI is not provisioned
<br>
to transfer more than 1GiB/sec for PCIe_gen 3 traffic. This situation may
<br>
not be in effect on all SandyBrige or IvyBridge systems.
<br>
<p>Have you measured anything like this on you systems as well? That would
<br>
require using physical memory mapped to the socket w/o HCA exclusively for
<br>
MPI messaging.
<br>
<p>Mike
<br>
<p><p>On Mon, Jul 8, 2013 at 10:52 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On Jul 8, 2013, at 11:35 AM, Michael Thomadakis &lt;drmichaelt7777_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; The issue is that when you read or write PCIe_gen 3 dat to a non-local
</span><br>
<span class="quotelev1">&gt; NUMA memory, SandyBridge will use the inter-socket QPIs to get this data
</span><br>
<span class="quotelev1">&gt; across to the other socket. I think there is considerable limitation in
</span><br>
<span class="quotelev1">&gt; PCIe I/O traffic data going over the inter-socket QPI. One way to get
</span><br>
<span class="quotelev1">&gt; around this is for reads to buffer all data into memory space local to the
</span><br>
<span class="quotelev1">&gt; same socket and then transfer them by code across to the other socket's
</span><br>
<span class="quotelev1">&gt; physical memory. For writes the same approach can be used with intermediary
</span><br>
<span class="quotelev1">&gt; process copying data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sure, you'll cause congestion across the QPI network when you do non-local
</span><br>
<span class="quotelev1">&gt; PCI reads/writes.  That's a given.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I'm not aware of a hardware limitation on PCI-requested traffic across
</span><br>
<span class="quotelev1">&gt; QPI (I could be wrong, of course -- I'm a software guy, not a hardware
</span><br>
<span class="quotelev1">&gt; guy).  A simple test would be to bind an MPI process to a far NUMA node and
</span><br>
<span class="quotelev1">&gt; run a simple MPI bandwidth test and see if to get better/same/worse
</span><br>
<span class="quotelev1">&gt; bandwidth compared to binding an MPI process on a near NUMA socket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But in terms of doing intermediate (pipelined) reads/writes to local NUMA
</span><br>
<span class="quotelev1">&gt; memory before reading/writing to PCI, no, Open MPI does not do this.
</span><br>
<span class="quotelev1">&gt;  Unless there is a PCI-QPI bandwidth constraint that we're unaware of, I'm
</span><br>
<span class="quotelev1">&gt; not sure why you would do this -- it would likely add considerable
</span><br>
<span class="quotelev1">&gt; complexity to the code and it would definitely lead to higher overall MPI
</span><br>
<span class="quotelev1">&gt; latency.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Don't forget that the MPI paradigm is for the application to provide the
</span><br>
<span class="quotelev1">&gt; send/receive buffer.  Meaning: MPI doesn't (always) control where the
</span><br>
<span class="quotelev1">&gt; buffer is located (particularly for large messages).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I was wondering if OpenMPI does anything special memory mapping to work
</span><br>
<span class="quotelev1">&gt; around this.
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22279/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22280.php">Brice Goglin: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Previous message:</strong> <a href="22278.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>In reply to:</strong> <a href="22278.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on handling of memory for communications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22280.php">Brice Goglin: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Reply:</strong> <a href="22280.php">Brice Goglin: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Reply:</strong> <a href="22286.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on handling of memory for communications"</a>
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
