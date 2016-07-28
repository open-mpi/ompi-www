<?
$subject_val = "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 10 06:57:23 2015" -->
<!-- isoreceived="20150610105723" -->
<!-- sent="Wed, 10 Jun 2015 10:57:21 +0000" -->
<!-- isosent="20150610105721" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks" -->
<!-- id="5927595F-14AE-4AE6-91E3-1C91A9EB6810_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E55DDFC9-1162-4830-B105-9D77CE2C31FB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-10 06:57:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27082.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<li><strong>Previous message:</strong> <a href="27080.php">Gilles Gouaillardet: "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>In reply to:</strong> <a href="27078.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27069.php">Siegmar Gross: "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Jun 10, 2015, at 6:27 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; i just found an other issue with this scenario :
</span><br>
<span class="quotelev2">&gt;&gt; symlinks in the profile directories (ompi/mpi/c/profile, ompi/mpi/fortran/mpif-h/profile, oshmem/shmem/c/profile) are not recreated and points to the previous source tree.
</span><br>
<span class="quotelev2">&gt;&gt; (that caused one crash at least, and likely silently compiles old sources most of the time)
</span><br>
<p>Actually, the more I think about this, the more I think that this simply should be unsupported:
<br>
<p>1. This is simply not the way the autotools-built software are supposed to be used.  I can't find any documentation that supports this assertion, but it just seems downright weird to me that you'd use the same build tree for multiple source trees -- that seems like a recipe for trouble.
<br>
2. I'm not sure how to tell whether we need to re-create the sym link or not.
<br>
<p>Here's an example:
<br>
<p>-----
<br>
# Untar two different tarballs (which makes 2 different source trees)
<br>
tar xf tarball1.tar.bz2
<br>
tar xf tarball2.tar.bz2
<br>
<p># Make a build tree
<br>
mkdir build
<br>
cd build
<br>
<p># Configure and build tarball 1
<br>
../tarball1/configure
<br>
make
<br>
<p># IN THE SAME BUILD TREE, configure and build tarball2
<br>
../tarball2/configure
<br>
make &lt;--- bad because there are build products from tarball1 in the tree
<br>
-----
<br>
<p>The OMPI build process is implicitly assuming that the following was inserted before the 2nd configure:
<br>
<p><pre>
----
cd ..
rm -rf build
mkdir build
cd build
-----
I.e., delete the entire build tree before running tarball2's configure (or otherwise using a different build tree).
Gilles just made a suggestion in a followup mail (re-create the sym links if the Makefile is newer than the sym link).  Offhand, I can't think of a simple/clean way to be able to check this in a Makefile.am rule...?
Sidenote: we only re-create the links if they don't exist so that if you:
-----
make
make
-----
it doesn't re-create all those sym links, and therefore re-compile all those files.
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27082.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<li><strong>Previous message:</strong> <a href="27080.php">Gilles Gouaillardet: "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>In reply to:</strong> <a href="27078.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27069.php">Siegmar Gross: "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
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
