<?
$subject_val = "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.2rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  6 20:14:15 2011" -->
<!-- isoreceived="20110407001415" -->
<!-- sent="Thu, 07 Apr 2011 10:14:07 +1000" -->
<!-- isosent="20110407001407" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.2rc1 released" -->
<!-- id="4D9D01CF.1010204_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D9CA01D.20707_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.2rc1 released<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-06 20:14:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2106.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.2rc1 released"</a>
<li><strong>Previous message:</strong> <a href="2104.php">Christopher Samuel: "Re: [hwloc-devel] AMD fusion &amp; hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2106.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.2rc1 released"</a>
<li><strong>Maybe reply:</strong> <a href="2106.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.2rc1 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 07/04/11 03:17, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; The Hardware Locality (hwloc) team is pleased to
</span><br>
<span class="quotelev1">&gt; announce the first release candidate of v1.2:
</span><br>
<p>I get the following warnings when doing a &quot;make check&quot;
<br>
on SuSE SLES10 on PPC64 and RHEL5.6 on x86-64:
<br>
<p>&nbsp;&nbsp;CC     libhwloc_ports_la-topology-windows.lo
<br>
topology-windows.c: In function 'hwloc_win_get_VirtualAllocExNumaProc':
<br>
topology-windows.c:323: warning: assignment from incompatible pointer type
<br>
topology-windows.c:328: warning: assignment from incompatible pointer type
<br>
&nbsp;&nbsp;CC     libhwloc_ports_la-topology-darwin.lo
<br>
&nbsp;&nbsp;CC     libhwloc_ports_la-topology-freebsd.lo
<br>
topology-freebsd.c: In function 'hwloc_freebsd_set_thread_cpubind':
<br>
topology-freebsd.c:126: warning: passing argument 3 of 'pthread_setaffinity_np' from incom
<br>
patible pointer type
<br>
topology-freebsd.c: In function 'hwloc_freebsd_get_thread_cpubind':
<br>
topology-freebsd.c:150: warning: passing argument 3 of 'pthread_getaffinity_np' from incom
<br>
patible pointer type
<br>
<p><p>On Ubuntu 10.04 I get the same set (slightly different diagnostics):
<br>
<p>&nbsp;&nbsp;CC     libhwloc_ports_la-topology-windows.lo
<br>
topology-windows.c: In function 'hwloc_win_get_VirtualAllocExNumaProc':
<br>
topology-windows.c:323: warning: assignment from incompatible pointer type
<br>
topology-windows.c:328: warning: assignment from incompatible pointer type
<br>
&nbsp;&nbsp;CC     libhwloc_ports_la-topology-darwin.lo
<br>
&nbsp;&nbsp;CC     libhwloc_ports_la-topology-freebsd.lo
<br>
topology-freebsd.c: In function 'hwloc_freebsd_set_thread_cpubind':
<br>
topology-freebsd.c:126: warning: passing argument 3 of 'pthread_setaffinity_np' from incompatible pointer type
<br>
/usr/include/pthread.h:448: note: expected 'const struct cpu_set_t *' but argument is of type 'cpuset_t *'
<br>
topology-freebsd.c: In function 'hwloc_freebsd_get_thread_cpubind':
<br>
topology-freebsd.c:150: warning: passing argument 3 of 'pthread_getaffinity_np' from incompatible pointer type
<br>
/usr/include/pthread.h:453: note: expected 'struct cpu_set_t *' but argument is of type 'cpuset_t *'
<br>
<p><p>Are these ignorable ?
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
Version: GnuPG v1.4.10 (GNU/Linux)
<br>
Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
<br>
<p>iEYEARECAAYFAk2dAc8ACgkQO2KABBYQAh8/XACfXQvAYrwQ9rry1qSL3mvyCvKj
<br>
SHoAn0ZZIXiXOaylfQB09jGtFJJJ8S3Z
<br>
=ajlA
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2106.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.2rc1 released"</a>
<li><strong>Previous message:</strong> <a href="2104.php">Christopher Samuel: "Re: [hwloc-devel] AMD fusion &amp; hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2106.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.2rc1 released"</a>
<li><strong>Maybe reply:</strong> <a href="2106.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.2rc1 released"</a>
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
