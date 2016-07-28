<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 17 22:43:51 2007" -->
<!-- isoreceived="20071018024351" -->
<!-- sent="Wed, 17 Oct 2007 22:43:35 -0400" -->
<!-- isosent="20071018024335" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="[OMPI devel] Use of orte_pointer_array in openib and udapl btls" -->
<!-- id="4716C857.4090005_at_cs.indiana.edu" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-17 22:43:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2463.php">Tobias Hilbrich: "Re: [OMPI devel] Hybrid examples"</a>
<li><strong>Previous message:</strong> <a href="2461.php">Edgar Gabriel: "Re: [OMPI devel] Hybrid examples"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2465.php">George Bosilca: "Re: [OMPI devel] Use of orte_pointer_array in openib and udapl btls"</a>
<li><strong>Reply:</strong> <a href="2465.php">George Bosilca: "Re: [OMPI devel] Use of orte_pointer_array in openib and udapl btls"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>The openib and udapl btls currently use the orte_pointer_array class. 
<br>
This is a problem for me as I am trying to implement the RSL. So, as far 
<br>
as I can tell, there are 3 options:
<br>
<p>1. Move the orte_pointer_array class to opal. This would be quite simple 
<br>
to do and makes sense in that there is nothing in the orte_pointer_array 
<br>
specific to orte.
<br>
<p>2. Change the udapl and openib btls to use a simple C array. There is 
<br>
currently a ticket filed (<a href="https://svn.open-mpi.org/trac/ompi/ticket/727">https://svn.open-mpi.org/trac/ompi/ticket/727</a>) 
<br>
to do this in the openib btl.
<br>
<p>3. Change the btls to use the ompi_pointer_array. This might not be a 
<br>
good idea since the above ticket says that the ompi_pointer array was 
<br>
intentionally not used.
<br>
<p>Any of these options are fine with me, although if #2 is picked someone 
<br>
else would probably need to do most of the work.
<br>
<p>Comments?
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2463.php">Tobias Hilbrich: "Re: [OMPI devel] Hybrid examples"</a>
<li><strong>Previous message:</strong> <a href="2461.php">Edgar Gabriel: "Re: [OMPI devel] Hybrid examples"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2465.php">George Bosilca: "Re: [OMPI devel] Use of orte_pointer_array in openib and udapl btls"</a>
<li><strong>Reply:</strong> <a href="2465.php">George Bosilca: "Re: [OMPI devel] Use of orte_pointer_array in openib and udapl btls"</a>
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
