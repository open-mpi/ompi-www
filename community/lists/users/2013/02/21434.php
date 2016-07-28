<?
$subject_val = "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 11:00:07 2013" -->
<!-- isoreceived="20130221160007" -->
<!-- sent="Thu, 21 Feb 2013 08:59:41 -0700" -->
<!-- isosent="20130221155941" -->
<!-- name="Damien Hocking" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows C++ Linker Error &amp;quot;unresolved symbol&amp;quot; for MPI::Datatype::Free" -->
<!-- id="5126446D.9060109_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="893B119594205F41AB47AE4702E711A759A53379_at_UM-MBX-T02.um.umsystem.edu" -->
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
<strong>From:</strong> Damien Hocking (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-21 10:59:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21435.php">Hartman, Todd W.: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>Previous message:</strong> <a href="21433.php">Pradeep Jha: "Re: [OMPI users] MPI send recv confusion"</a>
<li><strong>In reply to:</strong> <a href="21429.php">Hartman, Todd W.: "[OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21435.php">Hartman, Todd W.: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>Reply:</strong> <a href="21435.php">Hartman, Todd W.: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>Reply:</strong> <a href="21438.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well this is interesting.  The linker can't find that because 
<br>
MPI::Datatype::Free isn't implemented on the Windows build (in 
<br>
datatype_inln.h).  It's declared in datatype.h though.  It's not there 
<br>
in the Linux version either, so I don't know where the Linux build is 
<br>
getting that symbol from, that link should fail too.  Is the C++ version 
<br>
of OpenMPI actually broken overall?
<br>
<p>The Windows support is another issue.  I think it's semi-officially 
<br>
deprecated.
<br>
<p>Damien
<br>
<p>On 20/02/2013 11:20 PM, Hartman, Todd W. wrote:
<br>
<span class="quotelev1">&gt; I'm trying to build a simple Open MPI application for Windows. I've installed the binaries for OpenMPI-v1.6.2 (64-bit). I've also installed Visual Studio 2010. The machine(s) are Windows 7 x64.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I attempt to compile a simple program that uses MPI::Send(), I get a linker error saying that it cannot resolve MPI::Datatype::Free().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's a minimal example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; int main( int argc, char** argv ) {
</span><br>
<span class="quotelev1">&gt;      MPI::Init(argc,argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      // Meant to run with 2 processes.
</span><br>
<span class="quotelev1">&gt;      if (MPI::COMM_WORLD.Get_rank() == 0) {
</span><br>
<span class="quotelev1">&gt;          int data;
</span><br>
<span class="quotelev1">&gt;          MPI::COMM_WORLD.Recv(&amp;data,1,MPI_INT,1,0);
</span><br>
<span class="quotelev1">&gt;          std::cout &lt;&lt; &quot;received &quot; &lt;&lt; data &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt;          int data = 0xdead;
</span><br>
<span class="quotelev1">&gt;          std::cout &lt;&lt; &quot;sending &quot; &lt;&lt; data &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;          MPI::COMM_WORLD.Send(&amp;data,1,MPI_INT,0,0);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      MPI::Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I compile it:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpic++ send_compile.cpp -o send_compile.exe -DOMPI_IMPORTS -DOPAL_IMPORTS -DORTE_IMPORTS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Microsoft (R) C/C++ Optimizing Compiler Version 16.00.40219.01 for x64
</span><br>
<span class="quotelev1">&gt; Copyright (C) Microsoft Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cl : Command line warning D9035 : option 'o' has been deprecated and will be removed in a future release
</span><br>
<span class="quotelev1">&gt; send_compile.cpp
</span><br>
<span class="quotelev1">&gt; Microsoft (R) Incremental Linker Version 10.00.40219.01
</span><br>
<span class="quotelev1">&gt; Copyright (C) Microsoft Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /out:send_compile.exe
</span><br>
<span class="quotelev1">&gt; /out:send_compile.exe
</span><br>
<span class="quotelev1">&gt; &quot;/LIBPATH:C:\Program Files (x86)\OpenMPI_v1.6.2-x64/lib&quot;
</span><br>
<span class="quotelev1">&gt; libmpi_cxx.lib
</span><br>
<span class="quotelev1">&gt; libmpi.lib
</span><br>
<span class="quotelev1">&gt; libopen-pal.lib
</span><br>
<span class="quotelev1">&gt; libopen-rte.lib
</span><br>
<span class="quotelev1">&gt; advapi32.lib
</span><br>
<span class="quotelev1">&gt; Ws2_32.lib
</span><br>
<span class="quotelev1">&gt; shlwapi.lib
</span><br>
<span class="quotelev1">&gt; send_compile.obj
</span><br>
<span class="quotelev1">&gt; send_compile.obj : error LNK2001: unresolved external symbol &quot;public: virtual void __cdecl MPI::Datatype::Free(void)&quot; (?Free_at_Datatype@MPI@@UEAAXXZ)
</span><br>
<span class="quotelev1">&gt; send_compile.exe : fatal error LNK1120: 1 unresolved externals
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This program compiles and runs without complaint on an Ubuntu machine around here. I don't know what the problem is. Open MPI's documentation didn't say anything about adding the CPP defines (OMPI_IMPORTS, OPAL_IMPORTS, ORTE_IMPORTS) whose absence were causing other linker errors similar to this. Google found some items in the mailing list archive. I cannot find any information about this particular problem, though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried using dumpbin to get symbols that were in the .lib files installed by MPI, but didn't find any reference to that function name. I didn't find any answers looking in the MPI headers, either.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a similar program in C that compiles and runs fine on this Windows machine. I don't know what I'm doing wrong with C++. Can someone point me in the right direction? Is there some documentation regarding getting things to work on Windows? The release notes don't address this problem, and I can't find any other documentation related to what might be different from *nix to Windows (WRT to Open MPI).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; todd.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P.S. This is copied from a StackOverflow question I posted (<a href="http://stackoverflow.com/questions/14988099/open-mpi-c-link-error-mpidatatypefree-on-windows">http://stackoverflow.com/questions/14988099/open-mpi-c-link-error-mpidatatypefree-on-windows</a>). Forgive the cross-posting.
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
<li><strong>Next message:</strong> <a href="21435.php">Hartman, Todd W.: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>Previous message:</strong> <a href="21433.php">Pradeep Jha: "Re: [OMPI users] MPI send recv confusion"</a>
<li><strong>In reply to:</strong> <a href="21429.php">Hartman, Todd W.: "[OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21435.php">Hartman, Todd W.: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>Reply:</strong> <a href="21435.php">Hartman, Todd W.: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>Reply:</strong> <a href="21438.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
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
