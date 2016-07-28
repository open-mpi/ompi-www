<?
$subject_val = "Re: [OMPI users] Problem with MPI_File_read() (2)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 15 05:06:26 2009" -->
<!-- isoreceived="20090415090626" -->
<!-- sent="Wed, 15 Apr 2009 11:06:21 +0200" -->
<!-- isosent="20090415090621" -->
<!-- name="Jovana Knezevic" -->
<!-- email="jovana.knezevic.83_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_File_read() (2)" -->
<!-- id="9d13e50c0904150206g78f320a8m5f52d1c780f5179c_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Problem with MPI_File_read() (2)" -->
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
<strong>From:</strong> Jovana Knezevic (<em>jovana.knezevic.83_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-15 05:06:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8931.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_File_read() (2)"</a>
<li><strong>Previous message:</strong> <a href="8929.php">Chris Gottbrath: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="8926.php">Jovana Knezevic: "[OMPI users] Problem with MPI_File_read() (2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8931.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_File_read() (2)"</a>
<li><strong>Reply:</strong> <a href="8931.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_File_read() (2)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  In general, files written by MPI_File_write (and friends) are only
</span><br>
<span class="quotelev1">&gt;  guaranteed to be readable by MPI_File_read (and friends).  So if you
</span><br>
<span class="quotelev1">&gt;  have an ASCII input file, or even a binary input file, you might need
</span><br>
<span class="quotelev1">&gt;  to read it in with traditional/unix file read functions and then write
</span><br>
<span class="quotelev1">&gt;  it out with MPI_File_write.  Then your parallel application will be
</span><br>
<span class="quotelev1">&gt;  able to use the various MPI_File_* functions to read the file at run-
</span><br>
<span class="quotelev1">&gt;  time.  Hence, there's no real generic &lt;non-MPI-file&gt; -&gt; &lt;MPI-file&gt;
</span><br>
<span class="quotelev1">&gt;  convertor; you'll need to write your own that is specific to your data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Make sense?
</span><br>
<p>Hello Jeff!
<br>
<p>Thanks a lot!
<br>
Yes, sure, what you say makes sense. On the other hand, it seems I
<br>
will have to &quot;traditionaly&quot;-open the input file for n times - each one
<br>
for one process, since anyway all of my processes have to collect
<br>
their data from it (each parsing it from the beginning to the end),
<br>
don't you think so? I wanted to take an advantage of MPI to read (in
<br>
each process) the data from one file... Or have I misunderstood
<br>
something?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8931.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_File_read() (2)"</a>
<li><strong>Previous message:</strong> <a href="8929.php">Chris Gottbrath: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="8926.php">Jovana Knezevic: "[OMPI users] Problem with MPI_File_read() (2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8931.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_File_read() (2)"</a>
<li><strong>Reply:</strong> <a href="8931.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_File_read() (2)"</a>
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
