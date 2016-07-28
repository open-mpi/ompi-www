<?
$subject_val = "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 17 04:04:27 2011" -->
<!-- isoreceived="20110617080427" -->
<!-- sent="Fri, 17 Jun 2011 18:04:20 +1000" -->
<!-- isosent="20110617080420" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp;amp; RHEL 5.6" -->
<!-- id="4DFB0A84.1020701_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4DFAFEB8.8030206_at_inria.fr" -->
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
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-17 04:04:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2215.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Previous message:</strong> <a href="2213.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>In reply to:</strong> <a href="2213.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2215.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Reply:</strong> <a href="2215.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Reply:</strong> <a href="2216.php">Jeff Squyres: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 17/06/11 17:14, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Is there anyway to tell autoconf to ignore/drop some cached results?
</span><br>
<span class="quotelev1">&gt; Resetting the value of ac_cv_lib_pci_pci_lookup_name may work but I
</span><br>
<span class="quotelev1">&gt; don't know if we can do that (if we can, we should do it for
</span><br>
<span class="quotelev1">&gt; pci_init/pci_cleanup vs -lz too).
</span><br>
<p>Good guess Brice! This patch to configure from that nightly
<br>
snapshot gets it working again:
<br>
<p>- --- configure.old       2011-06-17 11:01:25.000000000 +1000
<br>
+++ configure   2011-06-17 17:59:23.000000000 +1000
<br>
@@ -10321,6 +10321,7 @@
<br>
&nbsp;if test &quot;x$ac_cv_lib_resolv_inet_ntoa&quot; = x&quot;&quot;yes; then :
<br>
&nbsp;&nbsp;&nbsp;{ $as_echo &quot;$as_me:${as_lineno-$LINENO}: checking for pci_lookup_name in -lpci&quot; &gt;&amp;5
<br>
&nbsp;$as_echo_n &quot;checking for pci_lookup_name in -lpci... &quot; &gt;&amp;6; }
<br>
+unset ac_cv_lib_pci_pci_lookup_name
<br>
&nbsp;if test &quot;${ac_cv_lib_pci_pci_lookup_name+set}&quot; = set; then :
<br>
&nbsp;&nbsp;&nbsp;$as_echo_n &quot;(cached) &quot; &gt;&amp;6
<br>
&nbsp;else
<br>
<p>thus:
<br>
<p>checking pci/pci.h usability... yes
<br>
checking pci/pci.h presence... yes
<br>
checking for pci/pci.h... yes
<br>
checking for pci_init in -lpci... yes
<br>
checking for pci_lookup_name in -lpci... no
<br>
checking for inet_ntoa in -lresolv... yes
<br>
checking for pci_lookup_name in -lpci... yes
<br>
checking whether PCI_LOOKUP_NO_NUMBERS is declared... yes
<br>
checking for pci_find_cap in -lpci... yes
<br>
checking whether struct pci_dev has a device_class field... yes
<br>
checking whether struct pci_dev has a domain field... yes
<br>
<p>and it compiles and builds an lstopo which includes PCI info!
<br>
<p>cheers,
<br>
Chris
<br>
- -- 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Christopher Samuel - Senior Systems Administrator
<br>
&nbsp;VLSCI - Victorian Life Sciences Computation Initiative
<br>
&nbsp;Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.11 (GNU/Linux)
<br>
Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
<br>
<p>iEYEARECAAYFAk37CoQACgkQO2KABBYQAh+rNgCgjjC7lgqxKd4EFqROW88roXHe
<br>
J+QAnRBAFPxTK1dRB/06jjV1I9CTWZlv
<br>
=1yf6
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2215.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Previous message:</strong> <a href="2213.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>In reply to:</strong> <a href="2213.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2215.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Reply:</strong> <a href="2215.php">Brice Goglin: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Reply:</strong> <a href="2216.php">Jeff Squyres: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
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
