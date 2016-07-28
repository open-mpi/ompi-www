<?
$subject_val = "[OMPI devel] trunk build failure on Altix";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 03:41:10 2012" -->
<!-- isoreceived="20120215084110" -->
<!-- sent="Wed, 15 Feb 2012 00:41:05 -0800" -->
<!-- isosent="20120215084105" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] trunk build failure on Altix" -->
<!-- id="CAAvDA16O2ub=ZhE9JSJLF2WN4uhamO8TJEZPXkgx=4c4H1zWyA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] trunk build failure on Altix<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 03:41:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10419.php">Paul Hargrove: "[OMPI devel] VT build failure with Clang++"</a>
<li><strong>Previous message:</strong> <a href="10417.php">Paul H. Hargrove: "[OMPI devel] More MIPS asm patches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10487.php">Paul H. Hargrove: "Re: [OMPI devel] trunk build failure on Altix [w/ WORK AROUND]"</a>
<li><strong>Reply:</strong> <a href="10487.php">Paul H. Hargrove: "Re: [OMPI devel] trunk build failure on Altix [w/ WORK AROUND]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've configured the ompi trunk (nightly tarball 1.7a1r25927) on an SGI
<br>
Altix.
<br>
I used no special arguments indicating that this is an Altix, and there
<br>
does not appear to be an altix-specific file in contrib/platform.
<br>
<p>My build fails as follows:
<br>
<p>make: Entering directory
<br>
<span class="quotelev1">&gt; `/mnt/home/c_phargrov/OMPI/openmpi-trunk-linux-ia64/BLD/opal/tools/wrappers'
</span><br>
<span class="quotelev1">&gt;   CC     opal_wrapper.o
</span><br>
<span class="quotelev1">&gt;   CCLD   opal_wrapper
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to
</span><br>
<span class="quotelev1">&gt; `opal_timer_altix_mmdev_timer_addr'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to
</span><br>
<span class="quotelev1">&gt; `opal_timer_altix_freq'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<p><p><p>The configure-generated opal_config.h contains
<br>
#define MCA_timer_IMPLEMENTATION_HEADER &quot;opal/mca/timer/altix/timer_altix.h&quot;
<br>
<p>Nothing appears to have been built in BUILDDIR/opal/mca/timer/altix.
<br>
However, BUILDDIR/opal/mca/timer/linux has been built.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10418/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10419.php">Paul Hargrove: "[OMPI devel] VT build failure with Clang++"</a>
<li><strong>Previous message:</strong> <a href="10417.php">Paul H. Hargrove: "[OMPI devel] More MIPS asm patches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10487.php">Paul H. Hargrove: "Re: [OMPI devel] trunk build failure on Altix [w/ WORK AROUND]"</a>
<li><strong>Reply:</strong> <a href="10487.php">Paul H. Hargrove: "Re: [OMPI devel] trunk build failure on Altix [w/ WORK AROUND]"</a>
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
