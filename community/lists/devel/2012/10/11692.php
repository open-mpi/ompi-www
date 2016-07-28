<?
$subject_val = "Re: [OMPI devel] Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 30 22:25:51 2012" -->
<!-- isoreceived="20121031022551" -->
<!-- sent="Tue, 30 Oct 2012 22:25:44 -0400" -->
<!-- isosent="20121031022544" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile-time MPI_Datatype checking" -->
<!-- id="20862D41-8886-41EE-9658-995DDA131443_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+Y5xYfAUKeq1=-m0YLxQtz5ONOPty24v7D7EaM9STZe3Kd2QA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Compile-time MPI_Datatype checking<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-30 22:25:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11693.php">Paul Hargrove: "[OMPI devel] 1.7.0rc5 - make check failure on FreeBSD-6.3/amd64"</a>
<li><strong>Previous message:</strong> <a href="11691.php">Ralph Castain: "[OMPI devel] 1.7.0rc5"</a>
<li><strong>In reply to:</strong> <a href="11662.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11700.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11700.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 28, 2012, at 10:28 AM, Dmitri Gribenko wrote:
<br>
<p><span class="quotelev1">&gt; Thank you for the feedback!  Hopefully the attached patch fixes both of these.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. There are two helper structs with complex numbers.  I predicated
</span><br>
<span class="quotelev1">&gt; the struct declarations and use to appear only in C99.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. These macros were indeed missing.
</span><br>
<p>I did a few tests and this now looks good; no more warnings.
<br>
<p>I brought up this functionality on the weekly OMPI dev telecon today and got an important piece of feedback: apparently there are a large class of apps that wrap their messages as transparent blobs, and then use either non-blob-like or derived MPI datatypes.  (I said something similar to this earlier in the thread, but I didn't know that there was a large class of apps that actually did it)
<br>
<p>A very simple example is:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;char *foo = malloc(...);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;// ...fill foo...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(foo, x, MPI_INT, ...);
<br>
<p>Another not-uncommon example is:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;char *foo = malloc(...);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;// Receive some INTEGERs from a Fortran sender
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(foo, x, MPI_INTEGER, ...);
<br>
<p>With this patch, they'd get warnings about these uses, even though they are completely valid according to MPI.
<br>
<p>A suggestion was that this functionality could be disabled by default, and enabled with a magic macro.  Perhaps something like:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpicc -DOMPI_DDT_CHECKING ...
<br>
<p>or something like that.
<br>
<p>Thoughts?
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
<li><strong>Next message:</strong> <a href="11693.php">Paul Hargrove: "[OMPI devel] 1.7.0rc5 - make check failure on FreeBSD-6.3/amd64"</a>
<li><strong>Previous message:</strong> <a href="11691.php">Ralph Castain: "[OMPI devel] 1.7.0rc5"</a>
<li><strong>In reply to:</strong> <a href="11662.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11700.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11700.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
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
