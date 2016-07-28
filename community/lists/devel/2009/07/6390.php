<?
$subject_val = "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  9 07:08:29 2009" -->
<!-- isoreceived="20090709110829" -->
<!-- sent="Thu, 9 Jul 2009 07:08:24 -0400" -->
<!-- isosent="20090709110824" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer" -->
<!-- id="D78563B3-9AB5-4C18-B6CA-86F79B026443_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C8AE5FFE-DEF3-4D49-81BF-06A972B46B49_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-09 07:08:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6391.php">Jeff Squyres: "Re: [OMPI devel] &quot;prefix&quot; style guideline"</a>
<li><strong>Previous message:</strong> <a href="6389.php">Eugene Loh: "[OMPI devel] &quot;prefix&quot; style guideline"</a>
<li><strong>In reply to:</strong> <a href="6387.php">George Bosilca: "[OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6400.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<li><strong>Reply:</strong> <a href="6400.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Two comments:
<br>
<p><span class="quotelev1">&gt; Why : ...  Second
</span><br>
<span class="quotelev1">&gt; reason, is that now the data-type engine (without all the MPI
</span><br>
<span class="quotelev1">&gt; knowledge) is available to other projects.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>We're still only shipping Open MPI as a whole as our official product,  
<br>
right?  More specifically: we're not intending to ship OPAL  
<br>
independently, right?  If other projects want to pick up OPAL  
<br>
themselves and use it (e.g., via SVN checkouts, Mercurial clones,  
<br>
official OMPI tarballs, etc.), that's fine.  But I'd be opposed to  
<br>
creating a 2nd official distribution that was OPAL-only.
<br>
<p><span class="quotelev1">&gt; Performance tests on the ompi-ddt branch have proven that there is no
</span><br>
<span class="quotelev1">&gt; performance penalties associated with this change (tests done using
</span><br>
<span class="quotelev1">&gt; NetPipe-3.7.1 on smoky using BTL/sm, giving 1.6usecs on this  
</span><br>
<span class="quotelev1">&gt; platform).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>1.6us sounds like pretty high sm latency...  Is this a slow platform?
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
<li><strong>Next message:</strong> <a href="6391.php">Jeff Squyres: "Re: [OMPI devel] &quot;prefix&quot; style guideline"</a>
<li><strong>Previous message:</strong> <a href="6389.php">Eugene Loh: "[OMPI devel] &quot;prefix&quot; style guideline"</a>
<li><strong>In reply to:</strong> <a href="6387.php">George Bosilca: "[OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6400.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<li><strong>Reply:</strong> <a href="6400.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
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
