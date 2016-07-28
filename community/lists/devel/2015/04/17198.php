<?
$subject_val = "Re: [OMPI devel] 1.8.5rc1 is ready for testing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  8 11:30:23 2015" -->
<!-- isoreceived="20150408153023" -->
<!-- sent="Wed, 8 Apr 2015 08:30:19 -0700" -->
<!-- isosent="20150408153019" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.5rc1 is ready for testing" -->
<!-- id="3541CB2B-E0F9-44DA-A478-D22F163EEEC1_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAvDA15bpWzn5sSqgz=Q-3T2b7FRcbd6pcKgHvg78dqK=YFNCQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-08 11:30:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17199.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Previous message:</strong> <a href="17197.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>In reply to:</strong> <a href="17197.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17199.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Reply:</strong> <a href="17199.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Paul!!
<br>
<p>The VT fix is in the queue, if/when you can check it. I&#146;m going to look at the other issue today.
<br>
<p><p><span class="quotelev1">&gt; On Apr 8, 2015, at 8:10 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My 5 ARM and 3 MIPS testers completed without any problems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The ARM tests include ARMv5, v6, v7 and v8 systems (and include both ARM and THUMB2 ISAs on v7, and AARCH64 on v8)
</span><br>
<span class="quotelev1">&gt; The MIPS tests include the &quot;32&quot; ABI on a 32-bit (MIPS 4Kc) system, and the &quot;n32&quot; and &quot;64&quot; ABIs on a 64-bit (MIPS 5Kc) system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe that completely covers the atomics implementations for those architectures.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Apr 6, 2015 at 6:38 PM, Paul Hargrove &lt;phhargrove_at_[hidden] &lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; My testing of real hardware is almost complete and I've reported the only two issues[*] I encountered:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17183.php">http://www.open-mpi.org/community/lists/devel/2015/04/17183.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/04/17183.php">http://www.open-mpi.org/community/lists/devel/2015/04/17183.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17184.php">http://www.open-mpi.org/community/lists/devel/2015/04/17184.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/04/17184.php">http://www.open-mpi.org/community/lists/devel/2015/04/17184.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; There were roughly 5 failing configurations out of about 70.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Testing on a Raspberry Pi and QEMU-emulated MIPS32, MIPS64, ARM and AARCH64 systems will complete overnight.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [*] Excludes known issues for which bug reports have been filed against previous releases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sun, Apr 5, 2015 at 2:42 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Usual place:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a> &lt;<a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm happy to receive suggestions about the NEWS - here is what I have:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.8.5
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; - Updated the internal HWLOC with several bug fixes
</span><br>
<span class="quotelev1">&gt; - Fixed several bugs in OpenSHMEM support
</span><br>
<span class="quotelev1">&gt; - Extended vader shared memory support to 32-bit architectures
</span><br>
<span class="quotelev1">&gt; - Fixed a bug in handling subarray datatypes
</span><br>
<span class="quotelev1">&gt; - Don't use inline functions with Clang compiler
</span><br>
<span class="quotelev1">&gt; - Multiple bug fixes for cleanup during finalize
</span><br>
<span class="quotelev1">&gt;   in unusual situations
</span><br>
<span class="quotelev1">&gt; - Added support for TCP keepalive signals to ensure
</span><br>
<span class="quotelev1">&gt;   timely termination when sockets between daemons
</span><br>
<span class="quotelev1">&gt;   cannot be created (e.g., due to a firewall)
</span><br>
<span class="quotelev1">&gt; - Added MCA parameter to allow full use of a SLURM
</span><br>
<span class="quotelev1">&gt;   allocation when started from a tool (supports LLNL
</span><br>
<span class="quotelev1">&gt;   debugger)
</span><br>
<span class="quotelev1">&gt; - Fixed several bugs in the configure logic for PMI
</span><br>
<span class="quotelev1">&gt;   and HWLOC
</span><br>
<span class="quotelev1">&gt; - Cleaned up documentation in a few places (e.g.,
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_split_type)
</span><br>
<span class="quotelev1">&gt; - Fixed prototypes for MPI_Barrier
</span><br>
<span class="quotelev1">&gt; - Fixed a number of one-sided bugs
</span><br>
<span class="quotelev1">&gt; - Fixed singleton MPI_Comm_spawn
</span><br>
<span class="quotelev1">&gt; - Fixed a number of minor issues with CUDA support,
</span><br>
<span class="quotelev1">&gt;   including registering of shared memory
</span><br>
<span class="quotelev1">&gt; - Improved support for Cray
</span><br>
<span class="quotelev1">&gt; - Fixed performance regression introduced by
</span><br>
<span class="quotelev1">&gt;   inadvertent default enabling of thread support
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17180.php">http://www.open-mpi.org/community/lists/devel/2015/04/17180.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/04/17180.php">http://www.open-mpi.org/community/lists/devel/2015/04/17180.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352 &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900 &lt;tel:%2B1-510-486-6900&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
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
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17197.php">http://www.open-mpi.org/community/lists/devel/2015/04/17197.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/04/17197.php">http://www.open-mpi.org/community/lists/devel/2015/04/17197.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17198/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17199.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Previous message:</strong> <a href="17197.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>In reply to:</strong> <a href="17197.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17199.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Reply:</strong> <a href="17199.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
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
