<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  6 04:57:11 2007" -->
<!-- isoreceived="20070906085711" -->
<!-- sent="Thu, 6 Sep 2007 10:56:54 +0200" -->
<!-- isosent="20070906085654" -->
<!-- name="Sven Stork" -->
<!-- email="stork_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI compiler is slowed down by including unnecessary header files" -->
<!-- id="200709061056.55017.stork_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="589EAB70-7A76-4821-9543-FE5EAD10DB68_at_cisco.com" -->
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
<strong>From:</strong> Sven Stork (<em>stork_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-06 04:56:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3980.php">Thompson, Aidan P.: "Re: [OMPI users] Open MPI compiler is slowed down by including unnecessary header files"</a>
<li><strong>Previous message:</strong> <a href="3978.php">Jeff Squyres: "Re: [OMPI users] Process termination problem"</a>
<li><strong>In reply to:</strong> <a href="3977.php">Jeff Squyres: "Re: [OMPI users] Open MPI compiler is slowed down by including unnecessary header files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3980.php">Thompson, Aidan P.: "Re: [OMPI users] Open MPI compiler is slowed down by including unnecessary header files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thursday 06 September 2007 02:29, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Unfortunately, &lt;iostream&gt; is there for a specific reason.  The  
</span><br>
<span class="quotelev1">&gt; MPI::SEEK_* names are problematic because they clash with the  
</span><br>
<span class="quotelev1">&gt; equivalent C constants.  With the tricks that we have to play to make  
</span><br>
<span class="quotelev1">&gt; those constants [at least mostly] work in the MPI C++ namespace, we  
</span><br>
<span class="quotelev1">&gt; *must* include them.  The comment in mpicxx.h explains:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; // We need to include the header files that define SEEK_* or use them
</span><br>
<span class="quotelev1">&gt; // in ways that require them to be #defines so that if the user
</span><br>
<span class="quotelev1">&gt; // includes them later, the double inclusion logic in the headers will
</span><br>
<span class="quotelev1">&gt; // prevent trouble from occuring.
</span><br>
<span class="quotelev1">&gt; // include so that we can smash SEEK_* properly
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; // include because on Linux, there is one place that assumes SEEK_* is
</span><br>
<span class="quotelev1">&gt; // a #define (it's used in an enum).
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Additionally, much of the C++ MPI bindings are implemented as inline  
</span><br>
<span class="quotelev1">&gt; functions, meaning that, yes, it does add lots of extra code to be  
</span><br>
<span class="quotelev1">&gt; compiled.  Sadly, that's the price we pay for optimization (the fact  
</span><br>
<span class="quotelev1">&gt; that they're inlined allows the cost to be zero -- we used to have a  
</span><br>
<span class="quotelev1">&gt; paper on the LAM/MPI web site showing specific performance numbers to  
</span><br>
<span class="quotelev1">&gt; back up this claim, but I can't find it anymore :-\ [the OMPI C++  
</span><br>
<span class="quotelev1">&gt; bindings were derived from the LAM/MPI C++ bindings]).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You have two options for speeding up C++ builds:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Disable OMPI's MPI C++ bindings altogether with the --disable-mpi- 
</span><br>
<span class="quotelev1">&gt; cxx configure flag.  This means that &lt;mpi.h&gt; won't include any of  
</span><br>
<span class="quotelev1">&gt; those extra C++ header files at all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. If you're not using the MPI-2 C++ bindings for the IO  
</span><br>
<span class="quotelev1">&gt; functionality, you can disable the SEEK_* macros (and therefore  
</span><br>
<span class="quotelev1">&gt; &lt;stdio.h&gt; and &lt;iostream&gt;) with the --disable-mpi-cxx-seek configure  
</span><br>
<span class="quotelev1">&gt; flag.
</span><br>
<p>maybe this could be a third option:
<br>
<p>3. just add -DOMPI_SKIP_MPICXX to you compilation flags to skip the inclusion 
<br>
of the mpicxx.h.
<br>
<p>-- Sven 
<br>
<p><span class="quotelev1">&gt; See &quot;./configure --help&quot; for a full list of configure flags that are  
</span><br>
<span class="quotelev1">&gt; available.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 4, 2007, at 4:22 PM, Thompson, Aidan P. wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This is more a comment that a question. I think the compile-time  
</span><br>
<span class="quotelev2">&gt; &gt; required
</span><br>
<span class="quotelev2">&gt; &gt; for large applications that use Open MPI is unnecessarily long. The
</span><br>
<span class="quotelev2">&gt; &gt; situation could be greatly improved by streamlining the number of C+ 
</span><br>
<span class="quotelev2">&gt; &gt; + header
</span><br>
<span class="quotelev2">&gt; &gt; files that are included. Currently, compiling LAMMPS  
</span><br>
<span class="quotelev2">&gt; &gt; (lammps.sandia.gov)
</span><br>
<span class="quotelev2">&gt; &gt; takes 61 seconds to compile with a dummy MPI library and 262  
</span><br>
<span class="quotelev2">&gt; &gt; seconds with
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI, a 4x slowdown.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I noticed that iostream.h is included by mpicxx.h, for no good  
</span><br>
<span class="quotelev2">&gt; &gt; reason. To
</span><br>
<span class="quotelev2">&gt; &gt; measure the cost of this, I compiled the follow source file 1)  
</span><br>
<span class="quotelev2">&gt; &gt; without any
</span><br>
<span class="quotelev2">&gt; &gt; include files 2) with mpi.h 3) with iostream.h and 4) with both:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ more foo.cpp
</span><br>
<span class="quotelev2">&gt; &gt; #ifdef FOO_MPI
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; #endif
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #ifdef FOO_IO
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #endif
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; void foo() {};
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ time mpic++ -c foo.cpp
</span><br>
<span class="quotelev2">&gt; &gt;         0.04 real         0.02 user         0.02 sys
</span><br>
<span class="quotelev2">&gt; &gt; $ time mpic++ -DFOO_MPI -c foo.cpp
</span><br>
<span class="quotelev2">&gt; &gt;         0.58 real         0.47 user         0.07 sys
</span><br>
<span class="quotelev2">&gt; &gt; $ time mpic++ -DFOO_IO -c foo.cpp
</span><br>
<span class="quotelev2">&gt; &gt;         0.30 real         0.23 user         0.05 sys
</span><br>
<span class="quotelev2">&gt; &gt; $ time mpic++ -DFOO_IO -DFOO_MPI -c foo.cpp
</span><br>
<span class="quotelev2">&gt; &gt;         0.56 real         0.47 user         0.07 sys
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Including mpi.h adds about 0.5 seconds to the compile time and  
</span><br>
<span class="quotelev2">&gt; &gt; iostream
</span><br>
<span class="quotelev2">&gt; &gt; accounts for about half of that. With optimization, the effect is even
</span><br>
<span class="quotelev2">&gt; &gt; greater. When you have hundreds of source files, that really adds up.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; How about cleaning up your include system?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Aidan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt;       Aidan P. Thompson
</span><br>
<span class="quotelev2">&gt; &gt;       01435 Multiscale Dynamic Materials Modeling
</span><br>
<span class="quotelev2">&gt; &gt;       Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt; &gt;       PO Box 5800, MS 1322     Phone: 505-844-9702
</span><br>
<span class="quotelev2">&gt; &gt;       Albuquerque, NM 87185    FAX  : 505-845-7442
</span><br>
<span class="quotelev2">&gt; &gt;       mailto:athomps_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3980.php">Thompson, Aidan P.: "Re: [OMPI users] Open MPI compiler is slowed down by including unnecessary header files"</a>
<li><strong>Previous message:</strong> <a href="3978.php">Jeff Squyres: "Re: [OMPI users] Process termination problem"</a>
<li><strong>In reply to:</strong> <a href="3977.php">Jeff Squyres: "Re: [OMPI users] Open MPI compiler is slowed down by including unnecessary header files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3980.php">Thompson, Aidan P.: "Re: [OMPI users] Open MPI compiler is slowed down by including unnecessary header files"</a>
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
