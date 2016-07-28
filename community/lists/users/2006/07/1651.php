<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 19 10:36:49 2006" -->
<!-- isoreceived="20060719143649" -->
<!-- sent="Wed, 19 Jul 2006 16:35:07 +0200" -->
<!-- isosent="20060719143507" -->
<!-- name="Sven Stork" -->
<!-- email="stork_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bug report: wrong reference in mpi.h to mpicxx.h" -->
<!-- id="200607191635.07274.stork_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="44BE2C41.6010801_at_gup.jku.at" -->
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
<strong>Date:</strong> 2006-07-19 10:35:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1652.php">Brian Barrett: "Re: [OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
<li><strong>Previous message:</strong> <a href="1650.php">Paul Heinzlreiter: "[OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
<li><strong>In reply to:</strong> <a href="1650.php">Paul Heinzlreiter: "[OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1652.php">Brian Barrett: "Re: [OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Paul, 
<br>
<p>this previously posted &quot;tutorial&quot; how to build ParaView could maybe useful to 
<br>
you:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2006/05/1246.php">http://www.open-mpi.org/community/lists/users/2006/05/1246.php</a>
<br>
<p>regards,
<br>
Sven
<br>
<p>On Wednesday 19 July 2006 14:57, Paul Heinzlreiter wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure whether this bug has already been reported/fixed (maybe in
</span><br>
<span class="quotelev1">&gt; the v1.1.1 pre-release):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've compiled and installed Open MPI Version 1.1 (stable), which worked
</span><br>
<span class="quotelev1">&gt; well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for configuring OpenMPI I used the commandline
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/ph/local/openmpi --disable-mpi-f77
</span><br>
<span class="quotelev1">&gt; --disable-mpi-f99
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; since i don't need fortran support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Compiling and executing a simple MPI test program (in C) with Open MPI
</span><br>
<span class="quotelev1">&gt; also worked well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After that I tried to compile VTK (<a href="http://www.vtk.org">http://www.vtk.org</a>) with MPI support
</span><br>
<span class="quotelev1">&gt; using OpenMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The compilation process issued the following error message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/ph/local/openmpi/include/mpi.h:1757:33: ompi/mpi/cxx/mpicxx.h: No
</span><br>
<span class="quotelev1">&gt; such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and indeed the location of the file mpicxx.h is
</span><br>
<span class="quotelev1">&gt; /home/ph/local/openmpi/include/openmpi/ompi/mpi/cxx/mpicxx.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and in mpi.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it is stated
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #if !defined(OMPI_SKIP_MPICXX) &amp;&amp; OMPI_WANT_CXX_BINDINGS &amp;&amp; !OMPI_BUILDING
</span><br>
<span class="quotelev1">&gt; #if defined(__cplusplus) || defined(c_plusplus)
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/mpi/cxx/mpicxx.h&quot;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; so this would refer to the file
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/ph/local/openmpi/include/ompi/mpi/cxx/mpicxx.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; as I see it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; so there is one subdirectory missing (openmpi) in the reference within
</span><br>
<span class="quotelev1">&gt; mpi.h.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Paul Heinzlreiter
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
<li><strong>Next message:</strong> <a href="1652.php">Brian Barrett: "Re: [OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
<li><strong>Previous message:</strong> <a href="1650.php">Paul Heinzlreiter: "[OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
<li><strong>In reply to:</strong> <a href="1650.php">Paul Heinzlreiter: "[OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1652.php">Brian Barrett: "Re: [OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
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
