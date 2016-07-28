<?
$subject_val = "[OMPI devel] C++ build failures";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 12 09:13:57 2008" -->
<!-- isoreceived="20080212141357" -->
<!-- sent="Tue, 12 Feb 2008 09:13:32 -0500" -->
<!-- isosent="20080212141332" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] C++ build failures" -->
<!-- id="082645D7-1F6E-47CA-A7A6-888F3B75126A_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] C++ build failures<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-12 09:13:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3203.php">Jeff Squyres: "[OMPI devel] memchecker build broken"</a>
<li><strong>Previous message:</strong> <a href="3201.php">Matthias Jurenz: "Re: [OMPI devel] Something wrong with vt?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3205.php">Tim Prins: "Re: [OMPI devel] C++ build failures"</a>
<li><strong>Reply:</strong> <a href="3205.php">Tim Prins: "Re: [OMPI devel] C++ build failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm a little concerned about the C++ test build failures from last  
<br>
night:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mtt/index.php?do_redir=530">http://www.open-mpi.org/mtt/index.php?do_redir=530</a>
<br>
<p>They are likely due to the C++ changes that came in over the weekend,  
<br>
but they *only* showed up at IU, which is somewhat odd.  I'm trying to  
<br>
replicate now (doing a fresh build of the trunk and will build the  
<br>
tests that failed for you), but I'm kinda guessing it's going to work  
<br>
fine on my platforms.
<br>
<p>IU: do you have any idea what caused these failures?  Does sif have a  
<br>
newer compiler that is somehow picking up on a latent bug that we  
<br>
missed in the C++ stuff?
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
<li><strong>Next message:</strong> <a href="3203.php">Jeff Squyres: "[OMPI devel] memchecker build broken"</a>
<li><strong>Previous message:</strong> <a href="3201.php">Matthias Jurenz: "Re: [OMPI devel] Something wrong with vt?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3205.php">Tim Prins: "Re: [OMPI devel] C++ build failures"</a>
<li><strong>Reply:</strong> <a href="3205.php">Tim Prins: "Re: [OMPI devel] C++ build failures"</a>
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
