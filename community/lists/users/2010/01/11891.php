<?
$subject_val = "Re: [OMPI users] Windows CMake build problems ...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 26 06:55:38 2010" -->
<!-- isoreceived="20100126115538" -->
<!-- sent="Tue, 26 Jan 2010 04:55:32 -0700" -->
<!-- isosent="20100126115532" -->
<!-- name="cjohnson_at_[hidden]" -->
<!-- email="cjohnson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows CMake build problems ..." -->
<!-- id="20100126045531.0430d53b3e916c69cc97ff130928da34.e64c6bcaec.wbe_at_email02.secureserver.net" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] Windows CMake build problems ..." -->
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
<strong>From:</strong> <a href="mailto:cjohnson_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Windows%20CMake%20build%20problems%20..."><em>cjohnson_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-01-26 06:55:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11892.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ..."</a>
<li><strong>Previous message:</strong> <a href="11890.php">Jed Brown: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>Maybe in reply to:</strong> <a href="11746.php">cjohnson_at_[hidden]: "[OMPI users] Windows CMake build problems ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11892.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ..."</a>
<li><strong>Reply:</strong> <a href="11892.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<body><span style="font-family:Verdana; color:#000000; font-size:10pt;"><div>Was able to build and run all the c examples from the tutorial at &lt;<a href="http://ci-tutor.ncsa.illinois.edu/index.php&gt;">http://ci-tutor.ncsa.illinois.edu/index.php&gt;</a></div><div><br></div><div>However, none of the extended or simple c++ examples work, they all die with the same link error.</div><div><br></div><div>For instance: mpi_gather.cc</div><div>______________________________________________<br></div><div><br></div><div>#include &lt;stdio.h&gt;<br>#include &lt;mpi.h&gt;<br>#include &lt;math.h&gt;<br><br>using namespace MPI;<br><br>int main(int argc, char* argv[]) {<br>&nbsp; int rank;<br>&nbsp; int recvcount,sendcount;<br>&nbsp; int reap[8];<br>&nbsp; int sow[2];<br><br>&nbsp; Init(argc,argv);<br>&nbsp; rank=COMM_WORLD.Get_rank();<br>&nbsp; sendcount=2;<br>&nbsp; sow[0]=rank; sow[1]=-rank;<br>&nbsp; if(rank==1) {<br>&nbsp;&nbsp;&nbsp; recvcount=2;<br>&nbsp; }<br>&nbsp; COMM_WORLD.Gather(sow,sendcount,INT,reap,recvcount,INT,1);<br>&nbsp; if(rank==1) {<br>&nbsp;&nbsp;&nbsp; printf("P:%d",rank);<br>&nbsp;&nbsp;&nbsp; for(int i=0;i&lt;8;++i) {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf(" %2d ",reap[i]);<br>&nbsp;&nbsp;&nbsp; }<br>&nbsp;&nbsp;&nbsp; printf("\n");<br>&nbsp; }<br>&nbsp; Finalize();<br>}<br></div><div>______________________________________<br></div><div><br></div><div>Here's the compile output from mpic++:</div><div><br></div><div>C:\prog\mon\examples&gt;mpic++ mpi_gather.cc<br>Microsoft (R) 32-bit C/C++ Optimizing Compiler Version 14.00.50727.762 for 80x86<br>Copyright (C) Microsoft Corporation.&nbsp; All rights reserved.<br><br>mpi_gather.cc<br>Microsoft (R) Incremental Linker Version 8.00.50727.762<br>Copyright (C) Microsoft Corporation.&nbsp; All rights reserved.<br><br>/out:mpi_gather.exe<br>"/LIBPATH:C:\Program Files\OpenMPI_v1.4-win32\lib"<br>libmpid.lib<br>libopen-pald.lib<br>libopen-rted.lib<br>libmpi_cxxd.lib<br>libmpid.lib<br>libopen-pald.lib<br>libopen-rted.lib<br>advapi32.lib<br>Ws2_32.lib<br>shlwapi.lib<br>mpi_gather.obj<br>mpi_gather.obj : error LNK2019: unresolved external symbol "void __cdecl MPI::InitializeIntercepts(void)" (?InitializeIntercepts@MPI@@YAXXZ)<br>referenced in function "void __cdecl MPI::Real_init(void)" (?Real_init@MPI@@YAXXZ)mpi_gather.exe : fatal error LNK1120: 1 unresolved externals<br></div><div><br></div><div>Every c++ dies with this link error.</div><div><br></div><div>Charlie ...<br></div>
<blockquote id="replyBlockquote" style="border-left: 2px solid blue; margin-left: 8px; padding-left: 8px; font-size: 10pt; color: black; font-family: verdana;" mce_style="border-left: 2px solid blue; margin-left: 8px; padding-left: 8px; font-size: 10pt; color: black; font-family: verdana;">
<div   >
-------- Original Message --------<br>
Subject: RE: [OMPI users] Windows CMake build problems ...<br>
From: cjohnson@valverdecomputing.com<br>
Date: Tue, January 26, 2010 2:10 am<br>
To: fan@hlrs.de<br>
Cc: "Open MPI Users" &lt;users@open-mpi.org&gt;<br>
<br>
<span style="font-family: Verdana; color: rgb(0, 0, 0); font-size: 10pt;" mce_style="font-family: Verdana; color: #000000; font-size: 10pt;"><div>Yeah, that was it. Thanks.</div><div><br></div><div>Charlie ...<br></div> <blockquote id="replyBlockquote" style="border-left: 2px solid blue; margin-left: 8px; padding-left: 8px; font-size: 10pt; color: black; font-family: verdana;" mce_style="border-left: 2px solid blue; margin-left: 8px; padding-left: 8px; font-size: 10pt; color: black; font-family: verdana;"> <div> -------- Original Message --------<br> Subject: Re: [OMPI users] Windows CMake build problems ...<br> From: Shiqing Fan &lt;fan@hlrs.de&gt;<br> Date: Tue, January 26, 2010 1:57 am<br> To: cjohnson@valverdecomputing.com<br> Cc: Open MPI Users &lt;users@open-mpi.org&gt;<br> <br> <br> Hi Charlie ,<br> <br> Did you run the mpicc command in the Visual Studio Command Prompt? Is it <br> possible for you to call cl.exe from there? Because it sounds like the <br> VS compiler was not found.<br> <br> <br> Regards,<br> Shiqing<br> </div> </blockquote></span> 
</div>
</blockquote></span></body>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11892.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ..."</a>
<li><strong>Previous message:</strong> <a href="11890.php">Jed Brown: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>Maybe in reply to:</strong> <a href="11746.php">cjohnson_at_[hidden]: "[OMPI users] Windows CMake build problems ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11892.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ..."</a>
<li><strong>Reply:</strong> <a href="11892.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ..."</a>
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
