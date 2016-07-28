<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 16 09:12:04 2015" -->
<!-- isoreceived="20150116141204" -->
<!-- sent="Fri, 16 Jan 2015 09:11:54 -0500" -->
<!-- isosent="20150116141154" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close" -->
<!-- id="54B91C2A.20509_at_giref.ulaval.ca" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="54B6F44F.4080400_at_mcs.anl.gov" -->
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
<strong>Date:</strong> 2015-01-16 09:11:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26199.php">George Bosilca: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Previous message:</strong> <a href="26197.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>In reply to:</strong> <a href="26180.php">Rob Latham: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 01/14/2015 05:57 PM, Rob Latham wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/17/2014 07:04 PM, Eric Chamberland wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is a &quot;poor man's fix&quot; that works for me (the idea is not from me,
</span><br>
<span class="quotelev2">&gt;&gt; thanks to Thomas H.):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #1- char* lCwd = getcwd(0,0);
</span><br>
<span class="quotelev2">&gt;&gt; #2- chdir(lPathToFile);
</span><br>
<span class="quotelev2">&gt;&gt; #3- MPI_File_open(...,lFileNameWithoutTooLongPath,...);
</span><br>
<span class="quotelev2">&gt;&gt; #4- chdir(lCwd);
</span><br>
<span class="quotelev2">&gt;&gt; #5- ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think there are some limitations but it works very well for our
</span><br>
<span class="quotelev2">&gt;&gt; uses... and until a &quot;real&quot; fix is proposed...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the bug report and test cases.  I just pushed two fixes for
</span><br>
<span class="quotelev1">&gt; master that fix the problem you were seeing:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://git.mpich.org/mpich.git/commit/ed39c901">http://git.mpich.org/mpich.git/commit/ed39c901</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://git.mpich.org/mpich.git/commit/a30a4721a2">http://git.mpich.org/mpich.git/commit/a30a4721a2</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Great!  Thank you for the follow up (and both messages)!
<br>
<p>Eric
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26199.php">George Bosilca: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Previous message:</strong> <a href="26197.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>In reply to:</strong> <a href="26180.php">Rob Latham: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
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
