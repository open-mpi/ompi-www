<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 17 00:22:45 2006" -->
<!-- isoreceived="20060517042245" -->
<!-- sent="Tue, 16 May 2006 21:22:44 -0700" -->
<!-- isosent="20060517042244" -->
<!-- name="W. Bryan Smith" -->
<!-- email="wbsmith_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ParaView runtime problem with openmpi 1.0.2" -->
<!-- id="e8289c090605162122g2d86985fk6d60bf866c934a70_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e8289c090605111442m34d0f67m30b5dc4ed4a2750a_at_mail.gmail.com" -->
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
<strong>From:</strong> W. Bryan Smith (<em>wbsmith_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-17 00:22:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1247.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] ParaView runtime problem with openmpi 1.0.2"</a>
<li><strong>Previous message:</strong> <a href="1245.php">Brian Barrett: "Re: [OMPI users] Release date for V1.1 or V1.0.3?"</a>
<li><strong>In reply to:</strong> <a href="1236.php">W. Bryan Smith: "[OMPI users] ParaView runtime problem with openmpi 1.0.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1247.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] ParaView runtime problem with openmpi 1.0.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
to successfully build ParaView with OpenMPI support in Linux:
<br>
<p>1) compile OpenMPI and add openmpi/bin/ to the top of your PATH and add
<br>
openmpi/lib/ to the top of the LD_LIBRARY_PATH environment variable.  this
<br>
is in my .cshrc so they are always set whenever i log in.
<br>
<p>2) download the ParaView source (paraview.org)
<br>
<p>3) edit CMakeLists.txt in the ParaView source directory to specify the MPI C
<br>
and C++ compilers:
<br>
<p>SET(CMAKE_C_COMPILER mpicc)
<br>
SET(CMAKE_CXX_COMPILER mpicxx)
<br>
<p>4) make a ParaView build directory and cd to the new dir (ParaView requires
<br>
out-of-source builds)
<br>
<p>5) configure the ParaView make using cmake as follows:
<br>
<p>cmake -DVTK_USE_MPI:BOOL=ON \
<br>
-DVTK_MPIRUN_EXE:FILEPATH=/path_to_openmpi1.0.2/bin/mpirun \
<br>
/path_to_paraview_src/
<br>
<p>6) once the configure is complete (lots of text dumped to the screen), you
<br>
should be able to make the binaries (from within the paraview build
<br>
directory):
<br>
<p>make
<br>
<p>Now you can run ParaView in parallel mode using:
<br>
<p>mpiexec -n NP /path_to_paraview_build/bin/./paraview
<br>
<p>where NP = desired number of processes.
<br>
happy parallel volume rendering...
<br>
<p>bryan
<br>
<p>On 5/11/06, W. Bryan Smith &lt;wbsmith_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i have compiled a program called ParaView (paraview.org) with MPI support
</span><br>
<span class="quotelev1">&gt; using OpenMPI 1.0.2, and when i try to run the paraview executable using
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec -n 4 paraview
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; miprun -np 4 paraview
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; instead of having one paraview window open with parallel support, there
</span><br>
<span class="quotelev1">&gt; are 4 paraview windows opened, none of which are running with parallel
</span><br>
<span class="quotelev1">&gt; support.  attached are the ompi_info and config.log files.  below is the
</span><br>
<span class="quotelev1">&gt; text of the cmake call i used to configure paraview:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cmake -DVTK_USE_MPI:BOOL=ON
</span><br>
<span class="quotelev1">&gt; -DMPI_INCLUDE_PATH:PATH=/local2/openmpi1.0.2/include/
</span><br>
<span class="quotelev1">&gt; -DVTK_MPIRUN_EXE:FILEPATH=/local2/openmpi1.0.2/bin/mpirun
</span><br>
<span class="quotelev1">&gt; -DMPI_LIBRARY:FILEPATH=/local2/openmpi1.0.2/lib/libmpicxx.la
</span><br>
<span class="quotelev1">&gt; /local2/paraview-2.4.3/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i also edited the ParaView CMakeLists.txt file to contain:
</span><br>
<span class="quotelev1">&gt; SET(CMAKE_C_COMPILER mpicc)
</span><br>
<span class="quotelev1">&gt; SET(CMAKE_CXX_COMPILER mpicxx)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; both compiler wrappers are on the top of my PATH.  also, as far as PATH
</span><br>
<span class="quotelev1">&gt; goes, yes, i am certain that the mpiexec and paraview binaries are the ones
</span><br>
<span class="quotelev1">&gt; i think they are ( i.e. when I WHICH MPIEXEC it only shows the one i
</span><br>
<span class="quotelev1">&gt; compiled locally, etc).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; anyone have any insight on this?  for the record, when i compile paraview
</span><br>
<span class="quotelev1">&gt; with MPI support using mpich2 (1.0.3), and then do mpiexec calling that
</span><br>
<span class="quotelev1">&gt; version of paraview, i get the expected behavior ( i.e. one paraview
</span><br>
<span class="quotelev1">&gt; window running with parallel support).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks in advance,
</span><br>
<span class="quotelev1">&gt; bryan smith
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1246/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1247.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] ParaView runtime problem with openmpi 1.0.2"</a>
<li><strong>Previous message:</strong> <a href="1245.php">Brian Barrett: "Re: [OMPI users] Release date for V1.1 or V1.0.3?"</a>
<li><strong>In reply to:</strong> <a href="1236.php">W. Bryan Smith: "[OMPI users] ParaView runtime problem with openmpi 1.0.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1247.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] ParaView runtime problem with openmpi 1.0.2"</a>
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
