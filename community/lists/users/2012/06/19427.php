<?
$subject_val = "Re: [OMPI users] Error building openmpi-1.6 from copy";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  1 14:36:20 2012" -->
<!-- isoreceived="20120601183620" -->
<!-- sent="Fri, 1 Jun 2012 14:36:15 -0400" -->
<!-- isosent="20120601183615" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error building openmpi-1.6 from copy" -->
<!-- id="2F63BFE8-0001-460B-903B-17E62DD94510_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CA+tOgLEaXUaPCL1kypGqc=B2aUF-e91gODVF7AQ52eUKRkZRag_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error building openmpi-1.6 from copy<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-01 14:36:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19428.php">Jeff Squyres: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>Previous message:</strong> <a href="19426.php">Jeremy: "[OMPI users] Error building openmpi-1.6 from copy"</a>
<li><strong>In reply to:</strong> <a href="19426.php">Jeremy: "[OMPI users] Error building openmpi-1.6 from copy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19429.php">Jeremy: "Re: [OMPI users] Error building openmpi-1.6 from copy"</a>
<li><strong>Reply:</strong> <a href="19429.php">Jeremy: "Re: [OMPI users] Error building openmpi-1.6 from copy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 1, 2012, at 2:16 PM, Jeremy wrote:
<br>
<p><span class="quotelev1">&gt; However, if I do an intermediate copy of the opempi-1.6 directory then
</span><br>
<span class="quotelev1">&gt; make fails (details attached):
</span><br>
<span class="quotelev1">&gt; tar xvf openmpi-1.6.tar
</span><br>
<span class="quotelev1">&gt; cp -r openmpi-1.6 openmpi-1.6.try
</span><br>
<p>^^Yeah, don't do that.  :-)
<br>
<p>Open MPI, like all Automake-bootstrapped tools, has a very strict dependence on its timestamps on the filesystem.  The tarball itself is created with a specific file ordering so that when you untar it, the filestamps are in the Order That Is Needed (Automake takes care of all of this when we make the tarball).  As you saw, if you violate those timestamps, Bad Things happen when you &quot;make&quot; (because &quot;make&quot; is timestamp driven).
<br>
<p><span class="quotelev1">&gt; I can get it work only if I preserve timestamps when I do the copy:
</span><br>
<span class="quotelev1">&gt; tar xvf openmpi-1.6.tar
</span><br>
<span class="quotelev1">&gt; cp -r --preserve=timestamps openmpi-1.6 openmpi-1.6.try
</span><br>
<p>Yes, this is expected.
<br>
<p>I think your options are as follows:
<br>
<p>1. untar the tarball every time you want another copy
<br>
2. cp -r --preserve=timestamps
<br>
3. Use a VPATH build
<br>
<p>#3 is probably your easiest solution.  You can do something like this:
<br>
<p>tar xf openmpi-1.6.tar.bz2
<br>
mkdir build-1
<br>
cd build-1
<br>
../openmpi-1.6/configure ....whatever options you want...
<br>
make -j 8 install
<br>
<p>cd ..
<br>
mkdir build-2
<br>
cd build-2
<br>
../openmpi-1.6/configure ....whatever other options you want...
<br>
make -j 8 install
<br>
<p>...and so on.
<br>
<p>Meaning: you have the source expanded exactly once, and you configure/build multiple times in different trees.  Specifically: you separate the source tree from the build tree(s).
<br>
<p>Does that help?
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
<li><strong>Next message:</strong> <a href="19428.php">Jeff Squyres: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>Previous message:</strong> <a href="19426.php">Jeremy: "[OMPI users] Error building openmpi-1.6 from copy"</a>
<li><strong>In reply to:</strong> <a href="19426.php">Jeremy: "[OMPI users] Error building openmpi-1.6 from copy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19429.php">Jeremy: "Re: [OMPI users] Error building openmpi-1.6 from copy"</a>
<li><strong>Reply:</strong> <a href="19429.php">Jeremy: "Re: [OMPI users] Error building openmpi-1.6 from copy"</a>
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
