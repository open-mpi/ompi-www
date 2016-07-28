<?
$subject_val = "Re: [OMPI devel] amd64 atomic.h warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  8 08:11:13 2010" -->
<!-- isoreceived="20100608121113" -->
<!-- sent="Tue, 8 Jun 2010 08:11:08 -0400" -->
<!-- isosent="20100608121108" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] amd64 atomic.h warnings" -->
<!-- id="904D449D-276D-4F4A-8C44-B499ABB5BD04_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="11B142AA-64A9-426F-A039-D99BABEFA098_at_eecs.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-08 08:11:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8065.php">George Bosilca: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<li><strong>Previous message:</strong> <a href="8063.php">Jeff Squyres: "Re: [OMPI devel] v1.5 .so version numbers"</a>
<li><strong>In reply to:</strong> <a href="8061.php">George Bosilca: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8065.php">George Bosilca: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<li><strong>Reply:</strong> <a href="8065.php">George Bosilca: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's the file I used:
<br>
<p>#include &lt;stdint.h&gt;
<br>
<p>int foo(void) {
<br>
&nbsp;&nbsp;int32_t oldval, delta;
<br>
&nbsp;&nbsp;int32_t *addr = 0;
<br>
&nbsp;&nbsp;&nbsp;do {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;oldval = *addr;
<br>
&nbsp;&nbsp;&nbsp;} while (0 == opal_atomic_cmpset_32(addr, oldval, oldval + delta));
<br>
&nbsp;&nbsp;&nbsp;return (oldval + delta);
<br>
}
<br>
<p>Here's the assembly it produced (note that this is pgi 7.0.7 -- later versions work fine):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.file	&quot;george.c&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.version	&quot;01.01&quot;
<br>
## PGC 7.0 -opt 1
<br>
## PGC 06/08/2010  05:10:04
<br>
## pgcc george.c -c -S
<br>
## /opt/pgi/7.0.7/linux86-64/7.0-7/bin/pgc
<br>
## george.c -opt 1 -terse 1 -inform warn -x 119 0xa10000 -x 122 0x40 -x 123 0x10
<br>
00
<br>
## -x 127 4 -x 127 16 -x 19 0x400000 -x 28 0x40000 -x 70 0x8000 -x 122 1 -quad
<br>
## -x 59 4 -x 59 4 -tp p7-64 -astype 0 -stdinc /opt/pgi/7.0.7/linux86-64/7.0-7/i
<br>
nclude:/usr/local/include:/usr/lib/gcc/x86_64-redhat-linux/4.1.2/include:/usr/li
<br>
b/gcc/x86_64-redhat-linux/4.1.2/include:/usr/include
<br>
## -def unix -def __unix -def __unix__ -def linux -def __linux -def __linux__
<br>
## -def __NO_MATH_INLINES -def __x86_64__ -def __LONG_MAX__=9223372036854775807L
<br>
## -def __SIZE_TYPE__=unsigned long int -def __PTRDIFF_TYPE__=long int -def __TH
<br>
ROW=
<br>
## -def __extension__= -def __amd64__ -def __SSE__ -def __MMX__ -def __SSE2__
<br>
## -def __SSE3__ -predicate #machine(x86_64) #lint(off) #system(posix) #cpu(x86_
<br>
64)
<br>
## -cmdline +pgcc george.c -c -S -x 123 4 -x 123 0x80000000 -alwaysinline /opt/p
<br>
gi/7.0.7/linux86-64/7.0-7/lib/libintrinsics.il 4
<br>
## -asm george.s
<br>
## lineno: 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.text
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.align	16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.globl	foo
<br>
foo:
<br>
..Dcfb0:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pushq	%rbp
<br>
..Dcfi0:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;movq	%rsp, %rbp
<br>
..Dcfi1:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;subq	$16, %rsp
<br>
..EN1:
<br>
## lineno: 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;movq	$0, -8(%rbp)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.p2align	4,,3
<br>
.LB157:
<br>
## lineno: 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;movq	-8(%rbp), %rdi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;movl	(%rdi), %esi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;movl	%esi, -12(%rbp)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;movl	-16(%rbp), %edx
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;addl	%esi, %edx
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;xorl	%eax, %eax
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call	opal_atomic_cmpset_32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;testl	%eax, %eax
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;je	.LB157
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;movl	-16(%rbp), %eax
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;addl	-12(%rbp), %eax
<br>
## lineno: 10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;leave
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.type	foo,@function
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.size	foo,.-foo
<br>
..Dcfe0:
<br>
__fooEND:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.section	.pgi_trace
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.align	8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.quad	foo	## address of routine
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.quad	__fooEND - foo	## size of routine
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.2byte	0	## flags for future use
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.2byte	3	## length of following string
<br>
## name:foo:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.byte	0x66,0x6f,0x6f,0x00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.data
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.globl	opal_atomic_cmpset_32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.section	.debug_frame
<br>
..Dcieb0:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.4byte	..Dciee0-..Dcieb0-4	## CIE length
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.4byte	0xffffffff	## CIE ID
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.byte	0x1	## CIE version
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.byte	0x0	## no augmentation
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.byte	0x1	## ULEB128 1, code alignment factor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.byte	0x78	## SLEB128 -8, data alignment factor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.byte	0x10	## return address column
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.byte	0xc	## DW_CFA_def_cfa (col 7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.byte	0x7	## ULEB128 7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.byte	0x8	## ULEB128 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.byte	0x90	## DW_CFA_offset (col 16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.byte	0x1	## ULEB128 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.align	8
<br>
..Dciee0:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.4byte	..Dfdee0-..Dfdeb0	## FDE length
<br>
..Dfdeb0:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.4byte	..Dcieb0	## CIE pointer
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.quad	..Dcfb0	## initial location
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.quad	..Dcfe0-..Dcfb0	## address range
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.byte	0x4	## DW_CFA_advance_loc4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.4byte	..Dcfi0-..Dcfb0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.byte	0xe	## DW_CFA_def_cfa_offset
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.byte	0x10	## ULEB128 16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.byte	0x86	## DW_CFA_offset (col 6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.byte	0x2	## ULEB128 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.byte	0x4	## DW_CFA_advance_loc4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.4byte	..Dcfi1-..Dcfi0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.byte	0xd	## DW_CFA_def_cfa_register (col 6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.byte	0x6	## ULEB128 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.align	8
<br>
..Dfdee0:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.ident	&quot;PGC 7.0-7&quot;
<br>
<p><p>On Jun 7, 2010, at 9:54 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 7, 2010, at 19:47 , Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm getting these warnings from PGI 7.0.7.  Do they matter?  Is &quot;clobber&quot; important?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; clobber might be the most important piece of information there, it trigger a warning for the compiler that the condition code register have been altered.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This code is protected by OMPI_GCC_INLINE_ASSEMBLY, so if we're compiling it it means that somehow we detected that PGI support the GCC inline assembly. Now, if they only half-support it, there is not much we can do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you send the assembly instructions generated by the PGI compiler for the following code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    int32_t oldval;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    do {
</span><br>
<span class="quotelev1">&gt;       oldval = *addr;
</span><br>
<span class="quotelev1">&gt;    } while (0 == opal_atomic_cmpset_32(addr, oldval, oldval + delta));
</span><br>
<span class="quotelev1">&gt;    return (oldval + delta);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  CXX    mpicxx.lo
</span><br>
<span class="quotelev2">&gt; &gt; &quot;../../../opal/include/opal/sys/amd64/atomic.h&quot;, line 91: warning: &quot;cc&quot;
</span><br>
<span class="quotelev2">&gt; &gt;          clobber ignored
</span><br>
<span class="quotelev2">&gt; &gt;                         : &quot;memory&quot;, &quot;cc&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                                     ^
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;../../../opal/include/opal/sys/amd64/atomic.h&quot;, line 83: warning: parameter
</span><br>
<span class="quotelev2">&gt; &gt;          &quot;oldval&quot; was set but never used
</span><br>
<span class="quotelev2">&gt; &gt;                                          int32_t oldval, int32_t newval)
</span><br>
<span class="quotelev2">&gt; &gt;                                                  ^
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;../../../opal/include/opal/sys/amd64/atomic.h&quot;, line 112: warning: &quot;cc&quot;
</span><br>
<span class="quotelev2">&gt; &gt;          clobber ignored
</span><br>
<span class="quotelev2">&gt; &gt;                         : &quot;memory&quot;, &quot;cc&quot;
</span><br>
<span class="quotelev2">&gt; &gt;                                     ^
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;../../../opal/include/opal/sys/amd64/atomic.h&quot;, line 104: warning: parameter
</span><br>
<span class="quotelev2">&gt; &gt;          &quot;oldval&quot; was set but never used
</span><br>
<span class="quotelev2">&gt; &gt;                                           int64_t oldval, int64_t newval)
</span><br>
<span class="quotelev2">&gt; &gt;                                                   ^
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="8065.php">George Bosilca: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<li><strong>Previous message:</strong> <a href="8063.php">Jeff Squyres: "Re: [OMPI devel] v1.5 .so version numbers"</a>
<li><strong>In reply to:</strong> <a href="8061.php">George Bosilca: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8065.php">George Bosilca: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<li><strong>Reply:</strong> <a href="8065.php">George Bosilca: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
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
