<?
$subject_val = "[OMPI devel] 1.3 branch ob1 brokenness";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 16:18:05 2009" -->
<!-- isoreceived="20090601201805" -->
<!-- sent="Mon, 1 Jun 2009 16:17:52 -0400" -->
<!-- isosent="20090601201752" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.3 branch ob1 brokenness" -->
<!-- id="64B983B7-D42D-4CA6-84BC-5A89CC819FA4_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.3 branch ob1 brokenness<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-01 16:17:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6160.php">Ralph Castain: "Re: [OMPI devel] 1.3 branch ob1 brokenness"</a>
<li><strong>Previous message:</strong> <a href="6158.php">Brian W. Barrett: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6160.php">Ralph Castain: "Re: [OMPI devel] 1.3 branch ob1 brokenness"</a>
<li><strong>Reply:</strong> <a href="6160.php">Ralph Castain: "Re: [OMPI devel] 1.3 branch ob1 brokenness"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think a patch was put back to v1.3 that wasn't quite right -- I see  
<br>
pml_ob1_recvreq.h:183 and 223 have OPAL_HAVE_THREAD_SUPPORT.  But  
<br>
OPAL_HAVE_THREAD_SUPPORT isn't defined on the trunk -- only  
<br>
OMPI_HAVE_THREAD_SUPPORT is defined.
<br>
<p>Can someone fix?
<br>
<p>Thanks...
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
<li><strong>Next message:</strong> <a href="6160.php">Ralph Castain: "Re: [OMPI devel] 1.3 branch ob1 brokenness"</a>
<li><strong>Previous message:</strong> <a href="6158.php">Brian W. Barrett: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6160.php">Ralph Castain: "Re: [OMPI devel] 1.3 branch ob1 brokenness"</a>
<li><strong>Reply:</strong> <a href="6160.php">Ralph Castain: "Re: [OMPI devel] 1.3 branch ob1 brokenness"</a>
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
