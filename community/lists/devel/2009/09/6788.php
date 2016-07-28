<?
$subject_val = "[OMPI devel] version number issues";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  5 04:33:36 2009" -->
<!-- isoreceived="20090905083336" -->
<!-- sent="Sat, 5 Sep 2009 11:33:31 +0300" -->
<!-- isosent="20090905083331" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] version number issues" -->
<!-- id="96B30E5A-388B-47D0-8876-5DBB97520B8B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1252065371.2636.267.camel_at_frecb000730.frec.bull.fr" -->
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
<strong>Subject:</strong> [OMPI devel] version number issues<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-05 04:33:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6789.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6787.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>In reply to:</strong> <a href="6766.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6792.php">Nadia Derbey: "Re: [OMPI devel] version number issues"</a>
<li><strong>Reply:</strong> <a href="6792.php">Nadia Derbey: "Re: [OMPI devel] version number issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 4, 2009, at 2:56 PM, Nadia Derbey wrote:
<br>
<p><span class="quotelev1">&gt; Actually, I didn't have the problem on my side, because hg is not  
</span><br>
<span class="quotelev1">&gt; known
</span><br>
<span class="quotelev1">&gt; in my build environment. Never noticed these lines:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** Checking versions
</span><br>
<span class="quotelev1">&gt; checking for SVN version... ../configure: line 4285: hg: command not
</span><br>
<span class="quotelev1">&gt; found
</span><br>
<span class="quotelev1">&gt; done
</span><br>
<span class="quotelev1">&gt; checking Open MPI version... 1.4a1hg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>I changed the subject since we're digressing a bit off the original  
<br>
RFC...
<br>
<p>This is an interesting failure mode that we evidently didn't consider  
<br>
when we wrote that script.  ;-)  I guess we should check $? when  
<br>
returning and ensure that the command executed properly.
<br>
<p>The only question is -- should we abort in this case, or just put in  
<br>
&quot;unknown -- could not find hg&quot; (or whatever) as the version?  I would  
<br>
lean towards the latter; development machines may vary wildly in what  
<br>
software is installed...  Unless anyone objects, I'll do the latter.
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
<li><strong>Next message:</strong> <a href="6789.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6787.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>In reply to:</strong> <a href="6766.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6792.php">Nadia Derbey: "Re: [OMPI devel] version number issues"</a>
<li><strong>Reply:</strong> <a href="6792.php">Nadia Derbey: "Re: [OMPI devel] version number issues"</a>
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
