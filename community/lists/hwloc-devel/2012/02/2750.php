<?
$subject_val = "Re: [hwloc-devel] hwloc-1.4 install failure w/ older GNU sed";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 02:46:26 2012" -->
<!-- isoreceived="20120201074626" -->
<!-- sent="Wed, 01 Feb 2012 08:46:21 +0100" -->
<!-- isosent="20120201074621" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.4 install failure w/ older GNU sed" -->
<!-- id="4F28EDCD.20203_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F28A85B.30708_at_lbl.gov" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 02:46:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2751.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 install failures on Solaris-10"</a>
<li><strong>Previous message:</strong> <a href="2749.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2739.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 install failure w/ older GNU sed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2764.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 install failure w/ older GNU sed"</a>
<li><strong>Reply:</strong> <a href="2764.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 install failure w/ older GNU sed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I fixed this one, thanks.
<br>
Brice
<br>
<p><p><p>Le 01/02/2012 03:50, Paul H. Hargrove a &#233;crit :
<br>
<span class="quotelev1">&gt; The problem I described below is ALSO present in hwloc-1.4
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/31/2012 5:19 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On my old Red Hat 8 box, I see the following failure from &quot;make
</span><br>
<span class="quotelev2">&gt;&gt; install&quot; of hwloc-1.3.1:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[5]: Entering directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/home/pcp1/phargrov/OMPI/hwloc-1.3.1-linux-x86-32-elan/BLD/tests/linux'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/sed -e 's/abs_top_builddir\/utils/bindir/' -e
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '/abs_top_builddir/d' -i /home/pcp1/phargrov/OMPI/hwloc-1.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .1-linux-x86-32-elan/INST/bin/hwloc-gather-topology
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/sed: invalid option -- i
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Usage: /bin/sed [OPTION]... {script-only-if-no-other-script}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [input-file]...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -n, --quiet, --silent
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  suppress automatic printing of pattern space
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -e script, --expression=script
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  add the script to the commands to be executed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -f script-file, --file=script-file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  add the contents of script-file to the commands to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be executed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       --help     display this help and exit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -V, --version  output version information and exit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If no -e, --expression, -f, or --file option is given, then the first
</span><br>
<span class="quotelev3">&gt;&gt;&gt; non-option argument is taken as the sed script to interpret.  All
</span><br>
<span class="quotelev3">&gt;&gt;&gt; remaining arguments are names of input files; if no input files are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specified, then the standard input is read.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; E-mail bug reports to: bug-gnu-utils_at_[hidden] .
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Be sure to include the word ``sed'' somewhere in the ``Subject:''
</span><br>
<span class="quotelev3">&gt;&gt;&gt; field.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From that usage output, I suspect hwloc shouldn't be using &quot;-i&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Version on the failing system is &quot;GNU sed version 3.02&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; So, this portion of the Makefile should be rewritten not to use the
</span><br>
<span class="quotelev2">&gt;&gt; -i (in-place) option which appears specific to GNU sed-4.x
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2751.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 install failures on Solaris-10"</a>
<li><strong>Previous message:</strong> <a href="2749.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2739.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 install failure w/ older GNU sed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2764.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 install failure w/ older GNU sed"</a>
<li><strong>Reply:</strong> <a href="2764.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 install failure w/ older GNU sed"</a>
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
