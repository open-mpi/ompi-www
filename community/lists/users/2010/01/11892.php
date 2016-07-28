<?
$subject_val = "Re: [OMPI users] Windows CMake build problems ...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 26 09:48:53 2010" -->
<!-- isoreceived="20100126144853" -->
<!-- sent="Tue, 26 Jan 2010 15:48:52 +0100" -->
<!-- isosent="20100126144852" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows CMake build problems ..." -->
<!-- id="4B5F00D4.4090507_at_hlrs.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20100126045531.0430d53b3e916c69cc97ff130928da34.e64c6bcaec.wbe_at_email02.secureserver.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Windows CMake build problems ...<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-26 09:48:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11893.php">Jeff Squyres: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<li><strong>Previous message:</strong> <a href="11891.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ..."</a>
<li><strong>In reply to:</strong> <a href="11891.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Charlie,
<br>
<p>There is definitely something wrong in the cxx library for Windows, but 
<br>
it's still not very clear to me yet. We'll try to find the reason and 
<br>
fix it.
<br>
<p>Thanks for reporting it.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p>cjohnson_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Was able to build and run all the c examples from the tutorial at 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://ci-tutor.ncsa.illinois.edu/index.php">http://ci-tutor.ncsa.illinois.edu/index.php</a>&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://ci-tutor.ncsa.illinois.edu/index.php%3E">http://ci-tutor.ncsa.illinois.edu/index.php%3E</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, none of the extended or simple c++ examples work, they all 
</span><br>
<span class="quotelev1">&gt; die with the same link error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For instance: mpi_gather.cc
</span><br>
<span class="quotelev1">&gt; ______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;math.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; using namespace MPI;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[]) {
</span><br>
<span class="quotelev1">&gt;   int rank;
</span><br>
<span class="quotelev1">&gt;   int recvcount,sendcount;
</span><br>
<span class="quotelev1">&gt;   int reap[8];
</span><br>
<span class="quotelev1">&gt;   int sow[2];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Init(argc,argv);
</span><br>
<span class="quotelev1">&gt;   rank=COMM_WORLD.Get_rank();
</span><br>
<span class="quotelev1">&gt;   sendcount=2;
</span><br>
<span class="quotelev1">&gt;   sow[0]=rank; sow[1]=-rank;
</span><br>
<span class="quotelev1">&gt;   if(rank==1) {
</span><br>
<span class="quotelev1">&gt;     recvcount=2;
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   COMM_WORLD.Gather(sow,sendcount,INT,reap,recvcount,INT,1);
</span><br>
<span class="quotelev1">&gt;   if(rank==1) {
</span><br>
<span class="quotelev1">&gt;     printf(&quot;P:%d&quot;,rank);
</span><br>
<span class="quotelev1">&gt;     for(int i=0;i&lt;8;++i) {
</span><br>
<span class="quotelev1">&gt;       printf(&quot; %2d &quot;,reap[i]);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     printf(&quot;\n&quot;);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; ______________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the compile output from mpic++:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C:\prog\mon\examples&gt;mpic++ mpi_gather.cc
</span><br>
<span class="quotelev1">&gt; Microsoft (R) 32-bit C/C++ Optimizing Compiler Version 14.00.50727.762 
</span><br>
<span class="quotelev1">&gt; for 80x86
</span><br>
<span class="quotelev1">&gt; Copyright (C) Microsoft Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpi_gather.cc
</span><br>
<span class="quotelev1">&gt; Microsoft (R) Incremental Linker Version 8.00.50727.762
</span><br>
<span class="quotelev1">&gt; Copyright (C) Microsoft Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /out:mpi_gather.exe
</span><br>
<span class="quotelev1">&gt; &quot;/LIBPATH:C:\Program Files\OpenMPI_v1.4-win32\lib&quot;
</span><br>
<span class="quotelev1">&gt; libmpid.lib
</span><br>
<span class="quotelev1">&gt; libopen-pald.lib
</span><br>
<span class="quotelev1">&gt; libopen-rted.lib
</span><br>
<span class="quotelev1">&gt; libmpi_cxxd.lib
</span><br>
<span class="quotelev1">&gt; libmpid.lib
</span><br>
<span class="quotelev1">&gt; libopen-pald.lib
</span><br>
<span class="quotelev1">&gt; libopen-rted.lib
</span><br>
<span class="quotelev1">&gt; advapi32.lib
</span><br>
<span class="quotelev1">&gt; Ws2_32.lib
</span><br>
<span class="quotelev1">&gt; shlwapi.lib
</span><br>
<span class="quotelev1">&gt; mpi_gather.obj
</span><br>
<span class="quotelev1">&gt; mpi_gather.obj : error LNK2019: unresolved external symbol &quot;void 
</span><br>
<span class="quotelev1">&gt; __cdecl MPI::InitializeIntercepts(void)&quot; 
</span><br>
<span class="quotelev1">&gt; (?InitializeIntercepts_at_MPI@@YAXXZ)
</span><br>
<span class="quotelev1">&gt; referenced in function &quot;void __cdecl MPI::Real_init(void)&quot; 
</span><br>
<span class="quotelev1">&gt; (?Real_init_at_MPI@@YAXXZ)mpi_gather.exe : fatal error LNK1120: 1 
</span><br>
<span class="quotelev1">&gt; unresolved externals
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Every c++ dies with this link error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Charlie ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -------- Original Message --------
</span><br>
<span class="quotelev1">&gt;     Subject: RE: [OMPI users] Windows CMake build problems ...
</span><br>
<span class="quotelev1">&gt;     From: cjohnson_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     Date: Tue, January 26, 2010 2:10 am
</span><br>
<span class="quotelev1">&gt;     To: fan_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     Cc: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Yeah, that was it. Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Charlie ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         -------- Original Message --------
</span><br>
<span class="quotelev1">&gt;         Subject: Re: [OMPI users] Windows CMake build problems ...
</span><br>
<span class="quotelev1">&gt;         From: Shiqing Fan &lt;fan_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         Date: Tue, January 26, 2010 1:57 am
</span><br>
<span class="quotelev1">&gt;         To: cjohnson_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         Cc: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Hi Charlie ,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Did you run the mpicc command in the Visual Studio Command
</span><br>
<span class="quotelev1">&gt;         Prompt? Is it
</span><br>
<span class="quotelev1">&gt;         possible for you to call cl.exe from there? Because it sounds
</span><br>
<span class="quotelev1">&gt;         like the
</span><br>
<span class="quotelev1">&gt;         VS compiler was not found.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Regards,
</span><br>
<span class="quotelev1">&gt;         Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
  Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]    
70569 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11893.php">Jeff Squyres: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<li><strong>Previous message:</strong> <a href="11891.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ..."</a>
<li><strong>In reply to:</strong> <a href="11891.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ..."</a>
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
