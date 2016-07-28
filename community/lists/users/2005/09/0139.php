<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 12 19:24:51 2005" -->
<!-- isoreceived="20050913002451" -->
<!-- sent="Mon, 12 Sep 2005 19:24:43 -0500" -->
<!-- isosent="20050913002443" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] MIPS64 Trek - The story so far" -->
<!-- id="BE0D0C50-785F-407C-AA37-56E9C56216F5_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050912231320.33794.qmail_at_web31507.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-12 19:24:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0140.php">Greg Lindahl: "Re: [O-MPI users] MIPS64 Trek - The story so far"</a>
<li><strong>Previous message:</strong> <a href="0138.php">Jonathan Day: "[O-MPI users] MIPS64 Trek - The story so far"</a>
<li><strong>In reply to:</strong> <a href="0138.php">Jonathan Day: "[O-MPI users] MIPS64 Trek - The story so far"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0140.php">Greg Lindahl: "Re: [O-MPI users] MIPS64 Trek - The story so far"</a>
<li><strong>Reply:</strong> <a href="0140.php">Greg Lindahl: "Re: [O-MPI users] MIPS64 Trek - The story so far"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gah - shame on me.  I let some IRIX-specific stuff slip through.   
<br>
Lemme see if I can find an IRIX box and clean that up.  The problems  
<br>
you listed below are not MIPS 32 / MIPS 64 issues, but the use of  
<br>
some nice IRIX-specific macros.  By the way, to clarify, the assembly  
<br>
has been tested on a MIPS R14K in 64 bit mode (and 32 bit mode using  
<br>
SGI's n32 ABI -- it will not work with their o32 ABI).  Just not on  
<br>
anything other than IRIX ;).
<br>
<p>Brian
<br>
<p>On Sep 12, 2005, at 6:13 PM, Jonathan Day wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just a quick update on working with OpenMPI's MIPS
</span><br>
<span class="quotelev1">&gt; code on the MIPS64 processor. It does not appear to
</span><br>
<span class="quotelev1">&gt; work to simply use the atomic code for the 32-bit MIPS
</span><br>
<span class="quotelev1">&gt; - the opcodes don't correspond. Over the next day or
</span><br>
<span class="quotelev1">&gt; two, I will be updating the assembler on the MIPS64
</span><br>
<span class="quotelev1">&gt; board, and I'll know better then whether this is a
</span><br>
<span class="quotelev1">&gt; genuine problem or a phantom issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (If someone's developed a patch by then, so much the
</span><br>
<span class="quotelev1">&gt; better, but I'm going to keep working on this
</span><br>
<span class="quotelev1">&gt; possibility for the immediate future.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; atomic-asm.s: Assembler messages:
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:8: Error: unrecognized opcode
</span><br>
<span class="quotelev1">&gt; `leaf(opal_atomic_mb)'
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:13: Error: unrecognized opcode
</span><br>
<span class="quotelev1">&gt; `end(opal_atomic_mb)'
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:17: Error: unrecognized opcode
</span><br>
<span class="quotelev1">&gt; `leaf(opal_atomic_rmb)'
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:22: Error: unrecognized opcode
</span><br>
<span class="quotelev1">&gt; `end(opal_atomic_rmb)'
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:25: Error: unrecognized opcode
</span><br>
<span class="quotelev1">&gt; `leaf(opal_atomic_wmb)'
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:30: Error: unrecognized opcode
</span><br>
<span class="quotelev1">&gt; `end(opal_atomic_wmb)'
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:33: Error: unrecognized opcode
</span><br>
<span class="quotelev1">&gt; `leaf(opal_atomic_cmpset_32)'
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:49: Error: unrecognized opcode
</span><br>
<span class="quotelev1">&gt; `end(opal_atomic_cmpset_32)'
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:52: Error: unrecognized opcode
</span><br>
<span class="quotelev1">&gt; `leaf(opal_atomic_cmpset_acq_32)'
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:69: Error: unrecognized opcode
</span><br>
<span class="quotelev1">&gt; `end(opal_atomic_cmpset_acq_32)'
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:72: Error: unrecognized opcode
</span><br>
<span class="quotelev1">&gt; `leaf(opal_atomic_cmpset_rel_32)'
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:89: Error: unrecognized opcode
</span><br>
<span class="quotelev1">&gt; `end(opal_atomic_cmpset_rel_32)'
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:92: Error: unrecognized opcode
</span><br>
<span class="quotelev1">&gt; `leaf(opal_atomic_cmpset_64)'
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:108: Error: unrecognized opcode
</span><br>
<span class="quotelev1">&gt; `end(opal_atomic_cmpset_64)'
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:111: Error: unrecognized opcode
</span><br>
<span class="quotelev1">&gt; `leaf(opal_atomic_cmpset_acq_64)'
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:127: Error: unrecognized opcode
</span><br>
<span class="quotelev1">&gt; `end(opal_atomic_cmpset_acq_64)'
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:130: Error: unrecognized opcode
</span><br>
<span class="quotelev1">&gt; `leaf(opal_atomic_cmpset_rel_64)'
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:147: Error: unrecognized opcode
</span><br>
<span class="quotelev1">&gt; `end(opal_atomic_cmpset_rel_64)'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/tools/openmpi-1.0a1r7305/opal/asm'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; __________________________________________________
</span><br>
<span class="quotelev1">&gt; Do You Yahoo!?
</span><br>
<span class="quotelev1">&gt; Tired of spam?  Yahoo! Mail has the best spam protection around
</span><br>
<span class="quotelev1">&gt; <a href="http://mail.yahoo.com">http://mail.yahoo.com</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0140.php">Greg Lindahl: "Re: [O-MPI users] MIPS64 Trek - The story so far"</a>
<li><strong>Previous message:</strong> <a href="0138.php">Jonathan Day: "[O-MPI users] MIPS64 Trek - The story so far"</a>
<li><strong>In reply to:</strong> <a href="0138.php">Jonathan Day: "[O-MPI users] MIPS64 Trek - The story so far"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0140.php">Greg Lindahl: "Re: [O-MPI users] MIPS64 Trek - The story so far"</a>
<li><strong>Reply:</strong> <a href="0140.php">Greg Lindahl: "Re: [O-MPI users] MIPS64 Trek - The story so far"</a>
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
