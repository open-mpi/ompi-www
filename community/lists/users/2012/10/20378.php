<?
$subject_val = "Re: [OMPI users] Linking failure on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  2 11:00:04 2012" -->
<!-- isoreceived="20121002150004" -->
<!-- sent="Tue, 02 Oct 2012 17:02:53 +0200" -->
<!-- isosent="20121002150253" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linking failure on Windows" -->
<!-- id="506B021D.9090305_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BD80F91C3E2E394894ED4780703D7F9E431DDE7A_at_uxcn10-1.UoA.auckland.ac.nz" -->
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
<strong>Subject:</strong> Re: [OMPI users] Linking failure on Windows<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-02 11:02:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20379.php">Jeff Squyres: "Re: [OMPI users] fortran bindings for MPI_Op_commutative"</a>
<li><strong>Previous message:</strong> <a href="20377.php">Damien: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>In reply to:</strong> <a href="20372.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20380.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Reply:</strong> <a href="20380.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gib,
<br>
<p>Actually, I also think defining OMPI_IMPORTS would solve the problem. 
<br>
And I also double checked the released binaries and the source code, 
<br>
those symbols are surely exported. So I'm now really confused.
<br>
<p>Gib, do you know how to generate preprocessor files in VS 2005? It 
<br>
should be one option under the C/C++ settings of the project. If you can 
<br>
provide me the preprocessor file of nvector_parallel.c, it would be 
<br>
helpful to find out the problem.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p><p>On 2012-10-02 8:25 AM, Gib Bogle wrote:
<br>
<span class="quotelev1">&gt; They don't make any difference.  I had them in, but dropped them when I found that the mpicc build didn't need them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gib
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Damien Hocking [damien_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, 2 October 2012 7:21 p.m.
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Linking failure on Windows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's two imports missing from there, OPAL_IMPORTS and ORTE_IMPORTS.
</span><br>
<span class="quotelev1">&gt; That might be part of it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 01/10/2012 10:20 PM, Gib Bogle wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I guess it's conceivable that one of these Sundials include files is
</span><br>
<span class="quotelev2">&gt;&gt; doing something:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;cvode/cvode.h&gt;                     /* prototypes for CVODE
</span><br>
<span class="quotelev2">&gt;&gt; fcts. */
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;nvector/nvector_parallel.h&gt;  /* definition of N_Vector and
</span><br>
<span class="quotelev2">&gt;&gt; macros /
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;sundials/sundials_types.h&gt;  /* definition of realtype /
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;sundials/sundials_math.h&gt;   /* definition of EXP */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am a complete beginner with Sundials, so I have no idea how it might
</span><br>
<span class="quotelev2">&gt;&gt; interfere with the preprocessor definitions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the compile command line from VS:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /O2 /Ob2 /I &quot;E:\sundials-2.5.0\include&quot; /I &quot;E:\Sundials-Win32\include&quot;
</span><br>
<span class="quotelev2">&gt;&gt; /I &quot;c:\Program Files (x86)\OpenMPI_v1.6.2-win32\include&quot; /D &quot;WIN32&quot; /D
</span><br>
<span class="quotelev2">&gt;&gt; &quot;_WINDOWS&quot; /D &quot;NDEBUG&quot; /D &quot;OMPI_IMPORTS&quot; /D &quot;_CRT_SECURE_NO_WARNINGS&quot;
</span><br>
<span class="quotelev2">&gt;&gt; /D &quot;CMAKE_INTDIR=\&quot;Release\&quot;&quot; /D &quot;_MBCS&quot; /FD /MD
</span><br>
<span class="quotelev2">&gt;&gt; /Fo&quot;cvAdvDiff_non_p.dir\Release\\&quot;
</span><br>
<span class="quotelev2">&gt;&gt; /Fd&quot;E:\Sundials-Win32\examples\cvode\parallel\Release/cvAdvDiff_non_p.pdb&quot;
</span><br>
<span class="quotelev2">&gt;&gt; /W3 /c /TC /errorReport:prompt
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2/10/2012 5:06 p.m., Damien Hocking wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So mpicc builds it completely?  The only thing I can think of is look
</span><br>
<span class="quotelev3">&gt;&gt;&gt; closely at both the compile and link command lines and see what's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different.  It might be going sideways at the compile from something
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in an include with a preprocessor def.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Damien
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20379.php">Jeff Squyres: "Re: [OMPI users] fortran bindings for MPI_Op_commutative"</a>
<li><strong>Previous message:</strong> <a href="20377.php">Damien: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>In reply to:</strong> <a href="20372.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20380.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Reply:</strong> <a href="20380.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
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
