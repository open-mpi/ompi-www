<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb  9 13:12:19 2007" -->
<!-- isoreceived="20070209181219" -->
<!-- sent="Fri, 9 Feb 2007 13:12:06 -0500" -->
<!-- isosent="20070209181206" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h" -->
<!-- id="4CC689C0-47FB-4AB0-A2AE-22A3A96075D8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CEECA3BE5A1E334EBB71ADD1B9ABEF82113324_at_webmail.imi.nrc.ca" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-09 13:12:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2661.php">Jeff Squyres: "[OMPI users] Fwd: MPI 2.1"</a>
<li><strong>Previous message:</strong> <a href="2659.php">Alex Tumanov: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>In reply to:</strong> <a href="2597.php">Audet, Martin: "Re: [OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay on this -- we ran this idea by all the other  
<br>
developers and got a resounding &quot;sounds like a good idea!&quot;.
<br>
<p>So OMPI_MAJOR_VERSION, OMPI_MINOR_VERSION, and OMPI_RELEASE_VERSION  
<br>
(all integers) will be in mpi.h in Open MPI v1.2.  For the v1.2  
<br>
release, these three macros will correspond to 1, 2, and 0,  
<br>
respectively.
<br>
<p>If we do a v1.1.5 release, these macros will be in mpi.h as well (as  
<br>
1, 1, and 5, respectively, of course).
<br>
<p>Don't forget that you can always check for the macro OPEN_MPI, too  
<br>
(it's set to 1 in mpi.h).  That's been in there since v1.0.
<br>
<p>Thanks for the suggestion!
<br>
<p><p><p>On Feb 2, 2007, at 6:50 PM, Audet, Martin wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Bert for the reply but having these macros in ompi/version.h  
</span><br>
<span class="quotelev1">&gt; only if a special option is given to configure is useless for what  
</span><br>
<span class="quotelev1">&gt; I would like to enable in OpenMPI with the present suggestion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is because the whole idea is to make it possible to write  
</span><br>
<span class="quotelev1">&gt; portable MPI compliant C/C++ programs that are able to chose to use  
</span><br>
<span class="quotelev1">&gt; or not workarounds for eventual bugs in OpenMPI at compile time  
</span><br>
<span class="quotelev1">&gt; based on the exact OpenMPI version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Declaring the versions macros I suggested would make it possible to  
</span><br>
<span class="quotelev1">&gt; dectect at compilation if the current OpenMPI version is affected  
</span><br>
<span class="quotelev1">&gt; by a specific bug and to eventually activate a workaround if  
</span><br>
<span class="quotelev1">&gt; possible (or terminate compilation with #error preprocessor  
</span><br>
<span class="quotelev1">&gt; directive if no workaround exists). With the help of the existing  
</span><br>
<span class="quotelev1">&gt; OPEN_MPI macro these checks could be easilly ignored when using an  
</span><br>
<span class="quotelev1">&gt; MPI implantation other than OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And this would be very convenient since the application would  
</span><br>
<span class="quotelev1">&gt; adjust itself to the OpenMPI implentation without any user  
</span><br>
<span class="quotelev1">&gt; intervention.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I am describing is a common practice. I have checks in my code  
</span><br>
<span class="quotelev1">&gt; that check for example ROMIO_VERSION or to activate workarounds for  
</span><br>
<span class="quotelev1">&gt; known bugs or checks for __GNUC__ or __INTEL_COMPILER to activate  
</span><br>
<span class="quotelev1">&gt; features in newer gcc or icc compilers versions (like the  
</span><br>
<span class="quotelev1">&gt; &quot;restrict&quot; pointer qualifier).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But to do similar things with OpenMPI we need these version OMPI_  
</span><br>
<span class="quotelev1">&gt; macro defined by default in mpi.h. They have to be always defined  
</span><br>
<span class="quotelev1">&gt; otherwise the save no burden for users.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Martin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; you can build your ompi with --with-devel-headers and use the header
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi/version.h&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev2">&gt;&gt; #define OMPI_MINOR_VERSION 1
</span><br>
<span class="quotelev2">&gt;&gt; #define OMPI_RELEASE_VERSION 4
</span><br>
<span class="quotelev2">&gt;&gt; #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bert
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Audet, Martin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would like to suggest you to add macros indicating the version  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI library in the C/C++ header file mpi.h analogous to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parameter constants in the Fortran header file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parameter (OMPI_MAJOR_VERSION=1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parameter (OMPI_MINOR_VERSION=1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parameter (OMPI_RELEASE_VERSION=4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parameter (OMPI_GREEK_VERSION=&quot;&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parameter (OMPI_SVN_VERSION=&quot;r13362&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This would be very handy if someone discover a bug XYZ and a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; workaround
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for it in OpenMPI versions before (and not including) 1.1.4 for  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; example
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and wants his code to be portable on many OpenMPI versions and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; also on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other MPI-2 implementations. In this situation he could do something
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like this in a common C header file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #ifdef OPEN_MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* true iff (x.y.z &lt; u.v.w) */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define DOTTED_LESS_THAN(x,y,z, u,v,w) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (((x) &lt; (u)) || (((x) == (u)) &amp;&amp; (((y) &lt; (v)) || (((y) == (v)) &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ((z) &lt; (w))))))
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # if DOTTED_LESS_THAN(OMPI_MAJOR_VERSION, OMPI_MINOR_VERSION,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_RELEASE_VERSION, 1,1,4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # define USE_MPI_WORKAROUND_XYZ
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And later in the C source code:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #ifdef USE_MPI_WORKAROUND_XYZ
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* use the workaround */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* use the normal method */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Martin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2661.php">Jeff Squyres: "[OMPI users] Fwd: MPI 2.1"</a>
<li><strong>Previous message:</strong> <a href="2659.php">Alex Tumanov: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>In reply to:</strong> <a href="2597.php">Audet, Martin: "Re: [OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h"</a>
<!-- nextthread="start" -->
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
