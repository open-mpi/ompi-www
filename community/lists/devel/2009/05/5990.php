<?
$subject_val = "Re: [OMPI devel] Revise paffinity method?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  8 10:46:12 2009" -->
<!-- isoreceived="20090508144612" -->
<!-- sent="Fri, 8 May 2009 08:45:59 -0600" -->
<!-- isosent="20090508144559" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Revise paffinity method?" -->
<!-- id="44C63312-F981-4EAA-8C61-F1F1CDEFA03A_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1B80B18F-73A7-4B48-8928-0D93797E1ADF_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-08 10:45:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5991.php">Terry Dontje: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Previous message:</strong> <a href="5989.php">Jeff Squyres: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>In reply to:</strong> <a href="5989.php">Jeff Squyres: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5991.php">Terry Dontje: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Reply:</strong> <a href="5991.php">Terry Dontje: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Reply:</strong> <a href="5992.php">Brian Barrett: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think that's the way to go then - it also follows our &quot;the user is  
<br>
always right - even when they are wrong&quot; philosophy. I'll probably  
<br>
have to draw on others to help ensure that the paffinity modules all  
<br>
report appropriately.
<br>
<p>Think I have enough now to start on this - probably middle of next week.
<br>
<p>Thanks!
<br>
<p>On May 8, 2009, at 8:37 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On May 8, 2009, at 10:32 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Actually, I was wondering (hot tub thought for the night) if the
</span><br>
<span class="quotelev2">&gt;&gt; paffinity system can't just tell us if the proc has been bound or  
</span><br>
<span class="quotelev2">&gt;&gt; not?
</span><br>
<span class="quotelev2">&gt;&gt; That would remove the need for YAP (i.e., yet another param).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, it can.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What it can't tell, though, is who set it.  So a user may have  
</span><br>
<span class="quotelev1">&gt; overridden the paffinity after main() starts but before MPI_INIT is  
</span><br>
<span class="quotelev1">&gt; invoked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But perhaps that's not a crime -- users can override the paffinity  
</span><br>
<span class="quotelev1">&gt; at their own risk (we actually have no way to preventing them from  
</span><br>
<span class="quotelev1">&gt; doing so).  So perhaps just checking if affinity is already set is a  
</span><br>
<span class="quotelev1">&gt; &quot;good enough&quot; mechanism for the MPI_INIT-set-paffinity logic to  
</span><br>
<span class="quotelev1">&gt; determine whether it should set affinity itself or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="5991.php">Terry Dontje: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Previous message:</strong> <a href="5989.php">Jeff Squyres: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>In reply to:</strong> <a href="5989.php">Jeff Squyres: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5991.php">Terry Dontje: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Reply:</strong> <a href="5991.php">Terry Dontje: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Reply:</strong> <a href="5992.php">Brian Barrett: "Re: [OMPI devel] Revise paffinity method?"</a>
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
