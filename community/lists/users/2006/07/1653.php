<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 19 10:54:11 2006" -->
<!-- isoreceived="20060719145411" -->
<!-- sent="Wed, 19 Jul 2006 16:54:06 +0200" -->
<!-- isosent="20060719145406" -->
<!-- name="Paul Heinzlreiter" -->
<!-- email="ph_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bug report: wrong reference in mpi.h to mpicxx.h" -->
<!-- id="44BE478E.1060505_at_gup.jku.at" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1153320059.15195.12.camel_at_boxtop.lanl.gov" -->
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
<strong>From:</strong> Paul Heinzlreiter (<em>ph_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-19 10:54:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1654.php">Frank Gruellich: "[OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>Previous message:</strong> <a href="1652.php">Brian Barrett: "Re: [OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
<li><strong>In reply to:</strong> <a href="1652.php">Brian Barrett: "Re: [OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just copied .../openmpi/include/openmpi/ompi/... to
<br>
../openmpi/include/ompi/ ...
<br>
<p>and all went well, VTK was built together with it's testing tree
<br>
including MPI applications, using the g++/gcc compiler.
<br>
<p>maybe it works with the mpi(CC/cc) compiler without moving directories
<br>
around.
<br>
<p>you can only specify one compiler for the whole vtk source and most of
<br>
it is not mpi dependent.
<br>
<p><p>Paul
<br>
<p>Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; On Wed, 2006-07-19 at 14:57 +0200, Paul Heinzlreiter wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; After that I tried to compile VTK (<a href="http://www.vtk.org">http://www.vtk.org</a>) with MPI support
</span><br>
<span class="quotelev2">&gt;&gt; using OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The compilation process issued the following error message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/ph/local/openmpi/include/mpi.h:1757:33: ompi/mpi/cxx/mpicxx.h: No
</span><br>
<span class="quotelev2">&gt;&gt; such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sven sent instructions on how to best build VTK, but I wanted to explain
</span><br>
<span class="quotelev1">&gt; what you are seeing.  Open MPI actually requires two -I options to use
</span><br>
<span class="quotelev1">&gt; the C++ bindings: -I&lt;prefix&gt;/include and -I&lt;prefix&gt;/include/openmpi.
</span><br>
<span class="quotelev1">&gt; Generally, the wrapper compilers (mpicc, mpiCC, mpif77, etc.) are used
</span><br>
<span class="quotelev1">&gt; to build Open MPI applications and the -I flags are automatically added
</span><br>
<span class="quotelev1">&gt; without any problem (a bunch of other flags that might be required on
</span><br>
<span class="quotelev1">&gt; your system may also be added).  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can use the &quot;mpiCC -showme&quot; option to the wrapper compiler to see
</span><br>
<span class="quotelev1">&gt; excatly which flags it might add when compiling / linking / etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
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
<li><strong>Next message:</strong> <a href="1654.php">Frank Gruellich: "[OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>Previous message:</strong> <a href="1652.php">Brian Barrett: "Re: [OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
<li><strong>In reply to:</strong> <a href="1652.php">Brian Barrett: "Re: [OMPI users] bug report: wrong reference in mpi.h to mpicxx.h"</a>
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
