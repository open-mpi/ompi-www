<?
$subject_val = "[hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 03:49:35 2011" -->
<!-- isoreceived="20111214084935" -->
<!-- sent="Wed, 14 Dec 2011 00:49:09 -0800" -->
<!-- isosent="20111214084909" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc-1.3.1rc1: odd &amp;quot;make check&amp;quot; failure on Solaris 11" -->
<!-- id="4EE86305.4030207_at_lbl.gov" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 03:49:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2628.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11"</a>
<li><strong>Previous message:</strong> <a href="2626.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.1rc2r4045)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2628.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11"</a>
<li><strong>Maybe reply:</strong> <a href="2628.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice got me looking more closely at hwloc after my &quot;issues&quot; w/ it 
<br>
within openmpi-1.5.5rc1.
<br>
I gave hwloc-1.3.1rc1 a try on my Solaris 11 system and got a very &quot;odd&quot; 
<br>
failure (below) from &quot;make check&quot;.
<br>
<p>$ uname -a
<br>
SunOS pcp-j-19 5.11 snv_151a i86pc i386 i86pc Solaris
<br>
$ gcc --version | head -1
<br>
gcc (GCC) 3.4.3 (csl-sol210-3_4-20050802)
<br>
$ make check
<br>
[...]
<br>
gmake  check-TESTS
<br>
gmake[2]: Entering directory `/home/phargrov/hwloc-1.3.1rc1/BLD/utils'
<br>
Usage: hwloc-calc [options] &lt;location&gt; ...
<br>
&nbsp;&nbsp;[...rest of usage message...]
<br>
FAIL: test-hwloc-calc.sh
<br>
PASS: test-hwloc-distrib.sh
<br>
========================================================
<br>
1 of 2 tests failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
gmake[2]: *** [check-TESTS] Error 1
<br>
gmake[2]: Leaving directory `/home/phargrov/hwloc-1.3.1rc1/BLD/utils'
<br>
gmake[1]: *** [check-am] Error 2
<br>
gmake[1]: Leaving directory `/home/phargrov/hwloc-1.3.1rc1/BLD/utils'
<br>
gmake: *** [check-recursive] Error 1
<br>
<p><p>It appears that something has passed bogus arguments to hwloc-calc.
<br>
Adding &quot;set -x&quot; in test-hwloc-calc.sh.in I can find the failure is from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./hwloc-calc --if synthetic --input &quot;node:4 core:4 pu:4&quot; pu:22-47 
<br>
--largest --sep &quot;&quot;
<br>
Which I can confirm fails when run by hand on this platform, but works 
<br>
fine elsewhere.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2628.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11"</a>
<li><strong>Previous message:</strong> <a href="2626.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.1rc2r4045)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2628.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11"</a>
<li><strong>Maybe reply:</strong> <a href="2628.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11"</a>
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
