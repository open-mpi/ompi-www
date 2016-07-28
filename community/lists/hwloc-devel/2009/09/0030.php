<?
$subject_val = "[hwloc-devel] More changes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 11 11:53:54 2009" -->
<!-- isoreceived="20090911155354" -->
<!-- sent="Fri, 11 Sep 2009 11:53:49 -0400" -->
<!-- isosent="20090911155349" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] More changes" -->
<!-- id="641C2E74-83C4-4756-932B-B46907E0008B_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] More changes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-11 11:53:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0031.php">Jeff Squyres: "[hwloc-devel] libtopology tarballs posted"</a>
<li><strong>Previous message:</strong> <a href="0029.php">Jeff Squyres: "Re: [hwloc-devel] hwloc web site"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
1. I added a versioning system to hwloc (same one that we use in OMPI  
<br>
and PLPA).  It's controlled by the top-level VERSION file -- have a  
<br>
look; there's lots of comments and explanations in there.  You now set  
<br>
all of hwloc's version numbers from this file (***including the  
<br>
hwloc.so version***) -- no need to edit configure.ac or anything else.
<br>
<p>2. There is now two ways to make tarballs:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;2a. &quot;make dist&quot; -- will append the SVN r number (or hg tip  
<br>
checksum -- feel free to add logic for git, if you care) to the  
<br>
version.  This is a &quot;developer snapshot&quot; tarball and is not an  
<br>
official release.  They're great for sending to users for testing, etc.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;2b. &quot;./contrib/dist/make_dist_tarball&quot; -- will make an official  
<br>
release tarball (no SVN/hg/whatever version number appended to the  
<br>
hwloc version number).
<br>
<p>Here's a concrete example:
<br>
<p>- &quot;make dist&quot; will make hwloc-0.9.1a1r948.tar.gz
<br>
- &quot;./contrib/dist/make_dist_tarball&quot; will make hwloc-0.9.1a1.tar.gz
<br>
<p>The reason for this distinction was that we found it critical to  
<br>
distinguish between random OMPI tarballs floating around on the net.   
<br>
It makes it trivially easy to look at a tarball and know if it's a  
<br>
developer snapshot or official release.
<br>
<p>3. &quot;make dist&quot; now goes out and gets the latest config.sub and  
<br>
config.guess from gnu.org and puts it in the tarball.  As mentioned  
<br>
last night, &quot;make dist&quot; will fail if you don't have the right doxygen  
<br>
tools and w3m.  (I have not put the &quot;run doxygen&quot; and &quot;run w3m&quot; stuff  
<br>
in &quot;make dist&quot; yet -- I will soon).
<br>
<p>4. &quot;make_dist_tarball&quot; looks for a specific version set of the GNU  
<br>
Autotools (currently: LT 2.2.6, AC 2.64, AM 1.11).  This is to ensure  
<br>
absolute repeatability of the tools used to create an official release  
<br>
tarball.
<br>
<p>FWIW: for OMPI, we usually lock down a set of tools for a given  
<br>
version series (e.g., for the life of the 1.3 series).   
<br>
make_dist_tarball also runs &quot;make distcheck&quot; to run a bunch of sanity  
<br>
checks on the tarball itself before succeeding.
<br>
<p>5. I added some Mercurial helper scripts (e.g., build up a .hgignore  
<br>
file from svn:ignore properties).  I saw that someone committed  
<br>
something similar with .gitignore -- you might want to put your  
<br>
scripty-foo for that in contrib/git, or somesuch?  The contrib/ tree  
<br>
is not included in the tarball; they're just helper scripts for us  
<br>
(developers).
<br>
<p>Let me know if you have questions / problems / hate what I've done.  :-)
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
<li><strong>Next message:</strong> <a href="0031.php">Jeff Squyres: "[hwloc-devel] libtopology tarballs posted"</a>
<li><strong>Previous message:</strong> <a href="0029.php">Jeff Squyres: "Re: [hwloc-devel] hwloc web site"</a>
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
