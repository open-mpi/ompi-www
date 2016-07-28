<?
$subject_val = "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 22:00:17 2012" -->
<!-- isoreceived="20120201030017" -->
<!-- sent="Tue, 31 Jan 2012 18:59:54 -0800" -->
<!-- isosent="20120201025954" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7" -->
<!-- id="4F28AAAA.5020600_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F28A82D.9000102_at_unimelb.edu.au" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 21:59:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2744.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2742.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 libtool broken on Solaris10-x86"</a>
<li><strong>In reply to:</strong> <a href="2738.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2758.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I accidentally under-reported the failures I saw w/ xlc.
<br>
In addition to the 2 assertion failures, I had the following SEGV's from 
<br>
1.3.1:
<br>
<p>/bin/sh: line 5:  6644 Segmentation fault      ${dir}$tst
<br>
FAIL: hwloc_bind
<br>
<p>/bin/sh: line 5:  6676 Segmentation fault      ${dir}$tst
<br>
FAIL: hwloc_get_last_cpu_location
<br>
<p>/bin/sh: line 5:  6768 Segmentation fault      ${dir}$tst
<br>
FAIL: hwloc_is_thissystem
<br>
<p>Which matches Chris's report.
<br>
I think the assertion failure w/ 1.3.1 and gcc is an entirely different 
<br>
problem.
<br>
<p>-Paul
<br>
<p>On 1/31/2012 6:49 PM, Christopher Samuel wrote:
<br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 01/02/12 12:56, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When running &quot;make check&quot; in hwloc-1.3.1 on a Linux/POWER7 system I see:
</span><br>
<span class="quotelev1">&gt; Doesn't seem to happen on Power6 (SLES10SP4) with GCC for hwloc 1.3.1 or
</span><br>
<span class="quotelev1">&gt; 1.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With XLC and 1.3.1 and 1.4 I get plenty of warnings (compile logs for
</span><br>
<span class="quotelev1">&gt; both attached) whilst compiling and then 4 failures in make check
</span><br>
<span class="quotelev1">&gt; (accompanied with segmentation faults):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; samuel_at_tambo:~/HWLOC/hwloc-1.3.1&gt;  grep -B1 FAIL: log
</span><br>
<span class="quotelev1">&gt; /bin/sh: line 1:  5267 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev1">&gt; FAIL: hwloc_bind
</span><br>
<span class="quotelev1">&gt; /bin/sh: line 1:  5285 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev1">&gt; FAIL: hwloc_get_last_cpu_location
</span><br>
<span class="quotelev1">&gt; - --
</span><br>
<span class="quotelev1">&gt; /bin/sh: line 1:  5335 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev1">&gt; FAIL: hwloc_is_thissystem
</span><br>
<span class="quotelev1">&gt; - --
</span><br>
<span class="quotelev1">&gt; /bin/sh: line 1:  5481 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev1">&gt; FAIL: glibc-sched
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; samuel_at_tambo:~/HWLOC/hwloc-1.4&gt;  grep -B1 FAIL: log
</span><br>
<span class="quotelev1">&gt; /bin/sh: line 1: 16973 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev1">&gt; FAIL: hwloc_bind
</span><br>
<span class="quotelev1">&gt; /bin/sh: line 1: 16991 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev1">&gt; FAIL: hwloc_get_last_cpu_location
</span><br>
<span class="quotelev1">&gt; - --
</span><br>
<span class="quotelev1">&gt; /bin/sh: line 1: 17073 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev1">&gt; FAIL: hwloc_is_thissystem
</span><br>
<span class="quotelev1">&gt; - --
</span><br>
<span class="quotelev1">&gt; /bin/sh: line 1: 17229 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev1">&gt; FAIL: glibc-sched
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; - -- 
</span><br>
<span class="quotelev1">&gt;      Christopher Samuel - Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt;   VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt;   Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt;           <a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; Version: GnuPG v1.4.11 (GNU/Linux)
</span><br>
<span class="quotelev1">&gt; Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; iEYEARECAAYFAk8oqC0ACgkQO2KABBYQAh9oQgCfepxba/cUI4U6OgbU2kmfE76M
</span><br>
<span class="quotelev1">&gt; xMAAoJBPm2gtrdYbAlgv58Kz3Jp+8V8o
</span><br>
<span class="quotelev1">&gt; =bhTx
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2743/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2744.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2742.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 libtool broken on Solaris10-x86"</a>
<li><strong>In reply to:</strong> <a href="2738.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2758.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
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
