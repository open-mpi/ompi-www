<?
$subject_val = "[OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 16 19:39:32 2011" -->
<!-- isoreceived="20111217003932" -->
<!-- sent="Fri, 16 Dec 2011 16:39:09 -0800" -->
<!-- isosent="20111217003909" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?" -->
<!-- id="4EEBE4AD.8080402_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-16 19:39:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10164.php">Paul H. Hargrove: "[OMPI devel] openmpi-1.5.5rc1 (re)tested on non-linux platforms"</a>
<li><strong>Previous message:</strong> <a href="10162.php">Jeff Squyres: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10168.php">Jeff Squyres: "Re: [OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?"</a>
<li><strong>Reply:</strong> <a href="10168.php">Jeff Squyres: "Re: [OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've noticed that on, for instance, FreeBSD I must compile 
<br>
openmpi-1.5.5rc1 with &quot;gmake&quot; rather than &quot;make&quot;.
<br>
I didn't see &quot;GNU Make&quot; listed as a build dependency in the README, and 
<br>
so I wonder if this was known.
<br>
<p>The failure mode seen with Berkeley Make in place of GNU Make is 
<br>
somewhat non-intuitive:
<br>
<span class="quotelev1">&gt; Making all in asm
</span><br>
<span class="quotelev1">&gt;   CC     asm.lo
</span><br>
<span class="quotelev1">&gt; /usr/bin/perl 
</span><br>
<span class="quotelev1">&gt; '/home/phargrov/OMPI//openmpi-1.5.5rc1/opal/asm/generate-asm.pl' 
</span><br>
<span class="quotelev1">&gt; 'AMD64' 'default-.text-.globl-:--.L-_at_-1-0-1-1-0' 
</span><br>
<span class="quotelev1">&gt; '/home/phargrov/OMPI//openmpi-1.5.5rc1/opal/asm/base' 
</span><br>
<span class="quotelev1">&gt; '../../opal/asm/generated/atomic-amd64-linux-nongas.s'
</span><br>
<span class="quotelev1">&gt; Use of uninitialized value $1 in concatenation (.) or string at 
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI//openmpi-1.5.5rc1/opal/asm/generate-asm.pl line 16.
</span><br>
<span class="quotelev1">&gt; Could not open ../../opal/asm/generated/atomic-amd64-linux-nongas.s:
</span><br>
<span class="quotelev1">&gt; *** Error code 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
And I don't have any clue what the relation may be between that error 
<br>
and the version of make.
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
<li><strong>Next message:</strong> <a href="10164.php">Paul H. Hargrove: "[OMPI devel] openmpi-1.5.5rc1 (re)tested on non-linux platforms"</a>
<li><strong>Previous message:</strong> <a href="10162.php">Jeff Squyres: "Re: [OMPI devel] MPIR attach from padb broken (1.5.5rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10168.php">Jeff Squyres: "Re: [OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?"</a>
<li><strong>Reply:</strong> <a href="10168.php">Jeff Squyres: "Re: [OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?"</a>
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
