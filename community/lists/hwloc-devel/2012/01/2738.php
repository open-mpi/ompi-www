<?
$subject_val = "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 21:49:24 2012" -->
<!-- isoreceived="20120201024924" -->
<!-- sent="Wed, 01 Feb 2012 13:49:17 +1100" -->
<!-- isosent="20120201024917" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7" -->
<!-- id="4F28A82D.9000102_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F289BCC.6040408_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 21:49:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2739.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 install failure w/ older GNU sed"</a>
<li><strong>Previous message:</strong> <a href="2737.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 build failure w/ Solaris Studio compilers"</a>
<li><strong>In reply to:</strong> <a href="2733.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2743.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Reply:</strong> <a href="2743.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2758.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 01/02/12 12:56, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; When running &quot;make check&quot; in hwloc-1.3.1 on a Linux/POWER7 system I see:
</span><br>
<p>Doesn't seem to happen on Power6 (SLES10SP4) with GCC for hwloc 1.3.1 or
<br>
1.4.
<br>
<p>With XLC and 1.3.1 and 1.4 I get plenty of warnings (compile logs for
<br>
both attached) whilst compiling and then 4 failures in make check
<br>
(accompanied with segmentation faults):
<br>
<p>samuel_at_tambo:~/HWLOC/hwloc-1.3.1&gt; grep -B1 FAIL: log
<br>
/bin/sh: line 1:  5267 Segmentation fault      ${dir}$tst
<br>
FAIL: hwloc_bind
<br>
/bin/sh: line 1:  5285 Segmentation fault      ${dir}$tst
<br>
FAIL: hwloc_get_last_cpu_location
<br>
- --
<br>
/bin/sh: line 1:  5335 Segmentation fault      ${dir}$tst
<br>
FAIL: hwloc_is_thissystem
<br>
- --
<br>
/bin/sh: line 1:  5481 Segmentation fault      ${dir}$tst
<br>
FAIL: glibc-sched
<br>
<p><p>samuel_at_tambo:~/HWLOC/hwloc-1.4&gt; grep -B1 FAIL: log
<br>
/bin/sh: line 1: 16973 Segmentation fault      ${dir}$tst
<br>
FAIL: hwloc_bind
<br>
/bin/sh: line 1: 16991 Segmentation fault      ${dir}$tst
<br>
FAIL: hwloc_get_last_cpu_location
<br>
- --
<br>
/bin/sh: line 1: 17073 Segmentation fault      ${dir}$tst
<br>
FAIL: hwloc_is_thissystem
<br>
- --
<br>
/bin/sh: line 1: 17229 Segmentation fault      ${dir}$tst
<br>
FAIL: glibc-sched
<br>
<p><p>cheers,
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
<p>iEYEARECAAYFAk8oqC0ACgkQO2KABBYQAh9oQgCfepxba/cUI4U6OgbU2kmfE76M
<br>
xMAAoJBPm2gtrdYbAlgv58Kz3Jp+8V8o
<br>
=bhTx
<br>
-----END PGP SIGNATURE-----
<br>
<p>

<br><hr>
<ul>
<li>text/x-log attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2738/hwloc-1.3.1-xlc-build.log">hwloc-1.3.1-xlc-build.log</a>
</ul>
<!-- attachment="hwloc-1.3.1-xlc-build.log" -->
<hr>
<ul>
<li>text/x-log attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2738/hwloc-1.4-xlc-build.log">hwloc-1.4-xlc-build.log</a>
</ul>
<!-- attachment="hwloc-1.4-xlc-build.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2739.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 install failure w/ older GNU sed"</a>
<li><strong>Previous message:</strong> <a href="2737.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 build failure w/ Solaris Studio compilers"</a>
<li><strong>In reply to:</strong> <a href="2733.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2743.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Reply:</strong> <a href="2743.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2758.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
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
