<?
$subject_val = "[Open MPI Announce] Fwd: Open MPI v2.0.0rc3 now available";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 15 23:07:46 2016" -->
<!-- isoreceived="20160616030746" -->
<!-- sent="Wed, 15 Jun 2016 20:07:44 -0700" -->
<!-- isosent="20160616030744" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Fwd: Open MPI v2.0.0rc3 now available" -->
<!-- id="34807AEB-2A30-4F50-B55D-97721604E9F8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF1Cqj5UEjUUcQHSYFDNeqdm1FWRNJLkBUUBOADp6sX+W+OpnQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [Open MPI Announce] Fwd: Open MPI v2.0.0rc3 now available<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-15 23:07:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2016/07/0085.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Open MPI v2.0.0 released"</a>
<li><strong>Previous message:</strong> <a href="0083.php">Ralph Castain: "[Open MPI Announce] OMPI v1.10.3 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; ---------- Weitergeleitete Nachricht ----------
</span><br>
<span class="quotelev1">&gt; From: Howard Pritchard &lt;hppritcha_at_[hidden] &lt;mailto:hppritcha_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers List &lt;devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;&gt;, announce_at_[hidden] &lt;mailto:announce_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: 
</span><br>
<span class="quotelev1">&gt; Date: Wed, 15 Jun 2016 16:19:48 -0600
</span><br>
<span class="quotelev1">&gt; Subject: Open MPI v2.0.0rc3 now available
</span><br>
<span class="quotelev1">&gt; We are now feature complete for v2.0.0 and would appreciate testing by developers and end users before we finalize the v2.0.0 release.  In that light, v2.0.0rc3 is now available:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="https://www.open-mpi.org/software/ompi/v2.x/">https://www.open-mpi.org/software/ompi/v2.x/</a> &lt;<a href="https://www.open-mpi.org/software/ompi/v2.x/">https://www.open-mpi.org/software/ompi/v2.x/</a>&gt;
</span><br>
<span class="quotelev1">&gt; Here are the changes since 2.0.0rc2:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - The MPI C++ bindings -- which were removed from the MPI standard in
</span><br>
<span class="quotelev1">&gt;    v3.0 -- are no longer built by default and will be removed in some
</span><br>
<span class="quotelev1">&gt;    future version of Open MPI.  Use the --enable-mpi-cxx-bindings
</span><br>
<span class="quotelev1">&gt;    configure option to build the deprecated/removed MPI C++ bindings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --&gt; NOTE: this is not new, actually -- but we just added it to the NEWS file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - In environments where mpirun cannot automatically determine the
</span><br>
<span class="quotelev1">&gt;   number of slots available (e.g., when using a hostfile that does not
</span><br>
<span class="quotelev1">&gt;   specify &quot;slots&quot;, or when using --host without specifying a &quot;:N&quot; 
</span><br>
<span class="quotelev1">&gt;   suffix to hostnames), mpirun now requires the use of &quot;-np N&quot; to
</span><br>
<span class="quotelev1">&gt;   specify how many MPI processes to launch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Many updates and fixes to the revamped memory hooks infrastructure
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Various configure-related compatibility updates for newer versions
</span><br>
<span class="quotelev1">&gt;    of libibverbs and OFED.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Properly detect Intel TrueScale and OmniPath devices in the ACTIVE
</span><br>
<span class="quotelev1">&gt;   state.  Thanks to Durga Choudhury for reporting the issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Fix MPI_IREDUCE_SCATTER_BLOCK for a one-process communicator. Thanks
</span><br>
<span class="quotelev1">&gt;    to Lisandro Dalcin for reporting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Fix detection and use of Solaris Studio 12.5 (beta) compilers.
</span><br>
<span class="quotelev1">&gt;    Thanks to Paul Hargrove for reporting and debugging.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Allow NULL arrays when creating empty MPI datatypes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Miscellaneous minor bug fixes in the hcoll component.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Miscellaneous minor bug fixes in the ugni component.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Fix various small memory leaks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Notable new MCA parameters:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    -  opal_progress_lp_call_ration: Control how often low-priority
</span><br>
<span class="quotelev1">&gt;       callbacks are made during Open MPI's main progress loop.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Disable backtrace support by default in the PSM/PSM2 libraries to 
</span><br>
<span class="quotelev1">&gt;   prevent unintentional conflicting behavior.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard Pritchard
</span><br>
<span class="quotelev1">&gt; HPC-DES
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/announce/att-0084/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2016/07/0085.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Open MPI v2.0.0 released"</a>
<li><strong>Previous message:</strong> <a href="0083.php">Ralph Castain: "[Open MPI Announce] OMPI v1.10.3 released"</a>
<!-- nextthread="start" -->
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
