<?
$subject_val = "Re: [OMPI devel] Bug in opal sos changes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 18 16:16:31 2010" -->
<!-- isoreceived="20100518201631" -->
<!-- sent="Tue, 18 May 2010 14:16:25 -0600" -->
<!-- isosent="20100518201625" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug in opal sos changes" -->
<!-- id="AANLkTikSz0ccrNgrqVbUnE2i1H-o6e5ypHyDtiXIaSDA_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-18 16:16:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7973.php">Jeff Squyres: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="7971.php">Abhishek Kulkarni: "Re: [OMPI devel] Bug in opal sos changes"</a>
<li><strong>In reply to:</strong> <a href="7970.php">Rolf vandeVaart: "Re: [OMPI devel] Bug in opal sos changes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...well, the way that function -used- to work was it returned an error
<br>
code, and had the index as a *int param in the function call. Tim P changed
<br>
it awhile back (don't remember exactly why, but it was when he moved the
<br>
pointer_array code from orte to opal), and I'm not sure the fixes it
<br>
required were ever propagated everywhere (I occasionally run across them in
<br>
ORTE, though I think I've got them all now).
<br>
<p>My point: only real fix may be to go back to the old API and quit
<br>
overloading the return code.
<br>
<p><p>On Tue, May 18, 2010 at 12:32 PM, Rolf vandeVaart &lt;
<br>
rolf.vandevaart_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  I think we are almost saying the same thing. But to be sure, I will
</span><br>
<span class="quotelev1">&gt; restate. The call to opal_pointer_array_add() can return either an index
</span><br>
<span class="quotelev1">&gt; (which I assume is a positive integer, maybe also 0?) or
</span><br>
<span class="quotelev1">&gt; OPAL_ERR_OUT_OF_RESOURCE (which is a -2) if it cannot malloc anymore space
</span><br>
<span class="quotelev1">&gt; in the table.  So, I guess I agree that the original code was wrong as it
</span><br>
<span class="quotelev1">&gt; never would have detected the error since OMPI_ERROR !=
</span><br>
<span class="quotelev1">&gt; OPAL_ERR_OUT_OF_RESOURCE.  (-1 != -2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since we are overloading the return value, it seems like the only thing we
</span><br>
<span class="quotelev1">&gt; could do is something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if (new_group-&gt;grp_f_to_c_index &lt; 0)
</span><br>
<span class="quotelev1">&gt;    error();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But that does not follow the SOS logic as the key is that we want to
</span><br>
<span class="quotelev1">&gt; compare to OMPI_SUCCESS (I think).  Also, for what it is worth, the setting
</span><br>
<span class="quotelev1">&gt; of the grp_f_to_c_index happens in the group constructor, so we cannot get
</span><br>
<span class="quotelev1">&gt; at the return value of opal_pointer_array_add() except by looking at the
</span><br>
<span class="quotelev1">&gt; grp_f_to_c value after the object is constructed.  I am not sure the correct
</span><br>
<span class="quotelev1">&gt; way to handle this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
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
<span class="quotelev1">&gt; The *_f_to_c_index values are the return value from a call to opal_point_array_add().  This value will either be non-negative or -1.  -1 indicates a failure.  It's not an *_ERR_* code -- it's a -1 index value.  So the comparisons should really have been to -1 in the first place.
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
<span class="quotelev1">&gt;  I am getting SEGVs while running the IMB-MPI1 tests.  I believe the
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
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7972/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7973.php">Jeff Squyres: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="7971.php">Abhishek Kulkarni: "Re: [OMPI devel] Bug in opal sos changes"</a>
<li><strong>In reply to:</strong> <a href="7970.php">Rolf vandeVaart: "Re: [OMPI devel] Bug in opal sos changes"</a>
<!-- nextthread="start" -->
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
