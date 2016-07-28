<?
$subject_val = "Re: [OMPI users] mmap and MPI_File_Read";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 13:53:20 2013" -->
<!-- isoreceived="20130211185320" -->
<!-- sent="Mon, 11 Feb 2013 18:53:10 +0000" -->
<!-- isosent="20130211185310" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mmap and MPI_File_Read" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CF42D5_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAJe4Bie15JVLP4bTypbn+OnqWV-fcz4b283WDmzSQJUSfk1zhA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mmap and MPI_File_Read<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-11 13:53:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21377.php">Mark Bolstad: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Previous message:</strong> <a href="21375.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Simple MPI hello world hangs over IB"</a>
<li><strong>In reply to:</strong> <a href="21282.php">Andreas Bok Andersen: "[OMPI users] mmap and MPI_File_Read"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 2, 2013, at 3:52 AM, Andreas Bok Andersen &lt;bok.chan_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am using Open-MPI in a parallelization of matrix multiplication for large matrices. 
</span><br>
<span class="quotelev1">&gt; My question is: 
</span><br>
<span class="quotelev1">&gt; -  Is MPI_File_read using mmapping under the hood when reading a binary file. 
</span><br>
<p>Sorry for the delay in replying; my INBOX is a disaster.
<br>
<p>It depends on what driver you compiled; I'm guessing it's the standard NFS file I/O driver.  In this case, OMPI is just using open(), which may use mmap() under the covers.
<br>
<p><span class="quotelev1">&gt; - Or is the better/most efficient solution to read the input files using the native mmap in C++
</span><br>
<p>You'll have to play with this yourself to see which works best in your environment.  Unfortunately, in at least this case, there's no &quot;method X always works better than method Y&quot; kind of advice available -- there's far too much variation in individual execution environments, connection to storage, and application access patterns.
<br>
<p>A third variation to try might be to read in the file in a single MPI process and MPI_Scatter (or Broadcast?) the data out to all other processes.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21377.php">Mark Bolstad: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Previous message:</strong> <a href="21375.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Simple MPI hello world hangs over IB"</a>
<li><strong>In reply to:</strong> <a href="21282.php">Andreas Bok Andersen: "[OMPI users] mmap and MPI_File_Read"</a>
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
