<?
$subject_val = "Re: [OMPI devel] 1.4.3rc1 out";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 24 20:28:09 2010" -->
<!-- isoreceived="20100825002809" -->
<!-- sent="Tue, 24 Aug 2010 17:27:51 -0700" -->
<!-- isosent="20100825002751" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.3rc1 out" -->
<!-- id="4C746387.3020005_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9E6320D0-AC29-45A1-995F-021D26C6D094_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.4.3rc1 out<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-24 20:27:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8323.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<li><strong>Previous message:</strong> <a href="8321.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.3rc1 out"</a>
<li><strong>In reply to:</strong> <a href="8318.php">Ralph Castain: "[OMPI devel] 1.4.3rc1 out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8331.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.3rc1 out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Testing on Sun C 5.10 on OpenSolaris yield many warnings (below), but 
<br>
does build to completion.
<br>
I have run a successful &quot;make check&quot;, making me doubt that any of the 
<br>
atomic.h warnings indicate real problems.
<br>
<p>$ uname -a
<br>
SunOS osol-x64 5.11 snv_111b i86pc i386 i86pc
<br>
<p>$ cc -V
<br>
cc: Sun C 5.10 SunOS_i386 2009/06/03
<br>
usage: cc [ options] files.  Use 'cc -flags' for details
<br>
<p>$ [path_to]/openmpi-1.4.3rc1/configure CC=cc CXX=CC F77=f77 FC=f90
<br>
[...]
<br>
<p>$ make
<br>
[...]
<br>
<p><p>Many instances of the following:
<br>
<p>&quot;../../../../openmpi-1.4.3rc1/opal/include/opal/sys/ia32/atomic.h&quot;, line 
<br>
170: warning: impossible constraint for &quot;%1&quot; asm operand
<br>
&quot;../../../../openmpi-1.4.3rc1/opal/include/opal/sys/ia32/atomic.h&quot;, line 
<br>
170: warning: parameter in inline asm statement unused: %2
<br>
&quot;../../../../openmpi-1.4.3rc1/opal/include/opal/sys/ia32/atomic.h&quot;, line 
<br>
187: warning: impossible constraint for &quot;%1&quot; asm operand
<br>
&quot;../../../../openmpi-1.4.3rc1/opal/include/opal/sys/ia32/atomic.h&quot;, line 
<br>
187: warning: parameter in inline asm statement unused: %2
<br>
<p>Single instances of:
<br>
<p>&quot;../../../../openmpi-1.4.3rc1/orte/mca/plm/base/plm_base_orted_cmds.c&quot;, 
<br>
line 301: warning: statement not reach
<br>
ed
<br>
&quot;../../../openmpi-1.4.3rc1/ompi/datatype/dt_module.c&quot;, line 709: 
<br>
#warning: &quot;No proper C type found for COMPLEX32&quot;
<br>
&quot;../../../../openmpi-1.4.3rc1/ompi/mpi/cxx/file.cc&quot;, line 146: Warning 
<br>
(Anachronism): Formal argument read_conversion_fn of type extern &quot;C&quot; 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*) in call to 
<br>
MPI_Register_datarep(char*, extern &quot;C&quot; 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
<br>
int(*)(ompi_datatype_t*,int*,void*), void*) is being passed 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*).
<br>
&quot;../../../../openmpi-1.4.3rc1/ompi/mpi/cxx/file.cc&quot;, line 147: Warning 
<br>
(Anachronism): Formal argument write_conversion_fn of type extern &quot;C&quot; 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*) in call to 
<br>
MPI_Register_datarep(char*, extern &quot;C&quot; 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
<br>
int(*)(ompi_datatype_t*,int*,void*), void*) is being passed 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*).
<br>
&quot;../../../../openmpi-1.4.3rc1/ompi/mpi/cxx/file.cc&quot;, line 148: Warning 
<br>
(Anachronism): Formal argument dtype_file_extent_fn of type extern &quot;C&quot; 
<br>
int(*)(ompi_datatype_t*,int*,void*) in call to 
<br>
MPI_Register_datarep(char*, extern &quot;C&quot; 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
<br>
int(*)(ompi_datatype_t*,int*,void*), void*) is being passed 
<br>
int(*)(ompi_datatype_t*,int*,void*).
<br>
&quot;../../../../openmpi-1.4.3rc1/ompi/mpi/cxx/file.cc&quot;, line 173: Warning 
<br>
(Anachronism): Formal argument write_conversion_fn of type extern &quot;C&quot; 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*) in call to 
<br>
MPI_Register_datarep(char*, extern &quot;C&quot; 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
<br>
int(*)(ompi_datatype_t*,int*,void*), void*) is being passed 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*).
<br>
&quot;../../../../openmpi-1.4.3rc1/ompi/mpi/cxx/file.cc&quot;, line 174: Warning 
<br>
(Anachronism): Formal argument dtype_file_extent_fn of type extern &quot;C&quot; 
<br>
int(*)(ompi_datatype_t*,int*,void*) in call to 
<br>
MPI_Register_datarep(char*, extern &quot;C&quot; 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
<br>
int(*)(ompi_datatype_t*,int*,void*), void*) is being passed 
<br>
int(*)(ompi_datatype_t*,int*,void*).
<br>
&quot;../../../../openmpi-1.4.3rc1/ompi/mpi/cxx/file.cc&quot;, line 198: Warning 
<br>
(Anachronism): Formal argument read_conversion_fn of type extern &quot;C&quot; 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*) in call to 
<br>
MPI_Register_datarep(char*, extern &quot;C&quot; 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
<br>
int(*)(ompi_datatype_t*,int*,void*), void*) is being passed 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*).
<br>
&quot;../../../../openmpi-1.4.3rc1/ompi/mpi/cxx/file.cc&quot;, line 200: Warning 
<br>
(Anachronism): Formal argument dtype_file_extent_fn of type extern &quot;C&quot; 
<br>
int(*)(ompi_datatype_t*,int*,void*) in call to 
<br>
MPI_Register_datarep(char*, extern &quot;C&quot; 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
<br>
int(*)(ompi_datatype_t*,int*,void*), void*) is being passed 
<br>
int(*)(ompi_datatype_t*,int*,void*).
<br>
&quot;../../../../openmpi-1.4.3rc1/ompi/mpi/cxx/file.cc&quot;, line 225: Warning 
<br>
(Anachronism): Formal argument dtype_file_extent_fn of type extern &quot;C&quot; 
<br>
int(*)(ompi_datatype_t*,int*,void*) in call to 
<br>
MPI_Register_datarep(char*, extern &quot;C&quot; 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
<br>
int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; 
<br>
int(*)(ompi_datatype_t*,int*,void*), void*) is being passed 
<br>
int(*)(ompi_datatype_t*,int*,void*).
<br>
&quot;../../../../../openmpi-1.4.3rc1/ompi/mca/common/sm/common_sm_mmap.c&quot;, 
<br>
line 111: warning: improper pointer/integer combination: arg #3
<br>
&quot;../../../../../openmpi-1.4.3rc1/ompi/mca/common/sm/common_sm_mmap.c&quot;, 
<br>
line 136: warning: improper pointer/integer combination: arg #3
<br>
&quot;../../../../../openmpi-1.4.3rc1/ompi/mca/common/sm/common_sm_mmap.c&quot;, 
<br>
line 202: warning: assignment type mismatch:
<br>
&quot;../../../../../openmpi-1.4.3rc1/ompi/mca/common/sm/common_sm_mmap.c&quot;, 
<br>
line 208: warning: assignment type mismatch:
<br>
&quot;../../../../../openmpi-1.4.3rc1/ompi/mca/common/sm/common_sm_mmap.c&quot;, 
<br>
line 276: warning: argument #1 is incompatible with prototype:
<br>
&quot;../../../../../../../../../openmpi-1.4.3rc1/ompi/contrib/vt/vt/extlib/otf/tools/otfinfo/hash.c&quot;, 
<br>
line 22: warning: statement not reached
<br>
&quot;../../../../../../../../../openmpi-1.4.3rc1/ompi/contrib/vt/vt/extlib/otf/tools/otfinfo/hash.c&quot;, 
<br>
line 81: warning: statement not reached
<br>
<p><p>I can additionally report that the atomic.h warnings show up when 
<br>
compiling tests.  Thus they are likely to constitute a significant 
<br>
annoyance to an end user.
<br>
<p>-Paul
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Okay, release candidate 1 for 1.4.3 is now available on the web site. Please give it a whirl.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
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
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8323.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<li><strong>Previous message:</strong> <a href="8321.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.3rc1 out"</a>
<li><strong>In reply to:</strong> <a href="8318.php">Ralph Castain: "[OMPI devel] 1.4.3rc1 out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8331.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.3rc1 out"</a>
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
