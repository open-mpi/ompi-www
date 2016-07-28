<?
$subject_val = "[OMPI devel] missing file when running autogen - ALSO in 1.4.5rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 20 19:11:23 2011" -->
<!-- isoreceived="20111221001123" -->
<!-- sent="Tue, 20 Dec 2011 16:10:59 -0800" -->
<!-- isosent="20111221001059" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] missing file when running autogen - ALSO in 1.4.5rc1" -->
<!-- id="4EF12413.8010801_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7994C732-1100-42E4-BDF6-5311B891AAD9_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] missing file when running autogen - ALSO in 1.4.5rc1<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-20 19:10:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10183.php">Ralph Castain: "Re: [OMPI devel] missing file when running autogen - ALSO in 1.4.5rc1"</a>
<li><strong>Previous message:</strong> <a href="10181.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 status / temporary delegation of RM authority"</a>
<li><strong>In reply to:</strong> <a href="10179.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10183.php">Ralph Castain: "Re: [OMPI devel] missing file when running autogen - ALSO in 1.4.5rc1"</a>
<li><strong>Reply:</strong> <a href="10183.php">Ralph Castain: "Re: [OMPI devel] missing file when running autogen - ALSO in 1.4.5rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are welcome.
<br>
NOTE: the same issue exists in 1.4.5rc1
<br>
<p>$ grep for-sun-fortran openmpi-1.4.5rc1/autogen.sh
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;config/modify-configure-for-sun-fortran.pl
<br>
$ tar tfj openmpi-1.4.5rc1.tar.bz2 | grep 
<br>
modify-configure-for-sun-fortran.pl || echo NOPE
<br>
NOPE
<br>
<p>-Paul
<br>
<p>On 12/20/2011 3:55 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; You are quite correct - it was indeed missing from Makefile.am! Fixed - and thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 20, 2011, at 4:40 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regardless of any other issues the referenced file does not appear in the tarball at all:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ tar tfj openmpi-1.5.5rc1.tar.bz2 | grep modify-configure-for-sun-fortran.pl || echo NOPE
</span><br>
<span class="quotelev2">&gt;&gt; NOPE
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 12/20/2011 3:30 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yeah, we've known about this one and mostly ignored it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It occurs when autogen.sh is in a non-root directory and tries to run that script in a place where it doesn't exist (it does exist in the root directory).  We hadn't previously bothered to fix it because a) it's in autogen and users won't see it, b) we've revamped autogen on the trunk such that this doesn't happen anyway, and c) it's a non-fatal error (and reflects correct behavior anyway -- we don't need that script run anywhere except the root).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll add it to the list, but I don't know if it'll actually get fixed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 20, 2011, at 6:22 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; While trying to resolve the gmake-vs-bmake problem I ran autogen.sh and saw:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/phargrov/OMPI/openmpi-1.5.5rc1/openmpi-1.5.5rc1/autogen.sh: line 701: config/modify-configure-for-sun-fortran.pl: No such file or directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I suspect this just requires an addition to EXTRA_DIST in config/Makefile.am
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
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
<li><strong>Next message:</strong> <a href="10183.php">Ralph Castain: "Re: [OMPI devel] missing file when running autogen - ALSO in 1.4.5rc1"</a>
<li><strong>Previous message:</strong> <a href="10181.php">Paul H. Hargrove: "Re: [OMPI devel] v1.5 status / temporary delegation of RM authority"</a>
<li><strong>In reply to:</strong> <a href="10179.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10183.php">Ralph Castain: "Re: [OMPI devel] missing file when running autogen - ALSO in 1.4.5rc1"</a>
<li><strong>Reply:</strong> <a href="10183.php">Ralph Castain: "Re: [OMPI devel] missing file when running autogen - ALSO in 1.4.5rc1"</a>
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
