<?
$subject_val = "[OMPI devel] [1.10.3rc4] testing results";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  6 00:47:53 2016" -->
<!-- isoreceived="20160606044753" -->
<!-- sent="Sun, 5 Jun 2016 21:47:48 -0700" -->
<!-- isosent="20160606044748" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [1.10.3rc4] testing results" -->
<!-- id="CAAvDA16Ke-SJ1f49Og-DL3qD1FK_4-ADUPVT_0sB4Jhrbf5wjw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [1.10.3rc4] testing results<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-06 00:47:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19082.php">Larry Baker: "Re: [OMPI devel] [1.10.3rc4] testing results"</a>
<li><strong>Previous message:</strong> <a href="19080.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19082.php">Larry Baker: "Re: [OMPI devel] [1.10.3rc4] testing results"</a>
<li><strong>Reply:</strong> <a href="19082.php">Larry Baker: "Re: [OMPI devel] [1.10.3rc4] testing results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am pleased to report SUCCESS on 93 out of 95 distinct test configurations.
<br>
<p>The two failures were NAG Fortran versions 5 and 6, which were not expected
<br>
to work with v1.10.  The NAG support is being tracked in issue #1284, and
<br>
the work (PR 1295) was merged to master just minutes ago.  While the issue
<br>
does currently list 1.10.3 as the target milestone, I am certainly not
<br>
going to be the one to insist on delaying this release for NAG Fortran
<br>
support.
<br>
<p>This round of testing includes SPARC for the first time, with both V8+ and
<br>
V9 ABIs covered.
<br>
Other non-x86 CPUs tested included are ia64, ppc32, ppc64, ppc64el, mips32,
<br>
mips64, mips64el, arm and aarch64.
<br>
Multiple ISAs (e.g. ARMv5, v6 and v7) and ABIs (e.g. MIPS &quot;32&quot;, &quot;n32&quot; and
<br>
&quot;64) tested should cover all opal atomics except &quot;alpha&quot; and &quot;win32&quot;
<br>
(including gcc and darwin built-ins).
<br>
Testing of x86 and x86-64 includes Linux, Mac OSX, Solaris, FreeBSD, NetBSD
<br>
and OpenBSD.
<br>
Tested compiler families include GNU, Clang, Intel, PGI, IBM, Sun/Oracle,
<br>
Pathscale, Open64 and Absoft (with multiple versions of most).
<br>
<p>-Paul
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19081/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19082.php">Larry Baker: "Re: [OMPI devel] [1.10.3rc4] testing results"</a>
<li><strong>Previous message:</strong> <a href="19080.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19082.php">Larry Baker: "Re: [OMPI devel] [1.10.3rc4] testing results"</a>
<li><strong>Reply:</strong> <a href="19082.php">Larry Baker: "Re: [OMPI devel] [1.10.3rc4] testing results"</a>
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
