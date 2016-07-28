<?
$subject_val = "[OMPI devel] Test suite of openMPI 1.7.3 fails";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 10 09:53:53 2013" -->
<!-- isoreceived="20131210145353" -->
<!-- sent="Tue, 10 Dec 2013 15:53:51 +0100" -->
<!-- isosent="20131210145351" -->
<!-- name="Philipp Thomas" -->
<!-- email="pth_at_[hidden]" -->
<!-- subject="[OMPI devel] Test suite of openMPI 1.7.3 fails" -->
<!-- id="20131210145351.GA31984_at_paradies.suse.de" -->
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
<strong>Subject:</strong> [OMPI devel] Test suite of openMPI 1.7.3 fails<br>
<strong>From:</strong> Philipp Thomas (<em>pth_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-10 09:53:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13411.php">Ralph Castain: "Re: [OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Previous message:</strong> <a href="13409.php">Adrian Reber: "Re: [OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13413.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Test suite of openMPI 1.7.3 fails"</a>
<li><strong>Reply:</strong> <a href="13413.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Test suite of openMPI 1.7.3 fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Two of the asm tests are failing on my machine with 
<br>
Intel(R) Core(TM) i7-4960X CPU @ 3.60GHz running openSUSE 13.1 and
<br>
gcc (SUSE Linux) 4.8.1 20130909 [gcc-4_8-branch revision 202388]. Could
<br>
anyone give me pointers as to what to check next? I added running
<br>
'make check' from the spec file so a failing test suite makes the package
<br>
build fail.
<br>
<p>Philipp
<br>
<p>=============================================
<br>
&nbsp;&nbsp;&nbsp;Open MPI 1.7.3: test/asm/test-suite.log
<br>
=============================================
<br>
<p># TOTAL: 8
<br>
# PASS:  6
<br>
# SKIP:  0
<br>
# XFAIL: 0
<br>
# FAIL:  2
<br>
# XPASS: 0
<br>
# ERROR: 0
<br>
<p>.. contents:: :depth: 2
<br>
<p>FAIL: atomic_cmpset
<br>
===================
<br>
<p>atomic_cmpset: atomic_cmpset.c:227: main: Assertion `opal_atomic_add_32(&amp;val32, 5) == (42 + 5)' failed.
<br>
<p>FAIL: atomic_cmpset_noinline
<br>
============================
<br>
<p>atomic_cmpset_noinline: atomic_cmpset_noinline.c:227: main: Assertion `opal_atomic_add_32(&amp;val32, 5) == (42 + 5)' failed.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13411.php">Ralph Castain: "Re: [OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Previous message:</strong> <a href="13409.php">Adrian Reber: "Re: [OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13413.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Test suite of openMPI 1.7.3 fails"</a>
<li><strong>Reply:</strong> <a href="13413.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Test suite of openMPI 1.7.3 fails"</a>
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
