<?
$subject_val = "Re: [OMPI devel] RFC: revamp topo framework";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 28 11:06:49 2009" -->
<!-- isoreceived="20091028150649" -->
<!-- sent="Wed, 28 Oct 2009 10:06:43 -0500" -->
<!-- isosent="20091028150643" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: revamp topo framework" -->
<!-- id="4AE85E03.1060904_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="293A5EAA-5BFE-4237-9CCC-27841641752C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: revamp topo framework<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-28 11:06:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7045.php">Jeff Squyres: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>Previous message:</strong> <a href="7043.php">Jeff Squyres: "[OMPI devel] RFC: revamp topo framework"</a>
<li><strong>In reply to:</strong> <a href="7043.php">Jeff Squyres: "[OMPI devel] RFC: revamp topo framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7045.php">Jeff Squyres: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>Reply:</strong> <a href="7045.php">Jeff Squyres: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One question that I had in the back of my had a while ago was whether 
<br>
the functionality of the topo framework needs to be adapted to support 
<br>
the new MPI 2.2 graph topology functions? Maybe this can be taken into 
<br>
consideration as well...
<br>
<p>Thanks
<br>
Edgar
<br>
<p><p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; WHAT: Revamp the topo base to make it like the rest of the OMPI frameworks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: topo was written way back at the beginning of time and is showing 
</span><br>
<span class="quotelev1">&gt; its age (i.e., other frameworks have advanced while topo has not).  
</span><br>
<span class="quotelev1">&gt; Someone is interested in possibly writing a new topo component, so it 
</span><br>
<span class="quotelev1">&gt; seems an opprotune time to revamp the framework (i.e., before they start).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: Mostly in ompi/mca/topo, but some in ompi/communicator/, too
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN: 1.5.x sometime
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Next Tuesday teleconf; Nov 3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More details
</span><br>
<span class="quotelev1">&gt; ------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Per <a href="http://www.open-mpi.org/community/lists/devel/2009/10/7041.php">http://www.open-mpi.org/community/lists/devel/2009/10/7041.php</a>, 
</span><br>
<span class="quotelev1">&gt; there are some shortcomings to the topo framework.  It pretty much 
</span><br>
<span class="quotelev1">&gt; reflects the fact that it was written way back near the beginning of the 
</span><br>
<span class="quotelev1">&gt; ompi project and has not been updated since.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd like to revamp it to have OBJ-based modules, per-communicator 
</span><br>
<span class="quotelev1">&gt; component/module selections, etc.  This would be similar to (but simpler 
</span><br>
<span class="quotelev1">&gt; than) the coll framework.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've started an hg for this work:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://bitbucket.org/jsquyres/ompi-topo-fixes/">http://bitbucket.org/jsquyres/ompi-topo-fixes/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Comments?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7045.php">Jeff Squyres: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>Previous message:</strong> <a href="7043.php">Jeff Squyres: "[OMPI devel] RFC: revamp topo framework"</a>
<li><strong>In reply to:</strong> <a href="7043.php">Jeff Squyres: "[OMPI devel] RFC: revamp topo framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7045.php">Jeff Squyres: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>Reply:</strong> <a href="7045.php">Jeff Squyres: "Re: [OMPI devel] RFC: revamp topo framework"</a>
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
