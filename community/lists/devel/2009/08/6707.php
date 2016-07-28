<?
$subject_val = "Re: [OMPI devel] RFC: convert send to ssend";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 13:35:42 2009" -->
<!-- isoreceived="20090824173542" -->
<!-- sent="Mon, 24 Aug 2009 18:35:34 +0100" -->
<!-- isosent="20090824173534" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: convert send to ssend" -->
<!-- id="1251135334.32269.124.camel_at_alpha" -->
<!-- inreplyto="1604FCBF-A910-4355-AB5C-BBEB861FFBBC_at_cisco.com" -->
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
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-24 13:35:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6708.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Previous message:</strong> <a href="6706.php">Jeff Squyres: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>In reply to:</strong> <a href="6706.php">Jeff Squyres: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6708.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Reply:</strong> <a href="6708.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Reply:</strong> <a href="6713.php">Jeff Squyres: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2009-08-24 at 13:27 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; It's the difference between:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a. if (0) { ... convert ... }  Modern compilers will remove this code  
</span><br>
<span class="quotelev1">&gt; as part of dead-code removal.
</span><br>
<span class="quotelev1">&gt; b. if (1) { ... convert ... }  Modern compilers will remove the &quot;if  
</span><br>
<span class="quotelev1">&gt; (1)&quot; and always execute the code.
</span><br>
<span class="quotelev1">&gt; c. if (some_variable) { ... convert ...}  An MCA parameter can load  
</span><br>
<span class="quotelev1">&gt; some_variable with 0 or 1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The point of b is for sysadmins (or individual developers) who want to  
</span><br>
<span class="quotelev1">&gt; force there to *always* be correct MPI applications.
</span><br>
<p>But couldn't the sysadmin equally well write a config file to achieve
<br>
the same effect should they want to?
<br>
<p>Having it enabled (and on) in the standard &quot;debug&quot; build is going to
<br>
change the behaviour of applications with using a debug library, may
<br>
well render bugs un-reproducible in debug mode or worse you may end up
<br>
with end-user applications that only run in debug mode and not with a
<br>
normal build.
<br>
<p>I'm all for having as much error checking enabled in debug builds as
<br>
possible but to change the behaviour risks masking problems elsewhere
<br>
IMHO.
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6708.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Previous message:</strong> <a href="6706.php">Jeff Squyres: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>In reply to:</strong> <a href="6706.php">Jeff Squyres: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6708.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Reply:</strong> <a href="6708.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Reply:</strong> <a href="6713.php">Jeff Squyres: "Re: [OMPI devel] RFC: convert send to ssend"</a>
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
