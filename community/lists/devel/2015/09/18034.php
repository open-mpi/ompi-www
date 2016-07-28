<?
$subject_val = "Re: [OMPI devel] Remaining MTT errors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 14 14:07:08 2015" -->
<!-- isoreceived="20150914180708" -->
<!-- sent="Mon, 14 Sep 2015 18:07:04 +0000" -->
<!-- isosent="20150914180704" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Remaining MTT errors" -->
<!-- id="0196F4DF-B4D4-43B5-8D37-642E2EACC878_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="55F64FBA.4040500_at_rist.or.jp" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-14 14:07:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18035.php">George Bosilca: "Re: [OMPI devel] HWLOC issue"</a>
<li><strong>Previous message:</strong> <a href="18033.php">Jeff Squyres (jsquyres): "[OMPI devel] MPI-3.1 books now available"</a>
<li><strong>In reply to:</strong> <a href="18031.php">Gilles Gouaillardet: "Re: [OMPI devel] Remaining MTT errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 14, 2015, at 12:40 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; that leads to a few questions :
</span><br>
<span class="quotelev1">&gt; 1) should we handle this scenario (e.g. check config file) in mtt test itself ? (and how ? via MPIT ? )
</span><br>
<p>The tests (sorta) tried to handle this.
<br>
<p>I got some inspiration from Gilles' initial commit, and added a bit to the test suite this morning: it checks MPI_T to see if mpi_param_check is 0 or not.  This is a robust, reliable way to know.  I wrapped it all up in an ompitest utility function, and edited each of the above tests to use it.
<br>
<p>Hopefully, that should fix the problem.
<br>
<p><span class="quotelev1">&gt; 2) should we handle this scenario before running the test ?
</span><br>
<span class="quotelev1">&gt; (e.g. ompi_info ... --all | grep mpi_param_check, and force OMPI_MCA_mpi_param_check=0 environment variable if mpi_param_check is disabled)
</span><br>
<span class="quotelev1">&gt; 3) should we handle this scenario in ompi itself ?
</span><br>
<span class="quotelev1">&gt; (e.g. if the param config file contains a definition, and no related, environment variable is set, then force the environment variable but do not propagate it)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; random/attr-error-code only check mpi_param_check at configure time, and i will fix that from now
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for now, i suggest you comment the mpi_param_check = 0 line from your linux.conf file
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 9/12/2015 9:51 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I&#146;ve closed all the holes I can find in the PMIx integration, and things look pretty good overall. There are a handful of failures still being seen - most of them involving what appear to be unrelated code. I&#146;m not entirely sure I understand the source of the errors, and could really use some help to determine (a) if these are in any way related to PMIx, and if so (b) how.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The errors from my MTT run are here:  <a href="http://mtt.open-mpi.org/index.php?do_redir=2256">http://mtt.open-mpi.org/index.php?do_redir=2256</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any help diagnosing these problems would be greatly appreciated
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18013.php">http://www.open-mpi.org/community/lists/devel/2015/09/18013.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18031.php">http://www.open-mpi.org/community/lists/devel/2015/09/18031.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18035.php">George Bosilca: "Re: [OMPI devel] HWLOC issue"</a>
<li><strong>Previous message:</strong> <a href="18033.php">Jeff Squyres (jsquyres): "[OMPI devel] MPI-3.1 books now available"</a>
<li><strong>In reply to:</strong> <a href="18031.php">Gilles Gouaillardet: "Re: [OMPI devel] Remaining MTT errors"</a>
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
