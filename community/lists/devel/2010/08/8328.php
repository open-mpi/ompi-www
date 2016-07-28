<?
$subject_val = "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 24 21:28:52 2010" -->
<!-- isoreceived="20100825012852" -->
<!-- sent="Tue, 24 Aug 2010 21:28:46 -0400" -->
<!-- isosent="20100825012846" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10" -->
<!-- id="45611483-58B6-4A0B-976D-5E130F9B8E85_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C746676.9030001_at_lbl.gov" -->
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
<strong>Date:</strong> 2010-08-24 21:28:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8329.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5 build failure w/ icc-10.1.008 for ia64"</a>
<li><strong>Previous message:</strong> <a href="8327.php">George Bosilca: "Re: [OMPI devel] 1.4.3rc1 out"</a>
<li><strong>In reply to:</strong> <a href="8323.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8336.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<li><strong>Reply:</strong> <a href="8336.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<li><strong>Reply:</strong> <a href="8346.php">Rolf vandeVaart: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 24, 2010, at 20:40 , Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; &quot;../../../openmpi-1.5rc5/opal/include/opal/sys/ia32/atomic.h&quot;, line 170: warning: impossible constraint for &quot;%1&quot; asm operand
</span><br>
<p>&nbsp;&nbsp;&nbsp;__asm__ __volatile__(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SMPLOCK &quot;addl %1,%0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&quot;=m&quot; (*v)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&quot;ir&quot; (i), &quot;m&quot; (*v));
<br>
<p>The problem seems to come from the &quot;ir&quot;. Based on a Sun blog about the gcc style asm inlining support (<a href="http://blogs.sun.com/x86be/entry/gcc_style_asm_inlining_support">http://blogs.sun.com/x86be/entry/gcc_style_asm_inlining_support</a>) it appears that i (any size integer immediate constraint) and r (any registers in rax, rbx, rcx, rdx, rbp, rsi, rdi, rsp, r8 - r15). As we don't only apply our atomics on immediate I think we should drop the &quot;i&quot;.
<br>
<p><span class="quotelev1">&gt; &quot;../../../openmpi-1.5rc5/opal/include/opal/sys/ia32/atomic.h&quot;, line 170: warning: parameter in inline asm statement unused: %2
</span><br>
<p>This one is more trickier. Because of the %2 I suspect that the second (*v) on the inputs is not matched to the first (*v) on the outputs. While this might be significantly bad under some circumstances, in this case I think it can be safely ignored.
<br>
<p>However I would like to try the following asm code instead with the SUN compiler:
<br>
<p>&nbsp;&nbsp;&nbsp;__asm__ __volatile__(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SMPLOCK &quot;addl %1,%0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&quot;+m&quot; (*v)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&quot;r&quot; (i));
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p><span class="quotelev1">&gt; &quot;../../../openmpi-1.5rc5/opal/include/opal/sys/ia32/atomic.h&quot;, line 187: warning: impossible constraint for &quot;%1&quot; asm operand
</span><br>
<span class="quotelev1">&gt; &quot;../../../openmpi-1.5rc5/opal/include/opal/sys/ia32/atomic.h&quot;, line 187: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-1.5rc5/ompi/mpi/cxx/file.cc&quot;, line 145: Warning (Anachronism): Formal argument read_conversion_fn of type extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*) in call to MPI_Register_datarep(char*, extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed int(*)(void*,ompi_datatype_t*,int,void*,long long,void*).
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.5rc5/ompi/mpi/cxx/file.cc&quot;, line 146: Warning (Anachronism): Formal argument write_conversion_fn of type extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*) in call to MPI_Register_datarep(char*, extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed int(*)(void*,ompi_datatype_t*,int,void*,long long,void*).
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.5rc5/ompi/mpi/cxx/file.cc&quot;, line 147: Warning (Anachronism): Formal argument dtype_file_extent_fn of type extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*) in call to MPI_Register_datarep(char*, extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed int(*)(ompi_datatype_t*,int*,void*).
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.5rc5/ompi/mpi/cxx/file.cc&quot;, line 172: Warning (Anachronism): Formal argument write_conversion_fn of type extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*) in call to MPI_Register_datarep(char*, extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed int(*)(void*,ompi_datatype_t*,int,void*,long long,void*).
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.5rc5/ompi/mpi/cxx/file.cc&quot;, line 173: Warning (Anachronism): Formal argument dtype_file_extent_fn of type extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*) in call to MPI_Register_datarep(char*, extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed int(*)(ompi_datatype_t*,int*,void*).
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.5rc5/ompi/mpi/cxx/file.cc&quot;, line 197: Warning (Anachronism): Formal argument read_conversion_fn of type extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*) in call to MPI_Register_datarep(char*, extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed int(*)(void*,ompi_datatype_t*,int,void*,long long,void*).
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.5rc5/ompi/mpi/cxx/file.cc&quot;, line 199: Warning (Anachronism): Formal argument dtype_file_extent_fn of type extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*) in call to MPI_Register_datarep(char*, extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed int(*)(ompi_datatype_t*,int*,void*).
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.5rc5/ompi/mpi/cxx/file.cc&quot;, line 224: Warning (Anachronism): Formal argument dtype_file_extent_fn of type extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*) in call to MPI_Register_datarep(char*, extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed int(*)(ompi_datatype_t*,int*,void*).
</span><br>
<span class="quotelev1">&gt; [Though line numbers differ very slightly]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NEW, not seen with 1.4.3rc1, warnings:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many instances of the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.5rc5/orte/mca/ess/ess.h&quot;, line 61: warning: attribute &quot;noreturn&quot; may not be applied to variable, ignored
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.5rc5/orte/mca/errmgr/errmgr.h&quot;, line 138: warning: attribute &quot;noreturn&quot; may not be applied to variable, ignored
</span><br>
<span class="quotelev1">&gt; [Due to applying __opal_attribute_noreturn__ to a function pointer]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Single instances of the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.5rc5/opal/mca/crs/none/crs_none_module.c&quot;, line 136: warning: statement not reached
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.5rc5/orte/mca/plm/base/plm_base_rsh_support.c&quot;, line 462: warning: implicit function declaration: rindex
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.5rc5/orte/mca/plm/base/plm_base_rsh_support.c&quot;, line 462: warning: improper pointer/integer combination: op &quot;=&quot;
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.5rc5/orte/mca/plm/base/plm_base_rsh_support.c&quot;, line 565: warning: improper pointer/integer combination: op &quot;=&quot;
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.5rc5/orte/mca/rmcast/tcp/rmcast_tcp.c&quot;, line 982: warning: assignment type mismatch:
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.5rc5/orte/mca/rmcast/tcp/rmcast_tcp.c&quot;, line 1023: warning: assignment type mismatch:
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.5rc5/orte/mca/rmcast/udp/rmcast_udp.c&quot;, line 877: warning: assignment type mismatch:
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.5rc5/orte/mca/rmcast/udp/rmcast_udp.c&quot;, line 918: warning: assignment type mismatch:
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.5rc5/orte/tools/orte-ps/orte-ps.c&quot;, line 288: warning: initializer does not fit or is out of range: 0xfffffffe
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.5rc5/orte/tools/orte-ps/orte-ps.c&quot;, line 289: warning: initializer does not fit or is out of range: 0xfffffffe
</span><br>
<span class="quotelev1">&gt; &quot;
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.5rc5/ompi/mca/common/sm/common_sm_mmap.c&quot;, line 110: warning: improper pointer/integer combination: arg #3
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.5rc5/ompi/mca/common/sm/common_sm_mmap.c&quot;, line 135: warning: improper pointer/integer combination: arg #3
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.5rc5/ompi/mca/common/sm/common_sm_mmap.c&quot;, line 201: warning: assignment type mismatch:
</span><br>
<span class="quotelev1">&gt;       pointer to char &quot;=&quot; pointer to int
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.5rc5/ompi/mca/common/sm/common_sm_mmap.c&quot;, line 207: warning: assignment type mismatch:
</span><br>
<span class="quotelev1">&gt;       pointer to char &quot;=&quot; pointer to int
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.5rc5/ompi/mca/common/sm/common_sm_mmap.c&quot;, line 280: warning: argument #1 is incompatible with prototype:
</span><br>
<span class="quotelev1">&gt;       prototype: pointer to char : &quot;/usr/include/sys/mman.h&quot;, line 238
</span><br>
<span class="quotelev1">&gt;       argument : pointer to struct mca_common_sm_mmap_t {struct opal_list_item_t {..} map_item, pointer to struct mca_common_sm_file_header_t {..} map_seg, pointer to unsigned char map_addr, pointer to unsigned char data_addr, unsigned int map_size, array[1025] of char map_path}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<li><strong>Next message:</strong> <a href="8329.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5 build failure w/ icc-10.1.008 for ia64"</a>
<li><strong>Previous message:</strong> <a href="8327.php">George Bosilca: "Re: [OMPI devel] 1.4.3rc1 out"</a>
<li><strong>In reply to:</strong> <a href="8323.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8336.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<li><strong>Reply:</strong> <a href="8336.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<li><strong>Reply:</strong> <a href="8346.php">Rolf vandeVaart: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
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
