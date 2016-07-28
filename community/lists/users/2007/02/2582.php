<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  1 21:44:04 2007" -->
<!-- isoreceived="20070202024404" -->
<!-- sent="Thu, 1 Feb 2007 21:44:00 -0500" -->
<!-- isosent="20070202024400" -->
<!-- name="Audet, Martin" -->
<!-- email="Martin.Audet_at_[hidden]" -->
<!-- subject="[OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h" -->
<!-- id="CEECA3BE5A1E334EBB71ADD1B9ABEF820107F590_at_webmail.imi.nrc.ca" -->
<!-- charset="iso-8859-1" -->
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
<strong>Date:</strong> 2007-02-01 21:44:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2583.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>Previous message:</strong> <a href="2581.php">Galen Shipman: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2585.php">Bert Wesarg: "Re: [OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h"</a>
<li><strong>Reply:</strong> <a href="2585.php">Bert Wesarg: "Re: [OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h"</a>
<li><strong>Maybe reply:</strong> <a href="2597.php">Audet, Martin: "Re: [OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I would like to suggest you to add macros indicating the version of the OpenMPI library in the C/C++ header file mpi.h analogous to the parameter constants in the Fortran header file:
<br>
<p>&nbsp;&nbsp;&nbsp;parameter (OMPI_MAJOR_VERSION=1)
<br>
&nbsp;&nbsp;&nbsp;parameter (OMPI_MINOR_VERSION=1)
<br>
&nbsp;&nbsp;&nbsp;parameter (OMPI_RELEASE_VERSION=4)
<br>
&nbsp;&nbsp;&nbsp;parameter (OMPI_GREEK_VERSION=&quot;&quot;)
<br>
&nbsp;&nbsp;&nbsp;parameter (OMPI_SVN_VERSION=&quot;r13362&quot;)
<br>
<p>This would be very handy if someone discover a bug XYZ and a workaround for it in OpenMPI versions before (and not including) 1.1.4 for example and wants his code to be portable on many OpenMPI versions and also on other MPI-2 implementations. In this situation he could do something like this in a common C header file:
<br>
<p>&nbsp;&nbsp;&nbsp;#ifdef OPEN_MPI
<br>
<p>&nbsp;&nbsp;&nbsp;/* true iff (x.y.z &lt; u.v.w) */
<br>
&nbsp;&nbsp;&nbsp;#define DOTTED_LESS_THAN(x,y,z, u,v,w)   \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(((x) &lt; (u)) || (((x) == (u)) &amp;&amp; (((y) &lt; (v)) || (((y) == (v)) &amp;&amp; ((z) &lt; (w))))))
<br>
<p>&nbsp;&nbsp;&nbsp;# if DOTTED_LESS_THAN(OMPI_MAJOR_VERSION, OMPI_MINOR_VERSION, OMPI_RELEASE_VERSION, 1,1,4)
<br>
&nbsp;&nbsp;&nbsp;#  define USE_MPI_WORKAROUND_XYZ
<br>
&nbsp;&nbsp;&nbsp;# endif
<br>
<p>&nbsp;&nbsp;&nbsp;#endif
<br>
<p><p>And later in the C source code:
<br>
<p>&nbsp;&nbsp;&nbsp;#ifdef USE_MPI_WORKAROUND_XYZ
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* use the workaround */
<br>
&nbsp;&nbsp;&nbsp;#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* use the normal method */
<br>
&nbsp;&nbsp;&nbsp;#endif
<br>
<p><p>Thanks,
<br>
<p>Martin
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2582/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2583.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>Previous message:</strong> <a href="2581.php">Galen Shipman: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2585.php">Bert Wesarg: "Re: [OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h"</a>
<li><strong>Reply:</strong> <a href="2585.php">Bert Wesarg: "Re: [OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h"</a>
<li><strong>Maybe reply:</strong> <a href="2597.php">Audet, Martin: "Re: [OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h"</a>
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
