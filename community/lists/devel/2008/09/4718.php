<?
$subject_val = "[OMPI devel] RDMA CM CPC HG ready again";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 30 10:05:22 2008" -->
<!-- isoreceived="20080930140522" -->
<!-- sent="Tue, 30 Sep 2008 10:05:14 -0400" -->
<!-- isosent="20080930140514" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RDMA CM CPC HG ready again" -->
<!-- id="C39D9FFD-04C8-43B9-B5F0-6C78E0591397_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] RDMA CM CPC HG ready again<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-30 10:05:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4719.php">Rayson Ho: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<li><strong>Previous message:</strong> <a href="4717.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19653"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/10/4722.php">Jeff Squyres: "Re: [OMPI devel] RDMA CM CPC HG ready again"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/10/4722.php">Jeff Squyres: "Re: [OMPI devel] RDMA CM CPC HG ready again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(putting this on devel just so that others can see it)
<br>
<p>Ok, I put in all the things in the RDMA CM CPC HG tree that we've  
<br>
talked about and it now should work out of the box with:
<br>
<p>- any iwarp (no need for kernel hacks to have initiator send first)
<br>
- any IB (setup the stuff to do the initiator_depth and  
<br>
responder_resources properly)
<br>
- any [valid but] bizarre IP addressing scheme
<br>
<p>Could everyone try the HG tree again to ensure it still/now works for  
<br>
you out of the box?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/openib-fd">http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/openib-fd</a>- 
<br>
progress/
<br>
<p>Try with changeset 106 (b046bf97deab) or later.  The only thing that  
<br>
is missing is a bit better scalability on allocating buffers for the  
<br>
CTS.  Now that all the other changes are in, I'll be working on that  
<br>
today and tomorrow.
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
<li><strong>Next message:</strong> <a href="4719.php">Rayson Ho: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<li><strong>Previous message:</strong> <a href="4717.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19653"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/10/4722.php">Jeff Squyres: "Re: [OMPI devel] RDMA CM CPC HG ready again"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/10/4722.php">Jeff Squyres: "Re: [OMPI devel] RDMA CM CPC HG ready again"</a>
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
