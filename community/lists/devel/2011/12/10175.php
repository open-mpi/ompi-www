<?
$subject_val = "Re: [OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 20 18:35:57 2011" -->
<!-- isoreceived="20111220233557" -->
<!-- sent="Tue, 20 Dec 2011 15:35:34 -0800" -->
<!-- isosent="20111220233534" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?" -->
<!-- id="4EF11BC6.7050607_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EF1109D.9010904_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-20 18:35:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10176.php">Paul H. Hargrove: "Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen"</a>
<li><strong>Previous message:</strong> <a href="10174.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen"</a>
<li><strong>In reply to:</strong> <a href="10169.php">Paul H. Hargrove: "Re: [OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/20/2011 2:47 PM, Paul H. Hargrove wrote:
<br>
[snip]
<br>
<span class="quotelev1">&gt; So, conclusions:
</span><br>
<span class="quotelev1">&gt; 1) On line 16 of generate-asm.pl, &quot;$1&quot; is a typo for &quot;$!&quot;, but is NOT 
</span><br>
<span class="quotelev1">&gt; the true problem.
</span><br>
<span class="quotelev1">&gt; 2) Somebody who knows automake is going to have to rework the 
</span><br>
<span class="quotelev1">&gt; &quot;generated/@OMPI_ASM_FILE@&quot; target in opal/asm/Makefile.am to work 
</span><br>
<span class="quotelev1">&gt; correctly with a VPATH build and Berkeley Make.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul 
</span><br>
<p>I confirmed in the respective documentation that GNU Make applies VPATH 
<br>
searches to BOTH targets and prerequisites, while Berkeley Make only 
<br>
mentions prerequisites.  So, the  &quot;generated/@OMPI_ASM_FILE@&quot; target in 
<br>
opal/asm/Makefile.am is non-portable.
<br>
<p>I think the following is a portable way to deal with this, but cannot 
<br>
test because autogen.sh results in useless garbage for me:
<br>
--- openmpi-1.5.5rc1/opal/asm/Makefile.am.orig  2011-12-20 
<br>
15:13:10.000000000 -0800
<br>
+++ openmpi-1.5.5rc1/opal/asm/Makefile.am       2011-12-20 
<br>
15:17:22.000000000 -0800
<br>
@@ -28,7 +28,11 @@
<br>
&nbsp;&nbsp;#
<br>
&nbsp;&nbsp;######################################################################
<br>
&nbsp;&nbsp;generated/@OMPI_ASM_FILE@: base/@OPAL_ASSEMBLY_ARCH_at_.asm
<br>
-       $(PERL) '$(top_srcdir)/opal/asm/generate-asm.pl' 
<br>
'@OPAL_ASSEMBLY_ARCH@' '@OPAL_ASSEMBLY_FORMAT@' 
<br>
'$(top_srcdir)/opal/asm/base' 
<br>
'$(top_builddir)/opal/asm/generated/@OMPI_ASM_FILE@'
<br>
+       @ if test ! -f &quot;$(top_srcdir)/opal/asm/$@&quot; ; then \
<br>
+           cmd=&quot;$(PERL) '$(top_srcdir)/opal/asm/generate-asm.pl' 
<br>
'@OPAL_ASSEMBLY_ARCH@' '@OPAL_ASSEMBLY_FORMAT@' 
<br>
'$(top_srcdir)/opal/asm/base' 
<br>
'$(top_builddir)/opal/asm/generated/@OMPI_ASM_FILE@'&quot;
<br>
+           echo &quot;$$cmd&quot; ; \
<br>
+           eval $$cmd ; \
<br>
+       fi
<br>
<p>&nbsp;&nbsp;atomic-asm.S: generated/@OMPI_ASM_FILE@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm -f atomic-asm.S
<br>
<p>(with my apologies for the fact that my cut-and-paste expands the TABs 
<br>
in that patch).
<br>
<p>The idea behind the patch is that GNU Make will not execute the rule at 
<br>
all, which other Make versions will use the 'if test' to short-circuit 
<br>
the command if the target exists in the source directory.
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
<li><strong>Next message:</strong> <a href="10176.php">Paul H. Hargrove: "Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen"</a>
<li><strong>Previous message:</strong> <a href="10174.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen"</a>
<li><strong>In reply to:</strong> <a href="10169.php">Paul H. Hargrove: "Re: [OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?"</a>
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
