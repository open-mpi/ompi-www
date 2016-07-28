<?
$subject_val = "[OMPI devel] Shared library versioning";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 17:53:50 2009" -->
<!-- isoreceived="20090723215350" -->
<!-- sent="Thu, 23 Jul 2009 17:53:45 -0400" -->
<!-- isosent="20090723215345" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Shared library versioning" -->
<!-- id="E0FBCFB1-97CE-4CB3-8574-47D6E581E401_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Shared library versioning<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-23 17:53:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6518.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6516.php">George Bosilca: "Re: [OMPI devel] RFC: meaning of &quot;btl_XXX_eager_limit&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6522.php">Jeff Squyres: "Re: [OMPI devel] Shared library versioning"</a>
<li><strong>Reply:</strong> <a href="6522.php">Jeff Squyres: "Re: [OMPI devel] Shared library versioning"</a>
<li><strong>Reply:</strong> <a href="6528.php">Iain Bason: "Re: [OMPI devel] Shared library versioning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have talked many times about doing proper versioning for OMPI's .so  
<br>
libraries (e.g., libmpi.so -- *not* our component DSOs).  After  
<br>
reading up on the Libtool recommendations on how to do this, I have  
<br>
added a the relevant stuff to the relevant Makefile.am's, and also  
<br>
added a small convenience function in configure.ac to read the  
<br>
desired .so versions from the top-level VERSION file.  See <a href="https://svn.open-mpi.org/trac/ompi/changeset/21729">https://svn.open-mpi.org/trac/ompi/changeset/21729</a> 
<br>
. I'm CMR'ed this to v1.3 for the next release.
<br>
<p><span class="quotelev3"> &gt;&gt;&gt; If you care about this stuff, please read the attached 3 pages  
</span><br>
snipped from the GNU Libtool 2.2.6a docs.
<br>
<p>All prior versions of OMPI have been released with 0:0:0 (since we  
<br>
didn't specify, LT defaulted to 0:0:0 for us).  So starting with  
<br>
OMPI's next release, the RMs will update these numbers as appropriate.
<br>
<p>** NOTE: The .so version numbers are ONLY relevant for released OMPI  
<br>
tarballs.  They are not relevant for the SVN trunk or developer  
<br>
branches.  Therefore:
<br>
<p>- The .so versions on the trunk (and developer branches) will always  
<br>
remain 0:0:0.
<br>
- The RM is responsible for updating the .so version numbers according  
<br>
to a short list of rules immediately prior to each OMPI release.
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
<li><strong>Next message:</strong> <a href="6518.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6516.php">George Bosilca: "Re: [OMPI devel] RFC: meaning of &quot;btl_XXX_eager_limit&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6522.php">Jeff Squyres: "Re: [OMPI devel] Shared library versioning"</a>
<li><strong>Reply:</strong> <a href="6522.php">Jeff Squyres: "Re: [OMPI devel] Shared library versioning"</a>
<li><strong>Reply:</strong> <a href="6528.php">Iain Bason: "Re: [OMPI devel] Shared library versioning"</a>
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
