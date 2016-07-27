<?
$subject_val = "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 21 13:45:37 2010" -->
<!-- isoreceived="20101121184537" -->
<!-- sent="Mon, 22 Nov 2010 05:45:32 +1100" -->
<!-- isosent="20101121184532" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64" -->
<!-- id="4CE968CC.8080504_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CE962BD.5070305_at_unimelb.edu.au" -->
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
<strong>Date:</strong> 2010-11-21 13:45:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1523.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1521.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1521.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1523.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1523.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 22/11/10 05:19, Christopher Samuel wrote:
<br>
<p><span class="quotelev1">&gt; Good catch - it exists but it is empty.
</span><br>
<p>Still puzzled about why lstopo works reading this data
<br>
on an x86-64 laptop but not on the system itself so I
<br>
did a bit of poking with strace -e openat,faccessat to
<br>
see if I could see where it was diverging.
<br>
<p>Here's what happens on the laptop:
<br>
<p>faccessat(3, &quot;sys/devices/system/cpu/cpu0/topology&quot;, R_OK) = -1 ENOENT
<br>
(No such file or directory)
<br>
openat(3, &quot;proc/cpuinfo&quot;, O_RDONLY)     = 4
<br>
openat(3, &quot;proc/device-tree/cpus&quot;, O_RDONLY|O_DIRECTORY) = 4
<br>
openat(3, &quot;proc/device-tree/cpus/l2-cache_at_2000/device_type&quot;, O_RDONLY) = 5
<br>
openat(3, &quot;proc/device-tree/cpus/l2-cache_at_2000/reg&quot;, O_RDONLY) = 5
<br>
openat(3, &quot;proc/device-tree/cpus/l2-cache_at_2000/l2-cache&quot;, O_RDONLY) = 5
<br>
openat(3, &quot;proc/device-tree/cpus/l2-cache_at_2000/ibm,phandle&quot;, O_RDONLY) = 5
<br>
<p>Here's what happens on the PPC64 box:
<br>
<p>faccessat(3, &quot;sys/devices/system/cpu/cpu0/topology&quot;, R_OK) = -1 ENOENT
<br>
(No such file or directory)
<br>
openat(3, &quot;proc/cpuinfo&quot;, O_RDONLY)     = 4
<br>
openat(3, &quot;proc/device-tree/cpus&quot;, O_RDONLY|O_DIRECTORY) = 4
<br>
openat(3, &quot;sys/class/dmi/id/product_name&quot;, O_RDONLY) = -1 ENOENT (No
<br>
such file or directory)
<br>
openat(3, &quot;sys/class/dmi/id/product_version&quot;, O_RDONLY) = -1 ENOENT (No
<br>
such file or directory)
<br>
openat(3, &quot;sys/class/dmi/id/product_serial&quot;, O_RDONLY) = -1 ENOENT (No
<br>
such file or directory)
<br>
openat(3, &quot;sys/class/dmi/id/product_uuid&quot;, O_RDONLY) = -1 ENOENT (No
<br>
such file or directory)
<br>
openat(3, &quot;sys/class/dmi/id/board_vendor&quot;, O_RDONLY) = -1 ENOENT (No
<br>
such file or directory)
<br>
<p>I'll try applying the same patch to the x86-64 build and doing
<br>
a --enable-debug build there and compare them.
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
<p>iEYEARECAAYFAkzpaMwACgkQO2KABBYQAh/bAACeK8Hr+YH69HezvQd3efXwU/Iv
<br>
3+AAoI3iwa8jxwvwGE31+0P6QELeTuVf
<br>
=2Nou
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1523.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1521.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1521.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1523.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1523.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
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
