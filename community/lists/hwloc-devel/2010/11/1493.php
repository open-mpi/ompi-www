<?
$subject_val = "Re: [hwloc-devel] PCI device location in hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 18 09:42:19 2010" -->
<!-- isoreceived="20101118144219" -->
<!-- sent="Thu, 18 Nov 2010 08:42:10 -0600" -->
<!-- isosent="20101118144210" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] PCI device location in hwloc" -->
<!-- id="4CE53B42.50500_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CE53519.6020107_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] PCI device location in hwloc<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-18 09:42:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1494.php">Jirka Hladky: "[hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Previous message:</strong> <a href="1492.php">Jirka Hladky: "Re: [hwloc-devel] hwloc-distrib --among"</a>
<li><strong>In reply to:</strong> <a href="1491.php">Christopher Samuel: "[hwloc-devel] PCI device location in hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1501.php">Christopher Samuel: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<li><strong>Reply:</strong> <a href="1501.php">Christopher Samuel: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<li><strong>Reply:</strong> <a href="1505.php">Christopher Samuel: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Chris,
<br>
<p>It's not in trunk yet. Try this branch instead:
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/svn/hwloc/branches/libpci">https://svn.open-mpi.org/svn/hwloc/branches/libpci</a>
<br>
<p>We are not sure yet how we should expose all these devices. Right now,
<br>
we have a new BRIDGE type, a PCI_DEVICE type, and a OS_DEVICE type
<br>
(which corresponds to OS names such as eth0 or sda1 or... nothing for
<br>
gpus). If you have any feeling about all this, please tell us :)
<br>
<p>Brice
<br>
<p><p><p>Le 18/11/2010 08:15, Christopher Samuel a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At the hwloc talk on the Cisco booth by Brice he mentioned
</span><br>
<span class="quotelev1">&gt; work to locate PCI bridges &amp; devices and their socket
</span><br>
<span class="quotelev1">&gt; locality and put up a nice graphic which was very interesting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So last night I grabbed the latest snapshot of trunk but
</span><br>
<span class="quotelev1">&gt; couldn't see how to give me that info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Was I being too enthusiastic ?  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this in a private branch or was it a mockup ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers!
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
_______________________________________________
<br>
hwloc-devel mailing list
<br>
hwloc-devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1494.php">Jirka Hladky: "[hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Previous message:</strong> <a href="1492.php">Jirka Hladky: "Re: [hwloc-devel] hwloc-distrib --among"</a>
<li><strong>In reply to:</strong> <a href="1491.php">Christopher Samuel: "[hwloc-devel] PCI device location in hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1501.php">Christopher Samuel: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<li><strong>Reply:</strong> <a href="1501.php">Christopher Samuel: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<li><strong>Reply:</strong> <a href="1505.php">Christopher Samuel: "Re: [hwloc-devel] PCI device location in hwloc"</a>
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
