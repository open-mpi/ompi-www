<?
$subject_val = "Re: [OMPI users] starting open-mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 11 09:17:39 2012" -->
<!-- isoreceived="20120511131739" -->
<!-- sent="Fri, 11 May 2012 15:17:34 +0200" -->
<!-- isosent="20120511131734" -->
<!-- name="Dmitry N. Mikushin" -->
<!-- email="maemarcus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] starting open-mpi" -->
<!-- id="CAGR4S9H1xzQZrk=hKSzxbu4Gu_UbzS0PAJ_AuaOk3q=apPG0qA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAEx1Rm_tct2Q-0ujA75Kv6dzKzgx_h2XjFK5Z8JUnCVVd5evcg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] starting open-mpi<br>
<strong>From:</strong> Dmitry N. Mikushin (<em>maemarcus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-11 09:17:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19256.php">Mike Dubman: "Re: [OMPI users] ompi mca mxm version"</a>
<li><strong>Previous message:</strong> <a href="19254.php">Ghobad Zarrinchian: "[OMPI users] starting open-mpi"</a>
<li><strong>In reply to:</strong> <a href="19254.php">Ghobad Zarrinchian: "[OMPI users] starting open-mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19257.php">Ghobad Zarrinchian: "Re: [OMPI users] starting open-mpi"</a>
<li><strong>Reply:</strong> <a href="19257.php">Ghobad Zarrinchian: "Re: [OMPI users] starting open-mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ghobad,
<br>
<p>The error message means the OpenMPI wants to use cl.exe - the compiler
<br>
from Microsoft Visual Studio.
<br>
<p>Here <a href="http://www.open-mpi.org/software/ompi/v1.5/ms-windows.php">http://www.open-mpi.org/software/ompi/v1.5/ms-windows.php</a> is it stated:
<br>
<p>This is the first binary release for Windows, with basic MPI libraries
<br>
and executables. The supported platforms are Windows XP, Windows
<br>
Vista, Windows Server 2003/2008, and Windows 7 (including both 32 and
<br>
64 bit versions). The installers were configured with CMake 2.8.1 and
<br>
compiled under Visual Studio 2010, and they support for C/C++
<br>
compilers of Visual Studio 2005, 2008 and 2010.
<br>
<p>So, to compile MPI programs you probably need one of this compilers to
<br>
be installed.
<br>
<p>Best regards.
<br>
- Dima.
<br>
<p>2012/5/10 Ghobad Zarrinchian &lt;gzarrin.edu_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hi all. I'm a new open-mpi user. I've downloaded&#160;the
</span><br>
<span class="quotelev1">&gt; OpenMPI_v1.5.5-1_win32.exe file to install open-mpi on my dual-core windows
</span><br>
<span class="quotelev1">&gt; 7 machine. I installed the file but now i can't compile my mpi programs. I
</span><br>
<span class="quotelev1">&gt; use command below (in command prompt window) to compile my 'test.cpp'
</span><br>
<span class="quotelev1">&gt; program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpic++ -o test test.cpp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but i get error as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The open mpi wrapper compiler was unable to find the specified compiler
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cl.exe in your path.
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160; Note that this compiler was either specified at configure time or in
</span><br>
<span class="quotelev1">&gt; one several possible environment variables.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the problem? Is my compilation command right? Is there any remained
</span><br>
<span class="quotelev1">&gt; necessary steps to complete my open-mpi installation?
</span><br>
<span class="quotelev1">&gt; Is it necessary to&#160;specify some environment variables?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advanced.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19256.php">Mike Dubman: "Re: [OMPI users] ompi mca mxm version"</a>
<li><strong>Previous message:</strong> <a href="19254.php">Ghobad Zarrinchian: "[OMPI users] starting open-mpi"</a>
<li><strong>In reply to:</strong> <a href="19254.php">Ghobad Zarrinchian: "[OMPI users] starting open-mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19257.php">Ghobad Zarrinchian: "Re: [OMPI users] starting open-mpi"</a>
<li><strong>Reply:</strong> <a href="19257.php">Ghobad Zarrinchian: "Re: [OMPI users] starting open-mpi"</a>
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
