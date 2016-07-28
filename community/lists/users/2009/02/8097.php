<?
$subject_val = "Re: [OMPI users] MPI_File_write_ordered does not truncate files";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 18 18:10:12 2009" -->
<!-- isoreceived="20090218231012" -->
<!-- sent="Wed, 18 Feb 2009 17:10:07 -0600" -->
<!-- isosent="20090218231007" -->
<!-- name="Robert Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_File_write_ordered does not truncate files" -->
<!-- id="20090218231002.GN18534_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="c826e2120902181444o27d12b5bj6d9428ba17bb1c6a_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-02-18 18:10:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8098.php">Vittorio: "[OMPI users] MPI_Send over 2 GB"</a>
<li><strong>Previous message:</strong> <a href="8096.php">Brian Austin: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>In reply to:</strong> <a href="8096.php">Brian Austin: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Feb 18, 2009 at 02:44:09PM -0800, Brian Austin wrote:
<br>
<p><span class="quotelev1">&gt; I don't know whether this is the correct behavior, but it is the
</span><br>
<span class="quotelev1">&gt; correct origin of my confusion.
</span><br>
<span class="quotelev1">&gt; I suspected this would be attributed to the standard, but it is
</span><br>
<span class="quotelev1">&gt; contrary to what I'm used to with C's fopen:
</span><br>
<span class="quotelev1">&gt; I expected MPI_File_open( CREATE | WRONLY ) to act like fopen(&quot;w&quot;).
</span><br>
<p>Ah, I see now.  MPI_FILE_OPEN is more like open(2) and not at all like
<br>
fopen(3).
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
<li><strong>Next message:</strong> <a href="8098.php">Vittorio: "[OMPI users] MPI_Send over 2 GB"</a>
<li><strong>Previous message:</strong> <a href="8096.php">Brian Austin: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>In reply to:</strong> <a href="8096.php">Brian Austin: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
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
