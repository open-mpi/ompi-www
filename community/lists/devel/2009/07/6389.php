<?
$subject_val = "[OMPI devel] &quot;prefix&quot; style guideline";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  8 14:17:50 2009" -->
<!-- isoreceived="20090708181750" -->
<!-- sent="Wed, 08 Jul 2009 11:17:47 -0700" -->
<!-- isosent="20090708181747" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] &amp;quot;prefix&amp;quot; style guideline" -->
<!-- id="4A54E2CB.7050507_at_sun.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] &quot;prefix&quot; style guideline<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-08 14:17:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6390.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<li><strong>Previous message:</strong> <a href="6388.php">Rainer Keller: "Re: [OMPI devel] MPI_Recv pre memory checks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6391.php">Jeff Squyres: "Re: [OMPI devel] &quot;prefix&quot; style guideline"</a>
<li><strong>Reply:</strong> <a href="6391.php">Jeff Squyres: "Re: [OMPI devel] &quot;prefix&quot; style guideline"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In <a href="https://svn.open-mpi.org/trac/ompi/wiki/CodingStyle">https://svn.open-mpi.org/trac/ompi/wiki/CodingStyle</a> , there is 
<br>
mention of &quot;the prefix rule.&quot;  What is this rule?
<br>
<p>Let me ask specifically this.  If I look at 
<br>
<a href="https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/sm/btl_sm_endpoint.h#46">https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/btl/sm/btl_sm_endpoint.h#46</a> 
<br>
, I see a declaration for &quot;void btl_sm_add_pending&quot;.  Should that really 
<br>
have an &quot;mca_&quot; appended to the name?  Don't worry about the 
<br>
particulars.  I'm about to change this code.  I'm just asking about the 
<br>
principles.  Because this function is callable from a file other than 
<br>
where it is defined, should the prefix be &quot;mca_btl_sm_&quot; or does 
<br>
&quot;btl_sm_&quot; suffice?
<br>
<p>Similarly, I see a btl_sm_pending_send_item_t type.  Should that also 
<br>
have mca_ appended?
<br>
<p>Ouch, and this one:  sm_fifo_t.  (This one is my fault.)  I assume it 
<br>
should be mca_btl_sm_fifo_t, yes?
<br>
<p>P.S.  Shouldn't the &quot;prefix rule&quot; be explained in the &quot;coding style&quot; 
<br>
twiki page?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6390.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<li><strong>Previous message:</strong> <a href="6388.php">Rainer Keller: "Re: [OMPI devel] MPI_Recv pre memory checks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6391.php">Jeff Squyres: "Re: [OMPI devel] &quot;prefix&quot; style guideline"</a>
<li><strong>Reply:</strong> <a href="6391.php">Jeff Squyres: "Re: [OMPI devel] &quot;prefix&quot; style guideline"</a>
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
