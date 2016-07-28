<?
$subject_val = "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 23 21:28:50 2009" -->
<!-- isoreceived="20091124022850" -->
<!-- sent="Tue, 24 Nov 2009 13:28:45 +1100" -->
<!-- isosent="20091124022845" -->
<!-- name="Tony Breeds" -->
<!-- email="tony_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?" -->
<!-- id="20091124022844.GA17726_at_ozlabs.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="585E61FC-1003-48C5-9C1D-D2AF12853799_at_cisco.com" -->
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
<strong>From:</strong> Tony Breeds (<em>tony_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-23 21:28:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0422.php">Brice Goglin: "[hwloc-devel] PCI discovery for MacOSX"</a>
<li><strong>Previous message:</strong> <a href="0420.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1371)"</a>
<li><strong>In reply to:</strong> <a href="0415.php">Jeff Squyres: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0423.php">Jeff Squyres: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<li><strong>Reply:</strong> <a href="0423.php">Jeff Squyres: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Nov 20, 2009 at 02:54:35PM -0600, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; No, we *definitely* do not want the .so version to match the hwloc
</span><br>
<span class="quotelev1">&gt; version.  See the guidance on .so version numbers in the GNU Libtool
</span><br>
<span class="quotelev1">&gt; docs.
</span><br>
<p>Right.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; Note that hwloc's .so version number is controlled by the top-level
</span><br>
<span class="quotelev1">&gt; VERSION file.  There's a few comments in that file explaining the
</span><br>
<span class="quotelev1">&gt; deal.  It's meant to be changed manually as part of the release
</span><br>
<span class="quotelev1">&gt; process.  It will always be 0.0.0 on the SVN trunk; it will only be
</span><br>
<span class="quotelev1">&gt; non-zero on the release branches.
</span><br>
<p>really? Couldn't this lead to a sutuation where $app is compiled agaist 0.9.2
<br>
(with the .so version 0.0.0), time passes, the admin then builds the svn
<br>
sources and (potentially) $app stops working.
<br>
<p>0.9.2 is out there, so at some level 0.0.0 is the first public ABI, shouldn't
<br>
the svn version either follow the some rules as release branches or be given a
<br>
version (say 99.0.0) that will not match any released version.
<br>
<p><p><span class="quotelev1">&gt; My $0.02: .so.0.0.0 is ok for v0.9.2.  All future releases need to
</span><br>
<span class="quotelev1">&gt; consider whether to change the value according to the rules
</span><br>
<span class="quotelev1">&gt; described in the Libtool docs.  For example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      <a href="https://svn.open-mpi.org/trac/ompi/wiki/ReleaseProcedures">https://svn.open-mpi.org/trac/ompi/wiki/ReleaseProcedures</a>
</span><br>
<p><span class="quotelev1">&gt; I do most of that work -- some people have found the SRPM handy.
</span><br>
<span class="quotelev1">&gt; Note that it is nowhere close to the specfiles used by
</span><br>
<span class="quotelev1">&gt; RH/Centos/Fedora or Suse -- it is much more feature-full than what
</span><br>
<span class="quotelev1">&gt; they use.  I do believe that Fedora has good docs on their
</span><br>
<span class="quotelev1">&gt; guidelines for their specfiles; I am not up-to-date on them, though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hypothetically, the specfile should be pretty simple since we
</span><br>
<span class="quotelev1">&gt; conform to most of the GNU standards.
</span><br>
<p>Yeah the only place we (possibly) run into problems is with packages names.
<br>
but that can be worked around :)
<br>
<p>anyway FWIW the SPEC file is at:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://bakeyournoodle.com/~tony/fedora/hwloc/hwloc.spec">http://bakeyournoodle.com/~tony/fedora/hwloc/hwloc.spec</a>
<br>
it still needs some work, as as you say it's pretty basic.
<br>
<p>Yours Tony
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0422.php">Brice Goglin: "[hwloc-devel] PCI discovery for MacOSX"</a>
<li><strong>Previous message:</strong> <a href="0420.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1371)"</a>
<li><strong>In reply to:</strong> <a href="0415.php">Jeff Squyres: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0423.php">Jeff Squyres: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<li><strong>Reply:</strong> <a href="0423.php">Jeff Squyres: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
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
