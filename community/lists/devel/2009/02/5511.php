<?
$subject_val = "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 23 11:28:23 2009" -->
<!-- isoreceived="20090223162823" -->
<!-- sent="Mon, 23 Feb 2009 11:28:19 -0500 (EST)" -->
<!-- isosent="20090223162819" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: eliminating &amp;quot;descriptor&amp;quot; argument from sendi function" -->
<!-- id="alpine.DEB.1.10.0902231127500.13768_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3416D4E0-7BDF-43C1-9D36-FC979FFC3328_at_cisco.com" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-23 11:28:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5512.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Previous message:</strong> <a href="5510.php">Jeff Squyres: "[OMPI devel] one-sided MTT failures"</a>
<li><strong>In reply to:</strong> <a href="5506.php">Jeff Squyres: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5507.php">George Bosilca: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 23 Feb 2009, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 23, 2009, at 10:37 AM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I sense an opening here and rush in for the kill...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And, why does the PML pass a BTL argument into the sendi function?  First, 
</span><br>
<span class="quotelev2">&gt;&gt; the BTL argument is not typically used.  Second, if the BTL sendi function 
</span><br>
<span class="quotelev2">&gt;&gt; wants to know what BTL it is,... uh, doesn't it already know???  Doesn't a 
</span><br>
<span class="quotelev2">&gt;&gt; BTL know who it is?  Why, then, should the PML have to tell it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect that it's passing in the BTL *module* argument, which may have 
</span><br>
<span class="quotelev1">&gt; specific information about the connection that is to be used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Example: if I have a dual-port IB HCA, Open MPI will make 2 different openib 
</span><br>
<span class="quotelev1">&gt; BTL modules.  In this case, the openib BTL will need to know exactly which 
</span><br>
<span class="quotelev1">&gt; module the PML is trying to sendi on.
</span><br>
<p>Exactly.  In multi-nic situations, the BTL argument is critical.  Since 
<br>
the SM btl never really does &quot;multi-nic&quot;, it doesn't have to worry about 
<br>
the btl argument.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5512.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Previous message:</strong> <a href="5510.php">Jeff Squyres: "[OMPI devel] one-sided MTT failures"</a>
<li><strong>In reply to:</strong> <a href="5506.php">Jeff Squyres: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5507.php">George Bosilca: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
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
