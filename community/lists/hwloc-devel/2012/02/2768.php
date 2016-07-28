<?
$subject_val = "[hwloc-devel] Status of &quot;Paul's bugs&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 16:46:14 2012" -->
<!-- isoreceived="20120201214614" -->
<!-- sent="Wed, 01 Feb 2012 13:45:57 -0800" -->
<!-- isosent="20120201214557" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[hwloc-devel] Status of &amp;quot;Paul's bugs&amp;quot;" -->
<!-- id="4F29B295.4080609_at_lbl.gov" -->
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
<strong>Subject:</strong> [hwloc-devel] Status of &quot;Paul's bugs&quot;<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 16:45:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2769.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2767.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 install failures on Solaris-10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2780.php">Paul H. Hargrove: "Re: [hwloc-devel] Status of &quot;Paul's bugs&quot;"</a>
<li><strong>Reply:</strong> <a href="2780.php">Paul H. Hargrove: "Re: [hwloc-devel] Status of &quot;Paul's bugs&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A status report as of 13:30 US Pacific time.
<br>
Note that all the bugs I reported last night appeared in BOTH 1.3.1 and 
<br>
1.4 (despite only 1.3.1 in the initial subject lines of each thread).
<br>
<p>With the tarball which Jeff Squyres provided off-list I've verified that 
<br>
the bugs in the following threads appear FIXED.
<br>
I have no clue which branches the fixes have been applied to.
<br>
<p>+ hwloc-1.3.1 build failure w/ Solaris Studio compilers
<br>
<a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2728.php">http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2728.php</a>
<br>
Brice added a required  &quot;-lm&quot; in the proper place
<br>
<p>+ hwloc-1.3.1 install failure w/ older GNU sed
<br>
<a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2730.php">http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2730.php</a>
<br>
Brice rewrote the install hook not to use sed's &quot;-i&quot; option
<br>
<p>+ hwloc-1.3.1 install failures on Solaris-10
<br>
<a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2731.php">http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2731.php</a>
<br>
Brice and Jeff rewrote docs/Makefile.am to avoid over-length command lines.
<br>
<p>The following two remain, as far as I know, UNRESOLVED:
<br>
<p>+ hwloc-1.3.1 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss
<br>
<a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2729.php">http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2729.php</a>
<br>
For this compiler the ffs() implementation is missing from libgcc 
<br>
(<a href="https://forums.oracle.com/forums/thread.jspa?threadID=1997328">https://forums.oracle.com/forums/thread.jspa?threadID=1997328</a>)
<br>
Hwloc could either:
<br>
1) Detect this compiler at configure time and modify misc.h to pretend 
<br>
ffs() is missing
<br>
2) Document this compiler as broken/unsupported
<br>
<p>+ hwloc-1.3.1 assertion failures on Linux/POWER7
<br>
<a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2733.php">http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2733.php</a>
<br>
Brice has requested more info off-list, which I have provided.
<br>
There are actually 2 issues in that thread:
<br>
1) XLC appears to be doing bad things w/ the set_affinity code (also 
<br>
seen by Chris Samuel).
<br>
2) Assertion failures, possibly related to IBM's virtualization, and 
<br>
present w/ both gcc and xlc.
<br>
<p>The following two I am NOT expecting fixes for:
<br>
<p>+ hwloc-1.3.1 libtool broken on Solaris10-x86
<br>
<a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2732.php">http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2732.php</a>
<br>
Turned out to be a false-alarm.
<br>
libtool does the right thing when the error occurs, but doesn't suppress 
<br>
the error message
<br>
<p>+ hwloc-1.3.1 and 1.4 failures on MIPS64/qemu
<br>
<a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2747.php">http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2747.php</a>
<br>
Looks very likely to be a compiler bug, or possibly a qemu bug.
<br>
I'll provide more info IF I can, but this is very low on my list of 
<br>
priorities.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2768/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2769.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2767.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 install failures on Solaris-10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2780.php">Paul H. Hargrove: "Re: [hwloc-devel] Status of &quot;Paul's bugs&quot;"</a>
<li><strong>Reply:</strong> <a href="2780.php">Paul H. Hargrove: "Re: [hwloc-devel] Status of &quot;Paul's bugs&quot;"</a>
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
