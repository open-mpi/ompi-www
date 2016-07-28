<?
$subject_val = "Re: [OMPI devel] amd64 atomic.h warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  8 10:46:18 2010" -->
<!-- isoreceived="20100608144618" -->
<!-- sent="Tue, 8 Jun 2010 14:46:11 +0000" -->
<!-- isosent="20100608144611" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] amd64 atomic.h warnings" -->
<!-- id="ED92E3CE-1293-4740-94DD-F7DC5720EDC1_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AE83B347-746B-4DF9-AFA5-94A2B4FFB580_at_cisco.com" -->
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
<strong>Date:</strong> 2010-06-08 10:46:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8072.php">Jeff Squyres: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<li><strong>Previous message:</strong> <a href="8070.php">Jeff Squyres: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<li><strong>In reply to:</strong> <a href="8070.php">Jeff Squyres: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8072.php">Jeff Squyres: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<li><strong>Reply:</strong> <a href="8072.php">Jeff Squyres: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It didn't work. Let's try with this small complete application:
<br>
<p>#include &lt;stdint.h&gt;
<br>
<p>#define SMPLOCK &quot;lock;&quot;
<br>
<p>static inline int opal_atomic_cmpset_32( volatile int32_t *addr,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int32_t oldval, int32_t newval)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;unsigned char ret;
<br>
&nbsp;&nbsp;&nbsp;__asm__ __volatile__ (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SMPLOCK &quot;cmpxchgl %1,%2   \n\t&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;sete     %0      \n\t&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &quot;=qm&quot; (ret)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &quot;q&quot;(newval), &quot;m&quot;(*addr), &quot;a&quot;(oldval)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &quot;memory&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;return (int)ret;
<br>
}
<br>
<p>int main(int argc, char* argv[] )
<br>
{
<br>
&nbsp;&nbsp;int32_t value = 0, oldval = 0, delta = 1;
<br>
&nbsp;&nbsp;int32_t* addr = &amp;value;
<br>
<p>&nbsp;&nbsp;do {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;oldval = *addr;
<br>
&nbsp;&nbsp;} while (0 == opal_atomic_cmpset_32(addr, oldval, oldval + delta));
<br>
&nbsp;&nbsp;return (oldval + delta);
<br>
}
<br>
<p><p><p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Jun 8, 2010, at 14:42 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Look at my output -- I did...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 8, 2010, at 10:40 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Still no good, the opal_atomic_cmpset_32 is not inlined. Try to add -O3 to your command line, this helped for gcc.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;    george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 8, 2010, at 14:14 , Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 8, 2010, at 9:53 AM, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As you can see there is no explicit call, the opal_atomic_cmpset_32 is really inlined. I think the problem is that you didn't specify the -O3 flag on your command line.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ah, you wanted me to compile the OMPI code itself and send you the assembly.  That's not what you asked for.  :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (I just took the code you sent in the mail, stuffed it into george.c, and compiled that with -s -- outside of the context of the Open MPI code tree)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's the new output.  It still didn't inline, but you can see the code for the _cmpset function:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [7:13] svbu-mpi:~/tmp % cat george.c                                           
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdint.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;opal/sys/atomic.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int foo(void) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int32_t oldval, delta;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int32_t *addr = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  do {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     oldval = *addr;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  } while (0 == opal_atomic_cmpset_32(addr, oldval, oldval + delta));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  return (oldval + delta);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [7:13] svbu-mpi:~/tmp % pgcc -O3 -I /home/jsquyres/svn/ompi4 -I/home/jsquyres/svn/ompi4/opal/include -c -s george.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [7:13] svbu-mpi:~/tmp % cat george.s                                                  .file   &quot;george.c&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .version        &quot;01.01&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## PGC 7.0 -opt 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## PGC 06/08/2010  05:10:04
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## pgcc george.c -c -S
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## /opt/pgi/7.0.7/linux86-64/7.0-7/bin/pgc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## george.c -opt 1 -terse 1 -inform warn -x 119 0xa10000 -x 122 0x40 -x 123 0x1000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## -x 127 4 -x 127 16 -x 19 0x400000 -x 28 0x40000 -x 70 0x8000 -x 122 1 -quad
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## -x 59 4 -x 59 4 -tp p7-64 -astype 0 -stdinc /opt/pgi/7.0.7/linux86-64/7.0-7/include:/usr/local/include:/usr/lib/gcc/x86_64-redhat-linux/4.1.2/include:/usr/lib/gcc/x86_64-redhat-linux/4.1.2/include:/usr/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## -def unix -def __unix -def __unix__ -def linux -def __linux -def __linux__
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## -def __NO_MATH_INLINES -def __x86_64__ -def __LONG_MAX__=9223372036854775807L
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## -def __SIZE_TYPE__=unsigned long int -def __PTRDIFF_TYPE__=long int -def __THROW=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## -def __extension__= -def __amd64__ -def __SSE__ -def __MMX__ -def __SSE2__
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## -def __SSE3__ -predicate #machine(x86_64) #lint(off) #system(posix) #cpu(x86_64)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## -cmdline +pgcc george.c -c -S -x 123 4 -x 123 0x80000000 -alwaysinline /opt/pgi/7.0.7/linux86-64/7.0-7/lib/libintrinsics.il 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## -asm george.s
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## lineno: 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .text
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .align  16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .globl  foo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; foo:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ..Dcfb0:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      pushq   %rbp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ..Dcfi0:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      movq    %rsp, %rbp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ..Dcfi1:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      subq    $16, %rsp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ..EN1:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## lineno: 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      movq    $0, -8(%rbp)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .p2align        4,,3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .LB157:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## lineno: 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      movq    -8(%rbp), %rdi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      movl    (%rdi), %esi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      movl    %esi, -12(%rbp)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      movl    -16(%rbp), %edx
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      addl    %esi, %edx
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      xorl    %eax, %eax
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      call    opal_atomic_cmpset_32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      testl   %eax, %eax
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      je      .LB157
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      movl    -16(%rbp), %eax
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      addl    -12(%rbp), %eax
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## lineno: 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      leave
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ret
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .type   foo,@function
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .size   foo,.-foo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ..Dcfe0:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; __fooEND:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .section        .pgi_trace
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .align  8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .quad   foo     ## address of routine
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .quad   __fooEND - foo  ## size of routine
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .2byte  0       ## flags for future use
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .2byte  3       ## length of following string
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## name:foo:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .byte   0x66,0x6f,0x6f,0x00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .data
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .globl  opal_atomic_cmpset_32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .section        .debug_frame
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ..Dcieb0:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .4byte  ..Dciee0-..Dcieb0-4     ## CIE length
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .4byte  0xffffffff      ## CIE ID
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .byte   0x1     ## CIE version
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .byte   0x0     ## no augmentation
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .byte   0x1     ## ULEB128 1, code alignment factor
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .byte   0x78    ## SLEB128 -8, data alignment factor
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .byte   0x10    ## return address column
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .byte   0xc     ## DW_CFA_def_cfa (col 7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .byte   0x7     ## ULEB128 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .byte   0x8     ## ULEB128 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .byte   0x90    ## DW_CFA_offset (col 16)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .byte   0x1     ## ULEB128 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .align  8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ..Dciee0:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .4byte  ..Dfdee0-..Dfdeb0       ## FDE length
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ..Dfdeb0:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .4byte  ..Dcieb0        ## CIE pointer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .quad   ..Dcfb0 ## initial location
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .quad   ..Dcfe0-..Dcfb0 ## address range
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .byte   0x4     ## DW_CFA_advance_loc4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .4byte  ..Dcfi0-..Dcfb0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .byte   0xe     ## DW_CFA_def_cfa_offset
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .byte   0x10    ## ULEB128 16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .byte   0x86    ## DW_CFA_offset (col 6)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .byte   0x2     ## ULEB128 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .byte   0x4     ## DW_CFA_advance_loc4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .4byte  ..Dcfi1-..Dcfi0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .byte   0xd     ## DW_CFA_def_cfa_register (col 6)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .byte   0x6     ## ULEB128 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .align  8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ..Dfdee0:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      .ident  &quot;PGC 7.0-7&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [7:13] svbu-mpi:~/tmp %
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
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
<li><strong>Next message:</strong> <a href="8072.php">Jeff Squyres: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<li><strong>Previous message:</strong> <a href="8070.php">Jeff Squyres: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<li><strong>In reply to:</strong> <a href="8070.php">Jeff Squyres: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8072.php">Jeff Squyres: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
<li><strong>Reply:</strong> <a href="8072.php">Jeff Squyres: "Re: [OMPI devel] amd64 atomic.h warnings"</a>
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
