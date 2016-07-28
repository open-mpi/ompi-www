<?
$subject_val = "[OMPI devel] Fixes for MIPS assembly [w/ PATCHES]";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 01:13:24 2012" -->
<!-- isoreceived="20120215061324" -->
<!-- sent="Tue, 14 Feb 2012 22:13:08 -0800" -->
<!-- isosent="20120215061308" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Fixes for MIPS assembly [w/ PATCHES]" -->
<!-- id="4F3B4CF4.4080100_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Fixes for MIPS assembly [w/ PATCHES]<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 01:13:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10417.php">Paul H. Hargrove: "[OMPI devel] More MIPS asm patches"</a>
<li><strong>Previous message:</strong> <a href="10415.php">Paul H. Hargrove: "Re: [OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10417.php">Paul H. Hargrove: "[OMPI devel] More MIPS asm patches"</a>
<li><strong>Reply:</strong> <a href="10417.php">Paul H. Hargrove: "[OMPI devel] More MIPS asm patches"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The attached patches fix three problems with the non-inline ASM for MIPS 
<br>
(and MIPS64EL):
<br>
1) &quot;.set rerorder&quot; was placed too early.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;This was causing loss of the SLTU instruction in the jump delay
<br>
&nbsp;&nbsp;&nbsp;&nbsp;slot which follows the return instruction.  Since that SLTU is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;used to set the return value, this was fatal to most tests in test/asm.
<br>
2) The 64-bit cmpset code was performing the XOR (to compare the read
<br>
&nbsp;&nbsp;&nbsp;&nbsp;value to 'oldval') using 'addr' as the destination register.  Since
<br>
&nbsp;&nbsp;&nbsp;&nbsp;XOR is in the delay slot of the retry branch instruction (except in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the acq variant) any retry would load from an invalid 'addr' (SEGV).
<br>
3) The 64-bit cmpset code was using the wrong destination register for
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the SLTU and thus not setting the return value (even after the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&quot;.set reorder&quot; was placed correctly).
<br>
<p>There is one patch each for the 1.5 branch and trunk.
<br>
Both have been testing with on:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux/mips32 w/ -march=4kc in the *FLAGS (gcc-4.4.5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux/mips64 w/ -mabi=n32 in the *FLAGS (gcc-4.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux/mips64 w/ -mabi=64 in the *FLAGS (gcc-4.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux/mips64el (gcc-4.2.3)
<br>
<p>Of those 8 builds, the mips32/ompi-1.5 build is the only one that fails.
<br>
That is because, unlike trunk, it tries to build the 64-bit atomics 
<br>
which the assembler then rejects.
<br>
I have not attempted to backport the fix(es) for that from trunk to 1.5.
<br>
<p>On the linux/mips64el platform I also tried the PathScale 3.3a compilers 
<br>
on both branches.
<br>
On both branches the atomic_*_noinline tests all PASS, which validates 
<br>
these patches.
<br>
On trunk all the tests in test/asm are PASSing.
<br>
However, the versions NOT suffixed with _noinline are FAILing on the 1.5 
<br>
branch.
<br>
Since those failures DO NOT use the files touched by these patches, they 
<br>
are irrelevant.
<br>
<p>If/when these patches have been committed, I may consider returning to 
<br>
the 1.5 branch to backport/CMR
<br>
+ support for MIPS32 (should not be trying to build the 64-bit atomics)
<br>
+ fix for the inline atomics (the FAILures on the inline tests) w/ pathcc
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. HargrovePHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900


</pre>
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10416/mips-asm-15.patch00">mips-asm-15.patch00</a>
</ul>
<!-- attachment="mips-asm-15.patch00" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10416/mips-asm-trunk.patch00">mips-asm-trunk.patch00</a>
</ul>
<!-- attachment="mips-asm-trunk.patch00" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10417.php">Paul H. Hargrove: "[OMPI devel] More MIPS asm patches"</a>
<li><strong>Previous message:</strong> <a href="10415.php">Paul H. Hargrove: "Re: [OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10417.php">Paul H. Hargrove: "[OMPI devel] More MIPS asm patches"</a>
<li><strong>Reply:</strong> <a href="10417.php">Paul H. Hargrove: "[OMPI devel] More MIPS asm patches"</a>
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
