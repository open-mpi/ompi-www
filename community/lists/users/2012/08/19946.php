<?
$subject_val = "Re: [OMPI users] [MARKETING] Compiling an OpenMPI application with intel compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 15 20:16:13 2012" -->
<!-- isoreceived="20120816001613" -->
<!-- sent="Wed, 15 Aug 2012 20:16:05 -0400" -->
<!-- isosent="20120816001605" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [MARKETING] Compiling an OpenMPI application with intel compilers" -->
<!-- id="24E39F9B-D732-4F14-923D-B23486642446_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAetZUQQp7gWiCJdU7z75wxrc5xKN4RufffXuvAS=aTqr8rxtA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [MARKETING] Compiling an OpenMPI application with intel compilers<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-15 20:16:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19947.php">maryam moein: "[OMPI users] mpi_group_incl erros"</a>
<li><strong>Previous message:</strong> <a href="19945.php">Rolf vandeVaart: "Re: [OMPI users] RDMA GPUDirect CUDA..."</a>
<li><strong>In reply to:</strong> <a href="19934.php">Stephen J. Barr: "[OMPI users] Compiling an OpenMPI application with intel compilers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying.
<br>
<p>Was Open MPI configured/compiled with the intel compilers?  That's usually the best idea -- use a single compiler suite for both Open MPI and your end application.
<br>
<p>That being said, I'm kinda guessing OMPI *was* built with the Intel compiler suite (because you imply that mpic++ is using icpc); I'm just asking to be sure.
<br>
<p>If OMPI was build with the Intel compilers, you might want to add a -E to the compile line and redirect the stdout to foo.cc.  -E sends the code through the preprocessor, but doesn't actually compile it.  What will end up in foo.cc will be what the code looks like after it goes through the preprocessor (i.e., all #define's resolved, all #include's expanded, etc.).
<br>
<p>Find the lines that it is complaining about and see why it thinks that there are no type specifiers.  I.e., OMPI's &quot;virtual void Free();&quot; lines in datatype.h shouldn't be causing any problems.  See if there is something wrong -- after the preprocessor -- in the line above that in datatype.h, for example.
<br>
<p>Perhaps some errant #define from elsewhere in the application is conflicting with OMPI's header files...?
<br>
<p><p><p>On Aug 12, 2012, at 12:33 AM, Stephen J. Barr wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have the latest OpenMPI on linux which I compiled with the Intel compiler suite. I am trying to compile an OpenMPI application. My particular application uses RInside and RcppEigen. If I comment out the openMPI parts of my code, the compile string is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; icpc -I/usr/share/R/include -I/usr/lib/R/site-library/Rcpp/include -I/usr/local/lib/R/site-library/RInside/include -O3 -pipe -g -Wall  -I/usr/local/lib/R/site-library/RcppEigen/include   sjb_simple_smle_with_Rinside.cpp  -L/usr/lib/R/lib -lR  -lblas -llapack -L/usr/lib/R/site-library/Rcpp/lib -lRcpp -Wl,-rpath,/usr/lib/R/site-library/Rcpp/lib -L/usr/local/lib/R/site-library/RInside/lib -lRInside -Wl,-rpath,/usr/local/lib/R/site-library/RInside/lib  -o sjb_simple_smle_with_Rinside
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thus, I tried to compile with mpic++ using:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpic++ -I/usr/share/R/include -I/usr/lib/R/site-library/Rcpp/include -I/usr/local/lib/R/site-library/RInside/include -O3 -pipe -g -Wall  -I/usr/local/lib/R/site-library/RcppEigen/include   sjb_simple_smle_with_Rinside.cpp  -L/usr/lib/R/lib -lR  -lblas -llapack -L/usr/lib/R/site-library/Rcpp/lib -lRcpp -Wl,-rpath,/usr/lib/R/site-library/Rcpp/lib -L/usr/local/lib/R/site-library/RInside/lib -lRInside -Wl,-rpath,/usr/local/lib/R/site-library/RInside/lib  -o sjb_simple_smle_with_Rinside
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I uncomment
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and try to compile, I get the errors below. Is there any trick to compiling OpenMPI applications with the Intel compilers?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Stephen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; COMPILE ERROR:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; stevejb_at_ursamajor:~/Projects/big_data_sim_mle/simple_smle/R_inside_version$ mpic++ -I/usr/share/R/include -I/usr/lib/R/site-library/Rcpp/include -I/usr/local/lib/R/site-library/RInside/include -O3 -pipe -g -Wall -I/usr/local/lib/R/site-library/RcppEigen/include sjb_simple_smle_with_Rinside.cpp -L/usr/lib/R/lib -lR -lblas -llapack -L/usr/lib/R/site-library/Rcpp/lib -lRcpp -Wl,-rpath,/usr/lib/R/site-library/Rcpp/lib -L/usr/local/lib/R/site-library/RInside/lib -lRInside -Wl,-rpath,/usr/local/lib/R/site-library/RInside/lib -o sjb_simple_smle_with_Rinside -shared-intel -I/usr/local/include -pthread -L/usr/local/lib -lmpi_cxx -lmpi -ldl -lm -Wl,--export-dynamic -lrt -lnsl -lutil
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/datatype.h(142): error: expected a type specifier
</span><br>
<span class="quotelev1">&gt;     virtual void Free();
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/datatype.h(142): error: expected a &quot;)&quot;
</span><br>
<span class="quotelev1">&gt;     virtual void Free();
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/datatype.h(142): error: expected an identifier
</span><br>
<span class="quotelev1">&gt;     virtual void Free();
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/datatype.h(142): error: &quot;virtual&quot; is not allowed
</span><br>
<span class="quotelev1">&gt;     virtual void Free();
</span><br>
<span class="quotelev1">&gt;     ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/datatype.h(142): error: expected a &quot;;&quot;
</span><br>
<span class="quotelev1">&gt;     virtual void Free();
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/op.h(48): error: expected a type specifier
</span><br>
<span class="quotelev1">&gt;     virtual void Free();
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/op.h(48): error: expected a &quot;)&quot;
</span><br>
<span class="quotelev1">&gt;     virtual void Free();
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/op.h(48): error: expected an identifier
</span><br>
<span class="quotelev1">&gt;     virtual void Free();
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/op.h(48): error: &quot;virtual&quot; is not allowed
</span><br>
<span class="quotelev1">&gt;     virtual void Free();
</span><br>
<span class="quotelev1">&gt;     ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/op.h(48): error: expected a &quot;;&quot;
</span><br>
<span class="quotelev1">&gt;     virtual void Free();
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/request.h(96): error: expected a type specifier
</span><br>
<span class="quotelev1">&gt;     virtual void Free(void);
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/request.h(96): error: expected a &quot;)&quot;
</span><br>
<span class="quotelev1">&gt;     virtual void Free(void);
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/request.h(96): error: expected an identifier
</span><br>
<span class="quotelev1">&gt;     virtual void Free(void);
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/request.h(96): error: &quot;virtual&quot; is not allowed
</span><br>
<span class="quotelev1">&gt;     virtual void Free(void);
</span><br>
<span class="quotelev1">&gt;     ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/request.h(96): error: expected a &quot;;&quot;
</span><br>
<span class="quotelev1">&gt;     virtual void Free(void);
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/group.h(111): error: expected a type specifier
</span><br>
<span class="quotelev1">&gt;     virtual void Free();
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/group.h(111): error: expected a &quot;)&quot;
</span><br>
<span class="quotelev1">&gt;     virtual void Free();
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/group.h(111): error: expected an identifier
</span><br>
<span class="quotelev1">&gt;     virtual void Free();
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/group.h(111): error: &quot;virtual&quot; is not allowed
</span><br>
<span class="quotelev1">&gt;     virtual void Free();
</span><br>
<span class="quotelev1">&gt;     ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/group.h(111): error: expected a &quot;;&quot;
</span><br>
<span class="quotelev1">&gt;     virtual void Free();
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/comm.h(264): error: expected a type specifier
</span><br>
<span class="quotelev1">&gt;     virtual void Free(void);
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/comm.h(264): error: expected a &quot;)&quot;
</span><br>
<span class="quotelev1">&gt;     virtual void Free(void);
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/comm.h(264): error: expected an identifier
</span><br>
<span class="quotelev1">&gt;     virtual void Free(void);
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/comm.h(264): error: &quot;virtual&quot; is not allowed
</span><br>
<span class="quotelev1">&gt;     virtual void Free(void);
</span><br>
<span class="quotelev1">&gt;     ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/comm.h(264): error: expected a &quot;;&quot;
</span><br>
<span class="quotelev1">&gt;     virtual void Free(void);
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/win.h(118): error: expected a type specifier
</span><br>
<span class="quotelev1">&gt;     virtual void Free(); 
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/win.h(118): error: expected a &quot;)&quot;
</span><br>
<span class="quotelev1">&gt;     virtual void Free(); 
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/win.h(118): error: expected an identifier
</span><br>
<span class="quotelev1">&gt;     virtual void Free(); 
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/win.h(118): error: &quot;virtual&quot; is not allowed
</span><br>
<span class="quotelev1">&gt;     virtual void Free(); 
</span><br>
<span class="quotelev1">&gt;     ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/win.h(118): error: expected a &quot;;&quot;
</span><br>
<span class="quotelev1">&gt;     virtual void Free(); 
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/errhandler.h(59): error: expected a type specifier
</span><br>
<span class="quotelev1">&gt;     virtual void Free();
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/errhandler.h(59): error: expected a &quot;)&quot;
</span><br>
<span class="quotelev1">&gt;     virtual void Free();
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/errhandler.h(59): error: expected an identifier
</span><br>
<span class="quotelev1">&gt;     virtual void Free();
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/errhandler.h(59): error: &quot;virtual&quot; is not allowed
</span><br>
<span class="quotelev1">&gt;     virtual void Free();
</span><br>
<span class="quotelev1">&gt;     ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/errhandler.h(59): error: expected a &quot;;&quot;
</span><br>
<span class="quotelev1">&gt;     virtual void Free();
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/info.h(84): error: expected a type specifier
</span><br>
<span class="quotelev1">&gt;     virtual void Free();
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/info.h(84): error: expected a &quot;)&quot;
</span><br>
<span class="quotelev1">&gt;     virtual void Free();
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/info.h(84): error: expected an identifier
</span><br>
<span class="quotelev1">&gt;     virtual void Free();
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/info.h(84): error: &quot;virtual&quot; is not allowed
</span><br>
<span class="quotelev1">&gt;     virtual void Free();
</span><br>
<span class="quotelev1">&gt;     ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/info.h(84): error: expected a &quot;;&quot;
</span><br>
<span class="quotelev1">&gt;     virtual void Free();
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/request_inln.h(39): error: expected an identifier
</span><br>
<span class="quotelev1">&gt;   MPI::Request::Free() 
</span><br>
<span class="quotelev1">&gt;                 ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/request_inln.h(38): error: inline specifier allowed on function declarations only
</span><br>
<span class="quotelev1">&gt;   inline void
</span><br>
<span class="quotelev1">&gt;   ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/request_inln.h(39): error: incomplete type is not allowed
</span><br>
<span class="quotelev1">&gt;   MPI::Request::Free() 
</span><br>
<span class="quotelev1">&gt;                 ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/request_inln.h(39): error: a nonstatic member reference must be relative to a specific object
</span><br>
<span class="quotelev1">&gt;   MPI::Request::Free() 
</span><br>
<span class="quotelev1">&gt;                 ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/request_inln.h(39): error: expected an expression
</span><br>
<span class="quotelev1">&gt;   MPI::Request::Free() 
</span><br>
<span class="quotelev1">&gt;                 ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/request_inln.h(39): error: expected a &quot;)&quot;
</span><br>
<span class="quotelev1">&gt;   MPI::Request::Free() 
</span><br>
<span class="quotelev1">&gt;                 ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/request_inln.h(40): error: expected a &quot;;&quot;
</span><br>
<span class="quotelev1">&gt;   {
</span><br>
<span class="quotelev1">&gt;   ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/op_inln.h(123): error: identifier &quot;ompi_op_set_cxx_callback&quot; is undefined
</span><br>
<span class="quotelev1">&gt;       ompi_op_set_cxx_callback(mpi_op, (MPI_User_function*) func);
</span><br>
<span class="quotelev1">&gt;       ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/op_inln.h(128): error: expected an identifier
</span><br>
<span class="quotelev1">&gt;   MPI::Op::Free()
</span><br>
<span class="quotelev1">&gt;            ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/op_inln.h(127): error: inline specifier allowed on function declarations only
</span><br>
<span class="quotelev1">&gt;   inline void
</span><br>
<span class="quotelev1">&gt;   ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/op_inln.h(128): error: incomplete type is not allowed
</span><br>
<span class="quotelev1">&gt;   MPI::Op::Free()
</span><br>
<span class="quotelev1">&gt;            ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/op_inln.h(128): error: a nonstatic member reference must be relative to a specific object
</span><br>
<span class="quotelev1">&gt;   MPI::Op::Free()
</span><br>
<span class="quotelev1">&gt;            ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/op_inln.h(128): error: expected an expression
</span><br>
<span class="quotelev1">&gt;   MPI::Op::Free()
</span><br>
<span class="quotelev1">&gt;            ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/op_inln.h(128): error: expected a &quot;)&quot;
</span><br>
<span class="quotelev1">&gt;   MPI::Op::Free()
</span><br>
<span class="quotelev1">&gt;            ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/include/openmpi/ompi/mpi/cxx/op_inln.h(129): error: expected a &quot;;&quot;
</span><br>
<span class="quotelev1">&gt;   {
</span><br>
<span class="quotelev1">&gt;   ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sjb_simple_smle_with_Rinside.cpp(35): warning #12: parsing restarts here after previous syntax error
</span><br>
<span class="quotelev1">&gt;   using namespace Rcpp;
</span><br>
<span class="quotelev1">&gt;                       ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sjb_simple_smle_with_Rinside.cpp(77): error: identifier &quot;as&quot; is undefined
</span><br>
<span class="quotelev1">&gt;     const Map&lt;MatrixXd&gt; Xmat(as&lt;Map&lt;MatrixXd&gt; &gt;(Xmat_sexp));
</span><br>
<span class="quotelev1">&gt;                              ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sjb_simple_smle_with_Rinside.cpp(77): error: type name is not allowed
</span><br>
<span class="quotelev1">&gt;     const Map&lt;MatrixXd&gt; Xmat(as&lt;Map&lt;MatrixXd&gt; &gt;(Xmat_sexp));
</span><br>
<span class="quotelev1">&gt;                                 ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sjb_simple_smle_with_Rinside.cpp(80): error: type name is not allowed
</span><br>
<span class="quotelev1">&gt;     const Map&lt;MatrixXd&gt; Ymat(as&lt;Map&lt;MatrixXd&gt; &gt;(Ymat_sexp));
</span><br>
<span class="quotelev1">&gt;                                 ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sjb_simple_smle_with_Rinside.cpp(87): error: type name is not allowed
</span><br>
<span class="quotelev1">&gt;     const Map&lt;MatrixXd&gt; ua(as&lt;Map&lt;MatrixXd&gt; &gt;(ua_sexp));
</span><br>
<span class="quotelev1">&gt;                               ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sjb_simple_smle_with_Rinside.cpp(89): error: type name is not allowed
</span><br>
<span class="quotelev1">&gt;     const Map&lt;MatrixXd&gt; ub(as&lt;Map&lt;MatrixXd&gt; &gt;(ub_sexp));
</span><br>
<span class="quotelev1">&gt;                               ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sjb_simple_smle_with_Rinside.cpp(98): error: type name is not allowed
</span><br>
<span class="quotelev1">&gt;     const Map&lt;VectorXd&gt; start_vector(as&lt;Map&lt;VectorXd&gt; &gt;(start_sexp));
</span><br>
<span class="quotelev1">&gt;                                         ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; compilation aborted for sjb_simple_smle_with_Rinside.cpp (code 2)
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="19947.php">maryam moein: "[OMPI users] mpi_group_incl erros"</a>
<li><strong>Previous message:</strong> <a href="19945.php">Rolf vandeVaart: "Re: [OMPI users] RDMA GPUDirect CUDA..."</a>
<li><strong>In reply to:</strong> <a href="19934.php">Stephen J. Barr: "[OMPI users] Compiling an OpenMPI application with intel compilers"</a>
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
