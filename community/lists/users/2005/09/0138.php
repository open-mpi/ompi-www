<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 12 18:13:29 2005" -->
<!-- isoreceived="20050912231329" -->
<!-- sent="Mon, 12 Sep 2005 16:13:20 -0700 (PDT)" -->
<!-- isosent="20050912231320" -->
<!-- name="Jonathan Day" -->
<!-- email="imipak_at_[hidden]" -->
<!-- subject="[O-MPI users] MIPS64 Trek - The story so far" -->
<!-- id="20050912231320.33794.qmail_at_web31507.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Jonathan Day (<em>imipak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-12 18:13:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0139.php">Brian Barrett: "Re: [O-MPI users] MIPS64 Trek - The story so far"</a>
<li><strong>Previous message:</strong> <a href="0137.php">Jonathan Day: "Re: [O-MPI users] MIPS64 - The Long-Awaited Config File"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0139.php">Brian Barrett: "Re: [O-MPI users] MIPS64 Trek - The story so far"</a>
<li><strong>Reply:</strong> <a href="0139.php">Brian Barrett: "Re: [O-MPI users] MIPS64 Trek - The story so far"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Just a quick update on working with OpenMPI's MIPS
<br>
code on the MIPS64 processor. It does not appear to
<br>
work to simply use the atomic code for the 32-bit MIPS
<br>
- the opcodes don't correspond. Over the next day or
<br>
two, I will be updating the assembler on the MIPS64
<br>
board, and I'll know better then whether this is a
<br>
genuine problem or a phantom issue.
<br>
<p>(If someone's developed a patch by then, so much the
<br>
better, but I'm going to keep working on this
<br>
possibility for the immediate future.)
<br>
<p>atomic-asm.s: Assembler messages:
<br>
atomic-asm.s:8: Error: unrecognized opcode
<br>
`leaf(opal_atomic_mb)'
<br>
atomic-asm.s:13: Error: unrecognized opcode
<br>
`end(opal_atomic_mb)'
<br>
atomic-asm.s:17: Error: unrecognized opcode
<br>
`leaf(opal_atomic_rmb)'
<br>
atomic-asm.s:22: Error: unrecognized opcode
<br>
`end(opal_atomic_rmb)'
<br>
atomic-asm.s:25: Error: unrecognized opcode
<br>
`leaf(opal_atomic_wmb)'
<br>
atomic-asm.s:30: Error: unrecognized opcode
<br>
`end(opal_atomic_wmb)'
<br>
atomic-asm.s:33: Error: unrecognized opcode
<br>
`leaf(opal_atomic_cmpset_32)'
<br>
atomic-asm.s:49: Error: unrecognized opcode
<br>
`end(opal_atomic_cmpset_32)'
<br>
atomic-asm.s:52: Error: unrecognized opcode
<br>
`leaf(opal_atomic_cmpset_acq_32)'
<br>
atomic-asm.s:69: Error: unrecognized opcode
<br>
`end(opal_atomic_cmpset_acq_32)'
<br>
atomic-asm.s:72: Error: unrecognized opcode
<br>
`leaf(opal_atomic_cmpset_rel_32)'
<br>
atomic-asm.s:89: Error: unrecognized opcode
<br>
`end(opal_atomic_cmpset_rel_32)'
<br>
atomic-asm.s:92: Error: unrecognized opcode
<br>
`leaf(opal_atomic_cmpset_64)'
<br>
atomic-asm.s:108: Error: unrecognized opcode
<br>
`end(opal_atomic_cmpset_64)'
<br>
atomic-asm.s:111: Error: unrecognized opcode
<br>
`leaf(opal_atomic_cmpset_acq_64)'
<br>
atomic-asm.s:127: Error: unrecognized opcode
<br>
`end(opal_atomic_cmpset_acq_64)'
<br>
atomic-asm.s:130: Error: unrecognized opcode
<br>
`leaf(opal_atomic_cmpset_rel_64)'
<br>
atomic-asm.s:147: Error: unrecognized opcode
<br>
`end(opal_atomic_cmpset_rel_64)'
<br>
make[2]: Leaving directory
<br>
`/tools/openmpi-1.0a1r7305/opal/asm'
<br>
<p><p>__________________________________________________
<br>
Do You Yahoo!?
<br>
Tired of spam?  Yahoo! Mail has the best spam protection around 
<br>
<a href="http://mail.yahoo.com">http://mail.yahoo.com</a> 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0139.php">Brian Barrett: "Re: [O-MPI users] MIPS64 Trek - The story so far"</a>
<li><strong>Previous message:</strong> <a href="0137.php">Jonathan Day: "Re: [O-MPI users] MIPS64 - The Long-Awaited Config File"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0139.php">Brian Barrett: "Re: [O-MPI users] MIPS64 Trek - The story so far"</a>
<li><strong>Reply:</strong> <a href="0139.php">Brian Barrett: "Re: [O-MPI users] MIPS64 Trek - The story so far"</a>
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
