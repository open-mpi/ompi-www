<?
$subject_val = "[OMPI users] IRIX: unrecognized opcode `leaf(opal_atomic_mb)'";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 26 11:31:35 2008" -->
<!-- isoreceived="20080426153135" -->
<!-- sent="Sat, 26 Apr 2008 23:31:19 +0800" -->
<!-- isosent="20080426153119" -->
<!-- name="Daniel" -->
<!-- email="lakeat_at_[hidden]" -->
<!-- subject="[OMPI users] IRIX: unrecognized opcode `leaf(opal_atomic_mb)'" -->
<!-- id="3C54FA12A82F44F5A8CBD89BF81C1782_at_daniel" -->
<!-- charset="gb2312" -->
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
<strong>Subject:</strong> [OMPI users] IRIX: unrecognized opcode `leaf(opal_atomic_mb)'<br>
<strong>From:</strong> Daniel (<em>lakeat_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-26 11:31:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5541.php">Albert Everett: "[OMPI users] Fwd: hanging orteds"</a>
<li><strong>Previous message:</strong> <a href="5539.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Client/Server test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5543.php">George Bosilca: "Re: [OMPI users] IRIX: unrecognized opcode `leaf(opal_atomic_mb)'"</a>
<li><strong>Reply:</strong> <a href="5543.php">George Bosilca: "Re: [OMPI users] IRIX: unrecognized opcode `leaf(opal_atomic_mb)'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Developers,
<br>
<p>I met the same message as Jonathan Day met before,
<br>
<a href="http://www.open-mpi.org/community/lists/users/2005/09/0138.php">http://www.open-mpi.org/community/lists/users/2005/09/0138.php</a>
<br>
<p>I use 
<br>
Irix6.5, 
<br>
Openmpi-1.2.6, 
<br>
gcc-4.3.0 (gcc g++ gfortran), 
<br>
gnu-binutils-2.18, 
<br>
and I saw the answer by Mr. Brain is:
<br>
---------------------------------------------------------
<br>
Gah - shame on me. I let some IRIX-specific stuff slip through. 
<br>
Lemme see if I can find an IRIX box and clean that up. The problems 
<br>
you listed below are not MIPS 32 / MIPS 64 issues, but the use of 
<br>
some nice IRIX-specific macros. By the way, to clarify, the assembly 
<br>
has been tested on a MIPS R14K in 64 bit mode (and 32 bit mode using 
<br>
SGI's n32 ABI -- it will not work with their o32 ABI). Just not on 
<br>
anything other than IRIX ;). 
<br>
-------------------------------------------------
<br>
<p>but so far I do not understand what does this answer mean, do I need to change some of the codes and add &quot;-n32&quot; option where ld is used?
<br>
<p>Please help.
<br>
I'd really appreciate your help.
<br>
<p>Daniel
<br>
<p>--------------------------------------------------------------
<br>
Below is what I met when I do &quot;make&quot;.
<br>
--------------------------------------------------------------
<br>
atomic-asm.s: Assembler messages: 
<br>
atomic-asm.s:8: Error: unrecognized opcode `leaf(opal_atomic_mb)' 
<br>
atomic-asm.s:13: Error: unrecognized opcode `end(opal_atomic_mb)' 
<br>
atomic-asm.s:17: Error: unrecognized opcode `leaf(opal_atomic_rmb)' 
<br>
atomic-asm.s:22: Error: unrecognized opcode `end(opal_atomic_rmb)' 
<br>
atomic-asm.s:25: Error: unrecognized opcode `leaf(opal_atomic_wmb)' 
<br>
atomic-asm.s:30: Error: unrecognized opcode `end(opal_atomic_wmb)' 
<br>
atomic-asm.s:33: Error: unrecognized opcode `leaf(opal_atomic_cmpset_32)' 
<br>
atomic-asm.s:49: Error: unrecognized opcode `end(opal_atomic_cmpset_32)' 
<br>
atomic-asm.s:52: Error: unrecognized opcode `leaf(opal_atomic_cmpset_acq_32)' 
<br>
atomic-asm.s:69: Error: unrecognized opcode `end(opal_atomic_cmpset_acq_32)' 
<br>
atomic-asm.s:72: Error: unrecognized opcode `leaf(opal_atomic_cmpset_rel_32)' 
<br>
atomic-asm.s:89: Error: unrecognized opcode `end(opal_atomic_cmpset_rel_32)' 
<br>
atomic-asm.s:92: Error: unrecognized opcode `leaf(opal_atomic_cmpset_64)' 
<br>
atomic-asm.s:108: Error: unrecognized opcode `end(opal_atomic_cmpset_64)' 
<br>
atomic-asm.s:111: Error: unrecognized opcode `leaf(opal_atomic_cmpset_acq_64)' 
<br>
atomic-asm.s:127: Error: unrecognized opcode `end(opal_atomic_cmpset_acq_64)' 
<br>
atomic-asm.s:130: Error: unrecognized opcode `leaf(opal_atomic_cmpset_rel_64)' 
<br>
atomic-asm.s:147: Error: unrecognized opcode `end(opal_atomic_cmpset_rel_64)' 
<br>
make[2]: Leaving directory `/tools/openmpi-1.0a1r7305/opal/asm' 
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5540/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5541.php">Albert Everett: "[OMPI users] Fwd: hanging orteds"</a>
<li><strong>Previous message:</strong> <a href="5539.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Client/Server test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5543.php">George Bosilca: "Re: [OMPI users] IRIX: unrecognized opcode `leaf(opal_atomic_mb)'"</a>
<li><strong>Reply:</strong> <a href="5543.php">George Bosilca: "Re: [OMPI users] IRIX: unrecognized opcode `leaf(opal_atomic_mb)'"</a>
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
