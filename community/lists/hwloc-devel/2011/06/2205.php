<?
$subject_val = "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 14 20:06:55 2011" -->
<!-- isoreceived="20110615000655" -->
<!-- sent="Wed, 15 Jun 2011 10:06:48 +1000" -->
<!-- isosent="20110615000648" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp;amp; RHEL 5.6" -->
<!-- id="4DF7F798.8020701_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9E61A00D-2906-4D3F-B04F-161FFCD11F9E_at_cisco.com" -->
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
<strong>Date:</strong> 2011-06-14 20:06:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2206.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3512)"</a>
<li><strong>Previous message:</strong> <a href="2204.php">Jeff Squyres: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>In reply to:</strong> <a href="2204.php">Jeff Squyres: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2209.php">Jeff Squyres: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Reply:</strong> <a href="2209.php">Jeff Squyres: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 14/06/11 22:39, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Chris -- can you try linking this simple app to see if
</span><br>
<span class="quotelev1">&gt; it causes the linker error, and further try adding
</span><br>
<span class="quotelev1">&gt; -lresolv to see if that fixes the error?
</span><br>
<p>Yup - that does it and the error confirms the symbol
<br>
that is causing this odd behaviour in libpci.a.
<br>
<p>$ gcc -o conftest conftest.c -lpci
<br>
/usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../lib64/libpci.a(names-net.o): In function `pci_id_net_lookup':
<br>
(.text+0x1bc): undefined reference to `__res_query'
<br>
collect2: ld returned 1 exit status
<br>
$
<br>
<p>$ gcc -o conftest conftest.c -lpci -lresolv
<br>
$
<br>
<p>Same behaviour on both RHEL 5.6 and CentOS 5.6 (as you'd
<br>
hope for!).
<br>
<p><span class="quotelev1">&gt; FWIW, on my RHEL 5 machine (with only libpci.a), both
</span><br>
<span class="quotelev1">&gt; link commands seem to work (but my libpci.a doesn't
</span><br>
<span class="quotelev1">&gt; have a __res_query symbol).
</span><br>
<p>Hmm, which release of RHEL5 is that ?
<br>
<p>cheers!
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
<p>iEYEARECAAYFAk3395gACgkQO2KABBYQAh/NWgCfcDic6D8iQVchBisWB9X1u29t
<br>
oNcAn29l89HWJMYJMgcMBqADJ0mPxj2J
<br>
=EImL
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2206.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3512)"</a>
<li><strong>Previous message:</strong> <a href="2204.php">Jeff Squyres: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>In reply to:</strong> <a href="2204.php">Jeff Squyres: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2209.php">Jeff Squyres: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
<li><strong>Reply:</strong> <a href="2209.php">Jeff Squyres: "Re: [hwloc-devel] hwloc trunk nightly 1.3a1r3511 fails to build on CentOS 5.6 &amp; RHEL 5.6"</a>
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
