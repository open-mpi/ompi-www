<?
$subject_val = "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 08:02:04 2009" -->
<!-- isoreceived="20090904120204" -->
<!-- sent="Fri, 04 Sep 2009 13:56:11 +0200" -->
<!-- isosent="20090904115611" -->
<!-- name="Nadia Derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC - &amp;quot;system-wide-only&amp;quot; MCA parameters" -->
<!-- id="1252065371.2636.267.camel_at_frecb000730.frec.bull.fr" -->
<!-- inreplyto="alpine.DEB.2.00.0909041328180.31624_at_jeaugeys.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters<br>
<strong>From:</strong> Nadia Derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-04 07:56:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6767.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlock on openib when using hindexed types"</a>
<li><strong>Previous message:</strong> <a href="6765.php">Rolf Vandevaart: "Re: [OMPI devel] Deadlock on openib when using hindexed types"</a>
<li><strong>In reply to:</strong> <a href="6763.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6788.php">Jeff Squyres: "[OMPI devel] version number issues"</a>
<li><strong>Reply:</strong> <a href="6788.php">Jeff Squyres: "[OMPI devel] version number issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2009-09-04 at 13:34 +0200, Sylvain Jeaugey wrote:
<br>
<span class="quotelev1">&gt; On Fri, 4 Sep 2009, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ------
</span><br>
<span class="quotelev2">&gt; &gt; *** Checking versions
</span><br>
<span class="quotelev2">&gt; &gt; checking for SVN version... done
</span><br>
<span class="quotelev2">&gt; &gt; checking Open MPI version... 1.4a1hgf11244ed72b5
</span><br>
<span class="quotelev2">&gt; &gt; up to changeset c4b117c5439b
</span><br>
<span class="quotelev2">&gt; &gt; checking Open MPI release date... Unreleased developer copy
</span><br>
<span class="quotelev2">&gt; &gt; checking Open MPI Subversion repository version... hgf11244ed72b5
</span><br>
<span class="quotelev2">&gt; &gt; up to changeset c4b117c5439b
</span><br>
<span class="quotelev2">&gt; &gt; checking for SVN version... done
</span><br>
<span class="quotelev2">&gt; &gt; ...etc.
</span><br>
<span class="quotelev2">&gt; &gt; ------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do you see this, or do you get a single-line version number?
</span><br>
<span class="quotelev1">&gt; I get the same. The reason is simple :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ hg tip
</span><br>
<span class="quotelev1">&gt; changeset:   9:f11244ed72b5
</span><br>
<span class="quotelev1">&gt; tag:         tip
</span><br>
<span class="quotelev1">&gt; user:        Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; date:        Thu Sep 03 14:21:47 2009 +0200
</span><br>
<span class="quotelev1">&gt; summary:     up to changeset c4b117c5439b
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ hg -v tip | grep changeset | cut -d: -f3 # done by configure
</span><br>
<span class="quotelev1">&gt; f11244ed72b5
</span><br>
<span class="quotelev1">&gt; up to changeset c4b117c5439b
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So yes, if anyone includes the word &quot;changeset&quot; in the commit message, 
</span><br>
<span class="quotelev1">&gt; you'll have the same bug :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So,
</span><br>
<span class="quotelev1">&gt; hg -R &quot;$srcdir&quot; tip | head -1 | grep &quot;^changeset:&quot; | cut -d: -f3
</span><br>
<span class="quotelev1">&gt; would certainly be safer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Thx Sylvain!
<br>
just pushed a fake patch as a workaround.
<br>
Actually, I didn't have the problem on my side, because hg is not known
<br>
in my build environment. Never noticed these lines:
<br>
<p>-----------------
<br>
<p>*** Checking versions
<br>
checking for SVN version... ../configure: line 4285: hg: command not
<br>
found
<br>
done
<br>
checking Open MPI version... 1.4a1hg
<br>
checking Open MPI release date... Unreleased developer copy
<br>
checking Open MPI Subversion repository version... hg
<br>
checking for SVN version... ../configure: line 4397: hg: command not
<br>
found
<br>
done
<br>
<p>-------------
<br>
<p>Regards,
<br>
Nadia
<br>
<p><pre>
-- 
Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6767.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlock on openib when using hindexed types"</a>
<li><strong>Previous message:</strong> <a href="6765.php">Rolf Vandevaart: "Re: [OMPI devel] Deadlock on openib when using hindexed types"</a>
<li><strong>In reply to:</strong> <a href="6763.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6788.php">Jeff Squyres: "[OMPI devel] version number issues"</a>
<li><strong>Reply:</strong> <a href="6788.php">Jeff Squyres: "[OMPI devel] version number issues"</a>
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
