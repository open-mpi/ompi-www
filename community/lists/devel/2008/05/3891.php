<?
$subject_val = "[OMPI devel] heterogeneous OpenFabrics adapters";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 12 17:37:08 2008" -->
<!-- isoreceived="20080512213708" -->
<!-- sent="Mon, 12 May 2008 17:36:49 -0400" -->
<!-- isosent="20080512213649" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] heterogeneous OpenFabrics adapters" -->
<!-- id="919F5573-6015-4759-98C0-D970F93662E5_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] heterogeneous OpenFabrics adapters<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-12 17:36:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3892.php">Jeff Squyres: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>Previous message:</strong> <a href="3890.php">Josh Hursey: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3895.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
<li><strong>Reply:</strong> <a href="3895.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think that this issue has come up before, but I filed a ticket about  
<br>
it because at least one developer (Jon) has a system with both IB and  
<br>
iWARP adapters:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1282">https://svn.open-mpi.org/trac/ompi/ticket/1282</a>
<br>
<p>My question: do we care about the heterogeneous adapter scenarios?   
<br>
For v1.3?  For v1.4?  For ...some version in the future?
<br>
<p>I think the first issue I identified in the ticket is grunt work to  
<br>
fix (annoying and tedious, but not difficult), but the second one will  
<br>
be a little dicey -- it has scalability issues (e.g., sending around  
<br>
all info in the modex, etc.).
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
<li><strong>Next message:</strong> <a href="3892.php">Jeff Squyres: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>Previous message:</strong> <a href="3890.php">Josh Hursey: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3895.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
<li><strong>Reply:</strong> <a href="3895.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
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
