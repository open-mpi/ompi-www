<?
$subject_val = "Re: [OMPI devel] &quot;prefix&quot; style guideline";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  9 14:33:11 2009" -->
<!-- isoreceived="20090709183311" -->
<!-- sent="Thu, 9 Jul 2009 14:33:04 -0400" -->
<!-- isosent="20090709183304" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;quot;prefix&amp;quot; style guideline" -->
<!-- id="682985BF-3182-424B-951A-94FB296ABDF9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A56342C.8090904_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] &quot;prefix&quot; style guideline<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-09 14:33:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6394.php">Jeff Squyres: "[OMPI devel] Open MPI v1.3.3rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="6392.php">Eugene Loh: "Re: [OMPI devel] &quot;prefix&quot; style guideline"</a>
<li><strong>In reply to:</strong> <a href="6392.php">Eugene Loh: "Re: [OMPI devel] &quot;prefix&quot; style guideline"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 9, 2009, at 2:17 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; The wiki said all public symbols and filenames.  I assume filenames  
</span><br>
<span class="quotelev1">&gt; may
</span><br>
<span class="quotelev1">&gt; leave off &quot;&lt;layer&gt;_&quot;.  That is, the file is properly named btl_sm.c
</span><br>
<span class="quotelev1">&gt; rather than mca_btl_sm.c or ompi_btl_sm.c.  Right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Correct.  The intent here (for filenames) is that if you --disable- 
<br>
dlopen, then all the component .o files get slurped into  
<br>
the .a / .so.  And you can't have 2 of the same .o filename in a  
<br>
single library.  Hence, the prefix rule is needed to guarantee  
<br>
uniqueness of filenames.  But the layer name (or mca) is deemed  
<br>
unnecessary -- we ruled that the &lt;framework&gt;_&lt;component&gt;_ prefix would  
<br>
be unique enough.
<br>
<p>Public symbols get a little more rigorious treatment (*must* have mca,  
<br>
ompi, orte, or opal -- or MPI_ prefix) because we're a library.  The  
<br>
possibility that some user application has a variable named  
<br>
&quot;btl_sm_something&quot; is quite possible -- &quot;btl&quot; and &quot;sm&quot; could have  
<br>
entirely different meanings for them.  Also, we can't control the user  
<br>
app, so we wanted to be as conservative as possible.
<br>
<p>That being said, we *can* control the filenames in our libraries.  And  
<br>
by definition, we'll never have a filename clash with a user  
<br>
application.  So we only need to prevent filename collisions within  
<br>
our own code base.  If a developer creates a file named ompi/runtime/ 
<br>
btl_sm_something.c, I think we'd prefer to simply shoot the developer  
<br>
to solve the problem.
<br>
<p><span class="quotelev1">&gt; As you have spoken, so has it been done.  And, if someone would  
</span><br>
<span class="quotelev1">&gt; confirm
</span><br>
<span class="quotelev1">&gt; the filename issue above, I'll update accordingly.  Thanks for all the
</span><br>
<span class="quotelev1">&gt; answers.  Patch for 1962 on its way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Many thanks Eugene!
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
<li><strong>Next message:</strong> <a href="6394.php">Jeff Squyres: "[OMPI devel] Open MPI v1.3.3rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="6392.php">Eugene Loh: "Re: [OMPI devel] &quot;prefix&quot; style guideline"</a>
<li><strong>In reply to:</strong> <a href="6392.php">Eugene Loh: "Re: [OMPI devel] &quot;prefix&quot; style guideline"</a>
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
