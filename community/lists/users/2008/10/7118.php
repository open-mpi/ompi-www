<?
$subject_val = "Re: [OMPI users] C++ Exceptions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 10:28:36 2008" -->
<!-- isoreceived="20081028142836" -->
<!-- sent="Tue, 28 Oct 2008 10:28:30 -0400" -->
<!-- isosent="20081028142830" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] C++ Exceptions" -->
<!-- id="E50120EC-B6EC-48FC-ACA4-4868388885AC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3a37617f0810280626l254afa6cka04cf82776f378e8_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-28 10:28:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7119.php">Gabriele Fatigati: "Re: [OMPI users] C++ Exceptions"</a>
<li><strong>Previous message:</strong> <a href="7117.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>In reply to:</strong> <a href="7116.php">Gabriele Fatigati: "[OMPI users] C++ Exceptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7119.php">Gabriele Fatigati: "Re: [OMPI users] C++ Exceptions"</a>
<li><strong>Reply:</strong> <a href="7119.php">Gabriele Fatigati: "Re: [OMPI users] C++ Exceptions"</a>
<li><strong>Reply:</strong> <a href="7120.php">Gabriele Fatigati: "Re: [OMPI users] C++ Exceptions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Your question is quite timely -- we had a long discussion about C++  
<br>
exceptions just last week at the MPI Forum...  :-)
<br>
<p>OMPI disables MPI throwing exceptions by default because it can cause  
<br>
a [slight] performance penalty in some compilers.  You can enable it  
<br>
by adding --enable-cxx-exceptions to the OMPI configure command line.   
<br>
The issue is that C++ exceptions have to pass through C (and possibly  
<br>
Fortran) code, so the compiler has to add some extra instrumentation  
<br>
in each function call to all the exceptions to pass through (my  
<br>
understanding only, which may not be entirely correct).  Here's what  
<br>
happens:
<br>
<p>&nbsp;&nbsp;&nbsp;application (in C, C++, or Fortran)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt; calls MPI_Foo()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt; an error occurs, OMPI calls its error handling routines
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt; if MPI::ERRORS_THROW_EXCEPTIONS was set, this triggers a  
<br>
function pointer call into libmpi_cxx.*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt; the underlying C++ function then invokes &quot;throw ...&quot; to throw  
<br>
the MPI exception
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt; the exception leaves the C++ code and goes into OMPI's C code
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt; the exception has to travel through the C code back up to the  
<br>
application
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&gt; the exceptions it keeps going upward until it is either caught  
<br>
or the application aborts
<br>
<p>Hence, you have to tell C and Fortran compilers to enable this &quot;pass  
<br>
exceptions through&quot; behavior.  With the GNU compilers, you have to  
<br>
specify -fexceptions when you compile C / Fortran codes.  There's a  
<br>
bug in the OMPI v1.2 series that we just discovered last week while  
<br>
doing 1.3 release testing (this is actually what triggered the long  
<br>
discussion and code fixes about C++ exceptions last week) such that  
<br>
you need to manually specify the exceptions flags for your compiler.   
<br>
Something like this:
<br>
<p>&nbsp;&nbsp;&nbsp;./configure --enable-cxx-exceptions \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CFLAGS=-fexceptions CXXFLAGS=-fexceptions FFLAGS=-fexceptions  
<br>
FCFLAGS=-fexceptions \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-wrapper-cflags=-fexceptions \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-wrapper-cxxflags=-fexceptions \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-wrapper-fflags=-fexceptions \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-wrapper-fcflags=-fexceptions \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...your other configure arguments...
<br>
<p>In the v1.3 series, this is fixed such that you only need to specify:
<br>
<p>&nbsp;&nbsp;&nbsp;./configure --enable-cxx-exceptions ...
<br>
<p>...although in checking all the technical data for this e-mail, I  
<br>
found a mistake in our commits from last week on the SVN trunk; I just  
<br>
committed a fix in r19819 (sorry for the configure-changing commit in  
<br>
the middle of the day, folks!).  The v1.3 branch will be updated to  
<br>
get this fix shortly.
<br>
<p>It is unlikely that we'll port this fix back to the 1.2 series, so  
<br>
you'll need to enable all the extra flags if you want exception support.
<br>
<p>Hopefully that all made sense... :-)
<br>
<p><p><p>On Oct 28, 2008, at 9:26 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPi developers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i'm developing parallel C++ application  under OpenMPI 1.2.5. At the
</span><br>
<span class="quotelev1">&gt; moment, i'm using MPI Exception Handlers, but  some processors returns
</span><br>
<span class="quotelev1">&gt; the error below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;MPI 2 C++ exception throwing is disabled, MPI::mpi_errno has the  
</span><br>
<span class="quotelev1">&gt; error code&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why this, and why only in some nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supercomputing  Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati_at_[hidden]
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
<li><strong>Next message:</strong> <a href="7119.php">Gabriele Fatigati: "Re: [OMPI users] C++ Exceptions"</a>
<li><strong>Previous message:</strong> <a href="7117.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>In reply to:</strong> <a href="7116.php">Gabriele Fatigati: "[OMPI users] C++ Exceptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7119.php">Gabriele Fatigati: "Re: [OMPI users] C++ Exceptions"</a>
<li><strong>Reply:</strong> <a href="7119.php">Gabriele Fatigati: "Re: [OMPI users] C++ Exceptions"</a>
<li><strong>Reply:</strong> <a href="7120.php">Gabriele Fatigati: "Re: [OMPI users] C++ Exceptions"</a>
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
