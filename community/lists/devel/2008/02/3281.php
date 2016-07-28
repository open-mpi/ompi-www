<?
$subject_val = "Re: [OMPI devel] PLPA ready?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 10:13:25 2008" -->
<!-- isoreceived="20080221151325" -->
<!-- sent="Thu, 21 Feb 2008 07:13:16 -0800" -->
<!-- isosent="20080221151316" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PLPA ready?" -->
<!-- id="1C05A391-61B4-497B-BC51-0CE41E2C513F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="000701c8749a$b088a570$710519ac_at_voltaire.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PLPA ready?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-21 10:13:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3282.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Previous message:</strong> <a href="3280.php">Ralph H Castain: "Re: [OMPI devel] rch-step2 branch errors"</a>
<li><strong>In reply to:</strong> <a href="3277.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3282.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Reply:</strong> <a href="3282.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 21, 2008, at 7:01 AM, Sharon Melamed wrote:
<br>
<p><span class="quotelev1">&gt; 1. Yes, I need both parameters when querying socket and cores.
</span><br>
<span class="quotelev1">&gt; 2. I don't think that sun will concern if we will change the
</span><br>
<span class="quotelev1">&gt; get_processor/socket/core_info because as Pak Lui from Sun said in  
</span><br>
<span class="quotelev1">&gt; one of
</span><br>
<span class="quotelev1">&gt; his early emails &quot;I am guessing it will not messing us up because  
</span><br>
<span class="quotelev1">&gt; these are
</span><br>
<span class="quotelev1">&gt; the functions that Solaris doesn't really implement yet, right?&quot;
</span><br>
<p>Right, but the plpa_solaris_module.c file will need to be updated with  
<br>
the new function signatures so that it will still compile (i.e., if  
<br>
you're going to be changing the function signatures in paffinity.h).
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
<li><strong>Next message:</strong> <a href="3282.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Previous message:</strong> <a href="3280.php">Ralph H Castain: "Re: [OMPI devel] rch-step2 branch errors"</a>
<li><strong>In reply to:</strong> <a href="3277.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3282.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Reply:</strong> <a href="3282.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
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
