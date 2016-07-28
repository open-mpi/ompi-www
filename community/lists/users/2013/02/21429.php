<?
$subject_val = "[OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 01:20:45 2013" -->
<!-- isoreceived="20130221062045" -->
<!-- sent="Thu, 21 Feb 2013 06:20:39 +0000" -->
<!-- isosent="20130221062039" -->
<!-- name="Hartman, Todd W." -->
<!-- email="thartman_at_[hidden]" -->
<!-- subject="[OMPI users] Windows C++ Linker Error &amp;quot;unresolved symbol&amp;quot; for MPI::Datatype::Free" -->
<!-- id="893B119594205F41AB47AE4702E711A759A53379_at_UM-MBX-T02.um.umsystem.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free<br>
<strong>From:</strong> Hartman, Todd W. (<em>thartman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-21 01:20:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21430.php">Stefan Friedel: "[OMPI users] openmpi, 1.6.3, mlx4_core, log_num_mtt and Debian/vanilla kernel"</a>
<li><strong>Previous message:</strong> <a href="21428.php">Gus Correa: "Re: [OMPI users] MPI send recv confusion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21434.php">Damien Hocking: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>Reply:</strong> <a href="21434.php">Damien Hocking: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to build a simple Open MPI application for Windows. I've installed the binaries for OpenMPI-v1.6.2 (64-bit). I've also installed Visual Studio 2010. The machine(s) are Windows 7 x64.
<br>
<p><p>When I attempt to compile a simple program that uses MPI::Send(), I get a linker error saying that it cannot resolve MPI::Datatype::Free().
<br>
<p>Here's a minimal example:
<br>
<p>---------------------------------------------------
<br>
#include &lt;mpi.h&gt;
<br>
#include &lt;iostream&gt;
<br>
int main( int argc, char** argv ) {
<br>
&#160; &#160; MPI::Init(argc,argv);
<br>
<p>&#160; &#160; // Meant to run with 2 processes.
<br>
&#160; &#160; if (MPI::COMM_WORLD.Get_rank() == 0) {
<br>
&#160; &#160; &#160; &#160; int data;
<br>
&#160; &#160; &#160; &#160; MPI::COMM_WORLD.Recv(&amp;data,1,MPI_INT,1,0);
<br>
&#160; &#160; &#160; &#160; std::cout &lt;&lt; &quot;received &quot; &lt;&lt; data &lt;&lt; std::endl;
<br>
&#160; &#160; } else {
<br>
&#160; &#160; &#160; &#160; int data = 0xdead;
<br>
&#160; &#160; &#160; &#160; std::cout &lt;&lt; &quot;sending &quot; &lt;&lt; data &lt;&lt; std::endl;
<br>
&#160; &#160; &#160; &#160; MPI::COMM_WORLD.Send(&amp;data,1,MPI_INT,0,0);
<br>
&#160; &#160; }
<br>
<p>&#160; &#160; MPI::Finalize();
<br>
}
<br>
---------------------------------------------------
<br>
<p>When I compile it:
<br>
<p>mpic++ send_compile.cpp -o send_compile.exe -DOMPI_IMPORTS -DOPAL_IMPORTS -DORTE_IMPORTS&#160;
<br>
<p><p>---------------------------------------------------
<br>
Microsoft (R) C/C++ Optimizing Compiler Version 16.00.40219.01 for x64
<br>
Copyright (C) Microsoft Corporation. &#160;All rights reserved.
<br>
<p><p><p><p>cl : Command line warning D9035 : option 'o' has been deprecated and will be removed in a future release
<br>
send_compile.cpp
<br>
Microsoft (R) Incremental Linker Version 10.00.40219.01
<br>
Copyright (C) Microsoft Corporation. &#160;All rights reserved.
<br>
<p>/out:send_compile.exe&#160;
<br>
/out:send_compile.exe&#160;
<br>
&quot;/LIBPATH:C:\Program Files (x86)\OpenMPI_v1.6.2-x64/lib&quot;&#160;
<br>
libmpi_cxx.lib&#160;
<br>
libmpi.lib&#160;
<br>
libopen-pal.lib&#160;
<br>
libopen-rte.lib&#160;
<br>
advapi32.lib&#160;
<br>
Ws2_32.lib&#160;
<br>
shlwapi.lib&#160;
<br>
send_compile.obj&#160;
<br>
send_compile.obj : error LNK2001: unresolved external symbol &quot;public: virtual void __cdecl MPI::Datatype::Free(void)&quot; (?Free_at_Datatype@MPI@@UEAAXXZ)
<br>
send_compile.exe : fatal error LNK1120: 1 unresolved externals
<br>
---------------------------------------------------
<br>
<p>This program compiles and runs without complaint on an Ubuntu machine around here. I don't know what the problem is. Open MPI's documentation didn't say anything about adding the CPP defines (OMPI_IMPORTS, OPAL_IMPORTS, ORTE_IMPORTS) whose absence were causing other linker errors similar to this. Google found some items in the mailing list archive. I cannot find any information about this particular problem, though.
<br>
<p>I tried using dumpbin to get symbols that were in the .lib files installed by MPI, but didn't find any reference to that function name. I didn't find any answers looking in the MPI headers, either.
<br>
<p>I have a similar program in C that compiles and runs fine on this Windows machine. I don't know what I'm doing wrong with C++. Can someone point me in the right direction? Is there some documentation regarding getting things to work on Windows? The release notes don't address this problem, and I can't find any other documentation related to what might be different from *nix to Windows (WRT to Open MPI).
<br>
<p>Thanks.
<br>
<p><p>todd.
<br>
<p>P.S. This is copied from a StackOverflow question I posted (<a href="http://stackoverflow.com/questions/14988099/open-mpi-c-link-error-mpidatatypefree-on-windows">http://stackoverflow.com/questions/14988099/open-mpi-c-link-error-mpidatatypefree-on-windows</a>). Forgive the cross-posting. 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21430.php">Stefan Friedel: "[OMPI users] openmpi, 1.6.3, mlx4_core, log_num_mtt and Debian/vanilla kernel"</a>
<li><strong>Previous message:</strong> <a href="21428.php">Gus Correa: "Re: [OMPI users] MPI send recv confusion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21434.php">Damien Hocking: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>Reply:</strong> <a href="21434.php">Damien Hocking: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
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
