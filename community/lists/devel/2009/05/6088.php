<?
$subject_val = "[OMPI devel] Remove IMB 2.3 from ompi-tests?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 08:37:43 2009" -->
<!-- isoreceived="20090526123743" -->
<!-- sent="Tue, 26 May 2009 08:37:37 -0400" -->
<!-- isosent="20090526123737" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Remove IMB 2.3 from ompi-tests?" -->
<!-- id="DB216FE9-B08B-4E47-874A-125F7653207C_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Remove IMB 2.3 from ompi-tests?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-26 08:37:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6089.php">Jeff Squyres: "Re: [OMPI devel] MTT usage"</a>
<li><strong>Previous message:</strong> <a href="6087.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6104.php">Holger Mickler: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<li><strong>Reply:</strong> <a href="6104.php">Holger Mickler: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We've had IMB 3.1 in the ompi-tests svn for a long time; it's what I  
<br>
run in my nightly MTT.  I just uploaded 3.2 as well, and will be  
<br>
switching my nightly MTT to use it.
<br>
<p>*** Note that I have applied a custom bug fix to IMB_window.c in  
<br>
3.1/3.2 to make the code function properly -- otherwise OMPI  
<br>
[correctly] aborts right near the beginning (per MPI-2.1 11.2.1.  I've  
<br>
notified Intel of the fix; they're examining it.
<br>
<p>Is it time to remove IMB 2.3 from ompi-tests?  Or, more specifically,  
<br>
is there any reason to keep 2.3 around?
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
<li><strong>Next message:</strong> <a href="6089.php">Jeff Squyres: "Re: [OMPI devel] MTT usage"</a>
<li><strong>Previous message:</strong> <a href="6087.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6104.php">Holger Mickler: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<li><strong>Reply:</strong> <a href="6104.php">Holger Mickler: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
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
