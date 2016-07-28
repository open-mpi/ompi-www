<?
$subject_val = "Re: [OMPI users] Error compiling openmpi-1.9a1r29292";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  1 14:38:17 2013" -->
<!-- isoreceived="20131001183817" -->
<!-- sent="Tue, 1 Oct 2013 18:38:15 +0000" -->
<!-- isosent="20131001183815" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error compiling openmpi-1.9a1r29292" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F913CAE_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201309300741.r8U7fcQ7014613_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error compiling openmpi-1.9a1r29292<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-01 14:38:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22747.php">Gus Correa: "Re: [OMPI users] non-functional mpif90 compiler"</a>
<li><strong>Previous message:</strong> <a href="22745.php">John Hearns: "Re: [OMPI users] line 60: echo: write error: No space left on device"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/09/22731.php">Siegmar Gross: "[OMPI users] Error compiling openmpi-1.9a1r29292"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
These should now be fixed.
<br>
<p>On Sep 30, 2013, at 3:41 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; today I tried to install openmpi-1.9a1r29292 on my platforms
</span><br>
<span class="quotelev1">&gt; (openSuSE 12.1 Linux x86_64, Solaris 10 x86_64, and Solaris 10 Sparc)
</span><br>
<span class="quotelev1">&gt; with Sun C 5.12 and gcc-4.8.0. I have the following error on all
</span><br>
<span class="quotelev1">&gt; platforms, when I compile a 32- or 64-bit version with Sun C.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;  PPFC     mpi-f08-interfaces.lo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module mpi_f08_interfaces
</span><br>
<span class="quotelev1">&gt;       ^                  
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.9a1r29292/ompi/mpi/fortran/base/mpi-f08-interfaces.F90&quot;,
</span><br>
<span class="quotelev1">&gt;  Line = 19, Column = 8: ERROR: The compiler has detected
</span><br>
<span class="quotelev1">&gt;  errors in module &quot;MPI_F08_INTERFACES&quot;.  No module information
</span><br>
<span class="quotelev1">&gt;  file will be created for this module.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   use :: mpi_f08_types, only : MPI_Datatype, MPI_Comm, MPI_Aint,
</span><br>
<span class="quotelev1">&gt;     MPI_ADDRESS_KIND
</span><br>
<span class="quotelev1">&gt;                                                        ^                          
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.9a1r29292/ompi/mpi/fortran/base/mpi-f08-interfaces.F90&quot;,
</span><br>
<span class="quotelev1">&gt;  Line = 4419, Column = 57: ERROR: &quot;MPI_AINT&quot; is not in module &quot;MPI_F08_TYPES&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; f90comp: 4622 SOURCE LINES
</span><br>
<span class="quotelev1">&gt; f90comp: 2 ERRORS, 0 WARNINGS, 0 OTHER MESSAGES, 0 ANSI
</span><br>
<span class="quotelev1">&gt; make[2]: *** [mpi-f08-interfaces.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt;  `.../openmpi-1.9a1r29292-Linux.x86_64.64_cc/ompi/mpi/fortran/base'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;  `.../openmpi-1.9a1r29292-Linux.x86_64.64_cc/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi-1.9a1r29292-Linux.x86_64.64_cc 122 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have the following error on all platforms, when I compile a 32-bit
</span><br>
<span class="quotelev1">&gt; version with gcc-4.8.0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi-1.9a1r29292-Linux.x86_64.32_gcc 120 tail -150 log.make.Linux.x86_64.32_gcc
</span><br>
<span class="quotelev1">&gt; Making all in mca/spml
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/export2/src/openmpi-1.9/openmpi-1.9a1r29292-Linux.x86_64.32_gcc/oshmem/mca/spml'
</span><br>
<span class="quotelev1">&gt;  CC       base/spml_base_frame.lo
</span><br>
<span class="quotelev1">&gt;  CC       base/spml_base_select.lo
</span><br>
<span class="quotelev1">&gt;  CC       base/spml_base_request.lo
</span><br>
<span class="quotelev1">&gt;  CC       base/spml_base_atomicreq.lo
</span><br>
<span class="quotelev1">&gt;  CC       base/spml_base_getreq.lo
</span><br>
<span class="quotelev1">&gt;  CC       base/spml_base_putreq.lo
</span><br>
<span class="quotelev1">&gt;  CC       base/spml_base.lo
</span><br>
<span class="quotelev1">&gt;  CCLD     libmca_spml.la
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/export2/src/openmpi-1.9/openmpi-1.9a1r29292-Linux.x86_64.32_gcc/oshmem/mca/spml'
</span><br>
<span class="quotelev1">&gt; Making all in .
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/export2/src/openmpi-1.9/openmpi-1.9a1r29292-Linux.x86_64.32_gcc/oshmem'
</span><br>
<span class="quotelev1">&gt;  CC       op/op.lo
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c: In function 'oshmem_op_max_freal16_func':
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:134:15: error: 'a' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt;         type *a = (type *) in;                                              \
</span><br>
<span class="quotelev1">&gt;               ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:194:1: note: in expansion of macro 'FUNC_OP_CREATE'
</span><br>
<span class="quotelev1">&gt; FUNC_OP_CREATE(max, freal16, ompi_fortran_real16_t, __max_op);
</span><br>
<span class="quotelev1">&gt; ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:134:15: note: each undeclared identifier is reported only once for each function it appears in
</span><br>
<span class="quotelev1">&gt;         type *a = (type *) in;                                              \
</span><br>
<span class="quotelev1">&gt;               ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:194:1: note: in expansion of macro 'FUNC_OP_CREATE'
</span><br>
<span class="quotelev1">&gt; FUNC_OP_CREATE(max, freal16, ompi_fortran_real16_t, __max_op);
</span><br>
<span class="quotelev1">&gt; ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:134:26: error: expected expression before ')' token
</span><br>
<span class="quotelev1">&gt;         type *a = (type *) in;                                              \
</span><br>
<span class="quotelev1">&gt;                          ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:194:1: note: in expansion of macro 'FUNC_OP_CREATE'
</span><br>
<span class="quotelev1">&gt; FUNC_OP_CREATE(max, freal16, ompi_fortran_real16_t, __max_op);
</span><br>
<span class="quotelev1">&gt; ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:135:15: error: 'b' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt;         type *b = (type *) out;                                             \
</span><br>
<span class="quotelev1">&gt;               ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:194:1: note: in expansion of macro 'FUNC_OP_CREATE'
</span><br>
<span class="quotelev1">&gt; FUNC_OP_CREATE(max, freal16, ompi_fortran_real16_t, __max_op);
</span><br>
<span class="quotelev1">&gt; ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:135:26: error: expected expression before ')' token
</span><br>
<span class="quotelev1">&gt;         type *b = (type *) out;                                             \
</span><br>
<span class="quotelev1">&gt;                          ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:194:1: note: in expansion of macro 'FUNC_OP_CREATE'
</span><br>
<span class="quotelev1">&gt; FUNC_OP_CREATE(max, freal16, ompi_fortran_real16_t, __max_op);
</span><br>
<span class="quotelev1">&gt; ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c: In function 'oshmem_op_min_freal16_func':
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:134:15: error: 'a' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt;         type *a = (type *) in;                                              \
</span><br>
<span class="quotelev1">&gt;               ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:211:1: note: in expansion of macro 'FUNC_OP_CREATE'
</span><br>
<span class="quotelev1">&gt; FUNC_OP_CREATE(min, freal16, ompi_fortran_real16_t, __min_op);
</span><br>
<span class="quotelev1">&gt; ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:134:26: error: expected expression before ')' token
</span><br>
<span class="quotelev1">&gt;         type *a = (type *) in;                                              \
</span><br>
<span class="quotelev1">&gt;                          ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:211:1: note: in expansion of macro 'FUNC_OP_CREATE'
</span><br>
<span class="quotelev1">&gt; FUNC_OP_CREATE(min, freal16, ompi_fortran_real16_t, __min_op);
</span><br>
<span class="quotelev1">&gt; ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:135:15: error: 'b' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt;         type *b = (type *) out;                                             \
</span><br>
<span class="quotelev1">&gt;               ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:211:1: note: in expansion of macro 'FUNC_OP_CREATE'
</span><br>
<span class="quotelev1">&gt; FUNC_OP_CREATE(min, freal16, ompi_fortran_real16_t, __min_op);
</span><br>
<span class="quotelev1">&gt; ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:135:26: error: expected expression before ')' token
</span><br>
<span class="quotelev1">&gt;         type *b = (type *) out;                                             \
</span><br>
<span class="quotelev1">&gt;                          ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:211:1: note: in expansion of macro 'FUNC_OP_CREATE'
</span><br>
<span class="quotelev1">&gt; FUNC_OP_CREATE(min, freal16, ompi_fortran_real16_t, __min_op);
</span><br>
<span class="quotelev1">&gt; ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c: In function 'oshmem_op_sum_freal16_func':
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:134:15: error: 'a' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt;         type *a = (type *) in;                                              \
</span><br>
<span class="quotelev1">&gt;               ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:230:1: note: in expansion of macro 'FUNC_OP_CREATE'
</span><br>
<span class="quotelev1">&gt; FUNC_OP_CREATE(sum, freal16, ompi_fortran_real16_t, __sum_op);
</span><br>
<span class="quotelev1">&gt; ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:134:26: error: expected expression before ')' token
</span><br>
<span class="quotelev1">&gt;         type *a = (type *) in;                                              \
</span><br>
<span class="quotelev1">&gt;                          ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:230:1: note: in expansion of macro 'FUNC_OP_CREATE'
</span><br>
<span class="quotelev1">&gt; FUNC_OP_CREATE(sum, freal16, ompi_fortran_real16_t, __sum_op);
</span><br>
<span class="quotelev1">&gt; ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:135:15: error: 'b' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt;         type *b = (type *) out;                                             \
</span><br>
<span class="quotelev1">&gt;               ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:230:1: note: in expansion of macro 'FUNC_OP_CREATE'
</span><br>
<span class="quotelev1">&gt; FUNC_OP_CREATE(sum, freal16, ompi_fortran_real16_t, __sum_op);
</span><br>
<span class="quotelev1">&gt; ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:135:26: error: expected expression before ')' token
</span><br>
<span class="quotelev1">&gt;         type *b = (type *) out;                                             \
</span><br>
<span class="quotelev1">&gt;                          ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:230:1: note: in expansion of macro 'FUNC_OP_CREATE'
</span><br>
<span class="quotelev1">&gt; FUNC_OP_CREATE(sum, freal16, ompi_fortran_real16_t, __sum_op);
</span><br>
<span class="quotelev1">&gt; ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c: In function 'oshmem_op_prod_freal16_func':
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:134:15: error: 'a' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt;         type *a = (type *) in;                                              \
</span><br>
<span class="quotelev1">&gt;               ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:249:1: note: in expansion of macro 'FUNC_OP_CREATE'
</span><br>
<span class="quotelev1">&gt; FUNC_OP_CREATE(prod, freal16, ompi_fortran_real16_t, __prod_op);
</span><br>
<span class="quotelev1">&gt; ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:134:26: error: expected expression before ')' token
</span><br>
<span class="quotelev1">&gt;         type *a = (type *) in;                                              \
</span><br>
<span class="quotelev1">&gt;                          ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:249:1: note: in expansion of macro 'FUNC_OP_CREATE'
</span><br>
<span class="quotelev1">&gt; FUNC_OP_CREATE(prod, freal16, ompi_fortran_real16_t, __prod_op);
</span><br>
<span class="quotelev1">&gt; ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:135:15: error: 'b' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt;         type *b = (type *) out;                                             \
</span><br>
<span class="quotelev1">&gt;               ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:249:1: note: in expansion of macro 'FUNC_OP_CREATE'
</span><br>
<span class="quotelev1">&gt; FUNC_OP_CREATE(prod, freal16, ompi_fortran_real16_t, __prod_op);
</span><br>
<span class="quotelev1">&gt; ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:135:26: error: expected expression before ')' token
</span><br>
<span class="quotelev1">&gt;         type *b = (type *) out;                                             \
</span><br>
<span class="quotelev1">&gt;                          ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:249:1: note: in expansion of macro 'FUNC_OP_CREATE'
</span><br>
<span class="quotelev1">&gt; FUNC_OP_CREATE(prod, freal16, ompi_fortran_real16_t, __prod_op);
</span><br>
<span class="quotelev1">&gt; ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c: In function 'oshmem_op_init':
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:149:62: error: expected expression before ')' token
</span><br>
<span class="quotelev1">&gt;         oshmem_op_##name##_##type_name-&gt;dt_size = sizeof(type);                                 \
</span><br>
<span class="quotelev1">&gt;                                                              ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:302:5: note: in expansion of macro 'OBJ_OP_CREATE'
</span><br>
<span class="quotelev1">&gt;     OBJ_OP_CREATE(max, freal16, ompi_fortran_real16_t, OSHMEM_OP_MAX, OSHMEM_OP_TYPE_FREAL16);
</span><br>
<span class="quotelev1">&gt;     ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:149:62: error: expected expression before ')' token
</span><br>
<span class="quotelev1">&gt;         oshmem_op_##name##_##type_name-&gt;dt_size = sizeof(type);                                 \
</span><br>
<span class="quotelev1">&gt;                                                              ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:318:5: note: in expansion of macro 'OBJ_OP_CREATE'
</span><br>
<span class="quotelev1">&gt;     OBJ_OP_CREATE(min, freal16, ompi_fortran_real16_t, OSHMEM_OP_MIN, OSHMEM_OP_TYPE_FREAL16);
</span><br>
<span class="quotelev1">&gt;     ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:149:62: error: expected expression before ')' token
</span><br>
<span class="quotelev1">&gt;         oshmem_op_##name##_##type_name-&gt;dt_size = sizeof(type);                                 \
</span><br>
<span class="quotelev1">&gt;                                                              ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:336:5: note: in expansion of macro 'OBJ_OP_CREATE'
</span><br>
<span class="quotelev1">&gt;     OBJ_OP_CREATE(sum, freal16, ompi_fortran_real16_t, OSHMEM_OP_SUM, OSHMEM_OP_TYPE_FREAL16);
</span><br>
<span class="quotelev1">&gt;     ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:149:62: error: expected expression before ')' token
</span><br>
<span class="quotelev1">&gt;         oshmem_op_##name##_##type_name-&gt;dt_size = sizeof(type);                                 \
</span><br>
<span class="quotelev1">&gt;                                                              ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r29292/oshmem/op/op.c:354:5: note: in expansion of macro 'OBJ_OP_CREATE'
</span><br>
<span class="quotelev1">&gt;     OBJ_OP_CREATE(prod, freal16, ompi_fortran_real16_t, OSHMEM_OP_PROD, OSHMEM_OP_TYPE_FREAL16);
</span><br>
<span class="quotelev1">&gt;     ^
</span><br>
<span class="quotelev1">&gt; make[2]: *** [op/op.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/export2/src/openmpi-1.9/openmpi-1.9a1r29292-Linux.x86_64.32_gcc/oshmem'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/export2/src/openmpi-1.9/openmpi-1.9a1r29292-Linux.x86_64.32_gcc/oshmem'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi-1.9a1r29292-Linux.x86_64.32_gcc 121 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be grateful, if somebody can fix the problems. Thank you very
</span><br>
<span class="quotelev1">&gt; much for your help in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22747.php">Gus Correa: "Re: [OMPI users] non-functional mpif90 compiler"</a>
<li><strong>Previous message:</strong> <a href="22745.php">John Hearns: "Re: [OMPI users] line 60: echo: write error: No space left on device"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/09/22731.php">Siegmar Gross: "[OMPI users] Error compiling openmpi-1.9a1r29292"</a>
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
