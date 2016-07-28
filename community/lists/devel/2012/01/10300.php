<?
$subject_val = "[OMPI devel] ROMIO build broken in 1.5.5rc1 [SOLVED]";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 18:18:11 2012" -->
<!-- isoreceived="20120131231811" -->
<!-- sent="Tue, 31 Jan 2012 15:17:50 -0800" -->
<!-- isosent="20120131231750" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] ROMIO build broken in 1.5.5rc1 [SOLVED]" -->
<!-- id="4F28769E.7010302_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F2862F0.3010509_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] ROMIO build broken in 1.5.5rc1 [SOLVED]<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 18:17:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10301.php">Jeff Squyres: "Re: [OMPI devel] ROMIO build broken in 1.5.5rc1 [SOLVED]"</a>
<li><strong>Previous message:</strong> <a href="10299.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="10298.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10301.php">Jeff Squyres: "Re: [OMPI devel] ROMIO build broken in 1.5.5rc1 [SOLVED]"</a>
<li><strong>Reply:</strong> <a href="10301.php">Jeff Squyres: "Re: [OMPI devel] ROMIO build broken in 1.5.5rc1 [SOLVED]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1/31/2012 1:53 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; I can supply details if anybody want to work on this ahead of 
</span><br>
<span class="quotelev1">&gt; 1.5.5rc2, but the short report is:
</span><br>
<span class="quotelev1">&gt; gmake[3]: Entering directory 
</span><br>
<span class="quotelev1">&gt; `/home/phargrov/OMPI/openmpi-1.5.5rc1-openbsd5-amd64/BLD/ompi/mca/io/romio/romio'
</span><br>
<span class="quotelev1">&gt; Making all in include
</span><br>
<span class="quotelev1">&gt; make: don't know how to make w. Stop in 
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.5.5rc1-openbsd5-amd64/BLD/ompi/mca/io/romio/romio/include.
</span><br>
<p>I took a quick look and discovered that all the generated Makefile's 
<br>
under ompi/mca/io/romio/romio contain explicit MAKE=make (twice per 
<br>
Makefile, actually).  This leads to the &quot;make: don't know how to make w. 
<br>
Stop&quot; message above when GNU make (which I was using due to the 
<br>
asm-generation issue) recursively invokes the romio build which then 
<br>
switches over to Berkeley Make.  I am guessing that gmake has left some 
<br>
droppings in $(MAKE_FLAGS) or similar which is causing Berkeley Make to 
<br>
think it should build the target &quot;w&quot;.
<br>
<p>This could be classified as &quot;pilot error&quot; since I didn't inform ROMIO at 
<br>
configure time that I was using gmake.
<br>
<p>The solutions include:
<br>
<p>1) If one want to build with a non-default make, then add &quot;MAKE=gmake&quot; 
<br>
(or similar) to the configure command line so ROMIO encodes the proper 
<br>
value in the generated Makefile's.  This should be documented in the 
<br>
README with the other configure settings.
<br>
<p>2)  Building w/ Berkeley Make (once the GNU Make dependencies have been 
<br>
fixed).
<br>
For users who have not aliased or otherwise displaced make in favor of 
<br>
gmake, that should be the default anyway.
<br>
<p>3) Build with &quot;gmake MAKE=gmake&quot; since command-line values override the 
<br>
one in the Makefiles.
<br>
<p>I noticed that ompi/mca/io/romio/romio/configure.in already contains 
<br>
many attempts to prevent setting MAKE (all marked with &quot;Open MPI:&quot; 
<br>
comments).  So, it appears you have already tried (but apparently 
<br>
failed) to address the one-should-not-set-MAKE-in-Makefile issue.
<br>
<p>In the end, documenting #1 is all that is really required and is 
<br>
probably much easier than fixing ROMIO.
<br>
<p>-Paul
<br>
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
<li><strong>Next message:</strong> <a href="10301.php">Jeff Squyres: "Re: [OMPI devel] ROMIO build broken in 1.5.5rc1 [SOLVED]"</a>
<li><strong>Previous message:</strong> <a href="10299.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="10298.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10301.php">Jeff Squyres: "Re: [OMPI devel] ROMIO build broken in 1.5.5rc1 [SOLVED]"</a>
<li><strong>Reply:</strong> <a href="10301.php">Jeff Squyres: "Re: [OMPI devel] ROMIO build broken in 1.5.5rc1 [SOLVED]"</a>
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
