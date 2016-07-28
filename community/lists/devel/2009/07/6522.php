<?
$subject_val = "Re: [OMPI devel] Shared library versioning";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 24 08:40:05 2009" -->
<!-- isoreceived="20090724124005" -->
<!-- sent="Fri, 24 Jul 2009 08:39:47 -0400" -->
<!-- isosent="20090724123947" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Shared library versioning" -->
<!-- id="37A1B639-380D-424B-8C56-3AFD530A468B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E0FBCFB1-97CE-4CB3-8574-47D6E581E401_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Shared library versioning<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-24 08:39:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6523.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6521.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>In reply to:</strong> <a href="6517.php">Jeff Squyres: "[OMPI devel] Shared library versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6528.php">Iain Bason: "Re: [OMPI devel] Shared library versioning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oops!  I forgot to attach those 3 pages from the Libtool docs.  Here  
<br>
they are...
<br>
<p>On Jul 23, 2009, at 5:53 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; We have talked many times about doing proper versioning for OMPI's .so
</span><br>
<span class="quotelev1">&gt; libraries (e.g., libmpi.so -- *not* our component DSOs).  After
</span><br>
<span class="quotelev1">&gt; reading up on the Libtool recommendations on how to do this, I have
</span><br>
<span class="quotelev1">&gt; added a the relevant stuff to the relevant Makefile.am's, and also
</span><br>
<span class="quotelev1">&gt; added a small convenience function in configure.ac to read the
</span><br>
<span class="quotelev1">&gt; desired .so versions from the top-level VERSION file.  See <a href="https://svn.open-mpi.org/trac/ompi/changeset/21729">https://svn.open-mpi.org/trac/ompi/changeset/21729</a>
</span><br>
<span class="quotelev1">&gt; . I'm CMR'ed this to v1.3 for the next release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;  &gt;&gt;&gt; If you care about this stuff, please read the attached 3 pages
</span><br>
<span class="quotelev1">&gt; snipped from the GNU Libtool 2.2.6a docs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All prior versions of OMPI have been released with 0:0:0 (since we
</span><br>
<span class="quotelev1">&gt; didn't specify, LT defaulted to 0:0:0 for us).  So starting with
</span><br>
<span class="quotelev1">&gt; OMPI's next release, the RMs will update these numbers as appropriate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** NOTE: The .so version numbers are ONLY relevant for released OMPI
</span><br>
<span class="quotelev1">&gt; tarballs.  They are not relevant for the SVN trunk or developer
</span><br>
<span class="quotelev1">&gt; branches.  Therefore:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - The .so versions on the trunk (and developer branches) will always
</span><br>
<span class="quotelev1">&gt; remain 0:0:0.
</span><br>
<span class="quotelev1">&gt; - The RM is responsible for updating the .so version numbers according
</span><br>
<span class="quotelev1">&gt; to a short list of rules immediately prior to each OMPI release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]

</pre>
<hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6522/libtool-so-version-guidelines.pdf">libtool-so-version-guidelines.pdf</a>
</ul>
<!-- attachment="libtool-so-version-guidelines.pdf" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6523.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6521.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>In reply to:</strong> <a href="6517.php">Jeff Squyres: "[OMPI devel] Shared library versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6528.php">Iain Bason: "Re: [OMPI devel] Shared library versioning"</a>
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
