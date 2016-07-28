<?
$subject_val = "Re: [OMPI users] Question on handling of memory for communications";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  8 12:45:07 2013" -->
<!-- isoreceived="20130708164507" -->
<!-- sent="Mon, 08 Jul 2013 18:45:00 +0200" -->
<!-- isosent="20130708164500" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on handling of memory for communications" -->
<!-- id="51DAEC8C.7020100_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-08 12:45:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22281.php">Elken, Tom: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>Previous message:</strong> <a href="22279.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>In reply to:</strong> <a href="22279.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22284.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Reply:</strong> <a href="22284.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On a dual E5 2650 machine with FDR cards, I see the IMB Pingpong
<br>
throughput drop from 6000 to 5700MB/s when the memory isn't allocated on
<br>
the right socket (and latency increases from 0.8 to 1.4us). Of course
<br>
that's pingpong only, things will be worse on a memory-overloaded
<br>
machine. But I don't expect things to be &quot;less worse&quot; if you do an
<br>
intermediate copy through the memory near the HCA: you would overload
<br>
the QPI link as much as here, and you would overload the CPU even more
<br>
because of the additional copies.
<br>
<p>Brice
<br>
<p><p><p>Le 08/07/2013 18:27, Michael Thomadakis a &#233;crit :
<br>
<span class="quotelev1">&gt; People have mentioned that they experience unexpected slow downs in
</span><br>
<span class="quotelev1">&gt; PCIe_gen3 I/O when the pages map to a socket different from the one
</span><br>
<span class="quotelev1">&gt; the HCA connects to. It is speculated that the inter-socket QPI is not
</span><br>
<span class="quotelev1">&gt; provisioned to transfer more than 1GiB/sec for PCIe_gen 3 traffic.
</span><br>
<span class="quotelev1">&gt; This situation may not be in effect on all SandyBrige or IvyBridge
</span><br>
<span class="quotelev1">&gt; systems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you measured anything like this on you systems as well? That
</span><br>
<span class="quotelev1">&gt; would require using physical memory mapped to the socket w/o HCA
</span><br>
<span class="quotelev1">&gt; exclusively for MPI messaging.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mike
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 8, 2013 at 10:52 AM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Jul 8, 2013, at 11:35 AM, Michael Thomadakis
</span><br>
<span class="quotelev1">&gt;     &lt;drmichaelt7777_at_[hidden] &lt;mailto:drmichaelt7777_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; The issue is that when you read or write PCIe_gen 3 dat to a
</span><br>
<span class="quotelev1">&gt;     non-local NUMA memory, SandyBridge will use the inter-socket QPIs
</span><br>
<span class="quotelev1">&gt;     to get this data across to the other socket. I think there is
</span><br>
<span class="quotelev1">&gt;     considerable limitation in PCIe I/O traffic data going over the
</span><br>
<span class="quotelev1">&gt;     inter-socket QPI. One way to get around this is for reads to
</span><br>
<span class="quotelev1">&gt;     buffer all data into memory space local to the same socket and
</span><br>
<span class="quotelev1">&gt;     then transfer them by code across to the other socket's physical
</span><br>
<span class="quotelev1">&gt;     memory. For writes the same approach can be used with intermediary
</span><br>
<span class="quotelev1">&gt;     process copying data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Sure, you'll cause congestion across the QPI network when you do
</span><br>
<span class="quotelev1">&gt;     non-local PCI reads/writes.  That's a given.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     But I'm not aware of a hardware limitation on PCI-requested
</span><br>
<span class="quotelev1">&gt;     traffic across QPI (I could be wrong, of course -- I'm a software
</span><br>
<span class="quotelev1">&gt;     guy, not a hardware guy).  A simple test would be to bind an MPI
</span><br>
<span class="quotelev1">&gt;     process to a far NUMA node and run a simple MPI bandwidth test and
</span><br>
<span class="quotelev1">&gt;     see if to get better/same/worse bandwidth compared to binding an
</span><br>
<span class="quotelev1">&gt;     MPI process on a near NUMA socket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     But in terms of doing intermediate (pipelined) reads/writes to
</span><br>
<span class="quotelev1">&gt;     local NUMA memory before reading/writing to PCI, no, Open MPI does
</span><br>
<span class="quotelev1">&gt;     not do this.  Unless there is a PCI-QPI bandwidth constraint that
</span><br>
<span class="quotelev1">&gt;     we're unaware of, I'm not sure why you would do this -- it would
</span><br>
<span class="quotelev1">&gt;     likely add considerable complexity to the code and it would
</span><br>
<span class="quotelev1">&gt;     definitely lead to higher overall MPI latency.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Don't forget that the MPI paradigm is for the application to
</span><br>
<span class="quotelev1">&gt;     provide the send/receive buffer.  Meaning: MPI doesn't (always)
</span><br>
<span class="quotelev1">&gt;     control where the buffer is located (particularly for large messages).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I was wondering if OpenMPI does anything special memory mapping
</span><br>
<span class="quotelev1">&gt;     to work around this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Just what I mentioned in the prior email.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; And if with Ivy Bridge (or Haswell) he situation has improved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Open MPI doesn't treat these chips any different.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     Jeff Squyres
</span><br>
<span class="quotelev1">&gt;     jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22280/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22281.php">Elken, Tom: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>Previous message:</strong> <a href="22279.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>In reply to:</strong> <a href="22279.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22284.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Reply:</strong> <a href="22284.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
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
