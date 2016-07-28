<?
$subject_val = "Re: [hwloc-devel] hwloc-1.4 install failure w/ older GNU sed";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 16:00:16 2012" -->
<!-- isoreceived="20120201210016" -->
<!-- sent="Wed, 1 Feb 2012 16:00:05 -0500" -->
<!-- isosent="20120201210005" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.4 install failure w/ older GNU sed" -->
<!-- id="C4CC4A75-CCF3-4D01-93A4-D78F6807D6FF_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F29A74D.20401_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.4 install failure w/ older GNU sed<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 16:00:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2766.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 build failure w/ Solaris Studio compilers"</a>
<li><strong>Previous message:</strong> <a href="2764.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 install failure w/ older GNU sed"</a>
<li><strong>In reply to:</strong> <a href="2764.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 install failure w/ older GNU sed"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Schweet.  I'll commit to the trunk and back port to 1.3 and 1.4.
<br>
<p>(we had some off-list emails coordinating the testing of this one; Paul is referring to a test tarball that I sent to him)
<br>
<p>On Feb 1, 2012, at 3:57 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; I can confirm this appears to be fixed in the &quot;1.5a1r4236M&quot; tarball which Jeff provided.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 1/31/2012 11:46 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I fixed this one, thanks.
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Le 01/02/2012 03:50, Paul H. Hargrove a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem I described below is ALSO present in hwloc-1.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 1/31/2012 5:19 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On my old Red Hat 8 box, I see the following failure from &quot;make
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; install&quot; of hwloc-1.3.1:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[5]: Entering directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; `/home/pcp1/phargrov/OMPI/hwloc-1.3.1-linux-x86-32-elan/BLD/tests/linux'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /bin/sed -e 's/abs_top_builddir\/utils/bindir/' -e
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; '/abs_top_builddir/d' -i /home/pcp1/phargrov/OMPI/hwloc-1.3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; .1-linux-x86-32-elan/INST/bin/hwloc-gather-topology
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /bin/sed: invalid option -- i
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Usage: /bin/sed [OPTION]... {script-only-if-no-other-script}
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [input-file]...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   -n, --quiet, --silent
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  suppress automatic printing of pattern space
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   -e script, --expression=script
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  add the script to the commands to be executed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   -f script-file, --file=script-file
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  add the contents of script-file to the commands to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; be executed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       --help     display this help and exit
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   -V, --version  output version information and exit
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If no -e, --expression, -f, or --file option is given, then the first
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; non-option argument is taken as the sed script to interpret.  All
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; remaining arguments are names of input files; if no input files are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; specified, then the standard input is read.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; E-mail bug reports to: bug-gnu-utils_at_[hidden] .
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Be sure to include the word ``sed'' somewhere in the ``Subject:''
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; field.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From that usage output, I suspect hwloc shouldn't be using &quot;-i&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Version on the failing system is &quot;GNU sed version 3.02&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, this portion of the Makefile should be rewritten not to use the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -i (in-place) option which appears specific to GNU sed-4.x
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="2766.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 build failure w/ Solaris Studio compilers"</a>
<li><strong>Previous message:</strong> <a href="2764.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 install failure w/ older GNU sed"</a>
<li><strong>In reply to:</strong> <a href="2764.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 install failure w/ older GNU sed"</a>
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
