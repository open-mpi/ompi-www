<?
$subject_val = "Re: [OMPI devel] Old Linux kernels";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 06:30:23 2011" -->
<!-- isoreceived="20110316103023" -->
<!-- sent="Wed, 16 Mar 2011 06:30:07 -0400" -->
<!-- isosent="20110316103007" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Old Linux kernels" -->
<!-- id="281678E1-1CC8-4463-89C5-A0680FF30521_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="105F08E0-D88C-49D6-8213-2DFBCEA896B9_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Old Linux kernels<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-16 06:30:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9076.php">Terry Dontje: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<li><strong>Previous message:</strong> <a href="9074.php">Jeff Squyres: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<li><strong>In reply to:</strong> <a href="9072.php">Ralph Castain: "Re: [OMPI devel] Old Linux kernels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9079.php">Paul H. Hargrove: "Re: [OMPI devel] Old Linux kernels"</a>
<li><strong>Reply:</strong> <a href="9079.php">Paul H. Hargrove: "Re: [OMPI devel] Old Linux kernels"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there a version in a pthreads header file that can be checked?
<br>
<p>You're right that I am currently checking Linux kernel version, not pthread version. Note that this is *only* in cross-compiling environments; in non cross compiling situations, we actually test the behavior to see if threads have different PIDs or not. 
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Mar 15, 2011, at 7:41 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; My point was just that we support the current implementation of pthreads - not any old one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, to clarify: Jeff actually tests to see what the thread library does. We only use the Linux kernel version when cross-compiling since we cannot, in that case, actually test the support. We know that old Linux kernels have the old implementation, so we exclude them. Anything else is hit-miss when cross-compiling.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 15, 2011, at 4:46 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sorry, I stated my facts backwards.
</span><br>
<span class="quotelev2">&gt;&gt; CORRECTED facts:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +The old &quot;LinuxThreads&quot; implementation is the one that gave DIFFERENT pids to each pthread.
</span><br>
<span class="quotelev2">&gt;&gt; + &quot;NPTL&quot; is the current implementation of Pthreads for Linux, and the one giving a single pid shared by all pthreads.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So, I hope Ralph's statement is similarly reversed, because &quot;LinuxThreads&quot; as not been maintained in years.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 3/15/2011 3:40 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I believe the test is intended strictly for Linux threads. I don't believe we have ever (intentionally) supported any other thread library in such environments.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll leave it to Jeff to decide if he feels this is an issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 15, 2011, at 4:27 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'd like to point out that it is libpthread and the arguments it passes to clone(), NOT the Linux kernel version, that is the determining factor (at least if you have a 2.6.x kernel).  The &quot;LinuxThreads&quot; implementation of Pthreads will give the one-pid-to-rule-them all behavior, while the NPTL implementation gives unquie pids under any 2.6.x kernel and even w/ some 2.4.x kernels from Red Hat.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have encountered systems on which dynamic linking gave NPTL and static linking gave LinuxThreads.  That is a &quot;gottcha&quot; that I am not certain Jeff and Ralph have taken into account.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Note that I have no objection to &quot;we don't support this&quot;, but fear that detection of that situation may be flawed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 3/15/2011 2:14 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff and I encountered a problem when cross-compiling OMPI for Linux. Turned out that we had an old test in the code that looked for threads to have different pids. Since it couldn't be tested when cross-compiling, the test simply assumed this was the case for Linux under those conditions - which broke the build for current Linux kernels.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Different pids for threads was last seen in the old RH 4 series (kernel 2.6.9 or so). Some code (e.g., waitpid) was also provided to support this unusual situation - this code was in fact broken when we updated the event library. So even if we were in an old kernel, the code base would neither compile nor run.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Rather than trying to continue to support these old kernels, we have removed all the stale code that was covered by OPAL_THREADS_HAVE_DIFFERENT_PIDS. This removed some complexity from a few PLM modules and removed the broken code.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff modified the corresponding .m4 test so we now detect an older kernel, print out a nice &quot;we don't support this&quot; message (along with noting that earlier versions of OMPI do), and then abort the build.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If you know of some reason to restore support for old Linux kernels, and someone willing to do the work to &quot;refresh&quot; that support, please let us know.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph&amp;   Jeff
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9076.php">Terry Dontje: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<li><strong>Previous message:</strong> <a href="9074.php">Jeff Squyres: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<li><strong>In reply to:</strong> <a href="9072.php">Ralph Castain: "Re: [OMPI devel] Old Linux kernels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9079.php">Paul H. Hargrove: "Re: [OMPI devel] Old Linux kernels"</a>
<li><strong>Reply:</strong> <a href="9079.php">Paul H. Hargrove: "Re: [OMPI devel] Old Linux kernels"</a>
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
