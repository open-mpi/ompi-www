<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 20:04:16 2014" -->
<!-- isoreceived="20141218010416" -->
<!-- sent="Wed, 17 Dec 2014 20:04:12 -0500" -->
<!-- isosent="20141218010412" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close" -->
<!-- id="5492280C.7040702_at_giref.ulaval.ca" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="548FB82D.4040104_at_iferc.org" -->
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
<strong>Date:</strong> 2014-12-17 20:04:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26023.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Previous message:</strong> <a href="26021.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>In reply to:</strong> <a href="26006.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/01/26167.php">Rob Latham: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/01/26167.php">Rob Latham: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/01/26180.php">Rob Latham: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>Here is a &quot;poor man's fix&quot; that works for me (the idea is not from me, 
<br>
thanks to Thomas H.):
<br>
<p>#1- char* lCwd = getcwd(0,0);
<br>
#2- chdir(lPathToFile);
<br>
#3- MPI_File_open(...,lFileNameWithoutTooLongPath,...);
<br>
#4- chdir(lCwd);
<br>
#5- ...
<br>
<p>I think there are some limitations but it works very well for our 
<br>
uses... and until a &quot;real&quot; fix is proposed...
<br>
<p>Thanks for helping!
<br>
<p>Eric
<br>
<p><p>On 12/15/2014 11:42 PM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Eric and all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is clearly a limitation in romio, and this is being tracked at
</span><br>
<span class="quotelev1">&gt; <a href="https://trac.mpich.org/projects/mpich/ticket/2212">https://trac.mpich.org/projects/mpich/ticket/2212</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in the mean time, what we can do in OpenMPI is update
</span><br>
<span class="quotelev1">&gt; mca_io_romio_file_open() and fails with a user friendly error message
</span><br>
<span class="quotelev1">&gt; if strlen(filename) is larger that 225.
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
<span class="quotelev1">&gt; On 2014/12/16 12:43, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Eric,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks for the simple test program.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i think i see what is going wrong and i will make some changes to avoid
</span><br>
<span class="quotelev2">&gt;&gt; the memory overflow.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; that being said, there is a hard coded limit of 256 characters, and your
</span><br>
<span class="quotelev2">&gt;&gt; path is bigger than 300 characters.
</span><br>
<span class="quotelev2">&gt;&gt; bottom line, and even if there is no more memory overflow, that cannot
</span><br>
<span class="quotelev2">&gt;&gt; work as expected.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i will report this to the mpich folks, since romio is currently imported
</span><br>
<span class="quotelev2">&gt;&gt; from mpich.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2014/12/16 0:16, Eric Chamberland wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Gilles,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just created a very simple test case!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with this setup, you will see the bug with valgrind:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export
</span><br>
<span class="quotelev3">&gt;&gt;&gt; too_long=./this/is/a_very/long/path/that/contains/a/not/so/long/filename/but/trying/to/collectively/mpi_file_open/it/you/will/have/a/memory/corruption/resulting/of/invalide/writing/or/reading/past/the/end/of/one/or/some/hidden/strings/in/mpio/Simple/user/would/like/to/have/the/parameter/checked/and/an/error/returned/or/this/limit/removed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc -o bug_MPI_File_open_path_too_long
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bug_MPI_File_open_path_too_long.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mkdir -p $too_long
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo &quot;header of a text file&quot; &gt; $too_long/toto.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 2 valgrind ./bug_MPI_File_open_path_too_long
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $too_long/toto.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and watch the errors!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unfortunately, the memory corruptions here doesn't seem to segfault
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this simple test case, but in my case, it is fatal and with valgrind,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it is reported...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI 1.6.5, 1.8.3rc3 are affected
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPICH-3.1.3 also have the error!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eric
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26005.php">http://www.open-mpi.org/community/lists/users/2014/12/26005.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26006.php">http://www.open-mpi.org/community/lists/users/2014/12/26006.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26023.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Previous message:</strong> <a href="26021.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>In reply to:</strong> <a href="26006.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/01/26167.php">Rob Latham: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/01/26167.php">Rob Latham: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/01/26180.php">Rob Latham: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
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
