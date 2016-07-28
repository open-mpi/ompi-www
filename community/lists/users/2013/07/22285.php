<?
$subject_val = "Re: [OMPI users] Question on handling of memory for communications";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  8 14:01:35 2013" -->
<!-- isoreceived="20130708180135" -->
<!-- sent="Mon, 08 Jul 2013 20:01:28 +0200" -->
<!-- isosent="20130708180128" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on handling of memory for communications" -->
<!-- id="51DAFE78.8010909_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CA+OO3AVN=VbnWxShDJnYW+rzs3Q8fey5hSJfw77kkc-gedp6HA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-07-08 14:01:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22286.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Previous message:</strong> <a href="22284.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>In reply to:</strong> <a href="22284.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22287.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Reply:</strong> <a href="22287.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Reply:</strong> <a href="22290.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The driver doesn't allocate much memory here. Maybe some small control
<br>
buffers, but nothing significantly involved in large message transfer
<br>
performance. Everything critical here is allocated by user-space (either
<br>
MPI lib or application), so we just have to make sure we bind the
<br>
process memory properly. I used hwloc-bind to do that.
<br>
<p>Note that we have seen larger issues on older platforms. You basically
<br>
just need a big HCA and PCI link on a not-so-big machine. Not very
<br>
common fortunately with todays QPI links between Sandy-Bridge socket,
<br>
those are quite big compared to PCI Gen3 8x links to the HCA. On old AMD
<br>
platforms (and modern Intels with big GPUs), issues are not that
<br>
uncommon (we've seen up to 40% DMA bandwidth difference there).
<br>
<p>Brice
<br>
<p><p><p>Le 08/07/2013 19:44, Michael Thomadakis a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi Brice, 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks for testing this out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How did you make sure that the pinned pages used by the I/O adapter
</span><br>
<span class="quotelev1">&gt; mapped to the &quot;other&quot; socket's memory controller ? Is pining the MPI
</span><br>
<span class="quotelev1">&gt; binary to a socket sufficient to pin the space used for MPI I/O as
</span><br>
<span class="quotelev1">&gt; well to that socket? I think this is something done by and at the HCA
</span><br>
<span class="quotelev1">&gt; device driver level. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyways, as long as the memory performance difference is a the levels
</span><br>
<span class="quotelev1">&gt; you mentioned then there is no &quot;big&quot; issue. Most likely the device
</span><br>
<span class="quotelev1">&gt; driver get space from the same numa domain that of the socket the HCA
</span><br>
<span class="quotelev1">&gt; is attached to. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for trying it out
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 8, 2013 at 11:45 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On a dual E5 2650 machine with FDR cards, I see the IMB Pingpong
</span><br>
<span class="quotelev1">&gt;     throughput drop from 6000 to 5700MB/s when the memory isn't
</span><br>
<span class="quotelev1">&gt;     allocated on the right socket (and latency increases from 0.8 to
</span><br>
<span class="quotelev1">&gt;     1.4us). Of course that's pingpong only, things will be worse on a
</span><br>
<span class="quotelev1">&gt;     memory-overloaded machine. But I don't expect things to be &quot;less
</span><br>
<span class="quotelev1">&gt;     worse&quot; if you do an intermediate copy through the memory near the
</span><br>
<span class="quotelev1">&gt;     HCA: you would overload the QPI link as much as here, and you
</span><br>
<span class="quotelev1">&gt;     would overload the CPU even more because of the additional copies.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Le 08/07/2013 18:27, Michael Thomadakis a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;     People have mentioned that they experience unexpected slow downs
</span><br>
<span class="quotelev2">&gt;&gt;     in PCIe_gen3 I/O when the pages map to a socket different from
</span><br>
<span class="quotelev2">&gt;&gt;     the one the HCA connects to. It is speculated that the
</span><br>
<span class="quotelev2">&gt;&gt;     inter-socket QPI is not provisioned to transfer more than
</span><br>
<span class="quotelev2">&gt;&gt;     1GiB/sec for PCIe_gen 3 traffic. This situation may not be in
</span><br>
<span class="quotelev2">&gt;&gt;     effect on all SandyBrige or IvyBridge systems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Have you measured anything like this on you systems as well? That
</span><br>
<span class="quotelev2">&gt;&gt;     would require using physical memory mapped to the socket w/o HCA
</span><br>
<span class="quotelev2">&gt;&gt;     exclusively for MPI messaging.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Mike
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Mon, Jul 8, 2013 at 10:52 AM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         On Jul 8, 2013, at 11:35 AM, Michael Thomadakis
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;drmichaelt7777_at_[hidden] &lt;mailto:drmichaelt7777_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; The issue is that when you read or write PCIe_gen 3 dat to
</span><br>
<span class="quotelev2">&gt;&gt;         a non-local NUMA memory, SandyBridge will use the
</span><br>
<span class="quotelev2">&gt;&gt;         inter-socket QPIs to get this data across to the other
</span><br>
<span class="quotelev2">&gt;&gt;         socket. I think there is considerable limitation in PCIe I/O
</span><br>
<span class="quotelev2">&gt;&gt;         traffic data going over the inter-socket QPI. One way to get
</span><br>
<span class="quotelev2">&gt;&gt;         around this is for reads to buffer all data into memory space
</span><br>
<span class="quotelev2">&gt;&gt;         local to the same socket and then transfer them by code
</span><br>
<span class="quotelev2">&gt;&gt;         across to the other socket's physical memory. For writes the
</span><br>
<span class="quotelev2">&gt;&gt;         same approach can be used with intermediary process copying data.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Sure, you'll cause congestion across the QPI network when you
</span><br>
<span class="quotelev2">&gt;&gt;         do non-local PCI reads/writes.  That's a given.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         But I'm not aware of a hardware limitation on PCI-requested
</span><br>
<span class="quotelev2">&gt;&gt;         traffic across QPI (I could be wrong, of course -- I'm a
</span><br>
<span class="quotelev2">&gt;&gt;         software guy, not a hardware guy).  A simple test would be to
</span><br>
<span class="quotelev2">&gt;&gt;         bind an MPI process to a far NUMA node and run a simple MPI
</span><br>
<span class="quotelev2">&gt;&gt;         bandwidth test and see if to get better/same/worse bandwidth
</span><br>
<span class="quotelev2">&gt;&gt;         compared to binding an MPI process on a near NUMA socket.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         But in terms of doing intermediate (pipelined) reads/writes
</span><br>
<span class="quotelev2">&gt;&gt;         to local NUMA memory before reading/writing to PCI, no, Open
</span><br>
<span class="quotelev2">&gt;&gt;         MPI does not do this.  Unless there is a PCI-QPI bandwidth
</span><br>
<span class="quotelev2">&gt;&gt;         constraint that we're unaware of, I'm not sure why you would
</span><br>
<span class="quotelev2">&gt;&gt;         do this -- it would likely add considerable complexity to the
</span><br>
<span class="quotelev2">&gt;&gt;         code and it would definitely lead to higher overall MPI latency.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Don't forget that the MPI paradigm is for the application to
</span><br>
<span class="quotelev2">&gt;&gt;         provide the send/receive buffer.  Meaning: MPI doesn't
</span><br>
<span class="quotelev2">&gt;&gt;         (always) control where the buffer is located (particularly
</span><br>
<span class="quotelev2">&gt;&gt;         for large messages).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; I was wondering if OpenMPI does anything special memory
</span><br>
<span class="quotelev2">&gt;&gt;         mapping to work around this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Just what I mentioned in the prior email.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; And if with Ivy Bridge (or Haswell) he situation has improved.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Open MPI doesn't treat these chips any different.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         --
</span><br>
<span class="quotelev2">&gt;&gt;         Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;         jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22285/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22286.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Previous message:</strong> <a href="22284.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>In reply to:</strong> <a href="22284.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22287.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Reply:</strong> <a href="22287.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Reply:</strong> <a href="22290.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
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
