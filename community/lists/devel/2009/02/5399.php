<?
$subject_val = "[OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 11:54:33 2009" -->
<!-- isoreceived="20090212165433" -->
<!-- sent="Thu, 12 Feb 2009 08:53:49 -0800" -->
<!-- isosent="20090212165349" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h" -->
<!-- id="4994541D.1030801_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-12 11:53:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5400.php">Tim Mattox: "[OMPI devel] MPI_Op_free crashes in MTT"</a>
<li><strong>Previous message:</strong> <a href="5398.php">Lisandro Dalcin: "[OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5401.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Reply:</strong> <a href="5401.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
RFC:  Eliminate ompi/class/ompi_[circular_buffer_]fifo.h
<br>
<p>WHAT:  Eliminate those two include files.
<br>
<p>WHY:  These include files are only used by the sm BTL.  They
<br>
are not generally usable.  Further, the sm BTL will soon no
<br>
longer use them.  The current FIFOs support only a single sender
<br>
each and we want multiple senders to be able to share a common
<br>
FIFO.  The current FIFOs also can grow without bound, which is
<br>
complicated support that we don't think we need.
<br>
<p>WHERE:  Two include files: ompi/class/ompi_[circular_buffer_]fifo.h
<br>
<p>WHEN:  &quot;Immediately&quot;.  Intended for 1.3.x.
<br>
<p>TIMEOUT: February 20, 2009.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5400.php">Tim Mattox: "[OMPI devel] MPI_Op_free crashes in MTT"</a>
<li><strong>Previous message:</strong> <a href="5398.php">Lisandro Dalcin: "[OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5401.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Reply:</strong> <a href="5401.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
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
