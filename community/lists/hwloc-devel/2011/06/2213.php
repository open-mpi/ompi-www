<?
$subject_val = "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 17 03:14:05 2011" -->
<!-- isoreceived="20110617071405" -->
<!-- sent="Fri, 17 Jun 2011 09:14:00 +0200" -->
<!-- isosent="20110617071400" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp;amp; RHEL 5.6" -->
<!-- id="4DFAFEB8.8030206_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4DFAF6CF.9020305_at_unimelb.edu.au" -->
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
<strong>Date:</strong> 2011-06-17 03:14:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2214.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Previous message:</strong> <a href="2212.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>In reply to:</strong> <a href="2212.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2214.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Reply:</strong> <a href="2214.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 17/06/2011 08:40, Christopher Samuel a &#233;crit :
<br>
<span class="quotelev1">&gt; On 17/06/11 05:32, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ok, good.  I'll see if I can code this up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; ...done.  Try a nightly trunk tarball &gt;=r3516
</span><br>
<span class="quotelev2">&gt; &gt; (new nightly should be made in about 6 hours).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmm, now it looks like it doesn't correctly enable
</span><br>
<span class="quotelev1">&gt; pci support..
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
<span class="quotelev1">&gt; checking for pci_lookup_name in -lpci... (cached) no
</span><br>
<p>The problem is that it's cached so the first failure to find
<br>
pci_lookup_name causes the second check to be bypassed. When fixing
<br>
similar -lz problems, I had to look for another libpci symbol
<br>
(pci_cleanup instead of pci_init) to prevent such caching problems. It
<br>
makes the configure output strange because it may say that pci_init
<br>
isn't available, add -lz and then say that pci_cleanup is available.
<br>
<p>Anyway, pci_lookup_name seems to be the only API function that ends up
<br>
using the resolv code, so I don't see which other symbol to check for.
<br>
<p>Is there anyway to tell autoconf to ignore/drop some cached results?
<br>
Resetting the value of ac_cv_lib_pci_pci_lookup_name may work but I
<br>
don't know if we can do that (if we can, we should do it for
<br>
pci_init/pci_cleanup vs -lz too).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2214.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Previous message:</strong> <a href="2212.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>In reply to:</strong> <a href="2212.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2214.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Reply:</strong> <a href="2214.php">Christopher Samuel: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
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
