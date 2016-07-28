<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 11 17:42:17 2006" -->
<!-- isoreceived="20060511214217" -->
<!-- sent="Thu, 11 May 2006 14:42:16 -0700" -->
<!-- isosent="20060511214216" -->
<!-- name="W. Bryan Smith" -->
<!-- email="wbsmith_at_[hidden]" -->
<!-- subject="[OMPI users] ParaView runtime problem with openmpi 1.0.2" -->
<!-- id="e8289c090605111442m34d0f67m30b5dc4ed4a2750a_at_mail.gmail.com" -->
<!-- charset="us-ascii" -->
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
<strong>Date:</strong> 2006-05-11 17:42:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1237.php">Jonathan Day: "[OMPI users] 64-Bit MIPS support patch"</a>
<li><strong>Previous message:</strong> <a href="1235.php">George Bosilca: "Re: [OMPI users] Open MPI and OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1246.php">W. Bryan Smith: "Re: [OMPI users] ParaView runtime problem with openmpi 1.0.2"</a>
<li><strong>Reply:</strong> <a href="1246.php">W. Bryan Smith: "Re: [OMPI users] ParaView runtime problem with openmpi 1.0.2"</a>
<li><strong>Maybe reply:</strong> <a href="1247.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] ParaView runtime problem with openmpi 1.0.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi,
<br>
<p>i have compiled a program called ParaView (paraview.org) with MPI support
<br>
using OpenMPI 1.0.2, and when i try to run the paraview executable using
<br>
<p>mpiexec -n 4 paraview
<br>
<p>or
<br>
<p>miprun -np 4 paraview
<br>
<p>instead of having one paraview window open with parallel support, there are
<br>
4 paraview windows opened, none of which are running with parallel support.
<br>
attached are the ompi_info and config.log files.  below is the text of the
<br>
cmake call i used to configure paraview:
<br>
<p>cmake -DVTK_USE_MPI:BOOL=ON
<br>
-DMPI_INCLUDE_PATH:PATH=/local2/openmpi1.0.2/include/
<br>
-DVTK_MPIRUN_EXE:FILEPATH=/local2/openmpi1.0.2/bin/mpirun
<br>
-DMPI_LIBRARY:FILEPATH=/local2/openmpi1.0.2/lib/libmpicxx.la
<br>
/local2/paraview-2.4.3/
<br>
<p>i also edited the ParaView CMakeLists.txt file to contain:
<br>
SET(CMAKE_C_COMPILER mpicc)
<br>
SET(CMAKE_CXX_COMPILER mpicxx)
<br>
<p>both compiler wrappers are on the top of my PATH.  also, as far as PATH
<br>
goes, yes, i am certain that the mpiexec and paraview binaries are the ones
<br>
i think they are (i.e. when I WHICH MPIEXEC it only shows the one i compiled
<br>
locally, etc).
<br>
<p>anyone have any insight on this?  for the record, when i compile paraview
<br>
with MPI support using mpich2 (1.0.3), and then do mpiexec calling that
<br>
version of paraview, i get the expected behavior (i.e. one paraview window
<br>
running with parallel support).
<br>
<p>thanks in advance,
<br>
bryan smith
<br>
<p><p>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1236/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1236/ompi_info.txt">ompi_info.txt</a>
</ul>
<!-- attachment="ompi_info.txt" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1236/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1237.php">Jonathan Day: "[OMPI users] 64-Bit MIPS support patch"</a>
<li><strong>Previous message:</strong> <a href="1235.php">George Bosilca: "Re: [OMPI users] Open MPI and OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1246.php">W. Bryan Smith: "Re: [OMPI users] ParaView runtime problem with openmpi 1.0.2"</a>
<li><strong>Reply:</strong> <a href="1246.php">W. Bryan Smith: "Re: [OMPI users] ParaView runtime problem with openmpi 1.0.2"</a>
<li><strong>Maybe reply:</strong> <a href="1247.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] ParaView runtime problem with openmpi 1.0.2"</a>
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
