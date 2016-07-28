<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 11 10:04:07 2007" -->
<!-- isoreceived="20070911140407" -->
<!-- sent="Tue, 11 Sep 2007 10:04:01 -0400" -->
<!-- isosent="20070911140401" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] First cut at MTT web pages" -->
<!-- id="D98E928B-E4CE-4326-AF22-422C6EBB1A31_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070906171026.GU12598_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-11 10:04:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0092.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r999"</a>
<li><strong>Previous message:</strong> <a href="0090.php">Ethan Mallove: "[MTT devel] No toggle for running autogen.sh in GNU_Install?"</a>
<li><strong>In reply to:</strong> <a href="0088.php">Ethan Mallove: "Re: [MTT devel] First cut at MTT web pages"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 6, 2007, at 1:10 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; PHP issues aside, I think having these two is confusing:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/mtt">http://www.open-mpi.org/mtt</a>
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/projects/mtt">http://www.open-mpi.org/projects/mtt</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nothing in the first link indicates test results (that was
</span><br>
<span class="quotelev1">&gt; something I liked about &quot;reporter.php&quot; :-)) So yes, I favor
</span><br>
<span class="quotelev1">&gt; renaming mtt/index.php.
</span><br>
<p>No, that's not what I'm proposing.  I'm proposing renaming the first  
<br>
URL from:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mtt">http://www.open-mpi.org/mtt</a>
<br>
<p>to:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/testing">http://www.open-mpi.org/testing</a>
<br>
<p>That way, there's only one &quot;mtt&quot; directory in the tree.  It fixes the  
<br>
PHP issues as a side-effect, but my real point is that &quot;/mtt&quot; as a  
<br>
top-level dir probably isn't quite right.  It should really be  
<br>
&quot;testing/&quot; because it's the OMPI testing results.  The fact that it's  
<br>
using MTT for these results is [almost] irrelevant.
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
<li><strong>Next message:</strong> <a href="0092.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r999"</a>
<li><strong>Previous message:</strong> <a href="0090.php">Ethan Mallove: "[MTT devel] No toggle for running autogen.sh in GNU_Install?"</a>
<li><strong>In reply to:</strong> <a href="0088.php">Ethan Mallove: "Re: [MTT devel] First cut at MTT web pages"</a>
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
