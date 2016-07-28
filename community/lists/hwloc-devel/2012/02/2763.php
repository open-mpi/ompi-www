<?
$subject_val = "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 14:46:39 2012" -->
<!-- isoreceived="20120201194639" -->
<!-- sent="Wed, 01 Feb 2012 11:46:22 -0800" -->
<!-- isosent="20120201194622" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.4 &amp;quot;gmake check&amp;quot; failure on Solaris-10/SPARC/gccfss" -->
<!-- id="4F29968E.5020900_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F292E8C.7040401_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 14:46:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2764.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 install failure w/ older GNU sed"</a>
<li><strong>Previous message:</strong> <a href="2762.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>In reply to:</strong> <a href="2755.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on	Solaris-10/SPARC/gccfss"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2779.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]"</a>
<li><strong>Reply:</strong> <a href="2779.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think that bug report does apply, but the fix they suggest (after 
<br>
adding the missing &quot;return&quot;) does NOT.
<br>
I added the following 4 lines to the bottom of hwloc-1.4/src/misc.c:
<br>
<p>#if 1 /* XXX: replace '1' with a probe for gccfss */
<br>
#include &lt;string.h&gt;
<br>
int __ffssi2 (int x) { return ffs(x); }
<br>
#endif
<br>
<p>And reconfigured/rebuilt hwloc in a fresh directory (just to be safe).
<br>
Now &quot;make check&quot; is rid of the undefined symbols, but I get test 
<br>
FAILures instead:
<br>
<span class="quotelev1">&gt; PASS: test-hwloc-assembler.sh
</span><br>
<span class="quotelev1">&gt; FAIL: test-hwloc-calc.sh
</span><br>
<span class="quotelev1">&gt; FAIL: test-hwloc-distances.sh
</span><br>
<span class="quotelev1">&gt; FAIL: test-hwloc-distrib.sh
</span><br>
<span class="quotelev1">&gt; FAIL: test-hwloc-ls.sh
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt; 4 of 5 tests failed
</span><br>
<span class="quotelev1">&gt; Please report to <a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<p>Same result on 1.3.1 except, of course, there are fewer tests:
<br>
<span class="quotelev1">&gt; FAIL: test-hwloc-calc.sh
</span><br>
<span class="quotelev1">&gt; FAIL: test-hwloc-distrib.sh
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt; 2 of 2 tests failed
</span><br>
<span class="quotelev1">&gt; Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<p>I found the failing tests leave core files behind.
<br>
Looking at the hwloc-calc failure for instance, dbx tells me:
<br>
<span class="quotelev1">&gt; t_at_1 (l_at_1) program terminated by signal SEGV (no mapping at the fault 
</span><br>
<span class="quotelev1">&gt; address)
</span><br>
<span class="quotelev1">&gt; 0xff3866a0: __ffssi2       :    save     %sp, -96, %sp
</span><br>
<p>Without going any further that appears to be a stack overflow (&quot;no 
<br>
mapping&quot; and the only address register is %sp).
<br>
The &quot;where&quot; command in dbx confirms that the &quot;fix&quot; that I applied just 
<br>
results in infinite recursion.
<br>
<p>Editing [BUILD_DIR]/include/private/autogen/config.h to remove all 
<br>
*HAVE_*FFS definitions did NOT help.
<br>
This appears to be because include/private/misc.h looks for __GNUC__ 
<br>
first and doesn't consider HAVE_FFS or HWLOC_HAVE_FFS.
<br>
If I also hack out that portion of misc.h THEN I can pass all the tests!
<br>
<p>So, in short: when building w/ this compiler, hwloc needs to behave as 
<br>
if the system lacks ffs().
<br>
<p>Making that happen is non-trivial because there are no preprocessor 
<br>
symbols defined by gccfss that would allow compile-time #if checks to 
<br>
distinguish gccfss from &quot;vanilla&quot; gcc.  The only difference is in the 
<br>
string value of __VERSION__, which one could check at configure time.
<br>
<p>Of course documenting that hwloc doesn't support this broken compiler is 
<br>
another option.
<br>
<p>-Paul
<br>
<p>On 2/1/2012 4:22 AM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Does this bug report apply?
</span><br>
<span class="quotelev1">&gt;      <a href="https://forums.oracle.com/forums/thread.jspa?threadID=1997328">https://forums.oracle.com/forums/thread.jspa?threadID=1997328</a>
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 01/02/2012 03:51, Paul H. Hargrove a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; The problem I described below is ALSO present in hwloc-1.4
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 1/31/2012 4:57 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This report is the flip-side of the problem w/ Solaris Studio
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilers on x86-64.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With Solaris-10 on SPARC, I find I *can* build hwloc-1.3.1 w/ SS12.x,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but instead am failing w/ gcc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Keep in mind that /usr/bin/gcc on this system is one from Sun, not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the FSF:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -bash-3.00$ which gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/bin/gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -bash-3.00$ gcc --version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sparc-sun-solaris2.10-gcc (GCC) 4.0.4 (gccfss)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Copyright (C) 2006 Free Software Foundation, Inc.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is free software; see the source for copying conditions.  There
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is NO
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PURPOSE.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The key bit there is &quot;(gccfss)&quot; = &quot;GCC for SPARC Systems&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem is a load-time missing symbol when I &quot;gmake check&quot;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ gmake check V=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Making check in src
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [...]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gmake[2]: Entering directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `/home/hargrove/OMPI/hwloc-1.3.1-solaris10-sparcT2-gccfss404/BLD/utils'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ld.so.1: hwloc-calc: fatal: relocation error: file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/hargrove/OMPI/hwloc-1.3.1-solaris10-sparcT2-gccfss404/BLD/src/.libs/libhwloc.so.4:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; symbol __ffssi2: referenced symbol not found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FAIL: test-hwloc-calc.sh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ld.so.1: hwloc-distrib: fatal: relocation error: file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/hargrove/OMPI/hwloc-1.3.1-solaris10-sparcT2-gccfss404/BLD/src/.libs/libhwloc.so.4:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; symbol __ffssi2: referenced symbol not found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FAIL: test-hwloc-distrib.sh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ========================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2 of 2 tests failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ========================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Again I am sorry I didn't get a chance to discover this in 1.3.1rc2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="2764.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 install failure w/ older GNU sed"</a>
<li><strong>Previous message:</strong> <a href="2762.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>In reply to:</strong> <a href="2755.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on	Solaris-10/SPARC/gccfss"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2779.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]"</a>
<li><strong>Reply:</strong> <a href="2779.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]"</a>
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
