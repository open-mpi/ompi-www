<?
$subject_val = "Re: [hwloc-devel] 1.0.2rc2 posted";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 21 00:48:18 2010" -->
<!-- isoreceived="20100721044818" -->
<!-- sent="Wed, 21 Jul 2010 14:48:10 +1000" -->
<!-- isosent="20100721044810" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.0.2rc2 posted" -->
<!-- id="4C467C0A.6040908_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D3E1D53E-3D16-48A5-A975-FFE27C5EABBD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.0.2rc2 posted<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-21 00:48:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1202.php">Samuel Thibault: "Re: [hwloc-devel] 1.0.2rc2 posted"</a>
<li><strong>Previous message:</strong> <a href="1200.php">Christopher Samuel: "Re: [hwloc-devel] 1.0.2rc2 posted"</a>
<li><strong>In reply to:</strong> <a href="1194.php">Jeff Squyres: "[hwloc-devel] 1.0.2rc2 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1202.php">Samuel Thibault: "Re: [hwloc-devel] 1.0.2rc2 posted"</a>
<li><strong>Reply:</strong> <a href="1202.php">Samuel Thibault: "Re: [hwloc-devel] 1.0.2rc2 posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 20/07/10 22:09, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Including the extern &quot;C&quot; stuff Brice just put in:
</span><br>
<p>Passes with GCC 4.5.0 on CentOS 5.5 and with both
<br>
stock GCC and llvm-gcc on Ubuntu 10.04.
<br>
<p>I do see warnings when doing a make check:
<br>
<p>&nbsp;&nbsp;CC     libhwloc_ports_la-topology-freebsd.lo
<br>
topology-freebsd.c: In function ?hwloc_freebsd_set_thread_cpubind?:
<br>
topology-freebsd.c:123: warning: passing argument 3 of
<br>
?pthread_setaffinity_np? from incompatible pointer type
<br>
/usr/include/pthread.h:448: note: expected ?const struct cpu_set_t *?
<br>
but argument is of type ?cpuset_t *?
<br>
topology-freebsd.c: In function ?hwloc_freebsd_get_thread_cpubind?:
<br>
topology-freebsd.c:147: warning: passing argument 3 of
<br>
?pthread_getaffinity_np? from incompatible pointer type
<br>
/usr/include/pthread.h:453: note: expected ?struct cpu_set_t *? but
<br>
argument is of type ?cpuset_t *?
<br>
<p>Not sure if that's important.
<br>
<p>- -- 
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
<p>iEYEARECAAYFAkxGfAoACgkQO2KABBYQAh+gHwCeKYnFWNgntPEhVvhg/aSzINci
<br>
TiAAoIHIRgC+nPIU7LahJgcJbNJRETJT
<br>
=rKS3
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1202.php">Samuel Thibault: "Re: [hwloc-devel] 1.0.2rc2 posted"</a>
<li><strong>Previous message:</strong> <a href="1200.php">Christopher Samuel: "Re: [hwloc-devel] 1.0.2rc2 posted"</a>
<li><strong>In reply to:</strong> <a href="1194.php">Jeff Squyres: "[hwloc-devel] 1.0.2rc2 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1202.php">Samuel Thibault: "Re: [hwloc-devel] 1.0.2rc2 posted"</a>
<li><strong>Reply:</strong> <a href="1202.php">Samuel Thibault: "Re: [hwloc-devel] 1.0.2rc2 posted"</a>
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
