<?
$subject_val = "Re: [OMPI devel] RFC: revamp topo framework";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 28 11:54:14 2009" -->
<!-- isoreceived="20091028155414" -->
<!-- sent="Wed, 28 Oct 2009 11:53:53 -0400" -->
<!-- isosent="20091028155353" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: revamp topo framework" -->
<!-- id="E03FDEEA-6F63-4F62-8763-263579B4CF2B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AE85E03.1060904_at_cs.uh.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-28 11:53:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7046.php">Jeff Squyres: "[OMPI devel] NEWS file for 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="7044.php">Edgar Gabriel: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>In reply to:</strong> <a href="7044.php">Edgar Gabriel: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7052.php">Luigi Scorzato: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Excellent point.  I'll ping Torsten; I know he did some work to  
<br>
prototype those new functions in OMPI.
<br>
<p>On Oct 28, 2009, at 11:06 AM, Edgar Gabriel wrote:
<br>
<p><span class="quotelev1">&gt; One question that I had in the back of my had a while ago was whether
</span><br>
<span class="quotelev1">&gt; the functionality of the topo framework needs to be adapted to support
</span><br>
<span class="quotelev1">&gt; the new MPI 2.2 graph topology functions? Maybe this can be taken into
</span><br>
<span class="quotelev1">&gt; consideration as well...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; WHAT: Revamp the topo base to make it like the rest of the OMPI  
</span><br>
<span class="quotelev1">&gt; frameworks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; WHY: topo was written way back at the beginning of time and is  
</span><br>
<span class="quotelev1">&gt; showing
</span><br>
<span class="quotelev2">&gt; &gt; its age (i.e., other frameworks have advanced while topo has not).
</span><br>
<span class="quotelev2">&gt; &gt; Someone is interested in possibly writing a new topo component, so  
</span><br>
<span class="quotelev1">&gt; it
</span><br>
<span class="quotelev2">&gt; &gt; seems an opprotune time to revamp the framework (i.e., before they  
</span><br>
<span class="quotelev1">&gt; start).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; WHERE: Mostly in ompi/mca/topo, but some in ompi/communicator/, too
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; WHEN: 1.5.x sometime
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; TIMEOUT: Next Tuesday teleconf; Nov 3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; More details
</span><br>
<span class="quotelev2">&gt; &gt; ------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Per <a href="http://www.open-mpi.org/community/lists/devel/2009/10/7041.php">http://www.open-mpi.org/community/lists/devel/2009/10/7041.php</a>,
</span><br>
<span class="quotelev2">&gt; &gt; there are some shortcomings to the topo framework.  It pretty much
</span><br>
<span class="quotelev2">&gt; &gt; reflects the fact that it was written way back near the beginning  
</span><br>
<span class="quotelev1">&gt; of the
</span><br>
<span class="quotelev2">&gt; &gt; ompi project and has not been updated since.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'd like to revamp it to have OBJ-based modules, per-communicator
</span><br>
<span class="quotelev2">&gt; &gt; component/module selections, etc.  This would be similar to (but  
</span><br>
<span class="quotelev1">&gt; simpler
</span><br>
<span class="quotelev2">&gt; &gt; than) the coll framework.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've started an hg for this work:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     <a href="http://bitbucket.org/jsquyres/ompi-topo-fixes/">http://bitbucket.org/jsquyres/ompi-topo-fixes/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Comments?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Edgar Gabriel
</span><br>
<span class="quotelev1">&gt; Assistant Professor
</span><br>
<span class="quotelev1">&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev1">&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev1">&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev1">&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7046.php">Jeff Squyres: "[OMPI devel] NEWS file for 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="7044.php">Edgar Gabriel: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>In reply to:</strong> <a href="7044.php">Edgar Gabriel: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7052.php">Luigi Scorzato: "Re: [OMPI devel] RFC: revamp topo framework"</a>
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
