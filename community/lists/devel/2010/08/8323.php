<?
$subject_val = "[OMPI devel] 1.5rc5 - warnings from Sun C 5.10";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 24 20:40:40 2010" -->
<!-- isoreceived="20100825004040" -->
<!-- sent="Tue, 24 Aug 2010 17:40:22 -0700" -->
<!-- isosent="20100825004022" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.5rc5 - warnings from Sun C 5.10" -->
<!-- id="4C746676.9030001_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] 1.5rc5 - warnings from Sun C 5.10<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-24 20:40:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8324.php">Jeff Squyres: "Re: [OMPI devel] A different 1.5rc5 build failure w/ PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="8322.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.3rc1 out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8328.php">George Bosilca: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<li><strong>Reply:</strong> <a href="8328.php">George Bosilca: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<li><strong>Reply:</strong> <a href="8384.php">Rainer Keller: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In addition to the atomic.h and Anachronism warnings seen w/ 1.4.3rc1 
<br>
(<a href="http://www.open-mpi.org/community/lists/devel/2010/08/8322.php">http://www.open-mpi.org/community/lists/devel/2010/08/8322.php</a>), I find 
<br>
some &quot;new&quot; warnings in 1.5rc5.
<br>
<p>$ uname -a
<br>
SunOS osol-x64 5.11 snv_111b i86pc i386 i86pc
<br>
<p>$ cc -V
<br>
cc: Sun C 5.10 SunOS_i386 2009/06/03
<br>
usage: cc [ options] files. Use 'cc -flags' for details
<br>
<p>$ [path_to]/openmpi-1.5rc5/configure CC=cc CXX=CC F77=f77 FC=f90
<br>
[...]
<br>
<p>$ make
<br>
[...]
<br>
<p><p>DUPLICATE of 1.4.3rc1 warnings:
<br>
<p>&quot;../../../openmpi-1.5rc5/opal/include/opal/sys/ia32/atomic.h&quot;, line 170: 
<br>
warning: impossible constraint for &quot;%1&quot; asm operand
<br>
&quot;../../../openmpi-1.5rc5/opal/include/opal/sys/ia32/atomic.h&quot;, line 170: 
<br>
warning: parameter in inline asm statement unused: %2
<br>
&quot;../../../openmpi-1.5rc5/opal/include/opal/sys/ia32/atomic.h&quot;, line 187: 
<br>
warning: impossible constraint for &quot;%1&quot; asm operand
<br>
&quot;../../../openmpi-1.5rc5/opal/include/opal/sys/ia32/atomic.h&quot;, line 187: 
<br>
warning: parameter in inline asm statement unused: %2
<br>
<p>../../../../openmpi-1.5rc5/ompi/mpi/cxx/file.cc&quot;, line 145: Warning 
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
&quot;../../../../openmpi-1.5rc5/ompi/mpi/cxx/file.cc&quot;, line 146: Warning 
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
&quot;../../../../openmpi-1.5rc5/ompi/mpi/cxx/file.cc&quot;, line 147: Warning 
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
&quot;../../../../openmpi-1.5rc5/ompi/mpi/cxx/file.cc&quot;, line 172: Warning 
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
&quot;../../../../openmpi-1.5rc5/ompi/mpi/cxx/file.cc&quot;, line 173: Warning 
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
&quot;../../../../openmpi-1.5rc5/ompi/mpi/cxx/file.cc&quot;, line 197: Warning 
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
&quot;../../../../openmpi-1.5rc5/ompi/mpi/cxx/file.cc&quot;, line 199: Warning 
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
&quot;../../../../openmpi-1.5rc5/ompi/mpi/cxx/file.cc&quot;, line 224: Warning 
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
[Though line numbers differ very slightly]
<br>
<p><p>NEW, not seen with 1.4.3rc1, warnings:
<br>
<p>Many instances of the following:
<br>
<p>&quot;../../../../openmpi-1.5rc5/orte/mca/ess/ess.h&quot;, line 61: warning: 
<br>
attribute &quot;noreturn&quot; may not be applied to variable, ignored
<br>
&quot;../../../../openmpi-1.5rc5/orte/mca/errmgr/errmgr.h&quot;, line 138: 
<br>
warning: attribute &quot;noreturn&quot; may not be applied to variable, ignored
<br>
[Due to applying __opal_attribute_noreturn__ to a function pointer]
<br>
<p>Single instances of the following:
<br>
<p>&quot;../../../../../openmpi-1.5rc5/opal/mca/crs/none/crs_none_module.c&quot;, 
<br>
line 136: warning: statement not reached
<br>
&quot;../../../../openmpi-1.5rc5/orte/mca/plm/base/plm_base_rsh_support.c&quot;, 
<br>
line 462: warning: implicit function declaration: rindex
<br>
&quot;../../../../openmpi-1.5rc5/orte/mca/plm/base/plm_base_rsh_support.c&quot;, 
<br>
line 462: warning: improper pointer/integer combination: op &quot;=&quot;
<br>
&quot;../../../../openmpi-1.5rc5/orte/mca/plm/base/plm_base_rsh_support.c&quot;, 
<br>
line 565: warning: improper pointer/integer combination: op &quot;=&quot;
<br>
&quot;../../../../../openmpi-1.5rc5/orte/mca/rmcast/tcp/rmcast_tcp.c&quot;, line 
<br>
982: warning: assignment type mismatch:
<br>
&quot;../../../../../openmpi-1.5rc5/orte/mca/rmcast/tcp/rmcast_tcp.c&quot;, line 
<br>
1023: warning: assignment type mismatch:
<br>
&quot;../../../../../openmpi-1.5rc5/orte/mca/rmcast/udp/rmcast_udp.c&quot;, line 
<br>
877: warning: assignment type mismatch:
<br>
&quot;../../../../../openmpi-1.5rc5/orte/mca/rmcast/udp/rmcast_udp.c&quot;, line 
<br>
918: warning: assignment type mismatch:
<br>
&quot;../../../../openmpi-1.5rc5/orte/tools/orte-ps/orte-ps.c&quot;, line 288: 
<br>
warning: initializer does not fit or is out of range: 0xfffffffe
<br>
&quot;../../../../openmpi-1.5rc5/orte/tools/orte-ps/orte-ps.c&quot;, line 289: 
<br>
warning: initializer does not fit or is out of range: 0xfffffffe
<br>
&quot;
<br>
&quot;../../../../../openmpi-1.5rc5/ompi/mca/common/sm/common_sm_mmap.c&quot;, 
<br>
line 110: warning: improper pointer/integer combination: arg #3
<br>
&quot;../../../../../openmpi-1.5rc5/ompi/mca/common/sm/common_sm_mmap.c&quot;, 
<br>
line 135: warning: improper pointer/integer combination: arg #3
<br>
&quot;../../../../../openmpi-1.5rc5/ompi/mca/common/sm/common_sm_mmap.c&quot;, 
<br>
line 201: warning: assignment type mismatch:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pointer to char &quot;=&quot; pointer to int
<br>
&quot;../../../../../openmpi-1.5rc5/ompi/mca/common/sm/common_sm_mmap.c&quot;, 
<br>
line 207: warning: assignment type mismatch:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pointer to char &quot;=&quot; pointer to int
<br>
&quot;../../../../../openmpi-1.5rc5/ompi/mca/common/sm/common_sm_mmap.c&quot;, 
<br>
line 280: warning: argument #1 is incompatible with prototype:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;prototype: pointer to char : &quot;/usr/include/sys/mman.h&quot;, line 238
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;argument : pointer to struct mca_common_sm_mmap_t {struct 
<br>
opal_list_item_t {..} map_item, pointer to struct 
<br>
mca_common_sm_file_header_t {..} map_seg, pointer to unsigned char 
<br>
map_addr, pointer to unsigned char data_addr, unsigned int map_size, 
<br>
array[1025] of char map_path}
<br>
<p><p>-Paul
<br>
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
<li><strong>Next message:</strong> <a href="8324.php">Jeff Squyres: "Re: [OMPI devel] A different 1.5rc5 build failure w/ PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="8322.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.3rc1 out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8328.php">George Bosilca: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<li><strong>Reply:</strong> <a href="8328.php">George Bosilca: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<li><strong>Reply:</strong> <a href="8384.php">Rainer Keller: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
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
