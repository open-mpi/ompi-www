<?
$subject_val = "[OMPI devel] openmpi-1.5.5rc1: tests on linux non-x86";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 21 08:50:50 2011" -->
<!-- isoreceived="20111221135050" -->
<!-- sent="Wed, 21 Dec 2011 05:50:26 -0800" -->
<!-- isosent="20111221135026" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] openmpi-1.5.5rc1: tests on linux non-x86" -->
<!-- id="4EF1E422.7090009_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] openmpi-1.5.5rc1: tests on linux non-x86<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-21 08:50:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10197.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autogen.sh generates broken configure onFreeBSD-8.2"</a>
<li><strong>Previous message:</strong> <a href="10195.php">Paul H. Hargrove: "Re: [OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have access to several Linux platforms other than x86 and x86-64, on 
<br>
which I've tested ompi-1.5.5rc1.
<br>
This info is intended to be informational, and NOT intended to 
<br>
influence/delay the 1.5.5 release.
<br>
<p>First a summary of the results, with added details below:
<br>
GOOD:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ppc32 (Apple G4 h/w): OK
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ppc64 (Apple G5 h/w, &quot;-m64&quot;): OK
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ia64 (SGI Altix): OK
<br>
BAD:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mips64el (little-endian SiCortex): HANG in &quot;atomic_spinlock_noinline&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mips64 (big-endian 64-bit Malta, &quot;-march=5kc -mabi=64&quot;): HANG in 
<br>
&quot;atomic_spinlock_noinline&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mips32 (big-endian 32-bit Malta, &quot;-march=4kc&quot;): assembler rejects 
<br>
64-bit opcodes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;armv5: configure fails due to lack of atomics
<br>
<p>Details on the failures:
<br>
<p>mips64el and mips64 (SiCortex and Malta): HANGS in &quot;make check&quot;
<br>
&nbsp;&nbsp;&nbsp;The hang is after printing &quot;--&gt; Testing atomic_spinlock_noinline&quot;
<br>
&nbsp;&nbsp;&nbsp;It appears to be hung with just 1 thread (never reaching the 2-thread 
<br>
test)
<br>
&nbsp;&nbsp;&nbsp;This is an issue I don't find a ticket for, though it is related to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ticket #2494: Add support for mips64-linux assembly
<br>
&nbsp;&nbsp;&nbsp;with target milestone 1.5.5.
<br>
<p>mips32: assembler rejects 64-bit opcodes
<br>
&nbsp;&nbsp;&nbsp;The &quot;make&quot; ends with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm -f atomic-asm.S
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ln -s &quot;../../opal/asm/generated/atomic-local.s&quot; atomic-asm.S
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPPAS  atomic-asm.lo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;atomic-asm.S: Assembler messages:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;atomic-asm.S:83: Error: opcode not supported on this processor: 
<br>
mips32 (mips32) `lld $3,0($4)'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;atomic-asm.S:86: Error: opcode not supported on this processor: 
<br>
mips32 (mips32) `scd $2,0($4)'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;atomic-asm.S:100: Error: opcode not supported on this processor: 
<br>
mips32 (mips32) `lld $3,0($4)'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;atomic-asm.S:103: Error: opcode not supported on this processor: 
<br>
mips32 (mips32) `scd $2,0($4)'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;atomic-asm.S:118: Error: opcode not supported on this processor: 
<br>
mips32 (mips32) `lld $3,0($4)'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;atomic-asm.S:121: Error: opcode not supported on this processor: 
<br>
mips32 (mips32) `scd $2,0($4)'
<br>
&nbsp;&nbsp;&nbsp;which makes sense to me since these are the 64-bit 
<br>
load-linked/store-conditional instructions.
<br>
&nbsp;&nbsp;&nbsp;Why would one try to generate 64-bit atomics on this CPU?
<br>
<p>armv5: configure fails due to lack of atomics
<br>
&nbsp;&nbsp;&nbsp;Exact message is &quot;configure: error: No atomic primitives available 
<br>
for armv5tejl-unknown-linux-gnueabi&quot;
<br>
&nbsp;&nbsp;&nbsp;This is NOT a supported platform, though it *IS* possible to support 
<br>
armv4 and newer using linux kernel-level support.
<br>
&nbsp;&nbsp;&nbsp;At some point the persistent Debian portability police may bug you 
<br>
about that :-)
<br>
&nbsp;&nbsp;&nbsp;You can find the necessary code and configure logic in GASNet if you 
<br>
feel a need for it.
<br>
<p>-Paul
<br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="10197.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autogen.sh generates broken configure onFreeBSD-8.2"</a>
<li><strong>Previous message:</strong> <a href="10195.php">Paul H. Hargrove: "Re: [OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2"</a>
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
