<?
$subject_val = "[OMPI devel] MPI_Op_free crashes in MTT";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 12:04:10 2009" -->
<!-- isoreceived="20090212170410" -->
<!-- sent="Thu, 12 Feb 2009 12:04:05 -0500" -->
<!-- isosent="20090212170405" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Op_free crashes in MTT" -->
<!-- id="ea86ce220902120904k5b271b75q127f94407190ac80_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Op_free crashes in MTT<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-12 12:04:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5401.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Previous message:</strong> <a href="5399.php">Eugene Loh: "[OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5402.php">George Bosilca: "Re: [OMPI devel] MPI_Op_free crashes in MTT"</a>
<li><strong>Reply:</strong> <a href="5402.php">George Bosilca: "Re: [OMPI devel] MPI_Op_free crashes in MTT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
Last night's MTT runs show a fairly consistent segfault on the
<br>
trunk (1.4a1r20525) in the MPI_Op_free routine, and shows up
<br>
in various tests (including the IBM test suite's collective/op test):
<br>
<a href="http://www.open-mpi.org/mtt/index.php?do_redir=953">http://www.open-mpi.org/mtt/index.php?do_redir=953</a>
<br>
<p>I've not investigated in detail, so it could be a coincidence...
<br>
but it sure seems like it was caused by either/both of
<br>
these changes to the &quot;op&quot; stuff yesterday: r20521 and/or r20522
<br>
<pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5401.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<li><strong>Previous message:</strong> <a href="5399.php">Eugene Loh: "[OMPI devel] RFC: Eliminate ompi/class/ompi_[circular_buffer_]fifo.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5402.php">George Bosilca: "Re: [OMPI devel] MPI_Op_free crashes in MTT"</a>
<li><strong>Reply:</strong> <a href="5402.php">George Bosilca: "Re: [OMPI devel] MPI_Op_free crashes in MTT"</a>
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
