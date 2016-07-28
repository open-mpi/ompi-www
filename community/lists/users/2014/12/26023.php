<?
$subject_val = "Re: [OMPI users] OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 20:32:01 2014" -->
<!-- isoreceived="20141218013201" -->
<!-- sent="Thu, 18 Dec 2014 10:31:52 +0900" -->
<!-- isosent="20141218013152" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close" -->
<!-- id="cufyswia8aee258piuk8wckn.1418866312118_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-17 20:31:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26024.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Previous message:</strong> <a href="26022.php">Eric Chamberland: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eric,
<br>
<p>As long as lFileNameWithoutTooLongPath length is less than 226 characters and you do not run into some threads related race conditions, that should be just fine, and that roughly covers 99% cases.
<br>
<p>Thanks for sharing this workaround !
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>Eric Chamberland &lt;Eric.Chamberland_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;Hi!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Here is a &quot;poor man's fix&quot; that works for me (the idea is not from me, 
</span><br>
<span class="quotelev1">&gt;thanks to Thomas H.):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#1- char* lCwd = getcwd(0,0);
</span><br>
<span class="quotelev1">&gt;#2- chdir(lPathToFile);
</span><br>
<span class="quotelev1">&gt;#3- MPI_File_open(...,lFileNameWithoutTooLongPath,...);
</span><br>
<span class="quotelev1">&gt;#4- chdir(lCwd);
</span><br>
<span class="quotelev1">&gt;#5- ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I think there are some limitations but it works very well for our 
</span><br>
<span class="quotelev1">&gt;uses... and until a &quot;real&quot; fix is proposed...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks for helping!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Eric
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 12/15/2014 11:42 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Eric and all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That is clearly a limitation in romio, and this is being tracked at
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://trac.mpich.org/projects/mpich/ticket/2212">https://trac.mpich.org/projects/mpich/ticket/2212</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; in the mean time, what we can do in OpenMPI is update
</span><br>
<span class="quotelev2">&gt;&gt; mca_io_romio_file_open() and fails with a user friendly error message
</span><br>
<span class="quotelev2">&gt;&gt; if strlen(filename) is larger that 225.
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
<span class="quotelev2">&gt;&gt; On 2014/12/16 12:43, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eric,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks for the simple test program.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i think i see what is going wrong and i will make some changes to avoid
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the memory overflow.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that being said, there is a hard coded limit of 256 characters, and your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; path is bigger than 300 characters.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bottom line, and even if there is no more memory overflow, that cannot
</span><br>
<span class="quotelev3">&gt;&gt;&gt; work as expected.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i will report this to the mpich folks, since romio is currently imported
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from mpich.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2014/12/16 0:16, Eric Chamberland wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Gilles,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; just created a very simple test case!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with this setup, you will see the bug with valgrind:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; too_long=./this/is/a_very/long/path/that/contains/a/not/so/long/filename/but/trying/to/collectively/mpi_file_open/it/you/will/have/a/memory/corruption/resulting/of/invalide/writing/or/reading/past/the/end/of/one/or/some/hidden/strings/in/mpio/Simple/user/would/like/to/have/the/parameter/checked/and/an/error/returned/or/this/limit/removed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpicc -o bug_MPI_File_open_path_too_long
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bug_MPI_File_open_path_too_long.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mkdir -p $too_long
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; echo &quot;header of a text file&quot; &gt; $too_long/toto.txt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np 2 valgrind ./bug_MPI_File_open_path_too_long
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $too_long/toto.txt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and watch the errors!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; unfortunately, the memory corruptions here doesn't seem to segfault
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this simple test case, but in my case, it is fatal and with valgrind,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it is reported...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenMPI 1.6.5, 1.8.3rc3 are affected
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPICH-3.1.3 also have the error!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Eric
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26005.php">http://www.open-mpi.org/community/lists/users/2014/12/26005.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26006.php">http://www.open-mpi.org/community/lists/users/2014/12/26006.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26022.php">http://www.open-mpi.org/community/lists/users/2014/12/26022.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26024.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Previous message:</strong> <a href="26022.php">Eric Chamberland: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
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
