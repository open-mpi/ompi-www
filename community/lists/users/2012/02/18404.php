<?
$subject_val = "Re: [OMPI users] IO performance";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  6 11:46:11 2012" -->
<!-- isoreceived="20120206164611" -->
<!-- sent="Mon, 06 Feb 2012 08:39:11 -0800" -->
<!-- isosent="20120206163911" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IO performance" -->
<!-- id="1328546351.4286.17.camel_at_cedar.reachone.com" -->
<!-- inreplyto="20120206162123.GA29907_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] IO performance<br>
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-06 11:39:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18405.php">Richard Walsh: "Re: [OMPI users] IO performance"</a>
<li><strong>Previous message:</strong> <a href="18403.php">Rob Latham: "Re: [OMPI users] IO performance"</a>
<li><strong>In reply to:</strong> <a href="18403.php">Rob Latham: "Re: [OMPI users] IO performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18405.php">Richard Walsh: "Re: [OMPI users] IO performance"</a>
<li><strong>Reply:</strong> <a href="18405.php">Richard Walsh: "Re: [OMPI users] IO performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rob
<br>
<p>Thanks, these are the kind of suggestions I was looking for.  I will try
<br>
them.  But I will have to twist some arms to get the 1.5 upgrade.  I
<br>
might just install a private copy for my tests.
<br>
<p>T. Rosmond
<br>
<p><p>On Mon, 2012-02-06 at 10:21 -0600, Rob Latham wrote:
<br>
<span class="quotelev1">&gt; On Fri, Feb 03, 2012 at 10:46:21AM -0800, Tom Rosmond wrote:
</span><br>
<span class="quotelev2">&gt; &gt; With all of this, here is my MPI related question.  I recently added an
</span><br>
<span class="quotelev2">&gt; &gt; option to use MPI-IO to do the heavy IO lifting in our applications.  I
</span><br>
<span class="quotelev2">&gt; &gt; would like to know what the relative importance of the dedicated MPI
</span><br>
<span class="quotelev2">&gt; &gt; network vis-a-vis the GPFS network for typical MPIIO collective reads
</span><br>
<span class="quotelev2">&gt; &gt; and writes.  I assume there must be some hand-off of data between the
</span><br>
<span class="quotelev2">&gt; &gt; networks during the process, but how is it done, and are there any rules
</span><br>
<span class="quotelev2">&gt; &gt; to help understand it.  Any insights would be welcome.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's not really a handoff.  MPI-IO on GPFS will call a posix read()
</span><br>
<span class="quotelev1">&gt; or write() system call after possibly doing some data massaging.  That
</span><br>
<span class="quotelev1">&gt; system call sends data over the storage network.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you've got a fast communication network but a slow storage network,
</span><br>
<span class="quotelev1">&gt; then some of the MPI-IO optimizations will need to be adjusted a bit.
</span><br>
<span class="quotelev1">&gt; Seems like you'd want to really beef up the &quot;cb_buffer_size&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For GPFS, the big thing MPI-IO can do for you is align writes to
</span><br>
<span class="quotelev1">&gt; GPFS.  see my next point.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; P.S.  I am running with Open-mpi 1.4.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you upgrade to something in the 1.5 series you will get some nice
</span><br>
<span class="quotelev1">&gt; ROMIO optimizations that will help you out with writes to GPFS if 
</span><br>
<span class="quotelev1">&gt; you set the &quot;striping_unit&quot; hint to the GPFS block size.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18405.php">Richard Walsh: "Re: [OMPI users] IO performance"</a>
<li><strong>Previous message:</strong> <a href="18403.php">Rob Latham: "Re: [OMPI users] IO performance"</a>
<li><strong>In reply to:</strong> <a href="18403.php">Rob Latham: "Re: [OMPI users] IO performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18405.php">Richard Walsh: "Re: [OMPI users] IO performance"</a>
<li><strong>Reply:</strong> <a href="18405.php">Richard Walsh: "Re: [OMPI users] IO performance"</a>
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
