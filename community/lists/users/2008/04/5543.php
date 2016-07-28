<?
$subject_val = "Re: [OMPI users] IRIX: unrecognized opcode `leaf(opal_atomic_mb)'";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 26 13:17:36 2008" -->
<!-- isoreceived="20080426171736" -->
<!-- sent="Sat, 26 Apr 2008 13:17:28 -0400" -->
<!-- isosent="20080426171728" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IRIX: unrecognized opcode `leaf(opal_atomic_mb)'" -->
<!-- id="C14D10CC-5087-46CF-9125-A319EAC269BB_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3C54FA12A82F44F5A8CBD89BF81C1782_at_daniel" -->
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
<strong>Subject:</strong> Re: [OMPI users] IRIX: unrecognized opcode `leaf(opal_atomic_mb)'<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-26 13:17:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5544.php">Alberto Giannetti: "Re: [OMPI users] Client/Server test"</a>
<li><strong>Previous message:</strong> <a href="5542.php">Daniel: "[OMPI users] IRIX Assembler messages unrecognized opcode &gt; `leaf(opal_atomic_mb)"</a>
<li><strong>In reply to:</strong> <a href="5540.php">Daniel: "[OMPI users] IRIX: unrecognized opcode `leaf(opal_atomic_mb)'"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Daniel,
<br>
<p>I fixed this issue few days ago in the trunk. More info at
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/18290">https://svn.open-mpi.org/trac/ompi/changeset/18290</a>
<br>
The problem was that the compilers do not preprocess an assembly files  
<br>
with the suffix .s, and in this specific case don't expand the two  
<br>
macros leaf and end. Changing the suffix from .s to .S is enough to  
<br>
make this problem vanish.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Apr 26, 2008, at 11:31 AM, Daniel wrote:
<br>
<p><span class="quotelev1">&gt; Dear Developers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I met the same message as Jonathan Day met before,
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2005/09/0138.php">http://www.open-mpi.org/community/lists/users/2005/09/0138.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use
</span><br>
<span class="quotelev1">&gt; Irix6.5,
</span><br>
<span class="quotelev1">&gt; Openmpi-1.2.6,
</span><br>
<span class="quotelev1">&gt; gcc-4.3.0 (gcc g++ gfortran),
</span><br>
<span class="quotelev1">&gt; gnu-binutils-2.18,
</span><br>
<span class="quotelev1">&gt; and I saw the answer by Mr. Brain is:
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gah - shame on me. I let some IRIX-specific stuff slip through.
</span><br>
<span class="quotelev1">&gt; Lemme see if I can find an IRIX box and clean that up. The problems
</span><br>
<span class="quotelev1">&gt; you listed below are not MIPS 32 / MIPS 64 issues, but the use of
</span><br>
<span class="quotelev1">&gt; some nice IRIX-specific macros. By the way, to clarify, the assembly
</span><br>
<span class="quotelev1">&gt; has been tested on a MIPS R14K in 64 bit mode (and 32 bit mode using
</span><br>
<span class="quotelev1">&gt; SGI's n32 ABI -- it will not work with their o32 ABI). Just not on
</span><br>
<span class="quotelev1">&gt; anything other than IRIX ;).
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but so far I do not understand what does this answer mean, do I need  
</span><br>
<span class="quotelev1">&gt; to change some of the codes and add &quot;-n32&quot; option where ld is used?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please help.
</span><br>
<span class="quotelev1">&gt; I'd really appreciate your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Daniel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Below is what I met when I do &quot;make&quot;.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; atomic-asm.s: Assembler messages:
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:8: Error: unrecognized opcode `leaf(opal_atomic_mb)'
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:13: Error: unrecognized opcode `end(opal_atomic_mb)'
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:17: Error: unrecognized opcode `leaf(opal_atomic_rmb)'
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:22: Error: unrecognized opcode `end(opal_atomic_rmb)'
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:25: Error: unrecognized opcode `leaf(opal_atomic_wmb)'
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:30: Error: unrecognized opcode `end(opal_atomic_wmb)'
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
<span class="quotelev1">&gt; make[2]: Leaving directory `/tools/openmpi-1.0a1r7305/opal/asm'
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5543/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5544.php">Alberto Giannetti: "Re: [OMPI users] Client/Server test"</a>
<li><strong>Previous message:</strong> <a href="5542.php">Daniel: "[OMPI users] IRIX Assembler messages unrecognized opcode &gt; `leaf(opal_atomic_mb)"</a>
<li><strong>In reply to:</strong> <a href="5540.php">Daniel: "[OMPI users] IRIX: unrecognized opcode `leaf(opal_atomic_mb)'"</a>
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
