<?
$subject_val = "Re: [OMPI devel] Revise paffinity method?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  8 10:25:23 2009" -->
<!-- isoreceived="20090508142523" -->
<!-- sent="Fri, 8 May 2009 10:25:17 -0400" -->
<!-- isosent="20090508142517" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Revise paffinity method?" -->
<!-- id="2C431151-DBB6-480C-8CA0-DDCEC17EED65_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A040AF9.8090803_at_sun.com" -->
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
<strong>Date:</strong> 2009-05-08 10:25:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5988.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Previous message:</strong> <a href="5986.php">Edgar Gabriel: "Re: [OMPI devel] compile error on trunk"</a>
<li><strong>In reply to:</strong> <a href="5984.php">Terry Dontje: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5988.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Reply:</strong> <a href="5988.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 8, 2009, at 6:35 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; So in essence the user might set one parameter and depending on  
</span><br>
<span class="quotelev1">&gt; whether
</span><br>
<span class="quotelev1">&gt; orted is being used to launch the job or not determines when the  
</span><br>
<span class="quotelev1">&gt; process
</span><br>
<span class="quotelev1">&gt; binding happens (process launch vs MPI_Init time).  In the case that  
</span><br>
<span class="quotelev1">&gt; one
</span><br>
<span class="quotelev1">&gt; needs/wants to rely on a different launcher to bind then you don't
</span><br>
<span class="quotelev1">&gt; specify the OMPI parameter at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is that right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Not really.  The user still sets mpi_paffinity_alone.  We just try to  
<br>
handle it in the orted, and if that doesn't work (more specifically,  
<br>
if there's no orted to do it), then we'll handle it in MPI_INIT.
<br>
<p>There's a little extra secret sauce for the orted to tell the MPI  
<br>
process &quot;don't bother doing the paffinity, I did it for you  
<br>
already&quot; (that's the extra [internal] MCA param) so that MPI_INIT  
<br>
knows not to do it.
<br>
<p><span class="quotelev1">&gt; So, will there be a way to force MPI_Init based binding even if one is
</span><br>
<span class="quotelev1">&gt; using orted to launch a job.  Not sure there really is a use case for
</span><br>
<span class="quotelev1">&gt; such just curious.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>If anyone cares/has a use case, I'm sure this would not be hard to do.
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
<li><strong>Next message:</strong> <a href="5988.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Previous message:</strong> <a href="5986.php">Edgar Gabriel: "Re: [OMPI devel] compile error on trunk"</a>
<li><strong>In reply to:</strong> <a href="5984.php">Terry Dontje: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5988.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Reply:</strong> <a href="5988.php">Ralph Castain: "Re: [OMPI devel] Revise paffinity method?"</a>
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
