<?
$subject_val = "Re: [OMPI devel] 1.3 runtime message ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 21:40:08 2009" -->
<!-- isoreceived="20090220024008" -->
<!-- sent="Thu, 19 Feb 2009 21:40:00 -0500" -->
<!-- isosent="20090220024000" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3 runtime message ?" -->
<!-- id="AD1B5F35-D7D9-4901-B950-5E9466A6CDD1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="499DCF77.9010107_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.3 runtime message ?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 21:40:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5499.php">Jim Langston: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>Previous message:</strong> <a href="5497.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>In reply to:</strong> <a href="5495.php">Jim Langston: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5499.php">Jim Langston: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>Reply:</strong> <a href="5499.php">Jim Langston: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 19, 2009, at 4:30 PM, Jim Langston wrote:
<br>
<p><span class="quotelev1">&gt; I'm just wondering if I compiled incorrectly, or if the message is  
</span><br>
<span class="quotelev1">&gt; generated because uDAPL is the default
</span><br>
<span class="quotelev1">&gt; interface (I'm on OpenSolaris), which I'm wondering if I can stop  
</span><br>
<span class="quotelev1">&gt; from being looked at, either by
</span><br>
<span class="quotelev1">&gt; compiling differently, or from the command line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This doesn't stop the message either, but stops the noisy stuff:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orterun --mca orte_base_help_aggregate 0 --mca blt tcp -np 2 hello_c
</span><br>
<p><p>I can't quite parse your statement &quot;doesn't stop the message&quot; vs. &quot;but  
<br>
stops the noisy stuff&quot;.  Can you clarify what each of those means?
<br>
<p>Running with &quot;--mca btl tcp,sm,self&quot; should prevent OMPI v1.3 from  
<br>
opening the udapl BTL, and therefore that error message shouldn't  
<br>
appear.
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
<li><strong>Next message:</strong> <a href="5499.php">Jim Langston: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>Previous message:</strong> <a href="5497.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>In reply to:</strong> <a href="5495.php">Jim Langston: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5499.php">Jim Langston: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>Reply:</strong> <a href="5499.php">Jim Langston: "Re: [OMPI devel] 1.3 runtime message ?"</a>
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
