<?
$subject_val = "Re: [OMPI users] MPI_File_write_ordered does not truncate files";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 18 17:01:59 2009" -->
<!-- isoreceived="20090218220159" -->
<!-- sent="Wed, 18 Feb 2009 16:01:48 -0600" -->
<!-- isosent="20090218220148" -->
<!-- name="Robert Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_File_write_ordered does not truncate files" -->
<!-- id="20090218220147.GM18534_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F75FC916-6C4B-40EF-9C1A-E7AAC60DEFD2_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_File_write_ordered does not truncate files<br>
<strong>From:</strong> Robert Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-18 17:01:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8096.php">Brian Austin: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>Previous message:</strong> <a href="8094.php">Ralph Castain: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>In reply to:</strong> <a href="8094.php">Ralph Castain: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8096.php">Brian Austin: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Feb 18, 2009 at 02:24:03PM -0700, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hi Rob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Guess I'll display my own ignorance here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_File_open( MPI_COMM_WORLD, &quot;foo.txt&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  	       MPI_MODE_CREATE | MPI_MODE_WRONLY,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	       MPI_INFO_NULL, &amp;fh );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since the file was opened with MPI_MODE_CREATE, shouldn't it have been  
</span><br>
<span class="quotelev1">&gt; truncated so the prior contents were removed? I think that's the root of 
</span><br>
<span class="quotelev1">&gt; the confusion here. It appears that MPI_MODE_CREATE doesn't cause the 
</span><br>
<span class="quotelev1">&gt; opened file to be truncated, but instead just leaves it &quot;as-is&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is that correct?
</span><br>
<p>&quot;The modes MPI_MODE_RDONLY, MPI_MODE_RDWR, MPI_MODE_WRONLY,
<br>
MPI_MODE_CREATE, and MPI_MODE_EXCL have identical semantics to their
<br>
POSIX counterparts&quot;
<br>
<p>MPI_MODE_CREATE behaves like O_CREATE 
<br>
<p>There is no MPI-IO flag corresponding to O_TRUNK.  Guess you'd have to
<br>
MPI_FILE_SET_SIZE after MPI_FILE_OPEN
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
<li><strong>Next message:</strong> <a href="8096.php">Brian Austin: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>Previous message:</strong> <a href="8094.php">Ralph Castain: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>In reply to:</strong> <a href="8094.php">Ralph Castain: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8096.php">Brian Austin: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
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
