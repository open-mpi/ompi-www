<?
$subject_val = "Re: [OMPI users] Invalid filename?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 21 13:00:19 2013" -->
<!-- isoreceived="20130121180019" -->
<!-- sent="Mon, 21 Jan 2013 19:00:12 +0100" -->
<!-- isosent="20130121180012" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Invalid filename?" -->
<!-- id="63BA6E7E-82D8-435A-8F30-C4E9CA14B778_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50FD56DB.4050107_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Invalid filename?<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-21 13:00:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21177.php">Eric Chamberland: "Re: [OMPI users] Invalid filename?"</a>
<li><strong>Previous message:</strong> <a href="21175.php">Francesco Simula: "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
<li><strong>In reply to:</strong> <a href="21174.php">Eric Chamberland: "[OMPI users] Invalid filename?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21177.php">Eric Chamberland: "Re: [OMPI users] Invalid filename?"</a>
<li><strong>Reply:</strong> <a href="21177.php">Eric Chamberland: "Re: [OMPI users] Invalid filename?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 21.01.2013 um 15:55 schrieb Eric Chamberland:
<br>
<p><span class="quotelev1">&gt; If you try to open a file with a &quot;:&quot; in the filename (ex: &quot;file:o&quot;), you get an MPI_ERR_NO_SUCH_FILE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ERROR Returned by MPI: 42
</span><br>
<span class="quotelev1">&gt; ERROR_string Returned by MPI: MPI_ERR_NO_SUCH_FILE: no such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just launch the simple test code attached to see the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPICH has the same bug, but is a little more explicit about it:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ADIO_RESOLVEFILETYPE_PREFIX(575): Invalid file name file:o
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this really a bug?
</span><br>
<p>although you can create such files in Linux, it's not portable.
<br>
<p><a href="http://en.wikipedia.org/wiki/Filename">http://en.wikipedia.org/wiki/Filename</a> (Reserved characters and words)
<br>
<p>Best is to use only characters from POSIX portable character set for filenames. Especially as this syntax with a colon is used to denote the file system, i.e. with the name &quot;nfs:foobar&quot; you will tell MPI that the file &quot;foobar&quot; is located on NFS.
<br>
<p>(page 392 in the MPI 2.2 standard)
<br>
<p>-- Reuti
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21177.php">Eric Chamberland: "Re: [OMPI users] Invalid filename?"</a>
<li><strong>Previous message:</strong> <a href="21175.php">Francesco Simula: "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
<li><strong>In reply to:</strong> <a href="21174.php">Eric Chamberland: "[OMPI users] Invalid filename?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21177.php">Eric Chamberland: "Re: [OMPI users] Invalid filename?"</a>
<li><strong>Reply:</strong> <a href="21177.php">Eric Chamberland: "Re: [OMPI users] Invalid filename?"</a>
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
