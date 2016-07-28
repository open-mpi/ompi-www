<?
$subject_val = "Re: [OMPI users] Linking failure on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  2 00:20:07 2012" -->
<!-- isoreceived="20121002042007" -->
<!-- sent="Tue, 02 Oct 2012 17:20:02 +1300" -->
<!-- isosent="20121002042002" -->
<!-- name="Gib Bogle" -->
<!-- email="g.bogle_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linking failure on Windows" -->
<!-- id="506A6B72.8060800_at_auckland.ac.nz" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="506A685A.8070602_at_khubla.com" -->
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
<strong>Date:</strong> 2012-10-02 00:20:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20371.php">Damien Hocking: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Previous message:</strong> <a href="20369.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>In reply to:</strong> <a href="20368.php">Damien Hocking: "Re: [OMPI users] Linking failure on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20371.php">Damien Hocking: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Reply:</strong> <a href="20371.php">Damien Hocking: "Re: [OMPI users] Linking failure on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I guess it's conceivable that one of these Sundials include files is doing 
<br>
something:
<br>
<p>#include &lt;cvode/cvode.h&gt;                     /* prototypes for CVODE fcts. */
<br>
#include &lt;nvector/nvector_parallel.h&gt;  /* definition of N_Vector and macros /
<br>
#include &lt;sundials/sundials_types.h&gt;  /* definition of realtype /
<br>
#include &lt;sundials/sundials_math.h&gt;   /* definition of EXP */
<br>
<p>I am a complete beginner with Sundials, so I have no idea how it might interfere 
<br>
with the preprocessor definitions.
<br>
<p>Here is the compile command line from VS:
<br>
<p>/O2 /Ob2 /I &quot;E:\sundials-2.5.0\include&quot; /I &quot;E:\Sundials-Win32\include&quot; /I 
<br>
&quot;c:\Program Files (x86)\OpenMPI_v1.6.2-win32\include&quot; /D &quot;WIN32&quot; /D &quot;_WINDOWS&quot; 
<br>
/D &quot;NDEBUG&quot; /D &quot;OMPI_IMPORTS&quot; /D &quot;_CRT_SECURE_NO_WARNINGS&quot; /D 
<br>
&quot;CMAKE_INTDIR=\&quot;Release\&quot;&quot; /D &quot;_MBCS&quot; /FD /MD /Fo&quot;cvAdvDiff_non_p.dir\Release\\&quot; 
<br>
/Fd&quot;E:\Sundials-Win32\examples\cvode\parallel\Release/cvAdvDiff_non_p.pdb&quot; /W3 
<br>
/c /TC /errorReport:prompt
<br>
<p>Gib
<br>
<p><p>On 2/10/2012 5:06 p.m., Damien Hocking wrote:
<br>
<span class="quotelev1">&gt; So mpicc builds it completely?  The only thing I can think of is look closely 
</span><br>
<span class="quotelev1">&gt; at both the compile and link command lines and see what's different.  It might 
</span><br>
<span class="quotelev1">&gt; be going sideways at the compile from something in an include with a 
</span><br>
<span class="quotelev1">&gt; preprocessor def.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20371.php">Damien Hocking: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Previous message:</strong> <a href="20369.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>In reply to:</strong> <a href="20368.php">Damien Hocking: "Re: [OMPI users] Linking failure on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20371.php">Damien Hocking: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>Reply:</strong> <a href="20371.php">Damien Hocking: "Re: [OMPI users] Linking failure on Windows"</a>
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
