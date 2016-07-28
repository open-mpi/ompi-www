<?
$subject_val = "Re: [OMPI users] Problem with MPI_File_read() (2)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 15 06:33:55 2009" -->
<!-- isoreceived="20090415103355" -->
<!-- sent="Wed, 15 Apr 2009 06:33:47 -0400" -->
<!-- isosent="20090415103347" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_File_read() (2)" -->
<!-- id="0C26B0D3-502D-471F-8490-356D285A03D3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9d13e50c0904150206g78f320a8m5f52d1c780f5179c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with MPI_File_read() (2)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-15 06:33:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8932.php">Jeff Squyres: "Re: [OMPI users] libnuma issue"</a>
<li><strong>Previous message:</strong> <a href="8930.php">Jovana Knezevic: "Re: [OMPI users] Problem with MPI_File_read() (2)"</a>
<li><strong>In reply to:</strong> <a href="8930.php">Jovana Knezevic: "Re: [OMPI users] Problem with MPI_File_read() (2)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 15, 2009, at 5:06 AM, Jovana Knezevic wrote:
<br>
<p><span class="quotelev1">&gt; Yes, sure, what you say makes sense. On the other hand, it seems I
</span><br>
<span class="quotelev1">&gt; will have to &quot;traditionaly&quot;-open the input file for n times - each one
</span><br>
<span class="quotelev1">&gt; for one process, since anyway all of my processes have to collect
</span><br>
<span class="quotelev1">&gt; their data from it (each parsing it from the beginning to the end),
</span><br>
<span class="quotelev1">&gt; don't you think so? I wanted to take an advantage of MPI to read (in
</span><br>
<span class="quotelev1">&gt; each process) the data from one file... Or have I misunderstood
</span><br>
<span class="quotelev1">&gt; something?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The idea behind MPI I/O is that it can be done in parallel.  It  
<br>
usually works best when you have an underlying parallel filesystem.   
<br>
In such cases (typically paired with very large input data), you can  
<br>
exploit the parallelism of the underlying filesystem to efficiently  
<br>
get just the necessary data to each MPI process.
<br>
<p>If you input data isn't that large, or if you don't have a parallel  
<br>
filesystem (e.g., you're just using NFS), such schemes can actually be  
<br>
less efficient / slower.  It may even be better to have something like  
<br>
MPI_COMM_WORLD rank 0 read in the entire file and MPI_BCAST /  
<br>
MPI_SCATTER / etc. the relevant data to each MPI process as necessary.
<br>
<p>It's up to you to decide which is best for your application; it really  
<br>
depends on the requirements of what you are doing, your local setup,  
<br>
etc.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8932.php">Jeff Squyres: "Re: [OMPI users] libnuma issue"</a>
<li><strong>Previous message:</strong> <a href="8930.php">Jovana Knezevic: "Re: [OMPI users] Problem with MPI_File_read() (2)"</a>
<li><strong>In reply to:</strong> <a href="8930.php">Jovana Knezevic: "Re: [OMPI users] Problem with MPI_File_read() (2)"</a>
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
