<?
$subject_val = "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 14:30:14 2010" -->
<!-- isoreceived="20101129193014" -->
<!-- sent="29 Nov 2010 19:30:09 +0000" -->
<!-- isosent="20101129193009" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!" -->
<!-- id="Prayer.1.3.3.1011291930090.21977_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B1A15353-E228-4B68-B0DD-B95A1D02DBB2_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 14:30:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8732.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Previous message:</strong> <a href="8730.php">Jeff Squyres: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>In reply to:</strong> <a href="8729.php">George Bosilca: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8730.php">Jeff Squyres: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 29 2010, George Bosilca wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If your code doesn't exactly what is described in the code snippet 
</span><br>
<span class="quotelev1">&gt; attached to your previous email, then you can safely ignore the warning. 
</span><br>
<span class="quotelev1">&gt; In fact, any fork done prior to the communication is a non-issue, but it 
</span><br>
<span class="quotelev1">&gt; is difficult to identify. Therefore, we output the warning as soon as we 
</span><br>
<span class="quotelev1">&gt; detect a fork after MPI_Init.
</span><br>
<p>USUALLY a non-issue.
<br>
<p><span class="quotelev1">&gt; You can find more information about the usage of fork in Open MPI at 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.de/faq/?category=tuning#fork-warning">http://www.open-mpi.de/faq/?category=tuning#fork-warning</a>
</span><br>
<p>Yes.  It says about as much as can be said, except between consenting
<br>
geeks in private!  Well, I suppose that this mailing list counts :-)
<br>
<p>I have had trouble with systems that sent signals to process groups
<br>
and/or all processes with a particular controlling terminal, and even
<br>
operating system 'super groups', where the location of the fork won't
<br>
save you.  I can't see how to describe that issue in terms that make
<br>
sense to most users.
<br>
<p><p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8732.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Previous message:</strong> <a href="8730.php">Jeff Squyres: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>In reply to:</strong> <a href="8729.php">George Bosilca: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8730.php">Jeff Squyres: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
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
