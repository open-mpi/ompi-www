<?
$subject_val = "Re: [OMPI users] Question on handling of memory for communications";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  8 13:44:24 2013" -->
<!-- isoreceived="20130708174424" -->
<!-- sent="Mon, 8 Jul 2013 12:44:20 -0500" -->
<!-- isosent="20130708174420" -->
<!-- name="Michael Thomadakis" -->
<!-- email="drmichaelt7777_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on handling of memory for communications" -->
<!-- id="CA+OO3AVN=VbnWxShDJnYW+rzs3Q8fey5hSJfw77kkc-gedp6HA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51DAEC8C.7020100_at_inria.fr" -->
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
<strong>Date:</strong> 2013-07-08 13:44:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22285.php">Brice Goglin: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Previous message:</strong> <a href="22283.php">Siegmar Gross: "[OMPI users] problem with MPI_Iexscan"</a>
<li><strong>In reply to:</strong> <a href="22280.php">Brice Goglin: "Re: [OMPI users] Question on handling of memory for communications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22285.php">Brice Goglin: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Reply:</strong> <a href="22285.php">Brice Goglin: "Re: [OMPI users] Question on handling of memory for communications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>thanks for testing this out.
<br>
<p>How did you make sure that the pinned pages used by the I/O adapter mapped
<br>
to the &quot;other&quot; socket's memory controller ? Is pining the MPI binary to a
<br>
socket sufficient to pin the space used for MPI I/O as well to that socket?
<br>
I think this is something done by and at the HCA device driver level.
<br>
<p>Anyways, as long as the memory performance difference is a the levels you
<br>
mentioned then there is no &quot;big&quot; issue. Most likely the device driver get
<br>
space from the same numa domain that of the socket the HCA is attached to.
<br>
<p>Thanks for trying it out
<br>
Michael
<br>
<p><p><p><p><p><p>On Mon, Jul 8, 2013 at 11:45 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  On a dual E5 2650 machine with FDR cards, I see the IMB Pingpong
</span><br>
<span class="quotelev1">&gt; throughput drop from 6000 to 5700MB/s when the memory isn't allocated on
</span><br>
<span class="quotelev1">&gt; the right socket (and latency increases from 0.8 to 1.4us). Of course
</span><br>
<span class="quotelev1">&gt; that's pingpong only, things will be worse on a memory-overloaded machine.
</span><br>
<span class="quotelev1">&gt; But I don't expect things to be &quot;less worse&quot; if you do an intermediate copy
</span><br>
<span class="quotelev1">&gt; through the memory near the HCA: you would overload the QPI link as much as
</span><br>
<span class="quotelev1">&gt; here, and you would overload the CPU even more because of the additional
</span><br>
<span class="quotelev1">&gt; copies.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 08/07/2013 18:27, Michael Thomadakis a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; People have mentioned that they experience unexpected slow downs in
</span><br>
<span class="quotelev1">&gt; PCIe_gen3 I/O when the pages map to a socket different from the one the HCA
</span><br>
<span class="quotelev1">&gt; connects to. It is speculated that the inter-socket QPI is not provisioned
</span><br>
<span class="quotelev1">&gt; to transfer more than 1GiB/sec for PCIe_gen 3 traffic. This situation may
</span><br>
<span class="quotelev1">&gt; not be in effect on all SandyBrige or IvyBridge systems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Have you measured anything like this on you systems as well? That would
</span><br>
<span class="quotelev1">&gt; require using physical memory mapped to the socket w/o HCA exclusively for
</span><br>
<span class="quotelev1">&gt; MPI messaging.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Mike
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 8, 2013 at 10:52 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 8, 2013, at 11:35 AM, Michael Thomadakis &lt;drmichaelt7777_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The issue is that when you read or write PCIe_gen 3 dat to a non-local
</span><br>
<span class="quotelev2">&gt;&gt; NUMA memory, SandyBridge will use the inter-socket QPIs to get this data
</span><br>
<span class="quotelev2">&gt;&gt; across to the other socket. I think there is considerable limitation in
</span><br>
<span class="quotelev2">&gt;&gt; PCIe I/O traffic data going over the inter-socket QPI. One way to get
</span><br>
<span class="quotelev2">&gt;&gt; around this is for reads to buffer all data into memory space local to the
</span><br>
<span class="quotelev2">&gt;&gt; same socket and then transfer them by code across to the other socket's
</span><br>
<span class="quotelev2">&gt;&gt; physical memory. For writes the same approach can be used with intermediary
</span><br>
<span class="quotelev2">&gt;&gt; process copying data.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Sure, you'll cause congestion across the QPI network when you do
</span><br>
<span class="quotelev2">&gt;&gt; non-local PCI reads/writes.  That's a given.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But I'm not aware of a hardware limitation on PCI-requested traffic
</span><br>
<span class="quotelev2">&gt;&gt; across QPI (I could be wrong, of course -- I'm a software guy, not a
</span><br>
<span class="quotelev2">&gt;&gt; hardware guy).  A simple test would be to bind an MPI process to a far NUMA
</span><br>
<span class="quotelev2">&gt;&gt; node and run a simple MPI bandwidth test and see if to get
</span><br>
<span class="quotelev2">&gt;&gt; better/same/worse bandwidth compared to binding an MPI process on a near
</span><br>
<span class="quotelev2">&gt;&gt; NUMA socket.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But in terms of doing intermediate (pipelined) reads/writes to local NUMA
</span><br>
<span class="quotelev2">&gt;&gt; memory before reading/writing to PCI, no, Open MPI does not do this.
</span><br>
<span class="quotelev2">&gt;&gt;  Unless there is a PCI-QPI bandwidth constraint that we're unaware of, I'm
</span><br>
<span class="quotelev2">&gt;&gt; not sure why you would do this -- it would likely add considerable
</span><br>
<span class="quotelev2">&gt;&gt; complexity to the code and it would definitely lead to higher overall MPI
</span><br>
<span class="quotelev2">&gt;&gt; latency.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Don't forget that the MPI paradigm is for the application to provide the
</span><br>
<span class="quotelev2">&gt;&gt; send/receive buffer.  Meaning: MPI doesn't (always) control where the
</span><br>
<span class="quotelev2">&gt;&gt; buffer is located (particularly for large messages).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I was wondering if OpenMPI does anything special memory mapping to work
</span><br>
<span class="quotelev2">&gt;&gt; around this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Just what I mentioned in the prior email.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; And if with Ivy Bridge (or Haswell) he situation has improved.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Open MPI doesn't treat these chips any different.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22284/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22285.php">Brice Goglin: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Previous message:</strong> <a href="22283.php">Siegmar Gross: "[OMPI users] problem with MPI_Iexscan"</a>
<li><strong>In reply to:</strong> <a href="22280.php">Brice Goglin: "Re: [OMPI users] Question on handling of memory for communications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22285.php">Brice Goglin: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Reply:</strong> <a href="22285.php">Brice Goglin: "Re: [OMPI users] Question on handling of memory for communications"</a>
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
