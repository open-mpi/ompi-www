<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 15 10:29:25 2014" -->
<!-- isoreceived="20141215152925" -->
<!-- sent="Mon, 15 Dec 2014 10:29:03 -0500" -->
<!-- isosent="20141215152903" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close" -->
<!-- id="548EFE3F.6060702_at_giref.ulaval.ca" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="548E5850.4040805_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close<br>
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-15 10:29:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25998.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>Previous message:</strong> <a href="25996.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>In reply to:</strong> <a href="25990.php">Eric Chamberland: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26005.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p>here is a simple setup to have valgrind caomplains now:
<br>
<p>export 
<br>
too_long=./this/is/a_very/long/path/that/contains/a/not/so/long/filename/but/trying/to/collectively/mpi_file_open/it/you/will/have/a/memory/corruption/resulting/of/invalide/writing/or/reading/past/the/end/of/one/or/some/hidden/strings/in/mpio/Simple/user/would/like/to/have/the/parameter/checked/and/an/error/returned/or/this/limit/removed
<br>
<p>mkdir -p $too_long
<br>
echo &quot;hello world.&quot; &gt; $too_long/toto.txt
<br>
<p>mpicc -o bug_MPI_File_open_path_too_long bug_MPI_File_open_path_too_long.c
<br>
<p>mpirun -np 2 valgrind ./bug_MPI_File_open_path_too_long  $too_long/toto.txt
<br>
<p>and look at valgrind errors for invalid read/write on rank0/1.
<br>
<p>This particular simple case doesn't segfault without valgrind, but in as 
<br>
reported in my real case, it does!
<br>
<p>Thanks!
<br>
<p>Eric
<br>
<p><p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25997/bug_MPI_File_open_path_too_long.c">bug_MPI_File_open_path_too_long.c</a>
</ul>
<!-- attachment="bug_MPI_File_open_path_too_long.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25998.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>Previous message:</strong> <a href="25996.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>In reply to:</strong> <a href="25990.php">Eric Chamberland: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26005.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
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
