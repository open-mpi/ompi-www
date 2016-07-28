<?
$subject_val = "Re: [OMPI devel] [mpich-discuss] BUG in ADIOI_NFS_WriteStrided";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 21 12:49:14 2014" -->
<!-- isoreceived="20141221174914" -->
<!-- sent="Sun, 21 Dec 2014 12:49:12 -0500" -->
<!-- isosent="20141221174912" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [mpich-discuss] BUG in ADIOI_NFS_WriteStrided" -->
<!-- id="54970818.8060302_at_giref.ulaval.ca" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5494E45E.2080404_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [mpich-discuss] BUG in ADIOI_NFS_WriteStrided<br>
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-21 12:49:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16710.php">Nathan Hjelm: "Re: [OMPI devel] [Open MPI Announce] Open MPI 1.8.4 released"</a>
<li><strong>Previous message:</strong> <a href="16708.php">George Bosilca: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>In reply to:</strong> <a href="16702.php">Rob Latham: "Re: [OMPI devel] [mpich-discuss] BUG in ADIOI_NFS_WriteStrided"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/19/2014 09:52 PM, Rob Latham wrote:
<br>
<span class="quotelev1">&gt; Please don't use NFS for MPI-IO.  ROMIO makes a best effort but 
</span><br>
<span class="quotelev1">&gt; there's no way to guarantee you won't corrupt a block of data (NFS 
</span><br>
<p>Ok.  But how can I know the type of filesystem my users will work on?  
<br>
For small jobs, they may have data on NFS and don't car too much for 
<br>
read/write speed... and I want only 1 file format that can be used on 
<br>
any filesystem...
<br>
<p>Do you recommend me to disable ROMIO/NFS support when configuring MPICH 
<br>
(how do you ask this to configure?)?
<br>
<p>What other library is recommend to use if I have to write distributed 
<br>
data on NFS?  Does HDF5, for example, switches from MPI I/O to something 
<br>
else when doing collective I/O on NFS?
<br>
<p>I don't want to write a function to write to a file that depends on the 
<br>
final type of filesystem...  I expect the library to do a good job for 
<br>
me... and I have chosen MPI I/O do to that job... ;-)
<br>
<p><p><span class="quotelev1">&gt; clients are allowed to cache... arbitrarily, it seems).  There are so 
</span><br>
<span class="quotelev1">&gt; many good parallel file systems with saner consistency semantics .
</span><br>
<p>Can't tell anything about how NFS is usable or not with MPI I/O... I 
<br>
Just use it because our nightly tests are writing results to NFS 
<br>
partitions... as our users may do...
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This looks like maybe a calloc would clean it right up.
</span><br>
<p>Ok, the point is: is there a bug, and can it be fixed (even if it is not 
<br>
recommended to use ROMIO/NFS) or at least tracked?
<br>
<p>Thanks!
<br>
<p>Eric
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16710.php">Nathan Hjelm: "Re: [OMPI devel] [Open MPI Announce] Open MPI 1.8.4 released"</a>
<li><strong>Previous message:</strong> <a href="16708.php">George Bosilca: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>In reply to:</strong> <a href="16702.php">Rob Latham: "Re: [OMPI devel] [mpich-discuss] BUG in ADIOI_NFS_WriteStrided"</a>
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
