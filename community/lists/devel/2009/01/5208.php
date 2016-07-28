<?
$subject_val = "Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 15 17:01:44 2009" -->
<!-- isoreceived="20090115220144" -->
<!-- sent="Thu, 15 Jan 2009 17:01:38 -0500" -->
<!-- isosent="20090115220138" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()" -->
<!-- id="ECE2DA34-FEA1-4C07-91C2-6AC5F273B011_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="496FAD26.8090704_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-15 17:01:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5209.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()"</a>
<li><strong>Previous message:</strong> <a href="5207.php">Eugene Loh: "[OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()"</a>
<li><strong>In reply to:</strong> <a href="5207.php">Eugene Loh: "[OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5209.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()"</a>
<li><strong>Reply:</strong> <a href="5209.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Absolutely! Why wait until the 1.4 while we can have that in the  
<br>
1.3.1...
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jan 15, 2009, at 16:39 , Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; I don't know what scope of changes require RFCs, but here's a  
</span><br>
<span class="quotelev1">&gt; trivial change.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; RFC: Eliminate opal_round_up_to_nearest_pow2().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHAT: Eliminate the function opal_round_up_to_nearest_pow2().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY: It's poorly written.  A clean rewrite would take only
</span><br>
<span class="quotelev1">&gt; one line of code, which is best written in-place rather than
</span><br>
<span class="quotelev1">&gt; making a function call.  Currently, there is only one call
</span><br>
<span class="quotelev1">&gt; site, and I expect it to go away.  Similar code already inlines
</span><br>
<span class="quotelev1">&gt; such computation rather than calling this obscure, unused function.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHERE: opal/util
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHEN: Upon acceptance.  For 1.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIMEOUT: January 30, 2009.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY (details):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The function opal_round_up_to_nearest_pow2() is defined in
</span><br>
<span class="quotelev1">&gt; opal/util/pow2.c and is declared in the corresponding include
</span><br>
<span class="quotelev1">&gt; file.  It returns the calling argument rounded up to the
</span><br>
<span class="quotelev1">&gt; nearest power of 2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This code is difficult to read.  That is, it is difficult to
</span><br>
<span class="quotelev1">&gt; reason about the code's correctness or range of validity or
</span><br>
<span class="quotelev1">&gt; its behavior outside the range of validity.  Meanwhile, it
</span><br>
<span class="quotelev1">&gt; offers no compelling advantage -- e.g., fast performance or
</span><br>
<span class="quotelev1">&gt; increased robustness.  It is called by only one site, which
</span><br>
<span class="quotelev1">&gt; is going away.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To use the existing function, one must know of its existence,
</span><br>
<span class="quotelev1">&gt; include the proper header file, and make the appropriate function
</span><br>
<span class="quotelev1">&gt; call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In contrast, a cleanly written version of this code takes only
</span><br>
<span class="quotelev1">&gt; one line of code.  Hence, calling sites are cleaner and faster
</span><br>
<span class="quotelev1">&gt; if they simply in-line this computation.  Further, such code is
</span><br>
<span class="quotelev1">&gt; customizable (e.g., round down to a power of 2).  Most &quot;round to
</span><br>
<span class="quotelev1">&gt; power of 2&quot; computations in OMPI today already simply implement
</span><br>
<span class="quotelev1">&gt; this computation themselves rather than calling this obscure
</span><br>
<span class="quotelev1">&gt; function.  E.g., search on &quot;pow2&quot; in
</span><br>
<span class="quotelev1">&gt; ompi/mca/coll/tuned/coll_tuned_decision_fixed.c.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHAT (details):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Remove the file opal/util/pow2.c.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Remove the file opal/util/pow2.h.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - In opal/util/Makefile.am, remove pow2.h and pow2.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - In ompi/class/ompi_circular_buffer_fifo.h, if the call
</span><br>
<span class="quotelev1">&gt; to opal_round_up_to_nearest_pow2() has not already been
</span><br>
<span class="quotelev1">&gt; removed, then remove
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    #include &quot;opal/util/pow2.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and replace
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    size = opal_round_up_to_nearest_pow2(size_of_fifo);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    size = 1;
</span><br>
<span class="quotelev1">&gt;    while ( size &lt; size_of_fifo)
</span><br>
<span class="quotelev1">&gt;        size &lt;&lt;= 1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; or the even more compact
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    for (size = 1; size &lt; size_of_fifo; size &lt;&lt;= 1);
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
<li><strong>Next message:</strong> <a href="5209.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()"</a>
<li><strong>Previous message:</strong> <a href="5207.php">Eugene Loh: "[OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()"</a>
<li><strong>In reply to:</strong> <a href="5207.php">Eugene Loh: "[OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5209.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()"</a>
<li><strong>Reply:</strong> <a href="5209.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()"</a>
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
