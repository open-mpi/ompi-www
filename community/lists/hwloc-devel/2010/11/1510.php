<?
$subject_val = "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 20 09:41:21 2010" -->
<!-- isoreceived="20101120144121" -->
<!-- sent="Sun, 21 Nov 2010 01:41:03 +1100" -->
<!-- isosent="20101120144103" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64" -->
<!-- id="4CE7DDFF.2040102_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CE7DAD1.4000808_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-20 09:41:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1511.php">Christopher Samuel: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<li><strong>Previous message:</strong> <a href="1509.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1509.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1513.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1513.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 21/11/10 01:27, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Le 20/11/2010 04:16, Christopher Samuel a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm getting a failure doing a make check on SLES10 SP1 on
</span><br>
<span class="quotelev2">&gt;&gt; our BG/P service (management) node:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this the same machine that fails to configure because of cpuid in the
</span><br>
<span class="quotelev1">&gt; libpci branch?
</span><br>
<p>Ignore that, it was a brain failure. :-)
<br>
<p>It was configuring, just not (at the time) detecting
<br>
the new libpci library I'd installed.  Then I realised
<br>
that SLES10 calls it pciutils-devel instead of libpci-devel.
<br>
<p>It detects the PCI devices now, I'll send the output
<br>
in the other thread.
<br>
<p><span class="quotelev2">&gt;&gt; FAIL: test-gather-topology.sh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could send the output of hwloc-gather-topology.sh ? This is the easiest
</span><br>
<span class="quotelev1">&gt; way for us to debug remotely.
</span><br>
<p>Not a problem, find both the output file and the tarball
<br>
attached to this email.
<br>
<p>All the best!
<br>
Chris
<br>
- -- 
<br>
&nbsp;Christopher Samuel - Senior Systems Administrator
<br>
&nbsp;VLSCI - Victorian Life Sciences Computational Initiative
<br>
&nbsp;Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.10 (GNU/Linux)
<br>
Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
<br>
<p>iEYEARECAAYFAkzn3f8ACgkQO2KABBYQAh/FWgCghfAkdZ7KU/Xwd5a0omenqLyR
<br>
sgIAn1r8bKo6xQAsTIsfzOIFxokqMbNP
<br>
=7Y4a
<br>
-----END PGP SIGNATURE-----
<br>
<p>

<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1510/sles10sp1-ppc64.output">sles10sp1-ppc64.output</a>
</ul>
<!-- attachment="sles10sp1-ppc64.output" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1510/sles10sp1-ppc64.tar.bz2">sles10sp1-ppc64.tar.bz2</a>
</ul>
<!-- attachment="sles10sp1-ppc64.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1511.php">Christopher Samuel: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<li><strong>Previous message:</strong> <a href="1509.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1509.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1513.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1513.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
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
