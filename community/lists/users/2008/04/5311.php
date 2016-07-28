<?
$subject_val = "Re: [OMPI users] OSX undefined symbols when compiling hello world in cpp but not in c";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  3 22:05:14 2008" -->
<!-- isoreceived="20080404020514" -->
<!-- sent="Thu, 3 Apr 2008 20:05:05 -0600" -->
<!-- isosent="20080404020505" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OSX undefined symbols when compiling hello world in cpp but not in c" -->
<!-- id="800FD829-EE04-4855-AA05-0238349D0FDE_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A3D9341E-5D82-4631-9258-F41E16E99D7F_at_nsi.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OSX undefined symbols when compiling hello world in cpp but not in c<br>
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-03 22:05:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5312.php">trnja001_at_[hidden]: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
<li><strong>Previous message:</strong> <a href="5310.php">Jason Fleischer: "[OMPI users] OSX undefined symbols when compiling hello world in cpp but not in c"</a>
<li><strong>In reply to:</strong> <a href="5310.php">Jason Fleischer: "[OMPI users] OSX undefined symbols when compiling hello world in cpp but not in c"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Since HFS+ is not case sensitive, mpicc and mpiCC are the same file.   
<br>
So on OS X, you need to use mpic++ to compile C++ code.  But it's  
<br>
worse than that, because the GNU compiler is smart enough to use the C+ 
<br>
+ parser / compiler instead of the C one, so you don't see the error  
<br>
until link time.
<br>
<p>Long story short, try mpic++ instead of mpiCC and it should all work.
<br>
<p>Brian
<br>
<p>On Apr 3, 2008, at 8:00 PM, Jason Fleischer wrote:
<br>
<span class="quotelev1">&gt; On MacOS 10.5.2 standard installation with Open MPI 1.2.3 the
</span><br>
<span class="quotelev1">&gt; following hello world program in normal C compiles just fine and runs
</span><br>
<span class="quotelev1">&gt; correctly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But if I rename the file to mpihello.cpp and I get many undefined
</span><br>
<span class="quotelev1">&gt; symbols at link time!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This error cropped up while I was working with a much more complex mpi
</span><br>
<span class="quotelev1">&gt; program, but it occurs even with this simplest of programs.  The error
</span><br>
<span class="quotelev1">&gt; also occurs if I change the hello world program to use the C++
</span><br>
<span class="quotelev1">&gt; function forms, such as MPI::Init() and MPI::COMM_WORLD.Get_rank().
</span><br>
<span class="quotelev1">&gt; Probably I'm just being embarrassingly stupid.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpihello.cpp:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main ( int argc, char *argv[] )
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   int rank, size;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_size (MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;   printf( &quot;Hello world from process %d of %d\n&quot;, rank, size );
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; compiler output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mpiCC -o mpihello mpihello.cpp
</span><br>
<span class="quotelev1">&gt; Undefined symbols:
</span><br>
<span class="quotelev1">&gt;   &quot;MPI::Datatype::Free()&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       vtable for MPI::Datatypein ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;   &quot;MPI::Win::Set_errhandler(MPI::Errhandler const&amp;)&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       vtable for MPI::Winin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;   &quot;___gxx_personality_v0&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       ___gxx_personality_v0$non_lazy_ptr in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;   &quot;MPI::InitializeIntercepts()&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       MPI::Real_init()     in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;   &quot;operator new[](unsigned long)&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       MPI::Datatype::Get_contents(int, int, int, int*, int*,
</span><br>
<span class="quotelev1">&gt; MPI::Datatype*) constin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Comm::Alltoallw(void const*, int const*, int const*,
</span><br>
<span class="quotelev1">&gt; MPI::Datatype const*, void*, int const*, int const*, MPI::Datatype
</span><br>
<span class="quotelev1">&gt; const*) constin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Intracomm::Create_cart(int, int const*, bool const*, bool)
</span><br>
<span class="quotelev1">&gt; constin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Intracomm::convert_info_to_mpi_info(int, MPI::Info
</span><br>
<span class="quotelev1">&gt; const*)in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Cartcomm::Get_topo(int, int*, bool*, int*) constin
</span><br>
<span class="quotelev1">&gt; ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Cartcomm::Sub(bool const*)in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Cartcomm::Map(int, int const*, bool const*) constin
</span><br>
<span class="quotelev1">&gt; ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;   &quot;___cxa_pure_virtual&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       vtable for MPI::Commin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;   &quot;operator new(unsigned long)&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       MPI::Intracomm::Clone() constin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Cartcomm::Clone() constin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Graphcomm::Clone() constin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Intercomm::Clone() constin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;   &quot;std::ios_base::Init::Init()&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       __static_initialization_and_destruction_0(int, int)in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;   &quot;operator delete[](void*)&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       MPI::Datatype::Get_contents(int, int, int, int*, int*,
</span><br>
<span class="quotelev1">&gt; MPI::Datatype*) constin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Comm::Alltoallw(void const*, int const*, int const*,
</span><br>
<span class="quotelev1">&gt; MPI::Datatype const*, void*, int const*, int const*, MPI::Datatype
</span><br>
<span class="quotelev1">&gt; const*) constin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Intracomm::Create_cart(int, int const*, bool const*, bool)
</span><br>
<span class="quotelev1">&gt; constin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Intracomm::Spawn_multiple(int, char const**, char
</span><br>
<span class="quotelev1">&gt; const***, int const*, MPI::Info const*, int)in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Intracomm::Spawn_multiple(int, char const**, char
</span><br>
<span class="quotelev1">&gt; const***, int const*, MPI::Info const*, int, int*)in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Cartcomm::Get_topo(int, int*, bool*, int*) constin
</span><br>
<span class="quotelev1">&gt; ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Cartcomm::Sub(bool const*)in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Cartcomm::Map(int, int const*, bool const*) constin
</span><br>
<span class="quotelev1">&gt; ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;   &quot;std::ios_base::Init::~Init()&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       ___tcf_0 in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;   &quot;_ompi_mpi_cxx_op_intercept&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       _ompi_mpi_cxx_op_intercept$non_lazy_ptr in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;   &quot;MPI::Comm::Comm()&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       MPI::Intracomm::Intracomm()in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Intracomm::Intracomm(ompi_communicator_t*)in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;   &quot;vtable for __cxxabiv1::__si_class_type_info&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       typeinfo for MPI::Prequestin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       typeinfo for MPI::Grequestin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       typeinfo for MPI::Commin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       typeinfo for MPI::Intracommin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       typeinfo for MPI::Cartcommin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       typeinfo for MPI::Graphcommin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       typeinfo for MPI::Intercommin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;   &quot;vtable for __cxxabiv1::__class_type_info&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       typeinfo for MPI::Datatypein ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       typeinfo for MPI::Opin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       typeinfo for MPI::Statusin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       typeinfo for MPI::Requestin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       typeinfo for MPI::Groupin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       typeinfo for MPI::Comm_Nullin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       typeinfo for MPI::Winin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       typeinfo for MPI::Errhandlerin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       typeinfo for MPI::Infoin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;   &quot;MPI::Comm::Set_errhandler(MPI::Errhandler const&amp;)&quot;, referenced  
</span><br>
<span class="quotelev1">&gt; from:
</span><br>
<span class="quotelev1">&gt;       vtable for MPI::Commin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       vtable for MPI::Intracommin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       vtable for MPI::Cartcommin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       vtable for MPI::Graphcommin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       vtable for MPI::Intercommin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;   &quot;MPI::Win::Free()&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       vtable for MPI::Winin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;   &quot;operator delete(void*)&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       MPI::Datatype::~Datatype()in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Datatype::~Datatype()in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Status::~Status()in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Status::~Status()in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Request::~Request()in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Request::~Request()in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Request::~Request()in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Prequest::~Prequest()in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Prequest::~Prequest()in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Grequest::~Grequest()in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Grequest::~Grequest()in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Group::~Group()in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Group::~Group()in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Comm_Null::~Comm_Null()in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Comm_Null::~Comm_Null()in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Comm_Null::~Comm_Null()in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Win::~Win() in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Win::~Win() in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Errhandler::~Errhandler()in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Errhandler::~Errhandler()in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Comm::~Comm()in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Comm::~Comm()in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Comm::~Comm()in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Intracomm::~Intracomm()in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Intracomm::~Intracomm()in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Intracomm::~Intracomm()in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Info::~Info()in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Info::~Info()in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Intercomm::~Intercomm()in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Intercomm::~Intercomm()in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Intracomm::Clone() constin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Cartcomm::~Cartcomm()in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Cartcomm::~Cartcomm()in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Graphcomm::~Graphcomm()in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Graphcomm::~Graphcomm()in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Cartcomm::Clone() constin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Graphcomm::Clone() constin ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Op::~Op()  in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;       MPI::Op::~Op()  in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;   &quot;MPI::FinalizeIntercepts()&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       MPI::Finalize()     in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt;   &quot;MPI::COMM_WORLD&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       __ZN3MPI10COMM_WORLDE$non_lazy_ptr in ccQqJJlF.o
</span><br>
<span class="quotelev1">&gt; ld: symbol(s) not found
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5312.php">trnja001_at_[hidden]: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
<li><strong>Previous message:</strong> <a href="5310.php">Jason Fleischer: "[OMPI users] OSX undefined symbols when compiling hello world in cpp but not in c"</a>
<li><strong>In reply to:</strong> <a href="5310.php">Jason Fleischer: "[OMPI users] OSX undefined symbols when compiling hello world in cpp but not in c"</a>
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
