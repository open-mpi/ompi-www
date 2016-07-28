<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb  2 18:53:50 2007" -->
<!-- isoreceived="20070202235350" -->
<!-- sent="Fri, 2 Feb 2007 18:50:43 -0500" -->
<!-- isosent="20070202235043" -->
<!-- name="Audet, Martin" -->
<!-- email="Martin.Audet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h" -->
<!-- id="CEECA3BE5A1E334EBB71ADD1B9ABEF82113324_at_webmail.imi.nrc.ca" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h" -->
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
<strong>From:</strong> Audet, Martin (<em>Martin.Audet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-02 18:50:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2598.php">Dennis McRitchie: "Re: [OMPI users] Can't run simple job with openmpi using the Intelcompiler"</a>
<li><strong>Previous message:</strong> <a href="2596.php">Joe Griffin: "[OMPI users] -prefix not working"</a>
<li><strong>Maybe in reply to:</strong> <a href="2582.php">Audet, Martin: "[OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2660.php">Jeff Squyres: "Re: [OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h"</a>
<li><strong>Reply:</strong> <a href="2660.php">Jeff Squyres: "Re: [OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Bert for the reply but having these macros in ompi/version.h only if a special option is given to configure is useless for what I would like to enable in OpenMPI with the present suggestion.
<br>
<p>This is because the whole idea is to make it possible to write portable MPI compliant C/C++ programs that are able to chose to use or not workarounds for eventual bugs in OpenMPI at compile time based on the exact OpenMPI version.
<br>
<p>Declaring the versions macros I suggested would make it possible to dectect at compilation if the current OpenMPI version is affected by a specific bug and to eventually activate a workaround if possible (or terminate compilation with #error preprocessor directive if no workaround exists). With the help of the existing OPEN_MPI macro these checks could be easilly ignored when using an MPI implantation other than OpenMPI.
<br>
<p>And this would be very convenient since the application would adjust itself to the OpenMPI implentation without any user intervention.
<br>
<p>What I am describing is a common practice. I have checks in my code that check for example ROMIO_VERSION or to activate workarounds for known bugs or checks for __GNUC__ or __INTEL_COMPILER to activate features in newer gcc or icc compilers versions (like the &quot;restrict&quot; pointer qualifier).
<br>
<p>But to do similar things with OpenMPI we need these version OMPI_ macro defined by default in mpi.h. They have to be always defined otherwise the save no burden for users.
<br>
<p>Regards,
<br>
<p>Martin
<br>
<p>&nbsp;
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you can build your ompi with --with-devel-headers and use the header
</span><br>
<span class="quotelev1">&gt; &lt;ompi/version.h&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_MINOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_RELEASE_VERSION 4
</span><br>
<span class="quotelev1">&gt; #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bert
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Audet, Martin wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would like to suggest you to add macros indicating the version of the
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI library in the C/C++ header file mpi.h analogous to the
</span><br>
<span class="quotelev2">&gt; &gt; parameter constants in the Fortran header file:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; parameter (OMPI_MAJOR_VERSION=1)
</span><br>
<span class="quotelev2">&gt; &gt; parameter (OMPI_MINOR_VERSION=1)
</span><br>
<span class="quotelev2">&gt; &gt; parameter (OMPI_RELEASE_VERSION=4)
</span><br>
<span class="quotelev2">&gt; &gt; parameter (OMPI_GREEK_VERSION=&quot;&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; parameter (OMPI_SVN_VERSION=&quot;r13362&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This would be very handy if someone discover a bug XYZ and a workaround
</span><br>
<span class="quotelev2">&gt; &gt; for it in OpenMPI versions before (and not including) 1.1.4 for example
</span><br>
<span class="quotelev2">&gt; &gt; and wants his code to be portable on many OpenMPI versions and also on
</span><br>
<span class="quotelev2">&gt; &gt; other MPI-2 implementations. In this situation he could do something
</span><br>
<span class="quotelev2">&gt; &gt; like this in a common C header file:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #ifdef OPEN_MPI
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /* true iff (x.y.z &lt; u.v.w) */
</span><br>
<span class="quotelev2">&gt; &gt; #define DOTTED_LESS_THAN(x,y,z, u,v,w) \
</span><br>
<span class="quotelev2">&gt; &gt; (((x) &lt; (u)) || (((x) == (u)) &amp;&amp; (((y) &lt; (v)) || (((y) == (v)) &amp;&amp;
</span><br>
<span class="quotelev2">&gt; &gt; ((z) &lt; (w))))))
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # if DOTTED_LESS_THAN(OMPI_MAJOR_VERSION, OMPI_MINOR_VERSION,
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_RELEASE_VERSION, 1,1,4)
</span><br>
<span class="quotelev2">&gt; &gt; # define USE_MPI_WORKAROUND_XYZ
</span><br>
<span class="quotelev2">&gt; &gt; # endif
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #endif
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And later in the C source code:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #ifdef USE_MPI_WORKAROUND_XYZ
</span><br>
<span class="quotelev2">&gt; &gt; /* use the workaround */
</span><br>
<span class="quotelev2">&gt; &gt; #else
</span><br>
<span class="quotelev2">&gt; &gt; /* use the normal method */
</span><br>
<span class="quotelev2">&gt; &gt; #endif
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Martin
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2598.php">Dennis McRitchie: "Re: [OMPI users] Can't run simple job with openmpi using the Intelcompiler"</a>
<li><strong>Previous message:</strong> <a href="2596.php">Joe Griffin: "[OMPI users] -prefix not working"</a>
<li><strong>Maybe in reply to:</strong> <a href="2582.php">Audet, Martin: "[OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2660.php">Jeff Squyres: "Re: [OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h"</a>
<li><strong>Reply:</strong> <a href="2660.php">Jeff Squyres: "Re: [OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h"</a>
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
