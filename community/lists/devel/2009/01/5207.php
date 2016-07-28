<?
$subject_val = "[OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 15 16:35:41 2009" -->
<!-- isoreceived="20090115213541" -->
<!-- sent="Thu, 15 Jan 2009 13:39:50 -0800" -->
<!-- isosent="20090115213950" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()" -->
<!-- id="496FAD26.8090704_at_sun.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-15 16:39:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5208.php">George Bosilca: "Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()"</a>
<li><strong>Previous message:</strong> <a href="5206.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5208.php">George Bosilca: "Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()"</a>
<li><strong>Reply:</strong> <a href="5208.php">George Bosilca: "Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()"</a>
<li><strong>Reply:</strong> <a href="5210.php">Tim Mattox: "Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know what scope of changes require RFCs, but here's a trivial 
<br>
change.
<br>
<p>==================================================
<br>
<p>RFC: Eliminate opal_round_up_to_nearest_pow2().
<br>
<p>WHAT: Eliminate the function opal_round_up_to_nearest_pow2().
<br>
<p>WHY: It's poorly written.  A clean rewrite would take only
<br>
one line of code, which is best written in-place rather than
<br>
making a function call.  Currently, there is only one call
<br>
site, and I expect it to go away.  Similar code already inlines
<br>
such computation rather than calling this obscure, unused function.
<br>
<p>WHERE: opal/util
<br>
<p>WHEN: Upon acceptance.  For 1.4.
<br>
<p>TIMEOUT: January 30, 2009.
<br>
<p>==================================================
<br>
<p>WHY (details):
<br>
<p>The function opal_round_up_to_nearest_pow2() is defined in
<br>
opal/util/pow2.c and is declared in the corresponding include
<br>
file.  It returns the calling argument rounded up to the
<br>
nearest power of 2.
<br>
<p>This code is difficult to read.  That is, it is difficult to
<br>
reason about the code's correctness or range of validity or
<br>
its behavior outside the range of validity.  Meanwhile, it
<br>
offers no compelling advantage -- e.g., fast performance or
<br>
increased robustness.  It is called by only one site, which
<br>
is going away.
<br>
<p>To use the existing function, one must know of its existence,
<br>
include the proper header file, and make the appropriate function
<br>
call.
<br>
<p>In contrast, a cleanly written version of this code takes only
<br>
one line of code.  Hence, calling sites are cleaner and faster
<br>
if they simply in-line this computation.  Further, such code is
<br>
customizable (e.g., round down to a power of 2).  Most &quot;round to
<br>
power of 2&quot; computations in OMPI today already simply implement
<br>
this computation themselves rather than calling this obscure
<br>
function.  E.g., search on &quot;pow2&quot; in
<br>
ompi/mca/coll/tuned/coll_tuned_decision_fixed.c.
<br>
<p>WHAT (details):
<br>
<p>- Remove the file opal/util/pow2.c.
<br>
<p>- Remove the file opal/util/pow2.h.
<br>
<p>- In opal/util/Makefile.am, remove pow2.h and pow2.c
<br>
<p>- In ompi/class/ompi_circular_buffer_fifo.h, if the call
<br>
&nbsp;&nbsp;to opal_round_up_to_nearest_pow2() has not already been
<br>
&nbsp;&nbsp;removed, then remove
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#include &quot;opal/util/pow2.h&quot;
<br>
<p>&nbsp;&nbsp;and replace
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size = opal_round_up_to_nearest_pow2(size_of_fifo);
<br>
<p>&nbsp;&nbsp;with
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while ( size &lt; size_of_fifo)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size &lt;&lt;= 1;
<br>
<p>&nbsp;&nbsp;or the even more compact
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (size = 1; size &lt; size_of_fifo; size &lt;&lt;= 1);
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5208.php">George Bosilca: "Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()"</a>
<li><strong>Previous message:</strong> <a href="5206.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5208.php">George Bosilca: "Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()"</a>
<li><strong>Reply:</strong> <a href="5208.php">George Bosilca: "Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()"</a>
<li><strong>Reply:</strong> <a href="5210.php">Tim Mattox: "Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()"</a>
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
