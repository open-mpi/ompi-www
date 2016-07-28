<?
$subject_val = "Re: [OMPI devel] amd64 atomic.h warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  8 08:22:58 2010" -->
<!-- isoreceived="20100608122258" -->
<!-- sent="Tue, 8 Jun 2010 12:22:51 +0000" -->
<!-- isosent="20100608122251" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] amd64 atomic.h warnings" -->
<!-- id="5B9932E0-8EFB-4DBB-8CC6-40C4C0E722AB_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="904D449D-276D-4F4A-8C44-B499ABB5BD04_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] amd64 atomic.h warnings<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-08 08:22:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8066.php">Jeff Squyres: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<li><strong>Previous message:</strong> <a href="8064.php">Jeff Squyres: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<li><strong>In reply to:</strong> <a href="8064.php">Jeff Squyres: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8066.php">Jeff Squyres: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<li><strong>Reply:</strong> <a href="8066.php">Jeff Squyres: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The inline was ignored, and the code for the opal_atomic_cmpset_32 is not in there ...
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Jun 8, 2010, at 12:11 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Here's the file I used:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdint.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int foo(void) {
</span><br>
<span class="quotelev1">&gt;  int32_t oldval, delta;
</span><br>
<span class="quotelev1">&gt;  int32_t *addr = 0;
</span><br>
<span class="quotelev1">&gt;   do {
</span><br>
<span class="quotelev1">&gt;      oldval = *addr;
</span><br>
<span class="quotelev1">&gt;   } while (0 == opal_atomic_cmpset_32(addr, oldval, oldval + delta));
</span><br>
<span class="quotelev1">&gt;   return (oldval + delta);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's the assembly it produced (note that this is pgi 7.0.7 -- later versions work fine):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	.file	&quot;george.c&quot;
</span><br>
<span class="quotelev1">&gt; 	.version	&quot;01.01&quot;
</span><br>
<span class="quotelev1">&gt; ## PGC 7.0 -opt 1
</span><br>
<span class="quotelev1">&gt; ## PGC 06/08/2010  05:10:04
</span><br>
<span class="quotelev1">&gt; ## pgcc george.c -c -S
</span><br>
<span class="quotelev1">&gt; ## /opt/pgi/7.0.7/linux86-64/7.0-7/bin/pgc
</span><br>
<span class="quotelev1">&gt; ## george.c -opt 1 -terse 1 -inform warn -x 119 0xa10000 -x 122 0x40 -x 123 0x10
</span><br>
<span class="quotelev1">&gt; 00
</span><br>
<span class="quotelev1">&gt; ## -x 127 4 -x 127 16 -x 19 0x400000 -x 28 0x40000 -x 70 0x8000 -x 122 1 -quad
</span><br>
<span class="quotelev1">&gt; ## -x 59 4 -x 59 4 -tp p7-64 -astype 0 -stdinc /opt/pgi/7.0.7/linux86-64/7.0-7/i
</span><br>
<span class="quotelev1">&gt; nclude:/usr/local/include:/usr/lib/gcc/x86_64-redhat-linux/4.1.2/include:/usr/li
</span><br>
<span class="quotelev1">&gt; b/gcc/x86_64-redhat-linux/4.1.2/include:/usr/include
</span><br>
<span class="quotelev1">&gt; ## -def unix -def __unix -def __unix__ -def linux -def __linux -def __linux__
</span><br>
<span class="quotelev1">&gt; ## -def __NO_MATH_INLINES -def __x86_64__ -def __LONG_MAX__=9223372036854775807L
</span><br>
<span class="quotelev1">&gt; ## -def __SIZE_TYPE__=unsigned long int -def __PTRDIFF_TYPE__=long int -def __TH
</span><br>
<span class="quotelev1">&gt; ROW=
</span><br>
<span class="quotelev1">&gt; ## -def __extension__= -def __amd64__ -def __SSE__ -def __MMX__ -def __SSE2__
</span><br>
<span class="quotelev1">&gt; ## -def __SSE3__ -predicate #machine(x86_64) #lint(off) #system(posix) #cpu(x86_
</span><br>
<span class="quotelev1">&gt; 64)
</span><br>
<span class="quotelev1">&gt; ## -cmdline +pgcc george.c -c -S -x 123 4 -x 123 0x80000000 -alwaysinline /opt/p
</span><br>
<span class="quotelev1">&gt; gi/7.0.7/linux86-64/7.0-7/lib/libintrinsics.il 4
</span><br>
<span class="quotelev1">&gt; ## -asm george.s
</span><br>
<span class="quotelev1">&gt; ## lineno: 3
</span><br>
<span class="quotelev1">&gt; 	.text
</span><br>
<span class="quotelev1">&gt; 	.align	16
</span><br>
<span class="quotelev1">&gt; 	.globl	foo
</span><br>
<span class="quotelev1">&gt; foo:
</span><br>
<span class="quotelev1">&gt; ..Dcfb0:
</span><br>
<span class="quotelev1">&gt; 	pushq	%rbp
</span><br>
<span class="quotelev1">&gt; ..Dcfi0:
</span><br>
<span class="quotelev1">&gt; 	movq	%rsp, %rbp
</span><br>
<span class="quotelev1">&gt; ..Dcfi1:
</span><br>
<span class="quotelev1">&gt; 	subq	$16, %rsp
</span><br>
<span class="quotelev1">&gt; ..EN1:
</span><br>
<span class="quotelev1">&gt; ## lineno: 5
</span><br>
<span class="quotelev1">&gt; 	movq	$0, -8(%rbp)
</span><br>
<span class="quotelev1">&gt; 	.p2align	4,,3
</span><br>
<span class="quotelev1">&gt; .LB157:
</span><br>
<span class="quotelev1">&gt; ## lineno: 6
</span><br>
<span class="quotelev1">&gt; 	movq	-8(%rbp), %rdi
</span><br>
<span class="quotelev1">&gt; 	movl	(%rdi), %esi
</span><br>
<span class="quotelev1">&gt; 	movl	%esi, -12(%rbp)
</span><br>
<span class="quotelev1">&gt; 	movl	-16(%rbp), %edx
</span><br>
<span class="quotelev1">&gt; 	addl	%esi, %edx
</span><br>
<span class="quotelev1">&gt; 	xorl	%eax, %eax
</span><br>
<span class="quotelev1">&gt; 	call	opal_atomic_cmpset_32
</span><br>
<span class="quotelev1">&gt; 	testl	%eax, %eax
</span><br>
<span class="quotelev1">&gt; 	je	.LB157
</span><br>
<span class="quotelev1">&gt; 	movl	-16(%rbp), %eax
</span><br>
<span class="quotelev1">&gt; 	addl	-12(%rbp), %eax
</span><br>
<span class="quotelev1">&gt; ## lineno: 10
</span><br>
<span class="quotelev1">&gt; 	leave
</span><br>
<span class="quotelev1">&gt; 	ret
</span><br>
<span class="quotelev1">&gt; 	.type	foo,@function
</span><br>
<span class="quotelev1">&gt; 	.size	foo,.-foo
</span><br>
<span class="quotelev1">&gt; ..Dcfe0:
</span><br>
<span class="quotelev1">&gt; __fooEND:
</span><br>
<span class="quotelev1">&gt; 	.section	.pgi_trace
</span><br>
<span class="quotelev1">&gt; 	.align	8
</span><br>
<span class="quotelev1">&gt; 	.quad	foo	## address of routine
</span><br>
<span class="quotelev1">&gt; 	.quad	__fooEND - foo	## size of routine
</span><br>
<span class="quotelev1">&gt; 	.2byte	0	## flags for future use
</span><br>
<span class="quotelev1">&gt; 	.2byte	3	## length of following string
</span><br>
<span class="quotelev1">&gt; ## name:foo:
</span><br>
<span class="quotelev1">&gt; 	.byte	0x66,0x6f,0x6f,0x00
</span><br>
<span class="quotelev1">&gt; 	.data
</span><br>
<span class="quotelev1">&gt; 	.globl	opal_atomic_cmpset_32
</span><br>
<span class="quotelev1">&gt; 	.section	.debug_frame
</span><br>
<span class="quotelev1">&gt; ..Dcieb0:
</span><br>
<span class="quotelev1">&gt; 	.4byte	..Dciee0-..Dcieb0-4	## CIE length
</span><br>
<span class="quotelev1">&gt; 	.4byte	0xffffffff	## CIE ID
</span><br>
<span class="quotelev1">&gt; 	.byte	0x1	## CIE version
</span><br>
<span class="quotelev1">&gt; 	.byte	0x0	## no augmentation
</span><br>
<span class="quotelev1">&gt; 	.byte	0x1	## ULEB128 1, code alignment factor
</span><br>
<span class="quotelev1">&gt; 	.byte	0x78	## SLEB128 -8, data alignment factor
</span><br>
<span class="quotelev1">&gt; 	.byte	0x10	## return address column
</span><br>
<span class="quotelev1">&gt; 	.byte	0xc	## DW_CFA_def_cfa (col 7)
</span><br>
<span class="quotelev1">&gt; 	.byte	0x7	## ULEB128 7
</span><br>
<span class="quotelev1">&gt; 	.byte	0x8	## ULEB128 8
</span><br>
<span class="quotelev1">&gt; 	.byte	0x90	## DW_CFA_offset (col 16)
</span><br>
<span class="quotelev1">&gt; 	.byte	0x1	## ULEB128 1
</span><br>
<span class="quotelev1">&gt; 	.align	8
</span><br>
<span class="quotelev1">&gt; ..Dciee0:
</span><br>
<span class="quotelev1">&gt; 	.4byte	..Dfdee0-..Dfdeb0	## FDE length
</span><br>
<span class="quotelev1">&gt; ..Dfdeb0:
</span><br>
<span class="quotelev1">&gt; 	.4byte	..Dcieb0	## CIE pointer
</span><br>
<span class="quotelev1">&gt; 	.quad	..Dcfb0	## initial location
</span><br>
<span class="quotelev1">&gt; 	.quad	..Dcfe0-..Dcfb0	## address range
</span><br>
<span class="quotelev1">&gt; 	.byte	0x4	## DW_CFA_advance_loc4
</span><br>
<span class="quotelev1">&gt; 	.4byte	..Dcfi0-..Dcfb0
</span><br>
<span class="quotelev1">&gt; 	.byte	0xe	## DW_CFA_def_cfa_offset
</span><br>
<span class="quotelev1">&gt; 	.byte	0x10	## ULEB128 16
</span><br>
<span class="quotelev1">&gt; 	.byte	0x86	## DW_CFA_offset (col 6)
</span><br>
<span class="quotelev1">&gt; 	.byte	0x2	## ULEB128 2
</span><br>
<span class="quotelev1">&gt; 	.byte	0x4	## DW_CFA_advance_loc4
</span><br>
<span class="quotelev1">&gt; 	.4byte	..Dcfi1-..Dcfi0
</span><br>
<span class="quotelev1">&gt; 	.byte	0xd	## DW_CFA_def_cfa_register (col 6)
</span><br>
<span class="quotelev1">&gt; 	.byte	0x6	## ULEB128 6
</span><br>
<span class="quotelev1">&gt; 	.align	8
</span><br>
<span class="quotelev1">&gt; ..Dfdee0:
</span><br>
<span class="quotelev1">&gt; 	.ident	&quot;PGC 7.0-7&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 7, 2010, at 9:54 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 7, 2010, at 19:47 , Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm getting these warnings from PGI 7.0.7.  Do they matter?  Is &quot;clobber&quot; important?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; clobber might be the most important piece of information there, it trigger a warning for the compiler that the condition code register have been altered.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This code is protected by OMPI_GCC_INLINE_ASSEMBLY, so if we're compiling it it means that somehow we detected that PGI support the GCC inline assembly. Now, if they only half-support it, there is not much we can do.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you send the assembly instructions generated by the PGI compiler for the following code:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   int32_t oldval;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   do {
</span><br>
<span class="quotelev2">&gt;&gt;      oldval = *addr;
</span><br>
<span class="quotelev2">&gt;&gt;   } while (0 == opal_atomic_cmpset_32(addr, oldval, oldval + delta));
</span><br>
<span class="quotelev2">&gt;&gt;   return (oldval + delta);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;    george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CXX    mpicxx.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../opal/include/opal/sys/amd64/atomic.h&quot;, line 91: warning: &quot;cc&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         clobber ignored
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        : &quot;memory&quot;, &quot;cc&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../opal/include/opal/sys/amd64/atomic.h&quot;, line 83: warning: parameter
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &quot;oldval&quot; was set but never used
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                         int32_t oldval, int32_t newval)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                 ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../opal/include/opal/sys/amd64/atomic.h&quot;, line 112: warning: &quot;cc&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         clobber ignored
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        : &quot;memory&quot;, &quot;cc&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../opal/include/opal/sys/amd64/atomic.h&quot;, line 104: warning: parameter
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &quot;oldval&quot; was set but never used
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                          int64_t oldval, int64_t newval)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                  ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8066.php">Jeff Squyres: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<li><strong>Previous message:</strong> <a href="8064.php">Jeff Squyres: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<li><strong>In reply to:</strong> <a href="8064.php">Jeff Squyres: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8066.php">Jeff Squyres: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<li><strong>Reply:</strong> <a href="8066.php">Jeff Squyres: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
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
