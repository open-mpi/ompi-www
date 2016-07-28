<?
$subject_val = "Re: [OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 20 16:51:12 2011" -->
<!-- isoreceived="20111220215112" -->
<!-- sent="Tue, 20 Dec 2011 16:51:03 -0500" -->
<!-- isosent="20111220215103" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?" -->
<!-- id="4D358271-7ECD-4ECC-952E-789842D615C8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EEBE4AD.8080402_at_lbl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-20 16:51:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10169.php">Paul H. Hargrove: "Re: [OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?"</a>
<li><strong>Previous message:</strong> <a href="10167.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>In reply to:</strong> <a href="10163.php">Paul H. Hargrove: "[OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10169.php">Paul H. Hargrove: "Re: [OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?"</a>
<li><strong>Reply:</strong> <a href="10169.php">Paul H. Hargrove: "Re: [OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 16, 2011, at 7:39 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; I've noticed that on, for instance, FreeBSD I must compile openmpi-1.5.5rc1 with &quot;gmake&quot; rather than &quot;make&quot;.
</span><br>
<span class="quotelev1">&gt; I didn't see &quot;GNU Make&quot; listed as a build dependency in the README, and so I wonder if this was known.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The failure mode seen with Berkeley Make in place of GNU Make is somewhat non-intuitive:
</span><br>
<span class="quotelev2">&gt;&gt; Making all in asm
</span><br>
<span class="quotelev2">&gt;&gt;  CC     asm.lo
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/perl '/home/phargrov/OMPI//openmpi-1.5.5rc1/opal/asm/generate-asm.pl' 'AMD64' 'default-.text-.globl-:--.L-_at_-1-0-1-1-0' '/home/phargrov/OMPI//openmpi-1.5.5rc1/opal/asm/base' '../../opal/asm/generated/atomic-amd64-linux-nongas.s'
</span><br>
<span class="quotelev2">&gt;&gt; Use of uninitialized value $1 in concatenation (.) or string at /home/phargrov/OMPI//openmpi-1.5.5rc1/opal/asm/generate-asm.pl line 16.
</span><br>
<span class="quotelev2">&gt;&gt; Could not open ../../opal/asm/generated/atomic-amd64-linux-nongas.s:
</span><br>
<span class="quotelev2">&gt;&gt; *** Error code 2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; And I don't have any clue what the relation may be between that error and the version of make.
</span><br>
<p>No, this is not desirable.  Gah.  :-(
<br>
<p>Can you look in opal/asm/base/Maekfile and see what the values of OPAL_ASSEMBLY_ARCH and OPAL_ASSEMBLY_FORMAT are?  Specifically: are they non-empty on these two cases?
<br>
<p>I ask because the only place generate-asm.pl is invoked is via a Makefile rule:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(PERL) '$(top_srcdir)/opal/asm/generate-asm.pl' '@OPAL_ASSEMBLY_ARCH@' '@OPAL_ASSEMBLY_FORMAT@' '$(top_srcdir)/opal/asm/base' '$(top_builddir)/opal/asm/generated/@OMPI_ASM_FILE@'
<br>
<p>$1 should correspond to @OPAL_ASSEMBLY_ARCH@, and it should never be empty.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10169.php">Paul H. Hargrove: "Re: [OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?"</a>
<li><strong>Previous message:</strong> <a href="10167.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>In reply to:</strong> <a href="10163.php">Paul H. Hargrove: "[OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10169.php">Paul H. Hargrove: "Re: [OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?"</a>
<li><strong>Reply:</strong> <a href="10169.php">Paul H. Hargrove: "Re: [OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?"</a>
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
