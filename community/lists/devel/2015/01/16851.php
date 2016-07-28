<?
$subject_val = "Re: [OMPI devel] RFC: Remove embedded libltdl";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 30 06:49:45 2015" -->
<!-- isoreceived="20150130114945" -->
<!-- sent="Fri, 30 Jan 2015 11:49:44 +0000" -->
<!-- isosent="20150130114944" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove embedded libltdl" -->
<!-- id="191DCF9C-7C0A-48D0-9F5C-65A73B1FA502_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA15EnZWP_KDTZiC0e53ZpsSvssdwn=O6vaFHiLOp8gn15Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove embedded libltdl<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-30 06:49:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16852.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Great meeting!"</a>
<li><strong>Previous message:</strong> <a href="16850.php">Gilles Gouaillardet: "Re: [OMPI devel] Great meeting!"</a>
<li><strong>In reply to:</strong> <a href="16849.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16853.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Reply:</strong> <a href="16853.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 29, 2015, at 9:11 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I understand one is (or will be soon) expected to have libtool-dev(el) installed on the build system, even if one is not a OMPI developer.
</span><br>
<p>No.  We don't want to raise the bar that high for simple user installations.
<br>
<p>If you are installing an OMPI tarball from source (that is not a git clone):
<br>
<p>1. If you have libltdl devel support installed (i.e., ltdl.h), then OMPI will build as it always has: with plugin support.
<br>
<p>2. If you do not have libltdl devel support installed, then OMPI will effectively behave as if --disable-dlopen was specified.  I.e., there will be no plugin support and all OMPI plugins will be slurped up into their upper-level libraries (e.g., BTLs are slurped up into libmpi.so or libmpi.a).
<br>
<p>Hence, from OMPI tarballs, *OMPI will always build and function correctly* -- regardless of whether you have libltdl / libltdl-devel.
<br>
<p>I'm guessing that many user installations will now build without plugin support (because libltdl-devel is typically not installed in Linux distros / OS X by default).  However, after talking this through in Dallas this week, I'm not thinking that this is a problem.
<br>
<p><span class="quotelev1">&gt; How does this plan to cease embedding libltdl align with the fact that autogen.pl currently applies patches to the parts of the generated configure from the *packager's* system?  Isn't there now going to be a disconnect between the versions of libtool-related portions of the configure script shipped in a tarball and the version (if any) of libltdl on the system building from that tarball?
</span><br>
<p>I think that's two questions:
<br>
<p>1. Will OMPI continue to patch configure/etc. w.r.t. libltdl functionality?
<br>
<p>No; there's no need, because we were effectively patching against the embedded libltdl.  Since we're not embedding, there's nothing to patch.
<br>
<p>We will lose the &quot;bug fix&quot; that we were patching, however (there is a giant comment in this file that explains what it is for): <a href="https://github.com/open-mpi/ompi/blob/master/config/libltdl-preopen-error.diff">https://github.com/open-mpi/ompi/blob/master/config/libltdl-preopen-error.diff</a>
<br>
<p>That may be a bit annoying.  ...but then again, if most users are going to end up not building plugin support, the need for that patch effectively goes away.
<br>
<p>2. What happens if OMPI tries to build against an old libltdl?
<br>
<p>We *should* be ok.  libltdl has been stable for a long time.  libltdl added the lt_dladvise functionality at one point, but we added configure tests to check for that a long time ago (i.e., the C code can handle whether or not your libltdl has support for lt_dladvise).
<br>
<p>This PR actually adds the results of those lt_dladvise configury tests to ompi_info output.
<br>
<p><span class="quotelev1">&gt; Also, I can still build v1.8 on an old Red Hat 8 system where the system libtool/libltdl is 1.4.2, perhaps only because Open MPI embeds a recent version.
</span><br>
<p>Could be.  Would you mind testing the OMPI PR branch on this old system?  I can make you a tarball if it would help.
<br>
<p><span class="quotelev1">&gt; What minimum version of libltdl is required after the proposed change?
</span><br>
<span class="quotelev1">&gt; Will I need to install a libtool-2.x on that old system to be able to build OpenMPI with dlopen support?
</span><br>
<p>I don't know what the minimum Libtool/libltdl required version is; I didn't try to back track to find it.
<br>
<p>I think that if we can still build on a sufficiently-old system (e.g., Red Hat 8 with your LT 1.4.2), that is probably good enough.
<br>
<p>Also, remember: libltdl has *never been required* for Open MPI.  Although building with libltdl has always been the default, you could always have disabled it.  This PR effectively now changes the default to build-it-if-we-got-it-and-skip-it-if-we-don't for users, and developers must specify --disable-dlopen if they don't have libltdl-devel (per the assumption that most developers will want to build with dlopen support).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16852.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Great meeting!"</a>
<li><strong>Previous message:</strong> <a href="16850.php">Gilles Gouaillardet: "Re: [OMPI devel] Great meeting!"</a>
<li><strong>In reply to:</strong> <a href="16849.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16853.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Reply:</strong> <a href="16853.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
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
