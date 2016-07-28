<?
$subject_val = "[OMPI devel] ob1 and req-&gt;req_state";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 23 14:24:20 2008" -->
<!-- isoreceived="20080623182420" -->
<!-- sent="Mon, 23 Jun 2008 14:23:43 -0400" -->
<!-- isosent="20080623182343" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] ob1 and req-&amp;gt;req_state" -->
<!-- id="13EE9C8F-518E-42D4-883F-D6E096E97C1F_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] ob1 and req-&gt;req_state<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-23 14:23:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4204.php">Ralph H Castain: "Re: [OMPI devel] PML selection logic"</a>
<li><strong>Previous message:</strong> <a href="4202.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] PML selection logic"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4205.php">Brian W. Barrett: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<li><strong>Reply:</strong> <a href="4205.php">Brian W. Barrett: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see in a few places in ob1 we do things like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_ADD32(&amp;sendreq-&gt;req_state, -1);
<br>
<p>Why do we do this?  req_state is technically an enum value, so we  
<br>
shouldn't be adding/subtracting to it (granted, it looks like the enum  
<br>
values were carefully chosen to allow this).  Additionally, req_state  
<br>
is volatile; the atomics shouldn't be necessary.
<br>
<p>Is there some other non-obvious reason?
<br>
<p>Also, I see this in a few places:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;req-&gt;req_state = 2;
<br>
<p>which really should be
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;req-&gt;req_state = OMPI_REQUEST_ACTIVE;
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
<li><strong>Next message:</strong> <a href="4204.php">Ralph H Castain: "Re: [OMPI devel] PML selection logic"</a>
<li><strong>Previous message:</strong> <a href="4202.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] PML selection logic"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4205.php">Brian W. Barrett: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<li><strong>Reply:</strong> <a href="4205.php">Brian W. Barrett: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
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
