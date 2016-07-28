<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 14 18:05:35 2015" -->
<!-- isoreceived="20150114230535" -->
<!-- sent="Wed, 14 Jan 2015 16:57:19 -0600" -->
<!-- isosent="20150114225719" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close" -->
<!-- id="54B6F44F.4080400_at_mcs.anl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5492280C.7040702_at_giref.ulaval.ca" -->
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
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-14 17:57:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26181.php">Leonid: "[OMPI users] libevent hangs on app finalize stage"</a>
<li><strong>Previous message:</strong> <a href="26179.php">Novosielski, Ryan: "Re: [OMPI users] Problems compiling OpenMPI 1.8.4 with GCC 4.9.2"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/12/26022.php">Eric Chamberland: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26198.php">Eric Chamberland: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Reply:</strong> <a href="26198.php">Eric Chamberland: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/17/2014 07:04 PM, Eric Chamberland wrote:
<br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is a &quot;poor man's fix&quot; that works for me (the idea is not from me,
</span><br>
<span class="quotelev1">&gt; thanks to Thomas H.):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #1- char* lCwd = getcwd(0,0);
</span><br>
<span class="quotelev1">&gt; #2- chdir(lPathToFile);
</span><br>
<span class="quotelev1">&gt; #3- MPI_File_open(...,lFileNameWithoutTooLongPath,...);
</span><br>
<span class="quotelev1">&gt; #4- chdir(lCwd);
</span><br>
<span class="quotelev1">&gt; #5- ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think there are some limitations but it works very well for our
</span><br>
<span class="quotelev1">&gt; uses... and until a &quot;real&quot; fix is proposed...
</span><br>
<p>Thanks for the bug report and test cases.  I just pushed two fixes for 
<br>
master that fix the problem you were seeing:
<br>
<p><a href="http://git.mpich.org/mpich.git/commit/ed39c901">http://git.mpich.org/mpich.git/commit/ed39c901</a>
<br>
<a href="http://git.mpich.org/mpich.git/commit/a30a4721a2">http://git.mpich.org/mpich.git/commit/a30a4721a2</a>
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26181.php">Leonid: "[OMPI users] libevent hangs on app finalize stage"</a>
<li><strong>Previous message:</strong> <a href="26179.php">Novosielski, Ryan: "Re: [OMPI users] Problems compiling OpenMPI 1.8.4 with GCC 4.9.2"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/12/26022.php">Eric Chamberland: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26198.php">Eric Chamberland: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Reply:</strong> <a href="26198.php">Eric Chamberland: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
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
