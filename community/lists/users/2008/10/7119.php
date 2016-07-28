<?
$subject_val = "Re: [OMPI users] C++ Exceptions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 10:36:31 2008" -->
<!-- isoreceived="20081028143631" -->
<!-- sent="Tue, 28 Oct 2008 15:36:00 +0100" -->
<!-- isosent="20081028143600" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] C++ Exceptions" -->
<!-- id="3a37617f0810280736o3a36ad3aw7235bd88f17034a0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E50120EC-B6EC-48FC-ACA4-4868388885AC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] C++ Exceptions<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-28 10:36:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7120.php">Gabriele Fatigati: "Re: [OMPI users] C++ Exceptions"</a>
<li><strong>Previous message:</strong> <a href="7118.php">Jeff Squyres: "Re: [OMPI users] C++ Exceptions"</a>
<li><strong>In reply to:</strong> <a href="7118.php">Jeff Squyres: "Re: [OMPI users] C++ Exceptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7120.php">Gabriele Fatigati: "Re: [OMPI users] C++ Exceptions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Very clear reply,
<br>
thanks Jeff :)
<br>
<p>2008/10/28 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Your question is quite timely -- we had a long discussion about C++
</span><br>
<span class="quotelev1">&gt; exceptions just last week at the MPI Forum...  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI disables MPI throwing exceptions by default because it can cause a
</span><br>
<span class="quotelev1">&gt; [slight] performance penalty in some compilers.  You can enable it by adding
</span><br>
<span class="quotelev1">&gt; --enable-cxx-exceptions to the OMPI configure command line.  The issue is
</span><br>
<span class="quotelev1">&gt; that C++ exceptions have to pass through C (and possibly Fortran) code, so
</span><br>
<span class="quotelev1">&gt; the compiler has to add some extra instrumentation in each function call to
</span><br>
<span class="quotelev1">&gt; all the exceptions to pass through (my understanding only, which may not be
</span><br>
<span class="quotelev1">&gt; entirely correct).  Here's what happens:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  application (in C, C++, or Fortran)
</span><br>
<span class="quotelev1">&gt;    -&gt; calls MPI_Foo()
</span><br>
<span class="quotelev1">&gt;    -&gt; an error occurs, OMPI calls its error handling routines
</span><br>
<span class="quotelev1">&gt;    -&gt; if MPI::ERRORS_THROW_EXCEPTIONS was set, this triggers a function
</span><br>
<span class="quotelev1">&gt; pointer call into libmpi_cxx.*
</span><br>
<span class="quotelev1">&gt;    -&gt; the underlying C++ function then invokes &quot;throw ...&quot; to throw the MPI
</span><br>
<span class="quotelev1">&gt; exception
</span><br>
<span class="quotelev1">&gt;    -&gt; the exception leaves the C++ code and goes into OMPI's C code
</span><br>
<span class="quotelev1">&gt;    -&gt; the exception has to travel through the C code back up to the
</span><br>
<span class="quotelev1">&gt; application
</span><br>
<span class="quotelev1">&gt;    -&gt; the exceptions it keeps going upward until it is either caught or the
</span><br>
<span class="quotelev1">&gt; application aborts
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hence, you have to tell C and Fortran compilers to enable this &quot;pass
</span><br>
<span class="quotelev1">&gt; exceptions through&quot; behavior.  With the GNU compilers, you have to specify
</span><br>
<span class="quotelev1">&gt; -fexceptions when you compile C / Fortran codes.  There's a bug in the OMPI
</span><br>
<span class="quotelev1">&gt; v1.2 series that we just discovered last week while doing 1.3 release
</span><br>
<span class="quotelev1">&gt; testing (this is actually what triggered the long discussion and code fixes
</span><br>
<span class="quotelev1">&gt; about C++ exceptions last week) such that you need to manually specify the
</span><br>
<span class="quotelev1">&gt; exceptions flags for your compiler.  Something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ./configure --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;      CFLAGS=-fexceptions CXXFLAGS=-fexceptions FFLAGS=-fexceptions
</span><br>
<span class="quotelev1">&gt; FCFLAGS=-fexceptions \
</span><br>
<span class="quotelev1">&gt;      --with-wrapper-cflags=-fexceptions \
</span><br>
<span class="quotelev1">&gt;      --with-wrapper-cxxflags=-fexceptions \
</span><br>
<span class="quotelev1">&gt;      --with-wrapper-fflags=-fexceptions \
</span><br>
<span class="quotelev1">&gt;      --with-wrapper-fcflags=-fexceptions \
</span><br>
<span class="quotelev1">&gt;      ...your other configure arguments...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the v1.3 series, this is fixed such that you only need to specify:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ./configure --enable-cxx-exceptions ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...although in checking all the technical data for this e-mail, I found a
</span><br>
<span class="quotelev1">&gt; mistake in our commits from last week on the SVN trunk; I just committed a
</span><br>
<span class="quotelev1">&gt; fix in r19819 (sorry for the configure-changing commit in the middle of the
</span><br>
<span class="quotelev1">&gt; day, folks!).  The v1.3 branch will be updated to get this fix shortly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is unlikely that we'll port this fix back to the 1.2 series, so you'll
</span><br>
<span class="quotelev1">&gt; need to enable all the extra flags if you want exception support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hopefully that all made sense... :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 28, 2008, at 9:26 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear OpenMPi developers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i'm developing parallel C++ application  under OpenMPI 1.2.5. At the
</span><br>
<span class="quotelev2">&gt;&gt; moment, i'm using MPI Exception Handlers, but  some processors returns
</span><br>
<span class="quotelev2">&gt;&gt; the error below:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;MPI 2 C++ exception throwing is disabled, MPI::mpi_errno has the error
</span><br>
<span class="quotelev2">&gt;&gt; code&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why this, and why only in some nodes?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Supercomputing  Group
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; g.fatigati_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Ing. Gabriele Fatigati
CINECA Systems &amp; Tecnologies Department
Supercomputing  Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7120.php">Gabriele Fatigati: "Re: [OMPI users] C++ Exceptions"</a>
<li><strong>Previous message:</strong> <a href="7118.php">Jeff Squyres: "Re: [OMPI users] C++ Exceptions"</a>
<li><strong>In reply to:</strong> <a href="7118.php">Jeff Squyres: "Re: [OMPI users] C++ Exceptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7120.php">Gabriele Fatigati: "Re: [OMPI users] C++ Exceptions"</a>
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
