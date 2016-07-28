<?
$subject_val = "Re: [OMPI devel] RFC: convert send to ssend";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 13:27:46 2009" -->
<!-- isoreceived="20090824172746" -->
<!-- sent="Mon, 24 Aug 2009 13:27:41 -0400" -->
<!-- isosent="20090824172741" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: convert send to ssend" -->
<!-- id="1604FCBF-A910-4355-AB5C-BBEB861FFBBC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1251130460.32269.91.camel_at_alpha" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-24 13:27:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6707.php">Ashley Pittman: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Previous message:</strong> <a href="6705.php">Jeff Squyres: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>In reply to:</strong> <a href="6704.php">Ashley Pittman: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6707.php">Ashley Pittman: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Reply:</strong> <a href="6707.php">Ashley Pittman: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 24, 2009, at 12:14 PM, Ashley Pittman wrote:
<br>
<p><span class="quotelev2">&gt; &gt; - compiled out
</span><br>
<span class="quotelev2">&gt; &gt; - compiled in, always convert standard send to sync send
</span><br>
<span class="quotelev2">&gt; &gt; - compiled in, use MCA parameter to determine whether to convert
</span><br>
<span class="quotelev2">&gt; &gt; standard -&gt; sync
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And we can leave the default as &quot;compiled out&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Howzat?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't understand, what the purpose of the middle state?  It seems  
</span><br>
<span class="quotelev1">&gt; like
</span><br>
<span class="quotelev1">&gt; a bad idea to me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>It's the difference between:
<br>
<p>a. if (0) { ... convert ... }  Modern compilers will remove this code  
<br>
as part of dead-code removal.
<br>
b. if (1) { ... convert ... }  Modern compilers will remove the &quot;if  
<br>
(1)&quot; and always execute the code.
<br>
c. if (some_variable) { ... convert ...}  An MCA parameter can load  
<br>
some_variable with 0 or 1.
<br>
<p>The point of b is for sysadmins (or individual developers) who want to  
<br>
force there to *always* be correct MPI applications.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6707.php">Ashley Pittman: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Previous message:</strong> <a href="6705.php">Jeff Squyres: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>In reply to:</strong> <a href="6704.php">Ashley Pittman: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6707.php">Ashley Pittman: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Reply:</strong> <a href="6707.php">Ashley Pittman: "Re: [OMPI devel] RFC: convert send to ssend"</a>
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
