<?
$subject_val = "Re: [OMPI devel] MPI_Op_free crashes in MTT";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 12:27:40 2009" -->
<!-- isoreceived="20090212172740" -->
<!-- sent="Thu, 12 Feb 2009 12:27:34 -0500" -->
<!-- isosent="20090212172734" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Op_free crashes in MTT" -->
<!-- id="F3F132CE-B8C8-4172-9318-3EFD7CD2AC19_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ea86ce220902120904k5b271b75q127f94407190ac80_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Op_free crashes in MTT<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-12 12:27:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5403.php">Eugene Loh: "Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Previous message:</strong> <a href="5401.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>In reply to:</strong> <a href="5400.php">Tim Mattox: "[OMPI devel] MPI_Op_free crashes in MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5404.php">Jeff Squyres: "Re: [OMPI devel] MPI_Op_free crashes in MTT"</a>
<li><strong>Reply:</strong> <a href="5404.php">Jeff Squyres: "Re: [OMPI devel] MPI_Op_free crashes in MTT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm unable to replicate these errors with revision r20529. All tests  
<br>
pass on my Linux cluster, TCP based not Myrinet. Let's see if other  
<br>
contributors to the MTT tests trigger the same errors.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Feb 12, 2009, at 12:04 , Tim Mattox wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; Last night's MTT runs show a fairly consistent segfault on the
</span><br>
<span class="quotelev1">&gt; trunk (1.4a1r20525) in the MPI_Op_free routine, and shows up
</span><br>
<span class="quotelev1">&gt; in various tests (including the IBM test suite's collective/op test):
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mtt/index.php?do_redir=953">http://www.open-mpi.org/mtt/index.php?do_redir=953</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've not investigated in detail, so it could be a coincidence...
</span><br>
<span class="quotelev1">&gt; but it sure seems like it was caused by either/both of
</span><br>
<span class="quotelev1">&gt; these changes to the &quot;op&quot; stuff yesterday: r20521 and/or r20522
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5403.php">Eugene Loh: "Re: [OMPI devel] RFC: Eliminate	ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Previous message:</strong> <a href="5401.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>In reply to:</strong> <a href="5400.php">Tim Mattox: "[OMPI devel] MPI_Op_free crashes in MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5404.php">Jeff Squyres: "Re: [OMPI devel] MPI_Op_free crashes in MTT"</a>
<li><strong>Reply:</strong> <a href="5404.php">Jeff Squyres: "Re: [OMPI devel] MPI_Op_free crashes in MTT"</a>
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
