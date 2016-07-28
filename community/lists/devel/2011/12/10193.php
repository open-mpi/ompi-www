<?
$subject_val = "Re: [OMPI devel] missing file when running autogen - ALSO in 1.4.5rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 21 07:13:58 2011" -->
<!-- isoreceived="20111221121358" -->
<!-- sent="Wed, 21 Dec 2011 07:13:54 -0500" -->
<!-- isosent="20111221121354" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] missing file when running autogen - ALSO in 1.4.5rc1" -->
<!-- id="4EF1CD82.6020406_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EF1348C.1080605_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] missing file when running autogen - ALSO in 1.4.5rc1<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-21 07:13:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10194.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2"</a>
<li><strong>Previous message:</strong> <a href="10192.php">Paul H. Hargrove: "[OMPI devel] openmpi-1.5.5rc1: atomic_cmpset failure on Solaris10/UltraSPARC-T2"</a>
<li><strong>In reply to:</strong> <a href="10185.php">Paul H. Hargrove: "Re: [OMPI devel] missing file when running autogen - ALSO in 1.4.5rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10177.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul's probably more than likely right.  The nightly runs Oracle does 
<br>
using MTT and tarballs do not do autogen.sh (which I believe is not 
<br>
expected anyways, right).  All other builds we do using autogen.* are 
<br>
from an svn workspace.
<br>
<p>--td
<br>
<p>On 12/20/2011 8:21 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; Not too bizarre.
</span><br>
<span class="quotelev1">&gt; This probably just means that nobody has ever run autogen.sh from a 
</span><br>
<span class="quotelev1">&gt; tarball on a system using Sun's FORTRAN compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/20/2011 5:01 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Bizarre - fixed it too, but no promise when that might appear in a 
</span><br>
<span class="quotelev2">&gt;&gt; release.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 20, 2011, at 5:10 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You are welcome.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NOTE: the same issue exists in 1.4.5rc1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ grep for-sun-fortran openmpi-1.4.5rc1/autogen.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     config/modify-configure-for-sun-fortran.pl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ tar tfj openmpi-1.4.5rc1.tar.bz2 | grep 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; modify-configure-for-sun-fortran.pl || echo NOPE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NOPE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 12/20/2011 3:55 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You are quite correct - it was indeed missing from Makefile.am! 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fixed - and thanks!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Dec 20, 2011, at 4:40 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regardless of any other issues the referenced file does not appear 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in the tarball at all:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ tar tfj openmpi-1.5.5rc1.tar.bz2 | grep 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; modify-configure-for-sun-fortran.pl || echo NOPE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; NOPE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 12/20/2011 3:30 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Yeah, we've known about this one and mostly ignored it.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It occurs when autogen.sh is in a non-root directory and tries to 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; run that script in a place where it doesn't exist (it does exist 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; in the root directory).  We hadn't previously bothered to fix it 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; because a) it's in autogen and users won't see it, b) we've 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; revamped autogen on the trunk such that this doesn't happen 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; anyway, and c) it's a non-fatal error (and reflects correct 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; behavior anyway -- we don't need that script run anywhere except 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the root).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'll add it to the list, but I don't know if it'll actually get 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; fixed.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Dec 20, 2011, at 6:22 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; While trying to resolve the gmake-vs-bmake problem I ran 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; autogen.sh and saw:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /home/phargrov/OMPI/openmpi-1.5.5rc1/openmpi-1.5.5rc1/autogen.sh: line 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 701: config/modify-configure-for-sun-fortran.pl: No such file or 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I suspect this just requires an addition to EXTRA_DIST in 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; config/Makefile.am
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10193/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-10193/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10194.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2"</a>
<li><strong>Previous message:</strong> <a href="10192.php">Paul H. Hargrove: "[OMPI devel] openmpi-1.5.5rc1: atomic_cmpset failure on Solaris10/UltraSPARC-T2"</a>
<li><strong>In reply to:</strong> <a href="10185.php">Paul H. Hargrove: "Re: [OMPI devel] missing file when running autogen - ALSO in 1.4.5rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10177.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.5.1rc1: missing file when running autogen"</a>
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
