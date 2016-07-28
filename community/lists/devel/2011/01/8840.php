<?
$subject_val = "Re: [OMPI devel] [Patch] Add support for ARMv7-A architecture";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  6 14:10:42 2011" -->
<!-- isoreceived="20110106191042" -->
<!-- sent="Thu, 6 Jan 2011 14:10:31 -0500" -->
<!-- isosent="20110106191031" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Patch] Add support for ARMv7-A architecture" -->
<!-- id="29BE7FB3-5051-41FF-83BE-156A6EAE69B0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="000001cba376$0f406d20$2dc14760$_at_lindholm@arm.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [Patch] Add support for ARMv7-A architecture<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-06 14:10:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8841.php">Hugo Meyer: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
<li><strong>Previous message:</strong> <a href="8839.php">Jeff Squyres: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/12/8819.php">Leif Lindholm: "[OMPI devel] [Patch] Add support for ARMv7-A architecture"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8844.php">Leif Lindholm: "Re: [OMPI devel] [Patch] Add support for ARMv7-A architecture"</a>
<li><strong>Reply:</strong> <a href="8844.php">Leif Lindholm: "Re: [OMPI devel] [Patch] Add support for ARMv7-A architecture"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Many thanks for this contribution!
<br>
<p>A few points:
<br>
<p>1. This is a lengthy contribution; it's a bit more than a &quot;trivial&quot; patch that we could include in the mainline without worrying about intellectual property.  :-(  Can you officially release this code under the BSD license, and/or sign the Open MPI 3rd party contribution agreement?  (I know that this is a major hassle, but we have to do it :-( )
<br>
<p>2. Where did you generate this patch from?  Based on your patch filenames, I tried to apply it to the SVN trunk_at_24210 but failed:
<br>
<p>[11:07] svbu-mpi:~/svn/ompi4 % svnversion .
<br>
24210
<br>
[11:07] svbu-mpi:~/svn/ompi4 % patch -p1 &lt; ~/arm.patch
<br>
patching file opal/asm/generate-asm.pl
<br>
Hunk #1 FAILED at 103.
<br>
1 out of 1 hunk FAILED -- saving rejects to file opal/asm/generate-asm.pl.rej
<br>
patching file opal/asm/asm-data.txt
<br>
Hunk #1 FAILED at 48.
<br>
1 out of 1 hunk FAILED -- saving rejects to file opal/asm/asm-data.txt.rej
<br>
patching file opal/asm/base/ARM.asm
<br>
patching file opal/include/opal/sys/arm/atomic.h
<br>
patching file opal/include/opal/sys/arm/timer.h
<br>
patching file opal/include/opal/sys/arm/Makefile.am
<br>
patching file opal/include/opal/sys/arm/update.sh
<br>
patching file opal/include/opal/sys/atomic.h
<br>
Hunk #1 FAILED at 146.
<br>
1 out of 1 hunk FAILED -- saving rejects to file opal/include/opal/sys/atomic.h.rej
<br>
patching file opal/include/opal/sys/timer.h
<br>
Hunk #1 FAILED at 79.
<br>
1 out of 1 hunk FAILED -- saving rejects to file opal/include/opal/sys/timer.h.rej
<br>
patching file opal/include/opal/sys/architecture.h
<br>
Hunk #1 FAILED at 36.
<br>
1 out of 1 hunk FAILED -- saving rejects to file opal/include/opal/sys/architecture.h.rej
<br>
patching file opal/config/opal_config_asm.m4
<br>
Hunk #1 FAILED at 900.
<br>
1 out of 1 hunk FAILED -- saving rejects to file opal/config/opal_config_asm.m4.rej
<br>
[11:07] svbu-mpi:~/svn/ompi4 % 
<br>
<p><p><p><p>On Dec 24, 2010, at 9:22 AM, Leif Lindholm wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following patch adds support for the ARMv7-A architecture to opal.
</span><br>
<span class="quotelev1">&gt; This includes current processors such as Cortex-A8 and Cortex-A9, as
</span><br>
<span class="quotelev1">&gt; well as upcoming Cortex-A5 and Cortex-A15.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It has been validated on Ubuntu Lucid (10.04) and Maverick (10.10),
</span><br>
<span class="quotelev1">&gt; although the former might require some package updates to build from
</span><br>
<span class="quotelev1">&gt; checkout.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The opal/include/opal/sys/arm directory was cloned from powerpc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I apologise for what I had to do to generate-asm.pl to get it to build.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Signed-off-by: leif.lindholm_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Index: ompi-trunk/opal/asm/generate-asm.pl
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi-trunk/opal/asm/generate-asm.pl	(revision 24191)
</span><br>
<span class="quotelev1">&gt; +++ ompi-trunk/opal/asm/generate-asm.pl	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -103,7 +103,11 @@
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if ($GNU_STACK == 1) {
</span><br>
<span class="quotelev1">&gt; -    print OUTPUT &quot;\n\t.section\t.note.GNU-stack,\&quot;\&quot;,\@progbits\n&quot;;
</span><br>
<span class="quotelev1">&gt; +    if ($asmarch eq &quot;ARM&quot;) {
</span><br>
<span class="quotelev1">&gt; +        print OUTPUT &quot;\n\t.section\t.note.GNU-stack,\&quot;\&quot;,\%progbits\n&quot;;
</span><br>
<span class="quotelev1">&gt; +    } else {
</span><br>
<span class="quotelev1">&gt; +        print OUTPUT &quot;\n\t.section\t.note.GNU-stack,\&quot;\&quot;,\@progbits\n&quot;;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; close(INPUT);
</span><br>
<span class="quotelev1">&gt; Index: ompi-trunk/opal/asm/asm-data.txt
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi-trunk/opal/asm/asm-data.txt	(revision 24191)
</span><br>
<span class="quotelev1">&gt; +++ ompi-trunk/opal/asm/asm-data.txt	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -48,6 +48,15 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ######################################################################
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; +# ARM (ARMv7 and later)
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +######################################################################
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +ARM	default-.text-.globl-:--.L-#-1-1-1-1-1  arm-linux
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +######################################################################
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; # Intel Pentium Class
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; ######################################################################
</span><br>
<span class="quotelev1">&gt; Index: ompi-trunk/opal/asm/base/ARM.asm
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi-trunk/opal/asm/base/ARM.asm	(revision 0)
</span><br>
<span class="quotelev1">&gt; +++ ompi-trunk/opal/asm/base/ARM.asm	(revision 0)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,150 @@
</span><br>
<span class="quotelev1">&gt; +START_FILE
</span><br>
<span class="quotelev1">&gt; +	TEXT
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +	ALIGN(4)
</span><br>
<span class="quotelev1">&gt; +START_FUNC(opal_atomic_mb)
</span><br>
<span class="quotelev1">&gt; +	dmb
</span><br>
<span class="quotelev1">&gt; +	bx	lr
</span><br>
<span class="quotelev1">&gt; +END_FUNC(opal_atomic_mb)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +START_FUNC(opal_atomic_rmb)
</span><br>
<span class="quotelev1">&gt; +	dmb
</span><br>
<span class="quotelev1">&gt; +	bx	lr
</span><br>
<span class="quotelev1">&gt; +END_FUNC(opal_atomic_rmb)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +START_FUNC(opal_atomic_wmb)
</span><br>
<span class="quotelev1">&gt; +	dmb
</span><br>
<span class="quotelev1">&gt; +	bx	lr
</span><br>
<span class="quotelev1">&gt; +END_FUNC(opal_atomic_wmb)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +START_FUNC(opal_atomic_cmpset_32)
</span><br>
<span class="quotelev1">&gt; +	LSYM(1)
</span><br>
<span class="quotelev1">&gt; +	ldrex	r3, [r0]
</span><br>
<span class="quotelev1">&gt; +	cmp	r1, r3
</span><br>
<span class="quotelev1">&gt; +	bne	REFLSYM(2)
</span><br>
<span class="quotelev1">&gt; +	strex	r12, r2, [r0]
</span><br>
<span class="quotelev1">&gt; +	cmp	r12, #0
</span><br>
<span class="quotelev1">&gt; +	bne	REFLSYM(1)
</span><br>
<span class="quotelev1">&gt; +	mov	r0, #1
</span><br>
<span class="quotelev1">&gt; +	LSYM(2)
</span><br>
<span class="quotelev1">&gt; +	movne	r0, #0
</span><br>
<span class="quotelev1">&gt; +	bx	lr
</span><br>
<span class="quotelev1">&gt; +END_FUNC(opal_atomic_cmpset_32)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +START_FUNC(opal_atomic_cmpset_acq_32)
</span><br>
<span class="quotelev1">&gt; +	LSYM(3)
</span><br>
<span class="quotelev1">&gt; +	ldrex	r3, [r0]
</span><br>
<span class="quotelev1">&gt; +	cmp	r1, r3
</span><br>
<span class="quotelev1">&gt; +	bne	REFLSYM(4)
</span><br>
<span class="quotelev1">&gt; +	strex	r12, r2, [r0]
</span><br>
<span class="quotelev1">&gt; +	cmp	r12, #0
</span><br>
<span class="quotelev1">&gt; +	bne	REFLSYM(3)
</span><br>
<span class="quotelev1">&gt; +	dmb
</span><br>
<span class="quotelev1">&gt; +	mov	r0, #1
</span><br>
<span class="quotelev1">&gt; +	LSYM(4)
</span><br>
<span class="quotelev1">&gt; +	movne	r0, #0
</span><br>
<span class="quotelev1">&gt; +	bx	lr
</span><br>
<span class="quotelev1">&gt; +END_FUNC(opal_atomic_cmpset_acq_32)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +START_FUNC(opal_atomic_cmpset_rel_32)
</span><br>
<span class="quotelev1">&gt; +	LSYM(5)
</span><br>
<span class="quotelev1">&gt; +	ldrex	r3, [r0]
</span><br>
<span class="quotelev1">&gt; +	cmp	r1, r3
</span><br>
<span class="quotelev1">&gt; +	bne	REFLSYM(6)
</span><br>
<span class="quotelev1">&gt; +	dmb
</span><br>
<span class="quotelev1">&gt; +	strex	r12, r2, [r0]
</span><br>
<span class="quotelev1">&gt; +	cmp	r12, #0
</span><br>
<span class="quotelev1">&gt; +	bne	REFLSYM(4)
</span><br>
<span class="quotelev1">&gt; +	mov	r0, #1
</span><br>
<span class="quotelev1">&gt; +	LSYM(6)
</span><br>
<span class="quotelev1">&gt; +	movne	r0, #0
</span><br>
<span class="quotelev1">&gt; +	bx	lr
</span><br>
<span class="quotelev1">&gt; +END_FUNC(opal_atomic_cmpset_rel_32)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#START_64BIT
</span><br>
<span class="quotelev1">&gt; +START_FUNC(opal_atomic_cmpset_64)
</span><br>
<span class="quotelev1">&gt; +	push	{r4-r7}
</span><br>
<span class="quotelev1">&gt; +	ldrd	r6, r7, [sp, #16]
</span><br>
<span class="quotelev1">&gt; +	LSYM(7)
</span><br>
<span class="quotelev1">&gt; +	ldrexd	r4, r5, [r0]
</span><br>
<span class="quotelev1">&gt; +	cmp	r4, r2
</span><br>
<span class="quotelev1">&gt; +	cmpeq	r5, r3
</span><br>
<span class="quotelev1">&gt; +	bne	REFLSYM(8)
</span><br>
<span class="quotelev1">&gt; +	strexd	r1, r6, r7, [r0]
</span><br>
<span class="quotelev1">&gt; +	cmp	r1, #0
</span><br>
<span class="quotelev1">&gt; +	bne	REFLSYM(7)
</span><br>
<span class="quotelev1">&gt; +	mov	r0, #1
</span><br>
<span class="quotelev1">&gt; +	LSYM(8)
</span><br>
<span class="quotelev1">&gt; +	movne	r0, #0
</span><br>
<span class="quotelev1">&gt; +	pop	{r4-r7}
</span><br>
<span class="quotelev1">&gt; +	bx	lr
</span><br>
<span class="quotelev1">&gt; +END_FUNC(opal_atomic_cmpset_64)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +START_FUNC(opal_atomic_cmpset_acq_64)
</span><br>
<span class="quotelev1">&gt; +	push	{r4-r7}
</span><br>
<span class="quotelev1">&gt; +	ldrd	r6, r7, [sp, #16]
</span><br>
<span class="quotelev1">&gt; +	LSYM(9)
</span><br>
<span class="quotelev1">&gt; +	ldrexd	r4, r5, [r0]
</span><br>
<span class="quotelev1">&gt; +	cmp	r4, r2
</span><br>
<span class="quotelev1">&gt; +	cmpeq	r5, r3
</span><br>
<span class="quotelev1">&gt; +	bne	REFLSYM(10)
</span><br>
<span class="quotelev1">&gt; +	strexd	r1, r6, r7, [r0]
</span><br>
<span class="quotelev1">&gt; +	cmp	r1, #0
</span><br>
<span class="quotelev1">&gt; +	bne	REFLSYM(9)
</span><br>
<span class="quotelev1">&gt; +	dmb
</span><br>
<span class="quotelev1">&gt; +	mov	r0, #1
</span><br>
<span class="quotelev1">&gt; +	LSYM(10)
</span><br>
<span class="quotelev1">&gt; +	movne	r0, #0
</span><br>
<span class="quotelev1">&gt; +	pop	{r4-r7}
</span><br>
<span class="quotelev1">&gt; +	bx	lr
</span><br>
<span class="quotelev1">&gt; +END_FUNC(opal_atomic_cmpset_acq_64)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +START_FUNC(opal_atomic_cmpset_rel_64)
</span><br>
<span class="quotelev1">&gt; +	push	{r4-r7}
</span><br>
<span class="quotelev1">&gt; +	ldrd	r6, r7, [sp, #16]
</span><br>
<span class="quotelev1">&gt; +	LSYM(11)
</span><br>
<span class="quotelev1">&gt; +	ldrexd	r4, r5, [r0]
</span><br>
<span class="quotelev1">&gt; +	cmp	r4, r2
</span><br>
<span class="quotelev1">&gt; +	cmpeq	r5, r3
</span><br>
<span class="quotelev1">&gt; +	bne	REFLSYM(12)
</span><br>
<span class="quotelev1">&gt; +	dmb
</span><br>
<span class="quotelev1">&gt; +	strexd	r1, r6, r7, [r0]
</span><br>
<span class="quotelev1">&gt; +	cmp	r1, #0
</span><br>
<span class="quotelev1">&gt; +	bne	REFLSYM(11)
</span><br>
<span class="quotelev1">&gt; +	mov	r0, #1
</span><br>
<span class="quotelev1">&gt; +	LSYM(12)
</span><br>
<span class="quotelev1">&gt; +	movne	r0, #0
</span><br>
<span class="quotelev1">&gt; +	pop	{r4-r7}
</span><br>
<span class="quotelev1">&gt; +	bx	lr
</span><br>
<span class="quotelev1">&gt; +END_FUNC(opal_atomic_cmpset_rel_64)
</span><br>
<span class="quotelev1">&gt; +#END_64BIT
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +START_FUNC(opal_atomic_add_32)
</span><br>
<span class="quotelev1">&gt; +	LSYM(13)
</span><br>
<span class="quotelev1">&gt; +	ldrex	r2, [r0]
</span><br>
<span class="quotelev1">&gt; +	add	r2, r2, r1
</span><br>
<span class="quotelev1">&gt; +	strex	r3, r2, [r0]
</span><br>
<span class="quotelev1">&gt; +	cmp	r3, #0
</span><br>
<span class="quotelev1">&gt; +	bne	REFLSYM(13)
</span><br>
<span class="quotelev1">&gt; +	mov	r0, r2
</span><br>
<span class="quotelev1">&gt; +	bx	lr
</span><br>
<span class="quotelev1">&gt; +END_FUNC(opal_atomic_add_32)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +START_FUNC(opal_atomic_sub_32)
</span><br>
<span class="quotelev1">&gt; +	LSYM(14)
</span><br>
<span class="quotelev1">&gt; +	ldrex	r2, [r0]
</span><br>
<span class="quotelev1">&gt; +	sub	r2, r2, r1
</span><br>
<span class="quotelev1">&gt; +	strex	r3, r2, [r0]
</span><br>
<span class="quotelev1">&gt; +	cmp	r3, #0
</span><br>
<span class="quotelev1">&gt; +	bne	REFLSYM(14)
</span><br>
<span class="quotelev1">&gt; +	mov	r0, r2
</span><br>
<span class="quotelev1">&gt; +	bx	lr
</span><br>
<span class="quotelev1">&gt; +END_FUNC(opal_atomic_sub_32)
</span><br>
<span class="quotelev1">&gt; Index: ompi-trunk/opal/include/opal/sys/arm/atomic.h
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi-trunk/opal/include/opal/sys/arm/atomic.h	(revision 0)
</span><br>
<span class="quotelev1">&gt; +++ ompi-trunk/opal/include/opal/sys/arm/atomic.h	(revision 0)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,227 @@
</span><br>
<span class="quotelev1">&gt; +/*
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
</span><br>
<span class="quotelev1">&gt; + *                         University Research and Technology
</span><br>
<span class="quotelev1">&gt; + *                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2004-2005 The University of Tennessee and The University
</span><br>
<span class="quotelev1">&gt; + *                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev1">&gt; + *                         reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2004-2005 High Performance Computing Center Stuttgart, 
</span><br>
<span class="quotelev1">&gt; + *                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt; + *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2010      IBM Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2010      ARM ltd.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; + * 
</span><br>
<span class="quotelev1">&gt; + * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; + * 
</span><br>
<span class="quotelev1">&gt; + * $HEADER$
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#ifndef OMPI_SYS_ARCH_ATOMIC_H
</span><br>
<span class="quotelev1">&gt; +#define OMPI_SYS_ARCH_ATOMIC_H 1
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#if OPAL_WANT_SMP_LOCKS
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#define MB()  __asm__ __volatile__ (&quot;dmb&quot; : : : &quot;memory&quot;)
</span><br>
<span class="quotelev1">&gt; +#define RMB() __asm__ __volatile__ (&quot;dmb&quot; : : : &quot;memory&quot;)
</span><br>
<span class="quotelev1">&gt; +#define WMB() __asm__ __volatile__ (&quot;dmb&quot; : : : &quot;memory&quot;)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#define MB()
</span><br>
<span class="quotelev1">&gt; +#define RMB()
</span><br>
<span class="quotelev1">&gt; +#define WMB()
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/**********************************************************************
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * Define constants for ARMv7
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + *********************************************************************/
</span><br>
<span class="quotelev1">&gt; +#define OPAL_HAVE_ATOMIC_MEM_BARRIER 1
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#define OPAL_HAVE_ATOMIC_CMPSET_32 1
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#define OPAL_HAVE_ATOMIC_CMPSET_64 1
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#define OPAL_HAVE_ATOMIC_MATH_32 1
</span><br>
<span class="quotelev1">&gt; +#define OPAL_HAVE_ATOMIC_ADD_32 1
</span><br>
<span class="quotelev1">&gt; +#define OPAL_HAVE_ATOMIC_SUB_32 1
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/**********************************************************************
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * Memory Barriers
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + *********************************************************************/
</span><br>
<span class="quotelev1">&gt; +#if OMPI_GCC_INLINE_ASSEMBLY
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static inline
</span><br>
<span class="quotelev1">&gt; +void opal_atomic_mb(void)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    MB();
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static inline
</span><br>
<span class="quotelev1">&gt; +void opal_atomic_rmb(void)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    RMB();
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static inline
</span><br>
<span class="quotelev1">&gt; +void opal_atomic_wmb(void)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    WMB();
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/**********************************************************************
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * Atomic math operations
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + *********************************************************************/
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static inline int opal_atomic_cmpset_32(volatile int32_t *addr,
</span><br>
<span class="quotelev1">&gt; +                                        int32_t oldval, int32_t newval)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +  int32_t ret, tmp;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +   __asm__ __volatile__ (
</span><br>
<span class="quotelev1">&gt; +                         &quot;1:  ldrex   %0, [%2]        \n&quot;
</span><br>
<span class="quotelev1">&gt; +                         &quot;    cmp     %0, %3          \n&quot;
</span><br>
<span class="quotelev1">&gt; +                         &quot;    bne     2f              \n&quot;
</span><br>
<span class="quotelev1">&gt; +                         &quot;    strex   %1, %4, [%2]    \n&quot;
</span><br>
<span class="quotelev1">&gt; +                         &quot;    cmp     %1, #0          \n&quot;
</span><br>
<span class="quotelev1">&gt; +                         &quot;    bne     1b              \n&quot;
</span><br>
<span class="quotelev1">&gt; +                         &quot;2:                          \n&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                         : &quot;=&amp;r&quot; (ret), &quot;=&amp;r&quot; (tmp)
</span><br>
<span class="quotelev1">&gt; +                         : &quot;r&quot; (addr), &quot;r&quot; (oldval), &quot;r&quot; (newval)
</span><br>
<span class="quotelev1">&gt; +                         : &quot;cc&quot;, &quot;memory&quot;);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +   return (ret == oldval);
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/* these two functions aren't inlined in the non-gcc case because then
</span><br>
<span class="quotelev1">&gt; +   there would be two function calls (since neither cmpset_32 nor
</span><br>
<span class="quotelev1">&gt; +   atomic_?mb can be inlined).  Instead, we &quot;inline&quot; them by hand in
</span><br>
<span class="quotelev1">&gt; +   the assembly, meaning there is one function call overhead instead
</span><br>
<span class="quotelev1">&gt; +   of two */
</span><br>
<span class="quotelev1">&gt; +static inline int opal_atomic_cmpset_acq_32(volatile int32_t *addr,
</span><br>
<span class="quotelev1">&gt; +                                            int32_t oldval, int32_t newval)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    int rc;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    rc = opal_atomic_cmpset_32(addr, oldval, newval);
</span><br>
<span class="quotelev1">&gt; +    opal_atomic_rmb();
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return rc;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static inline int opal_atomic_cmpset_rel_32(volatile int32_t *addr,
</span><br>
<span class="quotelev1">&gt; +                                            int32_t oldval, int32_t newval)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    opal_atomic_wmb();
</span><br>
<span class="quotelev1">&gt; +    return opal_atomic_cmpset_32(addr, oldval, newval);
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static inline int opal_atomic_cmpset_64(volatile int64_t *addr,
</span><br>
<span class="quotelev1">&gt; +                                        int64_t oldval, int64_t newval)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +  int64_t ret;
</span><br>
<span class="quotelev1">&gt; +  int tmp;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +   __asm__ __volatile__ (
</span><br>
<span class="quotelev1">&gt; +                         &quot;1:  ldrexd  %0, %H0, [%2]           \n&quot;
</span><br>
<span class="quotelev1">&gt; +                         &quot;    cmp     %0, %3                  \n&quot;
</span><br>
<span class="quotelev1">&gt; +                         &quot;    cmpeq   %H0, %H3                \n&quot;
</span><br>
<span class="quotelev1">&gt; +                         &quot;    bne     2f                      \n&quot;
</span><br>
<span class="quotelev1">&gt; +                         &quot;    strexd  %1, %4, %H4, [%2]       \n&quot;
</span><br>
<span class="quotelev1">&gt; +                         &quot;    cmp     %1, #0                  \n&quot;
</span><br>
<span class="quotelev1">&gt; +                         &quot;    bne     1b                      \n&quot;
</span><br>
<span class="quotelev1">&gt; +                         &quot;2:                                    \n&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                         : &quot;=&amp;r&quot; (ret), &quot;=&amp;r&quot; (tmp)
</span><br>
<span class="quotelev1">&gt; +                         : &quot;r&quot; (addr), &quot;r&quot; (oldval), &quot;r&quot; (newval)
</span><br>
<span class="quotelev1">&gt; +                         : &quot;cc&quot;, &quot;memory&quot;);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +   return (ret == oldval);
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/* these two functions aren't inlined in the non-gcc case because then
</span><br>
<span class="quotelev1">&gt; +   there would be two function calls (since neither cmpset_64 nor
</span><br>
<span class="quotelev1">&gt; +   atomic_?mb can be inlined).  Instead, we &quot;inline&quot; them by hand in
</span><br>
<span class="quotelev1">&gt; +   the assembly, meaning there is one function call overhead instead
</span><br>
<span class="quotelev1">&gt; +   of two */
</span><br>
<span class="quotelev1">&gt; +static inline int opal_atomic_cmpset_acq_64(volatile int64_t *addr,
</span><br>
<span class="quotelev1">&gt; +                                            int64_t oldval, int64_t newval)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    int rc;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    rc = opal_atomic_cmpset_64(addr, oldval, newval);
</span><br>
<span class="quotelev1">&gt; +    opal_atomic_rmb();
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return rc;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static inline int opal_atomic_cmpset_rel_64(volatile int64_t *addr,
</span><br>
<span class="quotelev1">&gt; +                                            int64_t oldval, int64_t newval)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    opal_atomic_wmb();
</span><br>
<span class="quotelev1">&gt; +    return opal_atomic_cmpset_64(addr, oldval, newval);
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static inline int32_t opal_atomic_add_32(volatile int32_t* v, int inc)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +   int32_t t;
</span><br>
<span class="quotelev1">&gt; +   int tmp;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +   __asm__ __volatile__(
</span><br>
<span class="quotelev1">&gt; +                         &quot;1:  ldrex   %0, [%2]        \n&quot;
</span><br>
<span class="quotelev1">&gt; +                         &quot;    add     %0, %0, %3      \n&quot;
</span><br>
<span class="quotelev1">&gt; +                         &quot;    strex   %1, %0, [%2]    \n&quot;
</span><br>
<span class="quotelev1">&gt; +                         &quot;    cmp     %1, #0          \n&quot;
</span><br>
<span class="quotelev1">&gt; +                         &quot;    bne     1b              \n&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                         : &quot;=&amp;r&quot; (t), &quot;=&amp;r&quot; (tmp)
</span><br>
<span class="quotelev1">&gt; +                         : &quot;r&quot; (v), &quot;r&quot; (inc)
</span><br>
<span class="quotelev1">&gt; +                         : &quot;cc&quot;, &quot;memory&quot;);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +   return t;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static inline int32_t opal_atomic_sub_32(volatile int32_t* v, int dec)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +   int32_t t;
</span><br>
<span class="quotelev1">&gt; +   int tmp;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +   __asm__ __volatile__(
</span><br>
<span class="quotelev1">&gt; +                         &quot;1:  ldrex   %0, [%2]        \n&quot;
</span><br>
<span class="quotelev1">&gt; +                         &quot;    sub     %0, %0, %3      \n&quot;
</span><br>
<span class="quotelev1">&gt; +                         &quot;    strex   %1, %0, [%2]    \n&quot;
</span><br>
<span class="quotelev1">&gt; +                         &quot;    cmp     %1, #0          \n&quot;
</span><br>
<span class="quotelev1">&gt; +                         &quot;    bne     1b              \n&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +                         : &quot;=&amp;r&quot; (t), &quot;=&amp;r&quot; (tmp)
</span><br>
<span class="quotelev1">&gt; +                         : &quot;r&quot; (v), &quot;r&quot; (dec)
</span><br>
<span class="quotelev1">&gt; +                         : &quot;cc&quot;, &quot;memory&quot;);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +   return t;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#endif /* OMPI_GCC_INLINE_ASSEMBLY */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#endif /* ! OMPI_SYS_ARCH_ATOMIC_H */
</span><br>
<span class="quotelev1">&gt; Index: ompi-trunk/opal/include/opal/sys/arm/timer.h
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi-trunk/opal/include/opal/sys/arm/timer.h	(revision 0)
</span><br>
<span class="quotelev1">&gt; +++ ompi-trunk/opal/include/opal/sys/arm/timer.h	(revision 0)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,33 @@
</span><br>
<span class="quotelev1">&gt; +/*
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2008      The University of Tennessee and The University
</span><br>
<span class="quotelev1">&gt; + *                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev1">&gt; + *                         reserved.
</span><br>
<span class="quotelev1">&gt; + * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; + * 
</span><br>
<span class="quotelev1">&gt; + * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; + * 
</span><br>
<span class="quotelev1">&gt; + * $HEADER$
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#ifndef OMPI_SYS_ARCH_TIMER_H
</span><br>
<span class="quotelev1">&gt; +#define OMPI_SYS_ARCH_TIMER_H 1
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#include &lt;sys/times.h&gt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +typedef uint64_t opal_timer_t;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static inline opal_timer_t
</span><br>
<span class="quotelev1">&gt; +opal_sys_timer_get_cycles(void)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    opal_timer_t ret;
</span><br>
<span class="quotelev1">&gt; +    struct tms accurate_clock;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    times(&amp;accurate_clock);
</span><br>
<span class="quotelev1">&gt; +    ret = accurate_clock.tms_utime + accurate_clock.tms_stime;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return ret;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#define OPAL_HAVE_SYS_TIMER_GET_CYCLES 1
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#endif /* ! OMPI_SYS_ARCH_TIMER_H */
</span><br>
<span class="quotelev1">&gt; Index: ompi-trunk/opal/include/opal/sys/arm/Makefile.am
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi-trunk/opal/include/opal/sys/arm/Makefile.am	(revision 0)
</span><br>
<span class="quotelev1">&gt; +++ ompi-trunk/opal/include/opal/sys/arm/Makefile.am	(revision 0)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,24 @@
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
</span><br>
<span class="quotelev1">&gt; +#                         University Research and Technology
</span><br>
<span class="quotelev1">&gt; +#                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2004-2008 The University of Tennessee and The University
</span><br>
<span class="quotelev1">&gt; +#                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev1">&gt; +#                         reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2004-2005 High Performance Computing Center Stuttgart, 
</span><br>
<span class="quotelev1">&gt; +#                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt; +#                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; +# 
</span><br>
<span class="quotelev1">&gt; +# Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; +# 
</span><br>
<span class="quotelev1">&gt; +# $HEADER$
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# This makefile.am does not stand on its own - it is included from
</span><br>
<span class="quotelev1">&gt; opal/include/Makefile.am
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +headers += \
</span><br>
<span class="quotelev1">&gt; +	opal/sys/arm/atomic.h \
</span><br>
<span class="quotelev1">&gt; +	opal/sys/arm/timer.h
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; Index: ompi-trunk/opal/include/opal/sys/arm/update.sh
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi-trunk/opal/include/opal/sys/arm/update.sh	(revision 0)
</span><br>
<span class="quotelev1">&gt; +++ ompi-trunk/opal/include/opal/sys/arm/update.sh	(revision 0)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,37 @@
</span><br>
<span class="quotelev1">&gt; +#!/bin/sh
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
</span><br>
<span class="quotelev1">&gt; +#                         University Research and Technology
</span><br>
<span class="quotelev1">&gt; +#                         Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2004-2005 The University of Tennessee and The University
</span><br>
<span class="quotelev1">&gt; +#                         of Tennessee Research Foundation.  All rights
</span><br>
<span class="quotelev1">&gt; +#                         reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2004-2005 High Performance Computing Center Stuttgart, 
</span><br>
<span class="quotelev1">&gt; +#                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt; +#                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; +# 
</span><br>
<span class="quotelev1">&gt; +# Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; +# 
</span><br>
<span class="quotelev1">&gt; +# $HEADER$
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +CFILE=/tmp/opal_atomic_$$.c
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +trap &quot;/bin/rm -f $CFILE; exit 0&quot; 0 1 2 15
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +echo Updating atomic.s from atomic.h using gcc
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +cat &gt; $CFILE&lt;&lt;EOF
</span><br>
<span class="quotelev1">&gt; +#include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; +#include &lt;inttypes.h&gt;
</span><br>
<span class="quotelev1">&gt; +#define static
</span><br>
<span class="quotelev1">&gt; +#define inline
</span><br>
<span class="quotelev1">&gt; +#define OMPI_GCC_INLINE_ASSEMBLY 1
</span><br>
<span class="quotelev1">&gt; +#define OPAL_WANT_SMP_LOCKS 1
</span><br>
<span class="quotelev1">&gt; +#include &quot;../architecture.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;atomic.h&quot;
</span><br>
<span class="quotelev1">&gt; +EOF
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +gcc -O1 -I. -S $CFILE -o atomic.s
</span><br>
<span class="quotelev1">&gt; Index: ompi-trunk/opal/include/opal/sys/atomic.h
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi-trunk/opal/include/opal/sys/atomic.h	(revision 24191)
</span><br>
<span class="quotelev1">&gt; +++ ompi-trunk/opal/include/opal/sys/atomic.h	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -146,6 +146,8 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/sys/alpha/atomic.h&quot;
</span><br>
<span class="quotelev1">&gt; #elif OPAL_ASSEMBLY_ARCH == OMPI_AMD64
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/sys/amd64/atomic.h&quot;
</span><br>
<span class="quotelev1">&gt; +#elif OPAL_ASSEMBLY_ARCH == OMPI_ARM
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal/sys/arm/atomic.h&quot;
</span><br>
<span class="quotelev1">&gt; #elif OPAL_ASSEMBLY_ARCH == OMPI_IA32
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/sys/ia32/atomic.h&quot;
</span><br>
<span class="quotelev1">&gt; #elif OPAL_ASSEMBLY_ARCH == OMPI_IA64
</span><br>
<span class="quotelev1">&gt; Index: ompi-trunk/opal/include/opal/sys/timer.h
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi-trunk/opal/include/opal/sys/timer.h	(revision 24191)
</span><br>
<span class="quotelev1">&gt; +++ ompi-trunk/opal/include/opal/sys/timer.h	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -79,6 +79,8 @@
</span><br>
<span class="quotelev1">&gt; /* don't include system-level gorp when generating doxygen files */ 
</span><br>
<span class="quotelev1">&gt; #elif OPAL_ASSEMBLY_ARCH == OMPI_AMD64
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/sys/amd64/timer.h&quot;
</span><br>
<span class="quotelev1">&gt; +#elif OPAL_ASSEMBLY_ARCH == OMPI_ARM
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal/sys/arm/timer.h&quot;
</span><br>
<span class="quotelev1">&gt; #elif OPAL_ASSEMBLY_ARCH == OMPI_IA32
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/sys/ia32/timer.h&quot;
</span><br>
<span class="quotelev1">&gt; #elif OPAL_ASSEMBLY_ARCH == OMPI_IA64
</span><br>
<span class="quotelev1">&gt; Index: ompi-trunk/opal/include/opal/sys/architecture.h
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi-trunk/opal/include/opal/sys/architecture.h	(revision 24191)
</span><br>
<span class="quotelev1">&gt; +++ ompi-trunk/opal/include/opal/sys/architecture.h	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -36,6 +36,7 @@
</span><br>
<span class="quotelev1">&gt; #define OMPI_SPARCV9_32     0061
</span><br>
<span class="quotelev1">&gt; #define OMPI_SPARCV9_64     0062
</span><br>
<span class="quotelev1">&gt; #define OMPI_MIPS           0070
</span><br>
<span class="quotelev1">&gt; +#define OMPI_ARM            0100
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Formats */
</span><br>
<span class="quotelev1">&gt; #define OMPI_DEFAULT        1000  /* standard for given architecture */
</span><br>
<span class="quotelev1">&gt; Index: ompi-trunk/opal/config/opal_config_asm.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi-trunk/opal/config/opal_config_asm.m4	(revision 24191)
</span><br>
<span class="quotelev1">&gt; +++ ompi-trunk/opal/config/opal_config_asm.m4	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -900,6 +900,12 @@
</span><br>
<span class="quotelev1">&gt;             OMPI_GCC_INLINE_ASSIGN='&quot;bis [$]31,[$]31,%0&quot; : &quot;=&amp;r&quot;(ret)'
</span><br>
<span class="quotelev1">&gt;             ;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +        armv7*)
</span><br>
<span class="quotelev1">&gt; +            ompi_cv_asm_arch=&quot;ARM&quot;
</span><br>
<span class="quotelev1">&gt; +            OPAL_ASM_SUPPORT_64BIT=1
</span><br>
<span class="quotelev1">&gt; +            OMPI_GCC_INLINE_ASSIGN='&quot;mov %0, #0&quot; : &quot;=&amp;r&quot;(ret)'
</span><br>
<span class="quotelev1">&gt; +            ;;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;         mips-*|mips64*)
</span><br>
<span class="quotelev1">&gt;             # Should really find some way to make sure that we are on
</span><br>
<span class="quotelev1">&gt;             # a MIPS III machine (r4000 and later)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8841.php">Hugo Meyer: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
<li><strong>Previous message:</strong> <a href="8839.php">Jeff Squyres: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/12/8819.php">Leif Lindholm: "[OMPI devel] [Patch] Add support for ARMv7-A architecture"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8844.php">Leif Lindholm: "Re: [OMPI devel] [Patch] Add support for ARMv7-A architecture"</a>
<li><strong>Reply:</strong> <a href="8844.php">Leif Lindholm: "Re: [OMPI devel] [Patch] Add support for ARMv7-A architecture"</a>
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
