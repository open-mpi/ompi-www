<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 14 21:52:24 2014" -->
<!-- isoreceived="20141215025224" -->
<!-- sent="Sun, 14 Dec 2014 21:52:22 -0500" -->
<!-- isosent="20141215025222" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close" -->
<!-- id="548E4CE6.4000004_at_giref.ulaval.ca" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="548E4555.4070203_at_iferc.org" -->
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
<strong>Date:</strong> 2014-12-14 21:52:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25986.php">Eric Chamberland: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Previous message:</strong> <a href="25984.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>In reply to:</strong> <a href="25984.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25986.php">Eric Chamberland: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p>On 12/14/2014 09:20 PM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Eric,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can you make your test case (source + input file + howto) available so i
</span><br>
<span class="quotelev1">&gt; can try to reproduce and fix this ?
</span><br>
I would like to, but the complete app is big (and not public), is on top 
<br>
of PETSc with mkl, and in C++... :-(
<br>
<p>I can for sure send you binaries if you have any of the following 
<br>
plateforms (RedHat 6.6, openSUSE 13.1 , openSUSE 12.3 , Fedora 19, 
<br>
RedHat 5.7 or openSUSE 11.3 ) and input files (maybe we could get it run 
<br>
in a chrooted environnement? but I never tried this), but our source 
<br>
code I don't think I can... but I would like to post a simple example 
<br>
showing the problem...
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Based on the stack trace, i assume this is a complete end user application.
</span><br>
<span class="quotelev1">&gt; have you tried/been able to reproduce the same kind of crash with a
</span><br>
<span class="quotelev1">&gt; trimmed test program ?
</span><br>
I am trying to do so right now... ;-)
<br>
<p>I try to reproduce the very exact order for open/close of files by MPI 
<br>
followed with &quot;normal&quot; open of the file, etc...
<br>
<p>If I can reproduce the problem, I will send it immediatly to the list.  
<br>
It is an intermittent problem, but valgrind seems to catch it every time!
<br>
<p>I will work on this this evening and in the following days, hoping to 
<br>
send it in time before the final release...
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW, what kind of filesystem is hosting Resultats.Eta1 ? (e.g. ext4 /
</span><br>
<span class="quotelev1">&gt; nfs / lustre / other)
</span><br>
<p>It is a local hard drive with ext4.
<br>
<p>oh, just noticed that one of my mail didn't made it to the list... I 
<br>
will try to resend it now... contains a few hints...
<br>
<p>Merci! :-)
<br>
<p>Eric
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25986.php">Eric Chamberland: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Previous message:</strong> <a href="25984.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>In reply to:</strong> <a href="25984.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25986.php">Eric Chamberland: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
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
