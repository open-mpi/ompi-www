<?
$subject_val = "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 12:13:06 2013" -->
<!-- isoreceived="20130221171306" -->
<!-- sent="Thu, 21 Feb 2013 17:13:00 +0000" -->
<!-- isosent="20130221171300" -->
<!-- name="Hartman, Todd W." -->
<!-- email="thartman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows C++ Linker Error &amp;quot;unresolved symbol&amp;quot; for MPI::Datatype::Free" -->
<!-- id="893B119594205F41AB47AE4702E711A759A54A72_at_UM-MBX-T02.um.umsystem.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5126446D.9060109_at_khubla.com" -->
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
<strong>From:</strong> Hartman, Todd W. (<em>thartman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-21 12:13:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21436.php">Ralph Castain: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>Previous message:</strong> <a href="21434.php">Damien Hocking: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>In reply to:</strong> <a href="21434.php">Damien Hocking: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21436.php">Ralph Castain: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>Reply:</strong> <a href="21436.php">Ralph Castain: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>Reply:</strong> <a href="21437.php">damien_at_[hidden]: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gee, that's too bad. I assumed that the 1.6.4 Windows build was delayed
<br>
because it was a lower priority. Do you suppose this position was taken
<br>
because there are no developers wishing to keep it alive? 
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Damien Hocking
<br>
Sent: Thursday, February 21, 2013 10:00 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for
<br>
MPI::Datatype::Free
<br>
<p>Well this is interesting.  The linker can't find that because
<br>
MPI::Datatype::Free isn't implemented on the Windows build (in
<br>
datatype_inln.h).  It's declared in datatype.h though.  It's not there in
<br>
the Linux version either, so I don't know where the Linux build is getting
<br>
that symbol from, that link should fail too.  Is the C++ version of OpenMPI
<br>
actually broken overall?
<br>
<p>The Windows support is another issue.  I think it's semi-officially
<br>
deprecated.
<br>
<p>Damien
<br>
<p>On 20/02/2013 11:20 PM, Hartman, Todd W. wrote:
<br>
<span class="quotelev1">&gt; I'm trying to build a simple Open MPI application for Windows. I've
</span><br>
installed the binaries for OpenMPI-v1.6.2 (64-bit). I've also installed
<br>
Visual Studio 2010. The machine(s) are Windows 7 x64.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I attempt to compile a simple program that uses MPI::Send(), I get a
</span><br>
linker error saying that it cannot resolve MPI::Datatype::Free().
<br>
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
<span class="quotelev1">&gt; mpic++ send_compile.cpp -o send_compile.exe -DOMPI_IMPORTS 
</span><br>
<span class="quotelev1">&gt; mpic++ -DOPAL_IMPORTS -DORTE_IMPORTS
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
<span class="quotelev1">&gt; cl : Command line warning D9035 : option 'o' has been deprecated and 
</span><br>
<span class="quotelev1">&gt; will be removed in a future release send_compile.cpp Microsoft (R) 
</span><br>
<span class="quotelev1">&gt; Incremental Linker Version 10.00.40219.01 Copyright (C) Microsoft 
</span><br>
<span class="quotelev1">&gt; Corporation.  All rights reserved.
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
<span class="quotelev1">&gt; send_compile.obj : error LNK2001: unresolved external symbol &quot;public: 
</span><br>
<span class="quotelev1">&gt; virtual void __cdecl MPI::Datatype::Free(void)&quot; 
</span><br>
<span class="quotelev1">&gt; (?Free_at_Datatype@MPI@@UEAAXXZ) send_compile.exe : fatal error LNK1120: 
</span><br>
<span class="quotelev1">&gt; 1 unresolved externals
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This program compiles and runs without complaint on an Ubuntu machine
</span><br>
around here. I don't know what the problem is. Open MPI's documentation
<br>
didn't say anything about adding the CPP defines (OMPI_IMPORTS,
<br>
OPAL_IMPORTS, ORTE_IMPORTS) whose absence were causing other linker errors
<br>
similar to this. Google found some items in the mailing list archive. I
<br>
cannot find any information about this particular problem, though.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried using dumpbin to get symbols that were in the .lib files installed
</span><br>
by MPI, but didn't find any reference to that function name. I didn't find
<br>
any answers looking in the MPI headers, either.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a similar program in C that compiles and runs fine on this Windows
</span><br>
machine. I don't know what I'm doing wrong with C++. Can someone point me in
<br>
the right direction? Is there some documentation regarding getting things to
<br>
work on Windows? The release notes don't address this problem, and I can't
<br>
find any other documentation related to what might be different from *nix to
<br>
Windows (WRT to Open MPI).
<br>
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
<span class="quotelev1">&gt; P.S. This is copied from a StackOverflow question I posted
</span><br>
(<a href="http://stackoverflow.com/questions/14988099/open-mpi-c-link-error-mpidataty">http://stackoverflow.com/questions/14988099/open-mpi-c-link-error-mpidataty</a>
<br>
pefree-on-windows). Forgive the cross-posting.
<br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21435/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21436.php">Ralph Castain: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>Previous message:</strong> <a href="21434.php">Damien Hocking: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>In reply to:</strong> <a href="21434.php">Damien Hocking: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21436.php">Ralph Castain: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>Reply:</strong> <a href="21436.php">Ralph Castain: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<li><strong>Reply:</strong> <a href="21437.php">damien_at_[hidden]: "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
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
