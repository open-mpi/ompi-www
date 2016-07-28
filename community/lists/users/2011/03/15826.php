<?
$subject_val = "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  9 16:38:01 2011" -->
<!-- isoreceived="20110309213801" -->
<!-- sent="Wed, 09 Mar 2011 22:37:51 +0100" -->
<!-- isosent="20110309213751" -->
<!-- name="Harald Anlauf" -->
<!-- email="anlauf_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441" -->
<!-- id="4D77F32F.1090400_at_gmx.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.19.1299690006.31686.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441<br>
<strong>From:</strong> Harald Anlauf (<em>anlauf_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-09 16:37:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15827.php">Jack Bryan: "[OMPI users] Open MPI access the same file in parallel ?"</a>
<li><strong>Previous message:</strong> <a href="15825.php">Randall Svancara: "[OMPI users] Error with an application, miscalculate message sizes"</a>
<li><strong>Maybe in reply to:</strong> <a href="15778.php">Harald Anlauf: "[OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>it's funny because I do not see my problem with C (when using
<br>
long long) but only with Fortran and INTEGER8.
<br>
<p>I have rewritten the testcase so that it uses MPI_REDUCE_LOCAL,
<br>
which unfortunately does not link with openmpi-1.4.3.  Apparently
<br>
this is a new feature of openmpi-1.5.
<br>
<p>Here's the modified testcase:
<br>
<p>program test
<br>
&nbsp;&nbsp;use mpi
<br>
&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;integer, parameter :: i8 = selected_int_kind  (15)
<br>
&nbsp;&nbsp;integer, parameter :: N  = 3
<br>
<p>&nbsp;&nbsp;integer     :: i4i(N), i4s(N)
<br>
&nbsp;&nbsp;integer(i8) :: i8i(N), i8s(N)
<br>
&nbsp;&nbsp;integer     :: ierr, nproc, myrank, i
<br>
<p>&nbsp;&nbsp;i4i = (/ (i, i=1,N) /); i8i = (/ (i, i=1,N) /)
<br>
<p>&nbsp;&nbsp;call MPI_INIT      (ierr)
<br>
&nbsp;&nbsp;call MPI_COMM_SIZE (MPI_COMM_WORLD, nproc,  ierr)
<br>
&nbsp;&nbsp;call MPI_COMM_RANK (MPI_COMM_WORLD, myrank, ierr)
<br>
<p>&nbsp;&nbsp;if (myrank == 0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print *, &quot;Integer kind,   bits:&quot;, i8, bit_size (1_i8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print *, &quot;Default Integer     :&quot;, kind (1), bit_size (1)
<br>
&nbsp;&nbsp;end if
<br>
<p>&nbsp;&nbsp;i4s = 0
<br>
&nbsp;&nbsp;call MPI_REDUCE_LOCAL (i4i, i4s, N, MPI_INTEGER4, MPI_SUM, ierr)
<br>
&nbsp;&nbsp;if (myrank == 0)      print *, &quot;MPI_Reduce_local: Sum[integer(4)]:&quot;, i4s
<br>
<p>&nbsp;&nbsp;i8s = 0
<br>
&nbsp;&nbsp;call MPI_REDUCE_LOCAL (i8i, i8s, N, MPI_INTEGER8, MPI_SUM, ierr)
<br>
&nbsp;&nbsp;if (myrank == 0)      print *, &quot;MPI_Reduce_local: Sum[integer(8)]:&quot;, i8s
<br>
<p>&nbsp;&nbsp;call MPI_FINALIZE (ierr)
<br>
end program test
<br>
<p><p>Compiled with Intel Fortran v12:
<br>
<p>% /opt/ifort12/openmpi-1.5/bin/mpif90 -v mpi-allreducetest.f90
<br>
-Wl,-R/opt/ifort12/openmpi-1.5/lib
<br>
<p>% ./a.out
<br>
&nbsp;Integer kind,   bits:           8                    64
<br>
&nbsp;Default Integer     :           4          32
<br>
&nbsp;MPI_Reduce_local: Sum[integer(4)]:           1           2           3
<br>
[proton:11545] *** An error occurred in MPI_Reduce_local: the reduction
<br>
operation MPI_SUM is not defined on the MPI_INTEGER8 datatype
<br>
[proton:11545] *** on communicator MPI_COMM_WORLD
<br>
[proton:11545] *** MPI_ERR_OP: invalid reduce operation
<br>
[proton:11545] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
<p>(Note: the test works with INTEGER2 but not with INTEGER1 and INTEGER8)
<br>
<p>Here's my tentative gdb session (sorry, I'm not very experienced):
<br>
<p>anlauf_at_proton:/opt/sources/mpi&gt; gdb a.out
<br>
GNU gdb (GDB; openSUSE 11.1) 6.8.50.20081120-cvs
<br>
Copyright (C) 2008 Free Software Foundation, Inc.
<br>
License GPLv3+: GNU GPL version 3 or later
<br>
&lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
<br>
This is free software: you are free to change and redistribute it.
<br>
There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
<br>
and &quot;show warranty&quot; for details.
<br>
This GDB was configured as &quot;i586-suse-linux&quot;.
<br>
For bug reporting instructions, please see:
<br>
&lt;<a href="http://bugs.opensuse.org/">http://bugs.opensuse.org/</a>&gt;...
<br>
(gdb) break MAIN__
<br>
Breakpoint 1 at 0x804f9c0: file mpi-allreducetest.f90, line 1.
<br>
(gdb) run
<br>
Starting program: /opt/sources/mpi/a.out
<br>
[Thread debugging using libthread_db enabled]
<br>
<p>Breakpoint 1, test () at mpi-allreducetest.f90:1
<br>
1	program test
<br>
Current language:  auto; currently fortran
<br>
(gdb) break 27
<br>
Breakpoint 2 at 0x804fdc1: file mpi-allreducetest.f90, line 27.
<br>
(gdb) cont
<br>
Continuing.
<br>
&nbsp;Integer kind,   bits:           8                    64
<br>
&nbsp;Default Integer     :           4          32
<br>
&nbsp;MPI_Reduce_local: Sum[integer(4)]:           1           2           3
<br>
<p>Breakpoint 2, test () at mpi-allreducetest.f90:27
<br>
27	  call MPI_REDUCE_LOCAL (i8i, i8s, N, MPI_INTEGER8, MPI_SUM, ierr)
<br>
(gdb) s
<br>
mpi_reduce_local_f (inbuf=0x80bcc00 &quot;\001&quot;, inoutbuf=0x80bcc30 &quot;&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;count=0x80a9c60, datatype=0x80a9c78, op=0x80a9c60, ierr=0xbfffeabc)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at preduce_local_f.c:64
<br>
64	{
<br>
Current language:  auto; currently c
<br>
(gdb) l 62,80
<br>
62	void mpi_reduce_local_f(char *inbuf, char *inoutbuf, MPI_Fint *count,
<br>
63	                        MPI_Fint *datatype, MPI_Fint *op, MPI_Fint *ierr)
<br>
64	{
<br>
65	    MPI_Datatype c_type;
<br>
66	    MPI_Op c_op;
<br>
67	
<br>
68	    c_type = MPI_Type_f2c(*datatype);
<br>
69	    c_op = MPI_Op_f2c(*op);
<br>
70	
<br>
71	    inbuf = (char *) OMPI_F2C_BOTTOM(inbuf);
<br>
72	    inoutbuf = (char *) OMPI_F2C_BOTTOM(inoutbuf);
<br>
73	
<br>
74	    *ierr = OMPI_INT_2_FINT(MPI_Reduce_local(inbuf, inoutbuf,
<br>
75	                                             OMPI_FINT_2_INT(*count),
<br>
76	                                             c_type, c_op));
<br>
77	}
<br>
(gdb) print *datatype
<br>
$1 = 11
<br>
(gdb) print *op
<br>
$2 = 3
<br>
(gdb) break 74
<br>
Breakpoint 3 at 0xb7fd3c86: file preduce_local_f.c, line 74.
<br>
(gdb) cont
<br>
Continuing.
<br>
<p>Breakpoint 3, mpi_reduce_local_f (inbuf=0x80bcc00 &quot;\001&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inoutbuf=0x80bcc30 &quot;&quot;, count=0x80a9c60, datatype=0x80a9c78,
<br>
op=0x80a9c60,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ierr=0xbfffeabc) at preduce_local_f.c:74
<br>
74	    *ierr = OMPI_INT_2_FINT(MPI_Reduce_local(inbuf, inoutbuf,
<br>
(gdb) print *c_type
<br>
$3 = {super = {super = {obj_class = 0xb7f9e3a4, obj_reference_count = 1},
<br>
&nbsp;&nbsp;&nbsp;&nbsp;flags = 54070, id = 7, bdt_used = 128, size = 8, true_lb = 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;true_ub = 8, lb = 0, ub = 8, align = 1, nbElems = 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;name = &quot;OPAL_INT8&quot;, '\0' &lt;repeats 54 times&gt;, desc = {length = 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;used = 1, desc = 0xb7fab418}, opt_desc = {length = 1, used = 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;desc = 0xb7fab418}, btypes = {0, 0, 0, 0, 0, 0, 0, 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0 &lt;repeats 38 times&gt;}}, id = 42, d_f_to_c_index = 11, d_keyhash =
<br>
0x0,
<br>
&nbsp;&nbsp;args = 0x0, packed_description = 0x0,
<br>
&nbsp;&nbsp;name = &quot;MPI_INTEGER8&quot;, '\0' &lt;repeats 51 times&gt;}
<br>
(gdb) print c_op
<br>
$4 = &lt;value optimized out&gt;
<br>
(gdb) s
<br>
PMPI_Reduce_local (inbuf=0x80bcc00, inoutbuf=0x80bcc30, count=3,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;datatype=0xb7f9ad18, op=0xb7faa2c8) at preduce_local.c:48
<br>
48	    if (MPI_PARAM_CHECK) {
<br>
(gdb) print *op
<br>
$5 = {super = {obj_class = 0xb7f93e00, obj_reference_count = 1},
<br>
&nbsp;&nbsp;o_name = &quot;MPI_SUM&quot;, '\0' &lt;repeats 56 times&gt;, o_flags = 41,
<br>
&nbsp;&nbsp;o_f_to_c_index = 3, o_func = {intrinsic = {fns = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f12461 &lt;ompi_op_base_sum_unsigned_char&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f12440 &lt;ompi_op_base_sum_signed_char&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f12482 &lt;ompi_op_base_sum_int&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f124a3 &lt;ompi_op_base_sum_long&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f124c4 &lt;ompi_op_base_sum_short&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f124e7 &lt;ompi_op_base_sum_unsigned_short&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f1250a &lt;ompi_op_base_sum_unsigned&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f1252b &lt;ompi_op_base_sum_unsigned_long&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f1254c &lt;ompi_op_base_sum_long_long_int&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f1257a &lt;ompi_op_base_sum_unsigned_long_long&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f125a8 &lt;ompi_op_base_sum_fortran_integer&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f125c9 &lt;ompi_op_base_sum_fortran_integer1&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f125ea &lt;ompi_op_base_sum_fortran_integer2&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f1260d &lt;ompi_op_base_sum_fortran_integer4&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f1262e &lt;ompi_op_base_sum_fortran_integer8&gt;, 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f1265c &lt;ompi_op_base_sum_float&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f1267e &lt;ompi_op_base_sum_double&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f126cb &lt;ompi_op_base_sum_fortran_real&gt;, 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f1270f &lt;ompi_op_base_sum_fortran_real4&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f12731 &lt;ompi_op_base_sum_fortran_real8&gt;, 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f126ed &lt;ompi_op_base_sum_fortran_double_precision&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f126a0 &lt;ompi_op_base_sum_long_double&gt;, 0, 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f12753 &lt;ompi_op_base_sum_fortran_complex&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f12781 &lt;ompi_op_base_sum_fortran_double_complex&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f127b6 &lt;ompi_op_base_sum_fortran_complex8&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f127e4 &lt;ompi_op_base_sum_fortran_complex16&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0 &lt;repeats 12 times&gt;}, modules = {0x8112ee8 &lt;repeats 43 times&gt;}},
<br>
&nbsp;&nbsp;&nbsp;&nbsp;c_fn = 0xb7f12461 &lt;ompi_op_base_sum_unsigned_char&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fort_fn = 0xb7f12461 &lt;ompi_op_base_sum_unsigned_char&gt;, cxx_data = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;user_fn = 0xb7f12461 &lt;ompi_op_base_sum_unsigned_char&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intercept_fn = 0xb7f12440 &lt;ompi_op_base_sum_signed_char&gt;}},
<br>
&nbsp;&nbsp;o_3buff_intrinsic = {fns = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f147ff &lt;ompi_op_base_3buff_sum_unsigned_char&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f147d8 &lt;ompi_op_base_3buff_sum_signed_char&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f14826 &lt;ompi_op_base_3buff_sum_int&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f1484d &lt;ompi_op_base_3buff_sum_long&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f14874 &lt;ompi_op_base_3buff_sum_short&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f1489e &lt;ompi_op_base_3buff_sum_unsigned_short&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f148c8 &lt;ompi_op_base_3buff_sum_unsigned&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f148ef &lt;ompi_op_base_3buff_sum_unsigned_long&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f14916 &lt;ompi_op_base_3buff_sum_long_long_int&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f14949 &lt;ompi_op_base_3buff_sum_unsigned_long_long&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f1497c &lt;ompi_op_base_3buff_sum_fortran_integer&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f149a3 &lt;ompi_op_base_3buff_sum_fortran_integer1&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f149ca &lt;ompi_op_base_3buff_sum_fortran_integer2&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f149f4 &lt;ompi_op_base_3buff_sum_fortran_integer4&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f14a1b &lt;ompi_op_base_3buff_sum_fortran_integer8&gt;, 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f14a4e &lt;ompi_op_base_3buff_sum_float&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f14a75 &lt;ompi_op_base_3buff_sum_double&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f14aca &lt;ompi_op_base_3buff_sum_fortran_real&gt;, 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f14b18 &lt;ompi_op_base_3buff_sum_fortran_real4&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f14b3f &lt;ompi_op_base_3buff_sum_fortran_real8&gt;, 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f14af1 &lt;ompi_op_base_3buff_sum_fortran_double_precision&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f14a9c &lt;ompi_op_base_3buff_sum_long_double&gt;, 0, 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f14b66 &lt;ompi_op_base_3buff_sum_fortran_complex&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f14b99 &lt;ompi_op_base_3buff_sum_fortran_double_complex&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f14bd1 &lt;ompi_op_base_3buff_sum_fortran_complex8&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0xb7f14c04 &lt;ompi_op_base_3buff_sum_fortran_complex16&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0 &lt;repeats 12 times&gt;}, modules = {0x8112ee8 &lt;repeats 43 times&gt;}}}
<br>
(gdb) s
<br>
43	{
<br>
(gdb) s
<br>
48	    if (MPI_PARAM_CHECK) {
<br>
(gdb) s
<br>
51	        OMPI_ERR_INIT_FINALIZE(FUNC_NAME);
<br>
(gdb) s
<br>
53	        if (MPI_OP_NULL == op || NULL == op) {
<br>
(gdb) s
<br>
407	    if (ompi_op_is_intrinsic(op)) {
<br>
(gdb) l
<br>
402	       - if intrinsic ddt invoked on intrinsic op:
<br>
403	       - ensure the datatype is defined in the op map
<br>
404	       - ensure we have a function pointer for that combination
<br>
405	     */
<br>
406	
<br>
407	    if (ompi_op_is_intrinsic(op)) {
<br>
408	        if (ompi_datatype_is_predefined(ddt)) {
<br>
409	            /* Intrinsic ddt on intrinsic op */
<br>
410	            if (-1 == ompi_op_ddt_map[ddt-&gt;id] ||
<br>
411	                NULL ==
<br>
op-&gt;o_func.intrinsic.fns[ompi_op_ddt_map[ddt-&gt;id]]) {
<br>
(gdb) s
<br>
408	        if (ompi_datatype_is_predefined(ddt)) {
<br>
(gdb) s
<br>
410	            if (-1 == ompi_op_ddt_map[ddt-&gt;id] ||
<br>
(gdb) whatis ddt
<br>
No symbol &quot;ddt&quot; in current context.
<br>
(gdb) s
<br>
412	                asprintf(msg,
<br>
(gdb) s
<br>
56	            int ret = OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD,
<br>
MPI_ERR_OP, msg);
<br>
(gdb) s
<br>
ompi_errhandler_invoke (errhandler=0xb7fa2a98, mpi_object=0xb7fa2454,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;object_type=1, err_code=10,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;message=0x8146f78 &quot;MPI_Reduce_local: the reduction operation MPI_SUM
<br>
is not defined on the MPI_INTEGER8 datatype&quot;) at
<br>
errhandler/errhandler_invoke.c:32
<br>
32	{
<br>
(gdb) quit
<br>
The program is running.  Quit anyway (and kill it)? (y or n) y
<br>
<p><p>Can you give me a hint how to figure out why the combination
<br>
MPI_SUM and MPI_INTEGER8 fails?
<br>
<p>Harald
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15827.php">Jack Bryan: "[OMPI users] Open MPI access the same file in parallel ?"</a>
<li><strong>Previous message:</strong> <a href="15825.php">Randall Svancara: "[OMPI users] Error with an application, miscalculate message sizes"</a>
<li><strong>Maybe in reply to:</strong> <a href="15778.php">Harald Anlauf: "[OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
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
