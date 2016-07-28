<?
$subject_val = "Re: [OMPI users] Question on handling of memory for communications";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  8 11:35:29 2013" -->
<!-- isoreceived="20130708153529" -->
<!-- sent="Mon, 8 Jul 2013 10:35:25 -0500" -->
<!-- isosent="20130708153525" -->
<!-- name="Michael Thomadakis" -->
<!-- email="drmichaelt7777_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on handling of memory for communications" -->
<!-- id="CA+OO3AVSB0M_n3es5-GMdT3NRk3dg7xpk3vWRCV2FvYeMznoKg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F6F2A8F_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Date:</strong> 2013-07-08 11:35:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22277.php">Michael Thomadakis: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>Previous message:</strong> <a href="22275.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>In reply to:</strong> <a href="22275.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on handling of memory for communications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22278.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Reply:</strong> <a href="22278.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on handling of memory for communications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>thanks for the reply.
<br>
<p>The issue is that when you read or write PCIe_gen 3 dat to a non-local NUMA
<br>
memory, SandyBridge will use the inter-socket QPIs to get this data across
<br>
to the other socket. I think there is considerable limitation in PCIe I/O
<br>
traffic data going over the inter-socket QPI. One way to get around this is
<br>
for reads to buffer all data into memory space local to the same socket and
<br>
then transfer them by code across to the other socket's physical memory.
<br>
For writes the same approach can be used with intermediary process copying
<br>
data.
<br>
<p>I was wondering if OpenMPI does anything special memory mapping to work
<br>
around this. And if with Ivy Bridge (or Haswell) he situation has improved.
<br>
<p>thanks
<br>
Mike
<br>
<p><p>On Mon, Jul 8, 2013 at 9:57 AM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 6, 2013, at 4:59 PM, Michael Thomadakis &lt;drmichaelt7777_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; When you stack runs on SandyBridge nodes atached to HCAs ove PCI3 gen 3
</span><br>
<span class="quotelev1">&gt; do you pay any special attention to the memory buffers according to which
</span><br>
<span class="quotelev1">&gt; socket/memory controller  their physical memory belongs to?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For instance, if the HCA is attached to the PCIgen3 lanes of Socket 1 do
</span><br>
<span class="quotelev1">&gt; you do anything special when the read/write buffers map to physical memory
</span><br>
<span class="quotelev1">&gt; belonging to Socket 2? Or do you7 avoid using buffers mapping ro memory
</span><br>
<span class="quotelev1">&gt; that belongs (is accessible via) the other socket?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is not *necessary* to do ensure that buffers are NUMA-local to the PCI
</span><br>
<span class="quotelev1">&gt; device that they are writing to, but it certainly results in lower latency
</span><br>
<span class="quotelev1">&gt; to read/write to PCI devices (regardless of flavor) that are attached to an
</span><br>
<span class="quotelev1">&gt; MPI process' local NUMA node.  The Hardware Locality (hwloc) tool &quot;lstopo&quot;
</span><br>
<span class="quotelev1">&gt; can print a pretty picture of your server to show you where your PCI busses
</span><br>
<span class="quotelev1">&gt; are connected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For TCP, Open MPI will use all TCP devices that it finds by default
</span><br>
<span class="quotelev1">&gt; (because it is assumed that latency is so high that NUMA locality doesn't
</span><br>
<span class="quotelev1">&gt; matter).  The openib (OpenFabrics) transport will use the &quot;closest&quot; HCA
</span><br>
<span class="quotelev1">&gt; ports that it can find to each MPI process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In our upcoming Cisco ultra low latency BTL, it defaults to using the
</span><br>
<span class="quotelev1">&gt; closest Cisco VIC ports that it can find for short messages (i.e., to
</span><br>
<span class="quotelev1">&gt; minimize latency), but uses all available VICs for long messages (i.e., to
</span><br>
<span class="quotelev1">&gt; maximize bandwidth).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Has this situation improved with Ivy-Brige systems or Haswell?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's the same overall architecture (i.e., NUMA).
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22276/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22277.php">Michael Thomadakis: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>Previous message:</strong> <a href="22275.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>In reply to:</strong> <a href="22275.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on handling of memory for communications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22278.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Reply:</strong> <a href="22278.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on handling of memory for communications"</a>
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
