<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep  5 20:30:17 2007" -->
<!-- isoreceived="20070906003017" -->
<!-- sent="Wed, 5 Sep 2007 20:29:51 -0400" -->
<!-- isosent="20070906002951" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI compiler is slowed down by including unnecessary header files" -->
<!-- id="589EAB70-7A76-4821-9543-FE5EAD10DB68_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C3031A90.1229B%athomps_at_sandia.gov" -->
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
<strong>Date:</strong> 2007-09-05 20:29:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3978.php">Jeff Squyres: "Re: [OMPI users] Process termination problem"</a>
<li><strong>Previous message:</strong> <a href="3976.php">Thompson, Aidan P.: "[OMPI users] Open MPI compiler is slowed down by including unnecessary header files"</a>
<li><strong>In reply to:</strong> <a href="3976.php">Thompson, Aidan P.: "[OMPI users] Open MPI compiler is slowed down by including unnecessary header files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3979.php">Sven Stork: "Re: [OMPI users] Open MPI compiler is slowed down by including unnecessary header files"</a>
<li><strong>Reply:</strong> <a href="3979.php">Sven Stork: "Re: [OMPI users] Open MPI compiler is slowed down by including unnecessary header files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, &lt;iostream&gt; is there for a specific reason.  The  
<br>
MPI::SEEK_* names are problematic because they clash with the  
<br>
equivalent C constants.  With the tricks that we have to play to make  
<br>
those constants [at least mostly] work in the MPI C++ namespace, we  
<br>
*must* include them.  The comment in mpicxx.h explains:
<br>
<p>// We need to include the header files that define SEEK_* or use them
<br>
// in ways that require them to be #defines so that if the user
<br>
// includes them later, the double inclusion logic in the headers will
<br>
// prevent trouble from occuring.
<br>
// include so that we can smash SEEK_* properly
<br>
#include &lt;stdio.h&gt;
<br>
// include because on Linux, there is one place that assumes SEEK_* is
<br>
// a #define (it's used in an enum).
<br>
#include &lt;iostream&gt;
<br>
<p>Additionally, much of the C++ MPI bindings are implemented as inline  
<br>
functions, meaning that, yes, it does add lots of extra code to be  
<br>
compiled.  Sadly, that's the price we pay for optimization (the fact  
<br>
that they're inlined allows the cost to be zero -- we used to have a  
<br>
paper on the LAM/MPI web site showing specific performance numbers to  
<br>
back up this claim, but I can't find it anymore :-\ [the OMPI C++  
<br>
bindings were derived from the LAM/MPI C++ bindings]).
<br>
<p>You have two options for speeding up C++ builds:
<br>
<p>1. Disable OMPI's MPI C++ bindings altogether with the --disable-mpi- 
<br>
cxx configure flag.  This means that &lt;mpi.h&gt; won't include any of  
<br>
those extra C++ header files at all.
<br>
<p>2. If you're not using the MPI-2 C++ bindings for the IO  
<br>
functionality, you can disable the SEEK_* macros (and therefore  
<br>
&lt;stdio.h&gt; and &lt;iostream&gt;) with the --disable-mpi-cxx-seek configure  
<br>
flag.
<br>
<p>See &quot;./configure --help&quot; for a full list of configure flags that are  
<br>
available.
<br>
<p><p><p><p>On Sep 4, 2007, at 4:22 PM, Thompson, Aidan P. wrote:
<br>
<p><span class="quotelev1">&gt; This is more a comment that a question. I think the compile-time  
</span><br>
<span class="quotelev1">&gt; required
</span><br>
<span class="quotelev1">&gt; for large applications that use Open MPI is unnecessarily long. The
</span><br>
<span class="quotelev1">&gt; situation could be greatly improved by streamlining the number of C+ 
</span><br>
<span class="quotelev1">&gt; + header
</span><br>
<span class="quotelev1">&gt; files that are included. Currently, compiling LAMMPS  
</span><br>
<span class="quotelev1">&gt; (lammps.sandia.gov)
</span><br>
<span class="quotelev1">&gt; takes 61 seconds to compile with a dummy MPI library and 262  
</span><br>
<span class="quotelev1">&gt; seconds with
</span><br>
<span class="quotelev1">&gt; Open MPI, a 4x slowdown.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I noticed that iostream.h is included by mpicxx.h, for no good  
</span><br>
<span class="quotelev1">&gt; reason. To
</span><br>
<span class="quotelev1">&gt; measure the cost of this, I compiled the follow source file 1)  
</span><br>
<span class="quotelev1">&gt; without any
</span><br>
<span class="quotelev1">&gt; include files 2) with mpi.h 3) with iostream.h and 4) with both:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ more foo.cpp
</span><br>
<span class="quotelev1">&gt; #ifdef FOO_MPI
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ifdef FOO_IO
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; void foo() {};
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ time mpic++ -c foo.cpp
</span><br>
<span class="quotelev1">&gt;         0.04 real         0.02 user         0.02 sys
</span><br>
<span class="quotelev1">&gt; $ time mpic++ -DFOO_MPI -c foo.cpp
</span><br>
<span class="quotelev1">&gt;         0.58 real         0.47 user         0.07 sys
</span><br>
<span class="quotelev1">&gt; $ time mpic++ -DFOO_IO -c foo.cpp
</span><br>
<span class="quotelev1">&gt;         0.30 real         0.23 user         0.05 sys
</span><br>
<span class="quotelev1">&gt; $ time mpic++ -DFOO_IO -DFOO_MPI -c foo.cpp
</span><br>
<span class="quotelev1">&gt;         0.56 real         0.47 user         0.07 sys
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Including mpi.h adds about 0.5 seconds to the compile time and  
</span><br>
<span class="quotelev1">&gt; iostream
</span><br>
<span class="quotelev1">&gt; accounts for about half of that. With optimization, the effect is even
</span><br>
<span class="quotelev1">&gt; greater. When you have hundreds of source files, that really adds up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How about cleaning up your include system?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aidan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;       Aidan P. Thompson
</span><br>
<span class="quotelev1">&gt;       01435 Multiscale Dynamic Materials Modeling
</span><br>
<span class="quotelev1">&gt;       Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt;       PO Box 5800, MS 1322     Phone: 505-844-9702
</span><br>
<span class="quotelev1">&gt;       Albuquerque, NM 87185    FAX  : 505-845-7442
</span><br>
<span class="quotelev1">&gt;       mailto:athomps_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3978.php">Jeff Squyres: "Re: [OMPI users] Process termination problem"</a>
<li><strong>Previous message:</strong> <a href="3976.php">Thompson, Aidan P.: "[OMPI users] Open MPI compiler is slowed down by including unnecessary header files"</a>
<li><strong>In reply to:</strong> <a href="3976.php">Thompson, Aidan P.: "[OMPI users] Open MPI compiler is slowed down by including unnecessary header files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3979.php">Sven Stork: "Re: [OMPI users] Open MPI compiler is slowed down by including unnecessary header files"</a>
<li><strong>Reply:</strong> <a href="3979.php">Sven Stork: "Re: [OMPI users] Open MPI compiler is slowed down by including unnecessary header files"</a>
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
