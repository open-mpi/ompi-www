<?
$subject_val = "[OMPI users] OpenMPI with cMake on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 18 17:04:37 2012" -->
<!-- isoreceived="20121218220437" -->
<!-- sent="Tue, 18 Dec 2012 15:04:31 -0700" -->
<!-- isosent="20121218220431" -->
<!-- name="Stephen Conley" -->
<!-- email="conleysa_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI with cMake on Windows" -->
<!-- id="00b501cddd6b$a84a6760$f8df3620$_at_me.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI with cMake on Windows<br>
<strong>From:</strong> Stephen Conley (<em>conleysa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-18 17:04:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21004.php">Kumar, Sudhir: "Re: [OMPI users] Windows Open MPI question"</a>
<li><strong>Previous message:</strong> <a href="21002.php">Kumar, Sudhir: "Re: [OMPI users] Windows Open MPI question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21029.php">MM: "Re: [OMPI users] OpenMPI with cMake on Windows"</a>
<li><strong>Reply:</strong> <a href="21029.php">MM: "Re: [OMPI users] OpenMPI with cMake on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&nbsp;
<br>
<p>I have installed CMake version 2.8.10.2 and OpenMPI version 1.6.2 on a 64
<br>
bit Windows 7 computer.  
<br>
<p>&nbsp;
<br>
<p>OpenMPI is installed in &quot;C:\program files\OpenMPI&quot; and the path has been
<br>
updated to include the bin subdirectory.
<br>
<p>&nbsp;
<br>
<p>In the cmakelists.txt file, I have: find_package(MPI REQUIRED)
<br>
<p>&nbsp;
<br>
<p>When I run cmake, I receive the following error:
<br>
<p>&nbsp;
<br>
<p>C:\Users\steve\workspace\Dales\build&gt;cmake ..\src -G &quot;MinGW Makefiles&quot;
<br>
<p>CMake Error at C:/Program Files (x86)/CMake
<br>
2.8/share/cmake-2.8/Modules/FindPack
<br>
<p>ageHandleStandardArgs.cmake:97 (message):
<br>
<p>&nbsp;&nbsp;Could NOT find MPI_C (missing: MPI_C_LIBRARIES)
<br>
<p>Call Stack (most recent call first):
<br>
<p>&nbsp;&nbsp;C:/Program Files (x86)/CMake
<br>
2.8/share/cmake-2.8/Modules/FindPackageHandleStan
<br>
<p>dardArgs.cmake:291 (_FPHSA_FAILURE_MESSAGE)
<br>
<p>&nbsp;&nbsp;C:/Program Files (x86)/CMake 2.8/share/cmake-2.8/Modules/FindMPI.cmake:587
<br>
(fi
<br>
<p>nd_package_handle_standard_args)
<br>
<p>&nbsp;&nbsp;CMakeLists.txt:9 (find_package)
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>-- Configuring incomplete, errors occurred!
<br>
<p>&nbsp;
<br>
<p>Any ideas as to what I am missing?
<br>
<p>&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21003/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21004.php">Kumar, Sudhir: "Re: [OMPI users] Windows Open MPI question"</a>
<li><strong>Previous message:</strong> <a href="21002.php">Kumar, Sudhir: "Re: [OMPI users] Windows Open MPI question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21029.php">MM: "Re: [OMPI users] OpenMPI with cMake on Windows"</a>
<li><strong>Reply:</strong> <a href="21029.php">MM: "Re: [OMPI users] OpenMPI with cMake on Windows"</a>
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
