<?
$subject_val = "Re: [hwloc-users] GPU/NIC/CPU locality";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 30 03:56:37 2011" -->
<!-- isoreceived="20111130085637" -->
<!-- sent="Wed, 30 Nov 2011 09:56:32 +0100" -->
<!-- isosent="20111130085632" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] GPU/NIC/CPU locality" -->
<!-- id="4ED5EFC0.5010809_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2C7BC62D-34DA-41B0-A028-F1F8395B2978_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] GPU/NIC/CPU locality<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-30 03:56:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2012/01/0494.php">Gareth.Williams_at_[hidden]: "[hwloc-users] hwloc download link broken"</a>
<li><strong>Previous message:</strong> <a href="0492.php">Stefan Eilemann: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<li><strong>In reply to:</strong> <a href="0492.php">Stefan Eilemann: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0483.php">Guy Streeter: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 30/11/2011 08:44, Stefan Eilemann a &#233;crit :
<br>
<span class="quotelev1">&gt; Let me know if I can help. We would be quite interested in this feature.
</span><br>
<p>You can help by asking the relevant people for help :)
<br>
* ask the OpenCL board to add an device query property that tells us the
<br>
locality of a device. If they return the BusID of a PCI device, that's
<br>
OK (that's what Nvidia added to CUDA for us). If they give the set of
<br>
closest CPUs or NUMA nodes, it would help too.
<br>
* ask the Xorg guys to give you a way to retrieve the PCI BusID from a X
<br>
display at runtime.
<br>
<p><span class="quotelev1">&gt; Ideally there should be the following fields. I'll use the Equalizer terms, but feel free to use others if you don't like them:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - port: the X server number or unused (Windows/Mac)
</span><br>
<span class="quotelev1">&gt; - GL device: The X screen, affinity device (Windows) or CGL renderer ID (OS X)
</span><br>
<span class="quotelev1">&gt; - Cuda/OpenCL device
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The latter is interesting to establish a mapping between GL and Cuda device numbers, which are not necessarily symmetric.
</span><br>
<p>I created a trac ticket about this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/hwloc/ticket/54">https://svn.open-mpi.org/trac/hwloc/ticket/54</a>
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2012/01/0494.php">Gareth.Williams_at_[hidden]: "[hwloc-users] hwloc download link broken"</a>
<li><strong>Previous message:</strong> <a href="0492.php">Stefan Eilemann: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<li><strong>In reply to:</strong> <a href="0492.php">Stefan Eilemann: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0483.php">Guy Streeter: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
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
