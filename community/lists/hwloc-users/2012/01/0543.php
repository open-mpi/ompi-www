<?
$subject_val = "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 20:05:16 2012" -->
<!-- isoreceived="20120201010516" -->
<!-- sent="Wed, 01 Feb 2012 12:05:09 +1100" -->
<!-- isosent="20120201010509" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'" -->
<!-- id="4F288FC5.6020305_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120131095138.GB4646_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 20:05:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2012/02/0544.php">Jeff Squyres: "[hwloc-users] PCI devices in the topology"</a>
<li><strong>Previous message:</strong> <a href="0542.php">Devendar Bureddy: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<li><strong>In reply to:</strong> <a href="0541.php">Samuel Thibault: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 31/01/12 20:51, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Could you try the attached patch?
</span><br>
<p>Doesn't appear to apply cleanly to the 1.4 release, it doesn't
<br>
like the comment change.  The other hunk does fix the build issue
<br>
though, thanks!
<br>
<p>samuel_at_eris:/tmp/hwloc-1.4$ patch -p0 &lt; ../patch 
<br>
patching file include/private/cpuid.h
<br>
Hunk #1 FAILED at 1.
<br>
1 out of 2 hunks FAILED -- saving rejects to file include/private/cpuid.h.rej
<br>
<p>samuel_at_eris:/tmp/hwloc-1.4$ cat include/private/cpuid.h.rej
<br>
- --- include/private/cpuid.h     (r?vision 4210)
<br>
+++ include/private/cpuid.h     (copie de travail)
<br>
@@ -1,5 +1,5 @@
<br>
&nbsp;/*
<br>
- - * Copyright ? 2010-2011 Universit? Bordeaux 1
<br>
+ * Copyright ? 2010-2012 Universit? Bordeaux 1
<br>
&nbsp;&nbsp;* Copyright ? 2010 Cisco Systems, Inc.  All rights reserved.
<br>
&nbsp;&nbsp;*
<br>
&nbsp;&nbsp;* See COPYING in top-level directory.
<br>
<p><p>- -- 
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
<p>iEYEARECAAYFAk8oj8UACgkQO2KABBYQAh8zXgCeJRkOa9W4/BW/gOz4/KjLI5G4
<br>
udQAnjws7wjDy2KeNgBGK8ySf3YXuLF5
<br>
=t6M0
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2012/02/0544.php">Jeff Squyres: "[hwloc-users] PCI devices in the topology"</a>
<li><strong>Previous message:</strong> <a href="0542.php">Devendar Bureddy: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<li><strong>In reply to:</strong> <a href="0541.php">Samuel Thibault: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<!-- nextthread="start" -->
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
