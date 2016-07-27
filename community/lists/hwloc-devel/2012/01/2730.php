<?
$subject_val = "[hwloc-devel] hwloc-1.3.1 install failure w/ older GNU sed";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 20:20:17 2012" -->
<!-- isoreceived="20120201012017" -->
<!-- sent="Tue, 31 Jan 2012 17:19:56 -0800" -->
<!-- isosent="20120201011956" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc-1.3.1 install failure w/ older GNU sed" -->
<!-- id="4F28933C.3060408_at_lbl.gov" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc-1.3.1 install failure w/ older GNU sed<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 20:19:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2731.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 install failures on Solaris-10"</a>
<li><strong>Previous message:</strong> <a href="2729.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2739.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 install failure w/ older GNU sed"</a>
<li><strong>Reply:</strong> <a href="2739.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 install failure w/ older GNU sed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On my old Red Hat 8 box, I see the following failure from &quot;make install&quot; 
<br>
of hwloc-1.3.1:
<br>
<p><span class="quotelev1">&gt; make[5]: Entering directory 
</span><br>
<span class="quotelev1">&gt; `/home/pcp1/phargrov/OMPI/hwloc-1.3.1-linux-x86-32-elan/BLD/tests/linux'
</span><br>
<span class="quotelev1">&gt; /bin/sed -e 's/abs_top_builddir\/utils/bindir/' -e 
</span><br>
<span class="quotelev1">&gt; '/abs_top_builddir/d' -i /home/pcp1/phargrov/OMPI/hwloc-1.3
</span><br>
<span class="quotelev1">&gt; .1-linux-x86-32-elan/INST/bin/hwloc-gather-topology
</span><br>
<span class="quotelev1">&gt; /bin/sed: invalid option -- i
</span><br>
<span class="quotelev1">&gt; Usage: /bin/sed [OPTION]... {script-only-if-no-other-script} 
</span><br>
<span class="quotelev1">&gt; [input-file]...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   -n, --quiet, --silent
</span><br>
<span class="quotelev1">&gt;                  suppress automatic printing of pattern space
</span><br>
<span class="quotelev1">&gt;   -e script, --expression=script
</span><br>
<span class="quotelev1">&gt;                  add the script to the commands to be executed
</span><br>
<span class="quotelev1">&gt;   -f script-file, --file=script-file
</span><br>
<span class="quotelev1">&gt;                  add the contents of script-file to the commands to be 
</span><br>
<span class="quotelev1">&gt; executed
</span><br>
<span class="quotelev1">&gt;       --help     display this help and exit
</span><br>
<span class="quotelev1">&gt;   -V, --version  output version information and exit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If no -e, --expression, -f, or --file option is given, then the first
</span><br>
<span class="quotelev1">&gt; non-option argument is taken as the sed script to interpret.  All
</span><br>
<span class="quotelev1">&gt; remaining arguments are names of input files; if no input files are
</span><br>
<span class="quotelev1">&gt; specified, then the standard input is read.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; E-mail bug reports to: bug-gnu-utils_at_[hidden] .
</span><br>
<span class="quotelev1">&gt; Be sure to include the word ``sed'' somewhere in the ``Subject:'' field.
</span><br>
<p>&nbsp;From that usage output, I suspect hwloc shouldn't be using &quot;-i&quot;.
<br>
<p>Version on the failing system is &quot;GNU sed version 3.02&quot;.
<br>
So, this portion of the Makefile should be rewritten not to use the -i 
<br>
(in-place) option which appears specific to GNU sed-4.x
<br>
<p>-Paul
<br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="2731.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 install failures on Solaris-10"</a>
<li><strong>Previous message:</strong> <a href="2729.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2739.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 install failure w/ older GNU sed"</a>
<li><strong>Reply:</strong> <a href="2739.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 install failure w/ older GNU sed"</a>
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
