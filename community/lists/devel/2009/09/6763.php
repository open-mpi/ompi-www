<?
$subject_val = "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 07:37:20 2009" -->
<!-- isoreceived="20090904113720" -->
<!-- sent="Fri, 4 Sep 2009 13:34:54 +0200 (CEST)" -->
<!-- isosent="20090904113454" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC - &amp;quot;system-wide-only&amp;quot; MCA parameters" -->
<!-- id="alpine.DEB.2.00.0909041328180.31624_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8429E171-4226-487C-8F4C-35C3F65C969D_at_cisco.com" -->
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
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-04 07:34:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6764.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6762.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>In reply to:</strong> <a href="6760.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6766.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Reply:</strong> <a href="6766.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Reply:</strong> <a href="6787.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 4 Sep 2009, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; *** Checking versions
</span><br>
<span class="quotelev1">&gt; checking for SVN version... done
</span><br>
<span class="quotelev1">&gt; checking Open MPI version... 1.4a1hgf11244ed72b5
</span><br>
<span class="quotelev1">&gt; up to changeset c4b117c5439b
</span><br>
<span class="quotelev1">&gt; checking Open MPI release date... Unreleased developer copy
</span><br>
<span class="quotelev1">&gt; checking Open MPI Subversion repository version... hgf11244ed72b5
</span><br>
<span class="quotelev1">&gt; up to changeset c4b117c5439b
</span><br>
<span class="quotelev1">&gt; checking for SVN version... done
</span><br>
<span class="quotelev1">&gt; ...etc.
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you see this, or do you get a single-line version number?
</span><br>
I get the same. The reason is simple :
<br>
<p>$ hg tip
<br>
changeset:   9:f11244ed72b5
<br>
tag:         tip
<br>
user:        Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
<br>
date:        Thu Sep 03 14:21:47 2009 +0200
<br>
summary:     up to changeset c4b117c5439b
<br>
<p>$ hg -v tip | grep changeset | cut -d: -f3 # done by configure
<br>
f11244ed72b5
<br>
up to changeset c4b117c5439b
<br>
<p>So yes, if anyone includes the word &quot;changeset&quot; in the commit message, 
<br>
you'll have the same bug :-)
<br>
<p>So,
<br>
hg -R &quot;$srcdir&quot; tip | head -1 | grep &quot;^changeset:&quot; | cut -d: -f3
<br>
would certainly be safer.
<br>
<p>Sylvain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6764.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6762.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>In reply to:</strong> <a href="6760.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6766.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Reply:</strong> <a href="6766.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Reply:</strong> <a href="6787.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
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
