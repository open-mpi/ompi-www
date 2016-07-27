<?
$subject_val = "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 24 01:47:51 2010" -->
<!-- isoreceived="20101124064751" -->
<!-- sent="Wed, 24 Nov 2010 17:47:43 +1100" -->
<!-- isosent="20101124064743" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64" -->
<!-- id="4CECB50F.7080403_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CE985A0.7040902_at_unimelb.edu.au" -->
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
<strong>Date:</strong> 2010-11-24 01:47:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1587.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1585.php">Christopher Samuel: "Re: [hwloc-devel] Valgrind errors for hwloc_bind in 1.1rc4r2825"</a>
<li><strong>In reply to:</strong> <a href="1531.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1587.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1587.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1588.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1589.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1592.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 22/11/10 07:48, Christopher Samuel wrote:
<br>
<p><span class="quotelev1">&gt; *** glibc detected *** /tmp/hwloc/hwloc-1.1rc2/tests/.libs/hwloc_bind:
</span><br>
<span class="quotelev1">&gt; free(): invalid next size (fast): 0x1001c240 ***
</span><br>
<p>Went and had a look at the code that was failing.  This is
<br>
the fragement that fails:
<br>
<p>#ifdef HWLOC_HAVE_MIGRATE_PAGES
<br>
&nbsp;&nbsp;&nbsp;&nbsp;unsigned long *fullmask = malloc(max_os_index/HWLOC_BITS_PER_LONG *
<br>
sizeof(long));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (fullmask) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memset(fullmask, max_os_index/HWLOC_BITS_PER_LONG * sizeof(long),
<br>
0xf);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;err = migrate_pages(0, max_os_index+1, fullmask, linuxmask);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(fullmask);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;err = -1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (err &lt; 0 &amp;&amp; (flags &amp; HWLOC_MEMBIND_STRICT))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto out_with_mask;
<br>
#else
<br>
<p>I can get the free(fullmask); to not fail if I comment out
<br>
the memset() and migrate_pages() calls.  If I just comment
<br>
out the migrate_pages() then it still fails so there's
<br>
something wrong in that calculation from the look of it.
<br>
<p>Unfortunately I'm not much of a programmer! :-(
<br>
<p>cheers,
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
<p>iEYEARECAAYFAkzstQ8ACgkQO2KABBYQAh91EgCggYFI1ncG1Z7Mhu3FZhzMk8q6
<br>
X8UAn38Uk2ifq1fAcc5qL2syIm/alqFU
<br>
=TQVw
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1587.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1585.php">Christopher Samuel: "Re: [hwloc-devel] Valgrind errors for hwloc_bind in 1.1rc4r2825"</a>
<li><strong>In reply to:</strong> <a href="1531.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1587.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1587.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1588.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1589.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1592.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
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
