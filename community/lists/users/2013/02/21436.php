<?
$subject_val = "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 12:26:51 2013" -->
<!-- isoreceived="20130221172651" -->
<!-- sent="Thu, 21 Feb 2013 09:26:43 -0800" -->
<!-- isosent="20130221172643" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows C++ Linker Error &amp;quot;unresolved symbol&amp;quot; for MPI::Datatype::Free" -->
<!-- id="3BF677A6-40D9-4F9F-BDAF-359D7A731597_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="893B119594205F41AB47AE4702E711A759A54A72_at_UM-MBX-T02.um.umsystem.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-21 12:26:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21437.php">damien_at_[hidden]: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>Previous message:</strong> <a href="21435.php">Hartman, Todd W.: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>In reply to:</strong> <a href="21435.php">Hartman, Todd W.: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21437.php">damien_at_[hidden]: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 21, 2013, at 9:13 AM, &quot;Hartman, Todd W.&quot; &lt;thartman_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Gee, that's too bad. I assumed that the 1.6.4 Windows build was delayed
</span><br>
<span class="quotelev1">&gt; because it was a lower priority. Do you suppose this position was taken
</span><br>
<span class="quotelev1">&gt; because there are no developers wishing to keep it alive? 
</span><br>
<p>Afraid that is true. However, the cygwin folks have provided a cygwin package, so there is at least an option that work on Windows.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Damien Hocking
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, February 21, 2013 10:00 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for
</span><br>
<span class="quotelev1">&gt; MPI::Datatype::Free
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well this is interesting.  The linker can't find that because
</span><br>
<span class="quotelev1">&gt; MPI::Datatype::Free isn't implemented on the Windows build (in
</span><br>
<span class="quotelev1">&gt; datatype_inln.h).  It's declared in datatype.h though.  It's not there in
</span><br>
<span class="quotelev1">&gt; the Linux version either, so I don't know where the Linux build is getting
</span><br>
<span class="quotelev1">&gt; that symbol from, that link should fail too.  Is the C++ version of OpenMPI
</span><br>
<span class="quotelev1">&gt; actually broken overall?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The Windows support is another issue.  I think it's semi-officially
</span><br>
<span class="quotelev1">&gt; deprecated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 20/02/2013 11:20 PM, Hartman, Todd W. wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to build a simple Open MPI application for Windows. I've
</span><br>
<span class="quotelev1">&gt; installed the binaries for OpenMPI-v1.6.2 (64-bit). I've also installed
</span><br>
<span class="quotelev1">&gt; Visual Studio 2010. The machine(s) are Windows 7 x64.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I attempt to compile a simple program that uses MPI::Send(), I get a
</span><br>
<span class="quotelev1">&gt; linker error saying that it cannot resolve MPI::Datatype::Free().
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here's a minimal example:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main( int argc, char** argv ) {
</span><br>
<span class="quotelev2">&gt;&gt;     MPI::Init(argc,argv);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     // Meant to run with 2 processes.
</span><br>
<span class="quotelev2">&gt;&gt;     if (MPI::COMM_WORLD.Get_rank() == 0) {
</span><br>
<span class="quotelev2">&gt;&gt;         int data;
</span><br>
<span class="quotelev2">&gt;&gt;         MPI::COMM_WORLD.Recv(&amp;data,1,MPI_INT,1,0);
</span><br>
<span class="quotelev2">&gt;&gt;         std::cout &lt;&lt; &quot;received &quot; &lt;&lt; data &lt;&lt; std::endl;
</span><br>
<span class="quotelev2">&gt;&gt;     } else {
</span><br>
<span class="quotelev2">&gt;&gt;         int data = 0xdead;
</span><br>
<span class="quotelev2">&gt;&gt;         std::cout &lt;&lt; &quot;sending &quot; &lt;&lt; data &lt;&lt; std::endl;
</span><br>
<span class="quotelev2">&gt;&gt;         MPI::COMM_WORLD.Send(&amp;data,1,MPI_INT,0,0);
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     MPI::Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I compile it:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpic++ send_compile.cpp -o send_compile.exe -DOMPI_IMPORTS 
</span><br>
<span class="quotelev2">&gt;&gt; mpic++ -DOPAL_IMPORTS -DORTE_IMPORTS
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Microsoft (R) C/C++ Optimizing Compiler Version 16.00.40219.01 for x64 
</span><br>
<span class="quotelev2">&gt;&gt; Copyright (C) Microsoft Corporation.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; cl : Command line warning D9035 : option 'o' has been deprecated and 
</span><br>
<span class="quotelev2">&gt;&gt; will be removed in a future release send_compile.cpp Microsoft (R) 
</span><br>
<span class="quotelev2">&gt;&gt; Incremental Linker Version 10.00.40219.01 Copyright (C) Microsoft 
</span><br>
<span class="quotelev2">&gt;&gt; Corporation.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /out:send_compile.exe
</span><br>
<span class="quotelev2">&gt;&gt; /out:send_compile.exe
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/LIBPATH:C:\Program Files (x86)\OpenMPI_v1.6.2-x64/lib&quot;
</span><br>
<span class="quotelev2">&gt;&gt; libmpi_cxx.lib
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.lib
</span><br>
<span class="quotelev2">&gt;&gt; libopen-pal.lib
</span><br>
<span class="quotelev2">&gt;&gt; libopen-rte.lib
</span><br>
<span class="quotelev2">&gt;&gt; advapi32.lib
</span><br>
<span class="quotelev2">&gt;&gt; Ws2_32.lib
</span><br>
<span class="quotelev2">&gt;&gt; shlwapi.lib
</span><br>
<span class="quotelev2">&gt;&gt; send_compile.obj
</span><br>
<span class="quotelev2">&gt;&gt; send_compile.obj : error LNK2001: unresolved external symbol &quot;public: 
</span><br>
<span class="quotelev2">&gt;&gt; virtual void __cdecl MPI::Datatype::Free(void)&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; (?Free_at_Datatype@MPI@@UEAAXXZ) send_compile.exe : fatal error LNK1120: 
</span><br>
<span class="quotelev2">&gt;&gt; 1 unresolved externals
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This program compiles and runs without complaint on an Ubuntu machine
</span><br>
<span class="quotelev1">&gt; around here. I don't know what the problem is. Open MPI's documentation
</span><br>
<span class="quotelev1">&gt; didn't say anything about adding the CPP defines (OMPI_IMPORTS,
</span><br>
<span class="quotelev1">&gt; OPAL_IMPORTS, ORTE_IMPORTS) whose absence were causing other linker errors
</span><br>
<span class="quotelev1">&gt; similar to this. Google found some items in the mailing list archive. I
</span><br>
<span class="quotelev1">&gt; cannot find any information about this particular problem, though.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I tried using dumpbin to get symbols that were in the .lib files installed
</span><br>
<span class="quotelev1">&gt; by MPI, but didn't find any reference to that function name. I didn't find
</span><br>
<span class="quotelev1">&gt; any answers looking in the MPI headers, either.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have a similar program in C that compiles and runs fine on this Windows
</span><br>
<span class="quotelev1">&gt; machine. I don't know what I'm doing wrong with C++. Can someone point me in
</span><br>
<span class="quotelev1">&gt; the right direction? Is there some documentation regarding getting things to
</span><br>
<span class="quotelev1">&gt; work on Windows? The release notes don't address this problem, and I can't
</span><br>
<span class="quotelev1">&gt; find any other documentation related to what might be different from *nix to
</span><br>
<span class="quotelev1">&gt; Windows (WRT to Open MPI).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; todd.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; P.S. This is copied from a StackOverflow question I posted
</span><br>
<span class="quotelev1">&gt; (<a href="http://stackoverflow.com/questions/14988099/open-mpi-c-link-error-mpidataty">http://stackoverflow.com/questions/14988099/open-mpi-c-link-error-mpidataty</a>
</span><br>
<span class="quotelev1">&gt; pefree-on-windows). Forgive the cross-posting.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21437.php">damien_at_[hidden]: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>Previous message:</strong> <a href="21435.php">Hartman, Todd W.: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>In reply to:</strong> <a href="21435.php">Hartman, Todd W.: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21437.php">damien_at_[hidden]: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
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
