<?
$subject_val = "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 17 07:52:50 2011" -->
<!-- isoreceived="20110617115250" -->
<!-- sent="Fri, 17 Jun 2011 13:52:43 +0200" -->
<!-- isosent="20110617115243" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp;amp; RHEL 5.6" -->
<!-- id="4DFB400B.7070704_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4DFB0A84.1020701_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-17 07:52:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2216.php">Jeff Squyres: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Previous message:</strong> <a href="2214.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>In reply to:</strong> <a href="2214.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2217.php">Jeff Squyres: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Reply:</strong> <a href="2217.php">Jeff Squyres: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Advice from colleagues: This is becoming too ugly, this is libpci's
<br>
fault, just always add -lz -lresolv and let the linker drop them later
<br>
if they're useless :)
<br>
Brice
<br>
<p><p>Le 17/06/2011 10:04, Christopher Samuel a &#233;crit :
<br>
<span class="quotelev1">&gt; On 17/06/11 17:14, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there anyway to tell autoconf to ignore/drop some cached results?
</span><br>
<span class="quotelev2">&gt; &gt; Resetting the value of ac_cv_lib_pci_pci_lookup_name may work but I
</span><br>
<span class="quotelev2">&gt; &gt; don't know if we can do that (if we can, we should do it for
</span><br>
<span class="quotelev2">&gt; &gt; pci_init/pci_cleanup vs -lz too).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good guess Brice! This patch to configure from that nightly
</span><br>
<span class="quotelev1">&gt; snapshot gets it working again:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- configure.old       2011-06-17 11:01:25.000000000 +1000
</span><br>
<span class="quotelev1">&gt; +++ configure   2011-06-17 17:59:23.000000000 +1000
</span><br>
<span class="quotelev1">&gt; @@ -10321,6 +10321,7 @@
</span><br>
<span class="quotelev1">&gt;  if test &quot;x$ac_cv_lib_resolv_inet_ntoa&quot; = x&quot;&quot;yes; then :
</span><br>
<span class="quotelev1">&gt;    { $as_echo &quot;$as_me:${as_lineno-$LINENO}: checking for
</span><br>
<span class="quotelev1">&gt; pci_lookup_name in -lpci&quot; &gt;&amp;5
</span><br>
<span class="quotelev1">&gt;  $as_echo_n &quot;checking for pci_lookup_name in -lpci... &quot; &gt;&amp;6; }
</span><br>
<span class="quotelev1">&gt; +unset ac_cv_lib_pci_pci_lookup_name
</span><br>
<span class="quotelev1">&gt;  if test &quot;${ac_cv_lib_pci_pci_lookup_name+set}&quot; = set; then :
</span><br>
<span class="quotelev1">&gt;    $as_echo_n &quot;(cached) &quot; &gt;&amp;6
</span><br>
<span class="quotelev1">&gt;  else
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thus:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking pci/pci.h usability... yes
</span><br>
<span class="quotelev1">&gt; checking pci/pci.h presence... yes
</span><br>
<span class="quotelev1">&gt; checking for pci/pci.h... yes
</span><br>
<span class="quotelev1">&gt; checking for pci_init in -lpci... yes
</span><br>
<span class="quotelev1">&gt; checking for pci_lookup_name in -lpci... no
</span><br>
<span class="quotelev1">&gt; checking for inet_ntoa in -lresolv... yes
</span><br>
<span class="quotelev1">&gt; checking for pci_lookup_name in -lpci... yes
</span><br>
<span class="quotelev1">&gt; checking whether PCI_LOOKUP_NO_NUMBERS is declared... yes
</span><br>
<span class="quotelev1">&gt; checking for pci_find_cap in -lpci... yes
</span><br>
<span class="quotelev1">&gt; checking whether struct pci_dev has a device_class field... yes
</span><br>
<span class="quotelev1">&gt; checking whether struct pci_dev has a domain field... yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and it compiles and builds an lstopo which includes PCI info!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers,
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
<li><strong>Next message:</strong> <a href="2216.php">Jeff Squyres: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Previous message:</strong> <a href="2214.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>In reply to:</strong> <a href="2214.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2217.php">Jeff Squyres: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Reply:</strong> <a href="2217.php">Jeff Squyres: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
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
