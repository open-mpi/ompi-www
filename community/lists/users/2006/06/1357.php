<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  2 03:52:02 2006" -->
<!-- isoreceived="20060602075202" -->
<!-- sent="Fri, 02 Jun 2006 09:51:52 +0200" -->
<!-- isosent="20060602075152" -->
<!-- name="Jan De Laet" -->
<!-- email="Jan.De.Laet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.1a9r10157 Fails to build with Nag f95" -->
<!-- id="447FEE18.8050604_at_cc.kuleuven.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.5954.1149194755.3459.users_at_open-mpi.org" -->
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
<strong>From:</strong> Jan De Laet (<em>Jan.De.Laet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-02 03:51:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1358.php">Jan De Laet: "Re: [OMPI users] openmpi-1.1a9r10157 Fails to build with Nag, f95Compiler // and Pathscale"</a>
<li><strong>Previous message:</strong> <a href="1356.php">imran shaik: "Re: [OMPI users] Few more questions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>openmpi-1.1a9r10157's fortran bindings also fail to build with the 
<br>
Pathscale 2.1 pathf90 compiler. At the same spot but with different 
<br>
error messages (see below), which perhaps helps to clarify things. Any 
<br>
help greatly appreciated as well.
<br>
<p>Best regards,
<br>
<p>Jan De Laet
<br>
<p>=================================
<br>
make[4]: Leaving directory 
<br>
`/data/home/jan/openmpi-1.1a9r10157/ompi/mpi/f90/scripts'
<br>
make[4]: Entering directory 
<br>
`/data/home/jan/openmpi-1.1a9r10157/ompi/mpi/f90'
<br>
***************************************************************
<br>
* Compiling the mpi.f90 file may take a few minutes.
<br>
* This is quite normal -- do not be alarmed if the compile
<br>
* process seems to 'hang' at this point for several minutes.
<br>
***************************************************************
<br>
pathf90 -I../../../ompi/include -I../../../ompi/include -I. -I. -O3 
<br>
-march=opteron -fPIC -DPIC  -c -I. -o mpi.o  mpi.f90
<br>
<p>module mpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
pathf90-855 pathf90: ERROR MPI, File = mpi.f90, Line = 20, Column = 8
<br>
&nbsp;&nbsp;The compiler has detected errors in module &quot;MPI&quot;.  No module 
<br>
information file will be created for this module.
<br>
<p>&nbsp;&nbsp;subroutine mpi_type_null_delete_fn( type, type_keyval, 
<br>
attribute_val_out, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
pathf90-608 pathf90: ERROR MPI, File = attr_fn-f90-interfaces.h, Line = 
<br>
21, Column = 14
<br>
&nbsp;&nbsp;&quot;MPI_TYPE_NULL_DELETE_FN&quot; has the EXTERNAL attribute, therefore it 
<br>
must not be a procedure in an interface block.
<br>
<p>&nbsp;&nbsp;subroutine mpi_type_null_copy_fn( type, type_keyval, extra_state, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
pathf90-608 pathf90: ERROR MPI, File = attr_fn-f90-interfaces.h, Line = 
<br>
26, Column = 14
<br>
&nbsp;&nbsp;&quot;MPI_TYPE_NULL_COPY_FN&quot; has the EXTERNAL attribute, therefore it must 
<br>
not be a procedure in an interface block.
<br>
<p>&nbsp;&nbsp;subroutine mpi_type_dup_fn( type, type_keyval, extra_state, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
pathf90-608 pathf90: ERROR MPI, File = attr_fn-f90-interfaces.h, Line = 
<br>
34, Column = 14
<br>
&nbsp;&nbsp;&quot;MPI_TYPE_DUP_FN&quot; has the EXTERNAL attribute, therefore it must not be 
<br>
a procedure in an interface block.
<br>
<p>&nbsp;&nbsp;subroutine mpi_comm_null_delete_fn(comm, comm_keyval, attribute_val_out, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
pathf90-608 pathf90: ERROR MPI, File = attr_fn-f90-interfaces.h, Line = 
<br>
42, Column = 14
<br>
&nbsp;&nbsp;&quot;MPI_COMM_NULL_DELETE_FN&quot; has the EXTERNAL attribute, therefore it 
<br>
must not be a procedure in an interface block.
<br>
<p>&nbsp;&nbsp;subroutine mpi_comm_null_copy_fn( comm, comm_keyval, extra_state, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
pathf90-608 pathf90: ERROR MPI, File = attr_fn-f90-interfaces.h, Line = 
<br>
47, Column = 14
<br>
&nbsp;&nbsp;&quot;MPI_COMM_NULL_COPY_FN&quot; has the EXTERNAL attribute, therefore it must 
<br>
not be a procedure in an interface block.
<br>
<p>&nbsp;&nbsp;subroutine mpi_comm_dup_fn( comm, comm_keyval, extra_state, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
pathf90-608 pathf90: ERROR MPI, File = attr_fn-f90-interfaces.h, Line = 
<br>
55, Column = 14
<br>
&nbsp;&nbsp;&quot;MPI_COMM_DUP_FN&quot; has the EXTERNAL attribute, therefore it must not be 
<br>
a procedure in an interface block.
<br>
<p>&nbsp;&nbsp;subroutine mpi_null_delete_fn( comm, comm_keyval, attribute_val_out, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
pathf90-608 pathf90: ERROR MPI, File = attr_fn-f90-interfaces.h, Line = 
<br>
63, Column = 14
<br>
&nbsp;&nbsp;&quot;MPI_NULL_DELETE_FN&quot; has the EXTERNAL attribute, therefore it must not 
<br>
be a procedure in an interface block.
<br>
<p>&nbsp;&nbsp;subroutine mpi_null_copy_fn( comm, comm_keyval, extra_state, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
pathf90-608 pathf90: ERROR MPI, File = attr_fn-f90-interfaces.h, Line = 
<br>
68, Column = 14
<br>
&nbsp;&nbsp;&quot;MPI_NULL_COPY_FN&quot; has the EXTERNAL attribute, therefore it must not 
<br>
be a procedure in an interface block.
<br>
<p>&nbsp;&nbsp;subroutine mpi_dup_fn( comm, comm_keyval, extra_state, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
pathf90-608 pathf90: ERROR MPI, File = attr_fn-f90-interfaces.h, Line = 
<br>
76, Column = 14
<br>
&nbsp;&nbsp;&quot;MPI_DUP_FN&quot; has the EXTERNAL attribute, therefore it must not be a 
<br>
procedure in an interface block.
<br>
<p>&nbsp;&nbsp;subroutine mpi_win_null_delete_fn( window, win_keyval, 
<br>
attribute_val_out, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
pathf90-608 pathf90: ERROR MPI, File = attr_fn-f90-interfaces.h, Line = 
<br>
84, Column = 14
<br>
&nbsp;&nbsp;&quot;MPI_WIN_NULL_DELETE_FN&quot; has the EXTERNAL attribute, therefore it must 
<br>
not be a procedure in an interface block.
<br>
<p>&nbsp;&nbsp;subroutine mpi_win_null_copy_fn( window, win_keyval, extra_state, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
pathf90-608 pathf90: ERROR MPI, File = attr_fn-f90-interfaces.h, Line = 
<br>
89, Column = 14
<br>
&nbsp;&nbsp;&quot;MPI_WIN_NULL_COPY_FN&quot; has the EXTERNAL attribute, therefore it must 
<br>
not be a procedure in an interface block.
<br>
<p>&nbsp;&nbsp;subroutine mpi_win_dup_fn( window, win_keyval, extra_state, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
pathf90-608 pathf90: ERROR MPI, File = attr_fn-f90-interfaces.h, Line = 
<br>
97, Column = 14
<br>
&nbsp;&nbsp;&quot;MPI_WIN_DUP_FN&quot; has the EXTERNAL attribute, therefore it must not be 
<br>
a procedure in an interface block.
<br>
<p>pathf90: PathScale(TM) Fortran 90 Version 2.1 (f14) Fri Jun  2, 2006  
<br>
09:43:24
<br>
<p><p><p>=========================================
<br>
<p>Pathscale's error message pathf90-608:
<br>
<p>Error : &quot;%s&quot; has the %s attribute, therefore it must not be a procedure 
<br>
in an
<br>
interface block.
<br>
<p>If an explicit interface is declared for a procedure, all information
<br>
describing the procedure must be specified inside the explicit interface,
<br>
with the exception of the ESC[1mOPTIONALESC[22m, ESC[1mPRIVATE 
<br>
ESC[22mand ESC[1mPUBLIC ESC[22mattributes.  The
<br>
procedure may be specified as a dummy argument.
<br>
========================================================
<br>
<p><span class="quotelev1">&gt;Today's Topics:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   1. openmpi-1.1a9r10157 Fails to build with Nag f95	Compiler
</span><br>
<span class="quotelev1">&gt;      (Doug Roberts)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Message: 1
</span><br>
<span class="quotelev1">&gt;Date: Thu, 1 Jun 2006 16:45:50 -0400 (EDT)
</span><br>
<span class="quotelev1">&gt;From: Doug Roberts &lt;roberpj_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI users] openmpi-1.1a9r10157 Fails to build with Nag f95
</span><br>
<span class="quotelev1">&gt;	Compiler
</span><br>
<span class="quotelev1">&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Message-ID: &lt;Pine.LNX.4.63.0606011636080.22031_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hi, I'm using the NAGWare Fortran 95 compiler Release 5.0(414), but make
</span><br>
<span class="quotelev1">&gt;fails as shown in the snippet below.  I've attached the config.log,
</span><br>
<span class="quotelev1">&gt;config.out and make.out files. The system is a dual processor Opteron
</span><br>
<span class="quotelev1">&gt;server running a 2.6 x86_64 linux kernel and has a myrinet mx based
</span><br>
<span class="quotelev1">&gt;interconnect which i define at configure time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;make[4]: Entering directory
</span><br>
<span class="quotelev1">&gt;`/opt/openmpi/openmpi-1.1a9r10157.bld/ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt;./scripts/mpi-f90-interfaces.h.sh
</span><br>
<span class="quotelev1">&gt;/opt/openmpi/openmpi-1.1a9r10157.bld/ompi/mpi/f90 &gt; mpi-f90-interfaces.h
</span><br>
<span class="quotelev1">&gt;***************************************************************
</span><br>
<span class="quotelev1">&gt;* Compiling the mpi.f90 file may take a few minutes.
</span><br>
<span class="quotelev1">&gt;* This is quite normal -- do not be alarmed if the compile
</span><br>
<span class="quotelev1">&gt;* process seems to 'hang' at this point for several minutes.
</span><br>
<span class="quotelev1">&gt;***************************************************************
</span><br>
<span class="quotelev1">&gt;f95 -I../../../ompi/include -I../../../ompi/include -I. -I.  -c -I. -o
</span><br>
<span class="quotelev1">&gt;mpi.o  mpi.f90
</span><br>
<span class="quotelev1">&gt;Extension: mpi.f90: DOUBLE COMPLEX keyword
</span><br>
<span class="quotelev1">&gt;Error: attr_fn-f90-interfaces.h, line 21: MPI_TYPE_NULL_DELETE_FN has
</span><br>
<span class="quotelev1">&gt;already been declared EXTERNAL
</span><br>
<span class="quotelev1">&gt;        detected at SUBROUTINE_at_MPI_TYPE_NULL_DELETE_FN
</span><br>
<span class="quotelev1">&gt;Warning: attr_fn-f90-interfaces.h, line 24: Unused dummy argument TYPE
</span><br>
<span class="quotelev1">&gt;          detected at MPI_TYPE_NULL_DELETE_FN@&lt;end-of-statement&gt;
</span><br>
<span class="quotelev1">&gt;Warning: attr_fn-f90-interfaces.h, line 24: Unused dummy argument IERR
</span><br>
<span class="quotelev1">&gt;          detected at MPI_TYPE_NULL_DELETE_FN@&lt;end-of-statement&gt;
</span><br>
<span class="quotelev1">&gt;Warning: attr_fn-f90-interfaces.h, line 24: Unused dummy argument
</span><br>
<span class="quotelev1">&gt;EXTRA_STATE
</span><br>
<span class="quotelev1">&gt;          detected at MPI_TYPE_NULL_DELETE_FN@&lt;end-of-statement&gt;
</span><br>
<span class="quotelev1">&gt;Warning: attr_fn-f90-interfaces.h, line 24: Unused dummy argument
</span><br>
<span class="quotelev1">&gt;ATTRIBUTE_VAL_OUT
</span><br>
<span class="quotelev1">&gt;          detected at MPI_TYPE_NULL_DELETE_FN@&lt;end-of-statement&gt;
</span><br>
<span class="quotelev1">&gt;Warning: attr_fn-f90-interfaces.h, line 24: Unused dummy argument
</span><br>
<span class="quotelev1">&gt;TYPE_KEYVAL
</span><br>
<span class="quotelev1">&gt;          detected at MPI_TYPE_NULL_DELETE_FN@&lt;end-of-statement&gt;
</span><br>
<span class="quotelev1">&gt;Error: attr_fn-f90-interfaces.h, line 26: MPI_TYPE_NULL_COPY_FN has
</span><br>
<span class="quotelev1">&gt;already been declared EXTERNAL
</span><br>
<span class="quotelev1">&gt;        detected at SUBROUTINE_at_MPI_TYPE_NULL_COPY_FN
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Any help greatly appreciated,
</span><br>
<span class="quotelev1">&gt;-Doug
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Disclaimer: <a href="http://www.kuleuven.be/cwis/email_disclaimer.htm">http://www.kuleuven.be/cwis/email_disclaimer.htm</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1358.php">Jan De Laet: "Re: [OMPI users] openmpi-1.1a9r10157 Fails to build with Nag, f95Compiler // and Pathscale"</a>
<li><strong>Previous message:</strong> <a href="1356.php">imran shaik: "Re: [OMPI users] Few more questions"</a>
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
