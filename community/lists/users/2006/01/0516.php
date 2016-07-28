<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 19 15:27:01 2006" -->
<!-- isoreceived="20060119202701" -->
<!-- sent="Thu, 19 Jan 2006 15:27:00 -0500" -->
<!-- isosent="20060119202700" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] OMPI_WANT_CXX_BINDINGS" -->
<!-- id="0C4A9733-8365-4222-851C-7E22FD61BBCD_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43CCA80C.1020202_at_mech.kuleuven.be" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-19 15:27:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0517.php">Glenn Morris: "[O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<li><strong>Previous message:</strong> <a href="0515.php">Jeff Squyres: "Re: [O-MPI users] ompi spec file"</a>
<li><strong>In reply to:</strong> <a href="0507.php">Yves Reymen: "Re: [O-MPI users] OMPI_WANT_CXX_BINDINGS"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 17, 2006, at 3:17 AM, Yves Reymen wrote:
<br>
<p><span class="quotelev1">&gt; Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 16, 2006, at 11:32 AM, Yves Reymen wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Recently openmpi v1.0.1 was installed on our cluster. It contains  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parameters of ompi_config.h within a #ifndef OMPI_CONFIG_H. I am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wondering how it is possible to give one of these parameters an  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; value after everthing is configured and installed, given the fact  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; no ompi_config.h is present in the installation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Take for instance the OMPI_WANT_CXX_BINDINGS that decides if you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; want to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; include de C++ bindings in mpicxx.h or not. If I set it on my  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line as -DOMPI_WANT_CXX_BINDINGS=0. It will always be redefined  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; value in mpi.h, which for our installation is 1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a way of getting rid of this redefinition?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your only options are to live with the defaults installed or re-
</span><br>
<span class="quotelev2">&gt;&gt; configure with the values you want.  For this one value, you could
</span><br>
<span class="quotelev2">&gt;&gt; probably safely edit the #define for OMPI_WANT_CXX_BINDINGS in mpi.h,
</span><br>
<span class="quotelev2">&gt;&gt; but that would only work in this one scenario, and even then, would
</span><br>
<span class="quotelev2">&gt;&gt; prevent the use of the C++ bindings with that install.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We generally don't allow for overriding those configure options
</span><br>
<span class="quotelev2">&gt;&gt; because in almost all cases, it won't result in what the user
</span><br>
<span class="quotelev2">&gt;&gt; expects.  For instance, if the value for WANT_CXX_BINDINGS is set to
</span><br>
<span class="quotelev2">&gt;&gt; 0 by configure, and the user tries to set it to 1, the headers and
</span><br>
<span class="quotelev2">&gt;&gt; libraries required for the C++ bindings won't be present.  Or if you
</span><br>
<span class="quotelev2">&gt;&gt; tried to change the WANT_EXCEPTIONS value from 0 to 1, code not built
</span><br>
<span class="quotelev2">&gt;&gt; to handle exceptions might suddenly be expected to do so, resulting
</span><br>
<span class="quotelev2">&gt;&gt; in very bad things.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a reason that you want to disable the C++ bindings after
</span><br>
<span class="quotelev2">&gt;&gt; installation?  They should be absolutely harmless if you aren't using
</span><br>
<span class="quotelev2">&gt;&gt; them.  If that isn't the case, then we need to fix whatever is
</span><br>
<span class="quotelev2">&gt;&gt; causing your problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is that I am using libraries written in C but intended  
</span><br>
<span class="quotelev1">&gt; also
</span><br>
<span class="quotelev1">&gt; for use in C++. The problem occurs with autopack, which is a
</span><br>
<span class="quotelev1">&gt; message-passing library which transparently packs small messages into
</span><br>
<span class="quotelev1">&gt; fewer larger ones for more efficient transport by MPI.
</span><br>
<span class="quotelev1">&gt; <a href="http://www-unix.mcs.anl.gov/autopack/">http://www-unix.mcs.anl.gov/autopack/</a>
</span><br>
<span class="quotelev1">&gt; The last release is 1.3 and dates back to May 2000. Now it seems
</span><br>
<span class="quotelev1">&gt; development has started on version 1.4.
</span><br>
<span class="quotelev1">&gt; In the main header, autopack.h, mpi.h is included in a Extern C  
</span><br>
<span class="quotelev1">&gt; block if
</span><br>
<span class="quotelev1">&gt; a C++ compiler is used:
</span><br>
<span class="quotelev1">&gt; #ifdef __cplusplus
</span><br>
<span class="quotelev1">&gt; extern &quot;C&quot; {
</span><br>
<span class="quotelev1">&gt; #endif  /* __cplusplus */
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; #include mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; #ifdef __cplusplus
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; #endif  /* __cplusplus */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem can be solved by taking the #include out of the extern C
</span><br>
<span class="quotelev1">&gt; block, the C bindings will still be available. But that would mean I
</span><br>
<span class="quotelev1">&gt; have to edit third party software, which I like to avoid if possible.
</span><br>
<p>I would definitely contact the autopack developers about this problem  
<br>
-- mpi.h is required by the MPI-2 standard to be safe for inclusion  
<br>
directly by C++ programs, and given the requirement that mpi.h  
<br>
provide the C++ bindings when compiling C++ code, I'm not sure what  
<br>
else we can do.  In the short term, my only suggestion would be to  
<br>
remove the extern C in autopack or build Open MPI without C++ bindings.
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0517.php">Glenn Morris: "[O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<li><strong>Previous message:</strong> <a href="0515.php">Jeff Squyres: "Re: [O-MPI users] ompi spec file"</a>
<li><strong>In reply to:</strong> <a href="0507.php">Yves Reymen: "Re: [O-MPI users] OMPI_WANT_CXX_BINDINGS"</a>
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
