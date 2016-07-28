<?
$subject_val = "[OMPI devel] More MIPS asm patches";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 01:30:43 2012" -->
<!-- isoreceived="20120215063043" -->
<!-- sent="Tue, 14 Feb 2012 22:30:27 -0800" -->
<!-- isosent="20120215063027" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] More MIPS asm patches" -->
<!-- id="4F3B5103.7040504_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F3B4CF4.4080100_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] More MIPS asm patches<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 01:30:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10418.php">Paul Hargrove: "[OMPI devel] trunk build failure on Altix"</a>
<li><strong>Previous message:</strong> <a href="10416.php">Paul H. Hargrove: "[OMPI devel] Fixes for MIPS assembly [w/ PATCHES]"</a>
<li><strong>In reply to:</strong> <a href="10416.php">Paul H. Hargrove: "[OMPI devel] Fixes for MIPS assembly [w/ PATCHES]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/14/2012 10:13 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; On the linux/mips64el platform I also tried the PathScale 3.3a 
</span><br>
<span class="quotelev1">&gt; compilers on both branches.
</span><br>
<span class="quotelev1">&gt; On both branches the atomic_*_noinline tests all PASS, which validates 
</span><br>
<span class="quotelev1">&gt; these patches.
</span><br>
<span class="quotelev1">&gt; On trunk all the tests in test/asm are PASSing.
</span><br>
<span class="quotelev1">&gt; However, the versions NOT suffixed with _noinline are FAILing on the 
</span><br>
<span class="quotelev1">&gt; 1.5 branch.
</span><br>
<span class="quotelev1">&gt; Since those failures DO NOT use the files touched by these patches, 
</span><br>
<span class="quotelev1">&gt; they are irrelevant. 
</span><br>
<p>Oops - I was looking at the wrong output when I stated pathcc/trunk was 
<br>
PASSing all tests.
<br>
The *inline* atomics tests SIGBUS w/ the pathcc compilers on BOTH branches.
<br>
<p>I know from previous encounters with pathcc on MIPS that the problem is 
<br>
due to the explict use of &quot;$1&quot; (aka &quot;AT&quot;, the &quot;Assembler Temporary&quot; 
<br>
register).  Unlike gcc, pathcc schedules this as a normal register.  
<br>
Indeed the attached patch (which should apply cleanly to both branches) 
<br>
resolves the problem simply by conditionally adding &quot;at&quot; to the clobbers 
<br>
for the inline asm.
<br>
<p>This is independent of the patches in my previous posting.
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
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10417/mips-asm-pathcc.patch00">mips-asm-pathcc.patch00</a>
</ul>
<!-- attachment="mips-asm-pathcc.patch00" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10418.php">Paul Hargrove: "[OMPI devel] trunk build failure on Altix"</a>
<li><strong>Previous message:</strong> <a href="10416.php">Paul H. Hargrove: "[OMPI devel] Fixes for MIPS assembly [w/ PATCHES]"</a>
<li><strong>In reply to:</strong> <a href="10416.php">Paul H. Hargrove: "[OMPI devel] Fixes for MIPS assembly [w/ PATCHES]"</a>
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
