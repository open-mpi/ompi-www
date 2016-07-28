<?
$subject_val = "[OMPI users] report for openmpi-1.9a1r30290";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 15 07:10:14 2014" -->
<!-- isoreceived="20140115121014" -->
<!-- sent="Wed, 15 Jan 2014 13:09:42 +0100 (CET)" -->
<!-- isosent="20140115120942" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] report for openmpi-1.9a1r30290" -->
<!-- id="201401151209.s0FC9gXm011495_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] report for openmpi-1.9a1r30290<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-15 07:09:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23358.php">CUDENNEC Loic: "[OMPI users] [ICCS/Alchemy] Last Call for Papers: Architecture, Languages, Compilation and Hardware support for Emerging ManYcore systems"</a>
<li><strong>Previous message:</strong> <a href="23356.php">Jed Brown: "[OMPI users] CXX=no in config.status, breaks mpic++ wrapper"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I installed openmpi-1.9a1r30290 on &quot;Solaris 10 x86_64&quot;,
<br>
&quot;Solaris 10 Sparc&quot;, and &quot;openSUSE Linux 12.1 x86_64&quot; with Sun C
<br>
5.12 and gcc-4.8.0 in 32- and 64-bit. I could successfully build
<br>
everything and simple tests on one machine work fine. Even
<br>
&quot;ompi_info --all&quot; works fine now on Solaris Sparc. Thank you
<br>
very much to everybody who solved the problems and especially
<br>
to Jeff, who found the reason for the SIGBUS error, so that
<br>
it could be solved.
<br>
<p>&quot;make check&quot; reports a problem for the 32-bit version for both
<br>
&quot;cc&quot; and &quot;gcc&quot;.
<br>
<p>linpc1 openmpi-1.9a1r30290-Linux.x86_64.32_cc 115 tail -14 \
<br>
&nbsp;&nbsp;log.make-check.Linux.x86_64.32_cc
<br>
<p>SUPPORT: OMPI Test failed: opal_path_nfs() (1 of 22 failed)
<br>
FAIL: opal_path_nfs
<br>
========================================================
<br>
1 of 2 tests failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
make[3]: *** [check-TESTS] Error 1
<br>
make[3]: Leaving directory
<br>
&nbsp;&nbsp;`.../openmpi-1.9a1r30290-Linux.x86_64.32_cc/test/util'
<br>
...
<br>
<p><p>This problem was solved earlier for the 64-bit version.
<br>
<p>linpc1 openmpi-1.9a1r30290-Linux.x86_64.64_cc 117 tail -14 \
<br>
&nbsp;&nbsp;log.make-check.Linux.x86_64.64_cc
<br>
SUPPORT: OMPI Test Passed: opal_path_nfs(): (22 tests)
<br>
PASS: opal_path_nfs
<br>
==================
<br>
All 2 tests passed
<br>
==================
<br>
make[3]: Leaving directory
<br>
&nbsp;&nbsp;`.../openmpi-1.9a1r30290-Linux.x86_64.64_cc/test/util'
<br>
...
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23358.php">CUDENNEC Loic: "[OMPI users] [ICCS/Alchemy] Last Call for Papers: Architecture, Languages, Compilation and Hardware support for Emerging ManYcore systems"</a>
<li><strong>Previous message:</strong> <a href="23356.php">Jed Brown: "[OMPI users] CXX=no in config.status, breaks mpic++ wrapper"</a>
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
