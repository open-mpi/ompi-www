<?
$subject_val = "Re: [OMPI users] Linking failure on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  2 16:25:50 2012" -->
<!-- isoreceived="20121002202550" -->
<!-- sent="Wed, 03 Oct 2012 09:25:58 +1300" -->
<!-- isosent="20121002202558" -->
<!-- name="Gib Bogle" -->
<!-- email="g.bogle_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linking failure on Windows" -->
<!-- id="506B4DD6.3070608_at_auckland.ac.nz" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="506B021D.9090305_at_hlrs.de" -->
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
<strong>From:</strong> Gib Bogle (<em>g.bogle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-02 16:25:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20381.php">Damien: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Previous message:</strong> <a href="20379.php">Jeff Squyres: "Re: [OMPI users] fortran bindings for MPI_Op_commutative"</a>
<li><strong>In reply to:</strong> <a href="20378.php">Shiqing Fan: "Re: [OMPI users] Linking failure on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20381.php">Damien: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Reply:</strong> <a href="20381.php">Damien: "Re: [OMPI users] Linking failure on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Shiqing,
<br>
<p>Your post made me realize my mistake!  I was thinking only of the preprocessor 
<br>
definitions for compiling cvAdvDiff_non_p.c, forgetting about the previously 
<br>
built library sundials_nvecparallel.lib, which is of course where 
<br>
nvector_parallel.c was compiled.  When I rebuild that library with OMPI_IMPORTS 
<br>
my problem disappears.
<br>
<p>Thanks Shiqing, and sorry Damien!
<br>
<p>Gib
<br>
<p>On 3/10/2012 4:02 a.m., Shiqing Fan wrote:
<br>
<span class="quotelev1">&gt; Hi Gib,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, I also think defining OMPI_IMPORTS would solve the problem. And I 
</span><br>
<span class="quotelev1">&gt; also double checked the released binaries and the source code, those symbols 
</span><br>
<span class="quotelev1">&gt; are surely exported. So I'm now really confused.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gib, do you know how to generate preprocessor files in VS 2005? It should be 
</span><br>
<span class="quotelev1">&gt; one option under the C/C++ settings of the project. If you can provide me the 
</span><br>
<span class="quotelev1">&gt; preprocessor file of nvector_parallel.c, it would be helpful to find out the 
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2012-10-02 8:25 AM, Gib Bogle wrote:
</span><br>
<span class="quotelev2">&gt;&gt; They don't make any difference.  I had them in, but dropped them when I found 
</span><br>
<span class="quotelev2">&gt;&gt; that the mpicc build didn't need them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gib
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of 
</span><br>
<span class="quotelev2">&gt;&gt; Damien Hocking [damien_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, 2 October 2012 7:21 p.m.
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Linking failure on Windows
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There's two imports missing from there, OPAL_IMPORTS and ORTE_IMPORTS.
</span><br>
<span class="quotelev2">&gt;&gt; That might be part of it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Damien
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 01/10/2012 10:20 PM, Gib Bogle wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I guess it's conceivable that one of these Sundials include files is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doing something:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;cvode/cvode.h&gt;                     /* prototypes for CVODE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fcts. */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;nvector/nvector_parallel.h&gt;  /* definition of N_Vector and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; macros /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;sundials/sundials_types.h&gt;  /* definition of realtype /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;sundials/sundials_math.h&gt;   /* definition of EXP */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am a complete beginner with Sundials, so I have no idea how it might
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interfere with the preprocessor definitions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is the compile command line from VS:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /O2 /Ob2 /I &quot;E:\sundials-2.5.0\include&quot; /I &quot;E:\Sundials-Win32\include&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /I &quot;c:\Program Files (x86)\OpenMPI_v1.6.2-win32\include&quot; /D &quot;WIN32&quot; /D
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;_WINDOWS&quot; /D &quot;NDEBUG&quot; /D &quot;OMPI_IMPORTS&quot; /D &quot;_CRT_SECURE_NO_WARNINGS&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /D &quot;CMAKE_INTDIR=\&quot;Release\&quot;&quot; /D &quot;_MBCS&quot; /FD /MD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /Fo&quot;cvAdvDiff_non_p.dir\Release\\&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /Fd&quot;E:\Sundials-Win32\examples\cvode\parallel\Release/cvAdvDiff_non_p.pdb&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /W3 /c /TC /errorReport:prompt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gib
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2/10/2012 5:06 p.m., Damien Hocking wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So mpicc builds it completely?  The only thing I can think of is look
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; closely at both the compile and link command lines and see what's
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; different.  It might be going sideways at the compile from something
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in an include with a preprocessor def.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Damien
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Dr. Gib Bogle
Senior Research Fellow
Auckland Bioengineering Institute
University of Auckland
New Zealand
<a href="http://www.bioeng.auckland.ac.nz">http://www.bioeng.auckland.ac.nz</a>
g.bogle_at_[hidden]
(64-9) 373-7599 Ext. 87030
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20381.php">Damien: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Previous message:</strong> <a href="20379.php">Jeff Squyres: "Re: [OMPI users] fortran bindings for MPI_Op_commutative"</a>
<li><strong>In reply to:</strong> <a href="20378.php">Shiqing Fan: "Re: [OMPI users] Linking failure on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20381.php">Damien: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Reply:</strong> <a href="20381.php">Damien: "Re: [OMPI users] Linking failure on Windows"</a>
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
