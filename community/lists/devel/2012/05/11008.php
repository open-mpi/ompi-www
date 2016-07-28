<?
$subject_val = "[OMPI devel] Unable to set flags using platform files in the 1.6 release";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 23 13:49:26 2012" -->
<!-- isoreceived="20120523174926" -->
<!-- sent="Wed, 23 May 2012 17:49:21 +0000" -->
<!-- isosent="20120523174921" -->
<!-- name="Gunter, David O" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="[OMPI devel] Unable to set flags using platform files in the 1.6 release" -->
<!-- id="4E8E3890-E730-41B1-9DAA-B7A9CF9E60AB_at_lanl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Unable to set flags using platform files in the 1.6 release<br>
<strong>From:</strong> Gunter, David O (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-23 13:49:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11009.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release"</a>
<li><strong>Previous message:</strong> <a href="11007.php">Josh Hursey: "Re: [OMPI devel] Building Open MPI without Java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11009.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release"</a>
<li><strong>Reply:</strong> <a href="11009.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to set LDFLAGS, CFLAGS, etc, in a platform file but the 1.6 release does not seem to pick these up.
<br>
<p>Here's the tail end of one of our platform files, for building with the latest PGI compilers:
<br>
<p>LDFLAGS=&quot;-nomp -lnuma&quot;
<br>
CFLAGS=&quot;-I/opt/panfs/include&quot;
<br>
CXXFLAGS=&quot;-I/opt/panfs/include&quot;
<br>
FCFLAGS=&quot;-I/opt/panfs/include&quot;
<br>
FFLAGS=&quot;-I/opt/panfs/include&quot;
<br>
CCASFLAGS=&quot;-I/opt/panfs/include&quot;
<br>
<p>The same platform file will configure the 1.4.5 release just fine but does not work with 1.6. If I set these variables in my environment and then run configure, it works just fine - as expected.
<br>
<p>Has anyone else noticed this behavior?
<br>
<p>-david
<br>
<pre>
--
David Gunter
HPC-3: Infrastructure Team
Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11009.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release"</a>
<li><strong>Previous message:</strong> <a href="11007.php">Josh Hursey: "Re: [OMPI devel] Building Open MPI without Java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11009.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release"</a>
<li><strong>Reply:</strong> <a href="11009.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release"</a>
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
