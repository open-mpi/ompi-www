<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb  2 04:28:05 2007" -->
<!-- isoreceived="20070202092805" -->
<!-- sent="Fri, 02 Feb 2007 10:23:50 +0100" -->
<!-- isosent="20070202092350" -->
<!-- name="Bert Wesarg" -->
<!-- email="wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h" -->
<!-- id="45C30326.9060206_at_informatik.uni-halle.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CEECA3BE5A1E334EBB71ADD1B9ABEF820107F590_at_webmail.imi.nrc.ca" -->
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
<strong>From:</strong> Bert Wesarg (<em>wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-02 04:23:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2586.php">Vadivelan Ranjith: "[OMPI users] ERROR: gfortran compiler is not in PATH for driver: mpif90"</a>
<li><strong>Previous message:</strong> <a href="2584.php">George Bosilca: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>In reply to:</strong> <a href="2582.php">Audet, Martin: "[OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2597.php">Audet, Martin: "Re: [OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>you can build your ompi with --with-devel-headers and use the header
<br>
&lt;ompi/version.h&gt;:
<br>
<p>#define OMPI_MAJOR_VERSION 1
<br>
#define OMPI_MINOR_VERSION 1
<br>
#define OMPI_RELEASE_VERSION 4
<br>
#define OMPI_GREEK_VERSION &quot;&quot;
<br>
<p>Bert
<br>
<p>Audet, Martin wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would like to suggest you to add macros indicating the version of the
</span><br>
<span class="quotelev1">&gt; OpenMPI library in the C/C++ header file mpi.h analogous to the
</span><br>
<span class="quotelev1">&gt; parameter constants in the Fortran header file:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    parameter (OMPI_MAJOR_VERSION=1)
</span><br>
<span class="quotelev1">&gt;    parameter (OMPI_MINOR_VERSION=1)
</span><br>
<span class="quotelev1">&gt;    parameter (OMPI_RELEASE_VERSION=4)
</span><br>
<span class="quotelev1">&gt;    parameter (OMPI_GREEK_VERSION=&quot;&quot;)
</span><br>
<span class="quotelev1">&gt;    parameter (OMPI_SVN_VERSION=&quot;r13362&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This would be very handy if someone discover a bug XYZ and a workaround
</span><br>
<span class="quotelev1">&gt; for it in OpenMPI versions before (and not including) 1.1.4 for example
</span><br>
<span class="quotelev1">&gt; and wants his code to be portable on many OpenMPI versions and also on
</span><br>
<span class="quotelev1">&gt; other MPI-2 implementations. In this situation he could do something
</span><br>
<span class="quotelev1">&gt; like this in a common C header file:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    #ifdef OPEN_MPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    /* true iff (x.y.z &lt; u.v.w) */
</span><br>
<span class="quotelev1">&gt;    #define DOTTED_LESS_THAN(x,y,z, u,v,w)   \
</span><br>
<span class="quotelev1">&gt;       (((x) &lt; (u)) || (((x) == (u)) &amp;&amp; (((y) &lt; (v)) || (((y) == (v)) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; ((z) &lt; (w))))))
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    # if DOTTED_LESS_THAN(OMPI_MAJOR_VERSION, OMPI_MINOR_VERSION,
</span><br>
<span class="quotelev1">&gt; OMPI_RELEASE_VERSION, 1,1,4)
</span><br>
<span class="quotelev1">&gt;    #  define USE_MPI_WORKAROUND_XYZ
</span><br>
<span class="quotelev1">&gt;    # endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And later in the C source code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    #ifdef USE_MPI_WORKAROUND_XYZ
</span><br>
<span class="quotelev1">&gt;      /* use the workaround */
</span><br>
<span class="quotelev1">&gt;    #else
</span><br>
<span class="quotelev1">&gt;      /* use the normal method */
</span><br>
<span class="quotelev1">&gt;    #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Martin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="2586.php">Vadivelan Ranjith: "[OMPI users] ERROR: gfortran compiler is not in PATH for driver: mpif90"</a>
<li><strong>Previous message:</strong> <a href="2584.php">George Bosilca: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>In reply to:</strong> <a href="2582.php">Audet, Martin: "[OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2597.php">Audet, Martin: "Re: [OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h"</a>
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
