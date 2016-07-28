<?
$subject_val = "Re: [OMPI devel] 1.8.5rc1 is ready for testing";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 21:39:01 2015" -->
<!-- isoreceived="20150407013901" -->
<!-- sent="Mon, 6 Apr 2015 18:38:59 -0700" -->
<!-- isosent="20150407013859" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.5rc1 is ready for testing" -->
<!-- id="CAAvDA16+yJfX9nOBEJCPJC1ECiS6xNfbBf4Q8Ar1X0TprwKH2Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A1436B51-2454-40D6-9E07-80663F1D0775_at_open-mpi.org" -->
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
<strong>Date:</strong> 2015-04-06 21:38:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17190.php">Bert Wesarg: "Re: [OMPI devel] 1.8.5rc1 VT-related build failure"</a>
<li><strong>Previous message:</strong> <a href="17188.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 MacOS X 10.8 build failure (libltdl?)"</a>
<li><strong>In reply to:</strong> <a href="17180.php">Ralph Castain: "[OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17197.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Reply:</strong> <a href="17197.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My testing of real hardware is almost complete and I've reported the only
<br>
two issues[*] I encountered:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2015/04/17183.php">http://www.open-mpi.org/community/lists/devel/2015/04/17183.php</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2015/04/17184.php">http://www.open-mpi.org/community/lists/devel/2015/04/17184.php</a>
<br>
There were roughly 5 failing configurations out of about 70.
<br>
<p>Testing on a Raspberry Pi and QEMU-emulated MIPS32, MIPS64, ARM and AARCH64
<br>
systems will complete overnight.
<br>
<p>-Paul
<br>
<p>[*] Excludes known issues for which bug reports have been filed against
<br>
previous releases.
<br>
<p><p>On Sun, Apr 5, 2015 at 2:42 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Usual place:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
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
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17180.php">http://www.open-mpi.org/community/lists/devel/2015/04/17180.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17189/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17190.php">Bert Wesarg: "Re: [OMPI devel] 1.8.5rc1 VT-related build failure"</a>
<li><strong>Previous message:</strong> <a href="17188.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 MacOS X 10.8 build failure (libltdl?)"</a>
<li><strong>In reply to:</strong> <a href="17180.php">Ralph Castain: "[OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17197.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Reply:</strong> <a href="17197.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
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
