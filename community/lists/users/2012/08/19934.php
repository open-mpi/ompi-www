<?
$subject_val = "[OMPI users] Compiling an OpenMPI application with intel compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 12 00:33:42 2012" -->
<!-- isoreceived="20120812043342" -->
<!-- sent="Sat, 11 Aug 2012 21:33:16 -0700" -->
<!-- isosent="20120812043316" -->
<!-- name="Stephen J. Barr" -->
<!-- email="stephenjbarr_at_[hidden]" -->
<!-- subject="[OMPI users] Compiling an OpenMPI application with intel compilers" -->
<!-- id="CAAetZUQQp7gWiCJdU7z75wxrc5xKN4RufffXuvAS=aTqr8rxtA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Compiling an OpenMPI application with intel compilers<br>
<strong>From:</strong> Stephen J. Barr (<em>stephenjbarr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-12 00:33:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19935.php">Ralph Castain: "Re: [OMPI users] User Interface for MPMD"</a>
<li><strong>Previous message:</strong> <a href="19933.php">Frank Kampe: "Re: [OMPI users] User Interface for MPMD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19946.php">Jeff Squyres: "Re: [OMPI users] [MARKETING] Compiling an OpenMPI application with intel compilers"</a>
<li><strong>Reply:</strong> <a href="19946.php">Jeff Squyres: "Re: [OMPI users] [MARKETING] Compiling an OpenMPI application with intel compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have the latest OpenMPI on linux which I compiled with the Intel compiler
<br>
suite. I am trying to compile an OpenMPI application. My particular
<br>
application uses RInside and RcppEigen. If I comment out the openMPI parts
<br>
of my code, the compile string is:
<br>
<p>icpc -I/usr/share/R/include -I/usr/lib/R/site-library/Rcpp/include
<br>
-I/usr/local/lib/R/site-library/RInside/include -O3 -pipe -g -Wall
<br>
&nbsp;-I/usr/local/lib/R/site-library/RcppEigen/include
<br>
sjb_simple_smle_with_Rinside.cpp  -L/usr/lib/R/lib -lR  -lblas -llapack
<br>
-L/usr/lib/R/site-library/Rcpp/lib -lRcpp
<br>
-Wl,-rpath,/usr/lib/R/site-library/Rcpp/lib
<br>
-L/usr/local/lib/R/site-library/RInside/lib -lRInside
<br>
-Wl,-rpath,/usr/local/lib/R/site-library/RInside/lib  -o
<br>
sjb_simple_smle_with_Rinside
<br>
<p>Thus, I tried to compile with mpic++ using:
<br>
<p>mpic++ -I/usr/share/R/include -I/usr/lib/R/site-library/Rcpp/include
<br>
-I/usr/local/lib/R/site-library/RInside/include -O3 -pipe -g -Wall
<br>
&nbsp;-I/usr/local/lib/R/site-library/RcppEigen/include
<br>
sjb_simple_smle_with_Rinside.cpp  -L/usr/lib/R/lib -lR  -lblas -llapack
<br>
-L/usr/lib/R/site-library/Rcpp/lib -lRcpp
<br>
-Wl,-rpath,/usr/lib/R/site-library/Rcpp/lib
<br>
-L/usr/local/lib/R/site-library/RInside/lib -lRInside
<br>
-Wl,-rpath,/usr/local/lib/R/site-library/RInside/lib  -o
<br>
sjb_simple_smle_with_Rinside
<br>
<p>If I uncomment
<br>
#include &quot;mpi.h&quot;
<br>
<p>and try to compile, I get the errors below. Is there any trick to compiling
<br>
OpenMPI applications with the Intel compilers?
<br>
<p>Thanks,
<br>
Stephen
<br>
<p>COMPILE ERROR:
<br>
<p>stevejb_at_ursamajor:~/Projects/big_data_sim_mle/simple_smle/R_inside_version$
<br>
mpic++ -I/usr/share/R/include -I/usr/lib/R/site-library/Rcpp/include
<br>
-I/usr/local/lib/R/site-library/RInside/include -O3 -pipe -g -Wall
<br>
-I/usr/local/lib/R/site-library/RcppEigen/include
<br>
sjb_simple_smle_with_Rinside.cpp -L/usr/lib/R/lib -lR -lblas -llapack
<br>
-L/usr/lib/R/site-library/Rcpp/lib -lRcpp
<br>
-Wl,-rpath,/usr/lib/R/site-library/Rcpp/lib
<br>
-L/usr/local/lib/R/site-library/RInside/lib -lRInside
<br>
-Wl,-rpath,/usr/local/lib/R/site-library/RInside/lib -o
<br>
sjb_simple_smle_with_Rinside -shared-intel -I/usr/local/include -pthread
<br>
-L/usr/local/lib -lmpi_cxx -lmpi -ldl -lm -Wl,--export-dynamic -lrt -lnsl
<br>
-lutil
<br>
/usr/local/include/openmpi/ompi/mpi/cxx/datatype.h(142): error: expected a
<br>
type specifier
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/datatype.h(142): error: expected a
<br>
&quot;)&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/datatype.h(142): error: expected an
<br>
identifier
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/datatype.h(142): error: &quot;virtual&quot;
<br>
is not allowed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/datatype.h(142): error: expected a
<br>
&quot;;&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/op.h(48): error: expected a type
<br>
specifier
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/op.h(48): error: expected a &quot;)&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/op.h(48): error: expected an
<br>
identifier
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/op.h(48): error: &quot;virtual&quot; is not
<br>
allowed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/op.h(48): error: expected a &quot;;&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/request.h(96): error: expected a
<br>
type specifier
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free(void);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/request.h(96): error: expected a &quot;)&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free(void);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/request.h(96): error: expected an
<br>
identifier
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free(void);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/request.h(96): error: &quot;virtual&quot; is
<br>
not allowed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free(void);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/request.h(96): error: expected a &quot;;&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free(void);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/group.h(111): error: expected a
<br>
type specifier
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/group.h(111): error: expected a &quot;)&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/group.h(111): error: expected an
<br>
identifier
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/group.h(111): error: &quot;virtual&quot; is
<br>
not allowed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/group.h(111): error: expected a &quot;;&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/comm.h(264): error: expected a type
<br>
specifier
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free(void);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/comm.h(264): error: expected a &quot;)&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free(void);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/comm.h(264): error: expected an
<br>
identifier
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free(void);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/comm.h(264): error: &quot;virtual&quot; is
<br>
not allowed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free(void);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/comm.h(264): error: expected a &quot;;&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free(void);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/win.h(118): error: expected a type
<br>
specifier
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/win.h(118): error: expected a &quot;)&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/win.h(118): error: expected an
<br>
identifier
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/win.h(118): error: &quot;virtual&quot; is not
<br>
allowed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/win.h(118): error: expected a &quot;;&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/errhandler.h(59): error: expected a
<br>
type specifier
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/errhandler.h(59): error: expected a
<br>
&quot;)&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/errhandler.h(59): error: expected
<br>
an identifier
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/errhandler.h(59): error: &quot;virtual&quot;
<br>
is not allowed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/errhandler.h(59): error: expected a
<br>
&quot;;&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/info.h(84): error: expected a type
<br>
specifier
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/info.h(84): error: expected a &quot;)&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/info.h(84): error: expected an
<br>
identifier
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/info.h(84): error: &quot;virtual&quot; is not
<br>
allowed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/info.h(84): error: expected a &quot;;&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual void Free();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/request_inln.h(39): error: expected
<br>
an identifier
<br>
&nbsp;&nbsp;MPI::Request::Free()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/request_inln.h(38): error: inline
<br>
specifier allowed on function declarations only
<br>
&nbsp;&nbsp;inline void
<br>
&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/request_inln.h(39): error:
<br>
incomplete type is not allowed
<br>
&nbsp;&nbsp;MPI::Request::Free()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/request_inln.h(39): error: a
<br>
nonstatic member reference must be relative to a specific object
<br>
&nbsp;&nbsp;MPI::Request::Free()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/request_inln.h(39): error: expected
<br>
an expression
<br>
&nbsp;&nbsp;MPI::Request::Free()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/request_inln.h(39): error: expected
<br>
a &quot;)&quot;
<br>
&nbsp;&nbsp;MPI::Request::Free()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/request_inln.h(40): error: expected
<br>
a &quot;;&quot;
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/op_inln.h(123): error: identifier
<br>
&quot;ompi_op_set_cxx_callback&quot; is undefined
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_op_set_cxx_callback(mpi_op, (MPI_User_function*) func);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/op_inln.h(128): error: expected an
<br>
identifier
<br>
&nbsp;&nbsp;MPI::Op::Free()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/op_inln.h(127): error: inline
<br>
specifier allowed on function declarations only
<br>
&nbsp;&nbsp;inline void
<br>
&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/op_inln.h(128): error: incomplete
<br>
type is not allowed
<br>
&nbsp;&nbsp;MPI::Op::Free()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/op_inln.h(128): error: a nonstatic
<br>
member reference must be relative to a specific object
<br>
&nbsp;&nbsp;MPI::Op::Free()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/op_inln.h(128): error: expected an
<br>
expression
<br>
&nbsp;&nbsp;MPI::Op::Free()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/op_inln.h(128): error: expected a
<br>
&quot;)&quot;
<br>
&nbsp;&nbsp;MPI::Op::Free()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>/usr/local/include/openmpi/ompi/mpi/cxx/op_inln.h(129): error: expected a
<br>
&quot;;&quot;
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;^
<br>
<p>sjb_simple_smle_with_Rinside.cpp(35): warning #12: parsing restarts here
<br>
after previous syntax error
<br>
&nbsp;&nbsp;using namespace Rcpp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>sjb_simple_smle_with_Rinside.cpp(77): error: identifier &quot;as&quot; is undefined
<br>
&nbsp;&nbsp;&nbsp;&nbsp;const Map&lt;MatrixXd&gt; Xmat(as&lt;Map&lt;MatrixXd&gt; &gt;(Xmat_sexp));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>sjb_simple_smle_with_Rinside.cpp(77): error: type name is not allowed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;const Map&lt;MatrixXd&gt; Xmat(as&lt;Map&lt;MatrixXd&gt; &gt;(Xmat_sexp));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>sjb_simple_smle_with_Rinside.cpp(80): error: type name is not allowed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;const Map&lt;MatrixXd&gt; Ymat(as&lt;Map&lt;MatrixXd&gt; &gt;(Ymat_sexp));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>sjb_simple_smle_with_Rinside.cpp(87): error: type name is not allowed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;const Map&lt;MatrixXd&gt; ua(as&lt;Map&lt;MatrixXd&gt; &gt;(ua_sexp));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>sjb_simple_smle_with_Rinside.cpp(89): error: type name is not allowed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;const Map&lt;MatrixXd&gt; ub(as&lt;Map&lt;MatrixXd&gt; &gt;(ub_sexp));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>sjb_simple_smle_with_Rinside.cpp(98): error: type name is not allowed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;const Map&lt;VectorXd&gt; start_vector(as&lt;Map&lt;VectorXd&gt; &gt;(start_sexp));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>compilation aborted for sjb_simple_smle_with_Rinside.cpp (code 2)
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19934/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19935.php">Ralph Castain: "Re: [OMPI users] User Interface for MPMD"</a>
<li><strong>Previous message:</strong> <a href="19933.php">Frank Kampe: "Re: [OMPI users] User Interface for MPMD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19946.php">Jeff Squyres: "Re: [OMPI users] [MARKETING] Compiling an OpenMPI application with intel compilers"</a>
<li><strong>Reply:</strong> <a href="19946.php">Jeff Squyres: "Re: [OMPI users] [MARKETING] Compiling an OpenMPI application with intel compilers"</a>
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
