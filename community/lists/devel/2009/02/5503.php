<?
$subject_val = "[OMPI devel] sendi side effects in the case of failure";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 21 10:53:58 2009" -->
<!-- isoreceived="20090221155358" -->
<!-- sent="Sat, 21 Feb 2009 07:53:26 -0800" -->
<!-- isosent="20090221155326" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] sendi side effects in the case of failure" -->
<!-- id="49A02376.2000008_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] sendi side effects in the case of failure<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-21 10:53:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5504.php">Jeff Squyres: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Previous message:</strong> <a href="5502.php">Eugene Loh: "[OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm still trying to understand what side effects there are if a sendi 
<br>
function fails.  So far as I can tell, there are no written 
<br>
contracts/specs about what should happen (please tell me if that's 
<br>
wrong), so it's a matter of looking at the code.  The only BTLs with 
<br>
sendi code are portals, mx, and sm, and, among those, only mx has its 
<br>
sendi function exposed outside the BTL.  So, there seems to be room to 
<br>
set new precedents.
<br>
<p>One side effect is that if a sendi function fails, it should allocate a 
<br>
descriptor.  This makes no sense to me since the upper layer (PML) 
<br>
already has code for this.  So, it makes no sense to me that each 
<br>
implementing BTL sendi function should also have such code.  I think 
<br>
it's much cleaner for a sendi either to complete successfully or else 
<br>
leave no side effects.
<br>
<p>Otherwise, does an unsuccessful sendi leave zero side effects?  Things 
<br>
are left as if the sendi had not been attempted at all?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5504.php">Jeff Squyres: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Previous message:</strong> <a href="5502.php">Eugene Loh: "[OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
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
