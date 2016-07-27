<?
$subject_val = "[hwloc-devel] hwloc 1.1rc4r2838 warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 24 23:26:09 2010" -->
<!-- isoreceived="20101125042609" -->
<!-- sent="Thu, 25 Nov 2010 15:26:02 +1100" -->
<!-- isosent="20101125042602" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc 1.1rc4r2838 warnings" -->
<!-- id="4CEDE55A.7090805_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc 1.1rc4r2838 warnings<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-24 23:26:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1616.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1rc4r2838 warnings"</a>
<li><strong>Previous message:</strong> <a href="1614.php">Christopher Samuel: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1616.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1rc4r2838 warnings"</a>
<li><strong>Reply:</strong> <a href="1616.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1rc4r2838 warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>Not sure if these were present beforehand, but Ubuntu 10.04
<br>
warns about the following issues on x86-64 when doing a &quot;make check&quot;:
<br>
<p>/home/samuel/Downloads/HWLOC/v1.1/tests/ports/include/windows.h:23:
<br>
warning: function declaration isn?t a prototype
<br>
/home/samuel/Downloads/HWLOC/v1.1/tests/ports/include/windows.h:23:
<br>
warning: function declaration isn?t a prototype
<br>
topology-windows.c:209: warning: ISO C forbids assignment between
<br>
function pointer and ?void *?
<br>
topology-windows.c:210: warning: ISO C forbids assignment between
<br>
function pointer and ?void *?
<br>
topology-windows.c:214: warning: assignment from incompatible pointer type
<br>
topology-windows.c:219: warning: assignment from incompatible pointer type
<br>
topology-windows.c:280: warning: ISO C forbids assignment between
<br>
function pointer and ?void *?
<br>
topology-windows.c:281: warning: ISO C forbids assignment between
<br>
function pointer and ?void *?
<br>
topology-windows.c:282: warning: ISO C forbids assignment between
<br>
function pointer and ?void *?
<br>
topology-windows.c:283: warning: ISO C forbids assignment between
<br>
function pointer and ?void *?
<br>
topology-freebsd.c:125: warning: passing argument 3 of
<br>
?pthread_setaffinity_np? from incompatible pointer type
<br>
topology-freebsd.c:149: warning: passing argument 3 of
<br>
?pthread_getaffinity_np? from incompatible pointer type
<br>
xmlbuffer.c:39: warning: format not a string literal and no format arguments
<br>
xmlbuffer.c:42: warning: format not a string literal and no format arguments
<br>
<p>SLES10 has these additional warnings:
<br>
<p>topology-linux.c:1002: warning: implicit declaration of function
<br>
?migrate_pages?
<br>
lstopo.c:186:5: warning: &quot;CAIRO_HAS_SVG_SURFACE&quot; is not defined
<br>
lstopo.c:517:5: warning: &quot;CAIRO_HAS_SVG_SURFACE&quot; is not defined
<br>
lstopo-cairo.c:22:5: warning: &quot;CAIRO_HAS_SVG_SURFACE&quot; is not defined
<br>
lstopo-cairo.c:50:104: warning: &quot;CAIRO_HAS_SVG_SURFACE&quot; is not defined
<br>
lstopo-cairo.c:87:79: warning: &quot;CAIRO_HAS_SVG_SURFACE&quot; is not defined
<br>
lstopo-cairo.c:443:5: warning: &quot;CAIRO_HAS_SVG_SURFACE&quot; is not defined
<br>
hwloc-distrib.c:199: warning: comparison between signed and unsigned
<br>
<p>Any use ?
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
<p>iEYEARECAAYFAkzt5VoACgkQO2KABBYQAh8XQACglU3LKKDMuPk3Pywm/0ZdRh8o
<br>
Pu0An0bu4feXwQctibrBoKP2UBCZu4Ay
<br>
=UyJP
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1616.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1rc4r2838 warnings"</a>
<li><strong>Previous message:</strong> <a href="1614.php">Christopher Samuel: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1616.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1rc4r2838 warnings"</a>
<li><strong>Reply:</strong> <a href="1616.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1rc4r2838 warnings"</a>
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
