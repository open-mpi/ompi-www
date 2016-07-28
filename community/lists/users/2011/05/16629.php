<?
$subject_val = "Re: [OMPI users] MPI_Allgather with derived type crash";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 25 16:49:23 2011" -->
<!-- isoreceived="20110525204923" -->
<!-- sent="Thu, 26 May 2011 00:49:18 +0400" -->
<!-- isosent="20110525204918" -->
<!-- name="Andrew Senin" -->
<!-- email="andrew.senin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allgather with derived type crash" -->
<!-- id="BANLkTinYVrhQJfv0FVXe0RsGr=1RgqHACA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4ddd4f10.027d0e0a.5040.ffffe344_at_mx.google.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Allgather with derived type crash<br>
<strong>From:</strong> Andrew Senin (<em>andrew.senin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-25 16:49:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16630.php">Jeff Squyres: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE	2011 (aka 12.0)"</a>
<li><strong>Previous message:</strong> <a href="16628.php">George Bosilca: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>In reply to:</strong> <a href="16627.php">Andrew Senin: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16634.php">Jeff Squyres: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've tried on my home Ubuntu 10.04, 64 bit version. It crashes with number
<br>
of ranks 5-7, 9 and greater. I simply downloaded 1.4.3 version (
<br>
<a href="http://www.open-mpi.org/software/ompi/v1.4/downloads/openmpi-1.4.3.tar.gz">http://www.open-mpi.org/software/ompi/v1.4/downloads/openmpi-1.4.3.tar.gz</a>):
<br>
<p>- configure --prefix=`pwd`/install &amp;&amp; make install
<br>
- cd ~/projects/gather
<br>
- ~/projects/distribs/openmpi-1.4.3/install/bin/mpicc -o gather ./gather.c
<br>
- ~/projects/distribs/openmpi-1.4.3/install/bin/mpirun -n 9 ./gather
<br>
- crash!
<br>
<p>-Andrew
<br>
<p><p>On Wed, May 25, 2011 at 10:48 PM, Andrew Senin &lt;andrew.senin_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Not exactly. I have 16 core nodes. Even if I run all 9 ranks on the same
</span><br>
<span class="quotelev1">&gt; node it fails (with --mca btl sm,self). I also tried running on different
</span><br>
<span class="quotelev1">&gt; nodes (3 nodes, 3 ranks each on each node) with openib and tcp - the same
</span><br>
<span class="quotelev1">&gt; effect. Also as I wrote in another message I could see this effect on vbox
</span><br>
<span class="quotelev1">&gt; with CentOS 5.3 (1 cores on guest, 4 cores on host, no network). So
</span><br>
<span class="quotelev1">&gt; possibly
</span><br>
<span class="quotelev1">&gt; this is something OS specific? Will try on Ubuntu and share the results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16629/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16630.php">Jeff Squyres: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE	2011 (aka 12.0)"</a>
<li><strong>Previous message:</strong> <a href="16628.php">George Bosilca: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>In reply to:</strong> <a href="16627.php">Andrew Senin: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16634.php">Jeff Squyres: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
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
