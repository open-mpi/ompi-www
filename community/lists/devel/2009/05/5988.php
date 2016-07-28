<?
$subject_val = "Re: [OMPI devel] Revise paffinity method?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  8 10:33:05 2009" -->
<!-- isoreceived="20090508143305" -->
<!-- sent="Fri, 8 May 2009 08:32:28 -0600" -->
<!-- isosent="20090508143228" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Revise paffinity method?" -->
<!-- id="67CFDEEB-3241-426A-9467-D53C41A1BCE2_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2C431151-DBB6-480C-8CA0-DDCEC17EED65_at_cisco.com" -->
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
<strong>Date:</strong> 2009-05-08 10:32:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5989.php">Jeff Squyres: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Previous message:</strong> <a href="5987.php">Jeff Squyres: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>In reply to:</strong> <a href="5987.php">Jeff Squyres: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5989.php">Jeff Squyres: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Reply:</strong> <a href="5989.php">Jeff Squyres: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, I was wondering (hot tub thought for the night) if the  
<br>
paffinity system can't just tell us if the proc has been bound or not?  
<br>
That would remove the need for YAP (i.e., yet another param).
<br>
<p>On May 8, 2009, at 8:25 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On May 8, 2009, at 6:35 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So in essence the user might set one parameter and depending on  
</span><br>
<span class="quotelev2">&gt;&gt; whether
</span><br>
<span class="quotelev2">&gt;&gt; orted is being used to launch the job or not determines when the  
</span><br>
<span class="quotelev2">&gt;&gt; process
</span><br>
<span class="quotelev2">&gt;&gt; binding happens (process launch vs MPI_Init time).  In the case  
</span><br>
<span class="quotelev2">&gt;&gt; that one
</span><br>
<span class="quotelev2">&gt;&gt; needs/wants to rely on a different launcher to bind then you don't
</span><br>
<span class="quotelev2">&gt;&gt; specify the OMPI parameter at all.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is that right?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not really.  The user still sets mpi_paffinity_alone.  We just try  
</span><br>
<span class="quotelev1">&gt; to handle it in the orted, and if that doesn't work (more  
</span><br>
<span class="quotelev1">&gt; specifically, if there's no orted to do it), then we'll handle it in  
</span><br>
<span class="quotelev1">&gt; MPI_INIT.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's a little extra secret sauce for the orted to tell the MPI  
</span><br>
<span class="quotelev1">&gt; process &quot;don't bother doing the paffinity, I did it for you  
</span><br>
<span class="quotelev1">&gt; already&quot; (that's the extra [internal] MCA param) so that MPI_INIT  
</span><br>
<span class="quotelev1">&gt; knows not to do it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, will there be a way to force MPI_Init based binding even if one  
</span><br>
<span class="quotelev2">&gt;&gt; is
</span><br>
<span class="quotelev2">&gt;&gt; using orted to launch a job.  Not sure there really is a use case for
</span><br>
<span class="quotelev2">&gt;&gt; such just curious.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If anyone cares/has a use case, I'm sure this would not be hard to do.
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
<li><strong>Next message:</strong> <a href="5989.php">Jeff Squyres: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Previous message:</strong> <a href="5987.php">Jeff Squyres: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>In reply to:</strong> <a href="5987.php">Jeff Squyres: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5989.php">Jeff Squyres: "Re: [OMPI devel] Revise paffinity method?"</a>
<li><strong>Reply:</strong> <a href="5989.php">Jeff Squyres: "Re: [OMPI devel] Revise paffinity method?"</a>
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
