<?
$subject_val = "[OMPI users] Error compiling openmpi-1.9a1r29292";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 30 03:49:37 2013" -->
<!-- isoreceived="20130930074937" -->
<!-- sent="Mon, 30 Sep 2013 09:41:38 +0200 (CEST)" -->
<!-- isosent="20130930074138" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] Error compiling openmpi-1.9a1r29292" -->
<!-- id="201309300741.r8U7fcQ7014613_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] Error compiling openmpi-1.9a1r29292<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-30 03:41:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22732.php">Damiano Natali: "[OMPI users] non-functional mpif90 compiler"</a>
<li><strong>Previous message:</strong> <a href="22730.php">Huangwei: "Re: [OMPI users] mpi_barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/10/22746.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error compiling openmpi-1.9a1r29292"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/10/22746.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error compiling openmpi-1.9a1r29292"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I tried to install openmpi-1.9a1r29292 on my platforms
<br>
(openSuSE 12.1 Linux x86_64, Solaris 10 x86_64, and Solaris 10 Sparc)
<br>
with Sun C 5.12 and gcc-4.8.0. I have the following error on all
<br>
platforms, when I compile a 32- or 64-bit version with Sun C.
<br>
<p>...
<br>
&nbsp;&nbsp;PPFC     mpi-f08-interfaces.lo
<br>
<p>module mpi_f08_interfaces
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^                  
<br>
&quot;../../../../../openmpi-1.9a1r29292/ompi/mpi/fortran/base/mpi-f08-interfaces.F90&quot;,
<br>
&nbsp;&nbsp;Line = 19, Column = 8: ERROR: The compiler has detected
<br>
&nbsp;&nbsp;errors in module &quot;MPI_F08_INTERFACES&quot;.  No module information
<br>
&nbsp;&nbsp;file will be created for this module.
<br>
<p>&nbsp;&nbsp;&nbsp;use :: mpi_f08_types, only : MPI_Datatype, MPI_Comm, MPI_Aint,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_ADDRESS_KIND
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^                          
<br>
&quot;../../../../../openmpi-1.9a1r29292/ompi/mpi/fortran/base/mpi-f08-interfaces.F90&quot;,
<br>
&nbsp;&nbsp;Line = 4419, Column = 57: ERROR: &quot;MPI_AINT&quot; is not in module &quot;MPI_F08_TYPES&quot;.
<br>
<p>f90comp: 4622 SOURCE LINES
<br>
f90comp: 2 ERRORS, 0 WARNINGS, 0 OTHER MESSAGES, 0 ANSI
<br>
make[2]: *** [mpi-f08-interfaces.lo] Error 1
<br>
make[2]: Leaving directory
<br>
&nbsp;&nbsp;`.../openmpi-1.9a1r29292-Linux.x86_64.64_cc/ompi/mpi/fortran/base'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
&nbsp;&nbsp;`.../openmpi-1.9a1r29292-Linux.x86_64.64_cc/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
linpc1 openmpi-1.9a1r29292-Linux.x86_64.64_cc 122 
<br>
<p><p><p><p>I have the following error on all platforms, when I compile a 32-bit
<br>
version with gcc-4.8.0.
<br>
<p>linpc1 openmpi-1.9a1r29292-Linux.x86_64.32_gcc 120 tail -150 log.make.Linux.x86_64.32_gcc
<br>
Making all in mca/spml
<br>
make[2]: Entering directory `/export2/src/openmpi-1.9/openmpi-1.9a1r29292-Linux.x86_64.32_gcc/oshmem/mca/spml'
<br>
&nbsp;&nbsp;CC       base/spml_base_frame.lo
<br>
&nbsp;&nbsp;CC       base/spml_base_select.lo
<br>
&nbsp;&nbsp;CC       base/spml_base_request.lo
<br>
&nbsp;&nbsp;CC       base/spml_base_atomicreq.lo
<br>
&nbsp;&nbsp;CC       base/spml_base_getreq.lo
<br>
&nbsp;&nbsp;CC       base/spml_base_putreq.lo
<br>
&nbsp;&nbsp;CC       base/spml_base.lo
<br>
&nbsp;&nbsp;CCLD     libmca_spml.la
<br>
make[2]: Leaving directory `/export2/src/openmpi-1.9/openmpi-1.9a1r29292-Linux.x86_64.32_gcc/oshmem/mca/spml'
<br>
Making all in .
<br>
make[2]: Entering directory `/export2/src/openmpi-1.9/openmpi-1.9a1r29292-Linux.x86_64.32_gcc/oshmem'
<br>
&nbsp;&nbsp;CC       op/op.lo
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c: In function 'oshmem_op_max_freal16_func':
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:134:15: error: 'a' undeclared (first use in this function)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type *a = (type *) in;                                              \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:194:1: note: in expansion of macro 'FUNC_OP_CREATE'
<br>
&nbsp;FUNC_OP_CREATE(max, freal16, ompi_fortran_real16_t, __max_op);
<br>
&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:134:15: note: each undeclared identifier is reported only once for each function it appears in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type *a = (type *) in;                                              \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:194:1: note: in expansion of macro 'FUNC_OP_CREATE'
<br>
&nbsp;FUNC_OP_CREATE(max, freal16, ompi_fortran_real16_t, __max_op);
<br>
&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:134:26: error: expected expression before ')' token
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type *a = (type *) in;                                              \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:194:1: note: in expansion of macro 'FUNC_OP_CREATE'
<br>
&nbsp;FUNC_OP_CREATE(max, freal16, ompi_fortran_real16_t, __max_op);
<br>
&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:135:15: error: 'b' undeclared (first use in this function)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type *b = (type *) out;                                             \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:194:1: note: in expansion of macro 'FUNC_OP_CREATE'
<br>
&nbsp;FUNC_OP_CREATE(max, freal16, ompi_fortran_real16_t, __max_op);
<br>
&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:135:26: error: expected expression before ')' token
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type *b = (type *) out;                                             \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:194:1: note: in expansion of macro 'FUNC_OP_CREATE'
<br>
&nbsp;FUNC_OP_CREATE(max, freal16, ompi_fortran_real16_t, __max_op);
<br>
&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c: In function 'oshmem_op_min_freal16_func':
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:134:15: error: 'a' undeclared (first use in this function)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type *a = (type *) in;                                              \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:211:1: note: in expansion of macro 'FUNC_OP_CREATE'
<br>
&nbsp;FUNC_OP_CREATE(min, freal16, ompi_fortran_real16_t, __min_op);
<br>
&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:134:26: error: expected expression before ')' token
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type *a = (type *) in;                                              \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:211:1: note: in expansion of macro 'FUNC_OP_CREATE'
<br>
&nbsp;FUNC_OP_CREATE(min, freal16, ompi_fortran_real16_t, __min_op);
<br>
&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:135:15: error: 'b' undeclared (first use in this function)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type *b = (type *) out;                                             \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:211:1: note: in expansion of macro 'FUNC_OP_CREATE'
<br>
&nbsp;FUNC_OP_CREATE(min, freal16, ompi_fortran_real16_t, __min_op);
<br>
&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:135:26: error: expected expression before ')' token
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type *b = (type *) out;                                             \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:211:1: note: in expansion of macro 'FUNC_OP_CREATE'
<br>
&nbsp;FUNC_OP_CREATE(min, freal16, ompi_fortran_real16_t, __min_op);
<br>
&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c: In function 'oshmem_op_sum_freal16_func':
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:134:15: error: 'a' undeclared (first use in this function)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type *a = (type *) in;                                              \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:230:1: note: in expansion of macro 'FUNC_OP_CREATE'
<br>
&nbsp;FUNC_OP_CREATE(sum, freal16, ompi_fortran_real16_t, __sum_op);
<br>
&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:134:26: error: expected expression before ')' token
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type *a = (type *) in;                                              \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:230:1: note: in expansion of macro 'FUNC_OP_CREATE'
<br>
&nbsp;FUNC_OP_CREATE(sum, freal16, ompi_fortran_real16_t, __sum_op);
<br>
&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:135:15: error: 'b' undeclared (first use in this function)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type *b = (type *) out;                                             \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:230:1: note: in expansion of macro 'FUNC_OP_CREATE'
<br>
&nbsp;FUNC_OP_CREATE(sum, freal16, ompi_fortran_real16_t, __sum_op);
<br>
&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:135:26: error: expected expression before ')' token
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type *b = (type *) out;                                             \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:230:1: note: in expansion of macro 'FUNC_OP_CREATE'
<br>
&nbsp;FUNC_OP_CREATE(sum, freal16, ompi_fortran_real16_t, __sum_op);
<br>
&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c: In function 'oshmem_op_prod_freal16_func':
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:134:15: error: 'a' undeclared (first use in this function)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type *a = (type *) in;                                              \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:249:1: note: in expansion of macro 'FUNC_OP_CREATE'
<br>
&nbsp;FUNC_OP_CREATE(prod, freal16, ompi_fortran_real16_t, __prod_op);
<br>
&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:134:26: error: expected expression before ')' token
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type *a = (type *) in;                                              \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:249:1: note: in expansion of macro 'FUNC_OP_CREATE'
<br>
&nbsp;FUNC_OP_CREATE(prod, freal16, ompi_fortran_real16_t, __prod_op);
<br>
&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:135:15: error: 'b' undeclared (first use in this function)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type *b = (type *) out;                                             \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:249:1: note: in expansion of macro 'FUNC_OP_CREATE'
<br>
&nbsp;FUNC_OP_CREATE(prod, freal16, ompi_fortran_real16_t, __prod_op);
<br>
&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:135:26: error: expected expression before ')' token
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type *b = (type *) out;                                             \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:249:1: note: in expansion of macro 'FUNC_OP_CREATE'
<br>
&nbsp;FUNC_OP_CREATE(prod, freal16, ompi_fortran_real16_t, __prod_op);
<br>
&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c: In function 'oshmem_op_init':
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:149:62: error: expected expression before ')' token
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;oshmem_op_##name##_##type_name-&gt;dt_size = sizeof(type);                                 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:302:5: note: in expansion of macro 'OBJ_OP_CREATE'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_OP_CREATE(max, freal16, ompi_fortran_real16_t, OSHMEM_OP_MAX, OSHMEM_OP_TYPE_FREAL16);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:149:62: error: expected expression before ')' token
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;oshmem_op_##name##_##type_name-&gt;dt_size = sizeof(type);                                 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:318:5: note: in expansion of macro 'OBJ_OP_CREATE'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_OP_CREATE(min, freal16, ompi_fortran_real16_t, OSHMEM_OP_MIN, OSHMEM_OP_TYPE_FREAL16);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:149:62: error: expected expression before ')' token
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;oshmem_op_##name##_##type_name-&gt;dt_size = sizeof(type);                                 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:336:5: note: in expansion of macro 'OBJ_OP_CREATE'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_OP_CREATE(sum, freal16, ompi_fortran_real16_t, OSHMEM_OP_SUM, OSHMEM_OP_TYPE_FREAL16);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:149:62: error: expected expression before ')' token
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;oshmem_op_##name##_##type_name-&gt;dt_size = sizeof(type);                                 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../openmpi-1.9a1r29292/oshmem/op/op.c:354:5: note: in expansion of macro 'OBJ_OP_CREATE'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_OP_CREATE(prod, freal16, ompi_fortran_real16_t, OSHMEM_OP_PROD, OSHMEM_OP_TYPE_FREAL16);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
make[2]: *** [op/op.lo] Error 1
<br>
make[2]: Leaving directory `/export2/src/openmpi-1.9/openmpi-1.9a1r29292-Linux.x86_64.32_gcc/oshmem'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/export2/src/openmpi-1.9/openmpi-1.9a1r29292-Linux.x86_64.32_gcc/oshmem'
<br>
make: *** [all-recursive] Error 1
<br>
linpc1 openmpi-1.9a1r29292-Linux.x86_64.32_gcc 121 
<br>
<p><p>I would be grateful, if somebody can fix the problems. Thank you very
<br>
much for your help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22732.php">Damiano Natali: "[OMPI users] non-functional mpif90 compiler"</a>
<li><strong>Previous message:</strong> <a href="22730.php">Huangwei: "Re: [OMPI users] mpi_barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/10/22746.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error compiling openmpi-1.9a1r29292"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/10/22746.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error compiling openmpi-1.9a1r29292"</a>
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
