<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 18 06:42:34 2007" -->
<!-- isoreceived="20071018104234" -->
<!-- sent="Thu, 18 Oct 2007 06:42:20 -0400" -->
<!-- isosent="20071018104220" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Use of orte_pointer_array in openib and udapl btls" -->
<!-- id="77184F96-767B-4935-A9FA-D8A443835E07_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4716C857.4090005_at_cs.indiana.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-18 06:42:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2466.php">George Bosilca: "Re: [OMPI devel] putting common request completion waiting code	into separate inline function"</a>
<li><strong>Previous message:</strong> <a href="2464.php">Gleb Natapov: "Re: [OMPI devel] putting common request completion waiting code	into separate inline function"</a>
<li><strong>In reply to:</strong> <a href="2462.php">Tim Prins: "[OMPI devel] Use of orte_pointer_array in openib and udapl btls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2469.php">Tim Prins: "Re: [OMPI devel] Use of orte_pointer_array in openib and udapl btls"</a>
<li><strong>Reply:</strong> <a href="2469.php">Tim Prins: "Re: [OMPI devel] Use of orte_pointer_array in openib and udapl btls"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just checked the code and to be honest there is no difference,  
<br>
except for the initialization part. The code is clearly &quot;copy&amp;paste&quot;  
<br>
from one version to the other. The FORTRAN specific code is related  
<br>
to the number of elements in the array, in the ompi pointer array we  
<br>
limit the max size of the array to the largest Fortran integer. I  
<br>
don't think this is a real limitation, as I doubt anyone will  
<br>
allocate an array of 2^32-1 pointers. Actually, we can even keep this  
<br>
max size, as the orte pointer array is not supposed to grow that big  
<br>
[sic].
<br>
<p>At the light of these, it seems there is a 4th option. Merge  
<br>
orte_pointer_array and ompi_pointer_array in one opal_pointer_array.  
<br>
I volunteer to do the merge, but not before next week.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 17, 2007, at 10:43 PM, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The openib and udapl btls currently use the orte_pointer_array class.
</span><br>
<span class="quotelev1">&gt; This is a problem for me as I am trying to implement the RSL. So,  
</span><br>
<span class="quotelev1">&gt; as far
</span><br>
<span class="quotelev1">&gt; as I can tell, there are 3 options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Move the orte_pointer_array class to opal. This would be quite  
</span><br>
<span class="quotelev1">&gt; simple
</span><br>
<span class="quotelev1">&gt; to do and makes sense in that there is nothing in the  
</span><br>
<span class="quotelev1">&gt; orte_pointer_array
</span><br>
<span class="quotelev1">&gt; specific to orte.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Change the udapl and openib btls to use a simple C array. There is
</span><br>
<span class="quotelev1">&gt; currently a ticket filed (<a href="https://svn.open-mpi.org/trac/ompi/ticket/">https://svn.open-mpi.org/trac/ompi/ticket/</a> 
</span><br>
<span class="quotelev1">&gt; 727)
</span><br>
<span class="quotelev1">&gt; to do this in the openib btl.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Change the btls to use the ompi_pointer_array. This might not be a
</span><br>
<span class="quotelev1">&gt; good idea since the above ticket says that the ompi_pointer array was
</span><br>
<span class="quotelev1">&gt; intentionally not used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any of these options are fine with me, although if #2 is picked  
</span><br>
<span class="quotelev1">&gt; someone
</span><br>
<span class="quotelev1">&gt; else would probably need to do most of the work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Comments?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2465/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2466.php">George Bosilca: "Re: [OMPI devel] putting common request completion waiting code	into separate inline function"</a>
<li><strong>Previous message:</strong> <a href="2464.php">Gleb Natapov: "Re: [OMPI devel] putting common request completion waiting code	into separate inline function"</a>
<li><strong>In reply to:</strong> <a href="2462.php">Tim Prins: "[OMPI devel] Use of orte_pointer_array in openib and udapl btls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2469.php">Tim Prins: "Re: [OMPI devel] Use of orte_pointer_array in openib and udapl btls"</a>
<li><strong>Reply:</strong> <a href="2469.php">Tim Prins: "Re: [OMPI devel] Use of orte_pointer_array in openib and udapl btls"</a>
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
