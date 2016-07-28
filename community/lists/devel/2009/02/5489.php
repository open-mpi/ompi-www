<?
$subject_val = "Re: [OMPI devel] workspace management question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 13:28:18 2009" -->
<!-- isoreceived="20090219182818" -->
<!-- sent="Thu, 19 Feb 2009 13:28:12 -0500" -->
<!-- isosent="20090219182812" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] workspace management question" -->
<!-- id="908DA6B9-7F55-493F-A638-CF99174541FB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="499D936A.5030405_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] workspace management question<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 13:28:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5490.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Previous message:</strong> <a href="5488.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>In reply to:</strong> <a href="5485.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 19, 2009, at 12:14 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Okay, thanks for all the feedback.  New version is at:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/">https://svn.open-mpi.org/trac/ompi/wiki/</a> 
</span><br>
<span class="quotelev1">&gt; UsingMercurial#Developmentcycle
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If everyone is happy with that, I'll remove the old version, along  
</span><br>
<span class="quotelev1">&gt; with the diagram.
</span><br>
<p><p>FWIW, I think your text is generally good enough (some nits below).   
<br>
You might want to say that &quot;this is one way&quot; or somesuch, because  
<br>
there are other variants (e.g., I typically commit multiple times  
<br>
before pushing, etc.).  But I doubt it's worth going into that much  
<br>
detail.
<br>
<p>Minor nits:
<br>
<p>- On the &quot;put back to SVN&quot; side, note that you might need to SVN add/ 
<br>
remove as well (i.e., if you added or removed stuff in hg).  It's also  
<br>
common to need to update various svn:ignore properties.
<br>
<p>- On the &quot;commit to my local hg&quot; side, it's not always a good idea to  
<br>
just run a top-level &quot;hg addremove&quot; -- that may slurp in some kruft  
<br>
files that you have in your workspace.  I usually use a finer-grained  
<br>
&quot;hg add file1 file2 ...&quot; approach (because I've been burned by the top- 
<br>
level &quot;hg addremove&quot; approach before).
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
<li><strong>Next message:</strong> <a href="5490.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Previous message:</strong> <a href="5488.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>In reply to:</strong> <a href="5485.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
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
