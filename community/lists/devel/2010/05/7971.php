<?
$subject_val = "Re: [OMPI devel] Bug in opal sos changes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 18 15:54:06 2010" -->
<!-- isoreceived="20100518195406" -->
<!-- sent="Tue, 18 May 2010 15:54:05 -0400 (EDT)" -->
<!-- isosent="20100518195405" -->
<!-- name="Abhishek Kulkarni" -->
<!-- email="adkulkar_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug in opal sos changes" -->
<!-- id="alpine.LRH.2.00.1005181537030.717_at_tank.cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BF2DD30.40504_at_oracle.com" -->
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
<strong>From:</strong> Abhishek Kulkarni (<em>adkulkar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-18 15:54:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7972.php">Ralph Castain: "Re: [OMPI devel] Bug in opal sos changes"</a>
<li><strong>Previous message:</strong> <a href="7970.php">Rolf vandeVaart: "Re: [OMPI devel] Bug in opal sos changes"</a>
<li><strong>In reply to:</strong> <a href="7970.php">Rolf vandeVaart: "Re: [OMPI devel] Bug in opal sos changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7972.php">Ralph Castain: "Re: [OMPI devel] Bug in opal sos changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 18 May 2010, Rolf vandeVaart wrote:
<br>
<p><span class="quotelev1">&gt; I think we are almost saying the same thing. But to be sure, I will restate. The call to opal_pointer_array_add() can return either an index (which I assume is a positive
</span><br>
<span class="quotelev1">&gt; integer, maybe also 0?) or OPAL_ERR_OUT_OF_RESOURCE (which is a -2) if it cannot malloc anymore space in the table.&#160; So, I guess I agree that the original code was wrong as
</span><br>
<span class="quotelev1">&gt; it never would have detected the error since OMPI_ERROR != OPAL_ERR_OUT_OF_RESOURCE.&#160; (-1 != -2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since we are overloading the return value, it seems like the only thing we could do is something like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if (new_group-&gt;grp_f_to_c_index &lt; 0)
</span><br>
<span class="quotelev1">&gt; &#160;&#160; error();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes, that looks like the right thing to do.
<br>
<p><span class="quotelev1">&gt; But that does not follow the SOS logic as the key is that we want to compare to OMPI_SUCCESS (I think).&#160; Also, for what it is worth, the setting of the grp_f_to_c_index
</span><br>
<span class="quotelev1">&gt; happens in the group constructor, so we cannot get at the return value of opal_pointer_array_add() except by looking at the grp_f_to_c value after the object is
</span><br>
<span class="quotelev1">&gt; constructed.&#160; I am not sure the correct way to handle this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The only reason we replace the OMPI_ERROR checks with OMPI_SUCCESS is 
<br>
because when SOS logs an error in its internal data structures it returns 
<br>
a new reference to the error (an encoded error-code which SOS can use to 
<br>
locate the error). So, OMPI_ERROR is not OMPI_ERROR anymore but an SOS 
<br>
encoded OMPI_ERROR. We could always wrap the code to be checked with a 
<br>
call to extract its native error code and then perform the check like
<br>
<p>&nbsp;&nbsp;&nbsp;if (0 &gt; OPAL_SOS_GET_ERROR_CODE(new_group-&gt;grp_f_to_c_index)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;error();
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>In a lot of places (where functions return a boolean OMPI_SUCCESS or 
<br>
OMPI_ERROR), it was perfectly legit to just switch the way it's done but 
<br>
for the opal_pointer_array_add() and mca_base_param_* functions which 
<br>
return an index or an error, the above transformation seems to be the way 
<br>
to go.
<br>
<p>I'll send in a patch with these changes.
<br>
<p>Abhishek
<br>
<p><span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 05/18/10 14:02, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looks like the comparison to OMPI_ERROR worked by accident -- just because it happened to have a value of -1. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The *_f_to_c_index values are the return value from a call to opal_point_array_add().  This value will either be non-negative or -1.  -1 indicates a failure.  It's not an *_
</span><br>
<span class="quotelev1">&gt; ERR_* code -- it's a -1 index value.  So the comparisons should really have been to -1 in the first place.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rolf / Abhishek -- can you fix?  Did this happen in other *_f_to_c_index member variable comparisons elsewhere?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 18, 2010, at 1:25 PM, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am getting SEGVs while running the IMB-MPI1 tests.  I believe the
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7972.php">Ralph Castain: "Re: [OMPI devel] Bug in opal sos changes"</a>
<li><strong>Previous message:</strong> <a href="7970.php">Rolf vandeVaart: "Re: [OMPI devel] Bug in opal sos changes"</a>
<li><strong>In reply to:</strong> <a href="7970.php">Rolf vandeVaart: "Re: [OMPI devel] Bug in opal sos changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7972.php">Ralph Castain: "Re: [OMPI devel] Bug in opal sos changes"</a>
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
