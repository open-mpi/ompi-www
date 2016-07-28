<?
$subject_val = "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 23 11:04:29 2009" -->
<!-- isoreceived="20090223160429" -->
<!-- sent="Mon, 23 Feb 2009 11:04:24 -0500" -->
<!-- isosent="20090223160424" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: eliminating &amp;quot;descriptor&amp;quot; argument from sendi function" -->
<!-- id="3416D4E0-7BDF-43C1-9D36-FC979FFC3328_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49A2C2CC.7090504_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-23 11:04:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5507.php">George Bosilca: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Previous message:</strong> <a href="5505.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>In reply to:</strong> <a href="5505.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5511.php">Brian W. Barrett: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Reply:</strong> <a href="5511.php">Brian W. Barrett: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 23, 2009, at 10:37 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; I sense an opening here and rush in for the kill...
</span><br>
<p>:-)
<br>
<p><span class="quotelev1">&gt; And, why does the PML pass a BTL argument into the sendi function?   
</span><br>
<span class="quotelev1">&gt; First, the BTL argument is not typically used.  Second, if the BTL  
</span><br>
<span class="quotelev1">&gt; sendi function wants to know what BTL it is,... uh, doesn't it  
</span><br>
<span class="quotelev1">&gt; already know???  Doesn't a BTL know who it is?  Why, then, should  
</span><br>
<span class="quotelev1">&gt; the PML have to tell it?
</span><br>
<p>I suspect that it's passing in the BTL *module* argument, which may  
<br>
have specific information about the connection that is to be used.
<br>
<p>Example: if I have a dual-port IB HCA, Open MPI will make 2 different  
<br>
openib BTL modules.  In this case, the openib BTL will need to know  
<br>
exactly which module the PML is trying to sendi on.
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
<li><strong>Next message:</strong> <a href="5507.php">George Bosilca: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Previous message:</strong> <a href="5505.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>In reply to:</strong> <a href="5505.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5511.php">Brian W. Barrett: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Reply:</strong> <a href="5511.php">Brian W. Barrett: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
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
