<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 15 22:44:06 2014" -->
<!-- isoreceived="20141216034406" -->
<!-- sent="Tue, 16 Dec 2014 12:43:58 +0900" -->
<!-- isosent="20141216034358" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close" -->
<!-- id="548FAA7E.8020205_at_iferc.org" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="548EFB41.6040307_at_giref.ulaval.ca" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-15 22:43:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26006.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Previous message:</strong> <a href="26004.php">Alex A. Schmidt: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>Maybe in reply to:</strong> <a href="25983.php">Eric Chamberland: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26006.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Reply:</strong> <a href="26006.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eric,
<br>
<p>thanks for the simple test program.
<br>
<p>i think i see what is going wrong and i will make some changes to avoid
<br>
the memory overflow.
<br>
<p>that being said, there is a hard coded limit of 256 characters, and your
<br>
path is bigger than 300 characters.
<br>
bottom line, and even if there is no more memory overflow, that cannot
<br>
work as expected.
<br>
<p>i will report this to the mpich folks, since romio is currently imported
<br>
from mpich.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/12/16 0:16, Eric Chamberland wrote:
<br>
<span class="quotelev1">&gt; Hi Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; just created a very simple test case!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with this setup, you will see the bug with valgrind:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export
</span><br>
<span class="quotelev1">&gt; too_long=./this/is/a_very/long/path/that/contains/a/not/so/long/filename/but/trying/to/collectively/mpi_file_open/it/you/will/have/a/memory/corruption/resulting/of/invalide/writing/or/reading/past/the/end/of/one/or/some/hidden/strings/in/mpio/Simple/user/would/like/to/have/the/parameter/checked/and/an/error/returned/or/this/limit/removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicc -o bug_MPI_File_open_path_too_long
</span><br>
<span class="quotelev1">&gt; bug_MPI_File_open_path_too_long.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mkdir -p $too_long
</span><br>
<span class="quotelev1">&gt; echo &quot;header of a text file&quot; &gt; $too_long/toto.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 valgrind ./bug_MPI_File_open_path_too_long 
</span><br>
<span class="quotelev1">&gt; $too_long/toto.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and watch the errors!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; unfortunately, the memory corruptions here doesn't seem to segfault
</span><br>
<span class="quotelev1">&gt; this simple test case, but in my case, it is fatal and with valgrind,
</span><br>
<span class="quotelev1">&gt; it is reported...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.6.5, 1.8.3rc3 are affected
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPICH-3.1.3 also have the error!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26006.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Previous message:</strong> <a href="26004.php">Alex A. Schmidt: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>Maybe in reply to:</strong> <a href="25983.php">Eric Chamberland: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26006.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Reply:</strong> <a href="26006.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
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
