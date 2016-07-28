<?
$subject_val = "Re: [OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 20 17:48:23 2011" -->
<!-- isoreceived="20111220224823" -->
<!-- sent="Tue, 20 Dec 2011 14:47:57 -0800" -->
<!-- isosent="20111220224757" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?" -->
<!-- id="4EF1109D.9010904_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D358271-7ECD-4ECC-952E-789842D615C8_at_cisco.com" -->
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
<strong>Date:</strong> 2011-12-20 17:47:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10170.php">Jeff Squyres: "[OMPI devel] v1.5 status / temporary delegation of RM authority"</a>
<li><strong>Previous message:</strong> <a href="10168.php">Jeff Squyres: "Re: [OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?"</a>
<li><strong>In reply to:</strong> <a href="10168.php">Jeff Squyres: "Re: [OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10175.php">Paul H. Hargrove: "Re: [OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?"</a>
<li><strong>Reply:</strong> <a href="10175.php">Paul H. Hargrove: "Re: [OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/20/2011 1:51 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Dec 16, 2011, at 7:39 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've noticed that on, for instance, FreeBSD I must compile openmpi-1.5.5rc1 with &quot;gmake&quot; rather than &quot;make&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; I didn't see &quot;GNU Make&quot; listed as a build dependency in the README, and so I wonder if this was known.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The failure mode seen with Berkeley Make in place of GNU Make is somewhat non-intuitive:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making all in asm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   CC     asm.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/bin/perl '/home/phargrov/OMPI//openmpi-1.5.5rc1/opal/asm/generate-asm.pl' 'AMD64' 'default-.text-.globl-:--.L-_at_-1-0-1-1-0' '/home/phargrov/OMPI//openmpi-1.5.5rc1/opal/asm/base' '../../opal/asm/generated/atomic-amd64-linux-nongas.s'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Use of uninitialized value $1 in concatenation (.) or string at /home/phargrov/OMPI//openmpi-1.5.5rc1/opal/asm/generate-asm.pl line 16.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could not open ../../opal/asm/generated/atomic-amd64-linux-nongas.s:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** Error code 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And I don't have any clue what the relation may be between that error and the version of make.
</span><br>
<span class="quotelev1">&gt; No, this is not desirable.  Gah.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you look in opal/asm/base/Maekfile and see what the values of OPAL_ASSEMBLY_ARCH and OPAL_ASSEMBLY_FORMAT are?  Specifically: are they non-empty on these two cases?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ask because the only place generate-asm.pl is invoked is via a Makefile rule:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	$(PERL) '$(top_srcdir)/opal/asm/generate-asm.pl' '@OPAL_ASSEMBLY_ARCH@' '@OPAL_ASSEMBLY_FORMAT@' '$(top_srcdir)/opal/asm/base' '$(top_builddir)/opal/asm/generated/@OMPI_ASM_FILE@'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $1 should correspond to @OPAL_ASSEMBLY_ARCH@, and it should never be empty.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Since you confirm that the GNU Make requirement was NOT intended, I 
<br>
looks a bit deeper.
<br>
The impatient can skip to the end for my conclusions.
<br>
<p>I assume you wanted opal/asm/Makefile, there is no &quot;base&quot; under opal/asm.
<br>
What I find is
<br>
<span class="quotelev1">&gt; OPAL_ASSEMBLY_ARCH = AMD64
</span><br>
<span class="quotelev1">&gt; OPAL_ASSEMBLY_FORMAT = default-.text-.globl-:--.L-_at_-1-0-1-1-0
</span><br>
Which I imagine  is correct because this is generated by configure long 
<br>
before I choose &quot;make&quot; vs &quot;gmake&quot;.
<br>
Additionally, the output when running &quot;make&quot; looks proper with respect 
<br>
to those values:
<br>
<span class="quotelev1">&gt; $ make
</span><br>
<span class="quotelev1">&gt; Making all in config
</span><br>
<span class="quotelev1">&gt; Making all in contrib
</span><br>
<span class="quotelev1">&gt; Making all in opal
</span><br>
<span class="quotelev1">&gt; Making all in include
</span><br>
<span class="quotelev1">&gt; make  all-am
</span><br>
<span class="quotelev1">&gt; Making all in libltdl
</span><br>
<span class="quotelev1">&gt; make  all-am
</span><br>
<span class="quotelev1">&gt; Making all in asm
</span><br>
<span class="quotelev1">&gt; /usr/bin/perl 
</span><br>
<span class="quotelev1">&gt; '/home/phargrov/OMPI/openmpi-1.5.5rc1//openmpi-1.5.5rc1/opal/asm/generate-asm.pl' 
</span><br>
<span class="quotelev1">&gt; 'AMD64' 'default-.text-.globl-:--.L-_at_-1-0-1-1-0' 
</span><br>
<span class="quotelev1">&gt; '/home/phargrov/OMPI/openmpi-1.5.5rc1//openmpi-1.5.5rc1/opal/asm/base' 
</span><br>
<span class="quotelev1">&gt; '../../opal/asm/generated/atomic-amd64-linux-nongas.s'
</span><br>
<span class="quotelev1">&gt; Use of uninitialized value $1 in concatenation (.) or string at 
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.5.5rc1//openmpi-1.5.5rc1/opal/asm/generate-asm.pl 
</span><br>
<span class="quotelev1">&gt; line 16.
</span><br>
<span class="quotelev1">&gt; Could not open ../../opal/asm/generated/atomic-amd64-linux-nongas.s:
</span><br>
<span class="quotelev1">&gt; *** Error code 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Stop in /usr/home/phargrov/OMPI/openmpi-1.5.5rc1/BLD/opal/asm.
</span><br>
<span class="quotelev1">&gt; *** Error code 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Stop in /usr/home/phargrov/OMPI/openmpi-1.5.5rc1/BLD/opal.
</span><br>
<span class="quotelev1">&gt; *** Error code 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Stop in /usr/home/phargrov/OMPI/openmpi-1.5.5rc1/BLD.
</span><br>
<p>However, this shows ANOTHER issue because that &quot;make&quot; above was run in a 
<br>
COMPLETED build tree in which &quot;gmake&quot; does NOT attempt to rebuild any files!
<br>
<p><p>Looking now at the perl code:
<br>
<span class="quotelev1">&gt; $ cat -n generate-asm.pl | head -20
</span><br>
<span class="quotelev1">&gt;      1  #!/usr/bin/perl -w
</span><br>
<span class="quotelev1">&gt;      2
</span><br>
<span class="quotelev1">&gt;      3
</span><br>
<span class="quotelev1">&gt;      4  my $asmarch = shift;
</span><br>
<span class="quotelev1">&gt;      5  my $asmformat = shift;
</span><br>
<span class="quotelev1">&gt;      6  my $basedir = shift;
</span><br>
<span class="quotelev1">&gt;      7  my $output = shift;
</span><br>
<span class="quotelev1">&gt;      8
</span><br>
<span class="quotelev1">&gt;      9  if ( ! $asmarch) {
</span><br>
<span class="quotelev1">&gt;     10      print &quot;usage: generate-asm.pl [ASMARCH] [ASMFORMAT] 
</span><br>
<span class="quotelev1">&gt; [BASEDIR] [OUTPUT NAME]\n&quot;;
</span><br>
<span class="quotelev1">&gt;     11      exit(1);
</span><br>
<span class="quotelev1">&gt;     12  }
</span><br>
<span class="quotelev1">&gt;     13
</span><br>
<span class="quotelev1">&gt;     14  open(INPUT, &quot;$basedir/$asmarch.asm&quot;) ||
</span><br>
<span class="quotelev1">&gt;     15      die &quot;Could not open $basedir/$asmarch.asm: $!\n&quot;;
</span><br>
<span class="quotelev1">&gt;     16  open(OUTPUT, &quot;&gt;$output&quot;) || die &quot;Could not open $output: $1\n&quot;;
</span><br>
<span class="quotelev1">&gt;     17
</span><br>
<span class="quotelev1">&gt;     18  $CONFIG = &quot;default&quot;;
</span><br>
<span class="quotelev1">&gt;     19  $TEXT = &quot;&quot;;
</span><br>
<span class="quotelev1">&gt;     20  $GLOBAL = &quot;&quot;;
</span><br>
<p>Jeff seems to be think shell rather than perl in thinking $1&quot; is the 
<br>
first arg, but nevermind that.
<br>
Since &quot;$1&quot; should be the result of a prior pattern match, I cannot see 
<br>
how line 16 could be correct.
<br>
I am pretty certain that line 16 should have &quot;$!&quot; rather than &quot;$1&quot;.
<br>
<p>With that 1-line change to the perl script in place the &quot;real&quot; error is:
<br>
<span class="quotelev1">&gt; $ make
</span><br>
<span class="quotelev1">&gt; Making all in config
</span><br>
<span class="quotelev1">&gt; Making all in contrib
</span><br>
<span class="quotelev1">&gt; Making all in opal
</span><br>
<span class="quotelev1">&gt; Making all in include
</span><br>
<span class="quotelev1">&gt; make  all-am
</span><br>
<span class="quotelev1">&gt; Making all in libltdl
</span><br>
<span class="quotelev1">&gt; make  all-am
</span><br>
<span class="quotelev1">&gt; Making all in asm
</span><br>
<span class="quotelev1">&gt; /usr/bin/perl 
</span><br>
<span class="quotelev1">&gt; '/home/phargrov/OMPI/openmpi-1.5.5rc1//openmpi-1.5.5rc1/opal/asm/generate-asm.pl' 
</span><br>
<span class="quotelev1">&gt; 'AMD64' 'default-.text-.globl-:--.L-_at_-1-0-1-1-0' 
</span><br>
<span class="quotelev1">&gt; '/home/phargrov/OMPI/openmpi-1.5.5rc1//openmpi-1.5.5rc1/opal/asm/base' 
</span><br>
<span class="quotelev1">&gt; '../../opal/asm/generated/atomic-amd64-linux-nongas.s'
</span><br>
<span class="quotelev1">&gt; Could not open ../../opal/asm/generated/atomic-amd64-linux-nongas.s: 
</span><br>
<span class="quotelev1">&gt; No such file or directory
</span><br>
<span class="quotelev1">&gt; *** Error code 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Stop in /usr/home/phargrov/OMPI/openmpi-1.5.5rc1/BLD/opal/asm.
</span><br>
<span class="quotelev1">&gt; *** Error code 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Stop in /usr/home/phargrov/OMPI/openmpi-1.5.5rc1/BLD/opal.
</span><br>
<span class="quotelev1">&gt; *** Error code 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Stop in /usr/home/phargrov/OMPI/openmpi-1.5.5rc1/BLD.
</span><br>
<p>That seems correct, since there is no 'opal/asm/generated' directory 
<br>
under the $(top_builddir) in this VPATH build.
<br>
This now points back the the &quot;other&quot; observation: that &quot;make&quot; tries to 
<br>
rebuild something &quot;gmake&quot; does not.
<br>
<p>It appears to me now that w/ &quot;gmake&quot; in a VPATH build the rule to 
<br>
generate target &quot;generated/@OMPI_ASM_FILE@&quot; doesn't run because GNU Make 
<br>
apparently sees the existing &quot;$(srcdir)/generated/@OMPI_ASM_FILE@&quot; which 
<br>
Berkeley Make apparently does not.
<br>
<p>So, conclusions:
<br>
1) On line 16 of generate-asm.pl, &quot;$1&quot; is a typo for &quot;$!&quot;, but is NOT 
<br>
the true problem.
<br>
2) Somebody who knows automake is going to have to rework the 
<br>
&quot;generated/@OMPI_ASM_FILE@&quot; target in opal/asm/Makefile.am to work 
<br>
correctly with a VPATH build and Berkeley Make.
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
<li><strong>Next message:</strong> <a href="10170.php">Jeff Squyres: "[OMPI devel] v1.5 status / temporary delegation of RM authority"</a>
<li><strong>Previous message:</strong> <a href="10168.php">Jeff Squyres: "Re: [OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?"</a>
<li><strong>In reply to:</strong> <a href="10168.php">Jeff Squyres: "Re: [OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10175.php">Paul H. Hargrove: "Re: [OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?"</a>
<li><strong>Reply:</strong> <a href="10175.php">Paul H. Hargrove: "Re: [OMPI devel] GNU Make required for OMPI 1.5.5rc1: known/intended?"</a>
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
