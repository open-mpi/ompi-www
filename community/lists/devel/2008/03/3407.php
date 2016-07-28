<?
$subject_val = "[OMPI devel] bug in openib btl_remove_procs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  7 14:35:54 2008" -->
<!-- isoreceived="20080307193554" -->
<!-- sent="Fri, 7 Mar 2008 14:35:28 -0500" -->
<!-- isosent="20080307193528" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] bug in openib btl_remove_procs" -->
<!-- id="D0C4772B-871A-4A51-9D7F-27CF19D6FC3A_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] bug in openib btl_remove_procs<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-07 14:35:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3408.php">Muhammad Atif: "[OMPI devel] xensocket btl and migration"</a>
<li><strong>Previous message:</strong> <a href="3406.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Fault tolerance"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I noticed that when btl_remove_procs is invoked on the openib BTL  
<br>
(e.g., when you &quot;mpirun --mca btl self,openib ...&quot;, an openib endpoint  
<br>
will be removed because self's exclusivity will edge it out), the  
<br>
openib remove_procs() function will not remove the corresponding  
<br>
endpoint on mca_btl_openib_proc_t-&gt;proc_endpoints[] array even though  
<br>
the endpoint was OBJ_RELEASE'ed (and freed).
<br>
<p>This was causing a problem for me on the cpc branch because we  
<br>
actually examine that array.  Can someone sanity check this commit?   
<br>
(it's on the cpc branch; it's apparently not a problem on the current  
<br>
trunk -- if it's ok, we can bring it in when the cpc stuff comes back  
<br>
to the trunk)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/17784">https://svn.open-mpi.org/trac/ompi/changeset/17784</a>
<br>
<p>Thanks.
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
<li><strong>Next message:</strong> <a href="3408.php">Muhammad Atif: "[OMPI devel] xensocket btl and migration"</a>
<li><strong>Previous message:</strong> <a href="3406.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Fault tolerance"</a>
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
