<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 15 23:42:23 2014" -->
<!-- isoreceived="20141216044223" -->
<!-- sent="Tue, 16 Dec 2014 13:42:21 +0900" -->
<!-- isosent="20141216044221" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close" -->
<!-- id="548FB82D.4040104_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="548FAA7E.8020205_at_iferc.org" -->
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
<strong>Date:</strong> 2014-12-15 23:42:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26007.php">tom fogal: "[OMPI users] disable library interposition?"</a>
<li><strong>Previous message:</strong> <a href="26005.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>In reply to:</strong> <a href="26005.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26022.php">Eric Chamberland: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Reply:</strong> <a href="26022.php">Eric Chamberland: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eric and all,
<br>
<p>That is clearly a limitation in romio, and this is being tracked at
<br>
<a href="https://trac.mpich.org/projects/mpich/ticket/2212">https://trac.mpich.org/projects/mpich/ticket/2212</a>
<br>
<p>in the mean time, what we can do in OpenMPI is update
<br>
mca_io_romio_file_open() and fails with a user friendly error message
<br>
if strlen(filename) is larger that 225.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/12/16 12:43, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Eric,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks for the simple test program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i think i see what is going wrong and i will make some changes to avoid
</span><br>
<span class="quotelev1">&gt; the memory overflow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that being said, there is a hard coded limit of 256 characters, and your
</span><br>
<span class="quotelev1">&gt; path is bigger than 300 characters.
</span><br>
<span class="quotelev1">&gt; bottom line, and even if there is no more memory overflow, that cannot
</span><br>
<span class="quotelev1">&gt; work as expected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i will report this to the mpich folks, since romio is currently imported
</span><br>
<span class="quotelev1">&gt; from mpich.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/12/16 0:16, Eric Chamberland wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; just created a very simple test case!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; with this setup, you will see the bug with valgrind:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; export
</span><br>
<span class="quotelev2">&gt;&gt; too_long=./this/is/a_very/long/path/that/contains/a/not/so/long/filename/but/trying/to/collectively/mpi_file_open/it/you/will/have/a/memory/corruption/resulting/of/invalide/writing/or/reading/past/the/end/of/one/or/some/hidden/strings/in/mpio/Simple/user/would/like/to/have/the/parameter/checked/and/an/error/returned/or/this/limit/removed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpicc -o bug_MPI_File_open_path_too_long
</span><br>
<span class="quotelev2">&gt;&gt; bug_MPI_File_open_path_too_long.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mkdir -p $too_long
</span><br>
<span class="quotelev2">&gt;&gt; echo &quot;header of a text file&quot; &gt; $too_long/toto.txt
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 valgrind ./bug_MPI_File_open_path_too_long 
</span><br>
<span class="quotelev2">&gt;&gt; $too_long/toto.txt
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and watch the errors!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; unfortunately, the memory corruptions here doesn't seem to segfault
</span><br>
<span class="quotelev2">&gt;&gt; this simple test case, but in my case, it is fatal and with valgrind,
</span><br>
<span class="quotelev2">&gt;&gt; it is reported...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.6.5, 1.8.3rc3 are affected
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPICH-3.1.3 also have the error!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eric
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26005.php">http://www.open-mpi.org/community/lists/users/2014/12/26005.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26007.php">tom fogal: "[OMPI users] disable library interposition?"</a>
<li><strong>Previous message:</strong> <a href="26005.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>In reply to:</strong> <a href="26005.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26022.php">Eric Chamberland: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Reply:</strong> <a href="26022.php">Eric Chamberland: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
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
