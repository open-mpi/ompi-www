<?
$subject_val = "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 20 15:54:40 2009" -->
<!-- isoreceived="20091120205440" -->
<!-- sent="Fri, 20 Nov 2009 14:54:35 -0600" -->
<!-- isosent="20091120205435" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?" -->
<!-- id="585E61FC-1003-48C5-9C1D-D2AF12853799_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B069DAF.3090007_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-20 15:54:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0416.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1370)"</a>
<li><strong>Previous message:</strong> <a href="0414.php">Michael Raymond: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>In reply to:</strong> <a href="0405.php">Brice Goglin: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0421.php">Tony Breeds: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<li><strong>Reply:</strong> <a href="0421.php">Tony Breeds: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 20, 2009, at 7:46 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Using the 0.9.2 tarball the version on the .so is &quot;0.0.0&quot;.  This  
</span><br>
<span class="quotelev1">&gt; doesn't seem
</span><br>
<span class="quotelev2">&gt; &gt; &quot;right&quot;.  I'm happy to code up the libtool fu to make the so  
</span><br>
<span class="quotelev1">&gt; version match the
</span><br>
<span class="quotelev2">&gt; &gt; package version but is that what we want?  I don't really expect  
</span><br>
<span class="quotelev1">&gt; that the ABI
</span><br>
<span class="quotelev2">&gt; &gt; to change that regularly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know about this, so I'll let others answer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>No, we *definitely* do not want the .so version to match the hwloc  
<br>
version.  See the guidance on .so version numbers in the GNU Libtool  
<br>
docs.
<br>
<p>Note that hwloc's .so version number is controlled by the top-level  
<br>
VERSION file.  There's a few comments in that file explaining the  
<br>
deal.  It's meant to be changed manually as part of the release  
<br>
process.  It will always be 0.0.0 on the SVN trunk; it will only be  
<br>
non-zero on the release branches.
<br>
<p>My $0.02: .so.0.0.0 is ok for v0.9.2.  All future releases need to  
<br>
consider whether to change the value according to the rules described  
<br>
in the Libtool docs.  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/ReleaseProcedures">https://svn.open-mpi.org/trac/ompi/wiki/ReleaseProcedures</a>
<br>
<p><span class="quotelev1">&gt; I see that Open MPI has .src.rpm files on its download pages. Should  
</span><br>
<span class="quotelev1">&gt; we
</span><br>
<span class="quotelev1">&gt; consider doing the same for hwloc?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I do most of that work -- some people have found the SRPM handy.  Note  
<br>
that it is nowhere close to the specfiles used by RH/Centos/Fedora or  
<br>
Suse -- it is much more feature-full than what they use.  I do believe  
<br>
that Fedora has good docs on their guidelines for their specfiles; I  
<br>
am not up-to-date on them, though.
<br>
<p>Hypothetically, the specfile should be pretty simple since we conform  
<br>
to most of the GNU standards.
<br>
<p><span class="quotelev2">&gt; &gt; FWIW I'm the Feora maintainer for the &quot;other&quot; libtopology[1] ;P
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Exxxcellent.  :-)
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
<li><strong>Next message:</strong> <a href="0416.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1370)"</a>
<li><strong>Previous message:</strong> <a href="0414.php">Michael Raymond: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>In reply to:</strong> <a href="0405.php">Brice Goglin: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0421.php">Tony Breeds: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<li><strong>Reply:</strong> <a href="0421.php">Tony Breeds: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
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
