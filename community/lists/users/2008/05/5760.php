<?
$subject_val = "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 29 16:34:03 2008" -->
<!-- isoreceived="20080529203403" -->
<!-- sent="Thu, 29 May 2008 15:33:55 -0500" -->
<!-- isosent="20080529203355" -->
<!-- name="Robert Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI" -->
<!-- id="20080529203355.GJ7968_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="dd4eed670805291248h18962b07m612e55dca40b74c9_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI<br>
<strong>From:</strong> Robert Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-29 16:33:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5761.php">Jeff Squyres: "Re: [OMPI users] ulimit question from video open-fabrics-concepts..."</a>
<li><strong>Previous message:</strong> <a href="5759.php">Brock Palen: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="5758.php">Davi Vercillo C. Garcia: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5771.php">Davi Vercillo C. Garcia: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<li><strong>Reply:</strong> <a href="5771.php">Davi Vercillo C. Garcia: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, May 29, 2008 at 04:48:49PM -0300, Davi Vercillo C. Garcia wrote:
<br>
<span class="quotelev2">&gt; &gt; Oh, I see you want to use ordered i/o in your application.  PVFS
</span><br>
<span class="quotelev2">&gt; &gt; doesn't support that mode.  However, since you know how much data each
</span><br>
<span class="quotelev2">&gt; &gt; process wants to write, a combination of MPI_Scan (to compute each
</span><br>
<span class="quotelev2">&gt; &gt; processes offset) and MPI_File_write_at_all (to carry out the
</span><br>
<span class="quotelev2">&gt; &gt; collective i/o) will give you the same result with likely better
</span><br>
<span class="quotelev2">&gt; &gt; performance (and has the nice side effect of working with pvfs).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't understand very well this... what do I need to change in my code ?
</span><br>
<p>MPI_File_write_ordered has an interesting property (which you probably
<br>
know since you use it, but i'll spell it out anyway):  writes end up
<br>
in the file in rank-order, but are not necessarily carried out in
<br>
rank-order.   
<br>
<p>Once each process knows the offsets and lengths of the writes the
<br>
other process will do, that process can writes its data.  Observe that
<br>
rank 0 can write immediately.  Rank 1 only needs to know how much data
<br>
rank 0 will write.  and so on.
<br>
<p>Rank N can compute its offset by knowing how much data the proceeding
<br>
N-1 processes want to write.  The most efficent way to collect this is
<br>
to use MPI_Scan and collect a sum of data:
<br>
<p><a href="http://www.mpi-forum.org/docs/mpi-11-html/node84.html#Node84">http://www.mpi-forum.org/docs/mpi-11-html/node84.html#Node84</a>
<br>
<p>Once you've computed these offsets, MPI_File_write_at_all has enough
<br>
information to cary out a collective write of the data.
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division    A215 0178 EA2D B059 8CDF
Argonne National Lab, IL USA                 B29D F333 664A 4280 315B
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5761.php">Jeff Squyres: "Re: [OMPI users] ulimit question from video open-fabrics-concepts..."</a>
<li><strong>Previous message:</strong> <a href="5759.php">Brock Palen: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="5758.php">Davi Vercillo C. Garcia: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5771.php">Davi Vercillo C. Garcia: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<li><strong>Reply:</strong> <a href="5771.php">Davi Vercillo C. Garcia: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
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
