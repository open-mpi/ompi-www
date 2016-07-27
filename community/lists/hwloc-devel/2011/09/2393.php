<?
$subject_val = "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  6 11:56:45 2011" -->
<!-- isoreceived="20110906155645" -->
<!-- sent="Tue, 06 Sep 2011 10:56:26 -0500" -->
<!-- isosent="20110906155626" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC" -->
<!-- id="4E6642AA.6000700_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0BB6C9E9-28C3-4561-B43D-17E18E8B1D3E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-06 11:56:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2394.php">Igor Galić: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Previous message:</strong> <a href="2392.php">Igor Gali&#196;&#135;: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>In reply to:</strong> <a href="2385.php">Jeff Squyres: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2384.php">Samuel Thibault: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI, in MPICH2 we use a custom macro to check for compiler warnings and 
<br>
treat them as errors to get around such problems.
<br>
<p><a href="http://trac.mcs.anl.gov/projects/mpich2/browser/mpich2/trunk/confdb/aclocal_cc.m4?rev=8279#L11">http://trac.mcs.anl.gov/projects/mpich2/browser/mpich2/trunk/confdb/aclocal_cc.m4?rev=8279#L11</a>
<br>
<p>Ugly, but works.
<br>
<p>&nbsp;&nbsp;-- Pavan
<br>
<p>On 09/06/2011 09:13 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Sep 6, 2011, at 8:49 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ah, it looks like we got around this in OMPI by explicitly checking to see if the compiler vendor is Sun.  Terrible!  Let me see about back-porting these changes from OMPI...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did some internal cleanup on that configury test and committed it to the trunk.  Could you try it and see if it works for you?  (I don't have a Sun compiler to test with)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="https://svn.open-mpi.org/trac/hwloc/changeset/3773">https://svn.open-mpi.org/trac/hwloc/changeset/3773</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you don't want to build from SVN (which requires fairly modern autotools versions), you can just wait for the nightly tarball tonight.  It's generated around 9pm US Eastern time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/software/hwloc/nightly/trunk/">http://www.open-mpi.org/software/hwloc/nightly/trunk/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2394.php">Igor Galić: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Previous message:</strong> <a href="2392.php">Igor Gali&#196;&#135;: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>In reply to:</strong> <a href="2385.php">Jeff Squyres: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2384.php">Samuel Thibault: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
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
