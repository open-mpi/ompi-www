<?
$subject_val = "[OMPI devel] Coverity results";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 10:17:05 2008" -->
<!-- isoreceived="20080325141705" -->
<!-- sent="Tue, 25 Mar 2008 10:16:45 -0400" -->
<!-- isosent="20080325141645" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Coverity results" -->
<!-- id="E2891C86-A938-436F-A58A-23B96C0B729E_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Coverity results<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-25 10:16:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3519.php">Ralph H Castain: "Re: [OMPI devel] iof/libevent failures?"</a>
<li><strong>Previous message:</strong> <a href="3517.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17951"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Heads up to those examining Coverity results (may not be many at the  
<br>
moment, but we'll likely use them quite a bit during the 1.3 release  
<br>
process)...
<br>
<p>David Maxwell was finally able to track down a long-standing issue  
<br>
that we've had with their scanner: sometimes, the number of OMPI  
<br>
source files that were analyzed nightly was much lower than it should  
<br>
have been.  David tracked down the problem to a balky NFS server that  
<br>
was refusing to remove old OMPI nightly builds.  This caused other  
<br>
[uninteresting] errors that resulted in nightly OMPI scans being  
<br>
truncated.
<br>
<p>He's going to delete the previous OMPI scans with small/incorrect  
<br>
numbers of files -- they don't have useful data for us.
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
<li><strong>Next message:</strong> <a href="3519.php">Ralph H Castain: "Re: [OMPI devel] iof/libevent failures?"</a>
<li><strong>Previous message:</strong> <a href="3517.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17951"</a>
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
