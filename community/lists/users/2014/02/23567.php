<?
$subject_val = "[OMPI users] warnings and anachronisms in openmpi-1.7.4";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  7 12:03:58 2014" -->
<!-- isoreceived="20140207170358" -->
<!-- sent="Fri, 7 Feb 2014 18:03:30 +0100 (CET)" -->
<!-- isosent="20140207170330" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] warnings and anachronisms in openmpi-1.7.4" -->
<!-- id="201402071703.s17H3UMQ013472_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] warnings and anachronisms in openmpi-1.7.4<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-07 12:03:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23568.php">Reuti: "Re: [OMPI users] OpenMpi installation"</a>
<li><strong>Previous message:</strong> <a href="23566.php">Talla: "[OMPI users] OpenMpi installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23575.php">Oscar Vega-Gisbert: "Re: [OMPI users] warnings and anachronisms in openmpi-1.7.4"</a>
<li><strong>Reply:</strong> <a href="23575.php">Oscar Vega-Gisbert: "Re: [OMPI users] warnings and anachronisms in openmpi-1.7.4"</a>
<li><strong>Maybe reply:</strong> <a href="23578.php">Siegmar Gross: "Re: [OMPI users] warnings and anachronisms in openmpi-1.7.4"</a>
<li><strong>Maybe reply:</strong> <a href="23580.php">Siegmar Gross: "Re: [OMPI users] warnings and anachronisms in openmpi-1.7.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>yesterday I compiled 32- and 64-bit versions of openmpi-1.7.4 for
<br>
my platforms (Solaris 10 sparc, Solaris 10 x86_64, and openSUSE
<br>
Linux 12.1 x86_64) with Sun C 5.12 and gcc-4.8.0. I could build
<br>
a 64-bit version for Linux with gcc without warnings. Everything
<br>
else showed warnings. I received many warnings for my 32-bit
<br>
versions (mainly for the Java interface with gcc). I have combined
<br>
all warnings for my platforms so that it is easier to fix them, if
<br>
somebody wants to fix them. The attached files contain the warnings
<br>
from each compiler. I can also provide specific files like
<br>
Solaris.x86_64.32_cc.uniq or even my log files (e.g.,
<br>
log.make.SunOS.x86_64.32_cc).
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p>
<br><p>
&quot;../../../../../../../openmpi-1.7.4/opal/mca/hwloc/hwloc172/hwloc/src/topology-custom.c&quot;, line 85: warning: initializer will be sign-extended: -1
<br>
&quot;../../../../../../../openmpi-1.7.4/opal/mca/hwloc/hwloc172/hwloc/src/topology-linux.c&quot;, line 2505: warning: initializer will be sign-extended: -1
<br>
&quot;../../../../../../../openmpi-1.7.4/opal/mca/hwloc/hwloc172/hwloc/src/topology-synthetic.c&quot;, line 433: warning: initializer will be sign-extended: -1
<br>
&quot;../../../../../../../openmpi-1.7.4/opal/mca/hwloc/hwloc172/hwloc/src/topology-xml.c&quot;, line 1152: warning: initializer will be sign-extended: -1
<br>
&quot;../../../../../../openmpi-1.7.4/ompi/mca/io/romio/romio/adio/common/ad_fstype.c&quot;, line 315: warning: statement not reached
<br>
&quot;../../../../../../openmpi-1.7.4/ompi/mca/io/romio/romio/adio/common/ad_fstype.c&quot;, line 434: warning: statement not reached
<br>
&quot;../../../../../openmpi-1.7.4/ompi/mca/sharedfp/sm/sharedfp_sm_file_open.c&quot;, line 143: warning: assignment type mismatch:
<br>
&quot;../../../../../openmpi-1.7.4/ompi/mca/sharedfp/sm/sharedfp_sm_file_open.c&quot;, line 216: warning: argument #1 is incompatible with prototype:
<br>
&quot;../../../../../openmpi-1.7.4/ompi/mca/osc/rdma/osc_rdma_data_move.c&quot;, line 301: warning: statement not reached
<br>
&quot;../../../../../openmpi-1.7.4/ompi/mca/osc/rdma/osc_rdma_data_move.c&quot;, line 683: warning: statement not reached
<br>
&quot;../../../../openmpi-1.7.4/opal/include/opal/sys/atomic_impl.h&quot;, line 167: warning: statement not reached
<br>
&quot;../../../../openmpi-1.7.4/opal/include/opal/sys/atomic_impl.h&quot;, line 192: warning: statement not reached
<br>
&quot;../../../../openmpi-1.7.4/opal/include/opal/sys/atomic_impl.h&quot;, line 217: warning: statement not reached
<br>
&quot;../../../../openmpi-1.7.4/opal/include/opal/sys/ia32/atomic.h&quot;, line 169: Warning:  parameter in inline asm statement unused: %2.
<br>
&quot;../../../../openmpi-1.7.4/opal/include/opal/sys/ia32/atomic.h&quot;, line 173: warning: parameter in inline asm statement unused: %2
<br>
&quot;../../../../openmpi-1.7.4/opal/include/opal/sys/ia32/atomic.h&quot;, line 189: Warning:  parameter in inline asm statement unused: %2.
<br>
&quot;../../../../openmpi-1.7.4/opal/include/opal/sys/ia32/atomic.h&quot;, line 193: warning: parameter in inline asm statement unused: %2
<br>
&quot;../../../../openmpi-1.7.4/opal/mca/base/mca_base_framework.h&quot;, line 119: Warning: Identifier expected instead of &quot;}&quot;.
<br>
&quot;../../../../openmpi-1.7.4/opal/mca/base/mca_base_framework.h&quot;, line 37: Warning: Identifier expected instead of &quot;}&quot;.
<br>
&quot;../../../../openmpi-1.7.4/opal/mca/base/mca_base_param.c&quot;, line 583: warning: enum type mismatch: op &quot;=&quot;
<br>
&quot;../../../../openmpi-1.7.4/opal/mca/base/mca_base_var.h&quot;, line 694: Warning: Identifier expected instead of &quot;}&quot;.
<br>
&lt;command-line&gt;:18:0: warning: &quot;__FLT_EVAL_METHOD__&quot; redefined [enabled by default]
<br>
&quot;../../../../openmpi-1.7.4/ompi/mpi/cxx/file.cc&quot;, line 145: Warning (Anachronism): Formal argument read_conversion_fn of type extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*) in call to MPI_Register_datarep(const char*, extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed int(*)(void*,ompi_datatype_t*,int,void*,long long,void*).
<br>
&quot;../../../../openmpi-1.7.4/ompi/mpi/cxx/file.cc&quot;, line 146: Warning (Anachronism): Formal argument write_conversion_fn of type extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*) in call to MPI_Register_datarep(const char*, extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed int(*)(void*,ompi_datatype_t*,int,void*,long long,void*).
<br>
&quot;../../../../openmpi-1.7.4/ompi/mpi/cxx/file.cc&quot;, line 147: Warning (Anachronism): Formal argument dtype_file_extent_fn of type extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*) in call to MPI_Register_datarep(const char*, extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed int(*)(ompi_datatype_t*,int*,void*).
<br>
&quot;../../../../openmpi-1.7.4/ompi/mpi/cxx/file.cc&quot;, line 172: Warning (Anachronism): Formal argument write_conversion_fn of type extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*) in call to MPI_Register_datarep(const char*, extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed int(*)(void*,ompi_datatype_t*,int,void*,long long,void*).
<br>
&quot;../../../../openmpi-1.7.4/ompi/mpi/cxx/file.cc&quot;, line 173: Warning (Anachronism): Formal argument dtype_file_extent_fn of type extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*) in call to MPI_Register_datarep(const char*, extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed int(*)(ompi_datatype_t*,int*,void*).
<br>
&quot;../../../../openmpi-1.7.4/ompi/mpi/cxx/file.cc&quot;, line 197: Warning (Anachronism): Formal argument read_conversion_fn of type extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*) in call to MPI_Register_datarep(const char*, extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed int(*)(void*,ompi_datatype_t*,int,void*,long long,void*).
<br>
&quot;../../../../openmpi-1.7.4/ompi/mpi/cxx/file.cc&quot;, line 199: Warning (Anachronism): Formal argument dtype_file_extent_fn of type extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*) in call to MPI_Register_datarep(const char*, extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed int(*)(ompi_datatype_t*,int*,void*).
<br>
&quot;../../../../openmpi-1.7.4/ompi/mpi/cxx/file.cc&quot;, line 224: Warning (Anachronism): Formal argument dtype_file_extent_fn of type extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*) in call to MPI_Register_datarep(const char*, extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(ompi_datatype_t*,int*,void*), void*) is being passed int(*)(ompi_datatype_t*,int*,void*).
<br>
<p>
<br><p>
&quot;../../../../../../../openmpi-1.7.4/opal/mca/hwloc/hwloc172/hwloc/src/topology-custom.c&quot;, line 85: warning: initializer will be sign-extended: -1
<br>
&quot;../../../../../../../openmpi-1.7.4/opal/mca/hwloc/hwloc172/hwloc/src/topology-linux.c&quot;, line 2505: warning: initializer will be sign-extended: -1
<br>
&quot;../../../../../../../openmpi-1.7.4/opal/mca/hwloc/hwloc172/hwloc/src/topology-synthetic.c&quot;, line 433: warning: initializer will be sign-extended: -1
<br>
&quot;../../../../../../../openmpi-1.7.4/opal/mca/hwloc/hwloc172/hwloc/src/topology-xml.c&quot;, line 1152: warning: initializer will be sign-extended: -1
<br>
&quot;../../../../../../openmpi-1.7.4/ompi/mca/io/romio/romio/adio/common/ad_fstype.c&quot;, line 315: warning: statement not reached
<br>
&quot;../../../../../../openmpi-1.7.4/ompi/mca/io/romio/romio/adio/common/ad_fstype.c&quot;, line 434: warning: statement not reached
<br>
&quot;../../../../../openmpi-1.7.4/ompi/mca/sharedfp/sm/sharedfp_sm_file_open.c&quot;, line 143: warning: assignment type mismatch:
<br>
&quot;../../../../../openmpi-1.7.4/ompi/mca/sharedfp/sm/sharedfp_sm_file_open.c&quot;, line 216: warning: argument #1 is incompatible with prototype:
<br>
&quot;../../../../../openmpi-1.7.4/ompi/mca/osc/rdma/osc_rdma_data_move.c&quot;, line 301: warning: statement not reached
<br>
&quot;../../../../../openmpi-1.7.4/ompi/mca/osc/rdma/osc_rdma_data_move.c&quot;, line 683: warning: statement not reached
<br>
&quot;../../../../openmpi-1.7.4/opal/include/opal/sys/amd64/atomic.h&quot;, line 133: Warning:  parameter in inline asm statement unused: %3.
<br>
&quot;../../../../openmpi-1.7.4/opal/include/opal/sys/amd64/atomic.h&quot;, line 136: warning: parameter in inline asm statement unused: %3
<br>
&quot;../../../../openmpi-1.7.4/opal/include/opal/sys/amd64/atomic.h&quot;, line 178: Warning:  parameter in inline asm statement unused: %2.
<br>
&quot;../../../../openmpi-1.7.4/opal/include/opal/sys/amd64/atomic.h&quot;, line 182: warning: parameter in inline asm statement unused: %2
<br>
&quot;../../../../openmpi-1.7.4/opal/include/opal/sys/amd64/atomic.h&quot;, line 199: Warning:  parameter in inline asm statement unused: %2.
<br>
&quot;../../../../openmpi-1.7.4/opal/include/opal/sys/amd64/atomic.h&quot;, line 203: warning: parameter in inline asm statement unused: %2
<br>
&quot;../../../../openmpi-1.7.4/opal/include/opal/sys/amd64/atomic.h&quot;, line 220: Warning:  parameter in inline asm statement unused: %2.
<br>
&quot;../../../../openmpi-1.7.4/opal/include/opal/sys/amd64/atomic.h&quot;, line 224: warning: parameter in inline asm statement unused: %2
<br>
&quot;../../../../openmpi-1.7.4/opal/include/opal/sys/amd64/atomic.h&quot;, line 241: Warning:  parameter in inline asm statement unused: %2.
<br>
&quot;../../../../openmpi-1.7.4/opal/include/opal/sys/amd64/atomic.h&quot;, line 245: warning: parameter in inline asm statement unused: %2
<br>
&quot;../../../../openmpi-1.7.4/opal/include/opal/sys/atomic_impl.h&quot;, line 167: warning: statement not reached
<br>
&quot;../../../../openmpi-1.7.4/opal/include/opal/sys/atomic_impl.h&quot;, line 192: warning: statement not reached
<br>
&quot;../../../../openmpi-1.7.4/opal/include/opal/sys/atomic_impl.h&quot;, line 217: warning: statement not reached
<br>
&quot;../../../../openmpi-1.7.4/opal/mca/base/mca_base_framework.h&quot;, line 37: Warning: Identifier expected instead of &quot;}&quot;.
<br>
&quot;../../../../openmpi-1.7.4/opal/mca/base/mca_base_framework.h&quot;, line 119: Warning: Identifier expected instead of &quot;}&quot;.
<br>
&quot;../../../../openmpi-1.7.4/opal/mca/base/mca_base_param.c&quot;, line 583: warning: enum type mismatch: op &quot;=&quot;
<br>
&quot;../../../../openmpi-1.7.4/opal/mca/base/mca_base_var.h&quot;, line 694: Warning: Identifier expected instead of &quot;}&quot;.
<br>
&quot;../../../openmpi-1.7.4/ompi/datatype/ompi_datatype_args.c&quot;, line 515: warning: improper pointer/integer combination: op &quot;=&quot;
<br>
&quot;../../../../openmpi-1.7.4/ompi/mpi/cxx/file.cc&quot;, line 145: Warning (Anachronism): Formal argument read_conversion_fn of type extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*) in call to MPI_Register_datarep(const char*, extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(ompi_datatype_t*,long*,void*), void*) is being passed int(*)(void*,ompi_datatype_t*,int,void*,long long,void*).
<br>
&quot;../../../../openmpi-1.7.4/ompi/mpi/cxx/file.cc&quot;, line 146: Warning (Anachronism): Formal argument write_conversion_fn of type extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*) in call to MPI_Register_datarep(const char*, extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(ompi_datatype_t*,long*,void*), void*) is being passed int(*)(void*,ompi_datatype_t*,int,void*,long long,void*).
<br>
&quot;../../../../openmpi-1.7.4/ompi/mpi/cxx/file.cc&quot;, line 147: Warning (Anachronism): Formal argument dtype_file_extent_fn of type extern &quot;C&quot; int(*)(ompi_datatype_t*,long*,void*) in call to MPI_Register_datarep(const char*, extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(ompi_datatype_t*,long*,void*), void*) is being passed int(*)(ompi_datatype_t*,long*,void*).
<br>
&quot;../../../../openmpi-1.7.4/ompi/mpi/cxx/file.cc&quot;, line 172: Warning (Anachronism): Formal argument write_conversion_fn of type extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*) in call to MPI_Register_datarep(const char*, extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(ompi_datatype_t*,long*,void*), void*) is being passed int(*)(void*,ompi_datatype_t*,int,void*,long long,void*).
<br>
&quot;../../../../openmpi-1.7.4/ompi/mpi/cxx/file.cc&quot;, line 173: Warning (Anachronism): Formal argument dtype_file_extent_fn of type extern &quot;C&quot; int(*)(ompi_datatype_t*,long*,void*) in call to MPI_Register_datarep(const char*, extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(ompi_datatype_t*,long*,void*), void*) is being passed int(*)(ompi_datatype_t*,long*,void*).
<br>
&quot;../../../../openmpi-1.7.4/ompi/mpi/cxx/file.cc&quot;, line 197: Warning (Anachronism): Formal argument read_conversion_fn of type extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*) in call to MPI_Register_datarep(const char*, extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(ompi_datatype_t*,long*,void*), void*) is being passed int(*)(void*,ompi_datatype_t*,int,void*,long long,void*).
<br>
&quot;../../../../openmpi-1.7.4/ompi/mpi/cxx/file.cc&quot;, line 199: Warning (Anachronism): Formal argument dtype_file_extent_fn of type extern &quot;C&quot; int(*)(ompi_datatype_t*,long*,void*) in call to MPI_Register_datarep(const char*, extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(ompi_datatype_t*,long*,void*), void*) is being passed int(*)(ompi_datatype_t*,long*,void*).
<br>
&quot;../../../../openmpi-1.7.4/ompi/mpi/cxx/file.cc&quot;, line 224: Warning (Anachronism): Formal argument dtype_file_extent_fn of type extern &quot;C&quot; int(*)(ompi_datatype_t*,long*,void*) in call to MPI_Register_datarep(const char*, extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(void*,ompi_datatype_t*,int,void*,long long,void*), extern &quot;C&quot; int(*)(ompi_datatype_t*,long*,void*), void*) is being passed int(*)(ompi_datatype_t*,long*,void*).
<br>
<p>
<br><p>
../../../../../openmpi-1.7.4/ompi/mca/fcoll/dynamic/fcoll_dynamic_file_read_all.c:591:5: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mca/fcoll/dynamic/fcoll_dynamic_file_read_all.c:606:9: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mca/io/ompio/io_ompio.c:249:17: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mca/sharedfp/sm/sharedfp_sm_file_open.c:143:19: warning: assignment from incompatible pointer type [enabled by default]
<br>
../../../../../openmpi-1.7.4/ompi/mca/sharedfp/sm/sharedfp_sm_file_open.c:216:59: warning: passing argument 1 of 'munmap' from incompatible pointer type [enabled by default]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_CartComm.c:48:30: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_CartComm.c:67:27: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_CartComm.c:83:29: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_CartComm.c:94:30: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_CartComm.c:104:26: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_CartComm.c:123:27: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_CartComm.c:139:28: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_CartComm.c:154:27: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_CartComm.c:158:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:250:58: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:259:62: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:262:62: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:265:62: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:273:12: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:276:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:283:24: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:292:24: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:301:27: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:301:44: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:309:21: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:312:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:318:21: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:321:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:326:21: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:336:29: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:338:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:344:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:354:14: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:355:14: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:358:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:365:21: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:368:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:384:21: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:387:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:410:21: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:413:26: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:415:26: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:445:21: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:448:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:470:21: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:473:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:492:21: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:495:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:514:21: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:517:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:538:36: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:539:35: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:542:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:552:37: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:553:36: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:556:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:566:37: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:567:36: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:570:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:580:37: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:581:36: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:584:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:594:36: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:595:37: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:598:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:608:40: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:609:39: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:612:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:622:41: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:623:40: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:626:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:636:41: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:637:40: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:640:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:650:41: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:651:40: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:654:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:664:40: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:665:41: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:668:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:675:21: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:678:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:706:21: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:709:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:732:33: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:732:53: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:742:38: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:758:37: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:768:24: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:776:24: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:783:33: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:783:49: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:791:33: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:793:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:828:32: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:836:32: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:849:32: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:860:35: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:867:26: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:875:27: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:877:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:884:21: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:887:28: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:906:37: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:907:31: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:910:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:919:21: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:942:17: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:949:26: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:996:28: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:997:50: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1000:16: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1008:17: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1043:36: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1044:36: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1045:28: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1048:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1057:21: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1080:17: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1097:17: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1127:28: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1128:50: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1131:16: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1139:17: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1163:37: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1164:42: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1165:29: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1175:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1183:21: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1205:17: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1212:13: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1249:28: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1250:50: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1253:16: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1261:17: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1286:37: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1287:37: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1288:29: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1291:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1301:21: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1324:17: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1341:17: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1370:28: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1371:50: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1374:16: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1382:17: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1406:49: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1407:38: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1408:24: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1418:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1426:21: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1442:17: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1451:26: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1478:17: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1488:43: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1489:43: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1490:29: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1493:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1502:21: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1519:17: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1526:26: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1562:17: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1577:44: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1578:55: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1579:30: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1584:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1592:21: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1595:26: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1597:26: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1624:42: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1625:42: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1626:28: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1629:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1639:21: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1642:26: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1644:26: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1691:54: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1692:54: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1693:29: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1700:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1708:21: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1717:28: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1760:28: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1761:50: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1764:16: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1791:41: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1792:35: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1795:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1804:21: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1807:28: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1845:48: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1846:36: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1849:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1857:21: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1860:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1908:56: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1909:41: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1913:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1920:21: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1923:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1961:59: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1962:47: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1965:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1973:9: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:1992:32: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Comm.c:2002:32: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Datatype.c:83:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Datatype.c:90:34: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Datatype.c:103:39: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Datatype.c:116:24: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Datatype.c:124:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Datatype.c:132:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Datatype.c:140:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Datatype.c:147:27: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Datatype.c:149:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Datatype.c:156:41: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Datatype.c:158:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Datatype.c:168:30: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Datatype.c:171:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Datatype.c:181:31: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Datatype.c:184:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Datatype.c:200:31: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Datatype.c:205:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Datatype.c:226:32: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Datatype.c:232:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Datatype.c:255:21: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Datatype.c:269:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Datatype.c:276:38: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Datatype.c:278:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Datatype.c:285:32: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Datatype.c:295:32: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Datatype.c:335:32: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Datatype.c:344:32: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Datatype.c:355:35: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Errhandler.c:42:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Errhandler.c:47:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:20:28: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:21:35: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:25:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:31:21: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:34:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:41:47: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:49:32: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:56:35: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:64:32: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:73:33: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:75:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:82:33: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:90:32: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:90:46: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:98:32: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:100:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:110:13: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:110:45: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:111:13: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:111:53: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:121:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:129:31: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:141:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:149:35: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:161:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:169:32: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:181:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:189:36: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:204:32: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:205:44: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:208:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:218:33: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:219:45: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:222:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:229:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:237:28: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:249:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:257:32: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:269:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:277:29: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:289:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:297:33: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:312:29: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:313:29: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:316:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:326:30: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:327:30: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:330:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:336:28: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:344:36: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:353:39: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:362:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:370:35: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:382:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:390:36: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:405:36: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:406:36: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:409:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:419:37: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:420:37: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:423:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:430:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:438:36: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:450:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:458:37: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:469:35: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:477:43: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:486:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:491:41: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:501:39: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:510:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:515:42: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:525:40: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:534:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:540:14: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:550:36: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:559:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:565:14: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:575:37: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:584:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:590:14: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:600:40: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:609:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:615:14: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:625:41: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:636:14: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:636:28: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:645:37: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_File.c:652:28: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_GraphComm.c:46:32: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_GraphComm.c:59:24: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_GraphComm.c:73:40: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_GraphComm.c:83:30: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_GraphComm.c:96:14: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_GraphComm.c:114:35: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_GraphComm.c:141:28: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Group.c:39:27: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Group.c:46:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Group.c:53:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Group.c:62:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Group.c:70:23: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Group.c:73:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Group.c:87:40: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Group.c:88:40: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Group.c:99:28: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Group.c:99:47: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Group.c:108:30: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Group.c:108:49: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Group.c:110:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Group.c:119:14: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Group.c:119:33: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Group.c:122:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Group.c:131:14: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Group.c:131:33: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Group.c:134:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Group.c:146:29: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Group.c:150:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Group.c:162:29: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Group.c:166:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Group.c:188:35: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Group.c:191:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Group.c:213:35: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Group.c:216:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Info.c:22:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Info.c:32:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Info.c:42:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Info.c:56:27: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Info.c:71:21: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Info.c:107:30: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Info.c:121:29: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Info.c:135:34: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Info.c:150:27: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Info.c:152:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Info.c:163:21: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Info.c:166:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Info.c:177:12: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intercomm.c:47:10: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intercomm.c:65:14: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intercomm.c:69:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intercomm.c:83:14: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intercomm.c:87:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intercomm.c:101:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:44:29: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:46:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:53:30: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:53:46: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:55:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:73:30: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:79:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:94:31: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:100:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:120:36: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:122:14: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:132:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:161:45: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:163:27: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:175:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:192:42: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:194:23: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:218:43: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:220:24: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:223:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:240:44: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:242:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:266:45: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:268:26: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:271:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:278:28: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:301:43: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:302:36: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:309:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:320:44: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:321:37: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:328:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:337:47: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:350:49: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:363:46: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:402:57: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:403:31: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:425:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:452:20: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:486:19: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Intracomm.c:527:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Message.c:13:51: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Message.c:14:51: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Message.c:21:27: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Message.c:25:34: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Message.c:30:63: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Message.c:38:27: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Message.c:42:35: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Message.c:47:63: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Message.c:56:23: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Message.c:59:25: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Message.c:71:67: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Message.c:81:23: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Message.c:87:37: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Message.c:89:63: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Message.c:90:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Op.c:62:57: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Op.c:121:17: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Op.c:134:62: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Op.c:148:17: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Op.c:165:17: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Prequest.c:19:27: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Prequest.c:24:59: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Prequest.c:42:23: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:43:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:48:23: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:58:23: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:74:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:79:23: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:89:23: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:97:59: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:102:23: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:109:59: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:115:23: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:121:59: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:132:23: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:138:59: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:153:19: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:167:61: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:187:19: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:201:61: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:220:19: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:234:61: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:259:19: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:273:61: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:294:32: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:309:63: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:338:32: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:353:63: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:378:32: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:402:46: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:433:32: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:452:46: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:480:19: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:503:42: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:537:19: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:557:42: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:586:19: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:609:42: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:641:19: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Request.c:661:42: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Status.c:64:29: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Status.c:100:29: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Win.c:25:29: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Win.c:25:45: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Win.c:40:32: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Win.c:42:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Win.c:57:40: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Win.c:59:22: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Win.c:59:48: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Win.c:76:40: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Win.c:78:22: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Win.c:78:48: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Win.c:98:47: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Win.c:100:29: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Win.c:100:62: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Win.c:113:39: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Win.c:125:28: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Win.c:125:57: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Win.c:137:31: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Win.c:149:27: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Win.c:149:56: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Win.c:161:27: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Win.c:174:27: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Win.c:188:54: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Win.c:200:35: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Win.c:213:14: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Win.c:226:38: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Win.c:276:31: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Win.c:28:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Win.c:290:31: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Win.c:302:48: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Win.c:317:34: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Win.c:329:19: warning: cast to pointer from integer of different size [-Wint-to-pointer-cast]
<br>
../../../../../openmpi-1.7.4/ompi/mpi/java/c/mpi_Win.c:332:12: warning: cast from pointer to integer of different size [-Wpointer-to-int-cast]
<br>
ld: warning: symbol 'mpi_fortran_argv_null_' has differing sizes:
<br>
ld: warning: symbol 'mpi_fortran_argvs_null_' has differing sizes:
<br>
ld: warning: symbol 'mpi_fortran_status_ignore_' has differing sizes:
<br>
ld: warning: symbol 'mpi_fortran_statuses_ignore_' has differing sizes:
<br>
<p>
<br><p>
../../../../../openmpi-1.7.4/ompi/mca/sharedfp/sm/sharedfp_sm_file_open.c:143:19: warning: assignment from incompatible pointer type [enabled by default]
<br>
../../../../../openmpi-1.7.4/ompi/mca/sharedfp/sm/sharedfp_sm_file_open.c:216:59: warning: passing argument 1 of 'munmap' from incompatible pointer type [enabled by default]
<br>
../../../openmpi-1.7.4/ompi/datatype/ompi_datatype_args.c:70:11: warning: assignment makes integer from pointer without a cast [enabled by default]
<br>
ld: warning: symbol 'mpi_fortran_argv_null_' has differing sizes:
<br>
ld: warning: symbol 'mpi_fortran_argvs_null_' has differing sizes:
<br>
ld: warning: symbol 'mpi_fortran_errcodes_ignore_' has differing sizes:
<br>
ld: warning: symbol 'mpi_fortran_status_ignore_' has differing sizes:
<br>
ld: warning: symbol 'mpi_fortran_statuses_ignore_' has differing sizes:
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23568.php">Reuti: "Re: [OMPI users] OpenMpi installation"</a>
<li><strong>Previous message:</strong> <a href="23566.php">Talla: "[OMPI users] OpenMpi installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23575.php">Oscar Vega-Gisbert: "Re: [OMPI users] warnings and anachronisms in openmpi-1.7.4"</a>
<li><strong>Reply:</strong> <a href="23575.php">Oscar Vega-Gisbert: "Re: [OMPI users] warnings and anachronisms in openmpi-1.7.4"</a>
<li><strong>Maybe reply:</strong> <a href="23578.php">Siegmar Gross: "Re: [OMPI users] warnings and anachronisms in openmpi-1.7.4"</a>
<li><strong>Maybe reply:</strong> <a href="23580.php">Siegmar Gross: "Re: [OMPI users] warnings and anachronisms in openmpi-1.7.4"</a>
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
