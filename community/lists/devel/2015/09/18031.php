<?
$subject_val = "Re: [OMPI devel] Remaining MTT errors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 14 00:40:31 2015" -->
<!-- isoreceived="20150914044031" -->
<!-- sent="Mon, 14 Sep 2015 13:40:26 +0900" -->
<!-- isosent="20150914044026" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Remaining MTT errors" -->
<!-- id="55F64FBA.4040500_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="57E76D97-6CD4-4318-BB52-0F67782EE705_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Remaining MTT errors<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-14 00:40:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18032.php">Igor: "Re: [OMPI devel] oshmem examples cannot be built"</a>
<li><strong>Previous message:</strong> <a href="18030.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem examples cannot be built"</a>
<li><strong>In reply to:</strong> <a href="18013.php">Ralph Castain: "[OMPI devel] Remaining MTT errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18034.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Remaining MTT errors"</a>
<li><strong>Reply:</strong> <a href="18034.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Remaining MTT errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>the collective/op, collective/op_mpifh, collective/op_usempi, 
<br>
group/group, onesided/c_lock_illegal and random/attr-error-code fails 
<br>
because your contrib/platform/intel/bend/linux.conf contains the 
<br>
following line
<br>
<p>mpi_param_check = 0
<br>
<p>and this is not handled correctly by ibm test suite.
<br>
<p>for example, in op.c, we handle
<br>
- mpi_param_check is disabled at configure time
<br>
- mpi_param_check is disabled at runtime, via mca cli or environment 
<br>
variable
<br>
*but*
<br>
mpi_param_check being disabled by the config file is not supported.
<br>
<p>if you run
<br>
mpirun --mca mpi_param_check 0 ...
<br>
or
<br>
mpirun --mca mpi_param_check 1 ...
<br>
or
<br>
comment the mpi_param_check = ... from your config file
<br>
<p>this test would run just fine (!)
<br>
<p>that leads to a few questions :
<br>
1) should we handle this scenario (e.g. check config file) in mtt test 
<br>
itself ? (and how ? via MPIT ? )
<br>
2) should we handle this scenario before running the test ?
<br>
(e.g. ompi_info ... --all | grep mpi_param_check, and force 
<br>
OMPI_MCA_mpi_param_check=0 environment variable if mpi_param_check is 
<br>
disabled)
<br>
3) should we handle this scenario in ompi itself ?
<br>
(e.g. if the param config file contains a definition, and no related, 
<br>
environment variable is set, then force the environment variable but do 
<br>
not propagate it)
<br>
<p>random/attr-error-code only check mpi_param_check at configure time, and 
<br>
i will fix that from now
<br>
<p>for now, i suggest you comment the mpi_param_check = 0 line from your 
<br>
linux.conf file
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 9/12/2015 9:51 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;ve closed all the holes I can find in the PMIx integration, and 
</span><br>
<span class="quotelev1">&gt; things look pretty good overall. There are a handful of failures still 
</span><br>
<span class="quotelev1">&gt; being seen - most of them involving what appear to be unrelated code. 
</span><br>
<span class="quotelev1">&gt; I&#146;m not entirely sure I understand the source of the errors, and could 
</span><br>
<span class="quotelev1">&gt; really use some help to determine (a) if these are in any way related 
</span><br>
<span class="quotelev1">&gt; to PMIx, and if so (b) how.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The errors from my MTT run are here: 
</span><br>
<span class="quotelev1">&gt; <a href="http://mtt.open-mpi.org/index.php?do_redir=2256">http://mtt.open-mpi.org/index.php?do_redir=2256</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help diagnosing these problems would be greatly appreciated
</span><br>
<span class="quotelev1">&gt; Ralph
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18013.php">http://www.open-mpi.org/community/lists/devel/2015/09/18013.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18031/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18032.php">Igor: "Re: [OMPI devel] oshmem examples cannot be built"</a>
<li><strong>Previous message:</strong> <a href="18030.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem examples cannot be built"</a>
<li><strong>In reply to:</strong> <a href="18013.php">Ralph Castain: "[OMPI devel] Remaining MTT errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18034.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Remaining MTT errors"</a>
<li><strong>Reply:</strong> <a href="18034.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Remaining MTT errors"</a>
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
