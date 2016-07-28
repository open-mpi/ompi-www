<?
$subject_val = "Re: [OMPI devel] RFC: convert send to ssend";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 14:17:49 2009" -->
<!-- isoreceived="20090824181749" -->
<!-- sent="Mon, 24 Aug 2009 12:17:44 -0600" -->
<!-- isosent="20090824181744" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: convert send to ssend" -->
<!-- id="4A92D948.70108_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1251135334.32269.124.camel_at_alpha" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: convert send to ssend<br>
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-24 14:17:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6709.php">George Bosilca: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Previous message:</strong> <a href="6707.php">Ashley Pittman: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>In reply to:</strong> <a href="6707.php">Ashley Pittman: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6713.php">Jeff Squyres: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ashley,
<br>
<p>My understanding is that this behavior would not be enabled by default 
<br>
in the standard debug build.  The &quot;always convert to synchronous sends&quot; 
<br>
mode would be an additional configure-time option.
<br>
<p>Samuel K. Gutierrez
<br>
<p>Ashley Pittman wrote:
<br>
<span class="quotelev1">&gt; On Mon, 2009-08-24 at 13:27 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; It's the difference between:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; a. if (0) { ... convert ... }  Modern compilers will remove this code  
</span><br>
<span class="quotelev2">&gt;&gt; as part of dead-code removal.
</span><br>
<span class="quotelev2">&gt;&gt; b. if (1) { ... convert ... }  Modern compilers will remove the &quot;if  
</span><br>
<span class="quotelev2">&gt;&gt; (1)&quot; and always execute the code.
</span><br>
<span class="quotelev2">&gt;&gt; c. if (some_variable) { ... convert ...}  An MCA parameter can load  
</span><br>
<span class="quotelev2">&gt;&gt; some_variable with 0 or 1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The point of b is for sysadmins (or individual developers) who want to  
</span><br>
<span class="quotelev2">&gt;&gt; force there to *always* be correct MPI applications.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But couldn't the sysadmin equally well write a config file to achieve
</span><br>
<span class="quotelev1">&gt; the same effect should they want to?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Having it enabled (and on) in the standard &quot;debug&quot; build is going to
</span><br>
<span class="quotelev1">&gt; change the behaviour of applications with using a debug library, may
</span><br>
<span class="quotelev1">&gt; well render bugs un-reproducible in debug mode or worse you may end up
</span><br>
<span class="quotelev1">&gt; with end-user applications that only run in debug mode and not with a
</span><br>
<span class="quotelev1">&gt; normal build.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm all for having as much error checking enabled in debug builds as
</span><br>
<span class="quotelev1">&gt; possible but to change the behaviour risks masking problems elsewhere
</span><br>
<span class="quotelev1">&gt; IMHO.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6709.php">George Bosilca: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Previous message:</strong> <a href="6707.php">Ashley Pittman: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>In reply to:</strong> <a href="6707.php">Ashley Pittman: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6713.php">Jeff Squyres: "Re: [OMPI devel] RFC: convert send to ssend"</a>
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
