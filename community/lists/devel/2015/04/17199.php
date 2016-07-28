<?
$subject_val = "Re: [OMPI devel] 1.8.5rc1 is ready for testing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  8 11:40:50 2015" -->
<!-- isoreceived="20150408154050" -->
<!-- sent="Wed, 8 Apr 2015 08:40:47 -0700" -->
<!-- isosent="20150408154047" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.5rc1 is ready for testing" -->
<!-- id="CAAvDA14Zp=Z82+tbkVAxqSXgWQ+8zZZQjqU4F33DdW7xVco0Tw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3541CB2B-E0F9-44DA-A478-D22F163EEEC1_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.5rc1 is ready for testing<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-08 11:40:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17200.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Previous message:</strong> <a href="17198.php">Ralph Castain: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>In reply to:</strong> <a href="17198.php">Ralph Castain: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17200.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Reply:</strong> <a href="17200.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>According to his comments in the PR, Bert already tested with the same
<br>
compiler that I was using when I originally observed the problem.
<br>
So, I had not put a high priority on retesting.
<br>
However, I'll see what I can do today.
<br>
<p>-Paul
<br>
<p>On Wed, Apr 8, 2015 at 8:30 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Paul!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The VT fix is in the queue, if/when you can check it. I'm going to look at
</span><br>
<span class="quotelev1">&gt; the other issue today.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 8, 2015, at 8:10 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My 5 ARM and 3 MIPS testers completed without any problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The ARM tests include ARMv5, v6, v7 and v8 systems (and include both ARM
</span><br>
<span class="quotelev1">&gt; and THUMB2 ISAs on v7, and AARCH64 on v8)
</span><br>
<span class="quotelev1">&gt; The MIPS tests include the &quot;32&quot; ABI on a 32-bit (MIPS 4Kc) system, and the
</span><br>
<span class="quotelev1">&gt; &quot;n32&quot; and &quot;64&quot; ABIs on a 64-bit (MIPS 5Kc) system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe that completely covers the atomics implementations for those
</span><br>
<span class="quotelev1">&gt; architectures.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Apr 6, 2015 at 6:38 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My testing of real hardware is almost complete and I've reported the only
</span><br>
<span class="quotelev2">&gt;&gt; two issues[*] I encountered:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17183.php">http://www.open-mpi.org/community/lists/devel/2015/04/17183.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17184.php">http://www.open-mpi.org/community/lists/devel/2015/04/17184.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; There were roughly 5 failing configurations out of about 70.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Testing on a Raspberry Pi and QEMU-emulated MIPS32, MIPS64, ARM and
</span><br>
<span class="quotelev2">&gt;&gt; AARCH64 systems will complete overnight.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [*] Excludes known issues for which bug reports have been filed against
</span><br>
<span class="quotelev2">&gt;&gt; previous releases.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, Apr 5, 2015 at 2:42 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Usual place:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm happy to receive suggestions about the NEWS - here is what I have:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.8.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Updated the internal HWLOC with several bug fixes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Fixed several bugs in OpenSHMEM support
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Extended vader shared memory support to 32-bit architectures
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Fixed a bug in handling subarray datatypes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Don't use inline functions with Clang compiler
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Multiple bug fixes for cleanup during finalize
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   in unusual situations
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Added support for TCP keepalive signals to ensure
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   timely termination when sockets between daemons
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   cannot be created (e.g., due to a firewall)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Added MCA parameter to allow full use of a SLURM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   allocation when started from a tool (supports LLNL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   debugger)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Fixed several bugs in the configure logic for PMI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   and HWLOC
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Cleaned up documentation in a few places (e.g.,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Comm_split_type)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Fixed prototypes for MPI_Barrier
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Fixed a number of one-sided bugs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Fixed singleton MPI_Comm_spawn
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Fixed a number of minor issues with CUDA support,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   including registering of shared memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Improved support for Cray
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Fixed performance regression introduced by
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   inadvertent default enabling of thread support
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17180.php">http://www.open-mpi.org/community/lists/devel/2015/04/17180.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17197.php">http://www.open-mpi.org/community/lists/devel/2015/04/17197.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17198.php">http://www.open-mpi.org/community/lists/devel/2015/04/17198.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17199/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17200.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Previous message:</strong> <a href="17198.php">Ralph Castain: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>In reply to:</strong> <a href="17198.php">Ralph Castain: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17200.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Reply:</strong> <a href="17200.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
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
