<?
$subject_val = "Re: [OMPI devel] Bug in opal sos changes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 18 15:34:46 2010" -->
<!-- isoreceived="20100518193446" -->
<!-- sent="Tue, 18 May 2010 14:32:16 -0400" -->
<!-- isosent="20100518183216" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rolf.vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug in opal sos changes" -->
<!-- id="4BF2DD30.40504_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5626BD3B-37FF-4A74-A56D-40F909FF7C74_at_cisco.com" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rolf.vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-18 14:32:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7971.php">Abhishek Kulkarni: "Re: [OMPI devel] Bug in opal sos changes"</a>
<li><strong>Previous message:</strong> <a href="7969.php">Jeff Squyres: "Re: [OMPI devel] Bug in opal sos changes"</a>
<li><strong>In reply to:</strong> <a href="7969.php">Jeff Squyres: "Re: [OMPI devel] Bug in opal sos changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7971.php">Abhishek Kulkarni: "Re: [OMPI devel] Bug in opal sos changes"</a>
<li><strong>Reply:</strong> <a href="7971.php">Abhishek Kulkarni: "Re: [OMPI devel] Bug in opal sos changes"</a>
<li><strong>Reply:</strong> <a href="7972.php">Ralph Castain: "Re: [OMPI devel] Bug in opal sos changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think we are almost saying the same thing. But to be sure, I will 
<br>
restate. The call to opal_pointer_array_add() can return either an index 
<br>
(which I assume is a positive integer, maybe also 0?) or 
<br>
OPAL_ERR_OUT_OF_RESOURCE (which is a -2) if it cannot malloc anymore 
<br>
space in the table.  So, I guess I agree that the original code was 
<br>
wrong as it never would have detected the error since OMPI_ERROR != 
<br>
OPAL_ERR_OUT_OF_RESOURCE.  (-1 != -2)
<br>
<p>Since we are overloading the return value, it seems like the only thing 
<br>
we could do is something like this:
<br>
<p>if (new_group-&gt;grp_f_to_c_index &lt; 0)
<br>
&nbsp;&nbsp;&nbsp;error();
<br>
<p>But that does not follow the SOS logic as the key is that we want to 
<br>
compare to OMPI_SUCCESS (I think).  Also, for what it is worth, the 
<br>
setting of the grp_f_to_c_index happens in the group constructor, so we 
<br>
cannot get at the return value of opal_pointer_array_add() except by 
<br>
looking at the grp_f_to_c value after the object is constructed.  I am 
<br>
not sure the correct way to handle this.
<br>
<p>Rolf
<br>
<p>On 05/18/10 14:02, Jeff Squyres wrote:
<br>
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
<span class="quotelev2">&gt;&gt; I am getting SEGVs while running the IMB-MPI1 tests.  I believe the
</span><br>
<span class="quotelev2">&gt;&gt; problem has to do with changes made to the group_init.c file last
</span><br>
<span class="quotelev2">&gt;&gt; night.  The error occurs in the call to MPI_Comm_split.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  There were 4 changes in the file that look like this:
</span><br>
<span class="quotelev2">&gt;&gt; OLD:
</span><br>
<span class="quotelev2">&gt;&gt; if (OMPI_ERROR == new_group-&gt;grp_f_to_c_index)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; NEW:
</span><br>
<span class="quotelev2">&gt;&gt; if (OMPI_SUCCESS != new_group-&gt;grp_f_to_c_index)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I change it back, things work.  I understand the idea of changing the
</span><br>
<span class="quotelev2">&gt;&gt; logic, but maybe that does not apply in this case?    When running with
</span><br>
<span class="quotelev2">&gt;&gt; np=2, the value of new_group-&gt;grp_f_to_c_index is 4, thereby not
</span><br>
<span class="quotelev2">&gt;&gt; equaling OMPI_SUCCESS and we end up in an error condition which results
</span><br>
<span class="quotelev2">&gt;&gt; in a null pointer later on.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am I the only that has run into this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7970/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7971.php">Abhishek Kulkarni: "Re: [OMPI devel] Bug in opal sos changes"</a>
<li><strong>Previous message:</strong> <a href="7969.php">Jeff Squyres: "Re: [OMPI devel] Bug in opal sos changes"</a>
<li><strong>In reply to:</strong> <a href="7969.php">Jeff Squyres: "Re: [OMPI devel] Bug in opal sos changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7971.php">Abhishek Kulkarni: "Re: [OMPI devel] Bug in opal sos changes"</a>
<li><strong>Reply:</strong> <a href="7971.php">Abhishek Kulkarni: "Re: [OMPI devel] Bug in opal sos changes"</a>
<li><strong>Reply:</strong> <a href="7972.php">Ralph Castain: "Re: [OMPI devel] Bug in opal sos changes"</a>
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
