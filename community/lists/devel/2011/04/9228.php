<?
$subject_val = "Re: [OMPI devel] 1.4.4 .so version numbers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 29 16:09:56 2011" -->
<!-- isoreceived="20110429200956" -->
<!-- sent="Fri, 29 Apr 2011 13:09:23 -0700" -->
<!-- isosent="20110429200923" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.4 .so version numbers" -->
<!-- id="4DBB1AF3.9080401_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DF613128-D390-4CF5-978C-432269CBCAEA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.4.4 .so version numbers<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-29 16:09:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9229.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4 .so version numbers"</a>
<li><strong>Previous message:</strong> <a href="9227.php">Jeff Squyres: "[OMPI devel] 1.4.4 .so version numbers"</a>
<li><strong>In reply to:</strong> <a href="9227.php">Jeff Squyres: "[OMPI devel] 1.4.4 .so version numbers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9229.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4 .so version numbers"</a>
<li><strong>Reply:</strong> <a href="9229.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4 .so version numbers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/29/2011 12:56 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; lib_mpif90.so had changes for the upcoming 1.4.4 release that requires a .so version bump.  Specifically, some MPI F90 bindings used to have some parameters of type INTEGER.  In 1.4.4, those parameter types were corrected to be INTEGER(KIND=MPI_ADDRESS_KIND).
</span><br>
<p>You are thinking of the so-versions problem as if the change above is an 
<br>
ABI change.  However, one could claim at a stretch that the entire 1.3.x 
<br>
and 1.4.x series implements the ABI present in the 
<br>
specification/documentation and in 1.4.4; and thus that the older 
<br>
versions contain a BUGGY implementation of the always-intended 
<br>
INTEGER(KIND=MPI_ADDRESS_KIND) ABI for the &quot;large&quot; F90  bindings.
<br>
<p>Under that reasoning I would endorse:
<br>
<p><span class="quotelev1">&gt; 2. Go with 0:2:0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     CONSEQUENCE: This is somewhat of a lie; we're saying we haven't modified the interface.  But we did.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     IMPACT: Same as above.  A binary using the old/wrong interfaces (e.g., compiled against 1.4.3) could still run-time link against OMPI 1.4.4 and possibly segv because the parameters are different sizes.
</span><br>
<p><p>I am unclear on how a binary linked to &lt;=1.4.3 that was truncating the 
<br>
arguments would have worked in the first place.
<br>
<p>-Paul
<br>
<p><p><p><pre>
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
<li><strong>Next message:</strong> <a href="9229.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4 .so version numbers"</a>
<li><strong>Previous message:</strong> <a href="9227.php">Jeff Squyres: "[OMPI devel] 1.4.4 .so version numbers"</a>
<li><strong>In reply to:</strong> <a href="9227.php">Jeff Squyres: "[OMPI devel] 1.4.4 .so version numbers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9229.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4 .so version numbers"</a>
<li><strong>Reply:</strong> <a href="9229.php">Jeff Squyres: "Re: [OMPI devel] 1.4.4 .so version numbers"</a>
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
