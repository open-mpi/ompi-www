<?
$subject_val = "Re: [OMPI users] Linking failure on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  2 02:21:51 2012" -->
<!-- isoreceived="20121002062151" -->
<!-- sent="Tue, 02 Oct 2012 00:21:42 -0600" -->
<!-- isosent="20121002062142" -->
<!-- name="Damien Hocking" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linking failure on Windows" -->
<!-- id="506A87F6.9060200_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="506A6B72.8060800_at_auckland.ac.nz" -->
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
<strong>From:</strong> Damien Hocking (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-02 02:21:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20372.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Previous message:</strong> <a href="20370.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>In reply to:</strong> <a href="20370.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20372.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Reply:</strong> <a href="20372.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There's two imports missing from there, OPAL_IMPORTS and ORTE_IMPORTS.  
<br>
That might be part of it.
<br>
<p>Damien
<br>
<p>On 01/10/2012 10:20 PM, Gib Bogle wrote:
<br>
<span class="quotelev1">&gt; I guess it's conceivable that one of these Sundials include files is 
</span><br>
<span class="quotelev1">&gt; doing something:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;cvode/cvode.h&gt;                     /* prototypes for CVODE 
</span><br>
<span class="quotelev1">&gt; fcts. */
</span><br>
<span class="quotelev1">&gt; #include &lt;nvector/nvector_parallel.h&gt;  /* definition of N_Vector and 
</span><br>
<span class="quotelev1">&gt; macros /
</span><br>
<span class="quotelev1">&gt; #include &lt;sundials/sundials_types.h&gt;  /* definition of realtype /
</span><br>
<span class="quotelev1">&gt; #include &lt;sundials/sundials_math.h&gt;   /* definition of EXP */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am a complete beginner with Sundials, so I have no idea how it might 
</span><br>
<span class="quotelev1">&gt; interfere with the preprocessor definitions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the compile command line from VS:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /O2 /Ob2 /I &quot;E:\sundials-2.5.0\include&quot; /I &quot;E:\Sundials-Win32\include&quot; 
</span><br>
<span class="quotelev1">&gt; /I &quot;c:\Program Files (x86)\OpenMPI_v1.6.2-win32\include&quot; /D &quot;WIN32&quot; /D 
</span><br>
<span class="quotelev1">&gt; &quot;_WINDOWS&quot; /D &quot;NDEBUG&quot; /D &quot;OMPI_IMPORTS&quot; /D &quot;_CRT_SECURE_NO_WARNINGS&quot; 
</span><br>
<span class="quotelev1">&gt; /D &quot;CMAKE_INTDIR=\&quot;Release\&quot;&quot; /D &quot;_MBCS&quot; /FD /MD 
</span><br>
<span class="quotelev1">&gt; /Fo&quot;cvAdvDiff_non_p.dir\Release\\&quot; 
</span><br>
<span class="quotelev1">&gt; /Fd&quot;E:\Sundials-Win32\examples\cvode\parallel\Release/cvAdvDiff_non_p.pdb&quot; 
</span><br>
<span class="quotelev1">&gt; /W3 /c /TC /errorReport:prompt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/10/2012 5:06 p.m., Damien Hocking wrote:
</span><br>
<span class="quotelev2">&gt;&gt; So mpicc builds it completely?  The only thing I can think of is look 
</span><br>
<span class="quotelev2">&gt;&gt; closely at both the compile and link command lines and see what's 
</span><br>
<span class="quotelev2">&gt;&gt; different.  It might be going sideways at the compile from something 
</span><br>
<span class="quotelev2">&gt;&gt; in an include with a preprocessor def.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Damien
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="20372.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Previous message:</strong> <a href="20370.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>In reply to:</strong> <a href="20370.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20372.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Reply:</strong> <a href="20372.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
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
