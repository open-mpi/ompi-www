<?
$subject_val = "Re: [OMPI users] IO performance";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  4 03:28:10 2012" -->
<!-- isoreceived="20120204082810" -->
<!-- sent="Sat, 4 Feb 2012 08:28:06 +0000" -->
<!-- isosent="20120204082806" -->
<!-- name="John Hearns" -->
<!-- email="hearnsj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IO performance" -->
<!-- id="CAPqNE2UQNgwEgsVMi-UGrtVQoBf74xDontxXA2kyKyzH4XYVSQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1328294781.4280.32.camel_at_cedar.reachone.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] IO performance<br>
<strong>From:</strong> John Hearns (<em>hearnsj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-04 03:28:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18393.php">Jeff Squyres: "Re: [OMPI users] mpi_abort_delay"</a>
<li><strong>Previous message:</strong> <a href="18391.php">Aur&#233;lien Bouteiller: "[OMPI users] mpi_abort_delay"</a>
<li><strong>In reply to:</strong> <a href="18387.php">Tom Rosmond: "[OMPI users] IO performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18394.php">Joe Landman: "Re: [OMPI users] IO performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/02/2012, Tom Rosmond &lt;rosmond_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Recently the organization I work for bought a modest sized Linux cluster
</span><br>
<span class="quotelev1">&gt; for running large atmospheric data assimilation systems.  In my
</span><br>
<span class="quotelev1">&gt; experience a glaring problem with systems of this kind is poor IO
</span><br>
<span class="quotelev1">&gt; performance.  Typically they have 2 types of network: 1) A high speed,
</span><br>
<span class="quotelev1">&gt; low latency, e.g. Infiniband, network dedicated to MPI communications,
</span><br>
<span class="quotelev1">&gt; and, 2) A lower speed network, e.g 1Gb or 10Gb ethernet, for IO.  On
</span><br>
<span class="quotelev1">&gt; clusters this second network is usually the basis for a global parallel
</span><br>
<span class="quotelev1">&gt; file system (GPFS), through which nearly all IO traffic must pass.
</span><br>
<p>Not necessarily.
<br>
You can use the Infiniband network for storage very easily, and this
<br>
is commonly done.
<br>
Indeed, you can increase your bandwidth for storage by using the two
<br>
ports of the Infiniband adapters, allocating even and odd compute
<br>
nodes to different storage subnets.
<br>
<p>All you need do is have an Infiniband card (or cards) in your storage server,
<br>
or to put in dedicated storage routers (such as Panasas do).
<br>
<p>GPFS is not the only kid on the block. There are other filesystems out
<br>
there - such as Panasas and Lustre.
<br>
And indeed what is wrong with having a properly balanced RAID array
<br>
and an NFS server with an Infiniband interface (or interfaces).
<br>
<p>The 'glaring problem' is not inherent in clusters.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18393.php">Jeff Squyres: "Re: [OMPI users] mpi_abort_delay"</a>
<li><strong>Previous message:</strong> <a href="18391.php">Aur&#233;lien Bouteiller: "[OMPI users] mpi_abort_delay"</a>
<li><strong>In reply to:</strong> <a href="18387.php">Tom Rosmond: "[OMPI users] IO performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18394.php">Joe Landman: "Re: [OMPI users] IO performance"</a>
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
