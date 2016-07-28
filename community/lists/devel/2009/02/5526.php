<?
$subject_val = "[OMPI devel] opal_value_array";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 21:48:20 2009" -->
<!-- isoreceived="20090225024820" -->
<!-- sent="Tue, 24 Feb 2009 19:48:03 -0700" -->
<!-- isosent="20090225024803" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] opal_value_array" -->
<!-- id="4245EA10-397D-414D-9894-D96C714B26A3_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] opal_value_array<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-24 21:48:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5527.php">Jeff Squyres: "Re: [OMPI devel] opal_value_array"</a>
<li><strong>Previous message:</strong> <a href="5525.php">Eugene Loh: "[OMPI devel] mca_btl_sm_sendi question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5527.php">Jeff Squyres: "Re: [OMPI devel] opal_value_array"</a>
<li><strong>Reply:</strong> <a href="5527.php">Jeff Squyres: "Re: [OMPI devel] opal_value_array"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I recently spent several days attempting to track down a bug in the  
<br>
trunk, finally finding that the root cause was linked to a rather  
<br>
strange behavior of the opal_value_array class.
<br>
<p>If you call opal_value_array_get_item and request an index that is  
<br>
beyond that of the current size of the array, this function will  
<br>
automatically increase the size of the value array, and return  
<br>
whatever garbage is sitting in the expanded memory location. There is  
<br>
no warning this has happened - no error code is returned, the memory  
<br>
is not zero'd, etc. What you get back may be indistinguishable from a  
<br>
&quot;real&quot;, albeit nonsensical, value.
<br>
<p>Can someone explain why this behavior was considered desirable? It was  
<br>
clearly a designed response - I simply cannot see -why- we would want  
<br>
this behavior. If you request a value outside the bound of the array,  
<br>
what purpose is served by returning garbage as if it were &quot;valid&quot;?
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5527.php">Jeff Squyres: "Re: [OMPI devel] opal_value_array"</a>
<li><strong>Previous message:</strong> <a href="5525.php">Eugene Loh: "[OMPI devel] mca_btl_sm_sendi question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5527.php">Jeff Squyres: "Re: [OMPI devel] opal_value_array"</a>
<li><strong>Reply:</strong> <a href="5527.php">Jeff Squyres: "Re: [OMPI devel] opal_value_array"</a>
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
