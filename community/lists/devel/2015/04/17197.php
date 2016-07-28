<?
$subject_val = "Re: [OMPI devel] 1.8.5rc1 is ready for testing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  8 11:10:20 2015" -->
<!-- isoreceived="20150408151020" -->
<!-- sent="Wed, 8 Apr 2015 08:10:16 -0700" -->
<!-- isosent="20150408151016" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.5rc1 is ready for testing" -->
<!-- id="CAAvDA15bpWzn5sSqgz=Q-3T2b7FRcbd6pcKgHvg78dqK=YFNCQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA16+yJfX9nOBEJCPJC1ECiS6xNfbBf4Q8Ar1X0TprwKH2Q_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-04-08 11:10:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17198.php">Ralph Castain: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Previous message:</strong> <a href="17196.php">George Bosilca: "Re: [OMPI devel] .ompi_info dependency files"</a>
<li><strong>In reply to:</strong> <a href="17189.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17198.php">Ralph Castain: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Reply:</strong> <a href="17198.php">Ralph Castain: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My 5 ARM and 3 MIPS testers completed without any problems.
<br>
<p>The ARM tests include ARMv5, v6, v7 and v8 systems (and include both ARM
<br>
and THUMB2 ISAs on v7, and AARCH64 on v8)
<br>
The MIPS tests include the &quot;32&quot; ABI on a 32-bit (MIPS 4Kc) system, and the
<br>
&quot;n32&quot; and &quot;64&quot; ABIs on a 64-bit (MIPS 5Kc) system.
<br>
<p>I believe that completely covers the atomics implementations for those
<br>
architectures.
<br>
<p>-Paul
<br>
<p>On Mon, Apr 6, 2015 at 6:38 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; My testing of real hardware is almost complete and I've reported the only
</span><br>
<span class="quotelev1">&gt; two issues[*] I encountered:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17183.php">http://www.open-mpi.org/community/lists/devel/2015/04/17183.php</a>
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17184.php">http://www.open-mpi.org/community/lists/devel/2015/04/17184.php</a>
</span><br>
<span class="quotelev1">&gt; There were roughly 5 failing configurations out of about 70.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Testing on a Raspberry Pi and QEMU-emulated MIPS32, MIPS64, ARM and
</span><br>
<span class="quotelev1">&gt; AARCH64 systems will complete overnight.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [*] Excludes known issues for which bug reports have been filed against
</span><br>
<span class="quotelev1">&gt; previous releases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Apr 5, 2015 at 2:42 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Usual place:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm happy to receive suggestions about the NEWS - here is what I have:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1.8.5
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; - Updated the internal HWLOC with several bug fixes
</span><br>
<span class="quotelev2">&gt;&gt; - Fixed several bugs in OpenSHMEM support
</span><br>
<span class="quotelev2">&gt;&gt; - Extended vader shared memory support to 32-bit architectures
</span><br>
<span class="quotelev2">&gt;&gt; - Fixed a bug in handling subarray datatypes
</span><br>
<span class="quotelev2">&gt;&gt; - Don't use inline functions with Clang compiler
</span><br>
<span class="quotelev2">&gt;&gt; - Multiple bug fixes for cleanup during finalize
</span><br>
<span class="quotelev2">&gt;&gt;   in unusual situations
</span><br>
<span class="quotelev2">&gt;&gt; - Added support for TCP keepalive signals to ensure
</span><br>
<span class="quotelev2">&gt;&gt;   timely termination when sockets between daemons
</span><br>
<span class="quotelev2">&gt;&gt;   cannot be created (e.g., due to a firewall)
</span><br>
<span class="quotelev2">&gt;&gt; - Added MCA parameter to allow full use of a SLURM
</span><br>
<span class="quotelev2">&gt;&gt;   allocation when started from a tool (supports LLNL
</span><br>
<span class="quotelev2">&gt;&gt;   debugger)
</span><br>
<span class="quotelev2">&gt;&gt; - Fixed several bugs in the configure logic for PMI
</span><br>
<span class="quotelev2">&gt;&gt;   and HWLOC
</span><br>
<span class="quotelev2">&gt;&gt; - Cleaned up documentation in a few places (e.g.,
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_split_type)
</span><br>
<span class="quotelev2">&gt;&gt; - Fixed prototypes for MPI_Barrier
</span><br>
<span class="quotelev2">&gt;&gt; - Fixed a number of one-sided bugs
</span><br>
<span class="quotelev2">&gt;&gt; - Fixed singleton MPI_Comm_spawn
</span><br>
<span class="quotelev2">&gt;&gt; - Fixed a number of minor issues with CUDA support,
</span><br>
<span class="quotelev2">&gt;&gt;   including registering of shared memory
</span><br>
<span class="quotelev2">&gt;&gt; - Improved support for Cray
</span><br>
<span class="quotelev2">&gt;&gt; - Fixed performance regression introduced by
</span><br>
<span class="quotelev2">&gt;&gt;   inadvertent default enabling of thread support
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17180.php">http://www.open-mpi.org/community/lists/devel/2015/04/17180.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17197/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17198.php">Ralph Castain: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Previous message:</strong> <a href="17196.php">George Bosilca: "Re: [OMPI devel] .ompi_info dependency files"</a>
<li><strong>In reply to:</strong> <a href="17189.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17198.php">Ralph Castain: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Reply:</strong> <a href="17198.php">Ralph Castain: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
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
