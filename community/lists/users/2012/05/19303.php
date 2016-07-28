<?
$subject_val = "Re: [OMPI users] starting open-mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 18 02:46:37 2012" -->
<!-- isoreceived="20120518064637" -->
<!-- sent="Fri, 18 May 2012 10:16:31 +0330" -->
<!-- isosent="20120518064631" -->
<!-- name="Ghobad Zarrinchian" -->
<!-- email="gzarrin.edu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] starting open-mpi" -->
<!-- id="CAEx1Rm-v2=d=dHp_NpQDJ2Yg3mK2LO_gTtvQyjQmrgx1u19OSw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAEx1Rm_69Z6rPSK+WmV7ALx_PVptKN4sgADo9Mu+bbk1Ygj-zA_at_mail.gmail.com" -->
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
<strong>From:</strong> Ghobad Zarrinchian (<em>gzarrin.edu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-18 02:46:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19304.php">Matthieu Brucher: "Re: [OMPI users] starting open-mpi"</a>
<li><strong>Previous message:</strong> <a href="19302.php">Rohan Deshpande: "Re: [OMPI users] MPI - memory sharing?"</a>
<li><strong>In reply to:</strong> <a href="19257.php">Ghobad Zarrinchian: "Re: [OMPI users] starting open-mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19304.php">Matthieu Brucher: "Re: [OMPI users] starting open-mpi"</a>
<li><strong>Reply:</strong> <a href="19304.php">Matthieu Brucher: "Re: [OMPI users] starting open-mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi. I've installed Visual Studio 2008 on my machine. But i have still the
<br>
same problem. How can i solve it? thx
<br>
<p>On Fri, May 11, 2012 at 10:50 PM, Ghobad Zarrinchian
<br>
&lt;gzarrin.edu_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Dmitry for your reply. :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, May 11, 2012 at 4:47 PM, Dmitry N. Mikushin &lt;maemarcus_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ghobad,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The error message means the OpenMPI wants to use cl.exe - the compiler
</span><br>
<span class="quotelev2">&gt;&gt; from Microsoft Visual Studio.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here <a href="http://www.open-mpi.org/software/ompi/v1.5/ms-windows.php">http://www.open-mpi.org/software/ompi/v1.5/ms-windows.php</a> is it
</span><br>
<span class="quotelev2">&gt;&gt; stated:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is the first binary release for Windows, with basic MPI libraries
</span><br>
<span class="quotelev2">&gt;&gt; and executables. The supported platforms are Windows XP, Windows
</span><br>
<span class="quotelev2">&gt;&gt; Vista, Windows Server 2003/2008, and Windows 7 (including both 32 and
</span><br>
<span class="quotelev2">&gt;&gt; 64 bit versions). The installers were configured with CMake 2.8.1 and
</span><br>
<span class="quotelev2">&gt;&gt; compiled under Visual Studio 2010, and they support for C/C++
</span><br>
<span class="quotelev2">&gt;&gt; compilers of Visual Studio 2005, 2008 and 2010.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, to compile MPI programs you probably need one of this compilers to
</span><br>
<span class="quotelev2">&gt;&gt; be installed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards.
</span><br>
<span class="quotelev2">&gt;&gt; - Dima.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2012/5/10 Ghobad Zarrinchian &lt;gzarrin.edu_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; Hi all. I'm a new open-mpi user. I've downloaded the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; OpenMPI_v1.5.5-1_win32.exe file to install open-mpi on my dual-core
</span><br>
<span class="quotelev2">&gt;&gt; windows
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 7 machine. I installed the file but now i can't compile my mpi
</span><br>
<span class="quotelev2">&gt;&gt; programs. I
</span><br>
<span class="quotelev3">&gt;&gt; &gt; use command below (in command prompt window) to compile my 'test.cpp'
</span><br>
<span class="quotelev3">&gt;&gt; &gt; program:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; mpic++ -o test test.cpp
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; but i get error as follows:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; The open mpi wrapper compiler was unable to find the specified
</span><br>
<span class="quotelev2">&gt;&gt; compiler
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; cl.exe in your path.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      Note that this compiler was either specified at configure time or
</span><br>
<span class="quotelev2">&gt;&gt; in
</span><br>
<span class="quotelev3">&gt;&gt; &gt; one several possible environment variables.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; What is the problem? Is my compilation command right? Is there any
</span><br>
<span class="quotelev2">&gt;&gt; remained
</span><br>
<span class="quotelev3">&gt;&gt; &gt; necessary steps to complete my open-mpi installation?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Is it necessary to specify some environment variables?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks in advanced.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19303/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19304.php">Matthieu Brucher: "Re: [OMPI users] starting open-mpi"</a>
<li><strong>Previous message:</strong> <a href="19302.php">Rohan Deshpande: "Re: [OMPI users] MPI - memory sharing?"</a>
<li><strong>In reply to:</strong> <a href="19257.php">Ghobad Zarrinchian: "Re: [OMPI users] starting open-mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19304.php">Matthieu Brucher: "Re: [OMPI users] starting open-mpi"</a>
<li><strong>Reply:</strong> <a href="19304.php">Matthieu Brucher: "Re: [OMPI users] starting open-mpi"</a>
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
