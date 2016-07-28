<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 18 18:27:29 2007" -->
<!-- isoreceived="20071018222729" -->
<!-- sent="Thu, 18 Oct 2007 18:27:11 -0400" -->
<!-- isosent="20071018222711" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Use of orte_pointer_array in openib and udapl btls" -->
<!-- id="4717DDBF.1020009_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="77184F96-767B-4935-A9FA-D8A443835E07_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2007-10-18 18:27:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2470.php">Jennis Pruett: "[OMPI devel] [PMX:VIRUS] RE: issue with --without-tm in configure?"</a>
<li><strong>Previous message:</strong> <a href="2468.php">Sajjad Tabib: "[OMPI devel] PML cm and heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="2465.php">George Bosilca: "Re: [OMPI devel] Use of orte_pointer_array in openib and udapl btls"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>Sounds good to me. Let me know if you want me to do any of the merge.
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<p>George Bosilca wrote:
<br>
<span class="quotelev1">&gt; I just checked the code and to be honest there is no difference, except 
</span><br>
<span class="quotelev1">&gt; for the initialization part. The code is clearly &quot;copy&amp;paste&quot; from one 
</span><br>
<span class="quotelev1">&gt; version to the other. The FORTRAN specific code is related to the number 
</span><br>
<span class="quotelev1">&gt; of elements in the array, in the ompi pointer array we limit the max 
</span><br>
<span class="quotelev1">&gt; size of the array to the largest Fortran integer. I don't think this is 
</span><br>
<span class="quotelev1">&gt; a real limitation, as I doubt anyone will allocate an array of 2^32-1 
</span><br>
<span class="quotelev1">&gt; pointers. Actually, we can even keep this max size, as the orte pointer 
</span><br>
<span class="quotelev1">&gt; array is not supposed to grow that big [sic].
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At the light of these, it seems there is a 4th option. Merge 
</span><br>
<span class="quotelev1">&gt; orte_pointer_array and ompi_pointer_array in one opal_pointer_array. I 
</span><br>
<span class="quotelev1">&gt; volunteer to do the merge, but not before next week.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 17, 2007, at 10:43 PM, Tim Prins wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The openib and udapl btls currently use the orte_pointer_array class.
</span><br>
<span class="quotelev2">&gt;&gt; This is a problem for me as I am trying to implement the RSL. So, as far
</span><br>
<span class="quotelev2">&gt;&gt; as I can tell, there are 3 options:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Move the orte_pointer_array class to opal. This would be quite simple
</span><br>
<span class="quotelev2">&gt;&gt; to do and makes sense in that there is nothing in the orte_pointer_array
</span><br>
<span class="quotelev2">&gt;&gt; specific to orte.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. Change the udapl and openib btls to use a simple C array. There is
</span><br>
<span class="quotelev2">&gt;&gt; currently a ticket filed (<a href="https://svn.open-mpi.org/trac/ompi/ticket/727">https://svn.open-mpi.org/trac/ompi/ticket/727</a>)
</span><br>
<span class="quotelev2">&gt;&gt; to do this in the openib btl.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. Change the btls to use the ompi_pointer_array. This might not be a
</span><br>
<span class="quotelev2">&gt;&gt; good idea since the above ticket says that the ompi_pointer array was
</span><br>
<span class="quotelev2">&gt;&gt; intentionally not used.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any of these options are fine with me, although if #2 is picked someone
</span><br>
<span class="quotelev2">&gt;&gt; else would probably need to do most of the work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Comments?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2470.php">Jennis Pruett: "[OMPI devel] [PMX:VIRUS] RE: issue with --without-tm in configure?"</a>
<li><strong>Previous message:</strong> <a href="2468.php">Sajjad Tabib: "[OMPI devel] PML cm and heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="2465.php">George Bosilca: "Re: [OMPI devel] Use of orte_pointer_array in openib and udapl btls"</a>
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
