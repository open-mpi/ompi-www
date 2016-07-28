<?
$subject_val = "Re: [OMPI devel] Common symbols warning";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 15 11:30:19 2015" -->
<!-- isoreceived="20150415153019" -->
<!-- sent="Wed, 15 Apr 2015 15:30:07 +0000" -->
<!-- isosent="20150415153007" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Common symbols warning" -->
<!-- id="46AF7E79-C219-484C-AB51-70DE48F9E3DE_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="552DE2DD.8090507_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Common symbols warning<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-15 11:30:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17229.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch revert-520-valgrind_cleanness created. dev-1504-g7a8a4a0"</a>
<li><strong>Previous message:</strong> <a href="17227.php">Elena Elkina: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch revert-520-valgrind_cleanness created. dev-1504-g7a8a4a0"</a>
<li><strong>In reply to:</strong> <a href="17222.php">Gilles Gouaillardet: "Re: [OMPI devel] Common symbols warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17233.php">Gilles Gouaillardet: "Re: [OMPI devel] Common symbols warning"</a>
<li><strong>Reply:</strong> <a href="17233.php">Gilles Gouaillardet: "Re: [OMPI devel] Common symbols warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 14, 2015, at 11:02 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
<br>

<br>
<span class="quotelev1">&gt; Dave,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my understanding is that the presence of common symbols should be treated as a warning
</span><br>
<span class="quotelev1">&gt; (and hence make install should not fail)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; makes sense ?
</span><br>

<br>
It should be a warning... are you seeing otherwise in your builds?  Here's the tail end of &quot;make install&quot; on my machine:
<br>

<br>
----&#226;&#156;&#130;----
<br>
make[3]: Entering directory `/home/dgoodell/git/ompi-upstream/_build'
<br>
WARNING!  Common symbols found:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rtc_base_frame.o: 0000000000000040 C orte_rtc_base
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sstore_base_frame.o: 0000000000000008 C orte_sstore_base_global_metadata_filename
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sstore_base_frame.o: 0000000000000008 C orte_sstore_base_local_metadata_filename
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sstore_base_frame.o: 0000000000000008 C orte_sstore_base_local_snapshot_fmt
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sstore_base_frame.o: 0000000000000004 C orte_sstore_context
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sstore_base_frame.o: 0000000000000004 C orte_sstore_handle_current
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sstore_base_frame.o: 0000000000000004 C orte_sstore_handle_last_stable
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;routed_base_frame.o: 0000000000000001 C orte_routed_base_wait_sync
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;routed_base_frame.o: 0000000000000070 C orte_routed_jobfams
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ras_base_frame.o: 0000000000000018 C orte_ras_base
<br>
[...]
<br>
skipping remaining symbols. To see all symbols, run:
<br>
&nbsp;&nbsp;../config/find_common_syms --top_builddir=. --top_srcdir=.. --objext=o
<br>
make[3]: [install-exec-hook] Error 1 (ignored)
<br>
make[3]: Leaving directory `/home/dgoodell/git/ompi-upstream/_build'
<br>
make[2]: Nothing to be done for `install-data-am'.
<br>
make[2]: Leaving directory `/home/dgoodell/git/ompi-upstream/_build'
<br>
make[1]: Leaving directory `/home/dgoodell/git/ompi-upstream/_build'
<br>
----&#226;&#156;&#130;----
<br>

<br>
The key bit being: &quot;Error 1 (ignored)&quot;.
<br>

<br>
-Dave
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17229.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch revert-520-valgrind_cleanness created. dev-1504-g7a8a4a0"</a>
<li><strong>Previous message:</strong> <a href="17227.php">Elena Elkina: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch revert-520-valgrind_cleanness created. dev-1504-g7a8a4a0"</a>
<li><strong>In reply to:</strong> <a href="17222.php">Gilles Gouaillardet: "Re: [OMPI devel] Common symbols warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17233.php">Gilles Gouaillardet: "Re: [OMPI devel] Common symbols warning"</a>
<li><strong>Reply:</strong> <a href="17233.php">Gilles Gouaillardet: "Re: [OMPI devel] Common symbols warning"</a>
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
