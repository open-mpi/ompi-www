<?
$subject_val = "[OMPI devel] [2.0.0rc2] ppc SEGVs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 17:39:30 2016" -->
<!-- isoreceived="20160502213930" -->
<!-- sent="Mon, 2 May 2016 14:39:17 -0700" -->
<!-- isosent="20160502213917" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [2.0.0rc2] ppc SEGVs" -->
<!-- id="CAAvDA16GNO2pCvo3D8btguNE8xKuCBzEsU4ivnCDAe8rhuLwAA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] [2.0.0rc2] ppc SEGVs<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-02 17:39:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18880.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] &quot;make check&quot; failure on ARMv6"</a>
<li><strong>Previous message:</strong> <a href="18878.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc2] Illegal instruction on Pentium III"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Running in several different PPC platforms I see &quot;make check&quot; fail as
<br>
follows:
<br>
<p>make[4]: Entering directory
<br>
`/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/BLD/ompi/debuggers'
<br>
PASS: predefined_gap_test
<br>
PASS: predefined_pad_test
<br>
/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/openmpi-2.0.0rc2/config/test-driver:
<br>
line 107: 33073 Segmentation fault      &quot;$@&quot; &gt; $log_file 2&gt;&amp;1
<br>
FAIL: dlopen_test
<br>
============================================================================
<br>
Testsuite summary for Open MPI 2.0.0rc2
<br>
============================================================================
<br>
# TOTAL: 3
<br>
# PASS:  2
<br>
# SKIP:  0
<br>
# XFAIL: 0
<br>
# FAIL:  1
<br>
# XPASS: 0
<br>
# ERROR: 0
<br>
============================================================================
<br>
See ompi/debuggers/test-suite.log
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
============================================================================
<br>
make[4]: *** [test-suite.log] Error 1
<br>
<p><p>Using gdb on one failing system to examine a core yielded the following,
<br>
showing a bad address being used in patcher_base_patch.c:
<br>
<p>Program terminated with signal SIGSEGV, Segmentation fault.
<br>
#0  0x0fcb2474 in mca_patcher_base_patch_hook (module=0xf760040
<br>
&lt;mca_patcher_overwrite_module&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hook_addr=2485256144)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/home/phargrov/OMPI/openmpi-2.0.0rc2-linux-ppc32-gcc/openmpi-2.0.0rc2/opal/mca/patcher/base/patcher_base_patch.c:156
<br>
156             if (nop_addr[0] == nop &amp;&amp; nop_addr[1] == nop &amp;&amp; nop_addr[2]
<br>
== nop
<br>
Missing separate debuginfos, use: debuginfo-install glibc-2.18-16.fc20.ppc
<br>
(gdb) print nop_addr
<br>
$1 = (unsigned int *) 0x9421ffd0
<br>
(gdb) print nop_addr[0]
<br>
Cannot access memory at address 0x9421ffd0
<br>
<p><p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18879/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18880.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] &quot;make check&quot; failure on ARMv6"</a>
<li><strong>Previous message:</strong> <a href="18878.php">Nathan Hjelm: "Re: [OMPI devel] [2.0.0rc2] Illegal instruction on Pentium III"</a>
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
