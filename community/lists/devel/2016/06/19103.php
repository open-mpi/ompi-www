<?
$subject_val = "[OMPI devel] Open MPI v2.0.0rc3 now available";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 15 18:19:58 2016" -->
<!-- isoreceived="20160615221958" -->
<!-- sent="Wed, 15 Jun 2016 16:19:48 -0600" -->
<!-- isosent="20160615221948" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="[OMPI devel] Open MPI v2.0.0rc3 now available" -->
<!-- id="CAF1Cqj5vFsbmQRn+XQHfHbznhdGT-2n5hJ41j6SNGWBOitHScw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Open MPI v2.0.0rc3 now available<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-15 18:19:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19104.php">Paul Hargrove: "Re: [OMPI devel] Open MPI v2.0.0rc3 now available"</a>
<li><strong>Previous message:</strong> <a href="19102.php">Orion Poplawski: "Re: [OMPI devel] v2.x nightly tarball created"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19104.php">Paul Hargrove: "Re: [OMPI devel] Open MPI v2.0.0rc3 now available"</a>
<li><strong>Reply:</strong> <a href="19104.php">Paul Hargrove: "Re: [OMPI devel] Open MPI v2.0.0rc3 now available"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We are now feature complete for v2.0.0 and would appreciate testing by
<br>
developers and end users before we finalize the v2.0.0 release.  In that
<br>
light, v2.0.0rc3 is now available:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.open-mpi.org/software/ompi/v2.x/">https://www.open-mpi.org/software/ompi/v2.x/</a>
<br>
<p>Here are the changes since 2.0.0rc2:
<br>
<p>- The MPI C++ bindings -- which were removed from the MPI standard in
<br>
&nbsp;&nbsp;&nbsp;v3.0 -- are no longer built by default and will be removed in some
<br>
&nbsp;&nbsp;&nbsp;future version of Open MPI.  Use the --enable-mpi-cxx-bindings
<br>
&nbsp;&nbsp;&nbsp;configure option to build the deprecated/removed MPI C++ bindings.
<br>
<p>--&gt; NOTE: this is not new, actually -- but we just added it to the NEWS
<br>
file.
<br>
<p>- In environments where mpirun cannot automatically determine the
<br>
&nbsp;&nbsp;number of slots available (e.g., when using a hostfile that does not
<br>
&nbsp;&nbsp;specify &quot;slots&quot;, or when using --host without specifying a &quot;:N&quot;
<br>
&nbsp;&nbsp;suffix to hostnames), mpirun now requires the use of &quot;-np N&quot; to
<br>
&nbsp;&nbsp;specify how many MPI processes to launch.
<br>
<p>- Many updates and fixes to the revamped memory hooks infrastructure
<br>
<p>- Various configure-related compatibility updates for newer versions
<br>
&nbsp;&nbsp;&nbsp;of libibverbs and OFED.
<br>
<p>- Properly detect Intel TrueScale and OmniPath devices in the ACTIVE
<br>
&nbsp;&nbsp;state.  Thanks to Durga Choudhury for reporting the issue.
<br>
<p>- Fix MPI_IREDUCE_SCATTER_BLOCK for a one-process communicator. Thanks
<br>
&nbsp;&nbsp;&nbsp;to Lisandro Dalcin for reporting.
<br>
<p>- Fix detection and use of Solaris Studio 12.5 (beta) compilers.
<br>
&nbsp;&nbsp;&nbsp;Thanks to Paul Hargrove for reporting and debugging.
<br>
<p>- Allow NULL arrays when creating empty MPI datatypes.
<br>
<p>- Miscellaneous minor bug fixes in the hcoll component.
<br>
<p>- Miscellaneous minor bug fixes in the ugni component.
<br>
<p>- Fix various small memory leaks.
<br>
<p>- Notable new MCA parameters:
<br>
<p>&nbsp;&nbsp;&nbsp;-  opal_progress_lp_call_ration: Control how often low-priority
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;callbacks are made during Open MPI's main progress loop.
<br>
<p>- Disable backtrace support by default in the PSM/PSM2 libraries to
<br>
&nbsp;&nbsp;prevent unintentional conflicting behavior.
<br>
<p>Thanks,
<br>
<p>Howard
<br>
<p><pre>
-- 
Howard Pritchard
HPC-DES
Los Alamos National Laboratory
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19103/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19104.php">Paul Hargrove: "Re: [OMPI devel] Open MPI v2.0.0rc3 now available"</a>
<li><strong>Previous message:</strong> <a href="19102.php">Orion Poplawski: "Re: [OMPI devel] v2.x nightly tarball created"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19104.php">Paul Hargrove: "Re: [OMPI devel] Open MPI v2.0.0rc3 now available"</a>
<li><strong>Reply:</strong> <a href="19104.php">Paul Hargrove: "Re: [OMPI devel] Open MPI v2.0.0rc3 now available"</a>
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
