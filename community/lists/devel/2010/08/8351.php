<?
$subject_val = "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 25 13:10:20 2010" -->
<!-- isoreceived="20100825171020" -->
<!-- sent="Wed, 25 Aug 2010 13:10:14 -0400" -->
<!-- isosent="20100825171014" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10" -->
<!-- id="75D018E7-F3BD-4215-A72A-FCF559E4D21B_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C752F82.7020104_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-25 13:10:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8352.php">George Bosilca: "Re: [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)"</a>
<li><strong>Previous message:</strong> <a href="8350.php">Jeff Squyres: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r23664"</a>
<li><strong>In reply to:</strong> <a href="8346.php">Rolf vandeVaart: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8425.php">Rolf vandeVaart: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<li><strong>Reply:</strong> <a href="8425.php">Rolf vandeVaart: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Right, that was a pretty intense discussion. However, I don't think we talked about replacing the = by a +. The difference is that = means write and + means read&amp;write. Here is the assembly output from gcc -O3:
<br>
<p>with output &quot;=m&quot; (*v)                      |  with output &quot;+m&quot; (*v)
<br>
and  input  &quot;ir&quot; (i), &quot;m&quot; (*v)             |  and  input  &quot;r&quot; (i)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
<br>
_opal_atomic_add_32:                       |  _opal_atomic_add_32:
<br>
LFB5:                                      |  LFB5:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pushq	%rbp                       |  	pushq	%rbp
<br>
LCFI3:                                     |  LCFI3:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;movq	%rsp, %rbp                 |  	movq	%rsp, %rbp
<br>
LCFI4:                                     |  LCFI4:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;movq	%rdi, -8(%rbp)             |  	movq	%rdi, -8(%rbp)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;movl	%esi, -12(%rbp)            |  	movl	%esi, -12(%rbp)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;movq	-8(%rbp), %rcx             |  	movq	-8(%rbp), %rcx
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;movl	-12(%rbp), %edx            |  	movl	-12(%rbp), %edx
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;movq	-8(%rbp), %rax             |  	movq	-8(%rbp), %rax
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lock;addl %edx,(%rcx)              |  	lock;addl %edx,(%rcx)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;movq	-8(%rbp), %rax             |  	movq	-8(%rbp), %rax
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;movl	(%rax), %eax               |  	movl	(%rax), %eax
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;leave                              |  	leave
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret                                |  	ret
<br>
<p>It generates multiple loads as %ras is updated before the lock. Useless!
<br>
<p>Now, if we put on the output &quot;=m&quot;(*v) and skip the (*)v in the input arguments the code looks like this:
<br>
<p>LFB7:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pushq	%rbp
<br>
LCFI0:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;movq	%rsp, %rbp
<br>
LCFI1:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;movl	$0, -4(%rbp)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;leaq	-4(%rbp), %rax
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;movl	$1, %edx
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lock
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;addl %edx,(%rax)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;movl	-4(%rbp), %eax
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;leave
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret
<br>
<p>Which is a LOT better. Not perfect as it still generate a load after the locked addl, but this is because we wanted to return the (*v).
<br>
<p>Thus the code should look at least like this
<br>
<p>static inline int32_t opal_atomic_add_32(volatile int32_t* v, int i)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;__asm__ __volatile__(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SMPLOCK &quot;addl %1,%0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&quot;=m&quot; (*v)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&quot;r&quot; (i));
<br>
&nbsp;&nbsp;&nbsp;return (*v);  /* should be an atomic operation */
<br>
}
<br>
<p>Now, if what we want back from this function is the __REAL__ result of the atomic addition, then the code is wrong. Well, mostly wrong under heavy usage (i.e. multiple threads doing atomics on the same variable).
<br>
<p>Here is the opal_atomic_add_32 returning the correct result. This is similar to the atomic intrinsic called add_and_fetch.
<br>
<p>static inline int32_t opal_atomic_add_32(volatile int32_t* v, int i)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int ret = i;
<br>
&nbsp;&nbsp;&nbsp;__asm__ __volatile__(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SMPLOCK &quot;xaddl %1,%0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&quot;=m&quot; (*v), &quot;+r&quot; (ret)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);
<br>
&nbsp;&nbsp;&nbsp;return ret+i;
<br>
}
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Aug 25, 2010, at 10:58 , Rolf vandeVaart wrote:
<br>
<p><span class="quotelev1">&gt; With respect to the warnings with atomic.h, we have been down this road before.
</span><br>
<span class="quotelev1">&gt; Here is the ticket with the background information.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1500">https://svn.open-mpi.org/trac/ompi/ticket/1500</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eventually, we decided to just live with the warnings.  However, I will take a look at George's two suggestions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 08/24/10 21:28, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 24, 2010, at 20:40 , Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../openmpi-1.5rc5/opal/include/opal/sys/ia32/atomic.h&quot;, line 170: warning: impossible constraint for &quot;%1&quot; asm operand
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    __asm__ __volatile__(
</span><br>
<span class="quotelev2">&gt;&gt;                         SMPLOCK &quot;addl %1,%0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                         :&quot;=m&quot; (*v)
</span><br>
<span class="quotelev2">&gt;&gt;                         :&quot;ir&quot; (i), &quot;m&quot; (*v));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The problem seems to come from the &quot;ir&quot;. Based on a Sun blog about the gcc style asm inlining support (
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://blogs.sun.com/x86be/entry/gcc_style_asm_inlining_support">http://blogs.sun.com/x86be/entry/gcc_style_asm_inlining_support</a>
</span><br>
<span class="quotelev2">&gt;&gt; ) it appears that i (any size integer immediate constraint) and r (any registers in rax, rbx, rcx, rdx, rbp, rsi, rdi, rsp, r8 - r15). As we don't only apply our atomics on immediate I think we should drop the &quot;i&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../openmpi-1.5rc5/opal/include/opal/sys/ia32/atomic.h&quot;, line 170: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This one is more trickier. Because of the %2 I suspect that the second (*v) on the inputs is not matched to the first (*v) on the outputs. While this might be significantly bad under some circumstances, in this case I think it can be safely ignored.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However I would like to try the following asm code instead with the SUN compiler:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    __asm__ __volatile__(
</span><br>
<span class="quotelev2">&gt;&gt;                         SMPLOCK &quot;addl %1,%0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                         :&quot;+m&quot; (*v)
</span><br>
<span class="quotelev2">&gt;&gt;                         :&quot;r&quot; (i));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;     george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../openmpi-1.5rc5/opal/include/opal/sys/ia32/atomic.h&quot;, line 187: warning: impossible constraint for &quot;%1&quot; asm operand
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../openmpi-1.5rc5/opal/include/opal/sys/ia32/atomic.h&quot;, line 187: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../openmpi-1.5rc5/ompi/mpi/cxx/file.cc&quot;, line 145: Warning (Anachronism): Formal argument read_conversion_fn of type extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*) in call to MPI_Register_datarep(char*, extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed int(*)(void*,ompi_datatype_t*,int,void*,long long,void*).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../../openmpi-1.5rc5/ompi/mpi/cxx/file.cc&quot;, line 146: Warning (Anachronism): Formal argument write_conversion_fn of type extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*) in call to MPI_Register_datarep(char*, extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed int(*)(void*,ompi_datatype_t*,int,void*,long long,void*).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../../openmpi-1.5rc5/ompi/mpi/cxx/file.cc&quot;, line 147: Warning (Anachronism): Formal argument dtype_file_extent_fn of type extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*) in call to MPI_Register_datarep(char*, extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed int(*)(ompi_datatype_t*,int*,void*).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../../openmpi-1.5rc5/ompi/mpi/cxx/file.cc&quot;, line 172: Warning (Anachronism): Formal argument write_conversion_fn of type extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*) in call to MPI_Register_datarep(char*, extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed int(*)(void*,ompi_datatype_t*,int,void*,long long,void*).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../../openmpi-1.5rc5/ompi/mpi/cxx/file.cc&quot;, line 173: Warning (Anachronism): Formal argument dtype_file_extent_fn of type extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*) in call to MPI_Register_datarep(char*, extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed int(*)(ompi_datatype_t*,int*,void*).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../../openmpi-1.5rc5/ompi/mpi/cxx/file.cc&quot;, line 197: Warning (Anachronism): Formal argument read_conversion_fn of type extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*) in call to MPI_Register_datarep(char*, extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed int(*)(void*,ompi_datatype_t*,int,void*,long long,void*).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../../openmpi-1.5rc5/ompi/mpi/cxx/file.cc&quot;, line 199: Warning (Anachronism): Formal argument dtype_file_extent_fn of type extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*) in call to MPI_Register_datarep(char*, extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed int(*)(ompi_datatype_t*,int*,void*).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../../openmpi-1.5rc5/ompi/mpi/cxx/file.cc&quot;, line 224: Warning (Anachronism): Formal argument dtype_file_extent_fn of type extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*) in call to MPI_Register_datarep(char*, extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed int(*)(ompi_datatype_t*,int*,void*).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Though line numbers differ very slightly]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NEW, not seen with 1.4.3rc1, warnings:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Many instances of the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../../openmpi-1.5rc5/orte/mca/ess/ess.h&quot;, line 61: warning: attribute &quot;noreturn&quot; may not be applied to variable, ignored
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../../openmpi-1.5rc5/orte/mca/errmgr/errmgr.h&quot;, line 138: warning: attribute &quot;noreturn&quot; may not be applied to variable, ignored
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Due to applying __opal_attribute_noreturn__ to a function pointer]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Single instances of the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../../../openmpi-1.5rc5/opal/mca/crs/none/crs_none_module.c&quot;, line 136: warning: statement not reached
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../../openmpi-1.5rc5/orte/mca/plm/base/plm_base_rsh_support.c&quot;, line 462: warning: implicit function declaration: rindex
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../../openmpi-1.5rc5/orte/mca/plm/base/plm_base_rsh_support.c&quot;, line 462: warning: improper pointer/integer combination: op &quot;=&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../../openmpi-1.5rc5/orte/mca/plm/base/plm_base_rsh_support.c&quot;, line 565: warning: improper pointer/integer combination: op &quot;=&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../../../openmpi-1.5rc5/orte/mca/rmcast/tcp/rmcast_tcp.c&quot;, line 982: warning: assignment type mismatch:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../../../openmpi-1.5rc5/orte/mca/rmcast/tcp/rmcast_tcp.c&quot;, line 1023: warning: assignment type mismatch:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../../../openmpi-1.5rc5/orte/mca/rmcast/udp/rmcast_udp.c&quot;, line 877: warning: assignment type mismatch:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../../../openmpi-1.5rc5/orte/mca/rmcast/udp/rmcast_udp.c&quot;, line 918: warning: assignment type mismatch:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../../openmpi-1.5rc5/orte/tools/orte-ps/orte-ps.c&quot;, line 288: warning: initializer does not fit or is out of range: 0xfffffffe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../../openmpi-1.5rc5/orte/tools/orte-ps/orte-ps.c&quot;, line 289: warning: initializer does not fit or is out of range: 0xfffffffe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../../../openmpi-1.5rc5/ompi/mca/common/sm/common_sm_mmap.c&quot;, line 110: warning: improper pointer/integer combination: arg #3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../../../openmpi-1.5rc5/ompi/mca/common/sm/common_sm_mmap.c&quot;, line 135: warning: improper pointer/integer combination: arg #3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../../../openmpi-1.5rc5/ompi/mca/common/sm/common_sm_mmap.c&quot;, line 201: warning: assignment type mismatch:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       pointer to char &quot;=&quot; pointer to int
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../../../openmpi-1.5rc5/ompi/mca/common/sm/common_sm_mmap.c&quot;, line 207: warning: assignment type mismatch:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       pointer to char &quot;=&quot; pointer to int
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../../../../../openmpi-1.5rc5/ompi/mca/common/sm/common_sm_mmap.c&quot;, line 280: warning: argument #1 is incompatible with prototype:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       prototype: pointer to char : &quot;/usr/include/sys/mman.h&quot;, line 238
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       argument : pointer to struct mca_common_sm_mmap_t {struct opal_list_item_t {..} map_item, pointer to struct mca_common_sm_file_header_t {..} map_seg, pointer to unsigned char map_addr, pointer to unsigned char data_addr, unsigned int map_size, array[1025] of char map_path}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="8352.php">George Bosilca: "Re: [OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)"</a>
<li><strong>Previous message:</strong> <a href="8350.php">Jeff Squyres: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r23664"</a>
<li><strong>In reply to:</strong> <a href="8346.php">Rolf vandeVaart: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8425.php">Rolf vandeVaart: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<li><strong>Reply:</strong> <a href="8425.php">Rolf vandeVaart: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
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
