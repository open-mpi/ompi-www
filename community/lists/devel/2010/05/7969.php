<?
$subject_val = "Re: [OMPI devel] Bug in opal sos changes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 18 14:02:39 2010" -->
<!-- isoreceived="20100518180239" -->
<!-- sent="Tue, 18 May 2010 14:02:34 -0400" -->
<!-- isosent="20100518180234" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug in opal sos changes" -->
<!-- id="5626BD3B-37FF-4A74-A56D-40F909FF7C74_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BF2CD73.4020501_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bug in opal sos changes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-18 14:02:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7970.php">Rolf vandeVaart: "Re: [OMPI devel] Bug in opal sos changes"</a>
<li><strong>Previous message:</strong> <a href="7968.php">Rolf vandeVaart: "[OMPI devel] Bug in opal sos changes"</a>
<li><strong>In reply to:</strong> <a href="7968.php">Rolf vandeVaart: "[OMPI devel] Bug in opal sos changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7970.php">Rolf vandeVaart: "Re: [OMPI devel] Bug in opal sos changes"</a>
<li><strong>Reply:</strong> <a href="7970.php">Rolf vandeVaart: "Re: [OMPI devel] Bug in opal sos changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like the comparison to OMPI_ERROR worked by accident -- just because it happened to have a value of -1.  
<br>
<p>The *_f_to_c_index values are the return value from a call to opal_point_array_add().  This value will either be non-negative or -1.  -1 indicates a failure.  It's not an *_ERR_* code -- it's a -1 index value.  So the comparisons should really have been to -1 in the first place.
<br>
<p>Rolf / Abhishek -- can you fix?  Did this happen in other *_f_to_c_index member variable comparisons elsewhere?
<br>
<p><p><p>On May 18, 2010, at 1:25 PM, Rolf vandeVaart wrote:
<br>
<p><span class="quotelev1">&gt; I am getting SEGVs while running the IMB-MPI1 tests.  I believe the
</span><br>
<span class="quotelev1">&gt; problem has to do with changes made to the group_init.c file last
</span><br>
<span class="quotelev1">&gt; night.  The error occurs in the call to MPI_Comm_split.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  There were 4 changes in the file that look like this:
</span><br>
<span class="quotelev1">&gt; OLD:
</span><br>
<span class="quotelev1">&gt; if (OMPI_ERROR == new_group-&gt;grp_f_to_c_index)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NEW:
</span><br>
<span class="quotelev1">&gt; if (OMPI_SUCCESS != new_group-&gt;grp_f_to_c_index)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I change it back, things work.  I understand the idea of changing the
</span><br>
<span class="quotelev1">&gt; logic, but maybe that does not apply in this case?    When running with
</span><br>
<span class="quotelev1">&gt; np=2, the value of new_group-&gt;grp_f_to_c_index is 4, thereby not
</span><br>
<span class="quotelev1">&gt; equaling OMPI_SUCCESS and we end up in an error condition which results
</span><br>
<span class="quotelev1">&gt; in a null pointer later on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am I the only that has run into this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7970.php">Rolf vandeVaart: "Re: [OMPI devel] Bug in opal sos changes"</a>
<li><strong>Previous message:</strong> <a href="7968.php">Rolf vandeVaart: "[OMPI devel] Bug in opal sos changes"</a>
<li><strong>In reply to:</strong> <a href="7968.php">Rolf vandeVaart: "[OMPI devel] Bug in opal sos changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7970.php">Rolf vandeVaart: "Re: [OMPI devel] Bug in opal sos changes"</a>
<li><strong>Reply:</strong> <a href="7970.php">Rolf vandeVaart: "Re: [OMPI devel] Bug in opal sos changes"</a>
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
