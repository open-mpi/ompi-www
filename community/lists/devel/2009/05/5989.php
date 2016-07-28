<?
$subject_val = "Re: [OMPI devel] Revise paffinity method?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  8 10:38:02 2009" -->
<!-- isoreceived="20090508143802" -->
<!-- sent="Fri, 8 May 2009 10:37:52 -0400" -->
<!-- isosent="20090508143752" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Revise paffinity method?" -->
<!-- id="1B80B18F-73A7-4B48-8928-0D93797E1ADF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="67CFDEEB-3241-426A-9467-D53C41A1BCE2_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Revise paffinity method?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-08 10:37:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5990.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Previous message:</strong> <a href="5988.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>In reply to:</strong> <a href="5988.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5990.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Reply:</strong> <a href="5990.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 8, 2009, at 10:32 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Actually, I was wondering (hot tub thought for the night) if the
</span><br>
<span class="quotelev1">&gt; paffinity system can't just tell us if the proc has been bound or not?
</span><br>
<span class="quotelev1">&gt; That would remove the need for YAP (i.e., yet another param).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes, it can.
<br>
<p>What it can't tell, though, is who set it.  So a user may have  
<br>
overridden the paffinity after main() starts but before MPI_INIT is  
<br>
invoked.
<br>
<p>But perhaps that's not a crime -- users can override the paffinity at  
<br>
their own risk (we actually have no way to preventing them from doing  
<br>
so).  So perhaps just checking if affinity is already set is a &quot;good  
<br>
enough&quot; mechanism for the MPI_INIT-set-paffinity logic to determine  
<br>
whether it should set affinity itself or not.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5990.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Previous message:</strong> <a href="5988.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>In reply to:</strong> <a href="5988.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5990.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Reply:</strong> <a href="5990.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
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
