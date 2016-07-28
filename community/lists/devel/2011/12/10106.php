<?
$subject_val = "[OMPI devel] 1.5.5rc1: all my hwloc-related failures";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 05:00:03 2011" -->
<!-- isoreceived="20111214100003" -->
<!-- sent="Wed, 14 Dec 2011 01:59:37 -0800" -->
<!-- isosent="20111214095937" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.5.5rc1: all my hwloc-related failures" -->
<!-- id="4EE87389.4070504_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A23B6CCA-353C-4E7D-92EB-638DB6C87180_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.5.5rc1: all my hwloc-related failures<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 04:59:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10107.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 is out"</a>
<li><strong>Previous message:</strong> <a href="10105.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: Solaris 11 hwloc link failure"</a>
<li><strong>In reply to:</strong> <a href="10089.php">Jeff Squyres: "[OMPI devel] 1.5.5rc1 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10107.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 is out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have been working w/ Brice off-list and we have found the root cause 
<br>
of ALL those problems I've reported with linux-specific hwloc symbols on 
<br>
non-linux systems.
<br>
<p>Somehow the 1.5.1rc1 tarball contains a GENERATED file from a Linux system!
<br>
<p><span class="quotelev1">&gt; $ find openmpi-1.5.5rc1 -name autogen | xargs ls
</span><br>
<span class="quotelev1">&gt; openmpi-1.5.5rc1/opal/mca/hwloc/hwloc122ompi/hwloc/include/hwloc/autogen:
</span><br>
<span class="quotelev1">&gt; config.h  config.h.in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; openmpi-1.5.5rc1/opal/mca/hwloc/hwloc122ompi/hwloc/include/private/autogen:
</span><br>
<span class="quotelev1">&gt; config.h.in
</span><br>
<p>That one &quot;config.h&quot; does NOT belong there.
<br>
It does look like somebody at least TRIED to keep it out of the tarball:
<br>
<span class="quotelev1">&gt; $ grep nodist 
</span><br>
<span class="quotelev1">&gt; openmpi-1.5.5rc1/opal/mca/hwloc/hwloc122ompi/hwloc/include/Makefile.am
</span><br>
<span class="quotelev1">&gt; nodist_include_hwloc_autogen_HEADERS = hwloc/autogen/config.h
</span><br>
But somehow that didn't do the job.
<br>
<p>Removing that config.h is sufficient to resolve my problem building on 
<br>
FreeBSD-7.2, and is very likely the SOLE hwloc-related problem 
<br>
responsible for my failures on non-Linux systems (it is now 2am and I 
<br>
have no patience to retry the other systems until I see rc2).
<br>
<p>-Paul
<br>
<p><p><p>On 12/13/2011 8:36 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; In the usual place:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/software/ompi/v1.5/">http://www.open-mpi.org/software/ompi/v1.5/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please test!  I would really like to get this out by the end of the week.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Two issues *might* still be considered for this release:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Putting back the openib minor fixes
</span><br>
<span class="quotelev1">&gt;      <a href="https://svn.open-mpi.org/trac/ompi/ticket/2930">https://svn.open-mpi.org/trac/ompi/ticket/2930</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Making the &quot;your SM file is on an NFS!&quot; warning disable-able
</span><br>
<span class="quotelev1">&gt;      (this is the v1.4 ticket)
</span><br>
<span class="quotelev1">&gt;      <a href="https://svn.open-mpi.org/trac/ompi/ticket/2937">https://svn.open-mpi.org/trac/ompi/ticket/2937</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; They would both need to be fixed in the *immediate future* to be considered.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10107.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 is out"</a>
<li><strong>Previous message:</strong> <a href="10105.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: Solaris 11 hwloc link failure"</a>
<li><strong>In reply to:</strong> <a href="10089.php">Jeff Squyres: "[OMPI devel] 1.5.5rc1 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10107.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 is out"</a>
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
