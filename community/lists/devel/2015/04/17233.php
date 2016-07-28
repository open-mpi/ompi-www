<?
$subject_val = "Re: [OMPI devel] Common symbols warning";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 15 19:59:14 2015" -->
<!-- isoreceived="20150415235914" -->
<!-- sent="Thu, 16 Apr 2015 08:59:10 +0900" -->
<!-- isosent="20150415235910" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Common symbols warning" -->
<!-- id="552EFB4E.4020104_at_rist.or.jp" -->
<!-- charset="utf-8" -->
<!-- inreplyto="46AF7E79-C219-484C-AB51-70DE48F9E3DE_at_cisco.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-15 19:59:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17234.php">Aurélien Bouteiller: "[OMPI devel] 1.8.5rc1 and OOB on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="17232.php">Nathan Hjelm: "Re: [OMPI devel] Common symbols warning"</a>
<li><strong>In reply to:</strong> <a href="17228.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Common symbols warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17230.php">Nathan Hjelm: "Re: [OMPI devel] Common symbols warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave,
<br>
<p>my bad, the error is ignored as it should.
<br>
i will then close the related PR since it is now irrelevant
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 4/16/2015 12:30 AM, Dave Goodell (dgoodell) wrote:
<br>
<span class="quotelev1">&gt; On Apr 14, 2015, at 11:02 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dave,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; my understanding is that the presence of common symbols should be treated as a warning
</span><br>
<span class="quotelev2">&gt;&gt; (and hence make install should not fail)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; makes sense ?
</span><br>
<span class="quotelev1">&gt; It should be a warning... are you seeing otherwise in your builds?  Here's the tail end of &quot;make install&quot; on my machine:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----&#226;&#156;&#130;----
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/dgoodell/git/ompi-upstream/_build'
</span><br>
<span class="quotelev1">&gt; WARNING!  Common symbols found:
</span><br>
<span class="quotelev1">&gt;           rtc_base_frame.o: 0000000000000040 C orte_rtc_base
</span><br>
<span class="quotelev1">&gt;        sstore_base_frame.o: 0000000000000008 C orte_sstore_base_global_metadata_filename
</span><br>
<span class="quotelev1">&gt;        sstore_base_frame.o: 0000000000000008 C orte_sstore_base_local_metadata_filename
</span><br>
<span class="quotelev1">&gt;        sstore_base_frame.o: 0000000000000008 C orte_sstore_base_local_snapshot_fmt
</span><br>
<span class="quotelev1">&gt;        sstore_base_frame.o: 0000000000000004 C orte_sstore_context
</span><br>
<span class="quotelev1">&gt;        sstore_base_frame.o: 0000000000000004 C orte_sstore_handle_current
</span><br>
<span class="quotelev1">&gt;        sstore_base_frame.o: 0000000000000004 C orte_sstore_handle_last_stable
</span><br>
<span class="quotelev1">&gt;        routed_base_frame.o: 0000000000000001 C orte_routed_base_wait_sync
</span><br>
<span class="quotelev1">&gt;        routed_base_frame.o: 0000000000000070 C orte_routed_jobfams
</span><br>
<span class="quotelev1">&gt;           ras_base_frame.o: 0000000000000018 C orte_ras_base
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; skipping remaining symbols. To see all symbols, run:
</span><br>
<span class="quotelev1">&gt;    ../config/find_common_syms --top_builddir=. --top_srcdir=.. --objext=o
</span><br>
<span class="quotelev1">&gt; make[3]: [install-exec-hook] Error 1 (ignored)
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/dgoodell/git/ompi-upstream/_build'
</span><br>
<span class="quotelev1">&gt; make[2]: Nothing to be done for `install-data-am'.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/dgoodell/git/ompi-upstream/_build'
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/dgoodell/git/ompi-upstream/_build'
</span><br>
<span class="quotelev1">&gt; ----&#226;&#156;&#130;----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The key bit being: &quot;Error 1 (ignored)&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Dave
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17228.php">http://www.open-mpi.org/community/lists/devel/2015/04/17228.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17234.php">Aurélien Bouteiller: "[OMPI devel] 1.8.5rc1 and OOB on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="17232.php">Nathan Hjelm: "Re: [OMPI devel] Common symbols warning"</a>
<li><strong>In reply to:</strong> <a href="17228.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Common symbols warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17230.php">Nathan Hjelm: "Re: [OMPI devel] Common symbols warning"</a>
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
