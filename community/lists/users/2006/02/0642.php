<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb 10 18:58:12 2006" -->
<!-- isoreceived="20060210235812" -->
<!-- sent="Fri, 10 Feb 2006 15:58:08 -0800" -->
<!-- isosent="20060210235808" -->
<!-- name="Glen Kaukola" -->
<!-- email="glen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [O-MPI users] A few benchmarks" -->
<!-- id="43ED2890.7030807_at_cert.ucr.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7CF2223E-36AC-446A-A186-BF428BFCFC7D_at_open-mpi.org" -->
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
<strong>From:</strong> Glen Kaukola (<em>glen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-10 18:58:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0643.php">George Bosilca: "Re: [OMPI users] Bug in OMPI 1.0.1 using MPI_Recv with indexed datatypes"</a>
<li><strong>Previous message:</strong> <a href="0641.php">George Bosilca: "Re: [OMPI users] [O-MPI users] &quot;alltoall&quot; vs &quot;alltoallv&quot;"</a>
<li><strong>In reply to:</strong> <a href="0638.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] A few benchmarks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0655.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] A few benchmarks"</a>
<li><strong>Reply:</strong> <a href="0655.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] A few benchmarks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Feb 6, 2006, at 8:32 PM, Glen Kaukola wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Anyway, here are the times on a few runs I did with Open MPI  
</span><br>
<span class="quotelev2">&gt;&gt; 1.1a1r887.
</span><br>
<span class="quotelev2">&gt;&gt;   Basically what I'm seeing, my jobs run ok when they're local to one
</span><br>
<span class="quotelev2">&gt;&gt; machine, but as soon as they're split up between multiple machines
</span><br>
<span class="quotelev2">&gt;&gt; performance can vary:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4 cpu jobs:
</span><br>
<span class="quotelev2">&gt;&gt; 2:16:27
</span><br>
<span class="quotelev2">&gt;&gt; 2:01:35
</span><br>
<span class="quotelev2">&gt;&gt; 1:24:20
</span><br>
<span class="quotelev2">&gt;&gt; 1:03:55
</span><br>
<span class="quotelev2">&gt;&gt; 1:22:43
</span><br>
<span class="quotelev2">&gt;&gt; 1:31:53
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Wow -- am I reading this correct in that you are seeing a delta of  
</span><br>
<span class="quotelev1">&gt; over 1 minute in runs of the same application with the same data?   
</span><br>
<span class="quotelev1">&gt; That should absolutely not be happening.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you haven't already (I'm joining this thread late), can you send  
</span><br>
<span class="quotelev1">&gt; us your input deck so that we can try to reproduce this?
</span><br>
<p><p>That's in hours actually.  So a delta of over one hour.  And yes, it's 
<br>
the same exact setup, same day, same input data and everything for each job.
<br>
<p>You're wanting to run the cctm model though?  It would take a little 
<br>
doing, but I could whip up a tar file with all the necessary fixings, 
<br>
source, scripts, and input data.  Bear in mind that it would probably be 
<br>
anywhere from 2 to 5 gigs in size just to do a one day simulation.  I 
<br>
think the EPA might put out some sample data though that's a bit more 
<br>
manageable, so I could maybe set that up instead, but we'd still be 
<br>
talking around 1 gigabyte worth of data I think.  Oh, and you pretty 
<br>
much need the Portland Group's Fortran 95 compiler for things to work.
<br>
<p><p>Glen
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0643.php">George Bosilca: "Re: [OMPI users] Bug in OMPI 1.0.1 using MPI_Recv with indexed datatypes"</a>
<li><strong>Previous message:</strong> <a href="0641.php">George Bosilca: "Re: [OMPI users] [O-MPI users] &quot;alltoall&quot; vs &quot;alltoallv&quot;"</a>
<li><strong>In reply to:</strong> <a href="0638.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] A few benchmarks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0655.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] A few benchmarks"</a>
<li><strong>Reply:</strong> <a href="0655.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] A few benchmarks"</a>
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
