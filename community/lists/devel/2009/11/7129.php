<?
$subject_val = "Re: [OMPI devel] Finalize without Detach???";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 18 18:55:30 2009" -->
<!-- isoreceived="20091118235530" -->
<!-- sent="Wed, 18 Nov 2009 15:55:14 -0800" -->
<!-- isosent="20091118235514" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Finalize without Detach???" -->
<!-- id="29C912A4-927C-4479-8B2A-906E7616A7FE_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B04860D.5070305_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Finalize without Detach???<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-18 18:55:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7130.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Previous message:</strong> <a href="7128.php">Eugene Loh: "Re: [OMPI devel] Finalize without Detach???"</a>
<li><strong>In reply to:</strong> <a href="7128.php">Eugene Loh: "Re: [OMPI devel] Finalize without Detach???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7131.php">Terry Dontje: "Re: [OMPI devel] Finalize without Detach???"</a>
<li><strong>Reply:</strong> <a href="7131.php">Terry Dontje: "Re: [OMPI devel] Finalize without Detach???"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is no such statement in the MPI Standard. In fact one of the  
<br>
example use exactly this: automatic detach at MPI_Finalize (example on  
<br>
page 310 on MPI 2.2). However, as the standard doesn't enforce a  
<br>
specific behavior, each MPI implementation can interpret/implement it  
<br>
differently. Therefore, by expecting the buffer detach at Finalize the  
<br>
user open itself to &quot;inconsistent&quot; behaviors depending on the MPI  
<br>
library used. On the opposite, i.e. by explicitly calling detach, the  
<br>
behavior is well defined in all cases.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Nov 18, 2009, at 15:41 , Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The proper practice based on the MPI Standard will be to call the   
</span><br>
<span class="quotelev2">&gt;&gt; detach function before finalize.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't find this described anywhere in the standard.  To what  
</span><br>
<span class="quotelev1">&gt; chapter/verse should I point a user to convince them that detach  
</span><br>
<span class="quotelev1">&gt; before finalize is the proper thing to do?
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
<li><strong>Next message:</strong> <a href="7130.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Previous message:</strong> <a href="7128.php">Eugene Loh: "Re: [OMPI devel] Finalize without Detach???"</a>
<li><strong>In reply to:</strong> <a href="7128.php">Eugene Loh: "Re: [OMPI devel] Finalize without Detach???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7131.php">Terry Dontje: "Re: [OMPI devel] Finalize without Detach???"</a>
<li><strong>Reply:</strong> <a href="7131.php">Terry Dontje: "Re: [OMPI devel] Finalize without Detach???"</a>
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
