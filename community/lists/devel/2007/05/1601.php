<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 29 09:22:09 2007" -->
<!-- isoreceived="20070529132209" -->
<!-- sent="Tue, 29 May 2007 09:22:01 -0400" -->
<!-- isosent="20070529132201" -->
<!-- name="Jack Howarth" -->
<!-- email="howarth_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] undefined environ symbol on Darwin" -->
<!-- id="20070529132201.GA8931_at_bromo.msbb.uc.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20070528165935.GA1107_at_bromo.msbb.uc.edu" -->
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
<strong>From:</strong> Jack Howarth (<em>howarth_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-29 09:22:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1602.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Previous message:</strong> <a href="1600.php">Gleb Natapov: "[OMPI devel] Fix for deadlock in OB1 RDMA protocol"</a>
<li><strong>In reply to:</strong> <a href="1590.php">Jack Howarth: "[OMPI devel] undefined environ symbol on Darwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1602.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Below is the response I got from the fink developer
<br>
who was trying to package paraview and ran into this
<br>
problem with the undefined environ symbol in openmpi.
<br>
I have also emailed on darwin-dev to get a clarification
<br>
on this issue. However your argument against target
<br>
specific chances is rather ironic considering openmpi
<br>
already has wrappers for Windows on those lines of code.
<br>
I've attached the error that is seen while compiling paraview. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jack
<br>
<p>-----------------------------------------------------------------------
<br>
<p>I tried several patches to the paraview build scripts in order to get
<br>
rid of this undefined symbol, but I was not successful, one reason being
<br>
that the build process uses cmake which I find much less transparent
<br>
than the usual configure/libtool combination.
<br>
<p>While looking through the build script, I see now that in fact there is
<br>
a difference between the linker command for this library
<br>
libicet_mpi.dylib and many other dylibs built in paraview, for example
<br>
libvtkParallel.pv2.6.dylib. Those use an explicit
<br>
-Wl,-flat_namespace,-U,_environ linker flag. Could it be that this is
<br>
there in order to avoid exactly this problem? I don't know. I'll look
<br>
some more where this comes from.
<br>
<p>Here the error:
<br>
<p>cd
<br>
/sw_unstable/src/fink.build/paraview-mpi-openmpi-2.6.1-1001/paraview-mpi-openmpi-darwin/Utilities/IceT/src/communication
<br>
&amp;&amp; /sw/bin/cmake -E cmake_link_script CMakeFiles/icet_mpi.dir/link.txt
<br>
--verbose=1
<br>
/sw/bin/gcc    -O3 -DNDEBUG -dynamiclib -headerpad_max_install_names
<br>
-Wl,-search_paths_first -o ../../../../bin/libicet_mpi.dylib
<br>
-install_name /sw/lib/paraview-2.6/libicet_mpi.dylib
<br>
&quot;CMakeFiles/icet_mpi.dir/mpi.o&quot;
<br>
-L/sw_unstable/src/fink.build/paraview-mpi-openmpi-2.6.1-1001/paraview-mpi-openmpi-darwin/bin
<br>
-L/usr/X11R6/lib -lGLU -L/usr/X11R6/lib -lGL -L/sw/lib/openmpi -lmpi
<br>
-lmpi_cxx -licet -L/usr/X11R6/lib -lGLU -L/usr/X11R6/lib -lGL
<br>
-L/sw/lib/openmpi -lmpi -lmpi_cxx
<br>
ld: Undefined symbols:
<br>
_environ
<br>
/usr/bin/libtool: internal link edit command failed
<br>
make[2]: *** [bin/libicet_mpi.dylib] Error 1
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1602.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Previous message:</strong> <a href="1600.php">Gleb Natapov: "[OMPI devel] Fix for deadlock in OB1 RDMA protocol"</a>
<li><strong>In reply to:</strong> <a href="1590.php">Jack Howarth: "[OMPI devel] undefined environ symbol on Darwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1602.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
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
